<?php

require "Validator.php";
$validator = new Validator();


if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$x = $db->query($sql, $params)->fetch();

if(!$x) {
    redirectIfNotFound();
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if(!Validator::string($_POST["category_name"], max: 50)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }   

    if (empty($errors)) {
        $sql = "
        UPDATE categories
        SET category_name = :category_name
        WHERE id = :id;";

        $params = [
            "category_name" => $_POST["category_name"], 
            "id" => $_GET["id"],        
    ];

        $db->query($sql, $params);
    
        header("Location: /categories/show?id=" . (int)$_GET['id']);
        exit();
    }
}

require "views/categories/edit.view.php";