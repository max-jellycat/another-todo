<?php
require('Todo.php');

$todo = new Todo();

$todo->update($_POST);

header('Location: index.php');