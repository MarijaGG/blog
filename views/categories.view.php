<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>

<h1>Categories</h1>

<form>
    <input name='search' value='<?= $_GET["search"] ?? "" ?>'/>
    <button>Search</button>
</form>

<ul>
 <?php foreach($posts as $x) { ?>
    <li> <?= $x['category_name'] ?> </li>
<?php } ?>
</ul>  

<?php require "components/footer.php"; ?>

