const themeToggleButton = document.getElementById("headerSwitchTheme");

const darkColors = {
    "--color--h1-first": "#2C3E4A",
    "--color--h1-second": "#687A7F",
    "--color--h1-third": "#AABDB0",
    "--color--h2": "#D9DDDF",
    "--color--h3": "#21B2DF",
};

const lightColors = {
    "--color--h1-first": "#E0E7E8",
    "--color--h1-second": "#BDC6C7",
    "--color--h1-third": "#497462",
    "--color--h2": "#2C3E4A",
    "--color--h3": "#21B2DF"
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