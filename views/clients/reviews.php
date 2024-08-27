
<!-- render common/header-menu-->


<style>
    .breadcrumbs-list:after{
        display: none !important;
    }

    .header-menu {
        background: #fff;
    }

    .yo {
    }

    .parallax-window {
        min-height: 500px;
        background: transparent;
        position: absolute;
        width: 100%;
    }
    .top-baner {
        color: #243958;
        font-size: 44px;
        font-weight: 700;
        line-height: 1.2;
        height: 500px;
        overflow: hidden;
        position: relative;
    }
    .top-baner .container,
    .top-baner .container .col {
        height: 100%;
    }
    .top-baner picture img {
        width: 100vw;
        transform: translateZ(-0.5px) scale(1.3);
        -webkit-transform: translateZ(-0.5px) scale(1.3);
        z-index: -1;
        top: -5%;
        left: 0;
        position: absolute;
    }
    .b-btn .btn:first-child {
        margin-right: 24px;
    }
    .b-top-title {
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 85px;
    }
    .b-top-title .slogan {
        color: #fff;
        width: 290px;
        background: rgba(31, 59, 61, 0.7);
        padding: 6px 20px;
        font-size: 50px;
        border-radius: 12px;
        font-weight: 200;
        text-align: left;
    }
    .slogan span {
        font-size: 20px;
        display: block;
        margin-bottom: 10px;
    }
    @media (max-width: 991px) {
        .top-baner picture img {
            width: 2400px;
        }
    }
    @media (max-width: 480px) {
        .b-btn .btn {
            margin-top: 20px;
            max-width: 210px;
            width: 100%;
        }
        .b-btn .btn:first-child {
            margin-top: 0;
        }
    }
</style>

<!-- endrender clients/reviews/01-top-baner-->

<!-- render clients/reviews/02-content-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<style>
    .yo {}

    @font-face {
        font-family: 'Gotham Pro Light';
        src: url('/fonts/gp/GothamPro-Light.eot');
        src: url('/fonts/gp/GothamPro-Light.eot?#iefix') format('embedded-opentype'), url('/fonts/gp/GothamPro-Light.woff2') format('woff2'), url('/fonts/gp/GothamPro-Light.woff') format('woff'), url('/fonts/gp/GothamPro-Light.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham Pro';
        src: url('/fonts/gp/GothamPro.eot');
        src: url('/fonts/gp/GothamPro.eot?#iefix') format('embedded-opentype'), url('/fonts/gp/GothamPro.woff2') format('woff2'), url('/fonts/gp/GothamPro.woff') format('woff'), url('/fonts/gp/GothamPro.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
    }

    .clients-filter-block h1 {
        font-family: 'Gotham Pro Light';
        font-weight: 300;
    }

    .clients-filter a.current {
        background: #61c13a;
        border: 1px solid #61c13a;
        color: #f9f9f9;
        border-radius: 3px;
    }

    .clients-filter a {
        display: inline-block;
        padding: 3px 8px;
        color: #777;
        margin: 0 10px 5px 0;
        position: relative;
        white-space: nowrap;
    }

    .clients-filter a:after {
        content: "";
        border-bottom: 2px dotted #61c13a;
        height: 2px;
        display: inline-block;
        position: absolute;
        bottom: 1px;
        left: 0;
        margin: 0 5px;
        right: 0;
    }

    .clients-filter a:hover {
        text-decoration: none;
        background: #61c13a;
        color: #fff;
        border-radius: 3px;
    }

    .b-reviews-new {
        padding: 0px 0 50px;
        -webkit-column-count: 3;
        -webkit-column-gap: 0px;
        -moz-column-count: 3;
        -moz-column-gap: 0px;
        column-count: 3;
        column-gap: 0px;
    }

    .b-reviews-new_video {
        padding: 50px 0 0;
    }

    .videotime {
        font-size: 14px;
        text-align: center;
        margin: 0 auto 5px;
        display: block;
        color: #b0b0b0;
    }

    .quote {
        display: block;
        position: absolute;
        top: 0px;
        right: 0;
        margin: auto;
        padding: 10px;
        left: 0;
        font-size: 17px;
        border: 1px solid #ededed;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        background: #fff;
        color: #bababa;
    }

    .card-clients {
        margin: 0px 0px 30px;
        position: relative;
        width: 100%;
        page-break-inside: avoid;
        break-inside: avoid;
        box-sizing: border-box;
        padding: 25px 15px;
        display: block;
    }

    .card-clients_video {
        height: 415px;
    }

    .card-clients_video a[data-target="#videoModal-reviews"]>picture {
        display: block;
        overflow: hidden;
        width: 260px;
        height: 146px;
        position: relative;
    }

    .card-clients_video a[data-target="#videoModal-reviews"]>picture:after {
        content: '';
        color: #61c13a;
        background-color: #E0EFEB;
        display: block;
        border-radius: 50%;
        flex-basis: 48px;
        width: 48px;
        height: 48px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--entypo' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 20 20'%3E%3Cpath d='M15 10l-9 5V5l9 5z' fill='%2361c13a'%3E%3C/path%3E%3C/svg%3E");
        background-position: 4px center;
        background-repeat: no-repeat;
        background-size: 90%;
        box-shadow: 0 0 6px 2px rgba(0, 0, 0, 0.1);
        border: 1px solid rgb(0 0 0 / 10%);
    }

    .card-clients_video:hover a[data-target="#videoModal-reviews"]>picture .img-fluid {
        -webkit-transform: scale(1.02);
        transform: scale(1.02);
        transition: transform 0.4s cubic-bezier(.02, .74, .29, .64);
    }

    .card-clients__text {
        box-shadow: -1px 0px 6px 1px rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        background: #fff;
        padding: 25px 25px 50px;
        font-size: 13px;
        text-align: left;
    }

    .card-clients__text p {
        line-height: 20px;
    }

    .card-clients__autor {
        left: 0;
        right: 0;
        margin: -35px auto 0px;
        text-align: center;
        font-size: 12px;
        line-height: 1.2;
        color: #635d5d;
        max-width: 260px;
    }

    .modalPDF .modal-dialog {
        max-width: 600px;
    }

    .modalPDF .modal-content {
        background: none;
        border: none;
    }

    .modalPDF__link {
        position: absolute;
        bottom: 20px;
        left: 0;
        z-index: 10;
        width: 100%;
        text-align: center;
        font-size: 16px;
    }

    .modalPDF__link a {
        color: #61c13a;
        border-bottom: 1px dashed #61c13a;
    }

    .modalPDF__link a:hover {
        border-bottom: none;
        text-decoration: none;
    }

    .modalPDF .close {
        position: absolute;
        right: -40px;
        top: 0;
        background: #ffffff;
        border: 5px solid rgba(119, 119, 119, 0.5);
        z-index: 2000;
        text-align: center;
        padding: 0 0;
        line-height: 1;
        height: 32px;
        width: 32px;
        border-radius: 50%;
        opacity: 1 !important;
        box-shadow: 0 0 1px rgba(255, 255, 255, 0.57);
        cursor: pointer;
        outline: none;
    }

    .modalPDF .close span {
        position: relative;
        top: -2px;
        color: #808080;
        font-size: 25px;
        left: 0px;
    }

    .autor-pdf {
        text-align: center;
        background: #fff;
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1);
        width: 80px;
        height: 80px;
        margin: 0 15px 15px 0;
        overflow: hidden;
        position: relative;
        display: inline-block;
        transition: box-shadow 0.2s linear;
        cursor: pointer;
    }

    .autor-pdf i {
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -15px 0 0 -18px;
        font-size: 26px;
        z-index: 10;
        color: #61c13a;
        will-change: transform;
        transition: transform 0.2s linear;
    }

    .autor-pdf:hover {
        box-shadow: 0px 0px 0px 1px rgba(97, 193, 58, 1);
    }

    .autor-pdf:hover i {
        transform: scale(1.2);
    }

    .autor-img {
        text-align: center;
        background: #fff;
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1);
        width: 160px;
        height: 80px;
        margin: 0 auto 15px;
        overflow: hidden;
        position: relative;
    }

    .autor-pdf+.autor-img {
        margin: 0 0 15px;
        display: inline-block;
    }

    .autor-img_sk {
        background: #bfde15;
    }

    .autor-img_tech img {
        width: 100px;
    }

    .autor-img img,
    .autor-pdf img {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        max-width: 100%;
        width: auto;
        max-height: 100%;
        height: auto;
        padding: 10px;
    }

    .card-clients__autor .name {
        display: block;
        font-weight: bold;
        color: #000;
        font-size: 14px;
        margin-bottom: 0px;
    }

    #player iframe {
        width: 100% !important;
        max-width: 100% !important;
    }

    @media (max-width: 768px) {
        .b-reviews-new {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
        }

        .modalPDF .close {
            right: 7px;
            top: 7px;
        }

        .card-clients__autor {
            height: auto !important;
        }

    }

    .grid-wrapper {
        overflow: hidden;
        padding: 0 0.5rem 5rem;
        margin-left: -0.5rem;
    }

    @media (max-width: 1184px) {
        .grid-wrapper {
            max-width: 680px;
            margin: 0 auto;
        }
    }

    @media (max-width: 752px) {
        .grid-wrapper {
            max-width: 340px;
            margin: 0 auto;
        }
    }

    @media (max-width: 370px) {
        .grid-wrapper {
            max-width: 100vw;
            margin: 0 auto;
            padding: 0rem;
        }
    }

    .grid {
        position: relative;
        margin: 0 -0.5rem;
    }

    .grid:after {
        position: relative;
        content: '';
        display: block;
        clear: both;
    }

    .grid-item {
        width: 340px;
        float: left;
    }

    .grid-item.is-active {
        border: 1px solid red;
    }

    .grid-item.is-hidden {
        display: none;
    }

    .reviews-item .quote {
        transform: translateY(-50%);
    }

    .clients {
        background-color: #f8f8f8;
        padding: 3.5rem 0 2.5rem;
        margin-bottom: 2rem;
    }

    .clients h1 {
        font-size: 50px;
        font-weight: 200;
        margin-bottom: 2rem;
    }

    .clients .main-content {
        padding: 1rem 0;
    }

    .clients.clients-inc{
        text-align: left;
        margin-bottom: 0;
    }
    .clients.clients-inc:before,
    .clients.clients-inc:after{
        display: none;
    }
    .clients.clients-inc h1{
        margin-top: 0;
    }

    .clients.clients-inc .breadcrumbs{
        padding-top: 2rem;
    }

    .breadcrumbs-item + .breadcrumbs-item:before{
        transform: translate(-5px, -2px) !important;
    }

</style>

<section class="clients clients-inc">
    <div class="container">
        <div class="row clients-filter-block">
            <div class="col-sm-12">
                <div class="breadcrumbs-wrapper" style="margin-top: -2rem;">

                    <style>
                        .breadcrumbs {
                            padding: 0 0 2rem;
                        }
                        .breadcrumbs-list {
                            position: relative;
                            display: flex;
                            gap: 1rem;
                            align-items: center;
                            margin: 0;
                            padding: 0 !important;
                            max-width: 100%;
                            overflow: hidden;
                            list-style-type: none;
                        }
                        .container.blog .breadcrumbs-list > li{
                            list-style-type: none;
                        }
                        .breadcrumbs-list:after{
                            content: '';
                            display: block;
                            position: absolute;
                            width: 3rem;
                            height: 3rem;
                            right: 0;
                            top: 0;
                            background: rgb(255,255,255);
                            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.25253851540616246) 13%, rgba(255,255,255,0.6979166666666667) 29%, rgba(255,255,255,0.8463760504201681) 48%, rgba(255,255,255,0.8995973389355743) 65%, rgba(255,255,255,1) 83%);
                        }

                        .breadcrumbs-item{
                            list-style-type: none;
                            margin: 0;
                            white-space: nowrap;
                        }

                        .breadcrumbs-item span[itemprop="name"]{
                            overflow: visible;
                            height: auto;
                            display: inline;
                            font-size: 14px;
                            font-weight: 400;
                        }


                        .breadcrumbs-item > span[itemprop="name"]{
                            color: #393A3C;
                        }

                        .breadcrumbs-item + .breadcrumbs-item:before{
                            content: '';
                            font-size: xx-small;
                            vertical-align: middle;
                            position: relative;
                            display: inline-block;
                            width: 1rem;
                            min-width: 1rem;
                            height: 1rem;
                            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M7.15 21.1q-.375-.375-.375-.888q0-.512.375-.887L14.475 12l-7.35-7.35q-.35-.35-.35-.875t.375-.9q.375-.375.888-.375q.512 0 .887.375l8.4 8.425q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325L8.9 21.125q-.35.35-.862.35q-.513 0-.888-.375Z'/%3E%3C/svg%3E");
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: contain;
                            transform: translate(-5px, -7px);
                            background-color: transparent;
                            opacity: 0.3;
                        }

                        .breadcrumbs-link{
                            color: #61c13a !important;
                            text-decoration: none !important;
                            border-bottom: none !important;
                        }
                        .breadcrumbs-link:hover{
                            color: var(--c-link);
                            text-decoration: none;
                        }
                        .breadcrumbs-link > span[itemprop="name"]{
                            color: #61c13a;
                            font-size: 14px;
                        }

                        .breadcrumbs-item span[itemprop="name"] br {
                            display: none;
                        }

                        @media (min-width: 841px){
                            .breadcrumbs-links-contacts,
                            .breadcrumbs-links-metodika {
                                cursor: pointer;
                            }

                            .breadcrumbs-links-contacts > span[itemprop="name"],
                            .breadcrumbs-links-metodika > span[itemprop="name"]{
                                color: #61c13a;
                            }
                        }

                        @media (max-width: 575px) {
                            .breadcrumbs {
                                padding: 1.5rem 0 1rem;
                            }
                            .breadcrumbs-list {
                                gap: 0.5rem;
                            }
                            .breadcrumbs-item {
                                display: inline-flex;
                                align-items: flex-start;
                            }
                            .breadcrumbs-item + .breadcrumbs-item:before{
                                transform: translate(-3px, -3px);
                            }
                            .breadcrumbs-item > span[itemprop="name"]{
                                transform: translate(2px, 1px);
                            }
                            .breadcrumbs-item:last-child{
                                display: none;
                            }
                        }
                    </style>

                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">

                                <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
                                </a>

                                <meta itemprop="position" content="1">
                            </li>











                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">

                                <span itemprop="name">Отзывы</span>

                                <meta itemprop="position" content="3">
                            </li>
                        </ul>
                    </nav>
                </div>
                <h1>Отзывы</h1>
                <div class="clients-filter">
                    <a href="#" data-filter="*" class="current all">Все (197)</a>
                    <a href="#" data-filter=".eCommerce" class="eCommerce">eCommerce (13)</a>
                    <a href="#" data-filter=".develop" class="develop">Девелопмент и строительство (16)</a>
                    <a href="#" data-filter=".bank" class="bank">Банки (17)</a>
                    <a href="#" data-filter=".insurance" class="insurance">Страховые компании (9)</a>
                    <a href="#" data-filter=".telekom" class="telekom">Телеком (8)</a>
                    <a href="#" data-filter=".it" class="it">IT (40)</a>
                    <a href="#" data-filter=".leasing" class="leasing">Лизинговые компании (6)</a>
                    <a href="#" data-filter=".logist" class="logist">Логистика и транспорт (10)</a>
                    <a href="#" data-filter=".media" class="media">Медиа и реклама (13)</a>
                    <a href="#" data-filter=".food" class="food">Retail food (13)</a>
                    <a href="#" data-filter=".nofood" class="nofood">Retail non food (15)</a>
                    <a href="#" data-filter=".moda" class="moda">Retail одежда и мода (1)</a>
                    <a href="#" data-filter=".electronica" class="electronica">Retail бытовая электроника (4)</a>
                    <a href="#" data-filter=".farm" class="farm">Фарм и медицинские компании (6)</a>
                    <a href="#" data-filter=".horeca" class="horeca">HoReCa (4)</a>
                    <a href="#" data-filter=".company" class="company">Производственные компании (32)</a>
                    <a href="#" data-filter=".oil" class="oil">Нефть. Газ. Энергетика (7)</a>
                    <a href="#" data-filter=".metal" class="metal">Металлургия (3)</a>
                    <a href="#" data-filter=".agroprom" class="agroprom">АПК (4)</a>
                    <a href="#" data-filter=".fmcg" class="fmcg">FMCG (7)</a>
                    <a href="#" data-filter=".education" class="education">Образование (5)</a>
                    <a href="#" data-filter=".service" class="service">Профессиональные услуги (7)</a>
                    <a href="#" data-filter=".other" class="other">Другие (2)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* NEW */

    .reviews-wrapper {}

    .reviews {}

    .reviews img {
        max-width: 100%;
        display: block;
    }

    .reviews.-half .reviews-item {
        flex-basis: 50%;
        padding: 18px 23px;
    }

    .reviews.-half .review-card-video {
        height: 230px;
    }

    .reviews.-third .reviews-item {
        flex-basis: 33.33%;
        padding: 18px;
    }

    .reviews.-third .review-card-header {
        height: 65px;
    }

    .reviews.-third .review-card-logo {
        max-width: 100%;
    }

    .reviews.-third .review-card-logo img {
        margin: 0 auto;

    }

    .reviews.-third .reviews-body {
        margin: 0 -18px;
    }

    .reviews.-third .review-card-header {
        justify-content: center;
    }

    .reviews.-third .review-card-info {
        max-width: 86%;
        text-align: center;
        margin: 0 auto;
        padding: 14px 0;
    }

    .reviews.-third .review-card-video {
        height: 170px;
    }

    .reviews-header {
        padding: 64px 0 22px;
    }

    .reviews-title {
        font-size: 25px;
        font-weight: 300;
        line-height: 1;
        margin: 0;
        padding: 0;
    }

    .reviews-body {
        display: flex;
        flex-flow: wrap;
        margin: 0 -23px;
        padding: 0;
    }

    @media (max-width: 1024px) {
        .review-body {
            align-items: stretch;
        }
    }

    .reviews-item {
        position: relative;
        list-style-type: none;
    }

    .review-card {
        box-shadow: -1px 0px 6px 1px rgb(0 0 0 / 20%);
        border-radius: 4px;
        background: #fff;
        overflow: hidden;
        margin-top: 0;
        width: 100%;
    }

    @media (max-width: 1024px) {
        .review-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .review-card-body {
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .review-card {
            height: auto;
        }

        /* .review-card-body {
            height: 100%;
        } */
    }

    .review-card-header {
        display: flex;
        height: 115px;
        position: relative;
        padding: 0 28px;
        z-index: 3;
        justify-content: space-between;
        align-items: center;
        box-shadow: -1px 0px 12px 1px rgb(0 0 0 / 40%);
    }

    .large-videos .review-card-header {
        margin-bottom: -3px;
    }

    .review-card-logo,
    .review-card-info {
        flex: 1;
        width: 100%;
    }

    .review-card-logo {
        max-width: 40%;
        margin: 0;
        max-height: 90px;
    }

    .review-card-logo img {
        max-height: 30px;
        max-width: 70%;
        width: initial;
    }

    .text-reviews .review-card-logo img {
        max-height: 50px;
        display: inline-block;
    }

    .review-card-info {
        max-width: 60%;
        text-align: right;
    }

    .review-card-title {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        color: #000;
        font-size: 13px;
        margin-bottom: 7px;
        line-height: 1;
        font-weight: 600;
    }

    .review-card-subtitle {
        font-size: 11px;
        line-height: 1.2;
        color: #635d5d;
        margin-bottom: 0;
        letter-spacing: 0.2px;
        max-height: 70px;
        overflow: hidden;
    }

    .reviews.-third .review-card-title {
        justify-content: center;
    }

    .reviews.-third .review-card-subtitle {
        min-height: 26px;
    }

    .review-card-video {
        position: relative;
        display: block;
        width: 100%;
        overflow: hidden;
        cursor: pointer;
    }

    .review-card-video:before {
        content: '';
        display: block;
        width: 60px;
        height: 60px;
        border-radius: 50px;
        background-color: #fff;
        box-shadow: 0 0px 6px 1px rgb(0 0 0 / 35%);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'%3E%3C/path%3E%3C/svg%3E");
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        transition: transform 0.4s;
    }

    .review-card-article.review-card-video:before{
        background-image: url("data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2060%2060%22%3E%0A%20%20%3Cdefs%3E%0A%20%20%20%20%3Cstyle%3E%0A%20%20%20%20%20%20.cls-1%2C%20.cls-2%2C%20.cls-3%20%7B%0A%20%20%20%20%20%20%20%20fill%3A%20%23fff%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-4%20%7B%0A%20%20%20%20%20%20%20%20stroke-width%3A%201.5px%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-4%2C%20.cls-2%20%7B%0A%20%20%20%20%20%20%20%20stroke%3A%20%2356bc20%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-4%2C%20.cls-3%20%7B%0A%20%20%20%20%20%20%20%20stroke-linecap%3A%20round%3B%0A%20%20%20%20%20%20%20%20stroke-linejoin%3A%20round%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-4%2C%20.cls-5%20%7B%0A%20%20%20%20%20%20%20%20fill%3A%20%2356bc20%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-2%20%7B%0A%20%20%20%20%20%20%20%20stroke-miterlimit%3A%2010%3B%0A%20%20%20%20%20%20%20%20stroke-width%3A%202px%3B%0A%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20.cls-3%20%7B%0A%20%20%20%20%20%20%20%20stroke%3A%20%23fff%3B%0A%20%20%20%20%20%20%7D%0A%20%20%20%20%3C%2Fstyle%3E%0A%20%20%3C%2Fdefs%3E%0A%20%20%3Cg%20id%3D%22bg%22%3E%0A%20%20%20%20%3Ccircle%20class%3D%22cls-1%22%20cx%3D%2230%22%20cy%3D%2230%22%20r%3D%2230%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20id%3D%22_%D0%A1%D0%BB%D0%BE%D0%B9_2%22%20data-name%3D%22%D0%A1%D0%BB%D0%BE%D0%B9%202%22%3E%0A%20%20%20%20%3Cg%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-4%22%20x%3D%2211.63%22%20y%3D%2218.22%22%20width%3D%2237.59%22%20height%3D%2222.42%22%20rx%3D%222.05%22%20ry%3D%222.05%22%2F%3E%0A%20%20%20%20%20%20%3Ccircle%20class%3D%22cls-2%22%20cx%3D%2230.4%22%20cy%3D%2239.75%22%20r%3D%222.7%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2212.42%22%20y%3D%2215.75%22%20width%3D%2235.97%22%20height%3D%2224%22%20rx%3D%221.69%22%20ry%3D%221.69%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-5%22%20x%3D%2213.49%22%20y%3D%2216.4%22%20width%3D%2216.46%22%20height%3D%2222.12%22%20rx%3D%221.12%22%20ry%3D%221.12%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-5%22%20x%3D%2231.28%22%20y%3D%2216.4%22%20width%3D%2216.01%22%20height%3D%2222.12%22%20rx%3D%221.12%22%20ry%3D%221.12%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2219.56%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2221.71%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2223.87%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2226.03%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2228.19%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Crect%20class%3D%22cls-1%22%20x%3D%2233.91%22%20y%3D%2230.35%22%20width%3D%2210.31%22%20height%3D%22.78%22%20rx%3D%22.39%22%20ry%3D%22.39%22%2F%3E%0A%20%20%20%20%20%20%3Cpolygon%20class%3D%22cls-3%22%20points%3D%2215.86%2015%2015.86%2025.28%2017.41%2023.25%2018.89%2025.28%2018.89%2015%2015.86%2015%22%2F%3E%0A%20%20%20%20%3C%2Fg%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
    }

    /* .review-card-video:hover:before {
        transform: translate(-50%, -50%) scale(110%);
    } */

    .review-card-video img {
        position: absolute;
        object-fit: cover;
        min-width: 100%;
        min-height: 100%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: transform 0.5s ease-in-out;
    }

    .review-card-video:hover img {
        transform: translate(-50%, -50%) scale(105%);
    }

    .large-videos .review-card-video img {
        top: 65%;
    }

    .large-videos .review-card-article.review-card-video img {
        top: 50%;
    }

    @media(min-width: 992px) and (max-width: 1200px) {
        .large-videos .review-card-video img {
            top: 58%;
        }
    }

    @media(min-width: 768px) and (max-width: 992px) {
        .large-videos .review-card-video img {
            top: 50%;
        }
    }

    @media(max-width: 576px) {
        .large-videos .review-card-video img {
            top: 50%;
        }

        .reviews-header {
            padding: 2.5rem 0 1rem;
        }
    }

    .review-card-content {
        display: flex;
        flex-direction: column;
        position: relative;
        border: 28px solid #fff;
        height: 310px;
        overflow: hidden;
    }

    .review-card-text {
        position: relative;
        z-index: 1;
        font-size: 12px;
        line-height: 1.43;
        text-align: left;
    }

    .review-card-text:before,
    .review-card-text:after {
        display: none;
    }

    .review-card-text p {
        text-indent: 30px;
    }

    .review-card-text p span,
    .review-card-text ul li span {
        color: darkgray;
    }

    .review-card-text ul,
    .review-card-text ol {
        margin-bottom: 1rem;
    }

    .review-card-text ul li {
        list-style-type: disc;
    }

    .review-card-buttons {
        position: absolute;
        display: inline-table;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        opacity: 0;
        z-index: -1;
        transition: all 0.4s;
    }

    .review-card:not(.unactive):hover .review-card-buttons {
        opacity: 1;
        z-index: 2;
    }

    @media (min-width: 1024px) {
        .review-card:not(.unactive):hover .review-card-text,
        .review-card:not(.unactive):hover .review-card-text span {
            transition: color 0.3s linear;
            color: #e1e2e2;
        }
    }

    @media (max-width: 1024px) {
        .review-card:not(.unactive) .review-card-text,
        .review-card.two-buttons .review-card-text {
            padding-bottom: 0;
        }

        .review-card:not(.unactive) .review-card-buttons {
            width: 100%;
            opacity: 1;
            z-index: 2;
            position: static;
            margin: 0;
            padding-top: 0;
        }

        .review-card-content {
            justify-content: space-between;
            height: 100%;
        }
    }

    @media (max-width: 768px) {
        .review-card:not(.unactive) .review-card-buttons,
        .review-card.two-buttons .review-card-buttons {
            padding-top: 5px;
        }
    }

    .review-card-link {
        display: flex;
        align-items: center;
        min-width: 270px;
        height: 54px;
        padding: 10px 16px 10px 10px;
        border-radius: 5px;
        background-color: #f8f8f8;
        border: 1px solid #606060;
        color: #000;
        font-size: 14px;
        transition: color 0.3s, border-color 0.3s, background-color 0.3s;
        text-decoration: none;
        letter-spacing: -0.3px;
        cursor: pointer;
        position: relative;
        z-index: 2;
    }

    .review-card-link:hover {
        color: #fff !important;
        background-color: #61c13a;
        border: 1px solid #61c13a;
        text-decoration: none;
    }

    .review-card-link+.review-card-link {
        margin-top: 1rem;
    }

    .review-card-icon {
        background-repeat: no-repeat;
        width: 40px;
        height: 40px;
        background-position: left center;
        background-size: cover;
        transition: background-image 0.3s;
        margin-right: 7px;
    }

    @media(max-width: 1024px) {
        .review-card-icon {
            width: 25px;
            height: 25px;
            margin-right: 5px;
        }
    }

    .icon-zoom {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--majesticons' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23606060' fill-rule='evenodd' d='M3 11a8 8 0 1 1 14.32 4.906l3.387 3.387a1 1 0 0 1-1.414 1.414l-3.387-3.387A8 8 0 0 1 3 11zm9-3a1 1 0 1 0-2 0v2H8a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2V8z' clip-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
    }

    .review-card-link:hover .icon-zoom {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--majesticons' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23ffffff' fill-rule='evenodd' d='M3 11a8 8 0 1 1 14.32 4.906l3.387 3.387a1 1 0 0 1-1.414 1.414l-3.387-3.387A8 8 0 0 1 3 11zm9-3a1 1 0 1 0-2 0v2H8a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2V8z' clip-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
    }

    .icon-letter {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--fluent' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23606060' d='M15.5 17.25V16h-2.674c.114.482.174.984.174 1.5h2.25a.25.25 0 0 0 .25-.25Zm0-2.75h-3.232a6.518 6.518 0 0 0-.768-1.154V13h3.75a.25.25 0 0 1 .25.25v1.25Zm-9-3.5a6.48 6.48 0 0 1 2.504.5h6.246c.966 0 1.75.784 1.75 1.75v4A1.75 1.75 0 0 1 15.25 19h-2.424a6.488 6.488 0 0 1-1.636 3H18a2 2 0 0 0 2-2V10h-6a2 2 0 0 1-2-2V2H6a2 2 0 0 0-2 2v7.498A6.479 6.479 0 0 1 6.5 11Zm7-3V2.5l6 6H14a.5.5 0 0 1-.5-.5ZM12 17.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0Zm-2.146-2.354a.5.5 0 0 0-.708 0L5.5 18.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .review-card-link:hover .icon-letter {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--fluent' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M15.5 17.25V16h-2.674c.114.482.174.984.174 1.5h2.25a.25.25 0 0 0 .25-.25Zm0-2.75h-3.232a6.518 6.518 0 0 0-.768-1.154V13h3.75a.25.25 0 0 1 .25.25v1.25Zm-9-3.5a6.48 6.48 0 0 1 2.504.5h6.246c.966 0 1.75.784 1.75 1.75v4A1.75 1.75 0 0 1 15.25 19h-2.424a6.488 6.488 0 0 1-1.636 3H18a2 2 0 0 0 2-2V10h-6a2 2 0 0 1-2-2V2H6a2 2 0 0 0-2 2v7.498A6.479 6.479 0 0 1 6.5 11Zm7-3V2.5l6 6H14a.5.5 0 0 1-.5-.5ZM12 17.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0Zm-2.146-2.354a.5.5 0 0 0-.708 0L5.5 18.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .fancybox__content>.carousel__button.is-close {
        position: absolute;
        top: 0;
        right: -40px;
        color: #000;
        background: #fff;
        border-radius: 7px;
        transition: color 0.3s;
    }

    @media (max-width: 1024px) {
        .fancybox__content>.carousel__button.is-close {
            top: -40px;
            right: -0px;
        }

        .review-card-link {
            min-width: 255px;
            max-width: 255px;
            margin: 0 auto;
        }
    }

    .fancybox__html5video,
    .fancybox__iframe {
        border-radius: 6px;
    }

    .fancybox__content>.carousel__button.is-close:hover {
        color: #61c13a;
    }

    .fancybox__content {
        padding: 1rem;
        border-radius: 10px;
        box-sizing: content-box !important;
    }

    .review-card-plus {
        width: 16px;
        flex-basis: 16px;
        min-width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-right: 8px;
        font-weight: 400 !important;
        line-height: 8px;
        text-align: left;
        overflow: hidden;
        text-indent: -999px;
        background-repeat: no-repeat;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ph' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 256 256'%3E%3Cpath fill='%23999' d='M128 20a108 108 0 1 0 108 108A108.1 108.1 0 0 0 128 20Zm0 192a84 84 0 1 1 84-84a84.1 84.1 0 0 1-84 84Zm52-84a12 12 0 0 1-12 12h-28v28a12 12 0 0 1-24 0v-28H88a12 12 0 0 1 0-24h28V88a12 12 0 0 1 24 0v28h28a12 12 0 0 1 12 12Z'%3E%3C/path%3E%3C/svg%3E");
        background-position: center center;
        background-size: contain;
        cursor: pointer !important;
    }

    .review-card-plus:hover {
        margin-right: 8px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ph' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 256 256'%3E%3Cpath fill='%2361c13a' d='M128 24a104 104 0 1 0 104 104A104.1 104.1 0 0 0 128 24Zm40 112h-32v32a8 8 0 0 1-16 0v-32H88a8 8 0 0 1 0-16h32V88a8 8 0 0 1 16 0v32h32a8 8 0 0 1 0 16Z'%3E%3C/path%3E%3C/svg%3E");
    }

    @media(max-width: 1200px) {
        .reviews.-third .review-card-info {
            max-width: 90%;
        }
    }

    @media(max-width: 992px) {
        .reviews.-third .reviews-item {
            flex-basis: 50%;
            flex-grow: 1;
        }
    }

    @media(max-width: 768px) {

        .reviews.-half .reviews-item,
        .reviews.-third .reviews-item {
            flex-basis: 100%;
        }

        .review-card-content {
            height: auto;
        }
    }

    @media(max-width: 576px) {

        .reviews-body,
        .reviews.-third .reviews-body {
            margin: 0;
        }

        .reviews.-half .reviews-item,
        .reviews.-third .reviews-item {
            padding: 10px 0;
        }

        .review-card-header {
            height: auto;
            padding: 0.5rem 1rem;
        }

        .review-card-logo img {
            max-width: 90% !important;
            height: auto !important;
        }

        .review-card-title {
            font-size: 12px;
            margin-bottom: 3px;
            font-weight: 600;
        }

        .review-card-subtitle {
            font-size: 11px;
            max-height: 60px;
            line-height: 1;
        }

        .review-card-content {
            border: 1rem solid #fff;
        }

        .review-card-content {
            height: auto;
            max-height: 420px;
        }

        .review-card-info {
            padding-left: 1rem;
        }

        .review-card-text p {
            text-indent: 1rem;
        }

        .review-card-marker {
            position: absolute;
            top: 0;
        }
    }

    .clients-filter a {
        text-decoration: none;
    }

    .review-card-logo {
        position: relative;
        white-space: nowrap;
    }

    .review-card-marker {
        display: inline-flex;
        width: 1rem;
        height: 1rem;
        vertical-align: super;
    }

    .review-card-marker svg {
        width: 100%;
        height: 100%;
    }

    .text-reviews .reviews-item:not(.visible) {
        display: none;
    }

    .reviews-footer {
        padding: 45px 0;
        background-color: transparent;
    }

    .load-items {
        width: 160px;
        height: 48px;
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        align-items: center;
        border: 1px solid #acacac;
        border-radius: 24px;
        background-color: #f8f8f8;
        font-size: 14px;
        padding-top: 2px;
        color: #000000;
        cursor: pointer;
        transition: border-color 0.3s, background-color 0.3s, color 0.3s;
    }

    .load-items:hover {
        border: 1px solid #61c13a;
        border-radius: 24px;
        background-color: #61c13a;
        font-size: 14px;
        color: #ffffff !important;
    }

    .review-card-peoples {
        position: absolute;
        background-color: #fff;
        height: 0;
        opacity: 0;
        z-index: 5;
        border: 1px solid lightgray;
        border-radius: 4px;
        padding: 1rem;
        top: -130px;
        right: 24px;
        max-width: 300px;
        transition: opacity 0.2s ease-in-out, top 0.2s ease-in-out, height 0.2s ease-in-out;
    }

    .review-card-peoples.is-active {
        opacity: 1;
        height: auto;
        top: -85px;
    }

    .review-card-peoples:after {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        border-right: 1px solid lightgray;
        border-bottom: 1px solid lightgray;
        position: absolute;
        bottom: -6px;
        left: 41.5%;
        transform: rotate(45deg);
        z-index: 10;
        background-color: #fff;
    }

    .review-card-infoblock {
        text-align: right;
    }

    .review-card-infoblock .review-card-title {
        margin-bottom: 0;
    }

    .review-card-infoblock:not(:first-child)+.review-card-infoblock {
        margin-top: 1rem;
    }

    .review-card-infoblock:first-child {
        display: none;
    }

    @media (max-width: 768px) {
        .review-card-link {
            font-size: 13px;
            min-width: 235px;
            padding: 10px;
            height: 40px;
        }

        .review-card-icon {
            width: 25px;
            height: 25px;
        }
    }

    .text-reviews .review-card-logo img[src="/img/p/clients/clients-logo/fsk.svg"] {
        height: 40px;
        max-width: 100%;
    }

    /* end NEW */
</style>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="reviews-wrapper" id="reviews">
                <section class="reviews -half large-videos">
                    <header class="reviews-header">
                        <h2 class="reviews-title">Большие интервью</h2>
                    </header>

                    <ul class="reviews-body">
                        <li class="reviews-item  bank">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/logo_gazprombank.png" alt="Газпромбанк" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Юлиана Лункина</div>
                                        <p class="review-card-subtitle">Начальник Управления развития бренда работодателя Департамента по работе с персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-bolshe-chem-rabota-keys-gazprombank/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/gazprombank_review.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it develop">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/samolet.svg" alt="ГК Самолет" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Наталья Минина</div>
                                        <p class="review-card-subtitle">Директор по организационной эффективности</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-pri-bystrom-roste-keys-gruppy-samolet/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/samolet_review.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/diksi.svg" alt="Дикси" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елена Дмитриева</div>
                                        <p class="review-card-subtitle">Руководитель управления корпоративной культуры и бренда работодателя</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/keys-diksi-kak-my-uvelichili-enps-v-magazinakh-na-60-p-p/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/diksi_review.svg" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ilim.svg" alt="Илим" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Светлана Лазариди</div>
                                        <p class="review-card-subtitle">Директор по организационному развитию и управлению проектами</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-v-promyshlennosti-keys-gruppy-ilim" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/ilim.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vsk_logo_0_12.png" alt="ВСК" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Степан Лысенко</div>
                                        <p class="review-card-subtitle">Руководитель блока организационного развития и управления персоналом ВСК</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vzryvnoy-rost-happy-index-keys-vsk/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/vsk-preview.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/s7.svg" alt="S7 Airlines" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Игорь Волков</div>
                                        <p class="review-card-subtitle">Директор департамента развития бренда работодателя S7</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-v-zharkiy-sezon-keys-s7-airlines/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/s7-airlines.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/bet-boom.svg" alt="BetBoom" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Татьяна Леонтьева</div>
                                        <p class="review-card-subtitle">Руководитель направления по развитию HR-бренда BetBoom</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-cherez-sport-keys-betboom/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/betboom.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/baltika.png" alt="Балтика" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Докучаева Надежда Владимировна</div>
                                        <p class="review-card-subtitle">Руководитель направления талантами и вовлеченностью</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a href="/hr-blog/vovlechennost-90-keys-baltika/" class="review-card-video review-card-article">
                                        <img src="/img/p/clients/previews/baltika.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/sibur.png" alt="Сибур" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Светлана Першина</div>
                                        <p class="review-card-subtitle">Руководитель практики HR-коммуникаций и развития бренда работодателя «Сибур»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/814190184" class="review-card-video">
                                        <img src="/img/p/clients/previews/sibur.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil company">
                            <div class="review-card-peoples">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Литвинова Ольга Николаевна</div>
                                    <p class="review-card-subtitle">Директор по управлению персоналом</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Критикова Оксана Витальевна</div>
                                    <p class="review-card-subtitle">Руководитель отдела по развитию корпоративной культуры</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/tplusgroup.png" alt="ПАО " loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title"><a class="review-card-plus">+</a>Литвинова Ольга Николаевна</div>
                                        <p class="review-card-subtitle">Директор по управлению персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/787543270" class="review-card-video">
                                        <img src="/img/p/clients/previews/tplusgroup.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce nofood">
                            <div class="review-card-peoples">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Галина Меркулова</div>
                                    <p class="review-card-subtitle">Директор по персоналу OBI Россия</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Катарина Карасева</div>
                                    <p class="review-card-subtitle">Старший менеджер по развитию бренда работодателя и внутр. коммуникациям</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Екатерина Юдович</div>
                                    <p class="review-card-subtitle">Специалист по внутр. коммуникациям</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/obi.svg" alt="OBI" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title"><a class="review-card-plus">+</a>Галина Меркулова</div>
                                        <p class="review-card-subtitle">Директор по персоналу OBI Россия</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/658950080" class="review-card-video">
                                        <img src="/img/p/clients/previews/obi_interview.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/europlan-logo.svg" alt="Европлан" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анаит Говорина</div>
                                        <p class="review-card-subtitle">Директор департамента по работе с персоналом, ЛК 'Европлан'</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/586641979" class="review-card-video">
                                        <img src="/img/p/clients/previews/evroplan_interview.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/lanit.svg" alt="Ланит" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Максим Абрамов</div>
                                        <p class="review-card-subtitle">Руководитель отдела подбора персонала ГК Ланит</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/680431315" class="review-card-video">
                                        <img src="/img/p/clients/previews/lanit-preview.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <div class="review-card-peoples">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Андрей Сафанюк</div>
                                    <p class="review-card-subtitle">Директор по персоналу</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Александр Дружков</div>
                                    <p class="review-card-subtitle">Заместитель директора по технологии</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Катарина Карасева</div>
                                    <p class="review-card-subtitle">Руководитель отдела развития корпоративной культуры, HR-бренда и внутренних коммуникаций</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ivi.png" alt="Ivi" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title"><a class="review-card-plus">+</a>Андрей Сафанюк</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/711109526" class="review-card-video">
                                        <img src="/img/p/clients/previews/ivi2.png" alt="" loading="lazy">
                                    </a>
                                </div>
                            </article>
                        </li>

                    </ul>
                </section>
                <section class="reviews -third">
                    <header class="reviews-header">
                        <h2 class="reviews-title">Видеоотзывы</h2>
                    </header>
                    <ul class="reviews-body">
                        <li class="reviews-item  eCommerce">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Ирина Бебешина</div>
                                    <p class="review-card-subtitle">Бизнес-партнер по управлению персоналом Департамента ИТ</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Валерия Лешневская</div>
                                    <p class="review-card-subtitle">Руководитель направления C&amp;B</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ali__xxh60.jpg" alt="Aliexpress" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/637913619" class="review-card-video">
                                        <img src="/img/p/clients/previews/aliexpress-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Ирина Бебешина</div>
                                    <p class="review-card-subtitle">Бизнес-партнер по управлению персоналом Департамента ИТ</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Варвара Федосеева</div>
                                    <p class="review-card-subtitle">директор по управлению персоналом и корпоративному развитию</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/media-1__xxh60.jpg" alt="Медиа1" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/581151879" class="review-card-video">
                                        <img src="/img/p/clients/previews/media-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Варвара Федосеева</div>
                                    <p class="review-card-subtitle">директор по управлению персоналом и корпоративному развитию</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  telekom it nofood electronica">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Юлия Терещенко</div>
                                    <p class="review-card-subtitle">начальник отдела внутренних коммуникаций, МТС</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/mts-new-logo.svg" style="max-height:
                                        50px;height: 50px;" alt="МТС" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/303506282" class="review-card-video">
                                        <img src="/img/p/clients/previews/mts-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Юлия Терещенко</div>
                                    <p class="review-card-subtitle">начальник отдела внутренних коммуникаций, МТС</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood eCommerce">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Ксения Васильева</div>
                                    <p class="review-card-subtitle">директор по персоналу Inventive Retail Group</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/inventive-logo__xxh60.jpg" style="max-height:
                                        50px;height: 50px;" alt="Inventive Retail Group" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/393886848" class="review-card-video">
                                        <img src="/img/p/clients/previews/inventive-retail-group-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Ксения Васильева</div>
                                    <p class="review-card-subtitle">директор по персоналу Inventive Retail Group</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Дмитрий Попов</div>
                                    <p class="review-card-subtitle">руководитель направления внутренних коммуникаций, АльфаСтрахование</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/alfastrahovanie__xxh60.jpg" alt="АльфаСтрахование" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/391176331" class="review-card-video">
                                        <img src="/img/p/clients/previews/alfastrahovanie-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Дмитрий Попов</div>
                                    <p class="review-card-subtitle">руководитель направления внутренних коммуникаций, АльфаСтрахование</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Катарина Карасева</div>
                                    <p class="review-card-subtitle">Старший менеджер по развитию бренда работодателя и внутр. коммуникациям OBI Россия</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Галина Меркулова</div>
                                    <p class="review-card-subtitle">Директор по персоналу OBI Россия</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Екатерина Юдович</div>
                                    <p class="review-card-subtitle">Специалист по внутр. коммуникациям</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/obi.svg" alt="OBI" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/659238688" class="review-card-video">
                                        <img src="/img/p/clients/previews/obi-video-.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Катарина Карасева</div>
                                    <p class="review-card-subtitle">Старший менеджер по развитию бренда работодателя и внутр. коммуникациям OBI Россия</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Анаит Говорина</div>
                                    <p class="review-card-subtitle">директор департамента по работе с персоналом, ЛК 'Европлан'</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/europlan-logo.svg" alt="Европлан" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/581039519" class="review-card-video">
                                        <img src="/img/p/clients/previews/evroplan-video-.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Анаит Говорина</div>
                                    <p class="review-card-subtitle">директор департамента по работе с персоналом, ЛК 'Европлан'</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Алексей Алексапольский</div>
                                    <p class="review-card-subtitle">Руководитель проекта по развитию персонала</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Евгения Озерная</div>
                                    <p class="review-card-subtitle">Начальник отдела развития корпоративной культуры. Департамент по работе с персоналом</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ingostrah__xxh60.jpg" alt="Ингосстрах" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/396639819" class="review-card-video">
                                        <img src="/img/p/clients/previews/ingosstrah-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Алексей Алексапольский</div>
                                    <p class="review-card-subtitle">Руководитель проекта по развитию персонала</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce it education">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Полина Лаптева</div>
                                    <p class="review-card-subtitle">руководитель отдела внутренних коммуникаций, Skyeng</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/skyeng_cut__xxh60.jpg" alt="Skyeng" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/390686185" class="review-card-video">
                                        <img src="/img/p/clients/previews/skyeng-video.png" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Полина Лаптева</div>
                                    <p class="review-card-subtitle">руководитель отдела внутренних коммуникаций, Skyeng</p>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <div class="review-card-peoples" hidden="">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title"><a class="review-card-plus">+</a>Оксана Кравченко</div>
                                    <p class="review-card-subtitle">руководитель учебного центра, департамент по работе с персоналом Zetta Страхование</p>
                                </div>
                            </div>
                            <article class="review-card">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/zetta__xxh60.jpg" style="max-height:
                                        50px;height: 50px;" alt="Zetta Страхование" loading="lazy">
                                    </figure>
                                </header>
                                <div class="review-card-body">
                                    <a data-fancybox="video-gallery" href="https://vimeo.com/388942529" class="review-card-video">
                                        <img src="/img/p/clients/previews/zetta-video.jpg" alt="" loading="lazy">
                                    </a>
                                </div>
                                <div class="review-card-info">
                                    <div class="review-card-title">Оксана Кравченко</div>
                                    <p class="review-card-subtitle">руководитель учебного центра, департамент по работе с персоналом Zetta Страхование</p>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
                <section class="reviews -half text-reviews">
                    <header class="reviews-header">
                        <h2 class="reviews-title">Отзывы и благодарности</h2>
                    </header>
                    <ul class="reviews-body">
                        <li class="reviews-item company metal visible">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/petropavlovsk__xxh50.jpg" style="max-height:
                                        27px;height: 27px; max-width: fit-content;" alt="Петропавловск" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Марина Байкалова</div>
                                        <p class="review-card-subtitle">HR бизнес-партнер по работе с предприятиями и социальным отношениям и вся HR-команда ГК «Петропавловск»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Осенью 2021 года впервые в истории Группы Компаний «Петропавловск» мы провели опрос о вовлечённости с помощью сервиса Happy Job. Более 75% сотрудников, работающих как в московском и благовещенском офисах, так и на удаленных активах компании, были охвачены анкетированием.</p> <p>Мы остались довольны сотрудничеством с компанией Happy Job, и можем рекомендовать как опытного провайдера, специализирующегося на проведении таких исследований. Хотим особо отметить понятную и удобную платформу оценки, разработанную компанией, качественную аналитику и обеспечение анонимности для опрашиваемых сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/petropavlovsk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/petropavlovsk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item company metal visible">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ugmk__xxh50.jpg" alt="УГМК" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Малышев Д.С.</div>
                                        <p class="review-card-subtitle">Директор по персоналу и общим вопросам</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Уральская горно-металлургическая компания выражает благодарность компании Happy Job за высокое качество организации, проведения и сопровождения исследования вовлечённости и клиентоориентированный подход к Заказчику. Специалисты Happy Job зарекомендовали себя как профессионалы своего дела.</p><p>Охват проведенного опроса составил 75000 человек. Работники нашей Компании высоко оценили интерактивный подход к представлению вопросов, а также их качество и понятность<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ugmk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/ugmk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item telekom it visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rostelekom.svg" alt="«Ростелеком»" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Алексей Павленко</div>
                                        <p class="review-card-subtitle">директор департамента управления операциями, HR «Ростелеком»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В 2017 году мы перешли на платформу Happy Job для проведения ежеквартального кастомизированного опроса по оценке качества внутреннего сервиса (КВС). Сложность реализации проекта заключается в динамической структуре нашей компании и, как следствие, внесение постоянных изменений в процесс сбора информации, аналитики и представлении отчетов. Хотелось бы отметить профессионализм сотрудников компании Happy Job, которые нацелены на результат и получение качественных данных. Техническая поддержка оперативно реагирует на сложные ситуации и находит взвешенные решения<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/rostelekom.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item telekom it visible">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rostelekom_solar.svg" alt="Ростелеком Солар" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Нелли Худякова</div>
                                        <p class="review-card-subtitle">Руководитель HR-бренда «Ростелеком-Солар»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>У меня очень положительный опыт работы с Happy Job. Я занимаюсь вовлечённостью с 2011 года, и за это время успела попробовать разные методологии и платформы, сотрудничала с несколькими исследовательскими компаниями. Везде есть свои плюсы и минусы. Безусловными плюсами Happy Job являются удобная платформа, быстрые доступ к результатам, клиентоориентированный подход, стоимость услуг. Особое внимание конечно заслуживает платформа: интуитивный интерфейс, понятная методология, гибкие настройки аналитики результатов и доступов для руководителей, также очень приятно, что платформа постоянно улучшается<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/rostelekom-solar.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/rostelekom_solar.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item it company visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/sbermarket.svg" alt="Сбермаркет" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Фатыхов Марат</div>
                                        <p class="review-card-subtitle">Менеджер по развитию партнерских программ ООО "Инстамарт Сервис"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность компании Happy Job за хорошо проделанную работу. Два раза мы обращались к услугам компании и в обоих случаях была проделана блестящая работа.</p><p>Большое спасибо специалистам компании за своевременную обратную связь и глубокий анализ проводимого исследования, удобный понятный отчет с результатами исследований в личном кабинете руководителей. Можно сформировать и распечатать результаты опроса, быстро оценить результат и разработать план мероприятий, что удобно для пользователей. </p><p>Спасибо за совместную работу и до встречи в следующем году!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/sbermarket-pdf.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item eCommerce it visible">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/sber-market__xxh50.jpg" alt="Сбер Мега Маркет" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Тимур Сабиров</div>
                                        <p class="review-card-subtitle">Руководитель проектов обучения и развития сотрудников</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Для проведения исследования уровня вовлечённости мы уже четвёртый год подряд пользуемся платформой Happy job. Этот сервис мы выбрали, потому что он прост и понятен, а опрос лаконичен и увлекателен. Нам, как организаторам исследования, очень удобно пользоваться личным кабинетом и в режиме реального времени отслеживать статистику прохождения опроса, создавать и выгружать аналитику по подразделениям. В процессе проведения исследования сотрудники Happy job оперативно и качественно отвечали на возникающие вопросы. Зашитые в сервис рекомендации помогают определить приоритетные зоны развития по каждому подразделению компании. Спасибо команде Happy job за креативное решение, профессиональный подход и клиентоориентированность<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/sber-megamarket.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/sbermegamarket.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item eCommerce it visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/avito.svg" alt="Avito" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Надежда Рогулёва</div>
                                        <p class="review-card-subtitle">HR manager, Avito</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хочу поблагодарить вашу компанию и лично Ивана Наумова за профессиональную поддержку в рамках подготовки, проведения самого опроса и подведения результатов нашего опроса вовлеченности и благополучия персонала.</p><p>За счет усилий Ивана удалось провести максимально плавный переход от одного подрядчика к другому, сохранив при этом те моменты, которые были критичны для вас. Спасибо за вашу гибкость и современный подход!</p><p>Сотрудники отмечают, что проходить опросы стало проще и приятнее, что несомненно является огромным плюсом<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/avito.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item it visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/innotech__xxh50.jpg" alt="Иннотех" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елена Плотникова</div>
                                        <p class="review-card-subtitle">Руководитель направления проектов по управлению персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Уже второй год мы успешно проводим опрос Вовлеченности и Лояльности с использованием платформы Happy Job.</p><p>Хотим поблагодарить Happy Job за сотрудничество и успешную реализацию проекта с учетом всех наших требований и пожеланий. У нас довольно сложная матричная структура, но совместно с Happy Job нам удалось учесть все ее особенности для проведения опроса и последующего анализа результатов.</p><p>Нам понравилась скорость реакции на наши запросы и гибкость. С таким заказчиком, как мы — это крайне важно. Менеджеры Happy Job всегда на связи, быстро реагируют<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/innotech.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item eCommerce telekom it electronica visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/beeline__xxh50.jpg" alt="Билайн" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Тищенко Мария</div>
                                        <p class="review-card-subtitle">старший менеджер по управлению проектами, Билайн</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы получили большое количество положительной обратной связи как от обычных сотрудников, так и от топ-менеджмента. Геймифицированный формат в совокупности с «человеческой» постановкой вопросов воспринимается достаточно легко и занимает мало времени на прохождение. Один из реальных отзывов от топ-менеджера: «Коллеги очень положительно восприняли новую платформу. Хвалили юзер-френдли интерфейс, вопросы были понятно сформулированы и даже прохождение опроса стало очередным вовлекающим элементом. В общем, просить/напоминать сотрудникам пройти опрос не пришлось ни разу<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/beeline.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item telekom electronica nofood visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/megafon.svg" alt="Мегафон" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Евгения Маркова</div>
                                        <p class="review-card-subtitle">Директор дирекции развития бренда, корпоративной культуры и внутренних коммуникаций</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job – единственный на рынке инструмент с продвинутой аналитикой и дашбордами в режиме реального времени, который позволяет одновременно измерить все ключевые показатели вовлечённости. Для ПАО «МегаФон» результатом такого партнерство стало лидерство в отрасли по показателям вовлечённости и Happy Index, и существенный отрыв от многих компаний по Удовлетворенности и eNPS.</p><p>Хотим также выразить отдельную благодарность за отзывчивость, клиентоориентированность и качественное сопровождение по всем вопросам менеджера компании Рамазановой Кире<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/megafon.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item insurance visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/logo_new__xxh50.jpg" alt="Zetta страхование" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Оксана Кравченко</div>
                                        <p class="review-card-subtitle">Руководитель учебного центра,<br> Департамент по работе с персоналом "Zetta страхование"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сотрудники Happy Job гибко и с пониманием отнеслись ко всем моим персонализированным запросам и внесли все необходимые добавления в опрос. В итоге мы стартовали вовремя. Но еще приятнее оказалась поддержка коллег после официального завершения опроса, наверное, месяца 2-3 после мы держали связь, я просила то один вид отчета, то другой — и всегда в ответ получала доброжелательность, желание помочь и реализацию моей просьбы. Абсолютно точно — в новом году мы повторим опрос с Happy Job. Провайдер зарекомендовал себя как качественный, эффективный, лояльный, доброжелательный партнер!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/zetta.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item develop visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/a101__xxh50.jpg" alt="Компания А101" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Танзиля Габбасова</div>
                                        <p class="review-card-subtitle">Компания А101</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Совместно с вами нам удалось сделать интересный по формату и реализации проект. Ежеквартальный замер Happy Job по вовлечённости и в дальнейшем будет для нас полезным инструментом<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/a101.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item company agroprom visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rusagro__xxh50.jpg" alt="Русагро" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Диана Резапова</div>
                                        <p class="review-card-subtitle">Руководитель функции обучения и развития персонала, Русагро</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Нашим сотрудникам понравился удобный интерфейс и анимация. Специалистам HR было удобно отслеживать динамику прохождения исследования. Также, очень удобно было видеть промежуточные результаты опроса. Руководители компании оценили скорость предоставления данных и личные кабинеты<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/rusagro.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item agroprom visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cherkizov__xxh50.jpg" alt="Черкизово" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Кудашкина Ольга</div>
                                        <p class="review-card-subtitle">Менеджер по развитию бренда работодателя</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Учитывая объемы и специфику компании, нам требовался особый подход. Мы проводили опрос на 30 000 сотрудников в более чем 15 регионах. Синие воротники опрашивались в офлайн формате (бумажное анкетирование). Совместными усилиями нам удалось достигнуть показателя прохождения 95%.<span>»</span></p><p><span>«</span>Спасибо большое Happy Job за уникальный подход к каждому клиенту<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/cherkizov.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item company agroprom visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/fosagro__xxh50.jpg" style="max-height:
                                        36px;height: 36px; max-width: fit-content;" alt="Фосагро" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Котлярова Маргарита Руслановна</div>
                                        <p class="review-card-subtitle">Директор по персоналу и социальной политике, Фосагро</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность компании Happy Job за проделанную работу. Дважды мы обращались к вашим услугам,и в обоих случаях результат оправдал ожидания. Отдельное спасибо специалистам компании за своевременную обратную связь и гибкость и лояльность в условиях измененияситуации<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/fosagro.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item oil visible">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/gazprom__xxh50.jpg" alt="АО «Газпром СтройТЭК Салават»" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ерина Наталья</div>
                                        <p class="review-card-subtitle">Начальник Управления подбора, оценки и развития персонала. АО «Газпром СтройТЭК Салават»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Возможность увидеть распределение ответов по западающим метрикам и сопоставлять ответы с бенчмарками как внутри банка, так и по рынку, помогает выявлять системные и локальные проблемы департаментов и выработать план мероприятий по будущим улучшениям, определить зоны развития<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/gazprom.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/tplusgroup__xxh50.jpg" alt="Т Плюс" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Т.С. Михайлова</div>
                                        <p class="review-card-subtitle">Начальник Управления привлечения, развития персонала и корпоративной кульryры Т Плюс</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Перед ПАО Т Плюс стояла непростая задача перехода с ранее используемой методики замера вовлечённости на методологию Нарру Job с обязательным сохранением накопленных данных, которая была успешно решена. Все вопросы по доработкам платформы, дополнительным выгрузкам и формированию выборки респондентов решались оперативно в online режиме. Впечатление от работы над проектом положительное, сотрудники Нарру Job оперативно реагировали на все запросы и своевременно предоставляли нужную информацию. На протяжении всего проекта мы чувствовали, что вы также, как и мы, действительно заинтересованы в результате<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/tplus.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/zarubezh_neft__xxh50.jpg" alt="Зарубежнефть" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Д.Б. Улитин</div>
                                        <p class="review-card-subtitle">Заместитель Генерального директора <br>по организационному развитию <br>и корпоративным коммуникациям</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Главное преимущество сервисов - гибкие настройки и возможность по принципу конструктора создать персонализированный механизм для проведения исследований. Именно это позволяет построить и провести опросы наиболее оптимальным и эффективным образом, и, что наиболее важно, выстроить их содержание на основе запросов и потребностей именно нашей Компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/zarubezhneft.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/zarubezh_neft.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/nipigaz.svg" alt="Нипигаз " loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Семёнова София Александровна</div>
                                        <p class="review-card-subtitle">Руководитель направления корпоративной культуры и соцотношений</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сотрудники оказывали полноценную поддержку в процессе согласования документов, утверждения вопросов и всегда были внимательны к нашим просьбам и комментариям. Все риски были учтены на этапе подготовки и проведения пилота, поэтому сложностей в процессе проведения опроса не возникло.</p><p>Наши сотрудники отмечали удобство платформы, во многом благодаря этому были достигнуты высокие показатели заполняемости — более 82% сотрудников ответили на вопросы. Планируем в ближайшее время начать мероприятия по повышению уровня лояльности и вовлеченности сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/nipigaz.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/transneft.svg" alt="«Транснефтьэнерго»" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Наталья Желтовская</div>
                                        <p class="review-card-subtitle">начальник отдела управления персоналом ООО «Транснефтьэнерго»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>По метрике «Настройка процессов» и благодаря уже действующей на тот момент системе стандартизации бизнес-процессов в Обществе нам удалось скорректировать некоторые процессы, уточнить ответственность и уровень понимания процессов коллег.Процессы в Обществе стали понятны и прозрачны, выстроился своеобразныйпроцессный конвейер, теперь всеиграют за одну команду «Общество»<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/transneft.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/mediacom__xxh50.jpg" alt="MediaCom" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ярон Фаризон</div>
                                        <p class="review-card-subtitle">СЕО MediaCom</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Agile подход к работе вносит свои коррективы по всем направлениям, в том числе и к оценке вовлечённости сотрудников. Поняв, что наш ежегодный опрос уже не закрывает потребностей компании и не вдохновляет коллег, мы начали изучать рынок провайдеров. Мы смотрели как российских разработчиков, так и европейских, свой выбор мы остановили на happy-job и не ошиблись. Элементы геймификации, вопросы разной направленности, возможность давать обратную связь, хвалить это именно то, что мотивирует коллег на еженедельной основе проходить опросы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/mediakom.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/emc__xxh50.jpg" alt="EMC" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Александрова Алена Юрьевна</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним коммуникациям</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Опрос вовлечённости позволяет «измерить» настроение сотрудников и не просто понять атмосферу в команде, а подтвердить выводы конкретными цифрами. В первый год мы проводили исследование раз в квартал. Для нас это очень динамичная история и эффективный инструмент для работы. По итогам каждого опроса мы разрабатываем план действий, воплощаем его в жизнь и движемся дальше<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/emc.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood eCommerce">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/petr__xxh50.jpg" alt="Строительный Торговый Дом «Петрович»" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елена Атаманчук</div>
                                        <p class="review-card-subtitle">Специалист по корпоративной культуре и внутренним коммуникациям, <br> Строительный Торговый Дом «Петрович»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Очень понравилась функция в личном кабинете с возможностью следить за статистикой прохождения опроса онлайнс удобными цветовыми шкалами. Было сразу понятно, на что стоит обратить внимание, не дожидаясь окончания опроса. Отмечу, что дополнительной помощи во время опроса не требовалось, а если и появлялись вопросы, то все решалось оченьоперативно! Спасибо!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/petrovich.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/0__xxh50.jpg" alt="Абсолюттех" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Команда</div>
                                        <p class="review-card-subtitle">Абсолюттех</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Обратная связь положительная. Спасибо большое за оперативность и четкость. Сотрудникам все понравилось. Спасибо еще раз!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/mafin.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/splat-new__xxh50.jpg" alt="SPLAT" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анна Трифонова</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним коммуникациям, SPLAT</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>При любых проблемах, которые возникают при сотрудничестве, команда готова подстроиться под клиента. Радует, что бизнес и продукт молодые, поэтому они гибко реагируют на меняющийся рынок, слушают и слышат своего клиента. Иногда готовы что-то менять в своем продукте конкретно под Заказчика. Это очень удобно и редко встречается у других поставщиков аналогичных продуктов. Кроме самого продукта мы, как Заказчики, получаем качественную информационную поддержку по пользованию системой: где смотреть какой отчет, как лучше интерпретировать значения показателей<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/splat.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ruscrab__xxh50.jpg" style="max-height:
                                        50px;height: 50px; max-width: fit-content;" alt="ГК " loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Нерпина Евгения Сергеевна</div>
                                        <p class="review-card-subtitle">Менеджер по подбору и развитию персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Обратная связь по опросу по вовлечённости на платформе Happy Job: </p> <ul> <li>Удобный интерфейс опроса.</li> <li>Опрос занимает минимальное количество времени у сотрудников.</li> <li>Отчеты выгружаются автоматически и очень наглядные.</li> <li>Очень профессиональная работа менеджера Ивана Наумова: оперативное решение вопросов, индивидуальный подход,     научил пользоваться сайтом. Всегда оперативно решал все возникающие вопросы<span>»</span>.</li></ul></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/russkiy-krab.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/hotger__xxh50.jpg" alt="Hotger Corporation" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Инна Остапенко</div>
                                        <p class="review-card-subtitle">HR Менеджер, Hotger Corporation</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Нам понравился комфортный формат, быстрое реагирование на ошибки клиента и устранение их, абсолютноклиентоориентированный подход, оформление работы: сам опрос и отчеты. Я делюсь своими положительными впечатлениями с коллегами в HR Хабе и с удовольствием смело рекомендую сотрудничествос Happy Job, зная, что коллеги будут благодарны мне за рекомендацию и останутся довольны сервисом<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/hotger.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vtb__xxh50.jpg" alt="ВТБ" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Е.В. Тышковская</div>
                                        <p class="review-card-subtitle">Руководитель Службы внутренних<br>коммуникаций Департамента по работе<br>с персоналом Банка ВТБ (ПАО)</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность команде Happy Job за успешное проведение опроса по вовлечённости сотрудников ВТБ в октябре 2021 года.На протяжении всего проекта сотрудники Happy Job демонстрировали высокую гибкость и клиентоориентированность, проявив себя в качестве надёжного, ответственного и профессионального партнера<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/vtb.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/vtb.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/gazprombank__xxh50.jpg" alt="Газпромбанк" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ольга Фатеева</div>
                                        <p class="review-card-subtitle">Управляющий директор Департамента по работе с персоналом, Газпромбанк</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Возможность увидеть распределение ответов по западающим метрикам и сопоставлять ответы с бенчмарками как внутри банка, так и по рынку, помогает выявлять системные и локальные проблемы департаментов и выработать план мероприятий по будущим улучшениям, определить зоны развития<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/gazprombank.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/alfabank__xxh50.jpg" alt="Альфа-Банк" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Екатерина Грачёва</div>
                                        <p class="review-card-subtitle">Руководитель отдела развития бренда работодателя Альфа-Банка</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Для проведения опросов вовлечённости мы выбрали платформу Happy Job. Почему? Первый плюс — это качественная геймификация и визуализация, благодаря которым опрос вовлечённости можно пройти за 10-15 минут с любого гаджета, не утомляясь от большого количества вопросов. Мы получили огромное количество положительных откликов от сотрудников, подтверждающее это преимущество. Второе — это компетентная оперативная поддержка команды Happy Job. Ни один запрос не остаётся необработанным, мы работаем в режиме реального времени<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/alfabank.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/mkb__xxh50.jpg" alt="Московский кредитный банк" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ефремова А.А.</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Спасибо за вашу включенность, клиентоориентированность и оперативное решение всех возникающих вопросов. Отдельно хотелось бы отметить саму платформу, яркий и интересный формат опроса, удобные формы отчетов, оперативный доступ к результатам<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/mkb.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/mkb.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/otkritie2__xxh50.jpg" alt="Банк Открытие" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ирина Веригина</div>
                                        <p class="review-card-subtitle">Начальник Управления оценки персонала и управления талантами<br>Банк Открытие</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>С компанией Happy Job мы сотрудничаем с 2019 года с опросом внутреннего сервиса. Представители компанииподдержали нашу методологию опроса и помогли выбрать наиболее оптимальное решение для ее реализации. Позитивноеотношение к обратной связи позволило улучшать опрос в течение нескольких кварталов, постепенно делая его все болееудобным м функциональным. Наши сотрудники отметили удобный и красивый интерфейс опроса, а руководителям понравились отчеты и статистика вличном кабинете<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/otkrytie.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/psb_logo__xxh50.jpg" alt="Промсвязьбанк" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ирина Слукина</div>
                                        <p class="review-card-subtitle">руководитель группы развития бренда работодателя</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы выбрали Happy Job в качестве партнера по исследованию вовлечённости, поскольку компания обладает уникальным набором преимуществ. Среди них – удобная технологичная платформа, а также быстрая и эффективная поддержка в случае возникновения вопросов. Руководители буквально с первого дня исследования могут следить за динамикой ответов в своем подразделении и за настроениями сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/psb.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/pochtabank.svg" alt="Почта Банк" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Николай Юртаев</div>
                                        <p class="review-card-subtitle">Руководитель центра корпоративных коммуникаций АО «Почта Банк»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы благодарим нашего нового партнера, Happy Job, за помощь в первых шагах на большом пути системных исследований настроения персонала.</p><p>Happy Job помогли нам с точки зрения методологии и технологий для начала выстраивания системной работы.</p><p>Большое спасибо за понимание, вовлеченность и проактивность на всех этапах сотрудничества. В наше время это очень ценно!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/pochta-bank.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food logist">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/x5_new__xxh50.jpg" alt="X5 RETAIL GROUP" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Екатерина Забелина</div>
                                        <p class="review-card-subtitle">начальник управления по оптимизации процессов и внедрению изменений, X5 RETAIL GROUP</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Уважаемые коллеги. От лица Х5 выражаем вам искреннюю благодарность за проделанную работу в рамках проекта CSI X5. Спасибо вам за вашу вовлечённость и неравнодушие, за ваш профессионализм. Мы крайне ценим вашу бесконечную готовность помочь и отклик 24/7. И признательны вам за понимание и гибкость в отношении реализации технических требований<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/x5-retail-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/magnit__xxh50.jpg" alt="«Магнит» г. Краснодар" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Долгова Вера</div>
                                        <p class="review-card-subtitle">Руководитель управления исследований, аналитики и нематериальной мотивации<br>Департамент корпоративной культуры и бренда</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Круто, когда можно на атомы разложить все составляющие жизни сотрудника и их оцифровать. У платформы Happy Job есть неоспоримое преимущество – понятный интерфейс, большой набор инструментов для аналитики, возможность без объёмных отчётов и многостраничных презентаций увидеть и верхнеуровневую картину, и углубиться в детали. И всё это в один клик. Доступность информации для руководителей любого уровня, постоянное совершенствование платформы, лёгкость управления данными – всё это делает продукты компании Happy Job такими востребованными<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/magnit.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/diksi.svg" alt="Дикси" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елена Дмитриева</div>
                                        <p class="review-card-subtitle">Руководитель управления корпоративной культуры и развития бренда работодателя</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Видно, что Happy Job гордятся своим продуктом. И гордиться, действительно, есть чем. Начиная с огромной теоретической базы, которой владеет автор методологии Алексей, заканчивая постоянно совершенствующейся платформой. Разберётся даже «чайник». А если не разберётся, ребята помогут и подскажут.</p><p>Отдельная благодарность нашему менеджеру Максиму. То, с каким спокойствием и тактом Максим отвечает на самые неожиданные вопросы, как быстро реагирует на любой запрос, является примером эффективности и деловой этики. Просто удовольствие работать с таким партнёром<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/diksi.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/perekrestok.svg" alt="Перекрёсток" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мария Сапожникова</div>
                                        <p class="review-card-subtitle">Менеджер направления по развитию опыта сотрудника</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хочу отметить высокий профессионализм команды Happy Job по ведению проекта замера вовлечённости в компании Перекресток в 2021 году. Современные методики, шикарный интерфейс опроса и по-настоящему полезная и рабочая платформа для работы с результатами<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/perekrestok.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/komandor__xxh50.jpg" alt="Командор" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">А.В. Лощилова</div>
                                        <p class="review-card-subtitle">Руководитель отдела обучения и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа позволяет руководителям отслеживать результаты по показателям по своему подразделению в разных разрезах и по всем метрикам подробно, даются рекомендации, как развивать проблемные метрики. Есть возможность скачивать готовую оформленную презентацию прямо с платформы — все это очень ценно! Команда HAPPY JOB оказывала максимальную поддержку при реализации проекта на всех его этапах, мы получали ответы на все наши запросы. Нам были даны рекомендации как избежать возможных проблем, исходя из опыта сотрудничества HAPPY JOB с другими компаниями<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/komandor.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/spar__xxh50.jpg" alt="SPAR" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Татьяна Федюнина</div>
                                        <p class="review-card-subtitle">Директор по персоналу, компания SPAR</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Cотрудникам понравилось необычное сочетание вопросов, дизайн картинок, а также возможность быть услышанными. Нам было легко отслеживать статистику, результаты отчета в режиме реального времени, а также выгружать аналитику в удобном формате одним нажатием кнопки. И ещё, это качественная поддержка со стороны сотрудников Happy Job. Руководители подразделений легко поняли где слабые и сильные места подразделений, прописали план мероприятий и уже приняли меры по улучшению метрик. Спасибо за креативное решение, профессиональный подход и быструю реакцию<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/spar.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ozon__xxh50.jpg" alt="OZON" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елена Якупова</div>
                                        <p class="review-card-subtitle">Руководитель отдела оценки, обучения и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарю компанию Happy Job за понятную и удобную платформу оценки, качественную аналитику, доступную вреальном времени, за клиентоориентированность и гибкость, за оперативное реагирование на наши запросы. Вы молодцы! Планируем и в дальнейшем сотрудничать с вами<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ozon.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/zabsib__xxh50.jpg" alt="«Запсибкомбанк»" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Затварницкая Лидия</div>
                                        <p class="review-card-subtitle">ведущий специалист Отдела методологии Департамента персонала и организационного развития «Запсибкомбанк»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сервис очень удобный в использовании — как для опрашиваемых сотрудников, так и для HR-специалиста, работающего с итоговой отчетностью. Все метрики понятны, даны развернутые комментарии к каждой субметрике. Картированный опрос имеет большое преимущество перед стандартным — удалось достичь большего уровня доверия сотрудников, чем удавалось добиться при стандартной форме опроса. Ответы сотрудников более честные. Наличие проективных вопросов в опросе дает возможность получить искренний ответ, без «надумывания» и попытки «увильнуть», ответив «как нужно, а не как считаю<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/zapsibkombank.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  other">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/mitishi_logo__xxh50.jpg" alt="Ярмарка Мытищи" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Алексей Астахов</div>
                                        <p class="review-card-subtitle">директор по персоналу Группы Компаний «Нью Пойнт» </p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотя опрос можно было пройти в течение двух недель, но уже за первые два дня более 70% участников ответили на вопросы исследования. Люди неравнодушно выразили свое мнение по поводу многих важных для развития компании моментов. В результате, сейчас мы имеем достаточно информации для дальнейшего улучшения Компании, можем выбрать те вопросы, которые вполне по силам решить нам уже сейчас и те вопросы к решению которых нужно готовиться. Итоги исследования мы обсудили на специальной сессии с руководителями и «набросали» основу плана организационных изменений<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/yarmarka-mytichi.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/adggroup.svg" alt="ADG Group" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Максим Вертоградский</div>
                                        <p class="review-card-subtitle">Руководитель корпоративного университета</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Самым большим страхом было то, что люди не очень активно будут участвовать в опросе. По итогу в опросе приняли участие 87% сотрудников компании во многом это и заслуга самого сервиса Happy Job, т.к. была большая помощь с их стороны в части консультаций — когда и что лучше делать. Очень удобно реализован функционал рабочего кабинета, который позволяет онлайн строить любую аналитику — это большой бонус, т.к. позволяет очень быстро перейти от фазы анализа результатов к планированию конкретных шагов по работе с вовлечённостью. Спасибо большое, за предоставленный сервис и поддержку<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/adg.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/glavstroi2__xxh50.jpg" alt="Главстрой" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Александра Антонова</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним коммуникациям АО «Главстрой»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотим подчеркнуть высокий уровень профессионализма менеджера Ивана Наумова и поблагодарить за безупречнуюработу и оперативность в решении вопросов.Желаем вашему коллективу новых свершений, надежных партнеров,здоровья и благополучия, успехов и процветания.Спасибо за совместную работу и до встречи в следующемгоду!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/glavstroy.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  education">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/letovo__xxh50.jpg" alt="Школа Летово" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Елизавета Курочкина</div>
                                        <p class="review-card-subtitle">Менеджер по коммуникациям,<br> Школа Летово</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мне как менеджеру очень нравится глубина аналитики и дизайн отчетов, а также очень важный фактор, что сотрудники считают опрос простым, быстрым и воспринимают как игру. Планируем продолжать сотрудничество с Happy Job. Так как люди привыкают к простому формату, им нравится, их вовлечённость в прохождение возрастает. Также конкретно на нашу аудиторию очень зашла функция «Похвалить коллегу». Очень хотелось бы попробовать опрос по измерению качества внутреннего сервиса, но пока что цена не в нашем бюджете<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/letovo.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/maxxium__xxh50.jpg" alt="Maxxium Russia" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Иван Малов</div>
                                        <p class="review-card-subtitle">Менеджер по обучению и развитию,<br> Maxxium Russia</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy job изобрел новую формулу проведения опроса, в которой есть 2 ингредиента - Увлекательно и Лаконично. Прохождение опроса напоминает игру, в которой ты отвечая на вопросы, улучшаешь свою компанию<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/maxxium.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/modulbank__xxh50.jpg" alt="МодульБанк" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Влада Луценко</div>
                                        <p class="review-card-subtitle">Менеджер внешних проектов, <br>МодульБанк</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Ранее у нас уже был опыт проведения опроса eNPS, поэтому сотрудникам было с чем сравнить. Приятныйинтерфейс, вопросы со свободным ответом и функция "похвали коллегу" мотивируют к прохождению большее количествосотрудников, чем мы могли задействовать при предыдущем формате. Думаю, что за нас на этот вопрос ответит статистика прохождения нашими сотрудниками - в последнем цикле мы ни наодной неделе не проходили опрос меньше, чем на 80%. При численности более 1000 сотрудников, мне кажется, это оченьговорящий результат<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/modulbank.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/iss__xxh50.jpg" alt="ISS" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Полина Леонова</div>
                                        <p class="review-card-subtitle">Менеджер по обучению и развитию,<br> Happiness manager, ISS</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>О чем нельзя не промолчать - это очень простой в использовании и максимально полезный модуль аналитики. По нему можно собирать практически все срезы, которые только могут прийти в голову: общие результаты опроса, результаты по отделам, результаты по полу и возрасту, результаты по отрасли. Кстати последнее помогает сформировать или скорректировать текущий EVP<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/iss.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood electronica eCommerce">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/inventive-logo__xxh50.jpg" style="max-height:
                                        50px;height: 50px; max-width: fit-content;" alt="Inventive retail group" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мария Резник</div>
                                        <p class="review-card-subtitle">Руководитель направления по корпоративной культуре и внутренним коммуникациям Inventive Retail Group</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Используя интерфейс сервиса Happy Job, наши сотрудники не только быстро и легко проходят опрос, но и руководители также быстро и легко могут работать с полученными результатами. Честно и открыто рассказав и показав нашим сотрудникам отчеты, которые генерит сервис, мы не только подкрепили наши ценности в компании ( честность, уважение и доверие), но и заложили фундамент доверия по использованию данного сервиса<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/inventive-retail-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/valenta_vert__xxh50.jpg" alt="valenta" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Морозова Татьяна</div>
                                        <p class="review-card-subtitle">Руководитель отдела по развитию персонала <br> и внутренним коммуникациям</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Несмотря на сезон отпусков (август), процент участия у нас был довольно высокий. Всем понравился интерактивный формат, легкие простые вопросы, веселые иллюстрации вопросов.</p><p>Удобная и легкая система выгрузки отчетности, что для нас очень важно, для анализа и планирования шагов по улучшению ситуации<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/valenta.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rocada-med__xxh50.jpg" alt="Рокада-Мед" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">А.А. Максимов</div>
                                        <p class="review-card-subtitle">Рокада-Мед г. Казань</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job - уникальный сервис, позволяющий держать пульс на вовлечённости персонала и развивать ее уровень. Информация, как мы растем и директора<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/rocada-med.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/faberlic-original__xxh50.jpg" alt="ОАО Фаберлик" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Александра Парамонова</div>
                                        <p class="review-card-subtitle">Менеджер по подбору и адаптации персонала Департамент персонала, ОАО Фаберлик</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Опрос вовлечённости понравился за формат и понятность вопросов. По окончании опроса, сформированные отчеты были готовы на следующий день. И максимально показали картину в компании, а также по отдельным подразделениям. Благодарим Happy job за профессиональный подход и оперативную обратную связь<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/faberlik.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  education">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/skolkovo2__xxh50.jpg" alt="Skolkovo" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Cолошенко Наталья</div>
                                        <p class="review-card-subtitle">Департамент по работе с персоналом "Skolkovo"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сотрудникам понравилось отвечать на короткие и понятные вопросы, а еще больше их привлек игровой формат. Многие отмечали сервис похвалы и просили реализовать подобный функционал в нашей Школе. Что особенно было важно для нас – коллеги из Happy Job помогли нам сделать отчет с обратной конвертаций, который учитывал наши предыдущие результаты и показывал динамику<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/skolkovo.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/tech__xxh50.jpg" alt="ТехноНИКОЛЬ" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Юлия Корочкина</div>
                                        <p class="review-card-subtitle">Директор по персоналу, <br> Торговая Сеть ТехноНИКОЛЬ</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем огромную благодарность за Вашу работу. Вы одни из немногих компаний, которые смогли оказать для нас сервис высокого уровня. Впечатление от работы над проектом положительное, Вы оперативно реагируете на все запросы и своевременно предоставляете нужную информацию. На протяжении всего проекта мы чувствовали, что вы также как и мы действительно заинтересованы в результате. Наши заявки всегда выполнялись оперативно. Больше всего в работе с Happy Job нам понравилась скорость ответов, готовность сделать чуть больше заявленного в заказе, полнота консультирования<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/technonikol-2.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/adv_mini__xxh50.jpg" alt="АДВ" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ярошенко Юлия</div>
                                        <p class="review-card-subtitle">Руководитель направления внутренних коммуникаций, <br>«Рекламная группа АДВ»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Команда Happy Job сделала опрос максимально комфортным и интересным для сотрудников: адаптивный интерфейс, яркие иллюстрации, возможность закрыть опрос и возобновить прохождение в удобное время. Благодаря профессионализму и чуткости команды сервиса нам удалось повысить вовлечённость сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/adv.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/yokohama__xxh50.jpg" alt="YOKOHAMA" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Кривоносова Инна</div>
                                        <p class="review-card-subtitle">Руководитель сектора по управлению персоналом, <br>YOKOHAMA</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа прекрасна: быстро, интересно, наглядно, большой набор инструментов и сервисов, в том числе для анализа результатов.</p> <p>Индивидуальные отчеты для каждого руководителя – очень удобно, позволяют погрузиться и детально изучить результаты, сильные стороны и зоны развития по каждому подразделению<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/yokohama.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/absolutestr__xxh50.jpg" alt="Абсолют Страхование" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мария Кутейщикова</div>
                                        <p class="review-card-subtitle">Руководитель направления по внутренним коммуникациям и корпоративной культуре, ООО "Абсолют Страхование"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Команда Happy Job сделала опрос максимально комфортным и интересным для сотрудников: адаптивный интерфейс, яркие иллюстрации, возможность закрыть опрос и возобновить прохождение в удобное время. Благодаря профессионализму и чуткости команды сервиса нам удалось повысить вовлечённость сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/absolut_strahovanie.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ozk__xxh50.jpg" alt="Объединенная зерновая компания" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Бурякова Ольга Владимировна</div>
                                        <p class="review-card-subtitle">Департамент управления персоналом<br>Руководитель направления подбора, оценки и адаптации</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сама платформа и ее возможности приятно удивили своей гибкостью, адаптивностью под конкретные задачи заказчика. Очень нравится геймификация, с помощью которой все опросы стилизованы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ozk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it education">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/skillbox__xxh50.jpg" alt="Skillbox" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Астафурова Марина</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Оперативная и слаженная работа со стороны команды HJ. Исследование прошло легко, интересная подача опросника, впервые сотрудники не жаловались на пустую трату времени, а проходили опрос с интересом. Очень понятный и удобный отчет<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/skillbox.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vsk.svg" alt="ВСК" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Т.В. Осекина</div>
                                        <p class="review-card-subtitle">Руководитель блока общих<br>и административных вопросов</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В рамках сотрудничества был реализован проект по оценке вовлечённости персонала САО «ВСК». Количество прошедших оценку вовлечённости выросло по сравнению с предыдущим годом, когда опрос проводился другим провайдером. Эксперты Happy Job зарекомендовали себя как высококачественные профессиональные партнеры, полностью ориентированные на потребности клиента и бизнеса<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/vsk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/vsk_new.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce it education">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/skyeng_cut__xxh50.jpg" alt="Skyeng" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Viktoriya Kolesnik</div>
                                        <p class="review-card-subtitle">Project Implementation Manager</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job дает полную детализацию по каждому блоку опроса — это помогает увидеть самые острые вопросы, отсортировать их по проектам и приоритету. Прекрасно настроен график уведомлений — сообщения рассылаются в четко оговоренное время, повторный пуш идет исключительно на тех, кто не прошел опрос. Отдельно хочется похвалить высокий уровень визуала аналитики: он интуитивно понятный и удобный. Из результатов легко формировать отчет для рабочей группы и наглядно показывать их<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ccar__xxh50.jpg" alt="СЕО Publicis Groupe CCAR" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Поляков Н.В.</div>
                                        <p class="review-card-subtitle">СЕО Publicis Groupe CCAR</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сотрудники Happy Job на каждом этапе, начиная от ведущих специалистов, заканчивая руководителями проектов оперативно реагировали на запросы, поясняли принципы исследований, показывали, как работает и устроен личный кабинет и как «читать» отчёты. Руководитель проектов всегда прислушивался к нашим запросам и специфике компании и, исходя из этих вводных, давал рекомендации.</p><p>Проект запустился в срок и был завершен вовремя. Благодаря специальному интерфейсу и личному кабинету была возможность отслеживать статусы прохождения опросов по разным параметрам, по завершению опроса можно было скачать отчеты по разным параметрам<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/publicis_ccar_review.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood moda">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/snowqueen2__xxh50.jpg" alt="Снежная Королева" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Кухто В.В</div>
                                        <p class="review-card-subtitle">Ведущий менеджер<br>Отдела оценки и организационного развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сервис легкий, анимированный. Есть возможность написать свои комментарии, пожелания в свободной форме. Для HR, безусловно, важно наличие автоматизированных отчетов в разных форматах и сортировка данных. Также полезны рекомендации системы по проблемным метрикам – они ложатся в программу работы с вовлечённостью<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/snejnaya-koroleva.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/snowqueen.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/trasko__xxh50.jpg" alt="Trasko" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Князькова Лилия</div>
                                        <p class="review-card-subtitle">Начальник отдела подбора и адаптации</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа предоставляет удобную аналитику, которую можно посмотреть в разных разрезах и сформировать в удобно читаемые отчеты. Платформа дает рекомендации по улучшению метрик, что оценили наши руководители.</p><p>Сотрудники нашей компании, которые проходили опрос вовлечённости, отмечают удобный интерфейс и понятно сформулированные вопросы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/trasko.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/aerodisk__xxh50.jpg" alt="Аэродиск" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Володкович В.Г.</div>
                                        <p class="review-card-subtitle">Генеральный директор</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В первые же дни опрос прошло более 90% нашего персонала. Такая активность не в последнюю очередь была связана с удобством интерфейса и приятной визуализацией. Хотим особо отметить удобство Вашей платформы для мониторинга результатов - возможность следить за статистикой прохождения опроса в режиме реального времени, аналитика по каждой метрике, планировщик задач на основе полученной информации и Ваших экспертных знаний и рекомендаций<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/aerodisk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/aerodisk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  other">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rusbiznesavto__xxh50.jpg" alt="Русбизнесавто" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Крылова Е.Е.</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотелось бы отметить высокий уровень сервисной поддержки - сотрудники Happy Job всегда оперативно отвечали на наши запросы и давали развернутые консультации.</p> <p>Результаты опроса помогают нам понять слабые места подразделений и сформировать приоритетные направления работы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/rusbiznesavto.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/rusbis.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/media1__xxh50.jpg" alt="Медиа1" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Осинцева Светлана</div>
                                        <p class="review-card-subtitle">Руководитель направления обучения и развития</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Впечатляет технологичность и продуманность всех этапов проведения исследования вовлечённости: от яркой PR-компании до обучения руководителей работе с личным кабинетом и отчетами. 86% сотрудников прошли опрос вовлечённости, 50% написали комментарии и обратную связь, мы получили полные и достоверные данные о ситуации в компании по важнейшим метрикам вовлечённости. Теперь мы видим, за что ценят сотрудники компанию и какие видят возможности для развития<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/media1.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/smartconsulting__xxh50.jpg" alt="Smart consulting" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Рамазанова Алина Рафаэлевна</div>
                                        <p class="review-card-subtitle">Ведущий менеджер</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Понятный продукт и интерфейс:Что очень понравилось – быстрые и оперативные ответы от менеджера.Гибкость и подстройка под клиента, что является большим преимуществом.Также хочу отметить высокий уровеньклиентоориентированности.Наша компания осталась довольна работой сервиса Happy-Inc.Благодарю Вас заработу!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/smart-consulting.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vnukovo2__xxh50.jpg" alt="Внуково" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Зиль Ольга Николаевна</div>
                                        <p class="review-card-subtitle">Начальник отдела организации<br>обучения персонала<br>Дирекции по управлению<br>персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Система Happy Job очень удобна в использовании и интуитивно понятна для заполнения, что крайне важно для работников, которые не «дружат» с современными технологиями. А в аэропортах много работников, у которых нет доступа к компьютеру. Удобные отчетные формы выгружаются автоматически и не требуют времени от ответственных работников компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/vnukovo.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/otr__xxh50.jpg" alt="ОТР" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Широкова София Владимировна</div>
                                        <p class="review-card-subtitle">Начальник отдела развития <br>HR-бренда компании <br>Департамент управления <br>персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Результаты опроса платформы Happy Job отображаются в понятной форме — с помощью наглядных графиков, которые можно разделить по подразделениям компании. Особенно понравилась функциональность выгрузки отчётов прямо из личного кабинета руководителя. Проведённый опрос помог выстроить стратегию работы с сотрудниками на 2021 год<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/otr.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/psb_lizing__xxh50.jpg" alt="Промсвязьбанк Лизинг" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Хохлова Валерия Владимировна</div>
                                        <p class="review-card-subtitle">Руководитель направления обучения и развития</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы получили подробный отчёт о результатах вовлечённости каждого подразделения и самое главное, не просто презентовали отчёт, а перешли к действиям: платформа позволяет отдать в проработку руководителям, т.к. для каждого был сформирован отчёт с рекомендациями к действиям.</p> <p>От руководителей мы получили положительную обратную связь, что инструмент очень точно подтвердил ситуацию.</p><p>Уверена, проведенный опрос — начало продуктивного регулярного сотрудничества, который позволит отслеживать динамику увеличения показателей вовлечённости<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/nsc__xxh50.jpg" alt="НСК НРА" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ольга Комарова</div>
                                        <p class="review-card-subtitle">Старший специалист (ООО «НСК», Департамент по работе с персоналом)</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Коллеги с пониманием отнеслись к нашим персональным запросам, внесли все необходимые дополнения и корректировки в анкету и пиар-материалы, были отзывчивы и дали своевременную обратную связь! Спасибо!</p><p>Совместными усилиями мы получили высокий процент участия в опросе. Сотрудники компаний отметили удобный интерфейс и современный формат исследования<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/nsk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ocsdistributon__xxh50.jpg" alt="OCS Distribution" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">А. В. Анцинова</div>
                                        <p class="review-card-subtitle">Заместитель генерального директора<br> по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Что хотелось бы особо отметить:</p><ul> <li>профессиональный подход организаторов к исследованию;</li> <li>подробное описание методики и последующие консультации по полученным результатам</li> <li>невероятная скорость работы консультантов<span>»</span></li></ul></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ocs.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/ocsdistributon.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/gk_etazhi.svg" alt="ГК ЭТАЖИ" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Екатерина Климова</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним <br>коммуникациям компании “Этажи” <br>в г. Москва</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Личный кабинет - это отдельный огромный плюс для работы с результатами! В нем удобно все, начиная от логичности и удобства расположения информации, заканчивая той аналитикой, которая проводится по результатам опроса. Очень здорово, что можно не только увидеть проблемные зоны, но и сразу получить рекомендации по улучшению<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/etazhi.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/orimi2__xxh50.jpg" alt="ГК ОРИМИ" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Светлана Надточий</div>
                                        <p class="review-card-subtitle">Менеджер по персоналу<br> ГК "ОРИМИ"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Очень удобный интерфейс опроса. Наши заявки всегда выполнялись оперативно. Благодаря удобным и точным отчетам, руководители легко понимают слабые и сильные стороны подразделения<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/orimi.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/3logicgroup__xxh50.jpg" alt="3LOGIC GROUP" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Рогожникова Рада</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Понравился интерактивный интерфейс платформы, построение отчетов, соблюдение анонимности, а также наличие рекомендаций по результатам исследования, а не сухая статистика<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/3logic.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/segezha__xxh50.jpg" alt="Segezha Group" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мария Лунегова</div>
                                        <p class="review-card-subtitle">Руководитель направления по внутренним коммуникациям и работе с&nbsp;молодежью</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа Happy Job интуитивна понятная, все результаты представляются не только виде текстов, но и инфографики. Можно генерировать и выгружать отчеты как по всей Группе, так и по отдельным подразделениям.</p><p>Очень удобным и наглядным оказался контент-анализ комментариев сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/segesha-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/havas__xxh50.jpg" alt="Havas" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Александра Плотникова</div>
                                        <p class="review-card-subtitle">Senior HR<br> ООО "Хавас Медиа"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Команда Happy Job сделала опрос максимально комфортным и интересным для сотрудников: адаптивный интерфейс, яркие иллюстрации, возможность закрыть опрос и возобновить прохождение в удобное время. Благодаря профессионализму и чуткости команды сервиса нам удалось существенно повысить вовлечённость сотрудников и получить объективные, достоверные результаты<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/havas-media.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/havas_media.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  fmcg">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/veld21__xxh50.jpg" alt="Вельд-21" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Панов Андрей</div>
                                        <p class="review-card-subtitle">Директор по персоналу<br> ООО "ВЕЛЬД-21"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Исследование вовлечённости от Happy Job показало нам все наши сильные стороны и болевые точки. Спасибо консультантам, которые с самого начала терпеливо и структурированно разъясняли механику опроса, помогали со всей документацией для его запуска, а также оперативно и гибко реагировали на любые запросы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/veld.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/veld21.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/krasniy-yar__xxh50.jpg" alt="Красный Яр" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Краева Ирина</div>
                                        <p class="review-card-subtitle">HR-директор<br> Группа компаний «Красный Яр»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Внутренний функционал системы интуитивно понятен, поэтому в плане работы с результатами и просмотром прогресса исследования проблем не возникало. Само исследование провели после пилотного опроса в июле 2021 года. Оно было действительно своевременным, о чем можно судить по мощной обратной связи от всех подразделений<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/krasniy-yar.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/krasnyar.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vprok__xxh50.jpg" alt="Перекрёсток" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Яна Якушенко</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним коммуникациям, Vprok.ru<br> Перекрёсток</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Как организатору опроса в компании мне было очень удобно работать с результатами. Результаты мгновенно отображаются в удобной форме, отчеты имеют разные формы, есть возможность углубиться во все метрики и изучить все показатели. Команда Happy Job сделала качественный и полезный продукт, который хочется рекомендовать<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/perekrestok-vprok.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/eset__xxh50.jpg" alt="ESET" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Хусаинов Таир</div>
                                        <p class="review-card-subtitle">Менеджер по персоналу<br> и диджитал проектам<br> ООО "ИСЕТ Софтвеа"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Главным индикатором того, что это сотрудничество стало плодотворным был интерес к опросу со стороны сотрудников и руководителей. За то время пока опрос был активен, каждый день мы получали вопросы руководителей: Когда уже можно будет посмотреть результаты?.</p><p>Со стороны же HR подразделения, у нас также остались только положительные впечатления от коммуникации с сотрудниками Happy Job. Мы всегда получали оперативные ответы и обратную связь, а также Happy Job всегда были готовы идти на встречу<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/eset.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/azbuka-vkusa__xxh50.jpg" alt="Азбука вкуса" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Гузиенко Елена</div>
                                        <p class="review-card-subtitle">Руководитель группы аналитики, оценки и развития компетенций</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодаря методическим, техническим и визуальным решениям Happy Job мы добились устойчивого интереса к прохождению опроса у участников и повышения доверия к результатам.</p><p>Особо следует отметить компетентность и высокую квалификацию сотрудников компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/azbuka_vkusa.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/azbuka_vkusa.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/nmg__xxh50.jpg" alt="Национальная Медиа Группа" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Старикова Елена</div>
                                        <p class="review-card-subtitle">Руководитель направления по обучению и развитию</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Удобная платформа, геймифицированный формат, качественный интерфейс и возможность формирования любых отчетов – и сотрудники, и руководящий состав по достоинству оценили преимущества платформы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/nat-media-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/gals__xxh50.jpg" alt="Галс-Девелопмент" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Чернуха А.В.</div>
                                        <p class="review-card-subtitle">Заместитель генерального директора, директор административного департамента</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В процессе работы сотрудники Нарру Job всегда готовы оперативно ответить на возникающие вопросы, а возможность сделать личные кабинеты для руководителей и выгружать различные аналитические отчеты очень облегчает работу HR<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/gals.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/gals-development.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/avtotransinfo__xxh50.jpg" alt="Автотрансинфо" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Смирнова А.М.</div>
                                        <p class="review-card-subtitle">Менеджер по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Отдельно хотим отметить великолепную статистику, которая отражает все показатели с разных сторон. Есть комментарии ко всем индикаторам и рекомендации для руководителей.</p><p>Проведённый опрос помог выстроить стратегию работы с сотрудниками на 2021 год<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/avtotransinfo.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/avtotransinfo.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/sentiss__xxh50.jpg" alt="Sentiss" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ирина Снитко</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Уже во второй раз наша компания проводит исследование удовлетворенности сотрудников вместе с компанией Нарру Job.</p><p>Работа с компанией оставила только положительное впечатление. Наши сотрудники с удовольствием проходили опрос, после прохождения отметили легкость и визуальную простоту<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/sentiss.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/sentiss.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/alfa-lizing.svg" alt="Альфа Лизинг" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">А.А. Кириленко</div>
                                        <p class="review-card-subtitle">Специалист по корпоративной культуре и внутренним коммуникациям</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарим за максимально быстрое реагирование на запросы и внесение правок при необходимости!</p><p>Отдельное спасибо за интуитивно понятный интерфейс, всплывающие расшифровки и подсказки в личном кабинете<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/alfa-lising.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/review-alfa-lizing.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/orangegroup.svg" alt="Orange Group" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Скрипниченко Ирина</div>
                                        <p class="review-card-subtitle">Директор по счастью<br>Группы Компаний Orange Group</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Все просто и предельно понятно, что позволяет проходить тестирование быстро, и, как следствие, быстро получать результаты. Отчеты по результатам хотим отметить отдельно. Работать с ними одно удовольствие, можно формировать сводки в любых разрезах, что позволяет оценить результаты со всех возможных сторон. Все автоматизировано, формируется легко<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/orange-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/review-orange.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ayaks-logo__xxh50.jpg" alt="Аякс" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Антонюк Анастасия</div>
                                        <p class="review-card-subtitle">HR Business Partner<br>ООО "АЯКС"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job подготовил для нас геймифицированную PR-компанию, которая дала отличный старт и сформировала неподдельный интерес у сотрудников.</p><p>В результате мы получили понятные отчеты по всем метрикам. Увидели зоны для модернизации и изменений в компании. Очень актуальным оказалось наличие бенчмарков в реальном времени. Это значит, что мы можем сравнить показатели в реальном времени<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ayaks.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/ayaks.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ebc-logo__xxh50.jpg" alt="ЭкспертБизнесКонсалтинг" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Меншенина Л.Н.</div>
                                        <p class="review-card-subtitle">Директор по персоналу<br>ООО "ЭкспертБизнесКонсалтинг"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Тут удобно всё: отправка оповещений о прохождении опроса, онлайн доступ к результатам опроса по мере егопрохождения сотрудниками, возможности аналитики впечатляют - можно посмотреть всё в разрезе факторов по командам, что для нас особенно ценно, т.к. в нашей команде матричная структура управления. Нас стимулирует к развитию и улучшению возможность сравнить свои итоги с бенчмарком по России и IT отрасли - в сервисе Happy Job такой бенчмарк есть вплоть до субметрик!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/ebc-group.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/ebc-pdf.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/slata__xxh50.jpg" alt="Слата" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Кузнецова Н.Ю.</div>
                                        <p class="review-card-subtitle">Руководитель отдела по подбору и развитию персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Заявки при проведении исследования исполнялись оперативно и качественно, сотрудники были максимально клиентоориентированы, все сроки были соблюдены.</p><p>Одним из самых положительных моментов хотим отметить большое количество бенчмарок в портфеле компании, а также удобство и простоту использования платформы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/slata.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/slata.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop company">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/akfa__xxh50.jpg" alt="Акфа" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Гуламов К.А.</div>
                                        <p class="review-card-subtitle">Директор «AKFA Engineering and Management»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мастерство этой команды позволило нам в краткий срок провести масштабный опрос, получить точные результаты со сравнениями с бенчмарками, а также определиться с планом дальнейших действий для улучшения показателей. Особо хотели отметить, что при возникновении технических неполадок мы получали очень внимательное и оперативное реагирование<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/akfa.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/akfa.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/blanc.svg" alt="Бланк" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Егорова Е.А.</div>
                                        <p class="review-card-subtitle">HR бизнес-партнер</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодаря опросу мы получили огромное количество положительной обратной связи, особенно о геймифицированном формате. Опрос воспринимается достаточно легко и занимает мало времени на прохождение. Вопросы были понятно сформулированы и отлично восприняты сотрудниками<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/blanc.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/blanc.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist company">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/maximum-logo.svg" alt="Максимум" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Михайлова Яна</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа Happy Job позволяет видеть картинку по вовлечённости сразу и пользоваться всей информацией на портале в течение года, удерживая в фокусе действительно важные и значимые вещи: зоны развития; метрики, требующие особого внимания; отчетность в разных разрезах, что актуально для руководителей подразделений с большой численностью<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/maximum.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/maximum-pdf.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/level__xxh50.jpg" alt="Level" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Пузанова Ксения </div>
                                        <p class="review-card-subtitle">Специалист по HR-проектам </p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы сотрудничаем с Happy Job уже более двух лет: проводим опросы вовлечённости, клиентоориентированности, 360. С командой Happy Job приятно работать – очень быстро реагируют на запросы, всегда при каких-то сложных доработках предлагают наиболее оптимальные варианты, при необходимости готовят дополнительные материалы, возникающие вопросы получается решить день в день. Что касается самих опросов – сотрудникам нравится визуализация и механика, а мне, как человеку, работающему с результатами, нравится функционал отчетов – можно выгрузить информацию в разных разрезах и форматах, если в личном кабинете я сталкивалась с трудностями, опять же, команда Happy Job максимально оперативно приходила на помощь<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/level.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  oil company">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/besk-logo.svg" alt="БЭСК" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ю.А. Казанская</div>
                                        <p class="review-card-subtitle">Член Правления - Директор по управлению персоналом и административным вопросам </p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>От лица АО "БЭСК" выражаем вам благодарность за проделанную работу. Впечатление от работы над проектом положительное, Вы оперативно реагировали на все запросы и своевременно предоставляли нужную информацию.Нам понравился комфортный формат, понятная и удобная платформа оценки, качественная аналитика, доступная в реальном времени, ваша клиентоориентированность и гибкость.Благодарим за сотрудничество!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/besk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/besk-pdf.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/inteco-rus__xxh50.jpg" alt="Интеко" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анна Рогачева</div>
                                        <p class="review-card-subtitle">Руководитель направления внутренних коммуникаций «ИНТЕКО»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарим компанию Happy Job за слаженную работу! Сотрудники отметили прекрасную визуализацию материалов и простоту подачи информации, по итогу мы получили много позитивной обратной связи. Особенно хотелось бы отметить оперативное реагирование команды на любые технические сложности: все вопросы решаются молниеносно и очень четко. Было очень приятно поработать вместе над проектом!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/inteko.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop company">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/1dsk-logo__xxh50.jpg" alt="1дск" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Коровкина О. С.</div>
                                        <p class="review-card-subtitle">Директор по персоналу ООО «Первый ДСК»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>По итогам сотрудничества наших организаций выражаем Вам благодарность за проведенное исследование.Хочется отметить быстрое предоставление результатов, вариативность их сведения и выгрузки. Вашей компанией продемонстрирована отличная скорость и оперативность консультаций по интересующим вопросам. Простота и удобство использования интерфейса внесли позитивный вклад в совместную работу.Мы полностью удовлетворены работой и обязательно вернёмся к вам в следующем году<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/dsk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/1dsk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank company">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/fortebank-logo__xxh50.jpg" alt="Fortebank" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ахметова Анар Саттаровна</div>
                                        <p class="review-card-subtitle">Директор</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Продукты Happy Job отвечают всем современным требованиям в части актуальности инструментов внутрикорпоративных исследований, дизайна интерфейса, логики выстраивания условий и критериев опросов, формирования отчетов в различных форматах. Кроме того, отмечаем уникальную возможность в режиме реального времени отслеживать результаты опросов руководителями подразделений и HR, что дает гарантию чистоты и прозрачности самого процесса и его результатов. При этом, Happy Job строго придерживается политики конфиденциальности респондентов<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/fortebank.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/fortebank.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  telekom">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/telecom-int.svg" alt="Телеком Интеграция" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Фаттахова А.Р.</div>
                                        <p class="review-card-subtitle">Руководитель направления отдела по работе с персоналом ГК "Innostage"</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Более 75% наших сотрудников прошли данный опрос вовлечённости, многие оценили то, что сама платформа Happy Job является очень комфортной для использования, вопросы являются понятными, а само прохождение анкеты занимает немного времени.</p><p>Полученный результаты выглядят очень наглядно, результаты выгружаются автоматически. Это помогло нам выявить уязвимые стороны и построить план по дальнейшей работе<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/telecom-integration.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/telekom-int.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/okb-logo__xxh50.jpg" alt="ОКБ" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Команда HR</div>
                                        <p class="review-card-subtitle">AO «ОКБ»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы уже успешно провели такие важные опросы как «Опрос по оценке качества внутреннего сервиса в декабре 2020 и «Опрос вовлечённости» в августе 2021. И сейчас мы совместно готовим несколько опросов, в том числе и «Оценка 360».</p><p>Большое спасибо за вашу работу и чуткий подход к каждой задаче!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/okb.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/okb-pdf.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/pgk__xxh50.jpg" alt="ПГК" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Д.Р. Симановская</div>
                                        <p class="review-card-subtitle">Начальник центра обучения и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job показали высокий уровень клиентоориентированности, который выражался в:</p><ul> <li>оперативной обратной связи по возникающим вопросам;</li> <li>быстром внесении необходимых корректировок;</li> <li>подробной презентации результатов<span>»</span>.</li></ul></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/pgk.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/pgk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  agroprom">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/belaya_dacha__xxh50.jpg" alt="Белая дача" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">И.Д. Лугина</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Особо хочется отметить высокую технологичность и сервисы платформы, а также прозрачную и понятную механику в работе с отчётами и результатами опроса.</p><p>Все наши пожелания по доработкам сервисов и отчётов выполнялись очень быстро<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/belaya_dacha.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/brinex__xxh50.jpg" alt="Brinex" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ю.М. Окунева</div>
                                        <p class="review-card-subtitle">Директор по персоналу Группы BRINEX</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Ценим совместную работу с вами и благодарны закрепленным специалистам вашей компании за оперативное решение возникших вопросов, в частности Панферову Дмитрию за клиентоориентированность, качественную обратную связь, помощь с процессами анализа, корректировки данных, а также удобный и понятный отчет по результатам исследований в личном кабинете руководителей, который позволил быстро оценить результат и разработать план мероприятий.</p><p>Сам опрос был подготовлен в удобном и позитивном формате, вопросы были понятно сформулированы и благосклонно восприняты сотрудниками<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/brinex.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/brinex.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vodokanal-logo__xxh50.jpg" alt="Водоканал" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">М.Е. Весина</div>
                                        <p class="review-card-subtitle">Руководитель (направления развития персонала) МУП «Водоканал»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Команда Happy Job сделала опрос максимально интересным для сотрудников, что обеспечило высокий процент прохождения. Вопросы идеально подходят под цели исследования, а платформа дает полную детализацию по каждому блоку опроса, что помогает увидеть проблемные зоны. Также платформа сразу анализирует результаты и дает свои рекомендации по тем метрикам, которые нужно улучшить, поддержать и развивать<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/vodokanal.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/vodokanal.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/easy-media.svg" alt=" Easy Media" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мария Перелыгина</div>
                                        <p class="review-card-subtitle">Human Resources Director</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Все наши запросы были обработаны сотрудниками компании оперативно и качественно, и в целом клиентский сервис у компании находится на высоком уровне. Менеджеры внимательны, приветливы и помогали нам с реализацией проекта на всех этапах. Отдельно хочу отметить плюсы самой платформы, она крайне удобна в использовании, всё просто, красочно и визуально приятно, и при этом очень информативно и дружелюбно даже к новым пользователям. Многое автоматизировано, как в подготовке и проведении самого опроса, так и в использовании и выгрузке информации с платформы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/easymedia.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/prosvechenie__xxh50.jpg" alt="Просвещение" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Т.В. Филатова</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Совместный проект с Happy Job оставил прекрасные впечатления.Геймифицированный понятный интерфейс опроса заинтересовал большую часть сотрудников и помог достичь отличного результата по прохождению. Внимательная и оперативная работа менеджера Ивана Наумова позволила грамотно выстроить весь процесс и быть гибкими во всех возникающих вопросах. Глубокая аналитическая работа с результатами опроса помогла продумать стратегические шаги по дальнейшему развитию команды<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/prosvechenie.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/corex_new__xxh50.jpg" alt="corex" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Малардырова С.П.</div>
                                        <p class="review-card-subtitle">HR BP</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Менеджеры отвечали быстро и всегда очень тактично, предоставляя всю запрашиваемую информацию и сопровождая нас на всех этапах подготовки к запуску проекта</p><p>Больше всего нам понравился как сервис компании, так и формат результатов опроса. Результаты представлены на платформе в понятной форме, и есть доступ к вспомогательным материалам. Работать внутри самой платформы было довольно легко. Используется понятная навигация, которая под силу всем пользователям без необходимости дополнительного обучения<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/corex.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/corex.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/kama__xxh50.jpg" alt="kama" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Князева М.А.</div>
                                        <p class="review-card-subtitle">Начальник отдела оценки и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотелось бы отметить, что сотрудники Happy Job, которые были кураторами нашего проекта, проявляли гибкость, структурированность и техническую поддержку на постоянной основе на протяжении всего проекта.</p><p>Что касается отчётов, полученных на основании результатов опроса, очень порадовало их оформление и «начинка», понятная даже человеку, который ни разу не имел дела и не углублялся во все процессы. Отдельно нужно отметить вариативность отчетов и возможность выгрузить отчет по заданному критерию для подтверждения управленческой гипотезы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/kama.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it it-500">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/myoffice__xxh50.jpg" alt="myoffice" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ольга Емельянова</div>
                                        <p class="review-card-subtitle">Руководитель отдела по внутренним коммуникациям и корпоративной культуре</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>С компанией Happy Job мы сотрудничаем с 2020 года с опросом вовлечённости, лояльности и удовлетворенности. Хочу выразить коллегам из сервиса, и особенно нашему менеджеру текущего года Дмитрию Панферову, огромную благодарность!</p><p>Благодарность за гибкий подход, быструю обратную связь, возможность реализовать любые запросы и сделать так, чтобы нашим сотрудникам все было максимально комфортно и понятно, а руководителям наглядно и удобно. Приятно видеть, что уровень вашего клиентского сервиса только растет!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/myoffice.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/fsk.svg" alt="ФСК" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ю.В. Итаева</div>
                                        <p class="review-card-subtitle">Вице-президент по стратегии и управлению персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Группа компаний ФСК благодарит компанию Happy Job за сотрудничество в рамках проведения ежегодного исследования вовлечённости, лояльности и удовлетворенности сотрудников нашей Компании.</p><p>Мы хотим отметить надежность платформы Happy Job, высокое качество предоставляемых услуг, постоянное совершенствование сервиса и гибкость взаимодействия.</p><p>Спасибо за отличную работуи надеемся на долгосрочное партерство в будущем!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/fsk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/publicis__xxh50.jpg" alt="Publicis" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Павлова Д.Н.</div>
                                        <p class="review-card-subtitle">Директор ТОО «Айтыс Адвертайзинг»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Большим плюсом мы бы отметили интерфейс и платформу для опроса и личный кабинет: есть возможность отслеживать статусы прохождения опросов по разным параметрам, всё кастомизированно именно под наши нужды, и более того по каждому показателю даются подробные пояснения и рекомендации. Все отчеты, анализы и рекомендации можно выгрузить в виде презентации, по всем рекомендациям можно сформировать план действий по улучшению и отслеживать их выполнение<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/publicis.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/metr_kvadratniy.svg" alt="Метр квадратный" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Тлустая Анастасия</div>
                                        <p class="review-card-subtitle">Старший менеджер по обучению и развитию персонала «Метр квадратный»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хочу отметить то, что даже после опроса сотрудники Happy Job все также оставались на связи и помогали решать новые кейсы, которые не были учтены заранее или появлялись после. Это действительно клиентоориентированность, а не желание такими быть<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/metr_kvadratniy.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ppr-ru.svg" alt="Программный продукт" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Веселова А.А.</div>
                                        <p class="review-card-subtitle">Менеджер по обучению и развитию</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Наши сотрудники не раз отмечали интуитивный и удобный интерфейс платформы. Ввиду встроенной на платформе геймификации:</p><ul><li>сотрудникам интересно и просто проходить сложный опрос;</li><li>руководители в режиме реального времени по своему отделу могут видеть итоги и рекомендации по работе с ними;</li><li>НВ легко проводить анализ результатов опроса и планировать эффективные мероприятия.</li></ul><p>Вы сделали хороший и качественный продукт, которым хочется пользоваться и который хочется рекомендовать<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/ppr-ru.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/t1_integration.svg" alt="Т1 Интеграция" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Еликова В.С.</div>
                                        <p class="review-card-subtitle">Директор по персоналу ООО «ТС Интеграция»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Ваш продукт визуально приятен и интуитивно понятен, уверенно пользоваться личным кабинетом руководители могут без дополнительных инструкций.</p><p>Особенно понравилось, что не нужно ждать результатов по окончании исследования: все итоги доступны в режиме реального времени по любым метрикам и в любых разрезах. Платформа Happy Job - незаменимый помощник для HR<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/t1_integration.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  telekom">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/westcall__xxh50.jpg" alt="ООО ВЕСТ КОЛЛ ЛТД" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Косарлукова Татьяна Анатольевна</div>
                                        <p class="review-card-subtitle">Тренинг-менеджер ООО ВЕСТ КОЛЛ ЛТД</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Спасибо вам, что реагировали молниеносно на каждый наш запрос. Такой опрос проводился впервые и было много сложностей, но благодаря вам мы справились.</p><p>Отдельно хотим поблагодарить Дагаеву Веронику и Любятинскую Анастасию за помощь в подготовке и проведению опроса.</p><p>Сам сервис легко воспринимается, веселые картинки в опросе не дают скучать, опрос проходит на одном дыхании. Есть возможность писать комментарии. Отчеты тоже легко формировать можно видеть картину и по компании в целом и по каждому подразделению, что помогает найти болевые точки в компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/westcall.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/evrohim.svg" alt="Еврохим" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Дронова Олеся Игоревна</div>
                                        <p class="review-card-subtitle">Руководитель направления</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>С помощью сервиса мы можем в режиме реального времени диагностировать проблемные зоны, видеть рекомендации сотрудников и формировать индивидуальный план развития по приоритетным метрикам.</p><p>Важным преимуществом для нас, безусловно, является возможность сравнивать свои показатели не только внутри компании, но и по всему рынку. В личном кабинете мы всегда можем посмотреть самые свежие бенчмарки по своей отрасли<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/chizhik__xxh50.jpg" alt="Чижик" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Галина Семенова</div>
                                        <p class="review-card-subtitle">Руководитель направления корпоративной культуры и внутренних коммуникаций, ТС Чижик</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Огромная благодарность всей команде Happy Job и особенно Максиму Потапенко и Елене Блиновой. Ваша помощь и экспертиза помогли нам провести опрос легко и без проблем! Настоящие профессионалы! Все заявки и просьбы выполнялись очень оперативно! Максим – это настоящий пример клиентоориентированности и профессионализма! Нам очень понравился доработанный личный кабинет, теперь мы можем посмотреть практически все разрезы и бенчи. Удобные и понятные отчеты и представление данных! Работать с цифрами – одно удовольствие!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/x5-technonogy__xxh50.jpg" alt="X5 Technology" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Забелина Е.А.</div>
                                        <p class="review-card-subtitle">Директор департамента организационного развития и внедрения изменений</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Особенно хочется отметить удобство инструмента, как для самих респондентов, так и для последующей аналитики результатов: быстрота подготовки, качество онлайн отчетов в личных кабинетах с наглядной аналитикой по динамике и рыночным бенчмаркам.</p><p>В целом, уровень организации исследований соответствует требованиям ООО «ИТ ИКС 5 Технологии», запросы быстро обрабатываются сотрудниками ООО «Фёрст Трэйнинг Групп», а также с коллегами всегда приятно взаимодействовать по любым методологическим вопросам<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/x5-technology.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/neftehimproject.svg" alt="Нефтехим проект" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Казакова Дина Раяновна</div>
                                        <p class="review-card-subtitle">Координатор группы планирования и контроля реализации проектов АО «Нефтехимпроект»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Понравился интерактивный интерфейс платформы, построение отчетов, соблюдение анонимности, а также наличие рекомендаций по результатам исследования, а не сухая статистика. При использовании данного инструмента можно увидеть клиентоориентированный подход в разработке.</p><p>Отдельная благодарность за короткие обучающие видеоролики, изначально они помогли нам обратить внимание на данный ресурс.</p><p>Благодарим за качественную работу и будем рады продолжить сотрудничество!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/neftehimproject.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it it-500">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cft.svg" alt="ЦФТ" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Труфаника Татьяна</div>
                                        <p class="review-card-subtitle">Ведущий специалист по оценке и развитию Блока «Управление Персоналом»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Уважаемые коллеги! Огромная благодарность, от всей команды принявшей участив в опросе! Про возможности системы пишут многие пользователи Вашего продукта, но хочется особенно отметить интерфейс опросника, он действительно френдли :-) Так же Вашей сильной стороной считаю анализ текстом, и их группировка по смыслам. Это очень ярко визуализирует ключевые потребности сотрудников в командах. Спасибо, что даёте возможность работать не только с линейной структурой, но и матричное деление на команды помогли нам заложить. Для нас было полезно видеть командные срезы настроения. Спасибо за бенчмарки! И за продукт в целом, идем за добавкой!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/cft.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it it-500">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/i-tat__xxh50.jpg" alt="Айтат i-tat.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Сомова Анастасия</div>
                                        <p class="review-card-subtitle">Руководитель HR-проектов ООО «Компания Айтат»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Удобные и красочные формы для заполнения в тестах. Все просто и предельно понятно, что позволяет проходить тестирование быстро, и, как следствие, быстро получать результаты. Отчеты по результатам хотим отметить отдельно. Работать с ними одно удовольствие, можно формировать сводки в любых разрезах, что позволяет оценить результаты со всех возможных сторон. Все автоматизированно, формируется легко.</p><p>Также хочется сказать несколько слов о команде. Безусловно, это профессионалы своего дела. Все вопросы решаются с невероятной скоростью, при этом без потери качества. Всегда готовы предложить наилучшее для клиента решение<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/i-tat.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cscentr.svg" alt="Центр корпоративных решений cscentr.com" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Стешенко Наталья Николаевна</div>
                                        <p class="review-card-subtitle">Главный специалист Дирекция по поддержке и развитию сервисов управления персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хочу поделиться отзывом о взаимодействии с командой Happy Job В ходе подготовки к очередному опросу вовлечённости для нас было крайне важно, чтобы по всем возможные вопросам и дополнительным корректировкам мы получали максимально оперативную обратную связь и поддержку. Хотим выразить большую благодарность менеджеру Иван Наумову за очень быструю реакцию на любой запрос, подробные пояснения и консультации по всем вопросам. По итогам проведения опроса Иван провел встречи с представителями подразделений и получил по итогам только позитивные отзывы. Мы отметили тщательную подготовку к каждой проведенной встрече, подробные и четкие ответы на вопросы. Благодарим за взаимодействие!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company nofood">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/taipit__xxh50.jpg" alt="Торгово-промышленная группа taipit.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Вербицкая Светлана Львовна</div>
                                        <p class="review-card-subtitle">Директор по персоналу Торгово-промышленная группа 'Тайпит'</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Спасибо специалистам Happy Job по всем направлениям сервиса и поддержки от старта проекта до его завершения. Спасибо за ваш отличный сервис, который позволяет «оцифровать» ощущения, измерить пульс и атмосферу компании. Причём сделать это быстро, при максимально быстрой коммуникации и высокой конструктивности, гибкости и простоте.</p><p>Сотрудничество будем продолжать, потому что Happy Job не останавливается в своём развитии и предлагает новые полезные инструменты измерения артефактов культуры организации, что в нашей компании считается важным<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/taipit.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company metal">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/amrbk__xxh50.jpg" alt="Алюминий Металлург Рус amrbk.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Гугуева Светлана Алексеевна</div>
                                        <p class="review-card-subtitle">Директор по персоналу АО «АМР»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Очень удобно представлены результаты – возможно посмотреть результаты на платформе или выгрузить  автоматически сформированную презентацию по любому выбранному подразделению. Результаты с цветовыми шкалами наглядно показывают уровень показателя по каждой метрике/субметрике, к каждой субметрике даны развернутые комментарии. Система самостоятельно выбирает приоритетные для развития метрики, а также предлагает возможные мероприятия для повышения вовлеченности/лояльности персонала<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/amrbk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vashinvestor__xxh50.jpg" alt="Ваш инвестор vashinvestor.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Е.А. Сидельникова</div>
                                        <p class="review-card-subtitle">Специалист по внутренним коммуникациям ООО МФК «ЦФР ВИ»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Сотрудники искренне оценили удобство платформы, возможность пройти опрос из любого месторасположения, где есть сеть интернет. Безусловно, большую роль в опросе сыграла анонимность и сторонний провайдер, показатель прохождения в первый же день был 65%.</p><p>Отдельно хочется отметить работу Менеджера проекта Анастасии Жариковой как компетентного специалиста. На протяжении всего проекта мы были на связи практических 24/7, все запросы, вопросы и внесение любых изменений всегда всё было оперативно. Команда Happy Job проявила высокую клиентоориентированность и оказала нам поддержку на всем пути. Надеемся на долгосрочные партнерские отношения в будущем<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/vashinvestor.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/region-leasing__xxh50.jpg" alt="Регион лизинг region-leasing.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Сафарова Ирина</div>
                                        <p class="review-card-subtitle">Директор по персоналу АО «РЕГИОН Лизинг»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Наша компания не первый год пользуется сервисом Happy Job для проведения опросов. Текущий год не стал исключением. Мы снова обратились в Happy Job, чтобы оценить вовлеченность. И конечно, слова благодарности коллегам из Happy Job за качественный и современный сервис, помогающий провести важную и нужную работу. Все вопросы, которые возникали в процессе подготовки и уже после опроса, оперативно решались при участии руководителя проектов Дмитрия Панферова. Дмитрий терпеливо и доброжелательно помогал на всех участках. До встречи в 2023 году и успехов в развитии ценного сервиса!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/region-leasing.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  leasing">
                            <article class="review-card two-buttons">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/baltliz__xxh50.jpg" alt="Балтийский Лизинг" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ильина Юлия Витальевна</div>
                                        <p class="review-card-subtitle">Заместитель начальника отдела управления персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа очень удобна, проста в использовании, визуально понятна, а прохождение опроса не занимает много времени у респондентов.</p> <p>Особенно удобно наличие личных кабинетов для руководителей с актуальными данными<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a class="review-card-link generate-pdf" href="/pdf/reviews/balt-lising.pdf" target="_blank">
                                                <b class="review-card-icon icon-zoom"></b>
                                                Полный отзыв в PDF-файле
                                            </a>
                                            <a href="/img/p/clients/clients-pdf/baltliz.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  insurance">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rosbank___xxh50.jpg" alt="Росбанк страхование rosbankinsurance.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Дитятева А.Л.</div>
                                        <p class="review-card-subtitle">Директор по персоналу и административным вопросам</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Все этапы – согласование договора, подготовка коммуникационной кампании, проведение опроса, оформление доступов руководителям, выполнялись оперативно и в обговоренные сроки. Менеджер, закрепленный за нашей компанией, был очень клиентоориентированным, всегда был на связи, помогал с запуском исследования. В итоге подготовительная работа по запуску и сам опрос прошли легко и быстро, а дополнительные запросы оперативно были реализованы<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/rosbank.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  telekom">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cros__xxh50.jpg" alt="Крос www.cros.ru" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Дударев Дмитрий</div>
                                        <p class="review-card-subtitle">HR Директор акционерного общества «Компания развития общественных связей»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность компании Happy Job за хорошо проделанную работу. Летом мы обращались к услугам компании и остались очень довольны проделанной работой.</p><p>Большое спасибо специалистам компании за своевременную обратную связь и глубокий анализ проводимого исследования, удобный понятный отчет с результатами исследований в личном кабинете руководителей. Можно сформировать и распечатать результаты опроса, быстро оценить результат и разработать план мероприятий, что удобно для пользователей. Спасибо за совместную работу и до встречи в следующем году!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/cros.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  horeca">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/burgerking.svg" alt="ООО «БУРГЕР РУС»" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Тиунова Т.А.</div>
                                        <p class="review-card-subtitle">Директор Департамента людей</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Особую благодарность хотим выразить нашей проектной команде: Андрею Соловьюку, Ивану Наумов и Дмитрию Панферову Коллеги постоянно с нами на связи, всегда готовы помочь, ответить на все вопросы и найти решение непростым кейсам.</p><p>Мы рады сотрудничеству с командой Happy Job и готовы рекомендовать ее как надежного партнера и опытного провайдера, лидера рынка в области исследований вовлеченности сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/burgerking.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  horeca">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vanhotels__xxh50.jpg" alt="Ван Хотелс" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мельников Д. В.</div>
                                        <p class="review-card-subtitle">Генеральный директор</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>ООО «ВАН Хотелс» выражает благодарность Happy Job за организацию в нашей компании опроса о Вовлечённости персонала Happy Job. Данный опрос вызвал большую заинтересованность в компании и в итоге его прошли 97% всех сотрудников! Хотелось бы отметить приятный визуал и геймификацию самого опроса, грамотно составленные вопросы, а так же подробную, наглядную и информативную аналитику по итогам. Провайдер гарантирует полную анонимность для участников опроса. Особую благодарность мы выражаем менеджеру Дагаевой Веронике — она всегда оперативно приходила на помощь по всем возникающим вопросам<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/vanhotels.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rb__xxh50.jpg" alt="Рейтинг букмекеров" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Восканян Аруся</div>
                                        <p class="review-card-subtitle">HR People Partner</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Результаты и инструменты, которые мы получили после – превысили наши ожидания! Что хочется отметить отдельно:</p><ul><li>команда Happy Job – профессионалы, знающий толк в своем деле;</li><li>суперскорость реагирования, консультация, помощь с метриками – все на уровне;</li><li>удобный и максимально понятный интерфейс платформы – как для HR-команды, так и для самих сотрудников.</li></ul><p>Особую благодарность хочется выразить Дагаевой Веронике и Любятинской Анастасии. Спасибо за проделанную работу!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/rb.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ekf.svg" alt="EKF" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Департамент персонала EKF</div>
                                        <p class="review-card-subtitle"></p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Прохождение опроса стало очень простым, местами веселым, а самое главное - полностью анонимным. Платформа интерактивная, удобная и предназначена для прохождения опроса с любого устройства.</p><p>Благодаря этим факторам нам впервые удалось вовлечь 95% сотрудников к прохождению опроса и предоставлению честной обратной связи. А команда руководителей в свою очередь очень активно начала процесс анализа полученных результатов и составления action-планов<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/EKF.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  horeca">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cosmos__xxh50.jpg" alt="Cosmos Hotel Group" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ларионова А.А.</div>
                                        <p class="review-card-subtitle">Директор по организационному развитию</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Cosmos Hotel Group благодарит Happy Job за совместную реализацию проекта по опросу вовлеченности. Зона охвата опроса — сеть отелей Cosmos Hotel Group - 19 отелей по всей России, 2&nbsp;000 сотрудников. Несмотря на специфику деятельности гостиничного бизнеса, благодаря поддержке менеджера проекта Happy Job в части технического сопровождения, коммуникаций, консультациям в процессе проведения опроса, в исследовании приняли участие 93% сотрудников<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/cosmos_hotel.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/zvuk.svg" alt="Звук" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Наталья Редькина</div>
                                        <p class="review-card-subtitle">Руководитель группы развития и обучения персонала ООО «Звук»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>С Happy Job мы сотрудничаем с 2021 года, и скоро нам предстоит запустить очередной опрос вовлеченности. Почему мы предпочли эту платформу? Наглядная и детальная аналитика, возможность сравнить результаты текущего и предыдущего опросов, понятный интерфейс. Также очень ждем, когда появится возможность отправлять приглашения на заполнение опроса не только в почту и по смс, но также в корпоративных мессенджерах.</p><p>Отдельную благодарность хочется выразить Кире Красновой за оперативную обратную связь по всем вопросам и помощь в настройке опросов<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/zvuk.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/metallinvestbank.svg" style="max-height:
                                        18px;height: 18px; max-width: fit-content;" alt="ПАО АКБ Металлинвестбанк" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Мишин И.Н.</div>
                                        <p class="review-card-subtitle">Директор департамента по работе с клиентами ПАО АКБ «Металлинвестбанк»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотим поделиться положительным опытом работы с платформой Happy Job. Опрос проводился в рамках конкретного Департамента и позволил подробно оценить основные показатели вовлеченности. Интерфейс платформы очень прост и при этом визуально приятен, особенно порадовали гибкие настройки аналитики результатов и бенчмарки, что позволяет рассмотреть результаты с разных сторон.</p><p>Отдельно хочется поблагодарить Андрея Соловьюка и Анастасию Жарикову, которая оказывала оперативную профессиональную поддержку и провела очень содержательные встречи по работе с платформой<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/metallinvestbank.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/lifepay__xxh50.jpg" alt="LIFE PAY" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Виктория Белоусова</div>
                                        <p class="review-card-subtitle">HR-директор компании LIFE PAY</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Весной 2022 года мы провели первый опрос вовлеченности в компании. Результат полностью оправдал наши ожидания. Благодаря Happy Job мы смогли увидеть объективную картину по компании: свои сильные и слабые места и точки роста и выработать план мероприятий и реформ. Это незаменимый инструмент, благодаря которому можно значительно улучшить внутренние показатели и общий климат в коллективе.</p><p>Особую благодарность хочется выразить нашему персональному менеджеру - Дмитрию Панферову, а также его коллеге Кире, которая вела компанию в период его отпуска<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/life-pay.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rosselhosbank__xxh50.jpg" style="max-height:
                                        35px;height: 35px; max-width: fit-content;" alt="Россельхозбанк" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">И.П. Гайворонская</div>
                                        <p class="review-card-subtitle">И.о. директора Департамента по работе с персоналом АО «Россельхозбанк»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Компания Happy Job (ООО «ФЕРСТ ТРЕЙНИНГ ГРУПП») проявила себя, как надежный партнер, способный в сжатые сроки реализовать проект для крупной организации.</p><p>Отдельно хочется отметить клиентоориентированность и подход сотрудников, которые очень оперативно отрабатывают все запросы и заявки<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/rosselhosbank.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  horeca">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/activhotels__xxh50.jpg" alt="Группа отелей ActivHotels" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Вострокнутова М.С.</div>
                                        <p class="review-card-subtitle">Директор по персоналу группы отелей ActivHotels</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выбор компании Happy Job превзошел все наши ожидания! Опрос оформлен в игровой форме, вопросы и варианты ответов легко воспринимаются и понятны всем, прохождение занимает не более 10 минут, а интерфейс и интуитивное управление способствуют быстрой ориентации сотрудников, даже если у них нет навыков работы с какими-либо компьютерными программами и приложениями.</p><p>Отдельно хотелось бы отметить сопровождение исследования вовлеченности, предоставленное со стороны Happy Job в лице руководителя проекта, Дмитрия Панферова, начиная с подготовительной стадии и до стадии получения результатов и формирования отчетов<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/activhotels.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/cedo.svg" alt="Cedo" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Кира Киселева</div>
                                        <p class="review-card-subtitle">Ведущий менеджер по персоналу ООО «СеДо хаусхолд продактс»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Команда Happy Job проделала отличную работу. Наш менеджер Дмитрий Панферов всегда был на связи, мы получали ответы регулярно и оперативно. Нам была оказана всесторонняя поддержка, в том числе по механизму проведения исследования.</p><p>Результаты опроса были готовы в течение пары дней, это максимально краткие сроки. Также не может не радовать то, что есть возможность изучить результаты по каждой метрике.</p><p>Кроме того, удобство интерфейса и наполнение опроса оценили и сами сотрудники. Это показатель высокой клиентоориентированности и ориентированности на пользователей<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/cedo.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/mvideo-eldorado.svg" alt="М.ВидеоЭльдорадо" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Юлия Медведкова</div>
                                        <p class="review-card-subtitle">Руководитель направления по оценке и развитию операционного персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>У нас остался очень положительный опыт работы с Happy Job На протяжении всего периода совместной работы компания зарекомендовала себя как ответственный и клиентоориентированный партнер. В М.ВидеоЭльдорадо мы провели 2 коротких опроса в 2022 году, перед тем как запустить полноценное исследование вовлеченности. Визитными карточками Happy Job по праву являются удобная платформа, сильная и понятная методология, клиентоориентированный подход.</p><p>Особое внимание конечно заслуживает платформа: интуитивный интерфейс, гибкие настройки аналитики результатов и доступов для руководителей, также очень приятно, что платформа постоянно улучшается<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/mvideo-eldorado.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/zao-region-lizing__xxh50.jpg" alt="Регион" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Тихомирова Мария Андреевна</div>
                                        <p class="review-card-subtitle">Главный менеджер по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Впечатления исключительно положительные. Платформа очень удобна, проста в использовании, визуально понятна, а прохождение опроса не занимает много времени у респондентов. Особенно удобно наличие личных кабинетов для руководителей с актуальными данными. Также хочу отметить, что сотрудники Happy Job всегда оперативно реагируют на наши пожелания по корректировкам опроса и дают обратную связь.</p><p>Благодарим команду Happy Job за совместную плодотворную работу!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/zao-region-lizing.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/garage-eight__xxh50.jpg" alt="garage eight" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Бакурова Анастасия</div>
                                        <p class="review-card-subtitle">HR Business Partner</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Нам бы хотелось отметить, что Happy Job предоставляет максимально удобный и понятный пользовательский интерфейс как для сотрудников, так и для тех, кто анализирует результаты. Это повышает интерес сотрудников к опросу и конверсию его прохождения.</p><p>Такой индивидуальный подход и высокий уровень клиентской поддержки делают Happy Job одним из лучших провайдеров в области оценки вовлеченности сотрудников в компании. Мы рекомендуем этот сервис для оценки уровня вовлеченности в компании и планируем продолжать сотрудничество с Happy Job в будущем<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/garage-eight.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  media">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/interfaks__xxh50.jpg" alt="Интерфакс" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Борисова Ирина</div>
                                        <p class="review-card-subtitle">Менеджер по работе с персоналом Служба управления персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Искренне благодарю вас за оперативность и гибкость в проведении опроса.</p><p>Хочу высоко отметить уровень вашей поддержки и готовность помочь в решении возникающих задач.</p><p>Уровень клиенториентированности всех сотрудников, с которыми контактировала, очень порадовал и дает уверенность в необходимости дальнейшего сотрудничества<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <div class="review-card-peoples">
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Юлия Маевская</div>
                                    <p class="review-card-subtitle">Директор по персоналу</p>
                                </div>
                                <div class="review-card-infoblock">
                                    <div class="review-card-title">Диана Дорофей</div>
                                    <p class="review-card-subtitle">Директор по корпоративному развитию и управлению персоналом</p>
                                </div>
                            </div>
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rbi-1__xxh50.jpg" alt="RBI" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title"><a class="review-card-plus">+</a>Юлия Маевская</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность компании Happy Job и лично Веронике Дагаевой и Анастасии Любятинской за профессиональную поддержку в рамках подготовки, проведения самого опроса и подведения результатов опроса вовлеченности. Для нас было важно провести максимально плавный переход от одного подрядчика к другому и это удалось.</p><p>Особое внимание конечно заслуживает платформа: интуитивный интерфейс, понятная методология, гибкие настройки аналитики результатов и доступов для руководителей<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/RBI.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/fokus-m__xxh50.jpg" alt="Фокус-M" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Борисова Ксения Дмитриевна</div>
                                        <p class="review-card-subtitle">Ассистент руководителей</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>На платформе Happy Job можно под разными углами ознакомиться с результатами опроса – есть разделение по индексам, по подразделениям и по степеням вовлеченности/лояльности респондентов. Большим плюсом является наличие разделов «Предложения сотрудников» и «Проблемы и рекомендации». В первом можно ознакомиться с пожеланиями и комментариями наших сотрудников, во втором перечислены рекомендации по улучшению для каждой выявленной проблемы. Всё это в комплексе помогает определить зоны роста, выработать план работы и запустить необходимые изменения<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/r4s-group__xxh50.jpg" alt="R4S" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Зейбель Антон</div>
                                        <p class="review-card-subtitle">Директор департамента управления персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем огромную благодарность компании Happy Job за проделанную работу. Мы впервые обратились за подобной услугой и точно не ошиблись, обратившись в компанию Happy Job Результат оправдал ожидания!</p><p>Отдельное спасибо специалистам компании за своевременную обратную связь и гибкостьи лояльность в условиях изменения ситуации<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/R4S.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  nofood">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/klyuchavto__xxh50.jpg" style="max-height:
                                        35px;height: 35px; max-width: fit-content;" alt="КЛЮЧАВТО" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Оксана Удалова</div>
                                        <p class="review-card-subtitle">Руководитель проектов обучения и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Выражаем благодарность Компании Happy Job и лично Комаровой Юлии за высококачественную работу.</p><p>В 2023г. мы впервые проводили исследование вовлеченности среди сотрудников Компании «КЛЮЧАВТО Автомобили с пробегом» и выбрали для этого платформу Happy Job. Нам понравилось наличие своевременной обратной связи, оперативность решения вопросов и глубокий анализ проводимого исследования, удобный и понятный интерфейс результатов исследования в личном кабинете руководителей.</p><p>Спасибо за профессионально проделанную работу!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/klyuchavto.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/bet-boom.svg" alt="BetBoom" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Татьяна Леонтьева</div>
                                        <p class="review-card-subtitle">Руководитель направления<br>по&nbsp;развитию HR-бренда BetBoom</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы остались довольны сотрудничеством с компанией Happy Job, и можем рекомендовать вас как опытного провайдера, специализирующегося на проведении глубинных исследований. С помощью вашей платформы нам удалось решить сразу несколько важных задач: замерить ключевые метрики вовлеченности, лояльности, удовлетворенности работой сотрудников и eNPS, подтвердить количественным исследованием выявленные Ценности компании и разработать нашу собственную модель EVP для последующего анализа и разработки сильного HR-бренда BetBoom.</p><p>Качественная, автоматизированная и нативная аналитика творит чудеса, а вы как волшебники легко и непринужденно вовлекаете нас в мир метрики каждый раз открываете много нового и неизведанного<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/bet-boom.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/gri.svg" alt="GRI" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Оксана Овчинникова</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хочу поблагодарить вашу компанию за разработку такого удобного сервиса для оценки уровня лояльности и вовлечённости. А также выразить персональную благодарность Юлии Комаровой, которая непрерывно оказывала поддержку и помощь в вопросах организации и проведении опроса.</p><p>Сервис Happy Job помог нам оперативно (и играючи!) замерить состояние каждого сотрудника, оценить уровень менеджмента и обнаружить наши точки роста.</p><p>Планируем проводить такой опрос каждые полгода и держать руку на пульсе. Желаем, чтобы каждая компания познакомилась с вашим продуктом и сделала свою компанию ещё лучше!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/beri-zaryad.svg" alt="Бери заряд" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Сапрыкина Ирина</div>
                                        <p class="review-card-subtitle">Менеджер по внутренним коммуникациям и адаптации персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Happy Job - самая удобная методика для проведения опроса вовлеченности из всех, с которыми я работала в разных компаниях. Ее преимущества в приятном и интуитивно понятном визуале и формулировках, в удобной расшифровке каждой метрики и субметрики. С таким предоставлением результатов работать намного легче.</p><p>Кроме того, была постоянная и оперативная поддержка от менеджера по любым вопросам.</p><p>Спасибо вам большое!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/docrobot.svg" alt="Docrobot" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анастасия Лунина</div>
                                        <p class="review-card-subtitle">Руководитель департамента по работе с персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В этом году наша компания решила повторить опрос по оценке качества внутреннего сервиса. По результатам в сравнении c первым опросом в 2021 году охват увеличился почти в 2 раза! Это показывает лояльное отношение наших сотрудников к компании Happy Job Благодаря этому мы получили развернутую обратную связь от сотрудников по всем процессам нашей компании.</p><p>Хотим выразить благодарность нашему менеджеру Комаровой Юлии, которая оперативно помогала, отвечала на вопросы и прислушивалась к нашим пожеланиям.</p><p>Мы рады сотрудничеству и конечно продолжаем сотрудничество c компанией Happy Job<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/docrobot.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/globus__xxh50.jpg" alt="Globus" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ирина Никонорова</div>
                                        <p class="review-card-subtitle">Руководитель отдела клиентского сервиса, обучения и развития персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Удобная интерактивная платформа, понятные вопросы, визуализация, внимание к каждой детали на всём пути проведения исследования и, конечно же, команда профессионалов — бесспорные преимущества к сотрудничеству с Happy Job.</p><p>Особая благодарность менеджеру по исследованиям Веронике Дагаевой за оперативность, отзывчивость и профессионализм.</p><p>С нетерпением ждем следующей волны! :)<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/globus.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/marks-company-group__xxh50.jpg" alt="Marks Group" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Подымов Кирилл</div>
                                        <p class="review-card-subtitle">Руководитель группы обучения и развития персонала «MARKS Group»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотим сказать большое спасибо сервису Happy Job за отличную работу! Специалисты компании очень точечно и с полной ориентацией на клиента выполняют свою работу, не оставляя и шанса чего-то не понять.</p><p>Благодаря ним нам удалось собрать более 70% анкет, тем самым под микроскопом взглянуть на компанию со стороны. Решение, которое они предоставляют клиентам, позволяет погрузиться на самую глубину аналитики и выстроить взаимосвязи между метриками, что, в свою очередь, даёт возможность качественно оценить и интерпретировать результаты и, главное, выстроить стратегию по дальнейшим действиям<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/marks-group-new.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/agroimpex.svg" alt="Agroimpex" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Рзаева Ирина</div>
                                        <p class="review-card-subtitle">Директор по персоналу ООО «АГРОИМПЭКС»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Огромное спасибо компании платформы Happy Job! Среди похожих инструментов на рынке это самая удобная платформа для замера уровня удовлетворенности и вовлеченности и персонала. Понятный и простой опросник, удобная система обработки данных и выгрузки результатов. И что очень порадовало так это соотношение цены и качества. На протяжении всего опроса и после него заботливо курирует менеджер проекта)<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  company">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/bergauf.svg" alt="Bergauf" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ткачук Марина Николаевна</div>
                                        <p class="review-card-subtitle">Ведущий менеджер по обучению и развитию персонала  ООО «Бергауф Строительные Технологии»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>На мой взгляд опрос прошел в штатном режиме, без серьезных накладок. Все наши запросы обрабатывались достаточно быстро и эффективно. Спасибо за хорошую работу<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/solva.svg" alt="Solva" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Oxana Dovgaleva</div>
                                        <p class="review-card-subtitle">Head of Internal Communications &amp; Motivation</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Как пользователь платформы для проведения опросов сотрудников, мне бы хотелось поделиться своим положительным опытом. Этот инструмент действительно выделяется среди аналогов благодаря своей красочности, наглядности, функциональности и удобству использования<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/solva.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  eCommerce">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/prodex__xxh50.jpg" alt="Prodex" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Поспелова Е.С.</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Компания PRODEX выражает благодарность всей команде компании Happy Job за высокое качество подготовки и сопровождения исследования вовлеченности. Клиентоориентированный подход, профессиональная проработка запросов и скорость ответов на вопросы проектным менеджером по исследованием Екатериной Чапкиной отдельно заслуживают самой высокой оценки!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/prodex.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ntechlab__xxh50.jpg" alt="NtechLab" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Засорина Алина</div>
                                        <p class="review-card-subtitle">HR BP</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Хотим выразить благодарность коллегам из Happy Job за отличную и очень качественную работу. С самых первых этапов нас консультировали по всем возникающим вопросам, взаимодействие прекрасно организовано, любой запрос обрабатывался максимально оперативно. Сама платформа удобная, понравился геймифицированный формат, а также то, что на прохождение опроса требуется совсем немного времени. Отдельно хотелось бы отметить презентацию результатов: все очень наглядно, много аналитики, отчеты можно настраивать так, как необходимо. Также платформа автоматически дает ряд возможных рекомендаций по приоритетным вопросам - это тоже удобно. Мы остались довольны сотрудничеством с Happy Job, без сомнения готовы рекомендовать этот сервис тем, кто задумывается о проведении исследования вовлеченности в своей компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/nefteTransServis__xxh50.jpg" alt="НефтеТрансСервис" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Надежда Сафонова</div>
                                        <p class="review-card-subtitle">Менеджер отдела подбора, развития и оценки персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Мы запускали масштабный проект в сжатые сроки - благодарим коллег за оперативную и четко выстроенную работу при настройке платформы и согласовании договора. Отдельное спасибо за доработку исследования, включение вопросов по оценке корпоративной культуры и ценностей и за разработку дополнительного отчета.</p><p>Хочется поблагодарить команду Happy Job за оперативность, клиентоориентированность и профессионализм. Благодарим Анастасию Любятинскую, ведущего специалиста по исследованиям, за подробную презентацию преимуществ платформы, гибкость на этапе согласования условий сотрудничества. Спасибо Юлии Комаровой, менеджеру по исследованиям, которая сопровождала нас при проведении опроса, оперативно и профессионально отвечала на все вопросы и просьбы. Работать с Happy Job – одно удовольствие!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/nefteTransServis.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/novard.svg" alt="ГК Новард" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Влада Рябец</div>
                                        <p class="review-card-subtitle">Руководитель отдела компенсаций и льгот</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В 2022 году приняли решение перейти на платформу Happy Job, и провели два ежегодных опроса на этой платформе.</p><p>Сотрудники Группы положительно оценили простоту, удобство, оформление опроса. Руководители положительно оценили быстроту  получения доступа к результатам и визуализацию результатов по подразделению в личном кабинете.</p><p>Как куратор этого проекта на уровне Группы, отмечаю высокий уровень качества взаимодействия сотрудников Happy Job с заказчиком, быстроту решения вопросов, креативное оформление опроса, продуманную коммуникацию с опрашиваемыми со стороны Happy Job. Результатами сотрудничества с Happy Job довольны<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/c3solutions.svg" alt="C3 Solutions" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Олеся Ващенко</div>
                                        <p class="review-card-subtitle">Директор департамента по работе с персоналом</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В этом году мы впервые проводили опрос вовлеченности с внешним провайдером. Вызовом для нас было проведение опроса на нескольких площадках, в том числе на производстве.</p><p>За что мы благодарим команду Happy Job? За безупречный сервис, когда платформа подстраивалась под наши запросы «на ходу», за внимательность к деталям и экспертизу - когда нужно было провести опрос в гибридном формате: онлайн и на производстве, и за доверительные отношения, которые сложились с командой Happy Job еще до старта проекта – к менеджерам можно обратиться по любому вопросу, они точно найдут решение<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  fmcg">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/kukhnya-bez-granitsjpg__xxh50.jpg" alt="Кухня Без Границ" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Н.С. Тимошенко</div>
                                        <p class="review-card-subtitle">Директор по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>В этом году впервые сотрудничали с командой и остались очень довольны.</p><p>Максимально дружественный и яркий интерфейс, привлекательные коммуникационные рассылки, легкая процедура опроса, оперативность в получении аналитики, глубочайший и детальный анализ ответов, удобные форматы отчетов и, конечно, гарантированная анонимность для сотрудников - все на высшем уровне.</p><p>Коллеги и менеджмент компании высоко оценили и подготовку, и опрос, и полученные материалы.</p><p>И отдельная благодарность команде за помощь и поддержку на всех этапах!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/kukhnya-bez-granits.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  food">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/vkusvill__xxh50.jpg" alt="ВкусВилл" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анастасия Махарадзе</div>
                                        <p class="review-card-subtitle">Управляющий по коммуникациям ВкусВилл</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Во ВкусВилле в этом году прошел второй опрос вовлеченности.</p><p>Мы привыкли работать кросс-командами, гибко двигаться в сторону намеченных целей, меняя инструменты и тестируя новые подходы. В таком подходе готов двигаться не каждый партнер.</p><p>С Happy Job на время проекта у нас полная синергия, партнер нас слышит, предлагает решения уже «по ходу пьесы».</p><p>В этом году к привычным каналам мы добавили рассылку через бот в телеграме и это также позитивно сказалось на результате<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  logist">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/fm-logistic.svg" alt="FM Logistic" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Анна Чурвина</div>
                                        <p class="review-card-subtitle">Менеджер по компенсациям и льготам</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Платформа очень удобна в использовании, многие вещи находятся интуитивно. Спасибо Анне Шин за помощь в запуске и полное сопровождение на всех этапах! Мы довольны)<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  bank">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/uralsib.svg" alt="Уралсиб" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Татьяна Мартовицкая</div>
                                        <p class="review-card-subtitle">Директор по управлению персоналом ПАО «БАНК УРАЛСИБ»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Стоит отметить, что к каждому новому проекту коллеги из Happy Job подходят с высоким уровнем внимания, сервиса и оперативности. Для нас особенно ценны гибкость и клиентоориентированность компании, а также растущие возможности качественной аналитики системы, понятные и простые алгоритмы работы с метриками.</p><p>Благодарим за взаимное сотрудничество!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/uralsib.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  develop">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/glorax.svg" alt="Glorax" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Аршинская Надежда</div>
                                        <p class="review-card-subtitle">Руководитель HR-лаборатории развития и коммуникаций GloraX</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарим команду Happy Job за проведение опроса лояльности и вовлеченности для GloraXTeam!</p><p>Для нас это был первый опыт проведения опроса на площадке Happy Job, и результаты превзошли все наши ожидания!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/glorax.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  service">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/ctp-aero__xxh50.jpg" alt="Центр Технических Проектов" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Ирина Аншакова</div>
                                        <p class="review-card-subtitle">Ведущий менеджер по развитию персонала</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарим команду Happy Job за отличную организацию опроса лояльности и вовлеченности в компании «Центр Технических Проектов». Happy Job достаточно удобная платформа с понятной методологией исследования. Отдельно хотелось бы отметить гибкие настройки аналитики результатов. Отчеты выгружаются оперативно, все метрики можно проанализировать по разным параметрам (пол, возраст, стаж работы в компании и т.д.). Опрос не занимает много времени, вопросы понятны сотрудникам. Благодаря Happy Job каждый сотрудник компании может оставить свои предложения по изменениям в компании. Мы обязательно проработаем их, а результаты этой работы можно оценить в следующем опросе). Наш менеджер, Анна Шин была максимально включена в проект, помогала на всех этапах исследования, гибко подходила к нашим запросам<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  it">
                            <article class="review-card ">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/petroplus-new__xxh50.jpg" alt="Передовые Платежные Решения" loading="lazy">
                                        <b class="review-card-marker">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="#000000" d="m23 12l-2.4-2.8l.3-3.7l-3.6-.8l-1.9-3.2L12 3L8.6 1.5L6.7 4.7l-3.6.8l.3 3.7L1 12l2.4 2.8l-.3 3.7l3.6.8l1.9 3.2L12 21l3.4 1.5l1.9-3.2l3.6-.8l-.3-3.7L23 12m-4.3 4.9l-2.7.6l-1.4 2.4l-2.6-1.1l-2.6 1.1L8 17.5l-2.7-.6l.2-2.8L3.7 12l1.8-2.1l-.2-2.8L8 6.5l1.4-2.4L12 5.2l2.6-1.1L16 6.5l2.7.6l-.2 2.8l1.8 2.1l-1.8 2.1l.2 2.8m-2.1-9.3L18 9l-8 8l-4-4l1.4-1.4l2.6 2.6l6.6-6.6Z">
                                                </path>
                                            </svg>
                                        </b>
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Нурай Абдуллаева</div>
                                        <p class="review-card-subtitle">Менеджер по персоналу</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Могу отметить высокий уровень клиентоориентированности нашего менеджера – совместная работа была максимально комфортной и приносила только положительные эмоции. Помимо этого, Вероника всегда старалась предложить нам подходящий вариант решения проблемы.</p><p>Больше всего при работе с Happy Job мне нравится визуал и наполнение платформы для проведения исследований, взаимодействие с менеджерами и руководителями проектов. Из зон для развития могу выделить доработку отчетов для большего удобства пользователя.</p><p>Буду рада продолжить совместную работу и дальше проводить исследования на базе Happy Job для улучшения процессов в компании<span>»</span>.</p></q>
                                        <div class="review-card-buttons">
                                            <a href="/img/p/clients/clients-pdf/petroplus.pdf" target="_blank" class="review-card-link">
                                                <b class="review-card-icon icon-letter"></b>
                                                Письмо на бланке клиента
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="reviews-item  farm">
                            <article class="review-card unactive">
                                <header class="review-card-header">
                                    <figure class="review-card-logo">
                                        <img src="/img/p/clients/clients-logo/rigla.svg" alt="Ригла" loading="lazy">
                                    </figure>
                                    <div class="review-card-info">
                                        <div class="review-card-title">Никитинская Наталья</div>
                                        <p class="review-card-subtitle">Директор департамента Учебный центр «Ригла»</p>
                                    </div>
                                </header>
                                <div class="review-card-body">
                                    <div class="review-card-content">
                                        <q class="review-card-text"><p><span>«</span>Благодарим HJ за прекрасный инструмент для организации масштабного проекта по ежегодной оценке вовлеченности.</p><p>Отличный визуал, легкость прохождения, а в качестве приятного бонуса – готовые отчеты в разных разрезах.</p><p>Также признательны за персонализированный подход, гибкость и чуткость к запросам компании.</p><p>Спасибо!<span>»</span></p></q>
                                        <div class="review-card-buttons">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
            </section>
            <footer class="reviews-footer text-center">
                <a class="load-items">Загрузить ещё</a>
            </footer>
            <script src="/jquery/fancybox/fancybox.umd.js"></script>
        </div>
    </div>

</div>

<script type="text/javascript">

    $(function ()
    {

        $('a[data-filter]').each(function (index, element)
        {
            let category = $(this).attr('data-filter');
            let count = 0;
            $(category).each(function (index, element)
            {
                if ($(this).hasClass("reviews-item"))
                {
                    count++;
                }
            })
            let template = $(this).text() + ' (' + count + ')';
            $(this).text(template);
        });

        $('[data-filter="*"]').text('Все (' + $(".reviews-item").length + ')');
    })

    const reviewsStep = 16
    function showTextReviews(reviewsStep)
    {
        let container = $('.text-reviews')
        let visNum = container.find('.visible').length
        if (visNum === 0)
        {
            $('.text-reviews').find('.reviews-item:nth-child(-n+' + reviewsStep + ')').addClass('visible')
        } else
        {
            let visElems = container.find('.visible').length + reviewsStep
            let allElems = container.find('.reviews-item').length
            container.find('.reviews-item:nth-child(-n+' + visElems + ')').addClass('visible')
            if (visElems >= allElems)
            {
                $('.load-items').hide()
            }
        }
    }

    showTextReviews(reviewsStep)

    $('.load-items').on('click', function ()
    {
        showTextReviews(reviewsStep)
    })
    $('.review-card-plus').hover(
        function ()
        {
            $(this).closest('.reviews-item').find('.review-card-peoples').addClass("is-active").attr('hidden', false);
        }, function ()
        {
            $(this).closest('.reviews-item').find('.review-card-peoples').removeClass("is-active").attr('hidden', true);
        }
    )

    $(window).on('load', function ()
    {


        var $container = $('.clients-container');

        $('.clients-filter a').click(function ()
        {
            $('.load-items').show()
            $('.clients-filter .current').removeClass('current');
            $(this).addClass('current');

            /*
            let top = $('#reviews').offset().top
            top = top - 150

            $('html,body').animate({
                scrollTop: top+'px'
            },500,"linear");
            */

            var selector = $(this).attr('data-filter');

            if (selector === '*')
            {
                console.log('*')
                $('.reviews, .reviews-item').attr('hidden', false).fadeIn()
                $('.text-reviews').find('.reviews-item').removeAttr("style")
                $('.load-items').show().trigger('click')
            } else
            {
                $('.load-items').hide()
                $('.reviews-item').removeClass('visible')
                $('.reviews-item:not(' + selector + ')').fadeOut().attr('hidden', true);
                $(selector).fadeIn().attr('hidden', false);


                $(document).find('.reviews-body').each(function (index, value)
                {
                    $(this).closest('.reviews').attr('hidden', false)
                    var allElems = $(this).find('.reviews-item')
                    var allHiddenElems = $(this).find('.reviews-item:hidden')
                    if (allElems.length <= allHiddenElems.length)
                    {
                        $(this).closest('.reviews').attr('hidden', true)
                    } else
                    {
                        $(this).closest('.reviews').attr('hidden', false)
                    }
                });
            }
            return false;
        });
        var currentHash = (window.location.hash).replace('#', '');
        if (currentHash.length)
        {
            $('.clients-filter a.' + currentHash).click();
        }

        let currentCategory = localStorage.getItem('currentCategory')
        if(currentCategory !== null){
            currentCategory = currentCategory.split(' ');
            $.each(currentCategory,function(index,value){
                console.log(value);
                $('.clients-filter a.' + currentCategory).click();
                console.log('Кликнули');
            });
            console.log('LOCAL ' + currentCategory);
        }

    });
</script>

<!-- endrender clients/reviews/02-content-->

<!-- render common/footer-->
<style>
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
    .form-label:not([title='Комментарий:']):after {
        content: '*';
        color: red;
        transform: translateY(-3px);
    }
    .button {
        display: inline-flex;
        font-size: clamp(
                0.8rem,
                0.7142857142857143rem + 0.4285714285714286vw,
                1.1rem
        );
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.6rem 1rem 0.7rem;
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
    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child,
    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer
    .privacy-btn
    > a[data-href='/privacy-policy/']:first-child:before {
        content: '';
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

    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    body > footer {
        background-color: #fff;
        padding-top: 0;
    }
    .footer ul {
        margin: 0;
        padding: 0;
    }
    .footer ul li {
        list-style-type: none;
    }
    .footer-main {
        padding: clamp(
                1.25rem,
                0.7142857142857143rem + 2.6785714285714284vw,
                3.125rem
        )
        0;
        background: #d2d7db;
        color: #171717;
        border-top-color: rgba(241, 241, 241, 0.8);
    }

    .footer-main a {
        color: var(--c-text);
        text-decoration: none;
    }
    .footer-main a:hover {
        text-decoration: underline;
    }
    .footer-row {
        display: flex;
        margin: 0 -2rem;
    }
    .footer-col {
        flex: 1;
        padding: 0 2rem;
    }

    .footer-col:nth-child(1) {
        max-width: 200px;
    }
    .footer-col:nth-child(1) li {
        margin: 0 0 21px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }
    .footer-col:nth-child(1) a {
        font-size: 15px;
    }

    .footer-col span {
        font-size: 14px;
        display: block;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }
    .footer-col .menu ul {
        padding: 1rem 0 0 0.7rem;
    }
    .footer-col .menu > li {
        margin-bottom: 21px;
    }
    .footer-col .menu ul li {
        position: relative;
        font-weight: 400;
        line-height: 1;
        margin: 0 0 12px;
    }
    .footer-col .menu ul li:before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--octicon' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 16 16'%3E%3Cpath fill='%2361c13a' d='m6.427 4.427l3.396 3.396a.25.25 0 0 1 0 .354l-3.396 3.396A.25.25 0 0 1 6 11.396V4.604a.25.25 0 0 1 .427-.177z'%3E%3C/path%3E%3C/svg%3E");
        top: -2px;
        left: -16px;
        position: absolute;
        width: 12px;
        height: 16px;
        background-size: cover;
    }
    .footer-col .menu a {
        font-size: 14px;
    }

    .address {
        position: relative;
        padding-left: 30px;
        margin-top: 21px;
        font-style: normal;
        line-height: 20px;
    }

    .address:before {
        content: '';
        display: block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z'%3E%3C/path%3E%3C/svg%3E");
        top: 3px;
        left: 0;
        width: 8px;
        height: 14px;
        position: absolute;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .address p {
        font-size: 14px;
    }

    .address strong {
        padding-right: 5px;
        display: inline-block;
        line-height: 1.1;
        width: 100%;
        padding-top: 3px;
    }

    .address a[href*='tel'],
    .address a[href*='mailto'] {
        color: var(--carnation);
        font-weight: bold;
        display: block;
    }

    .footer-link {
        color: #606367;
        line-height: 1;
        font-size: 14px;
        display: inline-block;
        font-weight: 700;
        list-style: none;
        text-align: center;
        padding: 39px 0px;
    }
    @media (max-width: 992px) {
        .footer-link {
            margin: 0 20px 7px;
        }
    }
    @media (max-width: 576px) {
        .footer-link {
            padding: 20px 0px;
            width: 50%;
            margin: 0 auto;
        }
        .footer-link br {
            display: none;
        }
    }

    .footer-link a {
        display: block;
        color: #606367;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s;
        cursor: default;
    }
    .footer-link a[href] {
        cursor: pointer;
    }
    @media (max-width: 576px) {
        .footer-link a {
            display: flex;
            flex-direction: column;
            color: #606367;
            font-size: 14px;
            padding: 0 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }
    }

    .footer-link img {
        height: auto;
        margin: 0 auto 11px;
        max-width: 80px;
    }
    .footer-link a[href]:hover {
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
    }
    .copyright {
        padding: 15px 0;
        position: relative;
        text-align: center;
        display: flex;
        align-items: center;
        float: left;
    }
    .copyright a img {
        width: 120px;
        height: auto;
        margin-right: 19px;
    }
    .copyright p {
        display: inline-block;
        position: relative;
        top: 1px;
        margin: 0;
    }
    .copyright__policy {
        color: var(--c-text);
        margin: 0 0 0 10px;
        text-decoration: none;
        -moz-text-decoration-color: rgb(162, 162, 162);
        -webkit-text-decoration-color: rgb(162, 162, 162);
        text-decoration-color: rgb(162, 162, 162);
        transition: all 0.3s;
    }
    .sitemap {
        text-align: center;
        padding: 15px 0;
        float: right;
    }
    .social {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    @media (max-width: 576px) {
        .social {
            margin-bottom: 4rem;
        }
    }
    .social a {
        display: inline-block;
        padding-right: 13px;
        padding-left: 13px;
        padding-top: 1px;
    }
    .social a i {
        display: inline-block;
        margin: 0px 0px 5px 0;
        padding: 1px 0 0;
        border-radius: 50%;
        overflow: visible;
        box-shadow: 0 0px 1px 0 rgb(0 0 0 / 30%);
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        background: #fff;
        border-radius: 100%;
        display: block;
        height: 26px;
        line-height: 26px;
        width: 26px;
        text-align: center;
        color: #333;
        text-decoration: none;
        left: 0;
    }
    .social a:hover i {
        background-color: var(--c-link);
        color: #ffffff;
    }
    .fa-vk:before {
        content: '\f189';
    }
    .fa-telegram:before {
        content: '\f2c6';
    }

    @media (max-width: 992px) {
        .copyright {
            flex-direction: column;
            float: none;
        }
    }

    @media (max-width: 576px) {
        .footer-row {
            flex-direction: column;
        }
    }
    .f-solutions li{
        text-transform: none;
    }

    @media (max-width: 1024px) {
        .footer-row {
            margin: 0 -1rem;
        }
        .footer-col {
            padding: 0 1rem;
        }
    }

</style>


<style>
    .videos {
        box-shadow: inset -2px 4px 17px rgb(0 0 0 / 10%);
    }

    .videos .splide {
        margin-bottom: -2rem;
    }

    .container.mainc ~ .videos {
        margin-top: 3rem;
    }

    .videos-link {
        position: relative;
        display: block;
        padding: 0
        clamp(0.875rem, 0.7678571428571428rem + 0.5357142857142857vw, 1.25rem);
        cursor: pointer;
    }

    .videos-block {
        display: block;
        margin: 0 auto;
        text-align: center;
    }

    .videos-block:after {
        content: "";
        position: absolute;
        height: 227px;
        opacity: 0.7;
        left: 1rem;
        right: 1rem;
        margin: auto;
        transform: scale(1, 0.1);
        z-index: 0;
        top: 1rem;
        background: -moz-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* FF3.6-15 */
        background: -webkit-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(
                ellipse at center,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }
    .videos .splide__track {
        padding: 0.5rem 0 0;
    }

    .splide__pagination__page {
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .splide__pagination__page.is-active {
        background: #47657d;
    }

    .videos-image-wrapper {
        position: relative;
        height: 130px;
        z-index: 2;
        display: block;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transform: scale(1, 1);
        transition: transform 0.3s;
        background-color: #f4f5f7;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23666666' d='M12 17.5q1.875 0 3.188-1.312Q16.5 14.875 16.5 13q0-1.875-1.312-3.188Q13.875 8.5 12 8.5q-1.875 0-3.188 1.312Q7.5 11.125 7.5 13q0 1.875 1.312 3.188Q10.125 17.5 12 17.5ZM4 21q-.825 0-1.412-.587Q2 19.825 2 19V7q0-.825.588-1.412Q3.175 5 4 5h3.15L9 3h6l1.85 2H20q.825 0 1.413.588Q22 6.175 22 7v12q0 .825-.587 1.413Q20.825 21 20 21Z'%3E%3C/path%3E%3C/svg%3E");
        background-position: center center;
        background-repeat: no-repeat;
    }

    .videos-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .videos-link:hover .videos-image-wrapper {
        transform: scale(1.05, 1.05);
    }

    .videos-play-button {
        position: absolute;
        inset: 0;
        z-index: 3;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        opacity: 0;
    }

    .play-button {
        width: 55px;
        height: 55px;
    }

    .videos-caption {
        position: absolute;
        top: 100%;
        left: 1rem;
        right: 1rem;
        margin: 0;
        padding: clamp(
                0.875rem,
                0.7678571428571428rem + 0.5357142857142857vw,
                1.25rem
        )
        0;
    }

    .videos-heading {
        margin: 0;
        font-weight: normal;
        font-size: 14px;
        letter-spacing: -0.2px;
        line-height: 1.1;
        color: var(--c-text);
    }

    .play-circle {
        width: 100%;
        height: 100%;
        fill: #243642;
        opacity: 0.18;
    }

    .play-circle.white {
        filter: invert(100%);
    }

    .play-triangle {
        width: 100%;
        height: 100%;
        fill: #243642;
        max-width: 50px;
        max-height: 50px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .play-triangle.white {
        filter: invert(100%);
    }

    .splide__arrow {
        display: block;
        width: 54px;
        height: 50px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        transition: background-image 0.3s, left 0.3s, right 0.3s;
    }
    .splide__arrow svg {
        display: none;
    }

    .splide__arrow--next {
        background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .splide__arrow--prev {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
    }

    @media (min-width: 1024px) {
        .splide__arrow:disabled {
            display: none;
        }
    }

    .section-footer .slider-footer-arrow {
        display: none;
    }

    @media (max-width: 1200px) {
        .videos-block:after {
            top: 1rem;
        }
    }

    @media (max-width: 1024px) {
        .videos .splide__track {
            padding: 0.5rem 0 3rem;
        }
        .videos section.splide {
            /* max-width: 600px; */
            margin: 0 auto;
        }

        .videos-block:after {
            top: 1rem;
        }

        .videos .splide__pagination {
            bottom: 0rem;
        }

        .videos .splide__arrow {
            top: initial;
            bottom: -2rem;
        }
    }


    @media (max-width: 640px) {
        .videos-block:after {
            top: 1.2rem;
        }
        .videos .splide__arrow {
            bottom: -1.4rem;
        }
        .splide__pagination__page {
            width: 12px;
            height: 12px;
            margin: 0 5px;
        }
    }

    @media (max-width: 576px) {
        .splide__arrow {
            width: 2rem;
            height: 2rem;
        }
        .videos section.splide {
            max-width: 100%;
            margin: 0 auto;
        }
        .videos-link {
            padding: 0;
        }
        .videos-image-wrapper {
            height: 170px;
            max-height: 170px;
        }
    }
</style>

<?php echo $this->render("/layouts/_parts/_webinars"); ?>

<script>
    // var resDisplay = $(window).width();
    // var elemLen = $(".videos-item").length;
    // videoSlider(resDisplay);
    // $(document).on("click", ".videos-dot", function () {
    //   clickOnDot($(this));
    // });

    // function showControls(numDots, numElems) {
    //   $(".videos-dots").find(".videos-dot").remove();
    //   for (var n = 1; n <= numDots; n++) {
    //     $(".videos-dots").append(
    //       '<a class="videos-dot" data-start="' +
    //         (n * numElems - (numElems - 1)) +
    //         '" data-end="' +
    //         n * numElems +
    //         '" >'
    //     );
    //   }
    //   $(".videos-dot:first-child").addClass("is-active");
    //   $(".videos-arrow a").show();
    // }

    // function hideControls(numElems) {
    //   $(".videos-dots").find(".videos-dot").remove();
    //   $(".videos-arrow a").hide();
    // }

    // function videoReorder(numElems) {
    //   $(".videos-item").removeClass("is-active");
    //   $(".videos-item:lt(" + numElems + ")").addClass("is-active");
    //   $("#videos-list").attr("data-items", numElems);
    //   var numDots = Math.floor(elemLen / numElems);
    //   if (numDots > 1) {
    //     showControls(numDots, numElems);
    //   } else {
    //     hideControls();
    //   }
    // }

    // function videoSlider(resDisplay) {
    //   if (resDisplay >= 1025) {
    //     videoReorder(8);
    //   }
    //   if (resDisplay < 1025 && resDisplay >= 769) {
    //     videoReorder(6);
    //   }
    //   if (resDisplay < 769 && resDisplay >= 577) {
    //     videoReorder(4);
    //   }
    //   if (resDisplay < 577) {
    //     videoReorder(2);
    //   }
    // }

    // function goNext() {
    //   var slideLen = $(document).find("#videos-list").attr("data-items");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var first = parseInt($(document).find(".temp").last().index()) + 2;
    //   var last;
    //   if (first >= elemLen) {
    //     first = 0;
    //     last = parseInt(first) + parseInt(slideLen);
    //     $(".videos-dot.is-active").removeClass("is-active");
    //     $(".videos-dot:first-child").first().addClass("is-active");
    //   } else {
    //     last = parseInt(first) + parseInt(slideLen) - 1;
    //     $(".videos-dot.is-active")
    //       .removeClass("is-active")
    //       .next()
    //       .addClass("is-active");
    //   }
    //   $(
    //     ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //   ).each(function (i) {
    //     var box = $(this);
    //     setTimeout(function () {
    //       box.addClass("is-active");
    //     }, 50 * i);
    //   });
    //   $(".videos-item").removeClass("temp");
    // }

    // function goPrev() {
    //   var elemLen = $(".videos-item").length;
    //   var slideLen = $(document).find("#videos-list").attr("data-items");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var last = parseInt($(document).find(".temp").first().index());
    //   var first = parseInt(last) - parseInt(slideLen) + 1;
    //   if (first <= 0) {
    //     last = elemLen;
    //     first = parseInt(last) - parseInt(slideLen) + 1;
    //     $(
    //       ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //     ).each(function (i) {
    //       var box = $(this);
    //       setTimeout(function () {
    //         box.addClass("is-active");
    //       }, 50 * i);
    //     });
    //     $(".videos-item").removeClass("temp");
    //     $(".videos-dot.is-active").removeClass("is-active");
    //     $(".videos-dot:last-child").addClass("is-active");
    //   } else {
    //     $(
    //       ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //     ).each(function (i) {
    //       var box = $(this);
    //       setTimeout(function () {
    //         box.addClass("is-active");
    //       }, 50 * i);
    //     });
    //     $(".videos-item").removeClass("temp");
    //     $(".videos-dot.is-active")
    //       .removeClass("is-active")
    //       .prev()
    //       .addClass("is-active");
    //   }
    // }

    // function clickOnDot(dot) {
    //   $(".videos-dot").removeClass("is-active");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var first = parseInt(dot.attr("data-start"));
    //   var last = parseInt(dot.attr("data-end"));
    //   console.log(first + "__" + last);
    //   $(
    //     ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //   ).each(function (i) {
    //     var box = $(this);
    //     setTimeout(function () {
    //       box.addClass("is-active");
    //     }, 50 * i);
    //   });
    //   dot.addClass("is-active");
    // }

    // $(window).on("resize", function () {
    //   resDisplay = $(window).width();
    //   // console.log(resDisplay);
    //   videoSlider(resDisplay);
    // });
    // $(".videos-prev").on("click", function () {
    //   goPrev();
    // });
    // $(".videos-next").on("click", function () {
    //   goNext();
    // });

</script>


<style>
    .testimonials-slider.testimonials-slider--large {
        height: 350px;
    }

    .testimonials-slider--large .testimonials-item {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .testimonials-slider--large .testimonials-item::after {
        content: "";
        height: 280px;
        width: 1px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--c-border);
    }

    .testimonials-wrapper {
        display: flex;
        align-items: center;
    }

    .testimonials-wrapper .slick-arrow {
        flex: 0;
        top: -110px;
    }

    .testimonials-wrapper .slick-dots {
        position: relative;
        padding: 0 0 0;
    }

    .testimonials-slider {
        position: relative;
        overflow: hidden;
        flex: 1;
        padding-bottom: 1rem;
    }

    @media (min-width: 992px) {
        .testimonials-slider {
            max-height: 350px;
        }
    }


    .testimonials-item {
        position: relative;
    }

    .testimonials {
        padding: 0 0 3px;
        margin: 0 auto;
    }

    .client-card {
        width: 91%;
    }

    .client-card.right-side {
        margin-left: auto;
    }

    .client-card.right-side:before {
        content: "";
        display: block;
        position: absolute;
        width: 1px;
        height: 280px;
        background-color: var(--c-border);
        top: 0;
        left: 0;
    }

    .client-card-link {
        display: block;
        height: 160px;
        overflow: hidden;
        margin-bottom: 38px;
        position: relative;
    }

    .client-card-image {
        border-radius: 10px;
        width: 100%;
        display: block;
        margin: 0 auto;
        object-fit: cover;
    }

    .client-card-link .icon-play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .client-card-logo {
        height: 50px;
    }

    .client-card-logo {
        display: block;
        height: 100%;
        margin: 0 auto;
    }

    .client-card-caption {
        text-align: center;
        max-width: 300px;
        margin-left: auto;
    }

    .client-card-title {
        font-weight: 700;
        font-size: 14px;
        line-height: 1.2;
        margin: 0 0 1px;
    }

    .client-card-description {
        margin: 0;
        font-size: 11px;
        line-height: 1.2;
        letter-spacing: 0.37px;
    }

    @media (max-width: 1600px) {
        .testimonials-wrapper .slick-arrow {
            flex-basis: 40px;
            min-width: 40px;
        }
    }

    @media (max-width: 1440px) {
        .client-card-link {
            height: auto;
        }

        .client-card-title {
            font-size: 13px;
        }

        .client-card-description {
            font-size: 11px;
        }
    }

    @media (max-width: 993px) {
        .testimonials-wrapper .slick-arrow {
            display: none;
        }
    }

    @media (max-width: 769px) {
        .client-card {
            width: 100%;
            max-width: 100%;
        }

        .client-card-link {
            margin-bottom: 1rem;
        }

        .client-card.right-side:before {
            display: none;
        }

        .slick-arrow-prev {
            right: 10px;
        }

        .slick-arrow-prev:hover {
            right: 12px;
        }

        .slick-arrow-next {
            left: 10px;
        }

        .slick-arrow-next:hover {
            left: 12px;
        }

        .testimonials-wrapper {
            margin: 0 auto;
            flex-basis: calc(100vw - 100px);
            max-width: calc(100vw - 100px);
        }
    }

    @media (max-width: 767px) {
        .client-card.right-side {
            margin-left: initial;
            margin-top: 2.5rem;
        }
    }

    @media (max-width: 577px) {
        .testimonials-wrapper {
            margin: 0 auto 1rem;
            flex-basis: calc(100vw - 60px);
            max-width: calc(100vw - 60px);
        }

        .testimonials-wrapper .slick-dots span {
            width: 12px;
            max-width: 12px;
            height: 12px;
            min-width: 12px;
        }

        .testimonials-arrows-wrapper .slider-footer-arrow {
            margin-top: 40px;
        }

        .section-footer.testimonials-arrows-wrapper .slider-footer-arrow .slick-arrow {
            top: -7rem;
        }

        .testimonials{
            margin: 0 0 -1rem;
        }

        .testimonials-slider--large .testimonials-item{
            justify-content: flex-start;
        }

        .testimonials-wrapper .slick-dots{
            padding: 20px 0 0;
        }

        .testimonials-slider.testimonials-slider--large {
            height: 550px;
        }

    }

    .testimonials-wrapper .slick-dots span {
        padding: 0;
        width: 16px;
        max-width: 16px;
        height: 16px;
        min-width: 16px;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: #666;
        cursor: pointer;
        border: 0;
        box-shadow: 0 0 0 0 #47657d;
        transition: all 0.3s linear;
    }

    .testimonials-wrapper .slick-dots span.swiper-pagination-bullet-active {
        background-color: #47657d;
    }
</style>
<section class="section">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title" style="display: flex; justify-content: center; align-items: baseline;">
                <span class="animated-counter" style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">194</span>
                отзывов клиентов
            </h2>
        </header>

        <div class="section-body slow">
            <div class="testimonials-wrapper">
                <a class="slick-arrow">
                    <b class="slick-arrow-prev"></b>
                </a>
                <div class="testimonials-slider testimonials-slider--large swiper">
                    <ul class="testimonials  swiper-wrapper">
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/659238688">
                                        <img class="single-video-image" src="/img/happy-job/reviews/vid_obi.jpg" alt="Оценка вовлеченности персонала в OBI Россия"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/obi.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Катарина Карасева</div>
                                            <p class="single-video-description">
                                                Старший менеджер по развитию бренда работодателя и
                                                внутренним коммуникациям OBI Россия
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/637913619">
                                        <img class="single-video-image" src="/img/happy-job/reviews/aliexpress-video_0.jpg" alt="Как работают с персоналом в AliExpress"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/aliexpress-logo_0.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Ирина Бебешина</div>
                                            <p class="single-video-description">
                                                Бизнес-партнер по управлению персоналом Департамента
                                                ИТ
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/391176331">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_alfa.jpg" alt="АльфаСтрахование – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/alfa.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Дмитрий Попов</div>
                                            <p class="single-video-description">
                                                руководитель направления внутренних коммуникаций,
                                                АльфаСтрахование
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/586641979">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_evroplan.jpg" alt="Развитие вовлеченности персонала в ЛК Европлан"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/europlan-1.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Анаит Говорина</div>
                                            <p class="single-video-description">
                                                директор департамента по работе с персоналом, ЛК
                                                "Европлан"
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/390686185" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_sky.jpg" alt="Skyeng – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/skyeng.svg" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Полина Лаптева</div>
                                            <p class="single-video-description">
                                                руководитель отдела внутренних коммуникаций, Skyeng
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/396639819" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_ingos_0.jpg" alt="Ингосстрах – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/ingo_0.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Алексей Алексапольский</div>
                                            <p class="single-video-description">
                                                Руководитель проекта по развитию персонала
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                    </ul>
                    <ul class="slick-dots" style="" role="tablist"></ul>
                </div>
                <a class="slick-arrow">
                    <b class="slick-arrow-next"></b>
                </a>
            </div>

        </div>
        <footer class="section-footer testimonials-arrows-wrapper">
            <div class="slider-footer-row">
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-prev"></b></a>
                </div>
                <div class="slider-footer-center">
                    <a href="https://happy-job.ru/clients/reviews/" target="_blank" class="button-outline" onclick="ym(46152993,'reachGoal','look_all_reviews')">Смотреть все отзывы</a>
                </div>
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-next"></b></a>
                </div>
            </div>
        </footer>
    </div>
</section>


<script>
    $(function(){
        if ($(".testimonials").length) {

            const swiper = new Swiper(".testimonials-slider", {
                slidesPerView: 1,

                autoplay: {
                    delay: 5000,
                },

                pagination: {
                    el: ".slick-dots",
                    clickable: true,
                },

                navigation: {
                    nextEl: ".slick-arrow-next",
                    prevEl: ".slick-arrow-prev",
                }
            });
        }
    })
</script>


<!-- 12. Форма Протестируйте бесплатно -->
<style>
    .free-test{
        background-color: #DFEAEC;
        position: relative;
        padding: clamp(3.75rem, 3.178571428571429rem + 2.857142857142857vw, 5.75rem) 1rem 0;
    }
    .free-test-scheme{
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
    .free-test-photo{
        position: relative;
        grid-area: photo;
        align-self: end;
        margin: 0;
    }
    .free-test-photo img{
        width: 100%;
        position: absolute;
        display: block;
        transform: scale(160%) translate(-30px, -73px);
        bottom: 0;
    }
    .free-test-content{
        grid-area: content;
    }

    .free-test-content .form-title{
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
    .free-test-content li{
        font-size: 14px;
    }
    .free-test-content ol{
        padding-left: 1rem;
    }
    .free-test-cite{
        grid-area: cite;
        padding-left: 60px;
    }
    @media (min-width: 1200px) {
        .free-test-content,
        .free-test-cite{
            margin-left: -2rem;
            margin-top: 0;
        }
        .free-test-cite{
            align-items: center;
        }
        .footer-form .button-default{
            width: 100%;
            margin-bottom: 1rem;
        }
    }
    .free-test-cite q{
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

    .free-test-form{
        grid-area: form;
        padding-bottom: 3rem;
    }

    .free-test-form a{
        color: var(--c-link);
    }

    .free-test-form .c-form-label,
    .free-test-form .c-form h2{
        display: none;
    }

    .privacy-policy a{
        color: #61c13a;
    }

    @media (min-width: 1199px) {
        .free-test-form{
            min-height: 666px;
        }
    }
    .footer-form-list{
        padding: 0;
        margin: 0;
    }
    .footer-form-item{
        margin-bottom: 7px;
        list-style-type: none;
    }

    .footer-form-item .parsley-errors-list{
        padding: 0;
    }

    .footer-form-item .parsley-custom-error-message{
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .footer-form-item.-select{
        display: flex;
        flex-direction: column;
    }

    .footer-form-item.-select .parsley-errors-list{
        order: 3;
    }

    .footer-form-item.-select .nice-select{
        height: 33px;
        padding: 10px 20px 9px 11px;
        border-color: var(--c-border);
        font-size: 12.5px;
        line-height: 1;
    }
    .footer-form-item.-select .current{
        color: #313131;
    }

    .free-test-form select{
        height: 33px;
    }

    .free-test-form input,
    .free-test-form select,
    .free-test-form textarea{
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
        font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .form-description{
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



    @media (max-width:1201px) {
        .free-test-scheme{
            grid-template-columns: 200px 1fr 300px;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content form' 'photo cite form';
            padding: 0 1rem;
        }
        .free-test-photo img {
            position: relative;
            display: block;
            transform: scale(100%) translate(0px,0px);
        }
        .free-test-cite{
            align-self: center;
            padding-left: 0px;
        }

    }
    @media (max-width:769px) {
        .free-test-scheme{
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content' 'form form' 'photo cite';
        }
        .free-test-photo {
            transform: scale(140%) translate(-19%, -14%);
        }

        .free-test-cite{
            padding-bottom: 3rem;
        }
        .free-test-cite *{
            font-size: 14px;
        }
        .free-test-form {
            <<<<<<< 1e5c8831e94792433c6e9bcacfcce86f3f5b67bb
            padding-bottom: 3rem;
        =======
        padding-bottom: 1rem;
        >>>>>>> bb7a9d4b1014bd501c8c40e6c104b0c7aa7b8657
        }
        .free-test-cite q:before {
            left: -30px;
            height: 1px;
            width: 20px;
        }
    }


</style>


<style>
    .page-footer {
        margin-bottom: 0;
    }

    .page-footer-wrapper{
        background-color: #d3d6db;
    }

    .page-footer-container{
        max-width: 1120px;
        margin-inline: auto;
    }

    .container.-subfooter{
        max-width: 1250px;
    }
    .container.-copyright{
        max-width: 1160px;
    }

    .footer-menu,
    .footer-submenu{
        margin: 0;
        padding: 0;
    }

    .footer-menu{
        margin-inline: -2rem;
    }

    .footer-menu{
        display: flex;
    }

    .footer-block,
    .footer-submenu-item{
        list-style-type: none;
    }

    .footer-block{
        padding: 28px 28px 48px;
        margin: 0;
    }

    .footer-block-header{
        display: block;
        text-transform: uppercase;
        color: rgba(0,0,0,0.35);
        padding: 1.5rem 0;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.6px;
    }

    .footer-block.-contacts{
        position: relative;
        color: #fff;
        background-color: #636c72;
    }

    .footer-block.-contacts .footer-block-header{
        color: #c1c4c7;
    }

    .footer-block.-contacts > *{
        position: relative;
    }

    .footer-block.-contacts:before{
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #636c72;
        width: 1000%;
    }

    .footer-block.-contacts a{
        color: #fff;
    }

    .page-footer-divider{
        margin: 0;
    }

    .footer-menu-block:nth-child(1){
        flex-basis: 32%;
        max-width: 32%;
    }

    .footer-menu-block:nth-child(2){
        flex-basis: 34%;
        max-width: 34%;
    }

    .footer-menu-block:nth-child(3){
        flex-basis: 18%;
        min-width: 18%;
    }

    .footer-menu-block:nth-child(4){
        flex-basis: 25.5%;
        max-width: 25.5%;
    }

    .footer-menu-block.footer-block.-contacts{
        padding-left: 65px;
    }

    .footer-submenu-item.-logos img{
        margin-bottom: 9px;
    }

    .footer-submenu-item.-logos small{
        font-size: 15px;
        display: block;
        line-height: 1.4;
        letter-spacing: 0.4px;
        letter-spacing: -0.01px;
    }

    .footer-submenu-item.-logos{
        margin: 0;
        padding: 0;
    }

    .footer-submenu-item.-logos + .footer-submenu-item.-logos{
        margin-top: 2rem;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item{
        line-height: 1.3;
        font-size: 12px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item + .footer-submenu-item{
        max-width: 270px;
        margin-top: 17px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item.-logos{
        position: relative;
        padding-bottom: 14px;
    }

    @media (min-width: 1200px) {
        .footer-menu-block:nth-child(2) .footer-submenu-item.-logos:after{
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

    .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child){
        padding-left: 49px;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item{
        line-height: 1.3;
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item + .footer-submenu-item{
        margin-top: 15px;
    }

    .footer-menu-block.-contacts .footer-submenu-item{
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block.-contacts .footer-submenu-item a{
        white-space: nowrap;
    }

    .footer-menu-block.-contacts .footer-submenu-item + .footer-submenu-item{
        margin-top: 12px;
    }

    .footer-menu-block.-contacts .footer-submenu{
        position: relative;
        height: 210px;
        margin-bottom: 104px;
    }

    .footer-menu-block.-contacts .footer-submenu:after{
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        width: 70px;
        height: 4px;
        background-color: #fff;
    }

    .footer-contacts p{
        white-space: nowrap;
    }
    .footer-contacts p:nth-child(1){
        font-size: 22px;
        margin-bottom: 9px;
    }
    .footer-contacts p:nth-child(2){
        font-size: 22px;
        margin-bottom: 17px;
    }

    .footer-contacts address{
        font-size: 15px;
        line-height: 1.4;
        white-space: nowrap;
    }


    .subfooter-list{
        display: flex;
        justify-content: space-between;
        margin: 0;
        padding: 0;
        flex-flow: row wrap;
    }

    .subfooter-list .footer-link{
        flex: 1;
        padding: 0 1.5rem;
    }

    @media (max-width: 1440px) {
        .page-footer-container{
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
        .footer-menu{
            flex-flow: row wrap;
        }
        .footer-menu-block:nth-child(1){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 50%;
            max-width: 50%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 20%;
            max-width: 20%;
        }
        .footer-menu-block:nth-child(4) {
            flex-basis: 100%;
            max-width: 100%;
        }
        .contacts-wrapper{
            display: flex;
            align-items: center;
        }

        .footer-menu-block.-contacts .footer-submenu{
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
        .footer-contacts{
            padding-left: 4rem;
        }
    }
    @media (max-width: 993px) {
        .footer-menu-block:nth-child(1){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 40%;
            max-width: 40%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
            padding-left: 0px;
        }
    }

    @media (max-width: 769px) {
        .footer-menu-block:nth-child(1){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 60%;
            max-width: 60%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 40%;
            max-width: 40%;
        }
        .contacts-wrapper{
            align-items: flex-start;
            flex-direction: column;
        }

        .footer-menu-block.-contacts .footer-submenu{
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
        .footer-contacts{
            padding-left: 0;
            padding-top: 2rem;
        }
    }

    @media (max-width: 577px) {
        .footer-block {
            padding: 1rem;
        }

        .footer-menu-block:nth-child(2){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block.footer-block.-contacts {
            padding-left: 1rem;
        }
        .footer-link,
        .footer-link span{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    }

    .container.-subfooter{
        padding: 2rem 0;
    }

</style>

<style>
    .hellogirl{
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
    .hellogirl__content_pilot .hellogirl__title{
        font-size: 23px;
        line-height: 1.1;
        padding-top: 20px;
    }
    .hellogirl__content_pilot .hellogirl__title span{
        color: #F5515A;
        font-size: 1em;
    }
    .hellogirl__content_pilot .hellogirl__img{
        margin: 12px 0 -5px;
    }
    .hellogirl__text{
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

    .hellogirl__img{
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
    .hellogirl__logo{
        background: #fff;
        display: inline-block;
        margin: -17px auto -6px;
        padding: 12px 17px;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
        position: relative;
        z-index: 5;
    }
    .hellogirl__logo img{
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

    .hellogirl__content_pilot .hellogirl__button{
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
        -webkit-filter: drop-shadow(1px 1px 1px rgba(0,0,0,.5));
        filter: drop-shadow(1px 2px 1px rgba(0,0,0,0.1));
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
        .hellogirl__img,.hellogirl__logo{
            display: none;
        }
        .hellogirl__text{
            padding: 0 5px 5px;
        }
        .hellogirl__text div{
            margin-top: 5px;
        }
        .hellogirl__button{
            max-width: 300px;
            margin: 5px auto 10px;
        }
    }
    @media (max-width: 576px) and (orientation: portrait){
        .hellogirl__text-text{
            padding-left: 0px !important;
        }
        .hellogirl__img,
        .hellogirl__img + br{
            display: none;
        }
    }
    @media (max-height: 450px) and (orientation: portrait){
        .hellogirl__content_pilot .hellogirl__title{
            margin-bottom: -20px;
        }
    }
    @media (max-height: 450px){
        .hellogirl__img,.hellogirl__logo{
            display: none;
        }
        .hellogirl__button{
            font-size: 14px;
        }
        .hellogirl__video{
            text-align: center;
        }
        .hellogirl__video canvas{
            height: 110px;
            margin-right: 12px;
        }
        .hellogirl__text:after{
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
            output = outputCanvas.getContext('2d',{ willReadFrequently: true }),
            bufferCanvas = document.getElementById('buffer'),
            buffer = bufferCanvas.getContext('2d',{ willReadFrequently: true }),
            video = document.getElementById('video-girl'),
            width = outputCanvas.width,
            height = outputCanvas.height,
            interval;
        if($(window).width() > 767){
            playgirlvideo();
        }
        $(window).resize(function(){
            if($(window).width() > 767 && !$('#video-girl').hasClass('playing')){
                playgirlvideo();
            }
        });
        var cookieObj = new URLSearchParams(document.cookie.replaceAll("; ","&"));
        var cookieHideGirl = cookieObj.get('girl');

        if(cookieHideGirl == '1') {
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
        }
        else{
            var cookieElGirl = cookieObj.get('elgirl');
            if(!cookieElGirl){
                cookieElGirl = '0';
            }
            else if(!$('.hellogirl__content').filter(':eq('+cookieElGirl+')').length){
                cookieElGirl = '0';
            }
            else{
                cookieElGirl = parseInt(cookieElGirl);
                cookieElGirl++;
                if(cookieElGirl > $('.hellogirl__content').length-1){
                    cookieElGirl = '0';
                }
            }
            document.cookie = 'elgirl='+cookieElGirl;
            $('.hellogirl__content').filter(':eq('+cookieElGirl+')').show();
            setTimeout(function () {
                $('.hellogirl,.hellogirl__bg').css({'visibility': 'visible','opacity': '1'});
            }, 1000);
        }

        $('.hellogirl__close').on('click',function(e){
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
        });

        $('.hellogirl__button,.hellogirl__img_video').on('click',function(e){
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
            if($(this).hasClass('hellogirl__scroll')){
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
        function playgirlvideo(){
            $('#video-girl source').each(function(){
                $(this).attr('src',$(this).data('src'));
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
        <path d="M11.165 17.19C10.685 17.04 10.265 16.815 9.905 16.515C9.545 16.185 9.2 15.825 8.87 15.435C8.72 15.255 8.465 14.895 8.105 14.355C7.745 13.815 7.355 13.215 6.935 12.555C6.545 11.895 6.17 11.28 5.81 10.71C5.45 10.11 5.18 9.66 5 9.36C4.85 9.81 4.685 10.185 4.505 10.485C4.355 10.755 4.28 11.19 4.28 11.79C3.98 12.21 3.755 12.69 3.605 13.23C3.485 13.74 3.35 14.25 3.2 14.76C3.11 15.09 2.96 15.39 2.75 15.66C2.57 15.93 2.33 16.17 2.03 16.38C1.67 16.35 1.355 16.23 1.085 16.02C0.845 15.81 0.635 15.6 0.455 15.39C0.275 15.03 0.2 14.685 0.23 14.355C0.26 14.025 0.335 13.71 0.455 13.41C0.515 13.14 0.68 12.615 0.95 11.835C1.25 11.055 1.565 10.215 1.895 9.315C2.225 8.385 2.525 7.56 2.795 6.84C3.065 6.09 3.215 5.625 3.245 5.445C3.425 4.845 3.74 4.2 4.19 3.51C4.67 2.79 5 2.01 5.18 1.17C5.24 0.959999 5.39 0.764999 5.63 0.584999C5.87 0.374999 6.14 0.269999 6.44 0.269999C6.77 0.239999 7.04 0.404999 7.25 0.764999C7.31 0.794999 7.4 0.839999 7.52 0.899999C7.64 0.929999 7.73 0.99 7.79 1.08C8.03 1.35 8.165 1.635 8.195 1.935C8.255 2.235 8.195 2.55 8.015 2.88C7.625 3.57 7.295 4.14 7.025 4.59C6.785 5.01 6.545 5.475 6.305 5.985C6.065 6.495 5.795 7.2 5.495 8.1C6.005 7.98 6.38 7.89 6.62 7.83C6.86 7.74 7.085 7.605 7.295 7.425C7.535 7.215 7.85 6.9 8.24 6.48C8.39 6.33 8.69 6.045 9.14 5.625C9.62 5.175 10.115 4.695 10.625 4.185C11.165 3.675 11.63 3.225 12.02 2.835C12.44 2.445 12.665 2.22 12.695 2.16C12.875 1.89 13.055 1.65 13.235 1.44C13.445 1.2 13.715 1.02 14.045 0.899999C14.495 0.959999 14.81 1.05 14.99 1.17C15.17 1.26 15.515 1.515 16.025 1.935C16.175 2.055 16.235 2.34 16.205 2.79C16.175 3.21 16.01 3.54 15.71 3.78C15.17 4.2 14.495 4.74 13.685 5.4C12.875 6.06 12.005 6.75 11.075 7.47C10.175 8.19 9.275 8.865 8.375 9.495C8.795 10.185 9.17 10.845 9.5 11.475C9.83 12.075 10.1 12.585 10.31 13.005C10.37 13.755 10.64 14.265 11.12 14.535C11.63 14.775 12.245 14.895 12.965 14.895C13.205 15.015 13.355 15.165 13.415 15.345C13.505 15.495 13.55 15.675 13.55 15.885C13.58 16.065 13.61 16.245 13.64 16.425C13.22 16.695 12.92 16.935 12.74 17.145C12.59 17.325 12.41 17.43 12.2 17.46C12.02 17.46 11.675 17.37 11.165 17.19Z" fill="currentcolor"></path>
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

    .btn.btn-3+.button {
        transform: translateY(-1rem);
    }

    .b-top-title .button {
        max-width: 190px;
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child,
    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child:before {
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

    .fancybox__content>.carousel__button.is-close {
        top: 0px;
        color: var(--fancybox-color, #000);
        background-color: #fff;
        border-radius: 5px;
    }

    .fancybox__content>.carousel__button.is-close:hover {
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

    .main-modal-header {}

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

        .adactive-cards>td {
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
        .fancybox__content>.carousel__button.is-close{
            top: 0 !important;
            right: 7px;
            position: fixed !important;
        }
        .main-modal-input textarea{
            max-height: 40px;
        }

    }
    @media (max-width: 480px) {
        .video-case {
            height: 170px;
        }
    }
</style><style>

    .main-modal h2{
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }
    .main-modal-input .parsley-errors-list[aria-hidden="false"]{
        margin-bottom: -14px;
    }
    .main-modal-input .parsley-custom-error-message{
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .main-modal .button-default{
        display: block;
        margin-inline: auto;
    }
    .main-modal .c-form-policy{
        text-align: center;
        border-top: 1px solid #eee;
        padding: 0;
        margin-top: 2rem;
    }
    .main-modal .c-form-policy a{
        display: inline-block;
    }

    @media (min-width: 1024px){
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
            font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }

        .c-form select{
            padding-top: 8px;
        }

        .c-form-label{
            display: block;
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-label sup{
            color: red;
        }

        .c-form-list{
            padding: 0;
            margin: 0;
        }

        .c-form-item{
            list-style-type: none;
            margin-bottom: 0.75rem;
        }
        .c-form-item .parsley-errors-list{
            padding: 0;
        }
        .c-form-item .parsley-custom-error-message{
            list-style-type: none;
            font-size: 9px;
            color: red;
        }
        .c-form-item .parsley-custom-error-message:before{
            display: none !important;
            opacity: 0 !important;
        }

        .c-form-label{
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-policy {
            padding: 1rem 0 0;
        }

        .c-form-policy a:hover{
            color: var(--c-link);
        }

        .c-form textarea{
            height: 100px;
        }

        .c-form-policy p{
            font-size: 11px;
            margin: 1rem 0 0;
            letter-spacing: 0.2px;
        }

        .c-form-policy p strong{
            font-size: 150%;
        }

        .c-form-policy .icon{
            position: relative;
            top: 1px;
            width: 13px;
            height: 13px;
            right: inherit;
            margin-right: 4px;
            float: left;
        }

        .c-form-date{
            max-width: 300px;
            margin: 0 auto 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            grid-column-gap: 1rem;
            grid-row-gap: 0.5rem;
        }
        .c-form-date p{
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
                <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Компания
                    <sup>*</sup>
                </label>
                <input type="text" id="company" name="company" placeholder="Ваша компания" required data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Количество сотрудников
                    <sup>*</sup>
                </label>
                <select id="number" name="number" required data-parsley-trigger="change" data-parsley-error-message="Укажите количество сотрудников">
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
                <input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change" data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$" data-parsley-error-message="Укажите номер телефона">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Корпоративный e-mail
                    <sup>*</sup>
                </label>
                <input type="email" id="email" name="email" placeholder="Ваш e-mail" required data-parsley-trigger="change" data-parsley-pattern="/^(?!.*@(gmail\.com|yahoo\.com|rambler\.ru|mail\.ru|yandex\.ru|ya\.ru)$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" data-parsley-error-message="Укажите корпоративный e-mail">
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
        $(function() {

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

            currentDateInput.addEventListener('change', function() {
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
                    .then(function(response) {
                        if (!response.ok) {
                            throw new Error('Ошибка HTTP: ' + response.status);
                        }

                        return response.json();
                    })
                    .then(function(data) {
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
                    .catch(function(error) {
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
            $('#form-id input').on('input', function() {
                const Form = $('#form-id').parsley();
            });


            // 2
            $('#form-id-submit').on('click', function(event){
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
                const formNodeID ='form-id';
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
    </script></div><div class="main-modal" id="get-email" style="display:none; ">
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
</script><script src="https://www.google.com/recaptcha/api.js?render=6Le6d_gaAAAAAKOZFwTtVob1nLTWnMFhppylmKt4"></script>
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
</body>
</html>
