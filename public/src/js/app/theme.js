document.addEventListener('DOMContentLoaded', () => {
    const themeController = document.querySelector('#themeController');
    const themes = ['emerald', 'sunset'];

    themeController.addEventListener('change', (event) => {
        const theme = event.target.value;

        if (themes.includes(theme)) {
            setTheme(theme);
        }
    });

    const init = () => {
        if (!localStorage.getItem('theme')) {
            setTheme('emerald');
        } else {
            document.documentElement.setAttribute('data-theme', getTheme());
            themeController.value = getTheme() === 'sunset' ? 'emerald' : 'sunset';
        }
    }

    const getTheme = () => localStorage.getItem('theme');

    const setTheme = (theme) => localStorage.setItem('theme', theme);

    init();
});
