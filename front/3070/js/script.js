const navItem = document.querySelectorAll('.nav-item');
const contentContainer = document.querySelector('.content-container');

navItem.forEach(item => {
    item.addEventListener('mouseenter', () => {
      contentContainer.style.display = 'block';
    });
  
    item.addEventListener('mouseleave', () => {
      contentContainer.style.display = 'none';
    });
});