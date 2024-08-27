<?php $this->title = 'Алексей Клочков - эксперт в области развития вовлеченности персонала | Happy Job'; ?>



<div class="container mainc">
    <main>
        <style>
            .about-author-intro{
                padding-top: 55px;
                background-color: #f1f2f6;
            }
            .breadcrumbs-list:after{
                display: none !important;
            }
            .about-author-intro__blocks{
                position: relative;
                margin-top: 36px;
            }
            .about-author-intro__left-block{
                position: relative;
                z-index: 1;
                padding-bottom: 97px;
            }
            .about-author-intro__title{
                margin: 0;
                font-size: 42px;
                font-weight: 800;
            }
            .about-author-intro__title span{
                display: inline-block;
                padding: 5px 13px 7px;
                font-size: 16px;
                font-weight: 600;
                background-color: var(--c-link);
                color: #ffffff;
                transform: translateY(-7px);
            }
            .about-author-intro__description{
                margin-top: 50px;
                max-width: 470px;
            }
            .about-author-intro__right-block{
                position: absolute;
                bottom: 0;
                right: -10px;
                z-index: 0;
                width: 53%;
            }
            /**/
            .about-author-professional-activity{
                padding: 45px 0 52px;
            }
            .about-author-professional-activity__title{
                text-align: center;
                margin-bottom: 27px;
            }
            .about-author-professional-activity__list {
                position: relative;

            }
            .about-author-professional-activity__list .divider{
                position: absolute;
                background-color: black;
                width: 1px;
                top: 56px;
                bottom: 0;
                left: 243px;
            }
            .about-author-professional-activity__block{
                position: relative;
                display: flex;
                justify-content: flex-start;

            }
            .about-author-professional-activity__year{
                min-width: 243px;
                font-size: 25px;
                font-weight: 900;
            }
            .about-author-professional-activity__year span{
                font-size: 41px;
            }
            .about-author-professional-activity__icon{
                flex: 0 0 37px;
                text-align: center;
                background-color: #ffffff;
                transform: translateX(-50%);
                margin-top: 19px;
                width: 37px;
                height: 37px;
            }
            .about-author-professional-activity__icon.icon-briefcase-author img{
                max-width: 30px;
            }
            .about-author-professional-activity__icon.icon-book-author img{
                max-width: 35px;
            }
            .about-author-professional-activity__icon img {
                position: relative;
                aspect-ratio: 1 / 1;
            }
            .about-author-professional-activity__content{
                position: relative;
                padding-bottom: 33px;
                padding-top: 24px;
                padding-left: 17px;
                z-index: 3;
            }
            .about-author-professional-activity__text{
                flex: 0 0 750px;
                max-width: 750px;
            }
            .about-author-professional-activity__text p{
                margin-bottom: 1.5rem;
            }
            .about-author-professional-activity__text p b{
                color: #333;
            }
            .about-author-professional-activity__text p a{
                transition: all 0.3s;
            }
            .about-author-professional-activity__text p a:hover{
                color: #484848;
            }
            .about-author-professional-activity__bottom-content{
                display: flex;
                align-items: center;
            }
            .about-author-professional-activity__img{
                position: relative;
            }
            .about-author-professional-activity__mini-content{
                position: relative;
                border-left: 4px solid var(--c-link);
                padding-left: 17px;
            }
            .about-author-professional-activity__block .about-author-professional-activity__mini-content span {
                font-size: 25px;
                line-height: 1.2;
                font-weight: 500;
            }
            .about-author-professional-activity__block:nth-child(5) .about-author-professional-activity__text{
                margin-bottom: 70px;
            }
            .about-author-professional-activity__block:nth-child(6){
                margin-bottom: -10px;
            }
            .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__mini-content{
                margin-left: 18px;
                transform: translate(17%, 10%);
                max-width: 250px;
            }
            .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__img{
                width: 75%;
                margin-left: -85px;
                margin-top: 42px;
            }
            .about-author-professional-activity__block:nth-child(7) .about-author-professional-activity__img{
                width: 40%;
                margin-top: 48px;
                transform: translateX(20%);
            }
            .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__img{
                width: 78%;
                transform: translate(-17%, 9%);
                margin-top: -25px;
            }
            .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__mini-content{
                transform: translate(-40%, 10%);
                width: 302px;
            }
            .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__rating{
                display: inline-block;
                transform: translateY(5px);
                font-size: 30px;
            }
            .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__mini-content img{
                max-width: 140px;
                position: absolute;
                bottom: 0px;
                left: 107px;
            }
            .about-author-professional-activity__block:last-child::after{
                content: "";
                position: absolute;
                width: 30px;
                top: 0;
                bottom: 56px;
                left: 243px;
                background-color: #ffffff;
                transform: translate(-50%, 56px);
            }
            /**/
            .about-author-banner {
                margin-top: 33px;
                padding-top: 92px;
                padding-bottom: 70px;
                margin-bottom: 87px;
                background: rgb(250,248,251);
                background: -moz-linear-gradient(left,  rgba(250,248,251,1) 0%, rgba(243,244,246,1) 100%);
                background: -webkit-linear-gradient(left,  rgba(250,248,251,1) 0%,rgba(243,244,246,1) 100%);
                background: linear-gradient(to right,  rgba(250,248,251,1) 0%,rgba(243,244,246,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#faf8fb', endColorstr='#f3f4f6',GradientType=1 );
            }
            .about-author-banner__top-block{
                position: relative;
                margin-bottom: 75px;
            }
            .about-author-banner__top-block::after{
                content: "";
                display: block;
                position: absolute;
                right: -7%;
                top: -18px;
                z-index: 0;
                width: 37%;
                max-width: 37%;
                height: 372px;
                background-image: url("/img/about-author/banner-img.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
            }
            .about-author-banner__content{
                position: relative;
                z-index: 1;
                max-width: 750px;
            }
            .about-author-banner__title{
                margin-bottom: 10px;
                font-size: 25px;
                font-weight: 900;
            }
            .about-author-banner__title span{
                font-size: 41px;
            }
            .about-author-banner__content p{
                margin-bottom: 2rem;
            }
            .about-author-banner__bottom-block{
                display: flex;
                justify-content: space-between;
            }
            .about-author-banner__number{
                word-spacing: -0.3rem;
                font-size: 65px;
                font-weight: 300;
            }
            .about-author-banner__text{
                padding: 0 3px;
                font-size: 31px;
                font-weight: 300;
                margin-top: -14px;
                line-height: 1.3;
            }
            .gallery-wrapper {
                margin: 87px 0 125px;
                position: relative;
                height: 250px;
            }
            .gallery-wrapper .slick-arrow{
                display: none !important;
            }
            .gallery {
                position: absolute;
                left: calc((100vw - 1120px) / 2 * (-1));
                width: 100vw;
                height: 100%;
                background: #f6f6f6;
                height: 250px;
                overflow: hidden;
            }

            .about-author-articles{
                background-color: #f9f9f9;
                padding: 40px 0 57px;
            }
            .about-author-articles__title{
                text-align: center;
                margin-bottom: 32px;
            }
            /* about-author-articles__sliders */
            .about-author-articles__sliders {
                background: url("/img/about-author/slider-loader.gif") center center no-repeat;
                background-size: 20px 20px;
            }
            .about-author-articles__sliders > * {
                opacity: 0;
            }
            .about-author-articles__sliders.slick-initialized {
                background: none;
            }
            .about-author-articles__sliders.slick-initialized > * {
                opacity: initial;
            }
            .about-author-articles__item {
                padding-right: 15px;
                padding-left: 15px;
            }
            .about-author-articles__item .views-field-body .field-content {
                max-height: 220px;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .about-author-articles__item .views-row-container {
                min-height: 400px;
            }
            .about-author-articles__item .views-field-body{
                padding: 15px 15px 0;
            }
            .about-author-articles__item .views-field-field-prevu-foto img {
                width: calc(100% - 6rem);
                height: 120px;
                object-fit: scale-down;
                margin: 1rem;
            }
            .about-author-articles__sliders .slick-dots button {
                width: 12px;
                height: 12px;
                min-width: 12px;
            }
            .about-author-articles__sliders .slick-dots button:hover{
                box-shadow: none;
                background-color: #dcdddf;
            }
            .about-author-articles__sliders .slick-dots button{
                padding: 0;
                outline: none;
            }
            .about-author-articles__sliders .slick-dots .slick-active button{
                background-color: #47657d;
                transform: scale(1.4);
            }
            .about-author-articles__arrow{
                position: absolute;
                z-index: 1;
                padding: 0;
                border: none;
                background-color: transparent;
                top: 29.5%;
                width: 70px;
                height: 70px;
                cursor: pointer;
            }
            .about-author-articles__arrow:focus{
                outline: none;
            }
            .about-author-articles__arrow-prev{
                left: -116px;
                transform: scale(-1,1);
            }
            .about-author-articles__arrow-next{
                right: -116px;
            }
            .about-author-articles__arrow svg{
                fill: #47657d;
                display: block;
                width: 100%;
                height: 100%;
                transition: transform 0.3s;
            }
            .about-author-articles__arrow:hover svg{
                transform: translateX(8%);
            }

            /**/
            .videos{
                box-shadow: none !important;
            }

            /* gallery */
            @media (max-width: 1199px) and (min-width: 992px) {
                .gallery {
                    height: 200px;
                }
            }
            @media (max-width: 991px) and (min-width: 768px) {
                .gallery {
                    height: 165px;
                }
            }
            @media (max-width: 768px) and (min-width: 576px) {
                .gallery {
                    height: 200px;
                }
            }
            @media (max-width: 575px) {
                .gallery {
                    height: 200px;
                }
            }
            .slider-photo img {
                width: 100%;
                /* Ширина изображений */
                height: 100%;
                /* Высота изображении */
                object-fit: cover;
                /* Вписываем фотографию в область */
            }
            @media (max-width: 1600px) {
                .slider-photo {
                    height: 245px;
                }
            }
            @media (max-width: 1550px) {
                .slider-photo {
                    height: 250px;
                }
            }
            @media (max-width: 1400px) {
                .slider-photo {
                    height: 200px;
                }
            }
            /**/
            @media(max-width: 1340px){
                .about-author-articles__arrow-next{
                    right: -50px;
                }
                .about-author-articles__arrow-prev{
                    left: -50px;
                }
                .about-author-articles__arrow{
                    width: 60px;
                    height: 60px;
                }
            }

            @media(max-width: 1200px){
                .about-author-professional-activity__block .about-author-professional-activity__mini-content span{
                    font-size: 22px;
                }
                about-author-professional-activity__img{
                    position: relative;
                }
                .about-author-banner__content{
                    max-width: 650px;
                }
                .gallery-wrapper{
                    margin: 80px 0;
                }
                .about-author-articles wide-container .slick-dots {
                    bottom: 10px;
                }
                .reviews-slider.slick-slider.slick-dotted {
                    padding-bottom: 2rem;
                }
                .reviews-slider .slick-dots {
                    flex-wrap: wrap;
                    bottom: 0;
                }
                /**/
                .about-author-articles__arrow{
                    width: 45px;
                    height: 45px;
                }
            }
            @media(max-width: 1024px){
                .about-author-intro__description {
                    max-width: 415px;
                    margin-top: 30px;
                }
                .about-author-intro__right-block{
                    width: 590px;
                    right: -100px;
                }
                .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__img {
                    width: 65%;
                    margin-left: -60px;
                }
                .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__mini-content {
                    margin-left: 7px;
                    padding-right: 5px;
                }
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__rating {
                    font-size: 27px;
                }
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__img {
                    width: 100%;
                    transform: translate(-25%, 9%);
                }
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__mini-content {
                    transform: translate(-90px, 10%);
                    width: 330px;
                }
                .about-author-banner__top-block::after{
                    display: none;
                }
                .about-author-banner__content {
                    max-width: 100%;
                }
                .about-author-banner__top-block{
                    margin-bottom: 55px;
                }
                .about-author-banner__text {
                    font-size: 55px;
                }
                .about-author-banner__text {
                    font-size: 27px;
                }
                .gallery-wrapper{
                    margin: 50px 0;
                }
                .about-author-articles__arrow-next{
                    right: -35px;
                }
                .about-author-articles__arrow-prev{
                    left: -35px;
                }
            }

            @media (max-width: 992px){
                .about-author-articles__arrow{
                    width: 40px;
                    height: 40px;
                }
            }

            @media(max-width: 860px){
                .about-author-intro__left-block{
                    padding-bottom: 0;
                }
                .about-author-intro__right-block{
                    position: relative;
                    width: 130%;
                    right: 40%
                }
                .about-author-professional-activity__icon{
                    display: none;
                }
                .about-author-professional-activity__list .divider{
                    display: none;
                }
                .about-author-professional-activity__block:last-child::after{
                    display: none;
                }
                .about-author-professional-activity__block{
                    flex-direction: column;
                }
                .about-author-professional-activity__block:nth-child(7) .about-author-professional-activity__img{
                    width: 50%;
                    margin: 45px auto;
                    transform: none;
                }
                .about-author-banner__bottom-block{
                    flex-wrap: wrap;
                }
                .about-author-banner__info-block{
                    width: 50%;
                }
                .about-author-banner__info-block:first-child{
                    margin-bottom: 30px;
                }
                .about-author-banner__info-block:nth-child(2){
                    margin-bottom: 30px;
                }
                .about-author-banner__number{
                    font-size: 55px;
                }
            }

            @media (max-width: 850px) {
                .footervideo__slider-arrow {
                    display: none;
                }
            }

            @media (max-width: 768px) {
                .about-author-articles__item .views-field-body .field-content {
                    line-height: 1.2;
                    font-size: 13px;
                }
                .gallery-wrapper{
                    margin: 0;
                }
            }

            @media(max-width: 575px){
                .about-author-intro__title{
                    font-size: 30px;
                }
                .about-author-intro__title span {
                    transform: translateY(5px);
                }
                .about-author-intro__description{
                    margin-top: 35px;
                    width: 100%;
                }
                .about-author-professional-activity__bottom-content{
                    flex-wrap: wrap;
                    flex-direction: column;
                    align-items: flex-start;
                    padding-bottom: 15px;
                }
                .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__mini-content,
                .about-author-professional-activity__block:nth-child(7) .about-author-professional-activity__img,
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__mini-content,
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__img{
                    transform: none;
                }
                .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__img{
                    margin-right: 0;
                    width: 100%;
                }
                .about-author-professional-activity__block:nth-child(6) .about-author-professional-activity__mini-content{
                    max-width: 100%;
                }
                .about-author-professional-activity__block:nth-child(7) .about-author-professional-activity__img{
                    width: 70%;
                }
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__img{
                    margin-top: 15px;
                }
                .about-author-professional-activity__content{
                    padding: 15px 0;
                }
                .about-author-intro__right-block{
                    width: 100%;
                    right: 0;
                }
                .about-author-professional-activity__img{
                    width: 100%;
                }
                .about-author-banner{
                    padding-top: 70px;
                    padding-bottom: 70px;
                }
                .about-author-banner__info-block:first-child{
                    margin-bottom: 0;
                }
                .about-author-banner__info-block:nth-child(2){
                    margin-bottom: 0;
                }
                .about-author-banner__info-block{
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                .about-author-banner__info-block:not(:last-child){
                    margin-bottom: 30px;
                }
                .about-author-banner__info-block .about-author-banner__text{
                    text-align: center;
                }
                .about-author-articles__sliders .slick-dots li {
                    margin: 3px 5px;
                }
                .about-author-articles__sliders .slick-dots{
                    max-width: 175px;
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                    margin: 0 auto 20px;
                }
                .about-author-articles__sliders .slick-dots button {
                    width: 10px;
                    height: 10px;
                    opacity: 1;
                    transition: transform 0.2s linear;
                    z-index: 3;
                }
                .about-author-articles__arrow{
                    width: 37px;
                    height: 37px;
                    top: calc(92%)
                }
                .about-author-articles__arrow.about-author-articles__arrow-next{
                    right: 10px;
                }
                .about-author-articles__arrow.about-author-articles__arrow-prev{
                    left: 10px;
                }
            }

            @media(max-width: 400px){
                .about-author-intro__right-block{
                    min-width: 100%;
                }
                .about-author-professional-activity__year span{
                    font-size: 37px;
                }
                .about-author-professional-activity__block .about-author-professional-activity__mini-content span{
                    font-size: 20px;
                }
                .about-author-professional-activity__block:nth-child(7) .about-author-professional-activity__img{
                    width: 100%;
                }
                .about-author-professional-activity__block:nth-child(9) .about-author-professional-activity__rating{
                    font-size: 24px;
                }
                .about-author-banner__title span{
                    font-size: 37px;
                }
                .about-author-banner__number{
                    font-size: 45px;
                }
                .about-author-banner__text{
                    font-size: 25px;
                }
            }

            /**/

            @media (any-hover: hover){
                .about-author-articles__sliders .slick-dots button:hover {
                    transform: scale(1.4);
                    background-color: #47657d;
                }
            }
        </style>

        <section class="about-author-intro wide-container">
            <div class="container">
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
                        <ul class="breadcrumbs-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">

                                <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
                                </a>

                                <meta itemprop="position" content="1">
                            </li>











                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">

                                <span itemprop="name">Алексей Клочков</span>

                                <meta itemprop="position" content="3">
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="about-author-intro__blocks">
                    <div class="about-author-intro__left-block">
                        <h1 class="about-author-intro__title">Привет! <br> Я – Алексей Клочков <br> <span>основатель компании Happy&nbsp;Job.</span></h1>
                        <p class="about-author-intro__description">Мне 45 лет, 24 из которых я работаю в&nbsp;HR и&nbsp;управленческом консалтинге, а последние семь лет руковожу HR Tech компанией Happy&nbsp;Job.</p>
                    </div>

                    <div class="about-author-intro__right-block">
                        <img src="/img/about-author/author-intro.png" alt="Алексей Клочков">
                    </div>
                </div>
            </div>
        </section>

        <section class="about-author-professional-activity wide-container">
            <div class="container">
                <h2 class="about-author-professional-activity__title">Профессиональная деятельность</h2>

                <section class="about-author-professional-activity__list">
                    <div class="divider"></div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2001</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-hat-author">
                            <img src="/img/about-author/icon-hat.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>я окончил магистратуру Финансовой академии при правительстве РФ и начал профессиональную карьеру в крупнейшем  телекоммуникационном холдинге — сначала экономистом, а через три месяца — руководителем отдела стратегического и бюджетного планирования.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">

                            </div>
                        </div>
                    </div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2003</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-briefcase-author">
                            <img src="/img/about-author/icon-briefcase.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>уже внедрял по всей стране бюджетирование, управленческий учет и другие сложные интеграционные решения с помощью BI технологий и автоматизации, как руководитель проектов в крупнейшей консалтинговой компании России.</p>
                                <p>Так удалось быстро приобрести большой консалтинговый, проектный и управленческий опыт, что подтверждено рядом профессиональных международных сертификатов.</p>
                                <p>Член PMI EMEA, международного сообщества фасилитаторов, сертифицированный тренер BSC.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">

                            </div>
                        </div>
                    </div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2006</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-briefcase-author">
                            <img src="/img/about-author/icon-briefcase.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>начал преподавать экономические специальности в ведущих вузах страны. Опыт и амбиции подтолкнули меня к созданию собственной консалтинговой компании. Так появилось консалтинговое агентство <b>First Training Group</b> (владелец международного товарного знака Happy Job).</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">

                            </div>
                        </div>
                    </div>

                    <div class="about-author-banner wide-container">
                        <div class="container">
                            <div class="about-author-banner__top-block">
                                <div class="about-author-banner__content">
                                    <div class="about-author-banner__title">
                                        c <span>2001</span> по <span>2014</span>
                                    </div>

                                    <p>реализовывал консалтинговые проекты по внедрению изменений, систем оценки и мотивации персонала, развития вовлеченности,стратегического, процессного и проектного менеджмента и разработал множество методик, ставших хитами в HR-среде.</p>
                                    <p>Проведено <b>более чем 1300 стратегических сессий</b>, фасилитационных workshop, тренингов по авторской методике формулирования целей, KPI и бизнес-стратегии с применением BSC, инновационной методики оценки эффективности персонала, правилам моделирования процессов и др.</p>
                                </div>
                            </div>
                            <div class="about-author-banner__bottom-block">
                                <div class="about-author-banner__info-block">
                                    <div class="about-author-banner__number">
                                        150 +
                                    </div>
                                    <p class="about-author-banner__text">
                                        реализованных<br>проектов
                                    </p>
                                </div>
                                <div class="about-author-banner__info-block">
                                    <div class="about-author-banner__number">
                                        34 000 +
                                    </div>
                                    <p class="about-author-banner__text">
                                        участников тренингов,<br>сессий, workshop
                                    </p>
                                </div>
                                <div class="about-author-banner__info-block">
                                    <div class="about-author-banner__number">
                                        49
                                    </div>
                                    <p class="about-author-banner__text">
                                        городов
                                    </p>
                                </div>
                                <div class="about-author-banner__info-block">
                                    <div class="about-author-banner__number">
                                        11
                                    </div>
                                    <p class="about-author-banner__text">
                                        стран
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2010</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-book-author">
                            <img src="/img/about-author/icon-book.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>в издательстве «Эксмо» была опубликована моя книга <b>«KPI и мотивация персонала»</b> (ISBN: 978-5-699-46746-4), которая быстро стала популярной, вошла в HR-библиотеку России и стала издаваться в сборнике <b>«Лучшие книги по управлению персоналом»</b>.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">
                                <div class="about-author-professional-activity__img">
                                    <img src="/img/about-author/author-books.png" alt="Книги по управлению персоналом - автор Алексей Клочков">
                                </div>

                                <div class="about-author-professional-activity__mini-content">
                                    <span>Серия<br>«HR-библиотека России»</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2017</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-briefcase-author">
                            <img src="/img/about-author/icon-briefcase.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>после нескольких лет разработки стартовала платформа Happy Job и привнесла в индустрию исследований современные технологии обработки данных, продуманный UX, дизайн-мышление и геймификацию.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">
                                <div class="about-author-professional-activity__img">
                                    <img src="/img/happy-job/images/logo.svg" alt="Happy Job">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-wrapper wide-container">
                        <div class="gallery gallery--desktop wide-container ">
                            <div class="slider-photo slick-initialized slick-slider"><div class="slider-photo__arrow slider-photo__prev slick-arrow" style="display: block;"><svg><use xlink:href="#videoArrow"></use></svg></div>
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 20000px; transform: translate3d(-3252px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/2.png" title="150 консалтинговых проектов по внедрению изменений, систем оценки и мотивации персонала, стратегического, процессного и проектного менеджмента." alt="First Training Group">
                                        </div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/3.png" title="Графическая фасилитация, когнитивная психология, инструменты и практики визуального дизайна и дизайн-мышления" alt="Онлайн-платформа по исследованию и развитию вовлечённости">
                                        </div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/4.png" title="KPI и мотивация персонала" alt="Управленческий консалтинг">
                                        </div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/1.png" title="digital-платформа для управления опытом сотрудников и клиентов" alt="Платформа Happy Job">
                                        </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/2.png" title="150 консалтинговых проектов по внедрению изменений, систем оценки и мотивации персонала, стратегического, процессного и проектного менеджмента." alt="First Training Group">
                                        </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/3.png" title="Графическая фасилитация, когнитивная психология, инструменты и практики визуального дизайна и дизайн-мышления" alt="Онлайн-платформа по исследованию и развитию вовлечённости">
                                        </div><div class="slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0">
                                            <img src="/img/about-author/4.png" title="KPI и мотивация персонала" alt="Управленческий консалтинг">
                                        </div><div class="slick-slide slick-cloned slick-active" data-slick-index="4" id="" aria-hidden="false" tabindex="-1">
                                            <img src="/img/about-author/1.png" title="digital-платформа для управления опытом сотрудников и клиентов" alt="Платформа Happy Job">
                                        </div><div class="slick-slide slick-cloned slick-active" data-slick-index="5" id="" aria-hidden="false" tabindex="-1">
                                            <img src="/img/about-author/2.png" title="150 консалтинговых проектов по внедрению изменений, систем оценки и мотивации персонала, стратегического, процессного и проектного менеджмента." alt="First Training Group">
                                        </div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/3.png" title="Графическая фасилитация, когнитивная психология, инструменты и практики визуального дизайна и дизайн-мышления" alt="Онлайн-платформа по исследованию и развитию вовлечённости">
                                        </div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1">
                                            <img src="/img/about-author/4.png" title="KPI и мотивация персонала" alt="Управленческий консалтинг">
                                        </div></div></div>



                                <div class="slider-photo__arrow slider-photo__next slick-arrow" style="display: block;"><svg><use xlink:href="#videoArrow"></use></svg></div></div>
                        </div>
                    </div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2021</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-book-author">
                            <img src="/img/about-author/icon-book.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>вышла моя вторая книга <b><a href="/vovlechennost-i-loyalnost-personala-ot-do-ya/">«Вовлечённость и лояльность персонала от А до Я»</a></b> издательство ЭКСМО, в основу которой легли результаты самых масштабных исследований лаборатории Happy Job в России.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">
                                <div class="about-author-professional-activity__img">
                                    <img src="/img/about-author/author-book.png" alt="Книга по управлению персоналом - автор Алексей Клочков">
                                </div>

                                <div class="about-author-professional-activity__mini-content">
                                    <span><span>Книжный рейтинг</span> <br> <span class="about-author-professional-activity__rating">4.8/5</span></span>

                                    <img src="/img/about-author/stars.png" alt="Рейтинг">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-author-professional-activity__block">
                        <div class="about-author-professional-activity__year">
                            в <span>2023</span> году
                        </div>
                        <div class="about-author-professional-activity__icon icon-briefcase-author">
                            <img src="/img/about-author/icon-briefcase.svg">
                        </div>
                        <div class="about-author-professional-activity__content">
                            <div class="about-author-professional-activity__text">
                                <p>платформа Happy Job стала лидером индустрии и внедрила  разделенные анкеты для сотрудников в офисе/вне офиса, а также бенчмарки по функциям.</p>
                            </div>

                            <div class="about-author-professional-activity__bottom-content">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="about-author-articles wide-container">
            <div class="container">
                <h2 class="about-author-articles__title"></h2>

                <div class="container">
                    <div class="views-id-blog">
                        <div class="about-author-articles__sliders slick-initialized slick-slider slick-dotted"><button type="button" class="slick-prev about-author-articles__arrow about-author-articles__arrow-prev slick-arrow" style=""><svg><use xlink:href="#videoArrow"></use></svg></button>
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 8850px; transform: translate3d(-2124px, 0px, 0px);"><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Как провести опрос в кризис." src="/img/about-author/article-4.png" alt="Как провести опрос в кризис."></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Не останавливайте опросы вовлечённости и удовлетворенности персонала. Это часть стратегии выживания в кризис. В статье найдете алгоритм, который поможет сэкономить на опросе 600 000 руб.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. О рисках, которые несет лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия." src="/img/about-author/article-5.png" alt="Harvard Business Review"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. Орисках, которые несёт лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Rusbase как сегодня можно провести исследование вовлечённости в компании" src="/img/about-author/article-1.png" alt="Rusbase"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию RUSBASE, как сегодня можно провести исследования вовлечённости в компании.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://pro.rbc.ru/news/632c25a09a7947ff1ece7023" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию РБК Pro для каких отраслей свойственно явление презентеизм" src="/img/about-author/alexreypro.png" alt="RBK Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию РБК Pro для каких отраслей свойственно явление презентеизм, о его влиянии на продуктивность сотрудников, а также, об инструментах борьбы с презентеизмом.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://pro.rbc.ru/news/632c25a09a7947ff1ece7023" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://www.forbes.ru/society/452679-degradacia-unizenie-i-ekspluatacia-pocemu-molodye-gorozane-voznenavideli-rabotu" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Forbes почему в мире набирает популярность движение Antiwork" src="/img/about-author/forbes.png" alt="Forbes"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию Forbes почему в мире набирает популярность движение Antiwork
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://www.forbes.ru/society/452679-degradacia-unizenie-i-ekspluatacia-pocemu-molodye-gorozane-voznenavideli-rabotu" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://hbr-russia.ru/management/upravlenie-personalom/860450/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Harvard Business Review Россия почему компаниям важно знать кому или чему на самом деле лояльны сотрудники - организации в целом или руководителю" src="/img/about-author/article-2.png" alt="Harvard Business Review"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию Harvard Business Review Россия, почему компаниям нужно знать,чему или кому на самом деле лояльны сотрудники — организации в целом или руководителю.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://hbr-russia.ru/management/upravlenie-personalom/860450/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control11" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/Publikaciya--Aleksey-Klochkov-dlya-zhurnala-RBK-Pro--Pochemu-sotrudniki-pokidayut-krupnye-kompanii-s-silnym-HR-brendom/" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                                                            <img class="full" title="Алексей Клочков рассказал журналу РБК Pro почему сотрудники покидают компанию с сильным HR-брендом" src="/img/about-author/alexreypro.png" alt="РБК Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал журналу РБК Pro почему сотрудники покидают крупные компании с сильным HR-брендом.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/Publikaciya--Aleksey-Klochkov-dlya-zhurnala-RBK-Pro--Pochemu-sotrudniki-pokidayut-krupnye-kompanii-s-silnym-HR-brendom/" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide14" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://www.forbes.ru/svoi-biznes/444573-krizis-tret-ego-goda-kogda-loal-nost-personala-dostigaet-minimuma-i-kak-s-etim-byt" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                                                            <img class="full" title="Почему лояльность сотрудников достигает минимума к третьему году работа в компании и что с этим делать" src="/img/about-author/forbes.png" alt="Forbes"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Почему лояльность сотрудников достигает минимума к третьему году работы в компании и что с этим делать — в статье Алексея Клочкова для журнала Forbes.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://www.forbes.ru/svoi-biznes/444573-krizis-tret-ego-goda-kogda-loal-nost-personala-dostigaet-minimuma-i-kak-s-etim-byt" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide15" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://Jobrussia.ru/understand/productivity-remote-work/" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                                                            <img class="full" title="Культура счастья: как помочь сотрудникам почувствовать удовлетворение от жизни и работы" src="/img/about-author/article-3.png" alt="Job."></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Четверо из пяти предпринимателей в России заметили, что эффективность их команд на удалёнке упала. Почему так вышло и что с этим делать — в статье Алексея для журнала Job.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://Jobrussia.ru/understand/productivity-remote-work/" target="_blank" rel="noopener" hreflang="ru" tabindex="0">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide16" aria-describedby="slick-slide-control12" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://pro.rbc.ru/news/62da6ce19a7947584be1ece2" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал о семи маркерах кризиса в компании" src="/img/about-author/alexreypro.png" alt="RBK Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал о семи маркерах кризиса в компании
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://pro.rbc.ru/news/62da6ce19a7947584be1ece2" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide17" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/publikacii_aleksej_klochkov_dlya_zhurnala_direktor_po_personalu/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Чтобы повысить продуктивность сотрудников на удаленке, необходимо спросить кто и что мешает им работать. Как это сделать - в статье Алексея Клочкова журналу" src="/img/about-author/article-4.png" alt="Директор по персоналу"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Чтобы повысить продуктивность сотрудников на удалёнке, необходимо спросить, кто и что мешает им работать. Как это сделать — в статье Алексея Клочкова для издания «&lrm;Директор по персоналу»&lrm;
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/publikacii_aleksej_klochkov_dlya_zhurnala_direktor_po_personalu/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide18" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Как провести опрос в кризис." src="/img/about-author/article-4.png" alt="Как провести опрос в кризис."></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Не останавливайте опросы вовлечённости и удовлетворенности персонала. Это часть стратегии выживания в кризис. В статье найдете алгоритм, который поможет сэкономить на опросе 600 000 руб.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide19" aria-describedby="slick-slide-control13" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. О рисках, которые несет лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия." src="/img/about-author/article-5.png" alt="Harvard Business Review"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. Орисках, которые несёт лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide110" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Rusbase как сегодня можно провести исследование вовлечённости в компании" src="/img/about-author/article-1.png" alt="Rusbase"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию RUSBASE, как сегодня можно провести исследования вовлечённости в компании.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://pro.rbc.ru/news/632c25a09a7947ff1ece7023" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию РБК Pro для каких отраслей свойственно явление презентеизм" src="/img/about-author/alexreypro.png" alt="RBK Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию РБК Pro для каких отраслей свойственно явление презентеизм, о его влиянии на продуктивность сотрудников, а также, об инструментах борьбы с презентеизмом.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://pro.rbc.ru/news/632c25a09a7947ff1ece7023" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://www.forbes.ru/society/452679-degradacia-unizenie-i-ekspluatacia-pocemu-molodye-gorozane-voznenavideli-rabotu" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Forbes почему в мире набирает популярность движение Antiwork" src="/img/about-author/forbes.png" alt="Forbes"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию Forbes почему в мире набирает популярность движение Antiwork
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://www.forbes.ru/society/452679-degradacia-unizenie-i-ekspluatacia-pocemu-molodye-gorozane-voznenavideli-rabotu" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://hbr-russia.ru/management/upravlenie-personalom/860450/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Harvard Business Review Россия почему компаниям важно знать кому или чему на самом деле лояльны сотрудники - организации в целом или руководителю" src="/img/about-author/article-2.png" alt="Harvard Business Review"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию Harvard Business Review Россия, почему компаниям нужно знать,чему или кому на самом деле лояльны сотрудники — организации в целом или руководителю.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://hbr-russia.ru/management/upravlenie-personalom/860450/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/Publikaciya--Aleksey-Klochkov-dlya-zhurnala-RBK-Pro--Pochemu-sotrudniki-pokidayut-krupnye-kompanii-s-silnym-HR-brendom/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал журналу РБК Pro почему сотрудники покидают компанию с сильным HR-брендом" src="/img/about-author/alexreypro.png" alt="РБК Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал журналу РБК Pro почему сотрудники покидают крупные компании с сильным HR-брендом.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/Publikaciya--Aleksey-Klochkov-dlya-zhurnala-RBK-Pro--Pochemu-sotrudniki-pokidayut-krupnye-kompanii-s-silnym-HR-brendom/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://www.forbes.ru/svoi-biznes/444573-krizis-tret-ego-goda-kogda-loal-nost-personala-dostigaet-minimuma-i-kak-s-etim-byt" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Почему лояльность сотрудников достигает минимума к третьему году работа в компании и что с этим делать" src="/img/about-author/forbes.png" alt="Forbes"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Почему лояльность сотрудников достигает минимума к третьему году работы в компании и что с этим делать — в статье Алексея Клочкова для журнала Forbes.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://www.forbes.ru/svoi-biznes/444573-krizis-tret-ego-goda-kogda-loal-nost-personala-dostigaet-minimuma-i-kak-s-etim-byt" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://Jobrussia.ru/understand/productivity-remote-work/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Культура счастья: как помочь сотрудникам почувствовать удовлетворение от жизни и работы" src="/img/about-author/article-3.png" alt="Job."></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Четверо из пяти предпринимателей в России заметили, что эффективность их команд на удалёнке упала. Почему так вышло и что с этим делать — в статье Алексея для журнала Job.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://Jobrussia.ru/understand/productivity-remote-work/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://pro.rbc.ru/news/62da6ce19a7947584be1ece2" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал о семи маркерах кризиса в компании" src="/img/about-author/alexreypro.png" alt="RBK Pro"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал о семи маркерах кризиса в компании
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://pro.rbc.ru/news/62da6ce19a7947584be1ece2" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="18" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/publikacii_aleksej_klochkov_dlya_zhurnala_direktor_po_personalu/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Чтобы повысить продуктивность сотрудников на удаленке, необходимо спросить кто и что мешает им работать. Как это сделать - в статье Алексея Клочкова журналу" src="/img/about-author/article-4.png" alt="Директор по персоналу"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Чтобы повысить продуктивность сотрудников на удалёнке, необходимо спросить, кто и что мешает им работать. Как это сделать — в статье Алексея Клочкова для издания «&lrm;Директор по персоналу»&lrm;
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/publikacii_aleksej_klochkov_dlya_zhurnala_direktor_po_personalu/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="19" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Как провести опрос в кризис." src="/img/about-author/article-4.png" alt="Как провести опрос в кризис."></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Не останавливайте опросы вовлечённости и удовлетворенности персонала. Это часть стратегии выживания в кризис. В статье найдете алгоритм, который поможет сэкономить на опросе 600 000 руб.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://happy-job.ru/news/Publikacii--Aleksey-Klochkov-dlya-zhurnala--Direktor-po-personalu-/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="20" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. О рисках, которые несет лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия." src="/img/about-author/article-5.png" alt="Harvard Business Review"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        О лояльности персонала принято говорить только в положительном ключе: преданный сотрудник не думает об увольнении и действует в интересах компании. В реальности может быть совсем не так. Орисках, которые несёт лояльность, Алексей Клочков рассказал изданию Harvard Business Review Россия.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://hbr-russia.ru/management/upravlenie-personalom/846911/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="about-author-articles__item slick-slide slick-cloned" data-slick-index="21" id="" aria-hidden="true" tabindex="-1" style="width: 354px;">
                                        <div class="views-row">
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-prevu-foto">
                                                    <div class="field-content">
                                                        <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                                                            <img class="full" title="Алексей Клочков рассказал изданию Rusbase как сегодня можно провести исследование вовлечённости в компании" src="/img/about-author/article-1.png" alt="Rusbase"></a>
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        Алексей Клочков рассказал изданию RUSBASE, как сегодня можно провести исследования вовлечённости в компании.
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-view-node">
                    <span class="field-content">
                      <a href="https://rb.ru/opinion/korporativnyj-opros-sposob/" target="_blank" rel="noopener" hreflang="ru" tabindex="-1">
                        Подробнее
                      </a>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div>










                            <button type="button" class="slick-next about-author-articles__arrow about-author-articles__arrow-next slick-arrow" style=""><svg><use xlink:href="#videoArrow"></use></svg></button><ul class="slick-dots" style="" role="tablist"><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 4" tabindex="-1">1</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide13" aria-label="2 of 4" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide16" aria-label="3 of 4" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide19" aria-label="4 of 4" tabindex="0" aria-selected="true">4</button></li></ul></div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            $(window).on("load", function () {
                $(".about-author-articles__sliders").slick({
                    dots: true,
                    adaptiveHeight: true,
                    arrows: true,
                    prevArrow:
                        '<button type="button" class="slick-prev about-author-articles__arrow about-author-articles__arrow-prev"><svg><use xlink:href="#videoArrow"/>',
                    nextArrow:
                        '<button type="button" class="slick-next about-author-articles__arrow about-author-articles__arrow-next"><svg><use xlink:href="#videoArrow"/>',
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    swape: false,
                    autoplaySpeed: 10000,
                    responsive: [
                        { breakpoint: 991, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                        { breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                    ],
                });
            });
        </script>


    </main>

</div>

<!-- endrender aleksey-klochkov//-->

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
                <span class="animated-counter" style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">197</span>
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
                        <input type="date" id="current-date" name="current-date" value="2024-01-29" min="2024-01-29">
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
