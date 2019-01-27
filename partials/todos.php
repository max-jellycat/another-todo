<div class="container">
  <div class="todo--container">
    <?php foreach($todos as $t): ?>
    <div class="todo">
      <p class="todo--title"><?= $t->title ?></p>
      <a href="delete.php?id=<?= $t->id ?>" class="icon">
        <i class="fas fa-trash-alt delete-icon"></i>
      </a> 
    </div>
    <?php endforeach; ?>
  </div>
</div>