(()=>{function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,e){for(var o=0;o<e.length;o++){var r=e[o];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,n(r.key),r)}}function n(e){var n=function(e,n){if("object"!=t(e)||!e)return e;var o=e[Symbol.toPrimitive];if(void 0!==o){var r=o.call(e,n||"default");if("object"!=t(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(e)}(e,"string");return"symbol"==t(n)?n:n+""}var o=function(){return t=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)},(n=[{key:"init",value:function(){$(document).on("click",".btn-trigger-active-theme",(function(t){t.preventDefault();var e=$(t.currentTarget);Botble.showButtonLoading(e),$httpClient.make().post(e.data("url")).then((function(t){var e=t.data;Botble.showSuccess(e.message),window.location.reload()})).finally((function(){Botble.hideButtonLoading(e)}))})),$(document).on("click",".btn-trigger-remove-theme",(function(t){t.preventDefault();var e=$(t.currentTarget);$("#confirm-remove-theme-button").data("theme",e.data("theme")).data("url",e.data("url")),$("#remove-theme-modal").modal("show")})),$(document).on("click","#confirm-remove-theme-button",(function(t){t.preventDefault();var e=$(t.currentTarget);Botble.showButtonLoading(e),$httpClient.make().post(e.data("url")).then((function(t){var e=t.data;Botble.showSuccess(e.message),window.location.reload()})).finally((function(){Botble.hideButtonLoading(e),$("#remove-theme-modal").modal("hide")}))}))}}])&&e(t.prototype,n),o&&e(t,o),Object.defineProperty(t,"prototype",{writable:!1}),t;var t,n,o}();$((function(){(new o).init()}))})();