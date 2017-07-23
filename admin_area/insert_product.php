<!DOCTYPE>
<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Додавання продукту</title>
		<meta charset="UTF-8">
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Додайте новий товар тут</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Заголовок товару</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Категорія товару</b></td>
				<td>
				<select name="product_cat" >
					<option>Виберіть категорію</option>
					<?php 
		$get_cats = "select * from categories";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
		echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Бренд товару:</b></td>
				<td>
				<select name="product_brand" >
					<option>Виберіть бренд</option>
					<?php 
		$get_brands = "select * from brands";
	
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
	
		$brand_id = $row_brands['brand_id']; 
		$brand_title = $row_brands['brand_title'];
	
	echo "<option value='$brand_id'>$brand_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			<tr>
				<td align="right"><b>Назва магазину:</b></td>
				<td>
				<select name="product_shop" >
					<option>Виберіть магазин</option>
					<?php 
		$get_shops = "select * from shop";
	
	$run_shops = mysqli_query($con, $get_shops);
	
	while ($row_shops=mysqli_fetch_array($run_shops)){
	
		$shop_id = $row_shops['shop_id']; 
		$shop_title = $row_shops['shop_title'];
	
	echo "<option value='$shop_id'>$shop_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Фото товару</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			<tr>
				<td align="right"><b>Фото товару в розділі деталей</b></td>
				<td><input type="file" name="product_bg_image" /></td>
			</tr>
			<tr>
				<td align="right"><b>Ціна товару</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Опис товару:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Ключові слова товару</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Додати товар"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_shop = $_POST['product_shop'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");

		$product_bg_image = $_FILES['product_bg_image']['name'] ;
		$product_bg_image_tmp = $_FILES['product_bg_image']['tmp_name'];

		move_uploaded_file($product_bg_image_tmp, "product_bg_images/$product_bg_image");


        $insert_product = "insert into products (product_cat,product_brand, product_shop, product_title,
                                                 product_price, product_desc,product_image, 
                                                 product_bg_image, product_keywords)
                                        values ('$product_cat','$product_brand', '$product_shop', '$product_title',
                                                    
                                                '$product_price','$product_desc','$product_image',
                                                '$product_bg_image','$product_keywords')";

		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Product Has been inserted!');</script>";
		 echo "<script>window.open('insert_product.php','_self');</script>";
		 
		 }
	}








?>



