<link rel="stylesheet" href="style.css">

<?php

// sodien 06.01, taisiisim ierakstu mekletaaju

require "functions.php";
require "Database.php";
$config = require "config.php";

echo "<h1>Blogs</h1>";

$db = new Database($config["database"]);

$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search"]) AND $_GET["search"] != ""){
  // search logic
  $search = "%" . $_GET["search"] . "%";
  $sql .= " WHERE content LIKE :search;";
  $params = ["search" => $search];
}

$posts = $db->query($sql, $params)->fetchAll();
// else{ $posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC); }

// $comments = $db->query("SELECT * FROM comments")
// $users = $db->query("SELECT * FROM users WHERE userid = $id")

// post - ja maina db content
// get - atlasta datus

echo "<form>";
echo "<input name='search' />";
echo "<button>Search</button>";
echo "</form>";

echo "<ul>";
  foreach($posts as $x) {
    echo "<li>" . $x['content'] . "</li>"; }
echo "</ul>";





