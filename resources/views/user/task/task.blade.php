
<html style="font-size: 50px;">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }

        .vjs-fluid {
            padding-top: 56.25%
        }

    </style>
    <style class="vjs-styles-dimensions">
        .vjs_video_1303-dimensions {
            width: 1366px;
            height: 519px;
        }

        .vjs_video_1303-dimensions.vjs-fluid {
            padding-top: 177.77777777777777%;
        }

    </style>
    <meta charset="utf-8">
    <!--    <link rel="icon" href="/logo.ico" />-->
    <title>Member Center</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!--  <meta name="theme-color" content="#fff" />-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="google" content="notranslate">
    <meta name="google" value="notranslate">
    <meta name="viewport"
        content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no,viewport-fit=cover">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex">
    <meta name="google-site-verification" content="x8_reKU6_3PaglKaT38m0O1-s5dy888cStewhS7kQak">
    <style>
        .page-enter-active,
        .page-leave-active {

            transition: opacity 0.5s ease-in-out;
        }

        .page-enter,
        .page-leave-to {
            opacity: 0;
        }

        #startLogo {
            width: 100%;
            min-width: 7.5rem;
            height: 100vh;
            max-width: 8.5rem;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000000;
            background: rgba(6, 132, 117, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        #startLogo img {
            width: 50%;
        }

    </style>
    <script>
        window.addEventListener('error', function (event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function () {
            document.addEventListener('touchstart', function (event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                'touchend',
                function (event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener('gesturestart', function (event) {
                event.preventDefault();
            });
        };

    </script>
    <!-- <script
  src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"
  type="text/javascript"
></script> -->

    <script>
        if ('standalone' in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                'click',
                function (event) {
                    noddy = event.target;
                    while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') {
                        noddy = noddy.parentNode;
                    }
                    if (
                        'href' in noddy &&
                        noddy.href.indexOf('http') !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }

    </script>
    
    <style type="text/css">
        @keyframes loading-animation-15b106f9 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .page-loading-con[data-v-15b106f9] {
            padding: 0.5rem 0.7rem;
            z-index: 999;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 0.12rem;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.32rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .page-loading-con .page-loading[data-v-15b106f9] {
            width: 3em;
            height: 3em;
            display: inline-block;
            padding: 0;
            border-radius: 100%;
            border: 0.25em solid #00fc83;
            border-right-color: rgba(0, 252, 131, 0.1);
            border-bottom-color: rgba(0, 252, 131, 0.1);
            animation: loading-animation-15b106f9 1s ease-in-out infinite;
        }

        .page-loading-con p[data-v-15b106f9] {
            margin-top: 1.5em;
            white-space: nowrap;
            font-size: 0.7em;
            line-height: 0.7em;
            color: #00fc83;
        }

        .overlay[data-v-15b106f9] {
            z-index: 999;
        }

        .van-field__word-num[data-v-15b106f9] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-15b106f9]:active,
        .van-action-sheet__cancel[data-v-15b106f9]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-15b106f9] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-15b106f9] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .page-enter-active[data-v-b65f27fe],
        .page-leave-active[data-v-b65f27fe] {
            transition: opacity 0.5s ease-in-out;
        }

        .page-enter[data-v-b65f27fe],
        .page-leave-to[data-v-b65f27fe] {
            opacity: 0;
        }

        .start-page[data-v-b65f27fe] {
            width: 100%;
            height: 100vh;
            max-width: 8.5rem;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000000;
            background: #020503;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .start-page img[data-v-b65f27fe] {
            width: 3.2rem;
            height: auto;
        }

        .van-field__word-num[data-v-b65f27fe] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-b65f27fe]:active,
        .van-action-sheet__cancel[data-v-b65f27fe]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-b65f27fe] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-b65f27fe] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .videoList .van-rate__icon {
            font-size: 0.24rem;
        }

        .page-enter-active,
        .page-leave-active {
            transition: opacity 0.5s ease-in-out;
        }

        .page-enter,
        .page-leave-to {
            opacity: 0;
        }

        #app {
            padding-top: constant(safe-area-inset-top);
            padding-top: env(safe-area-inset-top);
            max-height: 100vh;
            background: #020202;
            position: relative;
            word-wrap: break-word;
            word-break: normal;
            width: 100%;
            min-height: 100vh;
            max-width: 8.5rem;
            margin: 0 auto;
            background-size: 100% 100%;
            overflow: hidden;
        }

        #app .Top {
            position: fixed;
            right: 0.2rem;
            bottom: 1.54rem;
        }

        #app .Top img {
            height: 0.48rem;
            width: 0.48rem;
        }

        #app .foot_h {
            height: 1.38rem;
        }

        #app .van-empty__image {
            height: auto;
        }

        #app .empty {
            text-align: center;
            padding: 1rem 0;
        }

        #app .empty img {
            height: 2rem;
            width: auto !important;
            max-width: 100%;
        }

        #app .empty p {
            display: block;
            color: #999;
            margin-top: 0.4rem;
        }

        .itemBox {
            border-radius: 0.16rem;
            box-shadow: 0 0.1rem 0.2rem 0 rgba(0, 0, 0, 0.06);
            margin-bottom: 0.24rem;
        }

        .pop_type .name {
            font-size: 0.32rem;
            text-align: center;
            color: #222222;
            line-height: 0.44rem;
            padding: 0.28rem 0;
        }

        .pop_type .scroll {
            max-height: 5rem;
            overflow: scroll;
        }

        .pop_type .esc {
            border-top: 0.1rem solid #f2f2f2;
            padding: 0.32rem 0;
            font-size: 0.32rem;
            font-weight: 500;
            color: #3e9aff;
            text-align: center;
        }

        .password_pop .van-number-keyboard {
            position: relative;
        }

        .password_pop .van-password-input__security li {
            width: 0.96rem;
            height: 0.96rem;
            background: #15181f;
            border-radius: 0.16rem;
            color: #fff;
        }

        .password_pop .van-password-input__security li i {
            background-color: #fff;
        }

        .password_pop .van-password-input {
            margin: 0;
        }

        .password_pop .van-password-input__cursor {
            background: #00fc83;
        }

        .password_pop .van-password-input__item--focus {
            border: 0.02rem solid #00fc83;
        }

        .password_pop .van-number-keyboard {
            background: none;
        }

        .password_pop .van-number-keyboard .van-key {
            width: 2.3rem;
            height: 0.96rem;
            background: #15181f;
            border-radius: 0.08rem;
        }

        .password_pop .pass {
            background: #0d0f13;
            border-radius: 0.2rem;
            padding: 0.4rem 0.36rem;
            color: #fff;
        }

        .password_pop .pass button {
            width: 100%;
            border: 0;
            height: 0.94rem;
            border-radius: 0.2rem;
            color: #020202;
            background: #00fc83;
        }

        .password_pop .pass .box {
            padding: 0.3rem 0;
        }

        .password_pop .pass .box .abs {
            width: 100%;
            height: 0.9rem;
            opacity: 0;
            z-index: 2;
        }

        .password_pop .jianpan {
            background: #07080a;
            color: #fff;
        }

        .password_pop .jianpan p {
            line-height: 0.76rem;
            text-align: center;
        }

        .password_pop .title {
            font-size: 0.3rem;
            font-weight: 500;
            line-height: 0.42rem;
        }

        .password_pop .title .abs {
            right: 0;
            top: 0;
        }

        .password_pop .title .abs i {
            font-size: 0.3rem;
        }

        .van-picker__mask {
            background-image: linear-gradient(180deg, rgba(13, 15, 19, 0.9), rgba(13, 15, 19, 0.4)), linear-gradient(0deg, rgba(13, 15, 19, 0.9), rgba(13, 15, 19, 0.4)) !important;
        }

        :root {
            --color: #ffffff;
            --color1: #00fc83;
            --color2: #8f9aae;
            --border-bottom: 0.02rem solid #47464a;
            --border: 0.02rem solid #5952f5;
            --backgroundLinear: linear-gradient(113.99deg, #114fee 6.12%, #b654fd 83.22%);
            --backgroundLinear1: linear-gradient(135.74deg, rgba(17, 79, 238, 0.2) 10.07%, rgba(182, 84, 253, 0.2) 99.84%);
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        /**
* Entry of basic styles
*/
        html {
            -webkit-tap-highlight-color: transparent;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Helvetica Neue', Helvetica, Segoe UI, Arial, Roboto, 'PingFang SC', 'miui', 'Hiragino Sans GB', 'Microsoft Yahei', sans-serif;
        }

        a {
            text-decoration: none;
        }

        input,
        button,
        textarea {
            color: inherit;
            font: inherit;
        }

        a:focus,
        input:focus,
        button:focus,
        textarea:focus,
        [class*='van-']:focus {
            outline: none;
        }

        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .van-ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .van-multi-ellipsis--l2 {
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            /* autoprefixer: ignore next */
            -webkit-box-orient: vertical;
        }

        .van-multi-ellipsis--l3 {
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            /* autoprefixer: ignore next */
            -webkit-box-orient: vertical;
        }

        .van-clearfix::after {
            display: table;
            clear: both;
            content: '';
        }

        [class*='van-hairline']::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            border: 0 solid #4C5361;
            transform: scale(0.5);
        }

        .van-hairline,
        .van-hairline--top,
        .van-hairline--left,
        .van-hairline--right,
        .van-hairline--bottom,
        .van-hairline--surround,
        .van-hairline--top-bottom {
            position: relative;
        }

        .van-hairline--top::after {
            border-top-width: 0.02rem;
        }

        .van-hairline--left::after {
            border-left-width: 0.02rem;
        }

        .van-hairline--right::after {
            border-right-width: 0.02rem;
        }

        .van-hairline--bottom::after {
            border-bottom-width: 0.02rem;
        }

        .van-hairline--top-bottom::after,
        .van-hairline-unset--top-bottom::after {
            border-width: 0.02rem 0;
        }

        .van-hairline--surround::after {
            border-width: 0.02rem;
        }

        <blade keyframes|%20van-slide-up-enter%20%7B%0D>from {
            transform: translate3d(0, 100%, 0);
        }
        }

        <blade keyframes|%20van-slide-up-leave%20%7B%0D>to {
            transform: translate3d(0, 100%, 0);
        }
        }

        <blade keyframes|%20van-slide-down-enter%20%7B%0D>from {
            transform: translate3d(0, -100%, 0);
        }
        }

        <blade keyframes|%20van-slide-down-leave%20%7B%0D>to {
            transform: translate3d(0, -100%, 0);
        }
        }

        <blade keyframes|%20van-slide-left-enter%20%7B%0D>from {
            transform: translate3d(-100%, 0, 0);
        }
        }

        <blade keyframes|%20van-slide-left-leave%20%7B%0D>to {
            transform: translate3d(-100%, 0, 0);
        }
        }

        <blade keyframes|%20van-slide-right-enter%20%7B%0D>from {
            transform: translate3d(100%, 0, 0);
        }
        }

        <blade keyframes|%20van-slide-right-leave%20%7B%0D>to {
            transform: translate3d(100%, 0, 0);
        }
        }

        <blade keyframes|%20van-fade-in%20%7B%0D>from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
        }

        <blade keyframes|%20van-fade-out%20%7B%0D>from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
        }

        <blade keyframes|%20van-rotate%20%7B%0D>from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
        }

        .van-fade-enter-active {
            animation: 0.3s van-fade-in both ease-out;
        }

        .van-fade-leave-active {
            animation: 0.3s van-fade-out both ease-in;
        }

        .van-slide-up-enter-active {
            animation: van-slide-up-enter 0.3s both ease-out;
        }

        .van-slide-up-leave-active {
            animation: van-slide-up-leave 0.3s both ease-in;
        }

        .van-slide-down-enter-active {
            animation: van-slide-down-enter 0.3s both ease-out;
        }

        .van-slide-down-leave-active {
            animation: van-slide-down-leave 0.3s both ease-in;
        }

        .van-slide-left-enter-active {
            animation: van-slide-left-enter 0.3s both ease-out;
        }

        .van-slide-left-leave-active {
            animation: van-slide-left-leave 0.3s both ease-in;
        }

        .van-slide-right-enter-active {
            animation: van-slide-right-enter 0.3s both ease-out;
        }

        .van-slide-right-leave-active {
            animation: van-slide-right-leave 0.3s both ease-in;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background-color: transparent;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-info {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            min-width: 0.32rem;
            padding: 0 0.06rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.24rem;
            font-family: -apple-system-font, Helvetica Neue, Arial, sans-serif;
            line-height: 1.2;
            text-align: center;
            background-color: #ee0a24;
            border: 0.02rem solid #fff;
            border-radius: 0.32rem;
            transform: translate(50%, -50%);
            transform-origin: 100%;
        }

        .van-info--dot {
            width: 0.16rem;
            min-width: 0;
            height: 0.16rem;
            background-color: #ee0a24;
            border-radius: 100%;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-icon {
            position: relative;
            display: inline-block;
            font: normal normal normal 0.28rem/1 'vant-icon';
            font: normal normal normal 0.28rem/1 var(--van-icon-font-family, 'vant-icon');
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
        }

        .van-icon:before {
            display: inline-block;
        }

        .van-icon-contact:before {
            content: '\e753';
        }

        .van-icon-notes:before {
            content: '\e63c';
        }

        .van-icon-records:before {
            content: '\e63d';
        }

        .van-icon-cash-back-record:before {
            content: '\e63e';
        }

        .van-icon-newspaper:before {
            content: '\e63f';
        }

        .van-icon-discount:before {
            content: '\e640';
        }

        .van-icon-completed:before {
            content: '\e641';
        }

        .van-icon-user:before {
            content: '\e642';
        }

        .van-icon-description:before {
            content: '\e643';
        }

        .van-icon-list-switch:before {
            content: '\e6ad';
        }

        .van-icon-list-switching:before {
            content: '\e65a';
        }

        .van-icon-link-o:before {
            content: '\e751';
        }

        .van-icon-miniprogram-o:before {
            content: '\e752';
        }

        .van-icon-qq:before {
            content: '\e74e';
        }

        .van-icon-wechat-moments:before {
            content: '\e74f';
        }

        .van-icon-weibo:before {
            content: '\e750';
        }

        .van-icon-cash-o:before {
            content: '\e74d';
        }

        .van-icon-guide-o:before {
            content: '\e74c';
        }

        .van-icon-invitation:before {
            content: '\e6d6';
        }

        .van-icon-shield-o:before {
            content: '\e74b';
        }

        .van-icon-exchange:before {
            content: '\e6af';
        }

        .van-icon-eye:before {
            content: '\e6b0';
        }

        .van-icon-enlarge:before {
            content: '\e6b1';
        }

        .van-icon-expand-o:before {
            content: '\e6b2';
        }

        .van-icon-eye-o:before {
            content: '\e6b3';
        }

        .van-icon-expand:before {
            content: '\e6b4';
        }

        .van-icon-filter-o:before {
            content: '\e6b5';
        }

        .van-icon-fire:before {
            content: '\e6b6';
        }

        .van-icon-fail:before {
            content: '\e6b7';
        }

        .van-icon-failure:before {
            content: '\e6b8';
        }

        .van-icon-fire-o:before {
            content: '\e6b9';
        }

        .van-icon-flag-o:before {
            content: '\e6ba';
        }

        .van-icon-font:before {
            content: '\e6bb';
        }

        .van-icon-font-o:before {
            content: '\e6bc';
        }

        .van-icon-gem-o:before {
            content: '\e6bd';
        }

        .van-icon-flower-o:before {
            content: '\e6be';
        }

        .van-icon-gem:before {
            content: '\e6bf';
        }

        .van-icon-gift-card:before {
            content: '\e6c0';
        }

        .van-icon-friends:before {
            content: '\e6c1';
        }

        .van-icon-friends-o:before {
            content: '\e6c2';
        }

        .van-icon-gold-coin:before {
            content: '\e6c3';
        }

        .van-icon-gold-coin-o:before {
            content: '\e6c4';
        }

        .van-icon-good-job-o:before {
            content: '\e6c5';
        }

        .van-icon-gift:before {
            content: '\e6c6';
        }

        .van-icon-gift-o:before {
            content: '\e6c7';
        }

        .van-icon-gift-card-o:before {
            content: '\e6c8';
        }

        .van-icon-good-job:before {
            content: '\e6c9';
        }

        .van-icon-home-o:before {
            content: '\e6ca';
        }

        .van-icon-goods-collect:before {
            content: '\e6cb';
        }

        .van-icon-graphic:before {
            content: '\e6cc';
        }

        .van-icon-goods-collect-o:before {
            content: '\e6cd';
        }

        .van-icon-hot-o:before {
            content: '\e6ce';
        }

        .van-icon-info:before {
            content: '\e6cf';
        }

        .van-icon-hotel-o:before {
            content: '\e6d0';
        }

        .van-icon-info-o:before {
            content: '\e6d1';
        }

        .van-icon-hot-sale-o:before {
            content: '\e6d2';
        }

        .van-icon-hot:before {
            content: '\e6d3';
        }

        .van-icon-like:before {
            content: '\e6d4';
        }

        .van-icon-idcard:before {
            content: '\e6d5';
        }

        .van-icon-like-o:before {
            content: '\e6d7';
        }

        .van-icon-hot-sale:before {
            content: '\e6d8';
        }

        .van-icon-location-o:before {
            content: '\e6d9';
        }

        .van-icon-location:before {
            content: '\e6da';
        }

        .van-icon-label:before {
            content: '\e6db';
        }

        .van-icon-lock:before {
            content: '\e6dc';
        }

        .van-icon-label-o:before {
            content: '\e6dd';
        }

        .van-icon-map-marked:before {
            content: '\e6de';
        }

        .van-icon-logistics:before {
            content: '\e6df';
        }

        .van-icon-manager:before {
            content: '\e6e0';
        }

        .van-icon-more:before {
            content: '\e6e1';
        }

        .van-icon-live:before {
            content: '\e6e2';
        }

        .van-icon-manager-o:before {
            content: '\e6e3';
        }

        .van-icon-medal:before {
            content: '\e6e4';
        }

        .van-icon-more-o:before {
            content: '\e6e5';
        }

        .van-icon-music-o:before {
            content: '\e6e6';
        }

        .van-icon-music:before {
            content: '\e6e7';
        }

        .van-icon-new-arrival-o:before {
            content: '\e6e8';
        }

        .van-icon-medal-o:before {
            content: '\e6e9';
        }

        .van-icon-new-o:before {
            content: '\e6ea';
        }

        .van-icon-free-postage:before {
            content: '\e6eb';
        }

        .van-icon-newspaper-o:before {
            content: '\e6ec';
        }

        .van-icon-new-arrival:before {
            content: '\e6ed';
        }

        .van-icon-minus:before {
            content: '\e6ee';
        }

        .van-icon-orders-o:before {
            content: '\e6ef';
        }

        .van-icon-new:before {
            content: '\e6f0';
        }

        .van-icon-paid:before {
            content: '\e6f1';
        }

        .van-icon-notes-o:before {
            content: '\e6f2';
        }

        .van-icon-other-pay:before {
            content: '\e6f3';
        }

        .van-icon-pause-circle:before {
            content: '\e6f4';
        }

        .van-icon-pause:before {
            content: '\e6f5';
        }

        .van-icon-pause-circle-o:before {
            content: '\e6f6';
        }

        .van-icon-peer-pay:before {
            content: '\e6f7';
        }

        .van-icon-pending-payment:before {
            content: '\e6f8';
        }

        .van-icon-passed:before {
            content: '\e6f9';
        }

        .van-icon-plus:before {
            content: '\e6fa';
        }

        .van-icon-phone-circle-o:before {
            content: '\e6fb';
        }

        .van-icon-phone-o:before {
            content: '\e6fc';
        }

        .van-icon-printer:before {
            content: '\e6fd';
        }

        .van-icon-photo-fail:before {
            content: '\e6fe';
        }

        .van-icon-phone:before {
            content: '\e6ff';
        }

        .van-icon-photo-o:before {
            content: '\e700';
        }

        .van-icon-play-circle:before {
            content: '\e701';
        }

        .van-icon-play:before {
            content: '\e702';
        }

        .van-icon-phone-circle:before {
            content: '\e703';
        }

        .van-icon-point-gift-o:before {
            content: '\e704';
        }

        .van-icon-point-gift:before {
            content: '\e705';
        }

        .van-icon-play-circle-o:before {
            content: '\e706';
        }

        .van-icon-shrink:before {
            content: '\e707';
        }

        .van-icon-photo:before {
            content: '\e708';
        }

        .van-icon-qr:before {
            content: '\e709';
        }

        .van-icon-qr-invalid:before {
            content: '\e70a';
        }

        .van-icon-question-o:before {
            content: '\e70b';
        }

        .van-icon-revoke:before {
            content: '\e70c';
        }

        .van-icon-replay:before {
            content: '\e70d';
        }

        .van-icon-service:before {
            content: '\e70e';
        }

        .van-icon-question:before {
            content: '\e70f';
        }

        .van-icon-search:before {
            content: '\e710';
        }

        .van-icon-refund-o:before {
            content: '\e711';
        }

        .van-icon-service-o:before {
            content: '\e712';
        }

        .van-icon-scan:before {
            content: '\e713';
        }

        .van-icon-share:before {
            content: '\e714';
        }

        .van-icon-send-gift-o:before {
            content: '\e715';
        }

        .van-icon-share-o:before {
            content: '\e716';
        }

        .van-icon-setting:before {
            content: '\e717';
        }

        .van-icon-points:before {
            content: '\e718';
        }

        .van-icon-photograph:before {
            content: '\e719';
        }

        .van-icon-shop:before {
            content: '\e71a';
        }

        .van-icon-shop-o:before {
            content: '\e71b';
        }

        .van-icon-shop-collect-o:before {
            content: '\e71c';
        }

        .van-icon-shop-collect:before {
            content: '\e71d';
        }

        .van-icon-smile:before {
            content: '\e71e';
        }

        .van-icon-shopping-cart-o:before {
            content: '\e71f';
        }

        .van-icon-sign:before {
            content: '\e720';
        }

        .van-icon-sort:before {
            content: '\e721';
        }

        .van-icon-star-o:before {
            content: '\e722';
        }

        .van-icon-smile-comment-o:before {
            content: '\e723';
        }

        .van-icon-stop:before {
            content: '\e724';
        }

        .van-icon-stop-circle-o:before {
            content: '\e725';
        }

        .van-icon-smile-o:before {
            content: '\e726';
        }

        .van-icon-star:before {
            content: '\e727';
        }

        .van-icon-success:before {
            content: '\e728';
        }

        .van-icon-stop-circle:before {
            content: '\e729';
        }

        .van-icon-records-o:before {
            content: '\e72a';
        }

        .van-icon-shopping-cart:before {
            content: '\e72b';
        }

        .van-icon-tosend:before {
            content: '\e72c';
        }

        .van-icon-todo-list:before {
            content: '\e72d';
        }

        .van-icon-thumb-circle-o:before {
            content: '\e72e';
        }

        .van-icon-thumb-circle:before {
            content: '\e72f';
        }

        .van-icon-umbrella-circle:before {
            content: '\e730';
        }

        .van-icon-underway:before {
            content: '\e731';
        }

        .van-icon-upgrade:before {
            content: '\e732';
        }

        .van-icon-todo-list-o:before {
            content: '\e733';
        }

        .van-icon-tv-o:before {
            content: '\e734';
        }

        .van-icon-underway-o:before {
            content: '\e735';
        }

        .van-icon-user-o:before {
            content: '\e736';
        }

        .van-icon-vip-card-o:before {
            content: '\e737';
        }

        .van-icon-vip-card:before {
            content: '\e738';
        }

        .van-icon-send-gift:before {
            content: '\e739';
        }

        .van-icon-wap-home:before {
            content: '\e73a';
        }

        .van-icon-wap-nav:before {
            content: '\e73b';
        }

        .van-icon-volume-o:before {
            content: '\e73c';
        }

        .van-icon-video:before {
            content: '\e73d';
        }

        .van-icon-wap-home-o:before {
            content: '\e73e';
        }

        .van-icon-volume:before {
            content: '\e73f';
        }

        .van-icon-warning:before {
            content: '\e740';
        }

        .van-icon-weapp-nav:before {
            content: '\e741';
        }

        .van-icon-wechat-pay:before {
            content: '\e742';
        }

        .van-icon-warning-o:before {
            content: '\e743';
        }

        .van-icon-wechat:before {
            content: '\e744';
        }

        .van-icon-setting-o:before {
            content: '\e745';
        }

        .van-icon-youzan-shield:before {
            content: '\e746';
        }

        .van-icon-warn-o:before {
            content: '\e747';
        }

        .van-icon-smile-comment:before {
            content: '\e748';
        }

        .van-icon-user-circle-o:before {
            content: '\e749';
        }

        .van-icon-video-o:before {
            content: '\e74a';
        }

        .van-icon-add-square:before {
            content: '\e65c';
        }

        .van-icon-add:before {
            content: '\e65d';
        }

        .van-icon-arrow-down:before {
            content: '\e65e';
        }

        .van-icon-arrow-up:before {
            content: '\e65f';
        }

        .van-icon-arrow:before {
            content: '\e660';
        }

        .van-icon-after-sale:before {
            content: '\e661';
        }

        .van-icon-add-o:before {
            content: '\e662';
        }

        .van-icon-alipay:before {
            content: '\e663';
        }

        .van-icon-ascending:before {
            content: '\e664';
        }

        .van-icon-apps-o:before {
            content: '\e665';
        }

        .van-icon-aim:before {
            content: '\e666';
        }

        .van-icon-award:before {
            content: '\e667';
        }

        .van-icon-arrow-left:before {
            content: '\e668';
        }

        .van-icon-award-o:before {
            content: '\e669';
        }

        .van-icon-audio:before {
            content: '\e66a';
        }

        .van-icon-bag-o:before {
            content: '\e66b';
        }

        .van-icon-balance-list:before {
            content: '\e66c';
        }

        .van-icon-back-top:before {
            content: '\e66d';
        }

        .van-icon-bag:before {
            content: '\e66e';
        }

        .van-icon-balance-pay:before {
            content: '\e66f';
        }

        .van-icon-balance-o:before {
            content: '\e670';
        }

        .van-icon-bar-chart-o:before {
            content: '\e671';
        }

        .van-icon-bars:before {
            content: '\e672';
        }

        .van-icon-balance-list-o:before {
            content: '\e673';
        }

        .van-icon-birthday-cake-o:before {
            content: '\e674';
        }

        .van-icon-bookmark:before {
            content: '\e675';
        }

        .van-icon-bill:before {
            content: '\e676';
        }

        .van-icon-bell:before {
            content: '\e677';
        }

        .van-icon-browsing-history-o:before {
            content: '\e678';
        }

        .van-icon-browsing-history:before {
            content: '\e679';
        }

        .van-icon-bookmark-o:before {
            content: '\e67a';
        }

        .van-icon-bulb-o:before {
            content: '\e67b';
        }

        .van-icon-bullhorn-o:before {
            content: '\e67c';
        }

        .van-icon-bill-o:before {
            content: '\e67d';
        }

        .van-icon-calendar-o:before {
            content: '\e67e';
        }

        .van-icon-brush-o:before {
            content: '\e67f';
        }

        .van-icon-card:before {
            content: '\e680';
        }

        .van-icon-cart-o:before {
            content: '\e681';
        }

        .van-icon-cart-circle:before {
            content: '\e682';
        }

        .van-icon-cart-circle-o:before {
            content: '\e683';
        }

        .van-icon-cart:before {
            content: '\e684';
        }

        .van-icon-cash-on-deliver:before {
            content: '\e685';
        }

        .van-icon-cash-back-record-o:before {
            content: '\e686';
        }

        .van-icon-cashier-o:before {
            content: '\e687';
        }

        .van-icon-chart-trending-o:before {
            content: '\e688';
        }

        .van-icon-certificate:before {
            content: '\e689';
        }

        .van-icon-chat:before {
            content: '\e68a';
        }

        .van-icon-clear:before {
            content: '\e68b';
        }

        .van-icon-chat-o:before {
            content: '\e68c';
        }

        .van-icon-checked:before {
            content: '\e68d';
        }

        .van-icon-clock:before {
            content: '\e68e';
        }

        .van-icon-clock-o:before {
            content: '\e68f';
        }

        .van-icon-close:before {
            content: '\e690';
        }

        .van-icon-closed-eye:before {
            content: '\e691';
        }

        .van-icon-circle:before {
            content: '\e692';
        }

        .van-icon-cluster-o:before {
            content: '\e693';
        }

        .van-icon-column:before {
            content: '\e694';
        }

        .van-icon-comment-circle-o:before {
            content: '\e695';
        }

        .van-icon-cluster:before {
            content: '\e696';
        }

        .van-icon-comment:before {
            content: '\e697';
        }

        .van-icon-comment-o:before {
            content: '\e698';
        }

        .van-icon-comment-circle:before {
            content: '\e699';
        }

        .van-icon-completed-o:before {
            content: '\e69a';
        }

        .van-icon-credit-pay:before {
            content: '\e69b';
        }

        .van-icon-coupon:before {
            content: '\e69c';
        }

        .van-icon-debit-pay:before {
            content: '\e69d';
        }

        .van-icon-coupon-o:before {
            content: '\e69e';
        }

        .van-icon-contact-o:before {
            content: '\e69f';
        }

        .van-icon-descending:before {
            content: '\e6a0';
        }

        .van-icon-desktop-o:before {
            content: '\e6a1';
        }

        .van-icon-diamond-o:before {
            content: '\e6a2';
        }

        .van-icon-description-o:before {
            content: '\e6a3';
        }

        .van-icon-delete:before {
            content: '\e6a4';
        }

        .van-icon-diamond:before {
            content: '\e6a5';
        }

        .van-icon-delete-o:before {
            content: '\e6a6';
        }

        .van-icon-cross:before {
            content: '\e6a7';
        }

        .van-icon-edit:before {
            content: '\e6a8';
        }

        .van-icon-ellipsis:before {
            content: '\e6a9';
        }

        .van-icon-down:before {
            content: '\e6aa';
        }

        .van-icon-discount-o:before {
            content: '\e6ab';
        }

        .van-icon-ecard-pay:before {
            content: '\e6ac';
        }

        .van-icon-envelop-o:before {
            content: '\e6ae';
        }

        <blade font|-face%20%7B%0D>font-weight: normal;
        font-family: 'vant-icon';
        font-style: normal;
        font-display: auto;
        src: url('data:font/woff2;charset=utf-8;base64,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') format('woff2'),
        url('//at.alicdn.com/t/c/font_2553510_kfwma2yq1rs.woff?t=1694918397022') format('woff');
        }

        .van-icon__image {
            display: block;
            width: 1em;
            height: 1em;
            object-fit: contain;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-overflow-hidden {
            overflow: hidden !important;
        }

        .van-popup {
            position: fixed;
            max-height: 100%;
            overflow-y: auto;
            background-color: #0d0f13;
            transition: transform 0.3s;
            -webkit-overflow-scrolling: touch;
        }

        .van-popup--center {
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
        }

        .van-popup--center.van-popup--round {
            border-radius: 0.32rem;
        }

        .van-popup--top {
            top: 0;
            left: 0;
            width: 100%;
        }

        .van-popup--top.van-popup--round {
            border-radius: 0 0 0.32rem 0.32rem;
        }

        .van-popup--right {
            top: 50%;
            right: 0;
            transform: translate3d(0, -50%, 0);
        }

        .van-popup--right.van-popup--round {
            border-radius: 0.32rem 0 0 0.32rem;
        }

        .van-popup--bottom {
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .van-popup--bottom.van-popup--round {
            border-radius: 0.32rem 0.32rem 0 0;
        }

        .van-popup--left {
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 0);
        }

        .van-popup--left.van-popup--round {
            border-radius: 0 0.32rem 0.32rem 0;
        }

        .van-popup--safe-area-inset-bottom {
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
        }

        .van-popup-slide-top-enter-active,
        .van-popup-slide-left-enter-active,
        .van-popup-slide-right-enter-active,
        .van-popup-slide-bottom-enter-active {
            transition-timing-function: ease-out;
        }

        .van-popup-slide-top-leave-active,
        .van-popup-slide-left-leave-active,
        .van-popup-slide-right-leave-active,
        .van-popup-slide-bottom-leave-active {
            transition-timing-function: ease-in;
        }

        .van-popup-slide-top-enter,
        .van-popup-slide-top-leave-active {
            transform: translate3d(0, -100%, 0);
        }

        .van-popup-slide-right-enter,
        .van-popup-slide-right-leave-active {
            transform: translate3d(100%, -50%, 0);
        }

        .van-popup-slide-bottom-enter,
        .van-popup-slide-bottom-leave-active {
            transform: translate3d(0, 100%, 0);
        }

        .van-popup-slide-left-enter,
        .van-popup-slide-left-leave-active {
            transform: translate3d(-100%, -50%, 0);
        }

        .van-popup__close-icon {
            position: absolute;
            z-index: 1;
            color: #c8c9cc;
            font-size: 0.44rem;
            cursor: pointer;
        }

        .van-popup__close-icon:active {
            color: #969799;
        }

        .van-popup__close-icon--top-left {
            top: 0.32rem;
            left: 0.32rem;
        }

        .van-popup__close-icon--top-right {
            top: 0.32rem;
            right: 0.32rem;
        }

        .van-popup__close-icon--bottom-left {
            bottom: 0.32rem;
            left: 0.32rem;
        }

        .van-popup__close-icon--bottom-right {
            right: 0.32rem;
            bottom: 0.32rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-loading {
            position: relative;
            color: #c8c9cc;
            font-size: 0;
            vertical-align: middle;
        }

        .van-loading__spinner {
            position: relative;
            display: inline-block;
            width: 0.6rem;
            max-width: 100%;
            height: 0.6rem;
            max-height: 100%;
            vertical-align: middle;
            animation: van-rotate 0.8s linear infinite;
        }

        .van-loading__spinner--spinner {
            animation-timing-function: steps(12);
        }

        .van-loading__spinner--spinner i {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .van-loading__spinner--spinner i::before {
            display: block;
            width: 0.04rem;
            height: 25%;
            margin: 0 auto;
            background-color: currentColor;
            border-radius: 40%;
            content: ' ';
        }

        .van-loading__spinner--circular {
            animation-duration: 2s;
        }

        .van-loading__circular {
            display: block;
            width: 100%;
            height: 100%;
        }

        .van-loading__circular circle {
            animation: van-circular 1.5s ease-in-out infinite;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
        }

        .van-loading__text {
            display: inline-block;
            margin-left: 0.16rem;
            color: #969799;
            font-size: 0.28rem;
            vertical-align: middle;
        }

        .van-loading--vertical {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .van-loading--vertical .van-loading__text {
            margin: 0.16rem 0 0;
        }

        <blade keyframes|%20van-circular%20%7B%0D>0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -40;
        }

        100% {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -120;
        }
        }

        .van-loading__spinner--spinner i:nth-of-type(1) {
            transform: rotate(30deg);
            opacity: 1;
        }

        .van-loading__spinner--spinner i:nth-of-type(2) {
            transform: rotate(60deg);
            opacity: 0.9375;
        }

        .van-loading__spinner--spinner i:nth-of-type(3) {
            transform: rotate(90deg);
            opacity: 0.875;
        }

        .van-loading__spinner--spinner i:nth-of-type(4) {
            transform: rotate(120deg);
            opacity: 0.8125;
        }

        .van-loading__spinner--spinner i:nth-of-type(5) {
            transform: rotate(150deg);
            opacity: 0.75;
        }

        .van-loading__spinner--spinner i:nth-of-type(6) {
            transform: rotate(180deg);
            opacity: 0.6875;
        }

        .van-loading__spinner--spinner i:nth-of-type(7) {
            transform: rotate(210deg);
            opacity: 0.625;
        }

        .van-loading__spinner--spinner i:nth-of-type(8) {
            transform: rotate(240deg);
            opacity: 0.5625;
        }

        .van-loading__spinner--spinner i:nth-of-type(9) {
            transform: rotate(270deg);
            opacity: 0.5;
        }

        .van-loading__spinner--spinner i:nth-of-type(10) {
            transform: rotate(300deg);
            opacity: 0.4375;
        }

        .van-loading__spinner--spinner i:nth-of-type(11) {
            transform: rotate(330deg);
            opacity: 0.375;
        }

        .van-loading__spinner--spinner i:nth-of-type(12) {
            transform: rotate(360deg);
            opacity: 0.3125;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-toast {
            position: fixed;
            top: 50%;
            left: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-sizing: content-box;
            width: 1.76rem;
            max-width: 70%;
            min-height: 1.76rem;
            padding: 0.32rem;
            color: #fff;
            font-size: 0.28rem;
            line-height: 0.4rem;
            white-space: pre-wrap;
            text-align: center;
            word-break: break-all;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 0.16rem;
            transform: translate3d(-50%, -50%, 0);
        }

        .van-toast--unclickable {
            overflow: hidden;
        }

        .van-toast--unclickable * {
            pointer-events: none;
        }

        .van-toast--text,
        .van-toast--html {
            width: fit-content;
            min-width: 1.92rem;
            min-height: 0;
            padding: 0.16rem 0.24rem;
        }

        .van-toast--text .van-toast__text,
        .van-toast--html .van-toast__text {
            margin-top: 0;
        }

        .van-toast--top {
            top: 20%;
        }

        .van-toast--bottom {
            top: auto;
            bottom: 20%;
        }

        .van-toast__icon {
            font-size: 0.72rem;
        }

        .van-toast__loading {
            padding: 0.08rem;
            color: #fff;
        }

        .van-toast__text {
            margin-top: 0.16rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        @charset "utf-8";

        html,
        body {
            font:
                400 0.28rem/100% 'PingFangSC',
                '\5FAE\8F6F\96C5\9ED1',
                Helvetica;
            color: #fff;
            width: 100%;
            height: 100%;
            height: -webkit-fill-available;
            overflow: hidden;
            min-width: 7.5rem;
            background: #ffffff;
            -webkit-user-select: none;
            -webkit-text-size-adjust: none;
            user-select: none;
            word-break: break-all;
            box-sizing: border-box;
        }

        body {
            position: relative;
            max-width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
        }

        <blade supports|%20(-webkit-touch-callout%3A%20none)%20%7B%0D>body {
            height: -webkit-fill-available;
        }
        }

        body,
        div,
        dl,
        dt,
        dd,
        del,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        fieldset,
        input,
        textarea,
        p,
        blockquote,
        th,
        td,
        menu {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        input[type='text'],
        textarea {
            -webkit-appearance: none;
            appearance: none;
            outline: 0;
        }

        button {
            outline: 0;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        fieldset,
        img {
            border: 0;
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        th,
        var {
            font-style: normal;
            font-weight: 400;
        }

        ol,
        ul,
        li {
            list-style: none;
        }

        caption,
        th {
            text-align: left;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: 400;
            font-style: normal;
        }

        q:before,
        q:after {
            content: '';
        }

        abbr,
        acronym {
            border: 0;
        }

        header,
        section,
        footer {
            display: block;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #ffffff;
        }

        .c:after {
            content: '.';
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: top;
        }

        .rel {
            position: relative;
        }

        .abs {
            position: absolute;
        }

        .fl {
            float: left;
            display: inline;
        }

        .fr {
            float: right;
            display: inline;
        }

        .tac {
            text-align: center;
        }

        .tar {
            text-align: right;
        }

        .table {
            display: table;
            table-layout: fixed;
            width: 100%;
        }

        .table li,
        .cell {
            display: table-cell;
            vertical-align: middle;
        }

        /* 行内 */
        .inline-box {
            font-size: 0;
            text-align: center;
        }

        .inline-box li,
        .inlineb {
            display: inline-block;
            vertical-align: middle;
        }

        .db {
            display: flex;
            display: -webkit-box;
            box-align: center;
            -webkit-box-align: center;
        }

        .db>li,
        .flexs {
            -moz-box-flex: 1;
            -webkit-box-flex: 1;
            box-flex: 1;
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
        }

        .flex1 {
            flex: 1;
        }

        .line_2x {
            display: -webkit-box;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            word-break: break-all;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .hide {
            display: none;
        }

        .text-overflow {
            display: block;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .container {
            padding: 0.32rem;
            height: 100%;
            overflow-y: auto;
        }

        input:focus {
            outline: 0;
        }

        /*解决苹果下滚动不平滑*/
        ::-webkit-scrollbar {
            display: none;
        }

        .vjs-custom-skin button,
        .vjs-loading-spinner,
        .vjs-custom-skin>.video-js .vjs-big-play-button {
            display: none !important;
            opacity: 0 !important;
        }

        .vjs-custom-skin {
            width: 100%;
            height: 100%;
            transition: height;
        }

        .vjs-custom-skin>.video-js {
            height: 100% !important;
            max-width: 8.5rem !important;
        }

        .video-js {
            max-width: 8.5rem !important;
        }

        .video-js .vjs-tech {
            object-fit: contain !important;
        }

        .scaled {
            height: 30vh;
            transition-duration: 0.3s;
        }

        .scaled>.video-js .vjs-tech {
            object-fit: contain !important;
        }

        /*移动端点击的时候有背景问题*/
        /* * {
-webkit-overflow-scrolling: touch;
} */

        .xc180 {
            transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            display: block;
        }

        .xc90 {
            transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            display: block;
        }

        .xc_90 {
            transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            display: block;
        }

        .bet {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            -webkit-justify-content: space-between;
        }

        .wrap {
            -webkit-flex-flow: wrap;
            flex-flow: wrap;
        }

        .bg-f4 {
            background: #f4f5f9;
        }

        .bg-fff {
            background: #fff;
        }

        .c-red {
            color: rgba(217, 55, 40, 1);
        }

        .c-999 {
            color: #999;
        }

        .c-fff {
            color: #fff;
        }

        .theme {
            color: #00fc83 !important;
        }

        i.iconfont {
            font-size: 0.48rem;
        }

        .mt {
            margin-top: 0.32rem;
        }

        .mb {
            margin-bottom: 0.32rem;
        }

        .j {
            border: 0.08rem solid transparent;
            width: 0;
            height: 0;
            border-top-color: #000;
            display: inline-block;
            vertical-align: middle;
        }

        .btn {
            width: 100%;
            color: #020202;
            border: 0;
            height: 0.88rem;
            border-radius: 0.16rem;
            background: #00fc83;
        }

        .btn.on {
            background: #cda349;
            color: #020202;
        }

        ::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        ::-moz-placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* firefox 19+ */
        :-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* ie */
        input:-moz-placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .h100 {
            height: 1.1rem;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /*
组件动画
调用<transition name="相应类名">
必须加上相应的定位类名
从下面滑出在根元素加上类名pop_bottom
*/
        .pop_bottom {
            bottom: 0;
        }

        /*从下面滑出动画*/
        .slideToggle-enter {
            visibility: hidden;
            bottom: -3rem;
        }

        .slideToggle-enter-active {
            transition: all 0.32s;
        }

        .slideToggle-leave-active {
            transition: all 0s;
        }

        .slideToggle-leave-to {
            visibility: visible;
            bottom: 0;
        }

        /*从中心展开*/
        .slide-scale-enter {
            transform: scale(0.51, 0.51);
        }

        .slide-scale-enter-active {
            transition: all 0.32s;
        }

        .slide-scale-leave-active {
            transition: all 0s;
        }

        .slide-scale-leave-to {
            transform: scale(1, 1);
        }

        .mint-toast-text {
            font-size: 0.28rem;
            padding: 0.2rem !important;
        }

        .c1 {
            color: #0a78f1;
        }

        html {
            touch-action: manipulation;
        }

        .van-toast {
            word-break: break-word !important;
        }

        .mt {
            margin-top: 0.32rem;
        }

    </style>
    <style type="text/css">
        .bg-blur {
            border-radius: 0.2rem;
            position: relative;
            z-index: 10;
        }

        .bg-blur:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0.2rem;
            background: #068475;
            backdrop-filter: blur(0.08rem);
            z-index: -1;
        }

        .bg-blur3 {
            border-radius: 0.2rem;
            position: relative;
            z-index: 10;
        }

        .bg-blur3:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0.2rem;
            background: #068475;
            backdrop-filter: blur(0.3rem);
            z-index: -1;
        }

        .yuan-red {
            position: relative;
            padding-left: 0.2rem;
        }

        .yuan-red:after {
            content: "";
            display: block;
            width: 0.12rem;
            height: 0.12rem;
            border-radius: 50%;
            background: #FF5050;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
        }

        .yuan-green {
            position: relative;
            padding-left: 0.2rem;
        }

        .yuan-green:after {
            content: "";
            display: block;
            width: 0.12rem;
            height: 0.12rem;
            border-radius: 50%;
            background: #00fc83;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
        }

        .red {
            color: #FF5050 !important;
        }

        input {
            caret-color: var(--themeColor);
        }

        .btn-bg {
            background: #23252E;
            color: #fff;
        }

        .btn-bg.active {
            background: #00fc83;
            color: #020202;
        }

        .w-full {
            width: 100%;
        }

        .w-1_2 {
            width: 50%;
        }

        .w-1_3 {
            width: 33.333333%;
        }

        .w-1_4 {
            width: 25%;
        }

        .h-full {
            height: 100% !important;
        }

        .h-screen {
            height: 100vh !important;
        }

        .flex {
            display: flex;
        }

        .flex-1 {
            flex: 1;
        }

        .flex-col {
            flex-direction: column;
        }

        .flex-row {
            flex-direction: row;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .items-center {
            align-items: center;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-end {
            align-items: flex-end;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flex-between-center {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flex-around-center {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .text-primary,
        .text-success {
            color: #00fc83;
        }

        .text-warn {
            color: #EEA20C;
        }

        .text-info {
            color: #1C8FFA;
        }

        .text-danger,
        .text-error {
            color: #FF3E3E;
        }

        .text-secondary {
            color: rgba(255, 255, 255, 0.6);
        }

        .text-gray {
            color: #787F8E;
        }

        .text-light {
            color: #CFD5E2;
        }

        .text-dark {
            color: #020202;
        }

        .text-disabled {
            opacity: 0.5;
        }

        .text-right {
            text-align: right;
        }

        .bg-primary,
        .bg-success {
            background: #00fc83;
        }

        .bg-success-opacity {
            background: rgba(0, 252, 131, 0.08);
        }

        .bg-warn {
            background: #EEA20C;
        }

        .bg-warn-opacity {
            background: rgba(255, 168, 0, 0.08);
        }

        .bg-info {
            background: #1C8FFA;
        }

        .bg-danger,
        .bg-error {
            background: #FF3E3E;
        }

        .bg-secondary {
            background: rgba(23, 26, 36, 0.6);
        }

        .bg-gray {
            background: #13161C;
        }

        .bg-light {
            background: rgba(30, 33, 46, 0.5);
        }

        .bg-dark {
            background: #020202 !important;
        }

        .bg-black-40 {
            background: rgba(0, 0, 0, 0.4);
        }

        .text-center {
            text-align: center !important;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-12px {
            font-size: 0.24rem;
        }

        .text-13px {
            font-size: 0.26rem;
        }

        .text-14px {
            font-size: 0.28rem;
        }

        .text-16px {
            font-size: 0.32rem;
        }

        .text-18px {
            font-size: 0.36rem;
        }

        .text-20px {
            font-size: 0.4rem;
        }

        .text-24px {
            font-size: 0.48rem;
        }

        .mb-8px {
            margin-bottom: 0.16rem;
        }

        .mb-10px {
            margin-bottom: 0.2rem;
        }

        .mb-12px {
            margin-bottom: 0.24rem;
        }

        .mb-14px {
            margin-bottom: 0.28rem;
        }

        .mb-16px {
            margin-bottom: 0.32rem;
        }

        .mb-18px {
            margin-bottom: 0.36rem;
        }

        .mb-20px {
            margin-bottom: 0.4rem;
        }

        .ml-6px {
            margin-left: 0.12rem;
        }

        .ml-8px {
            margin-left: 0.16rem;
        }

        .ml-10px {
            margin-left: 0.2rem;
        }

        .ml-12px {
            margin-left: 0.24rem;
        }

        .ml-14px {
            margin-left: 0.28rem;
        }

        .ml-16px {
            margin-left: 0.32rem;
        }

        .ml-18px {
            margin-left: 0.36rem;
        }

        .mr-6px {
            margin-right: 0.12rem;
        }

        .mr-8px {
            margin-right: 0.16rem;
        }

        .mr-10px {
            margin-right: 0.2rem;
        }

        .mr-12px {
            margin-right: 0.24rem;
        }

        .mr-14px {
            margin-right: 0.28rem;
        }

        .mr-16px {
            margin-right: 0.32rem;
        }

        .mr-18px {
            margin-right: 0.36rem;
        }

        .mr-20px {
            margin-right: 0.4rem;
        }

        .p-8px {
            padding: 0.16rem;
        }

        .p-12px {
            padding: 0.24rem;
        }

        .p-14px {
            padding: 0.28rem;
        }

        .p-16px {
            padding: 0.32rem;
        }

        .p-18px {
            padding: 0.36rem;
        }

        .p-20px {
            padding: 0.4rem;
        }

        .px-6px {
            padding-left: 0.12rem;
            padding-right: 0.12rem;
        }

        .px-12px {
            padding-left: 0.24rem;
            padding-right: 0.24rem;
        }

        .px-16px {
            padding-left: 0.32rem;
            padding-right: 0.32rem;
        }

        .px-24px {
            padding-left: 0.48rem;
            padding-right: 0.48rem;
        }

        .pl-16px {
            padding-left: 0.32rem;
        }

        .py-16px {
            padding-top: 0.32rem;
            padding-bottom: 0.32rem;
        }

        .pt-16px {
            padding-top: 0.32rem;
        }

        .rounded-6px {
            border-radius: 0.12rem;
        }

        .rounded-8px {
            border-radius: 0.16rem !important;
        }

        .rounded-10px {
            border-radius: 0.2rem;
        }

        .rounded-12px {
            border-radius: 0.24rem;
        }

        .rounded-full {
            border-radius: 19.98rem;
        }

        .border-solid-dark {
            border: 0.02rem solid #252930;
        }

        .border-dashed-dark {
            border: 0.02rem dashed #252930;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .overflow-y-auto {
            overflow-y: auto;
        }

        .opacity-5 {
            opacity: 0.05;
        }

        .opacity-40 {
            opacity: 0.4;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            height: 0.88rem;
            margin: 0;
            padding: 0;
            font-size: 0.32rem;
            line-height: 1.2;
            text-align: center;
            border-radius: 0.04rem;
            cursor: pointer;
            transition: opacity 0.2s;
            -webkit-appearance: none;
        }

        .van-button::before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #000;
            border: inherit;
            border-color: #000;
            border-radius: inherit;
            /* inherit parent's border radius */
            transform: translate(-50%, -50%);
            opacity: 0;
            content: ' ';
        }

        .van-button:active::before {
            opacity: 0.1;
        }

        .van-button--loading::before,
        .van-button--disabled::before {
            display: none;
        }

        .van-button--default {
            color: #f3f3f3;
            background-color: #23252E;
            border: 0.02rem solid #23252E;
        }

        .van-button--primary {
            color: #020202;
            background-color: #00fc83;
            border: 0.02rem solid #07c160;
        }

        .van-button--info {
            color: #fff;
            background-color: #1989fa;
            border: 0.02rem solid #1989fa;
        }

        .van-button--danger {
            color: #fff;
            background-color: #ee0a24;
            border: 0.02rem solid #ee0a24;
        }

        .van-button--warning {
            color: #fff;
            background-color: #ff976a;
            border: 0.02rem solid #ff976a;
        }

        .van-button--plain {
            background-color: #fff;
        }

        .van-button--plain.van-button--primary {
            color: #00fc83;
        }

        .van-button--plain.van-button--info {
            color: #1989fa;
        }

        .van-button--plain.van-button--danger {
            color: #ee0a24;
        }

        .van-button--plain.van-button--warning {
            color: #ff976a;
        }

        .van-button--large {
            width: 100%;
            height: 1rem;
        }

        .van-button--normal {
            padding: 0 0.3rem;
            font-size: 0.28rem;
        }

        .van-button--small {
            height: 0.72rem;
            padding: 0 0.16rem;
            font-size: 0.24rem;
        }

        .van-button__loading {
            color: inherit;
            font-size: inherit;
        }

        .van-button--mini {
            height: 0.48rem;
            padding: 0 0.08rem;
            font-size: 0.2rem;
        }

        .van-button--mini+.van-button--mini {
            margin-left: 0.08rem;
        }

        .van-button--block {
            display: block;
            width: 100%;
        }

        .van-button--disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }

        .van-button--loading {
            cursor: default;
        }

        .van-button--round {
            border-radius: 19.98rem;
        }

        .van-button--square {
            border-radius: 0;
        }

        .van-button__content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .van-button__content::before {
            content: ' ';
        }

        .van-button__icon {
            font-size: 1.2em;
            line-height: inherit;
        }

        .van-button__icon+.van-button__text,
        .van-button__loading+.van-button__text,
        .van-button__text+.van-button__icon,
        .van-button__text+.van-button__loading {
            margin-left: 0.08rem;
        }

        .van-button--hairline {
            border-width: 0;
        }

        .van-button--hairline::after {
            border-color: inherit;
            border-radius: 0.08rem;
        }

        .van-button--hairline.van-button--round::after {
            border-radius: 19.98rem;
        }

        .van-button--hairline.van-button--square::after {
            border-radius: 0;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-image {
            position: relative;
            display: inline-block;
        }

        .van-image--round {
            overflow: hidden;
            border-radius: 50%;
        }

        .van-image--round img {
            border-radius: inherit;
        }

        .van-image__img,
        .van-image__error,
        .van-image__loading {
            display: block;
            width: 100%;
            height: 100%;
        }

        .van-image__error,
        .van-image__loading {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #969799;
            font-size: 0.28rem;
            background-color: #0D0F13;
        }

        .van-image__loading-icon {
            color: #dcdee0;
            font-size: 0.64rem;
        }

        .van-image__error-icon {
            color: #dcdee0;
            font-size: 0.64rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-divider {
            display: flex;
            align-items: center;
            margin: 0.32rem 0;
            color: #969799;
            font-size: 0.28rem;
            line-height: 0.48rem;
            border-color: #252930;
            border-style: solid;
            border-width: 0;
        }

        .van-divider::before,
        .van-divider::after {
            display: block;
            flex: 1;
            box-sizing: border-box;
            height: 0.02rem;
            border-color: inherit;
            border-style: inherit;
            border-width: 0.02rem 0 0;
        }

        .van-divider::before {
            content: '';
        }

        .van-divider--hairline::before,
        .van-divider--hairline::after {
            transform: scaleY(0.5);
        }

        .van-divider--dashed {
            border-style: dashed;
        }

        .van-divider--content-center::before,
        .van-divider--content-left::before,
        .van-divider--content-right::before {
            margin-right: 0.32rem;
        }

        .van-divider--content-center::after,
        .van-divider--content-left::after,
        .van-divider--content-right::after {
            margin-left: 0.32rem;
            content: '';
        }

        .van-divider--content-left::before {
            max-width: 10%;
        }

        .van-divider--content-right::after {
            max-width: 10%;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-cell {
            position: relative;
            display: flex;
            box-sizing: border-box;
            width: 100%;
            padding: 0.2rem 0.32rem;
            overflow: hidden;
            color: #f3f3f3;
            font-size: 0.28rem;
            line-height: 0.48rem;
            background-color: #0D0F13;
        }

        .van-cell::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            right: 0.32rem;
            bottom: 0;
            left: 0.32rem;
            border-bottom: 0.02rem solid #4C5361;
            transform: scaleY(0.5);
        }

        .van-cell:last-child::after,
        .van-cell--borderless::after {
            display: none;
        }

        .van-cell__label {
            margin-top: 0.08rem;
            color: #969799;
            font-size: 0.24rem;
            line-height: 0.36rem;
        }

        .van-cell__title,
        .van-cell__value {
            flex: 1;
        }

        .van-cell__value {
            position: relative;
            overflow: hidden;
            color: #969799;
            text-align: right;
            vertical-align: middle;
            word-wrap: break-word;
        }

        .van-cell__value--alone {
            color: #f3f3f3;
            text-align: left;
        }

        .van-cell__left-icon,
        .van-cell__right-icon {
            height: 0.48rem;
            font-size: 0.32rem;
            line-height: 0.48rem;
        }

        .van-cell__left-icon {
            margin-right: 0.08rem;
        }

        .van-cell__right-icon {
            margin-left: 0.08rem;
            color: #969799;
        }

        .van-cell--clickable {
            cursor: pointer;
        }

        .van-cell--clickable:active {
            background-color: #23252e;
        }

        .van-cell--required {
            overflow: visible;
        }

        .van-cell--required::before {
            position: absolute;
            left: 0.16rem;
            color: #ee0a24;
            font-size: 0.28rem;
            content: '*';
        }

        .van-cell--center {
            align-items: center;
        }

        .van-cell--large {
            padding-top: 0.24rem;
            padding-bottom: 0.24rem;
        }

        .van-cell--large .van-cell__title {
            font-size: 0.32rem;
        }

        .van-cell--large .van-cell__label {
            font-size: 0.28rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-field__label {
            flex: none;
            box-sizing: border-box;
            width: 6.2em;
            margin-right: 0.24rem;
            color: #646566;
            text-align: left;
            word-wrap: break-word;
        }

        .van-field__label--center {
            text-align: center;
        }

        .van-field__label--right {
            text-align: right;
        }

        .van-field--disabled .van-field__label {
            color: #c8c9cc;
        }

        .van-field__value {
            overflow: visible;
        }

        .van-field__body {
            display: flex;
            align-items: center;
        }

        .van-field__control {
            display: block;
            box-sizing: border-box;
            width: 100%;
            min-width: 0;
            margin: 0;
            padding: 0;
            color: #FFF;
            line-height: inherit;
            text-align: left;
            background-color: transparent;
            border: 0;
            resize: none;
        }

        .van-field__control::placeholder {
            color: #4C5361;
        }

        .van-field__control:disabled {
            color: #c8c9cc;
            cursor: not-allowed;
            opacity: 1;
            -webkit-text-fill-color: #c8c9cc;
        }

        .van-field__control:read-only {
            cursor: default;
        }

        .van-field__control--center {
            justify-content: center;
            text-align: center;
        }

        .van-field__control--right {
            justify-content: flex-end;
            text-align: right;
        }

        .van-field__control--custom {
            display: flex;
            align-items: center;
            min-height: 0.48rem;
        }

        .van-field__control[type='date'],
        .van-field__control[type='time'],
        .van-field__control[type='datetime-local'] {
            min-height: 0.48rem;
        }

        .van-field__control[type='search'] {
            -webkit-appearance: none;
        }

        .van-field__clear,
        .van-field__icon,
        .van-field__button,
        .van-field__right-icon {
            flex-shrink: 0;
        }

        .van-field__clear,
        .van-field__right-icon {
            margin-right: -0.16rem;
            padding: 0 0.16rem;
            line-height: inherit;
        }

        .van-field__clear {
            color: #c8c9cc;
            font-size: 0.32rem;
            cursor: pointer;
        }

        .van-field__left-icon .van-icon,
        .van-field__right-icon .van-icon {
            display: block;
            font-size: 0.32rem;
            line-height: inherit;
        }

        .van-field__left-icon {
            margin-right: 0.08rem;
        }

        .van-field__right-icon {
            color: #969799;
        }

        .van-field__button {
            padding-left: 0.16rem;
        }

        .van-field__error-message {
            color: #ee0a24;
            font-size: 0.24rem;
            text-align: left;
        }

        .van-field__error-message--center {
            text-align: center;
        }

        .van-field__error-message--right {
            text-align: right;
        }

        .van-field__word-limit {
            margin-top: 0.08rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
            line-height: 0.32rem;
            text-align: right;
        }

        .van-field--error .van-field__control,
        .van-field--error .van-field__control::placeholder {
            color: #ee0a24;
            -webkit-text-fill-color: currentColor;
        }

        .van-field--min-height .van-field__control {
            min-height: 1.2rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-popover {
            position: absolute;
            overflow: visible;
            background-color: transparent;
            transition: opacity 0.15s, transform 0.15s;
        }

        .van-popover__wrapper {
            display: inline-block;
        }

        .van-popover__arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 0.12rem;
        }

        .van-popover__content {
            overflow: hidden;
            border-radius: 0.16rem;
        }

        .van-popover__action {
            position: relative;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            width: 2.56rem;
            height: 0.88rem;
            padding: 0 0.32rem;
            font-size: 0.28rem;
            line-height: 0.4rem;
            cursor: pointer;
        }

        .van-popover__action:last-child .van-popover__action-text::after {
            display: none;
        }

        .van-popover__action-text {
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .van-popover__action-icon {
            margin-right: 0.16rem;
            font-size: 0.4rem;
        }

        .van-popover__action--with-icon .van-popover__action-text {
            justify-content: flex-start;
        }

        .van-popover[data-popper-placement^='top'] .van-popover__arrow {
            bottom: 0;
            border-top-color: currentColor;
            border-bottom-width: 0;
            transform: translate(-50%, 100%);
        }

        .van-popover[data-popper-placement='top'] {
            transform-origin: 50% 100%;
        }

        .van-popover[data-popper-placement='top'] .van-popover__arrow {
            left: 50%;
        }

        .van-popover[data-popper-placement='top-start'] {
            transform-origin: 0 100%;
        }

        .van-popover[data-popper-placement='top-start'] .van-popover__arrow {
            left: 0.32rem;
        }

        .van-popover[data-popper-placement='top-end'] {
            transform-origin: 100% 100%;
        }

        .van-popover[data-popper-placement='top-end'] .van-popover__arrow {
            right: 0.32rem;
        }

        .van-popover[data-popper-placement^='left'] .van-popover__arrow {
            right: 0;
            border-right-width: 0;
            border-left-color: currentColor;
            transform: translate(100%, -50%);
        }

        .van-popover[data-popper-placement='left'] {
            transform-origin: 100% 50%;
        }

        .van-popover[data-popper-placement='left'] .van-popover__arrow {
            top: 50%;
        }

        .van-popover[data-popper-placement='left-start'] {
            transform-origin: 100% 0;
        }

        .van-popover[data-popper-placement='left-start'] .van-popover__arrow {
            top: 0.32rem;
        }

        .van-popover[data-popper-placement='left-end'] {
            transform-origin: 100% 100%;
        }

        .van-popover[data-popper-placement='left-end'] .van-popover__arrow {
            bottom: 0.32rem;
        }

        .van-popover[data-popper-placement^='right'] .van-popover__arrow {
            left: 0;
            border-right-color: currentColor;
            border-left-width: 0;
            transform: translate(-100%, -50%);
        }

        .van-popover[data-popper-placement='right'] {
            transform-origin: 0 50%;
        }

        .van-popover[data-popper-placement='right'] .van-popover__arrow {
            top: 50%;
        }

        .van-popover[data-popper-placement='right-start'] {
            transform-origin: 0 0;
        }

        .van-popover[data-popper-placement='right-start'] .van-popover__arrow {
            top: 0.32rem;
        }

        .van-popover[data-popper-placement='right-end'] {
            transform-origin: 0 100%;
        }

        .van-popover[data-popper-placement='right-end'] .van-popover__arrow {
            bottom: 0.32rem;
        }

        .van-popover[data-popper-placement^='bottom'] .van-popover__arrow {
            top: 0;
            border-top-width: 0;
            border-bottom-color: currentColor;
            transform: translate(-50%, -100%);
        }

        .van-popover[data-popper-placement='bottom'] {
            transform-origin: 50% 0;
        }

        .van-popover[data-popper-placement='bottom'] .van-popover__arrow {
            left: 50%;
        }

        .van-popover[data-popper-placement='bottom-start'] {
            transform-origin: 0 0;
        }

        .van-popover[data-popper-placement='bottom-start'] .van-popover__arrow {
            left: 0.32rem;
        }

        .van-popover[data-popper-placement='bottom-end'] {
            transform-origin: 100% 0;
        }

        .van-popover[data-popper-placement='bottom-end'] .van-popover__arrow {
            right: 0.32rem;
        }

        .van-popover--light {
            color: #f3f3f3;
        }

        .van-popover--light .van-popover__content {
            background-color: #23252e;
            box-shadow: 0 0.04rem 0.24rem rgba(50, 50, 51, 0.12);
        }

        .van-popover--light .van-popover__arrow {
            color: #23252e;
        }

        .van-popover--light .van-popover__action:active {
            background-color: #23252e;
        }

        .van-popover--light .van-popover__action--disabled {
            color: #c8c9cc;
            cursor: not-allowed;
        }

        .van-popover--light .van-popover__action--disabled:active {
            background-color: transparent;
        }

        .van-popover--dark {
            color: #fff;
        }

        .van-popover--dark .van-popover__content {
            background-color: #23252e;
        }

        .van-popover--dark .van-popover__arrow {
            color: #23252e;
        }

        .van-popover--dark .van-popover__action:active {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .van-popover--dark .van-popover__action--disabled {
            color: #969799;
        }

        .van-popover--dark .van-popover__action--disabled:active {
            background-color: transparent;
        }

        .van-popover--dark .van-popover__action-text::after {
            border-color: #646566;
        }

        .van-popover-zoom-enter,
        .van-popover-zoom-leave-active {
            transform: scale(0.8);
            opacity: 0;
        }

        .van-popover-zoom-enter-active {
            transition-timing-function: ease-out;
        }

        .van-popover-zoom-leave-active {
            transition-timing-function: ease-in;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-swipe-item {
            position: relative;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-swipe {
            position: relative;
            overflow: hidden;
            transform: translateZ(0);
            cursor: grab;
            user-select: none;
        }

        .van-swipe__track {
            display: flex;
            height: 100%;
        }

        .van-swipe__track--vertical {
            flex-direction: column;
        }

        .van-swipe__indicators {
            position: absolute;
            bottom: 0.24rem;
            left: 50%;
            display: flex;
            transform: translateX(-50%);
        }

        .van-swipe__indicators--vertical {
            top: 50%;
            bottom: auto;
            left: 0.24rem;
            flex-direction: column;
            transform: translateY(-50%);
        }

        .van-swipe__indicators--vertical .van-swipe__indicator:not(:last-child) {
            margin-bottom: 0.12rem;
        }

        .van-swipe__indicator {
            width: 0.12rem;
            height: 0.12rem;
            background-color: #4C5361;
            border-radius: 100%;
            opacity: 0.3;
            transition: opacity 0.2s, background-color 0.2s;
        }

        .van-swipe__indicator:not(:last-child) {
            margin-right: 0.12rem;
        }

        .van-swipe__indicator--active {
            background-color: #1989fa;
            opacity: 1;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-slider {
            position: relative;
            width: 100%;
            height: 0.04rem;
            background-color: #ebedf0;
            border-radius: 19.98rem;
            cursor: pointer;
        }

        .van-slider::before {
            position: absolute;
            top: -0.16rem;
            right: 0;
            bottom: -0.16rem;
            left: 0;
            content: '';
        }

        .van-slider__bar {
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #1989fa;
            border-radius: inherit;
            transition: all 0.2s;
        }

        .van-slider__button {
            width: 0.48rem;
            height: 0.48rem;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0.02rem 0.04rem rgba(0, 0, 0, 0.5);
        }

        .van-slider__button-wrapper,
        .van-slider__button-wrapper-right {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translate3d(50%, -50%, 0);
            cursor: grab;
        }

        .van-slider__button-wrapper-left {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate3d(-50%, -50%, 0);
            cursor: grab;
        }

        .van-slider--disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }

        .van-slider--disabled .van-slider__button-wrapper,
        .van-slider--disabled .van-slider__button-wrapper-left,
        .van-slider--disabled .van-slider__button-wrapper-right {
            cursor: not-allowed;
        }

        .van-slider--vertical {
            display: inline-block;
            width: 0.04rem;
            height: 100%;
        }

        .van-slider--vertical .van-slider__button-wrapper,
        .van-slider--vertical .van-slider__button-wrapper-right {
            top: auto;
            right: 50%;
            bottom: 0;
            transform: translate3d(50%, 50%, 0);
        }

        .van-slider--vertical .van-slider__button-wrapper-left {
            top: 0;
            right: 50%;
            left: auto;
            transform: translate3d(50%, -50%, 0);
        }

        .van-slider--vertical::before {
            top: 0;
            right: -0.16rem;
            bottom: 0;
            left: -0.16rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-picker {
            position: relative;
            background-color: #0d0f13;
            user-select: none;
        }

        .van-picker__toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 0.88rem;
        }

        .van-picker__cancel,
        .van-picker__confirm {
            height: 100%;
            padding: 0 0.32rem;
            font-size: 0.28rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .van-picker__cancel:active,
        .van-picker__confirm:active {
            opacity: 0.7;
        }

        .van-picker__confirm {
            color: #00FC83;
        }

        .van-picker__cancel {
            color: #969799;
        }

        .van-picker__title {
            max-width: 50%;
            font-weight: 500;
            font-size: 0.32rem;
            line-height: 0.4rem;
            text-align: center;
        }

        .van-picker__columns {
            position: relative;
            display: flex;
            cursor: grab;
        }

        .van-picker__loading {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 3;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1989fa;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .van-picker__frame {
            position: absolute;
            top: 50%;
            right: 0.32rem;
            left: 0.32rem;
            z-index: 2;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .van-picker__mask {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0.9), hsla(0, 0%, 100%, 0.4)), linear-gradient(0deg, hsla(0, 0%, 100%, 0.9), hsla(0, 0%, 100%, 0.4));
            background-repeat: no-repeat;
            background-position: top, bottom;
            transform: translateZ(0);
            pointer-events: none;
        }

        .van-picker-column {
            flex: 1;
            overflow: hidden;
            font-size: 0.32rem;
        }

        .van-picker-column__wrapper {
            transition-timing-function: cubic-bezier(0.23, 1, 0.68, 1);
        }

        .van-picker-column__item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 0.08rem;
            color: #FFF;
        }

        .van-picker-column__item--disabled {
            cursor: not-allowed;
            opacity: 0.3;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-image-preview {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .van-image-preview__swipe {
            height: 100%;
        }

        .van-image-preview__swipe-item {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .van-image-preview__cover {
            position: absolute;
            top: 0;
            left: 0;
        }

        .van-image-preview__image {
            width: 100%;
            transition-property: transform;
        }

        .van-image-preview__image--vertical {
            width: auto;
            height: 100%;
        }

        .van-image-preview__image img {
            -webkit-user-drag: none;
        }

        .van-image-preview__image .van-image__error {
            top: 30%;
            height: 40%;
        }

        .van-image-preview__image .van-image__error-icon {
            font-size: 0.72rem;
        }

        .van-image-preview__image .van-image__loading {
            background-color: transparent;
        }

        .van-image-preview__index {
            position: absolute;
            top: 0.32rem;
            left: 50%;
            color: #fff;
            font-size: 0.28rem;
            line-height: 0.4rem;
            text-shadow: 0 0.02rem 0.02rem #323233;
            transform: translate(-50%, 0);
        }

        .van-image-preview__overlay {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .van-image-preview__close-icon {
            position: absolute;
            z-index: 1;
            color: #c8c9cc;
            font-size: 0.44rem;
            cursor: pointer;
        }

        .van-image-preview__close-icon:active {
            color: #969799;
        }

        .van-image-preview__close-icon--top-left {
            top: 0.32rem;
            left: 0.32rem;
        }

        .van-image-preview__close-icon--top-right {
            top: 0.32rem;
            right: 0.32rem;
        }

        .van-image-preview__close-icon--bottom-left {
            bottom: 0.32rem;
            left: 0.32rem;
        }

        .van-image-preview__close-icon--bottom-right {
            right: 0.32rem;
            bottom: 0.32rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-uploader {
            position: relative;
            display: inline-block;
        }

        .van-uploader__wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        .van-uploader__wrapper--disabled {
            opacity: 0.5;
        }

        .van-uploader__input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            cursor: pointer;
            opacity: 0;
        }

        .van-uploader__input-wrapper {
            position: relative;
        }

        .van-uploader__input:disabled {
            cursor: not-allowed;
        }

        .van-uploader__upload {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 1.6rem;
            height: 1.6rem;
            margin: 0 0.16rem 0.16rem 0;
            background-color: #f7f8fa;
        }

        .van-uploader__upload:active {
            background-color: #23252e;
        }

        .van-uploader__upload--readonly:active {
            background-color: #f7f8fa;
        }

        .van-uploader__upload-icon {
            color: #dcdee0;
            font-size: 0.48rem;
        }

        .van-uploader__upload-text {
            margin-top: 0.16rem;
            color: #969799;
            font-size: 0.24rem;
        }

        .van-uploader__preview {
            position: relative;
            margin: 0 0.16rem 0.16rem 0;
            cursor: pointer;
        }

        .van-uploader__preview-image {
            display: block;
            width: 1.6rem;
            height: 1.6rem;
            overflow: hidden;
        }

        .van-uploader__preview-delete {
            position: absolute;
            top: 0;
            right: 0;
            width: 0.28rem;
            height: 0.28rem;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 0 0 0 0.24rem;
        }

        .van-uploader__preview-delete-icon {
            position: absolute;
            top: -0.04rem;
            right: -0.04rem;
            color: #fff;
            font-size: 0.32rem;
            transform: scale(0.5);
        }

        .van-uploader__preview-cover {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .van-uploader__mask {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            background-color: rgba(50, 50, 51, 0.88);
        }

        .van-uploader__mask-icon {
            font-size: 0.44rem;
        }

        .van-uploader__mask-message {
            margin-top: 0.12rem;
            padding: 0 0.08rem;
            font-size: 0.24rem;
            line-height: 0.28rem;
        }

        .van-uploader__loading {
            width: 0.44rem;
            height: 0.44rem;
            color: #fff;
        }

        .van-uploader__file {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 1.6rem;
            height: 1.6rem;
            background-color: #0D0F13;
        }

        .van-uploader__file-icon {
            color: #646566;
            font-size: 0.4rem;
        }

        .van-uploader__file-name {
            box-sizing: border-box;
            width: 100%;
            margin-top: 0.16rem;
            padding: 0 0.08rem;
            color: #646566;
            font-size: 0.24rem;
            text-align: center;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-checkbox {
            display: flex;
            align-items: center;
            overflow: hidden;
            cursor: pointer;
            user-select: none;
        }

        .van-checkbox--disabled {
            cursor: not-allowed;
        }

        .van-checkbox--label-disabled {
            cursor: default;
        }

        .van-checkbox--horizontal {
            margin-right: 0.24rem;
        }

        .van-checkbox__icon {
            flex: none;
            height: 1em;
            font-size: 0.4rem;
            line-height: 1em;
            cursor: pointer;
        }

        .van-checkbox__icon .van-icon {
            display: block;
            box-sizing: border-box;
            width: 1.25em;
            height: 1.25em;
            color: transparent;
            font-size: 0.8em;
            line-height: 1.25;
            text-align: center;
            border: 0.02rem solid #c8c9cc;
            transition-duration: 0.2s;
            transition-property: color, border-color, background-color;
        }

        .van-checkbox__icon--round .van-icon {
            border-radius: 100%;
        }

        .van-checkbox__icon--checked .van-icon {
            color: #fff;
            background-color: #1989fa;
            border-color: #1989fa;
        }

        .van-checkbox__icon--disabled {
            cursor: not-allowed;
        }

        .van-checkbox__icon--disabled .van-icon {
            background-color: #4C5361;
            border-color: #c8c9cc;
        }

        .van-checkbox__icon--disabled.van-checkbox__icon--checked .van-icon {
            color: #c8c9cc;
        }

        .van-checkbox__label {
            margin-left: 0.16rem;
            color: #f3f3f3;
            line-height: 0.4rem;
        }

        .van-checkbox__label--left {
            margin: 0 0.16rem 0 0;
        }

        .van-checkbox__label--disabled {
            color: #c8c9cc;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-checkbox-group--horizontal {
            display: flex;
            flex-wrap: wrap;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-empty {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0.64rem 0;
        }

        .van-empty__image {
            width: 3.2rem;
            height: 3.2rem;
        }

        .van-empty__image img {
            width: 100%;
            height: 100%;
        }

        .van-empty__description {
            margin-top: 0.32rem;
            padding: 0 1.2rem;
            color: #969799;
            font-size: 0.28rem;
            line-height: 0.4rem;
        }

        .van-empty__bottom {
            margin-top: 0.48rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-calendar {
            display: flex;
            flex-direction: column;
            height: 100%;
            background-color: #fff;
        }

        .van-calendar__popup.van-popup--top,
        .van-calendar__popup.van-popup--bottom {
            height: 80%;
        }

        .van-calendar__popup.van-popup--left,
        .van-calendar__popup.van-popup--right {
            height: 100%;
        }

        .van-calendar__popup .van-popup__close-icon {
            top: 0.22rem;
        }

        .van-calendar__header {
            flex-shrink: 0;
            box-shadow: 0 0.04rem 0.2rem rgba(125, 126, 128, 0.16);
        }

        .van-calendar__month-title,
        .van-calendar__header-title,
        .van-calendar__header-subtitle {
            height: 0.88rem;
            font-weight: 500;
            line-height: 0.88rem;
            text-align: center;
        }

        .van-calendar__header-title {
            font-size: 0.32rem;
        }

        .van-calendar__header-subtitle {
            font-size: 0.28rem;
        }

        .van-calendar__month-title {
            font-size: 0.28rem;
        }

        .van-calendar__weekdays {
            display: flex;
        }

        .van-calendar__weekday {
            flex: 1;
            font-size: 0.24rem;
            line-height: 0.6rem;
            text-align: center;
        }

        .van-calendar__body {
            flex: 1;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }

        .van-calendar__days {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            user-select: none;
        }

        .van-calendar__month-mark {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            color: rgba(242, 243, 245, 0.8);
            font-size: 3.2rem;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        .van-calendar__day,
        .van-calendar__selected-day {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .van-calendar__day {
            position: relative;
            width: 14.285%;
            height: 1.28rem;
            font-size: 0.32rem;
            cursor: pointer;
        }

        .van-calendar__day--end,
        .van-calendar__day--start,
        .van-calendar__day--start-end,
        .van-calendar__day--multiple-middle,
        .van-calendar__day--multiple-selected {
            color: #fff;
            background-color: #ee0a24;
        }

        .van-calendar__day--start {
            border-radius: 0.08rem 0 0 0.08rem;
        }

        .van-calendar__day--end {
            border-radius: 0 0.08rem 0.08rem 0;
        }

        .van-calendar__day--start-end,
        .van-calendar__day--multiple-selected {
            border-radius: 0.08rem;
        }

        .van-calendar__day--middle {
            color: #ee0a24;
        }

        .van-calendar__day--middle::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: currentColor;
            opacity: 0.1;
            content: '';
        }

        .van-calendar__day--disabled {
            color: #c8c9cc;
            cursor: default;
        }

        .van-calendar__top-info,
        .van-calendar__bottom-info {
            position: absolute;
            right: 0;
            left: 0;
            font-size: 0.2rem;
            line-height: 0.28rem;
        }

        <blade media|%20(max-width%3A%20350px)%20%7B%0D>.van-calendar__top-info,
        .van-calendar__bottom-info {
            font-size: 0.18rem;
        }
        }

        .van-calendar__top-info {
            top: 0.12rem;
        }

        .van-calendar__bottom-info {
            bottom: 0.12rem;
        }

        .van-calendar__selected-day {
            width: 1.08rem;
            height: 1.08rem;
            color: #fff;
            background-color: #ee0a24;
            border-radius: 0.08rem;
        }

        .van-calendar__footer {
            flex-shrink: 0;
            padding: 0 0.32rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
        }

        .van-calendar__footer--unfit {
            padding-bottom: 0;
        }

        .van-calendar__confirm {
            height: 0.72rem;
            margin: 0.14rem 0;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-sticky--fixed {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 99;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-tab {
            position: relative;
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0 0.08rem;
            color: #646566;
            font-size: 0.28rem;
            line-height: 0.4rem;
            cursor: pointer;
        }

        .van-tab--active {
            color: #f3f3f3;
            font-weight: 500;
        }

        .van-tab--disabled {
            color: #c8c9cc;
            cursor: not-allowed;
        }

        .van-tab__text--ellipsis {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .van-tab__text-wrapper {
            position: relative;
        }

        .van-tabs {
            position: relative;
        }

        .van-tabs__wrap {
            overflow: hidden;
        }

        .van-tabs__wrap--page-top {
            position: fixed;
        }

        .van-tabs__wrap--content-bottom {
            top: auto;
            bottom: 0;
        }

        .van-tabs__wrap--scrollable .van-tab {
            flex: 1 0 auto;
            padding: 0 0.24rem;
        }

        .van-tabs__wrap--scrollable .van-tabs__nav {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .van-tabs__wrap--scrollable .van-tabs__nav::-webkit-scrollbar {
            display: none;
        }

        .van-tabs__nav {
            position: relative;
            display: flex;
            background-color: transparent;
            user-select: none;
        }

        .van-tabs__nav--line {
            box-sizing: content-box;
            height: 100%;
            padding-bottom: 0.3rem;
            /* 15px padding to hide scrollbar in mobile safari */
        }

        .van-tabs__nav--line.van-tabs__nav--complete {
            padding-right: 0.16rem;
            padding-left: 0.16rem;
        }

        .van-tabs__nav--card {
            box-sizing: border-box;
            height: 0.8rem;
            margin: 0 0.32rem;
            border: 0.02rem solid #00fc83;
            border-radius: 0.04rem;
        }

        .van-tabs__nav--card .van-tab {
            color: #00fc83;
            border-right: 0.02rem solid #00fc83;
        }

        .van-tabs__nav--card .van-tab:last-child {
            border-right: none;
        }

        .van-tabs__nav--card .van-tab.van-tab--active {
            color: #fff;
            background-color: #00fc83;
        }

        .van-tabs__nav--card .van-tab--disabled {
            color: #c8c9cc;
        }

        .van-tabs__line {
            position: absolute;
            bottom: 0.3rem;
            left: 0;
            z-index: 1;
            width: 0.8rem;
            height: 0.06rem;
            background-color: #00fc83;
            border-radius: 0.06rem;
        }

        .van-tabs__track {
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            will-change: left;
        }

        .van-tabs__content--animated {
            overflow: hidden;
        }

        .van-tabs--line .van-tabs__wrap {
            height: 0.88rem;
        }

        .van-tabs--card>.van-tabs__wrap {
            height: 0.8rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-password-input {
            position: relative;
            margin: 0 0.32rem;
            user-select: none;
        }

        .van-password-input__info,
        .van-password-input__error-info {
            margin-top: 0.32rem;
            font-size: 0.28rem;
            text-align: center;
        }

        .van-password-input__info {
            color: #969799;
        }

        .van-password-input__error-info {
            color: #ee0a24;
        }

        .van-password-input__security {
            display: flex;
            width: 100%;
            height: 1rem;
            cursor: pointer;
        }

        .van-password-input__security::after {
            border-radius: 0.12rem;
        }

        .van-password-input__security li {
            position: relative;
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-size: 0.4rem;
            line-height: 1.2;
            background-color: #fff;
        }

        .van-password-input__security i {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0.2rem;
            height: 0.2rem;
            background-color: #000;
            border-radius: 100%;
            transform: translate(-50%, -50%);
            visibility: hidden;
        }

        .van-password-input__cursor {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0.02rem;
            height: 40%;
            background-color: #f3f3f3;
            transform: translate(-50%, -50%);
            animation: 1s van-cursor-flicker infinite;
        }

        <blade keyframes|%20van-cursor-flicker%20%7B%0D>from {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-number-keyboard {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            padding-bottom: 0.44rem;
            background-color: #f2f3f5;
            user-select: none;
        }

        .van-number-keyboard--with-title {
            border-radius: 0.4rem 0.4rem 0 0;
        }

        .van-number-keyboard__header {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: content-box;
            height: 0.68rem;
            padding-top: 0.12rem;
            color: #646566;
            font-size: 0.32rem;
        }

        .van-number-keyboard__title {
            display: inline-block;
            font-weight: normal;
        }

        .van-number-keyboard__title-left {
            position: absolute;
            left: 0;
        }

        .van-number-keyboard__body {
            display: flex;
            padding: 0.12rem 0 0 0.12rem;
        }

        .van-number-keyboard__keys {
            display: flex;
            flex: 3;
            flex-wrap: wrap;
        }

        .van-number-keyboard__close {
            position: absolute;
            right: 0;
            height: 100%;
            padding: 0 0.32rem;
            color: #576b95;
            font-size: 0.28rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .van-number-keyboard__close:active {
            opacity: 0.7;
        }

        .van-number-keyboard__sidebar {
            display: flex;
            flex: 1;
            flex-direction: column;
        }

        .van-number-keyboard--unfit {
            padding-bottom: 0;
        }

        .van-key {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 0.96rem;
            font-size: 0.56rem;
            line-height: 1.5;
            background-color: #fff;
            border-radius: 0.16rem;
            cursor: pointer;
        }

        .van-key--large {
            position: absolute;
            top: 0;
            right: 0.12rem;
            bottom: 0.12rem;
            left: 0;
            height: auto;
        }

        .van-key--blue,
        .van-key--delete {
            font-size: 0.32rem;
        }

        .van-key--active {
            background-color: #ebedf0;
        }

        .van-key--blue {
            color: #fff;
            background-color: #1989fa;
        }

        .van-key--blue.van-key--active {
            background-color: #0570db;
        }

        .van-key__wrapper {
            position: relative;
            flex: 1;
            flex-basis: 33%;
            box-sizing: border-box;
            padding: 0 0.12rem 0.12rem 0;
        }

        .van-key__wrapper--wider {
            flex-basis: 66%;
        }

        .van-key__delete-icon {
            width: 0.64rem;
            height: 0.44rem;
        }

        .van-key__collapse-icon {
            width: 0.6rem;
            height: 0.48rem;
        }

        .van-key__loading-icon {
            color: #fff;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-rate {
            display: inline-flex;
            flex-wrap: wrap;
            cursor: pointer;
            user-select: none;
        }

        .van-rate__item {
            position: relative;
        }

        .van-rate__item:not(:last-child) {
            padding-right: 0.08rem;
        }

        .van-rate__icon {
            display: block;
            width: 1em;
            color: #c8c9cc;
            font-size: 0.4rem;
        }

        .van-rate__icon--half {
            position: absolute;
            top: 0;
            left: 0;
            width: 0.5em;
            overflow: hidden;
        }

        .van-rate__icon--full {
            color: #ee0a24;
        }

        .van-rate__icon--disabled {
            color: #c8c9cc;
        }

        .van-rate--disabled {
            cursor: not-allowed;
        }

        .van-rate--readonly {
            cursor: default;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-tab__pane,
        .van-tab__pane-wrapper {
            flex-shrink: 0;
            box-sizing: border-box;
            width: 100%;
        }

        .van-tab__pane-wrapper--inactive {
            height: 0;
            overflow: visible;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-radio-group--horizontal {
            display: flex;
            flex-wrap: wrap;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-radio {
            display: flex;
            align-items: center;
            overflow: hidden;
            cursor: pointer;
            user-select: none;
        }

        .van-radio--disabled {
            cursor: not-allowed;
        }

        .van-radio--label-disabled {
            cursor: default;
        }

        .van-radio--horizontal {
            margin-right: 0.24rem;
        }

        .van-radio__icon {
            flex: none;
            height: 1em;
            font-size: 0.4rem;
            line-height: 1em;
            cursor: pointer;
        }

        .van-radio__icon .van-icon {
            display: block;
            box-sizing: border-box;
            width: 1.25em;
            height: 1.25em;
            color: transparent;
            font-size: 0.8em;
            line-height: 1.25;
            text-align: center;
            border: 0.02rem solid #c8c9cc;
            transition-duration: 0.2s;
            transition-property: color, border-color, background-color;
        }

        .van-radio__icon--round .van-icon {
            border-radius: 100%;
        }

        .van-radio__icon--checked .van-icon {
            color: #fff;
            background-color: #1989fa;
            border-color: #1989fa;
        }

        .van-radio__icon--disabled {
            cursor: not-allowed;
        }

        .van-radio__icon--disabled .van-icon {
            background-color: #4C5361;
            border-color: #c8c9cc;
        }

        .van-radio__icon--disabled.van-radio__icon--checked .van-icon {
            color: #c8c9cc;
        }

        .van-radio__label {
            margin-left: 0.16rem;
            color: #f3f3f3;
            line-height: 0.4rem;
        }

        .van-radio__label--left {
            margin: 0 0.16rem 0 0;
        }

        .van-radio__label--disabled {
            color: #c8c9cc;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-notice-bar {
            position: relative;
            display: flex;
            align-items: center;
            height: 0.8rem;
            padding: 0 0.32rem;
            color: #ed6a0c;
            font-size: 0.28rem;
            line-height: 0.48rem;
            background-color: #fffbe8;
        }

        .van-notice-bar__left-icon,
        .van-notice-bar__right-icon {
            min-width: 0.48rem;
            font-size: 0.32rem;
        }

        .van-notice-bar__right-icon {
            text-align: right;
            cursor: pointer;
        }

        .van-notice-bar__wrap {
            position: relative;
            display: flex;
            flex: 1;
            align-items: center;
            height: 100%;
            overflow: hidden;
        }

        .van-notice-bar__content {
            position: absolute;
            white-space: nowrap;
            transition-timing-function: linear;
        }

        .van-notice-bar__content.van-ellipsis {
            max-width: 100%;
        }

        .van-notice-bar--wrapable {
            height: auto;
            padding: 0.16rem 0.32rem;
        }

        .van-notice-bar--wrapable .van-notice-bar__wrap {
            height: auto;
        }

        .van-notice-bar--wrapable .van-notice-bar__content {
            position: relative;
            white-space: normal;
            word-wrap: break-word;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-stepper {
            font-size: 0;
            user-select: none;
        }

        .van-stepper__minus,
        .van-stepper__plus {
            position: relative;
            box-sizing: border-box;
            width: 0.56rem;
            height: 0.56rem;
            margin: 0;
            padding: 0;
            color: #f3f3f3;
            vertical-align: middle;
            background-color: #23252e;
            border: 0;
            cursor: pointer;
        }

        .van-stepper__minus::before,
        .van-stepper__plus::before {
            width: 50%;
            height: 0.02rem;
        }

        .van-stepper__minus::after,
        .van-stepper__plus::after {
            width: 0.02rem;
            height: 50%;
        }

        .van-stepper__minus::before,
        .van-stepper__plus::before,
        .van-stepper__minus::after,
        .van-stepper__plus::after {
            position: absolute;
            top: 50%;
            left: 50%;
            background-color: currentColor;
            transform: translate(-50%, -50%);
            content: '';
        }

        .van-stepper__minus:active,
        .van-stepper__plus:active {
            background-color: #e8e8e8;
        }

        .van-stepper__minus--disabled,
        .van-stepper__plus--disabled {
            color: #c8c9cc;
            background-color: #0D0F13;
            cursor: not-allowed;
        }

        .van-stepper__minus--disabled:active,
        .van-stepper__plus--disabled:active {
            background-color: #0D0F13;
        }

        .van-stepper__minus {
            border-radius: 0.08rem 0 0 0.08rem;
        }

        .van-stepper__minus::after {
            display: none;
        }

        .van-stepper__plus {
            border-radius: 0 0.08rem 0.08rem 0;
        }

        .van-stepper__input {
            box-sizing: border-box;
            width: 0.64rem;
            height: 0.56rem;
            margin: 0 0.04rem;
            padding: 0;
            color: #f3f3f3;
            font-size: 0.28rem;
            line-height: normal;
            text-align: center;
            vertical-align: middle;
            background-color: #23252e;
            border: 0;
            border-width: 0.02rem 0;
            border-radius: 0;
            -webkit-appearance: none;
        }

        .van-stepper__input:disabled {
            color: #c8c9cc;
            background-color: #23252e;
            -webkit-text-fill-color: #c8c9cc;
            opacity: 1;
        }

        .van-stepper__input:read-only {
            cursor: default;
        }

        .van-stepper--round .van-stepper__input {
            background-color: transparent;
        }

        .van-stepper--round .van-stepper__plus,
        .van-stepper--round .van-stepper__minus {
            border-radius: 100%;
        }

        .van-stepper--round .van-stepper__plus:active,
        .van-stepper--round .van-stepper__minus:active {
            opacity: 0.7;
        }

        .van-stepper--round .van-stepper__plus--disabled,
        .van-stepper--round .van-stepper__minus--disabled,
        .van-stepper--round .van-stepper__plus--disabled:active,
        .van-stepper--round .van-stepper__minus--disabled:active {
            opacity: 0.3;
        }

        .van-stepper--round .van-stepper__plus {
            color: #fff;
            background-color: #ee0a24;
        }

        .van-stepper--round .van-stepper__minus {
            color: #ee0a24;
            background-color: #fff;
            border: 0.02rem solid #ee0a24;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-cell-group {
            background-color: #fff;
        }

        .van-cell-group--inset {
            margin: 0 0.32rem;
            overflow: hidden;
            border-radius: 0.16rem;
        }

        .van-cell-group__title {
            padding: 0.32rem 0.32rem 0.16rem;
            color: #969799;
            font-size: 0.28rem;
            line-height: 0.32rem;
        }

        .van-cell-group__title--inset {
            padding: 0.32rem 0.32rem 0.16rem 0.64rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-pull-refresh {
            overflow: hidden;
            user-select: none;
        }

        .van-pull-refresh__track {
            position: relative;
            height: 100%;
            transition-property: transform;
        }

        .van-pull-refresh__head {
            position: absolute;
            left: 0;
            width: 100%;
            height: 1rem;
            overflow: hidden;
            color: #969799;
            font-size: 0.28rem;
            line-height: 1rem;
            text-align: center;
            transform: translateY(-100%);
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-list__loading,
        .van-list__finished-text,
        .van-list__error-text {
            color: #969799;
            font-size: 0.28rem;
            line-height: 1rem;
            text-align: center;
        }

        .van-list__placeholder {
            height: 0;
            pointer-events: none;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-switch {
            position: relative;
            display: inline-block;
            box-sizing: content-box;
            width: 2em;
            height: 1em;
            font-size: 0.6rem;
            background-color: #fff;
            border: 0.02rem solid rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .van-switch__node {
            position: absolute;
            top: 0;
            left: 0;
            width: 1em;
            height: 1em;
            font-size: inherit;
            background-color: #fff;
            border-radius: 100%;
            box-shadow: 0 0.06rem 0.02rem 0 rgba(0, 0, 0, 0.05), 0 0.04rem 0.04rem 0 rgba(0, 0, 0, 0.1), 0 0.06rem 0.06rem 0 rgba(0, 0, 0, 0.05);
            transition: transform 0.3s cubic-bezier(0.3, 1.05, 0.4, 1.05);
        }

        .van-switch__loading {
            top: 25%;
            left: 25%;
            width: 50%;
            height: 50%;
            line-height: 1;
        }

        .van-switch--on {
            background-color: #1989fa;
        }

        .van-switch--on .van-switch__node {
            transform: translateX(1em);
        }

        .van-switch--on .van-switch__loading {
            color: #1989fa;
        }

        .van-switch--disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }

        .van-switch--loading {
            cursor: default;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-progress {
            position: relative;
            height: 0.08rem;
            background: #ebedf0;
            border-radius: 0.08rem;
        }

        .van-progress__portion {
            position: absolute;
            left: 0;
            height: 100%;
            background: #1989fa;
            border-radius: inherit;
        }

        .van-progress__pivot {
            position: absolute;
            top: 50%;
            box-sizing: border-box;
            min-width: 3.6em;
            padding: 0 0.1rem;
            color: #fff;
            font-size: 0.2rem;
            line-height: 1.6;
            text-align: center;
            word-break: keep-all;
            background-color: #1989fa;
            border-radius: 1em;
            transform: translate(0, -50%);
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-count-down {
            color: #f3f3f3;
            font-size: 0.28rem;
            line-height: 0.4rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-action-sheet {
            display: flex;
            flex-direction: column;
            max-height: 80%;
            overflow: hidden;
            color: #f3f3f3;
        }

        .van-action-sheet__content {
            flex: 1 auto;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .van-action-sheet__item,
        .van-action-sheet__cancel {
            display: block;
            width: 100%;
            padding: 0.28rem 0.32rem;
            font-size: 0.32rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-action-sheet__item {
            line-height: 0.44rem;
        }

        .van-action-sheet__item--loading,
        .van-action-sheet__item--disabled {
            color: #c8c9cc;
        }

        .van-action-sheet__item--loading:active,
        .van-action-sheet__item--disabled:active {
            background-color: transparent;
        }

        .van-action-sheet__item--disabled {
            cursor: not-allowed;
        }

        .van-action-sheet__item--loading {
            cursor: default;
        }

        .van-action-sheet__cancel {
            flex-shrink: 0;
            box-sizing: border-box;
            color: #646566;
        }

        .van-action-sheet__subname {
            margin-top: 0.16rem;
            color: #969799;
            font-size: 0.24rem;
            line-height: 0.36rem;
        }

        .van-action-sheet__gap {
            display: block;
            height: 0.16rem;
            background-color: #0D0F13;
        }

        .van-action-sheet__header {
            flex-shrink: 0;
            font-weight: 500;
            font-size: 0.32rem;
            line-height: 0.96rem;
            text-align: center;
        }

        .van-action-sheet__description {
            position: relative;
            flex-shrink: 0;
            padding: 0.4rem 0.32rem;
            color: #969799;
            font-size: 0.28rem;
            line-height: 0.4rem;
            text-align: center;
        }

        .van-action-sheet__description::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            right: 0.32rem;
            bottom: 0;
            left: 0.32rem;
            border-bottom: 0.02rem solid #4C5361;
            transform: scaleY(0.5);
        }

        .van-action-sheet__loading-icon .van-loading__spinner {
            width: 0.44rem;
            height: 0.44rem;
        }

        .van-action-sheet__close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            padding: 0 0.32rem;
            color: #c8c9cc;
            font-size: 0.44rem;
            line-height: inherit;
        }

        .van-action-sheet__close:active {
            color: #969799;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-goods-action-button {
            flex: 1;
            height: 0.8rem;
            font-weight: 500;
            font-size: 0.28rem;
            border: none;
            border-radius: 0;
        }

        .van-goods-action-button--first {
            margin-left: 0.1rem;
            border-top-left-radius: 19.98rem;
            border-bottom-left-radius: 19.98rem;
        }

        .van-goods-action-button--last {
            margin-right: 0.1rem;
            border-top-right-radius: 19.98rem;
            border-bottom-right-radius: 19.98rem;
        }

        .van-goods-action-button--warning {
            background: linear-gradient(to right, #ffd01e, #ff8917);
        }

        .van-goods-action-button--danger {
            background: linear-gradient(to right, #ff6034, #ee0a24);
        }

        <blade media|%20(max-width%3A%20321px)%20%7B%0D>.van-goods-action-button {
            font-size: 0.26rem;
        }
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-goods-action {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            align-items: center;
            box-sizing: content-box;
            height: 1rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff;
        }

        .van-goods-action--unfit {
            padding-bottom: 0;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-dialog {
            position: fixed;
            top: 45%;
            left: 50%;
            width: 6.4rem;
            overflow: hidden;
            font-size: 0.32rem;
            background-color: rgba(30, 33, 46, 0.5);
            border-radius: 0.32rem;
            transform: translate3d(-50%, -50%, 0);
            backface-visibility: hidden;
            transition: 0.3s;
            transition-property: transform, opacity;
        }

        <blade media|%20(max-width%3A%20321px)%20%7B%0D>.van-dialog {
            width: 90%;
        }
        }

        .van-dialog__header {
            padding-top: 0.48rem;
            font-weight: 500;
            line-height: 0.48rem;
            text-align: center;
        }

        .van-dialog__header--isolated {
            padding: 0.48rem 0;
        }

        .van-dialog__content--isolated {
            display: flex;
            align-items: center;
            min-height: 2.08rem;
        }

        .van-dialog__message {
            flex: 1;
            max-height: 60vh;
            padding: 0.52rem 0.48rem;
            overflow-y: auto;
            font-size: 0.28rem;
            line-height: 0.4rem;
            white-space: pre-wrap;
            text-align: center;
            word-wrap: break-word;
            -webkit-overflow-scrolling: touch;
        }

        .van-dialog__message--has-title {
            padding-top: 0.16rem;
            color: #646566;
        }

        .van-dialog__message--left {
            text-align: left;
        }

        .van-dialog__message--right {
            text-align: right;
        }

        .van-dialog__footer {
            display: flex;
            overflow: hidden;
            user-select: none;
        }

        .van-dialog__confirm,
        .van-dialog__cancel {
            flex: 1;
            height: 0.96rem;
            margin: 0;
            border: 0;
        }

        .van-dialog__confirm,
        .van-dialog__confirm:active {
            color: #ee0a24;
        }

        .van-dialog--round-button .van-dialog__footer {
            position: relative;
            height: auto;
            padding: 0.16rem 0.48rem 0.32rem;
        }

        .van-dialog--round-button .van-dialog__message {
            padding-bottom: 0.32rem;
            color: #f3f3f3;
        }

        .van-dialog--round-button .van-dialog__confirm,
        .van-dialog--round-button .van-dialog__cancel {
            height: 0.72rem;
        }

        .van-dialog--round-button .van-dialog__confirm {
            color: #fff;
        }

        .van-dialog-bounce-enter {
            transform: translate3d(-50%, -50%, 0) scale(0.7);
            opacity: 0;
        }

        .van-dialog-bounce-leave-active {
            transform: translate3d(-50%, -50%, 0) scale(0.9);
            opacity: 0;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .van-skeleton {
            display: flex;
            padding: 0 0.32rem;
        }

        .van-skeleton__avatar {
            flex-shrink: 0;
            width: 0.64rem;
            height: 0.64rem;
            margin-right: 0.32rem;
            background-color: #23252e;
        }

        .van-skeleton__avatar--round {
            border-radius: 19.98rem;
        }

        .van-skeleton__content {
            width: 100%;
        }

        .van-skeleton__avatar+.van-skeleton__content {
            padding-top: 0.16rem;
        }

        .van-skeleton__row,
        .van-skeleton__title {
            height: 0.32rem;
            background-color: #23252e;
        }

        .van-skeleton__title {
            width: 40%;
            margin: 0;
        }

        .van-skeleton__row:not(:first-child) {
            margin-top: 0.24rem;
        }

        .van-skeleton__title+.van-skeleton__row {
            margin-top: 0.4rem;
        }

        .van-skeleton--animate {
            animation: van-skeleton-blink 1.2s ease-in-out infinite;
        }

        .van-skeleton--round .van-skeleton__row,
        .van-skeleton--round .van-skeleton__title {
            border-radius: 19.98rem;
        }

        <blade keyframes|%20van-skeleton-blink%20%7B%0D>50% {
            opacity: 0.6;
        }
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    
    <style type="text/css">
        [data-v-b149b182] .head {
            background: url(/static/img/bg_login.d4d61e22.png) no-repeat top center !important;
            background-size: 100% auto !important;
        }

        .bg[data-v-b149b182] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(/static/img/bg_login.d4d61e22.png) no-repeat top center;
            background-size: cover;
        }

        .cache_account[data-v-b149b182] {
            display: flex;
            align-items: center;
        }

        .cache_account img[data-v-b149b182] {
            width: 0.32rem;
            height: 0.32rem;
            margin-right: 0.1rem;
        }

        .cache_account span[data-v-b149b182] {
            color: #FFF;
            font-size: 0.28rem;
        }

        .container[data-v-b149b182] {
            color: #ffffff;
        }

        .logo[data-v-b149b182] {
            padding: 0.6rem 0;
        }

        .info[data-v-b149b182] {
            margin-top: 0.244rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .info .flex1[data-v-b149b182] {
            text-align: right;
        }

        .go[data-v-b149b182] {
            margin-top: 0.65rem;
        }

        .txt[data-v-b149b182] {
            text-align: center;
            margin-top: 0.24rem;
        }

        .footers[data-v-b149b182] {
            text-align: center;
            padding: 0.24rem 0;
        }

        .footers[data-v-b149b182] .van-checkbox__label {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .footers[data-v-b149b182] .van-checkbox {
            justify-content: center;
        }

        .logo[data-v-b149b182] {
            text-align: center;
        }

        .logo img[data-v-b149b182] {
            width: 2.4rem;
        }

        .van-field__word-num[data-v-b149b182] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-b149b182]:active,
        .van-action-sheet__cancel[data-v-b149b182]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-b149b182] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-b149b182] {
            max-width: 8.5rem;
        }

    </style>
   
    <style type="text/css">
        .page[data-v-37526a6c] {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(8.99deg, #00ab82 10.12%, #f1f1f1 62.22%);
            justify-content: space-between;
        }

        .page-header[data-v-37526a6c] {
            height: 1.2rem;
            z-index: 56;
        }

        .page-header.fixed[data-v-37526a6c] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .page-footer[data-v-37526a6c] {
            position: absolute;
            bottom: 0;
            left: 0;
            min-height: 1.5rem !important;
            width: 100%;
            min-height: 2rem;
            max-width: 8.5rem;
            z-index: 58;
            background: ##068475;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
        }

        .page-container[data-v-37526a6c] {
            position: relative;
            z-index: 10;
            flex: 1;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            background-color: ;
        }

        .page .back-top[data-v-37526a6c] {
            position: absolute;
            bottom: 3rem;
            right: 0.1rem;
            z-index: 99;
            width: 1.4rem;
            height: 1.6rem;
        }

        .van-field__word-num[data-v-37526a6c] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-37526a6c]:active,
        .van-action-sheet__cancel[data-v-37526a6c]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-37526a6c] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-37526a6c] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .w856 .head[data-v-0ff1fb10] {
            width: 100%;
        }

        .flex[data-v-0ff1fb10] {
            align-items: center;
        }

        .head[data-v-0ff1fb10] {
            /* background: #e9f5f4; */
            height: 1.2rem;
            position: relative;
            transition: background-color 0.3s;
        }

        .head.on[data-v-0ff1fb10] {
            background: #020202 !important;
        }

        .head .n_home[data-v-0ff1fb10] {
            font-size: 0.32rem;
            line-height: 0.44rem;
            font-weight: 500;
            color: #ffffff;
        }

        .head .name[data-v-0ff1fb10] {
            font-size: 0.32rem;
            font-weight: 500;
            color: #ffffff;
            position: absolute;
            width: 70%;
            text-align: center;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 50%;
            height: 100%;
            margin-left: -35%;
            display: flex;
            z-index: 0;
        }

        .head .notice[data-v-0ff1fb10] {
            position: relative;
        }

        .head .notice img[data-v-0ff1fb10] {
            height: 0.4rem;
        }

        .head .notice span[data-v-0ff1fb10] {
            position: absolute;
            background: #ee594b;
            border-radius: 50%;
            box-shadow: 0 0.04rem 0.08rem 0 rgba(245, 56, 49, 0.31);
            color: #fff;
            font-size: 0.2rem;
            padding: 0 0.08rem;
            top: -0.1rem;
            right: -0.1rem;
        }

        .head .back img[data-v-0ff1fb10] {
            height: 0.36rem;
        }

        .head img[data-v-0ff1fb10] {
            height: 0.4rem;
            vertical-align: middle;
        }

        .head .lang[data-v-0ff1fb10],
        .head .notice[data-v-0ff1fb10] {
            margin-left: 0.28rem;
        }

        .head .notice[data-v-0ff1fb10] {
            position: relative;
        }

        .head .notice .count[data-v-0ff1fb10] {
            min-width: 0.32rem;
            min-height: 0.32rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 0;
            top: 0;
            transform: translate(50%, -40%);
            background: #e72a2a;
            padding: 0.02rem 0.04rem;
            line-height: 1.2;
            border-radius: 50%;
            color: #fff;
            font-size: 0.2rem;
        }

        .head .str[data-v-0ff1fb10] {
            margin-left: 0.26rem;
            font-size: 0.28rem;
            font-weight: 500;
            color: #fff;
            line-height: 0.4rem;
        }

        .head .str[data-v-0ff1fb10] img {
            height: 0.4rem;
            vertical-align: top;
        }

        .logo img[data-v-0ff1fb10] {
            height: 60px;
        }

        .van-field__word-num[data-v-0ff1fb10] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-0ff1fb10]:active,
        .van-action-sheet__cancel[data-v-0ff1fb10]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-0ff1fb10] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-0ff1fb10] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .input_big_box[data-v-63783c8c] {
            position: relative;
            --themeColor: #00fc83;
        }

        .input_big_box .title_box[data-v-63783c8c] {
            background: transparent;
            z-index: 2;
        }

        .input_big_box .title_box .title[data-v-63783c8c] {
            line-height: 1.1;
            font-size: 0.28rem;
            color: #fff;
        }

        .input_big_box .inp_content_box[data-v-63783c8c] {
            margin-top: 0.2rem;
            height: 0.96rem;
            padding: 0 0.32rem;
            color: #fff;
            border-radius: 0.16rem;
            display: flex;
            align-items: center;
            border: 0.02rem solid #252930;
        }

        .input_big_box .inp_content_box[data-v-63783c8c]:focus-within {
            border: 0.02rem solid var(--themeColor);
        }

        .input_big_box .inp_content_box .input[data-v-63783c8c] {
            flex: 1;
        }

        .input_big_box .inp_content_box .input input[data-v-63783c8c] {
            height: 0.48rem;
            background: none;
            border: 0;
            width: 100%;
            color: #fff;
        }

        .input_big_box .inp_content_box .input input[data-v-63783c8c]::placeholder {
            color: #4c5361;
            font-size: 0.28rem;
        }

        .input_big_box .inp_content_box .inp_right[data-v-63783c8c] {
            margin-left: 0.2rem;
        }

        .user .inp_content_box[data-v-63783c8c] {
            background: transparent;
            position: relative;
            z-index: 10;
            border-color: transparent;
        }

        .user .inp_content_box[data-v-63783c8c]:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0.16rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(0.2rem);
            z-index: -1;
        }

        .user .inp_content_box .input input[data-v-63783c8c]::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .wallet .inp_content_box[data-v-63783c8c] {
            background: #15181f;
            border-color: transparent;
        }

        .wallet .inp_content_box input[data-v-63783c8c]::placeholder {
            color: #4C5361 !important;
        }

        .eye[data-v-63783c8c] {
            width: 0.4rem;
        }

        .van-field__word-num[data-v-63783c8c] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-63783c8c]:active,
        .van-action-sheet__cancel[data-v-63783c8c]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-63783c8c] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-63783c8c] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        [data-v-a84105cc] .van-popup {
            margin-left: -0.4rem;
        }

        .area_pop[data-v-a84105cc] {
            color: #FFF;
        }

        .area_pop .title[data-v-a84105cc] {
            font-size: 0.32rem;
            text-align: center;
            padding: 0.3rem;
        }

        .area_pop .title .abs[data-v-a84105cc] {
            right: 0.3rem;
            top: 0.35rem;
        }

        .area_pop .title .abs i[data-v-a84105cc] {
            font-size: 0.32rem;
        }

        .area_pop .tip[data-v-a84105cc] {
            padding: 0.2rem 0.3rem;
            border-top: 0.02rem solid #eee;
            display: none;
        }

        .area_pop .so[data-v-a84105cc] {
            height: 0.8rem;
            background: #15181f;
            margin: 0 0.3rem;
            border-radius: 0.12rem;
            padding: 0 0.1rem;
        }

        .area_pop .so .ico[data-v-a84105cc] {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAqCAYAAAAnH9IiAAAACXBIWXMAACE4AAAhOAFFljFgAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANYSURBVHgB1VmLcdswDIU0gTcoO0HdCapMkHSCphNYnqDKBLYn6HUCOxOYmSDuBFU38AR2ARlSKBKkPqdP8+50EimJfARAEgAj6InNZrPA2xKvhyiKPvDzgi/CGa+c7tfr9QXver1eaxgAEXQEkk3gRvSbQbAtaCAHHMQOB3CCnmhNmsgi0R/4mMAw0Ej+O5LPoSMaSZMZMNkUxsEWyT8h+XPbH4KkkbBCwkd8VBBGjtcJO/8LNxMgLAxbb/wf/71rK3UvaSS8ZMI+u9X4/nC5XJ6bOqPB4600L+X5jIh/bWPrUQ/COduihh7Ath8D5M8s8SDxSGjUaxI86wexbewnY/I2iPjnkPYiqyGyw1dwCZ9ZdRoGBPZHS+dPcDWaM3FxcsZmwaO2UmUaBga2SWv2HbxN3hLKo4UClaTZLP7YH7CEDzAieA84Cn2LwqokzWqyf3oamzCBiNF8set90i4kzavFq/UuT9P0I0yI7XZLmlZmnSTtUtLOioCDyGBi0FIqVD/YFQVpJHhv1eer1eoXTAyWqDbryDFjj7JCzF7bwvowg5mA0n62qkoXuAJJOrF/xK35BeaDNPFrJhKjVL9YH+R93MWhwH3nVrUyCyTpmmmgen7D/Kj5HijYT2aZSCvrhxxmBru4JuoTEdx9v7UzPiJsDg7pdwciHRzVTAhqXyKtYGZwmGYiNwtEOjhTZ8LSKtclLcxUxTHdLOC+lVnHyZ4KJOnGHWhiJEKdNguledTELzhQk0Hwoc+Oa0pxGIrf9ugSdqQmBUXq4C4EjiXEvhdSJDM2pEhFimgK0pIfi1AYSWxgIux2Oymo1lIOpNoRKR4U2kqnMBNKJWD/mV3viWTeSAeCyz3FkDASOD6VTJEWB3F3tn2PDFwvjxI4R5IGDAwjdSCRK/t1BFYjzSuJlDyhBvZsd4OA5ktDgrPs1yHeKwFJMWTfwJelS+aghNdVmtiuNxOTTanePQRSs0Se4sk2qd44ju+xYzKxxPNZqWXwCKwi/l8m1QOaLjKqrY4v8EZp2RWMAF6xMjtD6iOO36+7HBQptsUEhoHmXKEGf58OcSw/9jmSI3Wn7FR1PpJjP+fQNnVszq0yqd+ZtNVgArezFMqd0AAU1A8/6SptnfybU5dTLB/+AYy7xNVzTTGdAAAAAElFTkSuQmCC) no-repeat center center;
            width: 0.5rem;
            height: 0.8rem;
            background-size: 0.3rem auto;
        }

        .area_pop .so .flexs[data-v-a84105cc] {
            margin-left: 0.16rem;
        }

        .area_pop .so input[data-v-a84105cc] {
            width: 100%;
            background: none;
            border: 0;
        }

        .area_pop .so input[data-v-a84105cc]::placeholder {
            color: #909090;
        }

        .area_pop .so .closes[data-v-a84105cc] {
            margin-right: 0.1rem;
        }

        .area_pop .so .closes img[data-v-a84105cc] {
            height: 0.32rem;
        }

        .area_pop ul[data-v-a84105cc] {
            height: 7rem;
            overflow: auto;
            margin: 0.2rem 0.3rem;
        }

        .area_pop ul li[data-v-a84105cc] {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.1);
            padding: 0.28rem 0;
        }

        .area_pop ul li[data-v-a84105cc]:last-child {
            border-bottom: none;
        }

        .area_pop ul li .ico[data-v-a84105cc] {
            margin-right: 0.2rem;
        }

        .area_pop ul li .ico img[data-v-a84105cc] {
            height: 0.32rem;
        }

        .van-field__word-num[data-v-a84105cc] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-a84105cc]:active,
        .van-action-sheet__cancel[data-v-a84105cc]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-a84105cc] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-a84105cc] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .input_big_box[data-v-fa37b51c] {
            position: relative;
            --themeColor: #00fc83;
        }

        .input_big_box .title_box[data-v-fa37b51c] {
            background: transparent;
            z-index: 2;
        }

        .input_big_box .title_box .title[data-v-fa37b51c] {
            line-height: 1.1;
            font-size: 0.28rem;
            color: #fff;
        }

        .input_big_box .inp_content_box[data-v-fa37b51c] {
            margin-top: 0.2rem;
            height: 0.96rem;
            padding: 0 0.32rem;
            color: #fff;
            border-radius: 0.16rem;
            display: flex;
            align-items: center;
            border: 0.02rem solid #252930;
        }

        .input_big_box .inp_content_box[data-v-fa37b51c]:focus-within {
            border: 0.02rem solid var(--themeColor);
        }

        .input_big_box .inp_content_box .input[data-v-fa37b51c] {
            flex: 1;
        }

        .input_big_box .inp_content_box .input input[data-v-fa37b51c] {
            height: 0.48rem;
            background: none;
            border: 0;
            width: 100%;
            color: #fff;
        }

        .input_big_box .inp_content_box .input input[data-v-fa37b51c]::placeholder {
            color: #4c5361;
            font-size: 0.28rem;
        }

        .input_big_box .inp_content_box .inp_right[data-v-fa37b51c] {
            margin-left: 0.2rem;
        }

        .user .inp_content_box[data-v-fa37b51c] {
            background: transparent;
            position: relative;
            z-index: 10;
            border-color: transparent;
        }

        .user .inp_content_box[data-v-fa37b51c]:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0.16rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(0.2rem);
            z-index: -1;
        }

        .user .inp_content_box .input input[data-v-fa37b51c]::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .wallet .inp_content_box[data-v-fa37b51c] {
            background: #15181f;
            border-color: transparent;
        }

        .wallet .inp_content_box input[data-v-fa37b51c]::placeholder {
            color: #4C5361 !important;
        }

        .phone_code[data-v-fa37b51c] {
            color: #fff;
            font-size: 0.28rem;
            display: flex;
            align-items: center;
            margin-right: 0.12rem;
        }

        .phone_code .arrow[data-v-fa37b51c] {
            margin-left: 0.06rem;
        }

        .van-field__word-num[data-v-fa37b51c] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-fa37b51c]:active,
        .van-action-sheet__cancel[data-v-fa37b51c]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-fa37b51c] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-fa37b51c] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .income-box[data-v-aa0ccfea] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.12rem;
            line-height: 1.2;
            padding: 0.24rem 0.32rem 0.32rem;
        }

        .income-box .income[data-v-aa0ccfea] {
            flex: 1;
        }

        .income-box .income .head[data-v-aa0ccfea] {
            display: flex;
            align-items: center;
        }

        .income-box .income .head img[data-v-aa0ccfea] {
            width: 0.4rem;
            height: 0.4rem;
            margin-right: 0.1rem;
        }

        .income-box .income .head .title[data-v-aa0ccfea] {
            color: #fff;
            font-size: 0.24rem;
        }

        .income-box .income .amount[data-v-aa0ccfea] {
            margin-top: 0.16rem;
            color: #fff;
            font-size: 0.32rem;
        }

        .van-field__word-num[data-v-aa0ccfea] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-aa0ccfea]:active,
        .van-action-sheet__cancel[data-v-aa0ccfea]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-aa0ccfea] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-aa0ccfea] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .home-router[data-v-1f37bdab] {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 0.22rem;
            line-height: 1.2;
        }

        .home-router .router[data-v-1f37bdab] {
            flex: 1;
            padding: 0.32rem 0.28rem;
            display: flex;
            flex-direction: column;
        }

        .home-router .router .title[data-v-1f37bdab] {
            color: #fff;
            font-size: 0.28rem;
            margin-bottom: 0.24rem;
        }

        .home-router .router .content[data-v-1f37bdab] {
            display: flex;
            align-items: stretch;
            flex: 1;
        }

        .home-router .router .content .left[data-v-1f37bdab] {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .home-router .router .content .left .level-box img[data-v-1f37bdab] {
            height: 0.48rem;
        }

        .home-router .router .content .left .level-box span[data-v-1f37bdab] {
            color: #fff;
            font-size: 0.32rem;
            margin-left: 0.2rem;
        }

        .home-router .router .content .left .time[data-v-1f37bdab] {
            margin-top: 0.24rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .home-router .router .content .left .time span[data-v-1f37bdab] {
            color: #fff;
        }

        .home-router .router .content .left .text[data-v-1f37bdab] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .home-router .router .content .left .bot[data-v-1f37bdab] {
            padding-top: 0.2rem;
            margin-top: auto;
        }

        .home-router .router .content .left .bot .move-up[data-v-1f37bdab] {
            width: fit-content;
            border-radius: 0.8rem;
            border: 0.02rem solid #00fc83;
            color: #00fc83;
            font-size: 0.24rem;
            padding: 0.08rem 0.16rem;
        }

        .home-router .router .content .left .bot img[data-v-1f37bdab] {
            height: 0.4rem;
        }

        .home-router .router .content .right[data-v-1f37bdab] {
            flex: 0 0 1.5rem;
            height: fit-content;
        }

        .home-router .router .content .right img[data-v-1f37bdab] {
            width: 100%;
            height: auto;
        }

        .van-field__word-num[data-v-1f37bdab] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-1f37bdab]:active,
        .van-action-sheet__cancel[data-v-1f37bdab]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-1f37bdab] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-1f37bdab] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .home-task[data-v-0b286867] {
            border-radius: 0.2rem;
            background: url(/static/img/bg-task.028669fc.png) no-repeat;
            background-size: 100% 100%;
            padding: 0.4rem 0.28rem;
        }

        .home-task .title[data-v-0b286867] {
            color: #fff;
            font-size: 0.28rem;
        }

        .home-task .task-lis[data-v-0b286867] {
            margin-top: 0.32rem;
            display: flex;
            align-items: center;
            gap: 0.12rem;
        }

        .home-task .task-lis .task[data-v-0b286867] {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .home-task .task-lis .task img[data-v-0b286867] {
            width: 0.64rem;
            height: 0.64rem;
            margin-right: 0.2rem;
        }

        .home-task .task-lis .task .info .name[data-v-0b286867] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .home-task .task-lis .task .info .value[data-v-0b286867] {
            margin-top: 0.12rem;
            color: #fff;
            font-size: 0.28rem;
        }

        .home-task .task-lis .task .info .value span[data-v-0b286867] {
            color: #00fc83;
        }

        .van-field__word-num[data-v-0b286867] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-0b286867]:active,
        .van-action-sheet__cancel[data-v-0b286867]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-0b286867] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-0b286867] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .home-team[data-v-7fb36d82] {
            border-radius: 0.2rem;
            background: rgba(23, 26, 36, 0.6);
            padding: 0.4rem 0.28rem;
        }

        .home-team .head[data-v-7fb36d82] {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .home-team .head .title[data-v-7fb36d82] {
            color: #fff;
            font-size: 0.28rem;
        }

        .home-team .head img[data-v-7fb36d82] {
            width: 0.52rem;
            height: 0.36rem;
        }

        .home-team .info-list[data-v-7fb36d82] {
            margin-top: 0.32rem;
            display: flex;
            align-items: center;
            gap: 0.12rem;
        }

        .home-team .info-list .info[data-v-7fb36d82] {
            flex: 1;
        }

        .home-team .info-list .info[data-v-7fb36d82]:nth-of-type(2) {
            text-align: center;
        }

        .home-team .info-list .info[data-v-7fb36d82]:nth-of-type(3) {
            text-align: right;
        }

        .home-team .info-list .info .name[data-v-7fb36d82] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .home-team .info-list .info .value[data-v-7fb36d82] {
            margin-top: 0.16rem;
            color: #fff;
            font-size: 0.32rem;
        }

        .van-field__word-num[data-v-7fb36d82] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-7fb36d82]:active,
        .van-action-sheet__cancel[data-v-7fb36d82]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-7fb36d82] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-7fb36d82] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .home-partner[data-v-4eabb456] {
            line-height: 1.2;
            position: relative;
            z-index: 1;
        }

        .home-partner .head[data-v-4eabb456] {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .home-partner .head .title[data-v-4eabb456] {
            color: #fff;
            font-size: 0.32rem;
        }

        .home-partner .info-list[data-v-4eabb456] {
            margin-top: 0.16rem;
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .home-partner .info-list .info[data-v-4eabb456] {
            background: #020202;
            width: 32%;
            border-radius: 0.16rem;
            overflow: hidden;
            border: 0.02rem solid #252930;
            text-align: center;
        }

        .home-partner .info-list .info[data-v-4eabb456]:nth-of-type(n + 4) {
            margin-top: 0.2rem;
        }

        .home-partner .info-list .info .icon[data-v-4eabb456] {
            width: 100%;
            padding: 0.22rem 0;
        }

        .home-partner .info-list .info .icon img[data-v-4eabb456] {
            width: auto;
            height: 0.56rem;
        }

        .home-partner .info-list .info .name[data-v-4eabb456] {
            background: #0f1117;
            color: #fff;
            font-size: 0.22rem;
            padding: 0.16rem 0.08rem;
        }

        .van-field__word-num[data-v-4eabb456] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-4eabb456]:active,
        .van-action-sheet__cancel[data-v-4eabb456]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-4eabb456] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-4eabb456] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .skeleton-con[data-v-546bdba2] {
            background: #020202;
        }

        .banner[data-v-546bdba2] {
            width: 100%;
            height: 3rem;
            margin-bottom: 0.3rem;
            padding: 0;
        }

        .banner[data-v-546bdba2] .van-skeleton__avatar {
            width: 100%;
            height: 100%;
            border-radius: 0;
        }

        .nvas[data-v-546bdba2] {
            padding: 0.2rem 0;
            display: flex;
            flex-wrap: wrap;
        }

        .nvas .item[data-v-546bdba2] {
            width: 25%;
            padding: 0.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nvas[data-v-546bdba2] .van-skeleton {
            display: flex;
            flex-direction: column;
        }

        .nvas[data-v-546bdba2] .van-skeleton__avatar {
            border-radius: 0.16rem;
            margin-right: 0;
            width: 0.8rem;
            height: 0.8rem;
        }

        .nvas[data-v-546bdba2] .van-skeleton__title {
            width: 100%;
        }

        .news .list[data-v-546bdba2] {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .news .list .item[data-v-546bdba2] {
            margin-top: 0.3rem;
            width: 48%;
        }

        .news .list .item[data-v-546bdba2] .van-skeleton__avatar {
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            border-radius: 0.32rem;
        }

        .news .list .item[data-v-546bdba2] .van-skeleton__content {
            margin-top: 0.24rem;
        }

        .bot[data-v-546bdba2] {
            margin-top: 0.6rem;
        }

        .van-field__word-num[data-v-546bdba2] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-546bdba2]:active,
        .van-action-sheet__cancel[data-v-546bdba2]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-546bdba2] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-546bdba2] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .income-box[data-v-5e50d7ad] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.12rem;
            line-height: 1.2;
            padding: 0.24rem 0.32rem 0.32rem;
        }

        .income-box .income[data-v-5e50d7ad] {
            flex: 1;
            margin-right: 0.12rem;
        }

        .income-box .income .head[data-v-5e50d7ad] {
            display: flex;
            align-items: center;
        }

        .income-box .income .head img[data-v-5e50d7ad] {
            width: 0.4rem;
            height: 0.4rem;
            margin-right: 0.1rem;
        }

        .income-box .income .head .title[data-v-5e50d7ad] {
            color: #fff;
            font-size: 0.24rem;
        }

        .income-box .income .head .popover[data-v-5e50d7ad] {
            margin-left: 0.1rem;
        }

        .income-box .income .amount[data-v-5e50d7ad] {
            margin: 0.16rem 0;
            color: #fff;
            font-size: 0.32rem;
        }

        .income-box .income .amount[data-v-5e50d7ad]:last-child {
            margin-bottom: 0;
        }

        .income-box .check-btn[data-v-5e50d7ad] {
            border-radius: 1.2rem;
            background: #00FC83;
            padding: 0.16rem 0.32rem;
            color: #020202;
            font-size: 0.26rem;
            line-height: 1.2;
        }

        .van-field__word-num[data-v-5e50d7ad] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-5e50d7ad]:active,
        .van-action-sheet__cancel[data-v-5e50d7ad]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-5e50d7ad] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-5e50d7ad] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .homeLoad-enter-active[data-v-5954443c],
        .homeLoad-leave-active[data-v-5954443c] {
            transition: opacity 0.5s ease-in-out;
        }

        .homeLoad-enter[data-v-5954443c],
        .homeLoad-leave-to[data-v-5954443c] {
            opacity: 0;
        }

        .bg1[data-v-5954443c] {
            position: absolute;
            top: 4rem;
            width: 100%;
            height: auto;
        }

        .rtl[data-v-5954443c] {
            direction: rtl;
        }

        .module[data-v-5954443c] {
            padding: 0 0.32rem;
            margin-top: 0.6rem;
        }

        .module .notice[data-v-5954443c] {
            margin-top: 0.06rem;
            background: none;
            padding: 0.12rem 0;
            min-height: 0.56rem;
            position: relative;
            border-bottom: 0.02rem dashed rgba(255, 255, 255, 0.1);
        }

        .module .notice>div[data-v-5954443c] {
            padding: 0;
        }

        .module .notice .balloon_left[data-v-5954443c] {
            width: 3rem;
            max-width: 5.42rem;
            max-height: 4.17rem;
            position: absolute;
            left: -1.2rem;
            top: 0;
            transform: translate(0, -50%);
            z-index: 10;
        }

        .module .notice .balloon_right[data-v-5954443c] {
            width: 3rem;
            max-width: 5.42rem;
            max-height: 4.17rem;
            position: absolute;
            right: -1.2rem;
            top: 0;
            transform: translate(0, -50%);
            z-index: 10;
        }

        .module .nav2[data-v-5954443c] {
            display: flex;
            text-align: center;
            padding: 0.32rem 0;
            flex-wrap: wrap;
        }

        .module .nav2 li[data-v-5954443c] {
            width: 25%;
            padding: 0 0.12rem;
        }

        .module .nav2 li[data-v-5954443c]:nth-of-type(n + 5) {
            margin-top: 0.2rem;
        }

        .module .nav2 img[data-v-5954443c] {
            width: 0.56rem;
            height: 0.56rem;
        }

        .module .nav2 .ico[data-v-5954443c] {
            margin-bottom: 0.08rem;
        }

        .module .nav2 .n[data-v-5954443c] {
            margin-top: 0.1rem;
            color: #fff;
            font-size: 0.24rem;
        }

        .banner[data-v-5954443c] {
            position: relative;
            margin-top: 0.2rem;
        }

        .banner img[data-v-5954443c] {
            width: 100%;
            border-radius: 0.1rem;
        }

        .banner .one_line[data-v-5954443c] {
            width: fit-content;
            height: 1.2rem;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, -50%);
            z-index: 100;
        }

        .banner .hd[data-v-5954443c] {
            text-align: center;
            margin-top: 0.16rem;
            height: 0.08rem;
        }

        .banner .hd .swiper-hd[data-v-5954443c] {
            display: inline-block;
            height: 0.08rem;
            border-radius: 0.04rem;
            background: rgba(255, 255, 255, 0.2);
        }

        .banner .hd .swiper-hd[data-v-5954443c] span {
            height: 0.08rem;
            background: none !important;
            display: inline-block;
            vertical-align: top;
            border-radius: 0.04rem;
            width: 0.24rem;
        }

        .banner .hd .swiper-hd[data-v-5954443c] .swiper-pagination-bullet-active {
            background: #fff !important;
        }

        .left[data-v-5954443c] {
            height: 0.8rem !important;
            max-width: 200%;
            max-height: 200%;
        }

        .notice-swipe[data-v-5954443c] {
            height: 0.72rem;
            line-height: 0.72rem;
            color: #fff;
        }

        [data-v-5954443c] .van-popup {
            overflow: unset;
            background: none !important;
        }

        [data-v-5954443c] .van-popup--center {
            top: 50%;
        }

        .modal-notice-box[data-v-5954443c] {
            position: relative;
            padding-bottom: 0.8rem;
        }

        .modal-notice-box .modal-notice[data-v-5954443c] {
            position: relative;
            width: 6.54rem;
            padding-bottom: 0.86rem;
            background: #171922;
            border-radius: 0.24rem;
        }

        .modal-notice-box .modal-notice .notice-top img[data-v-5954443c] {
            width: 100%;
            height: auto;
        }

        .modal-notice-box .modal-notice .notice-title[data-v-5954443c] {
            padding: 0.16rem 0.32rem 0.24rem;
            font-size: 0.36rem;
            color: #00fc83;
            font-weight: 600;
            line-height: 0.36rem;
        }

        .modal-notice-box .modal-notice .notice-desc[data-v-5954443c] {
            padding: 0 0.32rem;
            max-height: 5rem;
            overflow-y: scroll;
        }

        .modal-notice-box .modal-notice .notice-desc[data-v-5954443c] p {
            color: #d0d4dd;
            font-size: 0.3rem;
            line-height: 1.2;
        }

        .modal-notice-box .modal-notice .notice-desc[data-v-5954443c] p img {
            width: 100%;
            height: auto;
        }

        .modal-notice-box .close[data-v-5954443c] {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0.56rem;
            height: 0.56rem;
            transform: translateX(-50%);
        }

        .van-field__word-num[data-v-5954443c] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-5954443c]:active,
        .van-action-sheet__cancel[data-v-5954443c]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-5954443c] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-5954443c] {
            max-width: 8.5rem;
        }

    </style>
   
    <style type="text/css">
        .footers[data-v-6c4d8baa] {
            max-width: 10rem;
            width: 100%;
            height: fit-content;
            background: #068475;
            ;
            border-radius: 0.32rem 0.32rem 0 0;
            border-top: 0.02rem solid #068475;
            z-index: 56;
        }

        .footers ul[data-v-6c4d8baa] {
            padding: 0.2rem 0.36rem;
        }

        .footers ul li[data-v-6c4d8baa] {
            width: 20%;
        }

        .footers ul li div img[data-v-6c4d8baa] {
            vertical-align: top;
            height: 0.44rem;
        }

        .footers ul li div img.on[data-v-6c4d8baa] {
            height: 0.96rem;
            width: 0.96rem;
            margin-bottom: -0.1rem;
        }

        .footers ul li div span[data-v-6c4d8baa] {
            display: block;
            margin-top: 0.1rem;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.24rem;
            line-height: 140%;
            letter-spacing: -0.00019rem;
        }

        .footers ul li div.on span[data-v-6c4d8baa] {
            color: #fff;
            opacity: 1;
        }

        .van-field__word-num[data-v-6c4d8baa] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-6c4d8baa]:active,
        .van-action-sheet__cancel[data-v-6c4d8baa]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-6c4d8baa] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-6c4d8baa] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .popover[data-v-e29c081e] {
            width: 0.28rem;
            height: 0.28rem;
        }

        .van-field__word-num[data-v-e29c081e] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-e29c081e]:active,
        .van-action-sheet__cancel[data-v-e29c081e]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-e29c081e] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-e29c081e] {
            max-width: 8.5rem;
        }

    </style>
    
    <style type="text/css">
        .page-video-header {
            height: 1.2rem;
        }

        .page-video-header.absolute {
            position: absolute;
            z-index: 4;
            top: 0;
            right: 0;
            left: 0;
        }

        .page-video-header-tab li.active {
            position: relative;
            color: #fff;
        }

        .page-video-header-tab li.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 25%;
            right: 25%;
            height: 0.04rem;
            background: #fff;
            border-radius: 0.04rem;
        }

        .page-video-header-action {
            position: absolute;
            right: 0.36rem;
        }

        .page-video-header-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 1.2rem;
            height: 1.2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-video-header-back img {
            height: 0.36rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        #anime-btn {
            position: relative;
        }

        #anime-btn::after {
            position: absolute;
            background-color: #fc4f4f;
            border-radius: 0.2rem;
            padding: 0.12rem 0.4rem;
            font-size: 0.44rem;
            cursor: pointer;
            color: #fff;
            user-select: none;
            box-shadow: 0 0.14rem 0.3rem -0.02rem #ccc;
            transition: transform 100ms ease-in;
        }

        #anime-btn:active::after {
            transform: scale(0.9);
        }

        #anime-btn.pumping::after {
            animation: pumping 100ms ease-in-out infinite;
        }

        #anime-btn>.shape {
            --size: 0.16rem;
            position: absolute;
            top: calc(50% - var(--size));
            left: calc(50% - var(--size));
            width: calc(var(--size) * 2);
            height: calc(var(--size) * 2);
            animation: popup var(--d) cubic-bezier(0.08, 0.56, 0.53, 0.98) forwards;
        }

        #anime-btn>.square {
            border-radius: 0.08rem;
            background-color: var(--c);
        }

        #anime-btn>.circle {
            border-radius: 50%;
            background-color: var(--c);
        }

        #anime-btn>.triangle {
            width: 0;
            height: 0;
            background-color: none;
            border-top: var(--size) solid transparent;
            border-bottom: calc(var(--size) * 2) solid var(--c);
            border-left: var(--size) solid transparent;
            border-right: var(--size) solid transparent;
        }

        #anime-btn>.heart {
            --size: 0.12rem;
            background-color: var(--c);
        }

        #anime-btn>.heart::before,
        #anime-btn>.heart::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: var(--c);
            border-radius: 50%;
        }

        #anime-btn>.heart::before {
            left: -50%;
        }

        #anime-btn>.heart::after {
            top: -50%;
        }

        #anime-btn>.star {
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(var(--size) * 4);
            height: calc(var(--size) * 4);
            background: var(--c);
            clip-path: polygon(50% 0%,
                    61% 35%,
                    98% 35%,
                    68% 57%,
                    79% 91%,
                    50% 70%,
                    21% 91%,
                    32% 57%,
                    2% 35%,
                    39% 35%);
        }

        <blade keyframes|%20pumping%20%7B%0D>50% {
            transform: scale(0.95);
        }
        }

        <blade keyframes|%20popup%20%7B%0D>0% {
            opacity: 0;
        }

        60% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: translate(var(--x), var(--y)) rotate(var(--r));
        }
        }

    </style>
    <style type="text/css">
        .action-flat {
            display: flex;
            flex-direction: column;
            width: 0.64rem;
        }

        .action-flat.overlay::after {
            content: '';
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 90;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .action-flat-item {
            margin-top: 0.24rem;
            min-height: 0.8rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }

        .action-flat-item-large {
            position: relative;
            height: 1rem;
        }

        .action-flat-item-large-action {
            position: absolute;
            bottom: 0;
            left: 50%;
            margin-left: -0.2rem;
            width: 0.4rem;
            height: 0.4rem;
        }

        .action-flat-item-large .van-image {
            border-radius: 50%;
            overflow: hidden;
            width: 0.84rem;
            height: 0.84rem;
            border: 0.04rem solid #fff;
        }

        .action-flat-item>img {
            margin-bottom: 0.08rem;
            width: 0.64rem;
            height: 0.64rem;
        }

        .action-flat-guide {
            position: absolute;
            z-index: 99;
            right: 0.48rem;
            min-width: 7em;
            animation: heartbeat 0.3s infinite alternate;
            transform-origin: center;
        }

        .action-flat-guide.guide-1 {
            top: 0;
        }

        .action-flat-guide.guide-2 {
            top: 1.2rem;
        }

        <blade keyframes|%20heartbeat%20%7B%0D>to {
            transform: scale(1.2);
        }
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .comment-item {
            display: flex;
            padding: 0.12rem 0;
        }

        .comment-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .comment-item-avatar {
            width: 0.8rem;
            height: 0.8rem;
            border-radius: 0.8rem;
            overflow: hidden;
            margin-right: 0.2rem;
        }

        .comment-item-avatar-small {
            width: 0.48rem;
            height: 0.48rem;
            border-radius: 0.48rem;
            overflow: hidden;
            margin-right: 0.12rem;
        }

        .comment-item-info {
            flex: 1;
            font-size: 0.24rem;
        }

        .comment-item-info-name {
            display: flex;
            align-items: center;
            margin-bottom: 0.16rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .comment-item-info-comment {
            margin-top: 0.16rem;
            font-size: 0.28rem;
            color: #fff;
        }

        .comment-item-info-time {
            margin-top: 0.16rem;
            color: rgba(255, 255, 255, 0.3);
        }

        .comment-item-info-time span {
            color: rgba(255, 255, 255, 0.72);
        }

        .comment-item-info-action {
            position: relative;
            margin-top: 0.16rem;
            padding-left: 0.6rem;
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.72);
        }

        .comment-item-info-action::after {
            content: '';
            position: absolute;
            top: 0.2rem;
            left: 0;
            width: 0.48rem;
            height: 0.02rem;
            background-color: rgba(217, 217, 217, 0.3);
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .page-video-task-summary {
            margin-bottom: 0.24rem;
            padding: 0 0.32rem;
        }

        .page-video-task-summary-list {
            height: 1.4rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-radius: 0.2rem;
            background: #171b22;
        }

        .page-video-task-summary-list-title {
            margin-bottom: 0.24rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .page-video-task-summary-list-content {
            font-size: 0.28rem;
        }

        .page-video-task-summary-notice {
            margin-top: 0.2rem;
            border-radius: 0.2rem;
            background: rgba(0, 252, 131, 0.08);
        }

        .page-video-task-summary-notice .text-primary {
            margin-left: 0.2rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .page-video-comment-quick {
            position: relative;
            margin-bottom: 0.24rem;
            padding: 0 0.8rem 0 0.28rem;
            height: 0.88rem;
            line-height: 0.88rem;
            font-size: 0.28rem;
            border-radius: 0.16rem;
            border: 0.02rem solid #252930;
        }

        .page-video-comment-quick.selected {
            border-color: #00fc83;
            background: linear-gradient(0deg, rgba(0, 252, 131, 0.1) 0%, rgba(0, 252, 131, 0) 100%);
        }

        .page-video-comment-quick .van-icon {
            position: absolute;
            top: 0.24rem;
            right: 0.28rem;
        }

        .page-video-comment-quick-input {
            position: relative;
            padding: 0.12rem 0.32rem;
            height: 2rem;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            background-color: #020202;
        }

        .page-video-comment-quick-input .van-field__control {
            font-size: 0.28rem;
        }

        .page-video-comment-quick-input .van-button {
            margin-top: 0.16rem;
            width: 6em;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .page-video-comment {
            height: 70vh;
            display: flex;
            flex-direction: column;
            background-color: #0d0f13;
        }

        .page-video-comment-title {
            position: relative;
            padding: 0.32rem;
            font-size: 0.32rem;
            text-align: center;
        }

        .page-video-comment-list {
            padding: 0 0.32rem;
            flex: 1;
            overflow-y: auto;
        }

        .page-video-comment-input {
            position: relative;
            padding: 0.12rem 0.32rem;
            height: 1.08rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #020202;
        }

        .page-video-comment-input-select {
            margin-left: 0.24rem;
            padding: 0 0.24rem;
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 0.72rem;
            background-color: #0d0f13;
            border-radius: 0.72rem;
        }

        .page-video-comment-input-select span {
            opacity: 0.3;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .share-card__title {
            height: 1.2rem;
            text-align: center;
            line-height: 1.2rem;
            font-size: 0.32rem;
        }

        .share-card__body {
            padding-bottom: 0.64rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .share-card__body li {
            padding: 0.24rem 0;
            text-align: center;
        }

        .share-card__body li img {
            margin-bottom: 0.24rem;
            width: 0.8rem;
            height: 0.8rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .confirm-card-dialog {
            overflow: visible !important;
        }

        .confirm-card-icon {
            position: absolute;
            top: -1.2rem;
            width: 100%;
            text-align: center;
        }

        .confirm-card-icon img {
            width: 2.8rem;
            height: 2rem;
        }

        .confirm-card-content {
            padding: 0.48rem 0.48rem 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            line-height: 1.5em;
        }

        .confirm-card-content.success {
            padding-top: 1.2rem;
        }

        .confirm-card-actions {
            padding: 0.48rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.4rem;
        }

        .confirm-card-actions .van-button {
            border-radius: 0.16rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .video-js .vjs-big-play-button .vjs-icon-placeholder:before,
        .vjs-button>.vjs-icon-placeholder:before,
        .video-js .vjs-modal-dialog,
        .vjs-modal-dialog .vjs-modal-dialog-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-js .vjs-big-play-button .vjs-icon-placeholder:before,
        .vjs-button>.vjs-icon-placeholder:before {
            text-align: center;
        }

        <blade font|-face%20%7B%0D>font-family: VideoJS;
        src: url(/static/fonts/VideoJS.46ac6629.eot?#iefix) format("eot");
        }

        <blade font|-face%20%7B%0D>font-family: VideoJS;
        src: url(data:application/font-woff;charset=utf-8;base64,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) format("woff"),
        url(data:application/x-font-ttf;charset=utf-8;base64,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AG8AbgB0AGUAbABsAG8AIABwAHIAbwBqAGUAYwB0AC4AaAB0AHQAcAA6AC8ALwBmAG8AbgB0AGUAbABsAG8ALgBjAG8AbQAAAAIAAAAAAAAAEQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIQECAQMBBAEFAQYBBwEIAQkBCgELAQwBDQEOAQ8BEAERARIBEwEUARUBFgEXARgBGQEaARsBHAEdAR4BHwEgASEBIgAEcGxheQtwbGF5LWNpcmNsZQVwYXVzZQt2b2x1bWUtbXV0ZQp2b2x1bWUtbG93CnZvbHVtZS1taWQLdm9sdW1lLWhpZ2gQZnVsbHNjcmVlbi1lbnRlcg9mdWxsc2NyZWVuLWV4aXQGc3F1YXJlB3NwaW5uZXIJc3VidGl0bGVzCGNhcHRpb25zCGNoYXB0ZXJzBXNoYXJlA2NvZwZjaXJjbGUOY2lyY2xlLW91dGxpbmUTY2lyY2xlLWlubmVyLWNpcmNsZQJoZAZjYW5jZWwGcmVwbGF5CGZhY2Vib29rBWdwbHVzCGxpbmtlZGluB3R3aXR0ZXIGdHVtYmxyCXBpbnRlcmVzdBFhdWRpby1kZXNjcmlwdGlvbgVhdWRpbwluZXh0LWl0ZW0NcHJldmlvdXMtaXRlbQAAAAA=) format("truetype");
        font-weight: normal;
        font-style: normal;
        }

        .vjs-icon-play,
        .video-js .vjs-big-play-button .vjs-icon-placeholder:before,
        .video-js .vjs-play-control .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-play:before,
        .video-js .vjs-big-play-button .vjs-icon-placeholder:before,
        .video-js .vjs-play-control .vjs-icon-placeholder:before {
            content: "\f101";
        }

        .vjs-icon-play-circle {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-play-circle:before {
            content: "\f102";
        }

        .vjs-icon-pause,
        .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-pause:before,
        .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder:before {
            content: "\f103";
        }

        .vjs-icon-volume-mute,
        .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-volume-mute:before,
        .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder:before {
            content: "\f104";
        }

        .vjs-icon-volume-low,
        .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-volume-low:before,
        .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder:before {
            content: "\f105";
        }

        .vjs-icon-volume-mid,
        .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-volume-mid:before,
        .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder:before {
            content: "\f106";
        }

        .vjs-icon-volume-high,
        .video-js .vjs-mute-control .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-volume-high:before,
        .video-js .vjs-mute-control .vjs-icon-placeholder:before {
            content: "\f107";
        }

        .vjs-icon-fullscreen-enter,
        .video-js .vjs-fullscreen-control .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-fullscreen-enter:before,
        .video-js .vjs-fullscreen-control .vjs-icon-placeholder:before {
            content: "\f108";
        }

        .vjs-icon-fullscreen-exit,
        .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-fullscreen-exit:before,
        .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder:before {
            content: "\f109";
        }

        .vjs-icon-square {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-square:before {
            content: "\f10a";
        }

        .vjs-icon-spinner {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-spinner:before {
            content: "\f10b";
        }

        .vjs-icon-subtitles,
        .video-js .vjs-subtitles-button .vjs-icon-placeholder,
        .video-js .vjs-subs-caps-button .vjs-icon-placeholder,
        .video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder,
        .video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder,
        .video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder,
        .video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-subtitles:before,
        .video-js .vjs-subtitles-button .vjs-icon-placeholder:before,
        .video-js .vjs-subs-caps-button .vjs-icon-placeholder:before,
        .video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder:before,
        .video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder:before,
        .video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder:before,
        .video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder:before {
            content: "\f10c";
        }

        .vjs-icon-captions,
        .video-js .vjs-captions-button .vjs-icon-placeholder,
        .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder,
        .video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-captions:before,
        .video-js .vjs-captions-button .vjs-icon-placeholder:before,
        .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder:before,
        .video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder:before {
            content: "\f10d";
        }

        .vjs-icon-chapters,
        .video-js .vjs-chapters-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-chapters:before,
        .video-js .vjs-chapters-button .vjs-icon-placeholder:before {
            content: "\f10e";
        }

        .vjs-icon-share {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-share:before {
            content: "\f10f";
        }

        .vjs-icon-cog {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-cog:before {
            content: "\f110";
        }

        .vjs-icon-circle,
        .video-js .vjs-play-progress,
        .video-js .vjs-volume-level {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-circle:before,
        .video-js .vjs-play-progress:before,
        .video-js .vjs-volume-level:before {
            content: "\f111";
        }

        .vjs-icon-circle-outline {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-circle-outline:before {
            content: "\f112";
        }

        .vjs-icon-circle-inner-circle {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-circle-inner-circle:before {
            content: "\f113";
        }

        .vjs-icon-hd {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-hd:before {
            content: "\f114";
        }

        .vjs-icon-cancel,
        .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-cancel:before,
        .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before {
            content: "\f115";
        }

        .vjs-icon-replay,
        .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-replay:before,
        .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder:before {
            content: "\f116";
        }

        .vjs-icon-facebook {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-facebook:before {
            content: "\f117";
        }

        .vjs-icon-gplus {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-gplus:before {
            content: "\f118";
        }

        .vjs-icon-linkedin {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-linkedin:before {
            content: "\f119";
        }

        .vjs-icon-twitter {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-twitter:before {
            content: "\f11a";
        }

        .vjs-icon-tumblr {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-tumblr:before {
            content: "\f11b";
        }

        .vjs-icon-pinterest {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-pinterest:before {
            content: "\f11c";
        }

        .vjs-icon-audio-description,
        .video-js .vjs-descriptions-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-audio-description:before,
        .video-js .vjs-descriptions-button .vjs-icon-placeholder:before {
            content: "\f11d";
        }

        .vjs-icon-audio,
        .video-js .vjs-audio-button .vjs-icon-placeholder {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-audio:before,
        .video-js .vjs-audio-button .vjs-icon-placeholder:before {
            content: "\f11e";
        }

        .vjs-icon-next-item {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-next-item:before {
            content: "\f11f";
        }

        .vjs-icon-previous-item {
            font-family: VideoJS;
            font-weight: normal;
            font-style: normal;
        }

        .vjs-icon-previous-item:before {
            content: "\f120";
        }

        .video-js {
            display: block;
            vertical-align: top;
            box-sizing: border-box;
            color: #fff;
            background-color: #000;
            position: relative;
            padding: 0;
            font-size: 0.2rem;
            line-height: 1;
            font-weight: normal;
            font-style: normal;
            font-family: Arial, Helvetica, sans-serif;
            word-break: initial;
        }

        .video-js:-moz-full-screen {
            position: absolute;
        }

        .video-js:-webkit-full-screen {
            width: 100% !important;
            height: 100% !important;
        }

        .video-js[tabindex="-1"] {
            outline: none;
        }

        .video-js *,
        .video-js *:before,
        .video-js *:after {
            box-sizing: inherit;
        }

        .video-js ul {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            list-style-position: outside;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
            margin-bottom: 0;
        }

        .video-js.vjs-fluid,
        .video-js.vjs-16-9,
        .video-js.vjs-4-3 {
            width: 100%;
            max-width: 100%;
            height: 0;
        }

        .video-js.vjs-16-9 {
            padding-top: 56.25%;
        }

        .video-js.vjs-4-3 {
            padding-top: 75%;
        }

        .video-js.vjs-fill {
            width: 100%;
            height: 100%;
        }

        .video-js .vjs-tech {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        body.vjs-full-window {
            padding: 0;
            margin: 0;
            height: 100%;
            overflow-y: auto;
        }

        .vjs-full-window .video-js.vjs-fullscreen {
            position: fixed;
            overflow: hidden;
            z-index: 1000;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
        }

        .video-js.vjs-fullscreen {
            width: 100% !important;
            height: 100% !important;
            padding-top: 0 !important;
        }

        .video-js.vjs-fullscreen.vjs-user-inactive {
            cursor: none;
        }

        .vjs-hidden {
            display: none !important;
        }

        .vjs-disabled {
            opacity: 0.5;
            cursor: default;
        }

        .video-js .vjs-offscreen {
            height: 0.02rem;
            left: -199.98rem;
            position: absolute;
            top: 0;
            width: 0.02rem;
        }

        .vjs-lock-showing {
            display: block !important;
            opacity: 1;
            visibility: visible;
        }

        .vjs-no-js {
            padding: 0.4rem;
            color: #fff;
            background-color: #000;
            font-size: 0.36rem;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            width: 6rem;
            height: 3rem;
            margin: 0 auto;
        }

        .vjs-no-js a,
        .vjs-no-js a:visited {
            color: #66A8CC;
        }

        .video-js .vjs-big-play-button {
            font-size: 3em;
            line-height: 1.5em;
            height: 1.5em;
            width: 3em;
            display: block;
            position: absolute;
            top: 0.2rem;
            left: 0.2rem;
            padding: 0;
            cursor: pointer;
            opacity: 1;
            border: 0.06666em solid #fff;
            background-color: #2B333F;
            background-color: rgba(43, 51, 63, 0.7);
            -webkit-border-radius: 0.3em;
            -moz-border-radius: 0.3em;
            border-radius: 0.3em;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -ms-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        .vjs-big-play-centered .vjs-big-play-button {
            top: 50%;
            left: 50%;
            margin-top: -0.75em;
            margin-left: -1.5em;
        }

        .video-js:hover .vjs-big-play-button,
        .video-js .vjs-big-play-button:focus {
            border-color: #fff;
            background-color: #73859f;
            background-color: rgba(115, 133, 159, 0.5);
            -webkit-transition: all 0s;
            -moz-transition: all 0s;
            -ms-transition: all 0s;
            -o-transition: all 0s;
            transition: all 0s;
        }

        .vjs-controls-disabled .vjs-big-play-button,
        .vjs-has-started .vjs-big-play-button,
        .vjs-using-native-controls .vjs-big-play-button,
        .vjs-error .vjs-big-play-button {
            display: none;
        }

        .vjs-has-started.vjs-paused.vjs-show-big-play-button-on-pause .vjs-big-play-button {
            display: block;
        }

        .video-js button {
            background: none;
            border: none;
            color: inherit;
            display: inline-block;
            overflow: visible;
            font-size: inherit;
            line-height: inherit;
            text-transform: none;
            text-decoration: none;
            transition: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .vjs-control .vjs-button {
            width: 100%;
            height: 100%;
        }

        .video-js .vjs-control.vjs-close-button {
            cursor: pointer;
            height: 3em;
            position: absolute;
            right: 0;
            top: 0.5em;
            z-index: 2;
        }

        .video-js .vjs-modal-dialog {
            background: rgba(0, 0, 0, 0.8);
            background: -webkit-linear-gradient(-90deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
            overflow: auto;
            box-sizing: content-box;
        }

        .video-js .vjs-modal-dialog>* {
            box-sizing: border-box;
        }

        .vjs-modal-dialog .vjs-modal-dialog-content {
            font-size: 1.2em;
            line-height: 1.5;
            padding: 0.4rem 0.48rem;
            z-index: 1;
        }

        .vjs-menu-button {
            cursor: pointer;
        }

        .vjs-menu-button.vjs-disabled {
            cursor: default;
        }

        .vjs-workinghover .vjs-menu-button.vjs-disabled:hover .vjs-menu {
            display: none;
        }

        .vjs-menu .vjs-menu-content {
            display: block;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            overflow: auto;
            box-sizing: content-box;
        }

        .vjs-menu .vjs-menu-content>* {
            box-sizing: border-box;
        }

        .vjs-scrubbing .vjs-menu-button:hover .vjs-menu {
            display: none;
        }

        .vjs-menu li {
            list-style: none;
            margin: 0;
            padding: 0.2em 0;
            line-height: 1.4em;
            font-size: 1.2em;
            text-align: center;
            text-transform: lowercase;
        }

        .vjs-menu li.vjs-menu-item:focus,
        .vjs-menu li.vjs-menu-item:hover {
            background-color: #73859f;
            background-color: rgba(115, 133, 159, 0.5);
        }

        .vjs-menu li.vjs-selected,
        .vjs-menu li.vjs-selected:focus,
        .vjs-menu li.vjs-selected:hover {
            background-color: #fff;
            color: #2B333F;
        }

        .vjs-menu li.vjs-menu-title {
            text-align: center;
            text-transform: uppercase;
            font-size: 1em;
            line-height: 2em;
            padding: 0;
            margin: 0 0 0.3em 0;
            font-weight: bold;
            cursor: default;
        }

        .vjs-menu-button-popup .vjs-menu {
            display: none;
            position: absolute;
            bottom: 0;
            width: 10em;
            left: -3em;
            height: 0em;
            margin-bottom: 1.5em;
            border-top-color: rgba(43, 51, 63, 0.7);
        }

        .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
            background-color: #2B333F;
            background-color: rgba(43, 51, 63, 0.7);
            position: absolute;
            width: 100%;
            bottom: 1.5em;
            max-height: 15em;
        }

        .vjs-workinghover .vjs-menu-button-popup:hover .vjs-menu,
        .vjs-menu-button-popup .vjs-menu.vjs-lock-showing {
            display: block;
        }

        .video-js .vjs-menu-button-inline {
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -ms-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
            overflow: hidden;
        }

        .video-js .vjs-menu-button-inline:before {
            width: 2.222222222em;
        }

        .video-js .vjs-menu-button-inline:hover,
        .video-js .vjs-menu-button-inline:focus,
        .video-js .vjs-menu-button-inline.vjs-slider-active,
        .video-js.vjs-no-flex .vjs-menu-button-inline {
            width: 12em;
        }

        .vjs-menu-button-inline .vjs-menu {
            opacity: 0;
            height: 100%;
            width: auto;
            position: absolute;
            left: 4em;
            top: 0;
            padding: 0;
            margin: 0;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -ms-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        .vjs-menu-button-inline:hover .vjs-menu,
        .vjs-menu-button-inline:focus .vjs-menu,
        .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
            display: block;
            opacity: 1;
        }

        .vjs-no-flex .vjs-menu-button-inline .vjs-menu {
            display: block;
            opacity: 1;
            position: relative;
            width: auto;
        }

        .vjs-no-flex .vjs-menu-button-inline:hover .vjs-menu,
        .vjs-no-flex .vjs-menu-button-inline:focus .vjs-menu,
        .vjs-no-flex .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
            width: auto;
        }

        .vjs-menu-button-inline .vjs-menu-content {
            width: auto;
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .video-js .vjs-control-bar {
            display: none;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3.0em;
            background-color: #2B333F;
            background-color: rgba(43, 51, 63, 0.7);
        }

        .vjs-has-started .vjs-control-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            visibility: visible;
            opacity: 1;
            -webkit-transition: visibility 0.1s, opacity 0.1s;
            -moz-transition: visibility 0.1s, opacity 0.1s;
            -ms-transition: visibility 0.1s, opacity 0.1s;
            -o-transition: visibility 0.1s, opacity 0.1s;
            transition: visibility 0.1s, opacity 0.1s;
        }

        .vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
            visibility: visible;
            opacity: 0;
            -webkit-transition: visibility 1s, opacity 1s;
            -moz-transition: visibility 1s, opacity 1s;
            -ms-transition: visibility 1s, opacity 1s;
            -o-transition: visibility 1s, opacity 1s;
            transition: visibility 1s, opacity 1s;
        }

        .vjs-controls-disabled .vjs-control-bar,
        .vjs-using-native-controls .vjs-control-bar,
        .vjs-error .vjs-control-bar {
            display: none !important;
        }

        .vjs-audio.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
            opacity: 1;
            visibility: visible;
        }

        .vjs-has-started.vjs-no-flex .vjs-control-bar {
            display: table;
        }

        .video-js .vjs-control {
            position: relative;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 4em;
            -webkit-box-flex: none;
            -moz-box-flex: none;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
        }

        .vjs-button>.vjs-icon-placeholder:before {
            font-size: 1.8em;
            line-height: 1.67;
        }

        .video-js .vjs-control:focus:before,
        .video-js .vjs-control:hover:before,
        .video-js .vjs-control:focus {
            text-shadow: 0em 0em 1em white;
        }

        .video-js .vjs-control-text {
            border: 0;
            clip: rect(0 0 0 0);
            height: 0.02rem;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 0.02rem;
        }

        .vjs-no-flex .vjs-control {
            display: table-cell;
            vertical-align: middle;
        }

        .video-js .vjs-custom-control-spacer {
            display: none;
        }

        .video-js .vjs-progress-control {
            cursor: pointer;
            -webkit-box-flex: auto;
            -moz-box-flex: auto;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            min-width: 4em;
            touch-action: none;
        }

        .video-js .vjs-progress-control.disabled {
            cursor: default;
        }

        .vjs-live .vjs-progress-control {
            display: none;
        }

        .vjs-no-flex .vjs-progress-control {
            width: auto;
        }

        .video-js .vjs-progress-holder {
            -webkit-box-flex: auto;
            -moz-box-flex: auto;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            height: 0.3em;
        }

        .video-js .vjs-progress-control .vjs-progress-holder {
            margin: 0 0.2rem;
        }

        .video-js .vjs-progress-control:hover .vjs-progress-holder {
            font-size: 1.666666666666666666em;
        }

        .video-js .vjs-progress-control:hover .vjs-progress-holder.disabled {
            font-size: 1em;
        }

        .video-js .vjs-progress-holder .vjs-play-progress,
        .video-js .vjs-progress-holder .vjs-load-progress,
        .video-js .vjs-progress-holder .vjs-load-progress div {
            position: absolute;
            display: block;
            height: 100%;
            margin: 0;
            padding: 0;
            width: 0;
            left: 0;
            top: 0;
        }

        .video-js .vjs-play-progress {
            background-color: #fff;
        }

        .video-js .vjs-play-progress:before {
            font-size: 0.9em;
            position: absolute;
            right: -0.5em;
            top: -0.333333333333333em;
            z-index: 1;
        }

        .video-js .vjs-load-progress {
            background: #bfc7d3;
            background: rgba(115, 133, 159, 0.5);
        }

        .video-js .vjs-load-progress div {
            background: white;
            background: rgba(115, 133, 159, 0.75);
        }

        .video-js .vjs-time-tooltip {
            background-color: #fff;
            background-color: rgba(255, 255, 255, 0.8);
            -webkit-border-radius: 0.3em;
            -moz-border-radius: 0.3em;
            border-radius: 0.3em;
            color: #000;
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
            padding: 0.12rem 0.16rem 0.16rem 0.16rem;
            pointer-events: none;
            position: absolute;
            top: -3.4em;
            visibility: hidden;
            z-index: 1;
        }

        .video-js .vjs-progress-holder:focus .vjs-time-tooltip {
            display: none;
        }

        .video-js .vjs-progress-control:hover .vjs-time-tooltip,
        .video-js .vjs-progress-control:hover .vjs-progress-holder:focus .vjs-time-tooltip {
            display: block;
            font-size: 0.6em;
            visibility: visible;
        }

        .video-js .vjs-progress-control.disabled:hover .vjs-time-tooltip {
            font-size: 1em;
        }

        .video-js .vjs-progress-control .vjs-mouse-display {
            display: none;
            position: absolute;
            width: 0.02rem;
            height: 100%;
            background-color: #000;
            z-index: 1;
        }

        .vjs-no-flex .vjs-progress-control .vjs-mouse-display {
            z-index: 0;
        }

        .video-js .vjs-progress-control:hover .vjs-mouse-display {
            display: block;
        }

        .video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: visibility 1s, opacity 1s;
            -moz-transition: visibility 1s, opacity 1s;
            -ms-transition: visibility 1s, opacity 1s;
            -o-transition: visibility 1s, opacity 1s;
            transition: visibility 1s, opacity 1s;
        }

        .video-js.vjs-user-inactive.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
            display: none;
        }

        .vjs-mouse-display .vjs-time-tooltip {
            color: #fff;
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .video-js .vjs-slider {
            position: relative;
            cursor: pointer;
            padding: 0;
            margin: 0 0.45em 0 0.45em;
            /* iOS Safari */
            -webkit-touch-callout: none;
            /* Safari */
            -webkit-user-select: none;
            /* Konqueror HTML */
            -khtml-user-select: none;
            /* Firefox */
            -moz-user-select: none;
            /* Internet Explorer/Edge */
            -ms-user-select: none;
            /* Non-prefixed version, currently supported by Chrome and Opera */
            user-select: none;
            background-color: #73859f;
            background-color: rgba(115, 133, 159, 0.5);
        }

        .video-js .vjs-slider.disabled {
            cursor: default;
        }

        .video-js .vjs-slider:focus {
            text-shadow: 0em 0em 1em white;
            -webkit-box-shadow: 0 0 1em #fff;
            -moz-box-shadow: 0 0 1em #fff;
            box-shadow: 0 0 1em #fff;
        }

        .video-js .vjs-mute-control {
            cursor: pointer;
            -webkit-box-flex: none;
            -moz-box-flex: none;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
            padding-left: 2em;
            padding-right: 2em;
            padding-bottom: 3em;
        }

        .video-js .vjs-volume-control {
            cursor: pointer;
            margin-right: 1em;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .video-js .vjs-volume-control.vjs-volume-horizontal {
            width: 5em;
        }

        .video-js .vjs-volume-panel .vjs-volume-control {
            visibility: visible;
            opacity: 0;
            width: 0.02rem;
            height: 0.02rem;
            margin-left: -0.02rem;
        }

        .vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        }

        .vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,
        .vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical .vjs-volume-level {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        }

        .video-js .vjs-volume-panel {
            -webkit-transition: width 1s;
            -moz-transition: width 1s;
            -ms-transition: width 1s;
            -o-transition: width 1s;
            transition: width 1s;
        }

        .video-js .vjs-volume-panel:hover .vjs-volume-control,
        .video-js .vjs-volume-panel:active .vjs-volume-control,
        .video-js .vjs-volume-panel:focus .vjs-volume-control,
        .video-js .vjs-volume-panel .vjs-volume-control:hover,
        .video-js .vjs-volume-panel .vjs-volume-control:active,
        .video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control,
        .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active {
            visibility: visible;
            opacity: 1;
            position: relative;
            -webkit-transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
            -moz-transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
            -ms-transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
            -o-transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
            transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
        }

        .video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-horizontal,
        .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal,
        .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-horizontal,
        .video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-horizontal,
        .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-horizontal,
        .video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-horizontal,
        .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-horizontal {
            width: 5em;
            height: 3em;
        }

        .video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical,
        .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical,
        .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical,
        .video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical,
        .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical,
        .video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical,
        .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        .video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical .vjs-volume-level,
        .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical .vjs-volume-bar,
        .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical .vjs-volume-level {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        .video-js .vjs-volume-panel.vjs-volume-panel-horizontal:hover,
        .video-js .vjs-volume-panel.vjs-volume-panel-horizontal:active,
        .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active {
            width: 9em;
            -webkit-transition: width 0.1s;
            -moz-transition: width 0.1s;
            -ms-transition: width 0.1s;
            -o-transition: width 0.1s;
            transition: width 0.1s;
        }

        .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-mute-toggle-only {
            width: 4em;
        }

        .video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
            height: 8em;
            width: 3em;
            left: -3.5em;
            -webkit-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
            -moz-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
            -ms-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
            -o-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
            transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
        }

        .video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
            -webkit-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
            -moz-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
            -ms-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
            -o-transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
            transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
        }

        .video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
            width: 5em;
            height: 3em;
            visibility: visible;
            opacity: 1;
            position: relative;
            -webkit-transition: none;
            -moz-transition: none;
            -ms-transition: none;
            -o-transition: none;
            transition: none;
        }

        .video-js.vjs-no-flex .vjs-volume-control.vjs-volume-vertical,
        .video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
            position: absolute;
            bottom: 3em;
            left: 0.5em;
        }

        .video-js .vjs-volume-panel {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .video-js .vjs-volume-bar {
            margin: 1.35em 0.45em;
        }

        .vjs-volume-bar.vjs-slider-horizontal {
            width: 5em;
            height: 0.3em;
        }

        .vjs-volume-bar.vjs-slider-vertical {
            width: 0.3em;
            height: 5em;
            margin: 1.35em auto;
        }

        .video-js .vjs-volume-level {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #fff;
        }

        .video-js .vjs-volume-level:before {
            position: absolute;
            font-size: 0.9em;
        }

        .vjs-slider-vertical .vjs-volume-level {
            width: 0.3em;
        }

        .vjs-slider-vertical .vjs-volume-level:before {
            top: -0.5em;
            left: -0.3em;
        }

        .vjs-slider-horizontal .vjs-volume-level {
            height: 0.3em;
        }

        .vjs-slider-horizontal .vjs-volume-level:before {
            top: -0.3em;
            right: -0.5em;
        }

        .video-js .vjs-volume-panel.vjs-volume-panel-vertical {
            width: 4em;
        }

        .vjs-volume-bar.vjs-slider-vertical .vjs-volume-level {
            height: 100%;
        }

        .vjs-volume-bar.vjs-slider-horizontal .vjs-volume-level {
            width: 100%;
        }

        .video-js .vjs-volume-vertical {
            width: 3em;
            height: 8em;
            bottom: 8em;
            background-color: #2B333F;
            background-color: rgba(43, 51, 63, 0.7);
        }

        .video-js .vjs-volume-horizontal .vjs-menu {
            left: -2em;
        }

        .vjs-poster {
            display: inline-block;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: contain;
            background-color: #000000;
            cursor: pointer;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
        }

        .vjs-poster img {
            display: block;
            vertical-align: middle;
            margin: 0 auto;
            max-height: 100%;
            padding: 0;
            width: 100%;
        }

        .vjs-has-started .vjs-poster {
            display: none;
        }

        .vjs-audio.vjs-has-started .vjs-poster {
            display: block;
        }

        .vjs-using-native-controls .vjs-poster {
            display: none;
        }

        .video-js .vjs-live-control {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: flex-start;
            -webkit-align-items: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-flex: auto;
            -moz-box-flex: auto;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            font-size: 1em;
            line-height: 3em;
        }

        .vjs-no-flex .vjs-live-control {
            display: table-cell;
            width: auto;
            text-align: left;
        }

        .video-js .vjs-time-control {
            -webkit-box-flex: none;
            -moz-box-flex: none;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
            font-size: 1em;
            line-height: 3em;
            min-width: 2em;
            width: auto;
            padding-left: 1em;
            padding-right: 1em;
        }

        .vjs-live .vjs-time-control {
            display: none;
        }

        .video-js .vjs-current-time,
        .vjs-no-flex .vjs-current-time {
            display: none;
        }

        .vjs-no-flex .vjs-remaining-time.vjs-time-control.vjs-control {
            width: 0 !important;
            white-space: nowrap;
        }

        .video-js .vjs-duration,
        .vjs-no-flex .vjs-duration {
            display: none;
        }

        .vjs-time-divider {
            display: none;
            line-height: 3em;
        }

        .vjs-live .vjs-time-divider {
            display: none;
        }

        .video-js .vjs-play-control .vjs-icon-placeholder {
            cursor: pointer;
            -webkit-box-flex: none;
            -moz-box-flex: none;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
        }

        .vjs-text-track-display {
            position: absolute;
            bottom: 3em;
            left: 0;
            right: 0;
            top: 0;
            pointer-events: none;
        }

        .video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display {
            bottom: 1em;
        }

        .video-js .vjs-text-track {
            font-size: 1.4em;
            text-align: center;
            margin-bottom: 0.1em;
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .vjs-subtitles {
            color: #fff;
        }

        .vjs-captions {
            color: #fc6;
        }

        .vjs-tt-cue {
            display: block;
        }

        video::-webkit-media-text-track-display {
            -moz-transform: translateY(-3em);
            -ms-transform: translateY(-3em);
            -o-transform: translateY(-3em);
            -webkit-transform: translateY(-3em);
            transform: translateY(-3em);
        }

        .video-js.vjs-user-inactive.vjs-playing video::-webkit-media-text-track-display {
            -moz-transform: translateY(-1.5em);
            -ms-transform: translateY(-1.5em);
            -o-transform: translateY(-1.5em);
            -webkit-transform: translateY(-1.5em);
            transform: translateY(-1.5em);
        }

        .video-js .vjs-fullscreen-control {
            cursor: pointer;
            -webkit-box-flex: none;
            -moz-box-flex: none;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
        }

        .vjs-playback-rate>.vjs-menu-button,
        .vjs-playback-rate .vjs-playback-rate-value {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .vjs-playback-rate .vjs-playback-rate-value {
            pointer-events: none;
            font-size: 1.5em;
            line-height: 2;
            text-align: center;
        }

        .vjs-playback-rate .vjs-menu {
            width: 4em;
            left: 0em;
        }

        .vjs-error .vjs-error-display .vjs-modal-dialog-content {
            font-size: 1.4em;
            text-align: center;
        }

        .vjs-error .vjs-error-display:before {
            color: #fff;
            content: 'X';
            font-family: Arial, Helvetica, sans-serif;
            font-size: 4em;
            left: 0;
            line-height: 1;
            margin-top: -0.5em;
            position: absolute;
            text-shadow: 0.05em 0.05em 0.1em #000;
            text-align: center;
            top: 50%;
            vertical-align: middle;
            width: 100%;
        }

        .vjs-loading-spinner {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -0.5rem 0 0 -0.5rem;
            opacity: 0.85;
            text-align: left;
            border: 0.12rem solid rgba(43, 51, 63, 0.7);
            box-sizing: border-box;
            background-clip: padding-box;
            width: 1rem;
            height: 1rem;
            border-radius: 0.5rem;
            visibility: hidden;
        }

        .vjs-seeking .vjs-loading-spinner,
        .vjs-waiting .vjs-loading-spinner {
            display: block;
            animation: 0s linear 0.3s forwards vjs-spinner-show;
        }

        .vjs-loading-spinner:before,
        .vjs-loading-spinner:after {
            content: "";
            position: absolute;
            margin: -0.12rem;
            box-sizing: inherit;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            opacity: 1;
            border: inherit;
            border-color: transparent;
            border-top-color: white;
        }

        .vjs-seeking .vjs-loading-spinner:before,
        .vjs-seeking .vjs-loading-spinner:after,
        .vjs-waiting .vjs-loading-spinner:before,
        .vjs-waiting .vjs-loading-spinner:after {
            -webkit-animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
            animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
        }

        .vjs-seeking .vjs-loading-spinner:before,
        .vjs-waiting .vjs-loading-spinner:before {
            border-top-color: white;
        }

        .vjs-seeking .vjs-loading-spinner:after,
        .vjs-waiting .vjs-loading-spinner:after {
            border-top-color: white;
            -webkit-animation-delay: 0.44s;
            animation-delay: 0.44s;
        }

        <blade keyframes|%20vjs-spinner-show%20%7B%0D>to {
            visibility: visible;
        }
        }

        @-webkit-keyframes vjs-spinner-show {
            to {
                visibility: visible;
            }
        }

        <blade keyframes|%20vjs-spinner-spin%20%7B%0D>100% {
            transform: rotate(360deg);
        }
        }

        @-webkit-keyframes vjs-spinner-spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        <blade keyframes|%20vjs-spinner-fade%20%7B%0D>0% {
            border-top-color: #73859f;
        }

        20% {
            border-top-color: #73859f;
        }

        35% {
            border-top-color: white;
        }

        60% {
            border-top-color: #73859f;
        }

        100% {
            border-top-color: #73859f;
        }
        }

        @-webkit-keyframes vjs-spinner-fade {
            0% {
                border-top-color: #73859f;
            }

            20% {
                border-top-color: #73859f;
            }

            35% {
                border-top-color: white;
            }

            60% {
                border-top-color: #73859f;
            }

            100% {
                border-top-color: #73859f;
            }
        }

        .vjs-chapters-button .vjs-menu ul {
            width: 24em;
        }

        .video-js .vjs-subs-caps-button+.vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
            vertical-align: middle;
            display: inline-block;
            margin-bottom: -0.1em;
        }

        .video-js .vjs-subs-caps-button+.vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
            font-family: VideoJS;
            content: "\f10d";
            font-size: 1.5em;
            line-height: inherit;
        }

        .video-js .vjs-audio-button+.vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
            vertical-align: middle;
            display: inline-block;
            margin-bottom: -0.1em;
        }

        .video-js .vjs-audio-button+.vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
            font-family: VideoJS;
            content: " \f11d";
            font-size: 1.5em;
            line-height: inherit;
        }

        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-custom-control-spacer {
            -webkit-box-flex: auto;
            -moz-box-flex: auto;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            display: block;
        }

        .video-js.vjs-layout-tiny:not(.vjs-fullscreen).vjs-no-flex .vjs-custom-control-spacer {
            width: auto;
        }

        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-current-time,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-time-divider,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-duration,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-remaining-time,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-playback-rate,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-progress-control,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-mute-control,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-volume-control,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-volume-panel,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-chapters-button,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-descriptions-button,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-captions-button,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-subtitles-button,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-subs-caps-button,
        .video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-audio-button {
            display: none;
        }

        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-current-time,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-time-divider,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-duration,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-remaining-time,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-playback-rate,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-mute-control,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-volume-control,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-volume-panel,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-chapters-button,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-descriptions-button,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-captions-button,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-subtitles-button,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-subs-caps-button,
        .video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-audio-button {
            display: none;
        }

        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-current-time,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-time-divider,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-duration,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-remaining-time,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-playback-rate,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-mute-control,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-volume-control,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-volume-panel,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-chapters-button,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-descriptions-button,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-captions-button,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-subtitles-button,
        .video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-audio-button {
            display: none;
        }

        .vjs-modal-dialog.vjs-text-track-settings {
            background-color: #2B333F;
            background-color: rgba(43, 51, 63, 0.75);
            color: #fff;
            height: 70%;
        }

        .vjs-text-track-settings .vjs-modal-dialog-content {
            display: table;
        }

        .vjs-text-track-settings .vjs-track-settings-colors,
        .vjs-text-track-settings .vjs-track-settings-font,
        .vjs-text-track-settings .vjs-track-settings-controls {
            display: table-cell;
        }

        .vjs-text-track-settings .vjs-track-settings-controls {
            text-align: right;
            vertical-align: bottom;
        }

        <blade supports|%20(display%3A%20grid)%20%7B%0D>.vjs-text-track-settings .vjs-modal-dialog-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr auto;
        }

        .vjs-text-track-settings .vjs-track-settings-colors {
            display: block;
            grid-column: 1;
            grid-row: 1;
        }

        .vjs-text-track-settings .vjs-track-settings-font {
            grid-column: 2;
            grid-row: 1;
        }

        .vjs-text-track-settings .vjs-track-settings-controls {
            grid-column: 2;
            grid-row: 2;
        }
        }

        .vjs-track-setting>select {
            margin-right: 0.1rem;
        }

        .vjs-text-track-settings fieldset {
            margin: 0.1rem;
            padding: 0.06rem;
            border: none;
        }

        .vjs-text-track-settings fieldset span {
            display: inline-block;
        }

        .vjs-text-track-settings legend {
            color: #fff;
            margin: 0 0 0.1rem 0;
        }

        .vjs-text-track-settings .vjs-label {
            position: absolute;
            clip: rect(0.02rem 0.02rem 0.02rem 0.02rem);
            clip: rect(0.02rem, 0.02rem, 0.02rem, 0.02rem);
            display: block;
            margin: 0 0 0.1rem 0;
            padding: 0;
            border: 0;
            height: 0.02rem;
            width: 0.02rem;
            overflow: hidden;
        }

        .vjs-track-settings-controls button:focus,
        .vjs-track-settings-controls button:active {
            outline-style: solid;
            outline-width: medium;
            background-image: linear-gradient(0deg, #fff 88%, #73859f 100%);
        }

        .vjs-track-settings-controls button:hover {
            color: rgba(43, 51, 63, 0.75);
        }

        .vjs-track-settings-controls button {
            background-color: #fff;
            background-image: linear-gradient(-180deg, #fff 88%, #73859f 100%);
            color: #2B333F;
            cursor: pointer;
            border-radius: 0.04rem;
        }

        .vjs-track-settings-controls .vjs-default-button {
            margin-right: 1em;
        }

        <blade media|%20print%20%7B%0D>.video-js>*:not(.vjs-tech):not(.vjs-poster) {
            visibility: hidden;
        }
        }

        .vjs-resize-manager {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            z-index: -1000;
        }

        .js-focus-visible .video-js *:focus:not(.focus-visible) {
            outline: none;
        }

        .video-js *:focus:not(:focus-visible) {
            outline: none;
        }

        <blade media|%20%5C0screen%20%7B%0D>.vjs-user-inactive.vjs-playing .vjs-control-bar :before {
            content: "";
        }
        }

        <blade media|%20%5C0screen%20%7B%0D>.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
            visibility: hidden;
        }
        }

    </style>
    <style type="text/css">
        .video-player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-player-video {
            width: 100%;
            height: 100%;
        }

        .video-player-video video {
            width: 100%;
            height: 100%;
            transition: height;
        }

        .video-player-video video.scaled {
            height: 30vh;
            transition-duration: 0.3s;
        }

        .video-player-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0.96rem;
            height: 0.96rem;
            z-index: 2;
        }

        .video-player-button.scaled {
            top: 15vh;
        }

        .video-player-muted {
            position: absolute;
            z-index: 99;
            right: 0.2rem;
            bottom: 1rem;
            height: 0.8rem;
            min-width: 0.8rem;
            padding: 0.08rem;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color: #23252e;
            background-color: #fff;
            border-radius: 0.8rem;
        }

        .video-player-info {
            position: absolute;
            z-index: 2;
            right: 0;
            bottom: 0.2rem;
            left: 0;
            padding: 0.24rem;
        }

        .video-player-info-title {
            margin-bottom: 0.24rem;
            line-height: 1em;
            font-size: 0.36rem;
        }

        .video-player-info-content {
            line-height: 1.2em;
            font-size: 0.28rem;
        }

        .video-player-progress {
            position: absolute;
            z-index: 99;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0.12rem;
            background-color: #23252e;
            cursor: pointer;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .page-video {
            position: relative;
            width: 100%;
            height: calc(100% - 0.2rem);
            background-color: rgba(23, 26, 36, 0.6);
        }

        .page-video-player {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            transition: height 0.3s;
        }

        .page-video-player .van-swipe {
            height: 100%;
            z-index: 2;
        }

        .page-video-player .vide-player-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 56;
        }

        .page-video-float-task {
            position: absolute;
            z-index: 2;
            top: 2rem;
            right: 0;
            padding: 0 0.24rem;
            width: auto;
            height: 0.72rem;
            display: flex;
            align-items: center;
            font-size: 0.24rem;
            border-radius: 0.24rem 0 0 0.24rem;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .page-video-float-right {
            position: absolute;
            z-index: 6;
            right: 0.2rem;
            bottom: 2rem;
        }

        .page-video-back {
            position: absolute;
            z-index: 2;
            right: 0;
            left: 0;
            width: 1.2rem;
            height: 1.2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-video-task {
            position: absolute;
            z-index: 2;
            top: 1.2rem;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .page-video-task-income {
            margin-top: 0.2rem;
            margin-left: 0.32rem;
            height: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .page-video-task-income>img {
            width: 0.64rem;
        }

        .page-video-task-income>span {
            padding: 0.08rem 0.16rem;
            font-size: 0.2rem;
            color: #00fc83;
            border-radius: 1.8rem;
            background: rgba(26, 27, 28, 0.8);
        }

        .page-video-task-action-num,
        .page-video-task-action-btn {
            margin-bottom: 0.32rem;
            padding: 0.28rem 0.32rem;
            border-radius: 0.24rem 0 0 0.24rem;
            background: rgba(0, 0, 0, 0.6);
        }

        .page-video-all {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .page-video-all.category {
            height: calc(100vh - 1.08rem);
        }

        .page-video-all-content {
            flex: 1;
            overflow: auto;
        }

        .page-video-all-list {
            margin-bottom: 0.32rem;
            padding: 0 0.32rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0.32rem;
        }

        .van-field__word-num {
            color: #fff;
        }

        .van-action-sheet__item:active,
        .van-action-sheet__cancel:active {
            background-color: #23252e;
        }

        .van-overlay {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom {
            max-width: 8.5rem;
        }

    </style>
   
    <style type="text/css">
        .popup-box[data-v-3c12fe9a] {
            width: 6rem;
        }

        .popup-box .image-box[data-v-3c12fe9a] {
            max-height: 60vh;
            overflow-y: scroll;
            border-radius: 0.32rem;
        }

        .popup-box .image-box img[data-v-3c12fe9a] {
            width: 100%;
        }

        .popup-box .close[data-v-3c12fe9a] {
            margin-top: 0.32rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup-box .close img[data-v-3c12fe9a] {
            width: 0.56rem;
            height: 0.56rem;
        }

        .van-field__word-num[data-v-3c12fe9a] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-3c12fe9a]:active,
        .van-action-sheet__cancel[data-v-3c12fe9a]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-3c12fe9a] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-3c12fe9a] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .assets[data-v-6e05afb9] {
            border-radius: 0.2rem;
            padding: 0.32rem 0.28rem;
            line-height: 1.2;
        }

        .assets .level-box[data-v-6e05afb9] {
            display: flex;
            align-items: center;
        }

        .assets .level-box img[data-v-6e05afb9] {
            margin-right: 0.2rem;
            height: 0.8rem;
        }

        .assets .level-box .level-info[data-v-6e05afb9] {
            font-size: 0.24rem;
            margin-left: 0.16rem;
        }

        .assets .level-box .level-info .text[data-v-6e05afb9] {
            color: #fff;
        }

        .assets .level-box .level-info .level[data-v-6e05afb9] {
            margin-top: 0.12rem;
            color: #fff;
            font-size: 0.32rem;
        }

        .assets .info-list[data-v-6e05afb9] {
            display: flex;
            align-items: center;
            gap: 0.1rem;
            margin-top: 0.32rem;
        }

        .assets .info-list .info[data-v-6e05afb9] {
            flex: 1;
        }

        .assets .info-list .info[data-v-6e05afb9]:nth-of-type(2) {
            text-align: center;
        }

        .assets .info-list .info[data-v-6e05afb9]:nth-of-type(3) {
            text-align: right;
        }

        .assets .info-list .info .name[data-v-6e05afb9] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .assets .info-list .info .value[data-v-6e05afb9] {
            margin-top: 0.24rem;
            color: #fff;
            font-size: 0.28rem;
        }

        .assets .time-box[data-v-6e05afb9] {
            padding: 0.24rem;
            margin-top: 0.32rem;
            border-radius: 0.16rem;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
        }

        .assets .time-box img[data-v-6e05afb9] {
            width: 0.24rem;
            height: 0.24rem;
            margin-right: 0.12rem;
        }

        .assets .time-box span[data-v-6e05afb9] {
            color: #ff5050;
            font-size: 0.24rem;
        }

        .van-field__word-num[data-v-6e05afb9] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-6e05afb9]:active,
        .van-action-sheet__cancel[data-v-6e05afb9]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-6e05afb9] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-6e05afb9] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .list[data-v-6d2d4c36] {
            line-height: 1.2;
        }

        .list .item[data-v-6d2d4c36] {
            border-radius: 0.2rem;
            border: 0.03rem solid #000000;
            padding: 0.32rem 0.28rem;
        }

        .list .item .head[data-v-6d2d4c36] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 0.32rem;
            border-bottom: 0.02rem solid #252930;
        }

        .list .item .head .level-box[data-v-6d2d4c36] {
            display: flex;
            align-items: center;
        }

        .list .item .head .level-box img[data-v-6d2d4c36] {
            min-width: 2.48rem;
            height: 2.48rem;
            margin-right: 0.12rem;
        }

        .list .item .head .level-box span[data-v-6d2d4c36] {
            color: #fff;
            font-size: 0.32rem;
        }

        .list .item .head .amount-box[data-v-6d2d4c36] {
            display: flex;
            align-items: center;
        }

        .list .item .head .amount-box .popover[data-v-6d2d4c36] {
            width: 0.32rem;
            height: 0.32rem;
            margin-right: 0.1rem;
        }

        .list .item .head .amount-box .amount img[data-v-6d2d4c36] {
            width: 0.48rem;
            height: 0.48rem;
            margin-right: 0.1rem;
        }

        .list .item .head .amount-box .amount span[data-v-6d2d4c36] {
            color: #ffffff;
            font-size: 0.48rem;
            line-height: 0.48rem;
        }

        .list .item .info-list[data-v-6d2d4c36] {
            display: flex;
            flex-wrap: wrap;
        }

        .list .item .info-list .info[data-v-6d2d4c36] {
            width: 29.33%;
            padding: 0 0.12rem;
        }

        .list .item .info-list .info[data-v-6d2d4c36]:nth-of-type(3n+2) {
            text-align: center;
        }

        .list .item .info-list .info[data-v-6d2d4c36]:nth-of-type(3n) {
            text-align: right;
        }

        .list .item .info-list .info .name[data-v-6d2d4c36] {
            margin-top: 0.32rem;
            color: #fff;
            font-size: 0.28rem;
        }

        .list .item .info-list .info .value[data-v-6d2d4c36] {
            margin-top: 0.2rem;
            color: #fff;
            font-size: 0.32rem;
        }

        .list .item .info-list .info .value span[data-v-6d2d4c36] {
            font-size: 0.24rem;
        }

        .list .item .info-list .info .value.min[data-v-6d2d4c36] {
            font-size: 0.24rem;
        }

        .list .item .count-down[data-v-6d2d4c36] {
            margin-top: 0.12rem;
            padding: 0.24rem 0.28rem;
            border-radius: 0.16rem;
            background: #022627;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .list .item .count-down .van-count-down[data-v-6d2d4c36] {
            font-size: 0.26rem;
            color: #FF5050;
            text-align: right;
        }

        .list .item .count-down .van-count-down .colon[data-v-6d2d4c36] {
            color: rgba(255, 255, 255, 0.8);
        }

        .list .item .bot .btn[data-v-6d2d4c36] {
            height: 0.72rem !important;
            margin-top: 0.32rem;
            border-radius: 0.16rem;
            background: #022627;
            color: #ffffff;
            font-size: 0.28rem;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .list .item .bot .btn.buy[data-v-6d2d4c36] {
            color: #ffffff;
            border: 0.02rem solid #000000;
            background: linear-gradient(0deg, rgba(0, 252, 131, 0.1) 0%, rgba(0, 252, 131, 0) 100%);
        }

        .list .item .bot .btn.status3[data-v-6d2d4c36] {
            background: #022627;
            color: #FFF;
        }

        .van-field__word-num[data-v-6d2d4c36] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-6d2d4c36]:active,
        .van-action-sheet__cancel[data-v-6d2d4c36]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-6d2d4c36] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-6d2d4c36] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .popup-box[data-v-c0bb5a0e] {
            width: 6.4rem;
            padding-top: 1.4rem;
            position: relative;
            line-height: 1.2;
        }

        .popup-box .icon-logo[data-v-c0bb5a0e] {
            width: auto;
            height: 2rem;
            position: absolute;
            left: 50%;
            top: 0.4rem;
            transform: translate(-50%, 0);
            z-index: 100;
        }

        .popup-box .cross[data-v-c0bb5a0e] {
            font-size: 0.32rem;
            color: #000;
            font-weight: bold;
            position: absolute;
            right: 0.32rem;
            top: 0.92rem;
            cursor: pointer;
        }

        .popup-box .content[data-v-c0bb5a0e] {
            border-radius: 0.4rem;
            padding: 1.2rem 0.32rem 0.48rem;
            text-align: center;
            line-height: 1.3;
        }

        .popup-box .content .title[data-v-c0bb5a0e] {
            color: #fff;
            font-size: 0.32rem;
        }

        .popup-box .content .text[data-v-c0bb5a0e] {
            margin-top: 0.1rem;
            color: #00fc83;
            font-size: 0.48rem;
        }

        .popup-box .content .btn[data-v-c0bb5a0e] {
            margin-top: 0.32rem;
        }

        .van-field__word-num[data-v-c0bb5a0e] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-c0bb5a0e]:active,
        .van-action-sheet__cancel[data-v-c0bb5a0e]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-c0bb5a0e] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-c0bb5a0e] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .bg1[data-v-e20b77f4] {
            position: absolute;
            top: 0;
            width: 100%;
            height: auto;
        }

        .bet li[data-v-e20b77f4] {
            width: 32.33%;
        }

        .van-field__word-num[data-v-e20b77f4] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-e20b77f4]:active,
        .van-action-sheet__cancel[data-v-e20b77f4]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-e20b77f4] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-e20b77f4] {
            max-width: 8.5rem;
        }

    </style>
   
    <style type="text/css">
        [data-v-4f302b61] .van-popup {
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
        }

        .van-field__word-num[data-v-4f302b61] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-4f302b61]:active,
        .van-action-sheet__cancel[data-v-4f302b61]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-4f302b61] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-4f302b61] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .popup-box[data-v-bfe0705e] {
            width: 6.4rem;
            position: relative;
            line-height: 1.2;
            padding-top: 0.4rem;
        }

        .popup-box .icon-logo[data-v-bfe0705e] {
            width: 100%;
            background: url(/static/img/bg-decoration.267b4e44.png) no-repeat;
            background-size: 100% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup-box .icon-logo img[data-v-bfe0705e] {
            width: auto;
            height: 2rem;
        }

        .popup-box .cross[data-v-bfe0705e] {
            font-size: 0.32rem;
            color: #000;
            font-weight: bold;
            position: absolute;
            right: 0.32rem;
            top: 0.92rem;
            cursor: pointer;
        }

        .popup-box .content[data-v-bfe0705e] {
            border-radius: 0.4rem;
            padding: 0.2rem 0.32rem 0.48rem;
            text-align: center;
            line-height: 1.3;
        }

        .popup-box .content .title[data-v-bfe0705e] {
            color: #fff;
            font-size: 0.32rem;
        }

        .popup-box .content .text[data-v-bfe0705e] {
            line-height: 1.4;
            font-size: 0.28rem;
            text-align: left;
            margin-top: 0.2rem;
        }

        .popup-box .content .text[data-v-bfe0705e] span {
            color: #00FC83;
        }

        .popup-box .content .btn[data-v-bfe0705e] {
            margin-top: 0.32rem;
        }

        .van-field__word-num[data-v-bfe0705e] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-bfe0705e]:active,
        .van-action-sheet__cancel[data-v-bfe0705e]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-bfe0705e] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-bfe0705e] {
            max-width: 8.5rem;
        }

    </style>
    
    <style type="text/css">
        .popup-box[data-v-28719dd2] {
            width: 6.4rem;
            padding: 0.48rem;
            position: relative;
            border-radius: 0.4rem;
            line-height: 1.2;
        }

        .popup-box .title-box[data-v-28719dd2] {
            height: 0.48rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .popup-box .title-box .title[data-v-28719dd2] {
            color: #fff;
            font-family: Sora;
            font-size: 0.32rem;
            font-style: normal;
        }

        .popup-box .title-box .cross[data-v-28719dd2] {
            margin-left: auto;
            font-size: 0.4rem;
            color: #fff;
            cursor: pointer;
        }

        .popup-box .content[data-v-28719dd2] {
            border-radius: 0.4rem;
            padding: 0.4rem 0 0;
        }

        .popup-box .content .text[data-v-28719dd2] {
            color: #020202;
            font-size: 0.32rem;
        }

        .popup-box .content .bot[data-v-28719dd2] {
            margin-top: 0.4rem;
            display: flex;
            justify-content: space-between;
            gap: 0.32rem;
        }

        .popup-box .content .bot .btn[data-v-28719dd2] {
            background: #23252E;
            min-height: 0.88rem;
            color: #FFF;
            text-align: center;
            font-family: Sora;
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 400;
            line-height: 0.36rem;
            /* 128.571% */
            display: flex;
            padding: 0.12rem 0.16rem;
            justify-content: center;
            align-items: center;
            gap: 0.2rem;
            flex: 1 0 0;
            border-radius: 0.16rem;
        }

        .popup-box .content .bot .btn.active[data-v-28719dd2] {
            background: #00FC83;
            color: #020202;
        }

        .van-field__word-num[data-v-28719dd2] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-28719dd2]:active,
        .van-action-sheet__cancel[data-v-28719dd2]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-28719dd2] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-28719dd2] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .btn_box[data-v-f8d1bbb0] {
            margin-top: 0.48rem;
        }

        .btn_box.min .btn[data-v-f8d1bbb0] {
            min-height: 0.72rem;
            padding: 0.12rem;
        }

        .btn_box .btn[data-v-f8d1bbb0] {
            height: 0.88rem;
            color: #FFF;
            background: #23252E;
            line-height: 1.2;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.32rem;
            border-radius: 0.16rem;
            text-align: center;
        }

        .btn_box .submit[data-v-f8d1bbb0] {
            background: #00FC83;
            color: #020202;
        }

        .van-field__word-num[data-v-f8d1bbb0] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-f8d1bbb0]:active,
        .van-action-sheet__cancel[data-v-f8d1bbb0]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-f8d1bbb0] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-f8d1bbb0] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .select-list[data-v-18e3de10] {
            margin-top: 0.24rem;
            line-height: 1.2;
            display: flex;
            align-items: center;
            gap: 0.24rem;
        }

        .select-list .select[data-v-18e3de10] {
            flex: 1;
            border-radius: 0.08rem;
            border: 0.02rem solid #252930;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #FFF;
            padding: 0.16rem 0.24rem;
        }

        .select-list .select .text[data-v-18e3de10] {
            font-size: 0.24rem;
        }

        .van-field__word-num[data-v-18e3de10] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-18e3de10]:active,
        .van-action-sheet__cancel[data-v-18e3de10]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-18e3de10] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-18e3de10] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .title[data-v-65d1ba27] {
            line-height: 1.2;
            margin-top: 0.32rem;
            color: #FFF;
            font-size: 0.32rem;
        }

        .record-list .record[data-v-65d1ba27] {
            padding: 0.32rem 0.28rem;
            border-radius: 0.16rem;
            background: #0f1117;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 0.24rem;
        }

        .record-list .record .left .name[data-v-65d1ba27] {
            color: #FFF;
        }

        .record-list .record .left .time[data-v-65d1ba27] {
            margin-top: 0.14rem;
            color: #787F8E;
            font-size: 0.24rem;
        }

        .record-list .record .right[data-v-65d1ba27] {
            text-align: right;
            margin-left: auto;
        }

        .record-list .record .right .price[data-v-65d1ba27] {
            color: #FFF;
            font-size: 0.24rem;
        }

        .record-list .record .right .status[data-v-65d1ba27] {
            width: fit-content;
            margin-top: 0.1rem;
            text-align: right;
            color: #00FC83;
            font-size: 0.24rem;
            position: relative;
            padding-left: 0.2rem;
            margin-left: auto;
        }

        .record-list .record .right .status[data-v-65d1ba27]:after {
            content: "";
            display: block;
            width: 0.12rem;
            height: 0.12rem;
            border-radius: 50%;
            background: var(--color1);
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
        }

        .van-field__word-num[data-v-65d1ba27] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-65d1ba27]:active,
        .van-action-sheet__cancel[data-v-65d1ba27]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-65d1ba27] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-65d1ba27] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .tab-list[data-v-14275b54] {
            margin-bottom: 0.32rem;
        }

        [data-v-14275b54] .info .name {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        [data-v-14275b54] .info .value {
            margin-top: 0.16rem;
            color: #fff;
            font-size: 0.28rem;
        }

        [data-v-14275b54] .info .value span {
            color: rgba(255, 255, 255, 0.6);
        }

        .assets-box[data-v-14275b54] {
            text-align: center;
            border-radius: 0.2rem;
            background: rgba(23, 26, 36, 0.6);
            position: relative;
        }

        .assets-box .assets[data-v-14275b54] {
            padding: 0.4rem;
            background: url(/static/img/bg-wallet-card.76d786ab.png) no-repeat;
            background-size: 100% 100%;
        }

        .assets-box .assets .total .n[data-v-14275b54] {
            line-height: 0.4rem;
            color: rgba(255, 255, 255, 0.6);
            text-align: left;
        }

        .assets-box .assets .total .am[data-v-14275b54] {
            font-size: 0.56rem;
            font-weight: 500;
            color: #ffffff;
            line-height: 0.73rem;
            text-align: left;
        }

        .assets-box .assets .total .income[data-v-14275b54] {
            margin-top: 0.1rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
            text-align: left;
        }

        .assets-box .assets .total .income span[data-v-14275b54] {
            color: var(--color1);
        }

        .assets-box .assets .total .assets-info[data-v-14275b54] {
            margin-top: 0.12rem;
            display: flex;
            align-items: center;
            gap: 0.12rem;
            text-align: left;
        }

        .assets-box .assets .total .assets-info .info[data-v-14275b54] {
            width: 50%;
        }

        .assets-box .nav-list[data-v-14275b54] {
            display: flex;
            align-items: center;
            justify-content: stretch;
            gap: 0.12rem;
            padding: 0.32rem 0.12rem;
            line-height: 1.2;
            width: 100%;
        }

        .assets-box .nav-list .nav[data-v-14275b54] {
            flex: 1;
        }

        .assets-box .nav-list .nav img[data-v-14275b54] {
            width: 0.48rem;
            height: 0.48rem;
        }

        .assets-box .nav-list .nav .name[data-v-14275b54] {
            margin-top: 0.2rem;
            color: #fff;
            font-size: 0.24rem;
        }

        .assets-box .receive-box[data-v-14275b54] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.12rem;
            padding: 0.32rem;
            line-height: 1.2;
        }

        .assets-box .receive-box .amount-box[data-v-14275b54] {
            text-align: left;
        }

        .assets-box .receive-box .amount-box .text[data-v-14275b54] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .assets-box .receive-box .amount-box .amount[data-v-14275b54] {
            margin-top: 0.2rem;
            color: #fff;
            font-size: 0.28rem;
        }

        .assets-box .receive-box .btn-bg[data-v-14275b54] {
            font-size: 0.24rem;
            border-radius: 1.8rem;
            padding: 0.16rem 0.32rem;
        }

        [data-v-14275b54] .wallet-assets {
            margin-top: 0.4rem;
        }

        [data-v-14275b54] .wallet-assets .info-title {
            color: #fff;
            font-size: 0.32rem;
            margin-bottom: 0.24rem;
        }

        [data-v-14275b54] .wallet-assets .info-list {
            background: #0f1016;
            border-radius: 0.2rem;
            text-align: center;
            padding: 0 0.32rem;
            line-height: 1.2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        [data-v-14275b54] .wallet-assets .info-list .info {
            flex: 0 0 49%;
            padding: 0.4rem 0;
            border-bottom: 0.02rem dashed #252930;
        }

        [data-v-14275b54] .wallet-assets .info-list .info:nth-last-child(1),
        [data-v-14275b54] .wallet-assets .info-list .info:nth-last-child(2) {
            border-bottom: none;
        }

        .btn[data-v-14275b54] {
            background: var(--backgroundLinear);
            background: none !important;
            color: #ffffff;
            font-weight: 600;
        }

        .van-field__word-num[data-v-14275b54] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-14275b54]:active,
        .van-action-sheet__cancel[data-v-14275b54]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-14275b54] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-14275b54] {
            max-width: 8.5rem;
        }

    </style>
    <style type="text/css">
        .table_list[data-v-555c6fae] {
            width: 100%;
            padding: 0.06rem;
            background: #13161c;
            border-radius: 0.12rem;
            overflow: hidden;
        }

        [data-v-555c6fae] .van-tabs__nav {
            background-color: #13161c;
            display: flex;
            align-items: stretch;
            justify-content: center;
        }

        [data-v-555c6fae] .van-tab {
            font-size: 0.28rem;
            color: rgba(255, 255, 255, 0.6) !important;
            text-align: center;
        }

        [data-v-555c6fae] .van-tab--active {
            color: #fff !important;
        }

        [data-v-555c6fae] .van-tabs--line .van-tabs__wrap {
            height: 0.6rem;
        }

        [data-v-555c6fae] .van-tabs__line {
            background-color: #00FC83;
            width: 0.6rem;
            height: 0.05rem;
        }

        [data-v-555c6fae] .van-tab__text--ellipsis {
            -webkit-line-clamp: 2;
        }

        .crowd[data-v-555c6fae] {
            background: transparent;
        }

        .crowd[data-v-555c6fae] .van-tab {
            height: 0.5rem;
            -webkit-box-flex: unset;
            -webkit-flex: unset;
            flex: unset;
            margin-left: 0;
            padding: 0;
            white-space: nowrap;
        }

        .crowd[data-v-555c6fae] .van-tab:nth-of-type(n+2) {
            margin-left: 0.24rem !important;
        }

        .crowd[data-v-555c6fae] .van-tabs__nav {
            background-color: transparent;
            justify-content: start;
        }

        .crowd[data-v-555c6fae] .van-tabs__line {
            bottom: 0.24rem;
        }

        .solid[data-v-555c6fae] .van-tabs__line {
            display: none;
        }

        .solid[data-v-555c6fae] .van-tabs--line .van-tabs__wrap {
            height: 0.7rem;
        }

        .solid[data-v-555c6fae] .van-tab--active {
            color: #020202 !important;
            background: var(--color1);
            border-radius: 0.12rem;
        }

        .solid[data-v-555c6fae] .van-tabs {
            border-radius: 0.12rem;
            overflow: hidden;
            text-align: center;
        }

        .van-field__word-num[data-v-555c6fae] {
            color: #fff;
        }

        .van-action-sheet__item[data-v-555c6fae]:active,
        .van-action-sheet__cancel[data-v-555c6fae]:active {
            background-color: #23252e;
        }

        .van-overlay[data-v-555c6fae] {
            position: fixed;
            width: 8.5rem;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .van-popup--bottom[data-v-555c6fae] {
            max-width: 8.5rem;
        }

    </style>
</head>

<body class="mein_cn">
    <div id="startLogo" style="display: none;">
        <img src="/logo.png" alt="">
    </div>
    <div id="app" style="height: 5.7rem;">
        <div data-v-37526a6c="" data-v-e20b77f4="" class="page h-full">
            <div data-v-e20b77f4="" data-v-37526a6c="" class="bg1"><img data-v-e20b77f4="" data-v-37526a6c=""
                    src="static/img/home-bg.8d740309.png" alt=""></div>
            <div data-v-37526a6c="" class="page-header">
                <div data-v-0ff1fb10="" data-v-e20b77f4="" data-v-37526a6c="">
                    <div data-v-0ff1fb10="" class="head">
                        <!---->
                        <div data-v-0ff1fb10="" class="container flex">
                            <!---->
                            <div data-v-0ff1fb10="" class="logo"><img data-v-e20b77f4="" data-v-0ff1fb10=""
                                    src="../static/img/logo-home.ad9a10ca.png" alt="" class="logo"></div>
                            <div data-v-0ff1fb10="" class="n_home"></div>
                            <div data-v-0ff1fb10="" class="flex1"></div>
                            <!---->
                            <div data-v-0ff1fb10="" class="notice"><img data-v-0ff1fb10=""
                                    src="{{ asset('') }}static/img/Icon/support.png" alt=""></div>
                            <div data-v-0ff1fb10="" class="notice"><img data-v-0ff1fb10=""
                                    src="{{ asset('') }}static/img/Icon/bell.png" alt="">
                                <div data-v-0ff1fb10="" class="count"> 2 </div>
                            </div>
                            <div data-v-0ff1fb10="" class="lang"><img data-v-0ff1fb10=""
                                    src="{{ asset('') }}static/img/Icon/browser2.png" alt=""></div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-37526a6c="" id="scroll" class="page-container" style="padding-bottom: 75px;">
                <div data-v-e20b77f4="" data-v-37526a6c="" class="container">
                    <div data-v-6e05afb9="" data-v-e20b77f4="" class="assets bg-blur3" data-v-37526a6c="">
                        <div data-v-6e05afb9="" class="level-box"><img data-v-6e05afb9=""
                                src="/static/img/1641f8d0d8cccc0073b670899da8fb06.png" alt="">
                            <div data-v-6e05afb9="" class="level-info">
                                <div data-v-6e05afb9="" class="text">My level</div>
                                <div data-v-6e05afb9="" class="level">VIP0</div>
                            </div>
                        </div>
                        <div data-v-6e05afb9="" class="info-list">
                            <div data-v-6e05afb9="" class="info">
                                <div data-v-6e05afb9="" class="name">Today's tasks</div>
                                <div data-v-6e05afb9="" class="value">0/3</div>
                            </div>
                            <div data-v-6e05afb9="" class="info">
                                <div data-v-6e05afb9="" class="name">Today's Earnings</div>
                                <div data-v-6e05afb9="" class="value">0/3</div>
                            </div>
                            <div data-v-6e05afb9="" class="info">
                                <div data-v-6e05afb9="" class="name">Cumulative Earnings</div>
                                <div data-v-6e05afb9="" class="value">0USDT</div>
                            </div>
                        </div>
                    </div>
                    <div data-v-6d2d4c36="" data-v-e20b77f4="" class="list-box" data-v-37526a6c="">
                        <div data-v-6d2d4c36="" class="list">
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task1.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="/static/img/icon/usdt.png" alt=""><span
                                                data-v-6d2d4c36="">50</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Accelerator 1</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">50.00USDT </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value"> 1.60 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">96.00 USDT</div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="count-down">
                                    <div data-v-6d2d4c36="" class="text">Buy After</div>
                                    <div data-v-6d2d4c36="" class="van-count-down van-count-down"><span
                                            data-v-6d2d4c36="" class="block">01</span><span data-v-6d2d4c36=""
                                            class="colon">D </span><span data-v-6d2d4c36="" class="block">05</span><span
                                            data-v-6d2d4c36="" class="colon">H </span><span data-v-6d2d4c36=""
                                            class="block">59</span><span data-v-6d2d4c36="" class="colon">Min
                                        </span><span data-v-6d2d4c36="" class="block">34</span><span data-v-6d2d4c36=""
                                            class="colon">S</span></div>
                                </div>
                                <!-- <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn buy" Data-Amount="50"> Like and comment to get
                                        income </div>
                                </div> -->
                            </div>
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task2.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">100</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Accelerator 1</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">100.00USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="3.40 USDT"> 3.40 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">204.00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="100"> Buy Now </div>
                                </div>
                            </div> 
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task2.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">200</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Primary Text Task：</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">200.00USDT </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="7.00 USDT"> 7.00 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">420.00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="200"> Buy Now </div>
                                </div>
                            </div> 
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task3.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">600</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Primary Text Task：</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">600.00USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="22.00 USDT"> 22.00 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">1320 .00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="600"> Buy Now </div>
                                </div>
                            </div> 
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task2.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">1200</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Primary Text Task：</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">1200.00USDT </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="46.00 USDT"> 46.00 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">2760.00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="1200"> Buy Now </div>
                                </div>
                            </div> 
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task2.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">3000</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Primary Text Task：</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">3000.00USDT </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="120.00 USDT"> 120.00 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">7200.00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="3000"> Buy Now </div>
                                </div>
                            </div> 
                            <div data-v-6d2d4c36="" class="item bg-blur mt">
                                <div data-v-6d2d4c36="" class="head">
                                    <div data-v-6d2d4c36="" class="level-box"><img data-v-6d2d4c36=""
                                            src="/static/img/task2.png"
                                            alt=""><span data-v-6d2d4c36="">LV 0-6</span></div>
                                    <div data-v-6d2d4c36="" class="amount-box">
                                        <div data-v-6d2d4c36="" class="amount"><img data-v-6d2d4c36=""
                                                src="{{ asset('') }}static/img/Icon/usdt.png"
                                                alt=""><span data-v-6d2d4c36="">6000</span></div>
                                    </div>
                                </div>
                                <div data-v-6d2d4c36="" class="info-list">
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Accelerator 7</div>
                                        <div data-v-6d2d4c36="" class="value"> </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Prices:</div>
                                        <div data-v-6d2d4c36="" class="value">6000.00USDT </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Deadlines:</div>
                                        <div data-v-6d2d4c36="" class="value"> 60Days </div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily training hours:</div>
                                        <div data-v-6d2d4c36="" class="value">2 H</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Daily earnings:</div>
                                        <div data-v-6d2d4c36="" class="value" Data-Profit="250.00 USDT"> 250.00 USDT</div>
                                    </div>
                                    <div data-v-6d2d4c36="" class="info">
                                        <div data-v-6d2d4c36="" class="name">Total earnings:</div>
                                        <div data-v-6d2d4c36="" class="value min">1500.00 USDT</div>
                                    </div>
                                </div>
                                <!---->
                                <div data-v-6d2d4c36="" class="bot">
                                    <div data-v-6d2d4c36="" class="btn" Data-Amount="6000"> Buy Now </div>
                                </div>
                            </div>                             
                        </div>
                    </div>
                </div>
                <div data-v-3c12fe9a="" data-v-e20b77f4="" data-v-37526a6c=""></div>
                <div data-v-5a60fec6="" data-v-e20b77f4="" data-v-37526a6c="">
                    <div data-v-28719dd2="" data-v-5a60fec6=""></div>
                </div>
                <div data-v-5a60fec6="" data-v-e20b77f4="" data-v-37526a6c="">
                    <div data-v-28719dd2="" data-v-5a60fec6=""></div>
                </div>
                <div data-v-bfe0705e="" data-v-e20b77f4="" data-v-37526a6c=""></div>
                <div data-v-4f302b61="" data-v-e20b77f4="" data-v-37526a6c=""></div>
            </div>
            <div data-v-37526a6c="" class="page-footer">
                <div data-v-6c4d8baa="" data-v-5954443c="" class="footers" data-v-37526a6c="">
                    <ul data-v-6c4d8baa="" class="flex tac">
                        <li data-v-6c4d8baa="" class="item">
                            <a href="{{ route('user.dashboard') }}">
                                <div data-v-6c4d8baa="" class="on"><img data-v-6c4d8baa=""
                                        src="{{ asset('') }}static/img/Icon/Home_icon/home.png"
                                        alt=""><span data-v-6c4d8baa=""> Home </span></div>
                            </a>
                        </li>
                        <li data-v-6c4d8baa="" class="item">
                            <a href="{{ route('user.task') }}">
                                <div data-v-6c4d8baa="" class=""><img data-v-6c4d8baa=""
                                        src="{{ asset('') }}static/img/Icon/Home_icon/video.png"
                                        alt=""><span data-v-6c4d8baa=""> Video </span></div>
                            </a>
                        </li>
                        <li data-v-6c4d8baa="" class="item">
                            <a href="{{ route('user.quality') }}">
                                <div data-v-6c4d8baa="" class=""><img data-v-6c4d8baa=""
                                        src="{{ asset('') }}static/img/Icon/Home_icon/vip.png"
                                        alt=""><span data-v-6c4d8baa=""> VIP </span></div>
                            </a>
                        </li>
                        <li data-v-6c4d8baa="" class="item">
                            <a href="{{ route('user.asset') }}">
                                <div data-v-6c4d8baa="" class=""><img data-v-6c4d8baa=""
                                        src="{{ asset('') }}static/img/Icon/Home_icon/wallet.png"
                                        alt=""><span data-v-6c4d8baa=""> Assets </span></div>
                            </a>
                        </li>
                        <li data-v-6c4d8baa="" class="item">
                            <a href="{{ route('user.profile') }}">
                                <div data-v-6c4d8baa="" class=""><img data-v-6c4d8baa=""
                                        src="{{ asset('') }}static/img/Icon/Home_icon/profile.png"
                                        alt=""><span data-v-6c4d8baa=""> mine </span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div data-v-15b106f9="" class="page-loading-con" style="display: none;">
            <div data-v-15b106f9="" class="page-loading"></div>
            <p data-v-15b106f9="">Loading...</p>
        </div>
    </div>
    <script type="text/javascript" src="/js/chunk-vue.35b764a7-1727614688907.js"></script>
    <script type="text/javascript" src="/js/chunk-echarts.35b764a7-1727614688907.js"></script>
    <script type="text/javascript" src="/js/chunk-vant.35b764a7-1727614688907.js"></script>
    <script type="text/javascript" src="/js/chunk-moment.35b764a7-1727614688907.js"></script>
    <script type="text/javascript" src="/js/vendors~app.35b764a7-1727614688907.js"></script>
    <script type="text/javascript" src="/js/app.35b764a7-1727614688907.js"></script>
    <script>
        let standalone = document.getElementById('startLogo')
        standalone.style.display = 'flex'
        setTimeout(() => {
            standalone.style.display = 'none'
        }, 3000)

    </script>

   

    <!---->
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">]</div>
    </div>
    <div class="van-overlay" style="z-index: 2004; display: none;"></div>
    <div data-v-5954443c="" class="van-popup van-popup--round van-popup--center"
        style="background: none; z-index: 2005; display: none;">
        <div data-v-5954443c="" class="modal-notice-box">
            <div data-v-5954443c="" class="modal-notice">
                <div data-v-5954443c="" class="notice-top"><img data-v-5954443c=""
                        src="/static/img/noticetopbg.69a72412.png" alt=""></div>
                <div data-v-5954443c="" class="notice-title"> Dear NEDVLTD Users </div>
                <div data-v-5954443c="" class="notice-desc">
                    <p>Latest Activity Notification</p>

                    <p>From September 26 00:00 to September 30 23:59 (France time) inviting new friends to subscribe to
                        VIP membership will earn an additional reward of 3 USDT while new VIP members will receive an
                        additional reward of 5 USDT Please contact the manager to claim your rewards</p>
                </div>
            </div>
            <div data-v-5954443c="" class="close"><img data-v-5954443c=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAYAAACohjseAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUgSURBVHgB1VuxUhsxEN3zZEgTN4GGNLk00MBMBioqXKVKQZsq0OQ78idxqrQpqKhMRWUmE2igidNAAzSmgcbZZ++edfLdWdLJcHkz4izdnaR3u9KupCWhyBiNRi/5sszpNacV+b3EqW09OuR0z+mB0xWnuyRJrigyEooAIbXKaYMmhF5SGED2mtOAyV5SBNQiKMQ2JNmk0FlI6JYm0kL+Ue4tyfP6MVYLqsc7INtnskMKRBDBCmLoCL68qtyDR50g+Y7TW5pV5z7qDSHqTZA7kvJll/LEQOqCO3BNESBk1zmtGcUg1/dVXWeCIrUtTptG8YDTSR0VmtMmJLlNeaJnNCH66FKHE0Fp6ANNxgwAQr1YEnNoHxLt0FR10f6hy4edS1DIfTQqxxc89RlfMcD9wMQEaaoGOZFM5lRqk4M6ntEzgvsEktuSnUsyqajIJnfMFV1QA8B9w5jsSLaSZKukAkwojSQHyEzak+x4fhAVnkGrpI4tmpLrN4mcQkieSBaT33bRczMERfw6kM+4oj41FDIf6JywKTY6hxxBw+4A0OlTaj4gAB1/O7aq2hKE9FQ1e09tCkIgBr8nWfTddESmBC3pXT6VEY8B6etAspumFE0JmoO0seOuAjrhgFwmRZOgLlmCvHb+ah1OXzm9p0AYdaTkCemzOuI5KY5nTk5fJL0hT6BDozw+kyfwjlVHhzwBn9XgkaJMJZjKdRi4bbBv5bs+JOXZrlXcIU/IWFTtG6upElT1HFAYegVlTiRLyAE/KQyqpstQ05YsRXTx+pcCwF+ux5eDgluVJCvIHXCdvygMqoEYgyuQ4IreqbOrxe92yYPkHHJF5a7AHpDa72UQVPWsbfdcSS6QnBr+e8kuv6CpejptATg0ADL4+c26peXj3wWv1iZnAFKEAz4m+EoKbygSqkiWvBKTHKAz6RJUVH3PKBJUVKirjdjkAOXSNj2Z6I61A8lFkAMyLi1aPEaB96LAJBh6nlCKitlS4eXxeCDjAoLZgKSIcCCnWARJ5TIEwWxAUiRU2TkK8HgCoBvU9zATmc2gCHAx4lV2kp/5TvWR2XZI8FYy7bKtN1e4eii+bl0A1Du7AkE18GPnlALh634tiqQsHhS3KkG1G6sUAFnFdwtuVdq5OSQ7FIZUro9YPLTEOb2TwjUKw15BmZMRryDZoTCkch0vHtQO/pZrO2TLgmYXvF4eSgnJLnlC1FOtwR/8eSEZsIWaYvaBFL3WhVjwcuU4ft6nyX5qjzwhDjoWuXtSx4D8sS7XoZ4EZ6dL1rHUj0Wd2i4Ksq/7SbKX+pFNVw17/DrZ7ND/h8J93YygTDbnkk0Dx+KzQPqqE2Qu7MReTZhS3K1r+J8Ccpa5K1lz83eMHMGCg4xtaj7ss8zc3DGzHuQHsHVonrltUkMhE6N5ljkTQ1O24MUgVR91Rw5FGwXuE0zC3LPMQoKiqkc0XSt2mkRSyJnj7rDsLNM3jKT/3EfaMmTUjIWHkRgVFgUCOYdSxUJBKFn9QCCjcpskKj1OFhDAWtI+7Nyu0T7mh6MooVxGI3YoFYBZq1Y855w2QQjqmBrFXqFkIeGUmGxA1NzDAdHLWBI1PBNzYgOhY18nPDQgti2N244AJAk7OvAhO5rGea9SPtIDADG4kOdJQNRH3ZBm9XbMdZgJXYbproEd0ox3QOwVFYdEBxNTRAlKB0R1U5qQrROUjo8BYtdJhDidaARNyMoaksFYAllIqOjfCiBRELqR610SOfjoH2I9hEu3ystMAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
    </div>
    <form action="{{ route('user.productDetails') }}" method="POST" id="productForm">
        @csrf <!-- CSRF token for security -->
        
        <!-- Hidden inputs to send values from JavaScript -->
        <input type="hidden" name="amount" id="amount">
        <!-- <input type="hidden" name="profit" id="profit"> -->
        <input type="hidden" name="image" id="imageUrl">
        
        <button type="submit">Submit</button>
    </form>
    
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-- <script>
// JavaScript to send amount and image
// document.querySelectorAll('.btn').forEach(function(button) {
//   button.addEventListener('click', function() {
//     var amount = this.getAttribute('Data-Amount'); // Get the amount
//     var imageUrl = this.closest('.item').querySelector('img').getAttribute('src'); // Get the image URL
//     window.location.href = `/user/productDetail?amount=${amount}&image=${encodeURIComponent(imageUrl)}`; // Navigate to the next page with amount and image URL
//   });
// });
document.querySelectorAll('.btn').forEach(function(button) {
  button.addEventListener('click', function() {
    // Retrieve data attributes
    var amount = this.getAttribute('data-amount');
    var profit = this.getAttribute('data-profit');
    var imageUrl = this.closest('.item').querySelector('img').getAttribute('src');

    // Create data object to send in the POST request
    var requestData = {
      amount: amount,
      profit: profit,
      image: imageUrl,
    };

    // Send the data to the controller via POST request using fetch
    fetch('/user/productDetail', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token for security
      },
      body: JSON.stringify(requestData) // Send the data as JSON
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        console.log('Data sent successfully');
        window.location.href = '/user/productDetail'; 
      } else {
        console.log('Failed to send data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });
});


</script> -->
<script>
        document.querySelectorAll('.btn').forEach(function(button) {
            button.addEventListener('click', function() {
                // Retrieve data attributes
                var amount = this.getAttribute('data-amount');
                // var profit = this.getAttribute('data-profit');
                var imageUrl = this.closest('.item').querySelector('img').getAttribute('src');

                // Populate the hidden inputs in the form
                document.getElementById('amount').value = amount;
                // document.getElementById('profit').value = profit;
                document.getElementById('imageUrl').value = imageUrl;

                // Optionally, submit the form
                document.getElementById('productForm').submit();
            });
        });
    </script>

</body>

</html>
