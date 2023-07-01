<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta charset="UTF-8" /><script type="2982ca1d9c32ffbe828b47d3-text/javascript">if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script type="2982ca1d9c32ffbe828b47d3-text/javascript">class RocketLazyLoadScripts{constructor(){this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():(this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener(){this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n){e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src")){const n=new URL(t.html).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>
<title>Responsible Lending | Loanie</title><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C500%2C700%7CMontserrat%3A400%2C700&amp;display=swap" /><script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><style id="" media="print" onload="this.media='all'">@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aX8.ttf) format('truetype');
}
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aX8.ttf) format('truetype');
}
@font-face {
  font-family: 'Rubik';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(../fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0Uw.ttf) format('truetype');
}
@font-face {
  font-family: 'Rubik';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0Uw.ttf) format('truetype');
}
@font-face {
  font-family: 'Rubik';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-FV0Uw.ttf) format('truetype');
}
</style><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C500%2C700%7CMontserrat%3A400%2C700&amp;display=swap" /></noscript><style id="rocket-critical-css">@import "https://webservices.data-8.co.uk/content/flags-iso/shiny/24/flags.min.css";.bulletinwp-bulletins{position:relative;font-size:16px;font-weight:500;line-height:1.5}.bulletinwp-bulletins .bulletinwp-bulletin-item{padding:0 12px;position:relative;-webkit-box-shadow:0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05);box-shadow:0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05);opacity:0;margin:0 auto;z-index:99999}@media (min-width:768px){.bulletinwp-bulletins .bulletinwp-bulletin-item{padding:12px 24px}}.bulletinwp-bulletins .bulletinwp-main-container{margin:0 auto}.bulletinwp-bulletins .bulletinwp-top-container{position:relative;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:8px}@media (min-width:768px){.bulletinwp-bulletins .bulletinwp-top-container{margin-bottom:0}}.bulletinwp-bulletins .bulletinwp-center-container{width:0;-ms-flex-positive:1;flex-grow:1;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;overflow:hidden}.bulletinwp-bulletins .bulletinwp-right-container{position:relative;z-index:1;-ms-flex-negative:0;flex-shrink:0;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper{width:100%}.bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper p{color:currentColor}.bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper p:last-child{margin:0}.bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper a{text-decoration:underline;color:currentColor;border:none}.bulletinwp-bulletins .bulletinwp-bulletin-content{display:none}@media (min-width:768px){.bulletinwp-bulletins .bulletinwp-bulletin-content{display:block}}.bulletinwp-bulletins .bulletinwp-bulletin-mobile-content{display:block}@media (min-width:768px){.bulletinwp-bulletins .bulletinwp-bulletin-mobile-content{display:none}}.bulletinwp-bulletins.bulletinwp-init .bulletinwp-bulletin-item{opacity:1}.bulletinwp-bulletins.bulletinwp-placement-top{position:relative;width:100%}.bulletinwp-bulletins.bulletinwp-placement-top .bulletinwp-bulletin-item{-webkit-box-shadow:none;box-shadow:none}.bulletinwp-bulletins .bulletinwp-bulletin-close-button{padding:8px;border-radius:5px}.bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button{position:relative;width:20px;height:20px}.bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::before,.bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::after{content:'';border-radius:2px;position:absolute;height:19px;width:2px;left:9px;top:1px}.bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.bulletinwp-bulletins .bulletinwp-right-container .bulletinwp-bulletin-close-button{margin-left:4px}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}header,nav{display:block}a{background-color:transparent}b,strong{font-weight:700}h1{margin:.67em 0;font-size:2em}img{border:0}svg:not(:root){overflow:hidden}button,input,select{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}table{border-spacing:0;border-collapse:collapse}td{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}img{vertical-align:middle}h1{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1{margin-top:20px;margin-bottom:10px}h1{font-size:36px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}ul{margin-top:0;margin-bottom:10px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-md-4,.col-md-8{position:relative;min-height:1px;padding-right:15px;padding-left:15px}@media (min-width:992px){.col-md-4,.col-md-8{float:left}.col-md-8{width:66.66666667%}.col-md-4{width:33.33333333%}}table{background-color:transparent}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;background-image:none;border:1px solid transparent;border-radius:4px}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.collapse{display:none}.nav{padding-left:0;margin-bottom:0;list-style:none}.clearfix:after,.clearfix:before,.container:after,.container:before,.nav:after,.nav:before,.row:after,.row:before{display:table;content:" "}.clearfix:after,.container:after,.nav:after,.row:after{clear:both}@-ms-viewport{width:device-width}.visible-md,.visible-sm,.visible-xs{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}}.btn{font-family:'Rubik',sans-serif;padding:15px 30px;font-weight:500;font-size:19px;text-align:center;display:inline-block;border:none;border:2px solid transparent;border-radius:100px;position:relative;text-transform:uppercase;letter-spacing:1px}.btn-default{background-color:#E9406B;border-color:transparent;color:#fff}.btn-primary-mast{border:none;color:#fff;background:#ea8735;background:-moz-linear-gradient(left,#ea8735 0%,#f1c54c 100%);background:-webkit-linear-gradient(left,#ea8735 0%,#f1c54c 100%);background:linear-gradient(to right,#ea8735 0%,#f1c54c 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#ea8735', endColorstr='#f1c54c',GradientType=1 )}*{outline:none!important}img{max-width:100%;height:auto}ul{padding:0;margin:0;list-style:none}html{overflow-x:hidden}body{background:#fff;font-family:"Montserrat",sans-serif;font-weight:400;font-size:16px;color:#777;line-height:1.6;overflow-x:hidden}#wrapper-simple{max-width:2130px;margin:0 auto;position:relative;overflow:hidden}.inner-page-wrapper{background-color:#fff;background-image:linear-gradient(top,#e6f6fd 0%,#fff 300px);background-image:-moz-linear-gradient(top,#e6f6fd 0%,#fff 300px);background-image:-webkit-linear-gradient(top,#e6f6fd 0%,#fff 300px)}@media only screen and (max-width:991px){.inner-page-wrapper{background:none}}h1{font-weight:500;color:#1A1919;font-family:'Rubik',sans-serif;margin-top:0;margin-bottom:20px;line-height:1.3;letter-spacing:3px}h1{font-size:58px;line-height:61px}@media only screen and (max-width:1199px){h1{font-size:46px;line-height:50px}}p{margin-bottom:30px}p.lead{font-weight:300;font-size:20px;margin-bottom:30px;font-family:'Rubik',sans-serif}p.lead-pink{font-size:20px;color:#DB306B}.lead-center{max-width:600px;margin-left:auto;margin-right:auto;text-align:center}@media only screen and (max-width:767px){h1{font-size:30px;line-height:34px}p.lead{font-size:18px}}strong,b{font-weight:600}a{color:#e9406b}#header{color:#fff;width:100%;z-index:1}#wrapper-simple .header{position:relative;padding-bottom:60px}@media only screen and (max-width:991px){#wrapper-simple .header{padding-bottom:20px}.page-template-template-review-competition #wrapper-simple .header{padding-bottom:50px}}#wrapper-simple .header .container{position:relative;z-index:2}#wrapper-simple .header:after{content:"";width:70%;height:300px;position:absolute;right:-150px;top:-30px;background:url(wp-content/themes/greaterthings/images/bg-header-cta-small.svg) no-repeat top left;background-size:1100px;display:block}@media only screen and (max-width:1730px){#wrapper-simple .header:after{width:70%;height:300px;right:-200px;top:-50px;background-size:1100px}}@media only screen and (max-width:1300px){#wrapper-simple .header:after{width:70%;height:300px;right:-100px;top:-50px;background-size:1100px}}@media only screen and (max-width:1199px){#wrapper-simple .header:after{width:70%;height:300px;right:0px;top:-50px;background-size:1100px}}@media only screen and (max-width:991px){#wrapper-simple .header:after{display:none}}#wrapper-simple #header .slope{position:absolute;bottom:0;left:0;width:100%;height:100px;fill:#E6F6FD}@media only screen and (max-width:991px){#wrapper-simple #header .slope{display:none}}.header{padding:30px 0;position:relative;z-index:200}.header .logo img{height:95px;width:auto}@media only screen and (max-width:991px){#header{position:fixed;top:0;left:0;background:#fff;z-index:2000}.header{padding:15px 0px}.header .logo img{height:45px}}.nav{text-align:right;margin-top:15px;padding:20px;position:relative;z-index:2}.nav ul{display:inline-block}.nav ul li{font-weight:600;display:inline-block;margin-left:40px}.nav ul li a{color:#fff;position:relative;font-family:'Rubik',sans-serif;font-weight:500}.nav ul li a:after{content:"";position:absolute;width:0;height:2px;left:50%;bottom:-7px;transform:translateX(-50%);background-color:#fff}.nav ul li:first-child{margin-left:0}@media only screen and (max-width:991px){.nav{display:none}.nav ul{display:block}.nav ul li{display:block;margin:0 0 3px}.nav ul li a{font-weight:500;font-size:21px;display:block;padding:20px 10px;text-align:center;color:#1A1919}.nav ul li a:after{display:none}}.btn-menu span{border:1px solid #D42E67;border-radius:10px;display:block;margin:6px 0}.btn-menu{display:none}@media only screen and (max-width:991px){.btn.btn-menu{width:50px;text-transform:uppercase;display:block;float:right;padding:0;font-size:12px;font-weight:500;margin-left:10px;background:transparent!important;border:none!important;box-shadow:none!important;color:#6F347E;letter-spacing:3px;text-align:center;top:10px}.btn.btn-menu:after{display:none}.btn-header{position:relative;top:10px}}#content{clear:both}.section{padding:80px 0;background:50% 50% transparent no-repeat;background-size:cover;text-align:center;position:relative}@media only screen and (max-width:767px){.section{padding:40px 0}}.answer-content{background:#F0EBEA;padding:40px 40px 25px 40px;border-radius:30px}.btn-apply{margin:5px 8px}.btn.btn-primary-mast{min-width:275px;margin:0 8px;height:80px;padding-left:15px;padding-right:60px;vertical-align:top;box-shadow:0 20px 24px 0 rgba(0,0,0,0.19);position:relative}.info-content .btn.btn-primary-mast{min-width:275px}@media only screen and (max-width:767px){.btn.btn-primary-mast{margin-left:0;margin-right:0}}a.btn.btn-primary-mast{height:auto}.btn-primary-mast:after{content:"\f061";font-family:"fontAwesome";font-weight:300;display:block;width:40px;height:40px;line-height:40px;background:#DB306B;position:absolute;right:15px;top:50%;margin:-20px 0 0 0;border-radius:100%;line-height:40px;text-align:center;letter-spacing:-4px}.header .btn-primary-mast{float:right;font-size:11px;width:auto;padding:15px 15px;margin:0 10px;box-shadow:none;min-width:140px;max-width:200px}@media only screen and (max-width:420px){.header .btn-primary-mast{display:none!important}}.header .btn-primary-mast:after{content:"";display:none}.info-section{display:flex;align-items:center;margin:70px 0 0px 0}@media only screen and (max-width:992px){.info-section{display:block}}.info-image{width:40%;position:relative}.info-image img{position:relative;z-index:2;max-width:400px;border-radius:10px}@media only screen and (max-width:992px){.info-image{width:100%;max-width:290px;margin:0 auto}.info-image img{max-width:100%}}.info-content{padding:40px;width:60%;text-align:center;display:flex;align-items:center}@media only screen and (max-width:420px){.info-content{padding:40px 0}}@media only screen and (max-width:992px){.info-content{width:100%}}@media (max-width:990px){#header .logo img{min-height:60px}}.page-template-template-review-competition #header{position:static}.page-template-template-review-competition #wrapper-simple .header:after{background:none}.page-template-template-review-competition .header .col-md-8{display:none}.page-template-template-review-competition .header .col-md-4{width:100%;text-align:center}.page-template-template-review-competition .header{padding:20px 0;margin:0;background:#fff}.page-template-template-review-competition .btn-menu,.page-template-template-review-competition .btn-header{display:none!important}.leave-a-review-section .info-content{text-align:left}.leave-a-review-section p{margin-bottom:15px}.leave-a-review-section .btn-apply{margin-top:20px;margin-left:0px}.section-border-bottom{border-bottom:1px solid #eee;padding-bottom:50px;margin-bottom:50px}.terms-section .answer-content{background:transparent;border-radius:0px}@media only screen and (max-width:991px){.page-template-template-review-competition #wrapper-simple #header .slope{display:block;height:50px}.page-template-template-review-competition .inner-page-wrapper{background-color:#fff;background-image:linear-gradient(top,#e6f6fd 0%,#fff 300px);background-image:-moz-linear-gradient(top,#e6f6fd 0%,#fff 300px);background-image:-webkit-linear-gradient(top,#e6f6fd 0%,#fff 300px)}}@media screen and (max-width:768px){.leave-a-review-section .info-content{text-align:center}.leave-a-review-section .btn-apply{position:fixed;bottom:0;z-index:9999;left:0;right:0;border-radius:0px}}</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="wp-content/uploads/siteicon-150x150.png" type="image/x-icon" />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"> var baseURL = '{{route('home-us')}}'; var templateURL = 'wp-content/themes/greaterthings/index.html'; var cpaAPI = 'NC39-EC97-PZ78-MN82'; </script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://webservices.data-8.co.uk/javascript/predictiveaddress.js" defer></script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><link data-minify="1" rel="preload" href="wp-content/cache/min/1/content/predictiveaddress9b49.css?ver=1655110995" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" />
<meta name='robots' content='max-image-preview:large' />

<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<link rel="canonical" {{route('home-us')}}" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Responsible Lending | Loanie" />
<meta property="og:description" content="At Stag Finance Ltd, we take responsible lending very seriously and do our best to ensure any online loan applied..." />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="Loanie" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="At Stag Finance Ltd, we take responsible lending very seriously and do our best to ensure any online loan applied..." />
<meta name="twitter:title" content="Responsible Lending | Loanie" />
<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://www.loanie.net/#website","url":"https://www.loanie.net/","name":"Loanie","potentialAction":{"@type":"SearchAction","target":"https://www.loanie.net/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://www.loanie.net/responsible-lending/#webpage","url":"https://www.loanie.net/responsible-lending/","inLanguage":"en-GB","name":"Responsible Lending | Loanie","isPartOf":{"@id":"https://www.loanie.net/#website"},"datePublished":"2017-03-07T17:17:59+00:00","dateModified":"2020-01-29T17:07:25+00:00","breadcrumb":{"@id":"https://www.loanie.net/responsible-lending/#breadcrumb"}},{"@type":"BreadcrumbList","@id":"https://www.loanie.net/responsible-lending/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://www.loanie.net/","url":"https://www.loanie.net/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://www.loanie.net/responsible-lending/","url":"https://www.loanie.net/responsible-lending/","name":"Responsible Lending"}}]}]}</script>

<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><link rel='preload' href='wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all' />
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><link data-minify="1" rel='preload' href='wp-content/cache/min/1/wp-content/plugins/bulletinwp-pro/frontend/build/proca17.css?ver=1655110719' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all' />
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><link data-minify="1" rel='preload' href='wp-content/cache/min/1/wp-content/themes/greaterthings/css/libsca17.css?ver=1655110719' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all' />
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49"></script><link data-minify="1" rel='preload' href='wp-content/cache/min/1/wp-content/themes/greaterthings/styleca17.css?ver=1655110719' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all' />
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/plugins/svg-support/js/min/svgs-inline-min8a54.js?ver=1.0.0' id='bodhi_svg_inline-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='bodhi_svg_inline-js-after'>
cssTarget="img.style-svg";ForceInlineSVGActive="false";
</script>

<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-');</script>

<link rel="icon" href="wp-content/uploads/siteicon-150x150.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/siteicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/siteicon.png" />
<meta name="msapplication-TileImage" content="wp-content/uploads/siteicon.png" />

<div id="bulletinwp-generator" style="display: none;"> <div id="bulletinwp-bulletin-item-1" class="bulletinwp-bulletins bulletinwp-placement-top  " data-header-banner-style="above-header" data-header-banner-scroll="static" data-site-has-fixed-header="true" data-fixed-header-selector="div.header"> <div class="bulletinwp-bulletin-item " style="background-color:#5c337e;color:#fff;padding:2px 24px                          " data-id="1"> <div class="bulletinwp-main-container" style="max-width: none;"> <div class="bulletinwp-top-container" style="margin-bottom: 0;"> <div class="bulletinwp-center-container "> <div class="bulletinwp-bulletin-content-wrapper" style="text-align: center;"> <div class="bulletinwp-bulletin-content bulletinwp-bulletin-content-main"> **Warning:** Late repayment can cause you serious money problems. For help <a href="https://moneyhelper.org.uk/" target="_blank">moneyhelper.org.uk</a> </div> <div class="bulletinwp-bulletin-mobile-content bulletinwp-bulletin-mobile-content-main"> Warning: Late repayment can cause you serious money problems. For help <a href="https://moneyhelper.org.uk/" target="_blank">moneyhelper.org.uk</a> </div> </div> </div> <div class="bulletinwp-right-container"> <div class="bulletinwp-bulletin-close-button" data-cookie-expiry="-1"> <div class="bulletinwp-close-button"></div> </div> <style>     #bulletinwp-bulletin-item-1 .bulletinwp-bulletin-close-button .bulletinwp-close-button::before,
    #bulletinwp-bulletin-item-1 .bulletinwp-bulletin-close-button .bulletinwp-close-button::after {
      background-color: #ffffff;
    }
  </style> </div> </div> </div> </div> <style>       #bulletinwp-bulletin-item-1{font-size:13px!important}#bulletinwp-bulletin-item-1 p{font-size:13px!important}@media (max-width:767px){#bulletinwp-bulletin-item-1{font-size:12px!important}#bulletinwp-bulletin-item-1 p{font-size:12px!important}}      </style> </div> </div> <noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><script type="rocketlazyloadscript">
/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
</script><noscript><style>.perfmatters-lazy[data-src]{display:none !important;}</style></noscript><style>.perfmatters-lazy:not(picture),.perfmatters-lazy>img{opacity:0}.perfmatters-lazy.loaded,.perfmatters-lazy>img.loaded,.perfmatters-lazy[data-was-processed=true]{opacity:1;transition:opacity 500ms}</style>
</head>
<body class="page-template-default page page-id-1076">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div id="wrapper-simple">
<header id="header" class="clearfix">
<div class="header">
<div class="container">
<div class="row">
<div class="col col-md-4">
<a href="{{route('home-us')}}" class="logo">
<span class=""><img width="304" height="170" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20304%20170'%3E%3C/svg%3E" class="attachment-full size-full" alt="Loanie logo" data-lazy-srcset="wp-content/uploads/logo_payday_uk_trap.png 304w, wp-content/uploads/logo_payday_uk_white.png 300w" data-lazy-sizes="(max-width: 304px) 100vw, 304px" data-lazy-src="wp-content/uploads/logo_payday_uk_trap.png" /><noscript><img width="304" height="170" src="wp-content/uploads/logo_payday_uk_trap.png" class="attachment-full size-full" alt="Loanie logo" srcset="wp-content/uploads/logo_payday_uk_trap.png 304w, wp-content/uploads/logo_payday_uk_white.png 300w" sizes="(max-width: 304px) 100vw, 304px" /></noscript></span>
</a>
<a href="#" class="btn btn-default btn-menu"><span></span><span></span> Menu</a>
<a href="{{route('apply-us')}}" class="btn btn-primary-mast btn-apply visible-xs visible-sm btn-header">Get Your Quote</a>
</div>
<div class="col col-md-8">
<nav class="nav">
<ul id="menu-main-menu" class="menu"><li id="menu-item-2841" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2841"><a href="{{route('home-us')}}">Home</a></li>
<li id="menu-item-2822" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2822"><a href="{{route('apply-us')}}">Will I be approved?</a></li>
<li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="{{route('apply-us')}}">Apply</a></li>
<li id="menu-item-2825" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2825"><a href="{{route('guides')}}">Guides</a></li>
<li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a href="{{route('contact-us')}}">Contact us</a></li>
</ul> </nav>
</div>
</div>
</div>
<svg class="slope" viewBox="0 0 100 100" preserveAspectRatio="none">
<polygon points="0,100 100,0 100,100" />
</svg>
</div>
</header>
<div class="inner-page-wrapper">
<header class="page-banner-plain">
<h1>Responsible Lending</h1>
</header>
<div id="content" class="clearfix">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<p>At Stag Finance Ltd, we take responsible lending very seriously and do our best to ensure any online loan applied for is affordable. Please only apply for a loan that you can afford to repay and ensure you read the terms and conditions of a loan agreement.</p>
<h5>MAX/MIN TERMS OF REPAYMENT &#038; MAX APR</h5>
<p>The loans offered on this website have minimum repayment terms of 3 months and maximum repayment terms of 36 months. Lending rates vary from 9.3% APR to a maximum APR of 1294% APR depending on your circumstances.</p>
<h5>COLLECTIONS PROCESS</h5>
<p>If you’re having difficulty making a payment please contact the lender directly.</p>
<p>Should the situation remain unresolved the lender may reserve the right to pass your details onto a third party collections agency.</p>
<h5>IMPLICATIONS OF NON-PAYMENT</h5>
<p>We always recommend repaying within the agreed timeframe. Each lender has their own policies with regards to fees and interest, and how they collect outstanding debts. Most will contact you by phone or letter in order to rearrange payment.</p>
<p>Non-payment may result in charges and/or raised interest. We suggest contacting your lender as soon as you are aware there is a problem, as otherwise, it may be noted on your credit record.</p>
<h5>AUTO DECISIONING</h5>
<p>Auto decisioning allows lenders to make a decision on your loan application without the need for human interaction.</p>
<h5>LATE PAYMENT</h5>
<p>If you are unable to make your repayment on time then you should contact your lender immediately. Lenders may charge a late payment fee which could range between $1 – $100. This will vary between lenders. For more information please read the terms and conditions of your loan agreement.</p>
<h5>RENEWAL POLICY</h5>
<p>If you wish to renew your loan, you should contact your lender in advance. Most lenders will charge the same rate of interest and fees for another month on the entire amount owed. In the event of non-payment, a loan renewal/extension could be automatic and further interest and/or charges may be added to your account.</p>
<p>Please note that renewing your loan is not recommended if you are struggling to keep up with your repayments on any of your existing credit. If you are struggling or are unable to meet your contractual repayments, you should contact your lender immediately. You can also seek independent, free debt advice.</p>
<h5>CONSOLIDATING EXISTING DEBTS</h5>
<p>If you are looking to consolidate your existing debts, please be aware that your new loan may be at a higher rate of interest, over a longer repayment period and increase the total amount you repay.</p>
</div>
</div>
</div>
</div>
</div>
<footer id="footer" class="">
<div class="footer-inner">
<div class="container">
<div class="row">
<div class="col-md-7 col-md-push-6 text-center footer-form">
 <div class="">
<h3>Ready to Get Started?</h3>
<p class="lead">How much do you need?</p>
<div class="apply-form clearfix">
<form action="{{route('apply-us')}}" method="get">
<div class="apply-input">
<a href="#" class="amount-change amount-minus"><i class="fa fa-minus"></i></a>
<input type="text" name="value" value="$500" class="apply-loan-amount" />
<a href="#" class="amount-change amount-plus"><i class="fa fa-plus"></i></a>
</div>
<button type="submit" class="btn btn-primary-mast btn-apply">Get Your Quote<small>No obligation, 100% secure.</small></button>
</form>
<p class="apply-form-link">
<a href="{{route('apply-us')}}">Will I be approved?</a>
</p>
</br>

{{--<div class="" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="4bf27fe900006400050cd2b1" data-style-height="100%" data-style-width="100%" data-theme="dark" data-font-family="Heebo">--}}
{{--<a href="https://uk..com/review/www.loanie.net" target="_blank" rel="noopener"></a>--}}
</div>

</div>
<div class="apply-form-benefits">
<div>
<p>
<span><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/icon-no-credit-check.svg" /><noscript><img src="wp-content/uploads/icon-no-credit-check.svg" alt=""/></noscript></span>
Instant quote with a soft credit check and no fees. </p>
<p>
<span><img src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20width=&#039;0&#039;%20height=&#039;0&#039;%20viewBox=&#039;0%200%200%200&#039;%3E%3C/svg%3E" alt data-lazy-src="wp-content/uploads/icon-time.svg" class="perfmatters-lazy" data-src="//www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%200%200&#039;%3E%3C/svg%3E" /><noscript><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/icon-time.svg"/></noscript><noscript><img src="wp-content/uploads/icon-time.svg" alt=""/></noscript></span>
Small loans can be sent the same day.
5:25am today.<sup><font size="-1">*</font></sup>
</p>
<p>
<span><img src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20width=&#039;0&#039;%20height=&#039;0&#039;%20viewBox=&#039;0%200%200%200&#039;%3E%3C/svg%3E" alt data-lazy-src="wp-content/uploads/icon-process-applications.svg" class="perfmatters-lazy" data-src="//www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%200%200&#039;%3E%3C/svg%3E" /><noscript><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/icon-process-applications.svg"/></noscript><noscript><img src="wp-content/uploads/icon-process-applications.svg" alt=""/></noscript></span>
Over 7500 no obligation quotes processed every single day!<sup><font size="-2">^</font></sup> </p>
</div>
</div>
</div>
<svg class="footer-form-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
<polygon points="0,100 100,0 100,100" />
</svg>
</div>
<div class="col col-md-5 col-md-pull-7 footer-text">
<img width="300" height="168" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20width=&#039;300&#039;%20height=&#039;168&#039;%20viewBox=&#039;0%200%20300%20168&#039;%3E%3C/svg%3E" class="footer-logo hidden-sm hidden-xs perfmatters-lazy" alt="Loanie logo" data-lazy-srcset="wp-content/uploads/logo_payday_uk_white.png 300w, wp-content/uploads/logo_payday_uk_trap.png 304w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="wp-content/uploads/logo_payday_uk_white.png" data-src="//www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20168&#039;%3E%3C/svg%3E" /><noscript><img width="300" height="168" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20168'%3E%3C/svg%3E" class="footer-logo hidden-sm hidden-xs" alt="Loanie logo" data-lazy-srcset="wp-content/uploads/logo_payday_uk_white.png 300w, wp-content/uploads/logo_payday_uk_trap.png 304w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="wp-content/uploads/logo_payday_uk_white.png" /></noscript><noscript><img width="300" height="168" src="wp-content/uploads/logo_payday_uk_white.png" class="footer-logo hidden-sm hidden-xs" alt="Loanie logo" srcset="wp-content/uploads/logo_payday_uk_white.png 300w, wp-content/uploads/logo_payday_uk_trap.png 304w" sizes="(max-width: 300px) 100vw, 300px" /></noscript> <p>Loanie is a registered trading name of Stag Finance Ltd who are an introducer appointed representative of Stag Finance  Limited, who are a credit broker, not a lender. Registered in England and Wales (Company number XXXXXX / FRN XXXXXX). Licenced by the Information Commissioners Office, (registration number ZAXXXXXX). Registered Office: Stag Finance Ltd, 71-75 Shelton Street, London, WC2H 9QJ, United Kingdom. Stag Finance  is authorised xxxxxxx</p>
<p>Not all borrowers will qualify for a loan, the operator of this website does not engage in any direct consumer lending, we simply introduce you to a FREE loan brokering service operated by Stag Finance Ltd. Loanie does not charge customers a fee for using its services, we may receive a commission from Stag Finance Ltd.</p>
<p>Auto Decisioning allows lenders to make a decision on your loan application without the need for human interaction, for more information please contact your lender or see their privacy policy.</p>
<p>*Loanie does not perform credit checks. When applying for a loan quote with Stag Finance , lenders will only perform a soft credit search. If you accept the quote they may perform a hard credit search.</p>
<p>^Between 7/11/21 and 15/11/21 Stag Finance  processed an average 7510 customer loan applications per day.</p>
<div class="footer-nav">
 <ul id="menu-copyright-menu" class="menu"><li id="menu-item-3879" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3879"><a title="Payday Loans" href="{{route('home-us')}}">Payday Loans</a></li>
<li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="{{route('privacy')}}">Privacy Policy</a></li>
<li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="{{route('terms')}}">Terms</a></li>
<li id="menu-item-3880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3880"><a href="{{route('acceptable-use')}}">Acceptable Use</a></li>
<li id="menu-item-1083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1083"><a href="{{route('cookies')}}">Cookie Policy</a></li>
<li id="menu-item-3687" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1076 current_page_item menu-item-3687"><a {{route('home-us')}}" aria-current="page">Responsible Lending</a></li>
<li id="menu-item-3659" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3659"><a href="{{route('complaints')}}">Complaints</a></li>
</ul> </div>
<div class="footer-bottom-content">
<ul>
<li><a href="{{route('direct-lenders')}}">Payday Loans Direct Lenders</a></li>
<li><a href="{{route('bad-credit-loans')}}">Bad Credit Loans</a></li>
<li><a href="{{route('small-loans')}}">Small Loans</a></li>
<li><a href="{{route('no-guarantor-loans')}}">Loans Without Guarantor</a></li>
<li><a href="{{route('home-us')}}">Instant Payday Loans</a></li>
<li><a href="{{route('quick-loans')}}">Quick Loans</a></li>
<li><a href="{{route('short-term-loans')}}">Short Term Loans</a></li>
<li><a href="">Bad Credit Short Term Loans</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-includes/js/underscore.min0028.js?ver=1.13.1' id='underscore-js' defer></script>
<script type="2982ca1d9c32ffbe828b47d3-text/javascript" id='bulletinwp-frontend-scripts-js-extra'>

</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/plugins/bulletinwp-pro/frontend/build/pro5589.js?ver=3.4.1' id='bulletinwp-frontend-scripts-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/themes/greaterthings/js/libs7404.js?ver=5.9.3' id='libs-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/themes/greaterthings/js/custom7404.js?ver=5.9.3' id='custom-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/themes/greaterthings/js/form7404.js?ver=5.9.3' id='form-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='wp-content/themes/greaterthings/js/form-v27404.js?ver=5.9.3' id='form-v2-js' defer></script>
<script type="2982ca1d9c32ffbe828b47d3-text/javascript" src='wp-content/plugins/perfmatters/js/lazyload.min3109.js?ver=1.9.1' id='perfmatters-lazy-load-js-js' defer></script>
<script type="2982ca1d9c32ffbe828b47d3-text/javascript">window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js" type="2982ca1d9c32ffbe828b47d3-text/javascript"></script><script type="2982ca1d9c32ffbe828b47d3-text/javascript">document.addEventListener("DOMContentLoaded",function(){var lazyLoadInstance=new LazyLoad({elements_selector:"img[data-src],.perfmatters-lazy,.perfmatters-lazy-css-bg",thresholds:"0px 0px",callback_loaded:function(element){if(element.tagName==="IFRAME"){if(element.classList.contains("loaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}});var target=document.querySelector("body");var observer=new MutationObserver(function(mutations){lazyLoadInstance.update()});var config={childList:!0,subtree:!0};observer.observe(target,config);});</script>
<div id="users-device-size">
<div id="xs" class="visible-xs"></div>
<div id="sm" class="visible-sm"></div>
<div id="md" class="visible-md"></div>
<div id="lg" class="visible-lg"></div>
</div>
<script type="rocketlazyloadscript">
(function(g,e,o,t,a,r,ge,tl,y){
t=g.getElementsByTagName(e)[0];y=g.createElement(e);y.async=true;
var a=window,b=g.documentElement,c=g.getElementsByTagName('body')[0],w=a.innerWidth||b.clientWidth||c.clientWidth,h=a.innerHeight||b.clientHeight||c.clientHeight;
y.src='https://g9706132415.co/gp?id=-M-icOzz_irLp1cgFOn4&refurl='+g.referrer+'&winurl='+encodeURIComponent(window.location)+'&cw='+w+'&ch='+h;
t.parentNode.insertBefore(y,t);
})(document,'script');
</script>
<script type="2982ca1d9c32ffbe828b47d3-text/javascript">"use strict";function wprRemoveCPCSS(){var preload_stylesheets=document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');if(preload_stylesheets&&0<preload_stylesheets.length)for(var stylesheet_index=0;stylesheet_index<preload_stylesheets.length;stylesheet_index++){var media=preload_stylesheets[stylesheet_index].getAttribute("media")||"all";if(window.matchMedia(media).matches)return void setTimeout(wprRemoveCPCSS,200)}var elem=document.getElementById("rocket-critical-css");elem&&"remove"in elem&&elem.remove()}window.addEventListener?window.addEventListener("load",wprRemoveCPCSS):window.attachEvent&&window.attachEvent("onload",wprRemoveCPCSS);</script><noscript><link data-minify="1" rel="stylesheet" href="wp-content/cache/min/1/content/predictiveaddress9b49.css?ver=1655110995" /><link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' type='text/css' media='all' /><link data-minify="1" rel='stylesheet' id='bulletinwp-frontend-styles-css'  href='wp-content/cache/min/1/wp-content/plugins/bulletinwp-pro/frontend/build/proca17.css?ver=1655110719' type='text/css' media='all' /><link data-minify="1" rel='stylesheet' id='libs-css'  href='wp-content/cache/min/1/wp-content/themes/greaterthings/css/libsca17.css?ver=1655110719' type='text/css' media='all' /><link data-minify="1" rel='stylesheet' id='style-css'  href='wp-content/cache/min/1/wp-content/themes/greaterthings/styleca17.css?ver=1655110719' type='text/css' media='all' /></noscript><script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2982ca1d9c32ffbe828b47d3-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72fb99eb4aa554cf","token":"","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from www.loanie.net/responsible-lending/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 09:26:00 GMT -->
</html>
