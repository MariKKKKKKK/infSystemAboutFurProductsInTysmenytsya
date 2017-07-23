<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
include("includes/db.php");

if(isset($_GET['edit_shop'])){

    $shop_id = $_GET['edit_shop'];

    $get_shop = "select * from shop where shop_id='$shop_id'";

    $run_shop = mysqli_query($con, $get_shop);

    $row_shop = mysqli_fetch_array($run_shop);

    $shop_id = $row_shop['shop_id'];
    $shop_title = $row_shop['shop_title'];
}


?>
    <form action="" method="post" style="padding:80px;">

        <b>Оновити назву магазину:</b>
        <input type="text" name="new_shop" value="<?php echo $shop_title;?>"/>
        <input type="submit" name="update_shop" value="Оновити назву магазину" />

    </form>

<?php


if(isset($_POST['update_shop'])){

    $update_id = $shop_id;

    $new_shop = $_POST['new_shop'];

    $update_shop = "update shop set shop_title='$new_shop' where shop_id='$update_id'";

    $run_shop = mysqli_query($con, $update_shop);

    if($run_shop){

        echo "<script>alert(' shop has been updated!')</script>";
        echo "<script>window.open('index.php?view_shops','_self')</script>";
    }
}

?>