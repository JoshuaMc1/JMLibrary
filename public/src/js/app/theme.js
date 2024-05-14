document.addEventListener('DOMContentLoaded', () => {
    const themeController = document.querySelector('#themeController');
    const theme = document.querySelector('#theme');
    const currentTheme = document.documentElement.getAttribute('data-theme');

    init();

    themeController.addEventListener('change', () => {
        theme.value = currentTheme === 'emerald' ? 'sunset' : 'emerald';

        themeController.parentElement.parentElement.submit();
    });

    function init() {
        (currentTheme === 'emerald') ?
            themeController.checked = true :
            themeController.checked = false;
    }
});
