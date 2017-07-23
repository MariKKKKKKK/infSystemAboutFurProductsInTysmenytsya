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
            <input class="form__input" type="text" name="user_query" placeholder="Шукати товар" >
            <input class="form__submit" type="submit" name="search" value="Шукати">
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
                    <?php getListOfFur(); ?>
                </ul>
            </section>

            <section class="brands nav__section">
                <button class="nav__title nav__btn brands__btn js-accordion-btn">
                    Бренди
                </button>
                <ul class="brands__list nav__list">
                    <?php getListOfBrands(); ?>
                </ul>
            </section>

            <section class="shops nav__section">
                <button class="nav__title nav__btn shops__btn js-accordion-btn">
                    Магазини
                </button>

                <ul class="nav__list shops__list">
                    <?php getListOfShops(); ?>
                </ul>
            </section>
        </nav>

    </aside>

   
        <div class="product-area">

                <?php

                if(isset($_GET['search'])){

                    $search_query = $_GET['user_query'];

                    $get_pro = "select * from products where product_keywords like '%$search_query%'";

                    $run_pro = mysqli_query($con, $get_pro);

                    while($row_pro=mysqli_fetch_array($run_pro)){

                        $pro_id = $row_pro['product_id'];
                        $pro_cat = $row_pro['product_cat'];
                        $pro_brand = $row_pro['product_brand'];
                        $pro_title = $row_pro['product_title'];
                        $pro_price = $row_pro['product_price'];
                        $pro_image = $row_pro['product_image'];

                        echo "            
                            <div class='product-column'>
                                <div class='product-img-div'>
                                    <img src='admin_area/product_images/$pro_image'>
                                </div>
                                <div class='product-text'>
                                    <p class='product-text__price'> Ціна: $ $pro_price </p>
                                    <a class='product-text__detail' href='details.php?pro_id=$pro_id'>
                                        Деталі
                                    </a>
                                 </div>
                            </div>
                         ";

                    }
                    if (!isset($_GET['user_query'])) {
                        echo '<h2>Товарів не знайдено</h2>';
                    }
                }
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