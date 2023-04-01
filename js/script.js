const themeToggleButton = document.getElementById("headerSwitchTheme");

themeToggleButton.addEventListener("click", function () {
    const isDark = this.querySelector(".header-icon-moon").style.display !== "none";

    this.querySelector(".header-icon-moon").style.display = isDark ? "none" : "block";
    this.querySelector(".header-icon-sun").style.display = isDark ? "block" : "none";
});