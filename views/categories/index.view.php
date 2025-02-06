<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Kategorijas</h1>


<ul class="posts">
 <?php foreach($posts as $x) { ?>
    <li> <a href="categories/show?id=<?=$x['id']?>"> <?= htmlspecialchars($x["category_name"]) ?> </a></li>
<?php } ?>
</ul>  




<?php require "views/components/footer.php"; ?>


