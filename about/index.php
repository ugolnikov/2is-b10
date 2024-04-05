<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | О нас</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

        .prize {
            width: 20%;
            height: 250px;
            box-shadow: 2.5px 2.5px rgb(227 227 227);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Прелоадер -->
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <?
    require_once("../components/header.php");
    ?>

    <!-- Услуги -->
    <h2 style="text-align: center;">О нас</h2>
    <div class="about-flex" style="display: flex; flex-direction: row; width: 80%;     margin: auto;
    /* text-align: center; */
    display: flex;
    flex-direction: row;
    width: 80%;
    align-items: center;
    align-content: center;
    justify-content: center;">
        <img src="../static/photo_about.avif" alt="About IMG" style="margin-right: 2rem; width: 30%; border-radius: 10px; box-shadow: 2.5px 2.5px rgb(227 227 227);">
        <div class="about-text" style="line-height: 30px; text-align: justify;">
            Добро пожаловать в школу плавания олимпийского резерва "СТАРТ"! Мы являемся ведущим центром подготовки юных спортсменов к достижению высших результатов в плавании.
            <br>
            Наша миссия заключается в развитии и совершенствовании спортивных навыков у детей и подростков, а также в воспитании дисциплины, выносливости и стремления к достижению своих целей.
            <br>
            В школе плавания "СТАРТ" мы предлагаем комплексную программу обучения, разработанную профессиональными тренерами с учетом современных методик и требований олимпийского спорта. Наши тренеры - это высококвалифицированные специалисты, имеющие многолетний опыт работы с детьми и молодежью. Они не только обучают технике плавания, но и внушают детям любовь к спорту, помогают развивать лидерские качества и самодисциплину.
            <br>


        </div>
    </div>
    <div class="about-2" style="text-align: justify;
    margin: auto;
    display: flex;
    margin-top: 2rem;
    line-height: 25px;
    width: 75%;">
        В "СТАРТ" мы стремимся к тому, чтобы каждый наш воспитанник мог раскрыть свой потенциал и достичь успеха на плавательных соревнованиях на любом уровне - от местных турниров до олимпийских игр. Мы гордимся достижениями наших учеников, которые регулярно побеждают на соревнованиях и достигают новых высот в своей спортивной карьере.
        <br>
        Наши ученики не только приобретают навыки плавания, но и формируют дружеские отношения, учатся работать в команде и преодолевать трудности вместе. В "СТАРТ" мы создаем атмосферу взаимопомощи и поддержки, где каждый ребенок чувствует себя важным и ценным членом нашей спортивной семьи.
        <br>
        Присоединяйтесь к нам в школе плавания олимпийского резерва "СТАРТ" и откройте для себя удивительный мир спорта, дружбы и достижений! Наша команда готова помочь вашему ребенку стать настоящим чемпионом в бассейне и в жизни. С нами ваша плавательная мечта обретет свой стартовый пункт к успеху!
    </div>




    <!-- Футер -->
    <div class="footer" style="left:0px; bottom:0px; height:150px; width:100%; margin-top: 150px;">
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