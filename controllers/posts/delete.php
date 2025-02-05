<?php 

require "Validator.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (!isset($_POST["id"]) || empty($_POST["id"])) {
      die("Error: ID is missing.");
  }

  $id = $_POST["id"];

  // Check if post exists
  $sql = "SELECT * FROM posts WHERE id = :id";
  $params = ["id" => $id];
  $x = $db->query($sql, $params)->fetch();

  if (!$x) {
    header("Location: /");
  }

  // Delete the post
  $sql = "DELETE FROM posts WHERE id = :id";
  $params = ["id" => $id];

  $db->query($sql, $params);

  // Redirect to homepage after deletion
  header("Location: /");
  exit();
} else {
  die("Invalid request.");
}