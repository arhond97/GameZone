<?php include _VIEWS_PATH . 'top.php';
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if (!isset($_SESSION["username"])) {
	header("Location:index.php");
}
?>

<form action="index.php?a=addcategory" method="post">
	<div class="addcat-box">
		<h3>
			<a class="page-btn" href="index.php">
				<i class="fas fa-arrow-circle-left"></i>Powrót
			</a>
		</h3>

		<h1>Dodaj kategorie przedmiotu</h1>

		<div class="textbox">
			<i class="fab fa-accusoft"></i>Nazwa Kategorii:
			<input type="text" placeholder="nazwa kategorii" name="catName" value="" />
		</div>

		<input class="btn" type="hidden" name="catId" value="" />
		<input class="btn" type="submit" value="Dodaj" />
	</div>

</form>


<?php include _VIEWS_PATH . 'footer.php'; ?>