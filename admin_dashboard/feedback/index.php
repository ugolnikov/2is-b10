<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Обращения</title>
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
            <h1 style="text-align: center;">Все обращения</h1>
            <?
            date_default_timezone_set('Asia/Yekaterinburg');
            echo date("Y-m-d H:i:s");
            echo "Часовой пояс: ".date_default_timezone_get();
            ?>
            <h2><a href="../" style="text-decoration: underline;">Назад</a></h2>
        </div>
        <div class="right-bar">
            <!-- Блоки заявок -->
            <?php
            require('../../static/session.php');
            require_once("../../static/config.php");
            error_reporting(E_ERROR | E_PARSE);
            $query = "SELECT * FROM feedback ORDER BY created_at DESC";

            $result = $db->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='news-block' style='padding: 1rem; margin: 1rem; display: flex; flex-wrap: nowrap; align-content: center; justify-content: center; flex-direction: column; align-items: flex-start;'>";
                    echo "<p>Имя: " . $row['name'] . "</p>";
                    echo "<p>Телефон: " . $row['tel'] . "</p>";
                    echo "<p>Сообщение: " . $row['message'] . "</p>";
                    echo "<p>Дата: " . $row['created_at'] . "</p>";

                    echo "<form action='delete_req.php' method='post'>";
                    echo "<input type='hidden' name='req_id' value='" . $row['id'] . "'>";
                    echo "<input type='submit' value='Удалить'>";
                    echo "</form>";

                    echo "</div>";
                    echo "<hr>";
                }
            } else {
                echo "<p style='display: flex; align-items: center; justify-content: center; align-content: center; flex-wrap: nowrap; height: 60%;'>Нет обращений</p>";
            }
            $db->close();
            ?>
        </div>
        <?

        ?>
    </div>




</body>

</html>
