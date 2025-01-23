<?php

$errors = [];

if(!isset($_POST["content"]) == "true" || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50){
 $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
    
        $db->query($sql, $params);
    
        header("Location: /"); 
        exit();
    }
}



$pageTitle = "Create blog";
require "views/posts/create.view.php";
