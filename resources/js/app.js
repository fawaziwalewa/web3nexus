import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import $ from 'jquery';

import Typed from 'typed.js';

import.meta.glob(['../images/**', '../fonts/**',]);

$(document).ready(function () {
    particlesJS.load('particles-js', '/js/particles.json', function() {});
    particlesJS.load('particles-js-f', '/js/particles.json', function() {});

    const ce = new Typed('#type', {
        strings: ['We Provide Cutting Edge', 'We Provide User Friendly', 'We Empower Businesses with Stunning'],
        backSpeed: 50,
        typeSpeed: 50,
        backDelay: 1000,
        startDelay: 1000,
        cursorChar: '_',
        loop: true
    });
});
