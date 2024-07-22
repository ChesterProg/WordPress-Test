document.addEventListener('DOMContentLoaded', function() {
  const burgerMenu = document.querySelector('.burger-menu');
  const menuList = document.querySelector('.menu-list');

  burgerMenu.addEventListener('click', function() {
    menuList.classList.toggle('active');
  });
});