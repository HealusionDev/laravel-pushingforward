//window._ = require('lodash');

import 'popper.js';
//window.Popper = require('popper.js').default;
import $ from 'jquery';
//window.jQuery = require('jquery');

import 'bootstrap';
import 'summernote/dist/summernote-bs4.js';

window.jQuery=window.$=$;


$(document).ready(function() {
	$('#detail').summernote({
		height: '68vh',
		maxHeight: '68vh',
		focus: true,
		placeholder: 'Contenu...',
		toolbar: [
		    ['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],
		    ['misc', ['undo','redo','fullscreen','help','codeview']],
		    ['fontsize', ['fontsize']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['insert', ['link', 'picture','video']]
	  	]
	})
    $([document.documentElement, document.body]).animate({
	        scrollTop: $(".article-wrapper").offset().top
	}, 1000);

	$('#clear').on('click',function(){
		$('#detail').summernote('code',null);
	})
})







