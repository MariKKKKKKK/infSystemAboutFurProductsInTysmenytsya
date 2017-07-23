<?php
header('Content-type: text/html; charset = utf-8')
?>
<table width="795" align="center" bgcolor="pink">

    <tr align="center">
        <td colspan="6"><h2>Переглянути всі магазини</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>ID категорії</th>
        <th>Заголовок категорії</th>
        <th>Редагувати</th>
        <th>Видалити</th>
    </tr>
    <?php
    include("includes/db.php");

    $get_shop = "select * from shop";

    $run_shop = mysqli_query($con, $get_shop);

    $i = 0;

    while ($row_shop=mysqli_fetch_array($run_shop)){

        $shop_id = $row_shop['shop_id'];
        $shop_title = $row_shop['shop_title'];
        $i++;

        ?>
        <tr align="center">
            <td><?php echo $i;?></td>
            <td><?php echo $shop_title;?></td>
            <td><a href="index.php?edit_shop=<?php echo $shop_id; ?>">Редагувати</a></td>
            <td><a href="delete_shop.php?delete_shop=<?php echo $shop_id;?>">Видалити</a></td>

        </tr>
    <?php } ?>

</table>