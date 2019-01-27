<div class="container">
  <div class="todo--container">
    <?php foreach($todos as $t): ?>
    <div class="todo">
      <p class="todo--title"><?= $t->title ?></p>
      <form method="POST" action="update.php" class="todo--update-form is-hidden">
        <input type="hidden" name="id" value=<?= $t->id ?>>
        <input type="text" name="title" placeholder=<?= $t->title ?>>
        <input type="submit" value="Edit" class="button update-btn"> 
      </form>  
      <span class="icon">
        <i class="fas fa-pencil-alt update-icon"></i>
      </span> 
      <a href="delete.php?id=<?= $t->id ?>" class="icon">
        <i class="fas fa-trash-alt delete-icon"></i>
      </a> 
    </div>
    <?php endforeach; ?>
  </div>
</div>