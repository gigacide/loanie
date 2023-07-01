<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <script type="0cddec843b59dfef66e72795-text/javascript">
        if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}

    </script>
    <script type="0cddec843b59dfef66e72795-text/javascript">
        class RocketLazyLoadScripts{constructor(){this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():(this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener(){this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n){e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src")){const n=new URL(t.html).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();

    </script>
    <meta http-equiv="Content-Language" content="en">
    <title>Payday Loans &amp; Bad Credit Loans From Loanie™</title>
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C500%2C700%7CMontserrat%3A400%2C700&amp;display=swap"/>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="-|49"></script>
    <style id="" media="print" onload="this.media='all'">@font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aX8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aX8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0Uw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0Uw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(fonts.gstatic.com/s/rubik/v21/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-FV0Uw.ttf) format('truetype');
        }
    </style>
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C500%2C700%7CMontserrat%3A400%2C700&amp;display=swap"/>
    </noscript>
    <style id="rocket-critical-css">.bulletinwp-bulletins {
            position: relative;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-item {
            padding: 0 12px;
            position: relative;
            -webkit-box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            opacity: 0;
            margin: 0 auto;
            z-index: 99999
        }

        @media (min-width: 768px) {
            .bulletinwp-bulletins .bulletinwp-bulletin-item {
                padding: 12px 24px
            }
        }

        .bulletinwp-bulletins .bulletinwp-main-container {
            margin: 0 auto
        }

        .bulletinwp-bulletins .bulletinwp-top-container {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 8px
        }

        @media (min-width: 768px) {
            .bulletinwp-bulletins .bulletinwp-top-container {
                margin-bottom: 0
            }
        }

        .bulletinwp-bulletins .bulletinwp-center-container {
            width: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            overflow: hidden
        }

        .bulletinwp-bulletins .bulletinwp-right-container {
            position: relative;
            z-index: 1;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper {
            width: 100%
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-content-wrapper a {
            text-decoration: underline;
            color: currentColor;
            border: none
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-content {
            display: none
        }

        @media (min-width: 768px) {
            .bulletinwp-bulletins .bulletinwp-bulletin-content {
                display: block
            }
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-mobile-content {
            display: block
        }

        @media (min-width: 768px) {
            .bulletinwp-bulletins .bulletinwp-bulletin-mobile-content {
                display: none
            }
        }

        .bulletinwp-bulletins.bulletinwp-placement-top {
            position: relative;
            width: 100%
        }

        .bulletinwp-bulletins.bulletinwp-placement-top .bulletinwp-bulletin-item {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-close-button {
            padding: 8px;
            border-radius: 5px
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button {
            position: relative;
            width: 20px;
            height: 20px
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::before, .bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::after {
            content: '';
            border-radius: 2px;
            position: absolute;
            height: 19px;
            width: 2px;
            left: 9px;
            top: 1px
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::before {
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .bulletinwp-bulletins .bulletinwp-bulletin-close-button .bulletinwp-close-button::after {
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .bulletinwp-bulletins .bulletinwp-right-container .bulletinwp-bulletin-close-button {
            margin-left: 4px
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        header, nav, section {
            display: block
        }

        a {
            background-color: transparent
        }

        b {
            font-weight: 700
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        small {
            font-size: 80%
        }

        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        img {
            border: 0
        }

        png:not(:root) {
            overflow: hidden
        }

        button, input {
            margin: 0;
            font: inherit;
            color: inherit
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button
        }

        button::-moz-focus-inner, input::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        input {
            line-height: normal
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after, :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button, input {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        img {
            vertical-align: middle
        }

        h1, h2 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        h1, h2 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h1 {
            font-size: 36px
        }

        h2 {
            font-size: 30px
        }

        p {
            margin: 0 0 10px
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.4
        }

        @media (min-width: 768px) {
            .lead {
                font-size: 21px
            }
        }

        small {
            font-size: 85%
        }

        .text-center {
            text-align: center
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .col-md-4, .col-md-7, .col-md-8 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        @media (min-width: 992px) {
            .col-md-4, .col-md-7, .col-md-8 {
                float: left
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-pull-7 {
                right: 58.33333333%
            }

            .col-md-push-4 {
                left: 33.33333333%
            }
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc
        }

        .collapse {
            display: none
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .clearfix:after, .clearfix:before, .container:after, .container:before, .nav:after, .nav:before, .row:after, .row:before {
            display: table;
            content: " "
        }

        .clearfix:after, .container:after, .nav:after, .row:after {
            clear: both
        }

        @-ms-viewport {
            width: device-width
        }

        .visible-md, .visible-sm, .visible-xs {
            display: none !important
        }

        @media (max-width: 767px) {
            .visible-xs {
                display: block !important
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md {
                display: block !important
            }
        }

        .btn {
            font-family: 'Rubik', sans-serif;
            padding: 15px 30px;
            font-weight: 500;
            font-size: 19px;
            text-align: center;
            display: inline-block;
            border: none;
            border: 2px solid transparent;
            border-radius: 100px;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .btn small {
            font-size: 12px;
            font-weight: 300;
            display: block;
            color: #fff;
            margin: 3px 0 0 0;
            text-transform: none
        }

        .btn-default {
            background-color: #E9406B;
            border-color: transparent;
            color: #fff
        }

        .btn-primary-mast {
            border: none;
            color: #fff;
            background: #ea8735;
            background: -moz-linear-gradient(left, #ea8735 0%, #f1c54c 100%);
            background: -webkit-linear-gradient(left, #ea8735 0%, #f1c54c 100%);
            background: linear-gradient(to right, #ea8735 0%, #f1c54c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ea8735', endColorstr='#f1c54c', GradientType=1)
        }

        @font-face {
            font-display: swap;
            font-family: 'FontAwesome';
            src: url(wp-content/themes/greaterthings/fonts/fontawesome-webfont37ec.eot?v=4.6.0);
            src: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/fonts/fontawesome-webfont.eot?#iefix&v=4.6.0) format('embedded-opentype'), url(http://127.0.0.1:8000/wp-content/themes/greaterthings/fonts/fontawesome-webfont.woff2?v=4.6.0) format('woff2'), url(http://127.0.0.1:8000/wp-content/themes/greaterthings/fonts/fontawesome-webfont.woff?v=4.6.0) format('woff'), url(http://127.0.0.1:8000/wp-content/themes/greaterthings/fonts/fontawesome-webfont.ttf?v=4.6.0) format('truetype'), url(http://127.0.0.1:8000/wp-content/themes/greaterthings/fonts/fontawesome-webfont.png?v=4.6.0#fontawesomeregular) format('png');
            font-weight: normal;
            font-style: normal
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .fa-plus:before {
            content: "\f067"
        }

        .fa-minus:before {
            content: "\f068"
        }

        .wdt-loading-screen {
            width: 100%;
            height: 100%;
            background-color: #fff;
            position: fixed;
            z-index: 999998;
            top: 0;
            left: 0;
            overflow: hidden;
            display: none
        }

        .wdt-loading-phrases {
            width: 300px;
            margin: 0 auto;
            height: 106px;
            overflow: hidden;
            position: relative;
            padding: 10px 0;
            text-align: center;
            top: 50%;
            transform: translateY(-50%)
        }

        .wdt-loading-phrases:before {
            content: " ";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999999;
            background: rgba(255, 255, 255, 1);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(50%, rgba(255, 255, 255, 0)), color-stop(100%, rgba(255, 255, 255, 1)));
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%);
            background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ffffff', GradientType=0)
        }

        .wdt-loading-phrase {
            padding-left: 30px;
            position: relative;
            transform: translateY(30px);
            line-height: 30px;
            height: 30px
        }

        .wdt-loading-phrase:before {
            content: " ";
            width: 18px;
            height: 18px;
            position: absolute;
            top: 6px;
            left: 0;
            border: 1px solid #ccc;
            border-radius: 50%
        }

        .wdt-loading-phrase:after {
            opacity: 0;
            height: 11px;
            width: 7px;
            -webkit-transform-origin: left top;
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -o-transform-origin: left top;
            transform-origin: left top;
            border-right: 3px solid #2EB150;
            border-top: 3px solid #2EB150;
            border-radius: 2.5px !important;
            content: '';
            left: 3px;
            top: 16px;
            position: absolute;
            -webkit-transform: scaleX(-1) rotate(135deg);
            -moz-transform: scaleX(-1) rotate(135deg);
            -ms-transform: scaleX(-1) rotate(135deg);
            -o-transform: scaleX(-1) rotate(135deg);
            transform: scaleX(-1) rotate(135deg)
        }

        * {
            outline: none !important
        }

        img {
            max-width: 100%;
            height: auto
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none
        }

        html {
            overflow-x: hidden
        }

        body {
            background: #fff;
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #777;
            line-height: 1.6;
            overflow-x: hidden
        }

        #wrapper {
            max-width: 2130px;
            margin: 0 auto;
            position: relative;
            overflow: hidden
        }

        h1, h2 {
            font-weight: 500;
            color: #1A1919;
            font-family: 'Rubik', sans-serif;
            margin-top: 0;
            margin-bottom: 20px;
            line-height: 1.3;
            letter-spacing: 3px
        }

        h1 {
            font-size: 58px;
            line-height: 61px
        }

        h2 {
            font-size: 35px
        }

        h1 span, h2 span {
            font-weight: 300
        }

        @media only screen and (max-width: 1199px) {
            h1 {
                font-size: 46px;
                line-height: 50px
            }
        }

        @media only screen and (max-width: 1199px) {
            h2 {
                font-size: 31px
            }
        }

        p {
            margin-bottom: 30px
        }

        p.lead {
            font-weight: 300;
            font-size: 20px;
            margin-bottom: 30px;
            font-family: 'Rubik', sans-serif
        }

        @media only screen and (max-width: 767px) {
            h1 {
                font-size: 30px;
                line-height: 34px
            }

            h2 {
                font-size: 26px
            }

            p.lead {
                font-size: 18px
            }

            .page-banner h1 {
                margin-bottom: 10px
            }

            .page-banner p.lead {
                margin-bottom: 25px
            }
        }

        small {
            color: #999;
            margin-bottom: 10px
        }

        b {
            font-weight: 600
        }

        a {
            color: #e9406b
        }

        #header {
            color: #fff;
            width: 100%;
            z-index: 1
        }

        .header {
            padding: 30px 0;
            position: relative;
            z-index: 200
        }

        .header .logo img {
            height: 95px;
            width: auto
        }

        @media only screen and (max-width: 991px) {
            #header {
                position: fixed;
                top: 0;
                left: 0;
                background: #fff;
                z-index: 2000
            }

            .header {
                padding: 15px 0px
            }

            .header .logo img {
                height: 45px
            }
        }

        .nav {
            text-align: right;
            margin-top: 15px;
            padding: 20px;
            position: relative;
            z-index: 2
        }

        .nav ul {
            display: inline-block
        }

        .nav ul li {
            font-weight: 600;
            display: inline-block;
            margin-left: 40px
        }

        .nav ul li a {
            color: #fff;
            position: relative;
            font-family: 'Rubik', sans-serif;
            font-weight: 500
        }

        .nav ul li a:after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            left: 50%;
            bottom: -7px;
            transform: translateX(-50%);
            background-color: #fff
        }

        .nav ul li:first-child {
            margin-left: 0
        }

        @media only screen and (max-width: 991px) {
            .nav {
                display: none
            }

            .nav ul {
                display: block
            }

            .nav ul li {
                display: block;
                margin: 0 0 3px
            }

            .nav ul li a {
                font-weight: 500;
                font-size: 21px;
                display: block;
                padding: 20px 10px;
                text-align: center;
                color: #1A1919
            }

            .nav ul li a:after {
                display: none
            }
        }

        .btn-menu span {
            border: 1px solid #D42E67;
            border-radius: 10px;
            display: block;
            margin: 6px 0
        }

        .btn-menu {
            display: none
        }

        @media only screen and (max-width: 991px) {
            .btn.btn-menu {
                width: 50px;
                text-transform: uppercase;
                display: block;
                float: right;
                padding: 0;
                font-size: 12px;
                font-weight: 500;
                margin-left: 10px;
                background: transparent !important;
                border: none !important;
                box-shadow: none !important;
                color: #6F347E;
                letter-spacing: 3px;
                text-align: center;
                top: 10px
            }

            .btn.btn-menu:after {
                display: none
            }

            .btn-header {
                position: relative;
                top: 10px
            }
        }

        .header-form {
            margin: -120px 0 0 0
        }

        @media only screen and (max-width: 991px) {
            .header-form {
                margin: 0
            }
        }

        .page-banner {
            padding: 150px 0 80px 0;
            color: #fff;
            background: #5C337E;
            position: relative
        }

        @media only screen and (max-width: 991px) {
            .page-banner {
                background: #D42E72;
                padding: 80px 0
            }
        }

        .page-banner:after {
            content: "";
            display: block;
            width: 100%;
            height: 305px;
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/bottom-slant-gradient.png) no-repeat center bottom;
            background-size: 101%;
            position: absolute;
            bottom: -30px
        }

        .page-banner:before {
            content: "";
            display: block;
            width: 100%;
            height: 305px;
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/top-slant.png) no-repeat center top;
            background-size: 101%;
            position: absolute;
            top: -1px
        }

        @media only screen and (max-width: 991px) {
            .page-banner:before {
                display: none
            }
        }

        .page-banner .container {
            position: relative;
            z-index: 200
        }

        #wrapper:after {
            content: "";
            width: 70%;
            height: 2000px;
            position: absolute;
            right: 0;
            top: -780px;
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/bg-hero-cta.png) no-repeat top left;
            background-size: 1800px;
            display: block
        }

        @media only screen and (max-width: 1690px) {
            #wrapper:after {
                width: 72%
            }
        }

        @media only screen and (max-width: 1500px) {
            #wrapper:after {
                width: 76%
            }
        }

        @media only screen and (max-width: 1300px) {
            #wrapper:after {
                width: 79%
            }
        }

        @media only screen and (max-width: 1199px) {
            #wrapper:after {
                width: 77%
            }
        }

        @media only screen and (max-width: 1065px) {
            #wrapper:after {
                width: 80%
            }
        }

        @media only screen and (max-width: 991px) {
            #wrapper:after {
                display: none
            }
        }

        @media only screen and (max-width: 991px) {
            .page-banner {
                padding-top: 180px;
                padding-bottom: 0
            }

            .page-banner:after {
                display: none
            }
        }

        .page-banner-with-form {
            padding-bottom: 130px
        }

        @media only screen and (max-width: 991px) {
            .page-banner-with-form {
                padding-bottom: 0
            }

            .page-banner-with-form .container {
                width: 100%;
                padding: 0
            }
        }

        .page-banner h1, .page-banner h2 {
            color: inherit
        }

        .page-banner p.lead {
            margin-bottom: 30px
        }

        .page-banner .apply-form {
            max-width: 590px;
            margin: 0 auto
        }

        .page-banner .apply-form .apply-form-link {
            margin-top: 30px
        }

        .page-banner .apply-form .apply-form-link a {
            color: #fff
        }

        .page-banner small {
            color: inherit;
            font-size: 11px
        }

        .answer-content {
            background: #F0EBEA;
            padding: 40px 40px 25px 40px;
            border-radius: 30px
        }

        .apply-form {
            text-align: center;
            margin-bottom: 40px
        }

        .apply-input {
            position: relative;
            height: 80px;
            width: 275px;
            margin: 5px 8px;
            border-radius: 100px;
            background: #fff;
            color: #494a4c;
            display: inline-block
        }

        @media only screen and (max-width: 767px) {
            .apply-input {
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 15px
            }
        }

        .btn-apply {
            margin: 5px 8px
        }

        .apply-input .amount-change {
            position: absolute;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            background: #7C3782;
            display: inline-block;
            vertical-align: middle;
            -webkit-touch-callout: none
        }

        .amount-minus {
            left: 10px;
            top: 50%;
            margin-top: -25px
        }

        .amount-plus {
            right: 10px;
            top: 50%;
            margin-top: -25px
        }

        .apply-input input {
            height: 80px;
            width: 140px;
            border: none;
            text-align: center;
            font-size: 30px;
            background: none;
            font-family: sans-serif;
            display: inline-block;
            vertical-align: middle
        }

        .btn.btn-primary-mast {
            min-width: 275px;
            margin: 0 8px;
            height: 80px;
            padding-left: 15px;
            padding-right: 60px;
            vertical-align: top;
            box-shadow: 0 20px 24px 0 rgba(0, 0, 0, 0.19);
            position: relative
        }

        .page-banner .btn.btn-primary-mast {
            min-width: 275px
        }

        @media only screen and (max-width: 767px) {
            .btn.btn-primary-mast {
                margin-left: 0;
                margin-right: 0
            }
        }

        a.btn.btn-primary-mast {
            height: auto
        }

        .btn-primary-mast:after {
            content: "\f061";
            font-family: "fontAwesome";
            font-weight: 300;
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background: #DB306B;
            position: absolute;
            right: 15px;
            top: 50%;
            margin: -20px 0 0 0;
            border-radius: 100%;
            line-height: 40px;
            text-align: center;
            letter-spacing: -4px
        }

        .header .btn-primary-mast {
            float: right;
            font-size: 11px;
            width: auto;
            padding: 15px 15px;
            margin: 0 10px;
            box-shadow: none;
            min-width: 140px;
            max-width: 200px
        }

        @media only screen and (max-width: 420px) {
            .header .btn-primary-mast {
                display: none !important
            }
        }

        .header .btn-primary-mast:after {
            content: "";
            display: none
        }

        .apply-form .apply-form-link {
            margin: 30px 0 0;
            font-size: 14px
        }

        .apply-form .apply-form-link a {
            color: #fff
        }

        .apply-form-benefits {
            text-align: left;
            overflow: hidden
        }

        .apply-form-benefits .top-slope {
            display: none
        }

        @media only screen and (max-width: 991px) {
            .apply-form-benefits {
                margin: 40px 0 0px 0;
                padding: 100px 0 20px 0;
                background: #59337E
            }

            .apply-form-benefits .top-slope {
                display: block;
                position: absolute;
                top: -1px;
                left: 0;
                width: 100%;
                height: 100px;
                fill: #D42E72
            }
        }

        .apply-form-benefits p {
            padding-left: 80px;
            position: relative;
            line-height: 24px;
            margin: 0;
            min-height: 38px
        }

        .apply-form-benefits h2 {
            margin: 0
        }

        @media only screen and (max-width: 991px) {
            .apply-form-benefits h2 {
                display: none
            }
        }

        .apply-form-benefits p {
            margin: 45px 0;
            font-weight: 400;
            line-height: 19px;
            font-size: 15px;
            max-width: 100%;
            width: 300px
        }

        @media only screen and (max-width: 991px) {
            .apply-form-benefits p {
                margin: 45px auto
            }
        }

        .apply-form-benefits p span {
            display: block;
            border-radius: 100%;
            width: 60px;
            height: 60px;
            position: absolute;
            top: -10px;
            left: 0;
            border: 2px solid #FFFFFF;
            border-radius: 100%;
            text-align: center
        }

        .apply-form-benefits img {
            margin-top: 12px;
            height: 32px;
            margin-left: 1px
        }

        .apply-form-benefits div p:before {
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/icon-no-credit-check.png) no-repeat center center
        }

        .apply-form-benefits div p:nth-child(2):before {
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/icon-time.png) no-repeat center center
        }

        .apply-form-benefits div p:nth-child(3):before {
            background: url(http://127.0.0.1:8000/wp-content/themes/greaterthings/images/icon-process-applications.png) no-repeat center center
        }

        .apply-approved-bottom-slope {
            display: none;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            fill: #fff
        }

        @media only screen and (max-width: 991px) {
            .apply-approved-bottom-slope {
                display: block;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100px;
                fill: #fff
            }
        }

        .apply-approved-section-container .top-slope {
            position: absolute;
            top: -1px;
            left: 0;
            width: 100%;
            height: 100px;
            fill: #fff
        }

        .apply-approved-bottom .top-slope {
            display: none
        }

        @media only screen and (max-width: 991px) {
            .apply-approved-bottom .top-slope {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100px;
                fill: #D42E72
            }
        }

        .apply-approved-section p {
            margin: 0 auto 20px auto;
            max-width: 460px
        }

        .apply-approved-section-top p {
            display: none
        }

        .apply-approved-section .apply-form-link {
            display: none
        }

        @media only screen and (max-width: 479px) {
            .wdt-loading-phrases {
                font-size: 18px
            }
        }

        .recently-approved .wdt-loading-screen {
            width: auto;
            height: auto;
            background-color: transparent;
            position: relative;
            z-index: 999998;
            top: 0;
            left: 0;
            overflow: hidden;
            height: 100px
        }

        .recently-approved .wdt-loading-phrases {
            width: 100%;
            max-width: 600px
        }

        .recently-approved .wdt-loading-phrase {
            color: #DB306B;
            font-size: 20px;
            height: 36px;
            padding-left: 0
        }

        @media only screen and (max-width: 991px) {
            .recently-approved .wdt-loading-phrase {
                height: 60px
            }
        }

        .recently-approved .wdt-loading-phrases {
            padding: 0
        }

        .wdt-loading-phrase:before {
            display: none
        }

        @media (max-width: 990px) {
            #header .logo img {
                min-height: 60px
            }
        }

        .footer-form-slope {
            display: none
        }

        @media only screen and (max-width: 991px) {
            .footer-form-slope {
                display: block;
                position: absolute;
                bottom: -1px;
                left: 0;
                width: 100%;
                height: 100px;
                fill: #59337E
            }
        }

        #footer .apply-form-link {
            display: none
        }</style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>

    <!--<script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="http://widget..com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>-->

    <link rel="shortcut icon" href="wp-content/uploads/siteicon-150x150.png" type="image/x-icon"/>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
         var baseURL = 'index.html'; var templateURL = 'wp-content/themes/greaterthings/index.html';

    </script>
    <meta name='robots' content='max-image-preview:large'/>

    <meta name="description"
          content="Get a payday loan via Loanie. Paid out the same day - Loans from $50 to $5,000 - Good &amp; Bad Credit - Secure UK Lenders. INSTANT DECISION."/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" {{route('home-us')}}"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Payday Loans &amp; Bad Credit Loans From Loanie™"/>
    <meta property="og:description"
          content="Get a payday loan via Loanie. Paid out the same day - Loans from $50 to $5,000 - Good &amp; Bad Credit - Secure UK Lenders. INSTANT DECISION."/>
    <meta property="og:url" content="https://www.loanie.net/"/>
    <meta property="og:site_name" content="Loanie"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="Get a payday loan via Loanie. Paid out the same day - Loans from $50 to $5,000 - Good &amp; Bad Credit - Secure UK Lenders. INSTANT DECISION."/>
    <meta name="twitter:title" content="Payday Loans &amp; Bad Credit Loans From Loanie™"/>
    <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebSite",
                "@id": "https://www.loanie.net/#website",
                "url": "https://www.loanie.net/",
                "name": "Loanie",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://www.loanie.net/?s={search_term_string}",
                    "query-input": "required name=search_term_string"
                }
            },
            {
                "@type": "WebPage",
                "@id": "https://www.loanie.net/#webpage",
                "url": "https://www.loanie.net/",
                "inLanguage": "en-GB",
                "name": "Payday Loans &amp; Bad Credit Loans From Loanie\u2122",
                "isPartOf": {
                    "@id": "https://www.loanie.net/#website"
                },
                "datePublished": "2017-01-17T11:08:39+00:00",
                "dateModified": "2022-04-10T17:21:30+00:00",
                "description": "Get a payday loan via Loanie. Paid out the same day - Loans from \u00a350 to \u00a35,000 - Good & Bad Credit - Secure UK Lenders. INSTANT DECISION."
            }
        ]
    }
    </script>

    <link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
    <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect'/>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="0cddec843b59dfef66e72795-|49"></script>
    <link rel='preload' href='wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' data-rocket-async="style"
          as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"
          type='text/css' media='all'/>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="0cddec843b59dfef66e72795-|49"></script>
    <link data-minify="1" rel='preload'
          href='wp-content/cache/min/1/wp-content/plugins/bulletinwp-pro/frontend/build/proca17.css?ver=1655110719'
          data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"
          onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all'/>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="0cddec843b59dfef66e72795-|49"></script>
    <link data-minify="1" rel='preload'
          href='wp-content/cache/min/1/wp-content/themes/greaterthings/css/libsca17.css?ver=1655110719'
          data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"
          onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all'/>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="0cddec843b59dfef66e72795-|49"></script>
    <link data-minify="1" rel='preload'
          href='wp-content/cache/min/1/wp-content/themes/greaterthings/styleca17.css?ver=1655110719'
          data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"
          onerror="this.removeAttribute('data-rocket-async')" type='text/css' media='all'/>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript'
            src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript'
            src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript'
            src='wp-content/plugins/png-support/js/min/pngs-inline-min8a54.js?ver=1.0.0' id='bodhi_png_inline-js'
            defer></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='bodhi_png_inline-js-after'>
cssTarget="img.style-png";ForceInlineSVGActive="false";


    </script>

    <script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-');

    </script>

    <link rel="icon" href="wp-content/uploads/siteicon-150x150.png" sizes="32x32"/>
    <link rel="icon" href="wp-content/uploads/siteicon.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="wp-content/uploads/siteicon.png"/>
    <meta name="msapplication-TileImage" content="http://127.0.0.1:8000/wp-content/uploads/siteicon.png"/>

    <div id="bulletinwp-generator" style="display: none;">
        <div id="bulletinwp-bulletin-item-1" class="bulletinwp-bulletins bulletinwp-placement-top  "
             data-header-banner-style="above-header" data-header-banner-scroll="static"
             data-site-has-fixed-header="true" data-fixed-header-selector="div.header">
            <div class="bulletinwp-bulletin-item "
                 style="background-color:#5c337e;color:#fff;padding:2px 24px                          " data-id="1">
                <div class="bulletinwp-main-container" style="max-width: none;">
                    <div class="bulletinwp-top-container" style="margin-bottom: 0;">
                        <div class="bulletinwp-center-container ">
                            <div class="bulletinwp-bulletin-content-wrapper" style="text-align: center;">
                                <div class="bulletinwp-bulletin-content bulletinwp-bulletin-content-main"> **Warning:**
                                    Late repayment can cause you serious money problems. For help <a
                                        href="https://moneyhelper.org.uk/" target="_blank">moneyhelper.org.uk</a>
                                </div>
                                <div class="bulletinwp-bulletin-mobile-content bulletinwp-bulletin-mobile-content-main">
                                    Warning: Late repayment can cause you serious money problems. For help <a
                                        href="https://moneyhelper.org.uk/" target="_blank">moneyhelper.org.uk</a></div>
                            </div>
                        </div>
                        <div class="bulletinwp-right-container">
                            <div class="bulletinwp-bulletin-close-button" data-cookie-expiry="-1">
                                <div class="bulletinwp-close-button"></div>
                            </div>
                            <style>     #bulletinwp-bulletin-item-1 .bulletinwp-bulletin-close-button .bulletinwp-close-button::before,
                                #bulletinwp-bulletin-item-1 .bulletinwp-bulletin-close-button .bulletinwp-close-button::after {
                                    background-color: #ffffff;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            <style>       #bulletinwp-bulletin-item-1 {
                    font-size: 13px !important
                }

                #bulletinwp-bulletin-item-1 p {
                    font-size: 13px !important
                }

                @media (max-width: 767px) {
                    #bulletinwp-bulletin-item-1 {
                        font-size: 12px !important
                    }

                    #bulletinwp-bulletin-item-1 p {
                        font-size: 12px !important
                    }
                }      </style>
        </div>
    </div>
    <noscript>
        <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
                display: none !important;
            }</style>
    </noscript>
    <script type="rocketlazyloadscript">
/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))


    </script>
    <noscript>
        <style>.perfmatters-lazy[data-src] {
                display: none !important;
            }</style>
    </noscript>
    <style>.perfmatters-lazy:not(picture), .perfmatters-lazy > img {
            opacity: 0
        }

        .perfmatters-lazy.loaded, .perfmatters-lazy > img.loaded, .perfmatters-lazy[data-was-processed=true] {
            opacity: 1;
            transition: opacity 500ms
        }</style>
    <script id="page-schema-data" type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https://www.loanie.net",
            "logo": "http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png",
            "name": "Loanie",
            "description": "Loan Broker",
            "parentOrganization": "Stag Finance Ltd",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "GB",
                "addressLocality": "Uxbridge",
                "addressRegion": "London",
                "postalCode": "UB8 1JG",
                "streetAddress": "The Charter Building"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+44 800 302 9409",
                "contactType": "Customer service"
            }
        }

    </script>
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Will the payday loan have to be repaid on my next payday?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "If you want to clear your payday loan in full on your next payday, you can. However, the term for a payday loan is usually 3-months or more. The term payday loan shows the origins of this type of credit, which was when employees would sub money from their wages in advance. However, this was often insufficient and left their pay packet too lite the following month, so payday loans with slightly longer repayment periods make borrowing a small amount more manageable for most people.
                    How
                    long
                    you
                    repay
                    the
                    loan
                    over
                    will
                    depend
                    on
                    the
                    repayment
                    period
                    you
                    select
                    when
                    applying.
                    People
                    usually
                    try
                    to
                    pay
                    the
                    loan
                    as
                    soon
                    as
                    they
                    can,
                    without
                    causing
                    them
                    more
                    financial
                    difficulty.
                    This
                    means
                    shorter
                    loans
                    are
                    often
                    taken
                    over
                    a
                    shorter
                    period,
                    while
                    larger
                    loans
                    are
                    more
                    likely
                    to
                    be
                    taken
                    with
                    a
                    longer
                    repayment
                    period.
                    1
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Can I use my smartphone to apply for a payday loan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Smartphones are one of the largest growing sectors for carrying out many tasks, including applying for payday loans online. Over the past decade, they have grown increasingly capable, secure, and user-friendly. You can complete the Loanie application process on your smartphone. Our website is even designed to ensure it’s as easy to use on a mobile device as it is on a tablet or computer.
                    2
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Will a payday loan cost me a lot more?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All reputable payday loan lenders are now regulated by the FCA (), which provides rules, regulation, and guidelines they must follow to stay compliant. They must be upfront about all interest and charges that will be applied to your loan. With an increasing number of customers turning to this type of borrowing to help with short-term financial difficulty, it’s not surprising the FCA felt the need to act. Our lender panel only includes regulated reputable direct lenders.
                    The
                    APR
                    rates
                    for
                    Payday
                    Loans
                    are
                    high,
                    but
                    this
                    is
                    often
                    a
                    reflection
                    of
                    the
                    short-term
                    nature
                    of
                    the
                    loan.
                    The
                    FCA
                    regulation
                    also
                    means
                    all
                    payday
                    loan
                    lenders
                    must
                    include
                    their
                    rates
                    on
                    advertising,
                    which
                    has
                    led
                    to
                    increased
                    competition
                    between
                    them,
                    which
                    can
                    only
                    be
                    good
                    news
                    for
                    the
                    average
                    borrower.
                    3
                    "
                }
            },
            {
                "@type": "Question",
                "name": "What regulation is there for payday loans?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The FCA () have been responsible for regulating payday loan lenders since 2014. Before the FCA started implementing specific guidelines for payday loans, all direct lenders were already required to hold a valid consumer credit licence. The FCA now issue these licences and consider irresponsible lending and unethical practices as part of the application process.
                    This
                    means
                    every
                    lender
                    on
                    our
                    panel
                    has
                    gone
                    through
                    the
                    process
                    of
                    obtaining
                    a
                    licence.
                    They
                    are
                    also
                    compliant
                    with
                    all
                    FCA
                    regulations
                    and
                    guidelines.
                    They
                    have
                    shown
                    they
                    offer
                    products
                    that
                    are
                    acceptable
                    in
                    an
                    ethical
                    way
                    by
                    the
                    regulating
                    authority.
                    You
                    can
                    also
                    view
                    the
                    privacy
                    policy
                    if
                    you
                    want
                    extra
                    peace
                    of
                    mind
                    about
                    how
                    seriously
                    we
                    take
                    the
                    security
                    of
                    your
                    personal
                    data.
                    4
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Is there a best payday lender?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "There is no such thing as the best payday lender, just the one that is best for you at any given time. In most cases, this will be the payday loan companies that’s offering the best interest rate and most preferable terms. The terms each payday lender offers, and their rates vary quite often. Some run special offers for payday loans or change their position permanently to remain competitive or attract new business. When you use Loanie, you’ll know you’re being offered the best rate from our industry-leading panel of lenders, and that they are all registered and regulated by the FCA (). We’ll always try to match you with the best lender in our panel for your situation.
                    5
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Will a direct lender perform a credit search?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All direct payday loan lenders are required by the FCA () to perform a full credit check before releasing any funds. However, applying with Loanie won’t affect your credit score, as we only initially perform a soft search, which leaves no permanent mark. If you accept a loan offer, they will perform the full search, but you will already know you meet their criteria before it’s done.
                    6
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Will a payday loan make my bad credit rating worse?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "If you apply for credit and are refused, it can be bad for your credit rating. However, a payday loan that is paid back according to the agreed terms will only improve your credit score. Because our application process only uses a soft search, there is no negative effect on your credit score. If you decide to accept a loan offer, you’ll already know you meet the lender’s criteria. If you fail to repay the loan according to the agreed terms, it can negatively affect your credit rating.
                    7
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Will my application for a payday loan be accepted?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Payday loans are designed to provide small amounts of money to the maximum number of applicants. They are probably the type of credit you’re most likely to be accepted for. We understand that you may have made mistakes in the past and that certain circumstances can lead to a poor credit rating. Because we provide access to one of the largest panels of lenders, you have the maximum chance of being successful. However, the only way to know for sure that you’re eligible is to complete the quick and straightforward application process.
                    8
                    "
                }
            },
            {
                "@type": "Question",
                "name": "Will you charge me additional fees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Loanie do not charge a fee for the use of our services. You should never pay an upfront fee for a loan.
                    9
                    "
                }
            },
            {
                "@type": "Question",
                "name": "I need a payday loan quickly, can you help?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most people applying for payday loans need money quickly. This type of loan is designed to act as a short-term solution to unexpected financial difficulties, such as an unforeseen repair bill or family emergency. This generally means the people applying are in a stressful situation and need the money in order to resolve their problem. This means direct lenders have designed the process to be as quick as possible. This is partly to help the applicants, and partly because providing faster access to the borrowed money can be enough to win you a new customer. We quote a time of 10 minutes* as an average. It’s often quicker than this to get a payday loan online, but we have no control over your bank’s internal systems, so quote this time to be on the safe side.
                    10
                    "
                }
            }
        ]
    }

    </script>
</head>
<body class="home page-template-default page page-id-2">

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<div id="wrapper">
    <header id="header" class="clearfix">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <a {{route('home-us')}}" class="logo">
                            <span class=""><img width="304" height="170"
                                                src="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png"
                                                class="attachment-full size-full" alt="Loanie logo"
                                                data-lazy-srcset="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png 304w, http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png 300w"
                                                data-lazy-sizes="(max-width: 304px) 100vw, 304px"
                                                data-lazy-src="wp-content/uploads/logo_payday_uk_trap.png"/><noscript><img
                                        width="304" height="170" src="wp-content/uploads/logo_payday_uk_trap.png"
                                        class="attachment-full size-full" alt="Loanie logo"
                                        srcset="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png 304w, http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png 300w"
                                        sizes="(max-width: 304px) 100vw, 304px"/></noscript></span>
                        </a>
                        <a href="#" class="btn btn-default btn-menu"><span></span><span></span> Menu</a>
                        <a href="{{route('apply-uk')}}"
                           class="btn btn-primary-mast btn-apply visible-xs visible-sm btn-header">Get Your Quote</a>
                    </div>
                    <div class="col col-md-8">
                        <nav class="nav">
                            <ul id="menu-main-menu" class="menu">
                                <li id="menu-item-2841"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-2841">
                                    <a {{route('home-us')}}" aria-current="page">Home</a></li>
                                <li id="menu-item-2822"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2822"><a
                                        href="apply-now/route('apply-us'/index.html">Will I be approved?</a></li>
                                <li id="menu-item-63"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a
                                        href="apply-now/apply.html">Apply</a></li>
                                <li id="menu-item-2825"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2825"><a
                                        href="guides/index.html">Guides</a></li>
                                <li id="menu-item-2840"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a
                                        href="contact-us/index.html">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="page-banner page-banner-with-form">
        <div class="container">
            <div class="col-md-7 col-md-push-4 text-center header-form">
                <h1>
                    <span>Payday loans from</span><br/>$50 to $5000
                </h1>
                <p class="lead">How much do you need?</p>
                <div class="apply-form clearfix">
                    <form action="http://127.0.0.1:8000/apply-uk" method="get">
                        <div class="apply-input">
                            <a href="#" class="amount-change amount-minus"><i class="fa fa-minus"></i></a>
                            <input type="text" name="value" value="$500" class="apply-loan-amount"/>
                            <a href="#" class="amount-change amount-plus"><i class="fa fa-plus"></i></a>
                        </div>
                        <button type="submit" class="btn btn-primary-mast btn-apply">Get Your Quote<small>No obligation,
                                100% secure.</small></button>
                    </form>
                    <p class="apply-form-link">
                        <a href="apply-now/route('apply-us'/index.html">Will I be approved?</a>
                    </p>
                    </br>

                    <div class="" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb"
                         data-businessunit-id="4bf27fe900006400050cd2b1" data-style-height="100%"
                         data-style-width="100%" data-theme="dark" data-font-family="Heebo">
                        <!--<a href="https://uk..com/review/www.loanie.net" target="_blank" rel="noopener"></a>-->
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-md-pull-7 apply-form-benefits">
                <png class="top-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,0 100,0 0,100"/>
                </png>
                <h2><span>Online Loans</span><br/>make sense</h2>
                <div class="benefit-wrap">
                    <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"
                                alt=""
                                data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"
                                    alt=""/></noscript></span>
                        Instant quote with a soft credit check and no fees.
                    </p>
                    <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"
                                alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"
                                    alt=""/></noscript></span>
                        Small loans can be sent the same day.
                    </p>
                    <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"
                                alt=""
                                data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"
                                    alt=""/></noscript></span>

                        Over 7500 no obligation quotes processed every single day!<sup><font size="-2">^</font></sup>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-bar">
        <h6>Representative APR 91%.</h6></br><p class="small">Representative Example: Borrow $500 for 6 months.
            Interest: $160.27 - Interest rate: 65% per annum (fixed). Representative APR: 91% - Total amount payable:
            $660.27. Rates between 9.3% APR and maximum 1294% APR - your no-obligation quote and APR will be based on
            your
            personal circumstances. </p></br>
        <p><strong>Loanie is a registered trading name Stag Finance Ltd who is an introducer appointed representative
                of Stag Finance Ltd Limited, who are a full authorised credit broker, not a lender. Loanie provides
                access
                to a loan matching service. This site will submit the information you provide to Stag Finance Ltd's
                panel of
                lenders. All applications will be subject to credit checks and affordability assessments. If you accept
                a
                lender’s loan offer, they will perform a hard credit search. Loanie and Stag Finance Ltd will not
                perform a
                credit check, lenders will complete a soft search when assessing your eligibility for a loan.
        </p></strong></br>
        <p>Loans between $50 and $5000 over a 3-month to 36-month term.</p></br>
        <p><strong>Warning:</strong> Late repayment can cause you serious money problems. For help, go to <a
                href="http://www.moneyhelper.org.uk/" target="_blank" rel="noopener noreferrer">moneyhelper.org.uk</a>.
        </p>
    </section>
    <div id="content" class="clearfix">
        <section class="how-it-works-section ">
            <div class="container text-center">
                <h2>How it Works</h2>
                <p class="lead lead-pink lead-center">We know you need your money as soon as possible. That’s why we
                    have designed our website to be fast and simple.</p>
                <div class="col-sm-4 mobile-stack">
                    <div class="how-it-works-icon"><img
                            src="http://127.0.0.1:8000/wp-content/uploads/icon-apply-online.png"
                            alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-check-offers.png"/>
                    </div>
                    <h3>Apply Online</h3>
                    <p>Fill out our short, secure form and search an industry-leading panel of lenders to find your
                        loan. </p>
                </div>
                <div class="col-sm-4 mobile-stack">
                    <div class="how-it-works-icon"><img
                            src="http://127.0.0.1:8000/wp-content/uploads/icon-check-offers.png"
                            alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-check-offers.png"/>

                    </div>
                    <h3>Check Your Offer</h3>
                    <p>Once you have your offer from the lender, you can review the offer and get your cash.</p>
                </div>
                <div class="col-sm-4">
                    <div class="how-it-works-icon"><img
                            src="http://127.0.0.1:8000/wp-content/uploads/icon-get-money.png"
                            alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-get-money.png"/>
                    </div>
                    <h3>Get Your Money</h3>
                    <p>Once accepted, your money can often be paid into your account the same day.</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="info-section">
                <div class="info-image fan-top">
                    <img width="940" height="1254"

                         src="http://127.0.0.1:8000/wp-content/uploads/img-father-son.jpg"
                         alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/img-father-son.jpg"/>


                </div>
                <div class="info-content">
                    <div>
                        <h2>Reasons to use <br/>Loanie <font color="#c92b7f">UK</font></h2>
                        <ul class="reasons-list">
                            <li>
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-no-hidden-costs.png"
                                    alt=""
                                    data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-no-hidden-costs.png"/>

                                No hidden costs or fees
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"
                                    alt=""
                                    data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"/></span>
                                Instant quote with a soft credit check and no fees.

                            </li>
                            <li>
                                <img

                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-no-paperwork.png"
                                    alt=""
                                    data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-no-paperwork.png"/>
                                No paperwork
                            </li>
                            <li>
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-secure.png"
                                    alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-secure.png"/>
                                Confidential & secure
                            </li>
                            <li>
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-approval-rate.png"
                                    alt=""
                                    data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-approval-rate.png"/>

                                High approval rates
                            </li>
                            <li>
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-compare.png"
                                    alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-compare.png"/>

                                Loans tailored to you
                            </li>
                            <li>
                                <img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-obligation.png"
                                    alt=""
                                    data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-obligation.png"/>

                                No obligation to accept
                            </li>
                        </ul>
                        <a href="http://127.0.0.1:8000/apply-uk" class="btn btn-primary-mast btn-apply">Get Your Quote
                            <small>No
                                obligation, 100% secure.</small></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="info-section info-section-reverse">
                <div class="info-image fan-bottom">
                    <img width="400" height="534"

                         src="http://127.0.0.1:8000/wp-content/uploads/phone3.png"
                         alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/phone3.png"/>


                </div>
                <div class="info-content">
                    <div>
                        <h2>Who are Loanie <span style="color: #c92b7f;">UK</span></h2>
                        <p class="lead lead-pink">We get it. As an online payday loan website we need to work hard to
                            earn your trust! Here&#8217;s some information about us.</p>
                        <p>We are a well-established company and help thousands of people every day to find small loans
                            for a wide range of reasons. In fact, on average we help over 4000 people a day! Our simple
                            application form makes it easy to find a loan from an industry-leading panel of lenders,
                            saving you time and making your life easier. Find loans that make sense.</p>
                        <p><a class="btn btn-primary-mast btn-apply" href="http://127.0.0.1:8000/apply-uk">Get Your Quote
                                <small>No
                                    obligation, 100% secure.</small></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="apply-approved-section text-center">
            <h2 style="margin-bottom:50px">We've helped out<br/> thousands of people...</h2>
            <div class="recently-approved">
                <div class="wdt-loading-screen">
                    <div class="wdt-loading-phrases">
                        <div class="wdt-loading-phrase-category" data-category="default">
                            <div class="wdt-loading-phrase">&dollar;1000 for Martin in Lincolnshire</div>
                            <div class="wdt-loading-phrase">&dollar;1000 for George in Bromley</div>
                            <div class="wdt-loading-phrase">&dollar;500 for Anna in Launceston</div>
                            <div class="wdt-loading-phrase">&dollar;100 for Harley in Folkestone</div>
                            <div class="wdt-loading-phrase">&dollar;1000 for Rashid in Manchester</div>
                            <div class="wdt-loading-phrase">&dollar;600 for Elizabeth in Lockerbie</div>
                            <div class="wdt-loading-phrase">&dollar;400 for Jessica in Huddersfield</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Bartosz in Yeovil</div>
                            <div class="wdt-loading-phrase">&dollar;400 for Anthony in London</div>
                            <div class="wdt-loading-phrase">&dollar;250 for Louisa in Croydon</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Anish in Essex</div>
                            <div class="wdt-loading-phrase">&dollar;50 for Neil in York</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Natalie in Lincolnshire</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Hanif in Birmingham</div>
                            <div class="wdt-loading-phrase">&dollar;1500 for Samuel in Harrogate</div>
                            <div class="wdt-loading-phrase">&dollar;400 for Louis in Folkestone</div>
                            <div class="wdt-loading-phrase">&dollar;500 for Stuart in Worthing</div>
                            <div class="wdt-loading-phrase">&dollar;1500 for Mary in Motherwell</div>
                            <div class="wdt-loading-phrase">&dollar;500 for Chanelle in Bradford</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Mark in Guildford</div>
                            <div class="wdt-loading-phrase">&dollar;2000 for Mohammed in Smethwick</div>
                            <div class="wdt-loading-phrase">&dollar;350 for Danielle in Bradford</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Vincent in Southport</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Carly in Manchester</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Judy in Islington</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Jane in Culross</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Glen in Dereham</div>
                            <div class="wdt-loading-phrase">&dollar;200 for Michael in London</div>
                            <div class="wdt-loading-phrase">&dollar;300 for Michael in Stirlingshire</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="" data-locale="en-GB" data-template-id="54ad5defc6454f065c28af8b"
                 data-businessunit-id="4bf27fe900006400050cd2b1" data-style-height="240px" data-style-width="100%"
                 data-theme="light" data-stars="2,3,4,5" data-review-languages="en">
            </div>

            <div class="apply-approved-section-container">
                <png class="top-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,0 100,0 100,100"/>
                </png>
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 mobile-stack apply-approved-section-top">
                            <h2>Apply Now</h2>
                            <p class="lead">How much do you need?</p>
                            <div class="apply-form clearfix">
                                <form action="http://127.0.0.1:8000/apply-uk" method="get">
                                    <div class="apply-input">
                                        <a href="#" class="amount-change amount-minus"><i class="fa fa-minus"></i></a>
                                        <input type="text" name="value" value="$500" class="apply-loan-amount"/>
                                        <a href="#" class="amount-change amount-plus"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-primary-mast btn-apply">Get Your Quote<small>No
                                            obligation, 100% secure.</small></button>
                                </form>
                                <p class="apply-form-link">
                                    <a href="apply-now/route('apply-us'/index.html">Will I be approved?</a>
                                </p>
                                </br>
                            </div>
                        </div>
                        <div class="col-md-6 apply-approved-bottom">
                            <png class="top-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="0,0 100,0 0,100"/>
                            </png>
                            <h3>Will I be Approved?</h3>
                            <p>The online Eligibility Checker is free and takes 60 seconds. Find out if you’ll be
                                approved with no credit footprint.</p>
                            <a href="apply-now/route('apply-us'/index.html" class="button btn btn-white">Check
                                Eligibility</a>
                            <p><small>Powered by Stag Finance Ltd</small></p>
                            <png class="apply-approved-bottom-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="0,100 100,0 100,100"/>
                            </png>
                        </div>
                    </div>
                </div>
                <png class="bottom-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,100 100,0 100,100"/>
                </png>
            </div>
        </div>
        <div class="responsible-lending">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Payday Loans Online</h2>
                        <p class="lead lead-pink">At Loanie <font color="#c92b7f">UK</font>, we dedicate our efforts to
                            providing a transparent and user-friendly service. If you’re suddenly faced with an
                            unexpected bill because of an appliance or boiler breaking down, your car failing, or a
                            family emergency, we can help. </p>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Keeping the process simple</h3>
                                <p>We have tried to keep our website as straightforward as possible and back it up with
                                    a knowledgeable and efficient customer service team. Although the reasons for
                                    applying for a payday loan are wide and varied, they are nearly always
                                    time-sensitive. Direct lenders understand this. They have made the process from
                                    acceptance to receiving your money as streamlined as they can.</p>
                                <h3>Getting your money quickly</h3>
                                <p>A payday loan helps you to deal with something urgent without dipping into money
                                    earmarked for other bills. Applying for a payday loan via Loanie is carried out
                                    online. It’s fast and straightforward, and once accepted many lenders will you’ll
                                    usually have the money transferred to your bank account the same day.</p>
                            </div>
                            <div class="col-md-6">
                                <h3>Loans for Life’s Emergencies</h3>
                                <p>A payday loan or short term loan can be particularly useful when faced with an
                                    unexpected expense that can’t wait.</p>
                                <p>Some people can be put off using payday loans because of the high APR rates quoted.
                                    However, this is because the loans are generally over a short period, providing a
                                    direct lender with a narrow window for interest to be accumulated. Since the FCA
                                    introduced a cap on interest rates and the number of times a loan can be rolled
                                    over, all lenders now adhere to these fair lending rules.</p>
                                <p>If you’re unsure of any aspect of your loan, please read the relevant information in
                                    your agreement, as lenders are required to be transparent about any interest or
                                    charges they are going to apply. Remember, you are under no obligation to accept any
                                    offer that a lender makes to you and you should never pay any fees for a loan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-content faq-section"><h2 class="aligncenter">More questions? We've got you
                covered</h2>
            <div class="row">
                <div class="col col-md-10 col-md-offset-1 page-content clearfix">
                    <div class="questions-section panel-group" id="questions-collapse">
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-1">Will the
                                        payday loan have to be repaid on my next payday?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-1"><p>If you want
                                    to clear your payday loan in full on your next payday, you can. However, the term
                                    for a
                                    payday loan is usually 3-months or more. The term payday loan shows the origins of
                                    this
                                    type of credit, which was when employees would sub money from their wages in
                                    advance.
                                    However, this was often insufficient and left their pay packet too lite the
                                    following
                                    month, so payday loans with slightly longer repayment periods make borrowing a small
                                    amount more manageable for most people.</p>
                                <p>How long you repay the loan over will depend on the repayment period you select when
                                    applying. People usually try to pay the loan as soon as they can, without causing
                                    them more financial difficulty. This means shorter loans are often taken over a
                                    shorter period, while larger loans are more likely to be taken with a longer
                                    repayment period.</p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-2">Can I use
                                        my smartphone to apply for a payday loan?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-2"><p>Smartphones
                                    are one of the largest growing sectors for carrying out many tasks, including
                                    applying
                                    for payday loans online. Over the past decade, they have grown increasingly capable,
                                    secure, and user-friendly. You can complete the Loanie application process on your
                                    smartphone. Our website is even designed to ensure it’s as easy to use on a mobile
                                    device as it is on a tablet or computer.</p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-3">Will a
                                        payday loan cost me a lot more?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-3"><p>All
                                    reputable payday loan lenders are now regulated by the <a
                                        href="https://www.fca.org.uk/"
                                        target="blank"
                                        rel="noopener noreferrer">FCA
                                        ()</a>, which provides rules, regulation, and
                                    guidelines
                                    they must follow to stay compliant. They must be upfront about all interest and
                                    charges
                                    that will be applied to your loan. With an increasing number of customers turning to
                                    this type of borrowing to help with short-term financial difficulty, it’s not
                                    surprising
                                    the FCA felt the need to act. Our lender panel only includes regulated reputable
                                    direct
                                    lenders. </p>
                                <p><b>The APR rates for Payday Loans are high</b>, but this is often a reflection of the
                                    short-term nature of the loan. The FCA regulation also means all payday loan lenders
                                    must include their rates on advertising, which has led to increased competition
                                    between them, which can only be good news for the average borrower. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-4">What
                                        regulation is there for payday loans?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-4"><p>The FCA
                                    () have been responsible for regulating payday loan
                                    lenders
                                    since 2014. Before <b>the FCA started implementing specific guidelines for payday
                                        loans</b>, all <a href="direct-lenders/index.html">direct lenders</a> were
                                    already
                                    required to hold a valid consumer credit licence. The FCA now issue these licences
                                    and
                                    consider irresponsible lending and unethical practices as part of the application
                                    process. </p>
                                <p>This means every lender on our panel has gone through the process of obtaining a
                                    licence. They are also compliant with all FCA regulations and guidelines. They have
                                    shown they offer products that are acceptable in an ethical way by the regulating
                                    authority. You can also view the privacy policy if you want extra peace of mind
                                    about how seriously we take the security of your personal data. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-5">Is there
                                        a best payday lender?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-5"><p>There is no
                                    such thing as the best payday lender, just the one that is best for you at any given
                                    time. In most cases, this will be the payday loan companies that’s offering the best
                                    interest rate and most preferable terms. The terms each payday lender offers, and
                                    their
                                    rates vary quite often. Some run special offers for payday loans or change their
                                    position permanently to remain competitive or attract new business. When you use
                                    Payday
                                    UK, you’ll know you’re being offered the best rate from our industry-leading panel
                                    of
                                    lenders, and that they are all registered and regulated by the FCA (Financial
                                    Conduct
                                    Authority). We’ll always try to match you with the best lender in our panel for your
                                    situation. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-6">Will a
                                        direct lender perform a credit search?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-6"><p>All direct
                                    payday loan lenders are required by the FCA () to perform
                                    a
                                    full credit check before releasing any funds. However, applying with Loanie won’t
                                    affect your credit score, as we only initially perform a soft search, which leaves
                                    no
                                    permanent mark. If you accept a loan offer, they will perform the full search, but
                                    you
                                    will already know you meet their criteria before it’s done. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-7">Will a
                                        payday loan make my bad credit rating worse?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-7"><p>If you
                                    apply for credit and are refused, it can be bad for your credit rating. However, a
                                    payday loan that is paid back according to the agreed terms will only improve your
                                    credit score. Because our application process only uses a soft search, there is no
                                    negative effect on your credit score. If you decide to accept a loan offer, you’ll
                                    already know you meet the lender’s criteria. If you fail to repay the loan according
                                    to
                                    the agreed terms, it can negatively affect your credit rating. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-8">Will my
                                        application for a payday loan be accepted?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-8"><p><b>Payday
                                        loans are designed to provide <a href="small-loans/index.html">small amounts of
                                            money</a> to the maximum number of applicants</b>. They are probably the
                                    type of
                                    credit you’re most likely to be accepted for. We understand that you may have made
                                    mistakes in the past and that certain circumstances can lead to a <a
                                        href="bad-credit-loans/poor-credit/index.html">poor credit rating</a>. Because
                                    we provide access to one of the largest panels of lenders, you have the maximum
                                    chance
                                    of being successful. However, the only way to know for sure that you’re eligible is
                                    to
                                    complete the quick and straightforward application process. </p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-9">Will you
                                        charge me additional fees?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-9"><p>Loanie
                                    do not charge a fee for the use of our services. You should never pay an upfront fee
                                    for
                                    a loan.</p>
                            </div>
                        </div>
                        <div class="question panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"><a data-toggle="collapse"
                                                                                  data-parent="#questions-collapse"
                                                                                  href="#questions-collapse-10">I need a
                                        payday loan quickly, can you help?</a></h3></div>
                            <div class="answer-content panel-collapse collapse" id="questions-collapse-10"><p>Most
                                    people applying for payday loans need <a href="quick-loans/index.html">money
                                        quickly</a>.
                                    This type of loan is designed to act as a short-term solution to unexpected
                                    financial
                                    difficulties, such as an unforeseen repair bill or family emergency. This generally
                                    means the people applying are in a stressful situation and need the money in order
                                    to
                                    resolve their problem. This means <b>direct lenders have designed the process to be
                                        as
                                        quick as possible</b>. This is partly to help the applicants, and partly because
                                    providing faster access to the borrowed money can be enough to win you a new
                                    customer.
                                    We quote a time of 10 minutes* as an average. It’s often quicker than this to get a
                                    payday loan online, but we have no control over your bank’s internal systems, so
                                    quote
                                    this time to be on the safe side. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="loan-guides-section loan-guides-small">
            <div class="more-guides-section">
                <div class="text-center" style="max-width: 500px; margin: 0 auto;">
                    <h2>Our Helpful Guides</h2>
                    <p class="lead lead-pink">These guides will help you manage your money and learn more about the
                        types of loans available.</p>
                </div>
                <div class="loan-guides-section-container">
                    <png class="top-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,0 100,0 0,100"/>
                    </png>
                    <div class="loan-guides-section loan-guides-small">
                        <div class="container">
                            <div class="row row-flex flex-wrap">
                                <a href="direct-lenders/payday-loans-bad-credit/index.html" class="loan-guide-1">
                                    <img width="558" height="280"
                                         src="http://127.0.0.1:8000/wp-content/uploads/calculator-1-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/calculator-1-558x280.jpg"/>

                                    <h3>Bad Credit Payday Loans</h3>
                                </a>
                                <a href="direct-lenders/compare-payday-loans/index.html" class="loan-guide-2">
                                    <img width="558" height="280"

                                         src="http://127.0.0.1:8000/wp-content/uploads/couple-on-laptop-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/couple-on-laptop-558x280.jpg"/>

                                    <h3>Compare Payday Loans</h3>
                                </a>
                                <a href="direct-lenders/#" class="loan-guide-3">
                                    <img width="558" height="280"

                                         src="http://127.0.0.1:8000/wp-content/uploads/6-month-loans-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/6-month-loans-558x280.jpg"/>

                                    <h3>Instant Payday Loans</h3>
                                </a>
                                <a href="direct-lenders/payday-loans-no-credit-check/index.html" class="loan-guide-4">
                                    <img width="558" height="280"
                                         src="http://127.0.0.1:8000/wp-content/uploads/couple-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/couple-558x280.jpg"/>

                                    <h3>No Credit Check Payday Loans</h3>
                                </a>
                                <a href="direct-lenders/student-payday-loans/index.html" class="loan-guide-5">
                                    <img width="558" height="280"

                                         src="http://127.0.0.1:8000/wp-content/uploads/piggybank2-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/piggybank2-558x280.jpg"/>


                                    <h3>Student Payday Loans</h3>
                                </a>
                                <a href="lenders-vs-brokers/index.html" class="loan-guide-6">
                                    <img width="558" height="280"
                                         src="http://127.0.0.1:8000/wp-content/uploads/direct-loan-lenders-558x280.jpg"
                                         alt=""
                                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/direct-loan-lenders-558x280.jpg"/>

                                    <h3>Lenders vs Brokers</h3>
                                </a>
                            </div>
                            <a href="guides/index.html" class="button btn btn-pink">All Guides</a>
                        </div>
                    </div>
                    <png class="bottom-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,100 0,0 100,100"/>
                    </png>
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
                                <form action="http://127.0.0.1:8000/apply-uk" method="get">
                                    <div class="apply-input">
                                        <a href="#" class="amount-change amount-minus"><i class="fa fa-minus"></i></a>
                                        <input type="text" name="value" value="$500" class="apply-loan-amount"/>
                                        <a href="#" class="amount-change amount-plus"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-primary-mast btn-apply">Get Your Quote<small>No
                                            obligation, 100% secure.</small></button>
                                </form>
                                <p class="apply-form-link">
                                    <a href="http://127.0.0.1:8000/route('apply-us'">Will I be approved?</a>
                                </p>
                                </br>

                                <!--<div class="" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="4bf27fe900006400050cd2b1" data-style-height="100%" data-style-width="100%" data-theme="dark" data-font-family="Heebo">-->
                                <!--<a href="https://uk..com/review/www.loanie.net" target="_blank" rel="noopener"></a>-->
                            </div>

                        </div>
                        <div class="apply-form-benefits">
                            <div>
                                <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"
                                alt=""
                                data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-no-credit-check.png"
                                    alt=""/></noscript></span>
                                    Instant quote with a soft credit check and no fees.
                                </p>
                                <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"
                                alt="" data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-time.png"
                                    alt=""/></noscript></span>
                                    Small loans can be sent the same day.
                                </p>
                                <p>
                        <span><img
                                src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"
                                alt=""
                                data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"/><noscript><img
                                    src="http://127.0.0.1:8000/wp-content/uploads/icon-process-applications.png"
                                    alt=""/></noscript></span>

                                    Over 7500 no obligation quotes processed every single day!<sup><font
                                            size="-2">^</font></sup>
                                </p>
                            </div>
                        </div>
                    </div>
                    <png class="footer-form-slope" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,100 100,0 100,100"/>
                    </png>
                </div>
                <div class="col col-md-5 col-md-pull-7 footer-text">
                    <img width="300" height="168"
                         src="data:image/png+xml,%3Cpng%20xmlns=&#039;http://www.w3.org/2000/png&#039;%20width=&#039;300&#039;%20height=&#039;168&#039;%20viewBox=&#039;0%200%20300%20168&#039;%3E%3C/png%3E"
                         class="footer-logo hidden-sm hidden-xs perfmatters-lazy" alt="Loanie logo"
                         data-lazy-srcset="./wp-content/uploads/logo_payday_uk_white.png 300w, http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png 304w"
                         data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                         data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png"
                         data-src="//www.w3.org/2000/png&#039;%20viewBox=&#039;0%200%20300%20168&#039;%3E%3C/png%3E"/>
                    <noscript><img width="300" height="168"
                                   src="data:image/png+xml,%3Cpng%20xmlns='http://www.w3.org/2000/png'%20viewBox='0%200%20300%20168'%3E%3C/png%3E"
                                   class="footer-logo hidden-sm hidden-xs" alt="Loanie logo"
                                   data-lazy-srcset="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png 300w, http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png 304w"
                                   data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                   data-lazy-src="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png"/>
                    </noscript>
                    <noscript><img width="300" height="168"
                                   src="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png"
                                   class="footer-logo hidden-sm hidden-xs" alt="Loanie logo"
                                   srcset="http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_white.png 300w, http://127.0.0.1:8000/wp-content/uploads/logo_payday_uk_trap.png 304w"
                                   sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                    <p>Loanie is a registered trading name of Stag Finance Ltd. Licenced by the Information
                        Commissioners Office, (registration number XXXXXXX). Registered Office: Stag Finance Limited,
                        71-75 Shelton Street, London, United Kingdom, WC2h 9QJ. Stag Finance Ltd is authorised and
                        regulated by the  and is entered on the
                        under reference number: EggFriedRice.</p>
                    <p>Not all borrowers will qualify for a loan, the operator of this website does not engage in any
                        direct consumer lending, we simply introduce you to a FREE loan brokering service operated by
                        Stag Finance Ltd. Loanie does not charge customers a fee for using its services, we may receive
                        a commission from Stag Finance Ltd.</p>
                    <p>Auto Decisioning allows lenders to make a decision on your loan application without the need for
                        human interaction, for more information please contact your lender or see their privacy
                        policy.</p>
                    <p>*Loanie does not perform credit checks. When applying for a loan quote with Stag Finance Ltd,
                        lenders will only perform a soft credit search. If you accept the quote they may perform a hard
                        credit search.</p>
                    <p>^Between 7/11/21 and 15/11/21 Stag Finance Ltd processed an average 7510 customer loan
                        applications per day.</p>
                    <div class="footer-nav">
                        <ul id="menu-copyright-menu" class="menu">
                            <li id="menu-item-3879"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-3879">
                                <a title="Payday Loans" {{route('home-us')}}" aria-current="page">Payday Loans</a></li>
                            <li id="menu-item-73"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a
                                    href="privacy-policy/index.html">Privacy Policy</a></li>
                            <li id="menu-item-74"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a
                                    href="website-terms/index.html">Terms</a></li>
                            <li id="menu-item-3880"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3880"><a
                                    href="acceptable-use-policy/index.html">Acceptable Use</a></li>
                            <li id="menu-item-1083"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1083"><a
                                    href="cookie-policy/index.html">Cookie Policy</a></li>
                            <li id="menu-item-3687"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3687"><a
                                    href="responsible-lending/index.html">Responsible Lending</a></li>
                            <li id="menu-item-3659"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3659"><a
                                    href="complaints-procedure/index.html">Complaints</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-content">
                        <ul>
                            <li><a href="direct-lenders/index.html">Payday Loans Direct Lenders</a></li>
                            <li><a href="bad-credit-loans/index.html">Bad Credit Loans</a></li>
                            <li><a href="small-loans/index.html">Small Loans</a></li>
                            <li><a href="no-guarantor-loans/index.html">Loans Without Guarantor</a></li>
                            <li><a href="direct-lenders/#">Instant Payday Loans</a></li>
                            <li><a href="quick-loans/index.html">Quick Loans</a></li>
                            <li><a href="short-term-loans/index.html">Short Term Loans</a></li>
                            <li><a href="short-term-loans/bad-credit/index.html">Bad Credit Short Term Loans</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
</footer>
</div>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-includes/js/underscore.min0028.js?ver=1.13.1' id='underscore-js' defer></script>
<script type="0cddec843b59dfef66e72795-text/javascript" id='bulletinwp-frontend-scripts-js-extra'>

</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-content/plugins/bulletinwp-pro/frontend/build/pro5589.js?ver=3.4.1' id='bulletinwp-frontend-scripts-js'
        defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-content/themes/greaterthings/js/libs7404.js?ver=5.9.3' id='libs-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-content/themes/greaterthings/js/custom7404.js?ver=5.9.3' id='custom-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-content/themes/greaterthings/js/form7404.js?ver=5.9.3' id='form-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'
        src='wp-content/themes/greaterthings/js/form-v27404.js?ver=5.9.3' id='form-v2-js' defer></script>
<script type="0cddec843b59dfef66e72795-text/javascript"
        src='wp-content/plugins/perfmatters/js/lazyload.min3109.js?ver=1.9.1' id='perfmatters-lazy-load-js-js'
        defer></script>
<script type="0cddec843b59dfef66e72795-text/javascript">window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)

</script>
<script data-no-minify="1" async src="wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"
        type="0cddec843b59dfef66e72795-text/javascript"></script>
<script type="0cddec843b59dfef66e72795-text/javascript">
    document.addEventListener("DOMContentLoaded",function(){var lazyLoadInstance=new LazyLoad({elements_selector:"img[data-src],.perfmatters-lazy,.perfmatters-lazy-css-bg",thresholds:"0px 0px",callback_loaded:function(element){if(element.tagName==="IFRAME"){if(element.classList.contains("loaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}});var target=document.querySelector("body");var observer=new MutationObserver(function(mutations){lazyLoadInstance.update()});var config={childList:!0,subtree:!0};observer.observe(target,config);});

</script>
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
<script type="0cddec843b59dfef66e72795-text/javascript">
    "use strict";function wprRemoveCPCSS(){var preload_stylesheets=document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');if(preload_stylesheets&&0<preload_stylesheets.length)for(var stylesheet_index=0;stylesheet_index<preload_stylesheets.length;stylesheet_index++){var media=preload_stylesheets[stylesheet_index].getAttribute("media")||"all";if(window.matchMedia(media).matches)return void setTimeout(wprRemoveCPCSS,200)}var elem=document.getElementById("rocket-critical-css");elem&&"remove"in elem&&elem.remove()}window.addEventListener?window.addEventListener("load",wprRemoveCPCSS):window.attachEvent&&window.attachEvent("onload",wprRemoveCPCSS);

</script>
<noscript>
    <link rel='stylesheet' id='wp-block-library-css'
          href='wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' type='text/css' media='all'/>
    <link data-minify="1" rel='stylesheet' id='bulletinwp-frontend-styles-css'
          href='wp-content/cache/min/1/wp-content/plugins/bulletinwp-pro/frontend/build/proca17.css?ver=1655110719'
          type='text/css' media='all'/>
    <link data-minify="1" rel='stylesheet' id='libs-css'
          href='wp-content/cache/min/1/wp-content/themes/greaterthings/css/libsca17.css?ver=1655110719' type='text/css'
          media='all'/>
    <link data-minify="1" rel='stylesheet' id='style-css'
          href='wp-content/cache/min/1/wp-content/themes/greaterthings/styleca17.css?ver=1655110719' type='text/css'
          media='all'/>
</noscript>
<script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="" defer=""></script>
{{--<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"--}}
{{--        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="--}}
{{--        data-cf-beacon='{"rayId":"","token":"","version":"2022.6.0","si":100}'--}}
{{--        crossorigin="anonymous"></script>--}}
</body>

</html>
