<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Школа плавания олимпийского резерва</title>
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

    <!-- Заголовок -->
    <div class="header">
        <a href="/"><img src="../static/logo.png" alt="Logo" class="logo"></a>
        <ul>
            <li><a href="/paid">Услуги</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/news">Новости</a></li>
            <li><a href="/contacts">Контакты</a></li>
            <li><a href="/dashboard">Личный кабинет</a></li>
        </ul>
        <a href="/cart"><svg xmlns="http://www.w3.org/2000/svg" class="cart-icon" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z" />
            </svg></a>
    </div>
    <!-- Основной контент -->
    <div class="main-board">
        <p class="main-img-text">Мы "СТАРТ" и мы гордимся этим!</p>
        <script>
            document.querySelector(".main-img-text").addEventListener('click', () => {
                document.location.href = "/about";
            })
        </script>
        <img src="../static/main.png" alt="Main picture" class="main-img">
    </div>

    <!-- О нас -->
    <div class="about-board">
        <h1>Наши преимущества</h1>
        <div class="blocks">
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="board-icon">
                    <path fill="currentColor" d="m12 21l-7-3.8v-6L1 9l11-6l11 6v8h-2v-6.9l-2 1.1v6zm0-8.3L18.85 9L12 5.3L5.15 9zm0 6.025l5-2.7V12.25L12 15l-5-2.75v3.775zm0-3.775" />
                </svg>
                <h2>
                    Самое популярная школа плавания!
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
                    Организация и участие в плавательных соревнованиях на различных уровнях, включая местные, региональные и национальные мероприятия.
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
                <h2 style="
    margin-bottom: 48px;
    margin-top: 25px;">
                    Гибкий график занятий.
                </h2>
                <p>
                    Возможность выбора удобного расписания занятий для различных возрастов и занятых родителей.
                </p>
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
        <form class="popup">
            <img src="/static/close.svg" class="close-popup">
            <label>
                <input type="text" name="name">
                <div class="label__text">
                    Ваше имя
                </div>
            </label>
            <label>
                <input type="tel" name="tel">
                <div class="label__text">
                    Ваш телефон
                </div>
            </label>
            <label>
                <textarea name="message"></textarea>
                <div class="label__text">
                    Ваше сообщение
                </div>
            </label>
            <button type="submit">Отправить</button>
        </form>
    </div>


    <script>
        // После загрузки страницы скрыть прелоадер с небольшой задержкой
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.body.classList.add('loaded');
            }, 500); // Задержка в миллисекундах (здесь 1000 мс = 1 секунда)
        });
    </script>

    <script src="../static/script.js" defer></script>
</body>


</html>