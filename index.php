<?
include("static/config.php");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Школа плавания олимпийского резерва</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
    <!-- Прелоадер -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <?
    require_once("./components/header.php");
    ?>
    <!-- Основной контент -->
    <div class="main-board">
        <p class="main-img-text">Мы "СТАРТ" и мы гордимся этим!</p>
        <script>
            document.querySelector(".main-img-text").addEventListener('click', () => {
                document.location.href = "/about";
            })
        </script>
        <img src="../static/main.avif" alt="Main picture" class="main-img">
    </div>

    <!-- О нас -->
    <div class="about-board">
        <div class="blocks">
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="board-icon">
                    <path fill="currentColor" d="m12 21l-7-3.8v-6L1 9l11-6l11 6v8h-2v-6.9l-2 1.1v6zm0-8.3L18.85 9L12 5.3L5.15 9zm0 6.025l5-2.7V12.25L12 15l-5-2.75v3.775zm0-3.775" />
                </svg>
                <h2>
                    Самая популярная школа плавания!
                </h2>
                <p>
                    Более 100 тысяч успешных плавцов.
                </p>
            </div>
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="board-icon">
                    <path fill="currentColor" d="M21.98 14H22zM5.35 13c1.19 0 1.42 1 3.33 1c1.95 0 2.09-1 3.33-1c1.19 0 1.42 1 3.33 1c1.95 0 2.09-1 3.33-1c1.19 0 1.4.98 3.31 1v-2c-1.19 0-1.42-1-3.33-1c-1.95 0-2.09 1-3.33 1c-1.19 0-1.42-1-3.33-1c-1.95 0-2.09 1-3.33 1c-1.19 0-1.42-1-3.33-1c-1.95 0-2.09 1-3.33 1v2c1.9 0 2.17-1 3.35-1m13.32 2c-1.95 0-2.09 1-3.33 1c-1.19 0-1.42-1-3.33-1c-1.95 0-2.1 1-3.34 1c-1.24 0-1.38-1-3.33-1c-1.95 0-2.1 1-3.34 1v2c1.95 0 2.11-1 3.34-1c1.24 0 1.38 1 3.33 1c1.95 0 2.1-1 3.34-1c1.19 0 1.42 1 3.33 1c1.94 0 2.09-1 3.33-1c1.19 0 1.42 1 3.33 1v-2c-1.24 0-1.38-1-3.33-1M5.35 9c1.19 0 1.42 1 3.33 1c1.95 0 2.09-1 3.33-1c1.19 0 1.42 1 3.33 1c1.95 0 2.09-1 3.33-1c1.19 0 1.4.98 3.31 1V8c-1.19 0-1.42-1-3.33-1c-1.95 0-2.09 1-3.33 1c-1.19 0-1.42-1-3.33-1c-1.95 0-2.09 1-3.33 1c-1.19 0-1.42-1-3.33-1C3.38 7 3.24 8 2 8v2c1.9 0 2.17-1 3.35-1" />
                </svg>
                <h2>
                    Участие в соревнованиях и мероприятиях.
                </h2>
                <p>
                    Организация и участие в плавательных соревнованиях на различных уровнях, включая местные,
                    региональные и национальные мероприятия.
                </p>
            </div>
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="board-icon">
                    <path fill="currentColor" d="M32.25 6H29v2h3v22H4V8h3V6H3.75A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6" class="clr-i-outline clr-i-outline-path-1" />
                    <path fill="currentColor" d="M8 14h2v2H8z" class="clr-i-outline clr-i-outline-path-2" />
                    <path fill="currentColor" d="M14 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-3" />
                    <path fill="currentColor" d="M20 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-4" />
                    <path fill="currentColor" d="M26 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-5" />
                    <path fill="currentColor" d="M8 19h2v2H8z" class="clr-i-outline clr-i-outline-path-6" />
                    <path fill="currentColor" d="M14 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-7" />
                    <path fill="currentColor" d="M20 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-8" />
                    <path fill="currentColor" d="M26 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-9" />
                    <path fill="currentColor" d="M8 24h2v2H8z" class="clr-i-outline clr-i-outline-path-10" />
                    <path fill="currentColor" d="M14 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-11" />
                    <path fill="currentColor" d="M20 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-12" />
                    <path fill="currentColor" d="M26 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-13" />
                    <path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-outline clr-i-outline-path-14" />
                    <path fill="currentColor" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-outline clr-i-outline-path-15" />
                    <path fill="currentColor" d="M13 6h10v2H13z" class="clr-i-outline clr-i-outline-path-16" />
                    <path fill="none" d="M0 0h36v36H0z" />
                </svg>
                <h2 style="margin-bottom: 14px; margin-top: 20px;">
                    Гибкий график занятий.
                </h2>
                <p>
                    Возможность выбора удобного расписания занятий для различных возрастов и занятых родителей.
                </p>
            </div>
        </div>
        <div class="blocks" style="margin-top: 80px; gap: 10px;">
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="board-icon">
                    <path fill="none" stroke="currentColor" stroke-width="2" d="M16 16c0-1.105-3.134-2-7-2s-7 .895-7 2s3.134 2 7 2s7-.895 7-2ZM2 16v4.937C2 22.077 5.134 23 9 23s7-.924 7-2.063V16M9 5c-4.418 0-8 .895-8 2s3.582 2 8 2M1 7v5c0 1.013 3.582 2 8 2M23 4c0-1.105-3.1-2-6.923-2c-3.824 0-6.923.895-6.923 2s3.1 2 6.923 2S23 5.105 23 4Zm-7 12c3.824 0 7-.987 7-2V4M9.154 4v10.166M9 9c0 1.013 3.253 2 7.077 2C19.9 11 23 10.013 23 9" />
                </svg>
                <h2 style="margin-bottom: 14px; margin-top: 20px;">
                    Результат без лишних затрат.
                </h2>
                <p>
                    Наши цены — приятный сюрприз!
                </p>
            </div>
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="board-icon">
                    <path fill="currentColor" d="M24.865 4.348a1.25 1.25 0 0 0-1.73 0c-2.759 2.643-6.685 4.077-10.037 4.84c-1.66.376-3.139.58-4.202.69A29.035 29.035 0 0 1 7.242 10H7.22A1.25 1.25 0 0 0 6 11.25v9.5c0 4.837 1.243 9.658 4.098 13.775c2.861 4.126 7.29 7.469 13.529 9.418c.243.076.503.076.746 0C36.94 40.016 42 30.497 42 21v-9.75A1.25 1.25 0 0 0 40.78 10h-.022l-.08-.003a29.03 29.03 0 0 1-1.574-.12a35.655 35.655 0 0 1-4.202-.69c-3.353-.762-7.279-2.196-10.037-4.84" />
                </svg>
                <h2 style="margin-bottom: 14px; margin-top: 20px;">
                    Безопасность на первом месте.
                </h2>
                <p>
                    В нашей школе плавания мы ценим вашу безопасность так же, как и ваши навыки в воде!
                </p>
            </div>
        </div>
    </div>


    <!-- Карусель -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="/static/photo (1).avif" alt="photo 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/static/photo (2).avif" alt="photo 2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/static/photo (3).avif" alt="photo 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущее</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующее</span>
        </button>
    </div>



    <div class="main-news">
        <h3 style="text-align: center; margin-top: 2rem;">Новости</h3>
        <?
        $query = "SELECT * FROM news ORDER BY date_added DESC LIMIT 3";

        $result = $db->query($query);
        echo "<div class='main-news-blocks' style='
    display: flex;
    flex-direction: row;
    width: 100%;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-evenly;'>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='main-news-block' style='
            padding: 1rem;
            margin: 1rem;
            display: flex;
            width: 35%;
            flex-wrap: nowrap;
            text-align: justify;
            align-content: center;
            flex-direction: column;
            align-items: center;
            cursor: pointer;'>";
                if ($row['photo_url'] != 'нет фото') {
                    echo "<img src=' " . $row['photo_url'] . "' alt='Photo' class='main-news_img'><br>";
                } else {
                    echo "<div class='main-news_img'><p>Фото отсутствует</p></div><br>";
                }

                echo "<div class='main-text_next_photo'>";
                echo "<p>" . $row['title'] . "</p>";
                echo "</div> <br> </div>";
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
        echo "</div>";
        ?>
    </div>


    <h3 style="text-align: center; margin-top: 2rem;">Услуги</h3>
    <div class="services">

        <form action="/services" method="post">
            <img src="./services/service1.png" alt="Услуга 1">
            <h3>Индивидуальные занятия с тренером</h3>
            <p>Персональные тренировки, нацеленные на развитие индивидуальных навыков плавания и подготовку к
                соревнованиям.</p>
            <li>Одно занятие (60 минут) - 3000 рублей</li>

            <input type="hidden" name="service_id" value="1">
            <input type="hidden" name="price" value="3000">
            <input style="width: 100%!important;" type="submit" value="Добавить в корзину">
        </form>
        <form action="/services" method="post">
            <img src="./services/service2.jpg" alt="Услуга 2">
            <h3>Групповые тренировки по дисциплинам</h3>
            <p>Разделение учеников на группы в соответствии с их уровнем подготовки и тренировочными целями (например,
                баттерфляй, кроль, спиной и прочее).</p>

            <li>Одно занятие (60 минут) - 1500 рублей с ученика</li>

            <input type="hidden" name="service_id" value="2">
            <input type="hidden" name="price" value="1500">
            <input style="width: 100%!important;" type="submit" value="Добавить в корзину">
        </form>
        <form action="/services" method="post">
            <img src="./services/service3.jpg" alt="Услуга 3">
            <h3>Подготовка к соревнованиям</h3>
            <p>Обучение технике, тактике и стратегии для участия в соревнованиях на региональном, национальном и
                международном уровнях.</p>
            <li>Индивидуальная подготовка (60 минут) - 3500 рублей</li>
            <input type="hidden" name="service_id" value="3">
            <input type="hidden" name="price" value="3500">
            <input style="width: 100%!important;" type="submit" value="Добавить в корзину">
        </form>
    </div>




    <div class="trainers">
        <h3 style="text-align: center; margin-top: 2rem;">Тренеры</h3>
        <?
        $query = "SELECT * FROM trainer";

        $result = $db->query($query);
        echo "<div class='main-trainers-blocks' style='
        margin-top: 2rem;
        display: flex;
        flex-direction: row;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        flex-wrap: wrap;'>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='main-trainers-block' style='
                padding: 1rem;
                margin: 1rem;
                display: flex;
                flex-wrap: nowrap;
                align-content: center;
                flex-direction: column;
                align-items: center;'>";
                if ($row['photo_url'] != 'нет фото') {
                    echo "<img src=' " . $row['photo_url'] . "' alt='Photo' class='main-train_img'>";
                } else {
                    echo "<div class='main-train_img'><p>Фото отсутствует</p></div>";
                }

                echo "<div class='main-text_next_photo'>";
                echo "<p style='font-size: large;'>" . $row['secondname'] . "  " . $row['firstname'] . "</p>";
                echo "</div> <br> </div>";
            }
        } else {
            echo "<p style='
                display: flex;
                align-items: center;
                justify-content: center;
                align-content: center;
                flex-wrap: nowrap;
                height: 60%;'>
                Нет тренеров
                </p>";
        }
        echo "</div>";
        $db->close();
        ?>
    </div>


    <div class="where-is-me">
        <div class="contacts">
            <h3>О нас</h3>
            <p>Уровень образования: дополнительное</p>
            <p>Время занятий: выборочное</p>
            <p>Возраста: от 5 до 18 лет</p>
            <h3>Контакты</h3>
            <p>Адрес: г.Пермь, ул. Пушкина, дом 107а</p>
            <p>Телефон: <a href="+73422448921" style="color: black; text-decoration: underline">+7 (342) 244-89-21</a>
            </p>
            <p>Время работы: С 9:00 до 17:00</p>
        </div>
        <div class="map">
            <h3 style="margin-bottom: 3rem;">Мы на карте</h3>
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/oniks/1064300558/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Оникс</a><a href="https://yandex.ru/maps/50/perm/category/college/184106236/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Колледж в Перми</a><a href="https://yandex.ru/maps/50/perm/category/further_education/184106162/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Дополнительное образование в
                    Перми</a><iframe src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=56.221789%2C58.002929&mode=search&oid=1064300558&ol=biz&z=18.2" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <div class="footer">
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
        <form class="popup" action="./feedback_send.php" method="post">
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
            document.querySelector(".preloader").remove();
            // }, 500); 
        });
        const elements = document.getElementsByClassName("main-news-block");
        for (const element of elements) {
            element.addEventListener('click', () => {
                window.location.href = "/news";
            });
        }
    </script>

    <script src="../static/script.js" defer></script>
</body>


</html>