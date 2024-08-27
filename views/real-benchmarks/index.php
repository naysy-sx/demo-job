<?php $this->title = 'Бенчмарки - сравнение показателей вовлеченности персонала с рынком'; ?>

<div class="container mainc">
    <main>

        <style media="screen">
            .top-banner {
                height: 561px;
                margin-bottom: 105px;
            }

            .top-banner__img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: auto;
                min-height: 100%;
                min-width: 992px;
                height: 100%;
                object-fit: cover;
                object-position: top;
            }

            .top-banner__inner {
                position: relative;
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }

            .top-banner__title {
                font-size: 86px;
                line-height: 1;
                font-weight: 300;
                color: #fff;
                letter-spacing: -2.6px;
                margin-top: 123px;
                margin-bottom: 25px;
                z-index: 1;
                max-width: 500px;
            }

            .top-banner__title span {
                position: relative;
                font-weight: 700;
                letter-spacing: normal;
                display: block;
                margin-bottom: -18px;
            }

            .top-banner__title span::after {
                position: absolute;
                left: 100.4%;
                top: 13%;
                content: "TM";
                font-size: 19px;
                line-height: 1;
                font-weight: 300;
            }

            .top-banner__text {
                font-size: 16px;
                line-height: 1.25;
                color: #fff;
                text-align: center;
                max-width: 580px;
                width: 100%;
                border-radius: 10px;
                padding: 8px 13px;
                background: -webkit-linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                background: -moz-linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                background: linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                background-repeat: no-repeat;
                margin-bottom: 57px;
            }

            .top-banner__video {
                max-width: 520px;
                width: 100%;
                height: auto;
                position: relative;
                z-index: 2;
            }

            .top-banner__video img {
                border-radius: 9px;
                position: relative;
                z-index: 2;
            }

            .top-banner__video::after {
                content: "";
                position: absolute;
                bottom: -3.3rem;
                left: 1rem;
                right: 1rem;
                height: 105px;
                border: 1px solid red;
                border-radius: 50%;
                background: black;
                opacity: 0.2;
                -webkit-filter: blur(20px);
                -webkit-transform: scale(1, 0.2);
                z-index: 0;
            }

            .top-banner__btn {
                width: min-content;
                text-wrap: nowrap;
                position: absolute;
                left: 0;
                right: 0;
                bottom: 33px;
                margin: 0 auto;
                font-size: 16px;
                line-height: 24px;
                color: #030602;
                background-color: #fff;
                border-radius: 30px;
                display: flex;
                align-items: center;
                padding: 10px 20px;
                z-index: 3;
            }

            .top-banner__btn svg {
                width: 13px;
                height: 16px;
                margin-right: 7px;
            }

            .benchmarks-title {
                font-size: 30px;
                font-weight: 300;
            }

            .benchmarks-text {
                font-size: 16px;
                line-height: 24px;
            }

            .benchmarks-text span {
                color: #F5515A;
                font-weight: 600;
            }



            .benchmarks-benefits {
                text-align: center;
                color: #383a3c;
                padding: 73px 0 56px;
            }

            .benchmarks-benefits__title {
                margin: 0 0 37px;
            }

            .benchmarks-benefits__text {
                max-width: 867px;
                margin: 0 auto 31px;
                color: #424242;
            }

            .benchmarks-benefits__img {
                max-width: 822px;
                padding-right: 55px;
                width: 100%;
                margin-bottom: 13px;
            }

            .benchmarks-benefits__light {
                position: relative;
                width: 115px;
                height: 115px;
                margin: 0 auto 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #FDEEED;
            }

            .benchmarks-benefits__light+.benchmarks-benefits__text {
                max-width: 950px;
            }

            .benchmarks-benefits__light::before {
                content: '';
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                bottom: 50%;
                z-index: -1;
                width: 100vw;
                height: 326px;
                background: linear-gradient(180deg, #FFF 0%, #FEF4F3 10.15%, #FACBC7 50.44%, #F8B1AB 81.73%, #F7A8A1 100%);
                opacity: 0.15;
            }

            .benchmarks-benefits__light img {
                width: 58px;
            }

            .benchmarks-about {
                position: relative;
                padding: 57px 0 0;
                text-align: center;
            }

            .benchmarks-about::before {
                content: "";
                position: absolute;
                top: 0;
                left: 50%;
                z-index: -1;
                transform: translateX(-50%);
                width: 100vw;
                height: 349px;
                opacity: 0.35;
                background: -webkit-linear-gradient(180deg, rgb(227, 255, 191), rgb(227, 255, 191) 3%, rgb(255, 255, 255) 95%);
                background: -moz-linear-gradient(180deg, rgb(227, 255, 191), rgb(227, 255, 191) 3%, rgb(255, 255, 255) 95%);
                background: linear-gradient(180deg, rgb(227, 255, 191), rgb(227, 255, 191) 3%, rgb(255, 255, 255) 95%);
            }

            .benchmarks-about__title {
                position: relative;
                font-size: 50px;
                line-height: 1.04;
                color: #1c1c1c;
                font-weight: 300;
                letter-spacing: -0.7px;
                margin: 0 auto 25px;
                z-index: 1;
                max-width: 584px;
            }

            .benchmarks-about__title span {
                color: #191919;
                font-weight: 800;
                letter-spacing: normal;
            }

            .benchmarks-about__title span::after {
                position: absolute;
                left: 100%;
                top: 13%;
                content: "TM";
                font-size: 11px;
                line-height: 1;
                font-weight: 300;
                color: #3f3f3f;
            }

            .benchmarks-about__subtitle span {
                display: inline-block;
                padding: 0 5px 4px;
                border-radius: 8px;
                background: -webkit-linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                background: -moz-linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                background: linear-gradient(90deg, rgb(0, 205, 86) 21%, rgb(3, 97, 21));
                font-weight: 800;
                color: #fff;
            }

            .benchmarks-about__subtitle--top {
                padding-top: 0;
            }

            .benchmarks-about__text {
                max-width: 850px;
                margin: 0 auto 40px;
            }

            .benchmarks-about__text--s {
                max-width: 750px;
                margin-bottom: 77px;
            }

            .benchmarks-about__img {
                transform: scale(1.18) translateX(-8px);
                margin-bottom: 32px;
            }

            .benchmarks-about__carts {
                position: relative;
                width: 1240px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                align-items: stretch;
                justify-content: center;
                flex-wrap: wrap;
                grid-gap: 10px 10px;
                margin: -30px 0 10px;
            }

            .benchmarks-about__carts::after {
                position: absolute;
                top: 50%;
                left: 51%;
                z-index: -1;
                transform: translate(-50%, -50%);
                content: "";
                width: 46%;
                height: 50%;
                background-color: rgba(199, 199, 199, 0.45);
                filter: blur(100px);
            }

            .benchmarks-about__cart {
                background-color: #fff;
                max-width: 382px;
                min-height: 268px;
                width: 100%;
                padding: 40px 10px 58px;
                margin-bottom: 0;
            }

            .benchmarks-about__cart:first-child {
                max-width: 450px;
            }

            .benchmarks-about__cart:last-child {
                max-width: 550px;
            }

            .benchmarks-about__cart-title {
                font-size: 24px;
                line-height: 1;
                font-weight: 700;
                color: #4caf1e;
                margin-bottom: 22px;
            }

            .benchmarks-about__cart-title span {
                font-size: 69px;
                font-weight: 800;
                display: inline-block;
                margin-bottom: -2px;
            }

            .benchmarks-about__cart-text {
                font-size: 16px;
                line-height: 1.5;
                color: #3a3a3a;
                max-width: 305px;
                margin: 0 auto;
            }

            .benchmarks-industries {
                text-align: center;
            }

            .benchmarks-industries__title {
                position: relative;
                z-index: 5;
            }

            .benchmarks-benefit {
                background-image: url('/img/benchmarks/BG_1.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                padding: 70px 0 43px;
            }

            .benchmarks-benefit__title {
                padding: 0;
                font-size: 47px;
                font-weight: 800;
                color: #fff;
                text-align: center;
            }

            .benchmarks-benefit__list {
                max-width: 700px;
                margin: 55px auto 0;
                padding-left: 40px;
            }

            .benchmarks-benefit__item {
                display: flex;
                align-items: center;
                justify-content: start;
                color: #fff;
                font-size: 23px;
                margin-bottom: 31px;
            }

            .benchmarks-benefit__item img {
                width: 36px;
                height: auto;
                margin: -5px 17px 0 0;
            }

            .benchmarks-info {
                text-align: center;
                padding-top: 105px;
            }

            .benchmarks-info__title {
                padding: 0;
                padding-left: 20px;
                margin-bottom: 36px;
            }

            .benchmarks-info__title:not(:first-child) + .benchmarks-info__text {
                margin-bottom: 49px;
            }

            .benchmarks-info__title:not(:first-child) + .benchmarks-info__text + .benchmarks-info__img {
                max-width: 1015px;

            }

            .benchmarks-info__text {
                max-width: 850px;
                margin: 0 auto 69px;
            }

            .benchmarks-info__text span {
                display: block;
                color: inherit;
                font-weight: inherit;
            }

            .benchmarks-info__img {
                max-width: 1090px;
                margin-bottom: 108px;
            }

            .benchmarks-links {
                padding: 95px 0 55px;
            }

            .benchmarks-links__list {
                width: 1175px;
                display: flex;
                align-items: start;
                justify-content: space-between;
                margin: 0;
            }

            .benchmarks-links__item {
                display: flex;
                align-items: start;
                max-width: 579px;
                margin-bottom: 0;
            }

            .benchmarks-links__item + .benchmarks-links__item {
                margin-left: 15px;
            }

            .benchmarks-links__img {
                max-width: 252px;
                width: 100%;
                margin-right: 20px;
                position: relative;
            }

            .benchmarks-links__img img {
                border-radius: 8px;
            }

            .benchmarks-links__img--vid::after {
                content: '';
                width: 18.6%;
                height: 100%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 5;
                background-image: url('/img/benchmarks/play.svg');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }

            .benchmarks-links__item-title {
                font-size: 20px;
                color: #000000;
                font-weight: 800;
                margin-bottom: 19px;
            }

            .benchmarks-links__item-text {
                font-size: 14px;
                line-height: 24px;
                color: #000000;
                margin-bottom: 20px;
            }

            .benchmarks-links__item-text span {
                display: block;
                font-weight: 700;
            }

            .benchmarks-links__item-link {
                position: relative;
                color: #000000;
            }

            .benchmarks-links__item-link::before {
                content: "";
                position: absolute;
                bottom: -3px;
                width: 100%;
                height: 2px;
                background-image: url('/img/benchmarks/dots.svg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }

            .benchmarks-links__item-link::after {
                content: "";
                position: absolute;
                left: 100%;
                top: 50%;
                transform: translate(60%, -35%);
                width: 14px;
                height: 12px;
                background-image: url('/img/benchmarks/arrow.svg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
            }

            section.section.industries.wide-container.industries_notitle {
                /* margin-top: 0; */
                padding-top: 171px;
            }

            div.industries-left:before,
            div.industries-right:before {
                top: 170px;
                background: linear-gradient(90deg, rgb(219 224 225) 0%, rgba(212, 215, 220, 0) 20%, rgba(212, 215, 220, 0) 80%, rgba(198, 206, 209, 1) 100%);
            }

            .container.mainc ~ section.videos {
                margin-top: 0;
            }

            @media(max-width: 1250px) {
                .benchmarks-links__list {
                    flex-direction: column;
                    align-items: center;
                    width: 100%;
                }

                .benchmarks-links__item + .benchmarks-links__item {
                    margin-left: 0;
                    margin-top: 35px;
                }

                .benchmarks-links__item-wrapper {
                    max-width: 307px;
                    width: 100%;
                }
            }

            @media (max-width: 1200px) {
                .benchmarks-about__carts {
                    width: 100%;
                }

                .benchmarks-about__cart {
                    padding-top: 35px;
                    min-height: 250px;
                }

                .benchmarks-info__img,
                .benchmarks-info__title:not(:first-child) + .benchmarks-info__text + .benchmarks-info__img {
                    max-width: 100%;
                    margin-bottom: 30px;
                }
                .benchmarks-info__text,
                .benchmarks-info__title:not(:first-child) + .benchmarks-info__text {
                    margin-bottom: 30px;
                }
            }



            @media (max-width: 62rem) {
                .container.mainc {
                    padding: 0;
                }



                .benchmarks-benefits__img {
                    max-width: 100%;
                    padding: 0;
                }
            }

            @media (max-width: 767px) {
                .benchmarks-benefits,
                .benchmarks-benefit,
                .benchmarks-about,
                .benchmarks-info,
                .benchmarks-links {
                    padding: 45px 0;
                }

                .benchmarks-industries{
                    padding: 0 0 45px;
                }

                section.section.industries.wide-container.industries_notitle {
                    margin-top: -100px;
                }
                section.section.industries.wide-container.industries_notitle {
                    padding-top: 105px;
                }
                .benchmarks-title {
                    font-size: 24px;
                }

                .benchmarks-text {
                    font-size: 14px;
                }

                .top-banner {
                    margin-bottom: calc(30px + 6.2vw);
                }
                .top-banner__video {
                    max-width: 72vw;
                }

                .top-banner__title {
                    font-size: 54px;
                }

                .top-banner__title span {
                    margin-bottom: -10px;
                }

                .benchmarks-benefits__light {
                    width: 80px;
                    height: 80px;
                }
                .benchmarks-benefits__light img {
                    width: 40px;
                }

                .benchmarks-about__title {
                    max-width: 480px;
                    font-size: 40px;
                }

                .benchmarks-about__carts {
                    margin-top: 5px;
                    grid-gap: 18px 10px;
                }

                .benchmarks-about__carts::after {
                    width: 32%;
                    height: 75%;
                }
                .benchmarks-about__cart {
                    padding-top: 10px;
                    min-height: 200px;
                }

                .benchmarks-about__cart-title {
                    margin-bottom: 15px;
                }
                .benchmarks-about__cart-title span {
                    font-size: 40px;
                }

                .benchmarks-benefit__title {
                    font-size: 36px;
                }
                .benchmarks-benefit__list {
                    margin-top: 40px;
                    max-width: 100%;
                }
                .benchmarks-benefit__item {
                    font-size: 20px;
                    margin-bottom: 22px;
                }
            }

            @media (max-width: 576px) {
                .container {
                    padding: 0;
                }
                .top-banner {
                    margin-bottom: 25px;
                }
                .top-banner__btn {
                    bottom: 15px;
                    padding: 5px 13px;
                }
                .top-banner__title {
                    font-size: 40px;
                }

                .top-banner__title span {
                    margin-bottom: -2px;
                }

                .top-banner__text {
                    font-size: 14px;
                    padding: 8px 13px;
                }

                .benchmarks-benefits,
                .benchmarks-benefit,
                .benchmarks-about,
                .benchmarks-info,
                .benchmarks-links {
                    padding: 25px 0;
                }

                .benchmarks-industries{
                    padding: 0 0 25px;
                }

                .benchmarks-about {
                    padding-bottom: 0;
                }

                .benchmarks-industries__title {
                    padding-top: 0;
                }

                .benchmarks-about__carts {
                    margin-bottom: 20px;
                }

                .benchmarks-title {
                    font-size: 19px;
                }

                .benchmarks-text {
                    font-size: 14px;
                }

                .benchmarks-about__title {
                    max-width: 280px;
                    font-size: 24px;
                }

                .benchmarks-about__title span::after {
                    font-size: 11px;
                    top: 4%;
                }

                .benchmarks-about__text--s {
                    margin-bottom: 40px;
                }

                .benchmarks-benefit__title {
                    font-size: 20px;
                }
                .benchmarks-benefit__list {
                    margin-top: 20px;
                    padding-left: 0;
                }
                .benchmarks-benefit__item {
                    font-size: 16px;
                    margin-bottom: 15px;
                }
                .benchmarks-benefit__item img {
                    width: 30px;
                    margin-right: 12px;
                }

                .benchmarks-links {
                    margin-bottom: 35px;
                }

                .benchmarks-links__item {
                    flex-direction: column;
                    align-items: center;
                }

                .benchmarks-links__img {
                    max-width: 300px;
                    width: 100%;
                    margin: 0 0 15px;
                }

                .benchmarks-links__item-title {
                    font-size: 20px;
                    margin-bottom: 10px;
                }

                .benchmarks-links__item-text {
                    line-height: 1.3;
                    margin-bottom: 10px;
                }
            }
        </style>

        <section class="top-banner wide-container">
            <img class="top-banner__img" src="/img/benchmarks/top-banner.png">
            <div class="container">
                <div class="top-banner__inner">
                    <h1 class="top-banner__title"><span>Настоящие</span> бенчмарки</h1>
                    <p class="top-banner__text">Первая в мире автоматизированная система контроля состава HR-бенчмарков с механизмом защиты от
                                                манипуляций</p>

                    <div class="top-banner__video">
                        <img src="/img/benchmarks/top-banner-video.png" alt="">
                        <a class="top-banner__btn" data-fancybox data-src="https://vimeo.com/863473866/dd1405a585" id="look_video">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 16" fill="none">
                                <path d="M3.10077 1.2001C2.60077 0.900098 2.10077 0.900098 1.60077 1.2001C1.10077 1.5001 0.800781 2.00009 0.800781 2.50009V13.5001C0.800781 14.0001 1.10077 14.5001 1.60077 14.8001C2.10077 15.1001 2.70077 15.1001 3.10077 14.8001L12.1008 9.30007C12.5008 9.00007 12.8008 8.50009 12.8008 8.00009C12.8008 7.50009 12.5008 7.0001 12.1008 6.7001L3.10077 1.2001Z" fill="#030602"></path>
                            </svg>
                            Смотреть видео
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="benchmarks-benefits">
            <div class="container">
                <h1 class="benchmarks-benefits__title benchmarks-title">
                    Зачем нужна система контроля?
                </h1>

                <p class="benchmarks-benefits__text benchmarks-text">
                    К сожалению, в индустрии исследований вовлеченности провайдеры часто загружают в бенчмарки
                    <span>«несвежие»</span> данные на минимальной выборке 5-15%, собранные 3-5 лет назад,
                    а также добавляют в отрасли <span>FAKE</span>-показатели несуществующих компаний.
                </p>
                <img class="benchmarks-benefits__img" src="/img/benchmarks/02.png" alt="">

                <p class="benchmarks-benefits__text benchmarks-text">
                    Также распространилась практика добавления <span>бесплатных пилотных/рекламных</span> опросов на малой выборке в
                    бенчмарки под видом полноценнного исследования.
                </p>

                <div class="benchmarks-benefits__light">
                    <img src="/img/benchmarks/icon_lightning.png" alt="">
                </div>

                <p class="benchmarks-benefits__text benchmarks-text">
                    Мы в Happy Job. полагаем, что недобросовестные практики в составлении бенчмарков и злоупотребление доверием
                    клиентов вредят не только HR-сообществу, но в конечном счете могут повлиять на судьбу тысяч людей в компаниях,
                    если кадровые решения основаны на искаженных или неполных данных о ситуации на рынке.
                </p>
            </div>
        </section>

        <section class="benchmarks-about">
            <div class="container">
                <h2 class="benchmarks-about__subtitle benchmarks-about__subtitle--top benchmarks-title">
                    Happy Job <span>не скрывает</span> cписок компаний, формирующих ваш бенчмарк
                </h2>

                <p class="benchmarks-about__text benchmarks-text benchmarks-about__text--s">
                    При выборе отрасли, платформа показывает каждому руководителю и HR, какие компании участвуют в бенчмарке.
                </p>

                <img class="benchmarks-about__img" src="/img/benchmarks/03.png" alt="">

                <h2 class="benchmarks-about__subtitle benchmarks-title">
                    Как мы обеспечиваем свежесть и качество данных
                </h2>

                <ul class="benchmarks-about__carts">
                    <li class="benchmarks-about__cart">
                        <div class="benchmarks-about__cart-title">
                            от <span>75%</span><br>участия в опросах
                        </div>

                        <div class="benchmarks-about__cart-text">
                            Наши бенчмарки - это охват максимального числа респондентов, миллионы реальных сотрудников
                        </div>
                    </li>

                    <li class="benchmarks-about__cart">
                        <div class="benchmarks-about__cart-title">
                            <span>98%</span><br>постоянство клиентов
                        </div>

                        <div class="benchmarks-about__cart-text">
                            Опросы проходят регулярно. Возраст данных в бенчмарках не превышает 1 год
                        </div>
                    </li>

                    <li class="benchmarks-about__cart">
                        <div class="benchmarks-about__cart-title">
                            <span>800+</span><br>компаний
                        </div>

                        <div class="benchmarks-about__cart-text">
                            Полноценные проекты без учета пилотов и различных онлайн-рейтингов
                        </div>
                    </li>

                    <li class="benchmarks-about__cart">
                        <div class="benchmarks-about__cart-title">
                            <span>32</span><br>отрасли
                        </div>

                        <div class="benchmarks-about__cart-text">
                            Наибольшая отраслевая и региональная представленность среди всех провайдеров РФ
                        </div>
                    </li>

                    <li class="benchmarks-about__cart">
                        <div class="benchmarks-about__cart-title">
                            <span>4 700 000+</span><br>респондентов ежегодно
                        </div>

                        <div class="benchmarks-about__cart-text">
                            Крупнейшая на рынке труда России и СНГ база данных по HR-метрикам
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="benchmarks-industries">
            <div class="container">
                <h2 class="benchmarks-industries__title benchmarks-title">
                    С нами:
                </h2>

                <style>
                    .industries {
                        background-image: url("/img/happy-job/images/industries-bg_s.jpg");
                        background-repeat: no-repeat;
                        background-position: center top;
                        position: relative;
                        background-size: cover;
                    }

                    .section.industries.wide-container {
                        padding: 0;
                    }

                    .section.industries.wide-container.industries_notitle{
                        padding-top: 190px;
                        margin-top: -174px;
                        position: relative;
                        z-index: 0;
                    }

                    .industries .section-title {
                        padding: 0;
                    }

                    .industries-wrapper {
                        padding-bottom: clamp(
                                2rem,
                                1.4642857142857144rem + 2.6785714285714284vw,
                                3.875rem
                        );
                    }

                    .industries-left,
                    .industries-right {
                        width: 25%;
                        overflow: hidden;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        pointer-events: none;
                    }

                    .industries-left:before,
                    .industries-right:before {
                        content: "";
                        background: rgb(198, 206, 209);
                        background: linear-gradient(
                                90deg,
                                rgba(198, 206, 209, 1) 0%,
                                rgba(212, 215, 220, 0) 20%,
                                rgba(212, 215, 220, 0) 80%,
                                rgba(198, 206, 209, 1) 100%
                        );
                        display: inline-block;
                        height: 100%;
                        width: 100vw;
                        position: absolute;
                        top: 174px;
                        z-index: 1;
                    }

                    .industries-list__arrow {
                        position: absolute;
                        z-index: 10;
                        top: 50%;
                        margin-top: -20px;
                        width: 54px;
                        height: 50px;
                        will-change: transform;
                        transition: transform 0.3s;
                        opacity: 0;
                        cursor: pointer;
                    }
                    .industries-list__arrow::before {
                        content: "";
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;
                    }
                    .industries-list__prev::before {
                        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
                    }
                    .industries-list__next::before {
                        background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
                    }
                    .industries-list__prev {
                        left: 3%;
                    }
                    .industries-list__next {
                        right: 3%;
                    }
                    .industries-list:hover .industries-list__arrow {
                        opacity: 1;
                    }
                    .industries-list__prev:not(.slick-disabled):hover {
                        -webkit-transform: translateX(-3px);
                        transform: translateX(-3px);
                    }
                    .industries-list__next:not(.slick-disabled):hover {
                        -webkit-transform: translateX(3px);
                        transform: translateX(3px);
                    }

                    @media (max-width: 1260px) {
                        .industries-left:before,
                        .industries-right:before {
                            top: 157px;
                        }
                    }
                    @media (max-width: 992px) {
                        .industries-left:before,
                        .industries-right:before {
                            top: 140px;
                        }
                        .industries .section-subtitle {
                            text-align: center;
                        }
                    }

                    .industries-left {
                        left: 0;
                    }

                    .industries-right {
                        right: 0;
                    }

                    .industries-left:before {
                        left: 0;
                    }

                    .industries-right:before {
                        right: 0;
                    }

                    .industries-list {
                        max-height: 340px;
                        overflow: hidden;
                        display: flex;
                    }

                    .industries-item {
                        padding: 0
                        clamp(1rem, 0.8392857142857143rem + 0.8035714285714285vw, 1.5625rem);
                        display: block !important;
                        box-sizing: border-box;
                        max-width: 313px;
                    }

                    .industries-item:hover img {
                        filter: none;
                        opacity: 1;
                    }

                    .industry-card {
                        text-decoration: none;
                        color: var(--c-text);
                        width: 100%;
                        min-width: 280px;
                        height: 340px;
                        display: flex;
                        flex-direction: column;
                        background-color: #fff;
                        border-radius: 5px;
                        overflow: hidden;
                        margin: 0 auto;
                    }

                    @media (max-width: 1024px) {
                        .industry-card {
                            min-width: inherit;
                            max-width: 280px;
                        }
                    }

                    .industry-card-header {
                        box-sizing: border-box;
                        height: 125px;
                        flex-basis: 125px;
                        padding: 16px 0.6rem 0 0.6rem;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                    }

                    .industry-card-title {
                        line-height: 1.2;
                        margin: 0;
                        text-align: center;
                    }

                    @media (max-width: 576px) {
                        .industry-card-header {
                            padding-top: 0;
                        }
                        .industry-card-title {
                            line-height: 1;
                            margin: 0 !important;
                        }
                    }

                    .industry-small {
                        font-size: 20px;
                        font-weight: 800;
                        text-transform: uppercase;
                    }

                    .industry-num {
                        font-size: 32px;
                        font-weight: 800;
                        color: var(--c-link);
                    }

                    .industry-light {
                        font-size: 30px;
                        font-weight: 300;
                    }

                    .industry-top {
                        font-size: 27px;
                        font-weight: 800;
                        text-transform: uppercase;
                        letter-spacing: -1.8px;
                    }

                    .industry-middle {
                        font-size: 32px;
                        text-transform: uppercase;
                        font-weight: 800;
                    }

                    .industry-large {
                        font-size: 32px;
                        text-transform: uppercase;
                        font-weight: 800;
                    }

                    .industry-big {
                        font-weight: 800;
                        text-transform: uppercase;
                        font-size: 40px;
                    }

                    @media (max-width: 1024px) {
                        .industry-big {
                            font-size: 30px;
                        }
                        .industry-small {
                            font-size: 17px;
                            margin-top: 0 !important;
                        }
                    }

                    .industry-mt-1 {
                        display: inline-flex;
                        margin-top: 6px;
                    }

                    .industry-sublist {
                        height: 225px;
                        flex-basis: 225px;
                        overflow: hidden;
                        margin: 0;
                        box-sizing: border-box;
                        background-color: #f2f6f7;
                        padding: 18px 20px;
                        text-align: center;
                        display: flex;
                        flex-flow: wrap;
                        justify-content: center;
                        align-items: center;
                    }

                    @media (max-width: 576px) {
                        .industry-sublist {
                            padding: 10px;
                        }
                    }

                    .industries-wrapper .industry-sublist .industry-item {
                        width: 50%;
                        list-style-type: none;
                        display: inline-block;
                        margin: 0;
                    }

                    .industry-image {
                        box-sizing: border-box;
                        padding: 8px;
                        mix-blend-mode: multiply;
                    }

                    @media (max-width: 576px) {
                        .industry-image {
                            box-sizing: border-box;
                            padding: 3px;
                        }
                    }

                    .industry-image img {
                        display: inline-block;
                        vertical-align: middle;
                        margin: auto;
                        max-width: 100%;
                        max-height: 30px;
                        transition: all 0.2s ease-in;
                        filter: grayscale(1);
                        opacity: 0.5;
                    }

                    @media (max-width: 576px) {
                        .industries-left,
                        .industries-right {
                            display: none;
                        }

                        .industry-card {
                            height: 230px;
                        }

                        .industry-top {
                            font-size: 16px;
                        }

                        .industry-middle,
                        .industry-big {
                            font-size: 20px;
                        }

                        .industry-small {
                            font-size: 11px;
                        }

                        .industry-large {
                            font-size: 18px;
                        }

                        .industry-light,
                        .industry-num {
                            font-size: 20px;
                        }

                        .industry-card-header {
                            height: 80px;
                            flex-basis: 80px;
                            padding: 10px 0;
                        }
                    }

                    .industry-card:hover {
                        color: inherit;
                    }
                </style>
                <section class="section industries wide-container industries_notitle">
                    <div class="section-body">
                        <div class="industries-wrapper">
                            <div class="industries-left"></div>
                            <div class="industries-list">
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#company" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-small" style="display: inline-block; margin-top: -1rem">производственные</span>
                                                <span class="industry-large">компании</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img src="/img/p/clients/clients-logo/tehnonikol.svg" loading="lazy" alt="">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/himpromlogo.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/himpromlogo.jpg" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/sibur.webp" type="image/webp"><img src="/img/p/clients/clients-logo/sibur.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/syek.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/syek.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#eCommerce" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-num">7</span>
                                                <span class="industry-light">из</span>
                                                <span class="industry-top">топ-10</span>
                                                <span class="industry-large" style="white-space: nowrap"><span style="text-transform: none">e</span>-COMMERCE</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/lamoda.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/lamoda.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/ozon.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/ozon.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/inventive.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/inventive.png" loading="lazy" style="max-height: 50px" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/goods.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/goods.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/petr.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/petr.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/perekrestok.webp" type="image/webp"><img src="/img/p/clients/clients-logo-new/perekrestok.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>

                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#company" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-small">Крупнейший</span>
                                                <span class="industry-num" style="text-transform: uppercase">агропром</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img src="/img/p/clients/clients-logo/stepagro.svg" loading="lazy" alt="" style="min-height: 50px">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/ozk2.webp" type="image/webp"><img src="/img/p/clients/clients-logo/ozk2.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/rusagro.webp" type="image/webp"><img src="/img/p/clients/clients-logo/rusagro.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/cherkizov.webp" type="image/webp"><img src="/img/p/clients/clients-logo/cherkizov.png" loading="lazy" alt="">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img src="/img/p/clients/clients-logo/agroterra.svg" loading="lazy" alt="" style="max-height: 50px">
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#it" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-num" style="display: inline-block; margin-top: -1rem">100+</span><br>
                                                <span class="industry-large">IT-компаний </span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/lanit.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/lanit.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/softline.svg">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/rostelecom.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/rostelecom.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/krok.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/krok.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/cloud.ru.svg">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/marvel.svg">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/ocsdistributon.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/ocsdistributon.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/otr.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/otr.png">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#bank" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-num">8 из 10</span>
                                                <span class="industry-top">топ</span>
                                                <span class="industry-big">банков</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/alfa.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/alfa.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/vtb.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/vtb.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/mkb.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/mkb.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/otkritie.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/otkritie.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/rosselhosbank.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/rosselhosbank.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/logo_gazprombank.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/logo_gazprombank.png">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#insurance" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title" style="display: inline-block; margin-top: -1rem">
                                                <span class="industry-num">9 из 10</span>
                                                <span class="industry-top">топ</span>
                                                <span class="industry-middle">страховых</span>
                                                <span class="industry-small">компаний</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/ingostra.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/ingostra.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/logo_alfastrah.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/logo_alfastrah.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/renins_logo.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/renins_logo.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/sogas.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/sogas.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/vsk.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/vsk.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/mafin.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/mafin.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/soglasie.svg">
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#food" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title" style="line-height: 1">
                                                <span class="industry-num">100%</span>
                                                <span class="industry-small">крупнейший</span>
                                                <span class="industry-big industry-mt-1">ритейл</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/x5.svg">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/magnit.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/magnit.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/spar.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/spar.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/sport.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/sport.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/petr.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/petr.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/azbuka.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/azbuka.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/obi.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo/obi.png" style="max-height: 19px">
                                                    </picture>
                                                </div>
                                            </li>
                                            <!---->
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/vkuswill.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/vkuswill.png">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#telekom" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-num">80%</span>
                                                <span class="industry-top">топ</span>
                                                <span class="industry-big">телеком</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/mts_log.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/mts_log.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/beeline.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/beeline.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/rostelecom.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/rostelecom.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/ttk.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/ttk.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/tattelecom.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/tattelecom.png" style="max-height: 45px">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/megafon.svg">
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#media" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-top">крупнейшие</span>
                                                <span class="industry-num industry-top">экосистемы</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/sber_3.svg">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/x5.svg" style="max-height: 50px">
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/vtb.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo/vtb.png" style="max-height: 50px">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo/mts_log.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo/mts_log.png" style="max-height: 20px">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/vk.svg" style="min-height: 50px">
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="industries-item">
                                    <a href="/clients/benchmarks/#media" target="_blank" class="industry-card">
                                        <div class="industry-card-header">
                                            <div class="industry-card-title">
                                                <span class="industry-num">100%</span>
                                                <span class="industry-big">тв</span>
                                                <span class="industry-middle">и</span>
                                                <span class="industry-big">медиа</span>
                                            </div>
                                        </div>
                                        <ul class="industry-sublist">
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/tnt.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/tnt.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/ComedyClub.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/ComedyClub.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/tass.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/tass.jpg">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/pitnicha.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/pitnicha.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/matchgrey.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/matchgrey.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media/7days.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media/7days.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/media1.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/media1.png">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="industry-item">
                                                <div class="industry-image">
                                                    <picture>
                                                        <source srcset="/img/p/clients/clients-logo-new/nmg.webp" type="image/webp"><img loading="lazy" alt="" src="/img/p/clients/clients-logo-new/nmg.png">
                                                    </picture>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="industries-right"></div>
                        </div>
                    </div>
                </section>

                <script>
                    $(function(){
                        if ($(".industries-list").length) {

                            $(".industries-list").slick({
                                infinite: true,
                                cssEase: "ease-out",
                                slidesToShow: 6,
                                slidesToScroll: 1,
                                autoplay: true,
                                speed: 2000,
                                autoplaySpeed: 2000,
                                dots: false,
                                arrows: false,
                                pauseOnHover: false,
                                easing: "linear",
                                draggable: false,
                                responsive: [
                                    {
                                        breakpoint: 2100,
                                        settings: {
                                            slidesToShow: 6,
                                            slidesToScroll: 1,
                                        },
                                    },
                                    {
                                        breakpoint: 1800,
                                        settings: {
                                            slidesToShow: 5,
                                            slidesToScroll: 1,
                                        },
                                    },
                                    {
                                        breakpoint: 1500,
                                        settings: {
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                        },
                                    },
                                    {
                                        breakpoint: 1200,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 1,
                                        },
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 1,
                                        },
                                    },
                                    {
                                        breakpoint: 576,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2,
                                            arrows: true,
                                            draggable: false,
                                        },
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2,
                                            arrows: false,
                                            draggable: true,
                                        },
                                    },
                                ],
                            });
                        }
                    })
                </script>  </div>
        </section>


        <section class="benchmarks-benefit wide-container">
            <div class="container">
                <h2 class="benchmarks-benefit__title">
                    Какие возможности дает бенчмаркинг:
                </h2>
                <ul class="benchmarks-benefit__list">
                    <li class="benchmarks-benefit__item">
                        <img src="/img/benchmarks/emoji_02.svg" alt="">

                        Оставаться конкурентноспособным на рынке
                    </li>

                    <li class="benchmarks-benefit__item">
                        <img src="/img/benchmarks/emoji_03.svg" alt="">

                        Удерживать лучших сотрудников
                    </li>

                    <li class="benchmarks-benefit__item">
                        <img src="/img/benchmarks/emoji_04.svg" alt="">

                        Настоящий EVP
                    </li>
                </ul>
            </div>
        </section>

        <section class="benchmarks-info">
            <div class="container">
                <h2 class="benchmarks-info__title benchmarks-title">
                    Бенчмарки по функциям, <span>впервые в РФ</span>
                </h2>

                <p class="benchmarks-info__text benchmarks-text">
                    <span>Все верно! Никто не мог этого сделать, а мы сделали.</span>
                    Теперь каждый руководитель в личном кабинете может сравнить результаты своего подразделения
                    не просто с компаниями - лидерами отрасли, но и с конкретными функциями внутри этих компаний.
                </p>

                <img class="benchmarks-info__img" src="/img/benchmarks/04.png" alt="">

                <h2 class="benchmarks-info__title benchmarks-title">
                    Кастомизация бенчмарка
                </h2>

                <p class="benchmarks-info__text benchmarks-text">
                    <span>На платформе Happy Job вы можете создать свой кастомный бенчмарк:</span>
                    выберите не менее 7 компаний из своей или смежной отрасли и сравнивайте свои показатели с ними.
                </p>

                <img class="benchmarks-info__img" src="/img/benchmarks/05.png" alt="">

            </div>
        </section>



        <style>
            .benchmarks-form-footer {}

            .benchmarks-form-footer-row {
                display: grid;
                background-color: #F5F5F5;
                grid-template-columns: 1fr 1fr;
                align-items: center;
            }

            .benchmarks-form-footer-content {
                padding: 35px 1.5rem;
            }

            .-left .benchmarks-form-footer-content {
                max-width: 583px;
                width: 100%;
            }

            .benchmarks-form-footer-col:not(.-left) .benchmarks-form-footer-content {
                max-width: 535px;
                width: 100%;
                padding: 33px 17px 33px 76px;
            }

            .benchmarks-form-footer-col {
                width: 100%;
                height: 100%;
                display: flex;
            }

            .benchmarks-form-footer-col.-left {
                background: url('/img/benchmarks/BG_3.png');
                color: #fff;
            }

            .benchmarks-form-footer-col.-left ul {
                max-width: 430px;
                padding: 0;
                margin: 0 0 29px;
            }

            .benchmarks-form-footer-col.-left li {
                position: relative;
                color: #fff;
                line-height: 1.25;
                margin-bottom: 22px;
                padding-left: 29px;
            }

            .benchmarks-form-footer-col.-left li::before {
                content: "";
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background-color: #fff;
                position: absolute;
                left: 6px;
                top: 5px;
            }

            .-left .benchmarks-form-footer-content {
                margin-left: auto;
            }

            .benchmarks-form-footer-content p {
                margin-top: 30px;
                font-size: 30px;
                color: #ffffff;
                font-weight: 300;
            }

            .benchmarks-form-footer-content h3 {
                font-size: 30px;
                color: #ffffff;
                font-weight: 800;
                line-height: normal;
                margin: 28px 0 51px;
            }

            .benchmarks-form-footer-content .c-form {
                /* transform: translate(10px, 0rem); */
            }

            .benchmarks-form-footer-content .c-form h2,
            .benchmarks-form-footer-content .c-form-policy,
            .benchmarks-form-footer-content .c-form-label {
                display: none;
            }

            .benchmarks-form-footer-content .c-form-item {
                margin-bottom: 19px;
                width: 100%;
            }

            .benchmarks-form-footer-content .c-form-item input:not([type='hidden']) {
                height: 35px;
            }

            .benchmarks-form-footer-content .c-form input,
            .benchmarks-form-footer-content .c-form select,
            .benchmarks-form-footer-content .c-form textarea {
                background-color: transparent;
                border-top: none;
                border-left: none;
                border-right: none;
                border-radius: 0;
                padding-left: 0;
                border-width: 2px;
                border-color: #bababa;
                outline: none;
            }

            .benchmarks-form-footer-content .c-form-list {
                margin-bottom: 34px;
            }

            .benchmarks-form-footer-content .button-default#hrbrand-submit {
                display: block;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                background-color: var(--apple);
                border-bottom-color: var(--green);
                border-bottom-width: 4px;
                border-bottom-style: solid;
                color: #fff !important;
                border-radius: 10px;
                line-height: 1;
                height: 2rem;
                height: clamp(2rem, 1.7142857142857144rem + 1.4285714285714286vw, 3rem);
                min-width: clamp(9.375rem, 8.482142857142858rem + 4.464285714285714vw, 12.5rem);
                padding: 0 2rem;
                transition: all 0.3s;
                box-shadow: none;
            }

            .benchmarks-form-steps {
                display: flex;
                align-items: center;
                background-color: #fff;
                color: var(--apple);
                gap: 21px;
                padding: 18px 10px 22px 23px;
                font-weight: 600;
                border-radius: 11px;
                max-width: 390px;
            }

            .benchmarks-form-steps b {
                min-width: 44px;
                flex-basis: 44px;
                height: 44px;
                background-image: url(/img/benchmarks-form/icon-steps.svg);
            }

            .benchmarks-form-steps span {
                max-width: 265px;
                transform: translateY(5px);
            }

            .benchmarks-form-footer .benchmarks-form-h2 {
                font-size: 1.25rem;
                font-size: clamp(1.25rem, 0.8928571428571429rem + 1.7857142857142856vw, 2.5rem);
                font-weight: 600;
                margin-bottom: 0;
            }

            .benchmarks-form-footer .benchmarks-form-h2+p {
                margin-bottom: 2rem;
            }

            @media(max-width: 992px) {

                .benchmarks-form-footer-col:not(.-left) .benchmarks-form-footer-content {
                    padding: 33px 17px 33px 30px;
                }

                .industry-card-header {
                    transform: scale(0.9);
                }
            }

            @media(max-width:769px) {
                .benchmarks-form-footer-row {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto;
                    align-items: baseline;
                }

                .benchmarks-form-footer-content {
                    max-width: 98%;
                }

                .-left .benchmarks-form-footer-content {
                    margin-left: 0;
                }

                .benchmarks-form-footer-content .c-form {
                    transform: translate(0, 0);
                }

                .benchmarks-form-footer-content .button-default#hrbrand-submit {
                    margin-left: 0;
                }
            }

            @media(max-width: 576px) {
                .-left .benchmarks-form-footer-content {
                    padding: 15px 1rem;
                }
                .benchmarks-form-footer-content p {
                    margin: 20px 0 15px;
                    font-size: 18px;
                }

                .benchmarks-form-footer-content h3{
                    font-size: 20px;
                    font-weight: 700;
                    margin-bottom: 25px;
                }
            }

        </style>


        <section class="benchmarks-form-footer wide-container" id="benchmarks-form-footer">
            <div class="benchmarks-form-footer-row">
                <div class="benchmarks-form-footer-col -left">
                    <div class="benchmarks-form-footer-content">
                        <p>Хотите стать лидером отрасли?</p>
                        <h3>Запишитесь на бесплатную презентацию платформы!</h3>
                        <ul>
                            <li>Запустите бесплатный пилотный проект</li>
                            <li>Получите доступ к реальным бенчмаркам</li>
                            <li>Оцените возможности платформы и клиентского сервиса Happy Job</li>
                        </ul>
                    </div>
                </div>
                <div class="benchmarks-form-footer-col">
                    <div class="benchmarks-form-footer-content">
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



                        <form id="hrbrand" class="c-form" data-parsley-validate>
                            <h2>Форма заявки</h2>

                            <ul class="c-form-list">
                                <li class="c-form-item">
                                    <input type="hidden" name="form-id" value="hrbrand">
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
                            </ul>
                            <button id="hrbrand-submit" type="submit" class="button-default">Отправить заявку</button>

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

                                let inputFields = document.querySelectorAll('#hrbrand input[type="tel"]');
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
                                            $("#hrbrand").find('input[type="text"], input[type="phone"], textarea').val('');
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
                                $('#hrbrand input').on('input', function() {
                                    const Form = $('#hrbrand').parsley();
                                });


                                // 2
                                $('#hrbrand-submit').on('click', function(event){
                                    const Form = $('#hrbrand').parsley();

                                    if (Form.isValid()) {
                                        formSubmitHandler(event)
                                    }
                                })

                                function formSubmitHandler(event) {
                                    event.preventDefault();

                                    $(document).find('.main-modal .is-close').trigger('click');
                                    const formNode = document.getElementById('hrbrand');
                                    const formData = new FormData(formNode);
                                    const formNodeID ='hrbrand';
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
                        </script>      </div>
                </div>
            </div>
        </section>

        <section class="benchmarks-links wide-container">
            <div class="container">
                <ul class="benchmarks-links__list">
                    <li class="benchmarks-links__item">
                        <a class="benchmarks-links__img benchmarks-links__img--vid" href="/hr-blog/pao-t-plyus-o-tom-kak-uspeshno-provesti-opros-vovlechennosti-v-kompanii-federalnogo-masshtaba/#vimeo787543270">
                            <img src="/img/benchmarks/links-1.jpg" alt="">
                        </a>
                        <div class="benchmarks-links__item-wrapper">
                            <div class="benchmarks-links__item-title">
                                «Бенчмарки - это важно»!
                            </div>

                            <p class="benchmarks-links__item-text">
                                <span>Ольга Литвинова,</span>
                                директор по персоналу ПАО «Т Плюс»
                                в интервью о ценности бенчмарков.
                            </p>

                            <a class="benchmarks-links__item-link" href="/hr-blog/pao-t-plyus-o-tom-kak-uspeshno-provesti-opros-vovlechennosti-v-kompanii-federalnogo-masshtaba/#vimeo787543270">
                                Смотреть
                            </a>
                        </div>
                    </li>

                    <li class="benchmarks-links__item">
                        <div class="benchmarks-links__img">
                            <img src="/img/benchmarks/links-2.jpg" alt="">
                        </div>
                        <div class="benchmarks-links__item-wrapper">
                            <div class="benchmarks-links__item-title">
                                Как устроены бенчмарки
                            </div>

                            <p class="benchmarks-links__item-text">
                                Все о возможностях, формировании
                                и настройках бенчмаркинга на платформе
                                Happy Job.
                            </p>

                            <a class="benchmarks-links__item-link" href="https://happy-job.ru/benchmarks/">
                                Читать
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <script>
            window.onload = function() {
                console.log('start');
                if(window.location.href.endsWith('/real-benchmarks/#video')) {
                    var buttonVideo = document.getElementById('look_video');
                    if (buttonVideo) {
                        buttonVideo.click();
                    }
                }
            };
        </script>

    </main>

</div>

<!-- endrender real-benchmarks//-->

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