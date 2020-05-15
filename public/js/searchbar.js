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
/* harmony import */ var popper_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(bootstrap__WEBPACK_IMPORTED_MODULE_2__);
//window._ = require('lodash');
 //window.Popper = require('popper.js').default;

 //window.jQuery = require('jquery');


window.jQuery = window.$ = jquery__WEBPACK_IMPORTED_MODULE_1___default.a;
jquery__WEBPACK_IMPORTED_MODULE_1___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_1___default.a.fn.followTo = function (pos) {
    var $this = this,
        $window = jquery__WEBPACK_IMPORTED_MODULE_1___default()(window);
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

  jquery__WEBPACK_IMPORTED_MODULE_1___default()('#menufixe').followTo(212);
});

/***/ }),

/***/ 3:
/*!*****************************************!*\
  !*** multi ./resources/js/searchbar.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laravel-projects\website1\resources\js\searchbar.js */"./resources/js/searchbar.js");


/***/ })

},[[3,"/js/manifest","/js/vendor"]]]);