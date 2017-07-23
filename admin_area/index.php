<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	
}
else {

?>

<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center;">Керування вмістом інтернет магазину</h2>
			
			<a href="index.php?insert_product">Додати новий товар</a>
			<a href="index.php?view_products">Переглянуи всі товари</a>
			<a href="index.php?insert_cat">Додати новий вид хутра </a>
			<a href="index.php?view_cats">Переглянути всі види хутра</a>
			<a href="index.php?insert_brand">Додати новий бренд</a>
			<a href="index.php?view_brands">Переглянути всі бренди</a>
            <a href="index.php?insert_shop">Додати нову назву магазину</a>
            <a href="index.php?view_shops">Переглянути всі магазини</a>
			<a href="logout.php">Вийти</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		if(isset($_GET['insert_brand'])){
		
		include("insert_brand.php"); 
		
		}
		
		if(isset($_GET['view_brands'])){
		
		include("view_brands.php"); 
		
		}
		if(isset($_GET['edit_brand'])){
		
		include("edit_brand.php"); 
		
		}
        if(isset($_GET['insert_shop'])){

            include('insert_shop.php');

        }
        if(isset($_GET['view_shops'])){

            include('view_shops.php');

        }
        if(isset($_GET['edit_shop'])){

            include("edit_shop.php");
        }

		?>
		</div>






	</div>


</body>
</html>

<?php } ?>