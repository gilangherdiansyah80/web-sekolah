const handleMenu = () => {
  const hamburger = document.getElementById("hamburger-menu"); // Tombol untuk membuka/tutup menu
  const menu = document.getElementById("menu");
  const close = document.getElementById("close-menu");

  hamburger.addEventListener("click", () => {
    close.setAttribute("class", "block");
    hamburger.setAttribute("class", "hidden");
    menu.setAttribute("class", "block");
  });

  close.addEventListener("click", () => {
    close.setAttribute("class", "hidden");
    hamburger.setAttribute("class", "block");
    menu.setAttribute("class", "hidden");
  });
};

document.addEventListener("DOMContentLoaded", () => {
  handleMenu();
});
