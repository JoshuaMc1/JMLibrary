import { setAttribute, setText, setHTML } from "./utils.js";

const appendChild = (element, child) => {
    element.appendChild(child);
}

const createElement = (type, options = {}) => {
    const element = document.createElement(type);

    Object.keys(options).forEach(key => {
        setAttribute(element, key, options[key]);
    });

    return element;
}

const createElementWithText = (type, options = {}, text) => {
    const element = createElement(type, options);
    setText(element, text);

    return element;
}

const createElementWithHTML = (type, options = {}, html) => {
    const element = createElement(type, options);
    setHTML(element, html);

    return element;
}

const createElementWithChildren = (type, options = {}, children) => {
    const element = createElement(type, options);
    children.forEach(child => appendChild(element, child));

    return element;
}

const createElementWithChildrenAndText = (type, options = {}, children, text) => {
    const element = createElementWithChildren(type, options, children);
    setText(element, text);

    return element;
}

const createElementWithChildrenAndHTML = (type, options = {}, children, html) => {
    const element = createElementWithChildren(type, options, children);
    setHTML(element, html);

    return element;
}

const createElementWithChildrenAndTextAndHTML = (type, options = {}, children, text, html) => {
    const element = createElementWithChildren(type, options, children);
    setText(element, text);
    setHTML(element, html);

    return element;
}

export {
    createElement,
    createElementWithText,
    createElementWithHTML,
    createElementWithChildren,
    createElementWithChildrenAndText,
    createElementWithChildrenAndHTML,
    createElementWithChildrenAndTextAndHTML,
    appendChild
};
