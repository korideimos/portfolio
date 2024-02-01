<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме - Соколова Анна</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="#" class="main-logo">korideimos</a>
        <a href="#" class="hide">korideimos</a>
        <a href="#" class="hide">редактирование</a>
    </nav>

    <!-- Сюда вставить нужную страничку -->
    <?php
    if (!empty($_GET["page"]) && (($_GET["page"] == "resume") || ($_GET["page"] == "portfolio") || ($_GET["page"] == "moder"))) {
        include($_GET["page"] . ".php");
    }
    ?>

    <section class="main-contacts">
        <h2><span class="color-accent">связаться</span> со мной</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="27" viewBox="0 0 47 27" fill="none">
            <path d="M37.447 26.0215L45.1217 18.3468C46.3679 17.0409 47.0632 15.3051 47.0632 13.5C47.0632 11.6948 46.3679 9.95902 45.1217 8.65308L37.447 0.978369C36.8962 0.427304 36.149 0.117615 35.3699 0.117432C34.5907 0.117248 33.8434 0.426585 33.2924 0.97739C32.7413 1.5282 32.4316 2.27535 32.4314 3.05449C32.4313 3.83363 32.7406 4.58093 33.2914 5.132L38.7356 10.5781L2.99597 10.6232C2.2169 10.6232 1.46973 10.9326 0.918846 11.4835C0.367957 12.0344 0.0584717 12.7816 0.0584717 13.5607V13.5607C0.0584717 14.3397 0.367957 15.0869 0.918846 15.6378C1.46973 16.1887 2.2169 16.4982 2.99597 16.4982L38.6984 16.4531L33.2914 21.8679C32.7563 22.4219 32.4602 23.164 32.4669 23.9342C32.4736 24.7044 32.7825 25.4411 33.3272 25.9858C33.8718 26.5304 34.6086 26.8393 35.3788 26.846C36.149 26.8527 36.891 26.5566 37.445 26.0215H37.447Z" />
        </svg>
        <a href="#">
            <div class="contacts-socials-logo vk"></div>
        </a>
        <a href="#">
            <div class="contacts-socials-logo inst"></div>
        </a>
        <a href="#">
            <div class="contacts-socials-logo tg"></div>
        </a>
        <a href="#">
            <div class="contacts-socials-logo behance"></div>
        </a>
        <a href="#">
            <div class="contacts-socials-logo linkedin"></div>
        </a>

    </section>

    <footer>
        <div>
            <a href="#" class="main-logo">korideimos</a>
        </div>
        <hr class="footer-line">
        <div class="contacts">
            <h4>Контакты</h4>
            <a href="tel:+79022025291">+7 (902) 202-52-91</a>
            <a href="mailto:korideimos@gmail.com">korideimos@gmail.com</a>
        </div>
        <div class="resume">
            <h4>резюме <a href="#" class="resume-download">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                        <path d="M0.839563 20.7155L4.92185 24.9611C5.6165 25.6505 6.53979 26.0351 7.49998 26.0351C8.46017 26.0351 9.38346 25.6505 10.0781 24.9611L14.1604 20.7155C14.4535 20.4108 14.6182 19.9975 14.6183 19.5664C14.6184 19.1354 14.4539 18.722 14.1609 18.4172C13.8679 18.1123 13.4705 17.941 13.0561 17.9409C12.6416 17.9408 12.2441 18.1119 11.951 18.4166L9.05415 21.4283L9.03019 1.65747C9.03019 1.22649 8.86557 0.813169 8.57255 0.508422C8.27952 0.203675 7.88209 0.0324704 7.46769 0.0324704V0.0324704C7.05329 0.0324704 6.65586 0.203675 6.36284 0.508422C6.06981 0.813169 5.90519 1.22649 5.90519 1.65747L5.92915 21.4077L3.04894 18.4166C2.75425 18.1206 2.35956 17.9568 1.94987 17.9605C1.54019 17.9642 1.14829 18.1351 0.858594 18.4364C0.568894 18.7377 0.404567 19.1453 0.401007 19.5714C0.397447 19.9974 0.55494 20.4079 0.839563 20.7144L0.839563 20.7155Z" />
                    </svg>
                </a></h4>

            <a href="#">Скачать pdf</a>
            <a href="#">Полное резюме</a>
        </div>
    </footer>
</body>

</html>