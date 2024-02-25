<?php
include("../static/config.php");
session_start();
$error = ""; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 

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
    $error = "Имя пользователя или пароль не подходят!";
  }
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>СТАРТ | Авторизация</title>
  <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div>
    <div>
      <div><b>Авторизация</b></div>

      <div>

        <form action="" method="post">
          <label>Имя пользователя :</label><input type="text" name="username" /><br /><br />
          <label>Пароль :</label><input type="password" name="password" /><br /><br />
          <input type="submit" value=" Submit " /><br />
        </form>
        <div><?php echo $error; ?></div>
        <p>Нет учетной записи? <a href="../register/">Зарегистрироваться</a></p>
        <p><a href="../">Назад</a></p>


      </div>

    </div>

  </div>

</body>

</html>