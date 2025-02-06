<?php 

require "Validator.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (!isset($_POST["id"]) || empty($_POST["id"])) {
      die("Error: ID is missing.");
  }

  $id = $_POST["id"];

  $sql = "UPDATE posts SET category_id = NULL WHERE category_id = :id";
  $params = ["id" => $id];
  $db->query($sql, $params);

  // Delete the post
  $sql = "DELETE FROM categories WHERE id = :id";
  $params = ["id" => $id];

  $db->query($sql, $params);

  // Redirect to homepage after deletion
  header("Location: /categories");
  exit();
} else {
  die("Invalid request.");
}