import Typed from 'typed.js';

var $ = require('jquery')

$(function() {

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

    // Navbar icon
    $('#navbar-mobile-icon').on('click', function() {
        $('#navbar-mobile-icon').toggleClass('transform rotate-90');
        $('#navbar').toggleClass('hidden');
    });

});