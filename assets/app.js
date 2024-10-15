import './bootstrap.js';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '@popperjs/core';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

setTimeout(function() {
    let alert = document.querySelector('.alert');
    if (alert) {
        alert.style.display = 'none';
    }
}, 6000);
