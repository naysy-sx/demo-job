<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?=Yii::$app->language?>" itemscope="itemscope" xmlns="http://www.w3.org/1999/xhtml"
          itemtype="http://schema.org/WebPage">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
        <meta name="yandex-verification" content="f57dc0111d2a74b9">
        <link rel="preload" href="../../css/5c65fe99500fa61f5e36b3ef901dbe83.css" as="style">
        <link rel="shortcut icon" type="image/png" href="../../img/happy-job/default/files/favicon.png">
        <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="../../jquery/swiper/swiper-bundle.min.css">

        <link type="text/css" rel="stylesheet" href="../../css/lightgallery.css"/>

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "additionalType": "SoftwareBusiness",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Москва",
                    "streetAddress": "Варшавское ш., 118к1, 10 эт"
                },
                "name": "Happy-Job",
                "email": "sales@happy-job.ru",
                "openingHours": [
                    "Mo-Fr 9:00-21:00",
                    "Sa-Su 10:00-18:00"
                ],
                "telephone": [
                    "8 (800) 600-31-89",
                    "+7(495) 646-83-89"
                ],
                "image": "/img/p/index/logo_INC.svg",
                "url": "https://happy-job.ru/",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "55.631773",
                    "longitude": "37.618031"
                }
            }
        </script>

        <?php // echo $this->render('_parts/_jivo'); // TODO ?>

        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"
        />

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(46152993, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/46152993" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body class="page-type-standart">
    <?php echo $this->render('_parts/_block'); ?>
    <?php $this->beginBody() ?>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQNWPVM" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script type="text/javascript" src="../../jquery/jquery-3.6.0.min.js"></script>
    <link async rel="stylesheet" type="text/css" href="../../css/5c65fe99500fa61f5e36b3ef901dbe83.css">
    <style>
        .headers-wrapper {
            position: relative;
            z-index: 100;
        }

        .headers-wrapper.-fixed {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            background-color: #fff;
        }

        .headers-wrapper.-fixed .topbanner-index {
            display: none;
        }
    </style>
    <div class="headers-wrapper">
        <style>
            .topbanner-index {
                height: 60px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-position: center;
                background-size: cover;
                background-image: url(img/topbanner.jpg);
                background-repeat: no-repeat;
                background-color: #000;
                z-index: 100;
                overflow: hidden;
                text-align: center;
            }

            .topbanner-index > * {
                margin: 0 1rem;
            }

            .topbanner-index span {
                color: #fff;
                font-weight: 400;
                font-size: 16px;
            }

            .topbanner-index a {
                position: relative;
                color: var(--c-link);
                font-weight: 400;
                font-size: 16px;
                border-bottom: 1px dashed var(--c-link);
                line-height: 0.8;
                transition: all 0.3s;
            }

            .topbanner-index a:hover {
                color: #fff;
                border-bottom: 1px dashed #fff;
            }

            .topbanner-index a:after {
                content: '';
                display: block;
                position: absolute;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%2361C13B' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m268 112l144 144l-144 144m124-144H100'/%3E%3C/svg%3E");
                width: 1rem;
                height: 1rem;
                background-size: contain;
                right: -22px;
                top: -3px;
                transition: all 0.3s;
            }

            .topbanner-index a:hover:after {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m268 112l144 144l-144 144m124-144H100'/%3E%3C/svg%3E");
            }

            @media (max-width: 1200px) {
                .topbanner-index {
                    flex-direction: column;
                    height: 80px;
                }

                .topbanner-index a,
                .topbanner-index span {
                    font-size: 14px;
                    padding: 0.2rem 0;
                }

                .topbanner-index a:after {
                    top: 0px;
                }
            }
        </style>

        <style>
            .page-header .icon {
                display: block;
                right: 100%;
                width: 18px;
                height: 16px;
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
            }

            .icon1 {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.38 19.59'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.66;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cg class='cls-1'%3E%3Cpath d='M11.37,18.19a12.82,12.82,0,0,1-4.46-.68.47.47,0,0,0-.47.06A11.09,11.09,0,0,1,1.6,19.52c-.29,0-.58.05-.88.07a.67.67,0,0,1-.63-.36.67.67,0,0,1,0-.73,3.19,3.19,0,0,1,.32-.43,6.94,6.94,0,0,0,1.61-3.53A.34.34,0,0,0,2,14.25,7.94,7.94,0,0,1,.46,11.7,7.71,7.71,0,0,1,.68,6a8.44,8.44,0,0,1,1.44-2.2A10.5,10.5,0,0,1,5.4,1.29,12.91,12.91,0,0,1,9.66.09,13.66,13.66,0,0,1,14.08.3,11.78,11.78,0,0,1,18,1.83,9.78,9.78,0,0,1,21.2,5a7.51,7.51,0,0,1,1.16,3.61,7.74,7.74,0,0,1-2.25,6A11.23,11.23,0,0,1,13.66,18,13.79,13.79,0,0,1,11.37,18.19Zm-.32-12.6H12.3a.64.64,0,0,1,.65.74.69.69,0,0,1-.41.55l-1.76,1a1,1,0,0,0-.55.63,2.27,2.27,0,0,0,0,1.24,1,1,0,0,0,1,.67,1,1,0,0,0,.94-.8.46.46,0,0,1,.25-.35l1.16-.65a2.73,2.73,0,0,0-1-5.1,25,25,0,0,0-3.12,0,2.25,2.25,0,0,0-2,1.79A1,1,0,0,0,8.1,6.5a1,1,0,0,0,1.28-.62.4.4,0,0,1,.43-.29Zm1.51,7.71a1.37,1.37,0,1,0-2.73,0,1.3,1.3,0,0,0,1.36,1.38A1.3,1.3,0,0,0,12.56,13.3Z'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }

            .icon2 {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.57 18.57'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.66;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M6,.89A1.45,1.45,0,0,0,4.26.05L1.07.92A1.46,1.46,0,0,0,0,2.32,16.25,16.25,0,0,0,16.25,18.57a1.44,1.44,0,0,0,1.4-1.07l.87-3.19a1.45,1.45,0,0,0-.84-1.72L14.2,11.14a1.45,1.45,0,0,0-1.68.42l-1.47,1.79A12.31,12.31,0,0,1,5.22,7.52L7,6.06a1.44,1.44,0,0,0,.42-1.68L6,.9Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }

            .icon-happy-index {
                width: 22px;
                height: 22px;
                background-repeat: no-repeat;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='31' height='32' viewBox='0 0 31 32'%3E%3Cpath fill='%234d4d4d' d='M17.173 25.067q-2.453 1.92-5.44 1.92t-5.227-1.92q-0.427-0.32-0.373-0.8t0.533-0.64 0.8 0.267q1.813 1.6 4.32 1.547t4.427-1.653q0.32-0.32 0.8-0.107t0.533 0.64-0.373 0.747zM20.053 11.733l-8.107-3.52-8.427 3.52-3.52 8.64 3.627 8.213 8.107 3.413 8.853-3.84 3.2-8.427zM18.667 0q-0.427 0-0.64 0.267t-0.267 0.587 0.053 0.427q0.213 0.427 0.213 0.96v13.227q0 0.427 0.32 0.587t0.64 0 0.32-0.587v-13.227q0-0.427 0.213-0.96v-0.373t-0.267-0.587-0.587-0.32zM28.693 6.187q-0.213 0.32 0 0.533 0.853 1.067 2.027 2.027 0.533 0.427-0.32 0.853h-0.107q-1.173 0.533-2.667 0.32-0.96 0-2.667-0.48t-2.453-0.587q-1.387-0.213-2.453 0.107v-7.147q1.067-0.32 2.347-0.107 0.853 0.107 2.453 0.533 1.813 0.533 2.773 0.64 1.493 0.107 2.773-0.427 0.213-0.107 0.32 0.107t0 0.427q-0.96 1.707-2.027 3.2z'%3E%3C/path%3E%3C/svg%3E");
            }

            a:hover .icon-happy-index {
                background-image: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='31' height='32' viewBox='0 0 31 32'%3E%3Cpath fill='%2386bd4f' d='M17.173 25.067q-2.453 1.92-5.44 1.92t-5.227-1.92q-0.427-0.32-0.373-0.8t0.533-0.64 0.8 0.267q1.813 1.6 4.32 1.547t4.427-1.653q0.32-0.32 0.8-0.107t0.533 0.64-0.373 0.747zM20.053 11.733l-8.107-3.52-8.427 3.52-3.52 8.64 3.627 8.213 8.107 3.413 8.853-3.84 3.2-8.427zM18.667 0q-0.427 0-0.64 0.267t-0.267 0.587 0.053 0.427q0.213 0.427 0.213 0.96v13.227q0 0.427 0.32 0.587t0.64 0 0.32-0.587v-13.227q0-0.427 0.213-0.96v-0.373t-0.267-0.587-0.587-0.32zM28.693 6.187q-0.213 0.32 0 0.533 0.853 1.067 2.027 2.027 0.533 0.427-0.32 0.853h-0.107q-1.173 0.533-2.667 0.32-0.96 0-2.667-0.48t-2.453-0.587q-1.387-0.213-2.453 0.107v-7.147q1.067-0.32 2.347-0.107 0.853 0.107 2.453 0.533 1.813 0.533 2.773 0.64 1.493 0.107 2.773-0.427 0.213-0.107 0.32 0.107t0 0.427q-0.96 1.707-2.027 3.2z'%3E%3C/path%3E%3C/svg%3E");
            }

            .page-header {
                box-shadow: 2px 3px 5px rgb(0 0 0 / 10%);
                z-index: 100;
                height: 76px;
                background: #fff;
            }

            .page-header .container {
                max-width: 1180px;
                height: 100%;
            }

            .page-header-row {
                display: flex;
                justify-content: space-between;
                padding: 0;
                align-items: center;
                height: 100%;
            }

            .page-header-logo {
                flex-basis: 240px;
                min-width: 240px;
            }

            .navigation-list {
                display: flex;
                margin: 12px 0 0 0;
                padding: 0;
                align-items: center;
            }

            .navigation-item {
                position: relative;
                height: 76px;
                margin: -12px 0 0 0;
                padding: 30px 14.3px;
                cursor: pointer;
                background: linear-gradient(0deg, #fff 6px, #fff 6px);
                transition: background 0.3s;
            }

            .navigation-item > a {
                display: block;
                color: var(--c-text);
                font-size: 14.5px;
            }

            .navigation-title {
                position: relative;
                z-index: 3;
                display: flex;
                align-items: center;
                font-size: 14.5px;
                transition: color 0.3s;
            }

            .navigation-title:after {
                content: '';
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%2361C13B' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
                width: 1rem;
                height: 1rem;
                background-repeat: no-repeat;
                background-position: center center;
                margin-left: 2px;
                background-size: contain;
                transition: all 0.3s;
            }

            .navigation-item:not(.-home):hover {
                background: linear-gradient(0deg, #48bf4e 6px, #fff 6px);
            }

            .navigation-item:hover > a {
                color: var(--c-link);
            }

            .navigation-item:hover .navigation-title {
                color: var(--c-link);
            }

            .navigation-item:hover .navigation-title:after {
                transform: scale(-1);
            }

            .auth-icon {
                display: block;
                margin: 0 8px 0 10px;
                width: 25px;
                height: 25px;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 15.59 16.31'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23ffffff;%7D%3C/style%3E%3C/defs%3E%3Ctitle%3EAsset 1icon%3C/title%3E%3Cg id='Layer_2' data-name='Layer 2'%3E%3Cg id='Layer_3' data-name='Layer 3'%3E%3Cpath class='cls-1' d='M15.11,12.71a1.8,1.8,0,0,0-1-1.29l-2.8-1.29h0l-1.17-.88h0a.78.78,0,0,0-.2-.38V7.44a8.27,8.27,0,0,0,.72-1.32,1.7,1.7,0,0,0,.77-1.32c0-.69-.21-.85-.41-.86C11,3.47,11.24,0,7.71,0,3.92,0,4.46,4,4.46,4h0c-.2,0-.41.17-.38.8a1.74,1.74,0,0,0,.77,1.32,8.28,8.28,0,0,0,.72,1.32V8.89a.79.79,0,0,0-.19.36l-1.16.87v0L1.5,11.42a1.8,1.8,0,0,0-1,1.29L0,15.15s.46,1.17,7.8,1.17,7.8-1.17,7.8-1.17Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                background-color: #a2a6ab;
                background-repeat: no-repeat;
                background-position: center 6px;
                background-size: 12px auto;
                border-radius: 50%;
            }

            .-home .navigation-link {
                display: block;
                width: 18px;
                height: 18px;
                transform: translate(-18px, -5px);
            }

            .-home .navigation-link svg {
                width: 100%;
                height: 18px;
                transform: scale(1.3, 1.1);
            }

            .-home .navigation-link svg path {
                fill: #212529;
                transition: fill 0.3s;
            }

            .-home .navigation-link:hover svg path {
                fill: var(--c-link);
            }

            .-auth .navigation-title {
                transform: translateY(-3px);
            }

            .navigation-item:nth-child(2) .subnavigation {
                /*z-index: 1;*/
            }

            .subnavigation {
                position: absolute;
                background-color: #fff;
                min-width: 144px;
                box-shadow: 0px 3px 5px 0 rgb(0 0 0 / 10%);
                left: 0;
                top: 76px;
                margin: 0;
                padding: 1rem 0;
                border-radius: 0 0 5px 5px;
                z-index: -1;
                visibility: hidden;
                opacity: 0;
            }

            .subnavigation:before,
            .extra-navigation:before {
                content: '';
                display: block;
                height: 6px;
                background: linear-gradient(0deg, rgba(0, 212, 255, 0) 0%, rgba(0, 0, 0, 0.10127801120448177) 100%);
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
            }

            .navigation-item:hover .subnavigation {
                z-index: 1;
                opacity: 1;
                visibility: visible;
            }

            .navigation-item:nth-child(7) .subnavigation,
            .navigation-item:nth-child(8) .subnavigation {
                left: inherit;
                right: 0;
            }

            .subnavigation-item {
                position: relative;
                list-style-type: none;
                margin: 0;
            }

            .subnavigation-link,
            .extra-navigation-link {
                display: block;
                white-space: nowrap;
                color: #212529;
                font-size: 14.5px;
                padding: 9px 2rem;
            }

            .subnavigation-link:hover,
            span.subnavigation-link:hover,
            .extra-navigation-link:hover,
            span.extra-navigation-link:hover {
                color: var(--c-link);
            }

            .extra-navigation {
                position: absolute;
                background-color: #fff;
                min-width: 144px;
                box-shadow: 0px 3px 5px 0 rgb(0 0 0 / 10%);
                left: calc(100% - 5px);
                top: -1rem;
                margin: 0;
                padding: 1rem 0;
                border-radius: 0 0 5px 5px;
                visibility: hidden;
                opacity: 0;
                z-index: -1;
            }

            .subnavigation-item:hover .extra-navigation {
                visibility: visible;
                opacity: 1;
                z-index: 1;
            }

            .extra-list {
                margin: 0;
                padding: 0;
            }

            .extra-navigation-header {
                padding: 9px 2rem;
                font-weight: 400;
                text-transform: uppercase;
                font-size: 10px;
                line-height: 1;
                letter-spacing: 0.035em;
                display: block;
                color: #808080;
            }

            .extra-list {
            }

            .extra-navigation-item {
                list-style-type: none;
                margin: 0;
            }

            .extra-navigation-item.-desc .icon {
                width: 1rem;
            }

            .extra-navigation-item.-desc .extra-navigation-link {
                display: grid;
                grid-template-columns: 1rem 1fr;
                grid-template-rows: auto auto;
                grid-template-areas: 'icon title''icon subtitle';
                grid-gap: 10px;
                list-style-type: none;
                white-space: nowrap;
                color: #212529;
                font-size: 14.5px;
                padding: 9px 2rem;
            }

            .extra-navigation-item.-desc .extra-navigation-link:hover {
                color: var(--c-link);
            }

            .extra-navigation-item.-desc .extra-navigation-icon {
                grid-area: icon;
            }

            .extra-navigation-item.-desc .extra-navigation-title {
                text-transform: uppercase;
                grid-area: title;
                font-weight: bold;
                font-size: 12px;
                line-height: 1.3;
                letter-spacing: 0.4px;
            }

            .extra-navigation-item.-desc .extra-navigation-subtitle {
                grid-area: subtitle;
                font-size: 10px;
                opacity: 0.7;
            }

            .subnavigation-link-arrow {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%2361C13B' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
                width: 1rem;
                height: 1rem;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                transform: rotate(-90deg) translate(-2px, 5px);
                display: inline-block;
            }

            .contacts-block {
                margin-bottom: -1rem;
                padding-top: 1rem;
                list-style-type: none;
            }

            .params {
                background-color: #f8f8fa;
                padding: 1rem 0;
                border-radius: 0 0 5px 5px;
            }

            .params-item {
                padding: 9px 2rem;
            }

            .params-href {
                display: grid;
                grid-template-columns: 1rem 1fr;
                grid-gap: 10px;
                white-space: nowrap;
                color: #212529;
                font-size: 14.5px;
            }

            .params-href:hover .params-title {
                color: var(--c-link);
            }

            .params-href:hover .icon1 {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.38 19.59'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:1;fill:%2361C13B;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cg class='cls-1'%3E%3Cpath d='M11.37,18.19a12.82,12.82,0,0,1-4.46-.68.47.47,0,0,0-.47.06A11.09,11.09,0,0,1,1.6,19.52c-.29,0-.58.05-.88.07a.67.67,0,0,1-.63-.36.67.67,0,0,1,0-.73,3.19,3.19,0,0,1,.32-.43,6.94,6.94,0,0,0,1.61-3.53A.34.34,0,0,0,2,14.25,7.94,7.94,0,0,1,.46,11.7,7.71,7.71,0,0,1,.68,6a8.44,8.44,0,0,1,1.44-2.2A10.5,10.5,0,0,1,5.4,1.29,12.91,12.91,0,0,1,9.66.09,13.66,13.66,0,0,1,14.08.3,11.78,11.78,0,0,1,18,1.83,9.78,9.78,0,0,1,21.2,5a7.51,7.51,0,0,1,1.16,3.61,7.74,7.74,0,0,1-2.25,6A11.23,11.23,0,0,1,13.66,18,13.79,13.79,0,0,1,11.37,18.19Zm-.32-12.6H12.3a.64.64,0,0,1,.65.74.69.69,0,0,1-.41.55l-1.76,1a1,1,0,0,0-.55.63,2.27,2.27,0,0,0,0,1.24,1,1,0,0,0,1,.67,1,1,0,0,0,.94-.8.46.46,0,0,1,.25-.35l1.16-.65a2.73,2.73,0,0,0-1-5.1,25,25,0,0,0-3.12,0,2.25,2.25,0,0,0-2,1.79A1,1,0,0,0,8.1,6.5a1,1,0,0,0,1.28-.62.4.4,0,0,1,.43-.29Zm1.51,7.71a1.37,1.37,0,1,0-2.73,0,1.3,1.3,0,0,0,1.36,1.38A1.3,1.3,0,0,0,12.56,13.3Z'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
            }

            .params-href:hover .icon2 {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.57 18.57'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:1;fill:%2361C13B;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M6,.89A1.45,1.45,0,0,0,4.26.05L1.07.92A1.46,1.46,0,0,0,0,2.32,16.25,16.25,0,0,0,16.25,18.57a1.44,1.44,0,0,0,1.4-1.07l.87-3.19a1.45,1.45,0,0,0-.84-1.72L14.2,11.14a1.45,1.45,0,0,0-1.68.42l-1.47,1.79A12.31,12.31,0,0,1,5.22,7.52L7,6.06a1.44,1.44,0,0,0,.42-1.68L6,.9Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
            }

            .params-title {
                text-transform: uppercase;
                font-weight: bold;
                font-size: 12px;
                letter-spacing: 0.01em;
                margin-bottom: 10px;
                color: var(--c-text);
            }

            .params-single {
                display: flex;
                margin: 0;
                padding: 0 0 0 26px;
                white-space: nowrap;
            }

            .params-name {
                color: #666666;
                white-space: nowrap;
                margin-right: 5px;
                font-weight: normal;
                font-size: 11px;
            }

            .params-name:after {
                content: ":";
            }

            .params-value {
                font-size: 10px;
                font-weight: bold;
                letter-spacing: 0.025em;
            }

            .params-link {
                letter-spacing: 0.025em;
                color: #666666;
            }

            .params-link:hover {
                color: var(--c-link)
            }

            .params-value:hover {
                font-weight: bold;
                color: var(--c-link);
            }

            .navigation-button {
                border: none;
                background: none;
                padding: 0.5rem;
            }

            .navigation-button-span {
                position: relative;
                display: inline-block;
                transform: translateY(-5px);
                width: 24px;
                height: 3px;
                background: var(--c-text);
                border: 0px;
                transition: 250ms ease;
            }

            .navigation-button-span:before,
            .navigation-button-span:after {
                content: "";
                position: absolute;
                width: 100%;
                display: block;
                height: 3px;
                left: 0px;
                background: var(--c-text);
                transition: 250ms ease-out;
            }

            .navigation-button-span:before {
                transform: translateY(-9px);
            }

            .navigation-button-span:after {
                transform: translateY(9px);
            }

            @media (max-width: 1200px) {
                .-mobile:not(.-visible) {
                    display: none;
                }

                .page-type-standart {
                    width: 100vw;
                }

                html.-ovh {
                    overflow: hidden;
                }

                .page-header-logo {
                    flex-basis: 190px;
                    min-width: 190px;
                }

                .page-header {
                    height: 64px;
                    padding: 1rem 0;
                    top: 0;
                }

                .-mobile .navigation-item.-home {
                    display: none;
                }

                .-mobile .navigation-item {
                    position: unset;
                    height: auto;
                }

                .-mobile .navigation-item:not(.-home):hover {
                    background: #fff;
                }

                .-mobile .subnavigation,
                .-mobile .extra-navigation {
                    display: none;
                    position: absolute;
                    z-index: -1;
                    box-shadow: none;
                    padding: 0.5rem 0;
                }

                .-mobile .extra-navigation {
                    background-color: #f8f8fa;
                }

                .-mobile .subnavigation:before,
                .-mobile .extra-navigation:before {
                    display: none;
                }

                .-mobile {
                    display: block;
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 80px;
                    padding: 1rem 0 0;
                    height: calc(100vh - 2rem - 20px);
                    overflow-y: scroll;
                    overflow-x: hidden;
                    background-color: #fff;
                    box-shadow: inset 2px 3px 5px rgb(0 0 0 / 10%);
                }

                .-fixed .-mobile {
                    top: 64px;
                }

                .-mobile .navigation-list {
                    margin: 0 1rem;
                    flex-direction: column;
                    align-items: stretch;
                }

                .-mobile .subnavigation-link {
                    padding: 0;
                }

                .-mobile .navigation-title:after {
                    font-size: 13px;
                    padding: 9px 0;
                    transform: rotate(-90deg);
                }

                .-mobile .navigation-item,
                .-mobile .subnavigation-item {
                    list-style-type: none;
                    padding: 1rem 0;
                }

                .-mobile .auth-icon {
                    display: none;
                }

                .-mobile .navigation-item + .navigation-item:not(:last-child) {
                    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                }

                .-mobile .subnavigation-item + .subnavigation-item {
                    border-top: 1px solid rgba(0, 0, 0, 0.05);
                }

                .-mobile .navigation-item:hover .navigation-title {
                }

                .-mobile .navigation-item:hover .navigation-title:after {
                    transform: rotate(-90deg) translateY(3px);
                }

                .-mobile .navigation-item.-active .subnavigation,
                .-mobile .subnavigation-item.-active .extra-navigation {
                    display: block;
                    visibility: visible;
                    opacity: 1;
                    z-index: 4;
                    background: #fff;
                    top: 0;
                    left: 0;
                    right: 0;
                    height: 103vh;
                    padding: 1rem 0.8rem 2rem;
                }

                .subnavigation-heading,
                .extranavigation-heading {
                    display: flex;
                    list-style-type: none;
                    align-items: center;
                    justify-content: space-between;
                    background-color: #e8ebf4;
                    padding: 2rem 1.4rem 1rem 1rem;
                    margin: -1rem -1rem 0px -1rem;
                    box-shadow: inset 2px 3px 5px rgb(0 0 0 / 10%);
                }

                .subnavigation-heading-back:before,
                .extranavigation-heading-back:before {
                    content: '\00276F';
                    margin-right: 10px;
                    transform: rotate(180deg) translateY(2px);
                    display: inline-flex;
                }

                .-mobile .subnavigation-link-arrow {
                    transform: rotate(-90deg) translate(-3px, 5px);
                }

                .-mobile .subnavigation-item.-active {
                    position: unset;
                }

                .-mobile .extra-navigation-header {
                    display: none;
                }

                .-mobile .extra-navigation-item {
                    margin: 0;
                    padding: 1rem 0;
                }

                .-mobile .extra-navigation-link {
                    padding: 0;
                }

                .-mobile .extra-navigation-item + .extra-navigation-item {
                    border-top: 1px solid rgba(0, 0, 0, 0.05);
                }

                .-mobile .contacts-block {
                    list-style-type: none;
                    margin-inline: -1rem;
                }

                .-mobile .params-item {
                    padding: 9px 1rem;
                }
            }

            @media (min-width: 1200px) {
                .subnavigation-heading,
                .extranavigation-heading,
                .navigation-button {
                    display: none;
                }
            }

            .form-image {
                width: 300px !important;
                transform: none !important;
            }

            @media (max-width: 1440px) {
                .extra-navigation {
                    max-width: 400px;
                    width: 100%;
                }

                .extra-navigation-title {
                    white-space: normal;
                }
            }

            @media (max-width: 576px) {
                .extra-navigation-title {
                    white-space: initial;
                    max-width: 95%;
                    display: inline-flex;
                }

                .headers-wrapper.-fixed:nth-child(4) .page-header-navigation.navigation.-mobile.-visible {
                    top: 64px;
                }
            }
        </style>

        <?php echo $this->render('_parts/_header'); ?>

        <script>
            const navigationMenuButton = document.getElementById('navigation-button');
            const navigation = document.getElementById('navigation');
            let page = document.querySelectorAll('html')
            const body = page[0]
            let menuItems = document.querySelectorAll('.navigation-item');

            function navigateMenu(node) {
                let elemTarget = node.className.replace(/\s/g, '');
                console.log(elemTarget)
                if (elemTarget == 'navigation-title') {
                    document.querySelectorAll('.navigation-item').forEach(item => {
                        item.classList.remove("-active");
                    })
                    node.parentNode.classList.add("-active");
                }
                if (elemTarget == 'subnavigation-heading-back') {
                    document.querySelectorAll('.navigation-item').forEach(item => {
                        item.classList.remove("-active");
                    })
                }
                if (elemTarget == 'subnavigation-link') {
                    console.log('1111111')
                    document.querySelectorAll('.subnavigation-item').forEach(item => {
                        item.classList.remove("-active");
                    })
                    node.parentNode.classList.add("-active");
                }
                if (elemTarget == 'extranavigation-heading-back') {
                    document.querySelectorAll('.subnavigation-item').forEach(item => {
                        item.classList.remove("-active");
                    })
                }
                console.log('Клик')
            }

            function detectScreenWidth() {
                let viewPortWidth = window.innerWidth;
                if (viewPortWidth <= 1200) {
                    navigation.classList.add("-mobile");
                    navigationMenuButton.addEventListener("click", displayMenu);
                    document.querySelectorAll('.navigation-title').forEach(item => {
                        item.addEventListener('click', event => {
                            navigateMenu(item)
                        })
                    })
                    document.querySelectorAll('.subnavigation-heading-back').forEach(backlink => {
                        backlink.addEventListener('click', event => {
                            navigateMenu(backlink)
                        })
                    })
                    document.querySelectorAll('.subnavigation-link').forEach(item => {
                        item.addEventListener('click', event => {
                            navigateMenu(item)
                        })
                    })
                    document.querySelectorAll('.extranavigation-heading-back').forEach(item => {
                        item.addEventListener('click', event => {
                            navigateMenu(item)
                        })
                    })
                } else {
                    navigation.classList.remove("-mobile")
                    navigationMenuButton.removeEventListener("click", displayMenu);
                }
            }

            function displayMenu() {
                navigation.classList.toggle("-visible");
                body.classList.toggle("-ovh");
            }

            detectScreenWidth()
            addEventListener("resize", (event) => {
                detectScreenWidth()
            });
        </script>
    </div>
    <script>
        $(function () {
            const page = $('.page-type-standart');
            const topBannerExisting = $('.topbanner-index').length;
            const topBannerHeight = $('.topbanner-index').outerHeight();
            const pageHeaderHeight = $('.page-header').outerHeight();
            const pageTop = $('.headers-wrapper');
            const pageTopHeight = pageTop.outerHeight();
            let scrolled = 0;
            if (topBannerExisting) {
                $(window).scroll(function () {
                    scrolled = $(window).scrollTop();
                    if (scrolled > topBannerHeight) {
                        pageTop.addClass('-fixed');
                        $('.page-type-standart, .page-type-hr-blog, .page-type-news').css('padding-top', pageTopHeight)
                    } else {
                        pageTop.removeClass('-fixed');
                        $('.page-type-standart, .page-type-hr-blog, .page-type-news').css('padding-top', 0)
                    }
                });
            } else {
                pageTop.addClass('-fixed');
                $('.page-type-standart, .page-type-hr-blog, .page-type-news').css('padding-top', pageTopHeight)
            }
        })
    </script>

    <?php echo $content; ?>

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
        });

        $(function () {
            if ($(".testswiper").length) {
                const swiper = new Swiper(".slider-by-editor", {
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
                padding-bottom: 7rem;
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

    <?php echo $this->render('_parts/_footer'); ?>

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
    <link async rel="stylesheet" type="text/css" href="fonts/gp/stylesheet.css">
    <link async rel="stylesheet" type="text/css" href="fonts/fontello-a444d455/css/fontello.css">
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
    <script type="text/javascript" src="jquery/swiper/swiper-bundle.min.js"></script>
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

    <div class="main-modal" id="main-modal" style="display: none">
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
                    <input type="hidden" name="form-id" value="form-id"></li>
                <li class="c-form-item">
                    <input type="hidden" name="check" value="bot" id="checkinput"></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Ваше имя
                        <sup>*</sup></label>
                    <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required
                           data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя"></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Компания
                        <sup>*</sup></label>
                    <input type="text" id="company" name="company" placeholder="Ваша компания" required
                           data-parsley-trigger="change" data-parsley-error-message="Укажите название компании"></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Количество сотрудников
                        <sup>*</sup></label>
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
                    </select></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Телефон
                        <sup>*</sup></label>
                    <input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change"
                           data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$"
                           data-parsley-error-message="Укажите номер телефона"></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Корпоративный e-mail
                        <sup>*</sup></label>
                    <input type="email" id="email" name="email" placeholder="Ваш e-mail" required
                           data-parsley-trigger="change"
                           data-parsley-pattern="/^(?!.*@(mail\.ru|yandex\.ru|gmail\.com|rambler\.ru|yahoo\.com))[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/"
                           data-parsley-error-message="Укажите корпоративный e-mail"></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                        Комментарий
                    </label>
                    <textarea id="comment" name="comment"></textarea></li>
                <li class="c-form-item">
                    <label class="c-form-label">
                    </label>
                    <div class="c-form-date" style="display:none;">
                        <p>Вы также можете указать время,<br>в которое вам будет удобнее принять звонок </p>
                        <div class="c-form-date-column">
                            <input type="date" id="current-date" name="current-date" value="2023-10-04"
                                   min="2023-10-04">
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
                            </select></div>
                    </div>
                </li>
            </ul>
            <button id="form-id-submit" type="submit" class="button-default">Отправить</button>
            <div class="c-form-policy">
                <p>
                    Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
                    <br><a href="privacy-policy/index.html"><i class="icon icon-lock"></i>Политика
                                                                                          конфиденциальности</a>
                </p>
                <p>
                    Или пишите нам на почту
                    <br><strong>
                        <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                    </strong>
                </p>
            </div>
        </form>

        <?php // !!!!!!!!!!!!!!!!!!! ?>
        <script type="text/javascript" src="/jquery/swiper/swiper-bundle.min.js"></script>

        <script>
            $(function () {
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
                        // Если нет доступного времени, выбрать последнюю опцию
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
                const sendForm = (formNode, formData) => {
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
                    sendForm(formNode, formData);
                    console.log('Отправилось!');
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
            <header class="main-modal-header"><h2 class="main-modal-title">Оставьте e-mail</h2>
                <p style="text-align: center;">и продолжите чтение</p>
            </header>
            <form class="main-modal-form" id="modal-email">
                <div class="main-modal-item">
                    <div class="main-modal-input">
                        <label for="email" class="main-modal-label">Ваш e-mail:<sup>*</sup></label>
                        <input id="email" name="email" type="email" placeholder="Ваш e-mail" required></div>
                </div>
                <div class="main-modal-item">
                    <div class="main-modal-input -submit-button">
                        <button class="button button-default">Отправить</button>
                    </div>
                </div>
            </form>
            <div class="main-modal-divider"></div>
            <footer class="main-modal-footer"><p>Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих
                                                 персональных данных.</p>
                <p><a href="privacy-policy/index.html"><b class="privacy-policy-icon"></b> Политика
                                                                                           конфиденциальности</a>
                </p>
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
    <script async type="text/javascript" src="../../js/0f83699923be789d2b9f6d89ce43f38e.js"></script>
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
        (window, document, "script", "../../mc.yandex.ru/metrika/tag.js", "ym");
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
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQNWPVM" height="0" width="0"
                style="display: none; visibility: hidden"></iframe>
    </noscript>
    <script src="../../jquery/imask.js"></script>
    <script src="../../jquery/parsley/parsley.min.js"></script>
    <link rel="stylesheet" href="../../jquery/niceSelect/style.css">
    <script src="../../jquery/niceSelect/jquery.nice-select.min.js"></script>
    <script>
        $('iframe').css('border', '0');
    </script>

    <script>
        const container = document.getElementById("myCarousel");
        const options = {infinite: false};

        new Carousel(container, options);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css" rel="stylesheet">
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'), {
            plugins: [],
            mode: 'lg-fade',
        });
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>