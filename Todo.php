<?php
  require 'lib/Database.php';

  class Todo {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getTodos() {
      $this->db->query('SELECT * FROM todos');
      return $this->db->resultSet();
    }

    public function getTodo($id) {
      $this->query('SELECT * FROM todos where id = $id');
      return $this->db->single();
    }

    public function add($data) {
      if(!empty($data)) {
        $this->db->query('INSERT INTO todos (title) VALUES (:todo)');
        $this->db->bind(':todo', $data['title']);
        $this->db->execute();

        header('Location: index.php');
      }
    }

    public function delete($id) {
      $this->db->query('DELETE FROM todos WHERE id = :id');
      $this->db->bind(':id', $id);
      $this->db->execute();

      header("Location: index.php");
    }
  }