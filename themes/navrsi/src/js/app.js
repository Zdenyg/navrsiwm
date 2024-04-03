try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('jquery.easing');
    
    //require('more-packages-installed-with-npm-install');

} catch (e) {}

require('./main');
require('./lightbox.min');
