import { getLanguage } from './utils-min.js';

const messages = {
    es: {
        'account': 'El campo n° de cuenta es obligatorio.',
        'password': 'El campo contraseña es obligatorio.',
        'default': 'Credenciales incorrectas.'
    },
    en: {
        'account': 'The account field is required.',
        'password': 'The password field is required.',
        'default': 'Wrong credentials.'
    }
};

const getMessage = (key = 'default', lang = getLanguage()) => messages[lang][key];

export { getMessage }
