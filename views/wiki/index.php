<?php

use app\models\db\WikiNav;
use app\models\db\WikiPosts;

?>

<!DOCTYPE html>
<html lang="ru" itemscope="itemscope" xmlns="http://www.w3.org/1999/xhtml" itemtype="http://schema.org/WebPage">
<head><!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MQNWPVM');</script><!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Вопросы и ответы о платформе Happy Job</title>
    <meta name="description"
          content="Ответы на самые популярные вопросы и сомнения при выборе сервиса для развития персонала, повышения мотивации сотрудников">
    <meta name="yandex-verification" content="f57dc0111d2a74b9">
    <link rel="preload" href="/css/461e60f7d6aa62a47c4da69dc60ae559.css" as="style">
    <link rel="shortcut icon" type="image/png" href="/img/happy-job/default/files/favicon.png">
    <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/jquery/swiper/swiper-bundle.min.css">
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
    <script src="//code.jivo.ru/widget/Zb6u1Gxx2p" async=""></script>
    <style>

    </style>
</head>
<body class="page-type-wiki">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQNWPVM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
<link async rel="stylesheet" type="text/css" href="/css/461e60f7d6aa62a47c4da69dc60ae559.css">
<!-- render common/header-menu-->
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
            background-image: url(/img/topbanner.jpg);
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
            margin: 0 -1rem;
            padding: 0;
            align-items: center;
        }

        .navigation-item {
            position: relative;
            height: 76px;
            margin: 0;
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
</script><!-- endrender common/header-menu--><!-- render wiki/-->
<script>
    sessionStorage.removeItem("invite");
</script>
<div class="wide-container">

    <div class="wiki">
        <div class="container">
            <h2 class="wiki__title">Центр поддержки</h2>
            <div class="wiki__description">Здесь мы собрали ответы на самые важные и популярные вопросы.</div>
        </div>

        <div class="wiki__bottom">
            <div class="container">
                <form action="#" class="wiki__search">
                    <div class="wiki__search-wrapper">
                        <label class="wiki__label">
                            <input class="wiki__input" type="text" placeholder="Найдите свой вопрос..."></label>
                        <label class="wiki__search-reset">
                            <input type="reset"></label>
                        <ul class="wiki__search-list">
                            <li class="wiki__search-item">
                                <a href="#" class="wiki__search-link">
                                    ddd
                                </a>
                            </li>

                            <li class="wiki__search-item">
                                <a href="#" class="wiki__search-link">
                                    ddd
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>

                <ul class="wiki__items">
                    <?php
                    $navs = WikiNav::find()->asArray()->all();

                    foreach ($navs as $nav) { ?>
                        <?php if ($nav['closed']) { ?>
                            <li class="wiki__item wiki__item--disabled" style="border-color: #7F80FD">
                            <svg class="wiki__item-lock" viewbox="0 0 48 49" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 40.5C32.3456 40.5 39.1111 33.3366 39.1111 24.5C39.1111 15.6634 32.3456 8.5 24 8.5C15.6544 8.5 8.88889 15.6634 8.88889 24.5C8.88889 33.3366 15.6544 40.5 24 40.5Z"
                                      fill="#F3F3F3"></path>
                                <path d="M24 16C20.22 16 19.5 17.58 19.5 20.5V21.74H28.5V20.5C28.5 17.58 27.78 16 24 16Z"
                                      fill="#818190"></path>
                                <path d="M24 30.7C25.215 30.7 26.2 29.715 26.2 28.5C26.2 27.285 25.215 26.3 24 26.3C22.785 26.3 21.8 27.285 21.8 28.5C21.8 29.715 22.785 30.7 24 30.7Z"
                                      fill="#818190"></path>
                                <path d="M24 4.5C12.96 4.5 4 13.46 4 24.5C4 35.54 12.96 44.5 24 44.5C35.04 44.5 44 35.54 44 24.5C44 13.46 35.04 4.5 24 4.5ZM34.76 29.5C34.76 33.9 33.4 35.26 29 35.26H19C14.6 35.26 13.24 33.9 13.24 29.5V27.5C13.24 24.08 14.06 22.5 16.5 21.96V20.5C16.5 18.64 16.5 13 24 13C31.5 13 31.5 18.64 31.5 20.5V21.96C33.94 22.5 34.76 24.08 34.76 27.5V29.5Z"
                                      fill="#818190"></path>
                            </svg>
                        <?php } else { ?>
                            <li class="wiki__item" style="border-color: <?=$nav['color']?>">

                            <?php
                            $first_post_in_category = WikiPosts::find()->where(['category_id' => $nav['id']])->one();
                            ?>
                            <a href="/<?=$first_post_in_category->url?>/" class="wiki__item-link">
                        <?php } ?>
                        <h3 class="wiki__item-title"><?=$nav['title']?></h3>
                        <span class="wiki__item-more">подробнее</span>

                        <img class="wiki__item-img" src="<?=$nav['image']?>" alt="<?=$nav['title']?>"><span
                                class="wiki__item-circle" style="background-color: <?=$nav['color']?>"></span>

                        </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .wide-container {
        background: linear-gradient(98.43deg, #F8F8FA 6.77%, #EDF1F3 95.07%);
    }

    .wiki {
        padding-top: 40px;
        color: #070707;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.4;
    }

    .wiki .container {
        max-width: 1190px;
        margin-bottom: 48px;
    }

    .wiki__title {
        max-width: 420px;
        font-size: 42px;
        font-weight: 900;
        line-height: 1.2;
        letter-spacing: 0.7px;
        margin-bottom: 0;
    }

    .wiki__description {
        max-width: 400px;
        margin-top: -2px;
        margin-bottom: 67px;
    }

    .wiki__bottom {
        padding-top: 38px;
        background: #FFFFFF;
        border-radius: 60px 60px 0px 0px;
    }

    .wiki__search {
        width: 100%;
        margin-bottom: 40px;
        position: relative;
        display: flex;
        align-items: center;
        /*  */
        display: none; /* comment*/
    }

    .wiki__search-wrapper {
        max-width: 100%;
        width: 100%;
        height: 48px;
        background: #F8F8F8;
        border: 1px solid #E1E3E6;
        border-radius: 8px;
        display: flex;
        align-items: center;
    }

    .wiki__label {
        display: flex;
        align-items: center;
        width: calc(100% - 48px);
        height: 48px;
        padding: 10px 14px 10px 46px;
        background-image: url(/img/wiki/wiki-search.svg);
        background-repeat: no-repeat;
        background-position: 14px center;
        background-size: 24px;
        margin-bottom: 0;
    }

    .wiki__label--active + .wiki__search-reset {
        opacity: 1;
    }

    .wiki__label--active ~ .wiki__search-list {
        padding: 10px 12px;
        height: 350px;
        opacity: 1;
        width: 100%;
        /* overflow: scroll; */
        border: 1px solid #d2d2d2;
        box-shadow: 4px 4px 12px 0px rgba(54, 54, 54, 0.08);
    }

    .wiki__search-list {
        height: 0;
        overflow: hidden;
        padding: 0 12px;
        list-style: none;
        width: 100%;
        background-color: #fff;
        position: absolute;
        left: 0;
        z-index: 5;
        top: 100%;
        border-radius: 13px;
        border-color: transparent;
        transition: box-shadow 0.4s linear, border 0.4s linear, height 0.4s linear, opacity 0.4s linear;
    }

    .wiki__search-item:not(:last-child) {
        margin-bottom: 12px;
        position: relative;
    }

    .wiki__search-item:not(:last-child)::before {
        content: "";
        width: calc(100% + 24px);
        height: 1px;
        background-color: #b5b5b5;
        position: absolute;
        left: -14px;
        top: calc(100% + 4px);
        filter: blur(2px);
    }

    .wiki__search-link {
        display: block;
        padding: 3px;
        font-size: 16px;
        font-weight: 400;
        color: #070707;
        transition: color 0.3s linear;
    }

    .wiki__search-link:hover {
        color: #297C3B;
    }

    .wiki__input {
        width: 100%;
        border: 0;
        padding: 0;
        background-color: transparent;
        outline: transparent;
    }

    .wiki__input::placeholder {
        color: #AAAEB3;
    }

    .wiki__search-reset {
        opacity: 0;
        width: 48px;
        height: 48px;
        position: relative;
        margin-bottom: 0;
        cursor: pointer;
        transition: opacity 0.3s linear;
    }

    .wiki__search-reset input {
        font-size: 0;
        background-color: transparent;
        border: 0;
        outline: transparent;
    }

    .wiki__search-reset::before,
    .wiki__search-reset::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        width: 20px;
        height: 2px;
        background-color: #9696A2;
        border-radius: 2px;
    }

    .wiki__search-reset::before {
        transform: translate(-50%, -50%) rotate(-45deg);
    }

    .wiki__input::placeholder {
        color: #AAAEB3;
    }

    .admin-settings {
        width: 64px;
        height: 48px;
        background-color: #46A758;
        border-radius: 8px;
        border: 0;
        outline: transparent;
        margin-left: 18px;
        transition: all 0.3s linear;
    }

    .admin-settings--active {
        padding-left: 20px;
        justify-content: start;
        color: #297C3B;
        width: 169px;
    }

    .admin-settings svg {
        display: block;
        width: 24px;
        height: 24px;
        margin: 0 auto;
    }

    .admin-settings--active svg {
        margin-left: 0;
    }

    .admin-settings__list {
        display: none;
        position: absolute;
        right: 0;
        top: calc(100% + 7px);
        z-index: 5;
        padding: 16px 8px 20px;
        margin: 0;
        border-radius: 8px;
        border: 1px solid #EAEAEC;
        background: #FFF;
        box-shadow: 4px 4px 12px 0px rgba(54, 54, 54, 0.08);
    }

    .admin-settings__item {
        margin-bottom: 0;
    }

    .admin-settings__item:not(:last-child) {
        margin-bottom: 5px;
    }

    .admin-settings__link {
        padding: 4px 10px 4px 14px;
        display: flex;
        align-items: center;
        color: #070707;
    }

    .admin-settings__item svg {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        stroke: #070707;
    }

    .wiki__items {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 54px;
        padding-inline-start: 0;
    }

    .wiki__item {
        max-width: 373px;
        width: 100%;
        min-height: 191px;
        margin-bottom: 48px;
        background: #F3F3F3;
        border-top: 3px solid;
        border-radius: 16px;
        overflow: hidden;
        flex-basis: calc(33.26% - 13px);
    }

    .wiki__item:not(:nth-child(3n + 3), :last-child) {
        margin-right: 20px;
    }

    .wiki__item-link {
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        padding: 17px 20px;
        transition: background-color 0.3s linear;
    }

    .wiki__item:not(.wiki__item--disabled) .wiki__item-link:hover {
        background-color: #EAEAEC;
    }

    .wiki__item:not(.wiki__item--disabled) .wiki__item-link:hover .wiki__item-more {
        color: #297C3B;
    }

    .wiki__item:not(.wiki__item--disabled) .wiki__item-link:hover .wiki__item-more::before {
        background-color: #297C3B;
    }

    .wiki__item-title {
        max-width: 220px;
        height: 60px;
        margin: 0 0 18px;
        font-weight: 500;
        font-size: 24px;
        line-height: 1.2;
        color: #070707;
    }

    .wiki__item-more {
        position: relative;
        color: #070707;
        font-size: 16px;
        line-height: 1.4;
        transition: color 0.3s linear;
    }

    .wiki__item-more::before {
        content: "";
        position: absolute;
        width: 100%;
        bottom: -2px;
        height: 1px;
        background-color: #070707;
        transition: background-color 0.3s linear;
    }

    .wiki__item-img {
        position: absolute;
        z-index: 2;
        right: 0;
        bottom: 0;
        width: 200px;
        height: auto;
    }

    .wiki__item-circle {
        display: block;
        z-index: 1;
        width: 159px;
        height: 93px;
        opacity: 0.55;
        filter: blur(45px);
        transform: matrix(0.97, -0.23, 0.24, 0.97, 0, 0);
        position: absolute;
        right: 7px;
        bottom: -20px;
    }

    .wiki__item--disabled {
        position: relative;
        padding: 17px 20px;
    }

    .wiki__item--disabled:hover {
        cursor: default;
    }

    .wiki__item--disabled::before {
        content: "";
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        position: absolute;
        top: -2px;
        left: -2px;
        z-index: 10;
        background-color: transparent;
    }

    .wiki__item--disabled .wiki__item-lock {
        display: block;
    }

    .wiki__item--disabled .wiki__item-title,
    .wiki__item--disabled .wiki__item-more {
        color: #C0C0C7;
    }

    .wiki__item--disabled .wiki__item-more::before {
        background-color: #C0C0C7;
    }

    .wiki__item--disabled .wiki__item-img {
        opacity: 0.6;
        filter: grayscale(5%)
    }

    .wiki__item-lock {
        display: none;
        width: 48px;
        height: 48px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 5;
    }

    @media (max-width: 1200px) {
        .wiki__search-wrapper {
            padding: 0 15px;
        }
    }

    @media (max-width: 1030px) {
        .wiki__items {
            /* justify-content: space-around; */
        }

        .wiki__item:not(:nth-child(3n + 3), :last-child) {
            margin-right: 10px;
        }

        .wiki__item {
            margin: 0 10px 30px;
            max-width: 460px;
            flex-grow: 1;
            width: 100%;
        }
    }

    @media (max-width: 800px) {
        .wiki__bottom {
            padding-top: 30px;
            border-radius: 35px 35px 0 0;
        }

        .wiki__items {
            justify-content: space-between;
        }

        .wiki__item {
            flex-basis: 266px;
            margin: 0 0 20px;
        }

        .wiki__item:not(:nth-child(2n + 2), :last-child) {
            margin-right: 15px;
        }

        .wiki__item:last-child {
            max-width: calc(50% - 8px);
        }
    }

    @media (max-width: 630px) {
        .wiki__search-wrapper {
            padding: 0;
        }

        .wiki__item {
            flex-basis: 300px;
            max-width: 100%;
            margin: 0 0 15px;
        }

        .wiki__item:not(:nth-child(2n + 2), :last-child) {
            margin-right: 0;
        }

        .wiki__item:last-child {
            max-width: 100%;
        }
    }

</style>
<script>
    $(function () {
        $('.accordion__card-btn').on('click', function () {
            $(this).closest('.accordion__card').toggleClass('accordion__card_open')
            $(this).closest('.accordion__card').find('.accordion__collapse').toggleClass('collapse');
            return false
        });

        $('.wiki__input').on('focus', function () {
            $(this).closest('.wiki__label').addClass('wiki__label--active');
        });
        $('.wiki__input').on('blur', function () {
            if ($(this)[0].value == '')
                $(this).closest('.wiki__label').removeClass('wiki__label--active');
        });

        $('.admin-settings').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('admin-settings--active').next().slideToggle();
        });

    })
</script><!-- endrender wiki/--><!-- render common/footer-->
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
        padding: 0 clamp(0.875rem, 0.7678571428571428rem + 0.5357142857142857vw, 1.25rem);
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
        ) 0;
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
<section class="videos">
    <header class="section-header"><h2 class="section-title">Вебинары и видео</h2>
    </header>
    <div class="container">
        <section class="splide-webinars splide" aria-labelledby="carousel-heading">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-11-25</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/775030996">
                                    <img class="single-video-image" src="/img/video/previews/775030996.jpg"
                                         alt="Вовлечённость в вовлечённость"></a>
                                <figcaption class="single-video-caption">
                                    Вовлечённость в вовлечённость
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-08-22</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/741869709">
                                    <img class="single-video-image" src="/img/video/previews/741869709.jpg"
                                         alt="Как достичь лучших HR-метрик развивая вовлеченность"></a>
                                <figcaption class="single-video-caption">
                                    Как достичь лучших HR-метрик развивая вовлеченность
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-05-08</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/736779306">
                                    <img class="single-video-image" src="/img/video/previews/736779306.jpg"
                                         alt="Как правильно измерять и развивать лояльность и стать лучшим работодателем"></a>
                                <figcaption class="single-video-caption">
                                    Как правильно измерять и развивать лояльность и стать лучшим работодателем
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-11-15</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/646129647">
                                    <img class="single-video-image" src="/img/video/previews/646129647.jpg"
                                         alt="Елена Блинова о платформе Happy Job"></a>
                                <figcaption class="single-video-caption">
                                    Елена Блинова о платформе Happy Job
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-09-06</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/560760387">
                                    <img class="single-video-image" src="/img/video/previews/560760387.jpg"
                                         alt="Экономическая польза развития вовлеченности"></a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза развития вовлеченности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-06-03</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/558544165">
                                    <img class="single-video-image" src="/img/video/previews/558544165.jpg"
                                         alt="Экономическая польза оценки лояльности"></a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза оценки лояльности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-05-11</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/547971978">
                                    <img class="single-video-image" src="/img/video/previews/547971978.jpg"
                                         alt="Максим Потапенко о личном кабинете и конструкторе отчетов"></a>
                                <figcaption class="single-video-caption">
                                    Максим Потапенко о личном кабинете и конструкторе отчетов
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2020-09-24</small>
                            <figure class="single-video-picture"><a class="single-video-link"
                                                                    data-fancybox="footer-videos"
                                                                    href="https://vimeo.com/461290977">
                                    <img class="single-video-image" src="/img/video/previews/461290977.jpg"
                                         alt="Зачем измерять вовлеченность и лояльность?"></a>
                                <figcaption class="single-video-caption">
                                    Зачем измерять вовлеченность и лояльность?
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <footer class="section-footer"><a href="https://happy-inc.ru/video/" target="_blank" class="button-outline"
                                      onclick="ym(46152993,'reachGoal','look_all_videos')">Смотреть все видео</a>
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
        max-height: none;
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
        padding: 48px 0 0;
    }

    .testimonials-slider {
        position: relative;
        overflow: hidden;
        flex: 1;
        margin-bottom: -16px;
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
        <header class="section-header"><h2 class="section-title"
                                           style="display: flex; justify-content: center; align-items: baseline;">
                <span class="animated-counter"
                      style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">189</span>
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
                                                 alt=""></div>
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
                                                 loading="lazy" alt=""></div>
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
                                                 loading="lazy" alt=""></div>
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
                                                 loading="lazy" alt=""></div>
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
                                                 loading="lazy" alt=""></div>
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
                                                 loading="lazy" alt=""></div>
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
</script><!-- 12. Форма Протестируйте бесплатно -->
padding: 2rem 0;
}

</style>

