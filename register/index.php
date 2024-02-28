<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>СТАРТ | Регистрация</title>
  <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
  <link rel="stylesheet" href="../css/style.css">
</head><?php
error_reporting(E_ERROR | E_PARSE);
include("../static/config.php");
session_start();
$error = ""; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if it's a registration or login attempt
    if(isset($_POST['register'])) {
        // Registration process
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        // Check if the username already exists
        $check_query = "SELECT id FROM admin WHERE username = ?";
        $check_stmt = $db->prepare($check_query);
        $check_stmt->bind_param("s", $myusername);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            $error = "Username already exists. Please choose another username.";
        } else {
            // Insert the new user into the database
            $insert_query = "INSERT INTO admin (username, passcode) VALUES (?, ?)";
            $insert_stmt = $db->prepare($insert_query);
            $insert_stmt->bind_param("ss", $myusername, $mypassword);
            if ($insert_stmt->execute()) {
                $_SESSION['login_user'] = $myusername;
                header("location: ../dashboard");
            } else {
                $error = "Registration failed. Please try again later.";
            }
        }
    } else {
        // Login process
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT id FROM admin WHERE username = ? and passcode = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $myusername, $mypassword);
        $stmt->execute();
        $stmt->store_result();

        $count = $stmt->num_rows;

        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count == 1) {
            $_SESSION['login_user'] = $myusername;
            header("location: ../dashboard");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
}
?>




<body>

  <div class="form">
    <div class="border">
      <h2>Регистрация</h2>

      <div>
        <form action="" method="post">
          <input style="font-size: 1.2rem;" type="text" name="username" placeholder="Имя пользователя" /><br /><br />
          <input style="font-size: 1.2rem;" type="password" name="password" placeholder="Пароль" /><br /><br />
          <input style="font-size: 1.2rem; width: 90%;" type="submit" value=" Зарегистрироваться " class="submit" /><br />
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
