const path = window.location.pathname;

const menuItems = document.querySelector('.sidebar-menu').querySelectorAll('li');
menuItems.forEach(item => {
    if (item.firstElementChild) {
        let elem = item.firstElementChild;

        if (elem.getAttribute('href') == path) {
            item.classList.add('active');
        }
    }
});