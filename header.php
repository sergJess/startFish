<?php

$request = 'http://' . ($_SERVER['SERVER_NAME'] === 'localhost')
    ? str_replace("/startfish", "", $_SERVER['REQUEST_URI'])
    : $_SERVER['REQUEST_URI'];

$request = explode('?', $request)[0];
$request = explode('.', $request)[0];
$request = explode('/', $request)[1];

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.96">
    <title>Startfish</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dotCursor.css?<?= md5(time()); ?>">
    <link rel="stylesheet" href="css/main.css?<?= md5(time()); ?>">
    <link rel="stylesheet" href="css/media.css?<?= md5(time()); ?>">
</head>

<body class="<?php echo ($request == 'stamps') ? 'stamps' : '' ?>">
    <div class="project" id="offer-1">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Расскажите коротко <br>
                            о вашем проекте
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs">
                            <div class="project_inputs_name">
                                О проекте
                            </div>
                        </div>
                        <div class="project_services">
                            <div class="project_services_name">
                                Выберите услугу
                            </div>
                            <div class="project_services_wrap">
                                <button class="project_services_item active">
                                    Сайт
                                </button>
                                <button class="project_services_item">
                                    фирменный стиль
                                </button>
                                <button class="project_services_item">
                                    печати
                                </button>
                            </div>
                        </div>
                        <div class="project_inputs">
                            <div class="project_inputs_wrap with-textarea">
                                <div>
                                    <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                    <div class="project_text project_text_show">
                                        Укажите вид деятельности. На какую тему проект? <br>
                                        Вас интересует шаблонное решение или индивидуальный проект? <br>
                                        Напишите, если удобнее общаться в мессенджере.
                                    </div>
                                </div>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn size-up">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a>
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="templates.php" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link" id="web-pages-mobile">
                                Web-сайты
                            </a>
                            <!-- <a href="stamps.php" class="footer_link">
                                Печати
                            </a> -->
                            <a href="seo.php" class="footer_link">
                                Seo
                            </a>
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project" id="offer-2">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close2">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Оставьте контактную <br>
                            информацию
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs project_inputs_2">
                            <div class="project_inputs_wrap with-textarea">
                                <div>
                                    <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                    <div class="project_text project_text_show">
                                        Укажите вид деятельности. На какую тему проект? <br>
                                        Вас интересует шаблонное решение или индивидуальный проект? <br>
                                        Напишите, если удобнее общаться в мессенджере.
                                    </div>
                                </div>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn size-up">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a>
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="templates.php" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link" id="web-pages-mobile-2">
                                Web-сайты
                            </a>
                            <!-- <a href="stamps.php" class="footer_link">
                                Печати
                            </a> -->
                            <a href="seo.php" class="footer_link">
                                Seo
                            </a>
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project" id="offer-stamps-1">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close3">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Расскажите коротко <br>
                            о вашем проекте
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs">
                            <div class="project_inputs_name">
                                О проекте
                            </div>
                        </div>
                        <div class="project_services">
                            <div class="project_services_name">
                                Выберите услугу
                            </div>
                            <div class="project_services_wrap">
                                <button class="project_services_item active">
                                    Сайт
                                </button>
                                <button class="project_services_item">
                                    фирменный стиль
                                </button>
                                <!-- <button class="project_services_item">
                                    печати
                                </button> -->
                            </div>
                        </div>
                        <div class="project_inputs">
                            <div class="project_inputs_wrap with-textarea">
                                <div>
                                    <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                    <div class="project_text project_text_show">
                                        Укажите данные для печати. <br>
                                        Кратко расскажите о пожеланиях. <br>
                                        Напишите, если удобнее общаться в мессенджере.
                                    </div>
                                </div>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn size-up">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a>
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="templates.php" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link" id="web-pages-mobile">
                                Web-сайты
                            </a>
                            <!-- <a href="stamps.php" class="footer_link">
                                Печати
                            </a> -->
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project" id="offer-stamps-2">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close4">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Оставьте контактную <br>
                            информацию
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами <br>
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Размер оснастки
                        </div>
                        <div class="project_inputs_desc">
                            Выберите размер автоматической оснастки
                        </div>
                        <div class="project_inputs_sizes">
                            <div class="project_inputs_size">
                                <input type="radio" id="size-1" name="size">
                                <label for="size-1">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_220)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M56.4512 37.2056V36.4047L57.4672 35.4119C59.9124 33.0541 61.0289 31.8132 61.0289 30.3467C61.0289 29.3652 60.5711 28.4514 59.142 28.4514C58.2711 28.4514 57.5454 28.9027 57.1099 29.2749L56.6968 28.3499C57.3444 27.7971 58.3046 27.3684 59.3988 27.3684C61.4644 27.3684 62.3352 28.8011 62.3352 30.1774C62.3352 31.9599 61.0512 33.4039 59.0303 35.3781L58.2823 36.0888V36.1226H62.5697V37.2056H56.4512Z" fill="#2B2A29" />
                                            <path d="M69.4809 28.4514C69.213 28.4401 68.878 28.4626 68.5095 28.5303C66.4663 28.8575 65.3945 30.3466 65.1823 31.9598H65.2158C65.6736 31.3393 66.4886 30.8317 67.5493 30.8317C69.2465 30.8317 70.4411 32.0839 70.4411 33.9566C70.4411 35.8293 69.2465 37.3861 67.2479 37.3861C65.2493 37.3861 63.876 35.7729 63.876 33.2572C63.876 31.3506 64.5347 29.8502 65.4949 28.8913C66.2877 28.1016 67.3484 27.6053 68.5654 27.4586C68.945 27.4022 69.2688 27.3796 69.5033 27.3796V28.4514H69.4809ZM69.1125 34.0356C69.1125 32.648 68.3309 31.8132 67.1362 31.8132C66.3547 31.8132 65.6178 32.287 65.2605 33.009C65.1823 33.1556 65.1265 33.3361 65.1265 33.573C65.1377 35.1637 65.8746 36.3595 67.2479 36.3595C68.3532 36.3595 69.1013 35.4232 69.1013 34.0356H69.1125Z" fill="#2B2A29" />
                                            <path d="M75.7555 27.515L74.3599 29.3764V29.4103L76.5818 29.117V30.1323L74.3599 29.8502V29.8954L75.7779 31.6778L74.8512 32.2193L73.9468 30.1323H73.9133L72.9754 32.2306L72.138 31.6891L73.5337 29.8728V29.8277L71.3564 30.121V29.1057L73.5225 29.3877V29.3539L72.138 27.5263L73.0312 27.0074L73.9468 29.0944H73.9803L74.8847 26.9961L75.7667 27.515H75.7555Z" fill="#2B2A29" />
                                            <path d="M78.4465 36.2806C78.7256 36.3145 79.0494 36.2806 79.496 36.2355C80.2441 36.134 80.9586 35.8294 81.4946 35.2992C82.131 34.7238 82.5888 33.8664 82.7674 32.7383H82.7228C82.1868 33.3926 81.4276 33.7649 80.4562 33.7649C78.7479 33.7649 77.6426 32.4563 77.6426 30.798C77.6426 28.9704 78.9489 27.3572 80.914 27.3572C82.8791 27.3572 84.0849 28.9478 84.0849 31.4523C84.0849 33.5619 83.3815 35.051 82.4325 35.976C81.6956 36.7093 80.6795 37.1493 79.6523 37.2734C79.1834 37.3523 78.7703 37.3636 78.4576 37.3523V36.2806H78.4465ZM78.9154 30.7303C78.9154 31.9374 79.6412 32.7834 80.7577 32.7834C81.6286 32.7834 82.3096 32.3548 82.6446 31.7681C82.7228 31.6328 82.7674 31.4974 82.7674 31.2718C82.7674 29.6134 82.1645 28.3499 80.7912 28.3499C79.697 28.3499 78.9154 29.3314 78.9154 30.719V30.7303Z" fill="#2B2A29" />
                                            <path d="M87.2898 29.9968H88.8865L90.1705 33.6294C90.3603 34.1709 90.6617 35.0395 90.818 35.6149H90.8516C91.019 35.0621 91.4098 33.934 91.7113 33.1443L92.8501 30.0081H94.4579L94.9604 37.2168H93.721L93.5535 33.776C93.52 32.9864 93.4642 32.0839 93.4307 31.2039H93.3861C93.1962 31.8582 92.9841 32.4223 92.5933 33.5391L91.22 37.1717H90.2933L89.0205 33.5955C88.786 32.9299 88.4734 31.8808 88.2947 31.2152H88.2389C88.2054 32.0613 88.1831 33.0202 88.1384 33.8099L87.9486 37.2168H86.7539L87.301 30.0081L87.2898 29.9968Z" fill="#2B2A29" />
                                            <path d="M96.7137 29.9968H98.3103L99.5943 33.6294C99.7841 34.1709 100.086 35.0395 100.242 35.6149H100.275C100.443 35.0621 100.834 33.934 101.135 33.1443L102.274 30.0081H103.882L104.384 37.2168H103.145L102.977 33.776C102.944 32.9864 102.888 32.0839 102.855 31.2039H102.81C102.62 31.8582 102.408 32.4223 102.017 33.5391L100.644 37.1717H99.7171L98.4443 33.5955C98.2098 32.9299 97.8972 31.8808 97.7185 31.2152H97.6627C97.6292 32.0613 97.6069 33.0202 97.5622 33.8099L97.3724 37.2168H96.1777L96.7248 30.0081L96.7137 29.9968Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_220">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </label>
                                <div class="price">
                                    750 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-2" name="size">
                                <label for="size-2">
                                    <svg width="149" height="69" viewBox="0 0 149 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_315)">
                                            <path d="M148.676 3.70288H0.3125V68.6885H148.676V3.70288Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.80226L25.4678 5.18195V2.59097L27.1537 0L28.8397 2.59097V5.18195L27.1537 2.80226ZM26.8411 65.6306V2.59097H27.4775V65.6306H26.8411ZM27.1537 65.4193L28.8397 63.0396V65.6306L27.1537 68.2216L25.4678 65.6306V63.0396L27.1537 65.4193Z" fill="#2B2A29" />
                                            <path d="M144.578 18.3481L142.189 16.6689H144.79L147.392 18.3481L144.79 20.0272H142.189L144.578 18.3481ZM3.69525 18.0367H144.79V18.6706H3.69525V18.0367ZM3.90739 18.3481L6.29675 20.0272H3.69525L1.09375 18.3481L3.69525 16.6689H6.29675L3.90739 18.3481Z" fill="#2B2A29" />
                                            <path d="M56.4512 36.674V35.8845L57.4672 34.9059C59.9124 32.5818 61.0289 31.3586 61.0289 29.913C61.0289 28.9455 60.5711 28.0448 59.142 28.0448C58.2711 28.0448 57.5454 28.4896 57.1099 28.8566L56.6968 27.9447C57.3444 27.3999 58.3046 26.9773 59.3988 26.9773C61.4644 26.9773 62.3352 28.3895 62.3352 29.7573C62.3352 31.5143 61.0512 32.9377 59.0303 34.8837L58.2823 35.5842V35.6176H62.5697V36.6851H56.4512V36.674Z" fill="#2B2A29" />
                                            <path d="M70.2293 27.1328V27.9891L66.0535 36.6738H64.7137L68.8671 28.2337V28.2003H64.1777V27.1328H70.2181H70.2293Z" fill="#2B2A29" />
                                            <path d="M75.7555 27.1217L74.3599 28.9566V28.9899L76.5818 28.7008V29.7016L74.3599 29.4236V29.4681L75.7779 31.225L74.8512 31.7588L73.9468 29.7016H73.9133L72.9754 31.7699L72.138 31.2473L73.5337 29.457V29.4125L71.3564 29.7016V28.7008L73.5225 28.9788V28.9454L72.138 27.144L73.0312 26.6325L73.9468 28.6897H73.9803L74.8847 26.6213L75.7667 27.1329L75.7555 27.1217Z" fill="#2B2A29" />
                                            <path d="M81.4056 28.3339H81.3721L79.7085 29.2346L79.4629 28.256L81.5508 27.144H82.6561V36.6851H81.4056V28.345V28.3339Z" fill="#2B2A29" />
                                            <path d="M92.5259 31.8034C92.5259 35.0505 91.2978 36.8408 89.1987 36.8408C87.3229 36.8408 86.0501 35.0949 86.0166 31.9368C86.0166 28.7231 87.4123 26.9773 89.3662 26.9773C91.3201 26.9773 92.5371 28.7676 92.5371 31.8034H92.5259ZM87.3229 31.948C87.3229 34.4277 88.0933 35.84 89.2657 35.84C90.572 35.84 91.2084 34.2943 91.2084 31.859C91.2084 29.4237 90.6167 27.967 89.2657 27.967C88.1492 27.967 87.3229 29.3459 87.3229 31.948Z" fill="#2B2A29" />
                                            <path d="M97.3387 29.5684H98.9353L100.219 33.149C100.409 33.6828 100.711 34.539 100.867 35.1062H100.9C101.068 34.5613 101.459 33.4493 101.76 32.6709L102.899 29.5684H104.507L105.009 36.6741H103.77L103.602 33.2825C103.569 32.5041 103.513 31.6145 103.48 30.7471H103.435C103.245 31.392 103.033 31.9481 102.642 33.0489L101.269 36.6296H100.342L99.0693 33.1045C98.8348 32.4485 98.5222 31.4143 98.3435 30.7582H98.2877C98.2542 31.5922 98.2319 32.5374 98.1872 33.3158L97.9974 36.6741H96.8027L97.3498 29.5684H97.3387Z" fill="#2B2A29" />
                                            <path d="M106.762 29.5684H108.358L109.642 33.149C109.832 33.6828 110.133 34.539 110.29 35.1062H110.323C110.491 34.5613 110.881 33.4493 111.183 32.6709L112.322 29.5684H113.93L114.432 36.6741H113.193L113.025 33.2825C112.992 32.5041 112.936 31.6145 112.902 30.7471H112.858C112.668 31.392 112.456 31.9481 112.065 33.0489L110.692 36.6296H109.765L108.492 33.1045C108.258 32.4485 107.945 31.4143 107.766 30.7582H107.711C107.677 31.5922 107.655 32.5374 107.61 33.3158L107.42 36.6741H106.226L106.773 29.5684H106.762Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_315">
                                                <rect width="149" height="69" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    800 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-3" name="size">
                                <label for="size-3">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_232)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M47.1512 35.7165C47.5197 35.9421 48.3571 36.3144 49.2726 36.3144C50.9251 36.3144 51.4498 35.2539 51.4387 34.4417C51.4275 33.0879 50.2105 32.5013 48.96 32.5013H48.2343V31.5198H48.96C49.8979 31.5198 51.0926 31.0235 51.0926 29.8841C51.0926 29.1057 50.6013 28.4288 49.4178 28.4288C48.6474 28.4288 47.9105 28.7672 47.4974 29.0718L47.1401 28.1242C47.6537 27.7519 48.625 27.3796 49.6634 27.3796C51.5503 27.3796 52.4101 28.5078 52.4101 29.6923C52.4101 30.7076 51.8071 31.5537 50.646 31.9824V32.0162C51.8295 32.2418 52.7673 33.1331 52.7785 34.4868C52.7785 36.0323 51.5727 37.3861 49.2838 37.3861C48.2119 37.3861 47.2629 37.0476 46.7939 36.7318L47.1512 35.739V35.7165Z" fill="#2B2A29" />
                                            <path d="M56.1731 32.1066C55.1012 31.5989 54.6434 30.7641 54.6434 29.9293C54.6434 28.3951 55.9274 27.3572 57.6245 27.3572C59.478 27.3572 60.427 28.5191 60.427 29.7375C60.427 30.561 60.0139 31.4523 58.8304 32.005V32.0502C60.0251 32.524 60.762 33.3926 60.762 34.5546C60.762 36.2468 59.3328 37.3636 57.5017 37.3636C55.5031 37.3636 54.2861 36.1678 54.2861 34.7577C54.2861 33.5393 55.0119 32.6594 56.1842 32.1517V32.1066H56.1731ZM59.4333 34.6787C59.4333 33.5167 58.6182 32.9414 57.3231 32.5691C56.2066 32.8963 55.6036 33.6521 55.6036 34.5772C55.559 35.5473 56.2959 36.4047 57.5241 36.4047C58.7522 36.4047 59.4445 35.6714 59.4445 34.6787H59.4333ZM55.8716 29.839C55.8604 30.8092 56.5973 31.3282 57.7027 31.6215C58.5289 31.3395 59.1653 30.7415 59.1653 29.8616C59.1653 29.0832 58.7076 28.2822 57.5464 28.2822C56.4745 28.2822 55.8828 28.993 55.8828 29.8278L55.8716 29.839Z" fill="#2B2A29" />
                                            <path d="M66.154 27.515L64.7583 29.3764V29.4103L66.9802 29.117V30.1323L64.7583 29.8502V29.8954L66.1763 31.6778L65.2496 32.2193L64.3452 30.1323H64.3117L63.3738 32.2306L62.5364 31.6891L63.9321 29.8728V29.8277L61.7549 30.121V29.1057L63.9209 29.3877V29.3539L62.5364 27.5263L63.4297 27.0074L64.3452 29.0944H64.3787L65.2831 26.9961L66.1651 27.515H66.154Z" fill="#2B2A29" />
                                            <path d="M70.8998 28.7447H70.8663L69.2027 29.6585L68.957 28.6657L71.0449 27.5376H72.1503V37.2169H70.8998V28.756V28.7447Z" fill="#2B2A29" />
                                            <path d="M79.6532 37.2057V34.5546H75.1982V33.7085L79.4745 27.5264H80.8702V33.5393H82.21V34.5546H80.8702V37.2057H79.642H79.6532ZM79.6532 33.5393V30.3128C79.6532 29.8052 79.6643 29.2975 79.6978 28.7899H79.6532C79.3629 29.3539 79.1172 29.7713 78.8604 30.2226L76.5157 33.5167V33.5505H79.6532V33.5393Z" fill="#2B2A29" />
                                            <path d="M85.8826 29.9968H87.4792L88.7632 33.6294C88.953 34.1709 89.2545 35.0395 89.4108 35.6149H89.4443C89.6118 35.0621 90.0026 33.934 90.304 33.1443L91.4429 30.0081H93.0507L93.5531 37.2168H92.3138L92.1463 33.776C92.1128 32.9864 92.057 32.0839 92.0235 31.2039H91.9788C91.789 31.8582 91.5769 32.4223 91.1861 33.5391L89.8128 37.1717H88.8861L87.6132 33.5955C87.3788 32.9299 87.0661 31.8808 86.8875 31.2152H86.8316C86.7982 32.0613 86.7758 33.0202 86.7312 33.8099L86.5414 37.2168H85.3467L85.8938 30.0081L85.8826 29.9968Z" fill="#2B2A29" />
                                            <path d="M95.3064 29.9968H96.9031L98.1871 33.6294C98.3769 34.1709 98.6783 35.0395 98.8347 35.6149H98.8682C99.0356 35.0621 99.4264 33.934 99.7279 33.1443L100.867 30.0081H102.475L102.977 37.2168H101.738L101.57 33.776C101.537 32.9864 101.481 32.0839 101.447 31.2039H101.403C101.213 31.8582 101.001 32.4223 100.61 33.5391L99.2366 37.1717H98.3099L97.0371 33.5955C96.8026 32.9299 96.49 31.8808 96.3113 31.2152H96.2555C96.222 32.0613 96.1997 33.0202 96.155 33.8099L95.9652 37.2168H94.7705L95.3176 30.0081L95.3064 29.9968Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_232">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    950 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-4" name="size">
                                <label for="size-4">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_245)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M50.8465 37.2057V34.5546H46.3916V33.7085L50.6679 27.5264H52.0635V33.5393H53.4034V34.5546H52.0635V37.2057H50.8465ZM50.8465 33.5393V30.3128C50.8465 29.8052 50.8577 29.2975 50.8912 28.7899H50.8465C50.5562 29.3539 50.3106 29.7713 50.0538 30.2226L47.7091 33.5167V33.5505H50.8465V33.5393Z" fill="#2B2A29" />
                                            <path d="M60.6277 27.5264V28.395L56.4519 37.2057H55.1121L59.2656 28.6432V28.6094H54.5762V27.5264H60.6166H60.6277Z" fill="#2B2A29" />
                                            <path d="M66.154 27.515L64.7583 29.3764V29.4103L66.9802 29.117V30.1323L64.7583 29.8502V29.8954L66.1763 31.6778L65.2496 32.2193L64.3452 30.1323H64.3117L63.3738 32.2306L62.5364 31.6891L63.9321 29.8728V29.8277L61.7549 30.121V29.1057L63.9209 29.3877V29.3539L62.5364 27.5263L63.4297 27.0074L64.3452 29.0944H64.3787L65.2719 26.9961L66.154 27.515Z" fill="#2B2A29" />
                                            <path d="M70.8988 28.7447H70.8653L69.2017 29.6585L68.9561 28.6657L71.0551 27.5376H72.1605V37.2169H70.91V28.756L70.8988 28.7447Z" fill="#2B2A29" />
                                            <path d="M77.4197 32.1066C76.3478 31.5989 75.8901 30.7641 75.8901 29.9293C75.8901 28.3951 77.1741 27.3572 78.8712 27.3572C80.7246 27.3572 81.6737 28.5191 81.6737 29.7375C81.6737 30.561 81.2605 31.4523 80.0882 32.005V32.0502C81.2829 32.524 82.0198 33.3926 82.0198 34.5546C82.0198 36.2468 80.5906 37.3636 78.7595 37.3636C76.761 37.3636 75.5439 36.1678 75.5439 34.7577C75.5439 33.5393 76.2697 32.6594 77.442 32.1517V32.1066H77.4197ZM80.6799 34.6787C80.6799 33.5167 79.8649 32.9414 78.5697 32.5691C77.4532 32.8963 76.8503 33.6521 76.8503 34.5772C76.8056 35.5473 77.5425 36.4047 78.7707 36.4047C79.9989 36.4047 80.6799 35.6714 80.6799 34.6787ZM77.1182 29.839C77.1071 30.8092 77.844 31.3282 78.9493 31.6215C79.7756 31.3395 80.412 30.7415 80.412 29.8616C80.412 29.0832 79.9542 28.2822 78.793 28.2822C77.7212 28.2822 77.1294 28.993 77.1294 29.8278L77.1182 29.839Z" fill="#2B2A29" />
                                            <path d="M85.8826 29.9968H87.4792L88.7632 33.6294C88.953 34.1709 89.2545 35.0395 89.4108 35.6149H89.4443C89.6118 35.0621 90.0026 33.934 90.304 33.1443L91.4429 30.0081H93.0507L93.5531 37.2168H92.3138L92.1463 33.776C92.1128 32.9864 92.057 32.0839 92.0235 31.2039H91.9788C91.789 31.8582 91.5769 32.4223 91.1861 33.5391L89.8128 37.1717H88.8861L87.6132 33.5955C87.3788 32.9299 87.0661 31.8808 86.8875 31.2152H86.8316C86.7982 32.0613 86.7758 33.0202 86.7312 33.8099L86.5414 37.2168H85.3467L85.8938 30.0081L85.8826 29.9968Z" fill="#2B2A29" />
                                            <path d="M95.3056 29.9968H96.9022L98.1862 33.6294C98.376 34.1709 98.6775 35.0395 98.8338 35.6149H98.8673C99.0236 35.0621 99.4256 33.934 99.727 33.1443L100.866 30.0081H102.474L102.976 37.2168H101.737L101.58 33.776C101.547 32.9864 101.491 32.0839 101.458 31.2039H101.413C101.223 31.8582 101.011 32.4223 100.62 33.5391L99.2469 37.1717H98.3202L97.0585 33.5955C96.8241 32.9299 96.5114 31.8808 96.3328 31.2152H96.277C96.2435 32.0613 96.2211 33.0202 96.1765 33.8099L95.9867 37.2168H94.792L95.3391 30.0081L95.3056 29.9968Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_245">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    950 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-5" name="size">
                                <label for="size-5">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_271)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M62.1681 28.632H58.517L58.1486 31.1138C58.3719 31.08 58.5729 31.0687 58.9301 31.0687C59.6782 31.0687 60.404 31.2154 60.9957 31.5877C61.7438 32.0051 62.369 32.8512 62.369 34.0582C62.369 35.9535 60.8841 37.3636 58.8073 37.3636C57.7578 37.3636 56.8869 37.0703 56.418 36.7657L56.7418 35.773C57.1437 36.0099 57.9253 36.3032 58.8073 36.3032C60.0132 36.3032 61.0739 35.5022 61.0627 34.2049C61.0627 32.9527 60.2253 32.0728 58.3161 32.0728C57.7578 32.0728 57.3335 32.1179 56.9762 32.163L57.5903 27.5151H62.1681V28.6207V28.632Z" fill="#2B2A29" />
                                            <path d="M65.7746 32.1066C64.7028 31.5989 64.245 30.7641 64.245 29.9293C64.245 28.3951 65.529 27.3572 67.2261 27.3572C69.0795 27.3572 70.0286 28.5191 70.0286 29.7375C70.0286 30.561 69.6155 31.4523 68.4319 32.005V32.0502C69.6266 32.524 70.3635 33.3926 70.3635 34.5546C70.3635 36.2468 68.9344 37.3749 67.1033 37.3749C65.1047 37.3749 63.8877 36.1791 63.8877 34.7689C63.8877 33.5506 64.6134 32.6706 65.7858 32.163V32.1179L65.7746 32.1066ZM69.0349 34.6787C69.0349 33.5167 68.2198 32.9414 66.9246 32.5691C65.8081 32.8963 65.2052 33.6521 65.2052 34.5772C65.1605 35.5473 65.8974 36.4047 67.1256 36.4047C68.3538 36.4047 69.046 35.6714 69.046 34.6787H69.0349ZM65.4732 29.839C65.462 30.8092 66.1989 31.3282 67.3043 31.6215C68.1305 31.3395 68.7669 30.7415 68.7669 29.8616C68.7669 29.0832 68.3091 28.2822 67.1479 28.2822C66.0761 28.2822 65.4843 28.993 65.4843 29.8278L65.4732 29.839Z" fill="#2B2A29" />
                                            <path d="M75.7565 27.515L74.3609 29.3764V29.4103L76.5827 29.117V30.1323L74.3609 29.8502V29.8954L75.7789 31.6778L74.8521 32.2193L73.9478 30.1323H73.9143L72.9764 32.2306L72.139 31.6891L73.5346 29.8728V29.8277L71.3574 30.121V29.1057L73.5235 29.3877V29.3539L72.139 27.5263L73.0322 27.0074L73.9478 29.0944H73.9813L74.8856 26.9961L75.7677 27.515H75.7565Z" fill="#2B2A29" />
                                            <path d="M77.6992 37.2056V36.4047L78.7153 35.4119C81.1604 33.0541 82.277 31.8132 82.277 30.3467C82.277 29.3652 81.8192 28.4514 80.39 28.4514C79.5192 28.4514 78.7934 28.9027 78.358 29.2749L77.9449 28.3499C78.5924 27.7971 79.5527 27.3684 80.6468 27.3684C82.7124 27.3684 83.5833 28.8011 83.5833 30.1887C83.5833 31.9711 82.2993 33.4151 80.2784 35.3894L79.5303 36.1001V36.1339H83.8178V37.2169H77.6992V37.2056Z" fill="#2B2A29" />
                                            <path d="M85.2578 37.2056V36.4047L86.2738 35.4119C88.719 33.0541 89.8356 31.8132 89.8356 30.3467C89.8356 29.3652 89.3778 28.4514 87.9486 28.4514C87.0777 28.4514 86.352 28.9027 85.9166 29.2749L85.5034 28.3499C86.151 27.7971 87.1112 27.3684 88.2054 27.3684C90.271 27.3684 91.1419 28.8011 91.1419 30.1887C91.1419 31.9711 89.8579 33.4151 87.837 35.3894L87.0889 36.1001V36.1339H91.3764V37.2169H85.2578V37.2056Z" fill="#2B2A29" />
                                            <path d="M95.4851 29.9968H97.0818L98.3658 33.6294C98.5556 34.1709 98.857 35.0395 99.0134 35.6149H99.0469C99.2143 35.0621 99.6051 33.934 99.9066 33.1443L101.045 30.0081H102.653L103.156 37.2168H101.916L101.749 33.776C101.715 32.9864 101.66 32.0839 101.626 31.2039H101.581C101.392 31.8582 101.179 32.4223 100.789 33.5391L99.4153 37.1717H98.4886L97.2158 33.5955C96.9813 32.9299 96.6687 31.8808 96.49 31.2152H96.4342C96.4007 32.0613 96.3784 33.0202 96.3337 33.8099L96.1439 37.2168H94.9492L95.4963 30.0081L95.4851 29.9968Z" fill="#2B2A29" />
                                            <path d="M104.909 29.9968H106.506L107.79 33.6294C107.979 34.1709 108.281 35.0395 108.437 35.6149H108.471C108.638 35.0621 109.029 33.934 109.33 33.1443L110.469 30.0081H112.077L112.579 37.2168H111.34L111.173 33.776C111.139 32.9864 111.083 32.0839 111.05 31.2039H111.005C110.815 31.8582 110.603 32.4223 110.212 33.5391L108.839 37.1717H107.912L106.64 33.5955C106.405 32.9299 106.092 31.8808 105.914 31.2152H105.858C105.825 32.0613 105.802 33.0202 105.758 33.8099L105.568 37.2168H104.373L104.92 30.0081L104.909 29.9968Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_271">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1100 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-6" name="size">
                                <label for="size-6">
                                    <svg width="149" height="69" viewBox="0 0 149 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_258)">
                                            <path d="M148.676 3.70288H0.3125V68.6885H148.676V3.70288Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.80226L25.4678 5.18195V2.59097L27.1537 0L28.8397 2.59097V5.18195L27.1537 2.80226ZM26.8411 65.6306V2.59097H27.4775V65.6306H26.8411ZM27.1537 65.4193L28.8397 63.0396V65.6306L27.1537 68.2216L25.4678 65.6306V63.0396L27.1537 65.4193Z" fill="#2B2A29" />
                                            <path d="M144.578 18.3481L142.189 16.6689H144.79L147.392 18.3481L144.79 20.0272H142.189L144.578 18.3481ZM3.69525 18.0367H144.79V18.6706H3.69525V18.0367ZM3.90739 18.3481L6.29675 20.0272H3.69525L1.09375 18.3481L3.69525 16.6689H6.29675L3.90739 18.3481Z" fill="#2B2A29" />
                                            <path d="M53.0574 27.1331V27.9893L48.8816 36.6741H47.5418L51.6953 28.2339V28.2006H47.0059V27.1331H53.0462H53.0574Z" fill="#2B2A29" />
                                            <path d="M60.7837 31.8034C60.7837 35.0505 59.5556 36.8408 57.4565 36.8408C55.5807 36.8408 54.2967 35.0949 54.2744 31.9368C54.2744 28.7231 55.6701 26.9773 57.624 26.9773C59.5779 26.9773 60.7949 28.7676 60.7949 31.8034H60.7837ZM55.5807 31.948C55.5807 34.4277 56.3511 35.84 57.5235 35.84C58.841 35.84 59.4662 34.2943 59.4662 31.859C59.4662 29.4237 58.8745 27.967 57.5235 27.967C56.407 27.967 55.5807 29.3459 55.5807 31.948Z" fill="#2B2A29" />
                                            <path d="M66.1545 27.1219L64.7589 28.9567V28.99L66.9808 28.7009V29.7017L64.7589 29.4237V29.4682L66.1769 31.2252L65.2502 31.7589L64.3569 29.7017H64.3234L63.3856 31.7701L62.5482 31.2363L63.9438 29.446V29.4015L61.7666 29.6906V28.6898L63.9327 28.9678V28.9344L62.5482 27.133L63.4414 26.6215L64.3569 28.6787H64.3904L65.2948 26.6104L66.1769 27.1219H66.1545Z" fill="#2B2A29" />
                                            <path d="M68.0859 36.674V35.8845L69.102 34.9059C71.5472 32.5818 72.6637 31.3586 72.6637 29.913C72.6637 28.9455 72.2059 28.0448 70.7768 28.0448C69.9059 28.0448 69.1801 28.4896 68.7447 28.8566L68.3316 27.9447C68.9792 27.3999 69.9394 26.9773 71.0336 26.9773C73.0991 26.9773 73.97 28.3895 73.97 29.7462C73.97 31.5032 72.686 32.9265 70.6651 34.8725L69.917 35.5731V35.6065H74.2045V36.674H68.0859Z" fill="#2B2A29" />
                                            <path d="M81.3722 28.2228H77.7211L77.3527 30.6692C77.576 30.6359 77.777 30.6248 78.1342 30.6248C78.8823 30.6248 79.6081 30.7693 80.1998 31.1363C80.9479 31.5477 81.5731 32.3817 81.5731 33.5716C81.5731 35.4397 80.0882 36.8298 78.0114 36.8298C76.9619 36.8298 76.091 36.5406 75.6221 36.2404L75.9459 35.2618C76.3478 35.4953 77.1294 35.7956 78.0114 35.7956C79.2173 35.7956 80.278 35.0061 80.2668 33.7273C80.2668 32.4929 79.4294 31.6256 77.5202 31.6256C76.9619 31.6256 76.5376 31.67 76.1803 31.7145L76.7944 27.1331H81.3833V28.2228H81.3722Z" fill="#2B2A29" />
                                            <path d="M85.8827 29.5684H87.4794L88.7634 33.149C88.9532 33.6828 89.2546 34.539 89.411 35.1062H89.4445C89.6008 34.5613 90.0027 33.4493 90.3042 32.6709L91.443 29.5795H93.0508L93.5533 36.6852H92.3139L92.1576 33.2936C92.1241 32.5152 92.0683 31.6256 92.0348 30.7582H91.9901C91.8003 31.4032 91.5882 31.9592 91.1974 33.0601L89.8241 36.6407H88.8974L87.6357 33.1157C87.4012 32.4596 87.0886 31.4254 86.9099 30.7693H86.8541C86.8206 31.6033 86.7983 32.5485 86.7536 33.3269L86.5638 36.6852H85.3691L85.9162 29.5795L85.8827 29.5684Z" fill="#2B2A29" />
                                            <path d="M95.3064 29.5684H96.9031L98.1871 33.149C98.3769 33.6828 98.6783 34.539 98.8347 35.1062H98.8682C99.0356 34.5613 99.4264 33.4493 99.7279 32.6709L100.867 29.5795H102.475L102.977 36.6852H101.738L101.57 33.2936C101.537 32.5152 101.481 31.6256 101.447 30.7582H101.403C101.213 31.4032 101.001 31.9592 100.61 33.0601L99.2366 36.6407H98.3099L97.0371 33.1157C96.8026 32.4596 96.49 31.4254 96.3113 30.7693H96.2555C96.222 31.6033 96.1997 32.5485 96.155 33.3269L95.9652 36.6852H94.7705L95.3176 29.5795L95.3064 29.5684Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_258">
                                                <rect width="149" height="69" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1300 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-7" name="size">
                                <label for="size-7">
                                    <svg width="150" height="70" viewBox="0 0 150 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_297)">
                                            <path d="M149.674 3.75659H0.314453V69.6841H149.674V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.3359 2.84287L25.6387 5.25705V2.62853L27.3359 0L29.0332 2.62853V5.25705L27.3359 2.84287ZM27.0212 66.5818V2.62853H27.6619V66.5818H27.0212ZM27.3359 66.3674L29.0332 63.9533V66.5818L27.3359 69.2103L25.6387 66.5818V63.9533L27.3359 66.3674Z" fill="#2B2A29" />
                                            <path d="M145.549 18.6141L143.144 16.9106H145.762L148.381 18.6141L145.762 20.3176H143.144L145.549 18.6141ZM3.72052 18.2982H145.762V18.9413H3.72052V18.2982ZM3.93408 18.6141L6.33948 20.3176H3.72052L1.10156 18.6141L3.72052 16.9106H6.33948L3.93408 18.6141Z" fill="#2B2A29" />
                                            <path d="M51.4813 25.748V26.612C51.2653 26.6 50.9893 26.624 50.6893 26.672C49.0213 26.936 48.1573 28.136 47.9773 29.432H48.0013C48.3733 28.928 49.0333 28.52 49.8973 28.52C51.2773 28.52 52.2493 29.528 52.2493 31.04C52.2493 32.48 51.2773 33.8 49.6453 33.8C47.9893 33.8 46.8973 32.504 46.8973 30.476C46.8973 28.94 47.4373 27.728 48.2173 26.96C48.8653 26.324 49.7293 25.928 50.7133 25.808C51.0253 25.76 51.2893 25.748 51.4813 25.748ZM49.6693 32.984C50.5693 32.984 51.1813 32.228 51.1813 31.112C51.1813 29.996 50.5453 29.324 49.5733 29.324C48.9373 29.324 48.3373 29.708 48.0493 30.284C47.9893 30.404 47.9413 30.548 47.9413 30.74C47.9533 32.024 48.5533 32.984 49.6693 32.984ZM55.7976 25.736C57.4296 25.736 58.3776 27.2 58.3776 29.684C58.3776 32.336 57.3816 33.8 55.6656 33.8C54.1416 33.8 53.0976 32.372 53.0736 29.792C53.0736 27.164 54.2136 25.736 55.7976 25.736ZM55.7256 26.552C54.8136 26.552 54.1416 27.68 54.1416 29.804C54.1416 31.832 54.7656 32.984 55.7256 32.984C56.7936 32.984 57.3096 31.724 57.3096 29.732C57.3096 27.812 56.8296 26.552 55.7256 26.552ZM62.0219 25.436L62.7419 25.856L61.6019 27.356V27.38L63.4139 27.14V27.956L61.6019 27.728V27.764L62.7539 29.204L61.9979 29.636L61.2659 27.956H61.2419L60.4739 29.648L59.7899 29.216L60.9299 27.752V27.716L59.1539 27.956V27.14L60.9179 27.368V27.344L59.7899 25.868L60.5219 25.448L61.2659 27.128H61.2899L62.0219 25.436ZM68.5744 33.668H67.5784V31.532H63.9544V30.848L67.4344 25.868H68.5744V30.716H69.6664V31.532H68.5744V33.668ZM65.0224 30.716H67.5784V28.112C67.5784 27.704 67.5904 27.296 67.6144 26.888H67.5784C67.3384 27.344 67.1464 27.68 66.9304 28.04L65.0224 30.692V30.716ZM73.0828 25.736C74.7148 25.736 75.6628 27.2 75.6628 29.684C75.6628 32.336 74.6668 33.8 72.9508 33.8C71.4268 33.8 70.3828 32.372 70.3588 29.792C70.3588 27.164 71.4988 25.736 73.0828 25.736ZM73.0108 26.552C72.0988 26.552 71.4268 27.68 71.4268 29.804C71.4268 31.832 72.0508 32.984 73.0108 32.984C74.0788 32.984 74.5948 31.724 74.5948 29.732C74.5948 27.812 74.1148 26.552 73.0108 26.552ZM79.1261 33.668L79.5701 27.86H80.8661L81.9101 30.788C82.0661 31.22 82.3061 31.928 82.4381 32.384H82.4621C82.5941 31.94 82.9181 31.028 83.1581 30.392L84.0821 27.86H85.3901L85.7981 33.668H84.7901L84.6581 30.896C84.6341 30.26 84.5861 29.528 84.5621 28.82H84.5261C84.3701 29.348 84.2021 29.804 83.8781 30.704L82.7621 33.632H82.0061L80.9741 30.752C80.7821 30.212 80.5301 29.372 80.3861 28.832H80.3381C80.3141 29.516 80.2901 30.284 80.2541 30.92L80.0981 33.668H79.1261ZM86.7901 33.668L87.2341 27.86H88.5301L89.5741 30.788C89.7301 31.22 89.9701 31.928 90.1021 32.384H90.1261C90.2581 31.94 90.5821 31.028 90.8221 30.392L91.7461 27.86H93.0541L93.4621 33.668H92.4541L92.3221 30.896C92.2981 30.26 92.2501 29.528 92.2261 28.82H92.1901C92.0341 29.348 91.8661 29.804 91.5421 30.704L90.4261 33.632H89.6701L88.6381 30.752C88.4461 30.212 88.1941 29.372 88.0501 28.832H88.0021C87.9781 29.516 87.9541 30.284 87.9181 30.92L87.7621 33.668H86.7901Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_297">
                                                <rect width="150" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1500 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-8" name="size">
                                <label for="size-8">
                                    <svg width="150" height="69" viewBox="0 0 150 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_328)">
                                            <path d="M149.674 3.70288H0.314453V68.6885H149.674V3.70288Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.3359 2.80226L25.6387 5.18195V2.59097L27.3359 0L29.0332 2.59097V5.18195L27.3359 2.80226ZM27.0212 65.6306V2.59097H27.6619V65.6306H27.0212ZM27.3359 65.4193L29.0332 63.0396V65.6306L27.3359 68.2216L25.6387 65.6306V63.0396L27.3359 65.4193Z" fill="#2B2A29" />
                                            <path d="M145.549 18.3481L143.144 16.6689H145.762L148.381 18.3481L145.762 20.0272H143.144L145.549 18.3481ZM3.72052 18.0367H145.762V18.6706H3.72052V18.0367ZM3.93408 18.3481L6.33948 20.0272H3.72052L1.10156 18.3481L3.72052 16.6689H6.33948L3.93408 18.3481Z" fill="#2B2A29" />
                                            <path d="M52.2783 28.4563C52.0085 28.4452 51.6713 28.4674 51.3004 28.5341C49.2435 28.8566 48.1644 30.3245 47.9508 31.9146H47.9846C48.4454 31.303 49.2659 30.8026 50.3338 30.8026C52.0423 30.8026 53.245 32.037 53.245 33.8829C53.245 35.7288 52.0423 37.2634 50.0303 37.2634C48.0183 37.2634 46.6357 35.6732 46.6357 33.1935C46.6357 31.3142 47.2989 29.8352 48.2656 28.89C49.0636 28.1116 50.1314 27.6223 51.3566 27.4777C51.7388 27.4221 52.0647 27.3999 52.3008 27.3999V28.4563H52.2783ZM51.9074 33.9607C51.9074 32.593 51.1206 31.7701 49.9179 31.7701C49.1311 31.7701 48.3892 32.2371 48.0295 32.9488C47.9508 33.0934 47.8946 33.2713 47.8946 33.5048C47.9059 35.0727 48.6477 36.2515 50.0303 36.2515C51.143 36.2515 51.8961 35.3285 51.8961 33.9607H51.9074Z" fill="#2B2A29" />
                                            <path d="M55.1443 36.1737C55.4253 36.207 55.7512 36.1737 56.2008 36.1292C56.9539 36.0291 57.6733 35.7289 58.2128 35.2062C58.8535 34.6391 59.3144 33.794 59.4942 32.682H59.4492C58.9097 33.3269 58.1454 33.6939 57.1675 33.6939C55.4477 33.6939 54.335 32.404 54.335 30.7693C54.335 28.9679 55.6501 27.3777 57.6283 27.3777C59.6066 27.3777 60.8205 28.9456 60.8205 31.4143C60.8205 33.4937 60.1124 34.9616 59.157 35.8734C58.4151 36.5962 57.3923 37.0299 56.3582 37.1522C55.8861 37.2301 55.4702 37.2412 55.1555 37.2301V36.1737H55.1443ZM55.6163 30.7026C55.6163 31.8924 56.347 32.7264 57.471 32.7264C58.3477 32.7264 59.0333 32.3039 59.3706 31.7256C59.4492 31.5922 59.4942 31.4587 59.4942 31.2363C59.4942 29.6128 58.8872 28.3563 57.5047 28.3563C56.4032 28.3563 55.6163 29.3237 55.6163 30.6915V30.7026Z" fill="#2B2A29" />
                                            <path d="M66.2157 27.5221L64.8107 29.3569V29.3903L67.0475 29.1012V30.102L64.8107 29.824V29.8685L66.2382 31.6254L65.3053 32.1592L64.3948 30.102H64.3611L63.4169 32.1703L62.5739 31.6477L63.9789 29.8573V29.8129L61.7871 30.102V29.1012L63.9677 29.3792V29.3458L62.5739 27.5444L63.4844 27.0328L64.4061 29.0901H64.4398L65.339 27.0217L66.227 27.5333L66.2157 27.5221Z" fill="#2B2A29" />
                                            <path d="M68.4749 35.6176C68.8458 35.84 69.6889 36.207 70.6106 36.207C72.2741 36.207 72.8024 35.1617 72.7911 34.3611C72.7799 33.0267 71.5547 32.4484 70.2958 32.4484H69.5652V31.481H70.2958C71.24 31.481 72.4427 30.9917 72.4427 29.8686C72.4427 29.1013 71.9481 28.4341 70.7567 28.4341C69.9811 28.4341 69.2393 28.7677 68.8234 29.0679L68.4637 28.1338C68.9807 27.7669 69.9586 27.3999 71.004 27.3999C72.9035 27.3999 73.769 28.5119 73.769 29.6795C73.769 30.6803 73.1621 31.5143 71.9931 31.9369V31.9702C73.1846 32.1927 74.1287 33.0711 74.14 34.4055C74.14 35.929 72.926 37.2634 70.6218 37.2634C69.5427 37.2634 68.5873 36.9298 68.1152 36.6184L68.4749 35.6399V35.6176Z" fill="#2B2A29" />
                                            <path d="M82.1995 32.2038C82.1995 35.4509 80.9631 37.2412 78.8499 37.2412C76.9616 37.2412 75.6802 35.4953 75.6465 32.3372C75.6465 29.1235 77.0515 27.3777 79.0185 27.3777C80.9856 27.3777 82.2107 29.168 82.2107 32.2038H82.1995ZM76.9616 32.3484C76.9616 34.8281 77.7372 36.2404 78.9174 36.2404C80.2325 36.2404 80.8732 34.6947 80.8732 32.2594C80.8732 29.8241 80.2774 28.3674 78.9174 28.3674C77.7934 28.3674 76.9616 29.7463 76.9616 32.3484Z" fill="#2B2A29" />
                                            <path d="M86.0776 29.9797H87.685L88.9776 33.5604C89.1687 34.0942 89.4721 34.9504 89.6295 35.5175H89.6632C89.8318 34.9726 90.2252 33.8606 90.5287 33.0822L91.6752 29.9797H93.2938L93.7996 37.0855H92.5519L92.3834 33.6938C92.3496 32.9154 92.2934 32.0258 92.2597 31.1585H92.2147C92.0237 31.8034 91.8101 32.3594 91.4167 33.4603L90.0342 37.041H89.1012L87.8198 33.5159C87.5838 32.8598 87.2691 31.8257 87.0892 31.1696H87.033C86.9993 32.0036 86.9768 32.9488 86.9319 33.7272L86.7408 37.0855H85.5381L86.0889 29.9797H86.0776Z" fill="#2B2A29" />
                                            <path d="M95.5532 29.9797H97.1605L98.4532 33.5604C98.6442 34.0942 98.9477 34.9504 99.1051 35.5175H99.1388C99.3074 34.9726 99.7008 33.8606 100.004 33.0822L101.151 29.9797H102.769L103.275 37.0855H102.028L101.859 33.6938C101.825 32.9154 101.769 32.0258 101.735 31.1585H101.69C101.499 31.8034 101.286 32.3594 100.892 33.4603L99.5097 37.041H98.5768L97.2954 33.5159C97.0594 32.8598 96.7447 31.8257 96.5648 31.1696H96.5086C96.4749 32.0036 96.4524 32.9488 96.4074 33.7272L96.2164 37.0855H95.0137L95.5644 29.9797H95.5532Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_328">
                                                <rect width="150" height="69" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1630 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-9" name="size">
                                <label for="size-9">
                                    <svg width="150" height="69" viewBox="0 0 150 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_341)">
                                            <path d="M149.674 3.70288H0.314453V68.6885H149.674V3.70288Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.3359 2.80226L25.6387 5.18195V2.59097L27.3359 0L29.0332 2.59097V5.18195L27.3359 2.80226ZM27.0212 65.6306V2.59097H27.6619V65.6306H27.0212ZM27.3359 65.4193L29.0332 63.0396V65.6306L27.3359 68.2216L25.6387 65.6306V63.0396L27.3359 65.4193Z" fill="#2B2A29" />
                                            <path d="M145.549 18.3481L143.144 16.6689H145.762L148.381 18.3481L145.762 20.0272H143.144L145.549 18.3481ZM3.72052 18.0367H145.762V18.6706H3.72052V18.0367ZM3.93408 18.3481L6.33948 20.0272H3.72052L1.10156 18.3481L3.72052 16.6689H6.33948L3.93408 18.3481Z" fill="#2B2A29" />
                                            <path d="M53.4135 27.1328V27.9891L49.2096 36.6738H47.8608L52.0422 28.2337V28.2003H47.3213V27.1328H53.4022H53.4135Z" fill="#2B2A29" />
                                            <path d="M60.2695 28.0447C59.9998 28.0336 59.6625 28.0558 59.2916 28.1225C57.2347 28.445 56.1556 29.9129 55.9421 31.503H55.9758C56.4366 30.8914 57.2459 30.391 58.325 30.391C60.0335 30.391 61.2362 31.6253 61.2362 33.4713C61.2362 35.3172 60.0335 36.8518 58.0215 36.8518C56.0095 36.8518 54.627 35.2616 54.627 32.7818C54.627 30.9025 55.2901 29.4236 56.2568 28.4784C57.0548 27.7 58.1226 27.2107 59.3478 27.0661C59.73 27.0105 60.056 26.9883 60.3032 26.9883V28.0447H60.2695ZM59.8986 33.5491C59.8986 32.1814 59.1118 31.3585 57.9091 31.3585C57.1223 31.3585 56.3804 31.8255 56.0207 32.5372C55.9421 32.6818 55.8859 32.8597 55.8859 33.0932C55.8971 34.6611 56.6389 35.8399 58.0215 35.8399C59.1343 35.8399 59.8874 34.9169 59.8874 33.5491H59.8986Z" fill="#2B2A29" />
                                            <path d="M66.598 27.1217L65.193 28.9566V28.9899L67.4298 28.7008V29.7016L65.193 29.4236V29.4681L66.6205 31.225L65.6876 31.7588L64.7884 29.7016H64.7547L63.8105 31.7699L62.9675 31.2473L64.3725 29.457V29.4125L62.1807 29.7016V28.7008L64.3613 28.9788V28.9454L62.9675 27.144L63.8667 26.6325L64.7884 28.6897H64.8221L65.7326 26.6213L66.6205 27.1329L66.598 27.1217Z" fill="#2B2A29" />
                                            <path d="M68.8577 35.206C69.2287 35.4284 70.0717 35.7954 70.9934 35.7954C72.6569 35.7954 73.1852 34.7501 73.174 33.9494C73.1627 32.615 71.9488 32.0368 70.6786 32.0368H69.948V31.0693H70.6786C71.6341 31.0693 72.8255 30.5801 72.8255 29.4569C72.8255 28.6897 72.3309 28.0224 71.1395 28.0224C70.3639 28.0224 69.6221 28.356 69.2062 28.6563L68.8465 27.7222C69.3635 27.3552 70.3414 26.9883 71.3868 26.9883C73.2864 26.9883 74.1519 28.1003 74.1519 29.2679C74.1519 30.2687 73.5449 31.1027 72.3759 31.5253V31.5586C73.5674 31.781 74.5115 32.6595 74.5228 33.9939C74.5228 35.5174 73.3088 36.8518 71.0046 36.8518C69.9255 36.8518 68.9701 36.5182 68.498 36.2068L68.8577 35.2282V35.206Z" fill="#2B2A29" />
                                            <path d="M82.4242 27.1328V27.9891L78.2204 36.6738H76.8716L81.0529 28.2337V28.2003H76.332V27.1328H82.413H82.4242Z" fill="#2B2A29" />
                                            <path d="M87.4262 29.5681H89.0336L90.3262 33.1488C90.5173 33.6825 90.8208 34.5388 90.9781 35.1059H91.0118C91.1692 34.561 91.5738 33.449 91.8773 32.6706L93.0238 29.5681H94.6424L95.1482 36.6738H93.9006L93.7432 33.2822C93.7095 32.5038 93.6533 31.6142 93.6196 30.7468H93.5746C93.3835 31.3918 93.17 31.9478 92.7765 33.0487L91.394 36.6294H90.4611L89.1909 33.1043C88.9549 32.4482 88.6402 31.414 88.4603 30.758H88.4041C88.3704 31.592 88.3479 32.5372 88.303 33.3156L88.1119 36.6738H86.9092L87.4599 29.5681H87.4262Z" fill="#2B2A29" />
                                            <path d="M96.9126 29.5681H98.5199L99.8125 33.1488C100.004 33.6825 100.307 34.5388 100.464 35.1059H100.498C100.667 34.561 101.06 33.449 101.364 32.6706L102.51 29.5681H104.129L104.635 36.6738H103.387L103.218 33.2822C103.185 32.5038 103.128 31.6142 103.095 30.7468H103.05C102.859 31.3918 102.645 31.9478 102.252 33.0487L100.869 36.6294H99.9362L98.6548 33.1043C98.4188 32.4482 98.104 31.414 97.9242 30.758H97.868C97.8343 31.592 97.8118 32.5372 97.7668 33.3156L97.5757 36.6738H96.373L96.9238 29.5681H96.9126Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_341">
                                                <rect width="150" height="69" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1750 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-10" name="size">
                                <label for="size-10">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_284)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M53.0574 27.5264V28.395L48.8816 37.2057H47.5418L51.6953 28.6432V28.6094H47.0059V27.5264H53.0462H53.0574Z" fill="#2B2A29" />
                                            <path d="M60.1251 28.6319H56.4741L56.1056 31.1138C56.3289 31.08 56.5299 31.0687 56.8872 31.0687C57.6352 31.0687 58.361 31.2153 58.9527 31.5876C59.7008 32.005 60.3261 32.8511 60.3261 34.0582C60.3261 35.9534 58.8411 37.3636 56.7644 37.3636C55.7148 37.3636 54.8439 37.0703 54.375 36.7657L54.6988 35.7729C55.1007 36.0098 55.8823 36.3144 56.7644 36.3144C57.9702 36.3144 59.0309 35.5135 59.0197 34.2161C59.0197 32.9639 58.1823 32.084 56.2731 32.084C55.7148 32.084 55.2905 32.1291 54.9333 32.1742L55.5473 27.5264H60.1251V28.6319Z" fill="#2B2A29" />
                                            <path d="M66.154 27.515L64.7583 29.3764V29.4102L66.9802 29.1169V30.1322L64.7583 29.8502V29.8953L66.1763 31.6778L65.2496 32.2192L64.3452 30.1322H64.3117L63.3738 32.2305L62.5364 31.7003L63.9321 29.884V29.8389L61.7549 30.1322V29.1169L63.9209 29.3989V29.3651L62.5364 27.5375L63.4297 27.0186L64.3452 29.1056H64.3787L65.2831 27.0073L66.1651 27.5263L66.154 27.515Z" fill="#2B2A29" />
                                            <path d="M68.3983 35.7165C68.7668 35.9421 69.6041 36.3144 70.5197 36.3144C72.1722 36.3144 72.6969 35.2539 72.6858 34.4417C72.6746 33.0879 71.4576 32.5013 70.2071 32.5013H69.4813V31.5198H70.2071C71.145 31.5198 72.3396 31.0235 72.3396 29.8841C72.3396 29.1057 71.8484 28.4288 70.6648 28.4288C69.8944 28.4288 69.1575 28.7672 68.7444 29.0718L68.3871 28.1242C68.9007 27.7519 69.8721 27.3796 70.9105 27.3796C72.7974 27.3796 73.6571 28.5078 73.6571 29.6923C73.6571 30.7076 73.0542 31.5537 71.893 31.9824V32.0162C73.0765 32.2418 74.0144 33.1331 74.0256 34.4868C74.0256 36.0323 72.8197 37.3861 70.5309 37.3861C69.459 37.3861 68.51 37.0476 68.041 36.7318L68.3983 35.739V35.7165Z" fill="#2B2A29" />
                                            <path d="M77.4201 32.1063C76.3483 31.5987 75.8905 30.7639 75.8905 29.9291C75.8905 28.3948 77.1745 27.3569 78.8716 27.3569C80.725 27.3569 81.6741 28.5189 81.6741 29.7373C81.6741 30.5608 81.261 31.452 80.0775 32.0048V32.0499C81.2721 32.5237 82.009 33.3924 82.009 34.5544C82.009 36.2465 80.5799 37.3634 78.7488 37.3634C76.7502 37.3634 75.5332 36.1789 75.5332 34.7574C75.5332 33.539 76.2589 32.6591 77.4313 32.1515V32.1063H77.4201ZM80.6804 34.6784C80.6804 33.5165 79.8653 32.9411 78.5701 32.5576C77.4536 32.8847 76.8507 33.6406 76.8507 34.5656C76.806 35.5358 77.5429 36.3932 78.7711 36.3932C79.9993 36.3932 80.6915 35.6599 80.6915 34.6672L80.6804 34.6784ZM77.1187 29.8388C77.1075 30.809 77.8444 31.3279 78.9498 31.6212C79.776 31.3392 80.4124 30.7413 80.4124 29.8614C80.4124 29.083 79.9546 28.282 78.7934 28.282C77.7216 28.282 77.1298 28.9927 77.1298 29.8275L77.1187 29.8388Z" fill="#2B2A29" />
                                            <path d="M85.8826 29.9968H87.4792L88.7632 33.6294C88.953 34.1709 89.2545 35.0395 89.4108 35.6149H89.4443C89.6118 35.0621 90.0026 33.934 90.304 33.1443L91.4429 29.9968H93.0507L93.5531 37.2055H92.3138L92.1463 33.7648C92.1128 32.9751 92.057 32.0726 92.0235 31.1926H91.9788C91.789 31.8469 91.5769 32.411 91.1861 33.5278L89.8128 37.1604H88.8861L87.6132 33.5843C87.3788 32.9187 87.0661 31.8695 86.8875 31.2039H86.8316C86.7982 32.05 86.7758 33.0089 86.7312 33.7986L86.5414 37.2055H85.3467L85.8938 29.9968H85.8826Z" fill="#2B2A29" />
                                            <path d="M95.3064 29.9968H96.9031L98.1871 33.6294C98.3769 34.1709 98.6783 35.0395 98.8347 35.6149H98.8682C99.0356 35.0621 99.4264 33.934 99.7279 33.1443L100.867 29.9968H102.475L102.977 37.2055H101.738L101.57 33.7648C101.537 32.9751 101.481 32.0726 101.447 31.1926H101.403C101.213 31.8469 101.001 32.411 100.61 33.5278L99.2366 37.1604H98.3099L97.0371 33.5843C96.8026 32.9187 96.49 31.8695 96.3113 31.2039H96.2555C96.222 32.05 96.1997 33.0089 96.155 33.7986L95.9652 37.2055H94.7705L95.3176 29.9968H95.3064Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_284">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1750 ₽
                                </div>
                            </div>
                            <div class="project_inputs_size">
                                <input type="radio" id="size-11" name="size">
                                <label for="size-11">
                                    <svg width="149" height="70" viewBox="0 0 149 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2_302)">
                                            <path d="M148.676 3.75659H0.3125V69.6841H148.676V3.75659Z" stroke="#2B2A29" stroke-width="0.57" stroke-miterlimit="6.5" />
                                            <path d="M27.1537 2.84287L25.4678 5.25705V2.62853L27.1537 0L28.8397 2.62853V5.25705L27.1537 2.84287ZM26.8411 66.5818V2.62853H27.4775V66.5818H26.8411ZM27.1537 66.3674L28.8397 63.9533V66.5818L27.1537 69.2103L25.4678 66.5818V63.9533L27.1537 66.3674Z" fill="#2B2A29" />
                                            <path d="M144.578 18.6141L142.189 16.9106H144.79L147.392 18.6141L144.79 20.3176H142.189L144.578 18.6141ZM3.69525 18.2982H144.79V18.9413H3.69525V18.2982ZM3.90739 18.6141L6.29675 20.3176H3.69525L1.09375 18.6141L3.69525 16.9106H6.29675L3.90739 18.6141Z" fill="#2B2A29" />
                                            <path d="M48.6023 32.1066C47.5305 31.5989 47.0727 30.7641 47.0727 29.9293C47.0727 28.3951 48.3567 27.3572 50.0538 27.3572C51.9072 27.3572 52.8563 28.5191 52.8563 29.7375C52.8563 30.561 52.4432 31.4523 51.2708 32.005V32.0502C52.4655 32.524 53.2024 33.3926 53.2024 34.5546C53.2024 36.2468 51.7732 37.3749 49.9422 37.3749C47.9436 37.3749 46.7266 36.1791 46.7266 34.7689C46.7266 33.5506 47.4523 32.6706 48.6247 32.163V32.1179L48.6023 32.1066ZM51.8626 34.6787C51.8626 33.5167 51.0475 32.9414 49.7523 32.5691C48.6358 32.8963 48.0329 33.6521 48.0329 34.5772C47.9882 35.5473 48.7251 36.4047 49.9533 36.4047C51.1815 36.4047 51.8626 35.6714 51.8626 34.6787ZM48.3009 29.839C48.2897 30.8092 49.0266 31.3282 50.132 31.6215C50.9582 31.3395 51.5946 30.7415 51.5946 29.8616C51.5946 29.0832 51.1368 28.2822 49.9756 28.2822C48.9038 28.2822 48.312 28.993 48.312 29.8278L48.3009 29.839Z" fill="#2B2A29" />
                                            <path d="M54.4082 37.2056V36.4047L55.4242 35.4119C57.8694 33.0541 58.986 31.8132 58.986 30.3467C58.986 29.3652 58.5282 28.4514 57.099 28.4514C56.2281 28.4514 55.5136 28.9027 55.067 29.2749L54.6538 28.3499C55.3014 27.7971 56.2616 27.3684 57.3558 27.3684C59.4214 27.3684 60.2923 28.8011 60.2923 30.1887C60.2923 31.9711 59.0083 33.4151 56.9874 35.3894L56.2393 36.1001V36.1339H60.5267V37.2169H54.4082V37.2056Z" fill="#2B2A29" />
                                            <path d="M66.1545 27.515L64.7589 29.3764V29.4103L66.9808 29.117V30.1323L64.7589 29.8502V29.8954L66.1769 31.6778L65.2502 32.2193L64.3569 30.1323H64.3234L63.3856 32.2306L62.5482 31.6891L63.9438 29.8728V29.8277L61.7666 30.121V29.1057L63.9327 29.3877V29.3539L62.5482 27.5263L63.4414 27.0074L64.3569 29.0944H64.3904L65.2948 26.9961L66.1769 27.515H66.1545Z" fill="#2B2A29" />
                                            <path d="M68.0859 37.2056V36.4047L69.102 35.4119C71.5472 33.0541 72.6637 31.8132 72.6637 30.3467C72.6637 29.3652 72.2059 28.4514 70.7768 28.4514C69.9059 28.4514 69.1801 28.9027 68.7447 29.2749L68.3316 28.3499C68.9792 27.7971 69.9394 27.3684 71.0336 27.3684C73.0991 27.3684 73.97 28.8011 73.97 30.1887C73.97 31.9711 72.686 33.4151 70.6651 35.3894L69.917 36.1001V36.1339H74.2045V37.2169H68.0859V37.2056Z" fill="#2B2A29" />
                                            <path d="M81.3722 28.632H77.7211L77.3527 31.1138C77.576 31.08 77.777 31.0687 78.1342 31.0687C78.8823 31.0687 79.6081 31.2154 80.1998 31.5877C80.9479 32.0051 81.5731 32.8512 81.5731 34.0582C81.5731 35.9535 80.0882 37.3636 78.0114 37.3636C76.9619 37.3636 76.091 37.0703 75.6221 36.7657L75.9459 35.773C76.3478 36.0099 77.1294 36.3032 78.0114 36.3032C79.2173 36.3032 80.278 35.5022 80.2668 34.2049C80.2668 32.9527 79.4294 32.0728 77.5202 32.0728C76.9619 32.0728 76.5376 32.1179 76.1803 32.163L76.7944 27.5151H81.3833V28.6207L81.3722 28.632Z" fill="#2B2A29" />
                                            <path d="M85.8827 29.9968H87.4794L88.7634 33.6294C88.9532 34.1709 89.2546 35.0395 89.411 35.6149H89.4445C89.6008 35.0621 90.0027 33.934 90.3042 33.1443L91.443 30.0081H93.0508L93.5533 37.2168H92.3139L92.1576 33.776C92.1241 32.9864 92.0683 32.0839 92.0348 31.2039H91.9901C91.8003 31.8582 91.5882 32.4223 91.1974 33.5391L89.8241 37.1717H88.8974L87.6357 33.5955C87.4012 32.9299 87.0886 31.8808 86.9099 31.2152H86.8541C86.8206 32.0613 86.7983 33.0202 86.7536 33.8099L86.5638 37.2168H85.3691L85.9162 30.0081L85.8827 29.9968Z" fill="#2B2A29" />
                                            <path d="M95.3064 29.9968H96.9031L98.1871 33.6294C98.3769 34.1709 98.6783 35.0395 98.8347 35.6149H98.8682C99.0356 35.0621 99.4264 33.934 99.7279 33.1443L100.867 30.0081H102.475L102.977 37.2168H101.738L101.57 33.776C101.537 32.9864 101.481 32.0839 101.447 31.2039H101.403C101.213 31.8582 101.001 32.4223 100.61 33.5391L99.2366 37.1717H98.3099L97.0371 33.5955C96.8026 32.9299 96.49 31.8808 96.3113 31.2152H96.2555C96.222 32.0613 96.1997 33.0202 96.155 33.8099L95.9652 37.2168H94.7705L95.3176 30.0081L95.3064 29.9968Z" fill="#2B2A29" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_302">
                                                <rect width="149" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <div class="price">
                                    1950 ₽
                                </div>
                            </div>
                        </div>
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs project_inputs_2">
                            <div class="project_inputs_wrap with-textarea">
                                <div>
                                    <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                    <div class="project_text project_text_show">
                                        Укажите данные для печати.<br>
                                        Кратко расскажите о пожеланиях. <br>
                                        Напишите, если удобнее общаться в мессенджере.
                                    </div>
                                </div>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn size-up">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a>
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="templates.php" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link" id="web-pages-mobile-2">
                                Web-сайты
                            </a>
                            <!-- <a href="stamps.php" class="footer_link">
                                Печати
                            </a> -->
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden">
        <div class="container">
            <div class="hidden_wrap">
                <div class="hidden_menu">
                    <!-- <a href="stamps.php" class="hidden_menu_item">
                        печати
                    </a> -->
                    <a href="templates.php" class="hidden_menu_item">
                        фирменный стиль
                    </a>
                    <a href="#" class="hidden_menu_item" id="web-pages-mobile-top">
                        web сайты
                    </a>
                </div>
                <div class="hidden_socials">
                    <a href="#" class="hidden_socials_item">
                        whatsapp
                    </a>
                    <a href="#" class="hidden_socials_item">
                        telegram
                    </a>
                </div>
                <button class="btn hidden_btn">
                    Обсудить проект
                </button>
            </div>
        </div>
    </div>
    <header class="<?php echo ($request == 'home' || $request == '') ? 'header header-home' : '' ?> <?php echo ($request == 'seo') ? 'header header_seo' : '' ?>" id="header">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <ul class="nav_menu">
                    <!-- <li>
                        <a href="stamps.php" class="nav_menu_item">
                            Печати
                        </a>
                    </li> -->
                    <li>
                        <a href="seo.php" class="nav_menu_item">
                            Seo
                        </a>
                    </li>
                    <li>
                        <a href="#none" class="nav_menu_item" id="web-pages">
                            Веб сайты
                        </a>
                    </li>
                    <li>
                        <a href="templates.php" class="nav_menu_item">
                            Фирменный стиль
                        </a>
                    </li>
                </ul>
                <div class="nav_btns">
                    <button class="nav_btn">
                        Обсудить проект
                    </button>
                    <a href="#" class="nav_favorites">
                        <img src="img/heart-icon.svg" alt="heart">
                    </a>
                </div>
                <div class="nav_burger">
                    <div class="nav_burger_menu">
                        <div class="nav_burger_item"></div>
                        <div class="nav_burger_item"></div>
                    </div>
                    <svg class="nav_burger_close" id="burger_close" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.707107 13.4356C0.316586 13.0451 0.316586 12.4119 0.707107 12.0214L12.0208 0.707701C12.4113 0.317166 13.0445 0.31718 13.435 0.707701C13.8256 1.09822 13.8256 1.73138 13.435 2.12192L2.12132 13.4356C1.7308 13.8261 1.09763 13.8261 0.707107 13.4356Z" fill="#141736" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.706955 0.707107C1.09748 0.316586 1.73065 0.316586 2.12117 0.707107L13.4349 12.0208C13.8254 12.4113 13.8254 13.0445 13.4349 13.435C13.0444 13.8256 12.4112 13.8256 12.0207 13.435L0.706954 2.12132C0.316433 1.7308 0.316434 1.09763 0.706955 0.707107Z" fill="#141736" />
                    </svg>
                </div>
            </div>
        </div>