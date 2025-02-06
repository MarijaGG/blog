<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<br>

<form method="POST">
 
<input name="id" type="hidden" value="<?= $_GET['id'] ?? "" ?>">
<input name="content" value="<?= $_POST["content"] ?? $x["content"] ?>">

<select name="category_id">
    <option value="" <?= (empty($x['category_id']) && empty($_POST['category_id'])) ? 'selected' : '' ?>>Izveelies kategorijas</option>
    <?php foreach ($categories as $category) { ?>
        <option value="<?= $category['id'] ?>" <?= ($category['id'] == ($x['category_id'] ?? $_POST['category_id'] ?? '')) ? 'selected' : '' ?>>
            <?= $category['category_name'] ?>
        </option>
    <?php } ?>
</select>

  
    <button>Edit</button>

<?php if (isset($errors["category_id"])): ?>
    <div class="error"><?= $errors["category_id"] ?></div>
<?php endif; ?>

</form>

<?php require "views/components/footer.php"; ?>



