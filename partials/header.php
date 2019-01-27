<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require('Todo.php');

  $todo = new Todo();
  $todos = $todo->getTodos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Todos</title>
</head>

<body>
  <main>
    <div class="header">
      <h1 class="title">Todo List</h1>
      <button class="button add-btn" data-target="#add-modal">Create Todo</button>
    </div>