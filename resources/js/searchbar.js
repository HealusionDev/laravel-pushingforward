//window._ = require('lodash');

//import 'popper.js';
window.Popper = require('popper.js').default;
//import $ from 'jquery';
window.jQuery = require('jquery');

import 'bootstrap';

//window.jQuery=window.$=$;

$(document).ready(function(){
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if ($window.scrollTop() > pos) {
                $this.css({
                    position: 'fixed',
                    top: '8vh',
                    left: '13.6vw'
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

    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if ($window.scrollTop() > pos) {
                $this.css({
                    position: 'fixed',
                    top: '0vh',
                    left: '12.4vw'
                });
            } else {
                $this.css({
                    position: 'absolute',
                    top: '0vh',
                    left: '0vw'
                });
            }
        });
    };
    $('#chapitre-article').followTo(212);

    if (document.location.href.indexOf('showpublic/2#') > -1){
        document.getElementById("chapitre-article-g1").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g1 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    };

    if (document.location.href.indexOf('showpublic/3#') > -1){
        document.getElementById("chapitre-article-g2").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g2 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/4#') > -1){
        document.getElementById("chapitre-article-g3").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g3 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/5#') > -1){
        document.getElementById("chapitre-article-g4").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g4 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/6#') > -1){
        document.getElementById("chapitre-article-g5").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g5 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/8#') > -1){
        document.getElementById("chapitre-article-g6").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g6 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/9#') > -1){
        document.getElementById("chapitre-article-g7").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g7 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }

    if (document.location.href.indexOf('showpublic/10#') > -1){
        document.getElementById("chapitre-article-g8").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g8 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    };

    if (document.location.href.indexOf('showpublic/12#') > -1){
        document.getElementById("chapitre-article-g10").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g10 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    };

    if (document.location.href.indexOf('showpublic/21#') > -1){
        document.getElementById("chapitre-article-g11").style.visibility="visible";
        
        $("#article-search-form").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#chapitre-article-g11 li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    };


});