var $ = require('jquery')
import Typed from 'typed.js';

$(function() {

    // Navbar icon
    $('#navbar-mobile-icon').on('click', function() {
        $('#navbar').toggleClass('hidden');
        $('#navbar-mobile-icon').toggleClass('transform rotate-90');
    });

    // Home hero typed
    if($('#home-typed-js-hero').length)
    {
        new Typed('#home-typed-js-hero', {
            strings: ['Codefuel', 'Engineers', 'Developers', 'Designers',  'Creators',  'Marketers'],
            typeSpeed: 100,
            loop: true,
            smartBackspace: false,
            showCursor: false,
        });
    }

});