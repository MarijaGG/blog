<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];

    $db->query($sql, $params);

    header("Location: /"); 
    exit();
}

$pageTitle = "Create blog";
require "views/posts/create.view.php";
