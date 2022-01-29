document.getElementById('menu-button').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
    document.getElementById('menu-button').firstElementChild.classList.toggle('hidden');
    document.getElementById('menu-button').lastElementChild.classList.toggle('hidden');
});