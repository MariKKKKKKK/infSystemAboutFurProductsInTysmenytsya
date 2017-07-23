
    <form action="" method="post" style="padding:80px;">

        <b>Додайте нову назву  магазину:</b>
        <input type="text" name="new_shop" required/>
        <input type="submit" name="add_shop" value="Додати нову назву магазину" />

    </form>

<?php
include("includes/db.php");

if(isset($_POST['add_shop'])){

    $new_shop = $_POST['new_shop'];

    $insert_shop = "insert into shop (shop_title) values ('$new_shop')";

    $run_shop = mysqli_query($con, $insert_shop);

    if($run_shop){

        echo "<script>alert('New shop has been inserted!')</script>";
        echo "<script>window.open('index.php?view_shops','_self')</script>";
    }
}

?>