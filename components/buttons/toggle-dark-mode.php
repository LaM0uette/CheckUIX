<style>
    .toggle-dark-mode {
        position: relative;
        width: 60px;
        height: 30px;
    }

    .toggle-label {
        position: absolute;
        width: 100%;
        height: 30px;
        background-color: var(--color--h1-second);
        border-radius: 15px;
        cursor: pointer;
        border: 0.5px solid var(--color--h1-third);
    }

    .toggle-checkbox {
        position: absolute;
        display: none;
    }

    .toggle-slider {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 15px;
        -webkit-transition: 0.2s;
        transition: 0.2s;
    }

    .toggle-checkbox:checked ~ .toggle-slider {
        background-color: var(--color--h2);
    }

    .toggle-slider::before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        -webkit-box-shadow: inset 12px -4px 0 0 var(--color--h2);
        box-shadow: inset 10px -4px 0 0 var(--color--h2);
        background-color: var(--color--h1-second);
        -webkit-transition: 0.2s;
        transition: 0.2s;
    }

    .toggle-checkbox:checked ~ .toggle-slider::before {
        -webkit-transform: translateX(30px);
        -ms-transform: translateX(30px);
        transform: translateX(30px);
        background-color: var(--color--h1-second);
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

<div class="toggle-dark-mode">
    <label class="toggle-label">
        <input type="checkbox" class="toggle-checkbox" id="toggleDarkModeSwitch">
        <span class="toggle-slider"></span>
    </label>
</div>

<script>
    const themeToggleButton = document.getElementById("toggleDarkModeSwitch");
    const logo = document.querySelector(".header.logo");
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
    const storedTheme = localStorage.getItem("theme") || "dark";

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
        setLogo(newTheme);
    }

    function setLogo(theme) {
        if (theme === "dark") {
            logo.setAttribute("src", "assets/svg/logo/LogoLight.svg");
            logo.setAttribute("alt", "Logo CheckUIX Light");
        } else {
            logo.setAttribute("src", "assets/svg/logo/LogoDark.svg");
            logo.setAttribute("alt", "Logo CheckUIX Dark");
        }
    }

    setTheme(storedTheme);
    setLogo(storedTheme);

    themeToggleButton.checked = storedTheme === "light";
    themeToggleButton.addEventListener("change", function () { toggleTheme(); });

</script>
