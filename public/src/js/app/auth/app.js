import { empty } from "../../modules/validator/validator-min.js";
import { createElement, appendChild } from "../../modules/components/components-min.js";
import { setText, clearContainers } from "../../modules/components/utils-min.js";
import { getMessage } from "../../modules/validations/login-min.js";

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#fLogin');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const account = document.querySelector('#account').value;
        const cAccount = document.querySelector('#cA');
        const password = document.querySelector('#password').value;
        const cPassword = document.querySelector('#cP');

        if (empty(account) || empty(password)) {
            clearContainers([cAccount, cPassword]);

            showError([
                {
                    container: cAccount,
                    message: getMessage('account')
                },
                {
                    container: cPassword,
                    message: getMessage('password')
                }
            ]);

            return;
        }

        form.submit();
    });

    function showError(elements) {
        elements.forEach(element => {
            const label = createElement('label', {
                class: 'label'
            });

            const span = createElement('span', {
                class: 'label-text-alt text-error'
            });

            setText(span, element.message);

            appendChild(label, span);
            appendChild(element.container, label);
        });
    }
});
