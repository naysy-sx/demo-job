<?php
/** todo запасной вариант вместо правки ЧПУ (для адресов со слешем в конце)

use app\controllers\DynamicPagesController;

// вместо вывода страницы с ошибкой - пробуем найти страницу без слэша
// берем текущий адрес
$cr_url = $_SERVER["REQUEST_URI"];

// если вконце адреса слеш и первоначальная ошибка связана с этим
if (substr($cr_url, -1) == "/") {
    // чистим адрес
    $clear_chpu_url = substr($cr_url, 0, -1);
    $clear_chpu_url = substr($clear_chpu_url, 1);

    // разбиваем на составляющие
    $url_parts           = explode('/', $clear_chpu_url);
    $route['controller'] = $url_parts[1];
    $route['method']     = $url_parts[2];

    // находим материал
    $current_material = DynamicPagesController::findHrBlogMaterial($clear_chpu_url);

    Yii::$app->view->title = $current_material->title;

    Yii::$app->view->registerMetaTag([
        'name'    => 'description',
        'content' => $current_material->meta_description,
    ]);

    return $this->render('../hr-blog/view', [
        'data' => $current_material,
    ]);
}
*/
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
    <title>Ошибка 404</title>
    <meta name="description" content="">
    <meta name="yandex-verification" content="f57dc0111d2a74b9">
    <link rel="preload" href="/css/5c65fe99500fa61f5e36b3ef901dbe83.css" as="style">
    <link rel="shortcut icon" type="image/png" href="/img/happy-job/default/files/favicon.png">
    <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/jquery/swiper/swiper-bundle.min.css">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "additionalType": "AutoRental",
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
            "url": "https://happy-inc.ru/",
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
<body class="page-type-standart">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQNWPVM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
<link async rel="stylesheet" type="text/css" href="/css/5c65fe99500fa61f5e36b3ef901dbe83.css">
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
</script><!-- endrender common/header-menu--><!-- render common/standart-header-image-->
<!-- endrender common/standart-header-image--><!-- render error/404/content-->

<?php echo $content; ?>

<style type="text/css"> .b-grey {
        background: #efefef;
        padding: 80px 0;
    }

    .title-page {
        font-size: 20px;
        font-weight: 300;
        line-height: 1.3;
        color: #233958;
    }

    .title-page span {
        font-size: 50px;
        display: block;
        font-weight: 600;
    }

    .btn-back {
        border: 1px solid #233958;
        border-radius: 5px;
        margin-top: 80px;
        text-transform: uppercase;
        font-weight: 600;
        color: #233958;
    }

    @media (max-width: 480px) {
        .title-page span {
            font-size: 45px;
        }

        .btn-back {
            margin: 30px 0 50px;
        }
    } </style><!-- endrender error/404/content--><!-- render common/footer-->
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
<section class="free-test">
    <div class="free-test-scheme">
        <!-- photo -->
        <figure class="free-test-photo"><img src="/img/happy-job/images/2022/alexey-klochkov.png"
                                             alt="Алексей Клочков, основатель Happy Job" loading="lazy"></figure>
        <!-- content -->
        <article class="free-test-content"><h2 class="form-title">Протестируйте <span>бесплатно!</span></h2>
            <p>Получите полный доступ.</p>
            <ol>
                <li>Заполните форму заявки, и с вами свяжется консультант, чтобы обсудить старт исследования.
                </li>
                <li>Всё, что нужно предоставить — это список email-адресов сотрудников.</li>
                <li>Вы сможете оценить все возможности платформы и подготовиться к полноценному использованию.
                </li>
            </ol>
            <p style="margin-bottom: 0;">Количество респондентов в тестовой группе должно составлять не более 10% от
                                         общего числа
                                         сотрудников, но не менее 5 и не более 100 человек.</p>
        </article><!-- cite --><cite class="free-test-cite">
            <q>Я и мои коллеги уделяем полное внимание всем тестовым проектам.</q>
            <span>
				<a href="https://happy-job.ru/aleksey-klochkov/" style="color: #61c13a;">
					<strong>Алексей Клочков</strong>
				</a>,
				основатель Happy Job.
			</span>
        </cite>

        <div class="free-test-form">
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
            <form id="free-demo" class="c-form" data-parsley-validate>
                <h2>Заголовок по умолчанию</h2>

                <ul class="c-form-list">
                    <li class="c-form-item">
                        <input type="hidden" name="form-id" value="free-demo"></li>
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
                               data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
                    </li>
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
                </ul>
                <button id="free-demo-submit" type="submit" class="button-default">Отправить</button>

                <div class="c-form-policy">
                    <p>
                        Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
                        <br><a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика конфиденциальности</a>
                    </p>
                    <p>
                        Или пишите нам на почту
                        <br><strong>
                            <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                        </strong>
                    </p>
                </div>
            </form>

            <!-- /12. Форма Протестируйте бесплатно -->

            <script>
                $(function () {

                    const maskOptions = {
                        mask: "+{7}(000)000-00-00",
                        lazy: false,
                        placeholderChar: "_",
                    };

                    let inputFields = document.querySelectorAll('#free-demo input[type="tel"]');
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
                                $("#free-demo").find('input[type="text"], input[type="phone"], textarea').val('');
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
                    $('#free-demo input').on('input', function () {
                        const Form = $('#free-demo').parsley();
                    });


                    // 2
                    $('#free-demo-submit').on('click', function (event) {
                        const Form = $('#free-demo').parsley();

                        if (Form.isValid()) {
                            formSubmitHandler(event)
                        }
                    })

                    function formSubmitHandler(event) {
                        event.preventDefault();

                        $(document).find('.main-modal .is-close').trigger('click');
                        const formNode = document.getElementById('free-demo');
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
    </div>
</section>
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
<footer class="page-footer">
    <div class="page-footer-wrapper">
        <div class="page-footer-container">
            <ul class="page-footer-menu footer-menu">
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Продукты</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item -logos">
                            <a href="/" class="footer-submenu-logo" title="Happy Job">
                                <img src="/img/happy-job/images/logo.svg" style="max-width: 163px;"><br><small>Исследование
                                                                                                               и
                                                                                                               развитие
                                                                                                               вовлеченности
                                                                                                               и
                                                                                                               лояльности</small>
                            </a>
                        </li>

                        <li class="footer-submenu-item -logos">
                            <a href="/international/" class="footer-submenu-logo" title="Happy Job International">
                                <img src="/img/happy-job/images/logo-international.svg"
                                     style="max-width: 163px;"><br><small>Вовлеченность по любой методике</small>
                            </a>
                        </li>

                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/happy-service/" class="footer-submenu-logo"
                               title="Happy Service">
                                <img src="/img/logo/happy_service.svg" style="max-width: 213px;"><br><small>Взаимодействие
                                                                                                            подразделений.
                                                                                                            Качество
                                                                                                            внутренних
                                                                                                            процессов.</small>
                            </a>
                        </li>

                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/feedbackx/" class="footer-submenu-logo" title="FeedbackX">
                                <img src="/img/logo/feedbackx.svg" style="max-width: 156px;"><br><small>Опрос
                                                                                                        компетенций
                                                                                                        360<sup>0</sup>.
                                                                                                        Карьерные треки
                                                                                                        и
                                                                                                        Performance</small>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Решения</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/oproskin/" class="footer-submenu-logo" title="">
                                <img src="/img/logo/oproskin.svg" style="max-width: 140px;"><br><small>150+ шаблонов
                                                                                                       корпоративных
                                                                                                       исследований с
                                                                                                       быстрым
                                                                                                       запуском.</small>
                            </a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/climate_survey" class="footer-submenu-link">Climate
                                                                                                               Survey</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/evp" class="footer-submenu-link">Бренд работодателя и
                                                                                                    EVP</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/corporate_culture" class="footer-submenu-link">Уровень
                                                                                                                  корпоративной
                                                                                                                  культуры</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/dms" class="footer-submenu-link">Исследование
                                                                                                    удовлетворенности
                                                                                                    ДМС</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/safety" class="footer-submenu-link">Безопасность и
                                                                                                       охрана <br>труда</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/change" class="footer-submenu-link">Восприятие и
                                                                                                       оценка успеха
                                                                                                       изменений</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/" class="footer-submenu-link">Ещё</a>
                        </li>

                    </ul>
                </li>
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Компания</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item">
                            <a href="/news/" class="footer-submenu-link">Новости</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/clients/benchmarks/" class="footer-submenu-link">Клиенты</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/clients/reviews/" class="footer-submenu-link">Отзывы</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/advantages/" class="footer-submenu-link">Преимущества</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/video/" class="footer-submenu-link">Видео</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/cases/" class="footer-submenu-link">Кейсы</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/webinar/" class="footer-submenu-link">Вебинары</a>
                        </li>

                        <li class="footer-submenu-item">
                            <a href="/hr-blog/" class="footer-submenu-link">Блог</a>
                        </li>
                    </ul>
                </li>
                <li class="footer-menu-block footer-block -contacts">
                    <strong class="footer-block-header">Контакты</strong>
                    <div class="contacts-wrapper">
                        <ul class="footer-submenu">
                            <li class="footer-submenu-item">
                                <a href="/about-us/" class="footer-submenu-link">О нас</a>
                            </li>

                            <li class="footer-submenu-item">
                                <a href="/contacts/support/" class="footer-submenu-link">Клиентская поддержка</a>
                            </li>

                            <li class="footer-submenu-item">
                                <a href="/contacts/sales/" class="footer-submenu-link">Отдел продаж</a>
                            </li>
                        </ul>
                        <div class="footer-contacts" itemscope itemtype="http://schema.org/Organization">
                            <p><a href="tel:+7(495)%20646-83-89" itemprop="telephone">+7(495) 646-83-89</a></p>
                            <p><a href="mailto:sales@happy-job.ru" itemprop="email">sales@happy-job.ru</a></p>
                            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <a target="_blank"
                                   href="https://yandex.ru/maps/213/moscow/house/varshavskoye_shosse_118k1/Z04YcAZoSUYGQFtvfXpycHtkZw==/?indoorLevel=1&ll=37.618031%2C55.631773&z=17">
                                    <span itemprop="postalCode">117587</span>, Россия,
                                    <span itemprop="addressLocality">Москва</span>, <br><span itemprop="streetAddress">Варшавское ш., 118к1, 10эт</span>
                                </a>
                            </address>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container -subfooter">
        <ul class="subfooter-list">
            <li class="footer-link">
                <a href="https://happy-inc.ru/clients/benchmarks/" target="_blank">
                    <img src="/img/happy-job/images/benchmarks.png" loading="lazy" alt="Бенчмарки"><br>Бенчмарки
                </a>
            </li>
            <li class="footer-link">
                <a href="https://happy-inc.ru/infopages/" target="_blank">
                    <img src="/img/happy-job/images/safety.png" loading="lazy" alt="О безопасности платформы"><br>О
                                                                                                                  безопасности
                                                                                                                  платформы
                </a>
            </li>
            <li class="footer-link">
                <a href="https://reestr.digital.gov.ru/reestr/310009/?sphrase_id=1856359" target="_blank">
                    <img src="/img/happy-job/images/reestr.png" loading="lazy" alt="В реестре разработчиков ПО"><br>В
                                                                                                                    реестре
                                                                                                                    разработчиков
                                                                                                                    ПО
                </a>
            </li>
            <li class="footer-link">
                <a href="https://pd.rkn.gov.ru/operators-registry/operators-list/?id=77-18-012108" target="_blank">
                    <img src="/img/happy-job/images/reestr-operator.png" loading="lazy"
                         alt="В реестре операторов перс. данных"><br>В реестре операторов перс. данных
                </a>
            </li>
            <li class="footer-link">
												<span>
							<img src="/img/happy-job/images/iso.png" loading="lazy" alt="Стандарты качества"><br>Стандарты качества
						</span>
            </li>
            <li class="footer-link">
                <a href="/about-us/" target="_blank">
                    <img src="/img/happy-job/images/about-us.png" loading="lazy" alt="О команде Happy Job."><br>О
                                                                                                                команде
                                                                                                                Happy
                                                                                                                Inc.
                </a>
            </li>
        </ul>
    </div>
    <hr class="page-footer-divider">
    <div class="container -copyright">
        <div class="copyright">
            <a href="/">
                <img src="/img/happy-job/images/logo.svg" title="Happy Job"></a>
            <p>
                <a data-fancybox="" data-src="#main-modal" href="javascript:;">©</a>2013 -
                                                                                    2023.
            </p>
            <a href="/privacy-policy/" class="copyright__policy">Политика конфиденциальности</a>
        </div>
        <div class="sitemap">
            <a href="/sitemap/">Карта сайта</a>
        </div>
    </div>
</footer><!-- webinar-girl -->
<div class="hellogirl" style="visibility: hidden; opacity: 0;">
    <span class="hellogirl__close"></span>
    <div class="hellogirl__content">
        <div class="hellogirl__title">Как сформировать «реальный» сильный HR-бренд</div>
        <div class="hellogirl__img">
            <img src="/img/webin_mini.jpg" alt="Как сформировать «реальный» сильный HR-бренд "></div>
        <div class="hellogirl__text">
            <strong>22 июня 11:00</strong>
            <br><strong>Спикер:
                        Алексей Клочков</strong>
        </div>
        <a href="/webinar/" class="hellogirl__button" target="_blank" onclick="ym(46152993,'reachGoal','click_girl')">Подробнее</a>
    </div>
    <div class="hellogirl__video">
        <video id="video-girl" style="display:none" autoplay controls muted>
            <source data-src="/img/p/webinar/wave5_mini.webm" type='video/webm; codecs="avc1.42E01E"'>
            <source data-src="/img/p/webinar/wave5_mini.mp4" type='video/mp4; codecs="avc1.42E01E"'>
        </video>
        <canvas width="230" height="461" id="buffer" style="display: none;"></canvas>
        <canvas width="230" height="230" id="output"></canvas>
    </div>
</div>
<div class="hellogirl__bg"></div>
<!-- /webinar-girl -->
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

</script><!-- endrender common/footer-->
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
                        <input type="date" id="current-date" name="current-date" value="2023-10-04" min="2023-10-04">
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
                <br><a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика конфиденциальности</a>
            </p>
            <p>
                Или пишите нам на почту
                <br><strong>
                    <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                </strong>
            </p>
        </div>
    </form>

    <!-- /12. Форма Протестируйте бесплатно -->

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

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQNWPVM" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<script src="/jquery/imask.js"></script>
<script src="/jquery/parsley/parsley.min.js"></script>
<link rel="stylesheet" href="/jquery/niceSelect/style.css">
<script src="/jquery/niceSelect/jquery.nice-select.min.js"></script>
</body>
</html><!--TEST WORK-->
