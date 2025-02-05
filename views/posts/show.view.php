<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> <?= htmlspecialchars($x["content"]) ?> </h1>

<a href="edit?id=<?=$x["id"]?>">Edit</a> <br>

<form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= htmlspecialchars($x["id"]) ?>">
    <button type="submit">Delete</button>
</form>

<?php require "views/components/footer.php"; ?>
