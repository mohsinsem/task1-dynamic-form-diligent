<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic Forms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">

</head>
<body>

<?php
include 'classes/DynamicForm.php';
include 'classes/Database.php';

// Create an instance of the Database class
$database = new Database();

// Access the PDO connection
$conn = $database->conn;

?>