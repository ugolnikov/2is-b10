<?php
error_reporting(E_ERROR | E_PARSE);
include("../static/config.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['register'])) {
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $check_query = "SELECT id FROM users WHERE username = ?";
    $check_stmt = $db->prepare($check_query);
    $check_stmt->bind_param("s", $myusername);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
      $error = "Пользователя уже существует.";
    } else {
      $insert_query = "INSERT INTO users (username, passcode) VALUES (?, ?)";
      $insert_stmt = $db->prepare($insert_query);
      $insert_stmt->bind_param("ss", $myusername, $mypassword);
      if ($insert_stmt->execute()) {
        $_SESSION['login_user'] = $myusername;
        header("location: ../dashboard");
        exit();
      } else {
        $error = "При регистрации произошла ошибка!";
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

    if ($stmt->num_rows == 1 && $mypassword == $stored_password) {
      $_SESSION['login_user'] = $myusername;
      header("location: ../dashboard");
      exit();
    } else {
      $error = "Имя пользователя или пароль не подходят!";
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
  <style>
    /* Стили для прелоадера */
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

<body>
  <div class="preloader">
    <div class="loader"></div>
  </div>
  <div class="form">
    <div class="border">
      <h2 style="
            margin-top: 0;
            margin-bottom: 3rem;
            ">Регистрация</h2>

      <div>
        <form action="" method="post">
          <input style="font-size: 1.2rem;" type="text" name="username" placeholder="Имя пользователя" /><br /><br />
          <input style="font-size: 1.2rem;" type="password" name="password" placeholder="Пароль" /><br /><br />
          <input style="font-size: 1.2rem; width: 90%;" type="submit" value=" Зарегистрироваться " class="submit" /><br />
          <input type="hidden" name="register">
        </form>
        <div><?php echo $error; ?></div>
        <p>Уже зарегистрированы? <a href="../login">Войти</a></p>
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
                "><a href="../login">Назад</a></p>
      </div>

    </div>
  </div>
  <video id="bgVideo" preload="true" autoplay loop muted src="../static/water.mp4"></video>
  <script>
    const video = document.getElementById('bgVideo');
    video.addEventListener('loadeddata', function() {
      document.body.classList.add('loaded');
    });
  </script>
</body>

</html>