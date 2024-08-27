<?php

use app\models\BasePageSettings;

$page_settings = new BasePageSettings;

if (!$page_settings->checkStatus()) {
    exit;
}

$this->title = 'О компании | Happy Job - платформа для исследования вовлеченности и лояльности персонала';

\Yii::$app->view->registerMetaTag([
    'name'    => 'description',
    'content' => 'Информация о компании и продукте Happy Job. Онлайн-исследования для оценки и развития показателей вовлеченности и лояльности персонала внутри компании.',
]);
?>



<div class="container mainc">
    <main>
        <style>
            @media(max-width: 576px) {
                #fixedsidemenu {
                    height: auto !important;
                }
            }

            main strong,
            .press-releases .row .date{
                background: transparent;
            }

            .breadcrumbs-list:after {
                display: none;
            }

            .top-baner .breadcrumbs-item + .breadcrumbs-item:before {
                transform: translate(0px, 6px);
            }

            .top-baner {
                color: #243958;
                font-size: 44px;
                font-weight: 700;
                line-height: 1.2;
                height: 550px;
                overflow: hidden;
                position: relative;
            }

            .top-baner .container,
            .top-baner .container .col {
                height: 100%;
                z-index: 1;
            }
            .top-baner picture img {
                z-index: -1;
                position: absolute;
                min-width: 100vw;
                top: 0;
                left: 50%;
                -webkit-transform: translate(-50%);
                transform: translate(-50%);
            }
            .top-baner video {
                width: 100%;
                position: absolute;
                z-index: 0;
                top: 50%;
                margin-top: -28vw;
            }
            .b-btn .btn:first-child {
                margin-right: 24px;
            }
            .b-top-title {
                position: absolute;
                bottom: 270px;
                margin: auto;
                height: 72px;
            }
            .title h1 {
                color: #fff;
                background: #61c13a;
                text-align: center;
                font-size: 60px;
                font-weight: 300;
            }
            .b-top-title .slogan {
                margin: 0 0 62px;
                min-height: 120px;
                font-size: 30px;
                line-height: 1.3;
                font-weight: 200;
            }
            .slogan span {
                font-size: 20px;
                display: block;
                margin-bottom: 10px;
            }
            @media (max-width: 991px) {
                .top-baner picture img {
                    position: relative;
                    width: 100vw;
                    left: 0;
                    height: auto;
                    -webkit-transform: none;
                    transform: none;
                }
                .top-baner {
                    height: auto;
                }

                .top-baner video {
                    width: 100%;
                    position: relative;
                    top: 0;
                    margin-top: 0;
                }
            }
            @media (max-width: 767px) {
                .b-top-title {
                    bottom: 35.5vw;
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
                .title h1 {
                    font-size: 45px;
                    background: none;
                    color: #000;
                    padding: 10px 0 0;
                }
                .top-baner picture img {
                    width: 100%;
                    z-index: 1;
                }
                .top-baner {
                    height: auto;
                    background-color: #dbdbdb;
                }
                .b-top-title {
                    bottom: initial;
                    top: 0;
                    position: relative;
                    height: auto;
                    width: 100%;
                    display: block;
                }
            }

            article[role="article"] {
                margin-top: 50px;
            }
            .value {
                font-size: 24px;
                padding: 1px 3px 3px;
                border-radius: 4px;
                line-height: 1;
                display: inline;
                background: #f1f1f1;
            }
            .mt0 {
                margin-bottom: 0;
            }
            .wrapall .container .b-green__margin {
                margin: 60px 0;
            }
            .wrapall .container .b-green {
                background: 0 0;
                margin: 40px 0 40px;
                position: relative;
                padding: 40px 0 30px;
                text-align: center;
            }

            .wrapall .container .b-green p{
                line-height: 1.2;
                font-size: 32px;
                color: #fff;
            }

            .wrapall .container .b-green:before {
                content: "";
                background: #61c13a;
                top: 0;
                bottom: 0;
                position: absolute;
                left: -3000px;
                right: -2000px;
                overflow: hidden;
                z-index: -1;
                box-shadow: 0 -1px 3px -1px rgba(0, 0, 0, 0.5) inset;
                border-top: 1px solid #6d9f3b;
                overflow: hidden;
            }
            .quote-block {
                position: relative;
                padding: 0;
                margin-bottom: 0;
                display: flex;
                flex-flow: row nowrap;
                align-items: center;
                text-align: left;
                font-size: 18px;
            }
            .quote-block__left {
                flex: 0 0 20%;
                margin-top: -13px;
            }
            .quote-block__img {
                width: 132px;
                margin: 0;
            }
            .quote-block__right {
                padding: 0 21px;
            }
            .quote-block__text {
                margin-bottom: 25px;
                position: relative;
                color: #fff;
            }
            .quote-block__name {
                font-weight: 600;
                color: #fff;
            }
            .quote-block__post {
                color: #fff;
                font-size: 11px;
            }
            .breadcrumbs {
                padding: 0 !important;
            }
            .heading .breadcrumbs-wrapper {
                display: none;
            }
            .heading aside a {
                padding: 9px 0 9px 18px;
                display: inline-block;
                position: relative;
                width: 100%;
                color: #666;
            }
            .heading .anchor-menu .scroll-link {
                padding: 9px 16px 9px 22px;
            }
            .heading aside a:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 1px;
                background: #ededde;
            }
            .heading .anchor-menu .scroll-link:before {
                left: 1.4rem;
                right: 1.4rem;
            }
            .heading aside a:after {
                content: "";
                display: inline-block;
                width: 0;
                height: 0;
                border-top: 4px solid transparent;
                border-bottom: 4px solid transparent;
                border-left: 4px solid #333;
                position: absolute;
                left: 9px;
                top: 17px;
            }
            .our-clients-item {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .our-clients .splide__arrows {
                display: none;
            }
            .our-clients-item > figure {
                text-align: center;
                align-self: center;
                border: 1rem solid #fff;
                margin: 0 0 1rem;
            }
            .our-clients-item > figure > img,
            .our-clients-item > figure > svg {
                display: block;
                margin: 0 auto;
                height: 30px;
            }
            article[role="article"] .breadcrumbs-item + .breadcrumbs-item:before {
                transform: translate(-6px, -7px);
            }
            @media (max-width: 575px) {
                .heading .breadcrumbs-wrapper {
                    display: block;
                }
                .main-content .breadcrumbs-wrapper {
                    display: none;
                }
            }

            .wrapall .heading aside {
                padding: 0px 15px 15px;
            }

            .main-content a:hover{
                color: #61c13a;
            }
            @media(max-width: 993px){
                #title-wrap h1{
                    font-size: 22px;
                }
            }

        </style>
        <!-- render about-us/01-top-baner-->
        <div class="top-baner -dark wide-container">
            <video playsinline="" muted="" autoplay="">
                <source src="/img/p/about-us/fly_header.mp4" type="video/mp4">
            </video>
            <div class="container">
                <div class="col">
                    <div class="b-top-title title">
                        <h1>О компании</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapall">
            <div class="container">
                <article role="article">
                    <div class="row">
                        <div class="col-sm-4 col-lg-3 heading">
                            <div class="breadcrumbs-wrapper">

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
                                    <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                                        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                            <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
                                            </a>

                                            <meta itemprop="position" content="1">
                                        </li>










                                        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                            <span itemprop="name">О компании</span>

                                            <meta itemprop="position" content="3">
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <aside class="anchor-menu">
                                <ul>
                                    <li>
                                        <a href="#title0"> Вводные положения </a>
                                    </li>
                                    <li>
                                        <a href="#title1"> Предмет соглашения </a>
                                    </li>
                                    <li>
                                        <a href="#title2">
                                            Получение, использование и раскрытие конфиденциальной
                                            информации
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#title3"> Безопасность личных данных </a>
                                    </li>
                                    <li>
                                        <a href="#title4">
                                            Изменения в Соглашении о конфиденциальности информации
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-sm-8 col-lg-9">
                            <div class="main-content">
                                <div class="breadcrumbs-wrapper">

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
                                        <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                                <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
                                                </a>

                                                <meta itemprop="position" content="1">
                                            </li>










                                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                                <span itemprop="name">О компании</span>

                                                <meta itemprop="position" content="3">
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <h2>О компании</h2>
                                <p>
                                    <b>Happy Job. — аккредитованная IT-компания ООО «Ферст трэйнинг
                                       групп»</b>
                                </p>
                                <p>
                                    <b>(товарные знаки: «Happy Job», «Happy Job.», «Feedback Х»,
                                       «Happy Service»).</b>
                                </p>
                                <br>
                                <p>
                                    <b>С 2017 года мы</b> специализируемся на создании онлайн-платформ
                                                          для корпоративных исследований вовлеченности, лояльности,
                                                          удовлетворенности, eNPS и т.д. Сегодня нашими IT-продуктами
                                                          пользуются более 800 коммерческих и государственных организаций.
                                                          Клиенты отмечают интересную проработку опросов, элементы
                                                          геймификации, которые позволяют добиться высокого процента участия
                                                          персонала в опросах, наличие встроенных рекомендаций, а также
                                                          возможность сравнить себя с другими компаниями в отрасли благодаря
                                                          крупнейшей базе HR-бенчмарок в Евразии. Все собранные данные
                                                          хранятся на российских серверах с учетом высоких стандартов
                                                          безопасности.
                                </p>
                                <p>
                                    В 2017 году IT-продукты <b>Happy Job.</b> привнесли в индустрию
                                    исследований современные технологии обработки данных,
                                    UX-интерфейсы, дизайн-мышление и геймификацию.
                                </p>
                                <p>
                                    В 2019 году мы получили
                                    <a href="/metodika/nauchnoe-obosnovanie-metodiki/">патент</a> на
                                    собственную методологию проведения исследований.
                                </p>
                                <p>
                                    С 2020 года наши решения входят
                                    <a href="https://reestr.digital.gov.ru/reestr/310009/?sphrase_id=1856359">в Реестр Отечественного ПО.</a>
                                </p>

                                <h2>Наши продукты:</h2>
                                <div class="prodlist">
                                    <a href="https://happy-job.ru/"><picture><source srcset="/img/p/about-us/prod/prod_hj2.webp" type="image/webp"><img src="/img/p/about-us/prod/prod_hj2.jpg" alt="" title=""></picture></a><a href="https://happy-inc.ru/happy-service/" target="_blank"><picture><source srcset="/img/p/about-us/prod/prod_hse2.webp" type="image/webp"><img src="/img/p/about-us/prod/prod_hse2.jpg" alt="" title=""></picture></a><a href="https://happy-inc.ru/feedbackx/" target="_blank"><picture><source srcset="/img/p/about-us/prod/prod_fx2.webp" type="image/webp"><img src="/img/p/about-us/prod/prod_fx2.jpg" alt="" title=""></picture></a><a href="https://happy-inc.ru/oproskin/" target="_blank"><picture><source srcset="/img/p/about-us/prod/oproskin.webp" type="image/webp"><img src="/img/p/about-us/prod/oproskin.png" alt="" title=""></picture></a>
                                </div>
                                <p>
                                    Happy Job. находится в уникальном положении, так как получает
                                    обратную связь одновременно от десятка тысяч HR, руководителей и
                                    сотрудников. Это позволяет непрерывно работать над улучшением
                                    наших продуктов. Мы ежедневно общаемся с клиентами, наблюдаем за
                                    их успехами, а также помогаем им решать комплексные задачи с
                                    помощью лучшего программного обеспечения и экспертной поддержки.
                                </p>
                                <p>
                                    В работе мы следуем нашим ценностям — эксклюзивности, максимальной
                                    пользе для клиента и технологичности. Это позволяет нам не только
                                    создавать одни из лучших в b2b-решений мире, но эффективно решать
                                    задачи клиентов.
                                </p>
                                <div class="b-green b-green__margin">
                                    <div class="container">
                                        <p>
                                            Нас вдохновляет то, как жизнь и работа людей меняются
                                            благодаря нашим продуктам.
                                        </p>
                                    </div>
                                </div>
                                <h2>Наши клиенты</h2>
                                <style>
                                    .our-clients {
                                        margin-bottom: 1rem;
                                    }
                                    .our-clients__list {
                                        padding-left: 0;
                                        margin-bottom: 0;
                                        animation: 20s linear infinite runline;
                                    }

                                    .our-clients__list .swiper-slide {
                                        width: min-content;
                                    }

                                    .our-clients-item>figure>img {
                                        width: 100px;
                                        background-color: #555;
                                    }

                                    @media (max-width: 993px) {
                                        .our-clients-item {
                                            display: block !important;
                                        }

                                        .our-clients-item>figure>img,
                                        .our-clients-item>figure>svg {
                                            margin: 0 auto;
                                        }
                                    }

                                </style>


                                <!-- Слайдер -->
                                <section class="our-clients swiper" aria-label="Слайдер с компаниями">
                                    <ul class="our-clients__list swiper-wrapper">
                                        <!-- ВТБ -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 98 35" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#00aaff d=" m6.665-0.002l-1.669></path>
                                                        <path fill="#0a2896" d="M49.16 20.055v0.097c1.057 0.388 2.067 1.068 2.596 1.504 1.634 1.359 2.356 3.154 2.356 5.483 0 3.835-2.019 6.6-5.336 7.474-1.010 0.291-2.067 0.388-4.038 0.388h-10.045v-28.048h8.893c1.827 0 3.076 0.097 4.181 0.387 3.221 0.874 5.336 3.106 5.336 6.648 0 1.893-0.673 3.495-1.778 4.562-0.481 0.485-1.154 1.068-2.163 1.504zM40.268 23.015v7.376h3.846c1.153 0 2.211-0.097 2.98-0.825s1.105-1.65 1.105-2.863c0-0.921-0.241-1.795-0.721-2.426-0.817-1.019-1.827-1.262-3.557-1.262h-3.654zM40.219 18.162h3.125c0.961 0 1.442 0 1.922-0.145 1.299-0.389 2.116-1.552 2.116-3.154 0-1.892-0.865-2.718-2.116-3.105-0.529-0.146-1.057-0.194-2.115-0.194h-2.932v6.599zM62.475 35.002v-23.342h-8.027v-4.706h22.305l-1.586 4.706h-7.115v23.342h-5.576zM78.483 35.002v-28.048h18.075l-1.586 4.706h-10.96v6.212h4.471c3.605 0 5.48 0.874 6.778 1.989 1.010 0.874 2.74 2.814 2.74 6.649 0 3.785-1.778 5.871-3.269 6.939-1.73 1.212-3.557 1.553-7.259 1.553h-8.989zM84.011 30.294h4.182c1.586 0 2.547-0.388 3.22-1.262 0.336-0.436 0.817-1.214 0.817-2.669s-0.481-2.475-1.442-3.203c-0.576-0.436-1.346-0.678-2.644-0.678h-4.134v7.812z">
                                                        </path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Магнит -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 214 40" xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd" d="M100.238 23.71H94.129L97.184 15.8663L100.238 23.71ZM102.297 28.995L103.66 32.5H110.381L100.274 7.5H94.197L84.088 32.5H90.705L92.071 28.995H102.297ZM73.375 32.502V17.644L66.814 25.492L60.256 17.644V32.502H53.685V7.5018H60.166L66.814 16.098L73.464 7.5018H79.945V32.502H73.375ZM114.559 7.5021V32.502H121.132V13.3079H130.321V7.5021H114.559ZM151.295 22.708V32.502H157.867V7.5021H151.295V16.832H141.534V7.5021H134.963V32.502H141.534V22.708H151.295ZM199.183 32.502V13.3079H191.505V7.5021H213.467V13.3079H205.755V32.502H199.183ZM180.311 18.254V32.502H186.886V7.5021H181.211L170.928 21.6V7.5021H164.354V32.502H169.851L180.311 18.254ZM0 11.9576C0 8.7718 1.257 5.7717 3.543 3.5085C5.827 1.2462 8.855 0 12.068 0H39.935V6.0765H12.068C10.493 6.0765 9.005 6.6906 7.878 7.8048C6.753 8.9218 6.131 10.3972 6.131 11.9576L6.096 22.157C5.812 24.866 3.751 27.051 1.085 27.454L0 27.619V11.9576ZM0 40V33.923H27.867C29.442 33.923 30.93 33.309 32.053 32.192C33.183 31.079 33.802 29.605 33.802 28.042L33.807 18.362C33.807 15.4791 35.975 12.9791 38.851 12.5442L39.935 12.381V28.042C39.935 31.228 38.678 34.227 36.391 36.49C34.108 38.754 31.083 40 27.867 40H0ZM23.647 27.619V19.876L19.967 24.113L16.286 19.876V27.619H11.41V12.381H16.029L19.967 17.28L23.904 12.381H28.525V27.619H23.647Z" fill="#E6000E"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Х5 -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 137 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1044_19802)">
                                                            <path d="M32.6749 35.5401L28.8221 28.9512L25.0492 35.5401H20.5338L26.3352 25.6147L20.4219 16.4004H25.1398L28.9287 22.5524L32.5417 16.4004H37.0571L31.2396 25.9145L37.2169 35.5401H32.6749Z" fill="black"></path>
                                                            <path d="M51.8986 29.034C51.8986 33.2389 48.8167 35.8697 44.7792 35.8697C41.2265 35.8697 38.2228 33.8477 37.9297 29.4435H41.7825C42.0472 31.3576 43.5357 32.1858 45.1575 32.1858C47.1772 32.1858 48.0476 30.7909 48.0476 28.9864C48.0476 27.0997 46.694 25.9241 44.8076 25.9241C43.2391 25.9241 42.2035 26.6902 41.7257 27.511H38.0416L39.3134 16.4082H51.4243L51.0211 20.1268H42.3563L42.0134 23.8016C42.0134 23.8016 42.9229 22.7046 45.6797 22.7046C49.0032 22.7046 51.8968 25.0009 51.8968 29.0486" fill="black"></path>
                                                            <path d="M38.3844 14.0171C36.3327 5.79001 29.8225 0 16.3119 0H0L2.21507 15.4102C3.87948 29.3157 9.04678 33.7894 18.1912 35.4366C18.2336 35.4483 18.2781 35.4491 18.3209 35.439C18.3636 35.4288 18.4033 35.4081 18.4365 35.3785C18.4696 35.3489 18.4952 35.3114 18.511 35.2692C18.5267 35.2271 18.5322 35.1816 18.527 35.1368C18.5274 35.0773 18.5108 35.019 18.4792 34.9693C18.4476 34.9195 18.4024 34.8805 18.3493 34.857C12.1678 32.1787 11.4626 23.394 10.1428 14.5801L9.12137 7.55608H18.4328C27.0177 7.55608 33.6469 7.41713 37.8426 14.2383C37.8717 14.2871 37.9121 14.3278 37.9601 14.3569C38.0081 14.3859 38.0623 14.4023 38.1179 14.4046C38.1559 14.4044 38.1934 14.3964 38.2282 14.381C38.2631 14.3656 38.2946 14.3432 38.3209 14.3151C38.3473 14.287 38.3679 14.2537 38.3815 14.2173C38.3951 14.1809 38.4015 14.142 38.4004 14.103C38.401 14.0738 38.3968 14.0448 38.3879 14.0171" fill="#5FAF2D"></path>
                                                            <path d="M74.0705 25.5705C74.0705 25.5705 75.035 36.2145 64.5832 36.2145C59.0766 36.2145 54.8135 31.8724 54.8135 25.9764C54.8135 20.0803 59.0873 15.7383 64.7431 15.7383C69.1004 15.7383 72.5766 18.3197 73.9 22.2943H71.4522C70.2923 19.6836 67.7841 17.9797 64.7217 17.9797C60.3645 17.9797 57.1369 21.3875 57.1369 26.0422C57.1369 30.5561 60.1993 34.0462 64.7217 34.0462C68.5284 34.0462 71.4238 31.5488 71.756 27.6035H64.3256V25.5924H74.0705V25.5705Z" fill="black"></path>
                                                            <path d="M85.8204 20.0354V22.4487C85.4995 22.411 85.1769 22.3921 84.854 22.392C81.6815 22.392 79.4754 24.5201 79.4754 28.5239V35.9027H77.1875V20.2932H79.4754V23.7851C80.3849 21.4578 82.2056 19.9824 84.8807 19.9824C85.1947 19.9823 85.5085 20.0012 85.8204 20.0391" fill="black"></path>
                                                            <path d="M102.571 28.0977C102.571 32.7816 99.1235 36.215 94.7378 36.215C90.3787 36.215 86.9326 32.7524 86.9326 28.0977C86.9326 23.4138 90.4355 19.9785 94.7378 19.9785C99.0684 19.9785 102.571 23.4138 102.571 28.0977ZM89.2489 28.0977C89.2489 31.5311 91.6754 33.9736 94.7378 33.9736C97.8001 33.9736 100.244 31.5311 100.244 28.0977C100.244 24.6643 97.7895 22.2218 94.7378 22.2218C91.7038 22.2218 89.2489 24.635 89.2489 28.0977Z" fill="black"></path>
                                                            <path d="M118.402 20.293V35.9061H116.105V32.8109C115.086 34.8548 113.32 36.2169 110.7 36.2169C107.336 36.2169 105.321 34.0029 105.321 30.1983V20.293H107.609V29.7449C107.609 32.5275 108.879 33.9755 111.361 33.9755C114.368 33.9755 116.105 31.7615 116.105 28.297V20.293H118.395H118.402Z" fill="black"></path>
                                                            <path d="M137 28.0987C137 32.8119 134.021 36.216 129.884 36.216C128.7 36.2403 127.531 35.9305 126.505 35.3201C125.48 34.7097 124.636 33.8221 124.065 32.7534V43.0006H121.775V20.294H124.065V23.5007C124.634 22.4199 125.48 21.5203 126.511 20.8998C127.542 20.2793 128.718 19.9616 129.913 19.9813C134.021 19.9813 137 23.3599 137 28.1005V28.0987ZM134.691 28.1005C134.691 24.6927 132.54 22.2246 129.477 22.2246C126.415 22.2246 124.046 24.6653 124.046 28.1005C124.046 31.5358 126.39 33.9764 129.477 33.9764C132.565 33.9764 134.691 31.5339 134.691 28.1005Z" fill="black"></path>
                                                        </g>
                                                        <defs>
                                                            <clippath id="clip0_1044_19802">
                                                                <rect width="137" height="43" fill="white"></rect>
                                                            </clippath>
                                                        </defs>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Альфа-банк -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 33 50" class="e1B_-" data-test-id="HeaderLogo">
                                                        <path clip-rule="evenodd" d="M0 49.982v-6.825h32.61v6.825H0zm11.646-28.764h9.064L16.39 7.526h-.17l-4.573 13.692h-.001zm10.587-16.22l9.615 28.887h-7.115l-2.16-6.866H9.698l-2.33 6.867H.679l10.09-28.887C11.746 2.197 12.887 0 16.559 0s4.744 2.206 5.674 4.999v-.001z" fill="#ef3124" fill-rule="evenodd"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Сибур -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 588.8 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #008c95;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="m158.07,143.01s2.05-23.21,2.26-25.49c.25-5.44-3.96-10.05-9.39-10.3-.11,0-.23,0-.34,0h-58.59c-5.62-.39-10.51,3.81-10.98,9.42-.26,2.72-5.12,58.85-5.41,62.08-.68,5.41,3.15,10.35,8.56,11.03.35.04.7.07,1.05.08h58.24c7.74,0,10.74-4.09,11.4-10.41.4-3.78,2.31-26.63,2.31-26.63h-35.22l-1.51,17.66h-8.92l3.83-43.84h8.92l-1.42,16.41h35.22Z"></path>
                                                        <path class="cls-1" d="m212.41,114.28c-1.25,3.61-11.5,35.69-11.5,35.69l4.56-42.79h-35.2l-7.37,82.64h26.53c6.66,0,8.94-3.78,10.05-6.82,1.34-3.61,11.1-30.61,11.1-30.61l-3.59,37.42h35.22l7.25-82.6h-27.64c-4.37-.03-8.22,2.86-9.4,7.06Z"></path>
                                                        <path class="cls-1" d="m390.81,107.22l-3.3,37.67h-8.94l3.3-37.67h-35.2s-3.38,39.91-3.75,43.74c-.42,4.6,2.19,11.1,9.98,11.1h33.12l-.73,8.38h-44.07l-1.74,19.38h70.08c4.75,0,9.33-3.11,9.96-9.73.4-4.25,6.45-72.87,6.45-72.87h-35.17Z"></path>
                                                        <path class="cls-1" d="m482.69,107.23h-47.82l-7.22,82.59h35.2l2.24-25.56h34.21c6.06,0,10.06-3.09,10.72-10.17.24-2.76,3.04-34.06,3.21-36.82.43-6.11-4.42-10.05-10.41-10.05h-20.14Zm-16.08,39.91l1.74-20.49h8.83l-1.74,20.49h-8.83Z"></path>
                                                        <path class="cls-1" d="m291.22,134.96l.75-8.36h44.1l1.74-19.38h-79.38l-7.22,82.59h70.27c4.48,0,9.32-2.64,9.94-9.54.47-5.21,2.64-29.74,3.04-34.2.52-5.95-3.26-11.1-10.67-11.1h-32.57Zm5.69,37.67h-8.99l1.74-20.47h8.97l-1.72,20.47Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Мегафон -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="-0.9714696 -0.9714696 184.0213192 34.3252592">
                                                        <g fill="#00B956">
                                                            <path d="m 98.99175,16.35475 0,4.98125 c 0,0.185 -0.15125,0.345 -0.34625,0.345 l -3.9325,0 c -3.17625,-0.0512 -4.45125,-1.51625 -4.5,-4.70125 0.0487,-3.08625 1.18625,-4.62625 4.51875,-4.6725 l 0,0.007 8.28875,0 0,-3.41 -8.28875,0 c -5.905,0.03 -8.3375,2.54125 -8.455,7.87875 l -0.005,0.41875 0.005,0.007 c 0.12625,5.18 2.55375,7.72375 8.28875,7.80875 l 0,0.004 6.06875,0 c 1.40125,0 2.40625,-1.17 2.40625,-2.40375 l 0,-6.26375 -4.04875,0 z m 32.49387,8.6585 0,-6.63625 10.08625,0 0,-3.2925 -10.08625,0 0,-4.9725 c 0,-0.19 0.15375,-0.3475 0.3475,-0.3475 l 9.97251,0 0,-3.40875 -11.96126,0 c -1.4,0 -2.40749,1.1675 -2.40749,2.40375 l 0,16.25375 4.04874,0 z M 73.64162,21.622 c -0.1975,0 -0.3475,-0.15875 -0.3475,-0.34625 l 0,-2.88 10.0825,0 0,-3.29 -10.0825,0 0,-2.45375 c 0,-0.1875 0.15,-0.3475 0.3475,-0.3475 l 9.97375,0 0,-3.41 -11.9625,0 c -1.4025,0 -2.40999,1.1725 -2.40999,2.40625 l 0,11.325 c 0,1.2375 1.00749,2.4075 2.40999,2.4075 l 11.9625,0 0,-3.41125 -9.97375,0 z M 62.64087,5.97275 c -1.89375,0 -3.1025,1.01 -3.99874,3.04125 L 53.36962,21.159 48.09337,9.014 c -0.8975,-2.03125 -2.10625,-3.04125 -4.00125,-3.04125 -1.7725,0 -3.60374,1.26875 -3.60374,4.025 l 0,15.03625 4.04124,0 0,-14.625 5.30751,12.0425 c 0.71375,1.6825 1.86,2.73875 3.52875,2.74125 l 0.004,0 c 1.66751,-0.003 2.81626,-1.05875 3.52875,-2.74125 l 5.30625,-12.0425 0,14.625 4.04126,0 0,-15.03625 c 0,-2.75625 -1.83375,-4.025 -3.60501,-4.025 m 49.608,12.42325 2.48875,-5.85875 c 0.0787,-0.18375 0.22125,-0.2325 0.32875,-0.2325 l 0.002,0 c 0.1075,0 0.2525,0.0488 0.32875,0.2325 l 2.4925,5.85875 -5.64125,0 z m 6.14375,-7.7 c -0.67875,-1.47 -2.0275,-2.18625 -3.32375,-2.18625 l -0.002,0 c -1.2975,0 -2.64625,0.71625 -3.32,2.18625 l -6.61375,14.3375 4.3025,0 1.44125,-3.4075 8.38375,0 1.4425,3.4075 4.3025,0 -6.6125,-14.3375 z m 59.63925,-1.80113 0,10.78625 -6.94875,-9.48125 c -0.58625,-0.7375 -1.23875,-1.305 -2.58,-1.305 -1.23125,0 -2.75249,0.97375 -2.75249,2.8225 l 0,13.32625 4.0475,0 0,-10.78375 6.9175,9.5125 c 0.6025,0.82 1.225,1.27125 2.61,1.27125 1.2325,0 2.7525,-0.88375 2.7525,-2.82375 l 0,-13.325 -4.04625,0 z m -24.25175,12.95475 c -4.1325,0 -5.32124,-1.5175 -5.32124,-4.89625 l 0,-0.0175 c 0,-3.27875 1.13375,-4.89 5.32124,-4.89 4.19251,0 5.32375,1.61125 5.32375,4.89 l 0,0.0175 c 0,3.37875 -1.19124,4.89625 -5.32375,4.89625 m 9.26375,-4.91375 c -0.001,-5.65 -2.25625,-8.285 -9.26375,-8.285 -7.0025,0 -9.25875,2.635 -9.2625,8.285 l 0,0.0113 c 0,5.5625 2.31876,8.245 9.2625,8.245 6.94625,0 9.26375,-2.6825 9.26375,-8.245 l 0,-0.0113 z">
                                                            </path>
                                                            <g fill="#00B956">
                                                                <path d="m 13.08625,13.35 c -1.1175,0 -2.025,-0.90625 -2.025,-2.0225 0,-1.11875 0.9075,-2.025 2.025,-2.025 1.1175,0 2.0225,0.90625 2.0225,2.025 0,1.11625 -0.905,2.0225 -2.0225,2.0225 M 16.19,0 C 7.24625,0 0,7.2475 0,16.19 0,23.95 5.46125,30.435 12.7475,32.01375 l 0,-14.52875 10e-4,-10e-4 c 0.0163,-0.70125 0.575,-1.26625 1.27,-1.2925 l 0,-0.001 0.67375,0 1.37125,0 c 0.095,0 0.1725,-0.075 0.1775,-0.16875 L 16.242,0.0029 m 11.10475,25.01912 c -1.11625,0 -2.02375,-0.90625 -2.02375,-2.025 0,-1.115 0.9075,-2.02125 2.02375,-2.02125 1.11625,0 2.02375,0.90625 2.02375,2.02125 0,1.11875 -0.9075,2.025 -2.02375,2.025 m -4.74375,0 c -1.11625,0 -2.0225,-0.90625 -2.0225,-2.025 0,-1.115 0.90625,-2.02125 2.0225,-2.02125 1.1175,0 2.02375,0.90625 2.02375,2.02125 0,1.11875 -0.90625,2.025 -2.02375,2.025 m -4.74625,0 c -1.11625,0 -2.025,-0.90625 -2.025,-2.025 0,-1.115 0.90875,-2.02125 2.025,-2.02125 1.11875,0 2.025,0.90625 2.025,2.02125 0,1.11875 -0.90625,2.025 -2.025,2.025 m 0.33125,-24.9 0,16.0675 0,0.625 0,0.0113 -0.004,0.004 c -0.006,0.7225 -0.595,1.30625 -1.32,1.30625 l -0.6225,0 -1.37,0 c -0.1,0 -0.18,0.08 -0.18,0.17875 l 0,13.9975 c 0.49375,0.045 0.99125,0.07 1.4975,0.07 8.9425,0 16.19,-7.25 16.19,-16.1925 0,-8.26375 -6.1925,-15.0825 -14.19125,-16.0675">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Ростелеком -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 193 50" xmlns="http://www.w3.org/2000/svg">
                                                        <defs data-v-288a3998="">
                                                            <lineargradient data-v-288a3998="" name="logoShadow" id="logo-33" x1="55.883%" x2="14.167%" y1="73.973%" y2="0%">
                                                                <stop data-v-288a3998="" offset="0%" stop-color="#ff4f12"></stop>
                                                                <stop data-v-288a3998="" offset="100%" stop-color="#BA341C"></stop>
                                                            </lineargradient>
                                                        </defs>
                                                        <g data-v-288a3998="" id="logo" name="logo" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1" transform="translate(0, 0)">
                                                            <path data-v-288a3998="" name="innerSide" pid="0" d="M22,12 C13.7296802,3.99981632 9.59442802,-0.000183678141 9.59424346,0 L1.50568374,8 L1.50568374,8 C0.67361982,9.0972718 0.888613285,10.6613074 1.98588509,11.4933713 C2.41936453,11.8220799 2.94845379,12 3.49247009,12 C3.50604423,12 3.51961837,12 3.53319251,12 C9.68879501,12 15.8443975,12 22,12 Z" transform="translate(0.000000, 38.000000)" fill="#ff4f12"></path>
                                                            <path data-v-288a3998="" name="outerSide" pid="1" d="M30,18 L12,0 L1.95028875,10.4684492 C0.698836027,11.7720458 9.5486605e-15,13.5091031 9.76996262e-15,15.316172 L3.55271368e-15,46 C3.82325518e-15,48.209139 1.790861,50 4,50 L4,50 L4,50 C2.63136806,50 1.52187266,48.8905046 1.52187266,47.5218727 C1.52187266,46.8629999 1.78425529,46.2312512 2.25103343,45.7662443" fill="#7800ff"></path>
                                                        </g>
                                                        <g data-v-288a3998="" id="logo_text" name="logo_text" transform="translate(33.000000, 25.000000) scale(1)" fill="#101828" fill-rule="evenodd">
                                                            <polygon data-v-288a3998="" points="125.272633 6.17408992 120.944198 6.17408992 115.773594 11.4029891 115.773594 6.17408992 112.113191 6.17408992 112.113191 20.582524 115.773594 20.582524 115.773594 14.6275473 121.031516 20.582524 125.44702 20.582524 118.649377 12.8553922">
                                                            </polygon>
                                                            <path data-v-288a3998="" d="M9.12153798,9.91461705 L3.83434419,9.91461705 L3.83434419,3.52379535 L9.12153798,3.52379535 C11.7939101,3.52379535 13.0141271,4.80181085 13.0141271,6.71908217 C13.0141271,8.63635349 11.7939101,9.91461705 9.12153798,9.91461705 M9.23763101,0.0958263566 L4.96124031e-05,0.0958263566 L4.96124031e-05,20.430462 L3.83434419,20.430462 L3.83434419,13.342338 L9.23763101,13.342338 C13.8275225,13.342338 16.8486698,10.9894698 16.8486698,6.71908217 C16.8486698,2.44869457 13.8275225,0.0958263566 9.23763101,0.0958263566">
                                                            </path>
                                                            <path data-v-288a3998="" d="M25.5039256,17.5614264 C23.3544682,17.5614264 21.3498791,16.0217054 21.3498791,13.3781085 C21.3498791,10.7347597 23.3544682,9.19528682 25.5039256,9.19528682 C27.653631,9.19528682 29.6579721,10.7347597 29.6579721,13.3781085 C29.6579721,16.0217054 27.653631,17.5614264 25.5039256,17.5614264 M25.5039256,5.76731783 C21.5532899,5.76731783 17.6314295,8.32384496 17.6314295,13.3781085 C17.6314295,18.4331163 21.5532899,20.9891473 25.5039256,20.9891473 C29.4548093,20.9891473 33.3764217,18.4331163 33.3764217,13.3781085 C33.3764217,8.32384496 29.4548093,5.76731783 25.5039256,5.76731783">
                                                            </path>
                                                            <path data-v-288a3998="" d="M42.7212403,17.5614264 C40.5134884,17.5614264 38.8866977,15.9636589 38.8866977,13.3781085 C38.8866977,10.8218295 40.5715349,9.19528682 42.7212403,9.19528682 C44.0285271,9.19528682 45.1614264,9.80527132 46.0618915,11.1706047 L49.1991318,9.36942636 C48.1535504,7.1324031 45.8875039,5.76731783 42.7502636,5.76731783 C38.6542636,5.76731783 35.1682481,8.78846512 35.1682481,13.3781085 C35.1682481,17.968 38.480124,20.9891473 42.7502636,20.9891473 C45.8294574,20.9891473 47.891845,19.5950388 49.3444961,17.1258295 L46.3233488,15.4700155 C45.451907,16.6899845 44.5221705,17.5614264 42.7212403,17.5614264">
                                                            </path>
                                                            <path data-v-288a3998="" d="M81.6933953,14.3371659 C81.5192558,16.5446698 81.0829147,17.0388093 80.3275659,17.0388093 C79.8115969,17.0388093 79.5689922,16.981507 79.2157519,16.8889798 L79.2341085,20.6178481 C79.2341085,20.6178481 79.6890543,20.7567628 80.5314729,20.7567628 C83.6396899,20.7567628 84.8016124,18.7524217 85.0923411,14.4822822 L85.4408682,9.4567938 L89.5656434,9.4567938 L89.5656434,20.5536 L93.2260465,20.5536 L93.2260465,6.17418915 L82.3033798,6.17418915 L81.6933953,14.3371659 Z">
                                                            </path>
                                                            <path data-v-288a3998="" d="M67.3025488,11.4612093 C67.8254636,9.8344186 69.2778667,8.55615504 71.195138,8.55615504 C73.2287504,8.55615504 74.5940837,9.66003101 74.9426109,11.4612093 L67.3025488,11.4612093 Z M71.3114791,5.76744186 C67.1284093,5.76744186 63.7294636,8.8176124 63.7294636,13.3782326 C63.7294636,17.9391008 67.1284093,20.9892713 71.1370915,20.9892713 C74.3036031,20.9892713 76.3079442,19.7983256 77.7603473,17.3291163 L74.855293,15.8767132 C73.9548279,17.0096124 73.1414326,17.8517829 71.195138,17.8517829 C69.0456806,17.8517829 67.4769364,16.4576744 67.2445023,14.2499225 L78.3413085,14.2499225 L78.3413085,12.9716589 C78.3413085,8.75956589 75.4365023,5.76744186 71.3114791,5.76744186 L71.3114791,5.76744186 Z">
                                                            </path>
                                                            <path data-v-288a3998="" d="M98.848124,11.4612093 C99.3710388,9.8344186 100.823442,8.55615504 102.740713,8.55615504 C104.774078,8.55615504 106.139411,9.66003101 106.488186,11.4612093 L98.848124,11.4612093 Z M102.857054,5.76744186 C98.6737364,5.76744186 95.2750388,8.8176124 95.2750388,13.3782326 C95.2750388,17.9391008 98.6737364,20.9892713 102.682667,20.9892713 C105.84893,20.9892713 107.853271,19.7983256 109.305922,17.3291163 L106.401116,15.8767132 C105.500403,17.0096124 104.687008,17.8517829 102.740713,17.8517829 C100.591008,17.8517829 99.0222636,16.4576744 98.7900775,14.2499225 L109.886884,14.2499225 L109.886884,12.9716589 C109.886884,8.75956589 106.981829,5.76744186 102.857054,5.76744186 L102.857054,5.76744186 Z">
                                                            </path>
                                                            <polygon data-v-288a3998="" points="50.4830512 9.36940155 54.782462 9.36940155 54.782462 20.5825488 58.442369 20.5825488 58.442369 9.36940155 62.7420279 9.36940155 62.7420279 6.17411473 50.4830512 6.17411473">
                                                            </polygon>
                                                            <path data-v-288a3998="" d="M132.713898,17.5615504 C130.564192,17.5615504 128.559851,16.0218295 128.559851,13.3782326 C128.559851,10.7348837 130.564192,9.19541085 132.713898,9.19541085 C134.863603,9.19541085 136.867944,10.7348837 136.867944,13.3782326 C136.867944,16.0218295 134.863603,17.5615504 132.713898,17.5615504 M132.713898,5.76744186 C128.763262,5.76744186 124.841402,8.32372093 124.841402,13.3782326 C124.841402,18.4329922 128.763262,20.9892713 132.713898,20.9892713 C136.664533,20.9892713 140.586394,18.4329922 140.586394,13.3782326 C140.586394,8.32372093 136.664533,5.76744186 132.713898,5.76744186">
                                                            </path>
                                                            <polygon data-v-288a3998="" points="155.150313 6.17136124 151.177848 16.262276 147.205135 6.17136124 142.421011 6.17136124 142.421011 20.5537488 145.900329 20.5537488 145.900329 11.4486326 149.756949 20.5537488 152.598747 20.5537488 156.455119 11.4486326 156.455119 20.5537488 159.934685 20.5537488 159.934685 6.17136124">
                                                            </polygon>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- UGMK -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <?xml version="1.0" encoding="UTF-8"?>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 550.03 204">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #89211b;
                                                                }
                                                                .cls-1,
                                                                .cls-2,
                                                                .cls-3,
                                                                .cls-4,
                                                                .cls-5 {
                                                                    fill-rule: evenodd;
                                                                }
                                                                .cls-2 {
                                                                    fill: #1f1a17;
                                                                }
                                                                .cls-3 {
                                                                    fill: #eb891b;
                                                                }
                                                                .cls-4 {
                                                                    fill: #c9501a;
                                                                }
                                                                .cls-5 {
                                                                    fill: #fee215;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <g>
                                                            <path id="_181712744" data-name=" 181712744" class="cls-2" d="m132.5,181.98c2.95-4.53,14.36-19.09,6.2-20.63-4.08-.56-14.4,2.53-23.95,3.67-20.4,2.52-43.87,1.29-62.82-7.51-.28-.14-.3-.27-.07-.42,2.03-1.13,10.45-.18,10.07-4.45-.26-2.87-3.52-4.93-5.53-6.52-15.16-12.02-28.29-28.47-31.99-47.89-4.48-23.51,5.75-47.69,20.32-65.76.25-.27.72-.08,1.29.35,8.03,4.47,13.64,2.69,18.07,1.66,31.55-9.3,45.22-13.71,77.69-13.28.68,0,10.55.2,9.59,1.08-.98.9-6.57,3.34-8.68,4.2-2.97,1.2-8.34,3.26-11.59,5.01-5.39,2.9-13.15,7.84-3.46,10.74,30.38,8.78,52.69,17.88,70.09,46.36.33.55.28.78-.4.55-9.42-3.12-10.55-2.07-10.55,8.16.21,3.58.36,7.12.35,10.68-.06,23.91-11.01,44.29-29.32,59.75-7.54,6.36-16,11.52-24.67,14.9-.93.34-1.24.27-.63-.65h0Zm-31.65-35.7c-17.59.68-31.77-15.67-43.72-31.49-.16-.37-2.58-3.85-2.1-4.89,4.47-13.92,8.75-17.81,13.03-28.21,3.14-7.17,20.42-23.27,28.09-22.29,0,.22,0,.49.04.75-10.76,8.94,1.79,5.93,8.97,4.78,15.33-1.19,28.74-.27,42.81,7.65,2.91-.59,10.06,9.89,9.74,10.59-1.18,1.19-8.48-1.95-8.88.52,1.92,3.85,3.46,6.78,5.42,10.68,5.25,13.92,4.85,23.99-2.51,36.71-.41.72-2.09,3.6-2.81,2.87-1.75-1.77-.43-5.91-1.12-7.19-.45-.83-.07-.68-.73-.18-5.33,4.06-11.16,7.82-16.99,11.1-9.1,4.73-19.12,8.61-29.22,8.61h0Z"></path>
                                                            <path id="_181712672" data-name=" 181712672" class="cls-1" d="m146.69,173.43c5.9-5.35,14.74-23.22,9.55-24.61-1.87-.47-3.6.65-6.48,2.04-3.95,1.89-8.77,4.79-14.22,6.66-13.54,4.6-26.55,6.85-39.34,7.08-5.51.1-10.78-.37-15.91-.98-3.65-.68-4.38-1.03-.14-1.68,7.7-.98,25.11-6.54,15.41-8.64-3.89-.78-4.95-.9-8.55-1.83-25.96-6.23-51.16-21.88-58.93-47.56-8-26.43,4.14-52.1,15.51-66.71-.27,4.98-.96,14.39,10.11,7.78,20.12-12.38,37.83-19.16,61.72-22.32,8.2-1.08,16.18-1.39,24.46-1.32,2.19.02,4.32.06,6.15.15,3.15.16,5.16.47,5.12.66,0,.13-.14.25-.5.43-1.96.98-4.04,1.81-6.08,2.6-13,5.06-48.82,18.4-22.86,20.85,21.74,2.57,41.93,8.56,58.1,23.5,2.24,1.79,4.78,5.01,4.61,5.31,0,.01-1.59-.86-2.75-1.4-5.94-2.99-22.19-7.09-13.94,1.3,29.85,31.7,15.03,75.29-20.9,98.87-1.09.72-1.13.68-.13-.18h0Zm19.6-112.03s0,0,.01-.01c-.17-.09-.35-.19-.52-.28.17.09.34.19.51.29h0Zm-60.85,83.32c2.08.29,4,.47,6.6-.15,13.22-3.16,24.77-11.17,32.45-18.09,6.1-5.65,6.3,3.26,6.22,6.3.02.7.37.6.83.04,1.94-2.4,4.15-11.28,4.86-14.82,2.52-12.69-1.88-21.46-8.04-32.11-4.7-7.58,5.59-5.64,8.76-4.18,1.89.87,1.65.95.05-.53-14.72-13.64-35.51-17.51-54.98-15.07-2.84.35-7.26,1.23-8.54.99-3.95-.86-.39-5.45,1.87-7.34-6.29,2.47-11.86,6.12-16.5,9.81-8.86,7.05-14.03,18.22-17.21,29.46l-4.68,14.48c-.16.42-.07.93.4,1.26,24.66,15.92,37.83,28.07,47.92,29.94h0Z"></path>
                                                            <path id="_181711352" data-name=" 181711352" class="cls-4" d="m148.35,23.3c-17.25,6.45-34.62,11.31-49.65,21.29-2.57,1.82-4.2,3.48-.01,3.08,28.81-2.94,55.62,2.96,78.47,20.65,1.6,1.23,1.48,1.14-.32.36-7.09-3.07-12.71-5.15-21.1-7.24-10.61-2.65-18.4-2.92-4.39,6.24,15.63,10.21,26.82,23.27,28.66,43.1.24,2.54.32,5.19.24,7.96-.06,1.05-.15,2.1-.28,3.15-1.67,18.64-12.38,33.21-25.8,45.33-3.39,3.07-3.67,3.01-.45-.37,7.42-7.78,12.45-17.48,15.46-27.95,3.75-13.03,1.81-25.07-2.45-24.16-1.19.25-1.84,1.86-2.77,4.28-2.46,6.42-5.71,11.26-10.15,16.45-10.28,12.01-26.61,18.78-42.14,23.89,3.47-.33,10.14-2.83,13.91-4.19,16.08-6.63,26.22-12.88,36.1-25.91,1.45-1.96,1.08-.49-.35,1.77-8.07,13.47-24.16,24.25-46.66,29.49-7.65,1.73-15.89,1.96-23.73,2.36-5.3.27-5.59.03-.1-.84,9.14-1.44,17.76-3.51,25.63-8.79,3.74-2.51.46-2.52-1.35-2.35-11.84,1.07-22.98.4-34.48-2.67-31.74-9.92-55.75-31.16-53.32-66.4,1.16-14.78,7.24-29.07,12.63-37.99-.87,2.62-2.68,10.14-2.89,16.32-.2,5.94.65,9.21,3.23,5.68,1-1.39,1.75-2.34,2.8-3.66,21.4-26.78,54.72-37.55,88.8-39.71,10.91-.81,14.68-.59,17.12-.34,2.61.26.95.48-.65,1.17Zm4.93,58.88c1.2.22,2.58.63,3.45.92.46.09-15.82-22.54-56.91-17.93-9.28.88-4.4-4.56,1.23-6.49,3.06-1.02,4.14-1.4-.24-.39-2.01.47-3.96,1.12-5.89,1.82-18.79,8.39-29.32,21.45-35.37,40.02-.53,1.87-1.81,5.24-2.89,8.45-.88,2.2-1.33,6.82-4.64-2.16.2,2.07,1.44,5.68,3.15,8.39.15.28.45.58.96.99,7.98,6.44,16.66,11.65,27.67,19.27,1.99,1.63,8.62,5,11.99,7.43,1.35,1.06.24,1.48-1.73,1.59-2.04.11-3.76-.21-5.74-.66-15.84-3.63-30.99-11.72-42.49-23.2.43.54.88,1.08,1.33,1.6,2.9,3.19,6.09,6.1,9.5,8.68,6.14,4.57,13.16,8.24,19.9,10.67,6.59,2.32,13.49,3.69,20.43,4.04-.18.03-.39.06-.64.07,11.53.52,20.08-1.43,28.62-5.28,5.38-2.43,10.38-5.48,15.57-9.54,1.59-1.2,6.13-5.23,7.36-4.55,1.26.7.85,4.65,1.01,7.08.02.48.42.61.73.23,3.64-4.42,5.45-9.78,6.72-14.65,2.53-12.69-.17-21.09-6.45-31.66-2.84-4.77-.86-5.54,3.34-4.78h0Z"></path>
                                                            <path id="_181711328" data-name=" 181711328" class="cls-3" d="m44.69,118.96c18.91,23.37,52.64,32.88,80.24,21.71,2.5-.98,12.38-5.87,16.14-9.18,4.32-3.7,6.19-3.94,5.96-1.24-.41,4.88-2.72,9.01-6.04,12.51,7.62-5.15,14.05-11.84,17.04-23.57,2.62-10.14-.43-23.25-6.26-31.94-2.06-3.17-1.93-4.12-.14-3.95,7.1.67,12.31,4.83,15.92,10.62,6.66,10.68,8.18,27.04,5.69,37.27-1.21,4.96-1.42,5.48-.77.2,1.09-8.8,1.52-19.84-4.77-27.94-4.45-4.06-4.15,2.77-4.99,8.02-2.5,23.01-22.87,35.33-39.56,42.78l.05-.03c-1.7.75-3.37,1.43-4.96,2.05-.85.35-1.71.58-.14-.33,5.58-3.27,12.32-8.11,11.49-9.93-1.07-1.55-11.32,2.59-23.86,2.91-28.57.45-52.81-8.25-69.13-32.92-11.18-17.94-9.28-41.65-2.93-57.43,3.62-8.99.37,2.63-.16,6.2-2.9,19.57-.09,37.92,11.21,54.21Zm11.94-.84l.22-.3,26.35,18.53,6.51,4.51c1.56.9,1.2,1.29-1.19.6-11.77-3.41-22.32-11.72-31.9-23.34ZM148.32,22.55c.37.05.35.23-.8.67-17.72,5.47-38.62,10.91-55.91,18.88-10.33,4.76-18.51,10.12-25.88,18.83-22.08,26.11-21.35,58.3,9.81,77.75.27.18.94.71.25.44-32.9-14.46-51.34-50.01-24.33-81.66,26.52-28.68,66.52-34.57,96.86-34.92h0Zm-52.29,20.52c-4.94,2.49-11.02,6.5-14.29,10.12-1.6,1.98-.96,2.41,2.83.79,26.24-10.18,56.89-3.87,78.71,6.35,5.2,2.53,4.73,3.15-.61,1.05-11.83-4.77-50.83-8.87-25.84,1.46,3.85,1.59,7.54,3.38,11.01,5.36,19.92,11.39,32.86,29.35,30.44,55.08-.12,5.49-4.52,17.96-9.26,24.87-2.94,4.59-3.04,4.44-.7-.13,8.91-17.7,10.97-35.31,1.81-53.32-5.48-10.77-14.27-19.15-25.46-24.61-5.62-2.74-11.85-4.74-18.57-5.94-7.49-1.33-17.2-1.04-24.71-.64-3.89.21-4.66-.53-2.46-2.39,2.31-1.9,10.03-5.06,20.7-5.18,1.22.03,5.05.12,4.14-.13-34.97-1.06-54.75,14.55-64.47,38.82-1.62,4.05-2.73,8.02-3.71,12.24-.11.46-.77,2.43-.96,2.41-.22.08-1.13-1.48-1.29-1.91-.79-2.06-1.33-4.83-1.38-7.01-.57-25.21,19.98-50.24,44.08-57.26h0Z"></path>
                                                            <path id="_181711184" data-name=" 181711184" class="cls-5" d="m101.23,62.53c-2.38.34-2.84-1.16.6-1.67,39.07-4.59,70.23,18.96,73.83,44.62-7.68-30.02-37.95-47.13-74.43-42.95Zm-67.1-3.44c-4.73,18.39-3.7,32.62.87,48.52-7.28-14.95-6.73-35.04-.87-48.52Zm8.66,35.98c-2.61-49.14,57.8-70.32,100.17-71.63,2.47-.18,2.69-.11-.26.67-22.33,5.01-54.23,12.29-75.03,29.7-11.38,9.52-20.25,25.58-21.04,40.85-.66,12.74,3.89,21.87,11.85,31.38-9.2-7.78-15.05-18.67-15.7-30.96Zm13.9-7.94c9.6-29.24,37.17-39.98,73.75-35.09-39.79-3.39-61.59,9-72.16,35.44-.95,2.39-1.68,4.64-2.23,7-.56,2.44-.99,4.96-1.34,7.44-.33,2.35-.26,3.97-.43,4.01-.22.05-.26-2.71,0-6.43.38-4.18,1.09-8.35,2.41-12.36h0Zm53.89,58.88c4.6-.95,9.33-2.05,10.84-2.58,10.76-3.73,17.12-7.58,22.15-11.78,1.19-1.22,3.12-1.69,1.12,1.1-5.04,5.64-15.87,9.85-23.47,11.98-3.66,1.07-11.62,2.66-17.37,2.91-21.62,1.3-40.56-6.66-49.58-14.2,2.19,1.38,25.38,17.61,56.31,12.57h0Zm-43.62-19.5l.12-.14,13.11,9.23,3.24,2.25c.78.45.51.79-.62.26-5.65-2.66-10.9-6.49-15.85-11.6h0Zm90.49-1.78c4.83-13,2.64-26.5-5.28-38.96-.87-1.18.24-1.89,1.93-.27,7.73,7.77,9.88,28.1,3.35,39.23h0Z"></path>
                                                        </g>
                                                        <g>
                                                            <path id="_181711160" data-name=" 181711160" class="cls-2" d="m366.94,45.87c9.29,0,18.41,0,27.69,0l15.63,34.67,15.63-34.7c9.34,0,18.53.03,27.88.03v52.42h-14.52v-37.84h-4.15l-16.92,37.84h-15.81l-16.92-37.84h-3.97v37.84h-14.52c0-17.48-.02-34.91-.02-52.36h.02v-.06h0Zm94.62.01h14.56v19.38h8.42l20.59-19.38h21.56l-29.67,26.03,29.51,26.41h-21.56l-20.43-19.36h-8.42v19.36h-14.56v-52.44h0Zm-244.36,37.97c9.51,0,40.3,0,49.61,0,.2.01.41,0,.61-.05,1.37-.23,2.43-1.42,2.43-2.86v-7.04c-11.04,0-26.69,0-37.45,0-.24,0-.49,0-.73,0-7.38,0-13.51-5.56-14.39-12.71-.13-.8-.13-1.64-.09-2.45v-12.73h15.01v9.45c0,.4,0,.8.02,1.2.03,1.62,1.43,2.94,3.03,2.85,9.25,0,24.8,0,34.57,0l-.03-13.59h15.05l-.02,37.14c.03.66.01,1.8-.09,2.45-.88,7.15-7.01,12.71-14.39,12.71-.24,0-.49,0-.73,0-10.8,0-41.59,0-52.39,0v-14.38h0Zm75.92,14.39h14.98l.02-34.05c0-.75-.05-1.59.3-2.28.48-.96,1.48-1.63,2.59-1.63.05,0,.1,0,.15,0,9.28,0,40.1,0,49.58,0v-14.4c-10.79,0-41.64,0-52.43,0-.11,0-.22,0-.34,0-.13,0-.26,0-.39,0-7.38,0-13.51,5.57-14.4,12.72-.06.38-.09.75-.09,1.11v.03c0,.22-.02.43-.02.65s0,.45.02.67l.02,37.17h0Z"></path>
                                                            <path id="_181711136" data-name=" 181711136" class="cls-3" d="m477.27,131.9v7.48c0,.29,0,.58,0,.87.03,1.51,1.34,2.76,2.83,2.68,9.28,0,20.97,0,30.24,0,1.52.01,2.83-1.17,2.83-2.72v-1.67h13.48v3.67c.06,1.25-.05,2.38-.33,3.6-1.25,5.4-5.72,9.67-11.26,10.46-.86.12-1.72.14-2.58.14-11.55,0-23.1,0-34.65,0-1.24,0-2.44-.06-3.65-.33-5.49-1.25-9.73-5.87-10.43-11.56-.12-.75-.12-1.53-.09-2.29v-10.3s0-9.82,0-9.82c-.03-.75-.03-1.55.09-2.29.73-5.9,5.26-10.66,11.04-11.69,1.01-.18,2.02-.21,3.04-.21,11.55,0,23.1,0,34.65,0,.71,0,1.41,0,2.11.08,5.93.63,10.74,5.15,11.84,10.95.2,1.05.23,2.01.22,3.16v3.37h-13.48v-1.37c0-.62-.2-1.18-.55-1.64-.52-.68-1.42-1.1-2.27-1.08-9.28,0-20.97,0-30.24,0-.18,0-.35,0-.52.04-1.27.18-2.25,1.26-2.31,2.55-.01.26,0,.52,0,.78v7.19h0Zm-75.95-24.13l14.54,32.12,14.53-32.08h26.06v48.54h-13.55v-35.11h-3.88l-15.79,35.11h-14.76l-15.79-35.11h-3.7v35.11h-13.55c0-16.21-.02-32.4-.02-48.59h25.9s0,.01,0,.01Zm-88.04,0l14.54,32.12,14.53-32.08h26.06v48.54h-13.55v-35.11h-3.88l-15.79,35.11h-14.76l-15.79-35.11h-3.7v35.11h-13.55c0-16.21-.02-32.4-.02-48.59h25.9Zm-96.11,0h13.58l-.02,31.89c-.05,1.63.8,3.21,2.84,3.31,9.28,0,20.96,0,30.24,0,1.51.08,2.83-1.21,2.83-2.71v-32.5h13.5l.02,34.48c.02.41.02.81,0,1.22v.03c0,.34-.03.69-.09,1.03-.82,6.65-6.53,11.83-13.41,11.83h-36.01c-6.88,0-12.58-5.18-13.41-11.83-.06-.35-.09-.69-.09-1.03v-.03c-.02-.41-.02-.81,0-1.22,0,0,.01-34.47.01-34.47Z"></path>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Т+ групп -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 588.8 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #f15a22;
                                                                }
                                                                .cls-2 {
                                                                    fill: #65737f;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="m204.38,56.36c.08.22.04.44.04.66,0,10.94,0,21.89,0,32.83,0,.48-.05.97.08,1.44.27.99.87,1.61,1.9,1.77.84.12,1.69.13,2.53.12,7.14-.1,14.27-.04,21.41-.05,3.31,0,6.61.02,9.92.03.18,0,.36.01.54,0,.28-.02.42.08.4.38-.01.14,0,.28,0,.42,0,7.64,0,15.28,0,22.92,0,.06,0,.12,0,.18,0,.59,0,.59-.6.59-4.17,0-8.35,0-12.52,0-7.42,0-14.84.05-22.26,0-5.87-.04-11.07-2.04-15.68-5.64-1.01-.79-1.93-1.68-2.83-2.59-.92-.93-1.73-1.95-2.51-2.99-.58-.77-1.04-1.61-1.52-2.44-.52-.91-1.01-1.85-1.39-2.82-.63-1.61-1.13-3.26-1.47-4.95-.41-2-.59-4.02-.59-6.07,0-11.02,0-22.05,0-33.07,0-.24-.01-.48-.02-.72,8.19,0,16.37,0,24.56,0Z"></path>
                                                        <path class="cls-1" d="m313.64,56.36c-.08.26-.04.52-.04.78,0,10.86-.01,21.73-.01,32.59,0,.5-.03,1.01.04,1.51.14,1.02.67,1.57,1.69,1.77.7.14,1.4.2,2.1.17,3.41-.15,6.81,0,10.22-.02,5.71-.04,11.41-.04,17.12.02,1.61.02,3.23,0,4.83-.15.06,0,.12,0,.18-.01.28-.05.39.06.4.36.02.81.1,1.61.11,2.42.04,2.32.02,4.64-.03,6.95-.04,1.59-.06,3.18.04,4.77.1,1.65.04,3.3,0,4.96-.04,1.55-.06,3.1.02,4.65.03.49.02.5-.48.5-2.46,0-4.92.02-7.38.02-7.7,0-15.4,0-23.11-.01-.06,0-.12,0-.18,0-.47-.01-.48-.01-.51-.46-.06-.76-.15-1.52-.27-2.28-.75-4.73-2.5-9.07-5.19-13.02-.61-.9-1.25-1.79-1.99-2.59-.57-.62-1.04-1.33-1.73-1.83-.37-.27-.6-.7-.95-1-.97-.82-1.89-1.71-2.94-2.44-.72-.5-1.43-.99-2.18-1.44-.96-.58-2.01-1-2.99-1.54-.79-.43-1.6-.82-2.44-1.11-.71-.24-1.41-.48-2.13-.7-1.11-.35-2.24-.63-3.38-.85-1.03-.21-2.06-.37-3.11-.44-.31-.02-.45-.12-.41-.43,0-.08,0-.16,0-.24,0-10.12,0-20.24,0-30.36,0-.18.01-.36.02-.54,8.23,0,16.46,0,24.68,0Z"></path>
                                                        <path class="cls-2" d="m445.65,214.21c-.17.3-.1.63-.12.94-.17,2.32-.54,4.6-1.42,6.77-.86,2.12-2.18,3.85-4.27,4.9-1.05.52-2.17.85-3.33,1.03-1.11.17-2.23.3-3.37.28-1.9-.03-3.71-.42-5.47-1.13-1.65-.67-3.06-1.68-4.35-2.94-.16.21-.09.43-.09.63,0,4.82,0,9.63,0,14.45,0,.9.1.79-.82.79-.99,0-1.98,0-2.96,0-.71,0-.64.02-.64-.67,0-.04,0-.08,0-.12,0-14.89,0-29.78,0-44.68,0-.89-.11-.79.82-.79,1.01,0,2.02,0,3.02,0,.58,0,.58,0,.58.61,0,.67,0,1.33,0,2,0,.11-.04.24.09.36.47-.38.94-.76,1.41-1.13,1.58-1.26,3.39-2.01,5.34-2.43,2.26-.48,4.53-.41,6.78,0,1.23.22,2.42.63,3.53,1.27,1.77,1.01,2.87,2.56,3.65,4.37,1.01,2.36,1.39,4.86,1.51,7.41.01.24-.02.49.11.71v7.38Zm-22.41-3.82h-.02c0,3.57.01,7.13-.01,10.7,0,.47.14.71.56.93,2.5,1.3,5.17,1.88,7.96,1.97,1.33.04,2.65-.13,3.97-.32,2.09-.31,3.58-1.31,4.25-3.42.52-1.65.78-3.34.84-5.05.12-3.6.18-7.21-.1-10.81-.1-1.24-.32-2.47-.71-3.66-.59-1.8-1.75-3.05-3.65-3.4-2.9-.53-5.81-.55-8.71.09-1.24.27-2.41.74-3.59,1.2-.55.22-.82.53-.82,1.19.04,3.52.02,7.05.02,10.58Z"></path>
                                                        <path class="cls-2" d="m179.84,160.17c0-13.41,0-26.81,0-40.22,0-1.38-1.19-2.26-2.33-2.27-.99-.01-1.98,0-2.96,0-10.2,0-20.41,0-30.61,0-.84,0-.79.09-.79-.77,0-7.68,0-15.36,0-23.04q0-.79.78-.79c9.98.1,19.96.1,29.94.04.79,0,.77-.17.88.8.35,3.28,1.15,6.46,2.45,9.5,3.13,7.34,8.36,12.73,15.44,16.34,3.19,1.62,6.58,2.6,10.13,2.98.34.04.68.04,1.03.07.57.05.57.05.57.6,0,.24,0,.48,0,.73.12,25.08,0,50.15.05,75.23,0,.88.12,1.68.77,2.33.36.36.78.56,1.28.58.32.01.64,0,.97,0,10.99,0,21.98,0,32.97,0,.88,0,.79-.11.79.82,0,7.7,0,15.4,0,23.1,0,.84.08.76-.73.76-11.37,0-22.75-.01-34.12,0-1.81,0-3.61-.13-5.36-.54-2.83-.67-5.54-1.69-8.05-3.21-.98-.59-1.94-1.2-2.83-1.91-1.22-.97-2.38-2.01-3.42-3.17-1.1-1.22-2.06-2.53-2.92-3.92-.47-.76-.82-1.59-1.25-2.37-.36-.66-.68-1.34-.9-2.06-.24-.78-.57-1.53-.78-2.31-.32-1.16-.5-2.37-.66-3.56-.27-1.98-.34-3.97-.34-5.97.01-12.58,0-25.16,0-37.74h0Z"></path>
                                                        <path class="cls-2" d="m313.61,135.21c0,5.68,0,11.37,0,17.05,0,.65-.05,1.29-.17,1.92-.09.48-.1.49-.58.48-1.39,0-2.78-.03-4.17-.03-6.31,0-12.62,0-18.94,0-.06,0-.12,0-.18,0-.59,0-.6,0-.6-.6-.01-5.73-.02-11.45-.03-17.18,0-5.5,0-11.01,0-16.51,0-1.69-1.02-2.69-2.72-2.69-3.43,0-6.86,0-10.28,0-7.66,0-15.33,0-22.99,0-.82,0-.74.08-.74-.75,0-7.64,0-15.28,0-22.92,0-.73,0-.73.73-.78,1.99-.12,3.99-.07,5.99-.07,3.61,0,7.22.08,10.83-.01,1.9-.05,3.79-.04,5.68.07.83.05,1.65.02,2.48-.05.62-.06,1.25-.07,1.87-.05,2.46.08,4.92-.02,7.38.04,3.7.08,7.26.8,10.64,2.36,5.55,2.57,9.75,6.56,12.65,11.93,1.77,3.29,2.75,6.81,2.98,10.54.12,1.91.18,3.82.17,5.74,0,3.83,0,7.66,0,11.49h0Z"></path>
                                                        <path class="cls-2" d="m311.16,197.53c.05.22.24.32.37.46.66.68,1.26,1.41,1.8,2.2,1.59,2.29,2.03,4.82,1.58,7.55-.24,1.47-.7,2.86-1.59,4.07-1.2,1.63-2.88,2.54-4.76,3.13-1.76.55-3.58.76-5.42.84-2.71.12-5.4,0-8.06-.55-.2-.04-.4-.1-.43.23-.07.9-.22,1.8-.16,2.71.09,1.34.48,1.85,1.78,2.25,1.07.33,2.18.4,3.28.46,2.15.11,4.31.07,6.47.13,1.86.06,3.7.23,5.5.72.49.13.96.29,1.44.45,2.35.76,3.67,2.45,4.29,4.76.35,1.3.32,2.63.3,3.96-.01.93-.13,1.85-.35,2.75-.69,2.76-2.48,4.54-5.05,5.61-1.44.6-2.97.87-4.5,1.1-2.75.42-5.51.28-8.27.24-1.42-.02-2.85-.22-4.25-.55-.35-.08-.71,0-1.04-.18-.52-.27-1.1-.36-1.64-.61-.37-.17-.8-.24-1.12-.52-.57-.5-1.21-.9-1.74-1.47-1.17-1.26-1.47-2.81-1.59-4.42-.09-1.15,0-2.31.3-3.42.22-.82.67-1.58,1.19-2.27.81-1.09,1.81-2,2.91-2.79.16-.12.33-.23.49-.36.03-.02.03-.07.06-.14-.36-.24-.7-.53-1.09-.71-.77-.37-1.08-1.09-1.48-1.76-.37-.62-.31-1.3-.34-1.97-.02-.66.16-1.28.45-1.86.34-.68.8-1.28,1.33-1.84.39-.41.87-.69,1.28-1.06,0-.13-.08-.17-.17-.21-1.45-.67-2.53-1.74-3.39-3.08-.23-.36-.38-.72-.51-1.12-.74-2.16-.9-4.38-.78-6.63.09-1.72.5-3.39,1.24-4.95.59-1.25,1.52-2.22,2.66-2.98,1.36-.91,2.87-1.39,4.47-1.67.99-.17,2-.23,3.01-.25,4.43-.1,8.87-.11,13.3-.07,1.63.02,3.26.05,4.9.08.49,0,.49.01.47.52-.03.87-.07,1.73-.17,2.59-.06.56-.06.56-.62.56-1.92,0-3.83,0-5.75.02-.19,0-.4-.06-.59.07Zm-7.81-.13c-1.67.04-3.34.07-5.02.13-.93.03-1.84.23-2.69.62-1.3.59-2.14,1.53-2.35,2.99-.09.66-.21,1.31-.27,1.97-.18,1.9-.06,3.78.48,5.62.18.6.5,1.09.94,1.52.46.44,1,.74,1.59.96.7.26,1.44.39,2.18.47,2.27.23,4.55.17,6.82-.02.88-.07,1.76-.21,2.59-.57,1.23-.53,2.05-1.39,2.31-2.74.13-.65.25-1.31.3-1.97.22-2.87-.18-5.66-1.13-8.38-.19-.54-.15-.46-.68-.48-1.69-.09-3.38-.09-5.08-.11Zm-.67,39.09c1.03,0,2.06-.09,3.08-.16,1.31-.09,2.59-.32,3.84-.76,1.63-.57,2.58-1.74,2.97-3.38.26-1.07.16-2.16.05-3.24-.05-.46-.16-.91-.32-1.35-.37-.98-1.03-1.67-2.04-2-.71-.23-1.43-.4-2.17-.5-1.26-.18-2.53-.17-3.8-.19-2.4-.04-4.8-.01-7.18-.3-.76-.09-1.52-.17-2.28-.23-.52-.04-.52-.03-.69.44-.18.53-.37,1.06-.53,1.6-.49,1.67-.85,3.37-.65,5.12.29,2.56,1.04,3.63,3.6,4.38.12.03.23.06.35.08,1.91.37,3.84.39,5.77.5Z"></path>
                                                        <path class="cls-2" d="m347.57,210.31c.05-1.8.02-3.51.17-5.22.12-1.41.37-2.79.67-4.17.19-.91.6-1.72.93-2.56.25-.64.75-1.17,1.1-1.77.38-.64.93-1.07,1.51-1.52.65-.5,1.32-.99,2.08-1.23,1-.33,2.02-.64,3.08-.78,2.93-.38,5.87-.4,8.8.01,1.67.24,3.27.75,4.7,1.69,1.15.76,2.02,1.78,2.7,2.97.92,1.64,1.4,3.42,1.69,5.26.5,3.24.64,6.5.48,9.77-.12,2.44-.33,4.87-.96,7.24-.28,1.03-.67,2.02-1.17,2.97-1.33,2.5-3.46,3.93-6.16,4.55-2.97.69-5.98.79-9.01.42-.86-.11-1.71-.25-2.55-.47-3.18-.81-5.35-2.75-6.55-5.81-.61-1.55-.97-3.15-1.18-4.8-.28-2.2-.27-4.42-.31-6.55Zm23.03.23c0-1.35.03-2.7,0-4.05-.05-2.02-.24-4.02-.93-5.94-.73-2.03-2.22-3.14-4.32-3.37-2.55-.28-5.11-.26-7.66,0-2.14.21-3.83,1.59-4.44,3.63-.41,1.36-.66,2.75-.73,4.15-.19,3.99-.28,7.97.09,11.96.11,1.2.32,2.4.71,3.55.56,1.68,1.69,2.75,3.46,3.1.55.11,1.11.19,1.67.26,2.6.34,5.19.24,7.76-.25,1.73-.33,2.87-1.38,3.45-3.04.51-1.43.74-2.92.85-4.43.14-1.85.09-3.71.09-5.56Z"></path>
                                                        <path class="cls-2" d="m410.55,226.77c-.55.14-1.04.23-1.52.38-.66.22-1.37.24-2,.56-.12.06-.24,0-.35.03-.28.1-.4-.04-.48-.29-.28-.88-.58-1.76-.87-2.64-.09-.26-.18-.52-.27-.78-.24.02-.33.2-.46.31-2.32,2.09-5.04,3.29-8.13,3.68-2.21.28-4.38.03-6.54-.44-.55-.12-.99-.48-1.55-.52-1.04-.72-2.08-1.41-2.78-2.53-1-1.6-1.49-3.35-1.8-5.18-.34-2.01-.38-4.05-.47-6.08-.28-6.32-.05-12.64-.13-18.97,0-.46,0-.46.49-.56.57-.13,1.13-.21,1.72-.12.6.09,1.21.08,1.81.11.48.02.48.02.48.52,0,.1,0,.2,0,.3,0,6.05-.01,12.09,0,18.14,0,1.91.05,3.83.33,5.73.11.7.27,1.38.45,2.06.26.95.84,1.63,1.66,2.14.86.53,1.81.8,2.8.87,1.95.13,3.91.2,5.86.02,1.73-.17,3.42-.51,5.04-1.18.35-.15.62-.44,1-.51.12-.02.13-.14.13-.24,0-.18,0-.36,0-.54,0-8.85,0-17.7-.01-26.55,0-.84-.09-.74.73-.77,1.11-.04,2.22-.02,3.33.02.43.02.43.03.44.45,0,.16,0,.32,0,.48,0,9.15,0,18.3-.02,27.45,0,1.04.25,2.03.56,3.02.16.52.33,1.04.51,1.62Z"></path>
                                                        <path class="cls-2" d="m329.56,196.86c.97-.7,1.85-1.37,2.76-1.98,2.6-1.74,5.44-2.45,8.55-2,.92.13,1.82.33,2.72.55.42.11.41.13.3.57-.29,1.15-.57,2.29-.85,3.44-.05.19-.08.4-.2.59-.61-.17-1.23-.36-1.85-.5-2.72-.62-5.41-.37-8.06.41-.89.26-1.75.6-2.6.97-.26.11-.39.25-.36.54.02.16,0,.32,0,.48,0,8.87,0,17.74,0,26.61,0,.8.08.72-.7.72-1.11,0-2.22,0-3.33,0-.43,0-.44-.01-.45-.43,0-.1,0-.2,0-.3,0-9.05,0-18.1,0-27.15,0-.69-.14-1.36-.33-2.02-.26-.91-.62-1.79-.8-2.72-.11-.6-.12-.61.45-.73,1.07-.24,2.14-.46,3.21-.69.43-.09.44-.07.56.38.26.92.52,1.83.77,2.75.04.16.14.28.21.51Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Спортмастер -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 791.72 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #ed1c24;
                                                                }
                                                                .cls-1,
                                                                .cls-2 {
                                                                    fill-rule: evenodd;
                                                                }

                                                                .cls-1,
                                                                .cls-2,
                                                                .cls-3 {
                                                                    transform: scale(1.2);
                                                                }
                                                                .cls-2 {
                                                                    fill: #2e3192;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-2" d="m303.31,178.62c8.23,0,14.82-2.28,19.99-6.86,5.05-4.12,8.36-9.37,10.16-15.78,1.74-6.17,1.39-11.43-1.27-15.78-2.66-4.34-7.96-6.63-16.19-6.63s-14.82,2.28-19.93,6.63c-5.11,4.34-8.42,9.6-10.16,15.78-1.8,6.4-1.45,11.66,1.27,15.78,2.6,4.57,7.9,6.86,16.13,6.86Zm3.09-10.97c-2.51,0-4.32-.91-5.04-3.2-.79-2.06-.71-4.8.32-8.46.97-3.43,2.43-6.17,4.44-8.46,1.95-2.06,4.26-2.97,6.78-2.97s4.32.91,5.11,2.97c.73,2.29.64,5.03-.32,8.46-1.03,3.66-2.49,6.4-4.44,8.46-2.02,2.28-4.33,3.2-6.85,3.2h0Zm405.99-2.17c-2.29,0-3.63-.91-4.26-2.74-.86-1.83-.9-4.11-.06-7.09.84-2.97,2.23-5.48,4.05-7.09,1.66-1.83,3.68-2.52,5.8-2.74,4.8,0,6.35,3.43,4.71,10.06-.84,2.97-2.17,5.26-3.83,7.09-2.11,1.83-4.14,2.52-6.42,2.52h0Zm-14.4-30.86l-16.03,56.93h16.46l5.28-18.75c1.71,3.66,4.86,5.49,8.97,5.49,5.03,0,10.05-1.6,15.2-5.26,2.56-1.99,4.78-4.38,6.57-7.09,1.85-2.52,3.34-6.17,4.73-10.29,1.67-5.94,1.55-11.2-.42-15.55-1.98-4.34-6.14-6.63-12.54-6.63-2.52,0-4.99.69-7.83,1.83-2.84,1.14-5.25,3.2-7.33,5.72h-.23l1.8-6.4h-14.63s0,0,0,0Zm-13.57,25.14c2.19-7.78,2.16-14.18-.83-18.98-2.76-4.8-8.23-7.32-16-7.32-6.63,0-12.7,2.06-18.2,6.17-5.73,4.12-9.56,9.6-11.62,16.92-1.93,6.86-1.19,12.35,2.35,16,3.25,3.89,8.22,5.72,15.08,5.72,5.03,0,9.86-.91,14.78-2.97,4.92-2.06,8.92-5.72,12.01-10.97h-15.78c-.78,1.14-1.95,2.06-3.29,2.74-1.11.69-2.54.91-3.92.91-2.29,0-3.92-.69-5.07-2.29-1.15-1.6-1.32-3.43-.61-5.94h31.09s0,0,0,0Zm-28.71-8.46c1.35-4.8,4.58-7.32,9.67-7.55,1.99.23,3.63.91,4.39,2.29.99,1.37,1.38,3.2.8,5.26h-14.86Zm-55.78,26.02l8.56-30.41h-14.18l3.48-12.35h44.81l-3.47,12.35h-14.18l-8.56,30.41h-16.46Zm-7.77-26.52c.82-6.17-.4-10.75-3.97-13.49-3.64-2.52-8.28-3.89-13.77-3.89-7.09,0-13.09,1.83-18.59,5.95-5.44,3.89-9.33,9.6-11.39,16.92-2,7.09-1.26,12.58,2.22,16.46,3.31,3.66,8.22,5.72,15.08,5.72,5.72,0,11.36-1.37,16.25-4.12,2.56-1.43,4.86-3.29,6.8-5.49,2.01-2.28,3.47-5.03,4.83-8.23h-16.47c-.68,1.66-1.72,3.14-3.05,4.34-1.3,1.37-3.09,2.06-5.15,2.06-2.52,0-4.09-.91-4.65-2.97-.63-1.83-.61-4.34.36-7.77.32-1.14.94-2.52,1.55-3.89.61-1.37,1.23-2.74,2.01-3.89.78-1.14,1.95-2.06,3.06-2.75,1.11-.69,2.38-1.14,3.98-1.14,1.83,0,3.01.69,3.6,1.83.88.91.89,2.52.61,4.34h16.69s0,0,0,0Zm-79.93,18.06c-3.66,0-5.16-1.14-4.52-3.43.39-1.37,1.16-2.52,2.27-3.2,1.11-.69,2.15-1.14,3.59-1.37,1.27-.46,2.94-.69,4.37-.91,1.73-.46,3.23-.92,4.96-1.37-.61,2.97-1.71,5.26-3.43,7.32-1.95,2.06-4.27,2.97-7.24,2.97Zm23.98,8.23l.19-.69c-.89-.91-1.09-1.83-1.06-2.74-.04-.69,0-1.6.32-2.74l5.6-19.89c.71-2.52,1.35-4.8,1.54-7.09.34-1.89,0-3.83-.97-5.49-.92-1.6-2.66-2.74-5.37-3.66-2.71-.91-6.47-1.37-11.5-1.37-7.77,0-14.11,1.37-18.41,3.66-4.37,2.52-7,6.17-8.29,10.75h16.23c.97-1.83,1.98-2.97,3.32-3.66,1.5-.45,2.48-.69,3.62-.69s2.22.23,3.47.69c1.02.46,1.44,1.37,1.22,2.97-.74,1.83-2.67,2.97-5.77,3.43-1.44.23-3.1.46-4.77.69-1.89.23-3.79.45-5.97.91-1.83,0-3.79.46-5.58,1.14-1.96.46-4.05,1.37-5.67,2.28s-3.16,2.29-4.52,3.89c-1.37,1.6-2.4,3.66-3.11,6.17-1.16,4.12-.46,7.32,1.93,9.37,2.1,2.29,5.27,3.2,9.16,3.2,3.2,0,6.01-.23,8.55-1.14,2.77-.91,5.51-2.51,8.37-4.57l-.37,4.57h17.83s0,0,0,0Zm-141.92.24l8.56-30.41h-14.4l3.48-12.35h45.04l-3.48,12.35h-14.4l-8.56,30.41h-16.23Zm-36.05-11.84c-2.28,0-3.63-.91-4.26-2.74-.86-1.83-.9-4.11-.06-7.09.84-2.97,2.23-5.48,4.05-7.09,1.66-1.83,3.68-2.52,5.8-2.74,4.8,0,6.35,3.43,4.71,10.06-.84,2.97-2.17,5.26-3.83,7.09-2.11,1.83-4.13,2.52-6.42,2.52h0Zm-14.4-30.86l-16.03,56.93h16.46l5.28-18.75c1.71,3.66,4.86,5.49,8.97,5.49,5.03,0,10.05-1.6,15.2-5.26,2.56-1.99,4.78-4.38,6.57-7.09,1.85-2.52,3.34-6.17,4.73-10.29,1.67-5.94,1.55-11.2-.42-15.55-1.98-4.34-6.14-6.63-12.54-6.63-2.52,0-4.99.69-7.83,1.83-2.84,1.14-5.25,3.2-7.33,5.72h-.23l1.8-6.4h-14.63s0,0,0,0Zm-115.21,42.7h16.23l8.56-30.41h13.03l-8.56,30.41h16.46l12.04-42.76h-45.73l-12.04,42.76h0Zm2.44-26.52c.82-6.17-.4-10.75-3.97-13.49-3.63-2.52-8.28-3.89-13.77-3.89-7.09,0-13.09,1.83-18.59,5.95-5.44,3.89-9.33,9.6-11.39,16.92-1.99,7.09-1.25,12.58,2.22,16.46,3.31,3.66,8.22,5.72,15.08,5.72,5.72,0,11.36-1.37,16.25-4.12,2.56-1.44,4.86-3.29,6.8-5.49,2.01-2.28,3.47-5.03,4.83-8.23h-16.46c-.68,1.66-1.72,3.14-3.05,4.34-1.3,1.37-3.09,2.06-5.15,2.06-2.52,0-4.09-.91-4.65-2.97-.63-1.83-.61-4.34.36-7.77.32-1.14.94-2.52,1.55-3.89.61-1.37,1.23-2.74,2.01-3.89.78-1.14,1.95-2.06,3.06-2.75,1.11-.69,2.38-1.14,3.98-1.14,1.83,0,3.01.69,3.6,1.83.88.91.89,2.52.61,4.34h16.69s0,0,0,0Z"></path>
                                                        <path class="cls-1" d="m444.94,121.28l11.24,52.33,40.97-52.68-32.66,22.95-19.55-22.6Z"></path>
                                                        <path class="cls-2" d="m441.55,134.59l-12.18,42.61h21.08s-8.9-42.61-8.9-42.61Zm51.74,0l-32.54,42.61h20.37s12.17-42.61,12.17-42.61Z"></path>
                                                        <path class="cls-1" d="m179.65,112.24l-39.8,45.14-88.45-44.76,83.61,17.63s44.64-18.01,44.64-18.01Z"></path>
                                                        <path class="cls-2" d="m59.35,201.2l46.65-52.9,103.66,52.45-97.99-20.66s-52.32,21.1-52.32,21.1Zm73.03-105.35c-7.65.62-13.39,7.37-12.77,15.03.62,7.66,7.37,13.4,15.02,12.77,7.66-.62,13.4-7.37,12.77-15.02-.62-7.66-7.37-13.4-15.03-12.78Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Детский мир -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 268 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M58.397 27.552c0 .42-.138.769-.414 1.048-.276.28-.62.419-1.035.419H54.5c-.414 0-.759-.14-1.035-.419a1.431 1.431 0 0 1-.413-1.048v-6.355c0-.42.138-.768.413-1.048.276-.28.621-.419 1.035-.419h.759c.327-.436.62-.978.879-1.589.259-.628.465-1.292.655-2.043.172-.733.328-1.501.448-2.287.121-.786.19-1.571.242-2.34l.155-2.287c.017-.419.19-.768.483-1.047.293-.28.638-.42 1.051-.42h10.759c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047V19.73h1.414c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047v6.355c0 .42-.138.769-.413 1.048-.276.28-.621.419-1.035.419h-2.448c-.414 0-.759-.14-1.035-.419a1.431 1.431 0 0 1-.413-1.048v-2.41h-10.5v2.41Zm7.24-14.422H63.07L63 13.83c-.172 1.466-.414 2.688-.724 3.649-.31.96-.638 1.71-1 2.252h4.362v-6.6ZM81.724 18.35c.276.821.793 1.432 1.517 1.817.725.384 1.57.576 2.518.576.638 0 1.207-.035 1.69-.122.482-.07.965-.21 1.413-.384.276-.105.569-.158.845-.158.62 0 1.052.28 1.345.821l.62 1.24c.104.21.156.436.156.698 0 .576-.225.995-.69 1.275-1.104.628-2.104 1.012-3.035 1.204-.913.175-1.896.28-2.948.28-1.43 0-2.724-.227-3.862-.664a8.231 8.231 0 0 1-2.93-1.868c-.811-.803-1.432-1.763-1.88-2.916-.449-1.135-.673-2.392-.673-3.754 0-1.274.224-2.462.673-3.562a8.963 8.963 0 0 1 1.88-2.933 8.467 8.467 0 0 1 2.93-1.973c1.155-.471 2.431-.716 3.862-.716 1.104 0 2.155.192 3.155.576 1 .384 1.897.943 2.656 1.676a8.329 8.329 0 0 1 1.844 2.602c.466 1.013.69 2.13.69 3.37 0 .698-.034 1.274-.12 1.746-.052.28-.208.541-.483.803-.276.245-.535.367-.828.367H81.724Zm6.017-3.875c0-.594-.241-1.153-.707-1.642-.465-.506-1.172-.75-2.086-.75-.965 0-1.707.21-2.224.628-.517.42-.914 1.013-1.19 1.781h6.207v-.017Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.448 25.143c-.414 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V13.514h-3.517c-.414 0-.759-.14-1.035-.419a1.43 1.43 0 0 1-.413-1.047V9.184c0-.419.137-.768.413-1.047.276-.28.621-.42 1.035-.42h12.793c.414 0 .758.14 1.034.42.276.279.414.628.414 1.047v2.864c0 .419-.138.768-.414 1.047-.276.28-.62.42-1.034.42h-3.517v10.161c0 .42-.138.768-.414 1.048-.276.28-.621.419-1.035.419h-2.862ZM124.672 13.357c-.913-.471-1.793-.698-2.638-.698-.465 0-.913.07-1.344.227a3.809 3.809 0 0 0-1.19.716 3.739 3.739 0 0 0-.862 1.187c-.224.471-.328 1.013-.328 1.624 0 .593.121 1.117.345 1.589.224.471.517.855.879 1.187.363.332.759.576 1.207.733.449.175.897.245 1.362.245.897 0 1.794-.28 2.69-.856.328-.227.69-.35 1.069-.35.483 0 .879.21 1.19.63l1.189 1.588c.207.28.311.594.311.926 0 .524-.207.925-.621 1.24-1.155.925-2.241 1.536-3.259 1.815-1.017.28-2 .42-2.913.42-1.449 0-2.776-.228-3.966-.664a8.661 8.661 0 0 1-3.034-1.868 8.056 8.056 0 0 1-1.914-2.916c-.448-1.135-.673-2.392-.673-3.754 0-1.275.225-2.462.656-3.562a8.639 8.639 0 0 1 1.862-2.933 8.66 8.66 0 0 1 2.896-1.973c1.121-.472 2.362-.716 3.707-.716 1.155 0 2.19.104 3.104.314.913.21 1.896.646 2.913 1.327.569.367.845.82.845 1.362 0 .262-.069.506-.224.733l-1.103 1.868c-.311.524-.742.769-1.311.769a1.424 1.424 0 0 1-.845-.21ZM137.534 16.814v6.862c0 .42-.137.768-.413 1.048-.276.28-.621.419-1.035.419h-2.827c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.166c0-.418.138-.768.414-1.047.276-.28.621-.419 1.035-.419h2.827c.414 0 .759.14 1.035.419.276.28.413.629.413 1.048v6.128l4.449-6.635c.207-.279.465-.523.793-.698.327-.175.655-.28 1.017-.28h2.69c.431 0 .793.158 1.069.472.276.314.414.663.414 1.048 0 .314-.104.61-.311.89l-4.052 5.43 1.88 2.602c.707.96 1.396 1.519 2.069 1.676.586.122.982.332 1.172.576.19.262.293.681.293 1.275v2.374c0 .315-.12.594-.345.856-.224.262-.5.419-.81.471-.207.018-.396.053-.569.053-.172.017-.362.017-.569.017-.465 0-.931-.052-1.431-.157-.5-.105-1-.297-1.5-.559-.5-.279-1-.646-1.5-1.152-.5-.489-1-1.117-1.517-1.903l-3.242-4.837ZM165.569 25.143c-.414 0-.759-.14-1.035-.42a1.434 1.434 0 0 1-.413-1.047V16.03l-5.483 8.154c-.207.279-.448.523-.707.698-.276.175-.586.28-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.434 1.434 0 0 1-.413-1.047V9.184c0-.419.138-.768.413-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.276.279.414.628.414 1.047v7.648l5.483-8.154c.206-.28.431-.524.689-.699a1.62 1.62 0 0 1 .914-.279h3.328c.413 0 .758.14 1.034.419.276.28.414.629.414 1.048v14.51c0 .418-.138.768-.414 1.047-.276.28-.621.419-1.034.419h-2.828Z" fill="#0073E6"></path>
                                                        <path d="M187.414 25.143c-.414 0-.759-.14-1.035-.42-.276-.279-.413-.628-.413-1.047V16.03l-5.483 8.154a3 3 0 0 1-.707.698c-.276.175-.586.28-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.184c0-.419.138-.768.414-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.276.279.414.628.414 1.047v7.648l5.482-8.154c.207-.28.431-.524.69-.699a1.62 1.62 0 0 1 .914-.279h3.327c.414 0 .759.14 1.035.419.276.28.414.629.414 1.048v14.51c0 .418-.138.767-.414 1.047-.276.28-.621.419-1.035.419h-2.827Zm-.845-25.09c.759 0 1.345.226 1.741.663.397.436.587 1.013.587 1.711 0 1.013-.5 1.868-1.483 2.567-.983.698-2.448 1.047-4.38 1.047-2.137 0-3.689-.349-4.62-1.047-.931-.699-1.397-1.554-1.397-2.567 0-.698.19-1.275.569-1.711.38-.437.966-.664 1.724-.664.656 0 1.156.14 1.449.42.31.279.517.628.655 1.047.12.35.31.646.534.873.224.227.586.332 1.069.332.431 0 .759-.105.966-.332.207-.227.362-.524.5-.873.12-.419.345-.786.655-1.048.31-.279.793-.419 1.431-.419Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M209.328 23.676c0 .42-.138.769-.414 1.048-.276.28-.621.419-1.035.419h-2.827c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.166c0-.418.138-.768.414-1.047.276-.28.621-.419 1.035-.419h2.724c.655 0 1.258.297 1.758.89l4.397 5.046 4.052-5.01c.224-.28.483-.507.758-.682.276-.174.604-.244.966-.244h2.569c.414 0 .758.14 1.034.419.276.28.414.629.414 1.048v14.51c0 .418-.138.768-.414 1.047-.276.28-.62.419-1.034.419h-2.828c-.414 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V16.57l-3.276 3.736c-.276.315-.621.472-1 .472s-.707-.14-1-.42l-3.414-3.753v7.071h.018ZM241.259 25.143c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V16.03l-5.482 8.154a3 3 0 0 1-.707.698 1.72 1.72 0 0 1-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.184c0-.419.138-.768.414-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047v7.648l5.483-8.154c.207-.28.431-.524.69-.699.258-.174.569-.279.914-.279h3.327c.414 0 .759.14 1.035.419.276.28.413.629.413 1.048v14.51c0 .418-.137.768-.413 1.047-.276.28-.621.419-1.035.419h-2.827Z" fill="#0073E6"></path>
                                                        <path d="M255.517 31.429c0 .419-.138.768-.414 1.047-.275.28-.62.42-1.034.42h-2.828c-.413 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V9.167c0-.42.138-.769.414-1.048.276-.28.621-.419 1.034-.419h3.035a1.2 1.2 0 0 1 .896.367c.242.244.362.54.362.908.483-.472 1.138-.873 1.949-1.223.81-.349 1.758-.523 2.827-.523 1.156 0 2.207.227 3.156.663a6.63 6.63 0 0 1 2.431 1.868c.655.803 1.172 1.746 1.551 2.829.362 1.082.552 2.27.552 3.562 0 1.327-.224 2.549-.672 3.701a9.098 9.098 0 0 1-1.88 3.004c-.81.855-1.776 1.519-2.914 2.025-1.137.489-2.413.733-3.81.733-.586 0-1.172-.052-1.741-.14a6.305 6.305 0 0 1-1.483-.401v6.356h.017Zm0-11.908c.431.261.845.436 1.207.523.362.088.862.14 1.483.14 1.259 0 2.172-.384 2.776-1.152.603-.768.896-1.694.896-2.776 0-1.013-.293-1.869-.862-2.567-.569-.698-1.414-1.048-2.517-1.048-1.069 0-2.069.524-2.983 1.554v5.326Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.46 4.06C.5 5.94.97 7.7 2.04 9.25c1.84 2.65 4.35 4.1 7.6 4.21.06 0 .12.01.18.01-.39.1-.78.01-1.17.02H2.18c-1.08 0-1.71-.6-1.72-1.66C.43 9.27.44 6.71.43 4.14c0-.02.02-.05.03-.08Z" fill="#FCC201"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.23 13.47c-1.43 0-2.87-.01-4.3 0-.31.01-.45-.05-.45-.41.02-2.89.01-5.79 0-8.68 0-.27.06-.37.35-.36 2.52.01 5.04 0 7.56.01.89 0 1.57.63 1.57 1.53.03 2.53.01 5.06.02 7.6 0 .33-.18.31-.41.31-1.44-.01-2.89 0-4.34 0Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.83 8.81a2.578 2.578 0 0 1-2.65 2.56c-1.45-.02-2.63-1.23-2.59-2.64.04-1.45 1.24-2.62 2.65-2.59 1.48.02 2.61 1.2 2.59 2.67Z" fill="#fff"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.23 6.74c1.13 0 2.04.91 2.03 2.04-.01 1.1-.96 2.04-2.05 2.03a2.055 2.055 0 0 1-2.02-2.06c.01-1.13.9-2.01 2.04-2.01Z" fill="#00C2FC"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 14.07c1.45 0 2.9.01 4.35-.01.29 0 .38.08.38.38-.01 2.89-.01 5.78 0 8.68 0 .32-.09.39-.41.38-4.51-.15-8.41-3.71-8.95-8.21-.1-.81.26-1.22 1.06-1.22h3.57Z" fill="#FF4F3E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.56 23.5c-1.43 0-2.87-.01-4.3.01-.35 0-.45-.09-.45-.45.01-2.85.02-5.7 0-8.55 0-.41.13-.47.49-.46 4.19.13 8.02 3.41 8.79 7.55.09.49.15.98.19 1.48.03.33-.06.43-.41.43-1.44-.02-2.87-.01-4.3-.01h-.01Z" fill="#06C92E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.85 8.78c0-1.46.01-2.93-.01-4.39 0-.3.08-.37.38-.37 2.68.01 5.37 0 8.05 0 .72 0 1.04.39.94 1.11-.56 4.18-3.38 7.26-7.47 8.16-.5.12-1.01.15-1.52.2-.3.03-.39-.07-.38-.37.01-1.45.01-2.9.01-4.34Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.57 24.1c1.4 0 2.8.02 4.21-.02.43 0 .51.14.5.53-.19 4.24-3.54 8.04-7.72 8.74-.3.05-.6.1-.9.11-.46.02-.76-.25-.84-.71-.02-.13-.02-.27-.02-.4 0-2.59 0-5.19-.01-7.78 0-.38.1-.49.47-.48 1.44.02 2.87.01 4.3.01h.01Z" fill="#00C2FC"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.46 4.06c.14-.01.27-.03.41-.03 2.86-.01 5.73 0 8.6-.01.36 0 .45.08.45.44-.02 2.87-.01 5.73-.01 8.6 0 .14.07.31-.09.42-3.84.3-7.39-2.56-8.67-5.59C.63 6.65.4 5.39.46 4.06Z" fill="#FF4F3E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.52 33.52c-2.63 0-4.73-2.11-4.73-4.75a4.73 4.73 0 0 1 4.75-4.73c2.59.01 4.7 2.11 4.73 4.73.03 2.58-2.13 4.75-4.75 4.75Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.22 8.74c0 1.43-.01 2.86.01 4.3 0 .29-.05.41-.39.41-2.88-.02-5.77-.01-8.65 0-.31 0-.41-.06-.41-.39.02-2.7.01-5.4.01-8.1 0-.64.3-.93.96-.94 2.7 0 5.4.01 8.1 0 .3 0 .38.08.38.37-.02 1.45-.01 2.9-.01 4.35Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.49 24.09c1.45 0 2.89.01 4.34 0 .3-.01.41.03.29.37-1 2.81-1.98 5.62-2.97 8.43-.14.41-.44.63-.88.63H4.7c-.68 0-1.06-.52-.85-1.15.93-2.67 1.88-5.34 2.8-8.01.1-.28.27-.27.49-.27 1.45.01 2.9 0 4.35 0Z" fill="#06C92E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 14.06c1.45 0 2.9.01 4.35-.01.35 0 .39.08.27.4-1.03 2.91-2.05 5.81-3.06 8.72-.08.24-.18.33-.44.33-2.93-.01-5.86-.01-8.78 0-.31 0-.36-.07-.25-.36 1.04-2.93 2.07-5.87 3.09-8.81.09-.27.26-.27.47-.27H15Z" fill="#00C2FC"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Озон -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483.969 105.938">
                                                        <path fill="#0069ff" fill-rule="evenodd" d="M58.18.289a52.956 52.956 0 1 0 47.134 47.28A52.89 52.89 0 0 0 58.18.289zm-1.716 80.689A28.247 28.247 0 1 1 80.716 56.65a28.236 28.236 0 0 1-24.252 24.328zm77.174-78.594a12.356 12.356 0 0 0-12.06 14.908c1.162 5.822 6.6 9.8 12.524 9.8h34.378l-53.5 70.8a3.529 3.529 0 0 0 2.8 5.659h83.92c5.92 0 11.362-3.977 12.524-9.8a12.357 12.357 0 0 0-12.055-14.91h-41.887l53.459-70.745a3.562 3.562 0 0 0-2.829-5.712h-77.274zm335.339.285a12.542 12.542 0 0 0-9.639 12.4v41.138L392.679 3.161a3.545 3.545 0 0 0-5.749 2.786v84.941a12.541 12.541 0 0 0 9.639 12.4 12.341 12.341 0 0 0 14.993-12.07V49.724l66.66 53.047a3.544 3.544 0 0 0 5.747-2.785V14.735a12.341 12.341 0 0 0-14.992-12.066zM295.415 24.727c28.195 0 49.262 14.9 49.262 28.228s-21.067 28.228-49.262 28.228-49.262-14.9-49.262-28.228 21.067-28.228 49.262-28.228m0-24.707c-40.811 0-73.894 23.7-73.894 52.935s33.083 52.935 73.894 52.935 73.893-23.7 73.893-52.935S336.225.02 295.415.02z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Алиэкспресс -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 1246 302" xmlns="http://www.w3.org/2000/svg" class="Header_Logo__mainLogo__1gbu2">
                                                        <path d="M958.1 85.1c-8.2-3.5-17-5.2-26-5.3h-.4c-10 .1-19.8 2-28.9 5.9-8.9 3.8-16.9 9.1-23.8 16-6.9 6.8-12.3 14.8-16.1 23.7-3.9 9.2-5.9 19-6 29.1V154.8c0 10.2 2.1 20.2 6 29.5 3.8 9 9.3 17.1 16.2 24.1 6.9 7 15 12.5 24 16.4 9.3 4 19.2 6.1 29.4 6.2h.8c11.3-.1 22-2.7 32.1-7.5 9.5-4.6 17.7-11 24.6-19.1l-18.9-15.1c-4.7 5.4-10.2 9.7-16.5 12.8-6.8 3.3-14.1 5.1-21.7 5.1-5.9 0-11.6-1.1-17.1-3-5.3-1.9-10.2-4.6-14.7-8.1-4.4-3.4-8.2-7.5-11.3-12.2-3.1-4.7-5.5-9.9-7-15.3l-.3-.9H999l.1-20.8c0-9.1-1.8-17.9-5.3-26.1-3.4-8-8.2-15.2-14.4-21.3-6.1-6.2-13.3-11-21.3-14.4Zm-75.6 58.7.2-.9c1.3-5.4 3.5-10.6 6.5-15.3 3-4.6 6.6-8.7 10.9-12.1 4.3-3.4 9.1-6.1 14.3-8 5.4-1.9 11-2.9 16.8-2.9 10.6 0 20.8 4 28.6 11.1 7.8 7.1 12.7 16.8 13.8 27.2l.1.8h-91.2v.1ZM682.2 79.8c-41.6 0-75.4 33.4-75.7 74.9v146.9H632v-94c12.7 13.4 30.2 22.2 49.7 23.5h.5c41.8 0 75.7-33.9 75.7-75.7 0-39.8-30.7-72.4-69.7-75.4-.2 0-1.4-.1-1.6-.1-1.4-.1-2.9-.1-4.4-.1Zm49.9 77.8c0 27.5-22.3 49.8-49.8 49.8-27.5 0-49.8-22.3-49.8-49.8v-4c0-27.5 22.3-49.8 49.8-49.8 27.5 0 49.8 22.3 49.8 49.8v4ZM343.6 200.8V139h81.7v-24.7h-81.7V53.8h92v-26h-118v199h125.2v-26h-99.2ZM595.3 83.9h-30.2l-40.4 52.4-40.3-52.4h-30.2l55.1 71.4-55.1 71.5h30.2l40.3-52.4 40.4 52.4h30.2l-55.1-71.5 55.1-71.4ZM1107.7 155.3c-4.3-3.3-9.3-5.9-15.1-7.8-5.7-1.9-11.8-3.5-18.2-4.8-4.7-.8-9.3-1.8-13.7-3.1-4.4-1.2-8.3-2.7-11.7-4.3-3.4-1.6-6.1-3.5-8-5.7-1.9-2.1-2.9-4.8-2.9-7.8 0-3.3.9-6.2 2.6-8.8 1.7-2.6 3.9-4.7 6.6-6.3 2.7-1.6 5.7-2.9 9.1-3.7 3.4-.8 6.7-1.2 10-1.2h1.9c12.4.4 23.4 6.8 30.1 16.3l19-12.8c-10.9-15.5-28.8-25.5-49.1-25.5-7.1 0-13.6.9-20 2.8-6.4 1.8-12.1 4.5-17.2 8s-9.2 7.9-12.3 13.2c-3.1 5.3-4.6 11.5-4.6 18.4 0 7.4 1.4 13.4 4.2 18.1 2.8 4.7 6.5 8.6 11.1 11.5 4.6 3 10 5.4 16.1 7.2 6.1 1.8 12.6 3.5 19.4 4.9 3.9.8 7.7 1.7 11.4 2.8 3.7 1 7 2.4 9.8 4.2 2.9 1.7 5.2 3.8 6.9 6.3 1.7 2.5 2.6 5.6 2.6 9.5 0 3.9-.9 7.2-2.8 10-1.8 2.8-4.3 5.1-7.4 6.9-3.1 1.8-6.5 3.2-10.3 4-3.5.8-6.9 1.2-10.3 1.2-15.5 0-29.1-7.4-37.4-18.8l-19.3 15c13.6 15.8 33.9 25.9 56.5 25.9 7-.1 13.6-1 20.2-2.5 6.9-1.6 13-4.3 18.5-7.8 5.4-3.6 9.8-8.2 13.1-14 3.3-5.7 4.9-12.7 4.9-20.9 0-7.2-1.2-13.2-3.7-18.1-2.3-4.9-5.7-9-10-12.3ZM1241.6 167.6c-2.5-4.9-5.8-9-10.2-12.3-4.3-3.3-9.3-5.9-15.1-7.8-5.7-1.9-11.8-3.5-18.2-4.8-4.7-.8-9.3-1.8-13.7-3.1-4.4-1.2-8.3-2.7-11.7-4.3-3.4-1.6-6.1-3.5-8-5.7-1.9-2.2-2.9-4.8-2.9-7.8 0-3.3.9-6.2 2.6-8.8 1.7-2.6 3.9-4.7 6.6-6.3 2.7-1.6 5.7-2.9 9.1-3.7 3.4-.8 6.7-1.2 10-1.2h1.9c12.4.4 23.4 6.8 30.1 16.3v-.1l19-12.7-.1-.1h.1c-10.9-15.4-28.8-25.4-49.1-25.4h-.3c-6.8 0-13.3.9-19.7 2.8-6.4 1.8-12.1 4.5-17.2 8s-9.2 7.9-12.3 13.2c-3.1 5.3-4.6 11.5-4.6 18.4 0 7.4 1.4 13.4 4.2 18.1 2.8 4.7 6.5 8.6 11.1 11.5 4.6 3 10 5.4 16.1 7.2 6.2 1.8 12.6 3.5 19.4 4.9 3.9.8 7.7 1.7 11.4 2.8 3.7 1 7 2.4 9.8 4.1 2.9 1.7 5.2 3.8 6.9 6.3 1.7 2.5 2.6 5.6 2.6 9.5 0 3.9-.9 7.2-2.8 10-1.8 2.8-4.3 5.1-7.4 6.9-3.1 1.8-6.5 3.2-10.3 4-3.5.8-6.9 1.2-10.3 1.2h-.2c-15.2 0-28.8-7.4-37.1-18.8l-19.3 15c13.6 15.8 33.9 25.9 56.5 25.9v-.1c7-.1 13.6-.9 20.2-2.4 6.9-1.6 13-4.3 18.5-7.8 5.4-3.6 9.8-8.2 13.1-14 3.3-5.7 4.9-12.7 4.9-20.9.1-7-1.1-13.1-3.6-18ZM801.9 83.5h-25.5v143.3h25.5v-71.7c0-27.7 22.5-50.2 50.1-50.2V79.4c-19.1 0-36.6 7.2-50.1 19V83.5ZM220 27.8h-25.5v199H220v-199ZM103.3 27.7H77.1L.7 226.8h24.9L44 179h92.4l18.4 47.8h24.9L103.3 27.7ZM54 152.8l36.2-94.4 36.2 94.4H54ZM281.3 84.7h-25.5v142.1h25.5V84.7ZM268.6.4c-.6 0-1.1.5-1.1 1.1 0 20.5-16.6 37.2-37 37.2-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1 20.4 0 37 16.7 37 37.2 0 .6.5 1.1 1.1 1.1.6 0 1.1-.5 1.1-1.1.1-20.4 16.7-37.1 37-37.1.6 0 1.1-.5 1.1-1.1 0-.6-.5-1.1-1.1-1.1-20.4 0-37-16.7-37-37.2v-.1c0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3Z" fill="#ff2722" data-spm-anchor-id="a2g2w.home.1000002.i0.75df501daPctvr"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Мэйл ру -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewbox="-5.7176247 -5.7176247 562.0490194 202.0227394">
                                                        <defs id="defs5113"></defs>
                                                        <path d="m 550.61374,180.805 c 0,5.40375 -4.38,9.7825 -9.7825,9.7825 l -531.049985,0 C 4.380005,190.5875 0,186.20875 0,180.805 L 0,9.7825 C 0,4.38 4.380005,0 9.781255,0 L 540.83124,0 c 5.4025,0 9.7825,4.38 9.7825,9.7825 l 0,171.0225 z" id="path3030" style="fill:#134785;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                        <path d="m 106.14912,71.4315 c -0.53875,-10.41625 -8.272495,-16.68 -17.607495,-16.68 l -0.35375,0 c -10.77625,0 -16.755,8.47375 -16.755,18.10125 0,10.77875 7.2325,17.59125 16.7125,17.59125 10.57125,0 17.523755,-7.74375 18.025005,-16.90625 l -0.0213,-2.10625 z M 88.241625,45.43275 c 7.2,0 13.971255,3.1825 18.941245,8.16375 l 0,0.0175 c 0,-2.39125 1.60875,-4.1925 3.84625,-4.1925 l 0.5625,-0.007 c 3.4975,0 4.21501,3.31 4.21501,4.3575 l 0.02,37.2 c -0.25,2.435 2.5125,3.6925 4.04375,2.13125 5.97001,-6.13875 13.115,-31.55875 -3.71625,-46.28625 -15.69,-13.73125 -36.738745,-11.4675 -47.932495,-3.75125 -11.89625,8.20875 -19.5125,26.37125 -12.115,43.4375 8.065,18.61 31.1375,24.15875 44.848735,18.62125 6.94375,-2.80375 10.15125,6.585 2.94,9.65125 -10.894985,4.64375 -41.227485,4.17625 -55.397485,-20.37 -9.57375,-16.57125 -9.0625,-45.73 16.32625,-60.83875 19.42375,-11.55875 45.031235,-8.36 60.471235,7.76625 16.14126,16.86 15.2,48.4275 -0.54125,60.705 -7.13875,5.575 -17.72875,0.145 -17.6625,-7.98125 l -0.0738,-2.655 c -4.96875,4.93 -11.576235,7.80375 -18.776235,7.80375 -14.22625,0 -26.7475,-12.515 -26.7475,-26.7425 0,-14.3675 12.52125,-27.03 26.7475,-27.03" id="path3042" style="fill:#f89c0e;fill-opacity:1;fill-rule:evenodd;stroke:none"></path>
                                                        <path d="m 359.07362,94.77188 c -8.08,-0.003 -15.28501,-6.2175 -15.28501,-15.38 l 0.01,-46.47 c -0.01,-3.50625 -2.8675,-5.95875 -6.36375,-5.95875 -4.06124,0.0163 -6.40625,3.005 -6.40625,5.95875 l 0,46.52125 c -0.0475,15.75625 12.98625,28.11499 27.8225,28.11499 4.40625,0 6.53,-3.5725 6.53,-6.60125 0,-2.89249 -2.27875,-6.18249 -6.3075,-6.18499 m -92.68825,0.5565 c -11.4725,0 -20.76625,-9.29125 -20.76625,-20.75375 0,-11.46875 9.29375,-20.75875 20.76625,-20.75875 11.47,0 20.77125,9.29 20.77125,20.75875 0,11.4625 -9.30125,20.75375 -20.77125,20.75375 m 26.8325,-53.6825 c -3.5825,-0.002 -6.11875,2.865 -6.11875,5.66125 l 0,2.18 c -5.6525,-4.8175 -12.97625,-7.80625 -20.8925,-7.82 -17.40375,-0.0238 -32.81625,14.63875 -32.81625,32.9775 0,16.81875 14.68625,32.88124 32.81625,32.88124 7.33875,0 15.22625,-2.82 20.8325,-7.60499 l 0.0175,1.55749 c 0,2.98625 2.3625,6.0475 6.25125,6.0475 4.41001,0 6.38375,-3.52625 6.38375,-6.30875 l 0,-53.56749 c 0.0487,-2.51625 -2.71375,-5.99625 -6.47374,-6.00375 m 22.15762,-0.0113 c -3.8175,0.0113 -6.27749,3.14125 -6.28375,6.31625 l 0.0125,53.36874 c -0.0238,3.5475 2.7775,6.18375 6.2475,6.18375 3.9525,0 6.48375,-3.09 6.48375,-6.4575 l 0.0225,-53.00624 c 0,-3.13625 -3.165,-6.41625 -6.4825,-6.405 m -108.65774,0.0329 c -7.81876,-0.1125 -13.80376,4.425 -17.49626,7.44375 -4.09749,-4.39 -9.34749,-7.07 -14.7425,-7.40375 -5.685,-0.35375 -11.02125,1.5625 -14.40749,4.31625 -1.19126,-2.75375 -2.75376,-4.3775 -5.43626,-4.3775 -2.94,0 -6.06625,2.51625 -6.06625,6.61125 0,4.095 0.0388,53.12625 0.0388,53.12625 0,3.05125 2.6025,6.1425 6.325,6.1425 4.09751,0 6.36625,-3.13375 6.36625,-6.16375 l 0,-39.40375 c 0,-3.835 6.55375,-8.37625 12.09875,-8.30125 3.54,0.0487 7.74751,3.535 7.74751,9.045 l 0.0325,38.755 c 0,3.42375 3.44626,6.0475 6.57375,6.0475 3.72126,0 6.53625,-2.81 6.53625,-6.0125 l 0,-39.1625 c 0,-4.8025 7.29125,-8.8225 12.28125,-8.5625 3.91125,0.205 7.37125,4.46875 7.37125,8.5625 l 0,39.10875 c 0,3.38375 3.18,6.06625 6.61,6.06625 3.01,0 6.49375,-1.9925 6.49375,-6.12125 l 0,-38.94375 c 0.0387,-14.2925 -14.07255,-20.9575 -20.32629,-20.7725 M 321.79913,31.16773 c 0,2.65625 -2.65625,4.83375 -6.48125,4.83375 -3.84501,0 -6.24626,-2.63625 -6.24626,-5.12125 l 0.004,-3.42125 c 0.0437,-2.58875 2.30374,-5.48625 6.20749,-5.48625 4.27625,0 6.51626,2.77375 6.51626,5.48625 l 0,3.70875 z" id="path3058" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                        <path d="m 501.68949,41.625 c -3.78374,0 -6.21875,3.09625 -6.21875,5.94875 l 0.004,27.05375 c 0,10.44 -8.79125,20.635 -21.02,20.635 -9.99249,0 -20.585,-8.6725 -20.585,-20.44 l 0,-27.09875 c 0,-2.84375 -2.12876,-6.09875 -6.3625,-6.09875 -2.98749,0 -6.03999,2.5075 -6.03999,5.9775 l 0,27.005 c 0,17.48625 15.625,32.8875 32.9475,32.8875 18.91499,0 33.43499,-16.2175 33.43499,-32.80625 l 0,-27.09625 c 0,-3.0375 -2.51125,-5.9675 -6.15999,-5.9675 m -73.83915,0 c -17.78,0.075 -32.9425,15.7425 -32.85624,32.98625 l 0,26.88125 c 0,3.49875 2.865,6.06625 5.88375,6.06625 3.58999,0 6.38375,-2.65375 6.38375,-5.88125 l 0,-27.29 c -0.0113,-9.77 8.52625,-20.555 20.51125,-20.4975 3.8975,0.015 6.46125,-2.94375 6.4375,-6.22 -0.0125,-2.61375 -1.89,-6.06125 -6.36,-6.045 m -41.71174,60.83575 c -0.0312,2.51875 -2.6625,5.0975 -6.4825,5.0975 -3.85375,0 -6.255,-2.815 -6.255,-5.30375 l 0.006,-4.3025 c 0.0462,-2.58875 2.43875,-5.275 6.35,-5.275 4.26875,0 6.39625,2.88 6.39625,5.59125 l -0.015,4.1925 z" id="path3066" style="fill:#f89c0e;fill-opacity:1;fill-rule:evenodd;stroke:none"></path>
                                                        <path d="m 385.4395,152.2805 c -4.91875,0 -8.90375,-3.98625 -8.90375,-8.90125 0,-4.91625 3.985,-8.8975 8.90375,-8.8975 4.91751,0 8.90499,3.98125 8.90499,8.8975 0,4.915 -3.9875,8.90125 -8.90499,8.90125 m 11.505,-23.01875 c -1.53625,0 -2.6225,1.2275 -2.6225,2.4275 l 0,0.93375 c -2.42501,-2.065 -5.565,-3.34375 -8.9575,-3.35125 -7.46375,-0.01 -14.07249,6.27625 -14.07249,14.14 0,7.21 6.2975,14.0975 14.07249,14.0975 3.145,0 6.52749,-1.20875 8.93001,-3.2625 0,0 0.0437,1.08 0.095,1.28375 -0.4125,3.265 -2.7775,6.2525 -6.84,7.54125 -2.72125,0.86375 -10.56375,-0.98875 -11.2075,-1.10125 -1.8425,-0.3225 -2.77125,1.2625 -2.76,2.66375 0.004,1.1225 0.9,2.01625 2.72625,2.59625 2.33125,0.73625 6.405,1.19 9.95875,1.24125 2.67625,0.0388 13.0925,-2.07 13.45375,-13.47 0.004,-0.0675 0,-23.1675 0,-23.1675 0.02,-1.0775 -1.1625,-2.5675 -2.77625,-2.5725 m 96.75887,23.01875 c -4.5,0 -8.21,-3.34 -8.81125,-7.67125 l 10e-4,-2.46625 c 0.605,-4.32875 4.3125,-7.66125 8.80999,-7.66125 4.91876,0 8.90375,3.98125 8.90375,8.8975 0,4.915 -3.985,8.90125 -8.90375,8.90125 m 0.0763,-23.00875 c -3.39375,0.007 -6.535,1.28625 -8.9575,3.35125 l 0,-0.93375 c 0,-1.2 -1.08624,-2.4275 -2.625,-2.4275 -1.61,0.005 -2.79375,1.495 -2.77374,2.5725 l 0.006,34.1275 c -0.0125,1.52125 1.19001,2.6525 2.6775,2.6525 1.69376,0 2.77751,-1.325 2.77751,-2.76875 l 0.002,-11.56625 c 2.4025,2.0325 5.76251,3.23 8.89251,3.23 7.77374,0 14.07,-6.8875 14.07,-14.0975 0,-7.86375 -6.60625,-14.15 -14.07,-14.14 m -19.01762,-0.01 c -1.62125,0 -2.665,1.3275 -2.665,2.55375 l 0,11.59625 c 0,4.47625 -3.76875,8.84875 -9.0125,8.84875 -4.28376,0 -8.82627,-3.71875 -8.82627,-8.76625 l 0,-11.6175 c 0,-1.21625 -0.91124,-2.615 -2.72749,-2.615 -1.27999,0 -2.58875,1.075 -2.58875,2.56625 l 0,11.57625 c 0,7.4975 6.69876,14.1 14.12626,14.1 8.11,0 14.33375,-6.95125 14.33375,-14.06375 l 0,-11.62 c 0,-1.3 -1.07501,-2.55875 -2.64,-2.55875 m -41.95713,23.01838 c -4.885,0 -8.8425,-3.93 -8.89877,-8.795 l 0,-0.21375 c 0.0488,-3.93501 2.64626,-7.255 6.22127,-8.38126 0.835,-0.25999 1.72623,-0.4 2.6475,-0.4 4.8825,0 8.84375,3.92875 8.89999,8.79875 l -0.001,0.2125 c -0.0488,3.935 -2.64374,7.25375 -6.22124,8.37875 -0.83625,0.25875 -1.725,0.4 -2.6475,0.4 m 14.1175,-8.9225 c 0,-7.20875 -6.29625,-14.09625 -14.0725,-14.09625 -0.0863,0 -0.175,0.0125 -0.26375,0.015 -7.40375,0.0675 -13.9275,6.32 -13.9275,14.135 0,7.21 6.295,14.0975 14.07125,14.0975 0.085,0 0.17499,-0.0125 0.2625,-0.0125 7.40625,-0.0725 13.93,-6.3225 13.93,-14.13875 m -30.99112,-14.09587 c -7.625,0.0325 -14.125,6.75125 -14.08625,14.145 l 0,11.52375 c 0,1.50125 1.2275,2.60125 2.52125,2.60125 1.54125,0 2.7375,-1.13625 2.7375,-2.52125 l 0,-11.7025 c -0.004,-4.1875 3.65625,-8.81 8.79373,-8.78625 1.67251,0.006 2.77377,-1.26125 2.76126,-2.66625 -0.005,-1.12125 -0.81124,-2.60125 -2.72749,-2.59375" id="path3086" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Ланит -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 442.2 102.05" style="enable-background:new 0 0 442.2 102.05;" xml:space="preserve">
              <style type="text/css">
                  .st0 {
                      fill: #00AEEA;
                  }
              </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M188.55,64.61v-54.5h-19.83v6.44c0,11.3-0.52,19.44-1.05,23.9c-0.66,8.27-1.84,18.25-9.33,22.85
                      c-3.41,1.96-6.83,2.36-10.51,2.63l-1.83-7.88c1.32-0.26,4.6-0.79,6.56-1.84c2.76-1.44,4.86-5.38,5.92-12.22
                      c0.52-3.41,1.31-9.71,1.31-27.96V2.11h38.08v62.5H188.55"></path>
                                                                <polygon class="st0" points="310.98,64.61 310.98,35.2 283.92,35.2 283.92,64.61 275,64.61 275,2.11 283.92,2.11 283.92,27.58
                      310.98,27.58 310.98,2.11 319.9,2.11 319.9,64.61     "></polygon>
                                                                <polygon class="st0" points="377.82,64.61 377.82,15.24 377.68,15.24 352.48,64.61 341.84,64.61 341.84,2.11 350.76,2.11
                      350.76,51.61 351.03,51.61 376.24,2.11 386.88,2.11 386.88,64.61    "></polygon>
                                                                <polygon class="st0" points="423.52,9.72 423.52,64.61 414.58,64.61 414.58,9.72 397.52,9.72 397.52,2.11 440.59,2.11
                      440.59,9.72     "></polygon>
                                                                <path class="st0" d="M227.89,2.22l-19.81,62.39h8.68l5.03-16.04h26.03l4.85,16.04h9.62L241.98,2.22H227.89z M223.94,41.1
                      l10.54-35.92h0.19l10.82,35.92H223.94"></path>
                                                            </g>
                                                        </g>
                                                        <path class="st0" d="M120.55,9.1v-7h-8.5c-19.24,0-36.92,6.61-50.94,17.65C47.08,8.71,29.4,2.11,10.17,2.11h-8.5v7h8.5
                  c17.11,0,32.88,5.7,45.53,15.3c-1.72,1.61-3.37,3.28-4.95,5.03C39.39,21.06,25.36,16.1,10.17,16.1h-8.5v7h8.5
                  c13.5,0,25.98,4.37,36.12,11.75c-1.41,1.86-2.72,3.78-3.97,5.76C33.31,34,22.19,30.09,10.17,30.09h-8.5v7h8.5
                  c10.77,0,20.69,3.59,28.65,9.64c-1.1,2.12-2.11,4.29-3.02,6.52c-6.98-5.72-15.9-9.16-25.62-9.16h-8.5v7h8.5
                  c8.95,0,17.08,3.52,23.08,9.25c-0.82,2.67-1.5,5.39-2.04,8.17c-4.83-6.33-12.45-10.42-21.03-10.42h-8.5v7h8.5
                  c10.74,0,19.45,8.71,19.45,19.45h0.02v15.37h7V84.52c0-6.02,0.73-11.86,2.06-17.47c3.12,5.08,4.92,11.06,4.92,17.47h0.02v15.37h7
                  V84.52c0-6.63,1.06-13.01,3.01-19c2.55,5.82,3.97,12.24,3.97,19h0.02v15.37h7V84.52h0c0-6.76,1.42-13.18,3.97-19
                  c1.94,5.98,3.01,12.36,3.01,19h0v15.37h7V84.52h0.02c0-6.4,1.8-12.38,4.92-17.47c1.33,5.61,2.06,11.45,2.06,17.47h0.02v15.37h7
                  V84.52c0-10.74,8.71-19.45,19.45-19.45h8.5v-7h-8.5c-8.58,0-16.2,4.09-21.03,10.42c-0.55-2.77-1.23-5.5-2.04-8.17
                  c6-5.73,14.13-9.25,23.08-9.25h8.5v-7h-8.5c-9.73,0-18.65,3.44-25.62,9.16c-0.91-2.22-1.93-4.4-3.02-6.52
                  c7.96-6.04,17.88-9.64,28.65-9.64h8.5v-7h-8.5c-12.03,0-23.14,3.91-32.15,10.52c-1.25-1.98-2.57-3.9-3.97-5.76
                  c10.14-7.39,22.62-11.75,36.12-11.75h8.5v-7h-8.5c-15.2,0-29.23,4.96-40.58,13.34c-1.57-1.75-3.23-3.42-4.95-5.03
                  c12.65-9.6,28.42-15.3,45.53-15.3H120.55z M51.7,39.28c1.75,1.6,3.39,3.31,4.94,5.11c-1.43,1.97-2.76,4.03-3.98,6.15
                  c-1.53-1.91-3.18-3.71-4.95-5.4C48.96,43.12,50.28,41.17,51.7,39.28z M46.15,66.09c-1.38-2.68-3.04-5.2-4.96-7.49
                  c0.89-2.42,1.9-4.78,3.02-7.08c1.81,1.86,3.46,3.87,4.94,6.01C47.97,60.29,46.97,63.15,46.15,66.09z M61.1,65.33
                  c-1.09-2.9-2.43-5.68-3.98-8.32c1.19-2.36,2.51-4.65,3.98-6.83c1.47,2.18,2.79,4.46,3.98,6.83C63.53,59.65,62.2,62.43,61.1,65.33z
                  M76.06,66.09c-0.82-2.94-1.82-5.8-3.01-8.56c1.48-2.14,3.14-4.15,4.94-6.01c1.12,2.3,2.13,4.66,3.02,7.08
                  C79.09,60.9,77.43,63.41,76.06,66.09z M74.49,45.14c-1.77,1.69-3.42,3.49-4.95,5.4c-1.22-2.12-2.54-4.18-3.98-6.15
                  c1.55-1.79,3.2-3.5,4.94-5.11C71.92,41.17,73.25,43.12,74.49,45.14z M66.04,33.87c-1.73,1.57-3.38,3.24-4.94,4.98
                  c-1.56-1.74-3.21-3.41-4.94-4.98c1.57-1.73,3.22-3.38,4.94-4.96C62.82,30.49,64.47,32.14,66.04,33.87z"></path>
            </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Авито -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 109 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M41.4259.620768 32.0647 25.0625h5.0282l1.9244-5.1069h9.9323l1.9327 5.1069h4.991L46.57.620768h-5.1441ZM40.7431 15.4695l3.2693-8.59967 3.257 8.59967h-6.5263ZM61.8822 18.7596 57.8224 7.89206H53.026l6.5387 17.17044h4.7551l6.4229-17.17044h-4.7965l-4.064 10.86754ZM76.7766 7.89206h-4.5647V25.0625h4.5647V7.89206ZM74.4922 6.65463c1.8376 0 3.3273-1.48969 3.3273-3.32731C77.8195 1.48969 76.3298 0 74.4922 0c-1.8377 0-3.3274 1.48969-3.3274 3.32732 0 1.83762 1.4897 3.32731 3.3274 3.32731ZM85.8233 3.31076H81.271v4.5523h-2.6693v4.13844h2.6693v7.2961c0 4.1385 2.2803 5.918 5.4918 5.918 1.0837.0143 2.1588-.1957 3.1576-.6166v-4.2544c-.5451.1997-1.1204.3046-1.7009.3104-1.3947 0-2.4003-.5421-2.4003-2.4003v-6.2532h4.1012V7.90444h-4.0971V3.31076ZM99.5174 7.58167c-1.7602-.00081-3.481.52043-4.9449 1.49781-1.4638.97742-2.6049 2.36692-3.2788 3.99292-.674 1.6261-.8506 3.4154-.5074 5.1418.3432 1.7263 1.1907 3.3121 2.4353 4.5568 1.2446 1.2446 2.8304 2.0921 4.5568 2.4353 1.7264.3431 3.5156.1666 5.1416-.5074 1.626-.6739 3.016-1.815 3.993-3.2788.977-1.4639 1.499-3.1847 1.498-4.9449-.001-2.3584-.939-4.6198-2.606-6.2875-1.668-1.66758-3.929-2.60493-6.2876-2.60603Zm0 13.24303c-.8572.0008-1.6953-.2526-2.4084-.7282-.7131-.4756-1.2691-1.152-1.5977-1.9437-.3286-.7917-.415-1.663-.2483-2.5038.1668-.8408.5791-1.6132 1.1849-2.2196.6058-.6064 1.3779-1.0195 2.2185-1.187.8406-.1676 1.7116-.082 2.5036.2458.792.3279 1.469.8832 1.946 1.5959.476.7126.73 1.5505.73 2.4077-.002 1.1462-.459 2.2447-1.271 3.0541-.812.8094-1.911 1.2634-3.0576 1.2623v.0165Z" fill="#000"></path>
                                                        <path d="M8.89768 27.5c4.91402 0 8.89772-3.9836 8.89772-8.8977 0-4.914-3.9837-8.89765-8.89772-8.89765C3.98363 9.70465 0 13.6883 0 18.6023 0 23.5164 3.98363 27.5 8.89768 27.5Z" fill="#04E061"></path>
                                                        <path d="M24.33 26.3785c2.969 0 5.3758-2.4068 5.3758-5.3758s-2.4068-5.3759-5.3758-5.3759-5.3759 2.4069-5.3759 5.3759 2.4069 5.3758 5.3759 5.3758Z" fill="#FF4053"></path>
                                                        <path d="M10.5986 8.55008c1.8376 0 3.3273-1.48969 3.3273-3.32732 0-1.83763-1.4897-3.32732-3.3273-3.32732-1.83762 0-3.32731 1.48969-3.32731 3.32732 0 1.83763 1.48969 3.32732 3.32731 3.32732Z" fill="#965EEB"></path>
                                                        <path d="M22.2401 14.468c3.9952 0 7.234-3.2387 7.234-7.23398C29.4741 3.23878 26.2353 0 22.2401 0c-3.9953 0-7.2341 3.23878-7.2341 7.23402 0 3.99528 3.2388 7.23398 7.2341 7.23398Z" fill="#0AF"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- ВТБ -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 98 35" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#00aaff d=" m6.665-0.002l-1.669></path>
                                                        <path fill="#0a2896" d="M49.16 20.055v0.097c1.057 0.388 2.067 1.068 2.596 1.504 1.634 1.359 2.356 3.154 2.356 5.483 0 3.835-2.019 6.6-5.336 7.474-1.010 0.291-2.067 0.388-4.038 0.388h-10.045v-28.048h8.893c1.827 0 3.076 0.097 4.181 0.387 3.221 0.874 5.336 3.106 5.336 6.648 0 1.893-0.673 3.495-1.778 4.562-0.481 0.485-1.154 1.068-2.163 1.504zM40.268 23.015v7.376h3.846c1.153 0 2.211-0.097 2.98-0.825s1.105-1.65 1.105-2.863c0-0.921-0.241-1.795-0.721-2.426-0.817-1.019-1.827-1.262-3.557-1.262h-3.654zM40.219 18.162h3.125c0.961 0 1.442 0 1.922-0.145 1.299-0.389 2.116-1.552 2.116-3.154 0-1.892-0.865-2.718-2.116-3.105-0.529-0.146-1.057-0.194-2.115-0.194h-2.932v6.599zM62.475 35.002v-23.342h-8.027v-4.706h22.305l-1.586 4.706h-7.115v23.342h-5.576zM78.483 35.002v-28.048h18.075l-1.586 4.706h-10.96v6.212h4.471c3.605 0 5.48 0.874 6.778 1.989 1.010 0.874 2.74 2.814 2.74 6.649 0 3.785-1.778 5.871-3.269 6.939-1.73 1.212-3.557 1.553-7.259 1.553h-8.989zM84.011 30.294h4.182c1.586 0 2.547-0.388 3.22-1.262 0.336-0.436 0.817-1.214 0.817-2.669s-0.481-2.475-1.442-3.203c-0.576-0.436-1.346-0.678-2.644-0.678h-4.134v7.812z">
                                                        </path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Магнит -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 214 40" xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd" d="M100.238 23.71H94.129L97.184 15.8663L100.238 23.71ZM102.297 28.995L103.66 32.5H110.381L100.274 7.5H94.197L84.088 32.5H90.705L92.071 28.995H102.297ZM73.375 32.502V17.644L66.814 25.492L60.256 17.644V32.502H53.685V7.5018H60.166L66.814 16.098L73.464 7.5018H79.945V32.502H73.375ZM114.559 7.5021V32.502H121.132V13.3079H130.321V7.5021H114.559ZM151.295 22.708V32.502H157.867V7.5021H151.295V16.832H141.534V7.5021H134.963V32.502H141.534V22.708H151.295ZM199.183 32.502V13.3079H191.505V7.5021H213.467V13.3079H205.755V32.502H199.183ZM180.311 18.254V32.502H186.886V7.5021H181.211L170.928 21.6V7.5021H164.354V32.502H169.851L180.311 18.254ZM0 11.9576C0 8.7718 1.257 5.7717 3.543 3.5085C5.827 1.2462 8.855 0 12.068 0H39.935V6.0765H12.068C10.493 6.0765 9.005 6.6906 7.878 7.8048C6.753 8.9218 6.131 10.3972 6.131 11.9576L6.096 22.157C5.812 24.866 3.751 27.051 1.085 27.454L0 27.619V11.9576ZM0 40V33.923H27.867C29.442 33.923 30.93 33.309 32.053 32.192C33.183 31.079 33.802 29.605 33.802 28.042L33.807 18.362C33.807 15.4791 35.975 12.9791 38.851 12.5442L39.935 12.381V28.042C39.935 31.228 38.678 34.227 36.391 36.49C34.108 38.754 31.083 40 27.867 40H0ZM23.647 27.619V19.876L19.967 24.113L16.286 19.876V27.619H11.41V12.381H16.029L19.967 17.28L23.904 12.381H28.525V27.619H23.647Z" fill="#E6000E"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Х5 -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 137 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1044_19802)">
                                                            <path d="M32.6749 35.5401L28.8221 28.9512L25.0492 35.5401H20.5338L26.3352 25.6147L20.4219 16.4004H25.1398L28.9287 22.5524L32.5417 16.4004H37.0571L31.2396 25.9145L37.2169 35.5401H32.6749Z" fill="black"></path>
                                                            <path d="M51.8986 29.034C51.8986 33.2389 48.8167 35.8697 44.7792 35.8697C41.2265 35.8697 38.2228 33.8477 37.9297 29.4435H41.7825C42.0472 31.3576 43.5357 32.1858 45.1575 32.1858C47.1772 32.1858 48.0476 30.7909 48.0476 28.9864C48.0476 27.0997 46.694 25.9241 44.8076 25.9241C43.2391 25.9241 42.2035 26.6902 41.7257 27.511H38.0416L39.3134 16.4082H51.4243L51.0211 20.1268H42.3563L42.0134 23.8016C42.0134 23.8016 42.9229 22.7046 45.6797 22.7046C49.0032 22.7046 51.8968 25.0009 51.8968 29.0486" fill="black"></path>
                                                            <path d="M38.3844 14.0171C36.3327 5.79001 29.8225 0 16.3119 0H0L2.21507 15.4102C3.87948 29.3157 9.04678 33.7894 18.1912 35.4366C18.2336 35.4483 18.2781 35.4491 18.3209 35.439C18.3636 35.4288 18.4033 35.4081 18.4365 35.3785C18.4696 35.3489 18.4952 35.3114 18.511 35.2692C18.5267 35.2271 18.5322 35.1816 18.527 35.1368C18.5274 35.0773 18.5108 35.019 18.4792 34.9693C18.4476 34.9195 18.4024 34.8805 18.3493 34.857C12.1678 32.1787 11.4626 23.394 10.1428 14.5801L9.12137 7.55608H18.4328C27.0177 7.55608 33.6469 7.41713 37.8426 14.2383C37.8717 14.2871 37.9121 14.3278 37.9601 14.3569C38.0081 14.3859 38.0623 14.4023 38.1179 14.4046C38.1559 14.4044 38.1934 14.3964 38.2282 14.381C38.2631 14.3656 38.2946 14.3432 38.3209 14.3151C38.3473 14.287 38.3679 14.2537 38.3815 14.2173C38.3951 14.1809 38.4015 14.142 38.4004 14.103C38.401 14.0738 38.3968 14.0448 38.3879 14.0171" fill="#5FAF2D"></path>
                                                            <path d="M74.0705 25.5705C74.0705 25.5705 75.035 36.2145 64.5832 36.2145C59.0766 36.2145 54.8135 31.8724 54.8135 25.9764C54.8135 20.0803 59.0873 15.7383 64.7431 15.7383C69.1004 15.7383 72.5766 18.3197 73.9 22.2943H71.4522C70.2923 19.6836 67.7841 17.9797 64.7217 17.9797C60.3645 17.9797 57.1369 21.3875 57.1369 26.0422C57.1369 30.5561 60.1993 34.0462 64.7217 34.0462C68.5284 34.0462 71.4238 31.5488 71.756 27.6035H64.3256V25.5924H74.0705V25.5705Z" fill="black"></path>
                                                            <path d="M85.8204 20.0354V22.4487C85.4995 22.411 85.1769 22.3921 84.854 22.392C81.6815 22.392 79.4754 24.5201 79.4754 28.5239V35.9027H77.1875V20.2932H79.4754V23.7851C80.3849 21.4578 82.2056 19.9824 84.8807 19.9824C85.1947 19.9823 85.5085 20.0012 85.8204 20.0391" fill="black"></path>
                                                            <path d="M102.571 28.0977C102.571 32.7816 99.1235 36.215 94.7378 36.215C90.3787 36.215 86.9326 32.7524 86.9326 28.0977C86.9326 23.4138 90.4355 19.9785 94.7378 19.9785C99.0684 19.9785 102.571 23.4138 102.571 28.0977ZM89.2489 28.0977C89.2489 31.5311 91.6754 33.9736 94.7378 33.9736C97.8001 33.9736 100.244 31.5311 100.244 28.0977C100.244 24.6643 97.7895 22.2218 94.7378 22.2218C91.7038 22.2218 89.2489 24.635 89.2489 28.0977Z" fill="black"></path>
                                                            <path d="M118.402 20.293V35.9061H116.105V32.8109C115.086 34.8548 113.32 36.2169 110.7 36.2169C107.336 36.2169 105.321 34.0029 105.321 30.1983V20.293H107.609V29.7449C107.609 32.5275 108.879 33.9755 111.361 33.9755C114.368 33.9755 116.105 31.7615 116.105 28.297V20.293H118.395H118.402Z" fill="black"></path>
                                                            <path d="M137 28.0987C137 32.8119 134.021 36.216 129.884 36.216C128.7 36.2403 127.531 35.9305 126.505 35.3201C125.48 34.7097 124.636 33.8221 124.065 32.7534V43.0006H121.775V20.294H124.065V23.5007C124.634 22.4199 125.48 21.5203 126.511 20.8998C127.542 20.2793 128.718 19.9616 129.913 19.9813C134.021 19.9813 137 23.3599 137 28.1005V28.0987ZM134.691 28.1005C134.691 24.6927 132.54 22.2246 129.477 22.2246C126.415 22.2246 124.046 24.6653 124.046 28.1005C124.046 31.5358 126.39 33.9764 129.477 33.9764C132.565 33.9764 134.691 31.5339 134.691 28.1005Z" fill="black"></path>
                                                        </g>
                                                        <defs>
                                                            <clippath id="clip0_1044_19802">
                                                                <rect width="137" height="43" fill="white"></rect>
                                                            </clippath>
                                                        </defs>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Альфа-банк -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 33 50" class="e1B_-" data-test-id="HeaderLogo">
                                                        <path clip-rule="evenodd" d="M0 49.982v-6.825h32.61v6.825H0zm11.646-28.764h9.064L16.39 7.526h-.17l-4.573 13.692h-.001zm10.587-16.22l9.615 28.887h-7.115l-2.16-6.866H9.698l-2.33 6.867H.679l10.09-28.887C11.746 2.197 12.887 0 16.559 0s4.744 2.206 5.674 4.999v-.001z" fill="#ef3124" fill-rule="evenodd"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Сибур -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 588.8 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #008c95;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="m158.07,143.01s2.05-23.21,2.26-25.49c.25-5.44-3.96-10.05-9.39-10.3-.11,0-.23,0-.34,0h-58.59c-5.62-.39-10.51,3.81-10.98,9.42-.26,2.72-5.12,58.85-5.41,62.08-.68,5.41,3.15,10.35,8.56,11.03.35.04.7.07,1.05.08h58.24c7.74,0,10.74-4.09,11.4-10.41.4-3.78,2.31-26.63,2.31-26.63h-35.22l-1.51,17.66h-8.92l3.83-43.84h8.92l-1.42,16.41h35.22Z"></path>
                                                        <path class="cls-1" d="m212.41,114.28c-1.25,3.61-11.5,35.69-11.5,35.69l4.56-42.79h-35.2l-7.37,82.64h26.53c6.66,0,8.94-3.78,10.05-6.82,1.34-3.61,11.1-30.61,11.1-30.61l-3.59,37.42h35.22l7.25-82.6h-27.64c-4.37-.03-8.22,2.86-9.4,7.06Z"></path>
                                                        <path class="cls-1" d="m390.81,107.22l-3.3,37.67h-8.94l3.3-37.67h-35.2s-3.38,39.91-3.75,43.74c-.42,4.6,2.19,11.1,9.98,11.1h33.12l-.73,8.38h-44.07l-1.74,19.38h70.08c4.75,0,9.33-3.11,9.96-9.73.4-4.25,6.45-72.87,6.45-72.87h-35.17Z"></path>
                                                        <path class="cls-1" d="m482.69,107.23h-47.82l-7.22,82.59h35.2l2.24-25.56h34.21c6.06,0,10.06-3.09,10.72-10.17.24-2.76,3.04-34.06,3.21-36.82.43-6.11-4.42-10.05-10.41-10.05h-20.14Zm-16.08,39.91l1.74-20.49h8.83l-1.74,20.49h-8.83Z"></path>
                                                        <path class="cls-1" d="m291.22,134.96l.75-8.36h44.1l1.74-19.38h-79.38l-7.22,82.59h70.27c4.48,0,9.32-2.64,9.94-9.54.47-5.21,2.64-29.74,3.04-34.2.52-5.95-3.26-11.1-10.67-11.1h-32.57Zm5.69,37.67h-8.99l1.74-20.47h8.97l-1.72,20.47Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Мегафон -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="-0.9714696 -0.9714696 184.0213192 34.3252592">
                                                        <g fill="#00B956">
                                                            <path d="m 98.99175,16.35475 0,4.98125 c 0,0.185 -0.15125,0.345 -0.34625,0.345 l -3.9325,0 c -3.17625,-0.0512 -4.45125,-1.51625 -4.5,-4.70125 0.0487,-3.08625 1.18625,-4.62625 4.51875,-4.6725 l 0,0.007 8.28875,0 0,-3.41 -8.28875,0 c -5.905,0.03 -8.3375,2.54125 -8.455,7.87875 l -0.005,0.41875 0.005,0.007 c 0.12625,5.18 2.55375,7.72375 8.28875,7.80875 l 0,0.004 6.06875,0 c 1.40125,0 2.40625,-1.17 2.40625,-2.40375 l 0,-6.26375 -4.04875,0 z m 32.49387,8.6585 0,-6.63625 10.08625,0 0,-3.2925 -10.08625,0 0,-4.9725 c 0,-0.19 0.15375,-0.3475 0.3475,-0.3475 l 9.97251,0 0,-3.40875 -11.96126,0 c -1.4,0 -2.40749,1.1675 -2.40749,2.40375 l 0,16.25375 4.04874,0 z M 73.64162,21.622 c -0.1975,0 -0.3475,-0.15875 -0.3475,-0.34625 l 0,-2.88 10.0825,0 0,-3.29 -10.0825,0 0,-2.45375 c 0,-0.1875 0.15,-0.3475 0.3475,-0.3475 l 9.97375,0 0,-3.41 -11.9625,0 c -1.4025,0 -2.40999,1.1725 -2.40999,2.40625 l 0,11.325 c 0,1.2375 1.00749,2.4075 2.40999,2.4075 l 11.9625,0 0,-3.41125 -9.97375,0 z M 62.64087,5.97275 c -1.89375,0 -3.1025,1.01 -3.99874,3.04125 L 53.36962,21.159 48.09337,9.014 c -0.8975,-2.03125 -2.10625,-3.04125 -4.00125,-3.04125 -1.7725,0 -3.60374,1.26875 -3.60374,4.025 l 0,15.03625 4.04124,0 0,-14.625 5.30751,12.0425 c 0.71375,1.6825 1.86,2.73875 3.52875,2.74125 l 0.004,0 c 1.66751,-0.003 2.81626,-1.05875 3.52875,-2.74125 l 5.30625,-12.0425 0,14.625 4.04126,0 0,-15.03625 c 0,-2.75625 -1.83375,-4.025 -3.60501,-4.025 m 49.608,12.42325 2.48875,-5.85875 c 0.0787,-0.18375 0.22125,-0.2325 0.32875,-0.2325 l 0.002,0 c 0.1075,0 0.2525,0.0488 0.32875,0.2325 l 2.4925,5.85875 -5.64125,0 z m 6.14375,-7.7 c -0.67875,-1.47 -2.0275,-2.18625 -3.32375,-2.18625 l -0.002,0 c -1.2975,0 -2.64625,0.71625 -3.32,2.18625 l -6.61375,14.3375 4.3025,0 1.44125,-3.4075 8.38375,0 1.4425,3.4075 4.3025,0 -6.6125,-14.3375 z m 59.63925,-1.80113 0,10.78625 -6.94875,-9.48125 c -0.58625,-0.7375 -1.23875,-1.305 -2.58,-1.305 -1.23125,0 -2.75249,0.97375 -2.75249,2.8225 l 0,13.32625 4.0475,0 0,-10.78375 6.9175,9.5125 c 0.6025,0.82 1.225,1.27125 2.61,1.27125 1.2325,0 2.7525,-0.88375 2.7525,-2.82375 l 0,-13.325 -4.04625,0 z m -24.25175,12.95475 c -4.1325,0 -5.32124,-1.5175 -5.32124,-4.89625 l 0,-0.0175 c 0,-3.27875 1.13375,-4.89 5.32124,-4.89 4.19251,0 5.32375,1.61125 5.32375,4.89 l 0,0.0175 c 0,3.37875 -1.19124,4.89625 -5.32375,4.89625 m 9.26375,-4.91375 c -0.001,-5.65 -2.25625,-8.285 -9.26375,-8.285 -7.0025,0 -9.25875,2.635 -9.2625,8.285 l 0,0.0113 c 0,5.5625 2.31876,8.245 9.2625,8.245 6.94625,0 9.26375,-2.6825 9.26375,-8.245 l 0,-0.0113 z">
                                                            </path>
                                                            <g fill="#00B956">
                                                                <path d="m 13.08625,13.35 c -1.1175,0 -2.025,-0.90625 -2.025,-2.0225 0,-1.11875 0.9075,-2.025 2.025,-2.025 1.1175,0 2.0225,0.90625 2.0225,2.025 0,1.11625 -0.905,2.0225 -2.0225,2.0225 M 16.19,0 C 7.24625,0 0,7.2475 0,16.19 0,23.95 5.46125,30.435 12.7475,32.01375 l 0,-14.52875 10e-4,-10e-4 c 0.0163,-0.70125 0.575,-1.26625 1.27,-1.2925 l 0,-0.001 0.67375,0 1.37125,0 c 0.095,0 0.1725,-0.075 0.1775,-0.16875 L 16.242,0.0029 m 11.10475,25.01912 c -1.11625,0 -2.02375,-0.90625 -2.02375,-2.025 0,-1.115 0.9075,-2.02125 2.02375,-2.02125 1.11625,0 2.02375,0.90625 2.02375,2.02125 0,1.11875 -0.9075,2.025 -2.02375,2.025 m -4.74375,0 c -1.11625,0 -2.0225,-0.90625 -2.0225,-2.025 0,-1.115 0.90625,-2.02125 2.0225,-2.02125 1.1175,0 2.02375,0.90625 2.02375,2.02125 0,1.11875 -0.90625,2.025 -2.02375,2.025 m -4.74625,0 c -1.11625,0 -2.025,-0.90625 -2.025,-2.025 0,-1.115 0.90875,-2.02125 2.025,-2.02125 1.11875,0 2.025,0.90625 2.025,2.02125 0,1.11875 -0.90625,2.025 -2.025,2.025 m 0.33125,-24.9 0,16.0675 0,0.625 0,0.0113 -0.004,0.004 c -0.006,0.7225 -0.595,1.30625 -1.32,1.30625 l -0.6225,0 -1.37,0 c -0.1,0 -0.18,0.08 -0.18,0.17875 l 0,13.9975 c 0.49375,0.045 0.99125,0.07 1.4975,0.07 8.9425,0 16.19,-7.25 16.19,-16.1925 0,-8.26375 -6.1925,-15.0825 -14.19125,-16.0675">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Ростелеком -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 193 50" xmlns="http://www.w3.org/2000/svg">
                                                        <defs data-v-288a3998="">
                                                            <lineargradient data-v-288a3998="" name="logoShadow" id="logo-33" x1="55.883%" x2="14.167%" y1="73.973%" y2="0%">
                                                                <stop data-v-288a3998="" offset="0%" stop-color="#ff4f12"></stop>
                                                                <stop data-v-288a3998="" offset="100%" stop-color="#BA341C"></stop>
                                                            </lineargradient>
                                                        </defs>
                                                        <g data-v-288a3998="" id="logo" name="logo" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1" transform="translate(0, 0)">
                                                            <path data-v-288a3998="" name="innerSide" pid="0" d="M22,12 C13.7296802,3.99981632 9.59442802,-0.000183678141 9.59424346,0 L1.50568374,8 L1.50568374,8 C0.67361982,9.0972718 0.888613285,10.6613074 1.98588509,11.4933713 C2.41936453,11.8220799 2.94845379,12 3.49247009,12 C3.50604423,12 3.51961837,12 3.53319251,12 C9.68879501,12 15.8443975,12 22,12 Z" transform="translate(0.000000, 38.000000)" fill="#ff4f12"></path>
                                                            <path data-v-288a3998="" name="outerSide" pid="1" d="M30,18 L12,0 L1.95028875,10.4684492 C0.698836027,11.7720458 9.5486605e-15,13.5091031 9.76996262e-15,15.316172 L3.55271368e-15,46 C3.82325518e-15,48.209139 1.790861,50 4,50 L4,50 L4,50 C2.63136806,50 1.52187266,48.8905046 1.52187266,47.5218727 C1.52187266,46.8629999 1.78425529,46.2312512 2.25103343,45.7662443" fill="#7800ff"></path>
                                                        </g>
                                                        <g data-v-288a3998="" id="logo_text" name="logo_text" transform="translate(33.000000, 25.000000) scale(1)" fill="#101828" fill-rule="evenodd">
                                                            <polygon data-v-288a3998="" points="125.272633 6.17408992 120.944198 6.17408992 115.773594 11.4029891 115.773594 6.17408992 112.113191 6.17408992 112.113191 20.582524 115.773594 20.582524 115.773594 14.6275473 121.031516 20.582524 125.44702 20.582524 118.649377 12.8553922">
                                                            </polygon>
                                                            <path data-v-288a3998="" d="M9.12153798,9.91461705 L3.83434419,9.91461705 L3.83434419,3.52379535 L9.12153798,3.52379535 C11.7939101,3.52379535 13.0141271,4.80181085 13.0141271,6.71908217 C13.0141271,8.63635349 11.7939101,9.91461705 9.12153798,9.91461705 M9.23763101,0.0958263566 L4.96124031e-05,0.0958263566 L4.96124031e-05,20.430462 L3.83434419,20.430462 L3.83434419,13.342338 L9.23763101,13.342338 C13.8275225,13.342338 16.8486698,10.9894698 16.8486698,6.71908217 C16.8486698,2.44869457 13.8275225,0.0958263566 9.23763101,0.0958263566">
                                                            </path>
                                                            <path data-v-288a3998="" d="M25.5039256,17.5614264 C23.3544682,17.5614264 21.3498791,16.0217054 21.3498791,13.3781085 C21.3498791,10.7347597 23.3544682,9.19528682 25.5039256,9.19528682 C27.653631,9.19528682 29.6579721,10.7347597 29.6579721,13.3781085 C29.6579721,16.0217054 27.653631,17.5614264 25.5039256,17.5614264 M25.5039256,5.76731783 C21.5532899,5.76731783 17.6314295,8.32384496 17.6314295,13.3781085 C17.6314295,18.4331163 21.5532899,20.9891473 25.5039256,20.9891473 C29.4548093,20.9891473 33.3764217,18.4331163 33.3764217,13.3781085 C33.3764217,8.32384496 29.4548093,5.76731783 25.5039256,5.76731783">
                                                            </path>
                                                            <path data-v-288a3998="" d="M42.7212403,17.5614264 C40.5134884,17.5614264 38.8866977,15.9636589 38.8866977,13.3781085 C38.8866977,10.8218295 40.5715349,9.19528682 42.7212403,9.19528682 C44.0285271,9.19528682 45.1614264,9.80527132 46.0618915,11.1706047 L49.1991318,9.36942636 C48.1535504,7.1324031 45.8875039,5.76731783 42.7502636,5.76731783 C38.6542636,5.76731783 35.1682481,8.78846512 35.1682481,13.3781085 C35.1682481,17.968 38.480124,20.9891473 42.7502636,20.9891473 C45.8294574,20.9891473 47.891845,19.5950388 49.3444961,17.1258295 L46.3233488,15.4700155 C45.451907,16.6899845 44.5221705,17.5614264 42.7212403,17.5614264">
                                                            </path>
                                                            <path data-v-288a3998="" d="M81.6933953,14.3371659 C81.5192558,16.5446698 81.0829147,17.0388093 80.3275659,17.0388093 C79.8115969,17.0388093 79.5689922,16.981507 79.2157519,16.8889798 L79.2341085,20.6178481 C79.2341085,20.6178481 79.6890543,20.7567628 80.5314729,20.7567628 C83.6396899,20.7567628 84.8016124,18.7524217 85.0923411,14.4822822 L85.4408682,9.4567938 L89.5656434,9.4567938 L89.5656434,20.5536 L93.2260465,20.5536 L93.2260465,6.17418915 L82.3033798,6.17418915 L81.6933953,14.3371659 Z">
                                                            </path>
                                                            <path data-v-288a3998="" d="M67.3025488,11.4612093 C67.8254636,9.8344186 69.2778667,8.55615504 71.195138,8.55615504 C73.2287504,8.55615504 74.5940837,9.66003101 74.9426109,11.4612093 L67.3025488,11.4612093 Z M71.3114791,5.76744186 C67.1284093,5.76744186 63.7294636,8.8176124 63.7294636,13.3782326 C63.7294636,17.9391008 67.1284093,20.9892713 71.1370915,20.9892713 C74.3036031,20.9892713 76.3079442,19.7983256 77.7603473,17.3291163 L74.855293,15.8767132 C73.9548279,17.0096124 73.1414326,17.8517829 71.195138,17.8517829 C69.0456806,17.8517829 67.4769364,16.4576744 67.2445023,14.2499225 L78.3413085,14.2499225 L78.3413085,12.9716589 C78.3413085,8.75956589 75.4365023,5.76744186 71.3114791,5.76744186 L71.3114791,5.76744186 Z">
                                                            </path>
                                                            <path data-v-288a3998="" d="M98.848124,11.4612093 C99.3710388,9.8344186 100.823442,8.55615504 102.740713,8.55615504 C104.774078,8.55615504 106.139411,9.66003101 106.488186,11.4612093 L98.848124,11.4612093 Z M102.857054,5.76744186 C98.6737364,5.76744186 95.2750388,8.8176124 95.2750388,13.3782326 C95.2750388,17.9391008 98.6737364,20.9892713 102.682667,20.9892713 C105.84893,20.9892713 107.853271,19.7983256 109.305922,17.3291163 L106.401116,15.8767132 C105.500403,17.0096124 104.687008,17.8517829 102.740713,17.8517829 C100.591008,17.8517829 99.0222636,16.4576744 98.7900775,14.2499225 L109.886884,14.2499225 L109.886884,12.9716589 C109.886884,8.75956589 106.981829,5.76744186 102.857054,5.76744186 L102.857054,5.76744186 Z">
                                                            </path>
                                                            <polygon data-v-288a3998="" points="50.4830512 9.36940155 54.782462 9.36940155 54.782462 20.5825488 58.442369 20.5825488 58.442369 9.36940155 62.7420279 9.36940155 62.7420279 6.17411473 50.4830512 6.17411473">
                                                            </polygon>
                                                            <path data-v-288a3998="" d="M132.713898,17.5615504 C130.564192,17.5615504 128.559851,16.0218295 128.559851,13.3782326 C128.559851,10.7348837 130.564192,9.19541085 132.713898,9.19541085 C134.863603,9.19541085 136.867944,10.7348837 136.867944,13.3782326 C136.867944,16.0218295 134.863603,17.5615504 132.713898,17.5615504 M132.713898,5.76744186 C128.763262,5.76744186 124.841402,8.32372093 124.841402,13.3782326 C124.841402,18.4329922 128.763262,20.9892713 132.713898,20.9892713 C136.664533,20.9892713 140.586394,18.4329922 140.586394,13.3782326 C140.586394,8.32372093 136.664533,5.76744186 132.713898,5.76744186">
                                                            </path>
                                                            <polygon data-v-288a3998="" points="155.150313 6.17136124 151.177848 16.262276 147.205135 6.17136124 142.421011 6.17136124 142.421011 20.5537488 145.900329 20.5537488 145.900329 11.4486326 149.756949 20.5537488 152.598747 20.5537488 156.455119 11.4486326 156.455119 20.5537488 159.934685 20.5537488 159.934685 6.17136124">
                                                            </polygon>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- UGMK -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <?xml version="1.0" encoding="UTF-8"?>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 550.03 204">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #89211b;
                                                                }
                                                                .cls-1,
                                                                .cls-2,
                                                                .cls-3,
                                                                .cls-4,
                                                                .cls-5 {
                                                                    fill-rule: evenodd;
                                                                }
                                                                .cls-2 {
                                                                    fill: #1f1a17;
                                                                }
                                                                .cls-3 {
                                                                    fill: #eb891b;
                                                                }
                                                                .cls-4 {
                                                                    fill: #c9501a;
                                                                }
                                                                .cls-5 {
                                                                    fill: #fee215;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <g>
                                                            <path id="_181712744" data-name=" 181712744" class="cls-2" d="m132.5,181.98c2.95-4.53,14.36-19.09,6.2-20.63-4.08-.56-14.4,2.53-23.95,3.67-20.4,2.52-43.87,1.29-62.82-7.51-.28-.14-.3-.27-.07-.42,2.03-1.13,10.45-.18,10.07-4.45-.26-2.87-3.52-4.93-5.53-6.52-15.16-12.02-28.29-28.47-31.99-47.89-4.48-23.51,5.75-47.69,20.32-65.76.25-.27.72-.08,1.29.35,8.03,4.47,13.64,2.69,18.07,1.66,31.55-9.3,45.22-13.71,77.69-13.28.68,0,10.55.2,9.59,1.08-.98.9-6.57,3.34-8.68,4.2-2.97,1.2-8.34,3.26-11.59,5.01-5.39,2.9-13.15,7.84-3.46,10.74,30.38,8.78,52.69,17.88,70.09,46.36.33.55.28.78-.4.55-9.42-3.12-10.55-2.07-10.55,8.16.21,3.58.36,7.12.35,10.68-.06,23.91-11.01,44.29-29.32,59.75-7.54,6.36-16,11.52-24.67,14.9-.93.34-1.24.27-.63-.65h0Zm-31.65-35.7c-17.59.68-31.77-15.67-43.72-31.49-.16-.37-2.58-3.85-2.1-4.89,4.47-13.92,8.75-17.81,13.03-28.21,3.14-7.17,20.42-23.27,28.09-22.29,0,.22,0,.49.04.75-10.76,8.94,1.79,5.93,8.97,4.78,15.33-1.19,28.74-.27,42.81,7.65,2.91-.59,10.06,9.89,9.74,10.59-1.18,1.19-8.48-1.95-8.88.52,1.92,3.85,3.46,6.78,5.42,10.68,5.25,13.92,4.85,23.99-2.51,36.71-.41.72-2.09,3.6-2.81,2.87-1.75-1.77-.43-5.91-1.12-7.19-.45-.83-.07-.68-.73-.18-5.33,4.06-11.16,7.82-16.99,11.1-9.1,4.73-19.12,8.61-29.22,8.61h0Z"></path>
                                                            <path id="_181712672" data-name=" 181712672" class="cls-1" d="m146.69,173.43c5.9-5.35,14.74-23.22,9.55-24.61-1.87-.47-3.6.65-6.48,2.04-3.95,1.89-8.77,4.79-14.22,6.66-13.54,4.6-26.55,6.85-39.34,7.08-5.51.1-10.78-.37-15.91-.98-3.65-.68-4.38-1.03-.14-1.68,7.7-.98,25.11-6.54,15.41-8.64-3.89-.78-4.95-.9-8.55-1.83-25.96-6.23-51.16-21.88-58.93-47.56-8-26.43,4.14-52.1,15.51-66.71-.27,4.98-.96,14.39,10.11,7.78,20.12-12.38,37.83-19.16,61.72-22.32,8.2-1.08,16.18-1.39,24.46-1.32,2.19.02,4.32.06,6.15.15,3.15.16,5.16.47,5.12.66,0,.13-.14.25-.5.43-1.96.98-4.04,1.81-6.08,2.6-13,5.06-48.82,18.4-22.86,20.85,21.74,2.57,41.93,8.56,58.1,23.5,2.24,1.79,4.78,5.01,4.61,5.31,0,.01-1.59-.86-2.75-1.4-5.94-2.99-22.19-7.09-13.94,1.3,29.85,31.7,15.03,75.29-20.9,98.87-1.09.72-1.13.68-.13-.18h0Zm19.6-112.03s0,0,.01-.01c-.17-.09-.35-.19-.52-.28.17.09.34.19.51.29h0Zm-60.85,83.32c2.08.29,4,.47,6.6-.15,13.22-3.16,24.77-11.17,32.45-18.09,6.1-5.65,6.3,3.26,6.22,6.3.02.7.37.6.83.04,1.94-2.4,4.15-11.28,4.86-14.82,2.52-12.69-1.88-21.46-8.04-32.11-4.7-7.58,5.59-5.64,8.76-4.18,1.89.87,1.65.95.05-.53-14.72-13.64-35.51-17.51-54.98-15.07-2.84.35-7.26,1.23-8.54.99-3.95-.86-.39-5.45,1.87-7.34-6.29,2.47-11.86,6.12-16.5,9.81-8.86,7.05-14.03,18.22-17.21,29.46l-4.68,14.48c-.16.42-.07.93.4,1.26,24.66,15.92,37.83,28.07,47.92,29.94h0Z"></path>
                                                            <path id="_181711352" data-name=" 181711352" class="cls-4" d="m148.35,23.3c-17.25,6.45-34.62,11.31-49.65,21.29-2.57,1.82-4.2,3.48-.01,3.08,28.81-2.94,55.62,2.96,78.47,20.65,1.6,1.23,1.48,1.14-.32.36-7.09-3.07-12.71-5.15-21.1-7.24-10.61-2.65-18.4-2.92-4.39,6.24,15.63,10.21,26.82,23.27,28.66,43.1.24,2.54.32,5.19.24,7.96-.06,1.05-.15,2.1-.28,3.15-1.67,18.64-12.38,33.21-25.8,45.33-3.39,3.07-3.67,3.01-.45-.37,7.42-7.78,12.45-17.48,15.46-27.95,3.75-13.03,1.81-25.07-2.45-24.16-1.19.25-1.84,1.86-2.77,4.28-2.46,6.42-5.71,11.26-10.15,16.45-10.28,12.01-26.61,18.78-42.14,23.89,3.47-.33,10.14-2.83,13.91-4.19,16.08-6.63,26.22-12.88,36.1-25.91,1.45-1.96,1.08-.49-.35,1.77-8.07,13.47-24.16,24.25-46.66,29.49-7.65,1.73-15.89,1.96-23.73,2.36-5.3.27-5.59.03-.1-.84,9.14-1.44,17.76-3.51,25.63-8.79,3.74-2.51.46-2.52-1.35-2.35-11.84,1.07-22.98.4-34.48-2.67-31.74-9.92-55.75-31.16-53.32-66.4,1.16-14.78,7.24-29.07,12.63-37.99-.87,2.62-2.68,10.14-2.89,16.32-.2,5.94.65,9.21,3.23,5.68,1-1.39,1.75-2.34,2.8-3.66,21.4-26.78,54.72-37.55,88.8-39.71,10.91-.81,14.68-.59,17.12-.34,2.61.26.95.48-.65,1.17Zm4.93,58.88c1.2.22,2.58.63,3.45.92.46.09-15.82-22.54-56.91-17.93-9.28.88-4.4-4.56,1.23-6.49,3.06-1.02,4.14-1.4-.24-.39-2.01.47-3.96,1.12-5.89,1.82-18.79,8.39-29.32,21.45-35.37,40.02-.53,1.87-1.81,5.24-2.89,8.45-.88,2.2-1.33,6.82-4.64-2.16.2,2.07,1.44,5.68,3.15,8.39.15.28.45.58.96.99,7.98,6.44,16.66,11.65,27.67,19.27,1.99,1.63,8.62,5,11.99,7.43,1.35,1.06.24,1.48-1.73,1.59-2.04.11-3.76-.21-5.74-.66-15.84-3.63-30.99-11.72-42.49-23.2.43.54.88,1.08,1.33,1.6,2.9,3.19,6.09,6.1,9.5,8.68,6.14,4.57,13.16,8.24,19.9,10.67,6.59,2.32,13.49,3.69,20.43,4.04-.18.03-.39.06-.64.07,11.53.52,20.08-1.43,28.62-5.28,5.38-2.43,10.38-5.48,15.57-9.54,1.59-1.2,6.13-5.23,7.36-4.55,1.26.7.85,4.65,1.01,7.08.02.48.42.61.73.23,3.64-4.42,5.45-9.78,6.72-14.65,2.53-12.69-.17-21.09-6.45-31.66-2.84-4.77-.86-5.54,3.34-4.78h0Z"></path>
                                                            <path id="_181711328" data-name=" 181711328" class="cls-3" d="m44.69,118.96c18.91,23.37,52.64,32.88,80.24,21.71,2.5-.98,12.38-5.87,16.14-9.18,4.32-3.7,6.19-3.94,5.96-1.24-.41,4.88-2.72,9.01-6.04,12.51,7.62-5.15,14.05-11.84,17.04-23.57,2.62-10.14-.43-23.25-6.26-31.94-2.06-3.17-1.93-4.12-.14-3.95,7.1.67,12.31,4.83,15.92,10.62,6.66,10.68,8.18,27.04,5.69,37.27-1.21,4.96-1.42,5.48-.77.2,1.09-8.8,1.52-19.84-4.77-27.94-4.45-4.06-4.15,2.77-4.99,8.02-2.5,23.01-22.87,35.33-39.56,42.78l.05-.03c-1.7.75-3.37,1.43-4.96,2.05-.85.35-1.71.58-.14-.33,5.58-3.27,12.32-8.11,11.49-9.93-1.07-1.55-11.32,2.59-23.86,2.91-28.57.45-52.81-8.25-69.13-32.92-11.18-17.94-9.28-41.65-2.93-57.43,3.62-8.99.37,2.63-.16,6.2-2.9,19.57-.09,37.92,11.21,54.21Zm11.94-.84l.22-.3,26.35,18.53,6.51,4.51c1.56.9,1.2,1.29-1.19.6-11.77-3.41-22.32-11.72-31.9-23.34ZM148.32,22.55c.37.05.35.23-.8.67-17.72,5.47-38.62,10.91-55.91,18.88-10.33,4.76-18.51,10.12-25.88,18.83-22.08,26.11-21.35,58.3,9.81,77.75.27.18.94.71.25.44-32.9-14.46-51.34-50.01-24.33-81.66,26.52-28.68,66.52-34.57,96.86-34.92h0Zm-52.29,20.52c-4.94,2.49-11.02,6.5-14.29,10.12-1.6,1.98-.96,2.41,2.83.79,26.24-10.18,56.89-3.87,78.71,6.35,5.2,2.53,4.73,3.15-.61,1.05-11.83-4.77-50.83-8.87-25.84,1.46,3.85,1.59,7.54,3.38,11.01,5.36,19.92,11.39,32.86,29.35,30.44,55.08-.12,5.49-4.52,17.96-9.26,24.87-2.94,4.59-3.04,4.44-.7-.13,8.91-17.7,10.97-35.31,1.81-53.32-5.48-10.77-14.27-19.15-25.46-24.61-5.62-2.74-11.85-4.74-18.57-5.94-7.49-1.33-17.2-1.04-24.71-.64-3.89.21-4.66-.53-2.46-2.39,2.31-1.9,10.03-5.06,20.7-5.18,1.22.03,5.05.12,4.14-.13-34.97-1.06-54.75,14.55-64.47,38.82-1.62,4.05-2.73,8.02-3.71,12.24-.11.46-.77,2.43-.96,2.41-.22.08-1.13-1.48-1.29-1.91-.79-2.06-1.33-4.83-1.38-7.01-.57-25.21,19.98-50.24,44.08-57.26h0Z"></path>
                                                            <path id="_181711184" data-name=" 181711184" class="cls-5" d="m101.23,62.53c-2.38.34-2.84-1.16.6-1.67,39.07-4.59,70.23,18.96,73.83,44.62-7.68-30.02-37.95-47.13-74.43-42.95Zm-67.1-3.44c-4.73,18.39-3.7,32.62.87,48.52-7.28-14.95-6.73-35.04-.87-48.52Zm8.66,35.98c-2.61-49.14,57.8-70.32,100.17-71.63,2.47-.18,2.69-.11-.26.67-22.33,5.01-54.23,12.29-75.03,29.7-11.38,9.52-20.25,25.58-21.04,40.85-.66,12.74,3.89,21.87,11.85,31.38-9.2-7.78-15.05-18.67-15.7-30.96Zm13.9-7.94c9.6-29.24,37.17-39.98,73.75-35.09-39.79-3.39-61.59,9-72.16,35.44-.95,2.39-1.68,4.64-2.23,7-.56,2.44-.99,4.96-1.34,7.44-.33,2.35-.26,3.97-.43,4.01-.22.05-.26-2.71,0-6.43.38-4.18,1.09-8.35,2.41-12.36h0Zm53.89,58.88c4.6-.95,9.33-2.05,10.84-2.58,10.76-3.73,17.12-7.58,22.15-11.78,1.19-1.22,3.12-1.69,1.12,1.1-5.04,5.64-15.87,9.85-23.47,11.98-3.66,1.07-11.62,2.66-17.37,2.91-21.62,1.3-40.56-6.66-49.58-14.2,2.19,1.38,25.38,17.61,56.31,12.57h0Zm-43.62-19.5l.12-.14,13.11,9.23,3.24,2.25c.78.45.51.79-.62.26-5.65-2.66-10.9-6.49-15.85-11.6h0Zm90.49-1.78c4.83-13,2.64-26.5-5.28-38.96-.87-1.18.24-1.89,1.93-.27,7.73,7.77,9.88,28.1,3.35,39.23h0Z"></path>
                                                        </g>
                                                        <g>
                                                            <path id="_181711160" data-name=" 181711160" class="cls-2" d="m366.94,45.87c9.29,0,18.41,0,27.69,0l15.63,34.67,15.63-34.7c9.34,0,18.53.03,27.88.03v52.42h-14.52v-37.84h-4.15l-16.92,37.84h-15.81l-16.92-37.84h-3.97v37.84h-14.52c0-17.48-.02-34.91-.02-52.36h.02v-.06h0Zm94.62.01h14.56v19.38h8.42l20.59-19.38h21.56l-29.67,26.03,29.51,26.41h-21.56l-20.43-19.36h-8.42v19.36h-14.56v-52.44h0Zm-244.36,37.97c9.51,0,40.3,0,49.61,0,.2.01.41,0,.61-.05,1.37-.23,2.43-1.42,2.43-2.86v-7.04c-11.04,0-26.69,0-37.45,0-.24,0-.49,0-.73,0-7.38,0-13.51-5.56-14.39-12.71-.13-.8-.13-1.64-.09-2.45v-12.73h15.01v9.45c0,.4,0,.8.02,1.2.03,1.62,1.43,2.94,3.03,2.85,9.25,0,24.8,0,34.57,0l-.03-13.59h15.05l-.02,37.14c.03.66.01,1.8-.09,2.45-.88,7.15-7.01,12.71-14.39,12.71-.24,0-.49,0-.73,0-10.8,0-41.59,0-52.39,0v-14.38h0Zm75.92,14.39h14.98l.02-34.05c0-.75-.05-1.59.3-2.28.48-.96,1.48-1.63,2.59-1.63.05,0,.1,0,.15,0,9.28,0,40.1,0,49.58,0v-14.4c-10.79,0-41.64,0-52.43,0-.11,0-.22,0-.34,0-.13,0-.26,0-.39,0-7.38,0-13.51,5.57-14.4,12.72-.06.38-.09.75-.09,1.11v.03c0,.22-.02.43-.02.65s0,.45.02.67l.02,37.17h0Z"></path>
                                                            <path id="_181711136" data-name=" 181711136" class="cls-3" d="m477.27,131.9v7.48c0,.29,0,.58,0,.87.03,1.51,1.34,2.76,2.83,2.68,9.28,0,20.97,0,30.24,0,1.52.01,2.83-1.17,2.83-2.72v-1.67h13.48v3.67c.06,1.25-.05,2.38-.33,3.6-1.25,5.4-5.72,9.67-11.26,10.46-.86.12-1.72.14-2.58.14-11.55,0-23.1,0-34.65,0-1.24,0-2.44-.06-3.65-.33-5.49-1.25-9.73-5.87-10.43-11.56-.12-.75-.12-1.53-.09-2.29v-10.3s0-9.82,0-9.82c-.03-.75-.03-1.55.09-2.29.73-5.9,5.26-10.66,11.04-11.69,1.01-.18,2.02-.21,3.04-.21,11.55,0,23.1,0,34.65,0,.71,0,1.41,0,2.11.08,5.93.63,10.74,5.15,11.84,10.95.2,1.05.23,2.01.22,3.16v3.37h-13.48v-1.37c0-.62-.2-1.18-.55-1.64-.52-.68-1.42-1.1-2.27-1.08-9.28,0-20.97,0-30.24,0-.18,0-.35,0-.52.04-1.27.18-2.25,1.26-2.31,2.55-.01.26,0,.52,0,.78v7.19h0Zm-75.95-24.13l14.54,32.12,14.53-32.08h26.06v48.54h-13.55v-35.11h-3.88l-15.79,35.11h-14.76l-15.79-35.11h-3.7v35.11h-13.55c0-16.21-.02-32.4-.02-48.59h25.9s0,.01,0,.01Zm-88.04,0l14.54,32.12,14.53-32.08h26.06v48.54h-13.55v-35.11h-3.88l-15.79,35.11h-14.76l-15.79-35.11h-3.7v35.11h-13.55c0-16.21-.02-32.4-.02-48.59h25.9Zm-96.11,0h13.58l-.02,31.89c-.05,1.63.8,3.21,2.84,3.31,9.28,0,20.96,0,30.24,0,1.51.08,2.83-1.21,2.83-2.71v-32.5h13.5l.02,34.48c.02.41.02.81,0,1.22v.03c0,.34-.03.69-.09,1.03-.82,6.65-6.53,11.83-13.41,11.83h-36.01c-6.88,0-12.58-5.18-13.41-11.83-.06-.35-.09-.69-.09-1.03v-.03c-.02-.41-.02-.81,0-1.22,0,0,.01-34.47.01-34.47Z"></path>
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Т+ групп -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 588.8 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #f15a22;
                                                                }
                                                                .cls-2 {
                                                                    fill: #65737f;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="m204.38,56.36c.08.22.04.44.04.66,0,10.94,0,21.89,0,32.83,0,.48-.05.97.08,1.44.27.99.87,1.61,1.9,1.77.84.12,1.69.13,2.53.12,7.14-.1,14.27-.04,21.41-.05,3.31,0,6.61.02,9.92.03.18,0,.36.01.54,0,.28-.02.42.08.4.38-.01.14,0,.28,0,.42,0,7.64,0,15.28,0,22.92,0,.06,0,.12,0,.18,0,.59,0,.59-.6.59-4.17,0-8.35,0-12.52,0-7.42,0-14.84.05-22.26,0-5.87-.04-11.07-2.04-15.68-5.64-1.01-.79-1.93-1.68-2.83-2.59-.92-.93-1.73-1.95-2.51-2.99-.58-.77-1.04-1.61-1.52-2.44-.52-.91-1.01-1.85-1.39-2.82-.63-1.61-1.13-3.26-1.47-4.95-.41-2-.59-4.02-.59-6.07,0-11.02,0-22.05,0-33.07,0-.24-.01-.48-.02-.72,8.19,0,16.37,0,24.56,0Z"></path>
                                                        <path class="cls-1" d="m313.64,56.36c-.08.26-.04.52-.04.78,0,10.86-.01,21.73-.01,32.59,0,.5-.03,1.01.04,1.51.14,1.02.67,1.57,1.69,1.77.7.14,1.4.2,2.1.17,3.41-.15,6.81,0,10.22-.02,5.71-.04,11.41-.04,17.12.02,1.61.02,3.23,0,4.83-.15.06,0,.12,0,.18-.01.28-.05.39.06.4.36.02.81.1,1.61.11,2.42.04,2.32.02,4.64-.03,6.95-.04,1.59-.06,3.18.04,4.77.1,1.65.04,3.3,0,4.96-.04,1.55-.06,3.1.02,4.65.03.49.02.5-.48.5-2.46,0-4.92.02-7.38.02-7.7,0-15.4,0-23.11-.01-.06,0-.12,0-.18,0-.47-.01-.48-.01-.51-.46-.06-.76-.15-1.52-.27-2.28-.75-4.73-2.5-9.07-5.19-13.02-.61-.9-1.25-1.79-1.99-2.59-.57-.62-1.04-1.33-1.73-1.83-.37-.27-.6-.7-.95-1-.97-.82-1.89-1.71-2.94-2.44-.72-.5-1.43-.99-2.18-1.44-.96-.58-2.01-1-2.99-1.54-.79-.43-1.6-.82-2.44-1.11-.71-.24-1.41-.48-2.13-.7-1.11-.35-2.24-.63-3.38-.85-1.03-.21-2.06-.37-3.11-.44-.31-.02-.45-.12-.41-.43,0-.08,0-.16,0-.24,0-10.12,0-20.24,0-30.36,0-.18.01-.36.02-.54,8.23,0,16.46,0,24.68,0Z"></path>
                                                        <path class="cls-2" d="m445.65,214.21c-.17.3-.1.63-.12.94-.17,2.32-.54,4.6-1.42,6.77-.86,2.12-2.18,3.85-4.27,4.9-1.05.52-2.17.85-3.33,1.03-1.11.17-2.23.3-3.37.28-1.9-.03-3.71-.42-5.47-1.13-1.65-.67-3.06-1.68-4.35-2.94-.16.21-.09.43-.09.63,0,4.82,0,9.63,0,14.45,0,.9.1.79-.82.79-.99,0-1.98,0-2.96,0-.71,0-.64.02-.64-.67,0-.04,0-.08,0-.12,0-14.89,0-29.78,0-44.68,0-.89-.11-.79.82-.79,1.01,0,2.02,0,3.02,0,.58,0,.58,0,.58.61,0,.67,0,1.33,0,2,0,.11-.04.24.09.36.47-.38.94-.76,1.41-1.13,1.58-1.26,3.39-2.01,5.34-2.43,2.26-.48,4.53-.41,6.78,0,1.23.22,2.42.63,3.53,1.27,1.77,1.01,2.87,2.56,3.65,4.37,1.01,2.36,1.39,4.86,1.51,7.41.01.24-.02.49.11.71v7.38Zm-22.41-3.82h-.02c0,3.57.01,7.13-.01,10.7,0,.47.14.71.56.93,2.5,1.3,5.17,1.88,7.96,1.97,1.33.04,2.65-.13,3.97-.32,2.09-.31,3.58-1.31,4.25-3.42.52-1.65.78-3.34.84-5.05.12-3.6.18-7.21-.1-10.81-.1-1.24-.32-2.47-.71-3.66-.59-1.8-1.75-3.05-3.65-3.4-2.9-.53-5.81-.55-8.71.09-1.24.27-2.41.74-3.59,1.2-.55.22-.82.53-.82,1.19.04,3.52.02,7.05.02,10.58Z"></path>
                                                        <path class="cls-2" d="m179.84,160.17c0-13.41,0-26.81,0-40.22,0-1.38-1.19-2.26-2.33-2.27-.99-.01-1.98,0-2.96,0-10.2,0-20.41,0-30.61,0-.84,0-.79.09-.79-.77,0-7.68,0-15.36,0-23.04q0-.79.78-.79c9.98.1,19.96.1,29.94.04.79,0,.77-.17.88.8.35,3.28,1.15,6.46,2.45,9.5,3.13,7.34,8.36,12.73,15.44,16.34,3.19,1.62,6.58,2.6,10.13,2.98.34.04.68.04,1.03.07.57.05.57.05.57.6,0,.24,0,.48,0,.73.12,25.08,0,50.15.05,75.23,0,.88.12,1.68.77,2.33.36.36.78.56,1.28.58.32.01.64,0,.97,0,10.99,0,21.98,0,32.97,0,.88,0,.79-.11.79.82,0,7.7,0,15.4,0,23.1,0,.84.08.76-.73.76-11.37,0-22.75-.01-34.12,0-1.81,0-3.61-.13-5.36-.54-2.83-.67-5.54-1.69-8.05-3.21-.98-.59-1.94-1.2-2.83-1.91-1.22-.97-2.38-2.01-3.42-3.17-1.1-1.22-2.06-2.53-2.92-3.92-.47-.76-.82-1.59-1.25-2.37-.36-.66-.68-1.34-.9-2.06-.24-.78-.57-1.53-.78-2.31-.32-1.16-.5-2.37-.66-3.56-.27-1.98-.34-3.97-.34-5.97.01-12.58,0-25.16,0-37.74h0Z"></path>
                                                        <path class="cls-2" d="m313.61,135.21c0,5.68,0,11.37,0,17.05,0,.65-.05,1.29-.17,1.92-.09.48-.1.49-.58.48-1.39,0-2.78-.03-4.17-.03-6.31,0-12.62,0-18.94,0-.06,0-.12,0-.18,0-.59,0-.6,0-.6-.6-.01-5.73-.02-11.45-.03-17.18,0-5.5,0-11.01,0-16.51,0-1.69-1.02-2.69-2.72-2.69-3.43,0-6.86,0-10.28,0-7.66,0-15.33,0-22.99,0-.82,0-.74.08-.74-.75,0-7.64,0-15.28,0-22.92,0-.73,0-.73.73-.78,1.99-.12,3.99-.07,5.99-.07,3.61,0,7.22.08,10.83-.01,1.9-.05,3.79-.04,5.68.07.83.05,1.65.02,2.48-.05.62-.06,1.25-.07,1.87-.05,2.46.08,4.92-.02,7.38.04,3.7.08,7.26.8,10.64,2.36,5.55,2.57,9.75,6.56,12.65,11.93,1.77,3.29,2.75,6.81,2.98,10.54.12,1.91.18,3.82.17,5.74,0,3.83,0,7.66,0,11.49h0Z"></path>
                                                        <path class="cls-2" d="m311.16,197.53c.05.22.24.32.37.46.66.68,1.26,1.41,1.8,2.2,1.59,2.29,2.03,4.82,1.58,7.55-.24,1.47-.7,2.86-1.59,4.07-1.2,1.63-2.88,2.54-4.76,3.13-1.76.55-3.58.76-5.42.84-2.71.12-5.4,0-8.06-.55-.2-.04-.4-.1-.43.23-.07.9-.22,1.8-.16,2.71.09,1.34.48,1.85,1.78,2.25,1.07.33,2.18.4,3.28.46,2.15.11,4.31.07,6.47.13,1.86.06,3.7.23,5.5.72.49.13.96.29,1.44.45,2.35.76,3.67,2.45,4.29,4.76.35,1.3.32,2.63.3,3.96-.01.93-.13,1.85-.35,2.75-.69,2.76-2.48,4.54-5.05,5.61-1.44.6-2.97.87-4.5,1.1-2.75.42-5.51.28-8.27.24-1.42-.02-2.85-.22-4.25-.55-.35-.08-.71,0-1.04-.18-.52-.27-1.1-.36-1.64-.61-.37-.17-.8-.24-1.12-.52-.57-.5-1.21-.9-1.74-1.47-1.17-1.26-1.47-2.81-1.59-4.42-.09-1.15,0-2.31.3-3.42.22-.82.67-1.58,1.19-2.27.81-1.09,1.81-2,2.91-2.79.16-.12.33-.23.49-.36.03-.02.03-.07.06-.14-.36-.24-.7-.53-1.09-.71-.77-.37-1.08-1.09-1.48-1.76-.37-.62-.31-1.3-.34-1.97-.02-.66.16-1.28.45-1.86.34-.68.8-1.28,1.33-1.84.39-.41.87-.69,1.28-1.06,0-.13-.08-.17-.17-.21-1.45-.67-2.53-1.74-3.39-3.08-.23-.36-.38-.72-.51-1.12-.74-2.16-.9-4.38-.78-6.63.09-1.72.5-3.39,1.24-4.95.59-1.25,1.52-2.22,2.66-2.98,1.36-.91,2.87-1.39,4.47-1.67.99-.17,2-.23,3.01-.25,4.43-.1,8.87-.11,13.3-.07,1.63.02,3.26.05,4.9.08.49,0,.49.01.47.52-.03.87-.07,1.73-.17,2.59-.06.56-.06.56-.62.56-1.92,0-3.83,0-5.75.02-.19,0-.4-.06-.59.07Zm-7.81-.13c-1.67.04-3.34.07-5.02.13-.93.03-1.84.23-2.69.62-1.3.59-2.14,1.53-2.35,2.99-.09.66-.21,1.31-.27,1.97-.18,1.9-.06,3.78.48,5.62.18.6.5,1.09.94,1.52.46.44,1,.74,1.59.96.7.26,1.44.39,2.18.47,2.27.23,4.55.17,6.82-.02.88-.07,1.76-.21,2.59-.57,1.23-.53,2.05-1.39,2.31-2.74.13-.65.25-1.31.3-1.97.22-2.87-.18-5.66-1.13-8.38-.19-.54-.15-.46-.68-.48-1.69-.09-3.38-.09-5.08-.11Zm-.67,39.09c1.03,0,2.06-.09,3.08-.16,1.31-.09,2.59-.32,3.84-.76,1.63-.57,2.58-1.74,2.97-3.38.26-1.07.16-2.16.05-3.24-.05-.46-.16-.91-.32-1.35-.37-.98-1.03-1.67-2.04-2-.71-.23-1.43-.4-2.17-.5-1.26-.18-2.53-.17-3.8-.19-2.4-.04-4.8-.01-7.18-.3-.76-.09-1.52-.17-2.28-.23-.52-.04-.52-.03-.69.44-.18.53-.37,1.06-.53,1.6-.49,1.67-.85,3.37-.65,5.12.29,2.56,1.04,3.63,3.6,4.38.12.03.23.06.35.08,1.91.37,3.84.39,5.77.5Z"></path>
                                                        <path class="cls-2" d="m347.57,210.31c.05-1.8.02-3.51.17-5.22.12-1.41.37-2.79.67-4.17.19-.91.6-1.72.93-2.56.25-.64.75-1.17,1.1-1.77.38-.64.93-1.07,1.51-1.52.65-.5,1.32-.99,2.08-1.23,1-.33,2.02-.64,3.08-.78,2.93-.38,5.87-.4,8.8.01,1.67.24,3.27.75,4.7,1.69,1.15.76,2.02,1.78,2.7,2.97.92,1.64,1.4,3.42,1.69,5.26.5,3.24.64,6.5.48,9.77-.12,2.44-.33,4.87-.96,7.24-.28,1.03-.67,2.02-1.17,2.97-1.33,2.5-3.46,3.93-6.16,4.55-2.97.69-5.98.79-9.01.42-.86-.11-1.71-.25-2.55-.47-3.18-.81-5.35-2.75-6.55-5.81-.61-1.55-.97-3.15-1.18-4.8-.28-2.2-.27-4.42-.31-6.55Zm23.03.23c0-1.35.03-2.7,0-4.05-.05-2.02-.24-4.02-.93-5.94-.73-2.03-2.22-3.14-4.32-3.37-2.55-.28-5.11-.26-7.66,0-2.14.21-3.83,1.59-4.44,3.63-.41,1.36-.66,2.75-.73,4.15-.19,3.99-.28,7.97.09,11.96.11,1.2.32,2.4.71,3.55.56,1.68,1.69,2.75,3.46,3.1.55.11,1.11.19,1.67.26,2.6.34,5.19.24,7.76-.25,1.73-.33,2.87-1.38,3.45-3.04.51-1.43.74-2.92.85-4.43.14-1.85.09-3.71.09-5.56Z"></path>
                                                        <path class="cls-2" d="m410.55,226.77c-.55.14-1.04.23-1.52.38-.66.22-1.37.24-2,.56-.12.06-.24,0-.35.03-.28.1-.4-.04-.48-.29-.28-.88-.58-1.76-.87-2.64-.09-.26-.18-.52-.27-.78-.24.02-.33.2-.46.31-2.32,2.09-5.04,3.29-8.13,3.68-2.21.28-4.38.03-6.54-.44-.55-.12-.99-.48-1.55-.52-1.04-.72-2.08-1.41-2.78-2.53-1-1.6-1.49-3.35-1.8-5.18-.34-2.01-.38-4.05-.47-6.08-.28-6.32-.05-12.64-.13-18.97,0-.46,0-.46.49-.56.57-.13,1.13-.21,1.72-.12.6.09,1.21.08,1.81.11.48.02.48.02.48.52,0,.1,0,.2,0,.3,0,6.05-.01,12.09,0,18.14,0,1.91.05,3.83.33,5.73.11.7.27,1.38.45,2.06.26.95.84,1.63,1.66,2.14.86.53,1.81.8,2.8.87,1.95.13,3.91.2,5.86.02,1.73-.17,3.42-.51,5.04-1.18.35-.15.62-.44,1-.51.12-.02.13-.14.13-.24,0-.18,0-.36,0-.54,0-8.85,0-17.7-.01-26.55,0-.84-.09-.74.73-.77,1.11-.04,2.22-.02,3.33.02.43.02.43.03.44.45,0,.16,0,.32,0,.48,0,9.15,0,18.3-.02,27.45,0,1.04.25,2.03.56,3.02.16.52.33,1.04.51,1.62Z"></path>
                                                        <path class="cls-2" d="m329.56,196.86c.97-.7,1.85-1.37,2.76-1.98,2.6-1.74,5.44-2.45,8.55-2,.92.13,1.82.33,2.72.55.42.11.41.13.3.57-.29,1.15-.57,2.29-.85,3.44-.05.19-.08.4-.2.59-.61-.17-1.23-.36-1.85-.5-2.72-.62-5.41-.37-8.06.41-.89.26-1.75.6-2.6.97-.26.11-.39.25-.36.54.02.16,0,.32,0,.48,0,8.87,0,17.74,0,26.61,0,.8.08.72-.7.72-1.11,0-2.22,0-3.33,0-.43,0-.44-.01-.45-.43,0-.1,0-.2,0-.3,0-9.05,0-18.1,0-27.15,0-.69-.14-1.36-.33-2.02-.26-.91-.62-1.79-.8-2.72-.11-.6-.12-.61.45-.73,1.07-.24,2.14-.46,3.21-.69.43-.09.44-.07.56.38.26.92.52,1.83.77,2.75.04.16.14.28.21.51Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Спортмастер -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg id="_Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 791.72 297">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #ed1c24;
                                                                }
                                                                .cls-1,
                                                                .cls-2 {
                                                                    fill-rule: evenodd;
                                                                }

                                                                .cls-1,
                                                                .cls-2,
                                                                .cls-3 {
                                                                    transform: scale(1.2);
                                                                }
                                                                .cls-2 {
                                                                    fill: #2e3192;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-2" d="m303.31,178.62c8.23,0,14.82-2.28,19.99-6.86,5.05-4.12,8.36-9.37,10.16-15.78,1.74-6.17,1.39-11.43-1.27-15.78-2.66-4.34-7.96-6.63-16.19-6.63s-14.82,2.28-19.93,6.63c-5.11,4.34-8.42,9.6-10.16,15.78-1.8,6.4-1.45,11.66,1.27,15.78,2.6,4.57,7.9,6.86,16.13,6.86Zm3.09-10.97c-2.51,0-4.32-.91-5.04-3.2-.79-2.06-.71-4.8.32-8.46.97-3.43,2.43-6.17,4.44-8.46,1.95-2.06,4.26-2.97,6.78-2.97s4.32.91,5.11,2.97c.73,2.29.64,5.03-.32,8.46-1.03,3.66-2.49,6.4-4.44,8.46-2.02,2.28-4.33,3.2-6.85,3.2h0Zm405.99-2.17c-2.29,0-3.63-.91-4.26-2.74-.86-1.83-.9-4.11-.06-7.09.84-2.97,2.23-5.48,4.05-7.09,1.66-1.83,3.68-2.52,5.8-2.74,4.8,0,6.35,3.43,4.71,10.06-.84,2.97-2.17,5.26-3.83,7.09-2.11,1.83-4.14,2.52-6.42,2.52h0Zm-14.4-30.86l-16.03,56.93h16.46l5.28-18.75c1.71,3.66,4.86,5.49,8.97,5.49,5.03,0,10.05-1.6,15.2-5.26,2.56-1.99,4.78-4.38,6.57-7.09,1.85-2.52,3.34-6.17,4.73-10.29,1.67-5.94,1.55-11.2-.42-15.55-1.98-4.34-6.14-6.63-12.54-6.63-2.52,0-4.99.69-7.83,1.83-2.84,1.14-5.25,3.2-7.33,5.72h-.23l1.8-6.4h-14.63s0,0,0,0Zm-13.57,25.14c2.19-7.78,2.16-14.18-.83-18.98-2.76-4.8-8.23-7.32-16-7.32-6.63,0-12.7,2.06-18.2,6.17-5.73,4.12-9.56,9.6-11.62,16.92-1.93,6.86-1.19,12.35,2.35,16,3.25,3.89,8.22,5.72,15.08,5.72,5.03,0,9.86-.91,14.78-2.97,4.92-2.06,8.92-5.72,12.01-10.97h-15.78c-.78,1.14-1.95,2.06-3.29,2.74-1.11.69-2.54.91-3.92.91-2.29,0-3.92-.69-5.07-2.29-1.15-1.6-1.32-3.43-.61-5.94h31.09s0,0,0,0Zm-28.71-8.46c1.35-4.8,4.58-7.32,9.67-7.55,1.99.23,3.63.91,4.39,2.29.99,1.37,1.38,3.2.8,5.26h-14.86Zm-55.78,26.02l8.56-30.41h-14.18l3.48-12.35h44.81l-3.47,12.35h-14.18l-8.56,30.41h-16.46Zm-7.77-26.52c.82-6.17-.4-10.75-3.97-13.49-3.64-2.52-8.28-3.89-13.77-3.89-7.09,0-13.09,1.83-18.59,5.95-5.44,3.89-9.33,9.6-11.39,16.92-2,7.09-1.26,12.58,2.22,16.46,3.31,3.66,8.22,5.72,15.08,5.72,5.72,0,11.36-1.37,16.25-4.12,2.56-1.43,4.86-3.29,6.8-5.49,2.01-2.28,3.47-5.03,4.83-8.23h-16.47c-.68,1.66-1.72,3.14-3.05,4.34-1.3,1.37-3.09,2.06-5.15,2.06-2.52,0-4.09-.91-4.65-2.97-.63-1.83-.61-4.34.36-7.77.32-1.14.94-2.52,1.55-3.89.61-1.37,1.23-2.74,2.01-3.89.78-1.14,1.95-2.06,3.06-2.75,1.11-.69,2.38-1.14,3.98-1.14,1.83,0,3.01.69,3.6,1.83.88.91.89,2.52.61,4.34h16.69s0,0,0,0Zm-79.93,18.06c-3.66,0-5.16-1.14-4.52-3.43.39-1.37,1.16-2.52,2.27-3.2,1.11-.69,2.15-1.14,3.59-1.37,1.27-.46,2.94-.69,4.37-.91,1.73-.46,3.23-.92,4.96-1.37-.61,2.97-1.71,5.26-3.43,7.32-1.95,2.06-4.27,2.97-7.24,2.97Zm23.98,8.23l.19-.69c-.89-.91-1.09-1.83-1.06-2.74-.04-.69,0-1.6.32-2.74l5.6-19.89c.71-2.52,1.35-4.8,1.54-7.09.34-1.89,0-3.83-.97-5.49-.92-1.6-2.66-2.74-5.37-3.66-2.71-.91-6.47-1.37-11.5-1.37-7.77,0-14.11,1.37-18.41,3.66-4.37,2.52-7,6.17-8.29,10.75h16.23c.97-1.83,1.98-2.97,3.32-3.66,1.5-.45,2.48-.69,3.62-.69s2.22.23,3.47.69c1.02.46,1.44,1.37,1.22,2.97-.74,1.83-2.67,2.97-5.77,3.43-1.44.23-3.1.46-4.77.69-1.89.23-3.79.45-5.97.91-1.83,0-3.79.46-5.58,1.14-1.96.46-4.05,1.37-5.67,2.28s-3.16,2.29-4.52,3.89c-1.37,1.6-2.4,3.66-3.11,6.17-1.16,4.12-.46,7.32,1.93,9.37,2.1,2.29,5.27,3.2,9.16,3.2,3.2,0,6.01-.23,8.55-1.14,2.77-.91,5.51-2.51,8.37-4.57l-.37,4.57h17.83s0,0,0,0Zm-141.92.24l8.56-30.41h-14.4l3.48-12.35h45.04l-3.48,12.35h-14.4l-8.56,30.41h-16.23Zm-36.05-11.84c-2.28,0-3.63-.91-4.26-2.74-.86-1.83-.9-4.11-.06-7.09.84-2.97,2.23-5.48,4.05-7.09,1.66-1.83,3.68-2.52,5.8-2.74,4.8,0,6.35,3.43,4.71,10.06-.84,2.97-2.17,5.26-3.83,7.09-2.11,1.83-4.13,2.52-6.42,2.52h0Zm-14.4-30.86l-16.03,56.93h16.46l5.28-18.75c1.71,3.66,4.86,5.49,8.97,5.49,5.03,0,10.05-1.6,15.2-5.26,2.56-1.99,4.78-4.38,6.57-7.09,1.85-2.52,3.34-6.17,4.73-10.29,1.67-5.94,1.55-11.2-.42-15.55-1.98-4.34-6.14-6.63-12.54-6.63-2.52,0-4.99.69-7.83,1.83-2.84,1.14-5.25,3.2-7.33,5.72h-.23l1.8-6.4h-14.63s0,0,0,0Zm-115.21,42.7h16.23l8.56-30.41h13.03l-8.56,30.41h16.46l12.04-42.76h-45.73l-12.04,42.76h0Zm2.44-26.52c.82-6.17-.4-10.75-3.97-13.49-3.63-2.52-8.28-3.89-13.77-3.89-7.09,0-13.09,1.83-18.59,5.95-5.44,3.89-9.33,9.6-11.39,16.92-1.99,7.09-1.25,12.58,2.22,16.46,3.31,3.66,8.22,5.72,15.08,5.72,5.72,0,11.36-1.37,16.25-4.12,2.56-1.44,4.86-3.29,6.8-5.49,2.01-2.28,3.47-5.03,4.83-8.23h-16.46c-.68,1.66-1.72,3.14-3.05,4.34-1.3,1.37-3.09,2.06-5.15,2.06-2.52,0-4.09-.91-4.65-2.97-.63-1.83-.61-4.34.36-7.77.32-1.14.94-2.52,1.55-3.89.61-1.37,1.23-2.74,2.01-3.89.78-1.14,1.95-2.06,3.06-2.75,1.11-.69,2.38-1.14,3.98-1.14,1.83,0,3.01.69,3.6,1.83.88.91.89,2.52.61,4.34h16.69s0,0,0,0Z"></path>
                                                        <path class="cls-1" d="m444.94,121.28l11.24,52.33,40.97-52.68-32.66,22.95-19.55-22.6Z"></path>
                                                        <path class="cls-2" d="m441.55,134.59l-12.18,42.61h21.08s-8.9-42.61-8.9-42.61Zm51.74,0l-32.54,42.61h20.37s12.17-42.61,12.17-42.61Z"></path>
                                                        <path class="cls-1" d="m179.65,112.24l-39.8,45.14-88.45-44.76,83.61,17.63s44.64-18.01,44.64-18.01Z"></path>
                                                        <path class="cls-2" d="m59.35,201.2l46.65-52.9,103.66,52.45-97.99-20.66s-52.32,21.1-52.32,21.1Zm73.03-105.35c-7.65.62-13.39,7.37-12.77,15.03.62,7.66,7.37,13.4,15.02,12.77,7.66-.62,13.4-7.37,12.77-15.02-.62-7.66-7.37-13.4-15.03-12.78Z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Детский мир -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 268 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M58.397 27.552c0 .42-.138.769-.414 1.048-.276.28-.62.419-1.035.419H54.5c-.414 0-.759-.14-1.035-.419a1.431 1.431 0 0 1-.413-1.048v-6.355c0-.42.138-.768.413-1.048.276-.28.621-.419 1.035-.419h.759c.327-.436.62-.978.879-1.589.259-.628.465-1.292.655-2.043.172-.733.328-1.501.448-2.287.121-.786.19-1.571.242-2.34l.155-2.287c.017-.419.19-.768.483-1.047.293-.28.638-.42 1.051-.42h10.759c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047V19.73h1.414c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047v6.355c0 .42-.138.769-.413 1.048-.276.28-.621.419-1.035.419h-2.448c-.414 0-.759-.14-1.035-.419a1.431 1.431 0 0 1-.413-1.048v-2.41h-10.5v2.41Zm7.24-14.422H63.07L63 13.83c-.172 1.466-.414 2.688-.724 3.649-.31.96-.638 1.71-1 2.252h4.362v-6.6ZM81.724 18.35c.276.821.793 1.432 1.517 1.817.725.384 1.57.576 2.518.576.638 0 1.207-.035 1.69-.122.482-.07.965-.21 1.413-.384.276-.105.569-.158.845-.158.62 0 1.052.28 1.345.821l.62 1.24c.104.21.156.436.156.698 0 .576-.225.995-.69 1.275-1.104.628-2.104 1.012-3.035 1.204-.913.175-1.896.28-2.948.28-1.43 0-2.724-.227-3.862-.664a8.231 8.231 0 0 1-2.93-1.868c-.811-.803-1.432-1.763-1.88-2.916-.449-1.135-.673-2.392-.673-3.754 0-1.274.224-2.462.673-3.562a8.963 8.963 0 0 1 1.88-2.933 8.467 8.467 0 0 1 2.93-1.973c1.155-.471 2.431-.716 3.862-.716 1.104 0 2.155.192 3.155.576 1 .384 1.897.943 2.656 1.676a8.329 8.329 0 0 1 1.844 2.602c.466 1.013.69 2.13.69 3.37 0 .698-.034 1.274-.12 1.746-.052.28-.208.541-.483.803-.276.245-.535.367-.828.367H81.724Zm6.017-3.875c0-.594-.241-1.153-.707-1.642-.465-.506-1.172-.75-2.086-.75-.965 0-1.707.21-2.224.628-.517.42-.914 1.013-1.19 1.781h6.207v-.017Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.448 25.143c-.414 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V13.514h-3.517c-.414 0-.759-.14-1.035-.419a1.43 1.43 0 0 1-.413-1.047V9.184c0-.419.137-.768.413-1.047.276-.28.621-.42 1.035-.42h12.793c.414 0 .758.14 1.034.42.276.279.414.628.414 1.047v2.864c0 .419-.138.768-.414 1.047-.276.28-.62.42-1.034.42h-3.517v10.161c0 .42-.138.768-.414 1.048-.276.28-.621.419-1.035.419h-2.862ZM124.672 13.357c-.913-.471-1.793-.698-2.638-.698-.465 0-.913.07-1.344.227a3.809 3.809 0 0 0-1.19.716 3.739 3.739 0 0 0-.862 1.187c-.224.471-.328 1.013-.328 1.624 0 .593.121 1.117.345 1.589.224.471.517.855.879 1.187.363.332.759.576 1.207.733.449.175.897.245 1.362.245.897 0 1.794-.28 2.69-.856.328-.227.69-.35 1.069-.35.483 0 .879.21 1.19.63l1.189 1.588c.207.28.311.594.311.926 0 .524-.207.925-.621 1.24-1.155.925-2.241 1.536-3.259 1.815-1.017.28-2 .42-2.913.42-1.449 0-2.776-.228-3.966-.664a8.661 8.661 0 0 1-3.034-1.868 8.056 8.056 0 0 1-1.914-2.916c-.448-1.135-.673-2.392-.673-3.754 0-1.275.225-2.462.656-3.562a8.639 8.639 0 0 1 1.862-2.933 8.66 8.66 0 0 1 2.896-1.973c1.121-.472 2.362-.716 3.707-.716 1.155 0 2.19.104 3.104.314.913.21 1.896.646 2.913 1.327.569.367.845.82.845 1.362 0 .262-.069.506-.224.733l-1.103 1.868c-.311.524-.742.769-1.311.769a1.424 1.424 0 0 1-.845-.21ZM137.534 16.814v6.862c0 .42-.137.768-.413 1.048-.276.28-.621.419-1.035.419h-2.827c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.166c0-.418.138-.768.414-1.047.276-.28.621-.419 1.035-.419h2.827c.414 0 .759.14 1.035.419.276.28.413.629.413 1.048v6.128l4.449-6.635c.207-.279.465-.523.793-.698.327-.175.655-.28 1.017-.28h2.69c.431 0 .793.158 1.069.472.276.314.414.663.414 1.048 0 .314-.104.61-.311.89l-4.052 5.43 1.88 2.602c.707.96 1.396 1.519 2.069 1.676.586.122.982.332 1.172.576.19.262.293.681.293 1.275v2.374c0 .315-.12.594-.345.856-.224.262-.5.419-.81.471-.207.018-.396.053-.569.053-.172.017-.362.017-.569.017-.465 0-.931-.052-1.431-.157-.5-.105-1-.297-1.5-.559-.5-.279-1-.646-1.5-1.152-.5-.489-1-1.117-1.517-1.903l-3.242-4.837ZM165.569 25.143c-.414 0-.759-.14-1.035-.42a1.434 1.434 0 0 1-.413-1.047V16.03l-5.483 8.154c-.207.279-.448.523-.707.698-.276.175-.586.28-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.434 1.434 0 0 1-.413-1.047V9.184c0-.419.138-.768.413-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.276.279.414.628.414 1.047v7.648l5.483-8.154c.206-.28.431-.524.689-.699a1.62 1.62 0 0 1 .914-.279h3.328c.413 0 .758.14 1.034.419.276.28.414.629.414 1.048v14.51c0 .418-.138.768-.414 1.047-.276.28-.621.419-1.034.419h-2.828Z" fill="#0073E6"></path>
                                                        <path d="M187.414 25.143c-.414 0-.759-.14-1.035-.42-.276-.279-.413-.628-.413-1.047V16.03l-5.483 8.154a3 3 0 0 1-.707.698c-.276.175-.586.28-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.184c0-.419.138-.768.414-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.276.279.414.628.414 1.047v7.648l5.482-8.154c.207-.28.431-.524.69-.699a1.62 1.62 0 0 1 .914-.279h3.327c.414 0 .759.14 1.035.419.276.28.414.629.414 1.048v14.51c0 .418-.138.767-.414 1.047-.276.28-.621.419-1.035.419h-2.827Zm-.845-25.09c.759 0 1.345.226 1.741.663.397.436.587 1.013.587 1.711 0 1.013-.5 1.868-1.483 2.567-.983.698-2.448 1.047-4.38 1.047-2.137 0-3.689-.349-4.62-1.047-.931-.699-1.397-1.554-1.397-2.567 0-.698.19-1.275.569-1.711.38-.437.966-.664 1.724-.664.656 0 1.156.14 1.449.42.31.279.517.628.655 1.047.12.35.31.646.534.873.224.227.586.332 1.069.332.431 0 .759-.105.966-.332.207-.227.362-.524.5-.873.12-.419.345-.786.655-1.048.31-.279.793-.419 1.431-.419Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M209.328 23.676c0 .42-.138.769-.414 1.048-.276.28-.621.419-1.035.419h-2.827c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.166c0-.418.138-.768.414-1.047.276-.28.621-.419 1.035-.419h2.724c.655 0 1.258.297 1.758.89l4.397 5.046 4.052-5.01c.224-.28.483-.507.758-.682.276-.174.604-.244.966-.244h2.569c.414 0 .758.14 1.034.419.276.28.414.629.414 1.048v14.51c0 .418-.138.768-.414 1.047-.276.28-.62.419-1.034.419h-2.828c-.414 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V16.57l-3.276 3.736c-.276.315-.621.472-1 .472s-.707-.14-1-.42l-3.414-3.753v7.071h.018ZM241.259 25.143c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V16.03l-5.482 8.154a3 3 0 0 1-.707.698 1.72 1.72 0 0 1-.931.28h-3.293c-.414 0-.759-.14-1.035-.42a1.43 1.43 0 0 1-.414-1.047V9.184c0-.419.138-.768.414-1.047.276-.28.621-.42 1.035-.42h2.827c.414 0 .759.14 1.035.42.275.279.413.628.413 1.047v7.648l5.483-8.154c.207-.28.431-.524.69-.699.258-.174.569-.279.914-.279h3.327c.414 0 .759.14 1.035.419.276.28.413.629.413 1.048v14.51c0 .418-.137.768-.413 1.047-.276.28-.621.419-1.035.419h-2.827Z" fill="#0073E6"></path>
                                                        <path d="M255.517 31.429c0 .419-.138.768-.414 1.047-.275.28-.62.42-1.034.42h-2.828c-.413 0-.758-.14-1.034-.42a1.43 1.43 0 0 1-.414-1.047V9.167c0-.42.138-.769.414-1.048.276-.28.621-.419 1.034-.419h3.035a1.2 1.2 0 0 1 .896.367c.242.244.362.54.362.908.483-.472 1.138-.873 1.949-1.223.81-.349 1.758-.523 2.827-.523 1.156 0 2.207.227 3.156.663a6.63 6.63 0 0 1 2.431 1.868c.655.803 1.172 1.746 1.551 2.829.362 1.082.552 2.27.552 3.562 0 1.327-.224 2.549-.672 3.701a9.098 9.098 0 0 1-1.88 3.004c-.81.855-1.776 1.519-2.914 2.025-1.137.489-2.413.733-3.81.733-.586 0-1.172-.052-1.741-.14a6.305 6.305 0 0 1-1.483-.401v6.356h.017Zm0-11.908c.431.261.845.436 1.207.523.362.088.862.14 1.483.14 1.259 0 2.172-.384 2.776-1.152.603-.768.896-1.694.896-2.776 0-1.013-.293-1.869-.862-2.567-.569-.698-1.414-1.048-2.517-1.048-1.069 0-2.069.524-2.983 1.554v5.326Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.46 4.06C.5 5.94.97 7.7 2.04 9.25c1.84 2.65 4.35 4.1 7.6 4.21.06 0 .12.01.18.01-.39.1-.78.01-1.17.02H2.18c-1.08 0-1.71-.6-1.72-1.66C.43 9.27.44 6.71.43 4.14c0-.02.02-.05.03-.08Z" fill="#FCC201"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.23 13.47c-1.43 0-2.87-.01-4.3 0-.31.01-.45-.05-.45-.41.02-2.89.01-5.79 0-8.68 0-.27.06-.37.35-.36 2.52.01 5.04 0 7.56.01.89 0 1.57.63 1.57 1.53.03 2.53.01 5.06.02 7.6 0 .33-.18.31-.41.31-1.44-.01-2.89 0-4.34 0Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.83 8.81a2.578 2.578 0 0 1-2.65 2.56c-1.45-.02-2.63-1.23-2.59-2.64.04-1.45 1.24-2.62 2.65-2.59 1.48.02 2.61 1.2 2.59 2.67Z" fill="#fff"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.23 6.74c1.13 0 2.04.91 2.03 2.04-.01 1.1-.96 2.04-2.05 2.03a2.055 2.055 0 0 1-2.02-2.06c.01-1.13.9-2.01 2.04-2.01Z" fill="#00C2FC"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 14.07c1.45 0 2.9.01 4.35-.01.29 0 .38.08.38.38-.01 2.89-.01 5.78 0 8.68 0 .32-.09.39-.41.38-4.51-.15-8.41-3.71-8.95-8.21-.1-.81.26-1.22 1.06-1.22h3.57Z" fill="#FF4F3E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.56 23.5c-1.43 0-2.87-.01-4.3.01-.35 0-.45-.09-.45-.45.01-2.85.02-5.7 0-8.55 0-.41.13-.47.49-.46 4.19.13 8.02 3.41 8.79 7.55.09.49.15.98.19 1.48.03.33-.06.43-.41.43-1.44-.02-2.87-.01-4.3-.01h-.01Z" fill="#06C92E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.85 8.78c0-1.46.01-2.93-.01-4.39 0-.3.08-.37.38-.37 2.68.01 5.37 0 8.05 0 .72 0 1.04.39.94 1.11-.56 4.18-3.38 7.26-7.47 8.16-.5.12-1.01.15-1.52.2-.3.03-.39-.07-.38-.37.01-1.45.01-2.9.01-4.34Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.57 24.1c1.4 0 2.8.02 4.21-.02.43 0 .51.14.5.53-.19 4.24-3.54 8.04-7.72 8.74-.3.05-.6.1-.9.11-.46.02-.76-.25-.84-.71-.02-.13-.02-.27-.02-.4 0-2.59 0-5.19-.01-7.78 0-.38.1-.49.47-.48 1.44.02 2.87.01 4.3.01h.01Z" fill="#00C2FC"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.46 4.06c.14-.01.27-.03.41-.03 2.86-.01 5.73 0 8.6-.01.36 0 .45.08.45.44-.02 2.87-.01 5.73-.01 8.6 0 .14.07.31-.09.42-3.84.3-7.39-2.56-8.67-5.59C.63 6.65.4 5.39.46 4.06Z" fill="#FF4F3E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.52 33.52c-2.63 0-4.73-2.11-4.73-4.75a4.73 4.73 0 0 1 4.75-4.73c2.59.01 4.7 2.11 4.73 4.73.03 2.58-2.13 4.75-4.75 4.75Z" fill="#FABC22"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.22 8.74c0 1.43-.01 2.86.01 4.3 0 .29-.05.41-.39.41-2.88-.02-5.77-.01-8.65 0-.31 0-.41-.06-.41-.39.02-2.7.01-5.4.01-8.1 0-.64.3-.93.96-.94 2.7 0 5.4.01 8.1 0 .3 0 .38.08.38.37-.02 1.45-.01 2.9-.01 4.35Z" fill="#0073E6"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.49 24.09c1.45 0 2.89.01 4.34 0 .3-.01.41.03.29.37-1 2.81-1.98 5.62-2.97 8.43-.14.41-.44.63-.88.63H4.7c-.68 0-1.06-.52-.85-1.15.93-2.67 1.88-5.34 2.8-8.01.1-.28.27-.27.49-.27 1.45.01 2.9 0 4.35 0Z" fill="#06C92E"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 14.06c1.45 0 2.9.01 4.35-.01.35 0 .39.08.27.4-1.03 2.91-2.05 5.81-3.06 8.72-.08.24-.18.33-.44.33-2.93-.01-5.86-.01-8.78 0-.31 0-.36-.07-.25-.36 1.04-2.93 2.07-5.87 3.09-8.81.09-.27.26-.27.47-.27H15Z" fill="#00C2FC"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Озон -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483.969 105.938">
                                                        <path fill="#0069ff" fill-rule="evenodd" d="M58.18.289a52.956 52.956 0 1 0 47.134 47.28A52.89 52.89 0 0 0 58.18.289zm-1.716 80.689A28.247 28.247 0 1 1 80.716 56.65a28.236 28.236 0 0 1-24.252 24.328zm77.174-78.594a12.356 12.356 0 0 0-12.06 14.908c1.162 5.822 6.6 9.8 12.524 9.8h34.378l-53.5 70.8a3.529 3.529 0 0 0 2.8 5.659h83.92c5.92 0 11.362-3.977 12.524-9.8a12.357 12.357 0 0 0-12.055-14.91h-41.887l53.459-70.745a3.562 3.562 0 0 0-2.829-5.712h-77.274zm335.339.285a12.542 12.542 0 0 0-9.639 12.4v41.138L392.679 3.161a3.545 3.545 0 0 0-5.749 2.786v84.941a12.541 12.541 0 0 0 9.639 12.4 12.341 12.341 0 0 0 14.993-12.07V49.724l66.66 53.047a3.544 3.544 0 0 0 5.747-2.785V14.735a12.341 12.341 0 0 0-14.992-12.066zM295.415 24.727c28.195 0 49.262 14.9 49.262 28.228s-21.067 28.228-49.262 28.228-49.262-14.9-49.262-28.228 21.067-28.228 49.262-28.228m0-24.707c-40.811 0-73.894 23.7-73.894 52.935s33.083 52.935 73.894 52.935 73.893-23.7 73.893-52.935S336.225.02 295.415.02z"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Алиэкспресс -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 1246 302" xmlns="http://www.w3.org/2000/svg" class="Header_Logo__mainLogo__1gbu2">
                                                        <path d="M958.1 85.1c-8.2-3.5-17-5.2-26-5.3h-.4c-10 .1-19.8 2-28.9 5.9-8.9 3.8-16.9 9.1-23.8 16-6.9 6.8-12.3 14.8-16.1 23.7-3.9 9.2-5.9 19-6 29.1V154.8c0 10.2 2.1 20.2 6 29.5 3.8 9 9.3 17.1 16.2 24.1 6.9 7 15 12.5 24 16.4 9.3 4 19.2 6.1 29.4 6.2h.8c11.3-.1 22-2.7 32.1-7.5 9.5-4.6 17.7-11 24.6-19.1l-18.9-15.1c-4.7 5.4-10.2 9.7-16.5 12.8-6.8 3.3-14.1 5.1-21.7 5.1-5.9 0-11.6-1.1-17.1-3-5.3-1.9-10.2-4.6-14.7-8.1-4.4-3.4-8.2-7.5-11.3-12.2-3.1-4.7-5.5-9.9-7-15.3l-.3-.9H999l.1-20.8c0-9.1-1.8-17.9-5.3-26.1-3.4-8-8.2-15.2-14.4-21.3-6.1-6.2-13.3-11-21.3-14.4Zm-75.6 58.7.2-.9c1.3-5.4 3.5-10.6 6.5-15.3 3-4.6 6.6-8.7 10.9-12.1 4.3-3.4 9.1-6.1 14.3-8 5.4-1.9 11-2.9 16.8-2.9 10.6 0 20.8 4 28.6 11.1 7.8 7.1 12.7 16.8 13.8 27.2l.1.8h-91.2v.1ZM682.2 79.8c-41.6 0-75.4 33.4-75.7 74.9v146.9H632v-94c12.7 13.4 30.2 22.2 49.7 23.5h.5c41.8 0 75.7-33.9 75.7-75.7 0-39.8-30.7-72.4-69.7-75.4-.2 0-1.4-.1-1.6-.1-1.4-.1-2.9-.1-4.4-.1Zm49.9 77.8c0 27.5-22.3 49.8-49.8 49.8-27.5 0-49.8-22.3-49.8-49.8v-4c0-27.5 22.3-49.8 49.8-49.8 27.5 0 49.8 22.3 49.8 49.8v4ZM343.6 200.8V139h81.7v-24.7h-81.7V53.8h92v-26h-118v199h125.2v-26h-99.2ZM595.3 83.9h-30.2l-40.4 52.4-40.3-52.4h-30.2l55.1 71.4-55.1 71.5h30.2l40.3-52.4 40.4 52.4h30.2l-55.1-71.5 55.1-71.4ZM1107.7 155.3c-4.3-3.3-9.3-5.9-15.1-7.8-5.7-1.9-11.8-3.5-18.2-4.8-4.7-.8-9.3-1.8-13.7-3.1-4.4-1.2-8.3-2.7-11.7-4.3-3.4-1.6-6.1-3.5-8-5.7-1.9-2.1-2.9-4.8-2.9-7.8 0-3.3.9-6.2 2.6-8.8 1.7-2.6 3.9-4.7 6.6-6.3 2.7-1.6 5.7-2.9 9.1-3.7 3.4-.8 6.7-1.2 10-1.2h1.9c12.4.4 23.4 6.8 30.1 16.3l19-12.8c-10.9-15.5-28.8-25.5-49.1-25.5-7.1 0-13.6.9-20 2.8-6.4 1.8-12.1 4.5-17.2 8s-9.2 7.9-12.3 13.2c-3.1 5.3-4.6 11.5-4.6 18.4 0 7.4 1.4 13.4 4.2 18.1 2.8 4.7 6.5 8.6 11.1 11.5 4.6 3 10 5.4 16.1 7.2 6.1 1.8 12.6 3.5 19.4 4.9 3.9.8 7.7 1.7 11.4 2.8 3.7 1 7 2.4 9.8 4.2 2.9 1.7 5.2 3.8 6.9 6.3 1.7 2.5 2.6 5.6 2.6 9.5 0 3.9-.9 7.2-2.8 10-1.8 2.8-4.3 5.1-7.4 6.9-3.1 1.8-6.5 3.2-10.3 4-3.5.8-6.9 1.2-10.3 1.2-15.5 0-29.1-7.4-37.4-18.8l-19.3 15c13.6 15.8 33.9 25.9 56.5 25.9 7-.1 13.6-1 20.2-2.5 6.9-1.6 13-4.3 18.5-7.8 5.4-3.6 9.8-8.2 13.1-14 3.3-5.7 4.9-12.7 4.9-20.9 0-7.2-1.2-13.2-3.7-18.1-2.3-4.9-5.7-9-10-12.3ZM1241.6 167.6c-2.5-4.9-5.8-9-10.2-12.3-4.3-3.3-9.3-5.9-15.1-7.8-5.7-1.9-11.8-3.5-18.2-4.8-4.7-.8-9.3-1.8-13.7-3.1-4.4-1.2-8.3-2.7-11.7-4.3-3.4-1.6-6.1-3.5-8-5.7-1.9-2.2-2.9-4.8-2.9-7.8 0-3.3.9-6.2 2.6-8.8 1.7-2.6 3.9-4.7 6.6-6.3 2.7-1.6 5.7-2.9 9.1-3.7 3.4-.8 6.7-1.2 10-1.2h1.9c12.4.4 23.4 6.8 30.1 16.3v-.1l19-12.7-.1-.1h.1c-10.9-15.4-28.8-25.4-49.1-25.4h-.3c-6.8 0-13.3.9-19.7 2.8-6.4 1.8-12.1 4.5-17.2 8s-9.2 7.9-12.3 13.2c-3.1 5.3-4.6 11.5-4.6 18.4 0 7.4 1.4 13.4 4.2 18.1 2.8 4.7 6.5 8.6 11.1 11.5 4.6 3 10 5.4 16.1 7.2 6.2 1.8 12.6 3.5 19.4 4.9 3.9.8 7.7 1.7 11.4 2.8 3.7 1 7 2.4 9.8 4.1 2.9 1.7 5.2 3.8 6.9 6.3 1.7 2.5 2.6 5.6 2.6 9.5 0 3.9-.9 7.2-2.8 10-1.8 2.8-4.3 5.1-7.4 6.9-3.1 1.8-6.5 3.2-10.3 4-3.5.8-6.9 1.2-10.3 1.2h-.2c-15.2 0-28.8-7.4-37.1-18.8l-19.3 15c13.6 15.8 33.9 25.9 56.5 25.9v-.1c7-.1 13.6-.9 20.2-2.4 6.9-1.6 13-4.3 18.5-7.8 5.4-3.6 9.8-8.2 13.1-14 3.3-5.7 4.9-12.7 4.9-20.9.1-7-1.1-13.1-3.6-18ZM801.9 83.5h-25.5v143.3h25.5v-71.7c0-27.7 22.5-50.2 50.1-50.2V79.4c-19.1 0-36.6 7.2-50.1 19V83.5ZM220 27.8h-25.5v199H220v-199ZM103.3 27.7H77.1L.7 226.8h24.9L44 179h92.4l18.4 47.8h24.9L103.3 27.7ZM54 152.8l36.2-94.4 36.2 94.4H54ZM281.3 84.7h-25.5v142.1h25.5V84.7ZM268.6.4c-.6 0-1.1.5-1.1 1.1 0 20.5-16.6 37.2-37 37.2-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1 20.4 0 37 16.7 37 37.2 0 .6.5 1.1 1.1 1.1.6 0 1.1-.5 1.1-1.1.1-20.4 16.7-37.1 37-37.1.6 0 1.1-.5 1.1-1.1 0-.6-.5-1.1-1.1-1.1-20.4 0-37-16.7-37-37.2v-.1c0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3Z" fill="#ff2722" data-spm-anchor-id="a2g2w.home.1000002.i0.75df501daPctvr"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Мэйл ру -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewbox="-5.7176247 -5.7176247 562.0490194 202.0227394">
                                                        <defs id="defs5113"></defs>
                                                        <path d="m 550.61374,180.805 c 0,5.40375 -4.38,9.7825 -9.7825,9.7825 l -531.049985,0 C 4.380005,190.5875 0,186.20875 0,180.805 L 0,9.7825 C 0,4.38 4.380005,0 9.781255,0 L 540.83124,0 c 5.4025,0 9.7825,4.38 9.7825,9.7825 l 0,171.0225 z" id="path3030" style="fill:#134785;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                        <path d="m 106.14912,71.4315 c -0.53875,-10.41625 -8.272495,-16.68 -17.607495,-16.68 l -0.35375,0 c -10.77625,0 -16.755,8.47375 -16.755,18.10125 0,10.77875 7.2325,17.59125 16.7125,17.59125 10.57125,0 17.523755,-7.74375 18.025005,-16.90625 l -0.0213,-2.10625 z M 88.241625,45.43275 c 7.2,0 13.971255,3.1825 18.941245,8.16375 l 0,0.0175 c 0,-2.39125 1.60875,-4.1925 3.84625,-4.1925 l 0.5625,-0.007 c 3.4975,0 4.21501,3.31 4.21501,4.3575 l 0.02,37.2 c -0.25,2.435 2.5125,3.6925 4.04375,2.13125 5.97001,-6.13875 13.115,-31.55875 -3.71625,-46.28625 -15.69,-13.73125 -36.738745,-11.4675 -47.932495,-3.75125 -11.89625,8.20875 -19.5125,26.37125 -12.115,43.4375 8.065,18.61 31.1375,24.15875 44.848735,18.62125 6.94375,-2.80375 10.15125,6.585 2.94,9.65125 -10.894985,4.64375 -41.227485,4.17625 -55.397485,-20.37 -9.57375,-16.57125 -9.0625,-45.73 16.32625,-60.83875 19.42375,-11.55875 45.031235,-8.36 60.471235,7.76625 16.14126,16.86 15.2,48.4275 -0.54125,60.705 -7.13875,5.575 -17.72875,0.145 -17.6625,-7.98125 l -0.0738,-2.655 c -4.96875,4.93 -11.576235,7.80375 -18.776235,7.80375 -14.22625,0 -26.7475,-12.515 -26.7475,-26.7425 0,-14.3675 12.52125,-27.03 26.7475,-27.03" id="path3042" style="fill:#f89c0e;fill-opacity:1;fill-rule:evenodd;stroke:none"></path>
                                                        <path d="m 359.07362,94.77188 c -8.08,-0.003 -15.28501,-6.2175 -15.28501,-15.38 l 0.01,-46.47 c -0.01,-3.50625 -2.8675,-5.95875 -6.36375,-5.95875 -4.06124,0.0163 -6.40625,3.005 -6.40625,5.95875 l 0,46.52125 c -0.0475,15.75625 12.98625,28.11499 27.8225,28.11499 4.40625,0 6.53,-3.5725 6.53,-6.60125 0,-2.89249 -2.27875,-6.18249 -6.3075,-6.18499 m -92.68825,0.5565 c -11.4725,0 -20.76625,-9.29125 -20.76625,-20.75375 0,-11.46875 9.29375,-20.75875 20.76625,-20.75875 11.47,0 20.77125,9.29 20.77125,20.75875 0,11.4625 -9.30125,20.75375 -20.77125,20.75375 m 26.8325,-53.6825 c -3.5825,-0.002 -6.11875,2.865 -6.11875,5.66125 l 0,2.18 c -5.6525,-4.8175 -12.97625,-7.80625 -20.8925,-7.82 -17.40375,-0.0238 -32.81625,14.63875 -32.81625,32.9775 0,16.81875 14.68625,32.88124 32.81625,32.88124 7.33875,0 15.22625,-2.82 20.8325,-7.60499 l 0.0175,1.55749 c 0,2.98625 2.3625,6.0475 6.25125,6.0475 4.41001,0 6.38375,-3.52625 6.38375,-6.30875 l 0,-53.56749 c 0.0487,-2.51625 -2.71375,-5.99625 -6.47374,-6.00375 m 22.15762,-0.0113 c -3.8175,0.0113 -6.27749,3.14125 -6.28375,6.31625 l 0.0125,53.36874 c -0.0238,3.5475 2.7775,6.18375 6.2475,6.18375 3.9525,0 6.48375,-3.09 6.48375,-6.4575 l 0.0225,-53.00624 c 0,-3.13625 -3.165,-6.41625 -6.4825,-6.405 m -108.65774,0.0329 c -7.81876,-0.1125 -13.80376,4.425 -17.49626,7.44375 -4.09749,-4.39 -9.34749,-7.07 -14.7425,-7.40375 -5.685,-0.35375 -11.02125,1.5625 -14.40749,4.31625 -1.19126,-2.75375 -2.75376,-4.3775 -5.43626,-4.3775 -2.94,0 -6.06625,2.51625 -6.06625,6.61125 0,4.095 0.0388,53.12625 0.0388,53.12625 0,3.05125 2.6025,6.1425 6.325,6.1425 4.09751,0 6.36625,-3.13375 6.36625,-6.16375 l 0,-39.40375 c 0,-3.835 6.55375,-8.37625 12.09875,-8.30125 3.54,0.0487 7.74751,3.535 7.74751,9.045 l 0.0325,38.755 c 0,3.42375 3.44626,6.0475 6.57375,6.0475 3.72126,0 6.53625,-2.81 6.53625,-6.0125 l 0,-39.1625 c 0,-4.8025 7.29125,-8.8225 12.28125,-8.5625 3.91125,0.205 7.37125,4.46875 7.37125,8.5625 l 0,39.10875 c 0,3.38375 3.18,6.06625 6.61,6.06625 3.01,0 6.49375,-1.9925 6.49375,-6.12125 l 0,-38.94375 c 0.0387,-14.2925 -14.07255,-20.9575 -20.32629,-20.7725 M 321.79913,31.16773 c 0,2.65625 -2.65625,4.83375 -6.48125,4.83375 -3.84501,0 -6.24626,-2.63625 -6.24626,-5.12125 l 0.004,-3.42125 c 0.0437,-2.58875 2.30374,-5.48625 6.20749,-5.48625 4.27625,0 6.51626,2.77375 6.51626,5.48625 l 0,3.70875 z" id="path3058" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                        <path d="m 501.68949,41.625 c -3.78374,0 -6.21875,3.09625 -6.21875,5.94875 l 0.004,27.05375 c 0,10.44 -8.79125,20.635 -21.02,20.635 -9.99249,0 -20.585,-8.6725 -20.585,-20.44 l 0,-27.09875 c 0,-2.84375 -2.12876,-6.09875 -6.3625,-6.09875 -2.98749,0 -6.03999,2.5075 -6.03999,5.9775 l 0,27.005 c 0,17.48625 15.625,32.8875 32.9475,32.8875 18.91499,0 33.43499,-16.2175 33.43499,-32.80625 l 0,-27.09625 c 0,-3.0375 -2.51125,-5.9675 -6.15999,-5.9675 m -73.83915,0 c -17.78,0.075 -32.9425,15.7425 -32.85624,32.98625 l 0,26.88125 c 0,3.49875 2.865,6.06625 5.88375,6.06625 3.58999,0 6.38375,-2.65375 6.38375,-5.88125 l 0,-27.29 c -0.0113,-9.77 8.52625,-20.555 20.51125,-20.4975 3.8975,0.015 6.46125,-2.94375 6.4375,-6.22 -0.0125,-2.61375 -1.89,-6.06125 -6.36,-6.045 m -41.71174,60.83575 c -0.0312,2.51875 -2.6625,5.0975 -6.4825,5.0975 -3.85375,0 -6.255,-2.815 -6.255,-5.30375 l 0.006,-4.3025 c 0.0462,-2.58875 2.43875,-5.275 6.35,-5.275 4.26875,0 6.39625,2.88 6.39625,5.59125 l -0.015,4.1925 z" id="path3066" style="fill:#f89c0e;fill-opacity:1;fill-rule:evenodd;stroke:none"></path>
                                                        <path d="m 385.4395,152.2805 c -4.91875,0 -8.90375,-3.98625 -8.90375,-8.90125 0,-4.91625 3.985,-8.8975 8.90375,-8.8975 4.91751,0 8.90499,3.98125 8.90499,8.8975 0,4.915 -3.9875,8.90125 -8.90499,8.90125 m 11.505,-23.01875 c -1.53625,0 -2.6225,1.2275 -2.6225,2.4275 l 0,0.93375 c -2.42501,-2.065 -5.565,-3.34375 -8.9575,-3.35125 -7.46375,-0.01 -14.07249,6.27625 -14.07249,14.14 0,7.21 6.2975,14.0975 14.07249,14.0975 3.145,0 6.52749,-1.20875 8.93001,-3.2625 0,0 0.0437,1.08 0.095,1.28375 -0.4125,3.265 -2.7775,6.2525 -6.84,7.54125 -2.72125,0.86375 -10.56375,-0.98875 -11.2075,-1.10125 -1.8425,-0.3225 -2.77125,1.2625 -2.76,2.66375 0.004,1.1225 0.9,2.01625 2.72625,2.59625 2.33125,0.73625 6.405,1.19 9.95875,1.24125 2.67625,0.0388 13.0925,-2.07 13.45375,-13.47 0.004,-0.0675 0,-23.1675 0,-23.1675 0.02,-1.0775 -1.1625,-2.5675 -2.77625,-2.5725 m 96.75887,23.01875 c -4.5,0 -8.21,-3.34 -8.81125,-7.67125 l 10e-4,-2.46625 c 0.605,-4.32875 4.3125,-7.66125 8.80999,-7.66125 4.91876,0 8.90375,3.98125 8.90375,8.8975 0,4.915 -3.985,8.90125 -8.90375,8.90125 m 0.0763,-23.00875 c -3.39375,0.007 -6.535,1.28625 -8.9575,3.35125 l 0,-0.93375 c 0,-1.2 -1.08624,-2.4275 -2.625,-2.4275 -1.61,0.005 -2.79375,1.495 -2.77374,2.5725 l 0.006,34.1275 c -0.0125,1.52125 1.19001,2.6525 2.6775,2.6525 1.69376,0 2.77751,-1.325 2.77751,-2.76875 l 0.002,-11.56625 c 2.4025,2.0325 5.76251,3.23 8.89251,3.23 7.77374,0 14.07,-6.8875 14.07,-14.0975 0,-7.86375 -6.60625,-14.15 -14.07,-14.14 m -19.01762,-0.01 c -1.62125,0 -2.665,1.3275 -2.665,2.55375 l 0,11.59625 c 0,4.47625 -3.76875,8.84875 -9.0125,8.84875 -4.28376,0 -8.82627,-3.71875 -8.82627,-8.76625 l 0,-11.6175 c 0,-1.21625 -0.91124,-2.615 -2.72749,-2.615 -1.27999,0 -2.58875,1.075 -2.58875,2.56625 l 0,11.57625 c 0,7.4975 6.69876,14.1 14.12626,14.1 8.11,0 14.33375,-6.95125 14.33375,-14.06375 l 0,-11.62 c 0,-1.3 -1.07501,-2.55875 -2.64,-2.55875 m -41.95713,23.01838 c -4.885,0 -8.8425,-3.93 -8.89877,-8.795 l 0,-0.21375 c 0.0488,-3.93501 2.64626,-7.255 6.22127,-8.38126 0.835,-0.25999 1.72623,-0.4 2.6475,-0.4 4.8825,0 8.84375,3.92875 8.89999,8.79875 l -0.001,0.2125 c -0.0488,3.935 -2.64374,7.25375 -6.22124,8.37875 -0.83625,0.25875 -1.725,0.4 -2.6475,0.4 m 14.1175,-8.9225 c 0,-7.20875 -6.29625,-14.09625 -14.0725,-14.09625 -0.0863,0 -0.175,0.0125 -0.26375,0.015 -7.40375,0.0675 -13.9275,6.32 -13.9275,14.135 0,7.21 6.295,14.0975 14.07125,14.0975 0.085,0 0.17499,-0.0125 0.2625,-0.0125 7.40625,-0.0725 13.93,-6.3225 13.93,-14.13875 m -30.99112,-14.09587 c -7.625,0.0325 -14.125,6.75125 -14.08625,14.145 l 0,11.52375 c 0,1.50125 1.2275,2.60125 2.52125,2.60125 1.54125,0 2.7375,-1.13625 2.7375,-2.52125 l 0,-11.7025 c -0.004,-4.1875 3.65625,-8.81 8.79373,-8.78625 1.67251,0.006 2.77377,-1.26125 2.76126,-2.66625 -0.005,-1.12125 -0.81124,-2.60125 -2.72749,-2.59375" id="path3086" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Ланит -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 442.2 102.05" style="enable-background:new 0 0 442.2 102.05;" xml:space="preserve">
              <style type="text/css">
                  .st0 {
                      fill: #00AEEA;
                  }
              </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M188.55,64.61v-54.5h-19.83v6.44c0,11.3-0.52,19.44-1.05,23.9c-0.66,8.27-1.84,18.25-9.33,22.85
                      c-3.41,1.96-6.83,2.36-10.51,2.63l-1.83-7.88c1.32-0.26,4.6-0.79,6.56-1.84c2.76-1.44,4.86-5.38,5.92-12.22
                      c0.52-3.41,1.31-9.71,1.31-27.96V2.11h38.08v62.5H188.55"></path>
                                                                <polygon class="st0" points="310.98,64.61 310.98,35.2 283.92,35.2 283.92,64.61 275,64.61 275,2.11 283.92,2.11 283.92,27.58
                      310.98,27.58 310.98,2.11 319.9,2.11 319.9,64.61     "></polygon>
                                                                <polygon class="st0" points="377.82,64.61 377.82,15.24 377.68,15.24 352.48,64.61 341.84,64.61 341.84,2.11 350.76,2.11
                      350.76,51.61 351.03,51.61 376.24,2.11 386.88,2.11 386.88,64.61    "></polygon>
                                                                <polygon class="st0" points="423.52,9.72 423.52,64.61 414.58,64.61 414.58,9.72 397.52,9.72 397.52,2.11 440.59,2.11
                      440.59,9.72     "></polygon>
                                                                <path class="st0" d="M227.89,2.22l-19.81,62.39h8.68l5.03-16.04h26.03l4.85,16.04h9.62L241.98,2.22H227.89z M223.94,41.1
                      l10.54-35.92h0.19l10.82,35.92H223.94"></path>
                                                            </g>
                                                        </g>
                                                        <path class="st0" d="M120.55,9.1v-7h-8.5c-19.24,0-36.92,6.61-50.94,17.65C47.08,8.71,29.4,2.11,10.17,2.11h-8.5v7h8.5
                  c17.11,0,32.88,5.7,45.53,15.3c-1.72,1.61-3.37,3.28-4.95,5.03C39.39,21.06,25.36,16.1,10.17,16.1h-8.5v7h8.5
                  c13.5,0,25.98,4.37,36.12,11.75c-1.41,1.86-2.72,3.78-3.97,5.76C33.31,34,22.19,30.09,10.17,30.09h-8.5v7h8.5
                  c10.77,0,20.69,3.59,28.65,9.64c-1.1,2.12-2.11,4.29-3.02,6.52c-6.98-5.72-15.9-9.16-25.62-9.16h-8.5v7h8.5
                  c8.95,0,17.08,3.52,23.08,9.25c-0.82,2.67-1.5,5.39-2.04,8.17c-4.83-6.33-12.45-10.42-21.03-10.42h-8.5v7h8.5
                  c10.74,0,19.45,8.71,19.45,19.45h0.02v15.37h7V84.52c0-6.02,0.73-11.86,2.06-17.47c3.12,5.08,4.92,11.06,4.92,17.47h0.02v15.37h7
                  V84.52c0-6.63,1.06-13.01,3.01-19c2.55,5.82,3.97,12.24,3.97,19h0.02v15.37h7V84.52h0c0-6.76,1.42-13.18,3.97-19
                  c1.94,5.98,3.01,12.36,3.01,19h0v15.37h7V84.52h0.02c0-6.4,1.8-12.38,4.92-17.47c1.33,5.61,2.06,11.45,2.06,17.47h0.02v15.37h7
                  V84.52c0-10.74,8.71-19.45,19.45-19.45h8.5v-7h-8.5c-8.58,0-16.2,4.09-21.03,10.42c-0.55-2.77-1.23-5.5-2.04-8.17
                  c6-5.73,14.13-9.25,23.08-9.25h8.5v-7h-8.5c-9.73,0-18.65,3.44-25.62,9.16c-0.91-2.22-1.93-4.4-3.02-6.52
                  c7.96-6.04,17.88-9.64,28.65-9.64h8.5v-7h-8.5c-12.03,0-23.14,3.91-32.15,10.52c-1.25-1.98-2.57-3.9-3.97-5.76
                  c10.14-7.39,22.62-11.75,36.12-11.75h8.5v-7h-8.5c-15.2,0-29.23,4.96-40.58,13.34c-1.57-1.75-3.23-3.42-4.95-5.03
                  c12.65-9.6,28.42-15.3,45.53-15.3H120.55z M51.7,39.28c1.75,1.6,3.39,3.31,4.94,5.11c-1.43,1.97-2.76,4.03-3.98,6.15
                  c-1.53-1.91-3.18-3.71-4.95-5.4C48.96,43.12,50.28,41.17,51.7,39.28z M46.15,66.09c-1.38-2.68-3.04-5.2-4.96-7.49
                  c0.89-2.42,1.9-4.78,3.02-7.08c1.81,1.86,3.46,3.87,4.94,6.01C47.97,60.29,46.97,63.15,46.15,66.09z M61.1,65.33
                  c-1.09-2.9-2.43-5.68-3.98-8.32c1.19-2.36,2.51-4.65,3.98-6.83c1.47,2.18,2.79,4.46,3.98,6.83C63.53,59.65,62.2,62.43,61.1,65.33z
                  M76.06,66.09c-0.82-2.94-1.82-5.8-3.01-8.56c1.48-2.14,3.14-4.15,4.94-6.01c1.12,2.3,2.13,4.66,3.02,7.08
                  C79.09,60.9,77.43,63.41,76.06,66.09z M74.49,45.14c-1.77,1.69-3.42,3.49-4.95,5.4c-1.22-2.12-2.54-4.18-3.98-6.15
                  c1.55-1.79,3.2-3.5,4.94-5.11C71.92,41.17,73.25,43.12,74.49,45.14z M66.04,33.87c-1.73,1.57-3.38,3.24-4.94,4.98
                  c-1.56-1.74-3.21-3.41-4.94-4.98c1.57-1.73,3.22-3.38,4.94-4.96C62.82,30.49,64.47,32.14,66.04,33.87z"></path>
            </svg>
                                                </figure>
                                            </div>
                                        </li>
                                        <!-- Авито -->
                                        <li class="swiper-slide">
                                            <div class="our-clients-item">
                                                <figure>
                                                    <svg viewbox="0 0 109 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M41.4259.620768 32.0647 25.0625h5.0282l1.9244-5.1069h9.9323l1.9327 5.1069h4.991L46.57.620768h-5.1441ZM40.7431 15.4695l3.2693-8.59967 3.257 8.59967h-6.5263ZM61.8822 18.7596 57.8224 7.89206H53.026l6.5387 17.17044h4.7551l6.4229-17.17044h-4.7965l-4.064 10.86754ZM76.7766 7.89206h-4.5647V25.0625h4.5647V7.89206ZM74.4922 6.65463c1.8376 0 3.3273-1.48969 3.3273-3.32731C77.8195 1.48969 76.3298 0 74.4922 0c-1.8377 0-3.3274 1.48969-3.3274 3.32732 0 1.83762 1.4897 3.32731 3.3274 3.32731ZM85.8233 3.31076H81.271v4.5523h-2.6693v4.13844h2.6693v7.2961c0 4.1385 2.2803 5.918 5.4918 5.918 1.0837.0143 2.1588-.1957 3.1576-.6166v-4.2544c-.5451.1997-1.1204.3046-1.7009.3104-1.3947 0-2.4003-.5421-2.4003-2.4003v-6.2532h4.1012V7.90444h-4.0971V3.31076ZM99.5174 7.58167c-1.7602-.00081-3.481.52043-4.9449 1.49781-1.4638.97742-2.6049 2.36692-3.2788 3.99292-.674 1.6261-.8506 3.4154-.5074 5.1418.3432 1.7263 1.1907 3.3121 2.4353 4.5568 1.2446 1.2446 2.8304 2.0921 4.5568 2.4353 1.7264.3431 3.5156.1666 5.1416-.5074 1.626-.6739 3.016-1.815 3.993-3.2788.977-1.4639 1.499-3.1847 1.498-4.9449-.001-2.3584-.939-4.6198-2.606-6.2875-1.668-1.66758-3.929-2.60493-6.2876-2.60603Zm0 13.24303c-.8572.0008-1.6953-.2526-2.4084-.7282-.7131-.4756-1.2691-1.152-1.5977-1.9437-.3286-.7917-.415-1.663-.2483-2.5038.1668-.8408.5791-1.6132 1.1849-2.2196.6058-.6064 1.3779-1.0195 2.2185-1.187.8406-.1676 1.7116-.082 2.5036.2458.792.3279 1.469.8832 1.946 1.5959.476.7126.73 1.5505.73 2.4077-.002 1.1462-.459 2.2447-1.271 3.0541-.812.8094-1.911 1.2634-3.0576 1.2623v.0165Z" fill="#000"></path>
                                                        <path d="M8.89768 27.5c4.91402 0 8.89772-3.9836 8.89772-8.8977 0-4.914-3.9837-8.89765-8.89772-8.89765C3.98363 9.70465 0 13.6883 0 18.6023 0 23.5164 3.98363 27.5 8.89768 27.5Z" fill="#04E061"></path>
                                                        <path d="M24.33 26.3785c2.969 0 5.3758-2.4068 5.3758-5.3758s-2.4068-5.3759-5.3758-5.3759-5.3759 2.4069-5.3759 5.3759 2.4069 5.3758 5.3759 5.3758Z" fill="#FF4053"></path>
                                                        <path d="M10.5986 8.55008c1.8376 0 3.3273-1.48969 3.3273-3.32732 0-1.83763-1.4897-3.32732-3.3273-3.32732-1.83762 0-3.32731 1.48969-3.32731 3.32732 0 1.83763 1.48969 3.32732 3.32731 3.32732Z" fill="#965EEB"></path>
                                                        <path d="M22.2401 14.468c3.9952 0 7.234-3.2387 7.234-7.23398C29.4741 3.23878 26.2353 0 22.2401 0c-3.9953 0-7.2341 3.23878-7.2341 7.23402 0 3.99528 3.2388 7.23398 7.2341 7.23398Z" fill="#0AF"></path>
                                                    </svg>
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                                <!--/-->
                                <script>
                                    $(function () {
                                        var blocks = document.querySelectorAll('.our-clients .swiper-slide');
                                        var sumWidth = 0;
                                        blocks.forEach(function(block) {
                                            sumWidth += block.offsetWidth;
                                        });

                                        $('.our-clients__list')[0].style.width = sumWidth + 'px';
                                        $('.our-clients__list')[0].dataset.width = sumWidth;

                                        var styleSheet = document.createElement('style');
                                        styleSheet.innerHTML = '@keyframes runline { from { transform: translateX(0%); } to { transform: translateX(-' + (sumWidth/2) +'px); } }';
                                        document.head.appendChild(styleSheet);
                                    });
                                </script>            <p>
                                    Мы показываем постоянный прирост клиентов в Евразии. С нами
                                    сотрудничают компании из России, Казахстана, Армении, Грузии,
                                    Белоруссии и других стран.
                                </p>
                                <h2>Наша команда</h2>
                                <p>
                                    Над продуктами Happy Job. работает большая команда специалистов из
                                    разных отраслей. Это консультанты по развитию эффективности,
                                    внедрению изменений, эмоциональному интеллекту, психологии,
                                    визуальной фасилитации и дизайн-мышлению, редакторы и дизайнеры.
                                </p>
                                <img src="/img/p/about-us/collage.jpg" class="img100"><br>
                                <p>
                                    Также развивать продукты каждый день нам помогает многотысячное
                                    комьюнити HR-специалистов и руководителей.
                                </p>
                                <h2>Почему более 800 клиентов выбрали Happy Job.?</h2>
                                <p>
                                    <strong class="value">98,3%</strong> респондентов нравятся наши
                                                                         опросы. Исследование проводилось на выборке из 14 000 участников.
                                </p>
                                <p>
                                    <strong class="value">93%</strong> HR-специалистов отметили
                                                                       удобный формат опросов. Мы собрали обратную связь от 350
                                                                       специалистов HR-служб.
                                </p>
                                <p>
                                    <strong class="value">94%</strong> руководителей оценили простоту
                                                                       и понятность отчетов в личном кабинете. В опросе участвовали
                                                                       больше 1 000 руководителей.
                                </p>
                                <p>
                                    <strong class="value">800+</strong> клиентов используют продукты
                                                                        Happy Job.
                                </p>
                                <p>
                                    <strong class="value">75,2%</strong> - средний процент участия в
                                                                         опросах.
                                </p>
                                <p><strong class="value">1,3 млн</strong> исследований в год.</p>
                                <p>
                                    <strong class="value">28</strong> отраслей для сравнения, самая
                                                                      большая и точная база бенчмарков.
                                </p>
                                <p>
                                    Бенчмарки<strong class="value">3 в 1</strong> — по отрасли, по
                                    компании и по функции.
                                </p>
                                <p>
                                    Собственная методология, запатентованная<strong class="value">в 2019 году</strong>
                                    и доказавшая эффективность на практике.
                                </p>
                                <p>
                                    <strong class="value">0,15%</strong> отказов принять участие в
                                                                         опросах.
                                </p>
                                <p>
                                    <strong class="value">99,8%</strong> — клиентов с нами уже более 5
                                                                         лет.
                                </p>
                                <h2>Как мы работаем с клиентами?</h2>
                                <p>
                                    Команда Happy Job. проводит исследования любой сложности с учетом
                                    особенностей бизнеса, задач и сферы деятельности клиента.
                                </p>
                                <p>
                                    Мы дорожим вашим временем и экономим ваши ресурсы. Поэтому берем
                                    на себя все этапы проведения опросов: от составления
                                    индивидуального опросника до интерпретации результатов.
                                </p>
                                <p>
                                    После старта проекта к работе подключается профессиональная
                                    команда Happy Job. под управлением руководителя проекта. В ее
                                    задачи входит проектирование опроса и каналов проведения
                                    исследований, а также разработка PR-стратегии с учетом специфики
                                    компании клиента.
                                </p>
                                <p>
                                    С нами вы всегда застрахованы от неудач в исследованиях. Мы
                                    обеспечим вас методологической и технической поддержкой
                                    высочайшего уровня.
                                </p>
                                <br>
                                <p class="text-center" style="margin-bottom: 0">
                                    <strong>Скачайте PDF и узнайте больше о нашем подходе.</strong>
                                </p>
                                <a href="/pdf/happy_inc_komanda_proekta.pdf" download class="pdfs-link"><picture><source srcset="/img/p/about-us/team_pdf.webp" type="image/webp">
                                        <source srcset="/img/p/about-us/team_pdf.webp" type="image/webp"><img src="/img/p/about-us/team_pdf.png" alt="PDF Happy Job. команда проекта"></picture>
                                    <div class="button-download">
                                        <i></i><span>Скачать PDF</span>
                                    </div></a>
                                <p>
                                    Клиентам не нужно обладать специальными навыками или проходить
                                    обучение, чтобы пользоваться нашими продуктами. Все процессы
                                    максимально автоматизированы, а интерфейс интуитивно понятен.
                                </p>
                                <h2>Продукты Happy Job. в цифрах</h2>
                                <p>Чем проще кажется продукт снаружи, тем сложнее он внутри.</p>
                                <p>Продукты Happy Job. — это:</p>
                                <ul>
                                    <li><b>30 000+</b> часов работы команды специалистов,</li>
                                    <li><b>1 000 000</b> строк кода,</li>
                                    <li><b>20</b> лет опыта внедрения консалтинговых проектов,</li>
                                    <li><b>2 000+</b> проведенных нами бизнес-тренингов и сессий,</li>
                                </ul>
                                <p>
                                    Мы много трудились, чтобы предоставить вам возможность вовлечь
                                    своих сотрудников в опросы и добиться успеха.
                                </p>
                                <div class="b-green b-green__margin mt0" style="margin-bottom: -3rem;">
                                    <div class="quote-block">
                                        <div class="quote-block__left quote-block__item d-none d-md-block">
                                            <img src="/img/p/clients/photo.png" alt="" class="quote-block__img lazyload" loading="lazy">
                                        </div>
                                        <div class="quote-block__right quote-block__item">
                                            <div class="quote-block__text">
                                                <p style="font-size: 18px;">
                                                    Каждый день в Happy Job приходят новые компании, ведь мы
                                                    сделали опросы интересными для сотрудников, а
                                                    руководителям помогаем работать с изменениями.
                                                </p>
                                            </div>
                                            <div class="quote-block__name">Елена Блинова,</div>
                                            <div class="quote-block__post">
                                                директор департамента исследований, Happy Job
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <script type="text/javascript" src="/jquery/jquery.zoom.min.js"></script>
        <script type="text/javascript">
            $(window).on("load", function () {

                $(window).width() < 768 &&
                $(".zoomin").each(function () {
                    $(this).zoom();
                });
                $(".scroll-link").on("click", function () {
                    event.preventDefault();
                    var e = $($.attr(this, "href"))[0];
                    "0" === $(e).css("padding-top").replace("px", "")
                        ? $("html, body").animate(
                        { scrollTop: $(e).offset().top - 25 - 50 },
                        500,
                        )
                        : $("html, body").animate({ scrollTop: $(e).offset().top - 25 }, 500);
                }),
                    $(".gallery-company-nav").slick({
                        infinite: !0,
                        speed: 500,
                        cssEase: "linear",
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        dots: !1,
                        arrows: !0,
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 4, slidesToScroll: 1 } },
                            { breakpoint: 768, settings: { slidesToShow: 3, slidesToScroll: 1 } },
                        ],
                    });

                var currentPath = window.location.pathname;

            });
        </script>
        <style type="text/css">

            .zoomin {
                box-sizing: border-box;
                border: 1px solid #fff;
                margin: 10px 0 20px -342px;
                position: relative;
            }
            .zoomin i {
                position: absolute;
                right: 5%;
                bottom: 9%;
                font-size: 24px;
                color: #61c13a;
                display: none;
            }
            .cards-empl {
                margin: 30px 0;
            }
            .img-thumbnail {
                padding: 0.25rem;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 0.25rem;
                transition: all 0.2s ease-in-out;
                max-width: 100%;
                height: auto;
            }
            .main-content img.img-thumbnail {
                margin: 0;
            }
            .cards-empl .card-wrap p:first-child {
                display: inline-block;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 0;
                margin: 0;
                padding: 2px 0 9px;
                text-transform: none;
                z-index: 2;
                position: absolute;
                left: 0;
                color: #000;
                line-height: 1.1;
                width: auto;
                right: 0;
                text-align: center;
                bottom: 102%;
            }
            .cards-empl .card-wrap p:last-child {
                background: rgba(23, 23, 23, 0.8);
                font-size: 14px;
                font-weight: 700;
                padding: 9px 11px 9px;
                position: absolute;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
                text-transform: uppercase;
                z-index: 2;
                width: 100%;
                line-height: 1;
                margin: 0;
                color: #fff;
                position: relative;
                margin: 15px 0;
                white-space: nowrap;
                text-align: center;
            }
            .cards-empl .card-wrap,
            .cards-empl .card-wrap + p,
            .cards-empl .in-comand-wrap ul {
                max-width: 182px;
                margin: 20px auto 0;
                position: relative;
            }
            .cards-empl .card-wrap + p {
                margin-bottom: 40px;
                margin-top: 20px;
                font-size: 13px;
                line-height: 1.4;
            }
            .li_strong {
                font-size: 24px;
                padding: 1px 3px 3px;
                border-radius: 4px;
                line-height: 1;
                display: inline;
                background: #f1f1f1;
            }

            #fixedsidemenu {
                margin-left: -15px;
                padding-left: 15px;
                padding-right: 15px;
            }
            #fixedsidemenu.fixed {
                position: fixed;
                z-index: 15;
                transform: translateY(95px);
            }
            #fixedsidemenu.fixed.atbottom {
                position: absolute;
                z-index: 0;
            }
            #fillersidemenu {
                display: none;
            }
            #fixedsidemenu.fixed + #fillersidemenu {
                display: block;
            }
            @media (max-width: 767px) {
                #fixedsidemenu.fixed {
                    position: relative !important;
                    top: 0 !important;
                    width: auto !important;
                    height: auto !important;
                    z-index: 0 !important;
                }
                #fillersidemenu {
                    display: none !important;
                }
            }

            @media (max-width: 480px) {
                .cards-empl {
                    margin: 20px 0;
                }
                .b-img-open a i {
                    font-size: 30px;
                    position: absolute;
                }
                .b-img-open a:focus,
                .b-img-open a:hover {
                    outline: 0;
                }
            }
            @media (min-width: 576px) {
                .aboutusScheme {
                    display: block;
                    position: relative;
                    width: 163%;
                    left: -59%;
                    margin: -2% 0;
                }
            }
            .main-content p,
            .main-content ul li {
                text-align: left;
            }
            @media (min-width: 768px) {
                .aboutusScheme {
                    width: 170%;
                    left: -69%;
                }
                .main-content p,
                .main-content ul li {
                    text-align: left;
                }
            }
            @media (min-width: 820px) {
                .aboutusScheme {
                    width: 170%;
                    left: -68%;
                }
            }
            @media (min-width: 992px) {
                .aboutusScheme {
                    width: 140%;
                    left: -40%;
                }
            }
            .gallery-company .slick-slide,
            .gallery-company-nav .slick-slide {
                outline: 0;
            }
            .gallery-company .slick-arrow,
            .gallery-company-nav .slick-arrow {
                font-size: 0;
                line-height: 0;
                position: absolute;
                top: 110%;
                display: none !important;
                width: 20px;
                height: 32px;
                padding: 0;
                cursor: pointer;
                color: transparent;
                border: none;
                outline: 0;
                background: 0 0;
            }
            .gallery-company-nav .slick-arrow {
                top: 30%;
            }
            .anchor-menu {
                margin-bottom: 35px;
            }
            @media (min-width: 768px) {
                .gallery-company .slick-arrow,
                .gallery-company-nav .slick-arrow {
                    display: block !important;
                }
            }
            .gallery-company .slick-arrow:before,
            .gallery-company-nav .slick-arrow:before {
                display: block;
                content: "";
                width: 100%;
                height: 100%;
            }
            .gallery-company .slick-prev,
            .gallery-company-nav .slick-prev {
                left: -25px;
            }
            .gallery-company .slick-prev:before,
            .gallery-company-nav .slick-prev:before {
                background: url(img/p/about-us/prev-arr.png) no-repeat center center/cover;
            }
            .gallery-company .slick-next:before,
            .gallery-company-nav .slick-next:before {
                background: url(img/p/about-us/next-arr.png) no-repeat center center/cover;
            }
            .gallery-company-nav .slick-next:hover,
            .gallery-company-nav .slick-prev:hover {
                background: 0 0;
            }
            .gallery-company .slick-next,
            .gallery-company-nav .slick-next {
                right: -25px;
            }
            .gallery-company-nav {
                margin-bottom: 30px;
                margin-top: 30px;
            }
            .gallery-company-nav .slick-list {
                margin: 0 -10px;
                overflow: hidden;
            }
            .gallery-company-nav .slick-slide {
                padding: 0 10px;
                outline: 0;
            }
            .gallery-company-nav .slick-slide img {
                border-radius: 5px;
                outline: 0;
                cursor: pointer;
                margin: 0;
                max-width: 100%;
            }
            ul.no_circles {
                list-style: none;
                padding-left: 0;
            }
            .img100 {
                display: block;
                width: 100%;
            }
            .quote-block {
                position: relative;
                padding: 0;
                margin-bottom: 0;
                display: flex;
                flex-flow: row nowrap;
                align-items: center;
                text-align: left;
                font-size: 18px;
            }
            .quote-block__left {
                flex: 0 0 20%;
                margin-top: -13px;
            }
            .quote-block__img {
                width: 132px;
                margin: 0;
            }
            .quote-block__right {
                padding: 0 21px;
            }
            .quote-block__text {
                margin-bottom: 25px;
                position: relative;
                color: #fff;
            }
            .quote-block__name {
                font-weight: 600;
                color: #fff;
            }
            .quote-block__post {
                color: #fff;
                font-size: 11px;
            }
            .wrapall .container .b-green__margin {
                margin: 60px 0 0;
            }
            @media (max-width: 576px) {
                .wrapall .container .b-green .quote-block {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
            .b-slider-shadow-left,
            .b-slider-shadow-right {
                width: 25%;
                overflow: hidden;
                height: 100%;
                position: absolute;
                top: 0;
            }
            .b-slider-shadow-left {
                left: 0;
            }
            .b-slider-shadow-right {
                right: 0;
            }
            .b-slider-shadow-left:before,
            .b-slider-shadow-right:before {
                content: "";
                left: 0;
                background: #c6ced1;
                background: linear-gradient(
                        90deg,
                        rgba(198, 206, 209, 1) 0,
                        rgba(212, 215, 220, 0) 20%,
                        rgba(212, 215, 220, 0) 80%,
                        rgba(198, 206, 209, 1) 100%
                );
                display: inline-block;
                height: 100%;
                width: 100vw;
                position: absolute;
                top: 0;
                z-index: 1;
            }
            .b-slider-shadow-right:before {
                right: 0;
                left: inherit;
            }
            .slider-title {
                font-size: 30px;
                line-height: 1;
            }
            .slider-container {
                margin: 30px 0;
            }
            .slide-picture {
                background: #f2f6f7;
                padding: 20px 0;
            }
            .slide-department {
                display: inline-block;
                background: #fcfdfe;
                max-width: 290px;
                width: 100%;
                min-height: 290px;
                border-radius: 5px;
                margin: 0 35px;
                overflow: hidden;
                border: 1px solid #f0f4f7;
                vertical-align: top;
            }
            .slide-department:hover {
                cursor: pointer;
            }
            .slide-department img {
                transition: all 0.2s ease-in;
                filter: grayscale(1);
                opacity: 0.5;
            }
            .slide-department:hover img {
                filter: grayscale(0);
                opacity: 1;
            }
            .picture {
                display: inline-block;
                height: 50px;
                position: relative;
                width: 120px;
            }
            .picture img {
                position: absolute;
                left: 0;
                right: 0;
                margin: auto;
                top: 0;
                bottom: 0;
                max-width: 100%;
                padding: 0 8px;
                max-height: 100%;
            }
            .slide-title {
                font-size: 30px;
                line-height: 1.2;
                padding: 20px 5px;
                position: relative;
                min-height: 124px;
                overflow: hidden;
                max-height: 124px;
                display: flex;
                align-items: center;
                flex-flow: wrap;
                justify-content: center;
                color: #383a3c;
            }
            .slide-title:after {
                content: "";
                border-bottom: 2px solid #e0e4e5;
                display: inline-block;
                width: 80%;
                position: absolute;
                left: 0;
                right: 0;
                bottom: -1px;
                margin: auto;
            }
            .slide-title .text-green {
                color: #61c13a;
                font-size: 32px;
                font-weight: 800;
            }
            .slide-title .text-dep-mini {
                font-weight: 800;
                text-transform: uppercase;
                font-size: 25px;
            }
            .slide-title .text-dep-big {
                font-weight: 800;
                text-transform: uppercase;
                font-size: 50px;
                display: block;
            }
            .text-dep-middle {
                margin: 0;
                line-height: 0.7;
                font-size: 45px;
                font-weight: 800;
            }
            .text-dep-middle span {
                font-size: 30px;
            }
            .text-dep-media {
                margin: 0;
                line-height: 0.7;
                font-size: 40px;
                font-weight: 800;
            }
            .b-slider-company .slider-container a {
                color: inherit;
            }
            .b-slider-company .slider-container {
                opacity: 0;
                visibility: hidden;
                transition: opacity 1s ease;
                -webkit-transition: opacity 1s ease;
            }
            .b-slider-company .slider-container.slick-initialized {
                visibility: visible;
                opacity: 1;
            }
            .zoomin i {
                display: block;
            }
            .zoomin:hover {
                border-color: #eee;
            }
            #title_1 {
                padding-top: 0;
            }
            .tablelist {
                width: 100%;
                margin: 10px 0 30px;
                display: flex;
            }
            .tablelist__item {
                background: #d6ffd3;
                padding: 15px 20px;
                flex: 1;
                margin-right: 25px;
                border-radius: 10px;
            }
            .tablelist__item:last-child {
                margin-right: 0;
            }
            @media (max-width: 991px) {
                .tablelist {
                    display: block;
                    margin: 10px 0 40px;
                }
                .tablelist__item {
                    margin-right: 0;
                    margin-bottom: 10px;
                }
                .tablelist__item:last-child {
                    margin-bottom: 0;
                }
            }
            .prodlist {
                display: flex;
                width: 100%;
                padding: 0 0 15px;
            }
            .prodlist a {
                width: 25%;
                cursor: pointer;
                transition: all 0.2s;
            }
            .prodlist a:hover {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            .prodlist picture {
                display: block;
                width: 100%;
            }
            .prodlist picture img {
                display: block;
                width: 100%;
                margin: 0;
            }
            @media (max-width: 991px) {
                .prodlist {
                    flex-wrap: wrap;
                }
                .prodlist a {
                    width: 50%;
                }
            }
            @media (max-width: 420px) {
                .prodlist a {
                    width: 100%;
                }
            }
            .pdfs-link {
                text-align: center;
                display: block;
                margin-bottom: 2rem;
            }
            .pdfs-link picture {
                display: block;
            }
            .pdfs-link img {
                width: 100%;
                max-width: 220px;
                margin: 0 auto 1rem;
            }
            .button-download {
                color: #393a3c;
                border: 1px solid #c5c5c5;
                text-decoration: none;
                white-space: nowrap;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                font-size: 18px;
                letter-spacing: 0.8px;
                border-radius: 8px;
                transition: background-color 0.3s;
                height: 51px;
                padding: 0 1rem;
                margin: 0;
            }
            .button-download i {
                margin-right: 12px;
                display: inline-flex;
                width: 23px;
                height: 23px;
                background-repeat: no-repeat;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--fa6-solid' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512'%3E%3Cpath fill='%236a6967' d='M480 352H346.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96c0-17.7-14.3-32-32-32zm-48 104c-13.2 0-24-10.8-24-24s10.8-24 24-24s24 10.8 24 24s-10.8 24-24 24zm-198.6-81.4c6.2 6.3 14.4 9.4 22.6 9.4s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32c-17.7 0-32 14.33-32 32v242.8l-73.4-73.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z'%3E%3C/path%3E%3C/svg%3E");
            }
            .pdfs-link:hover {
                text-decoration: none;
            }
            .pdfs-link:hover .button-download {
                border-color: #61c13b;
                background-color: #61c13b;
                color: #fff;
            }
            .pdfs-link:hover .button-download i {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--fa6-solid' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512'%3E%3Cpath fill='%23ffffff' d='M480 352H346.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96c0-17.7-14.3-32-32-32zm-48 104c-13.2 0-24-10.8-24-24s10.8-24 24-24s24 10.8 24 24s-10.8 24-24 24zm-198.6-81.4c6.2 6.3 14.4 9.4 22.6 9.4s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32c-17.7 0-32 14.33-32 32v242.8l-73.4-73.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z'/%3E%3C/svg%3E");
            }
            @media (max-width: 992px) {
                .pdfs-link img {
                    margin-top: 0;
                }
                .pdfs-link {
                    margin-bottom: 30px;
                }
            }
        </style>


    </main>

</div>

<!-- endrender about-us//-->

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


    .single-video-card{
        margin: 0 auto;
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

    @media (max-width: 800px) {
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
    .swiper-container {
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .webinar-videos-wrapper.swiper-wrapper{
        position: relative;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function,initial);
        box-sizing: content-box;
        flex-wrap: wrap;
        flex-direction: column;
        height: 470px;
    }

    .webinar-videos-wrapper.swiper-wrapper .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: calc((100% - 30px) / 2) !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .webinar-videos-wrapper.swiper-wrapper .webinar-slide{
        width: 200px;
    }

    .webinar-videos-wrapper.swiper-wrapper .single-video-picture{
        padding: 0 0.5rem;
    }

    .webinar-videos-wrapper.swiper-wrapper img{
        max-width: 100%;
    }

    .webinar-videos .swiper-button-next,
    .webinar-videos .swiper-button-prev{
        width: 54px;
        height: 50px;
        top: initial;
        bottom: 0;
    }
    .webinar-videos .swiper-button-next:after,
    .webinar-videos .swiper-button-prev:after {
        font-family: initial;
        content: '';
        display: block;
        width: 54px;
        height: 50px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        transition: background-image 0.3s, left 0.3s, right 0.3s;
    }

    .webinar-videos .swiper-button-next:after {
        background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .webinar-videos .swiper-button-prev:after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .webinar-videos .swiper-pagination-bullet{
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px !important;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .webinar-videos .swiper-pagination-bullet.swiper-pagination-bullet-active{
        background-color: #47657d;
        transform: scale(1.4);
        z-index: 1;
    }

    @media(min-width: 993px){
        .section-footer.webinar-videos-footer{
            padding-top: 0;
        }
    }
    @media(max-width: 993px){
        .webinar-videos-wrapper.swiper-wrapper{
            height: 75vw;
            align-items: baseline;
        }
        .webinar-videos-wrapper.swiper-wrapper .swiper-slide{
            align-items: baseline;
        }
        .webinar-videos-slide .single-video-card{
            max-width: 100%;
            max-height: 100%;
            width: 100%;
        }
    }

    @media(max-width: 577px){
        .webinar-videos-wrapper.swiper-wrapper{
            flex-flow: row;
            height: 67vw;
        }
        .webinar-videos .swiper-pagination-bullet{
            margin: 0 5px !important;
        }
    }


</style>

<section class="videos">
    <header class="section-header">
        <h2 class="section-title">Вебинары и видео</h2>
    </header>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <div class="container">
        <div class="webinar-videos swiper">
            <div class="webinar-videos-wrapper swiper-wrapper">
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-11-25</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/775030996">
                                <img class="single-video-image" src="/img/video/previews/775030996.jpg" alt="Вовлечённость в вовлечённость">
                            </a>
                            <figcaption class="single-video-caption">
                                Вовлечённость в вовлечённость
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-08-22</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/741869709">
                                <img class="single-video-image" src="/img/video/previews/741869709.jpg" alt="Как достичь лучших HR-метрик развивая вовлеченность">
                            </a>
                            <figcaption class="single-video-caption">
                                Как достичь лучших HR-метрик развивая вовлеченность
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-05-08</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/736779306">
                                <img class="single-video-image" src="/img/video/previews/736779306.jpg" alt="Как правильно измерять и развивать лояльность и стать лучшим работодателем">
                            </a>
                            <figcaption class="single-video-caption">
                                Как правильно измерять и развивать лояльность и стать лучшим работодателем
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-11-15</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/646129647">
                                <img class="single-video-image" src="/img/video/previews/646129647.jpg" alt="Елена Блинова о платформе Happy Job">
                            </a>
                            <figcaption class="single-video-caption">
                                Елена Блинова о платформе Happy Job
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-09-06</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/560760387">
                                <img class="single-video-image" src="/img/video/previews/560760387.jpg" alt="Экономическая польза развития вовлеченности">
                            </a>
                            <figcaption class="single-video-caption">
                                Экономическая польза развития вовлеченности
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-06-03</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/558544165">
                                <img class="single-video-image" src="/img/video/previews/558544165.jpg" alt="Экономическая польза оценки лояльности">
                            </a>
                            <figcaption class="single-video-caption">
                                Экономическая польза оценки лояльности
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-05-11</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/547971978">
                                <img class="single-video-image" src="/img/video/previews/547971978.jpg" alt="Максим Потапенко о личном кабинете и конструкторе отчетов">
                            </a>
                            <figcaption class="single-video-caption">
                                Максим Потапенко о личном кабинете и конструкторе отчетов
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2020-09-24</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/461290977">
                                <img class="single-video-image" src="/img/video/previews/461290977.jpg" alt="Зачем измерять вовлеченность и лояльность?">
                            </a>
                            <figcaption class="single-video-caption">
                                Зачем измерять вовлеченность и лояльность?
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="webinar-videos-pagination swiper-pagination"></div>
            <div class="webinar-videos-button-prev swiper-button-prev"></div>
            <div class="webinar-videos-button-next swiper-button-next"></div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const webinarVideos = new Swiper('.webinar-videos', {
                    slidesPerView: 4,
                    grid: {
                        rows: 2,
                        columns: 4,
                    },
                    slidesPerGroup: 8,
                    allowTouchMove: false,
                    noSwiping: true,
                    noSwipingClass: 'webinar-slide',
                    pagination: {
                        el: '.webinar-videos-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.webinar-videos-button-next',
                        prevEl: '.webinar-videos-button-prev',
                    },
                    breakpoints: {
                        993: {
                            slidesPerView: 4,
                            grid: {
                                rows: 2,
                                columns: 2,
                            },
                            slidesPerGroup: 4,
                            allowTouchMove: true,
                        },
                        576: {
                            slidesPerView: 2,
                            grid: {
                                rows: 2,
                                columns: 1,
                            },
                            slidesPerGroup: 1,
                            allowTouchMove: true,
                        },
                        1: {
                            slidesPerView: 1,
                            grid: {
                                rows: 1,
                                columns: 1,
                            },
                            slidesPerGroup: 1,
                            allowTouchMove: true,
                        }
                    }
                });

                webinarVideos.init();
            });
        </script>
    </div>
    <footer class="section-footer webinar-videos-footer">
        <a href="https://happy-inc.ru/video/" target="_blank" class="button-outline" onclick="ym(46152993,'reachGoal','look_all_videos')">Смотреть все видео</a>
    </footer>
</section>



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

        .responses-slider--large .responses-item{
            flex-direction: column;
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
                        <input type="date" id="current-date" name="current-date" value="2024-01-31" min="2024-01-31">
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