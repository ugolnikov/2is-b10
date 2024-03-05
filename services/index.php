<?
include("../static/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Услуги</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
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

        /* Скрытие прелоадера при выделении текста */
        ::selection {
            background-color: transparent;
            /* Сделать выделенный текст прозрачным */
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

<body>
    <!-- Прелоадер -->
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <div class="header">
        <a href="/"><img src="../static/logo.png" alt="Logo" class="logo"></a>
        <ul>
            <li><a href="../services" class="btn-header">Услуги</a></li>
            <li><a href="../about" class="btn-header">О нас</a></li>
            <li><a href="../news" class="btn-header">Новости</a></li>
            <li><a href="../contacts" class="btn-header">Контакты</a></li>
            <li><a href="../dashboard" class="btn-header">Личный кабинет</a></li>
        </ul>
        <a href="/cart"><svg xmlns="http://www.w3.org/2000/svg" class="cart-icon" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z" />
            </svg></a>
    </div>

    <!-- Услуги -->
    <h2>Выберите услугу:</h2>
    <form action="" method="post">
        <div class="service">
            <img src="service1.jpg" alt="Услуга 1">
            <p>Услуга 1</p>
            <input type="hidden" name="service_id" value="1">
            <input type="submit" value="Добавить в корзину">
        </div>
        <div class="service">
            <img src="service2.jpg" alt="Услуга 2">
            <p>Услуга 2</p>
            <input type="hidden" name="service_id" value="2">
            <input type="submit" value="Добавить в корзину">
        </div>
        <div class="service">
            <img src="service3.jpg" alt="Услуга 3">
            <p>Услуга 3</p>
            <input type="hidden" name="service_id" value="3">
            <input type="submit" value="Добавить в корзину">
        </div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_SESSION['login_user'])) {

            $user_id = $_SESSION['login_user'];
            $service_id = $_POST['service_id'];
            $quantity = 1;

            $sql = "INSERT INTO cart (user_id, service_id, quantity) VALUES ($user_id, $service_id, $quantity)";

            if ($db->query($sql) === TRUE) {
                header("URL = ../cart");
            } else {
                echo "Ошибка при добавлении услуги в корзину: " . $db->error;
            }
        } else {
            header("URL =../login");
        }
    }

    ?>




    <!-- Футер -->
    <div class="footer" style="position:fixed; left:0px; bottom:0px; height:150px; width:100%; margin-top: 150px;">
        <div class="text">
            Созданно: <br>Угольников Д. О. <b>2-ИС</b>
        </div>
        <div class="links">
            <svg onclick="window.location.href = ('https://vk.com/hackerlamer/')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4.26 4.26C3 5.532 3 7.566 3 11.64v.72c0 4.068 0 6.102 1.26 7.38C5.532 21 7.566 21 11.64 21h.72c4.068 0 6.102 0 7.38-1.26C21 18.468 21 16.434 21 12.36v-.72c0-4.068 0-6.102-1.26-7.38C18.468 3 16.434 3 12.36 3h-.72C7.572 3 5.538 3 4.26 4.26m1.776 4.218H8.1c.066 3.432 1.578 4.884 2.778 5.184V8.478h1.938v2.958c1.182-.126 2.43-1.476 2.85-2.964h1.932a5.717 5.717 0 0 1-2.628 3.738a5.92 5.92 0 0 1 3.078 3.756h-2.13c-.456-1.422-1.596-2.526-3.102-2.676v2.676h-.24c-4.104 0-6.444-2.808-6.54-7.488" />
            </svg>
            <svg onclick="window.location.href = ('https://web.telegram.org/')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12.001 22c-5.523 0-10-4.477-10-10s4.477-10 10-10s10 4.477 10 10s-4.477 10-10 10m-3.11-8.83l.013-.007l.87 2.87c.112.311.266.367.453.341c.188-.025.287-.126.41-.244l1.188-1.148l2.55 1.888c.466.257.801.124.917-.432l1.658-7.822c.183-.728-.139-1.02-.703-.788l-9.733 3.76c-.664.266-.66.638-.12.803z" />
            </svg>
            <svg onclick="window.location.href = ('https://discord.com/')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19.303 5.337A17.32 17.32 0 0 0 14.963 4c-.191.329-.403.775-.552 1.125a16.592 16.592 0 0 0-4.808 0C9.454 4.775 9.23 4.329 9.05 4a17.075 17.075 0 0 0-4.342 1.337C1.961 9.391 1.218 13.35 1.59 17.255a17.69 17.69 0 0 0 5.318 2.664a12.94 12.94 0 0 0 1.136-1.836c-.627-.234-1.22-.52-1.794-.86c.149-.106.297-.223.435-.34c3.46 1.582 7.207 1.582 10.624 0c.149.117.287.234.435.34c-.573.34-1.167.626-1.793.86a12.94 12.94 0 0 0 1.135 1.836a17.594 17.594 0 0 0 5.318-2.664c.457-4.52-.722-8.448-3.1-11.918M8.52 14.846c-1.04 0-1.889-.945-1.889-2.101c0-1.157.828-2.102 1.89-2.102c1.05 0 1.91.945 1.888 2.102c0 1.156-.838 2.1-1.889 2.1m6.974 0c-1.04 0-1.89-.945-1.89-2.101c0-1.157.828-2.102 1.89-2.102c1.05 0 1.91.945 1.889 2.102c0 1.156-.828 2.1-1.89 2.1" />
            </svg>
        </div>
        <div class="open-popup">
            <a href="#">
                Обратная связь
            </a>
        </div>
    </div>

    <div class="popup__bg">
        <form class="popup" action="../feedback_send.php" method="post">
            <img src="/static/close.svg" class="close-popup" alt="close">
            <label>
                <input type="text" name="name" id="name">
                <div class="label__text">
                    Ваше имя
                </div>
            </label>
            <label>
                <input type="tel" name="tel" id="tel">
                <div class="label__text">
                    Ваш телефон
                </div>
            </label>
            <label>
                <textarea name="message" id="message"></textarea>
                <div class="label__text">
                    Ваше сообщение
                </div>
            </label>
            <button type="submit">Отправить</button>
        </form>
    </div>


    <script>
        window.addEventListener('load', function() {
            // setTimeout(function() {
            document.body.classList.add('loaded');
            // }, 500); 
        });
    </script>

    <script src="../static/script.js" defer></script>
</body>


</html>