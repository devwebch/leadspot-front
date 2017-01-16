
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

/*Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});*/

jQuery(document).ready(function ($) {
    getGeoLocation();
});

function getGeoLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            // geoloc enabled
            $('.leads-counter .loading').delay(3000).fadeOut(100);
            $('.leads-counter .result').delay(3100).fadeIn(500);

        }, function() {
            // geoloc enabled but error
            $('.leads-counter .loading').delay(1000).fadeOut(500);
            $('.leads-counter .error').delay(1500).fadeIn(500);
        });
    } else {
        // Browser doesn't support Geolocation
        $('.leads-counter .loading').delay(1000).fadeOut(500);
        $('.leads-counter .error').delay(1500).fadeIn(500);
    }
}