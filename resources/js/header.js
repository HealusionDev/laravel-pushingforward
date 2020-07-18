//window._ = require('lodash');
window.jQuery=window.$=$;

import 'popper.js';
//window.Popper = require('popper.js').default;
import $ from 'jquery';
//window.jQuery = require('jquery');

import 'bootstrap';

$(document).ready(function(){
   	if (document.location.href.indexOf('/accueil') > -1){
   		document.getElementById("text-menu").style.visibility="visible";
        document.getElementById("text-menu").style.position="absolute";
        document.getElementById("text-menu").style.left="50%";
        document.getElementById("text-menu").style.transform="translate(-50%)";
        document.getElementById("text-menu").style.top="6vh";
        document.getElementById("text-menu").style.zIndex="10";
        document.getElementById("mainbutton-menu1").style.color="#fff";
        document.getElementById("mainbutton-menu1").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu2").style.color="#fff";
        document.getElementById("mainbutton-menu2").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu3").style.color="#fff";
        document.getElementById("mainbutton-menu3").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu4").style.color="#fff";
        document.getElementById("mainbutton-menu4").style.textShadow="1px 3px 15px #000";
    }else if (document.location.href.indexOf('/[]') > -1){
        document.getElementById("text-menu").style.visibility="visible";
        document.getElementById("text-menu").style.position="absolute";
        document.getElementById("text-menu").style.left="50%";
        document.getElementById("text-menu").style.transform="translate(-50%)";
        document.getElementById("text-menu").style.top="6vh";
        document.getElementById("text-menu").style.zIndex="10";
        document.getElementById("mainbutton-menu1").style.color="#fff";
        document.getElementById("mainbutton-menu1").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu2").style.color="#fff";
        document.getElementById("mainbutton-menu2").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu3").style.color="#fff";
        document.getElementById("mainbutton-menu3").style.textShadow="1px 3px 15px #000";
        document.getElementById("mainbutton-menu4").style.color="#fff";
        document.getElementById("mainbutton-menu4").style.textShadow="1px 3px 15px #000";
    } else {
    	document.getElementById("text-menu").style.visibility="visible";
        document.getElementById("text-menu").style.position="relative";
        document.getElementById("mainbutton-menu1").style.color="#3f3f3f";
        document.getElementById("mainbutton-menu2").style.color="#3f3f3f";
        document.getElementById("mainbutton-menu3").style.color="#3f3f3f";
        document.getElementById("mainbutton-menu4").style.color="#3f3f3f";
    }
});
