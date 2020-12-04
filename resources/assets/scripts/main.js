// import external dependencies
import 'jquery';

import Hello from './components/hello'
import Modal from './components/modal.js'

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,
    // Home page
    home,
    // About Us page, note the change from about-us to aboutUs.
    aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

const components = [{
        class: Hello,
        selector: '.js-hello'
    },
    {
        class: Modal,
        selector: '.js-modal-trigger'
    },
]

components.forEach(component => {
    if (document.querySelector(component.selector) !== null)
        document.querySelectorAll(component.selector).forEach(element => new component.class(element, component.options))
})