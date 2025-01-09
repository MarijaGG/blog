<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>

<h1>Blogs</h1>

<form>
    <input name='search' value='<?= $_GET["search"] ?? "" ?>'/>
    <button>Search</button>
</form>

<?php

if (count($posts) == 0) {
    echo "0 results found";
}
?>

<ul>
 <?php foreach($posts as $x) { ?>
    <li> <?= $x['content'] ?> </li>
<?php } ?>
</ul>  



<?php require "components/footer.php"; ?>


