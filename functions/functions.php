
<?php
// After uploading to online server, change this connection accordingly

$con = mysqli_connect("localhost", "root", "", "infsystem");
mysql_query("SET NAMES 'utf8mb4'");
mysql_query("SET NAMES utf8mb4 COLLATE 'utf8mb4_unicode_ci'");

if (mysqli_connect_errno()) {
    echo "The Connection was not established: " . mysqli_connect_error();
}



// Getting the total price of the items in the cart 


//getting the categories

function getListOfFur()
{

    global $con;

    $get_cats = "select * from categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
            <li class='fur__item nav__item categories__item'>
                <a class='categories__link fur__link nav__link' href='productResp.php?cat=$cat_id'>$cat_title</a>
            </li>
        ";


    }


}

//getting the brands

function getListOfBrands()
{

    global $con;

    $get_brands = "select * from brands";

    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {

        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];

        echo "
              <li class='nav__item brands__item'>
                <a class='nav__link brands__link' href='productResp.php?brand=$brand_id'> $brand_title</a>    
              </li>
        ";


    }
}

function getListOfShops()
{
    global $con;

    $get_shops = "select * from shop";

    $run_shops = mysqli_query($con, $get_shops);

    while ($row_shops = mysqli_fetch_array($run_shops)) {

        $shop_id = $row_shops['shop_id'];
        $shop_title = $row_shops['shop_title'];

        echo "
                <li class='nav__item shops__item'>
                    <a class='nav__link shops__link' href='productResp.php?shop=$shop_id'>$shop_title </a>
                </li>   
        ";

    }
}

function getAllProducts()
{
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['brand'])) {
            if (!isset($_GET['shop'])) {
                global $con;
                $get_pro = "select * from products";

                $run_pro = mysqli_query($con, $get_pro);

                while ($row_pro = mysqli_fetch_array($run_pro)) {

                    $pro_id = $row_pro['product_id'];
                    $pro_cat = $row_pro['product_cat'];
                    $pro_brand = $row_pro['product_brand'];
                    $pro_shop = $row_pro['product_shop'];
                    $pro_title = $row_pro['product_title'];
                    $pro_price = $row_pro['product_price'];
                    $pro_image = $row_pro['product_image'];

                    echo "
                            <div class='product-column'>
                                    <div class='product-img-div'>
                                        <img src='admin_area/product_images/$pro_image' >
                                    </div>
                                    <div class='product-text'>
                                        <p class='product-text__price'> Ціна: $ $pro_price </p>
                                        <a class='product-text__detail' href='detailsResp.php?pro_id=$pro_id'>
                                                    Деталі
                                        </a>
                                    </div>
                            </div>
                    ";
                }
            }
        }
    }
}

function filterProductsByShop()
{
    if (isset($_GET['shop'])) {

        $shop_id = $_GET['shop'];

        global $con;

        $get_shop_pro = "select * from products where product_shop='$shop_id'";

        $run_shop_pro = mysqli_query($con, $get_shop_pro);

        $count_shops = mysqli_num_rows($run_shop_pro);

        if ($count_shops == 0) {

            echo "<h2 style='padding:20px;'>No products where found in this category!</h2>";

        }

        while ($row_shop_pro = mysqli_fetch_array($run_shop_pro)) {

            $pro_id = $row_shop_pro['product_id'];
            $pro_cat = $row_shop_pro['product_cat'];
            $pro_brand = $row_shop_pro['product_brand'];
            $pro_shop = $row_shop_pro['product_shop'];
            $pro_title = $row_shop_pro['product_title'];
            $pro_price = $row_shop_pro['product_price'];
            $pro_image = $row_shop_pro['product_image'];

            echo "
                    <div class='product-column'>
                        <div class='product-img-div'>
                            <img src='admin_area/product_images/$pro_image' />
                        </div>
                        <div class='product-text'>
                            <p class='product-text__price'> Ціна: $ $pro_price </p>
                            <a class='product-text__detail' href='detailsResp.php?pro_id=$pro_id' >
                                    Деталі
                            </a>
                        </div>
                    </div>
            ";
        }
    }
}

function filterProductsByFur()
{

    if (isset($_GET['cat'])) {

        $cat_id = $_GET['cat'];

        global $con;

        $get_cat_pro = "select * from products where product_cat='$cat_id'";

        $run_cat_pro = mysqli_query($con, $get_cat_pro);

        $count_cats = mysqli_num_rows($run_cat_pro);

        if ($count_cats == 0) {

            echo "<h2 style='padding:20px;'>No products where found in this category!</h2>";

        }

        while ($row_cat_pro = mysqli_fetch_array($run_cat_pro)) {

            $pro_id = $row_cat_pro['product_id'];
            $pro_cat = $row_cat_pro['product_cat'];
            $pro_brand = $row_cat_pro['product_brand'];
            $pro_shop = $row_cat_pro['product_shop'];
            $pro_title = $row_cat_pro['product_title'];
            $pro_price = $row_cat_pro['product_price'];
            $pro_image = $row_cat_pro['product_image'];

            echo "
					<div class='product-column'>
                        <div class='product-img-div'>
                            <img src='admin_area/product_images/$pro_image'>
                        </div>
                        <div class='product-text'>
                                <p class='product-text__price'> Ціна: $ $pro_price </p>
                                <a class='product-text__detail' href='detailsResp.php?pro_id=$pro_id' >
                                    Деталі
                                </a>
                        </div>
                    </div>
            ";


        }

    }

}


function filterProductsByBrand()
{

    if (isset($_GET['brand'])) {

        $brand_id = $_GET['brand'];

        global $con;

        $get_brand_pro = "select * from products where product_brand='$brand_id'";

        $run_brand_pro = mysqli_query($con, $get_brand_pro);

        $count_brands = mysqli_num_rows($run_brand_pro);

        if ($count_brands == 0) {

            echo "<h2 style='padding:20px;'>No products where found associated with this brand!!</h2>";

        }

        while ($row_brand_pro = mysqli_fetch_array($run_brand_pro)) {

            $pro_id = $row_brand_pro['product_id'];
            $pro_cat = $row_brand_pro['product_cat'];
            $pro_brand = $row_brand_pro['product_brand'];
            $pro_shop = $row_brand_pro['product_shop'];
            $pro_title = $row_brand_pro['product_title'];
            $pro_price = $row_brand_pro['product_price'];
            $pro_image = $row_brand_pro['product_image'];

            echo "
                    <div class='product-column'>
                            <div class='product-img-div'>
                                <img src='admin_area/product_images/$pro_image'>
                            </div>
                            <div class='product-text'>
                                <p class='product-text__price'> Ціна: $ $pro_price </p>
                                <a class='product-text__detail' href='detailsResp.php?pro_id=$pro_id'>
                                    Деталі
                                </a>
                        </div>
                    </div>
            ";


        }

    }
}


?>