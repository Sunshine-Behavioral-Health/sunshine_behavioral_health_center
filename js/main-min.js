var slideIndex=1;function plusSlides(e){showSlides(slideIndex+=e),console.log("finished PlusSlide()")}function currentSlide(e){showSlides(slideIndex=e),console.log("finished currentSlide()")}function showSlides(e){let t,n=document.getElementsByClassName("carousel-slide"),i=document.getElementsByClassName("dot");for(e>n.length&&(slideIndex=1),e<1&&(slideIndex=n.length),t=0;t<n.length;t++)n[t].style.display="none";for(t=0;t<i.length;t++)i[t].className=i[t].className.replace(" active","");n[slideIndex-1].style.display="block",i[slideIndex-1].className+=" active",console.log("finished showSlides()")}showSlides(slideIndex),console.log("All of carousel.js has run"),function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.Glide=t()}(this,function(){"use strict";var e={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,bound:!1,swipeThreshold:80,dragThreshold:120,perTouch:!1,touchRatio:.5,touchAngle:45,animationDuration:400,rewind:!0,rewindDuration:800,animationTimingFunc:"cubic-bezier(.165, .840, .440, 1)",throttle:10,direction:"ltr",peek:0,breakpoints:{},classes:{direction:{ltr:"glide--ltr",rtl:"glide--rtl"},slider:"glide--slider",carousel:"glide--carousel",swipeable:"glide--swipeable",dragging:"glide--dragging",cloneSlide:"glide__slide--clone",activeNav:"glide__bullet--active",activeSlide:"glide__slide--active",disabledArrow:"glide__arrow--disabled"}};function t(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},i=function(e,t,n){return t&&o(e.prototype,t),n&&o(e,n),e};function o(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}var r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(e[i]=n[i])}return e};function s(e){return parseInt(e)}function a(e){return"string"==typeof e}function u(e){var t=void 0===e?"undefined":n(e);return"function"===t||"object"===t&&!!e}function l(e){return"function"==typeof e}function c(e){return void 0===e}function d(e){return e.constructor===Array}function f(e,t,n){Object.defineProperty(e,t,n)}function h(e,t){var n=r({},e,t);return t.hasOwnProperty("classes")&&(n.classes=r({},e.classes,t.classes),t.classes.hasOwnProperty("direction")&&(n.classes.direction=r({},e.classes.direction,t.classes.direction))),t.hasOwnProperty("breakpoints")&&(n.breakpoints=r({},e.breakpoints,t.breakpoints)),n}var v=(i(p,[{key:"on",value:function(e,t){if(d(e))for(var n=0;n<e.length;n++)this.on(e[n],t);this.hop.call(this.events,e)||(this.events[e]=[]);var i=this.events[e].push(t)-1;return{remove:function(){delete this.events[e][i]}}}},{key:"emit",value:function(e,t){if(d(e))for(var n=0;n<e.length;n++)this.emit(e[n],t);this.hop.call(this.events,e)&&this.events[e].forEach(function(e){e(t||{})})}}]),p);function p(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};t(this,p),this.events=e,this.hop=e.hasOwnProperty}var m=(i(g,[{key:"mount",value:function(e){var t=0<arguments.length&&void 0!==e?e:{};return this._e.emit("mount.before"),u(t)&&(this._c=function(e,t,n){var i={};for(var o in t)l(t[o])&&(i[o]=t[o](e,i,n));for(var r in i)l(i[r].mount)&&i[r].mount();return i}(this,t,this._e)),this._e.emit("mount.after"),this}},{key:"mutate",value:function(e){var t=0<arguments.length&&void 0!==e?e:[];return d(t)&&(this._t=t),this}},{key:"update",value:function(e){var t=0<arguments.length&&void 0!==e?e:{};return this.settings=h(this.settings,t),t.hasOwnProperty("startAt")&&(this.index=t.startAt),this._e.emit("update"),this}},{key:"go",value:function(e){return this._c.Run.make(e),this}},{key:"move",value:function(e){return this._c.Transition.disable(),this._c.Move.make(e),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(e){var t=0<arguments.length&&void 0!==e&&e;return t&&(this.settings.autoplay=t),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(e,t){return this._e.on(e,t),this}},{key:"isType",value:function(e){return this.settings.type===e}},{key:"settings",get:function(){return this._o},set:function(e){u(e)&&(this._o=e)}},{key:"index",get:function(){return this._i},set:function(e){this._i=s(e)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(e){this._d=!!e}}]),g);function g(n){var i=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};t(this,g),this._c={},this._t=[],this._e=new v,this.disabled=!1,this.selector=n,this.settings=h(e,i),this.index=this.settings.startAt}function _(){return(new Date).getTime()}function w(e,t,n){var i=void 0,o=void 0,r=void 0,s=void 0,a=0;function u(){a=!1===n.leading?0:_(),i=null,s=e.apply(o,r),i||(o=r=null)}function l(){var l=_();a||!1!==n.leading||(a=l);var c=t-(l-a);return o=this,r=arguments,c<=0||t<c?(i&&(clearTimeout(i),i=null),a=l,s=e.apply(o,r),i||(o=r=null)):i||!1===n.trailing||(i=setTimeout(u,c)),s}return n=n||{},l.cancel=function(){clearTimeout(i),a=0,i=o=r=null},l}var y={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]};function b(e){if(e&&e.parentNode){for(var t=e.parentNode.firstChild,n=[];t;t=t.nextSibling)1===t.nodeType&&t!==e&&n.push(t);return n}return[]}function k(e){return!!(e&&e instanceof window.HTMLElement)}var S=(i(x,[{key:"on",value:function(e,t,n,i){var o=3<arguments.length&&void 0!==i&&i;a(e)&&(e=[e]);for(var r=0;r<e.length;r++)this.listeners[e[r]]=n,t.addEventListener(e[r],this.listeners[e[r]],o)}},{key:"off",value:function(e,t,n){var i=2<arguments.length&&void 0!==n&&n;a(e)&&(e=[e]);for(var o=0;o<e.length;o++)t.removeEventListener(e[o],this.listeners[e[o]],i)}},{key:"destroy",value:function(){delete this.listeners}}]),x);function x(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};t(this,x),this.listeners=e}var C=["ltr","rtl"],T={">":"<","<":">","=":"="};function H(e,t){return{modify:function(e){return t.Direction.is("rtl")?-e:e}}}var A=!1;try{var O=Object.defineProperty({},"passive",{get:function(){A=!0}});window.addEventListener("testPassive",null,O),window.removeEventListener("testPassive",null,O)}catch(i){}var N=A,L=["touchstart","mousedown"],E=["touchmove","mousemove"],M=["touchend","touchcancel","mouseup","mouseleave"],P=["mousedown","mousemove","mouseup","mouseleave"];function D(e){return u(e)?(t=e,Object.keys(t).sort().reduce(function(e,n){return e[n]=t[n],e[n],e},{})):{};var t}var j={Html:function(e,t){var n={mount:function(){this.root=e.selector,this.track=this.root.querySelector('[data-glide-el="track"]'),this.slides=Array.prototype.slice.call(this.wrapper.children).filter(function(t){return!t.classList.contains(e.settings.classes.cloneSlide)})}};return f(n,"root",{get:function(){return n._r},set:function(e){a(e)&&(e=document.querySelector(e)),k(e)&&(n._r=e)}}),f(n,"track",{get:function(){return n._t},set:function(e){k(e)&&(n._t=e)}}),f(n,"wrapper",{get:function(){return n.track.children[0]}}),n},Translate:function(e,t,n){var i={set:function(n){var i=function(e,t,n){var i=[function(e,t){return{modify:function(n){return n+t.Gaps.value*e.index}}},function(e,t){return{modify:function(e){return e+t.Clones.grow/2}}},function(e,t){return{modify:function(n){if(0<=e.settings.focusAt){var i=t.Peek.value;return u(i)?n-i.before:n-i}return n}}},function(e,t){return{modify:function(n){var i=t.Gaps.value,o=t.Sizes.width,r=e.settings.focusAt,s=t.Sizes.slideWidth;return"center"===r?n-(o/2-s/2):n-s*r-i*r}}}].concat(e._t,[H]);return{mutate:function(o){for(var r=0;r<i.length;r++){var s=i[r];l(s)&&l(s().modify)&&(o=s(e,t,n).modify(o))}return o}}}(e,t).mutate(n);t.Html.wrapper.style.transform="translate3d("+-1*i+"px, 0px, 0px)"},remove:function(){t.Html.wrapper.style.transform=""}};return n.on("move",function(o){var r=t.Gaps.value,s=t.Sizes.length,a=t.Sizes.slideWidth;return e.isType("carousel")&&t.Run.isOffset("<")?(t.Transition.after(function(){n.emit("translate.jump"),i.set(a*(s-1))}),i.set(-a-r*s)):e.isType("carousel")&&t.Run.isOffset(">")?(t.Transition.after(function(){n.emit("translate.jump"),i.set(0)}),i.set(a*s+r*s)):i.set(o.movement)}),n.on("destroy",function(){i.remove()}),i},Transition:function(e,t,n){var i=!1,o={compose:function(t){var n=e.settings;return i?t+" 0ms "+n.animationTimingFunc:t+" "+this.duration+"ms "+n.animationTimingFunc},set:function(e){var n=0<arguments.length&&void 0!==e?e:"transform";t.Html.wrapper.style.transition=this.compose(n)},remove:function(){t.Html.wrapper.style.transition=""},after:function(e){setTimeout(function(){e()},this.duration)},enable:function(){i=!1,this.set()},disable:function(){i=!0,this.set()}};return f(o,"duration",{get:function(){var n=e.settings;return e.isType("slider")&&t.Run.offset?n.rewindDuration:n.animationDuration}}),n.on("move",function(){o.set()}),n.on(["build.before","resize","translate.jump"],function(){o.disable()}),n.on("run",function(){o.enable()}),n.on("destroy",function(){o.remove()}),o},Direction:function(e,t,n){var i={mount:function(){this.value=e.settings.direction},resolve:function(e){var t=e.slice(0,1);return this.is("rtl")?e.split(t).join(T[t]):e},is:function(e){return this.value===e},addClass:function(){t.Html.root.classList.add(e.settings.classes.direction[this.value])},removeClass:function(){t.Html.root.classList.remove(e.settings.classes.direction[this.value])}};return f(i,"value",{get:function(){return i._v},set:function(e){-1<C.indexOf(e)&&(i._v=e)}}),n.on(["destroy","update"],function(){i.removeClass()}),n.on("update",function(){i.mount()}),n.on(["build.before","update"],function(){i.addClass()}),i},Peek:function(e,t,n){var i={mount:function(){this.value=e.settings.peek}};return f(i,"value",{get:function(){return i._v},set:function(e){u(e)?(e.before=s(e.before),e.after=s(e.after)):e=s(e),i._v=e}}),f(i,"reductor",{get:function(){var t=i.value,n=e.settings.perView;return u(t)?t.before/n+t.after/n:2*t/n}}),n.on(["resize","update"],function(){i.mount()}),i},Sizes:function(e,t,n){var i={setupSlides:function(){for(var e=this.slideWidth+"px",n=t.Html.slides,i=0;i<n.length;i++)n[i].style.width=e},setupWrapper:function(e){t.Html.wrapper.style.width=this.wrapperSize+"px"},remove:function(){for(var e=t.Html.slides,n=0;n<e.length;n++)e[n].style.width="";t.Html.wrapper.style.width=""}};return f(i,"length",{get:function(){return t.Html.slides.length}}),f(i,"width",{get:function(){return t.Html.root.offsetWidth}}),f(i,"wrapperSize",{get:function(){return i.slideWidth*i.length+t.Gaps.grow+t.Clones.grow}}),f(i,"slideWidth",{get:function(){return i.width/e.settings.perView-t.Peek.reductor-t.Gaps.reductor}}),n.on(["build.before","resize","update"],function(){i.setupSlides(),i.setupWrapper()}),n.on("destroy",function(){i.remove()}),i},Gaps:function(e,t,n){var i={apply:function(e){for(var n=0,i=e.length;n<i;n++){var o=e[n].style,r=t.Direction.value;o[y[r][0]]=0!==n?this.value/2+"px":"",n!==e.length-1?o[y[r][1]]=this.value/2+"px":o[y[r][1]]=""}},remove:function(e){for(var t=0,n=e.length;t<n;t++){var i=e[t].style;i.marginLeft="",i.marginRight=""}}};return f(i,"value",{get:function(){return s(e.settings.gap)}}),f(i,"grow",{get:function(){return i.value*(t.Sizes.length-1)}}),f(i,"reductor",{get:function(){var t=e.settings.perView;return i.value*(t-1)/t}}),n.on(["build.after","update"],w(function(){i.apply(t.Html.wrapper.children)},30)),n.on("destroy",function(){i.remove(t.Html.wrapper.children)}),i},Move:function(e,t,n){var i={mount:function(){this._o=0},make:function(e){var i=this,o=0<arguments.length&&void 0!==e?e:0;this.offset=o,n.emit("move",{movement:this.value}),t.Transition.after(function(){n.emit("move.after",{movement:i.value})})}};return f(i,"offset",{get:function(){return i._o},set:function(e){i._o=c(e)?0:s(e)}}),f(i,"translate",{get:function(){return t.Sizes.slideWidth*e.index}}),f(i,"value",{get:function(){var e=this.offset,n=this.translate;return t.Direction.is("rtl")?n+e:n-e}}),n.on(["build.before","run"],function(){i.make()}),i},Clones:function(e,t,n){var i={mount:function(){this.items=[],e.isType("carousel")&&(this.items=this.collect())},collect:function(n){for(var i=0<arguments.length&&void 0!==n?n:[],o=t.Html.slides,r=e.settings,s=r.perView,a=r.classes,u=s+ +!!e.settings.peek,l=o.slice(0,u),c=o.slice(-u),d=0;d<Math.max(1,Math.floor(s/o.length));d++){for(var f=0;f<l.length;f++){var h=l[f].cloneNode(!0);h.classList.add(a.cloneSlide),i.push(h)}for(var v=0;v<c.length;v++){var p=c[v].cloneNode(!0);p.classList.add(a.cloneSlide),i.unshift(p)}}return i},append:function(){for(var e=this.items,n=t.Html,i=n.wrapper,o=n.slides,r=Math.floor(e.length/2),s=e.slice(0,r).reverse(),a=e.slice(r,e.length),u=t.Sizes.slideWidth+"px",l=0;l<a.length;l++)i.appendChild(a[l]);for(var c=0;c<s.length;c++)i.insertBefore(s[c],o[0]);for(var d=0;d<e.length;d++)e[d].style.width=u},remove:function(){for(var e=this.items,n=0;n<e.length;n++)t.Html.wrapper.removeChild(e[n])}};return f(i,"grow",{get:function(){return(t.Sizes.slideWidth+t.Gaps.value)*i.items.length}}),n.on("update",function(){i.remove(),i.mount(),i.append()}),n.on("build.before",function(){e.isType("carousel")&&i.append()}),n.on("destroy",function(){i.remove()}),i},Resize:function(e,t,n){var i=new S,o={mount:function(){this.bind()},bind:function(){i.on("resize",window,w(function(){n.emit("resize")},e.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",function(){o.unbind(),i.destroy()}),o},Build:function(e,t,n){var i={mount:function(){n.emit("build.before"),this.typeClass(),this.activeClass(),n.emit("build.after")},typeClass:function(){t.Html.root.classList.add(e.settings.classes[e.settings.type])},activeClass:function(){var n=e.settings.classes,i=t.Html.slides[e.index];i&&(i.classList.add(n.activeSlide),b(i).forEach(function(e){e.classList.remove(n.activeSlide)}))},removeClasses:function(){var n=e.settings.classes;t.Html.root.classList.remove(n[e.settings.type]),t.Html.slides.forEach(function(e){e.classList.remove(n.activeSlide)})}};return n.on(["destroy","update"],function(){i.removeClasses()}),n.on(["resize","update"],function(){i.mount()}),n.on("move.after",function(){i.activeClass()}),i},Run:function(e,t,n){var i={mount:function(){this._o=!1},make:function(i){var o=this;e.disabled||(e.disable(),this.move=i,n.emit("run.before",this.move),this.calculate(),n.emit("run",this.move),t.Transition.after(function(){o.isStart()&&n.emit("run.start",o.move),o.isEnd()&&n.emit("run.end",o.move),(o.isOffset("<")||o.isOffset(">"))&&(o._o=!1,n.emit("run.offset",o.move)),n.emit("run.after",o.move),e.enable()}))},calculate:function(){var t=this.move,n=this.length,i=t.steps,o=t.direction,r="number"==typeof s(i)&&0!==s(i);switch(o){case">":">"===i?e.index=n:this.isEnd()?e.isType("slider")&&!e.settings.rewind||(this._o=!0,e.index=0):r?e.index+=Math.min(n-e.index,-s(i)):e.index++;break;case"<":"<"===i?e.index=0:this.isStart()?e.isType("slider")&&!e.settings.rewind||(this._o=!0,e.index=n):r?e.index-=Math.min(e.index,s(i)):e.index--;break;case"=":e.index=i}},isStart:function(){return 0===e.index},isEnd:function(){return e.index===this.length},isOffset:function(e){return this._o&&this.move.direction===e}};return f(i,"move",{get:function(){return this._m},set:function(e){var t=e.substr(1);this._m={direction:e.substr(0,1),steps:t?s(t)?s(t):t:0}}}),f(i,"length",{get:function(){var n=e.settings,i=t.Html.slides.length;return e.isType("slider")&&"center"!==n.focusAt&&n.bound?i-1-(s(n.perView)-1)+s(n.focusAt):i-1}}),f(i,"offset",{get:function(){return this._o}}),i},Swipe:function(e,t,n){var i=new S,o=0,r=0,a=0,u=!1,l=!!N&&{passive:!0},c={mount:function(){this.bindSwipeStart()},start:function(t){if(!u&&!e.disabled){this.disable();var i=this.touches(t);o=null,r=s(i.pageX),a=s(i.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),n.emit("swipe.start")}},move:function(i){if(!e.disabled){var u=e.settings,l=u.touchAngle,c=u.touchRatio,d=u.classes,f=this.touches(i),h=s(f.pageX)-r,v=s(f.pageY)-a,p=Math.abs(h<<2),m=Math.abs(v<<2),g=Math.sqrt(p+m),_=Math.sqrt(m);if(!(180*(o=Math.asin(_/g))/Math.PI<l))return!1;i.stopPropagation(),t.Move.make(h*parseFloat(c)),t.Html.root.classList.add(d.dragging),n.emit("swipe.move")}},end:function(i){if(!e.disabled){var a=e.settings,u=this.touches(i),l=this.threshold(i),c=u.pageX-r,d=180*o/Math.PI,f=Math.round(c/t.Sizes.slideWidth);this.enable(),l<c&&d<a.touchAngle?(a.perTouch&&(f=Math.min(f,s(a.perTouch))),t.Direction.is("rtl")&&(f=-f),t.Run.make(t.Direction.resolve("<"+f))):c<-l&&d<a.touchAngle?(a.perTouch&&(f=Math.max(f,-s(a.perTouch))),t.Direction.is("rtl")&&(f=-f),t.Run.make(t.Direction.resolve(">"+f))):t.Move.make(),t.Html.root.classList.remove(a.classes.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),n.emit("swipe.end")}},bindSwipeStart:function(){var n=this,o=e.settings;o.swipeThreshold&&i.on(L[0],t.Html.wrapper,function(e){n.start(e)},l),o.dragThreshold&&i.on(L[1],t.Html.wrapper,function(e){n.start(e)},l)},unbindSwipeStart:function(){i.off(L[0],t.Html.wrapper,l),i.off(L[1],t.Html.wrapper,l)},bindSwipeMove:function(){var n=this;i.on(E,t.Html.wrapper,w(function(e){n.move(e)},e.settings.throttle),l)},unbindSwipeMove:function(){i.off(E,t.Html.wrapper,l)},bindSwipeEnd:function(){var e=this;i.on(M,t.Html.wrapper,function(t){e.end(t)})},unbindSwipeEnd:function(){i.off(M,t.Html.wrapper)},touches:function(e){return-1<P.indexOf(e.type)?e:e.touches[0]||e.changedTouches[0]},threshold:function(t){var n=e.settings;return-1<P.indexOf(t.type)?n.dragThreshold:n.swipeThreshold},enable:function(){return u=!1,t.Transition.enable(),this},disable:function(){return u=!0,t.Transition.disable(),this}};return n.on("build.after",function(){t.Html.root.classList.add(e.settings.classes.swipeable)}),n.on("destroy",function(){c.unbindSwipeStart(),c.unbindSwipeMove(),c.unbindSwipeEnd(),i.destroy()}),c},Images:function(e,t,n){var i=new S,o={mount:function(){this.bind()},bind:function(){i.on("dragstart",t.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",t.Html.wrapper)},dragstart:function(e){e.preventDefault()}};return n.on("destroy",function(){o.unbind(),i.destroy()}),o},Anchors:function(e,t,n){var i=new S,o=!1,r=!1,s={mount:function(){this._a=t.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",t.Html.wrapper,this.click)},unbind:function(){i.off("click",t.Html.wrapper)},click:function(e){r&&(e.stopPropagation(),e.preventDefault())},detach:function(){if(r=!0,!o){for(var e=0;e<this.items.length;e++)this.items[e].draggable=!1,this.items[e].setAttribute("data-href",this.items[e].getAttribute("href")),this.items[e].removeAttribute("href");o=!0}return this},attach:function(){if(r=!1,o){for(var e=0;e<this.items.length;e++)this.items[e].draggable=!0,this.items[e].setAttribute("href",this.items[e].getAttribute("data-href"));o=!1}return this}};return f(s,"items",{get:function(){return s._a}}),n.on("swipe.move",function(){s.detach()}),n.on("swipe.end",function(){t.Transition.after(function(){s.attach()})}),n.on("destroy",function(){s.attach(),s.unbind(),i.destroy()}),s},Controls:function(e,t,n){var i=new S,o=!!N&&{passive:!0},r={mount:function(){this._n=t.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'),this._c=t.Html.root.querySelectorAll('[data-glide-el^="controls"]'),this.addBindings()},setActive:function(){for(var e=0;e<this._n.length;e++)this.addClass(this._n[e].children)},removeActive:function(){for(var e=0;e<this._n.length;e++)this.removeClass(this._n[e].children)},addClass:function(t){var n=e.settings,i=t[e.index];i&&(i.classList.add(n.classes.activeNav),b(i).forEach(function(e){e.classList.remove(n.classes.activeNav)}))},removeClass:function(t){var n=t[e.index];n&&n.classList.remove(e.settings.classes.activeNav)},addBindings:function(){for(var e=0;e<this._c.length;e++)this.bind(this._c[e].children)},removeBindings:function(){for(var e=0;e<this._c.length;e++)this.unbind(this._c[e].children)},bind:function(e){for(var t=0;t<e.length;t++)i.on("click",e[t],this.click),i.on("touchstart",e[t],this.click,o)},unbind:function(e){for(var t=0;t<e.length;t++)i.off(["click","touchstart"],e[t])},click:function(e){e.preventDefault(),t.Run.make(t.Direction.resolve(e.currentTarget.getAttribute("data-glide-dir")))}};return f(r,"items",{get:function(){return r._c}}),n.on(["mount.after","move.after"],function(){r.setActive()}),n.on("destroy",function(){r.removeBindings(),r.removeActive(),i.destroy()}),r},Keyboard:function(e,t,n){var i=new S,o={mount:function(){e.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(e){39===e.keyCode&&t.Run.make(t.Direction.resolve(">")),37===e.keyCode&&t.Run.make(t.Direction.resolve("<"))}};return n.on(["destroy","update"],function(){o.unbind()}),n.on("update",function(){o.mount()}),n.on("destroy",function(){i.destroy()}),o},Autoplay:function(e,t,n){var i=new S,o={mount:function(){this.start(),e.settings.hoverpause&&this.bind()},start:function(){var n=this;e.settings.autoplay&&c(this._i)&&(this._i=setInterval(function(){n.stop(),t.Run.make(">"),n.start()},this.time))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var e=this;i.on("mouseover",t.Html.root,function(){e.stop()}),i.on("mouseout",t.Html.root,function(){e.start()})},unbind:function(){i.off(["mouseover","mouseout"],t.Html.root)}};return f(o,"time",{get:function(){return s(t.Html.slides[e.index].getAttribute("data-glide-autoplay")||e.settings.autoplay)}}),n.on(["destroy","update"],function(){o.unbind()}),n.on(["run.before","pause","destroy","swipe.start","update"],function(){o.stop()}),n.on(["run.after","play","swipe.end"],function(){o.start()}),n.on("update",function(){o.mount()}),n.on("destroy",function(){i.destroy()}),o},Breakpoints:function(e,t,n){var i=new S,o=e.settings,s=D(o.breakpoints),a=r({},o),u={match:function(e){if(void 0!==window.matchMedia)for(var t in e)if(e.hasOwnProperty(t)&&window.matchMedia("(max-width: "+t+"px)").matches)return e[t];return a}};return r(o,u.match(s)),i.on("resize",window,w(function(){e.settings=h(o,u.match(s))},e.settings.throttle)),n.on("update",function(){s=D(s),a=r({},o)}),n.on("destroy",function(){i.off("resize",window)}),u}};function z(){return t(this,z),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(z.__proto__||Object.getPrototypeOf(z)).apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(z,m),i(z,[{key:"mount",value:function(e){var t=0<arguments.length&&void 0!==e?e:{};return function e(t,n,i){null===t&&(t=Function.prototype);var o=Object.getOwnPropertyDescriptor(t,n);if(void 0===o){var r=Object.getPrototypeOf(t);return null===r?void 0:e(r,n,i)}if("value"in o)return o.value;var s=o.get;return void 0!==s?s.call(i):void 0}(z.prototype.__proto__||Object.getPrototypeOf(z.prototype),"mount",this).call(this,r({},j,t))}}]),z}),jQuery(document).ready(function(e){function t(e){var t=new RegExp(e+"=([^;]+)").exec(document.cookie);return null!=t?unescape(t[1]):null}function n(e){var t=RegExp("[?&]"+e+"=([^&]*)").exec(window.location.search);return t&&decodeURIComponent(t[1].replace(/\+/g," "))}let i,o=e(".gform_footer"),r=t("_ga");if(r&&(o.length>0?o.append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${r}" autocomplete="off">`):e("fieldset")?e("fieldset").append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${r}" autocomplete="off">`):e("form").append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${r}" autocomplete="off">`)),console.log("Google Analytics User ID:",r),window.location.href.indexOf("gclid=")?i=n("gclid"):window.location.href.indexOf("GCLD=")&&(i=n("GCLD")),i){var s=n("gclsrc");s&&-1===s.indexOf("aw")||function(e,t,n){var i="";if(n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3),i="; expires="+o.toUTCString()}document.cookie=e+"="+(t||"")+i+"; path=/"}("gclid",i,90)}let a=t("gclid");i?console.log("gclid:",i):a?console.log("gclid:",a):console.log("No gclid present on page."),a&&(o.length>0?o.append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${a}" autocomplete="off">`):e("fieldset")?e("fieldset").append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${a}" autocomplete="off">`):e("form").append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${a}" autocomplete="off">`))}),jQuery(document).ready(function(e){e("#primary-menu > li").addClass("top_level_nav_item"),e("#primary-menu .top_level_nav_1 > a").attr("href","#"),e("#primary-menu .top_level_nav_2 > a").attr("href","#"),e("#primary-menu .top_level_nav_3 > a").attr("href","#"),e(".top_level_nav_item").click(function(){e(".top_level_nav_item").not(e(this)).removeClass("active_nav_item"),e(".top_level_nav_item").not(e(this)).find(".sub_menu_wrapper").removeClass("showNav"),e(".top_level_nav_item").not(e(this)).find(".sub-menu").removeClass("showNav"),e(this).find(".sub_menu_wrapper").toggleClass("showNav"),e(this).toggleClass("active_nav_item"),e(this).find(".sub-menu").toggleClass("showNav")}),e(".top_level_nav_item").hover(function(t){window.matchMedia("(min-width: 1024px)").matches&&(e(this).find(".sub_menu_wrapper").addClass("showNav"),e(".top_level_nav_item").not(e(this)).find(".sub_menu_wrapper").removeClass("showNav"))}),e(".sub-menu").wrap('<div class="sub_menu_wrapper"></div>');var t=e(".sub-menu .sub-menu");t.parent().is(".sub_menu_wrapper")&&t.unwrap(),e(".nav_links_column").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_2").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_3").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_4").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_5").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_6").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_7").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_8").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".nav_links_column_9").wrapAll('<div class="nav_link_column_wrapper"></div>'),e(".toc").click(function(t){e(".toc li").toggleClass("showTOC"),e(".toc img").toggleClass("dropdown_active")}),e(".covid19_shortcode_section").click(function(t){e(".covid_sidebar_content_wrapper").toggleClass("show"),e(".covid_dropdown_icon img").toggleClass("dropdown_active")});let n=e(window).width();if(n<768){function i(){e(".search_bar_container .search-field").attr("placeholder","Search...")}e(".search_bar_magnifying_glass_icon").click(function(t){e(".search_bar_wrapper").toggleClass("show_flex")}),e(".top_level_nav_5 a").next().text("Insurance"),i()}else{function i(){e(".search_bar_container .search-field").attr("placeholder","Search Addiction or Treatment")}i()}n>1024&&(e(".toc li").addClass("showTOC"),e(".toc img").addClass("dropdown_active")),e(".top_level_nav_item").hover(),n>1024&&(e(".search_bar_container").hover(function(t){e(".desktop_nav_search_subnav_wrapper").addClass("show_flex")}),e(".desktop_nav_search_subnav_wrapper").mouseleave(function(t){e(".desktop_nav_search_subnav_wrapper").removeClass("show_flex")}),e("main").hover(function(t){e(".desktop_nav_search_subnav_wrapper").removeClass("show_flex")}),e(".top_level_nav_item").hover(function(t){e(".desktop_nav_search_subnav_wrapper").removeClass("show_flex")})),e(document).on("keydown",function(t){"Escape"==t.key&&(e(".sub_menu_wrapper").removeClass("showNav"),console.log("escape key pressed"))}),e("#primary").click(function(){e(".sub_menu_wrapper").removeClass("showNav")}),e("footer").hover(function(){e(".sub_menu_wrapper").removeClass("showNav")}),e("main").hover(function(){e(".sub_menu_wrapper").removeClass("showNav")});let o=e(".search_query_shortcode_button");var r;o.click(function(){console.log("search query button was clicked"),e(".search_query_shortcode_content_container ul .search_query_shortcode_element").toggleClass("showAllQueryResults"),o.toggleClass("active"),o.hasClass("active")?o.text("Show Less"):o.text("Show More")}),setTimeout(function(){e("#primary-menu > li").addClass("top_level_nav_item"),e("#primary-menu .menu-item-has-children > a").attr("target","")},300),r=function(){for(var e=window.location.hostname,t=new RegExp("^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?"+e+")|(localhost:\\d{4})|(\\/.*))(\\/.*)?$",""),n=document.querySelectorAll("a"),i=n.length,o=0;o<i;o++){var r=n[o],s=r.getAttribute("href");t.test(s)||r.setAttribute("target","_blank"),t.test(s)||r.setAttribute("rel","nofollow noopener")}},"loading"!=document.readyState?r():document.addEventListener?document.addEventListener("DOMContentLoaded",r):document.attachEvent("onreadystatechange",function(){"loading"!=document.readyState&&r()}),window.addEventListener("hashchange",function(){0!==location.hash.length&&window.scrollTo(window.scrollX,window.scrollY-100)}),e("footer .gform_footer input[type=submit]").addClass("footerContactForm"),e(".contact_us_container .gform_footer input[type=submit]").addClass("footerContactForm"),e(".short_code_contact_form_cta_form_container .gform_footer input[type=submit]").addClass("contactFormCta")}),jQuery(document).ready(function(e){});