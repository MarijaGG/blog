<?php

require "Validator.php";
$validator = new Validator();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if(!Validator::string($_POST["category_name"], max: 25, min: 2)){
        $errors["category_name"] = "Saturam jābūt vismaz 2 rakstzīmēm, bet ne garākam par 25 rakstzīmēm";
    }   

    if (empty($errors)) {
        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];

        $db->query($sql, $params);
    
        header("Location: /categories"); 
        exit();
    }
}



$pageTitle = "Create Categories";
require "views/categories/create.view.php";
