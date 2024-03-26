<!-- Header -->
<? echo "
<nav class='navbar navbar-light bg-light sticky-top'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='/'><img src='../static/logo.png' alt='logo' class='logo'>СТАРТ | Школа плавания</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasDarkNavbar' aria-controls='offcanvasDarkNavbar' aria-label='Меню'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='offcanvas offcanvas-end text-bg-light' tabindex='-1' id='offcanvasDarkNavbar' aria-labelledby='offcanvasDarkNavbarLabel'>
            <div class='offcanvas-body'>
                <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='../'>Главная</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../services/'>Услуги</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../about/'>О нас</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../news/'>Новости</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../contacts/'>Контакты</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../dashboard/'>Личный кабинет</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../cart/'>Корзина</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class='header'>
    <a href='/'><img src='../static/logo.png' alt='Logo' class='logo'></a>
    <ul>
        <li><a href='../services' class='btn-header'>Услуги</a></li>
        <li><a href='../about' class='btn-header'>О нас</a></li>
        <li><a href='../news' class='btn-header'>Новости</a></li>
        <li><a href='../contacts' class='btn-header'>Контакты</a></li>
        <li><a href='../dashboard' class='btn-header'>Личный кабинет</a></li>
    </ul>
    <a href='/cart'>
        <svg xmlns='http://www.w3.org/2000/svg' class='cart-icon' width='1em' height='1em' viewBox='0 0 24 24' style='height: 5rem; width: 5rem;'>
            <path fill='currentColor' d='M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z' />
        </svg>
    </a>
</div>"
?>