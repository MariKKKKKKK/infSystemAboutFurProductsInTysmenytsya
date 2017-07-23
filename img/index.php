<!DOCTYPE>
<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
session_start();
include("functions/functions.php");

?>
<html>
<head>
    <title>My Online Shop</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="fluid-container">
    <header class="header">
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="index.php">Головна</a></li>
                <li class="nav__item"><a class="nav__link" href="all_products.php">Товари</a></li>
                <li class="nav__item"><a class="nav__link" href="contact.php">Контакти</a></li>
            </ul>
        </nav>
    </header>
    <div class="presentation">

        <h1 class="presentation__heading-1">Місто Тисмениця - центр виробників хутра України</h1>

        <div class="presentation__images">
            <?php getSingleImages(); ?>
        </div>

        <h2 class="presentation__heading-2">На нашому сайті репрезентовані хутрові вироби з усіх куточків Тисмениці</h2>
        <div class="presentation__text">
            <p class="presentation__par"> Легкі, теплі та пухнасті, ідеально скроєні вироби - ось та мрія , яку ми втілюємо в наших хутрах !</p>
            <p class="presentation__par"> Шуби та манто, півшубки, курточки, шапки із хутра від "Хутро "- Тисмениця - це якісні хутрові вироби,
                які протягом років будуть тішити Вас своїм теплом, красою та вишуканістю.</p>
            <p class="presentation__par"> Ми постійно вносимо зміни в крій, прагнемо, щоб наші шуби виглядали привабливо та відповідали останнім
                модним тенденціям !</p>
        </div>
    </div>


    <footer class="footer">
        <h2 class="footer__copyright">&copy; 2016-2022 Використання будь-яких матеріалів -
            заборонено.</h2>

    </footer>
</div>

</body>
</html>