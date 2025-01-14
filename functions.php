<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
  
    die(); // kill code
  }

function redirectIfNotFound($location = "/"){
  http_response_code(404);
  header("Location: $location", 302);
  exit(); // hurts less than die()
}