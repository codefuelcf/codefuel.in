var $ = require('jquery')

$(function() {
    $('#navbar-mobile-icon').on('click', function() {
        $('#navbar-mobile-icon').toggleClass('transform rotate-90');
        $('#navbar').toggleClass('hidden');
    });
});