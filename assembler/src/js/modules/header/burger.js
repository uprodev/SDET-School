export const burger = () => {
  const btns = document.querySelectorAll(".header_burger");
  const menus = document.querySelectorAll(".header_menu_mob");
  const page = document.querySelector("#page");

  btns.forEach((btn) => {
    btn.addEventListener("mouseenter", () => {
      btn.classList.add("hover");
    });
    btn.addEventListener("mouseleave", () => {
      btn.classList.remove("hover");
    });
    btn.addEventListener("click", () => {
      btn.classList.toggle("active");
      btn.classList.remove("hover");
      toggleMenu();
    });
  });
  const toggleMenu = () => {
    menus.forEach((menu) => {
      menu.classList.toggle("scale-y-0");
    });
    page.classList.toggle("active");
    document.querySelector("body").classList.toggle("overflow-hidden");
  };
};
