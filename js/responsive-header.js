const buttons_section = document.getElementsByClassName("header-buttons")[0];
const menu_button = document.getElementById("menu-button");

menu_button.addEventListener("click", () => {
    buttons_section.classList.toggle("remove");
});