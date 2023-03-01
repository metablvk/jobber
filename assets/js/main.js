const hamburger = document.querySelector('.hamburger');
const sidenav = document.querySelector('.sidenav');
const dropdownBtns = document.querySelectorAll('.dropdown_btn');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('hamburger_open');
  sidenav.classList.toggle('sidenav_open');
});

dropdownBtns.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    // Check to see if span, or the chevron was clicked and adjust parent selection
    if (e.target.nodeName === 'SPAN' || e.target.nodeName === 'I') {
      e.target.parentNode.parentNode.children[1].classList.toggle(
        'dropdown_menu_open'
      );
      // Update chevron state
      e.target.parentNode.children[1].classList.toggle('active');
    } else {
      // Update chevron state
      e.target.parentNode.children[0].children[1].classList.toggle('active');
      e.target.parentNode.children[1].classList.toggle('dropdown_menu_open');
    }
  });
});
