<?php

$config = require "config.php";

require "functions.php";
require "Database.php";

$db = new Database($config["database"]);

require "router.php";