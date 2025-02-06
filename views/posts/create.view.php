<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> Izveidot bloga ierakstu</h1>

<form method="POST">
  <label ><input name="content" value="<?= $_POST['content'] ?? ""?>"/></label>
  
  <select name="category_id">
    <?php foreach ($categories as $category){ ?>
        <option value="<?=$category['id']?>">
            <?= htmlspecialchars($category['category_name']) ?>
        </option>
    <?php } ?>
  </select>

  <button>Insert</button>
  
</form>


<?php if(isset($errors["content"])) { ?>
       <p class="error"><?= $errors["content"] ?></p>
     <?php } ?>

<?php require "views/components/footer.php"; ?>


