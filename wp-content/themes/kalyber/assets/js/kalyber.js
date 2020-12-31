"use strict";function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function sidebarHandler(){var t=window.scrollY,e=document.querySelector(".pop-up-svg__container"),o=document.querySelector(".pop-up__container"),n=document.querySelector(".blog__inner__wrap"),s=window.matchMedia("(max-width: 1023px)");o&&(s.matches?(n.style.overflow="hidden",t+window.innerHeight>=document.body.clientHeight?(e.style.position="absolute",o.style.position="absolute"):(e.style.position="fixed",o.style.position="fixed")):(n.style.overflow="unset",o.style.position="sticky"))}!function(t,e){"object"==("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t=t||self).Headroom=e()}(void 0,function(){function t(){return"undefined"!=typeof window}function e(t,n,s){var e,o,i,a,r,c,l,d=function(){var t=!1;try{var e={get passive(){t=!0}};window.addEventListener("test",e,e),window.removeEventListener("test",e,e)}catch(e){t=!1}return t}(),u=!1,h=(o=t)&&o.document&&9===o.document.nodeType?(r=(a=o).document,c=r.body,l=r.documentElement,{scrollHeight:function(){return Math.max(c.scrollHeight,l.scrollHeight,c.offsetHeight,l.offsetHeight,c.clientHeight,l.clientHeight)},height:function(){return a.innerHeight||l.clientHeight||c.clientHeight},scrollY:function(){return void 0!==a.pageYOffset?a.pageYOffset:(l||c.parentNode||c).scrollTop}}):(i=o,{scrollHeight:function(){return Math.max(i.scrollHeight,i.offsetHeight,i.clientHeight)},height:function(){return Math.max(i.offsetHeight,i.clientHeight)},scrollY:function(){return i.scrollTop}}),p=h.scrollY(),f={};function m(){var t=Math.round(h.scrollY()),e=h.height(),o=h.scrollHeight();f.scrollY=t,f.lastScrollY=p,f.direction=p<t?"down":"up",f.distance=Math.abs(t-p),f.isOutOfBounds=t<0||o<t+e,f.top=t<=n.offset[f.direction],f.bottom=o<=t+e,f.toleranceExceeded=f.distance>n.tolerance[f.direction],s(f),p=t,u=!1}function y(){u||(u=!0,e=requestAnimationFrame(m))}var v=!!d&&{passive:!0,capture:!1};return t.addEventListener("scroll",y,v),m(),{destroy:function(){cancelAnimationFrame(e),t.removeEventListener("scroll",y,v)}}}function o(t){return t===Object(t)?t:{down:t,up:t}}function n(t,e){e=e||{},Object.assign(this,n.options,e),this.classes=Object.assign({},n.options.classes,e.classes),this.elem=t,this.tolerance=o(this.tolerance),this.offset=o(this.offset),this.initialised=!1,this.frozen=!1}return n.prototype={constructor:n,init:function(){return n.cutsTheMustard&&!this.initialised&&(this.addClass("initial"),this.initialised=!0,setTimeout(function(t){t.scrollTracker=e(t.scroller,{offset:t.offset,tolerance:t.tolerance},t.update.bind(t))},100,this)),this},destroy:function(){this.initialised=!1,Object.keys(this.classes).forEach(this.removeClass,this),this.scrollTracker.destroy()},unpin:function(){!this.hasClass("pinned")&&this.hasClass("unpinned")||(this.addClass("unpinned"),this.removeClass("pinned"),this.onUnpin&&this.onUnpin.call(this))},pin:function(){this.hasClass("unpinned")&&(this.addClass("pinned"),this.removeClass("unpinned"),this.onPin&&this.onPin.call(this))},freeze:function(){this.frozen=!0,this.addClass("frozen")},unfreeze:function(){this.frozen=!1,this.removeClass("frozen")},top:function(){this.hasClass("top")||(this.addClass("top"),this.removeClass("notTop"),this.onTop&&this.onTop.call(this))},notTop:function(){this.hasClass("notTop")||(this.addClass("notTop"),this.removeClass("top"),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){this.hasClass("bottom")||(this.addClass("bottom"),this.removeClass("notBottom"),this.onBottom&&this.onBottom.call(this))},notBottom:function(){this.hasClass("notBottom")||(this.addClass("notBottom"),this.removeClass("bottom"),this.onNotBottom&&this.onNotBottom.call(this))},shouldUnpin:function(t){return"down"===t.direction&&!t.top&&t.toleranceExceeded},shouldPin:function(t){return"up"===t.direction&&t.toleranceExceeded||t.top},addClass:function(t){this.elem.classList.add.apply(this.elem.classList,this.classes[t].split(" "))},removeClass:function(t){this.elem.classList.remove.apply(this.elem.classList,this.classes[t].split(" "))},hasClass:function(t){return this.classes[t].split(" ").every(function(t){return this.classList.contains(t)},this.elem)},update:function(t){t.isOutOfBounds||!0!==this.frozen&&(t.top?this.top():this.notTop(),t.bottom?this.bottom():this.notBottom(),this.shouldUnpin(t)?this.unpin():this.shouldPin(t)&&this.pin())}},n.options={tolerance:{up:0,down:0},offset:0,scroller:t()?window:null,classes:{frozen:"headroom--frozen",pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom",initial:"headroom"}},n.cutsTheMustard=!!(t()&&function(){}.bind&&"classList"in document.documentElement&&Object.assign&&Object.keys&&requestAnimationFrame),n}),document.addEventListener("DOMContentLoaded",function(){var t=document.querySelector("header");new Headroom(t,{offset:{up:280,down:50}}).init()}),window.addEventListener("scroll",function(){sidebarHandler()}),window.addEventListener("resize",function(){sidebarHandler()}),document.addEventListener("DOMContentLoaded",function(){var t=document.querySelector("#hambBut"),e=document.querySelector("#header__mobile-nav");t.onclick=function(){t.classList.toggle("open"),e.classList.toggle("open")}}),document.addEventListener("DOMContentLoaded",function(){var o=document.getElementsByClassName("pop-up__wrap");Array.from(o).forEach(function(t){var e=document.getElementById(t.id+"-btn");t.querySelector(".pop-up-exit").onclick=function(){t.classList.remove("pop-up-show")},e.onclick=function(){Array.from(o).forEach(function(t){t.classList.remove("pop-up-show")}),t.classList.toggle("pop-up-show")}})}),document.addEventListener("DOMContentLoaded",function(){var t=document.querySelectorAll(".word"),e=[],o=0;t.forEach(function(t){e.push(t.textContent)}),0<e.length&&setInterval(function(){t.forEach(function(t){t.classList.remove("fadeAnimation")}),t[o].classList.add("fadeAnimation"),o==t.length-1?o=0:o++},3e3)}),document.addEventListener("DOMContentLoaded",function(){window.dataLayer=window.dataLayer||[];var t=document.querySelector("#categories").value,e=document.querySelector("#is404").value,o=document.querySelector("#lastUpdated").value,n=document.querySelector("#pageId").value,s=document.querySelector("#pageName").value,i=document.querySelector("#pageTemplate").value,a=document.title,r=document.querySelector("#tags").value;window.dataLayer.push({pageInfo:{categories:t,is404:e,lastUpdated:o,pageId:n,pageName:s,pageTemplate:i,pageTitle:a,tags:r}})});