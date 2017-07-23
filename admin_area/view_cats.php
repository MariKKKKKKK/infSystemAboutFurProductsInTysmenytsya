<?php
header('Content-type: text/html; charset = utf-8')
?>
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>Переглянути всі види хутра</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>ID категорії</th>
		<th>Заголовок категорії</th>
		<th>Редагувати</th>
		<th>Видалити</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $cat_title;?></td>
		<td><a href="index.php?edit_cat=<?php echo $cat_id; ?>">Редагувати</a></td>
		<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Видалити</a></td>
	
	</tr>
	<?php } ?>




</table>