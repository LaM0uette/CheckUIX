const themeToggleButton = document.getElementById("headerSwitchTheme");

const darkColors = {
    "--color--h1": "#10191E",
    "--color--h2": "#EBEBEB",
    "--color--h3": "#B0DB6F",
    "--color--h4": "#7A7A7A"
};

const lightColors = {
    "--color--h1": "#EBEBEB",
    "--color--h2": "#243842",
    "--color--h3": "#B0DB6F",
    "--color--h4": "#EBEBEB"
};

function setTheme(theme) {
    const root = document.documentElement;
    const colors = theme === "dark" ? darkColors : lightColors;

    for (const [property, value] of Object.entries(colors)) {
        root.style.setProperty(property, value);
    }

    localStorage.setItem("theme", theme);
}

function toggleTheme() {
    const currentTheme = localStorage.getItem("theme") || "dark";
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    setTheme(newTheme);
}

// Appliquer le thème enregistré ou le thème par défaut
setTheme(localStorage.getItem("theme") || "dark");

themeToggleButton.addEventListener("click", function () {
    const isDark = this.querySelector(".header-icon-moon").style.display !== "none";

    this.querySelector(".header-icon-moon").style.display = isDark ? "none" : "block";
    this.querySelector(".header-icon-sun").style.display = isDark ? "block" : "none";

    toggleTheme();
});