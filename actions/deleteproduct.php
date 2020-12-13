<?php
if(isset($_GET['itemID'])){
    include("db.php");

    $delstock_sql = 'DELETE  FROM items WHERE itemId='.$_GET['itemID'];
    $delstock_stmt = $db->prepare($delstock_sql);
    $delstock_res = $delstock_stmt->execute();
}
?>