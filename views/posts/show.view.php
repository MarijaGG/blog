<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> <?= htmlspecialchars($x["content"]) ?> </h1>
<a href="edit?id=<?=$x["id"]?>">Edit</a>

<?php require "views/components/footer.php"; ?>


