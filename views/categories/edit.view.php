<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<br>

<form method="POST">
 
    <input name="id" type="hidden" value = <?= $_GET['id'] ?? "" ?>>
    <input name="category_name" value = <?= $_POST["category_name"] ?? $x["category_name"]?> >
    <button>Edit</button>

<?php if(isset($errors["category_name"])){ ?>
    <p class="error"> <?= $errors["category_name"] ?> </p>
<?php } ?>

</form>

<?php require "views/components/footer.php"; ?>



