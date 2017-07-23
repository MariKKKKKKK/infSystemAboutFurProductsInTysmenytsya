<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
include("includes/db.php");

if(isset($_GET['delete_shop'])){

    $delete_id = $_GET['delete_shop'];

    $delete_shop = "delete from shop where shop_id='$delete_id'";

    $run_delete = mysqli_query($con, $delete_shop);

    if($run_delete){

        echo "<script>alert('A shop has been deleted!')</script>";
        echo "<script>window.open('index.php?view_shops','_self')</script>";
    }

}





?>