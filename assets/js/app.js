document.querySelector('.hamburger-menu-icon').addEventListener('click', (e) => {
    if (document.querySelector('.responsive-menu').classList.contains('hide')) {
        document.querySelector('.responsive-menu').classList.remove('hide');
    } else {
        document.querySelector('.responsive-menu').classList.add('hide');
    }
});