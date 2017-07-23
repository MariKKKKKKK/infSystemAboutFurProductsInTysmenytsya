<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="795" align="center" bgcolor="pink"> 

	<tr align="center">
		<td colspan="6"><h2>Переглянути всі товари</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>Id</th>
		<th>Заголовок</th>
		<th>Фото</th>
		<th>Ціна</th>
		<th>Редагувати</th>
		<th>Видалити</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $pro_title;?></td>
		<td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>
		<td><?php echo $pro_price;?></td>
		<td><a href="index.php?edit_pro=<?php echo $pro_id; ?>">Редагувати</a></td>
		<td><a href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">Видалити</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>