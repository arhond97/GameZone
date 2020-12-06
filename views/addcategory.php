<?php include _VIEWS_PATH.'top.php'; ?>

<h2>Dodaj kategorie przedmiotu</h2>

<div>

<form action="index.php?a=addcategory" method="post">

	<div><span>Nazwa Kategorii: </span>
	<input type="text" name="catName" value="" /></div>
	
	<input type="hidden" name="catId" value="" />
  <div><input type="submit" value="Dodaj"/></div>
  
</form>

</div>

<?php include _VIEWS_PATH.'footer.php'; ?>