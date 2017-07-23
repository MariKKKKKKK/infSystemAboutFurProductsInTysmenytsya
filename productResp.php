<!DOCTYPE>
<?php

include("functions/functions.php");
?>


<html>
<head>

    <title>My Online Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/prodR.css">


</head>

<body>


<div class="fluid-container">
    <header class="header">
        <div class="header__icon js-show-menu"> &#9776;</div>
        <form class="form" method="get" action="resultsResp.php" enctype="multipart/form-data">
            <input class="form__input" type="text" name="user_query" placeholder="Шукати товар"/ >
            <input class="form__submit" type="submit" name="search" value="Шукати"/>
        </form>
    </header>

    <aside class="menu">

        <nav class="nav">
            <div class="nav__close js-close-menu">&times;</div>

            <section class="main-menu nav__section">
                <button class="nav__title nav__btn main-menu__btn js-accordion-btn">
                    Головне меню
                </button>
                <ul class="nav__list main-menu__list">
                    <li class="main-menu__item nav__item"><a class="main-menu__link nav__link"
                                                             href="index.html">Головна</a>
                    </li>
                    <li class="main-menu__item nav__item"><a class=" main-menu__link nav__link"
                                                             href="productResp.php">Товари</a></li>
                    <li class="main-menu__item nav__item"><a class="main-menu__link nav__link"
                                                             href="contact.html">Контакти</a>
                    </li>
                </ul>
            </section>

            <section class="fur nav__section">
                <button class="nav__title nav__btn fur__btn js-accordion-btn">
                    Види хутра
                </button>
                <ul class="fur__list nav__list">
                    <?php getCats(); ?>
                </ul>
            </section>

            <section class="brands nav__section">
                <button class="nav__title nav__btn brands__btn js-accordion-btn">
                    Бренди
                </button>
                <ul class="brands__list nav__list">
                    <?php getBrands(); ?>
                </ul>
            </section>

            <section class="shops nav__section">
                <button class="nav__title nav__btn shops__btn js-accordion-btn">
                    Магазини
                </button>

                <ul class="nav__list shops__list">
                    <?php getShops(); ?>
                </ul>
            </section>
        </nav>

    </aside>

    <div class="content">

        <div class="product-area">

            <div class="product-area__box">
                <?php
                getAllProducts();
                getCatPro();
                getBrandPro();
                getShopsPro();
                ?>

            </div>

        </div>
    </div>



    <footer class="footer">
        <p class="footer__par">
            <a href="#" class="footer__link">
                    Посилання на github репозиторій проекту
            </a>
         </p>
    </footer>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/products.js"></script>

</body>
</html>