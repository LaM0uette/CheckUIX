function toggleMenu() {
    const navMenu = document.querySelector('.nav-menu');
    const hamburgerBtn = document.querySelector('.hamburger-btn');
    navMenu.classList.toggle('active');
    hamburgerBtn.classList.toggle('open');
}

function closeMenuOnClick() {
    const navMenu = document.querySelector('.nav-menu');
    const hamburgerBtn = document.querySelector('.hamburger-btn');
    if (navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        hamburgerBtn.classList.remove('open');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.body.addEventListener('click', (e) => {
        if (e.target.closest('.hamburger-btn') || e.target.closest('.nav-menu')) {
            return;
        }
        closeMenuOnClick();
    });
});