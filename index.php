<link rel="stylesheet" href="style.css">

<?php

// sodien 06.01, taisiisim ierakstu mekletaaju

require "functions.php";
require "Database.php";
$config = require "config.php";

echo "<h1>Blogs</h1>";

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);;
// $comments = $db->query("SELECT * FROM comments")
// $users = $db->query("SELECT * FROM users WHERE userid = $id")

echo "";

echo "<ul>";
  foreach($posts as $x) {
    echo "<li>" . $x['content'] . "</li>"; }
echo "</ul>";





