<?php
require('../../static/session.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Личный кабинет</title>
    <link rel="icon" type="image/x-icon" href="../../static/favicon.ico">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <a href="../../"><img src="../../static/logo.png" alt="Logo" class="logo"></a>
        <ul>
            <li><a href="../../services" class="btn-header">Услуги</a></li>
            <li><a href="../../about" class="btn-header">О нас</a></li>
            <li><a href="../../news" class="btn-header">Новости</a></li>
            <li><a href="../../contacts" class="btn-header">Контакты</a></li>
            <li><a href="../../dashboard" class="btn-header">Личный кабинет</a></li>
        </ul>
        <a href="/cart"><svg xmlns="http://www.w3.org/2000/svg" class="cart-icon" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z" />
            </svg></a>
    </div>



    <div class="lk">
        <div class="left-bar">
            <h1 style="text-align: center;">Добавление новостей</h1>
            <form action="" method="post" style="display: flex; flex-wrap: nowrap; flex-direction: column; align-items: center; justify-content: center; align-content: center;">
                <input type="text" id="title" name="title" placeholder="Имя"><br>
                <input type="text" id="title" name="title" placeholder="Фамилия"><br>
                <input type="text" name="photo_url" id="photo_url" placeholder="Ссылка к фото"><br>
                <input type="submit" value="Добавить тренера">
            </form>
            <h3><a href="../" style="text-decoration: underline;">Назад</a></h3>
        </div>
        <div class="right-bar" style="height: fit-content;">
            <!-- Блоки новостей -->
            <?php
            require('../../static/session.php');
            require_once("../../static/config.php");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Получение данных из формы
                $firstname = $_POST['firstname'];
                $secondname = $_POST['secondname'];
                $photo_url = $_POST['photo_url'] != '' ? $_POST['photo_url'] : 'нет фото';

                $query = "INSERT INTO trainer (firstname, secondname, photo_url) VALUES ('$firstname', '$secondname', '$photo_url')";

                $result = $db->query($query);

                if ($result) {
                    echo "Тренер успешно добавлен!";
                } else {
                    echo "Ошибка: " . $db->error;
                }

                $db->close();
                header("Refresh:0");
            }
            ?>

            <?
            error_reporting(E_ERROR | E_PARSE);
            $query = "SELECT * FROM trainer";

            $result = $db->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='news-block' style='
                        padding: 1rem;
                        margin: 1rem;
                        display: flex;
                        flex-wrap: nowrap;
                        align-content: center;
                        justify-content: center;
                        flex-direction: column;
                        align-items: flex-start;
                    '>";
                    echo "<p>Имя" . $row['firstname'] . "</p>";
                    echo "<p>Фамилия" . $row['secondname'] . "</p>";
                    echo "<p>Фото: <br><img src=' " . $row['photo_url'] . "' alt='Photo' class='news_img'> </p>";

                    echo "<form action='delete_news.php' method='post'>";
                    echo "<input type='hidden' name='news_id' value='" . $row['id'] . "'>";
                    echo "<input type='submit' value='Удалить'>";
                    echo "</form>";

                    echo "<form action='edit_news.php' method='post'>";
                    echo "<input type='hidden' name='news_id' value='" . $row['id'] . "'>";
                    echo "<input type='submit' value='Редактировать'>";
                    echo "</form>";

                    echo "</div>";
                    echo "<hr>";
                }
            } else {
                echo "<p style='
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            flex-wrap: nowrap;
            height: 60%;'>
            
            Нет новостей
            </p>";
            }
            $db->close();
            ?>
        </div>
    </div>


</body>

</html>