<?php
error_reporting(E_ERROR | E_PARSE);
include("../static/config.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['register'])) {
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $check_query = "SELECT id FROM admin WHERE username = ?";
        $check_stmt = $db->prepare($check_query);
        $check_stmt->bind_param("s", $myusername);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            $error = "Username already exists. Please choose another username.";
        } else {
            $hashed_password = password_hash($mypassword, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO admin (username, passcode) VALUES (?, ?)";
            $insert_stmt = $db->prepare($insert_query);
            $insert_stmt->bind_param("ss", $myusername, $hashed_password);
            if ($insert_stmt->execute()) {
                $_SESSION['login_user'] = $myusername;
                header("location: ../dashboard");
                exit();
            } else {
                $error = "Registration failed. Please try again later.";
            }
        }
    } else {
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT id, passcode FROM admin WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $myusername);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($user_id, $stored_password);
        $stmt->fetch();

        if ($stmt->num_rows == 1 && password_verify($mypassword, $stored_password)) {
            $_SESSION['login_user'] = $myusername;
            header("location: ../dashboard");
            exit();
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Регистрация</title>
    <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="form">
        <div class="border">
            <h2>Регистрация</h2>

            <div>
                <form action="" method="post">
                    <input style="font-size: 1.2rem;" type="text" name="username" placeholder="Имя пользователя" /><br /><br />
                    <input style="font-size: 1.2rem;" type="password" name="password" placeholder="Пароль" /><br /><br />
                    <input style="font-size: 1.2rem; width: 90%;" type="submit" value=" Зарегистрироваться " class="submit" /><br />
                    <input type="hidden" name="register">
                </form>
                <div><?php echo $error; ?></div>
                <p>Уже зарегистрированы? <a href="../login">Войти</a></p>
                <p><a href="../login">Назад</a></p>
            </div>

        </div>
    </div>
    <video id="bgVideo" preload="true" autoplay loop muted src="../static/water.mp4"></video>

</body>

</html>
