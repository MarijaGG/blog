<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> <?= htmlspecialchars($x["category_name"]) ?> </h1>

<a href="edit?id=<?=$x["id"]?>">Edit</a> <br>


<form method="POST" action="/categories/delete">
    <input type="hidden" name="id" value="<?= htmlspecialchars($x["id"]) ?>">
    <button type="submit">Delete</button>
</form>

<?php require "views/components/footer.php"; ?>
