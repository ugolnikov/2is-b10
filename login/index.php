<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>СТАРТ | Авторизация</title>
  <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .preloader {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
      z-index: 1000;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 1;
      transition: opacity 0.3s ease;
      pointer-events: none;
    }

    ::selection {
      background-color: transparent;
    }

    .preloader .loader {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #3498db;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .loaded .preloader {
      opacity: 0;
    }
  </style>
</head>

<?php
error_reporting(E_ERROR | E_PARSE);
include("../static/config.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $myusername = mysqli_real_escape_string($db, $_POST['username']);
  $mypassword = mysqli_real_escape_string($db, $_POST['password']);

  $sql_user = "SELECT id FROM users WHERE username = ? and passcode = ?";
  $stmt_user = $db->prepare($sql_user);
  $stmt_user->bind_param("ss", $myusername, $mypassword);
  $stmt_user->execute();
  $stmt_user->store_result();

  $count_user = $stmt_user->num_rows;


  if ($count_user == 0) {
    $sql_admin = "SELECT id FROM admin WHERE username = ? and passcode = ?";
    $stmt_admin = $db->prepare($sql_admin);
    $stmt_admin->bind_param("ss", $myusername, $mypassword);
    $stmt_admin->execute();
    $stmt_admin->store_result();

    $count_admin = $stmt_admin->num_rows;

    if ($count_admin == 1) {
      $_SESSION['login_user'] = $myusername;
      header("location: ../admin_dashboard");
      exit();
    }
  }

  if ($count_user == 1) {
    $_SESSION['login_user'] = $myusername;
    header("location: ../dashboard");
  } else {
    $error = "Имя пользователя или пароль не подходят!";
  }
}
?>




<body style="background-image: url('../static/water.mp4');">
  <div class="preloader">
    <div class="loader"></div>
  </div>
  <div class="form">
    <div class="border">
      <h2 style="
      margin-top: 0;
      margin-bottom: 3rem;
      ">Авторизация</h2>

      <div>
        <form action="" method="post">
          <input style="font-size: 1.2rem;" type="text" name="username" placeholder="Имя пользователя" /><br /><br />
          <input style="font-size: 1.2rem;" type="password" name="password" placeholder="Пароль" /><br /><br />
          <input style="font-size: 1.2rem;" type="submit" value=" Войти " class="submit" /><br />
        </form>
        <div><?php echo $error; ?></div>
        <p>Нет учетной записи? <a href="../register">Зарегистрироваться</a></p>
        <p style="
        margin-bottom: 0;
        padding: 0.5rem;
        border: 1px solid;
        color: black;
        width: 25%;
        text-align: center;
        border-radius: 5px;
        background-color: #193441;
        color: #ecf4f7;
        "><a href="../">Назад</a></p>
      </div>

    </div>
  </div>

  <video id="bgVideo" preload="true" autoplay loop muted src="../static/water.mp4"></video>
  <script>
    // Скрипт для скрытия лоадера после загрузки видео
    const video = document.getElementById('bgVideo');

    // Скрыть лоадер при загрузке видео
    video.addEventListener('loadeddata', function() {
      document.body.classList.add('loaded');
    });
  </script>
</body>

</html>