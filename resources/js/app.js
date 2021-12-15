require('./bootstrap');

import Alpine from 'alpinejs';

import {WOW} from 'wowjs';

window.Alpine = Alpine;

Alpine.start();


var wow = new WOW(
    {
        boxClass:     'wow',
        animateClass: 'animate__animated',
        offset: 0,
        mobile: false,
        live: false,
    }
);

wow.init();
