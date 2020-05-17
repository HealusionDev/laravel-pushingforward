//window._ = require('lodash');

import 'popper.js';
//window.Popper = require('popper.js').default;
import $ from 'jquery';
//window.jQuery = require('jquery');

import 'bootstrap';

window.jQuery=window.$=$;

$(document).ready(function(){
    $("#myToast").toast('show');
});


