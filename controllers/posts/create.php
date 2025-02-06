<?php

require "Validator.php";
$validator = new Validator();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }


    $category_id = empty($_POST["category_id"]) ? NULL : $_POST["category_id"];

    if (empty($errors)) {
        // Insert post with possible NULL category_id
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = [
            "content" => $_POST["content"],
            "category_id" => $category_id
        ];
        $db->query($sql, $params);

        // Redirect to homepage after successful insertion
        header("Location: /");
        exit();
    }
}

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

$pageTitle = "Create blog";
require "views/posts/create.view.php";
