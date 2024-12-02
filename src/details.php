<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Games details</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php
  $conn = require_once "partials/dbconnection.php";

  echo var_dump($_GET);
