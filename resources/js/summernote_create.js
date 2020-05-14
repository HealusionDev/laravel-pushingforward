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
		callbacks: {
            onImageUpload: function(files) {
                for(let i=0; i < files.length; i++) {
                    $.upload(files[i]);
                }
            }
        },
		height: '68vh',
		maxHeight: '68vh',
		focus: true,
		placeholder: 'Contenu...',
		fontSizes: ['8', '9', '10', '11', '12', '14', '16','18', '20', '22', '24', '26', '32', '36', '48' , '64'],
		toolbar: [
		    ['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear','strikethrough', 'superscript', 'subscript']],
		    ['misc', ['undo','redo','fullscreen','help','codeview']],
		    ['fontsize', ['fontsize']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['insert', ['link', 'picture','video']]
	  	]
	})
	$.upload = function (file) {
        let out = new FormData();
        out.append('file', file, file.name);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'POST',
            url: '/uploadimg',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function (img) {
                $('#detail').summernote('insertImage', img);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    };
    $([document.documentElement, document.body]).animate({
	        scrollTop: $(".article-wrapper").offset().top
	}, 1000);
	$('#clear').on('click',function(){
		$('#detail').summernote('code',null);
	})
})







