<style>
    .free-test {
        background-color: #DFEAEC;
        position: relative;
        padding: clamp(3.75rem, 3.178571428571429rem + 2.857142857142857vw, 5.75rem) 1rem 0;
    }

    .free-test-scheme {
        display: grid;
        grid-template-columns: 300px 1fr 217px;
        grid-template-rows: auto 1fr;
        grid-template-areas: 'photo content form' 'photo cite form';
        grid-column-gap: 6vw;
        grid-row-gap: clamp(1.5rem, 1.0714285714285714rem + 2.142857142857143vw, 3rem);
        max-width: 1120px;
        margin: 0 auto;
        justify-content: center;
        align-items: stretch;
    }

    .free-test-photo {
        position: relative;
        grid-area: photo;
        align-self: end;
        margin: 0;
    }

    .free-test-photo img {
        width: 100%;
        position: absolute;
        display: block;
        transform: scale(160%) translate(-30px, -73px);
        bottom: 0;
    }

    .free-test-content {
        grid-area: content;
    }

    .free-test-content .form-title {
        font-weight: 600;
        padding: 0;
        margin: 0 0 clamp(1.25rem, 1.1428571428571428rem + 0.5357142857142857vw, 1.625rem);
        font-size: clamp(1.625rem, 1.4464285714285714rem + 0.8928571428571428vw, 2.25rem);
        line-height: 1.05;
    }

    .free-test-content .form-title span {
        display: block;
        color: var(--c-button);
    }

    .free-test-content p,
    .free-test-content li {
        font-size: 14px;
    }

    .free-test-content ol {
        padding-left: 1rem;
    }

    .free-test-cite {
        grid-area: cite;
        padding-left: 60px;
    }

    @media (min-width: 1200px) {
        .free-test-content,
        .free-test-cite {
            margin-left: -2rem;
            margin-top: 0;
        }

        .free-test-cite {
            align-items: center;
        }

        .footer-form .button-default {
            width: 100%;
            margin-bottom: 1rem;
        }
    }

    .free-test-cite q {
        position: relative;
        display: block;
        margin-bottom: 1rem;
    }

    .free-test-cite q:before {
        content: '';
        position: absolute;
        left: -58px;
        height: 1px;
        width: 45px;
        top: 7px;
        display: block;
        background-color: var(--c-text);
    }

    .free-test-form {
        grid-area: form;
        padding-bottom: 3rem;
    }

    .free-test-form a {
        color: var(--c-link);
    }

    .free-test-form .c-form-label,
    .free-test-form .c-form h2 {
        display: none;
    }

    .privacy-policy a {
        color: #61c13a;
    }

    @media (min-width: 1199px) {
        .free-test-form {
            min-height: 666px;
        }
    }

    .footer-form-list {
        padding: 0;
        margin: 0;
    }

    .footer-form-item {
        margin-bottom: 7px;
        list-style-type: none;
    }

    .footer-form-item .parsley-errors-list {
        padding: 0;
    }

    .footer-form-item .parsley-custom-error-message {
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .footer-form-item.-select {
        display: flex;
        flex-direction: column;
    }

    .footer-form-item.-select .parsley-errors-list {
        order: 3;
    }

    .footer-form-item.-select .nice-select {
        height: 33px;
        padding: 10px 20px 9px 11px;
        border-color: var(--c-border);
        font-size: 12.5px;
        line-height: 1;
    }

    .footer-form-item.-select .current {
        color: #313131;
    }

    .free-test-form select {
        height: 33px;
    }

    .free-test-form input,
    .free-test-form select,
    .free-test-form textarea {
        width: 100%;
        font-size: 12.5px;
        padding: 9px 10px 9px 11px;
        border-radius: 4px;
        border-color: var(--c-border);
        color: #313131;
        min-height: 33px;
        background-color: #fff;
        border-width: 1px;
        border-style: solid;
        font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .form-description {
        padding-left: 4px;
        font-size: 11px;
        margin: 15px 0 15px;
        letter-spacing: 0.2px;
    }

    .privacy-policy {
        margin: 0;
    }

    .privacy-policy a {
        font-size: 12px;
        text-decoration: none;
    }

    .privacy-policy i {
        position: relative;
        top: 5px;
        width: 13px;
        height: 13px;
        right: inherit;
        margin-right: 4px;
        float: left;
    }


    @media (max-width: 1201px) {
        .free-test-scheme {
            grid-template-columns: 200px 1fr 300px;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content form' 'photo cite form';
            padding: 0 1rem;
        }

        .free-test-photo img {
            position: relative;
            display: block;
            transform: scale(100%) translate(0px, 0px);
        }

        .free-test-cite {
            align-self: center;
            padding-left: 0px;
        }

    }

    @media (max-width: 769px) {
        .free-test-scheme {
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content' 'form form' 'photo cite';
        }

        .free-test-photo {
            transform: scale(140%) translate(-19%, -14%);
        }

        .free-test-cite {
            padding-bottom: 3rem;
        }

        .free-test-cite * {
            font-size: 14px;
        }

        .free-test-form {
            < < < < < < < 1 e5c8831e94792433c6e9bcacfcce86f3f5b67bb
            padding-bottom: 3rem;
        = = = = = = = padding-bottom: 1 rem;
        >>> >>> > bb7a9d4b1014bd501c8c40e6c104b0c7aa7b8657
        }

        .free-test-cite q:before {
            left: -30px;
            height: 1px;
            width: 20px;
        }
    }

    .page-footer {
        margin-bottom: 0;
    }

    .page-footer-wrapper {
        background-color: #d3d6db;
    }

    .page-footer-container {
        max-width: 1120px;
        margin-inline: auto;
    }

    .container.-subfooter {
        max-width: 1250px;
    }

    .container.-copyright {
        max-width: 1160px;
    }

    .footer-menu,
    .footer-submenu {
        margin: 0;
        padding: 0;
    }

    .footer-menu {
        margin-inline: -2rem;
    }

    .footer-menu {
        display: flex;
    }

    .footer-block,
    .footer-submenu-item {
        list-style-type: none;
    }

    .footer-block {
        padding: 28px 28px 48px;
        margin: 0;
    }

    .footer-block-header {
        display: block;
        text-transform: uppercase;
        color: rgba(0, 0, 0, 0.35);
        padding: 1.5rem 0;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.6px;
    }

    .footer-block.-contacts {
        position: relative;
        color: #fff;
        background-color: #636c72;
    }

    .footer-block.-contacts .footer-block-header {
        color: #c1c4c7;
    }

    .footer-block.-contacts > * {
        position: relative;
    }

    .footer-block.-contacts:before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #636c72;
        width: 1000%;
    }

    .footer-block.-contacts a {
        color: #fff;
    }

    .page-footer-divider {
        margin: 0;
    }

    .footer-menu-block:nth-child(1) {
        flex-basis: 32%;
        max-width: 32%;
    }

    .footer-menu-block:nth-child(2) {
        flex-basis: 34%;
        max-width: 34%;
    }

    .footer-menu-block:nth-child(3) {
        flex-basis: 18%;
        min-width: 18%;
    }

    .footer-menu-block:nth-child(4) {
        flex-basis: 25.5%;
        max-width: 25.5%;
    }

    .footer-menu-block.footer-block.-contacts {
        padding-left: 65px;
    }

    .footer-submenu-item.-logos img {
        margin-bottom: 9px;
    }

    .footer-submenu-item.-logos small {
        font-size: 15px;
        display: block;
        line-height: 1.4;
        letter-spacing: 0.4px;
        letter-spacing: -0.01px;
    }

    .footer-submenu-item.-logos {
        margin: 0;
        padding: 0;
    }

    .footer-submenu-item.-logos + .footer-submenu-item.-logos {
        margin-top: 2rem;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item {
        line-height: 1.3;
        font-size: 12px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item + .footer-submenu-item {
        max-width: 270px;
        margin-top: 17px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item.-logos {
        position: relative;
        padding-bottom: 14px;
    }

    @media (min-width: 1200px) {
        .footer-menu-block:nth-child(2) .footer-submenu-item.-logos:after {
            content: '';
            display: block;
            position: absolute;
            bottom: -24px;
            left: 4px;
            width: 28px;
            height: 28px;
            border-left: 1px solid #545658;
            border-bottom: 1px solid #545658;
            border-radius: 0 0 0 14px;
        }
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
        padding-left: 49px;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item {
        line-height: 1.3;
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item + .footer-submenu-item {
        margin-top: 15px;
    }

    .footer-menu-block.-contacts .footer-submenu-item {
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block.-contacts .footer-submenu-item a {
        white-space: nowrap;
    }

    .footer-menu-block.-contacts .footer-submenu-item + .footer-submenu-item {
        margin-top: 12px;
    }

    .footer-menu-block.-contacts .footer-submenu {
        position: relative;
        height: 210px;
        margin-bottom: 104px;
    }

    .footer-menu-block.-contacts .footer-submenu:after {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        width: 70px;
        height: 4px;
        background-color: #fff;
    }

    .footer-contacts p {
        white-space: nowrap;
    }

    .footer-contacts p:nth-child(1) {
        font-size: 22px;
        margin-bottom: 9px;
    }

    .footer-contacts p:nth-child(2) {
        font-size: 22px;
        margin-bottom: 17px;
    }

    .footer-contacts address {
        font-size: 15px;
        line-height: 1.4;
        white-space: nowrap;
    }

    .subfooter-list {
        display: flex;
        justify-content: space-between;
        margin: 0;
        padding: 0;
        flex-flow: row wrap;
    }

    .subfooter-list .footer-link {
        flex: 1;
        padding: 0 1.5rem;
    }

    @media (max-width: 1440px) {
        .page-footer-container {
            padding-inline: 2rem;
        }

        .footer-menu-block:nth-child(1) {
            flex-basis: 24.5%;
            max-width: 24.5%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 26%;
            max-width: 26%;
        }

        .footer-block-header {
            padding: 1rem 0;
            font-size: 14px;
        }

        .footer-submenu-item.-logos small {
            font-size: 14px;
        }

        .footer-menu-block:nth-child(3) .footer-submenu-item {
            font-size: 15px;
        }

        .footer-menu-block.-contacts .footer-submenu-item {
            font-size: 15px;
        }

        .footer-contacts p:nth-child(1),
        .footer-contacts p:nth-child(2) {
            font-size: 15px;
        }

        .footer-menu-block.footer-block.-contacts {
            padding-left: 2rem;
        }

    }

    @media (max-width: 1300px) {
        .footer-menu {
            flex-flow: row wrap;
        }

        .footer-menu-block:nth-child(1) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 50%;
            max-width: 50%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 20%;
            max-width: 20%;
        }

        .footer-menu-block:nth-child(4) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .contacts-wrapper {
            display: flex;
            align-items: center;
        }

        .footer-menu-block.-contacts .footer-submenu {
            height: inherit;
            margin-bottom: 0;
            padding-right: 4rem;
        }

        .footer-menu-block.-contacts .footer-submenu:after {
            top: 0;
            bottom: 0;
            width: 2px;
            right: 0;
            height: inherit;
        }

        .footer-contacts {
            padding-left: 4rem;
        }
    }

    @media (max-width: 993px) {
        .footer-menu-block:nth-child(1) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 40%;
            max-width: 40%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
            padding-left: 0px;
        }
    }

    @media (max-width: 769px) {
        .footer-menu-block:nth-child(1) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 60%;
            max-width: 60%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 40%;
            max-width: 40%;
        }

        .contacts-wrapper {
            align-items: flex-start;
            flex-direction: column;
        }

        .footer-menu-block.-contacts .footer-submenu {
            height: inherit;
            margin-bottom: 0;
            padding-right: 0rem;
            padding-bottom: 2rem;
        }

        .footer-menu-block.-contacts .footer-submenu:after {
            top: inherit;
            bottom: 0;
            width: 4rem;
            right: 0;
            left: 0;
            height: 2px;
        }

        .footer-contacts {
            padding-left: 0;
            padding-top: 2rem;
        }
    }

    @media (max-width: 577px) {
        .footer-block {
            padding: 1rem;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block.footer-block.-contacts {
            padding-left: 1rem;
        }

        .footer-link,
        .footer-link span {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    }

    .container.-subfooter {
        padding: 2rem 0;
    }

    .hellogirl {
        position: fixed;
        z-index: 9999;
        bottom: -10px;
        right: 10px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease 0s;
        display: none !important;
    }

    .hellogirl__content {
        display: none;
        background: #ebecee;
        max-width: 210px;
        padding: 0px 0px 15px;
        margin: 0 30px 10px 0;
        line-height: 1.2;
        border-radius: 10px;
        position: relative;
        box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.11);
        text-align: center;
    }

    .hellogirl__title {
        padding: 8px 10px 8px;
        font-size: 16px;
        font-weight: bold;
    }

    .hellogirl__content_pilot .hellogirl__title {
        font-size: 23px;
        line-height: 1.1;
        padding-top: 20px;
    }

    .hellogirl__content_pilot .hellogirl__title span {
        color: #F5515A;
        font-size: 1em;
    }

    .hellogirl__content_pilot .hellogirl__img {
        margin: 12px 0 -5px;
    }

    .hellogirl__text {
        padding: 17px 5px 6px;
        font-size: 13px;
        letter-spacing: -0.01em;
        line-height: 1.4;
    }

    .hellogirl__text div {
        margin-top: 16px;
        font-size: 1em;
        letter-spacing: 0.01em;
        font-weight: bold;
    }

    .hellogirl__img {
        position: relative;
        z-index: 0;
        display: block;
    }

    .hellogirl__img img {
        width: 100%;
        max-width: 100%;
    }

    .hellogirl__img_video::before {
        content: '';
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        background-color: #fff;
        box-shadow: 0 0px 6px 1px rgb(0 0 0 / 35%);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'/%3E%3C/svg%3E");
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        will-change: transform;
        transition: transform 0.4s;
    }

    .hellogirl__img_video:hover::before {
        transform: translate(-50%, -50%) scale(1.1);
    }

    .hellogirl__logo {
        background: #fff;
        display: inline-block;
        margin: -17px auto -6px;
        padding: 12px 17px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 5;
    }

    .hellogirl__logo img {
        max-width: 55px;
        max-height: 55px;
    }

    .hellogirl__button {
        padding: 7px 10px 6px;
        background: #61c13a;
        display: block;
        max-width: 100%;
        font-size: 18px;
        line-height: 1;
        text-transform: none;
        vertical-align: top;
        margin-top: 0;
        box-shadow: 0 5px 0 #519e2d;
        color: #fff;
        margin: 10px 15px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
        transition: all 0.05s ease 0s;
    }

    .hellogirl__button:hover,
    .hellogirl__button:focus,
    .hellogirl__button:active {
        text-decoration: none;
        color: #fff;
        background: #519f2d;
    }

    .hellogirl__content_pilot .hellogirl__button {
        color: #fff !important;
        cursor: pointer;
    }

    .hellogirl__content:after {
        content: "";
        bottom: -18px;
        left: 91px;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #ebecee;
        position: absolute;
        border-color: #ebecee transparent transparent transparent;
        -webkit-filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, .5));
        filter: drop-shadow(1px 2px 1px rgba(0, 0, 0, 0.1));
    }

    .hellogirl__close {
        position: absolute;
        right: 0px;
        top: -8px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        background: url(https://happy-job.ru/img/happy-job/images/close.svg) center no-repeat;
        background-size: 17px auto;
    }

    .hellogirl__close:before {
        display: inline-block;
        content: "\00d7";
        font-size: 25px;
        line-height: 1;
        cursor: pointer;
        font-weight: bold;
        display: none;
    }

    @media (max-width: 767px) {
        .hellogirl__bg {
            display: none !important;
            position: fixed;
            top: 0;
            z-index: 9998;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease 0s;
        }

        .hellogirl__close {
            display: none !important;
            right: 5px !important;
            top: -40px !important;
            width: 30px !important;
            height: 30px !important;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #000;
            border-radius: 50%;
        }

        .hellogirl__video {
            display: none;
        }

        .hellogirl__content {
            max-width: unset !important;
            margin-right: 0 !important;
            border-radius: 0 !important;
        }

        .hellogirl {
            right: 0 !important;
            width: 100vw;
            bottom: -15px !important;
        }

        .hellogirl__img, .hellogirl__logo {
            display: none;
        }

        .hellogirl__text {
            padding: 0 5px 5px;
        }

        .hellogirl__text div {
            margin-top: 5px;
        }

        .hellogirl__button {
            max-width: 300px;
            margin: 5px auto 10px;
        }
    }

    @media (max-width: 576px) and (orientation: portrait) {
        .hellogirl__text-text {
            padding-left: 0px !important;
        }

        .hellogirl__img,
        .hellogirl__img + br {
            display: none;
        }
    }

    @media (max-height: 450px) and (orientation: portrait) {
        .hellogirl__content_pilot .hellogirl__title {
            margin-bottom: -20px;
        }
    }

    @media (max-height: 450px) {
        .hellogirl__img, .hellogirl__logo {
            display: none;
        }

        .hellogirl__button {
            font-size: 14px;
        }

        .hellogirl__video {
            text-align: center;
        }

        .hellogirl__video canvas {
            height: 110px;
            margin-right: 12px;
        }

        .hellogirl__text:after {
            border-left-width: 10px;
            border-right-width: 10px;
            border-top-width: 10px;
            bottom: -8px;
            left: 70px
        }
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        var outputCanvas = document.getElementById('output'),
            output = outputCanvas.getContext('2d', {willReadFrequently: true}),
            bufferCanvas = document.getElementById('buffer'),
            buffer = bufferCanvas.getContext('2d', {willReadFrequently: true}),
            video = document.getElementById('video-girl'),
            width = outputCanvas.width,
            height = outputCanvas.height,
            interval;
        if ($(window).width() > 767) {
            playgirlvideo();
        }
        $(window).resize(function () {
            if ($(window).width() > 767 && !$('#video-girl').hasClass('playing')) {
                playgirlvideo();
            }
        });
        var cookieObj = new URLSearchParams(document.cookie.replaceAll("; ", "&"));
        var cookieHideGirl = cookieObj.get('girl');

        if (cookieHideGirl == '1') {
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
        } else {
            var cookieElGirl = cookieObj.get('elgirl');
            if (!cookieElGirl) {
                cookieElGirl = '0';
            } else if (!$('.hellogirl__content').filter(':eq(' + cookieElGirl + ')').length) {
                cookieElGirl = '0';
            } else {
                cookieElGirl = parseInt(cookieElGirl);
                cookieElGirl++;
                if (cookieElGirl > $('.hellogirl__content').length - 1) {
                    cookieElGirl = '0';
                }
            }
            document.cookie = 'elgirl=' + cookieElGirl;
            $('.hellogirl__content').filter(':eq(' + cookieElGirl + ')').show();
            setTimeout(function () {
                $('.hellogirl,.hellogirl__bg').css({'visibility': 'visible', 'opacity': '1'});
            }, 1000);
        }

        $('.hellogirl__close').on('click', function (e) {
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
        });

        $('.hellogirl__button,.hellogirl__img_video').on('click', function (e) {
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
            if ($(this).hasClass('hellogirl__scroll')) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('.footer-form').offset().top - $('header').height() - 20
                }, 1000);
                return false;
            }
        });

        function processFrame() {
            buffer.drawImage(video, 0, 0);

            var image = buffer.getImageData(0, 0, width, height),
                imageData = image.data,
                alphaData = buffer.getImageData(0, height + 1, width, height).data;

            for (var i = 3, len = imageData.length; i < len; i = i + 4) {
                imageData[i] = alphaData[i - 1];
            }

            output.putImageData(image, 0, 0, 0, 0, width, height);
        }

        function playgirlvideo() {
            $('#video-girl source').each(function () {
                $(this).attr('src', $(this).data('src'));
            });
            $('#video-girl').addClass('playing');
            video.load();
            video.addEventListener('play', function () {
                clearInterval(interval);
                interval = setInterval(processFrame, 40)
            }, false);

            // Firefox doesn't support looping video, so we emulate it this way
            video.addEventListener('ended', function () {
                video.play();
            }, false);
            video.play();
        }
    });

</script>

<!-- endrender common/footer-->

<link async rel="stylesheet" type="text/css" href="/fonts/gp/stylesheet.css">
<link async rel="stylesheet" type="text/css" href="/fonts/fontello-a444d455/css/fontello.css">
<svg style="display: none">
    <symbol id="videoCircle" viewbox="0 0 152.51 152.51">
        <circle cx="76.26" cy="76.26" r="76.26"></circle>
    </symbol>
    <symbol id="videoTriangle" viewbox="0 0 152.51 152.51">
        <path d="M61,47.32v57.87c0,2.49,4.06,3.74,6.43,2l38.06-28.25a2.32,2.32,0,0,0,.06-3.91L67.49,45.39C65.15,43.56,61,44.8,61,47.32Z"></path>
    </symbol>
    <symbol id="videoArrow" viewbox="0 0 55.23 50.01">
        <path d="M54,22,33.26,1.26A4.29,4.29,0,1,0,27.2,7.32L40.86,21H4a4,4,0,1,0,0,8H40.86L27.2,42.69a4.29,4.29,0,1,0,6.06,6.06L54,28A4.29,4.29,0,0,0,54,22Z"></path>
    </symbol>
    <symbol id="caveat-k" viewbox="0 0 17 18" fill="none">
        <path d="M11.165 17.19C10.685 17.04 10.265 16.815 9.905 16.515C9.545 16.185 9.2 15.825 8.87 15.435C8.72 15.255 8.465 14.895 8.105 14.355C7.745 13.815 7.355 13.215 6.935 12.555C6.545 11.895 6.17 11.28 5.81 10.71C5.45 10.11 5.18 9.66 5 9.36C4.85 9.81 4.685 10.185 4.505 10.485C4.355 10.755 4.28 11.19 4.28 11.79C3.98 12.21 3.755 12.69 3.605 13.23C3.485 13.74 3.35 14.25 3.2 14.76C3.11 15.09 2.96 15.39 2.75 15.66C2.57 15.93 2.33 16.17 2.03 16.38C1.67 16.35 1.355 16.23 1.085 16.02C0.845 15.81 0.635 15.6 0.455 15.39C0.275 15.03 0.2 14.685 0.23 14.355C0.26 14.025 0.335 13.71 0.455 13.41C0.515 13.14 0.68 12.615 0.95 11.835C1.25 11.055 1.565 10.215 1.895 9.315C2.225 8.385 2.525 7.56 2.795 6.84C3.065 6.09 3.215 5.625 3.245 5.445C3.425 4.845 3.74 4.2 4.19 3.51C4.67 2.79 5 2.01 5.18 1.17C5.24 0.959999 5.39 0.764999 5.63 0.584999C5.87 0.374999 6.14 0.269999 6.44 0.269999C6.77 0.239999 7.04 0.404999 7.25 0.764999C7.31 0.794999 7.4 0.839999 7.52 0.899999C7.64 0.929999 7.73 0.99 7.79 1.08C8.03 1.35 8.165 1.635 8.195 1.935C8.255 2.235 8.195 2.55 8.015 2.88C7.625 3.57 7.295 4.14 7.025 4.59C6.785 5.01 6.545 5.475 6.305 5.985C6.065 6.495 5.795 7.2 5.495 8.1C6.005 7.98 6.38 7.89 6.62 7.83C6.86 7.74 7.085 7.605 7.295 7.425C7.535 7.215 7.85 6.9 8.24 6.48C8.39 6.33 8.69 6.045 9.14 5.625C9.62 5.175 10.115 4.695 10.625 4.185C11.165 3.675 11.63 3.225 12.02 2.835C12.44 2.445 12.665 2.22 12.695 2.16C12.875 1.89 13.055 1.65 13.235 1.44C13.445 1.2 13.715 1.02 14.045 0.899999C14.495 0.959999 14.81 1.05 14.99 1.17C15.17 1.26 15.515 1.515 16.025 1.935C16.175 2.055 16.235 2.34 16.205 2.79C16.175 3.21 16.01 3.54 15.71 3.78C15.17 4.2 14.495 4.74 13.685 5.4C12.875 6.06 12.005 6.75 11.075 7.47C10.175 8.19 9.275 8.865 8.375 9.495C8.795 10.185 9.17 10.845 9.5 11.475C9.83 12.075 10.1 12.585 10.31 13.005C10.37 13.755 10.64 14.265 11.12 14.535C11.63 14.775 12.245 14.895 12.965 14.895C13.205 15.015 13.355 15.165 13.415 15.345C13.505 15.495 13.55 15.675 13.55 15.885C13.58 16.065 13.61 16.245 13.64 16.425C13.22 16.695 12.92 16.935 12.74 17.145C12.59 17.325 12.41 17.43 12.2 17.46C12.02 17.46 11.675 17.37 11.165 17.19Z"
              fill="currentcolor"></path>
    </symbol>
</svg>
<script type="text/javascript" src="/jquery/swiper/swiper-bundle.min.js"></script>
<style>
    .node-article-blog figure.image figcaption {
        text-align: center;
        font-size: 14px;
        font-style: italic;
        letter-spacing: 0.5px;
        opacity: 0.5;
    }

    .container.blog figure.image img {
        margin-left: auto;
        margin-right: auto;
    }

    html.swal2-shown.swal2-height-auto,
    body.swal2-shown.swal2-height-auto {
        overflow: hidden;
    }

    .swal2-shown.swal2-height-auto .header-top,
    .swal2-shown.swal2-height-auto .header-menu-dop {
        padding-right: 1rem;
    }

    .swal2-title {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .modal-title-top {
        font-size: 1.7rem;
        display: flex;
        flex-direction: column;
        margin-top: 1.5rem;
        font-weight: bold;
    }

    .modal-product {
        font-size: 0.7em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
    }

    .modal-product .modal-description {
        font-size: 0.7em;
        font-weight: normal;
        letter-spacing: 0px;
    }

    .form-input {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #comment.form-input {
        height: 110px;
    }

    .swal2-container .swal2-confirm.swal2-styled {
        background: #f4515a;
    }

    .form-label {
        border-top: none;
        text-align: left;
        font-size: 14px;
        padding-bottom: 0.3rem;
    }

    .form-label:before {
        content: attr(title);
    }

    .form-label:not([title="Комментарий:"]):after {
        content: "*";
        color: red;
        transform: translateY(-3px);
    }

    .button {
        display: inline-flex;
        font-size: clamp(0.875rem, 0.75rem + 0.625vw, 1.3125rem);
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.8rem 1rem 0.7rem;
        transition: color 0s, background-color 0s ease-in-out,
        border-color 0s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: 0 4px 0 #c63839 !important;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 1;
        max-height: 50px;
        justify-content: center;
        align-items: center;
    }

    .button.-client {
        background-color: #61c13b;
        box-shadow: 0 4px 0 #46882c !important;
        font-weight: 700;
    }

    .button.-service {
        background-color: #355fe5;
        box-shadow: 0 4px 0 #213b8e !important;
    }

    .button.-feedbackx {
        background-color: #ffaa00;
        box-shadow: 0 4px 0 #c88600 !important;
        color: #000;
    }

    .button.-survey {
        background-color: #a5a5a5;
        box-shadow: 0 4px 0 #6c6c6c !important;
        color: #000;
    }

    .button:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .btn.btn-3 + .button {
        transform: translateY(-1rem);
    }

    .b-top-title .button {
        max-width: 190px;
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child,
    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child:before {
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    .order-demo-wrapper {
        position: relative;
    }

    html.with-fancybox {
        overflow: hidden;
    }

    .fancybox__container .fancybox__backdrop {
        background-color: rgba(0, 0, 0, .4);
    }

    .fancybox__content > .carousel__button.is-close {
        top: 0px;
        color: var(--fancybox-color, #000);
        background-color: #fff;
        border-radius: 5px;
    }

    .fancybox__content > .carousel__button.is-close:hover {
        color: #61C13B;
    }

    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide,
    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide .fancybox__content {
        overflow: hidden;
    }

    .fancybox__content :focus:not(.carousel__button.is-close) {
        outline: 1px solid #000;
    }

    .fancybox__content {
        padding: 20px 36px;
    }

    .main-modal {
        background-color: #fff;
        max-width: 500px;
        border-radius: 10px;
    }

    .main-modal-flow {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .main-modal-header {
    }

    .main-modal-title {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }

    .main-modal-form {
        display: grid;
        grid-template-columns: 1fr;
        grid-auto-flow: row dense;
        grid-gap: 0.75rem;
    }

    .main-modal-input {
        display: flex;
        flex-direction: column;
    }

    .main-modal-input input,
    .main-modal-input select,
    .main-modal-input textarea {
        display: block;
        font-size: 13px;
        line-height: 1.42857143;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        padding: 10px 14px;
        border-radius: 4px;
        color: #313131;
        outline: none;
    }

    .main-modal-input textarea {
        max-height: 100px;
    }

    .main-modal-input button {
        padding-bottom: 0.4rem;
    }

    .main-modal-input input[type="date"] {
        position: relative;
        padding: 7px 16px 5px 13px;
    }

    .main-modal-input input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        inset: 0;
        width: 92.5%;
        height: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M5 6h14v2H5z' opacity='.3'/%3E%3Cpath fill='currentColor' d='M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 20px 20px;
    }

    .main-modal-input select::-ms-expand {
        display: none;
    }

    .main-modal-input select#time {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7h1.5Z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 12px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select#respondents {
        max-width: 140px;
        color: rgba(0, 0, 0, 0.55);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 14px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select option {
        padding-top: 4px;
    }

    .main-modal-input input[type="date"]::-moz-selection {
        background: green;
    }

    .main-modal-input input[type="date"]::selection {
        background: green;
    }

    .main-modal-label {
        color: #777;
        font-size: 13px;
        margin-bottom: 0;
    }

    .main-modal-label sup {
        color: red;
    }

    .main-modal-input.-submit-button {
        align-items: center;
        justify-content: center;
    }

    .main-modal-divider {
        height: 1px;
        background-color: #eee;
        margin: 0.5rem 0;
    }

    .main-modal-footer {
        background-color: #fff;
        padding: 0;
        text-align: center;
    }

    .main-modal-footer p {
        margin: 0;
        font-size: 13px;
        line-height: 1.2;
    }

    .main-modal-footer p:nth-child(2) {
        margin: 0 0 1rem;
    }

    .main-modal-footer a,
    .main-modal-footer a:hover {
        color: var(--c-link);
    }

    .main-modal-footer a[href="/privacy-policy"] {
        display: flex;
        gap: 0.3rem;
        align-items: center;
        justify-content: center;
    }

    .privacy-policy-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .main-modal-footer em {
        font-size: 1.6em;
        font-weight: bold;
        font-style: normal;
    }

    .main-modal-row {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
    }

    .compensate-for-scrollbar {
        padding-right: 0 !important;
    }

    .video-case {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        z-index: 1;
    }

    .video-case a {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .video-case a .videos-block,
    .video-case a .videos-block .videos-image-wrapper,
    .video-case a .videos-block .videos-image-wrapper picture {
        height: 100%;
    }

    .video-case a .videos-block {
        position: relative;
    }

    .video-case a .videos-block .videos-image-wrapper {
        max-height: 100%;
    }

    .video-case a .videos-block .videos-image-wrapper picture {
        display: block;
        transition: transform 0.3s;
    }

    .video-case a:hover .videos-block .videos-image-wrapper picture {
        transform: scale(1.05, 1.05);
    }

    .video-case a .videos-block .videos-caption .videos-heading,
    .video-case a .videos-block .videos-caption {
        height: 0;
        padding: 0;
        visibility: hidden;
        opacity: 0;
    }

    .video-case a .videos-play-button {
        opacity: 1;
    }

    .video-case a .videos-block:after {
        content: none !important;
    }

    @media (min-width: 1200px) {
        .video-case a .videos-block .videos-image-wrapper {
            height: 442px;
        }
    }

    @media (max-width: 992px) {
        .video-case {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .video-case {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .table {
            margin: 1rem 0;
        }

        .adactive-cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .adactive-cards > td {
            width: 100% !important;
        }

        .table td,
        .table th {
            padding: 0.25rem 0.5rem !important;
        }

        .table td p,
        .table th p {
            font-size: 14px !important;
        }

        .video-case {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .fancybox__slide {
            padding: 0 !important;
        }

        .fancybox__content {
            border-radius: 0px !important;
        }

        .fancybox__content > .carousel__button.is-close {
            top: 0 !important;
            right: 7px;
            position: fixed !important;
        }

        .main-modal-input textarea {
            max-height: 40px;
        }

    }

    @media (max-width: 480px) {
        .video-case {
            height: 170px;
        }
    }
</style>
<style>

    .main-modal h2 {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }

    .main-modal-input .parsley-errors-list[aria-hidden="false"] {
        margin-bottom: -14px;
    }

    .main-modal-input .parsley-custom-error-message {
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .main-modal .button-default {
        display: block;
        margin-inline: auto;
    }

    .main-modal .c-form-policy {
        text-align: center;
        border-top: 1px solid #eee;
        padding: 0;
        margin-top: 2rem;
    }

    .main-modal .c-form-policy a {
        display: inline-block;
    }

    @media (min-width: 1024px) {
        .fancybox__slide {
            padding: 30px 100px;
        }
    }
</style>
<div class="main-modal" id="main-modal" style="display:none; ">
    <style>

        .c-form input,
        .c-form select,
        .c-form textarea {
            width: 100%;
            font-size: 12.5px;
            padding: 9px 10px 9px 11px;
            border-radius: 4px;
            border-color: var(--c-border);
            color: #313131;
            min-height: 33px;
            height: 33px;
            background-color: #fff;
            border-width: 1px;
            border-style: solid;
            font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }

        .c-form select {
            padding-top: 8px;
        }

        .c-form-label {
            display: block;
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-label sup {
            color: red;
        }

        .c-form-list {
            padding: 0;
            margin: 0;
        }

        .c-form-item {
            list-style-type: none;
            margin-bottom: 0.75rem;
        }

        .c-form-item .parsley-errors-list {
            padding: 0;
        }

        .c-form-item .parsley-custom-error-message {
            list-style-type: none;
            font-size: 9px;
            color: red;
        }

        .c-form-item .parsley-custom-error-message:before {
            display: none !important;
            opacity: 0 !important;
        }

        .c-form-label {
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-policy {
            padding: 1rem 0 0;
        }

        .c-form-policy a:hover {
            color: var(--c-link);
        }

        .c-form textarea {
            height: 100px;
        }

        .c-form-policy p {
            font-size: 11px;
            margin: 1rem 0 0;
            letter-spacing: 0.2px;
        }

        .c-form-policy p strong {
            font-size: 150%;
        }

        .c-form-policy .icon {
            position: relative;
            top: 1px;
            width: 13px;
            height: 13px;
            right: inherit;
            margin-right: 4px;
            float: left;
        }

        .c-form-date {
            max-width: 300px;
            margin: 0 auto 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            grid-column-gap: 1rem;
            grid-row-gap: 0.5rem;
        }

        .c-form-date p {
            grid-column: 1 / 3;
            font-weight: bold;
            text-align: center;
            font-size: 12px;
            font-style: italic;
            padding-bottom: 5px;
            color: #777;
            margin: 0;
        }

    </style>

    <form id="form-id" class="c-form" data-parsley-validate>
        <h2>Заполните заявку</h2>

        <ul class="c-form-list">
            <li class="c-form-item">
                <input type="hidden" name="form-id" value="form-id">
            </li>
            <li class="c-form-item">
                <input type="hidden" name="check" value="bot" id="checkinput">
            </li>

            <li class="c-form-item">
                <label class="c-form-label">
                    Ваше имя
                    <sup>*</sup>
                </label>
                <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required
                       data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Компания
                    <sup>*</sup>
                </label>
                <input type="text" id="company" name="company" placeholder="Ваша компания" required
                       data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Количество сотрудников
                    <sup>*</sup>
                </label>
                <select id="number" name="number" required data-parsley-trigger="change"
                        data-parsley-error-message="Укажите количество сотрудников">
                    <option value="Количество сотрудников" selected disabled>
                        Количество сотрудников
                    </option>
                    <option value="0-100">
                        0-100
                    </option>
                    <option value="100-500">
                        100-500
                    </option>
                    <option value="500-1500">
                        500-1500
                    </option>
                    <option value="1500-5000">
                        1500-5000
                    </option>
                    <option value="5000+">
                        5000+
                    </option>
                </select>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Телефон
                    <sup>*</sup>
                </label>
                <input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change"
                       data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$"
                       data-parsley-error-message="Укажите номер телефона">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Корпоративный e-mail
                    <sup>*</sup>
                </label>
                <input type="email" id="email" name="email" placeholder="Ваш e-mail" required
                       data-parsley-trigger="change"
                       data-parsley-pattern="/^(?!.*@(gmail\.com|yahoo\.com|rambler\.ru|mail\.ru|yandex\.ru|ya\.ru)$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"
                       data-parsley-error-message="Укажите корпоративный e-mail">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Комментарий
                </label>
                <textarea id="comment" name="comment"></textarea>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">

                </label>
                <div class="c-form-date" style="display:none;">

                    <p>Вы также можете указать время,<br>в которое вам будет удобнее принять звонок </p>
                    <div class="c-form-date-column">
                        <input type="date" id="current-date" name="current-date" value="2024-01-24" min="2024-01-24">
                    </div>

                    <div class="c-form-date-column">
                        <select id="time" name="time">
                            <option value="9:00">
                                9:00
                            </option>
                            <option value="9:15">
                                9:15
                            </option>
                            <option value="9:30">
                                9:30
                            </option>
                            <option value="9:45">
                                9:45
                            </option>
                            <option value="10:00">
                                10:00
                            </option>
                            <option value="10:15">
                                10:15
                            </option>
                            <option value="10:30">
                                10:30
                            </option>
                            <option value="10:45">
                                10:45
                            </option>
                            <option value="11:00">
                                11:00
                            </option>
                            <option value="11:15">
                                11:15
                            </option>
                            <option value="11:30">
                                11:30
                            </option>
                            <option value="11:45">
                                11:45
                            </option>
                            <option value="12:00">
                                12:00
                            </option>
                            <option value="12:15">
                                12:15
                            </option>
                            <option value="12:30">
                                12:30
                            </option>
                            <option value="12:45">
                                12:45
                            </option>
                            <option value="13:00">
                                13:00
                            </option>
                            <option value="13:15">
                                13:15
                            </option>
                            <option value="13:30">
                                13:30
                            </option>
                            <option value="13:45">
                                13:45
                            </option>
                            <option value="14:00">
                                14:00
                            </option>
                            <option value="14:15">
                                14:15
                            </option>
                            <option value="14:30">
                                14:30
                            </option>
                            <option value="14:45">
                                14:45
                            </option>
                            <option value="15:00">
                                15:00
                            </option>
                            <option value="15:15">
                                15:15
                            </option>
                            <option value="15:30">
                                15:30
                            </option>
                            <option value="15:45">
                                15:45
                            </option>
                            <option value="16:00">
                                16:00
                            </option>
                            <option value="16:15">
                                16:15
                            </option>
                            <option value="16:30">
                                16:30
                            </option>
                            <option value="16:45">
                                16:45
                            </option>
                            <option value="17:00">
                                17:00
                            </option>
                            <option value="17:15">
                                17:15
                            </option>
                            <option value="17:30">
                                17:30
                            </option>
                            <option value="17:45">
                                17:45
                            </option>
                            <option value="18:00">
                                18:00
                            </option>
                        </select>
                    </div>

                </div>
            </li>
        </ul>
        <button id="form-id-submit" type="submit" class="button-default">Отправить</button>

        <div class="c-form-policy">
            <p>
                Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
                <br>
                <a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика конфиденциальности</a>
            </p>
            <p>
                Или пишите нам на почту
                <br>
                <strong>
                    <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                </strong>
            </p>
        </div>
    </form>

    <!-- /12. Форма Протестируйте бесплатно -->

    <script>
        $(function () {

            const getSubDomain = (url) => {
                const urlObj = new URL(url);
                const segments = urlObj.pathname.split('/').filter(part => part.length > 0);
                return segments.length > 0 ? segments[0] : null;
            };

            const sendMetrik = (formNodeID, formURL) => {
                switch (formNodeID) {
                    case 'compare-index':
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventCategory': 'click',
                            'eventAction': 'index'
                        });
                        console.log('Метрика “Сравните себя” в отрасли')
                        break;
                    case 'form-id':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                        console.log('Метрика “Заполните заявку” на всех страницах сайта')
                        break;
                    case 'free-demo':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'free_demo'});
                        console.log('Метрика “Протестируйте бесплатно” внизу страниц сайта')
                        break;
                    case 'hrbrand':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                        console.log('Метрика со страницы платформ')
                        break;
                    case 'trend':
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventCategory': 'trend',
                            'eventAction': 'reportform'
                        });
                        console.log('Метрика Типы исследований')
                        break;
                    default:
                        switch (formURL) {
                            case 'types-of-surveys':
                                dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                                console.log('Метрика со страницы платформ');
                                break;
                            default:
                                console.log('?? metrika ??')
                                break;
                        }
                        console.log('?? metrika ??')
                        break;
                }
            };

            const maskOptions = {
                mask: "+{7}(000)000-00-00",
                lazy: false,
                placeholderChar: "_",
            };

            let inputFields = document.querySelectorAll('#form-id input[type="tel"]');
            console.log(inputFields)
            let imaskArr = [];
            inputFields.forEach((input) => {
                imaskArr.push(IMask(input, maskOptions))
            });

            /* ОБРАБОТКА ПОЛЕЙ СО ВРЕМЕНЕМ */

            const currentDateInput = document.getElementById('current-date');
            const timeSelect = document.getElementById('time');

            const currentDate = new Date().toISOString().slice(0, 10);
            currentDateInput.value = currentDate;
            currentDateInput.min = currentDate;

            function setOptions() {
                const currentTime = new Date().getHours() * 60 + new Date().getMinutes();
                let closestTimeOption = null;
                let closestTimeDiff = Infinity;

                for (let i = 0; i < timeSelect.options.length; i++) {
                    const timeOption = timeSelect.options[i];
                    const timeValue = timeOption.value.split(':').map(Number);
                    const timeMinutes = timeValue[0] * 60 + timeValue[1];

                    if (currentDateInput.value === currentDate && timeMinutes <= currentTime) {
                        timeOption.disabled = true;
                        timeOption.hidden = true;
                    } else {
                        timeOption.disabled = false;
                        timeOption.hidden = false;

                        const timeDiff = timeMinutes - currentTime;
                        if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                            closestTimeDiff = timeDiff;
                            closestTimeOption = timeOption;
                        }
                    }
                }

                if (closestTimeOption !== null) {
                    closestTimeOption.selected = true;
                } else {
                    timeSelect.options[timeSelect.options.length - 1].selected = true;
                }
            }

            setOptions();

            currentDateInput.addEventListener('change', function () {
                const selectedDate = new Date(this.value);
                const today = new Date();
                const tomorrow = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
                const selectedTime = timeSelect.value;
                let closestTimeOption = null;
                let closestTimeDiff = Infinity;

                for (let i = 0; i < timeSelect.options.length; i++) {
                    const timeOption = timeSelect.options[i];
                    const timeValue = timeOption.value.split(':').map(Number);
                    const timeMinutes = timeValue[0] * 60 + timeValue[1];

                    if (selectedDate < tomorrow) {
                        if (selectedDate.getTime() === today.getTime() && timeMinutes <= currentTime) {
                            timeOption.disabled = true;
                            timeOption.hidden = true;
                        } else {
                            timeOption.disabled = false;
                            timeOption.hidden = false;
                            const timeDiff = timeMinutes - currentTime;
                            if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                                closestTimeDiff = timeDiff;
                                closestTimeOption = timeOption;
                            }
                        }
                    } else {
                        timeOption.disabled = false;
                        timeOption.hidden = false;
                    }
                }

                if (closestTimeOption !== null) {
                    closestTimeOption.selected = true;
                } else {
                    // Если нет доступного времени, выбрать последнюю опцию
                    timeSelect.options[timeSelect.options.length - 1].selected = true;
                }
            });
            const checkWorkTime = () => {
                const now = new Date();
                const startWorkTime = new Date();
                startWorkTime.setHours(9, 0, 0, 0);
                const endWorkTime = new Date();
                endWorkTime.setHours(18, 0, 0, 0);
                if (now >= startWorkTime && now <= endWorkTime) {
                    return "Менеджер свяжется с вами в ближайшее время";
                } else {
                    return "Наш менеджер свяжется с вами в рабочее время с 09:00 - 18:00 по Москве";
                }
            }

            const sendForm = (formNode, formData, formNodeID, formURL) => {
                fetch('/ajax.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(function (response) {
                        if (!response.ok) {
                            throw new Error('Ошибка HTTP: ' + response.status);
                        }

                        return response.json();
                    })
                    .then(function (data) {
                        if (data.status === 'error') {
                            Swal.fire('Ошибка отправки!', data.msg, data.status);
                        } else if (data.status === 'success') {
                            const timeStatus = checkWorkTime();
                            console.log(formNodeID);
                            sendMetrik(formNodeID, formURL);
                            Swal.fire('Благодарим за оставленную заявку!', timeStatus, data.status);
                        }
                        $("#form-id").find('input[type="text"], input[type="phone"], textarea').val('');
                        inputFields = document.querySelectorAll('input[type="tel"]');
                        inputFields.forEach((input) => {
                            IMask(input, maskOptions);
                        });

                        ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    })
                    .catch(function (error) {
                        console.log('sendForm :: errors (catch): ');
                        console.log(error);

                        console.error('Ошибка отправки данных на сервер:', error);
                        Swal.fire({
                            icon: 'question',
                            title: 'А вот это уже интересно',
                            text: error.toString(),
                        });
                        ym(46152993, 'reachGoal', 'event_error');
                    });
            };

            // 1
            $('#form-id input').on('input', function () {
                const Form = $('#form-id').parsley();
            });


            // 2
            $('#form-id-submit').on('click', function (event) {
                const Form = $('#form-id').parsley();

                if (Form.isValid()) {
                    formSubmitHandler(event)
                }
            })

            function formSubmitHandler(event) {
                event.preventDefault();

                $(document).find('.main-modal .is-close').trigger('click');
                const formNode = document.getElementById('form-id');
                const formData = new FormData(formNode);
                const formNodeID = 'form-id';
                const formURL = window.location.href;
                sendForm(formNode, formData, formNodeID, formURL);
                console.log('Отправилось!'); // file?
                imaskArr.forEach((elem) => {
                    elem.value = "";
                    elem.updateValue();
                })
                formNode.reset();
            }
        });
    </script>
</div>
<div class="main-modal" id="get-email" style="display:none; ">
    <div class="main-modal-flow">
        <header class="main-modal-header">
            <h2 class="main-modal-title">Оставьте e-mail</h2>
            <p style="text-align: center;">и продолжите чтение</p>
        </header>
        <form class="main-modal-form" id="modal-email">
            <div class="main-modal-item">
                <div class="main-modal-input">
                    <label for="email" class="main-modal-label">Ваш e-mail:<sup>*</sup></label>
                    <input id="email" name="email" type="email" placeholder="Ваш e-mail" required>
                </div>
            </div>
            <div class="main-modal-item">
                <div class="main-modal-input -submit-button">
                    <button class="button button-default">Отправить</button>
                </div>
            </div>
        </form>
        <div class="main-modal-divider"></div>
        <footer class="main-modal-footer">
            <p>Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.</p>
            <p><a href="/privacy-policy/"><b class="privacy-policy-icon"></b> Политика конфиденциальности</a></p>
            <p>Или пишите нам на почту:</p>
            <p><em><a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a></em></p>
        </footer>
    </div>
</div>

<script>
    $(function () {
        $("#modal-email").on("submit", function (event) {
            event.preventDefault();
            let formData = {};
            $(this).serializeArray().map(function (x) {
                formData[x.name] = x.value;
            })
            console.log(formData);
            $.ajax({
                url: "/ajax",
                method: "POST",
                dataType: "json",
                data: formData,
            }).done(function (resp) {
                $(document).find('.carousel__button.is-close').trigger('click');

                ym(69351811, 'reachGoal', 'event_send_form');

                if (resp.status === "success") {
                    Swal.fire(
                        'Отлично! ',
                        'Желаем приятного чтения',
                        'success'
                    )
                    $('.article-hide-content').addClass('active');
                    $('.show-article').hide();
                    $("#get-email").find('input[type="text"], input[type="phone"], input[type="email"], textarea').val('');
                    ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    localStorage.setItem('happy-articlee-read', 1);
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();

                }
                if (resp.status === "error") {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'error',
                        title: 'Упс!',
                        text: message,
                    });
                    ym(46152993, 'reachGoal', 'event_error')
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();
                }
                if ((resp.status !== "success") && (resp.status !== "error")) {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'question',
                        title: 'А вот это уже интересно',
                        text: message,
                    })
                    ym(46152993, 'reachGoal', 'event_error')
                }
            });
            return false
        });
    })
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le6d_gaAAAAAKOZFwTtVob1nLTWnMFhppylmKt4"></script>
<script async type="text/javascript" src="/js/0f83699923be789d2b9f6d89ce43f38e.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(46152993, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46152993" style="position:absolute; left:-9999px;" alt=""></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script src="/jquery/imask.js"></script>
<script src="/jquery/parsley/parsley.min.js"></script>
<link rel="stylesheet" href="/jquery/niceSelect/style.css">
<script src="/jquery/niceSelect/jquery.nice-select.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener('mouseup', checkSelection);
        document.addEventListener('touchend', checkSelection);

        function checkSelection() {
            var selectedText = '';
            if (window.getSelection) {
                selectedText = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "Control") {
                selectedText = document.selection.createRange().text;
            }
            if (isValidEmail(selectedText)) {
                console.log('выделен текст содержащий email')
                ym(46152993, 'reachGoal', 'event_textselect_slaesemail');
                console.log('вызов яндекс-метрики для выделенного email')
            }
        }

        function isValidEmail(text) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(text);
        }
    });
</script>