<?php

// sodien 06.01, taisiisim ierakstu mekletaaju

$config = require "config.php";

$db = new Database($config["database"]);

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search"]) AND $_GET["search"] != ""){
  // search logic
  $search = "%" . $_GET["search"] . "%";
  $sql .= " WHERE category_name LIKE :search;";
  $params = ["search" => $search];
}

$posts = $db->query($sql, $params)->fetchAll();
// else{ $posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC); }

// $comments = $db->query("SELECT * FROM comments")
// $users = $db->query("SELECT * FROM users WHERE userid = $id")

// post - ja maina db content
// get - atlasta datus

$pageTitle = "Categories";
require "views/categories.view.php";


