<?php
include("../static/config.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['register'])) {

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);


    $check_query = "SELECT id FROM admin WHERE username = ?";
    $check_stmt = $db->prepare($check_query);
    $check_stmt->bind_param("s", $myusername);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
      $error = "Пользователь уже существует, используйте другие данные.";
    } else {
      $insert_query = "INSERT INTO admin (username, passcode) VALUES (?, ?)";
      $insert_stmt = $db->prepare($insert_query);
      $insert_stmt->bind_param("ss", $myusername, $mypassword);
      if ($insert_stmt->execute()) {
        $_SESSION['login_user'] = $myusername;
        header("location: ../dashboard");
      } else {
        $error = "При регистрации произошла ошибка.";
      }
    }
  } else {
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = ? and passcode = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $myusername, $mypassword);
    $stmt->execute();
    $stmt->store_result();

    $count = $stmt->num_rows;

    if ($count == 1) {
      $_SESSION['login_user'] = $myusername;
      header("location: ../dashboard");
    } else {
      $error = "Имя пользователя или пароль неверны";
    }
  }
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>СТАРТ | Регистрация</title>
  <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div>
    <div>
      <div><b>Регистрация</b></div>

      <div>

        <form action="" method="post">
          <label>Имя пользователя :</label><input type="text" name="username" /><br /><br />
          <label>Пароль :</label><input type="password" name="password" /><br /><br />
          <input type="submit" name="register" value=" Register " /><br />
        </form>
        <div><?php echo $error; ?></div>
        <p>Уже есть учетная запись? <a href="../login/">Войти</a></p>
        <p><a href="../">Назад</a></p>
      </div>

    </div>

  </div>

</body>

</html>