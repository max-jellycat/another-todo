<?php
require('Todo.php');

$id = $_GET["id"];

$todo = new Todo();

$todo->delete($id);