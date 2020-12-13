<?php
if(isset($_GET['categoryID'])){
    include("db.php");
    $delcategory_sql = 'DELETE  FROM categories WHERE catId='.$_GET['categoryID'];
    $delcategory_stmt = $db->prepare($delcategory_sql);
    $delcategory_res = $delcategory_stmt->execute();


    $delstock_sql = 'DELETE  FROM items WHERE catId='.$_GET['categoryID'];
    $delstock_stmt = $db->prepare($delstock_sql);
    $delstock_res = $delstock_stmt->execute();
}
?>
