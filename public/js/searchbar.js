(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/searchbar"],{

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./resources/js/searchbar.js":
/*!***********************************!*\
  !*** ./resources/js/searchbar.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(bootstrap__WEBPACK_IMPORTED_MODULE_0__);
//window._ = require('lodash');
//import 'popper.js';
window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"]; //import $ from 'jquery';

window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
 //window.jQuery=window.$=$;

$(document).ready(function () {
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

  if (document.location.href.indexOf('showpublic/2') > -1) {
    document.getElementById("chapitre-article-g1").style.visibility = "visible";
    $("#article-search-form").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#chapitre-article-g1 li").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  }

  ;

  if (document.location.href.indexOf('showpublic/3') > -1) {
    document.getElementById("chapitre-article-g2").style.visibility = "visible";
    $("#article-search-form").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#chapitre-article-g2 li").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  }
});

/***/ }),

/***/ 3:
/*!*****************************************!*\
  !*** multi ./resources/js/searchbar.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\website-project\laravel-pushingforward-master\resources\js\searchbar.js */"./resources/js/searchbar.js");


/***/ })

},[[3,"/js/manifest","/js/vendor"]]]);