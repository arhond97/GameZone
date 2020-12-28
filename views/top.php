<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?Alfa Slab One' rel='stylesheet'>
    <title>GameZone</title>

</head>

<body>
    <style>
        <?php include 'css/style.css'; ?>
    </style>

    <div id="page">

        <div class="logo">
            <h class="gamezone"> game zone <br></h>
            <h>sklep internetowy</h>
        </div>

        <ul id="navigation">
            <li><a href="index.php?a=start">Strona Główna</a></li>
            <li><a href="index.php?a=contact">Formularz kontaktowy</a></li>
            <li><a href="index.php?a=about">O nas</a></li>

            <?php if (isset($_SESSION["username"])) : ?>
                <li><a href="index.php?a=products">Produkty</a></li>
                <li><a href="index.php?a=addcategory">Dodaj Kategorie</a></li>
                <a href="index.php?a=deletecategory"> Usuń Kategorie</a>
                <a href="index.php?a=addproduct"> Dodaj Produkt</a>
                <a href="index.php?a=deleteproduct"> Usuń Produkt</a>
                <li><a href="index.php?a=logout"> Wyloguj (<?php echo $_SESSION["username"] ?>)</a></li>
            <?php else : ?>
                <li><a href="index.php?a=register"> Zarejestruj się</a></li>
                <li><a href="index.php?a=login"> Zaloguj się</a></li>
            <?php endif; ?>
        </ul>

        <p>
        <?php
        ?>
            <section>