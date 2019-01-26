<div class="container">
  <div class="todo--container">
    <?php foreach($todos as $t): ?>
    <div class="todo">
      <p class="todo--title"><?= $t->title ?></p>
      <span class="icon">
        <i class="fas fa-trash-alt delete-icon"></i>
      </span> 
    </div>
    <?php endforeach; ?>
  </div>
</div>