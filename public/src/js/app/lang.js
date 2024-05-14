document.addEventListener('DOMContentLoaded', () => {
    const languageSwitch = document.querySelector('#languageSwitch');

    languageSwitch.addEventListener('change', () => {
        languageSwitch.parentElement.submit();
    });
});
