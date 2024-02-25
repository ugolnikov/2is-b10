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
        <h2>
          Гибкий график занятий.
        </h2>
        <p>
          Возможность выбора удобного расписания занятий для различных возрастов и занятых родителей.
        </p>
      </div>
    </div>
  </div>

  <script>
    // После загрузки страницы скрыть прелоадер с небольшой задержкой
    window.addEventListener('load', function() {
      setTimeout(function() {
        document.body.classList.add('loaded');
      }, 500); // Задержка в миллисекундах (здесь 1000 мс = 1 секунда)
    });
  </script>
</body>

</html>