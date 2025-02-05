<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>


<form method="POST">
 
    <input name="id" type="hidden" value = <?= $_GET['id'] ?? "" ?>>
    <input name="content" value = <?= $_POST["content"] ?? $x["content"]?> >
    <button>Edit</button>

<?php if(isset($errors["content"])){ ?>
    <p class="error"> <?= $errors["content"] ?> </p>
<?php } ?>

</form>

<?php require "views/components/footer.php"; ?>


