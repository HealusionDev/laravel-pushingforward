//window._ = require('lodash');

import 'popper.js';
//window.Popper = require('popper.js').default;
import $ from 'jquery';
//window.jQuery = require('jquery');

import 'bootstrap';

window.jQuery=window.$=$;

$(document).ready(function(){
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if ($window.scrollTop() > pos) {
                $this.css({
                    position: 'fixed',
                    top: '8vh',
                    left: '9.4vw'
                });
            } else {
                $this.css({
                    position: 'absolute',
                    top: '8vh',
                    left: '1.2vw'
                });
            }
        });
    };
    $('#menufixe').followTo(212);
});