const $addButton = document.querySelector('.add-btn');

$addButton.addEventListener('click', function () {
  const target = $addButton.getAttribute('data-target');
  const $addModal = document.querySelector(target);
  $addModal.style = 'display: flex;';
})

const $closeModal = document.querySelector('.modal--close');

$closeModal.addEventListener('click', function () {
  this.parentNode.parentNode.style = "display: none;";
})

const $editButtons = document.querySelectorAll('.update-icon');

$editButtons.forEach(function (button) {
  button.parentNode.addEventListener('click', function () {
    const children = this.parentNode.children;
    children[0].classList.toggle('is-hidden');
    children[1].classList.toggle('is-hidden');
  })
})