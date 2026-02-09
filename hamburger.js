function toggleMenu() {
  document.querySelector(".nav.nav-button").classList.toggle("show");
  document.querySelector(".hamburger").classList.toggle("active");
  document.querySelector(".header").classList.toggle("menu-open");
}

document.querySelectorAll('.ig-btn').forEach(btn => {
  btn.addEventListener('click', function (e) {
    e.preventDefault();

    const parent = this.parentElement;
    parent.classList.toggle('active');

    // tutup dropdown lain
    document.querySelectorAll('.ig-dropdown').forEach(dd => {
      if (dd !== parent) dd.classList.remove('active');
    });
  });
});
