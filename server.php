<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$_POST = json_decode( file_get_contents("php://input"), true );
echo var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
  }
