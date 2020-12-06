<?php include _VIEWS_PATH.'top.php'; ?>

<?php
include("db.php");
$query = "SELECT * FROM items INNER JOIN categories ON items.catId = categories.catId";
$statement = $db->query($query); 
?>

<table border="3" cellpadding="5" cellspacing="5" align="center">
<tr>
  <th>Nazwa</th>
  <th>Kategoria</th>
  <th>Ilość</th>
</tr>

<?php foreach($statement as $data)
{
?>

<tr>
  <td> <?php echo $data['itemName']; ?> </td>
  <td> <?php echo $data['catName']; ?> </td>
  <td> <?php echo $data['stock']; ?> </td>
</tr>

<?php
}
?>
</table>

<?php include _VIEWS_PATH.'footer.php'; ?>