<?php $this->title = 'eNPS индекс | Оценка лояльности сотрудников к компании'; ?>
<div class="container mainc">
    <main>
        <style>
            .heading .breadcrumbs-wrapper {
                display: none;
            }

            .breadcrumbs {
                padding: 3rem 0 0 !important;
            }

            @media (max-width: 575px) {
                .heading .breadcrumbs-wrapper {
                    display: block;
                }

                main .breadcrumbs-wrapper {
                    display: none;
                }

                .anchor-menu {
                    padding-top: 1.5rem !important;
                }
            }

            .intro {
                display: grid;
                grid-template-columns: 1fr minmax(320px, 1120px) 1fr;
                grid-template-rows: auto auto auto;
            }

            .intro-container {
                grid-column: 2 / 3;
                grid-row: 2 / 3;
                padding: 1rem;
            }

            .intro-image {
                grid-column: 1 / 4;
                grid-row: 1 / 4;
                z-index: -1;
                object-fit: cover;
                width: 100%;
                max-height: 550px;
            }

            .intro-content {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: auto auto;
                grid-gap: clamp(
                        1.25rem,
                        0.5357142857142858rem + 3.571428571428571vw,
                        3.75rem
                );
                max-width: 550px;
                margin: 0;
            }

            .intro-title {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: start;
                gap: 0.7rem;
                line-height: 1;
                font-weight: 200;
                font-size: 1.375rem;
                font-size: clamp(
                        1.375rem,
                        1.2321428571428572rem + 0.7142857142857143vw,
                        1.875rem
                );
            }

            .intro-title.-large,
            .intro-title .-large {
                font-size: clamp(
                        1.875rem,
                        1.3392857142857144rem + 2.6785714285714284vw,
                        3.75rem
                );
                white-space: nowrap;
            }

            .intro-title.-light {
                color: #fff;
            }

            .intro-title .-light {
                font-weight: 200;
            }

            .intro-title .-middle {
                font-size: 1.5em;
            }

            .intro-title .-bold {
                font-weight: 900;
            }

            .intro-title .-small {
                font-size: clamp(
                        0.75rem,
                        0.6785714285714286rem + 0.35714285714285715vw,
                        1rem
                );
                padding-top: 0.7rem;
                line-height: 1.5;
            }

            .intro-buttons {
                display: flex;
                gap: 1rem;
                align-items: center;
            }

            @media (max-width: 768px) {
                .intro-image {
                    height: 400px;
                }
            }

            @media (max-width: 576px) {
                .intro-buttons {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .intro-image {
                    opacity: 0.4;
                }

                .intro-title.-light {
                    color: #000;
                }
            }

            .row main[role="main"] > .quote-banner.wide-container .quote-banner-text {
                display: flex;
                justify-content: flex-end;
            }

            .quote-banner.wide-container .container {
                max-width: 810px;
                margin-right: 0;
            }

        </style>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "name": "Happy Job",
                "image": "/img/happy-job/images/logo.svg",
                "description": "Happy Job — это платформа, которая помогает организациям в режиме реального времени изучать состояние и потребности своих сотрудников. Это позволяет им изменять и улучшать корпоративную культуру.",
                "offers": {
                    "@type": "Offer",
                    "url": "https://happy-job.ru/",
                    "priceCurrency": "USD",
                    "price": "1",
                    "priceValidUntil": "2022-08-05",
                    "itemCondition": "https://schema.org/UsedCondition",
                    "availability": "https://schema.org/InStock"
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "5",
                    "reviewCount": "89"
                }
            }
        </script>

        <section class="wide-container intro">
            <div class="intro-container">
                <article class="intro-content">
                    <h1 class="intro-title -light">
                        <span class="-bold -middle">eNPS</span>
                        оценка лояльности <br>персонала к компании
                    </h1>
                    <div class="intro-buttons">
                        <a class="button-default feedback-form" data-button-text="Получить консультацию"
                           data-fancybox="" data-src="#main-modal" href="javascript:;"
                           onclick="ym(46152993,'reachGoal','innerpages_event_click')">Получить консультацию</a>
                    </div>
                </article>
            </div>
            <img src="/img/happy-job/images/types-of-surveys/enps-new.jpg" alt="индекс лояльности к компании"
                 class="intro-image">
        </section>

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

                        .container.blog .breadcrumbs-list > li {
                            list-style-type: none;
                        }

                        .breadcrumbs-list:after {
                            content: '';
                            display: block;
                            position: absolute;
                            width: 3rem;
                            height: 3rem;
                            right: 0;
                            top: 0;
                            background: rgb(255, 255, 255);
                            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.25253851540616246) 13%, rgba(255, 255, 255, 0.6979166666666667) 29%, rgba(255, 255, 255, 0.8463760504201681) 48%, rgba(255, 255, 255, 0.8995973389355743) 65%, rgba(255, 255, 255, 1) 83%);
                        }

                        .breadcrumbs-item {
                            list-style-type: none;
                            margin: 0;
                            white-space: nowrap;
                        }

                        .breadcrumbs-item span[itemprop="name"] {
                            overflow: visible;
                            height: auto;
                            display: inline;
                            font-size: 14px;
                            font-weight: 400;
                        }


                        .breadcrumbs-item > span[itemprop="name"] {
                            color: #393A3C;
                        }

                        .breadcrumbs-item + .breadcrumbs-item:before {
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

                        .breadcrumbs-link {
                            color: #61c13a !important;
                            text-decoration: none !important;
                            border-bottom: none !important;
                        }

                        .breadcrumbs-link:hover {
                            color: var(--c-link);
                            text-decoration: none;
                        }

                        .breadcrumbs-link > span[itemprop="name"] {
                            color: #61c13a;
                            font-size: 14px;
                        }

                        .breadcrumbs-item span[itemprop="name"] br {
                            display: none;
                        }

                        @media (min-width: 841px) {
                            .breadcrumbs-links-contacts,
                            .breadcrumbs-links-metodika {
                                cursor: pointer;
                            }

                            .breadcrumbs-links-contacts > span[itemprop="name"],
                            .breadcrumbs-links-metodika > span[itemprop="name"] {
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

                            .breadcrumbs-item + .breadcrumbs-item:before {
                                transform: translate(-3px, -3px);
                            }

                            .breadcrumbs-item > span[itemprop="name"] {
                                transform: translate(2px, 1px);
                            }

                            .breadcrumbs-item:last-child {
                                display: none;
                            }
                        }
                    </style>

                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">

                                <a href="/" style="" class="breadcrumbs-link" title="Вернуться на главную страницу"
                                   itemprop="item">
        <span itemprop="name" style="">
          Главная</span>
                                </a>

                                <meta itemprop="position" content="1">
                            </li>

                            <li class="breadcrumbs-item breadcrumbs-links-metodika" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                <span itemprop="name">
                  Методика</span>
                                <meta itemprop="position" content="3">
                            </li>

                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <span itemprop="name">eNPS индекс</span>

                                <meta itemprop="position" content="3">
                            </li>

                        </ul>
                    </nav>

                </div>

                <aside class="anchor-menu">
                    <ul>
                        <li>
                            <a href="#title0"> Что такое eNPS </a>
                        </li>
                        <li>
                            <a href="#title_benchmark"> eNPS Бенчмарк </a>
                        </li>
                        <li>
                            <a href="#title1"> С чего все начиналось </a>
                        </li>
                        <li>
                            <a href="#title2"> Как измеряется индекс eNPS сотрудников </a>
                        </li>
                        <li>
                            <a href="#title3"> Зачем измерять eNPS </a>
                        </li>
                        <li>
                            <a href="#title4"> Как улучшить eNPS </a>
                        </li>
                        <li>
                            <a href="#title5"> Когда и с какой частотой измерять eNPS </a>
                        </li>
                        <li>
                            <a href="#title6"> Ежегодные опросы вовлечённости и лояльности </a>
                        </li>
                        <li>
                            <a href="#title7"> Пульсовые замеры </a>
                        </li>
                        <li>
                            <a href="#title8"> Преимущества измерения и оценки eNPS </a>
                        </li>
                        <li>
                            <a href="#title9"> Дальнейшие шаги </a>
                        </li>
                        <li>
                            <a href="#title10"> Основные характеристики платформы для измерения eNPS </a>
                        </li>
                        <li>
                            <a href="#title11"> Ищете платформу eNPS для своего бизнеса? </a>
                        </li>
                        <li>
                            <a href="#title12"> Вопросы-ответы про eNPS </a>
                        </li>
                    </ul>
                </aside>

                <a href="https://happy-job.ru/clients/reviews/" class="sidevideo">
                    <video playsinline autoplay muted loop>
                        <source src="/videos/sidevideo/testimonials.webm" type="video/webm">
                        <source src="/videos/sidevideo/testimonials.mp4" type="video/mp4">
                    </video>
                </a>
                <style media="screen">
                    .sidevideo {
                        width: 100%;
                        display: block;
                    }

                    .loadarticle + .sidevideo {
                        margin-top: 60px;
                    }

                    .sidevideo video {
                        width: 100%;
                        clip-path: inset(1px 1px);
                    }
                </style>

            </div>
            <div class="col-sm-8 col-lg-9">
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

                        .container.blog .breadcrumbs-list > li {
                            list-style-type: none;
                        }

                        .breadcrumbs-list:after {
                            content: '';
                            display: block;
                            position: absolute;
                            width: 3rem;
                            height: 3rem;
                            right: 0;
                            top: 0;
                            background: rgb(255, 255, 255);
                            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.25253851540616246) 13%, rgba(255, 255, 255, 0.6979166666666667) 29%, rgba(255, 255, 255, 0.8463760504201681) 48%, rgba(255, 255, 255, 0.8995973389355743) 65%, rgba(255, 255, 255, 1) 83%);
                        }

                        .breadcrumbs-item {
                            list-style-type: none;
                            margin: 0;
                            white-space: nowrap;
                        }

                        .breadcrumbs-item span[itemprop="name"] {
                            overflow: visible;
                            height: auto;
                            display: inline;
                            font-size: 14px;
                            font-weight: 400;
                        }


                        .breadcrumbs-item > span[itemprop="name"] {
                            color: #393A3C;
                        }

                        .breadcrumbs-item + .breadcrumbs-item:before {
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

                        .breadcrumbs-link {
                            color: #61c13a !important;
                            text-decoration: none !important;
                            border-bottom: none !important;
                        }

                        .breadcrumbs-link:hover {
                            color: var(--c-link);
                            text-decoration: none;
                        }

                        .breadcrumbs-link > span[itemprop="name"] {
                            color: #61c13a;
                            font-size: 14px;
                        }

                        .breadcrumbs-item span[itemprop="name"] br {
                            display: none;
                        }

                        @media (min-width: 841px) {
                            .breadcrumbs-links-contacts,
                            .breadcrumbs-links-metodika {
                                cursor: pointer;
                            }

                            .breadcrumbs-links-contacts > span[itemprop="name"],
                            .breadcrumbs-links-metodika > span[itemprop="name"] {
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

                            .breadcrumbs-item + .breadcrumbs-item:before {
                                transform: translate(-3px, -3px);
                            }

                            .breadcrumbs-item > span[itemprop="name"] {
                                transform: translate(2px, 1px);
                            }

                            .breadcrumbs-item:last-child {
                                display: none;
                            }
                        }
                    </style>

                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">

                                <a href="/" style="" class="breadcrumbs-link" title="Вернуться на главную страницу"
                                   itemprop="item">
        <span itemprop="name" style="">
          Главная</span>
                                </a>

                                <meta itemprop="position" content="1">
                            </li>

                            <li class="breadcrumbs-item breadcrumbs-links-metodika" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                <span itemprop="name">
                  Методика</span>
                                <meta itemprop="position" content="3">
                            </li>

                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <span itemprop="name">eNPS индекс</span>

                                <meta itemprop="position" content="3">
                            </li>

                        </ul>
                    </nav>

                </div>

                <main role="main">
                    <h2 id="title0">Что такое eNPS</h2>
                    <p>
                        Метрика eNPS, или индекс чистой лояльности (от англ. Employee Net
                        Promoter Score), — это самая популярная в мире HR метрика,
                        которая дает представление о двух важных аспектах корпоративной культуры
                        и организации в целом: важнейшей грани лояльности сотрудника -
                        удовлетворенности условиями работы и готовности к изменениям.
                    </p>
                    <p>
                        Метрика eNPS измеряется путем опроса сотрудников о том, с какой
                        вероятностью те будут рекомендовать работу в компании своим друзьям или
                        родственникам. Сотрудники ставят оценки на шкале от 0 до 10, где 0
                        — нет, а 10 — да. На основании оценки сотрудники делятся на
                        три категории: «промоутеры», «скептики» и
                        «критики» следующим образом.
                    </p>
                    <p>
                        <img src="/img/happy-job/images/types-of-surveys/new/groups.png" alt="Группы eNSP">
                    </p>
                    <p>
                        <strong>
                            <em style="font-style: normal; color: #6bcc41"> Промоутеры </em>
                            — сотрудники, поставившие 9 и 10 баллов.
                        </strong>
                    </p>
                    <p>
                        Как правило, промоутеры готовы поддержать любые изменения, открыты
                        новому опыту, проектам, готовы расти профессионально.
                    </p>
                    <p>
                        <strong>
                            <em style="font-style: normal; color: #e5c91d"> Скептики </em>
                            — сотрудники, поставившие 7 и 8 баллов.
                        </strong>
                    </p>
                    <p>
                        Скептики в целом довольны условиями в компании, они выполняют свою
                        работу «формально» качественно, но без стремления сделать
                        результат как можно лучше. Скептики поддержат изменения, если
                        руководитель убедит их в необходимости внедрения новшеств.
                    </p>
                    <p>
                        <strong>
                            <em style="font-style: normal; color: #ef4244"> Критики </em>
                            — сотрудники, поставившие 6 и менее баллов.
                        </strong>
                    </p>
                    <p>
                        Критики недовольны условиями работы в компании. Как правило, они открыто
                        критикуют процессы, культуру. Недовольство может сказываться на качестве
                        работы — сотрудники выполняют свои обязанности формально. Они не
                        хотят ничего менять и не поддержат изменения. С этой категорией
                        персонала важно установить контакт: узнать причину разочарования и
                        постараться улучшить ситуацию.
                    </p>
                    <p>
                        Критики являются важным активом компании — они имеют смелость
                        указывать на реальные проблемы.
                    </p>
                    <br>
                    <style>
                        .comparecalc {
                            display: flex;
                            justify-content: space-between;
                            padding: 50px 0 30px;
                            color: #777;
                        }

                        .comparecalc__info {
                            max-width: 550px;
                            flex: 1;
                        }

                        .comparecalc__title {
                            font-size: 30px;
                            font-weight: 300;
                            color: #1d2127;
                        }

                        .comparecalc__title h2 {
                            font-size: inherit;
                            font-weight: inherit;
                            color: inherit;
                            margin: 0;
                            padding: 0;
                        }

                        .comparecalc__text {
                            margin-top: 15px;
                        }

                        .comparecalc__form {
                            margin-top: 50px;
                        }

                        .comparecalc__form-title {
                            font-weight: bold;
                        }

                        .comparecalc__form-content {
                            display: flex;
                            margin-top: 15px;
                        }

                        .comparecalc__form-content input {
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
                            font-family: sans-serif;
                        }

                        .comparecalc__form-content .button-default {
                            height: 37px;
                            padding-top: 4px;
                            padding-bottom: 0;
                            display: flex;
                            align-items: center;
                            font-size: 15px;
                        }

                        #compare-index .button-default:focus,
                        #compare-index .button-default:active {
                            border-bottom: none;
                            position: relative;
                            margin-top: -6px;
                            top: 4px;
                            margin-bottom: 16px;
                        }

                        .compareForm .button-default.disabled {
                            cursor: default;
                            background-color: #F5515A;
                            background-size: 5px 5px;
                            background-image: repeating-linear-gradient(45deg, #ffa9a9 0, #ffa9a9 0.5px, #F5515A 0, #F5515A 50%);
                            border-bottom: 4px solid transparent;
                        }

                        .button-default.disabled:focus,
                        .button-default.disabled:active {
                            margin-top: 0px;
                            top: 0px;
                            border-bottom: 4px solid transparent;
                            outline: none;
                        }

                        .compareForm .nice-select span.current {
                            color: #777;
                            font-size: 13px;
                            display: block;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            max-width: 121px;
                        }


                        .comparecalc__form-number {
                            width: 150px;
                            margin-right: 10px;
                            padding-right: 5px;
                        }

                        .comparecalc__form-name {
                            width: 170px;
                            margin-right: 10px;
                        }

                        .comparecalc__form-col {
                            position: relative;
                        }

                        .comparecalc__form-col span {
                            position: absolute;
                            left: 0;
                            top: 100%;
                            width: 100%;
                            padding-top: 2px;
                            font-size: 9px;
                            line-height: 1.1;
                            color: #f00;
                        }

                        .comparecalc__calcblock {
                            width: 200px;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            text-align: center;
                            min-height: 250px;
                        }

                        .comparecalc__calc {
                            width: 200px;
                            height: 200px;
                            position: relative;
                        }

                        .comparecalc__calc svg {
                            width: 100%;
                            height: 100%;
                        }

                        .comparecalc__calc-value {
                            position: absolute;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-size: 30px;
                            font-weight: 700;
                        }

                        .comparecalc__company {
                            margin-top: 20px;
                            font-size: 16px;
                            font-weight: 700;
                        }

                        .comparecalc__result {
                            margin-top: 8px;
                            font-size: 0.9em;
                            display: none;
                        }

                        .comparecalc__result.show {
                            display: block;
                        }

                        #compareCalcLine {
                            stroke-dasharray: 295.416, 295.416;
                            stroke-linecap: round;
                            stroke: #61C13B;
                            transition: stroke-dashoffset 1s;
                        }

                        #compareCalcLine.negative {
                            stroke: #ff0000;
                        }

                        .compareForm {
                            border-radius: 4px;
                            background: #61C13B;
                            display: flex;
                            flex-wrap: wrap;
                            margin-top: 20px;
                            color: #fff;
                            padding: 20px;
                            padding-bottom: 2rem;
                        }

                        .compareForm .nice-select {
                            height: 40px;
                            font-size: 13px;
                            float: none;
                            padding: 10px;
                            line-height: 1.5;
                            max-width: 148px;
                            font-family: sans-serif;
                        }

                        .compareForm__text {
                            width: 100%;
                            padding-bottom: 20px;
                        }

                        .compareForm__answer {
                            width: 100%;
                            padding-bottom: 0;
                            display: none;
                            font-size: 20px;
                            line-height: 1.2;
                            font-weight: 700;
                            display: none;
                        }

                        .compareForm__col input,
                        .compareForm__col select {
                            display: block;
                            font-size: 13px;
                            line-height: 1.42857143;
                            background-color: #fff;
                            background-image: none;
                            border: 1px solid #ccc;
                            padding: 10px;
                            border-radius: 4px;
                            color: #313131;
                            outline: none;
                            margin-right: 10px;
                            font-family: sans-serif;
                            width: 100%;
                            max-width: 150px;
                        }

                        .compareForm__col select + label,
                        .compareForm__col input + label {
                            display: none !important;
                        }

                        .compareForm__col {
                            position: relative;
                            margin-bottom: 10px;
                            flex: 1;
                            max-width: 170px;
                        }

                        .compareForm__col label.error {
                            font-size: 12px;
                            line-height: 1;
                            display: inline-block;
                            margin: 10px 0 0;
                            font-weight: bold;
                        }

                        .compareForm__number {
                            padding-right: 5px !important;
                            width: 107px;
                        }

                        .compareForm__name {
                            width: 141px;
                        }

                        .compareForm__mail {
                            width: 151px;
                        }

                        .compareForm__col select {
                            appearance: none;
                            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
                            background-repeat: no-repeat;
                            background-position: right 0.7em center;
                            background-size: 1em;
                            color: #666;
                        }

                        .compareForm__col select.filled {
                            color: #313131;
                        }

                        .compareForm .button-default {
                            height: 30px;
                            padding-top: 4px;
                            padding-bottom: 0;
                            display: flex;
                            align-items: center;
                            font-size: 15px;
                            margin-bottom: 10px;
                        }

                        .compare-alert {
                            display: none;
                            color: red;
                        }

                        .compare-alert.visible {
                            display: block;
                        }

                        @media (max-width: 1024px) {
                            .compareForm {
                                flex-direction: column;
                            }

                            .compareForm__col {
                                margin-bottom: 2rem;
                            }


                            .compareForm__col input,
                            .compareForm__col select {
                                max-width: 100%;
                            }

                            .compareForm .button-default {
                                max-width: 140px;
                            }
                        }

                        @media (max-width: 992px) {
                            .comparecalc {
                                display: block;
                            }

                            .comparecalc__form {
                                margin-top: 30px;
                            }

                            .comparecalc__calcblock {
                                margin: 30px auto 0;
                            }
                        }

                        @media (max-width: 767px) {
                            .comparecalc {
                                display: block;
                            }

                            .comparecalc__form {
                                margin-top: 30px;
                            }

                            .comparecalc__calcblock {
                                margin: 30px auto 0;
                            }

                            .comparecalc__form-title {
                                text-align: center;
                            }

                            .comparecalc__form-content {
                                display: block;
                                max-width: 250px;
                                margin: 0 auto;
                            }

                            .compareForm__col input,
                            .compareForm__col select {
                                max-width: inherit;
                            }

                            .comparecalc__form-col {
                                margin: 15px 0;
                                position: relative;
                            }

                            .comparecalc__form-col input {
                                width: 100%;
                            }

                            .comparecalc__form-col span {
                                position: relative;
                                top: 0;
                                padding-top: 5px;
                                font-size: 10px;
                            }

                            .compareForm {
                                display: block;
                                max-width: 350px;
                                margin-left: auto;
                                margin-right: auto;
                            }

                            .compareForm__text {
                                text-align: center;
                            }

                            .compareForm__col {
                                max-width: 250px;
                                margin: 0 auto 15px;
                            }

                            .compareForm__col input,
                            .compareForm__col select {
                                width: 100%;
                            }

                            .compareForm .button-default {
                                max-width: 250px;
                                margin: 10px auto 20px;
                            }
                        }

                        @media (max-width: 415px) {
                            .compareForm {
                                max-width: unset;
                            }
                        }

                        .select-wrapper {
                            display: flex;
                            flex-direction: column;
                        }

                        .compareForm .parsley-errors-list {
                            padding: 0;
                        }

                        .compareForm .parsley-custom-error-message {
                            color: #fff;
                            font-size: 10px;
                            font-weight: bold;
                            margin-bottom: 0;
                        }

                        .compareForm .parsley-custom-error-message {
                            margin-bottom: 0;
                        }

                        .compareForm ul[aria-hidden="true"] {
                            margin-bottom: 0;
                        }

                        .compareForm ul[aria-hidden="false"] {
                            margin-bottom: -27px;
                        }

                        .compareForm .nice-select .option {
                            margin-bottom: 0;
                            font-size: 13px;
                            padding: 6px 10px;
                            height: 27px;
                            line-height: 1;
                            min-height: 27px;
                        }

                        .compareForm .c-form {
                            display: grid;
                            grid-template-columns: 1fr auto;
                            grid-template-rows: auto auto;
                            grid-column-gap: 0.5rem;
                            grid-row-gap: 1rem;
                        }

                        .compareForm h2 {
                            color: #fff;
                            font-size: 1rem;
                            margin: 0;
                            padding: 0;
                            grid-column: 1 / 3;
                        }

                        .compareForm .c-form-list {
                            display: flex;
                            flex-flow: row wrap;
                            color: #fff;
                            padding: 0;
                            margin: 0;
                            gap: 0.5rem;
                        }

                        .compareForm .c-form-item {
                            flex: 1;
                            max-width: 170px;
                            margin: 0;
                        }

                        .compareForm .c-form-label,
                        .compareForm .c-form-item:nth-child(1),
                        .compareForm .c-form-item:nth-child(2) {
                            display: none;
                        }

                        .compareForm .c-form-policy {
                            display: none;
                        }

                        .compareForm .c-form-item .parsley-custom-error-message {
                            color: #fff;
                            font-weight: normal;
                        }

                        .compareForm .c-form-item .parsley-custom-error-message:before {
                            display: none;
                        }

                        @media (max-width: 1200px) {
                            .compareForm .c-form {
                                grid-template-columns: 1fr;
                                grid-template-rows: auto auto auto;
                                grid-column-gap: 0.5rem;
                                grid-row-gap: 1rem;
                            }

                            .compareForm h2,
                            .compareForm .c-form-list {
                                grid-column: 1 / 2;
                            }
                        }

                        @media (max-width: 993px) {
                            .compareForm .c-form-list {
                                flex-direction: column;
                            }

                            .compareForm .button-default {
                                margin: 10px auto 20px 0;
                            }

                        }

                    </style>
                    <div class="comparecalc" id="title_benchmark">
                        <div class="comparecalc__info">
                            <div class="comparecalc__title">
                                <h2>eNPS Бенчмарк</h2>
                            </div>
                            <div class="comparecalc__text">
                                <p>
                                    Воспользуйтесь нашей базой данных по 800+ компаниям 32 отраслей и сравните себя с
                                    коллегами и конкурентами.
                                </p>
                            </div>
                            <div class="comparecalc__form">
                                <div class="comparecalc__form-title">
                                    Сравните Ваш eNPS с показателем по России
                                </div>
                                <div class="comparecalc__form-content">
                                    <div class="comparecalc__form-col">
                                        <input class="comparecalc__form-number comparecalcnum" type="number" min="-100"
                                               max="100" placeholder="Ваш eNPS" id="compareCalcInputNum">
                                        <span></span>
                                    </div>
                                    <!--
        <div class="comparecalc__form-col">
          <input class="comparecalc__form-name" type="text" placeholder="Название компании" id="compareCalcInputName">
          <span></span>
        </div>-->
                                    <a class="button-default" id="compareCalcButton">Сравнить</a>
                                </div>
                            </div>
                        </div>
                        <div class="comparecalc__calcblock">
                            <div class="comparecalc__calc" id="compareCalc" data-average="33">
                                <svg viewbox="0 0 100 100" style="display: block; width: 100%;">
                                    <path d="M 50,50 m 0,-47 a 47,47 0 1 1 0,94 a 47,47 0 1 1 0,-94" stroke="#eee"
                                          stroke-width="6" fill-opacity="0"></path>
                                    <path d="M 50,50 m 0,-47 a 47,47 0 1 1 0,94 a 47,47 0 1 1 0,-94" stroke-width="6"
                                          fill-opacity="0" id="compareCalcLine"
                                          style="stroke-dashoffset: 295.416;"></path>
                                </svg>
                                <div class="comparecalc__calc-value" id="compareCalcVal">0</div>
                            </div>
                            <div class="comparecalc__company" id="compareCalcCompanyName"></div>
                            <div class="comparecalc__result">
                                Ваш показатель на <b><span id="compareCalcResult"></span></b> <span
                                        id="compareCalcState"></span> среднего
                            </div>
                        </div>
                    </div>
                    <section class="compareForm">
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

                        <form id="compare-index" class="c-form" data-parsley-validate>
                            <h2>Чтобы сравнить себя в отрасли, заполните форму, и мы пришлем вам результат на
                                e-mail</h2>

                            <ul class="c-form-list">
                                <li class="c-form-item">
                                    <input type="hidden" name="form-id" value="compare-index">
                                </li>
                                <li class="c-form-item">
                                    <input type="hidden" name="check" value="bot" id="checkinput">
                                </li>

                                <li class="c-form-item">
                                    <label class="c-form-label">
                                        Отрасль
                                    </label>
                                    <select id="industry" name="industry" required data-parsley-trigger="change"
                                            data-parsley-error-message="Укажите название отрасли">
                                        <option value="Отрасль" selected disabled>
                                            Отрасль
                                        </option>
                                        <option value="Государственные компании">
                                            Государственные компании
                                        </option>
                                        <option value="Фарма и медицина">
                                            Фарма и медицина
                                        </option>
                                        <option value="Производство">
                                            Производство
                                        </option>
                                        <option value="Металлургия">
                                            Металлургия
                                        </option>
                                        <option value="Нефть. Газ. Энергетика">
                                            Нефть. Газ. Энергетика
                                        </option>
                                        <option value="IT">
                                            IT
                                        </option>
                                        <option value="E-commerce">
                                            E-commerce
                                        </option>
                                        <option value="Банки">
                                            Банки
                                        </option>
                                        <option value="Страховые компании">
                                            Страховые компании
                                        </option>
                                        <option value="Retail food">
                                            Retail food
                                        </option>
                                        <option value="Retail non food">
                                            Retail non food
                                        </option>
                                        <option value="Девелопмент и строительство">
                                            Девелопмент и строительство
                                        </option>
                                        <option value="Лизинговые компании">
                                            Лизинговые компании
                                        </option>
                                        <option value="Логистика">
                                            Логистика
                                        </option>
                                        <option value="Авиа и ж/д перевозки">
                                            Авиа и ж/д перевозки
                                        </option>
                                        <option value="Образование и наука">
                                            Образование и наука
                                        </option>
                                        <option value="Профессиональные услуги">
                                            Профессиональные услуги
                                        </option>
                                        <option value="Телеком">
                                            Телеком
                                        </option>
                                    </select>
                                </li>
                                <li class="c-form-item">
                                    <label class="c-form-label">
                                        Компания
                                        <sup>*</sup>
                                    </label>
                                    <input type="text" id="company" name="company" placeholder="Ваша компания" required
                                           data-parsley-trigger="change"
                                           data-parsley-error-message="Укажите название компании">
                                </li>
                                <li class="c-form-item">
                                    <label class="c-form-label">
                                        Телефон
                                        <sup>*</sup>
                                    </label>
                                    <input type="tel" id="phone" name="phone" placeholder="" required
                                           data-parsley-trigger="change"
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
                            </ul>
                            <button id="compare-index-submit" type="submit" class="button-default">Отправить</button>

                            <div class="c-form-policy">
                                <p>
                                    Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных
                                    данных.
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
                                            dataLayer.push({
                                                'event': 'GAevent',
                                                'eventCategory': 'form',
                                                'eventAction': 'request'
                                            });
                                            console.log('Метрика “Заполните заявку” на всех страницах сайта')
                                            break;
                                        case 'free-demo':
                                            dataLayer.push({
                                                'event': 'GAevent',
                                                'eventCategory': 'form',
                                                'eventAction': 'free_demo'
                                            });
                                            console.log('Метрика “Протестируйте бесплатно” внизу страниц сайта')
                                            break;
                                        case 'hrbrand':
                                            dataLayer.push({
                                                'event': 'GAevent',
                                                'eventCategory': 'form',
                                                'eventAction': 'request'
                                            });
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
                                                    dataLayer.push({
                                                        'event': 'GAevent',
                                                        'eventCategory': 'form',
                                                        'eventAction': 'request'
                                                    });
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

                                let inputFields = document.querySelectorAll('#compare-index input[type="tel"]');
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
                                            $("#compare-index").find('input[type="text"], input[type="phone"], textarea').val('');
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
                                $('#compare-index input').on('input', function () {
                                    const Form = $('#compare-index').parsley();
                                });


                                // 2
                                $('#compare-index-submit').on('click', function (event) {
                                    const Form = $('#compare-index').parsley();

                                    if (Form.isValid()) {
                                        formSubmitHandler(event)
                                    }
                                })

                                function formSubmitHandler(event) {
                                    event.preventDefault();

                                    $(document).find('.main-modal .is-close').trigger('click');
                                    const formNode = document.getElementById('compare-index');
                                    const formData = new FormData(formNode);
                                    const formNodeID = 'compare-index';
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
                    </section>

                    <script type="text/javascript">
                        $(function () {

                            var average = parseInt($('#compareCalc').data('average'));
                            var calcline = 295.416;
                            var formValid = false


                            /* Вычисления */
                            document.getElementById('compareCalcButton').addEventListener('click', function () {
                                var error = false;
                                var calcval = parseInt(document.getElementById('compareCalcInputNum').value);
                                var calcInputNumNext = document.getElementById('compareCalcInputNum').nextElementSibling;

                                if (isNaN(calcval) || calcval < -100 || calcval > 100) {
                                    calcInputNumNext.innerHTML = 'Введите значение от -100 до 100';
                                    error = true;
                                } else {
                                    calcInputNumNext.innerHTML = '';
                                }

                                if (error) {
                                    return false;
                                }

                                var calcdiff = average - calcval;
                                var calcstate = 'ниже';
                                var compareCalcLine = document.getElementById('compareCalcLine');

                                if (calcval > 0) {
                                    compareCalcLine.classList.remove('negative');
                                } else {
                                    compareCalcLine.classList.add('negative');
                                }

                                compareCalcLine.style.strokeDashoffset = calcline + (-1 * calcval * calcline / 100);

                                if (calcdiff < 0) {
                                    calcstate = 'выше';
                                    calcdiff = -1 * calcdiff;
                                }

                                document.getElementById('compareCalcVal').innerHTML = calcval;
                                document.getElementById('compareCalcResult').innerHTML = calcdiff;
                                document.getElementById('compareCalcState').innerHTML = calcstate;
                                document.querySelector('.comparecalc__result').classList.add('show');
                            });
                        });
                    </script>
                    <br>

                    <h2 id="title1">С чего все начиналось</h2>
                    <p>
                        В середине 2000-х менеджеры компании Apple вывели индекс eNPS из индекса
                        NPS, который Ф. Райхельд несколькими годами ранее взял из хорошо
                        зарекомендовавшего себя психологического теста. В оригинальной методике
                        NPS клиентов просили оценить готовность рекомендовать бренд или продукт
                        компании друзьям по 10-балльной шкале.
                    </p>
                    <p>
                        В eNPS способ расчета индекса остался прежним, однако был изменен
                        основной вопрос:«С какой вероятностью вы порекомендуете компанию
                        как работодателя друзьям?».
                    </p>
                    <p>
                        Фактически речь идет об опросе NPS для сотрудников с последующим
                        расчетом индекса NPS сотрудников.
                    </p>
                    <h2 id="title2">Как измеряется индекс eNPS сотрудников</h2>
                    <p>Расчет eNPS довольно прост и представлен на схеме ниже.</p>

                    <br>
                    <img src="/img/happy-job/images/types-of-surveys/new/types.jpg" alt="">
                    <br>

                    <ol>
                        <li>
                            Проведите опрос сотрудников, в рамках которого задайте людям вопрос:
                            «С какой вероятностью вы порекомендуете компанию как
                            потенциального работодателя друзьям?».
                        </li>
                        <li>
                            Подсчитайте количество промоутеров, скептиков и критиков (согласно
                            приведенной выше шкале).
                        </li>
                        <li>
                            Выясните общее количество сотрудников, которые приняли участие в
                            опросе. Для этого необходимо сложить количество промоутеров, скептиков
                            и критиков.
                        </li>
                        <li>Подсчитайте доли (в процентах) промоутеров и критиков.</li>
                        <li>Вычтите долю критиков из доли промоутеров.</li>
                        <li>Результатом вычитания станет ваш eNPS сотрудников.</li>
                    </ol>
                    <p>
                        Допустим, опрос лояльности показал, что в вашей компании 70 промоутеров,
                        30 критиков и нет скептиков. Тогда доля промоутеров равна 70%, критиков
                        — 30%, и eNPS составит:
                    </p>
                    <p style="font-weight: 700;">70% − 30% = 40%.</p>
                    <p>
                        Давайте посмотрим, что произойдет, если в компании работают еще 50
                        скептиков. Общее количество сотрудников:
                    </p>
                    <p style="font-weight: 700;">70 + 30 + 50 = 150.</p>
                    <p>
                        Доля промоутеров равна 47%, доля критиков — 20%. Тогда NPS
                        составляет:
                    </p>
                    <p style="font-weight: 700;">47% − 20% = 27%.</p>
                    <p>
                        Во втором случае eNPS значительно снизился. Именно поэтому компаниям
                        следует уделять внимание не только критикам, но и скептикам, в идеале
                        — как можно большее их количество превращать в промоутеров.
                    </p>
                    <p>
                        Кроме того, подчеркнем: критиков не стоит воспринимать как врагов. Это
                        не «плохие» сотрудники, а такой же актив компании, часто
                        — хорошие профессионалы. Они не боятся высказывать
                        «непопулярное» мнение, и руководителям нужно работать,
                        целенаправленно повышая лояльность таких людей.
                    </p>
                    <h2 id="title3">Зачем измерять eNPS</h2>
                    <p>
                        Высокий индекс eNPS свидетельствует об удовлетворенности условиями в
                        компании. Само собой разумеется, что отношения с сотрудниками —
                        залог успеха любого бизнеса.
                    </p>
                    <p>
                        Эффективность использования индекса eNPS для оценки лояльности персонала
                        подтверждена рядом исследований. Авторы статьи Harvard Business Review
                        2015 года «Как корпоративная культура влияет на мотивацию
                        сотрудников» провели корреляцию между высокими показателями
                        индекса компании и успехами сотрудников в продажах:
                    </p>
                    <p>
                        в рознице лояльные продавцы совершали в среднем на 30% больше продаж, в
                        банковском секторе — на 34%.
                    </p>

                    <br>

                    <style>
                        @media (max-width: 768px) {
                            .quote-banner.wide-container {
                                padding-top: 1.5rem;
                            }
                        }
                    </style>

                    <section class="quote-banner wide-container">
                        <blockquote class="quote-banner-text animated fadeIn">
                            <div class="container">
                                <div class="row align-center">
                                    <div class="col-sm-12 col-md-4 col-lg-3">
                                        <img src="https://happy-job.ru/img/spiker.png" alt="">
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-9">
                                        <p style="padding-bottom: 0;">100% быстро растущих компаний в России имеют eNPS
                                                                      +35 и выше</p>
                                        <p style="padding-top: 0; font-size: 14px;">*по данным более 1,5 миллиона
                                                                                    исследований Happy Job в 800
                                                                                    компаниях.</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </section>
                    <br>

                    <p>
                        На сегодняшний день индекс лояльности сотрудников может довольно точно
                        предсказать успех внедрения изменений в компании: чем выше уровень eNPS
                        — тем больше шансов, что команда примет изменения, не станет их
                        саботировать, поскольку удовлетворенность персонала является индикатором
                        настроений сотрудников и готовности принять новое.
                    </p>
                    <p>
                        Значения индекса в теории могут варьироваться от –100 до +100, но
                        в практике наблюдений Happy Job (исследования в 32 отраслях в России за
                        сезон 2014-22 годов) встречаются значения от –37 до +75.
                    </p>
                    <br>
                    <img src="/img/happy-job/images/types-of-surveys/new/po-rossii.png" alt="">
                    <br>
                    <p>
                        Согласно общепринятой международной методике, результаты выше +15
                        считаются хорошими. Если индекс лояльности персонала ниже нуля или
                        находится в диапазоне от 0 до +10, значит, в компании трудно внедрять
                        какие-либо изменения. Чем ниже значение, тем выше риск потери ценных
                        сотрудников, снижения качества продукции или услуг.
                    </p>
                    <p>
                        Самый высокий eNPS в России зафиксирован в диапазоне 73-75, худший
                        — ниже –35-37. Медиана +26,1. Самые низкие значения отмечены
                        в производственных и ресурсных компаниях.
                    </p>
                    <p>
                        Метрика eNPS касается и других аспектов работы компании. Промоутеры не
                        просто довольные, лояльные сотрудники. Они помогают привлечь в компанию
                        новых людей, потенциальных «звезд», с помощью
                        «сарафанного радио» и рекомендаций HR бренда. В результате
                        затраты компании на поиск и привлечение специалистов значительно
                        снижаются.
                    </p>
                    <p>
                        Лояльные сотрудники делают для привлечения ценных кадров больше, чем
                        самые привлекательные объявления о вакансиях, поэтому важно постоянно
                        отслеживать eNPS и совершать правильные действия для его улучшения.
                    </p>
                    <p>
                        А при грамотном проведении опроса лояльности вы не просто выясните цифру
                        eNPS, но и поймете, что за ней стоит, какие факторы на нее влияют. От
                        этих сведений можно оттолкнуться, разрабатывая мероприятия по развитию
                        лояльности.
                    </p>
                    <h2 id="title4">Как улучшить eNPS</h2>
                    <p>
                        Улучшение показателя eNPS — это система мероприятий, а также
                        непрерывный процесс, требующий тщательного планирования и выполнения
                        планов.
                    </p>
                    <p>
                        Ниже приведем 5 последовательных шагов, которые могут в кратчайшие сроки
                        изменить динамику на положительную. Впрочем, список не исчерпывающий, и
                        больше подсказок и рекомендаций от экспертов вы найдете на платформе
                        Happy Job.
                    </p>
                    <br>
                    <img src="/img/happy-job/images/types-of-surveys/new/ensp.png" style="max-width: 100%;">
                    <br>

                    <h3>1. Ознакомьтесь с предложениями скептиков и критиков</h3>
                    <p>
                        Начинать работу по улучшению метрики eNPS следует со знакомства с
                        предложениями скептиков и критиков через обратную связь и анонимные
                        комментарии. Прислушиваясь к причинам недовольства сотрудников и
                        стараясь их устранить, вы сможете обратить часть критиков и
                        скептиков в промоутеров.
                    </p>
                    <h3>2. Составьте список показателей для улучшения метрики</h3>
                    <p>
                        Выделите показатели, на которые необходимо повлиять в первую очередь.
                        Среди них могут быть:
                    </p>
                    <ul>
                        <li>- компетенции руководителя, которые можно оценить, проведя опрос сотрудников о
                            руководителе;
                        </li>
                        <li>- оплата, условия и комфорт труда;</li>
                        <li>- эффективность коммуникаций;</li>
                        <li>- распределение нагрузки на членов команды;</li>
                        <li>- информирование команды о действующих в компании системах мотивации, льготах и социальных
                            привилегиях;
                        </li>
                        <li>- внимание руководства к потребностям сотрудников в «особых условиях».</li>
                    </ul>
                    <h3>3. Действуйте через руководителя</h3>
                    <p>
                        Каждому руководителю важно выяснить причины недовольства в его
                        подразделении. Их можно понять, изучая результаты анонимного онлайн
                        исследования. Это могут быть, например, условия труда, недостатки
                        процессов или отсутствие развития карьеры. В дальнейшем стоит поднять
                        выявленные проблемы и обсудить их на командных собраниях, а также в ходе
                        встреч «один на один».
                    </p>
                    <h3>4. Устраивайте встречи и воркшопы для сбора идей по улучшению eNPS</h3>

                    <p>
                        Индивидуальные встречи и командные воркшопы позволят собрать идеи от
                        сотрудников по улучшению работы подразделений и найти решения выявленных
                        проблем.
                    </p>
                    <h3>5. Внедряйте меры и отчитывайтесь о результатах</h3>
                    <p>
                        Парадоксально, но только «делать» недостаточно. Необходимо
                        еще информировать сотрудников: отчитываться о прогрессе, о промежуточных
                        и итоговых результатах командных встречах. Если меры не помогли решить
                        проблемы подразделения, вернитесь на шаг назад и снова начинайте
                        собирать идеи в рамках следующего исследования.
                    </p>
                    <p><strong>Перечислим также общие рекомендации по улучшению eNPS.</strong></p>
                    <style>
                        .list {
                            padding-left: 1rem;
                        }

                        .list li {
                            list-style: disc;
                            line-height: 1.5;
                        }
                    </style>
                    <ul class="list">
                        <li>
                            Добейтесь того, чтобы рекомендовать компанию вашим сотрудникам было
                            легко. Полезные инструменты для этого: бренд-медиа, печатная
                            продукция, реферальная система в рамках найма персонала.
                        </li>
                        <li>
                            Сократите среднее время решения проблем. Предлагайте временные решения
                            в переходный период, пока улучшения еще не внедрены.
                        </li>
                        <li>
                            Вовлекайте всех руководителей. Убедитесь, что руководители на всех
                            уровнях вашей организации заинтересованы в укреплении лояльности
                            сотрудников. Именно от руководителей зависит 70-80% успеха в улучшении
                            eNPS.
                        </li>
                        <li>
                            Постоянно отслеживайте eNPS. Метрика формируется не за день и
                            постоянно меняется. Настройте получение постоянной обратной связи для
                            измерения, оценки, анализа и улучшения вашего eNPS, например, с
                            помощью дальнейших опросов вовлечённости и лояльности.
                        </li>
                    </ul>
                    <h2 id="title5">Когда и с какой частотой измерять eNPS</h2>
                    <p>
                        Общая рекомендация — регулярно, через равные промежутки времени.
                        Кроме того, мы в Happy job рекомендуем оценивать eNPS, наряду с другими
                        HR-метриками, в рамках опроса вовлечённости и лояльности не реже 2 раз в
                        год.
                    </p>
                    <p>
                        Составлять календарь опросов, безусловно, необходимо с учетом
                        бизнес-ритмов вашей компании: сезонности и подъемов бизнес-активности.
                        Составляя график проведения исследований персонала, важно сбалансировать
                        календарь опросов так, чтобы:
                    </p>
                    <ol>
                        <li>сохранить у сотрудников желание участвовать;</li>
                        <li>дать руководителям время на внедрение изменений;</li>
                        <li>
                            выработать в компании устойчивую культуру постоянной обратной связи.
                        </li>
                    </ol>
                    <p>
                        Исходя из целей, глубины и времени взаимодействия, опросы можно
                        разделить на две категории.
                    </p>
                    <h2 id="title6">Ежегодные опросы вовлечённости и лояльности</h2>
                    <p>
                        Это основные исследования, которые проводятся 1-2 раза в год,
                        предполагают 100%-ное участие всех сотрудников компании и служат основой
                        для построения планов развития и последующих пульсовых замеров. Они
                        позволяют получить исчерпывающую обратную связь от сотрудников.
                    </p>
                    <br>

                    <style>
                        .mini-cards img {
                            height: 90px;
                            width: auto;
                        }

                        .mini-cards figcaption {
                            line-height: 1.2;
                        }
                    </style>

                    <section class="row mini-cards">
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-1.png" alt="">
                                <figcaption>Все вопросы исследования<br>в единой анкете</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-2.png" alt="">
                                <figcaption>1-2 раза в год. Исследование длится от 1 до 3 недель</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-3.png" alt="">
                                <figcaption>Время прохождения опроса: 5-10 минут</figcaption>
                            </figure>
                        </div>
                    </section>

                    <br>
                    <h2 id="title7">Пульсовые замеры</h2>
                    <p>
                        Мы рекомендуем проводить их после основных исследований.
                        «Пульсы» нужны для уточнения причин каких-либо проблем,
                        выявленных в ходе основных исследований. Они позволяют оперативно
                        внедрять улучшения и в режиме реального времени контролировать
                        достигнутый эффект.
                    </p>
                    <br>

                    <section class="row mini-cards">
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-1.png" alt="">
                                <figcaption>Меньшее количество<br>вопросов, более частые опросы</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-2.png" alt="">
                                <figcaption>Несколько раз в год. Исследование длится от 1 до 2 недель</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="/img/happy-job/images/types-of-surveys/new/icon-3.png" alt="">
                                <figcaption>Время прохождения опроса: 1-2 минуты</figcaption>
                            </figure>
                        </div>
                    </section>

                    <br>
                    <h2 id="title8">Преимущества измерения и оценки eNPS</h2>
                    <p>
                        Перечислим пять аргументов в пользу включения метрики в регулярные
                        опросы вовлечённости и лояльности.
                    </p>
                    <h3>Урегулирование отношений с сотрудниками</h3>
                    <p>
                        Метрика позволяет узнать, что ваши сотрудники думают о вашей компании
                        или бренде. Благодаря этому устраняется разрыв между вашими абстрактными
                        представлениями (возможно, иллюзиями) и ситуацией, которая складывается
                        на самом деле. Сотрудников могут не устраивать условия работы или
                        профессионализм руководителей. Выяснив это, вы сможете своевременно
                        вмешаться и все исправить.
                    </p>
                    <h3>Улучшение корпоративной культуры и атмосферы в команде</h3>
                    <p>
                        Благодаря опросам лояльности, включающему оценку eNPS и mNPS (то есть
                        NPS руководителя), вы выясняете, какие подразделения требуют большего
                        внимания, где преобладают критики и скептики, а затем предлагаете
                        мероприятия, направленные на изменение негативного отношения. Кроме
                        того, вы регулярно взаимодействуете со своими промоутерами, убеждаетесь,
                        что они довольны.
                    </p>
                    <h3>Оценка здоровья бизнеса</h3>
                    <p>
                        Низкий показатель лояльности персонала указывает на то, что ваш бизнес,
                        корпоративная культура и HR-бренд движутся в неправильном направлении.
                        Большое количество нелояльных сотрудников повышает бизнес-риски
                        компании: возрастает текучесть кадров, чаще случаются утечки информации
                        и уводы клиентской базы, в компанию реже приходят ценные и редкие
                        специалисты, а удерживать их обходится дороже. И самое главное —
                        вашей компании не грозит рост и развитие.
                    </p>
                    <h3>«Взгляд сверху» и понимание общей картины</h3>
                    <p>
                        В то время как такие метрики лояльности, как гордость за компанию,
                        желание «остаться в будущем», желание «оставаться
                        сейчас» и стремление делать больше фокусируются на краткосрочных
                        периодах (сотрудники отвечают на вопросы в зависимости от своих ощущений
                        «в моменте») — eNPS помогает вам увидеть общую
                        картину, ведь готовность рекомендовать компанию — параметр
                        долгосрочный и комплексный.
                    </p>
                    <h3>Развитие реферального рекрутинга</h3>
                    <p>
                        «Лучше один раз увидеть, чем сто раз услышать». Сотрудники,
                        которые рекомендуют компанию наилучшим образом, помогают ценным
                        кандидатам «увидеть» все достоинства работы в вашей
                        компании. Исследования показывают, что сотрудники, пришедшие в
                        организации по рекомендации друзей и родственников, имеют больше шансов
                        задержаться в ней надолго.
                    </p>
                    <h3>Измерение eNPS: методические рекомендации</h3>
                    <p>
                        Чтобы использовать потенциал eNPS, необходимо учитывать ключевые
                        моменты.
                    </p>
                    <h2 id="title9">Дальнейшие шаги</h2>
                    <p>
                        Золотое правило при измерении eNPS заключается в том, что вы обязательно
                        действуете после подсчета баллов и анализа результатов. Это могут быть
                        мероприятия, направленные на укрепление лояльности, обучение
                        руководителей необходимым компетенциям, да и просто благодарность в
                        адрес сотрудников за то, что они потратили время и дали откровенную
                        обратную связь.
                    </p>
                    <h3>Правильный выбор времени</h3>
                    <p>
                        Не перегружайте своих сотрудников опросами eNPS: учитывайте их в
                        полугодовом и квартальном планировании HR-мероприятий по развитию
                        вовлечённости и корпоративной культуры. Выстраивайте предсказуемый,
                        привычный цикл опросов и заранее публикуйте их календарь для
                        сотрудников.
                    </p>
                    <h3>Мониторинг прогресса</h3>
                    <p>
                        Не останавливайтесь после первого опроса. То, как показатель eNPS
                        меняется со временем, не менее важно, чем его цифровое выражение. Его
                        снижение — признак того, что ваши HR-стратегии нуждаются в
                        переосмыслении и доработке. Кроме того динамика изменения eNPS всегда
                        должна быть положительной.
                    </p>
                    <h3>Проведение сегментированного анализа</h3>
                    <p>
                        Анализируя данные eNPS, делайте это правильно. Часто компании
                        располагают большим количеством данных, но не умеют правильно их
                        использовать, поэтому фильтруйте ответы на основе конкретных параметров
                        и анонимных комментариев, чтобы понять основные причины, по которым
                        сотрудникам нравится или не нравится ваша компания.
                    </p>
                    <h2 id="title10">Основные характеристики платформы для измерения eNPS</h2>
                    <p>
                        Метрика сближает руководство компании и рядовых сотрудников. Когда
                        компания быстро масштабируется, необходимо убедиться, что она выполняет
                        обещания, данные сотрудникам. С настроенной системой непрерывной
                        обратной связи, такой как eNPS, ваша компания может сделать это с
                        легкостью.
                    </p>
                    <p>
                        Использование специальной платформы помогает понять не только уровень
                        индекса, но и все факторы, влияющие на его уровень. В отличие от любых
                        eNPS-опросников, размещенных онлайн или бумажных eNPS-анкет, платформа
                        для проведения опросов и исследований, упрощает и ускоряет процесс
                        оценки и повышает его достоверность на 80%.
                    </p>
                    <p>Она должна отвечать следующим требованиям.</p>

                    <style>
                        .table td {
                            border-left: 1px solid #dee2e6;
                            border-right: 1px solid #dee2e6;
                        }
                    </style>

                    <style>
                        .grid-cards {
                            display: grid;
                            grid-template-columns:  1fr;
                            grid-row-gap: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
                            grid-column-gap: clamp(2rem, 1.1428571428571428rem + 4.285714285714286vw, 5rem);
                        }

                        .grid-cards-item {
                            margin: 0;
                        }

                        .grid-card {
                            padding-left: 3rem;
                        }

                        .grid-card-header {
                            padding-bottom: 1rem;
                        }

                        .grid-card-title {
                            position: relative;
                            color: #fff;
                            background-color: #61c13b;
                            padding: 5px 7px 3px;
                            border-radius: 6px;
                            line-height: 1;
                            font-weight: 700;
                            font-size: 1rem;
                            margin: 0;
                            display: inline-flex;
                            flex-direction: column;
                            justify-content: center;
                        }

                        .grid-card-title:before {
                            content: '';
                            position: absolute;
                            display: block;
                            vertical-align: middle;
                            width: 29px;
                            height: 35px;
                            margin-right: 10px;
                            background: url(/img/happy-job/images/dropdown/flag_h.svg) center no-repeat;
                            background-size: contain;
                            left: -45px;
                        }

                        .grid-card-content {
                            font-size: 14px;
                        }

                        @media (max-width: 576px) {
                            .grid-cards {
                                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                            }
                        }

                    </style>

                    <ul class="grid-cards">
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Полная автоматизация измерения и оценки</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Весь процесс работы с eNPS: запуск первой коммуникации с респондентами,
                                       прохождение ими опроса, аналитика и визуализация результатов — должен быть
                                       автоматизирован. В ситуации, когда измерением и оценкой метрики «вручную»
                                       занимаются HR-специалисты, нерационально используются время и деньги, кроме того,
                                       неизбежны ошибки.</p>
                                </div>
                            </article>
                        </li>
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Анонимность прохождения опросов сотрудниками</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Платформа для измерения eNPS должна гарантировать 100%-ную анонимность и защиту
                                       данных респондентов, чтобы люди были уверены: их не раскроют руководителям. Если
                                       не гарантировать и не обеспечить анонимность, вы утратите доверие и получите
                                       социально-ожидаемые и бесполезные для руководителей ответы.</p>
                                </div>
                            </article>
                        </li>
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Геймификация, простота и удобство прохождения
                                                                опросов</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Выбранная вами платформа должна превращать процесс прохождения опроса в
                                       интересный опыт или игру. У сотрудников должна быть возможность отвечать на
                                       вопросы в любое удобное для них время.</p>
                                </div>
                            </article>
                        </li>
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Персонализация опросов</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Выбранная вами платформа должна создавать персонализированные опросы с учетом
                                       специфики деятельности компании, профиля сотрудников (офисные, не офисные). После
                                       согласования значимых пунктов и проведения пиар-компании, руководству достаточно
                                       отправить сигнал о запуске, чтобы платформа автоматически отправляла сотрудникам
                                       индивидуальные ссылки для прохождения опросов.</p>
                                </div>
                            </article>
                        </li>
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Глубинная аналитика</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Платформа измерения eNPS должна содержать аналитические инструменты, которые
                                       позволят руководителям получить от исследования максимальную пользу. Так, на
                                       платформе Happy Job есть контент-анализ комментариев (с их группировкой для
                                       удобства восприятия), распределение по самым узким темам, разнообразная
                                       фильтрация, позволяющая «проваливаться» в цифры и ответы отдельных
                                       подразделений.</p>
                                </div>
                            </article>
                        </li>
                        <li class="grid-cards-item">
                            <article class="grid-card">
                                <header class="grid-card-header">
                                    <h4 class="grid-card-title">Инструменты планирования и трекинга</h4>
                                </header>
                                <div class="grid-card-content">
                                    <p>Платформа измерения eNPS должна предусматривать возможность строить планы работ
                                       внутри системы. У руководителей разного уровня должны быть доступы к данным,
                                       чтобы они могли самостоятельно определять приоритеты, а затем развивать
                                       вовлечённость и лояльность, основываясь на информации, полученной в результате
                                       исследований.</p>
                                </div>
                            </article>
                        </li>
                    </ul>

                    <h2 id="title11">Ищете платформу eNPS для своего бизнеса?</h2>
                    <p>
                        Начните или продолжите путь к успеху с Happy Job. Это
                        интуитивно-понятная платформа для проведения опросов вовлечённости и
                        лояльности, которая эффективно собирает данные eNPS от сотрудников,
                        углубленно изучает их, предоставляет важнейшую информацию руководителям
                        и позволяет целенаправленно улучшать метрику и увеличивать количество
                        промоутеров в компании.
                    </p>
                    <p>
                        Вы можете выбрать один из гибких тарифных планов, а наши консультанты
                        всегда готовы оказать любую помощь. Для объективной оценки ситуации с
                        eNPS в вашей компании вы можете воспользоваться свежими и точными
                        бенчмарками, которые рассчитаны по результатам опросов наших
                        клиентов.
                    </p>
                    <h2 id="title12">Вопросы-ответы про eNPS</h2>
                    <p>
                        <em><strong>Что такое хороший показатель участия в опросе вовлечённости и
                                    лояльности (включая eNPS)?</strong></em>
                    </p>
                    <p>
                        Опросы на платформе Happy Job краткие и внятные, дополненные
                        визуализацией и элементами геймификации. Благодаря этому процент участия
                        сотрудников может достигать 99%. Это позволяет получить максимально
                        точные данные по метрике.
                    </p>
                    <p>
                        <em><strong>Как повысить уровень участия в опросе?</strong></em>
                    </p>
                    <p>
                        Чтобы повысить процент участия и точность результирующей метрики eNPS,
                        необходимо создавать увлекательные и персонализированные опросы. Важным
                        фактором является удобство участия, возможность отвечать на вопросы в
                        любое время и на любом устройстве. Избегайте отправки опросов одним и
                        тем же респондентам несколько раз (на платформе Happy Job встроен
                        защитный механизм от повторного прохождения). Распределите опросы на
                        весь год, чтобы не перегружать сотрудников. Проводите предварительную
                        пиар-кампанию, а после опроса — мероприятия, направленные на
                        улучшение ситуации, чтобы не потерять доверие людей.
                    </p>
                    <p>
                        <em><strong>Каковы подводные камни eNPS?</strong></em>
                    </p>
                    <p>
                        Метрика eNPS дает представление о том, что сотрудники думают о вашем
                        бизнесе; однако она не объясняет, что нужно изменить, чтобы исправить
                        ситуацию. Чтобы увидеть факторы, влияющие на уровень индекса, необходимо
                        провести комплексное исследование вовлечённости и лояльности и оценить
                        ситуацию в комплексе.
                    </p>

                    <section class="its-simple -tablet" style="margin-bottom: -3rem">
                        <div class="its-simple-row">
                            <figure class="its-simple-image">
                                <img src="/img/happy-job/images/devicebanner/4.png" alt="опрос eNPS">
                            </figure>
                            <div class="its-simple-content">
                                <p>Узнать мнение <br>сотрудников</p>
                                <img src="/img/happy-job/images/devicebanner/text.svg" alt="просто!">
                                <button type="button" class="button button-default button-modal" data-fancybox
                                        data-src="#main-modal" href="javascript:;"
                                        onclick="ym(46152993,'reachGoal','sta_button')">
                                    Расскажите мне больше
                                </button>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

    </main>

</div>

<!-- endrender types-of-surveys/enps//-->

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
        ) 0;
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

    .f-solutions li {
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
        <div class="webinar-videos swiper swiper-initialized swiper-horizontal swiper-grid swiper-grid-column swiper-backface-hidden">
            <div class="webinar-videos-wrapper swiper-wrapper" id="swiper-wrapper-b4fcad4b6bd11454" aria-live="polite" style="width: 1090px;">
                <div class="webinar-videos-slide webinar-slide swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="height: calc(50% + 0px); width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="2 / 8" style="height: calc(50% + 0px); margin-top: 0px; width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide swiper-slide-next" role="group" aria-label="3 / 8" style="height: calc(50% + 0px); width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="4 / 8" style="height: calc(50% + 0px); margin-top: 0px; width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="5 / 8" style="height: calc(50% + 0px); width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="6 / 8" style="height: calc(50% + 0px); margin-top: 0px; width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="7 / 8" style="height: calc(50% + 0px); width: 272.5px;">
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
                <div class="webinar-videos-slide webinar-slide swiper-slide" role="group" aria-label="8 / 8" style="height: calc(50% + 0px); margin-top: 0px; width: 272.5px;">
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
            <div class="webinar-videos-pagination swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
            <div class="webinar-videos-button-prev swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b4fcad4b6bd11454" aria-disabled="true"></div>
            <div class="webinar-videos-button-next swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b4fcad4b6bd11454" aria-disabled="true"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


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

        .testimonials {
            margin: 0 0 -1rem;
        }

        .testimonials-slider--large .testimonials-item {
            justify-content: flex-start;
        }

        .testimonials-wrapper .slick-dots {
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
                <span class="animated-counter"
                      style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">194</span>
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/659238688">
                                        <img class="single-video-image" src="/img/happy-job/reviews/vid_obi.jpg"
                                             alt="Оценка вовлеченности персонала в OBI Россия"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/obi.png" loading="lazy"
                                                 alt="">
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/637913619">
                                        <img class="single-video-image"
                                             src="/img/happy-job/reviews/aliexpress-video_0.jpg"
                                             alt="Как работают с персоналом в AliExpress"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/aliexpress-logo_0.png"
                                                 loading="lazy" alt="">
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/391176331">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_alfa.jpg"
                                             alt="АльфаСтрахование – Отзыв о платформе Happy Job"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/alfa.png"
                                                 loading="lazy" alt="">
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/586641979">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_evroplan.jpg"
                                             alt="Развитие вовлеченности персонала в ЛК Европлан"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/europlan-1.png"
                                                 loading="lazy" alt="">
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/390686185" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_sky.jpg"
                                             alt="Skyeng – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/skyeng.svg"
                                                 loading="lazy" alt="">
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
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/396639819" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_ingos_0.jpg"
                                             alt="Ингосстрах – Отзыв о платформе Happy Job"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/ingo_0.png"
                                                 loading="lazy" alt="">
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
                    <a href="https://happy-job.ru/clients/reviews/" target="_blank" class="button-outline"
                       onclick="ym(46152993,'reachGoal','look_all_reviews')">Смотреть все отзывы</a>
                </div>
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-next"></b></a>
                </div>
            </div>
        </footer>
    </div>
</section>

<script>
    $(function () {
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

</style>


<style>
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

</style>


<style>
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