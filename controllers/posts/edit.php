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

    if(!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }   

    if (empty($_POST["category_id"])) {
        $errors["category_id"] = "Lūdzu, izvēlieties kategoriju.";
    }

    if (empty($errors)) {
        $sql = "
        UPDATE posts
        SET content = :content,
            category_id = :category_id
        WHERE id = :id;";

        $params = [
            "content" => $_POST["content"], 
            "category_id" => $_POST["category_id"], 
            "id" => $_GET["id"]       
    ];

        $db->query($sql, $params);
    
        header("Location: /show?id=" . (int)$_GET['id']);
        exit();
    }
}

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

require "views/posts/edit.view.php";