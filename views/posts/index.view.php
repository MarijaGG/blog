<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

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
    <li> <a href="show?id=<?=$x['id']?>"> <?= $x['content'] ?> </a></li>
<?php } ?>
</ul>  



<?php require "views/components/footer.php"; ?>


