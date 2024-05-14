const setText = (element, text) => {
    element.textContent = text;

    return element;
}

const setHTML = (element, html) => {
    element.innerHTML = html;

    return element;
}

const setAttribute = (element, key, value) => {
    element.setAttribute(key, value);

    return element;
}

const clearContainers = (containers) => {
    containers.forEach(container => {
        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }
    });
}

export { setText, setHTML, setAttribute, clearContainers };
