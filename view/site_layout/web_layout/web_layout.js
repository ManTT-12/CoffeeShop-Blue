const navMenuIcon = document.getElementById("nav-menu-icon");
const navShortMenu = document.getElementById("nav-short-menu");

navMenuIcon.addEventListener('click', function() {
    if (navShortMenu.style.opacity == "1") {
        navShortMenu.style.opacity = '0';
        navShortMenu.style.pointerEvents = 'none';
    } else {
        navShortMenu.style.opacity = '1';
        navShortMenu.pointerEvents = 'auto';
    }
})