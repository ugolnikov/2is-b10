<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Авторизация</title>
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
        /* Пропускать события указателя мыши через элемент */
    }


    .preloader .loader {
        border: 8px solid #f3f3f3;
        /* Цвет кружка */
        border-top: 8px solid #3498db;
        /* Цвет кружка при загрузке */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        /* Анимация кручения */
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Скрыть прелоадер после загрузки страницы */
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

  if ($stmt_user->error) {
    die('Ошибка выполнения запроса: ' . $stmt_user->error);
  }

  $count_user = $stmt_user->num_rows;

  if ($count_user == 0) {
    $sql_admin = "SELECT id FROM admin WHERE username = ? and passcode = ?";
    $stmt_admin = $db->prepare($sql_admin);
    $stmt_admin->bind_param("ss", $myusername, $mypassword);
    $stmt_admin->execute();
    $stmt_admin->store_result();

    if ($stmt_admin->error) {
      die('Ошибка выполнения запроса: ' . $stmt_admin->error);
    }

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
                    <input style="font-size: 1.2rem;" type="text" name="username"
                        placeholder="Имя пользователя" /><br /><br />
                    <input style="font-size: 1.2rem;" type="password" name="password"
                        placeholder="Пароль" /><br /><br />
                    <input style="font-size: 1.2rem;" type="submit" value=" Войти " class="submit" /><br />
                </form>
                <div>
                    <p style="color: red;"><?php echo $error; ?></p>
                </div>
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
    const video = document.getElementById('bgVideo');
    video.addEventListener('loadeddata', function() {
        document.body.classList.add('loaded');
    });
    </script>
</body>

</html>