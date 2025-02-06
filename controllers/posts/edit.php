<?php

require "Validator.php";
$validator = new Validator();


if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$x = $db->query($sql, $params)->fetch();

if(!$x) {
    redirectIfNotFound();
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    // Content validation
    if(!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Content must be provided and cannot be longer than 50 characters.";
    }

    // Check if a category is selected; if not, set category_id to NULL
    $category_id = empty($_POST["category_id"]) ? NULL : $_POST["category_id"];

    if (empty($errors)) {
        // Update the post in the database
        $sql = "
        UPDATE posts
        SET content = :content,
            category_id = :category_id
        WHERE id = :id;";

        $params = [
            "content" => $_POST["content"],
            "category_id" => $category_id,  // This could be NULL
            "id" => $_GET["id"]
        ];

        $db->query($sql, $params);

        // Redirect to the show page for the updated post
        header("Location: /show?id=" . (int)$_GET['id']);
        exit();
    }
}

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

require "views/posts/edit.view.php";