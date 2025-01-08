<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>

<h1>Categories</h1>

<form>
    <input name='search' value='<?= $_GET["search"] ?? "" ?>'/>
    <button>Search</button>
</form>

<ul>
 <?php foreach($posts as $x) { ?>
    <li> <?= $x['category_name'] ?> </li>
<?php } ?>
</ul>  


</body>
</html>

