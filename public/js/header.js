(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/header"],{

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

/***/ "./resources/js/header.js":
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
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
window.jQuery = window.$ = jquery__WEBPACK_IMPORTED_MODULE_1___default.a;
 //window.Popper = require('popper.js').default;

 //window.jQuery = require('jquery');


jquery__WEBPACK_IMPORTED_MODULE_1___default()(document).ready(function () {
  if (document.location.href.indexOf('/accueil') > -1) {
    document.getElementById("text-menu").style.visibility = "visible";
    document.getElementById("text-menu").style.position = "absolute";
    document.getElementById("text-menu").style.left = "50%";
    document.getElementById("text-menu").style.transform = "translate(-50%)";
    document.getElementById("text-menu").style.top = "6vh";
    document.getElementById("text-menu").style.zIndex = "10";
    document.getElementById("mainbutton-menu1").style.color = "#fff";
    document.getElementById("mainbutton-menu1").style.textShadow = "1px 3px 15px #000";
    document.getElementById("mainbutton-menu2").style.color = "#fff";
    document.getElementById("mainbutton-menu2").style.textShadow = "1px 3px 15px #000";
    document.getElementById("mainbutton-menu3").style.color = "#fff";
    document.getElementById("mainbutton-menu3").style.textShadow = "1px 3px 15px #000";
    document.getElementById("mainbutton-menu4").style.color = "#fff";
    document.getElementById("mainbutton-menu4").style.textShadow = "1px 3px 15px #000";
  } else {
    document.getElementById("text-menu").style.visibility = "visible";
    document.getElementById("text-menu").style.position = "relative";
    document.getElementById("mainbutton-menu1").style.color = "#3f3f3f";
    document.getElementById("mainbutton-menu2").style.color = "#3f3f3f";
    document.getElementById("mainbutton-menu3").style.color = "#3f3f3f";
    document.getElementById("mainbutton-menu4").style.color = "#3f3f3f";
  }
});

/***/ }),

/***/ 4:
/*!**************************************!*\
  !*** multi ./resources/js/header.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\website-project\laravel-pushingforward-master\resources\js\header.js */"./resources/js/header.js");


/***/ })

},[[4,"/js/manifest","/js/vendor"]]]);