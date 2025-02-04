<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> </h1>

<form method="POST">
    <input name="id" type="hidden" value = <?= $_GET['id'] ?? "" ?>>
    <input name="content" value = <?= $_POST["content"] ?? $x["content"]?> >
    <button>Edit</button>
</form>

<?php require "views/components/footer.php"; ?>


