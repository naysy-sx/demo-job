<?php

/* @var $this yii\web\View */

$this->title = 'Digital платформа для исследования и развития вовлечённости и лояльности сотрудников | Happy Job';
?>

<div class="container mainc">
    <main>
        <div class="index-top wide-container">
            <div class="index-top__nav">
                <div></div>
                <div class="longer"></div>
            </div>


            <div class="index-top__slide active">
                <div class="index-top__title">
                    <h1>
                        Платформа №1 для исследования <br>
                        вовлеченности и лояльности персонала
                    </h1>
                </div>
                <div class="index-top__text">
                    *по данным маркетингового исследования узнаваемости бренда
                </div>
                <div class="index-top__button">
                    <a class="button-default" data-button-text="Попробовать бесплатно" data-fancybox data-src="#main-modal" href="javascript:;" onclick="ym(46152993,'reachGoal','mainpage_click_button')">Попробуйте бесплатно</a>
                </div>
                <div class="index-top__img">
                    <img src="/img/p/index/index_top_slide.png" alt="Платформа №1 для исследования вовлеченности и лояльности персонала">
                </div>
            </div>
            <div class="index-top__slide longer">
                <div class="index-top__title">
                    <h2>
                        HR-тренд №1 в 2024 году
                        <div>
                            <span>Удержание</span> и привлечение сотрудников
                        </div>
                    </h2>
                </div>
                <div class="index-top__text">
                    Более 75% HR называют удержание главной задачей <br>
                    года и работают над развитием лояльности
                </div>
                <div class="index-top__button">
                    <a class="button-default" data-button-text="Попробовать бесплатно" data-fancybox data-src="#main-modal" href="javascript:;" onclick="ym(46152993,'reachGoal','mainpage_click_button')">Попробуйте бесплатно</a>
                </div>
                <div class="index-top__img index-top__img_smaller">
                    <img src="/img/p/index/index_top_slide2_2.png" alt="HR тренд №1 в 2023 году. Удержание и привлечение сотрудников">
                </div>
            </div>
        </div>
        <style>
            .index-top{
                height: 797px;
                min-height: 570px;
                width: 100%;
                position: relative;
                z-index: 0;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url(/img/p/index/index_top_bg.jpg);
                overflow: hidden;
            }
            .index-top__slide{
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
                opacity: 0;
                pointer-events: none;
                padding: 72px 50px 0;
                transition: opacity 1s;
            }
            .index-top__slide.active{
                opacity: 1;
                pointer-events: auto;
            }
            .index-top__title{
                font-size: 42px;
                line-height: 1.2;
                font-weight: 900;
                letter-spacing: -0.008em;
                text-align: center;
                color: #000;
                margin: 0;
                transform: translate(0,0);
                transition: transform 0.5s;
            }
            .index-top__title h1,
            .index-top__title h2{
                font-size: inherit;
                font-weight: inherit;
                margin: 0 !important;
                padding: 0 !important;
            }
            .index-top__title h1 span,
            .index-top__title h2 span{
                color: var(--flush-mahogany);
            }
            .index-top__text{
                min-height: 45px;
                font-size: 16px;
                line-height: 1.4;
                font-weight: 400;
                text-align: center;
                color: rgba(0,0,0,0.52);
                margin: 27px 0 0;
                transform: translate(0,0);
                transition: transform 0.5s;
            }
            .index-top__button{
                position: relative;
                z-index: 1;
                margin: 65px 0 0;
                display: flex;
                justify-content: center;
                transform: translate(0,0);
                transition: transform 0.5s;
            }
            .index-top__button a.button-default{
                font-size: 16px;
                line-height: 1;
                padding: 12px 15px 8px;
            }
            .index-top__img{
                position: absolute;
                z-index: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 446px;
                transform: translate(0,0);
                transition: transform 0.5s;
            }
            .index-top__img_bigger{
                height: 510px;
                left: -12px;
            }
            .index-top__img_smaller{
                height: 430px;
                left: -12px;
            }
            .index-top__img img{
                display: block;
                position: absolute;
                z-index: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: contain;
                object-position: bottom center;
            }
            .index-top__nav{
                position: absolute;
                display: flex;
                z-index: 20;
                top: 40px;
                left: 50%;
                transform: translate(-50%,0);
            }
            .index-top__nav div{
                background: #b4b4b5;
                width: 45px;
                height: 4px;
                margin: 0 3px;
                position: relative;
            }
            .index-top__nav div::before{
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 0;
                background: #3a3a39;
            }
            .index-top__nav div.active::before{
                transition: width 5s linear;
                width: 100%;
            }
            .index-top__nav div.longer.active::before{
                transition-duration: 6s;
            }
            @media (max-width: 992px) {
                .index-top{
                    height: 655px;
                }
                .index-top__title{
                    font-size: 34px;
                }
                .index-top__title br,
                .index-top__text br{
                    display: none;
                }
                .index-top__button{
                    margin-top: 40px;
                }
                .index-top__img{
                    height: 380px;
                }
                .index-top__img_smaller{
                    height: 360px;
                }
            }
            @media (max-width: 768px) {
                .index-top__img_smaller{
                    height: 280px;
                }
            }
            @media (max-width: 576px) {
                .index-top{
                    height: auto;
                }
                .index-top__title{
                    font-size: 28px;
                }
                .index-top__slide{
                    padding: 50px 20px 200px;
                }
                .index-top__nav{
                    top: 30px;
                }
                .index-top__button {
                    margin-top: 25px;
                }
            }
        </style>
        <script type="text/javascript">
            $(function(){
                $('.index-top__nav div:eq(0)').addClass('active');
                var itslidetime_min = 5000, itslidetime_max = 6000, itslidetime = itslidetime_min;
                if($('.index-top__slide:eq(0)').hasClass('longer')){
                    itslidetime = itslidetime_max;
                }
                setTimeout(itslider,itslidetime);
                function itslider(){
                    var currentTopSlide = $('.index-top__slide.active');
                    $('.index-top__nav div').removeClass('active');
                    if(currentTopSlide.next().length){
                        $('.index-top__nav div:eq('+currentTopSlide.index()+')').addClass('active');
                        currentTopSlide.removeClass('active').next().addClass('active');
                        if(currentTopSlide.next().hasClass('longer')){
                            itslidetime = itslidetime_max;
                        }
                        else{
                            itslidetime = itslidetime_min;
                        }
                    }
                    else{
                        currentTopSlide.removeClass('active');
                        $('.index-top__slide:eq(0),.index-top__nav div:eq(0)').addClass('active');
                        if($('.index-top__slide:eq(0)').hasClass('longer')){
                            itslidetime = itslidetime_max;
                        }
                        else{
                            itslidetime = itslidetime_min;
                        }
                    }
                    setTimeout(itslider,itslidetime);
                }
            });
        </script>
        <style>
            .index__confidence {
                padding: 50px 0 10px;
                position: relative;
            }

            .index__confidence-title {
                padding-right: 11px;
                font-size: 15px;
                color: #9d9ea0;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
                margin-bottom: 40px;
                padding: 0;
            }

            .index__confidence-track {
                width: 100vw;
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
            }

            .index__confidence-items {
                width: auto;
                padding: 0 10px;
                display: flex;
                align-items: center;
                animation-name: scroll;
                animation-duration: 160s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            .index__confidence-item {
                max-width: 130px;
                flex-shrink: 0;
            }

            .index__confidence-item:not(:last-child) {
                margin-right: 65px;
            }

            .index__confidence-img {
                min-width: 80px;
                max-height: 50px;
                width: 100%;
                object-fit: contain;
                transition: all 0.3s ease-in;
                filter: grayscale(1);
                opacity: 0.5;
            }

            @keyframes scroll{
                0% {
                    transform: translateX(0);
                }

                100% {      transform: translateX(-63.3%);
                }
            }
        </style>

        <section class="index__confidence">
            <h2 class="index__confidence-title">
                800+ компаний доверяют happy job
            </h2>

            <div class="index__confidence-track">
                <ul class="index__confidence-items">
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/rostelekom2.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/sibur.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/magnit.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/x5_new.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/tplusgroup.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mts-new-logo.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/burgerking.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/sogaz-med.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mail-logo.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/vtb.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/megafon.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/ali.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/psb_logo.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/cherkizov.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/roskomnadzor.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/baltika.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/suek-logo-ru.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/petropavlovsk-logo-ru.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/rusagro.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/childs_world.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/ozon.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/dixi.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/lanit.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mosoblgas.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/vsk_logo_0_12.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/otkritie.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/s7.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/pik2.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/beeline.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/avilon3.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/logo_gazprombank.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/dellin.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/russdragmet.png" loading="lazy" alt="">
                    </li>

                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/rostelekom2.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/sibur.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/magnit.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/x5_new.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/tplusgroup.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mts-new-logo.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/burgerking.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/sogaz-med.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mail-logo.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/vtb.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/megafon.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/ali.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/psb_logo.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/cherkizov.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/roskomnadzor.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/baltika.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/suek-logo-ru.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/petropavlovsk-logo-ru.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/rusagro.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/childs_world.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/ozon.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/dixi.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/lanit.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/mosoblgas.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/vsk_logo_0_12.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/otkritie.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/s7.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/pik2.svg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/beeline.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/avilon3.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/logo_gazprombank.png" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/dellin.jpg" loading="lazy" alt="">
                    </li>
                    <li class="index__confidence-item">
                        <img class="index__confidence-img" src="/img/p/clients/clients-logo/russdragmet.png" loading="lazy" alt="">
                    </li>
                </ul>
            </div>
        </section>
        <div class="index-features">
            <div class="index-features__block">
                <div class="index-features__title">
                    Измерение
                </div>
                <div class="index-features__text">
                    Геймифицированный опрос - интересно для каждого. Познакомьтесь со своими людьми с помощью 100% анонимных опросов.
                </div>
            </div>
            <div class="index-features__block">
                <div class="index-features__title">
                    Знание
                </div>
                <div class="index-features__text">
                    Платформа в онлайн обрабатывает результаты, сравнивает их с данными компаний отрасли, нормативными значениями  и определяет приоритеты для развития.
                </div>
            </div>
            <div class="index-features__block">
                <div class="index-features__title">
                    Действие
                </div>
                <div class="index-features__text">
                    Позвольте вашим руководителям реализовать все рекомендации платформы, которые действительно важны сегодня и изменят ситуацию.
                </div>
            </div>
        </div>
        <style>
            .index-features{
                display: flex;
                justify-content: center;
                margin-top: 107px;
                counter-reset: features;
            }
            .index-features__block{
                width: 314px;
                margin: 0 35px;
                position: relative;
                counter-increment: features;
            }
            .index-features__block::before{
                content: '';
                position: absolute;
                top: 0;
                left: 50%;
                width: calc(100% + 70px);
                border-top: 1px solid #61c13a;
            }
            .index-features__block:last-child::before{
                left: 0%;
                width: 50%;
            }
            .index-features__title{
                font-size: 30px;
                line-height: 1.2;
                font-weight: 900;
                letter-spacing: -0.008em;
                text-align: center;
                color: #000;
                padding-top: 22px;
                position: relative;
            }
            .index-features__title::before{
                content: counter(features);
                position: absolute;
                z-index: 1;
                top: 0;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 24px;
                height: 24px;
                border-radius: 24px;
                background: #61c13a;
                color: #fff;
                font-size: 0.58em;
                line-height: 1;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .index-features__text{
                font-size: 16px;
                line-height: 1.5;
                font-weight: 400;
                margin: 43px 0 0;
                color: rgba(0,0,0,0.78);
            }
            @media (max-width: 992px){
                .index-features{
                    flex-direction: column;
                    align-items: center;
                    margin-top: 75px;
                }
                .index-features__block{
                    width: 100%;
                    max-width: 500px;
                    margin: 0 0 50px;
                    padding: 0;
                }
                .index-features__block:last-child{
                    margin-bottom: 0;
                }
                .index-features__block::before{
                    display: none;
                }
            }
            @media (max-width: 576px) {
                .index-features__title{
                    font-size: 25px;
                }
                .index-features__text{
                    margin-top: 20px;
                }
                .index-features__block br{
                    display: none;
                }
            }
        </style>
        <style>
            .videos-play-btn {
                width: 100%;
                height: 100%;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                align-items: center;
            }

            .index-involvement__video + .videos-play-btn .play-btn {
                width: 50px;
                height: 50px;
                margin: auto;
                opacity: 1;
                transform: scale(1.5);
            }

            .index-involvement__inner:hover .videos-image-wrapper picture {
                transform: scale(1.05, 1.05);
            }

            .videos-play-btn.videos-play-btn--active {
                display: none;
            }

            .index-involvement {
                margin-top: 114px;
                text-align: center;
            }

            .index-involvement__inner {
                width: 896px;
                height: 502px;
                position: relative;
                border-radius: 10px;
                overflow: hidden;
                margin: 58px auto 0;
            }

            .index-involvement__video {
                width: 100%;
                height: 100%;
                position: relative;
            }

            .index-involvement__video .videos-caption {
                top: 0;
            }

            .index-involvement__video a .videos-block .videos-image-wrapper picture {
                display: block;
                transition: transform 0.3s;
                height: 100%;
            }

            .index-involvement__video a:hover .videos-block .videos-image-wrapper picture {
                transform: scale(1.05, 1.05);
            }

            .index-involvement__video a,
            .index-involvement__video .videos-block,
            .index-involvement__video .videos-image-wrapper {
                display: block;
                height: 100%;
            }

            .index-promo .section-title {
                color: var(--tuna);
                padding: 1rem 2rem;
                margin: 0rem;
            }

            @media (max-width: 992px) {

                .index-involvement__inner{
                    width: 100%;
                    height: auto;
                    position: relative;
                    border-radius: 10px;
                    overflow: hidden;
                    margin: 1rem auto;
                }

                .index-involvement__video {
                    width: 100%;
                    height: auto;
                    margin: 1rem auto 0;
                    position: relative;
                    aspect-ratio: 20 / 12;
                }

                .index-involvement__video .videos-image-wrapper {
                    max-height: unset;
                }

                .index-involvement .section-title {
                    display: none;
                }

                .index-promo .section-title {
                    margin: 0rem -2rem;
                    background-color: var(--c-link);
                    color: #fff;
                }
            }

            @media (max-width: 576px) {
                .index-involvement {
                    margin-top: 2rem;
                }
            }
        </style>

        <div class="index-involvement">
            <h2 class="section-title">О платформе за одну минуту</h2>

            <div class="index-involvement__inner">
                <video class="index-involvement__video" itemprop="video" itemscope itemtype="https://schema.org/VideoObject" src="videos/sidevideo/platform-happy-job.mp4" poster="/img/p/index/index-video-bigcover-3.jpg">
                    <meta itemprop="uploadDate" content="2019-01-05T00:00:00">
                    <div itemprop="name" style="display: none;" hidden>Видео Happy Job</div>
                    <div itemprop="description" style="display: none;" hidden>О платформе за одну минуту</div>
                    <img src="/img/p/index/index-video.jpg" itemprop="thumbnailUrl" style="display: none;" hidden>
                    <source src="">
                    <figure class="videos-block">
                        <figcaption class="videos-caption">
                            <div class="videos-heading" itemprop="name">
                                Happy Job - Leader PR
                            </div>
                            <div itemprop="description" style="display: none" hidden="">
                                Видео Happy Job
                            </div>
                        </figcaption>
                    </figure>
                </video>

                <b href="#" class="videos-play-btn">
                    <div class="play-btn">
                        <svg class="play-circle">
                            <use xlink:href="#videoCircle"></use>
                        </svg>
                        <svg class="play-triangle">
                            <use xlink:href="#videoTriangle"></use>
                        </svg>
                    </div>
                </b>
            </div>

            <script>
                $('.videos-play-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).parent('.index-involvement__inner').find('.index-involvement__video').get(0).play();
                    $(this).parent('.index-involvement__inner').find('.index-involvement__video').attr('controls', true);
                    $(this).toggleClass('videos-play-btn--active');
                });
                $('.index-involvement__video').on('click', function () {
                    if (!$(this).paused) {
                        $(this).get(0).pause();
                        $(this).removeAttr('controls');
                        $(this).next().toggleClass('videos-play-btn--active');
                    }
                });
            </script>
        </div>
        <style>

        </style><div class="index-promo">
            <h2 class="section-title">Сделаем людей счастливее на работе</h2>
            <div class="index-promo__block">
                <div class="index-promo__text">
                    <div class="index-promo__text-block">
                        <p>
                            Крупнейшие HR-бенчмарки в России и СНГ
                        </p>
                        <p>
                            Каждый день к платформе подключаются новые клиенты, ведь мы сделали интересные опросы для сотрудников из отрасли
                        </p>
                    </div>
                    <ul class="index-promo__list">
                        <li data-item="it" class="index-promo__list-item">IT. E-commerce. Телеком</li>
                        <li data-item="transport" class="index-promo__list-item" hidden>Логистика и транспорт</li>
                        <li data-item="retail" class="index-promo__list-item" hidden>Retail food & non food</li>
                        <li data-item="development" class="index-promo__list-item" hidden>Девелопмент и строительство</li>
                        <li data-item="farma" class="index-promo__list-item" hidden>Фарма и медицина</li>
                        <li data-item="insurance" class="index-promo__list-item" hidden>Банки и страховые</li>
                        <li data-item="education" class="index-promo__list-item" hidden>Образование и наука</li>
                        <li data-item="manufacture" class="index-promo__list-item" hidden>Производство</li>
                        <li data-item="profy" class="index-promo__list-item" hidden>Профессиональные услуги</li>
                        <li data-item="metall" class="index-promo__list-item" hidden>Металлургия и энергетика</li>
                    </ul>
                </div>
                <div class="index-promo__video" itemscope itemprop="video" itemtype="https://schema.org/VideoObject">
                    <meta itemprop="uploadDate" content="2019-01-05T00:00:00">
                    <div itemprop="name" style="display: none;" hidden>Видео Happy Job</div>
                    <div itemprop="description" style="display: none;" hidden>Крупнейшие HR-бенчмарки в России и СНГ</div>
                    <img src="/img/happy-job/images/charvideo.png" itemprop="thumbnailUrl" style="display: none;" hidden>
                    <video id="charvideo" playsinline loop muted>
                        <source data-src="/videos/charvideo_s.mp4" type="video/mp4">
                        <source data-src="/videos/charvideo_s.webm" type="video/webm">
                    </video>
                </div>
                <div class="index-promo__info">
                    <div class="index-promo__info-line">
                        <span>800+</span> компаний
                    </div>
                    <div class="index-promo__info-line">
                        <span>32</span> отрасли
                    </div>
                </div>
            </div>
        </div>

        <style>
            .index-promo{
                margin-top: 125px;
                text-align: center;
                position: relative;
                z-index: 1;
            }
            .index-promo__block{
                margin-top: 135px;
                display: flex;
                justify-content: center;
            }
            .index-promo__text{
                width: 400px;
                text-align: left;
                font-size: 16px;
                line-height: 1.5;
                color: rgba(0, 0, 0, 0.78);
            }
            .index-promo__text p{
                margin: 0 0 1.5em;
            }
            .index-promo__list{
                margin: 0;
                padding: 0;
                list-style: none;
                font-size: 1.9em;
                line-height: 1;
                font-weight: 700;
                color: #61c13a;
            }
            .index-promo__video{
                width: 275px;
                margin: 0 0 0 15px;
            }
            .index-promo__video video{
                width: 100%;
                height: auto;
                position: relative;
                margin-top: -111px;
                clip-path: inset(1px 1px);
            }
            .index-promo__info{
                width: 435px;
                text-align: left;
                font-size: 40px;
                line-height: 1;
                font-weight: 700;
                color: #000;
                margin: -10px 0 0;
            }
            .index-promo__info-line{
                margin: 0 0 51px 0;
            }
            .index-promo__info-line:last-child{
                margin: 0;
            }
            .index-promo__info span{
                font-size: 1.65em;
                color: #61c13a;
                display: inline-block;
                margin: 0 -2px 0 0;
            }
            @media (max-width: 992px) {
                .index-promo{
                    margin-bottom: 75px;
                }
                .index-promo__block{
                    flex-direction: column;
                    align-items: center;
                    margin-top: 50px;
                }
                .index-promo__text{
                    width: 100%;
                    max-width: 600px;
                    position: relative;
                    z-index: 1;
                }
                .index-promo__video{
                    margin-top: 95px;
                }
                .index-promo__info{
                    text-align: center;
                    width: 100%;
                }
            }
            @media (max-width: 576px){
                .index-promo{
                    margin-top: 75px;
                    margin-bottom: 45px;
                }
                .index-promo__video,
                .index-promo__list{
                    display: none;
                }
                .index-promo__info{
                    margin-top: 35px;
                    font-size: 28px;
                }
                .index-promo__info span{
                    display: block;
                }
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                'use strict';
                if($(window).width() > 576){
                    playcharvideo();
                }
                $(window).resize(function(){
                    if($(window).width() > 576 && !$('#charvideo').hasClass('playing')){
                        playcharvideo();
                    }
                });
                function playcharvideo(){
                    $('#charvideo source').each(function(){
                        $(this).attr('src',$(this).data('src'));
                    });
                    $('#charvideo').addClass('playing');
                    var video_industries = document.getElementById('charvideo')
                    video_industries.autoplay = false
                    video_industries.load()
                    video_industries.autoplay = true

                    var approxTime = 0
                    video_industries.ontimeupdate = function () {
                        var currentTime = video_industries.currentTime.toFixed(2);
                        if (currentTime !== approxTime) {
                            video_industries.autoplay = true
                            video_industries.play()
                            const hideHeadings = () => {
                                let headings = document.querySelectorAll('.index-promo__list-item')
                                let headings_arr = [...headings]
                                headings_arr.forEach(item => {
                                    item.hidden = true
                                })
                            }

                            approxTime = currentTime
                            if(approxTime >= 0 && approxTime < 2.5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="it"]')[0].hidden = false;
                            }
                            else if (approxTime >= 2.5 && approxTime < 5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="transport"]')[0].hidden = false;
                            }
                            else if (approxTime >= 5 && approxTime < 8) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="retail"]')[0].hidden = false;
                            }
                            else if (approxTime >= 8 && approxTime < 10.5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="development"]')[0].hidden = false;
                            }
                            else if (approxTime >= 10.5 && approxTime < 13.50) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="farma"]')[0].hidden = false;
                            }
                            else if (approxTime >= 13.5 && approxTime < 14.75) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="insurance"]')[0].hidden = false;
                            }
                            else if (approxTime >= 14.75 && approxTime < 16) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="education"]')[0].hidden = false;
                            }
                            else if (approxTime >= 16 && approxTime < 19) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="manufacture"]')[0].hidden = false;
                            }
                            else if (approxTime >= 19 && approxTime < 22) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="profy"]')[0].hidden = false;
                            }
                            else if (approxTime >= 22 && approxTime < 25) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="metall"]')[0].hidden = false;
                            }
                            else if (approxTime >= 25 && approxTime < 27.24) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="farma"]')[0].hidden = false;
                            }
                        }
                    };
                }
            })
        </script>
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
        </script>
        <link rel="stylesheet" href="/jquery/swiper/swiper-bundle.min.css">
        <style>

            .citates-wrapper .splide__arrows.splide__arrows--ltr,
            .citates-wrapper .splide__pagination.splide__pagination--ltr{
                display: none;
            }

            .citate {
                display: grid;
                grid-template-columns: clamp(6.25rem, 3.0892857142857144rem + 15.803571428571427vw, 17.3125rem) 2px 1fr 1fr;
                grid-template-rows: 1fr auto auto;
                grid-gap: clamp(1.875rem, 1.1071428571428572rem + 3.839285714285714vw, 4.5625rem);
                grid-template-areas: 'picture divider content content' 'picture divider company author' '. . case .';
                padding: 0;
            }

            .citate:before,
            .citate:after{
                display: none;
            }

            .clients-citates{
                padding-top: 2rem;
            }


            .swiper.citates{
                position: relative;
            }

            .swiper-wrapper.citates-slider{
                margin: 0;
            }

            .citate-picture{
                margin: 0;
                grid-area: picture;
            }
            .citate-picture img{
                aspect-ratio: 1 / 1;
                border-radius: 50%;
                object-fit: cover;
                max-width: 9.75rem;
                width: 100%;
                margin-left: auto;
                margin-right: 0;
            }

            .citate-divider{
                grid-area: divider;
                background-color: #D9D9D9;
            }
            .citate-content{
                grid-area: content;
            }
            .citate-content p{
                font-size: 0.9375rem;
                font-size: clamp(0.9375rem, 0.8482142857142857rem + 0.4464285714285714vw, 1.25rem);
                font-weight: 900;
                height: 120px;
                overflow: hidden;
                line-height: 1.25;
                text-overflow: ellipsis;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .citate-company{
                grid-area: company;
            }
            .citate-company figure{
                margin: 0 0 clamp(0.9375rem, 0.7232142857142857rem + 1.0714285714285714vw, 1.6875rem);
                max-width: 240px;
                text-align: center;
            }

            .citate-company figure img{
                max-height: 60px;
                width: auto;
                margin-left: 0;
            }

            .citate-company p{
                font-size: 15px;
            }
            .citate-company p span{
                font-size: 15px;
            }
            .citate-author{
                grid-area: author;
            }
            .citate-author cite{
                font-style: normal;
                font-size: 16px;
                transform: translate(-8px, -2px);
                display: block;
            }
            .citate-author cite strong{
                background-color: transparent;
                padding: 0;
            }
            .citate-author cite span{
                display: block;
                margin-top: 2px;
                line-height: 1.5;
            }
            .citate-case{
                grid-area: case;
                transform: translate(0, -10px);
            }
            .citate-case a{
                display: inline-flex;
                color: #fff;
                align-items: center;
                justify-content: center;
                font-weight: 500;
                text-align: center;
                padding: 13px;
                font-size: 16px;
                min-width: clamp(8.125rem, 7.053571428571429rem + 5.357142857142857vw, 11.875rem);
                background-color: var(--c-link);
                border-radius: 7px;
            }

            .citates-controls{
                position: absolute;
                left: 66%;
                bottom: 5.5rem;
                display: grid;
                grid-template-columns: auto 1fr auto;
                justify-content: center;
                align-content: center;
                grid-gap: 30px;
                z-index: 1;
            }

            .citate-dots .swiper-pagination-bullet{
                width: 12px;
                height: 12px;
                margin: -2px 6px !important;
            }

            .citate-dots .swiper-pagination-bullet.swiper-pagination-bullet-active{
                background-color: var(--c-link);
            }

            .citate-arrow{
                display: block;
                width: clamp(1.25rem, 0.8571428571428572rem + 1.9642857142857142vw, 2.625rem);
                height: clamp(1.25rem, 0.9285714285714286rem + 1.607142857142857vw, 2.375rem);
                background-color: transparent;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                transition: background-image 0.3s, left 0.3s, right 0.3s;
            }

            .citate-prev-arrow{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%23D9D9D9'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
            }
            .citate-prev-arrow:hover{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2361C13B'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
            }
            .citate-next-arrow{
                background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%23D9D9D9'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
            }
            .citate-next-arrow:hover{
                background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2361C13B'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
            }

            .citate-dots-list{
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .citate-dots-button{
                display: block;
                width: 13px;
                height: 13px;
                background-color: #D9D9D9;
                border-radius: 50%;
            }

            .citate-dots{
                align-self: center;
            }

            .citate-dots-item{
                margin: 0;
                padding: 0 8px;
            }

            .citate-dots-button:hover,
            .citate-dots-button.active{
                background-color: var(--c-link);
            }

            @media(max-width: 1200px){
                .citate-dots{
                    display: none;
                }
                .citates-controls{
                    left: 72%;
                }
            }
            @media(max-width: 993px){
                .citate{
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto 1px auto auto auto;
                    grid-template-areas: 'picture picture''divider divider''content content''company author''case case';
                }
                .citate-content p{
                    max-width: 100%;
                    text-align: center;
                }
                .citate-picture img{
                    margin-right: auto;
                }
                .citate-company p{
                    text-align: right;
                }
                .citate-company figure{
                    margin-left: auto;
                    margin-bottom: 1rem;
                }
                .citate-company figure img{
                    margin-left: auto;
                    margin-right: 0;
                }
                .citate-case a{
                    margin-left: auto;
                }
                .citate-content p{
                    height: 80px;
                }
                .citate-case {
                    text-align: center;
                }
                .citate-case a{
                    margin: 0 auto;
                }

                .citates-controls {
                    position: relative;
                    left: inherit;
                    bottom: inherit;
                    grid-gap: 1rem;
                    max-width: 320px;
                    margin: -2rem auto 2rem;
                }
                .citate-dots {
                    display: flex;
                    justify-content: center;

                }

                .citate-author cite span{
                    font-size: 12px;
                }
            }

            @media(max-width: 577px){
                .citate {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto 1px auto auto auto auto;
                    grid-template-areas:
            'picture'
            'divider'
            'content'
            'author'
            'company'
            'case';
                }
                .citate-company p > span{
                    display: block;
                }
                .citate-content p {
                    height: 100px;
                }
                .citate-author cite{
                    transform: none;
                    text-align: center;
                }
                .citate-company figure{
                    margin-left: auto;
                    margin-right: auto;
                }
                .citate-company p{
                    text-align: center;
                }
                .citate-company figure img {
                    margin-right: auto;
                }

            }
            @media(max-width: 420px){
                .citate-content p {
                    height: 130px;
                }
            }
        </style>



        <section class="clients-citates wide-container">
            <div class="container">
                <div class="swiper citates">
                    <ul class="swiper-wrapper citates-slider">

                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_1.png" alt="Светлана Першина">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«Для нас Happy Job — намного больше, чем просто вовлеченность. Это наш термометр отношений c сотрудником»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/sibur.png" alt="Сибур Холдинг">
                                    </figure>
                                    <p>Число сотрудников: <span>более <span>40 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Светлана Першина</strong>,
                                        <span>Руководитель практики HR-коммуникаций и развития бренда работодателя</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/kak-sibur-razvivayet-vovlechennost-personala/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_2.png" alt="Вера Долгова">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«Happy Job очень облегчает работу с вовлеченностью благодаря удобным личным кабинетам, понятной визуализации, глубокой детализации отчетов и тщательно проработанной методологии»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/magnit.png" alt="Компания Магнит">
                                    </figure>
                                    <p>Число сотрудников: <span><span>360 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Вера Долгова</strong>,
                                        <span>Руководитель управления исследований, аналитики и нематериальной мотивации</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/praktika-razvitiya-enps-opyt-magnit/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_3.png" alt="Ольга Литвинова">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«Я не знаю другого такого же надежного инструмента, как Happy Job, который был бы способен оцифровать мнение действительно большого количества сотрудников по большому количеству факторов»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/tplus.png" alt="Компания Т Плюс">
                                    </figure>
                                    <p>Число сотрудников: <span>более <span>50 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Ольга Литвинова</strong>,
                                        <span>Директор по управлению персоналом и организационному развитию</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/pao-t-plyus-o-tom-kak-uspeshno-provesti-opros-vovlechennosti-v-kompanii-federalnogo-masshtaba/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_4.png" alt="Надежда Докучаева">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«Высокую продуктивность показывают те подразделения, где каждому человеку комфортно работается»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/baltika.png" alt="Балтика">
                                    </figure>
                                    <p>Число сотрудников: <span><span>4 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Надежда Докучаева</strong>,
                                        <span>Руководитель направления управления талантами и вовлеченностью</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/vovlechennost-90-keys-baltika/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_5.png" alt="Юлия Корочкина">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«Благодаря гарантированной анонимности Happy Job мы не только получили ответы на вопросы, но и комментарии от сотрудников — с расшифровкой ответов, идеями, размышлениями, критикой»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/tehnonikol.png" alt="Компания Технониколь">
                                    </figure>
                                    <p>Число сотрудников: <span><span>1 500</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Юлия Корочкина</strong>,
                                        <span>HRD ТС Технониколь</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/Eto-rabotaet--kak-my-snizili-tekuchest-kadrov-na-19-8---razvivaya-vovlechennost-personala/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_6.png" alt="Максим Абрамов">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«За 3 года работы с Happy Job мы примерно на 10% увеличили количество одновременно вовлеченных и лояльных сотрудников»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/lanit.png" alt="Компания Ланит">
                                    </figure>
                                    <p>Число сотрудников: <span><span>14 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Максим Абрамов</strong>,
                                        <span>Руководитель отдела подбора персонала</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/GK-Lanit-rasskazyvaet-ob-osobennostyah-issledovaniy-vovlechennosti-v-IT-kompaniyah/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                        <li class="swiper-slide citates-slider-item">
                            <blockquote class="citate">
                                <figure class="citate-picture">
                                    <img src="/img/citates-slider/picture_8.png" alt="Мария Резник">
                                </figure>
                                <div class="citate-divider"></div>
                                <div class="citate-content">
                                    <p>«В Happy Job встроены все необходимые инструменты и подсказки, можно запланировать конкретные действия с датами и назначить ответственных»</p>
                                </div>
                                <div class="citate-company">
                                    <figure>
                                        <img src="/img/citates-slider/irg.png" alt="Компания Inventive Retail Group">
                                    </figure>
                                    <p>Число сотрудников: <span><span>4 000</span></span></p>
                                </div>
                                <div class="citate-author">
                                    <cite>
                                        <strong>Мария Резник</strong>,
                                        <span>Директор по корпоративной культуре и бренду работодателя</span>
                                    </cite>
                                </div>
                                <div class="citate-case">
                                    <a href="/hr-blog/vovlechennost-v-vovlechennost-opyt-inventive-retail-group/" target="_blank">Читать кейс</a>
                                </div>
                            </blockquote>
                        </li>
                    </ul>


                    <div class="citates-controls">
                        <div class="citate-prev">
                            <a class="citate-arrow citate-prev-arrow"></a>
                        </div>
                        <div class="citate-dots"></div>
                        <div class="citate-next">
                            <a class="citate-arrow citate-next-arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="/jquery/swiper/swiper-bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Создаем новый Swiper слайдер
                const swiper = new Swiper('.swiper', {
                    loop: true,
                    navigation: {
                        nextEl: '.citate-next-arrow',
                        prevEl: '.citate-prev-arrow',
                    },
                    // Включаем пагинацию (dots) и настраиваем ее
                    pagination: {
                        el: '.citate-dots',
                        clickable: true
                    },
                });

                // Инициализируем Swiper
                swiper.init();
            });
        </script>
        <style>
            .quote-banner,
            .quote-banner p{
                background-color: var(--c-link);
                color: white;
                overflow: hidden;
                line-height: 1.3;
                text-align: center;
                font-size: clamp(1.1875rem, 0.9553571428571428rem + 1.1607142857142858vw, 2rem);
                font-weight: 300;
                letter-spacing: 0.6px;
                font-style: normal;
            }

            .quote-banner-text{
                max-width: 940px;
                margin: 0 auto;
            }

            .quote-banner-text:before,
            .quote-banner-text:after{
                display: none;
            }

            .quote-banner-text p{
                padding:  clamp(2.9375rem, 2.705357142857143rem + 1.1607142857142858vw, 3.75rem) 0;
                margin: 0 !important;
                line-height: 1;
            }

        </style>
        <section class="quote-banner  wide-container">
            <blockquote class="quote-banner-text animated fadeIn">
                <p>Чтобы клиенты полюбили компанию, её должны полюбить сотрудники!</p>
            </blockquote>
        </section>
        <style>
            .methodology{
                background-color: #f4f5f7;
            }
            .methodology .section-title{
                padding: 0;
            }
            .methodology .row{
                margin-top: -12px;
            }

            .methodology-content{
                line-height: 1.3;
                padding: 0 0 0 3.2rem;
                text-align: left;
            }
            .methodology-content p{
                margin: 0 0 clamp(1.4375rem, 1.2589285714285714rem + 0.8928571428571428vw, 2.0625rem);
                font-size: clamp(0.8125rem, 0.7589285714285714rem + 0.26785714285714285vw, 1rem);
            }

            .methodology-content p a{
                position: relative;
                white-space: nowrap;
                text-decoration: none;
                color: white;
                padding: 0 3px;
            }
            .methodology-content p span{
                position: relative;
            }
            .methodology-content p a:before{
                content: '';
                position: absolute;
                z-index: 0;
                width: 100%;
                left: 0;
                top: -4px;
                bottom: -2px;
                background: var(--c-link);
                border-radius: 3px;
            }
            .book{
                text-align: center;
                margin: 0 0 0 22px;
            }
            .book img{
                display: block;
                margin: 0 auto -47px;
                max-width: 410px;
                width: 100%;
            }
            .book a{
                text-decoration: none;
            }
            .book > span{
                position: relative;
            }
            .book > span:before{
                content: '';
                position: absolute;
                top: 9px;
                left: -73px;
                display: block;
                background-image: url(/img/happy-job/images/novelty.png);
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                width: 50px;
                height: 35px;
                z-index: 1;
            }

            @media (max-width: 1024px) {
                .book > span {
                    max-width: 410px;
                    display: block;
                    margin: 0 auto;
                }
                .book > span:before {
                    left: 50%;
                    transform: translate(-50%);
                    margin-left: -56px;
                }
            }

            @media (max-width: 576px) {
                .book > span:before{
                    top: 9px;
                    left: 50%;
                    transform: translateX(-40%);
                }
                .methodology{
                    padding-bottom: 35px;
                }
            }

            .book-caption{
                margin-top: 0;
                padding-top: 0;
            }
            .book-caption > p:first-child{
                margin-top: 0;
            }
            .book-caption > p{
                font-weight: 400;
                margin: 6px 0 24px;
            }

            .book-title{
                font-size: 21px;
                font-weight: 500;
                margin: 0 auto 1rem;
                max-width: 420px;
                line-height: 1.2;
            }
            .book-title a{
                color: var(--c-text);
                text-decoration: underline;
                text-decoration-skip-ink: none;
                transition: all 0.3s;
            }
            .book-title a:hover{
                color: var(--c-link);
                text-decoration: none;
            }

            @media(max-width: 992px){
                .methodology-content{
                    padding: 0;
                }
                .book{
                    margin: 0;
                }
                .book img {
                    margin: 0 auto -40px;
                }
            }
            @media(max-width: 576px){
                .book img {
                    margin: 0 auto;
                }
            }

        </style>
        <section class="section methodology wide-container">
            <div class="container">
                <article class="methodology">
                    <header class="section-header">
                        <h2 class="section-title">Наука и методика</h2>
                    </header>
                    <div class="section-body slow">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="methodology-content">
                                    <p>
                                        Happy Job обогатила международную практику оценки вовлечённости и лояльности, добавив в неё точность исследований, интересные опросы и технологии <a href="/about-service/method/" target="_blank" tabindex="-1"><span>HR Zero</span></a>.
                                        Мы совершенствуем <a href="/metodika/nauchnoe-obosnovanie-metodiki/" target="_blank" tabindex="-1"><span>методику</span></a> и вопросы каждый день вместе с 800+ средними и крупными компаниями России и Евразии.
                                    </p>
                                    <p>
                                        Методика подтверждена <a href="/img/happy-job/images/rao.jpg" data-fancybox tabindex="-1"><span>патентом РАО</span></a>. Платформа входит в <a href="https://happy-inc.ru/news/Platforma-Happy-Job-voshla-v-edinyy-reestr-rossiyskih-programm-dlya-elektronnyh-vychislitelnyh-mashin-i-baz-dannyh/" target="_blank" tabindex="-1"><span>единый реестр</span></a> российского программного обеспечения.
                                    </p>
                                    <p><a href="/metodika/nauchnoe-obosnovanie-metodiki/" target="_blank" tabindex="-1"><span>Научные статьи</span></a> по методике Happy Job регулярно публикуются в международных журналах фундаментальных и прикладных исследований. <a href="/hr-blog/#methodical-materials" tabindex="-1"><span>Экспертные статьи</span></a> наших консультантов можно прочитать в авторитетных бизнес-изданиях.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <figure class="book">
                                    <figcaption class="book-caption">
                                        <p>Подробнее <a href="/vovlechennost-i-loyalnost-personala-ot-do-ya/">читайте в книге</a> Алексея Клочкова</p>
                                        <h3 class="book-title"><a href="/vovlechennost-i-loyalnost-personala-ot-do-ya/">Вовлечённость и лояльность персонала от А до Я</a></h3>
                                    </figcaption>
                                    <span>
                               <img src="/img/happy-job/images/book-banner_s.png" loading="lazy" alt="" class="book-image">
                            </span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <style>
            .section.mass-media {
                text-align: center;
                padding-top: 66px;
                padding-bottom: 96px;
            }

            .mass-media__title {
                margin-bottom: 31px;
            }

            .mass-media__text {
                display: block;
                max-width: 280px;
                margin: 0 auto 39px;
                color: #777;
                font-size: 16px;
                line-height: 1.125;
            }

            .mass-media__list {
                width: 910px;
                font-size: 10px;
                margin: 0 auto;
                padding: 0 0 0 0;
                list-style: none;
                display: grid;
                grid-template-columns: repeat(910, 0.1em);
                grid-template-rows: repeat(573, 0.1em);
            }

            .mass-media__item {
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                background-color: #F4F5F7;
                transition: transform 0.3s linear;
            }

            .mass-media__item:hover {
                transform: scale(1.15);
            }

            .mass-media__item:first-child {
                grid-column-start: 1;
                grid-column-end: calc(1 + 143);
                grid-row-start: 144;
                grid-row-end: calc(144 + 143);
            }

            .mass-media__item:nth-child(2) {
                grid-column-start: 171;
                grid-column-end: calc(171 + 143);
                grid-row-start: 1;
                grid-row-end: calc(1 + 143);
            }

            .mass-media__item:nth-child(3) {
                grid-column-start: 585;
                grid-column-end: calc(585 + 143);
                grid-row-start: 1;
                grid-row-end: calc(1 + 143);
            }

            .mass-media__item:nth-child(4) {
                grid-column-start: 314;
                grid-column-end: calc(314 + 245);
                grid-row-start: 73;
                grid-row-end: calc(73 + 245);
            }

            .mass-media__item:nth-child(5) {
                grid-column-start: calc(911 - 188);
                grid-column-end: 911;
                grid-row-start: 153;
                grid-row-end: calc(153 + 188);
            }

            .mass-media__item:nth-child(6) {
                grid-column-start: 144;
                grid-column-end: calc(144 + 143);
                grid-row-start: 286;
                grid-row-end: calc(286 + 143);
            }

            .mass-media__item:nth-child(7) {
                grid-column-start: 534;
                grid-column-end: calc(534 + 143);
                grid-row-start: 308;
                grid-row-end: calc(308 + 143);
            }

            .mass-media__item:nth-child(8) {
                grid-column-start: 712;
                grid-column-end: calc(712 + 143);
                grid-row-start: 385;
                grid-row-end: calc(385 + 143);
            }

            .mass-media__item:nth-child(9) {
                grid-column-start: 304;
                grid-column-end: calc(304 + 188);
                grid-row-start: calc(574 - 188);
                grid-row-end: 574;
            }

            .mass-media__item:nth-child(10) {
                grid-column-start: 304;
                grid-column-end: calc(304 + 188);
                grid-row-start: calc(574 - 188);
                grid-row-end: 574;
            }

            .mass-media__item--turquoise {
                background-color: #E3ECF1;
            }

            .mass-media__item--gray {
                background-color: #D3D9E5;
            }

            .mass-media__link,
            .mass-media__img {
                width: 100%;
                height: 100%;
            }

            @media (max-width: 1000px) {
                .section.mass-media {
                    padding: 66px 2.5vw 50px;
                }

                .mass-media__list {
                    font-size: 1vw;
                    width: 91em;
                }
            }

            @media (max-width: 600px) {
                .section.mass-media {
                    padding: 44px 5.123vw;
                }

                .mass-media__title {
                    font-size: 30px;
                    margin-bottom: 25px;
                }

                .mass-media__text {
                    margin: 0 auto 21px 24px;
                }

                .mass-media__list {
                    margin: 0;
                    grid-template-columns: repeat(350, 0.258em);
                    grid-template-rows: repeat(492, 0.258em);
                }

                .mass-media__item:first-child {
                    grid-column-start: 8;
                    grid-column-end: calc(8 + 97);
                    grid-row-start: 164;
                    grid-row-end: calc(164 + 97);
                }

                .mass-media__item:nth-child(2) {
                    grid-column-start: 188;
                    grid-column-end: calc(171 + 160);
                    grid-row-start: 379;
                    grid-row-end: calc(379 + 97);
                }

                .mass-media__item:nth-child(3) {
                    grid-column-start: calc(350 - 97);
                    grid-column-end: 350;
                    grid-row-start: 261;
                    grid-row-end: calc(261 + 97);
                }

                .mass-media__item:nth-child(4) {
                    grid-column-start: 112;
                    grid-column-end: calc(112 + 144);
                    grid-row-start: 174;
                    grid-row-end: calc(174 + 144);
                }

                .mass-media__item:nth-child(5) {
                    grid-column-start: calc(38 + 120);
                    grid-column-end: 38;
                    grid-row-start: 24;
                    grid-row-end: calc(24 + 120);
                }

                .mass-media__item:nth-child(6) {
                    grid-column-start: 1;
                    grid-column-end: calc(1 + 97);
                    grid-row-start: 299;
                    grid-row-end: calc(299 + 97);
                }

                .mass-media__item:nth-child(7) {
                    grid-column-start: 242;
                    grid-column-end: calc(242 + 97);
                    grid-row-start: 106;
                    grid-row-end: calc(106 + 97);
                }

                .mass-media__item:nth-child(8) {
                    grid-column-start: 184;
                    grid-column-end: calc(184 + 97);
                    grid-row-start: 1;
                    grid-row-end: calc(1 + 97);
                }

                .mass-media__item:nth-child(9) {
                    grid-column-start: 98;
                    grid-column-end: calc(98 + 120);
                    grid-row-start: calc(493 - 120);
                    grid-row-end: 493;
                }
            }

            .news-title {
                font-size: 50px;
                letter-spacing: 0.01em;
                line-height: 1;
                font-weight: 300;
            }

            .views-row {
                margin-bottom: 55px;
            }

            .view-content {
                overflow: hidden;
            }

            .view-item {
                line-height: 1.375;
                border-radius: 5px;
                background: #fff;
                box-shadow: 0 0 15px 0 rgba(0, 0, 0, .05);
                font-size: 15px;
                overflow: hidden;
                position: relative;
                text-align: left;
                padding: 0 0 75px 0;
                height: 100%;
            }

            .view-item a {
                outline: none;
                user-select: none;
            }

            .view-item a:hover {
                text-decoration: none;
            }

            .view-item a:hover .view-item__title {
                color: #61c13a;
            }

            .view-item__photo {
                height: 220px;
                overflow: hidden;
            }

            .view-item__photo img {
                height: 100%;
                width: 100%;
                object-fit: cover;
                will-change: transform;
                transition: transform 0.5s cubic-bezier(.02, .74, .29, .64);
            }

            .view-item a:hover .view-item__photo img {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }

            .view-item__title {
                font-size: 20px;
                line-height: 1.15;
                text-decoration: none;
                color: #484848;
                transition-timing-function: linear;
                transition-duration: .3s;
                transition-property: color, background, opacity, border, visibility, box-shadow;
                font-weight: 500;
                padding: 15px;
                max-height: 83px;
                -webkit-line-clamp: 3;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .view-item__text {
                color: #484848;
                font-size: 15px;
                margin-bottom: 0;
                padding: 15px 15px 0;
            }

            .view-item__link {
                display: inline-block;
                padding-bottom: 2px;
                vertical-align: top;
                text-decoration: none;
                color: #61c13a;
                border-bottom: 2px solid #61c13a;
                transition: all 0.3s;
                font-weight: 500;
                font-size: 14px;
                margin: 0 15px;
                position: absolute;
                bottom: 20px;
            }

            @media(max-width: 1200px) {
                .view-item__photo {
                    height: 182px;
                }
            }

            @media (max-width: 1200px) and (min-width: 990px) {
                .view-item {
                    max-height: unset;
                }
            }

            @media(max-width: 991px) {
                .view-item__text {
                    font-size: 13px;
                }

                .view-item__photo {
                    height: 132px;
                }
            }

            @media(max-width: 767px) {
                .view-item__text {
                    text-align: left;
                }

                .view-item__photo {
                    height: 150px;
                }
            }

            @media (max-width: 576px) {
                .view-item__photo {
                    height: 27.8vw;
                }
            }

            @media (max-width: 480px) {
                .views-row {
                    flex: 0 0 100%;
                    max-width: 100%;
                }

                .view-item__photo {
                    height: 57.86vw;
                }

                .view-item__photo img {
                    height: auto;
                    width: 100%;
                }
            }

            @media (max-width: 767px) {
                .view-content {
                    height: auto;
                }
            }

            @media (max-width: 400px) {
                .view-item__photo img {
                    height: 100%;
                    width: auto;
                }
            }



        </style>

        <section class="mass-media section wide-container">
            <div class="">
                <h2 class="mass-media__title section-title">
                    Мы в СМИ
                </h2>

                <span class="mass-media__text">
      Почитайте, что пишут о нас <br>крупнейшие интернет-издания
    </span>

                <style>
                    .smi{
                        position: relative;
                        height: 577px;
                    }
                    .smi > li{
                        position: absolute !important;
                        border-radius: 50%;
                        transition: all 0.3s;
                    }
                    .smi > li:hover{
                        transform: scale(105%);
                    }
                    .smi > li:nth-child(1){left: 58%; top: 31%;}
                    .smi > li:nth-child(2){left: 17%; top: 7%;}
                    .smi > li:nth-child(3){left: 58%; top: 0%;}
                    .smi > li:nth-child(4){left: 81%; top: 30%;}
                    .smi > li:nth-child(5){left: 40%; top: 12%;}
                    .smi > li:nth-child(6){left: 72%; top: 52%;}
                    .smi > li:nth-child(7){left: 63%; top: 74%;}
                    .smi > li:nth-child(8){left: 36%; top: 59%;}
                    .smi > li:nth-child(9){left: 25%; top: 30%;}
                    .smi > li:nth-child(10){left: 71%; top: 7%;}
                    .smi > li:nth-child(11){left: 47.5%; top: 59%;}
                    .smi > li:nth-child(12){left: 31%; top: 0%;}
                    .smi > li:nth-child(13){left: 27%; top: 78%;}
                    .smi > li:nth-child(14){left: 8%; top: 35%;}
                    .smi > li:nth-child(15){left: 16%; top: 63%;}


                    @media (max-width: 1200px) {
                        .smi > li {
                            transform: scale(0.8);
                        }
                        .smi > li:hover{
                            transform: scale(0.9);
                        }
                    }

                    @media (max-width: 1000px) {
                        .smi{
                            margin-bottom: -2rem;
                        }
                        .smi > li {
                            transform: scale(0.8);
                        }
                        .smi > li:hover{
                            transform: scale(0.9);
                        }

                        .smi > li:nth-child(1){left: 54%; top: 45%;}
                        .smi > li:nth-child(2){left: 5%; top: 7%;}
                        .smi > li:nth-child(3){left: 37%; top: 42%;}
                        .smi > li:nth-child(4){left: 81%; top: 30%;}
                        .smi > li:nth-child(5){left: 44%; top: 8%;}
                        .smi > li:nth-child(6){left: 77%; top: 55%;}
                        .smi > li:nth-child(7){left: 63%; top: 74%;}
                        .smi > li:nth-child(8){left: 20%; top: 52%;}
                        .smi > li:nth-child(9){left: 18%; top: 21%;}
                        .smi > li:nth-child(10){left: 73%; top: 0%;}
                        .smi > li:nth-child(11){left: 35%; top: 65%;}
                        .smi > li:nth-child(12){left: 31%; top: 0%;}
                        .smi > li:nth-child(13){left: 20%; top: 78%;}
                        .smi > li:nth-child(14){left: 0%; top: 35%;}
                        .smi > li:nth-child(15){left: 3%; top: 63%;}
                    }
                    @media (max-width: 700px) {
                        .smi{
                            margin-bottom: -4rem;
                        }
                        .smi > li {
                            transform: scale(0.6);
                        }
                        .smi > li:hover{
                            transform: scale(0.6);
                        }
                        .smi > li:nth-child(1){left: 13%; top: 48%;}
                        .smi > li:nth-child(2){left: -5%; top: 0%;}
                        .smi > li:nth-child(3){left: -7%; top: 20%;}
                        .smi > li:nth-child(4){left: 74%; top: 36%;}
                        .smi > li:nth-child(5){left: 36%; top: 9%;}
                        .smi > li:nth-child(6){left: 68%; top: 57%;}
                        .smi > li:nth-child(7){left: 44%; top: 61%;}
                        .smi > li:nth-child(8){left: -7%; top: 40%;}
                        .smi > li:nth-child(9){left: 13%; top: 27%;}
                        .smi > li:nth-child(10){left: 65%; top: 0%;}
                        .smi > li:nth-child(11){left: 41%; top: 38%;}
                        .smi > li:nth-child(12){left: 31%; top: 0%;}
                        .smi > li:nth-child(13){left: 24%; top: 72%;}
                        .smi > li:nth-child(14){left: 14%; top: 12%;}
                        .smi > li:nth-child(15){left: -4%; top: 63%;}
                    }
                </style>

                <ul class="smi">
                    <li><a href="/news/"><img src="/img/p/index/mass-media/1kanal_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/c-news_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/direktor_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/expert_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/forbes_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/free-pressa_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/harvard_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/inc_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/kommersant_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/rbk-pro_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/rbk_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/rb_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/rg_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/secret_new.png"></a></li>
                    <li><a href="/news/"><img src="/img/p/index/mass-media/vc_new.png"></a></li>
                </ul>


                <!--
    <ul class="mass-media__list">
      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/secret.png" alt="">
        </a>
      </li>

      <li class="mass-media__item">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/rb.png" alt="">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/director.png" alt="">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--gray">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/forbes.png" alt="">
        </a>
      </li>

      <li class="mass-media__item">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/rbk.png" alt="">
        </a>
      </li>

      <li class="mass-media__item">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/c-news.png" alt="">
        </a>
      </li>

      <li class="mass-media__item">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/inc.png" alt="">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/vc.png" alt="">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/harvard.png" alt="">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/1kanal.svg" alt="1 канал">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/expert.svg" alt="Эксперт">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/inc.svg" alt="Inc.">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/kommersant.svg" alt="Коммерсант">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/rbk.svg" alt="РБК">
        </a>
      </li>

      <li class="mass-media__item mass-media__item--turquoise">
        <a href="/news/" class="mass-media__lnk" target="_blank">
          <img class="mass-media__img" src="/img/p/index/mass-media/rg.svg" alt="RG">
        </a>
      </li>


    </ul>
    -->


            </div>
        </section><div class="main-header node-100 wide-container index-videoblock" xmlns="http://www.w3.org/1999/html">
            <div class="main-header__video">
                <div class="container" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
      <span itemprop="name">
        вовлечённость сотрудников
      </span>
                    <video playsinline autoplay muted loop class="main-header__vd" poster="/videos/indextop.jpg" id="headerVideoD">
                        <source src="/videos/indextop.mp4" type="video/mp4">
                        <source src="/videos/indextop.webm" type="video/webm">
                    </video>
                    <video playsinline autoplay muted loop class="main-header__vmob" id="headerVideoM">
                        <source src="/videos/indextop_mob.webm" type="video/webm">
                        <source src="/videos/indextop_mob.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="slider slick-slider-main">
                <div class="hero hero-2">
                    <div class="container">
                        <div class="hero-center-wrap">
                            <h2>
                                Digital-платформа, <br>
                                <span class="hero-2__h1slider">
                <span>которая помогает <br> повысить <strong>вовлечённость <br> и лояльность </strong> команды <i>  </i></span>
                <span>которая сделала <br> <strong>опросы персонала <br>интересными</strong> <i>98% удовлетворённость респондентов</i></span>
                <span>в которой <strong>каждый <br>голос будет услышан</strong> <i>100% гарантия анонимности</i></span>
                <span>которая предлагает <br><strong> понятные отчеты </strong><br> и <strong>свежие бенчмарки </strong> <i>32 отраслей с 75% участием</i></span>
                <span>в которой каждый <br>руководитель работает <br>над <strong>развитием команды</strong> <i>800+ компаний уже с нами</i></span>
                <span>в которой все включено, <br>и это <strong>экономит ваши <br>ресурсы</strong> в 2.5 раза <i></i></span>
              </span>
                                <br>
                            </h2>
                            <div class="intro-footer">
                                <a class="button-default" data-fancybox data-src="#main-modal" href="javascript:;" onclick="ym(46152993,'reachGoal','mainpage_click_button')">
                                    Получить консультацию
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .index-videoblock{
                margin-bottom: -3rem;
            }
            @media (max-width: 576px) {
                .index-videoblock.node-100 .hero.hero-2 h1,
                .index-videoblock.node-100 .hero.hero-2 h2{
                    padding-top: 20px;
                    font-size: 28px;
                }
                .index-videoblock.node-100 .hero.hero-2 h1 strong,
                .index-videoblock.node-100 .hero.hero-2 h2 strong{
                    font-size: 28px;
                }
                .index-videoblock{
                    padding-bottom: 3rem;
                }
            }
        </style>


    </main>

</div>

<!-- endrender index/-->

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
                                            <img src="/img/happy-job/reviews/obi.png" loading="lazy" alt="">
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
                                            <img src="/img/happy-job/reviews/aliexpress-logo_0.png" loading="lazy" alt="">
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
                                            <img src="/img/happy-job/reviews/alfa.png" loading="lazy" alt="">
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
                                            <img src="/img/happy-job/reviews/europlan-1.png" loading="lazy" alt="">
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
                                            <img src="/img/happy-job/reviews/skyeng.svg" loading="lazy" alt="">
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
                                            <img src="/img/happy-job/reviews/ingo_0.png" loading="lazy" alt="">
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



