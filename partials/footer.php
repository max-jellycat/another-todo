
  </main>

  <div id="add-modal" class="modal">
    <div class="modal--content">
      <span class="modal--close">
        <i class="fas fa-times"></i>
      </span>
      <h2 class="modal--title">Add a new todo</h2>
      <form method="POST" class="add-form" action=<?php $todo->add($_POST) ?>>
        <input class="u-full-width" type="text" id="title" name="title" placeholder="What do you want to do...">
        <input type="submit" value="Add Todo" class="button">
      </form>
    </div>
  </div>

  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>