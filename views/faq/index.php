<?php $this->title = 'Вопросы и ответы о платформе Happy Job'; ?>
<style>
    .headers-wrapper{
        position: fixed;
        z-index: 100;
        left: 0;
        right: 0;
        top: 0;
    }


    .headers-wrapper.-fixed{
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        background-color: #fff;
    }
    .headers-wrapper.-fixed .topbanner-index{
        display: none;
    }
</style>

<div class="headers-wrapper">
    <style>

        .topbanner-index{
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
        .topbanner-index > *{
            margin: 0 1rem;
        }
        .topbanner-index span{
            color: #fff;
            font-weight: 400;
            font-size: 16px;
        }
        .topbanner-index a{
            position: relative;
            color: var(--c-link);
            font-weight: 400;
            font-size: 16px;
            border-bottom: 1px dashed var(--c-link);
            line-height: 0.8;
            transition: all 0.3s;
        }
        .topbanner-index a:hover{
            color: #fff;
            border-bottom: 1px dashed #fff;
        }
        .topbanner-index a:after{
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

        .topbanner-index a:hover:after{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m268 112l144 144l-144 144m124-144H100'/%3E%3C/svg%3E");
        }

        .page-type-standart,
        .blog-header-padding{
            padding-top: 8.5rem;
        }

        .page-type-news .blog-header-padding{
            padding-top: 0rem;
            margin-top: -1rem;
        }

        @media (max-width: 1200px) {

            .page-type-standart{
                position: relative;
            }

            .topbanner-index{
                flex-direction: column;
                height: 80px;
            }
            .topbanner-index a,
            .topbanner-index span{
                font-size: 14px;
                padding: 0.2rem 0;
            }
            .topbanner-index a:after{
                top: 0px;
            }
        }

        @media(max-width: 577px){
            .page-type-standart,
            .blog-header-padding{
                padding-top: 9rem;
            }
        }


    </style>
    <div class="topbanner-index topbannerID">
        <span>Тренды вовлеченности и лояльности в России 2023. Прогноз на 2024</span>
        <a href="/trends/">Получить отчёт</a>

    </div>



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

        .icon1{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.38 19.59'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.66;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cg class='cls-1'%3E%3Cpath d='M11.37,18.19a12.82,12.82,0,0,1-4.46-.68.47.47,0,0,0-.47.06A11.09,11.09,0,0,1,1.6,19.52c-.29,0-.58.05-.88.07a.67.67,0,0,1-.63-.36.67.67,0,0,1,0-.73,3.19,3.19,0,0,1,.32-.43,6.94,6.94,0,0,0,1.61-3.53A.34.34,0,0,0,2,14.25,7.94,7.94,0,0,1,.46,11.7,7.71,7.71,0,0,1,.68,6a8.44,8.44,0,0,1,1.44-2.2A10.5,10.5,0,0,1,5.4,1.29,12.91,12.91,0,0,1,9.66.09,13.66,13.66,0,0,1,14.08.3,11.78,11.78,0,0,1,18,1.83,9.78,9.78,0,0,1,21.2,5a7.51,7.51,0,0,1,1.16,3.61,7.74,7.74,0,0,1-2.25,6A11.23,11.23,0,0,1,13.66,18,13.79,13.79,0,0,1,11.37,18.19Zm-.32-12.6H12.3a.64.64,0,0,1,.65.74.69.69,0,0,1-.41.55l-1.76,1a1,1,0,0,0-.55.63,2.27,2.27,0,0,0,0,1.24,1,1,0,0,0,1,.67,1,1,0,0,0,.94-.8.46.46,0,0,1,.25-.35l1.16-.65a2.73,2.73,0,0,0-1-5.1,25,25,0,0,0-3.12,0,2.25,2.25,0,0,0-2,1.79A1,1,0,0,0,8.1,6.5a1,1,0,0,0,1.28-.62.4.4,0,0,1,.43-.29Zm1.51,7.71a1.37,1.37,0,1,0-2.73,0,1.3,1.3,0,0,0,1.36,1.38A1.3,1.3,0,0,0,12.56,13.3Z'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .icon2{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.57 18.57'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.66;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M6,.89A1.45,1.45,0,0,0,4.26.05L1.07.92A1.46,1.46,0,0,0,0,2.32,16.25,16.25,0,0,0,16.25,18.57a1.44,1.44,0,0,0,1.4-1.07l.87-3.19a1.45,1.45,0,0,0-.84-1.72L14.2,11.14a1.45,1.45,0,0,0-1.68.42l-1.47,1.79A12.31,12.31,0,0,1,5.22,7.52L7,6.06a1.44,1.44,0,0,0,.42-1.68L6,.9Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .icon-happy-index{
            width: 22px;
            height: 22px;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='31' height='32' viewBox='0 0 31 32'%3E%3Cpath fill='%234d4d4d' d='M17.173 25.067q-2.453 1.92-5.44 1.92t-5.227-1.92q-0.427-0.32-0.373-0.8t0.533-0.64 0.8 0.267q1.813 1.6 4.32 1.547t4.427-1.653q0.32-0.32 0.8-0.107t0.533 0.64-0.373 0.747zM20.053 11.733l-8.107-3.52-8.427 3.52-3.52 8.64 3.627 8.213 8.107 3.413 8.853-3.84 3.2-8.427zM18.667 0q-0.427 0-0.64 0.267t-0.267 0.587 0.053 0.427q0.213 0.427 0.213 0.96v13.227q0 0.427 0.32 0.587t0.64 0 0.32-0.587v-13.227q0-0.427 0.213-0.96v-0.373t-0.267-0.587-0.587-0.32zM28.693 6.187q-0.213 0.32 0 0.533 0.853 1.067 2.027 2.027 0.533 0.427-0.32 0.853h-0.107q-1.173 0.533-2.667 0.32-0.96 0-2.667-0.48t-2.453-0.587q-1.387-0.213-2.453 0.107v-7.147q1.067-0.32 2.347-0.107 0.853 0.107 2.453 0.533 1.813 0.533 2.773 0.64 1.493 0.107 2.773-0.427 0.213-0.107 0.32 0.107t0 0.427q-0.96 1.707-2.027 3.2z'%3E%3C/path%3E%3C/svg%3E");
        }

        a:hover .icon-happy-index{
            background-image: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='31' height='32' viewBox='0 0 31 32'%3E%3Cpath fill='%2386bd4f' d='M17.173 25.067q-2.453 1.92-5.44 1.92t-5.227-1.92q-0.427-0.32-0.373-0.8t0.533-0.64 0.8 0.267q1.813 1.6 4.32 1.547t4.427-1.653q0.32-0.32 0.8-0.107t0.533 0.64-0.373 0.747zM20.053 11.733l-8.107-3.52-8.427 3.52-3.52 8.64 3.627 8.213 8.107 3.413 8.853-3.84 3.2-8.427zM18.667 0q-0.427 0-0.64 0.267t-0.267 0.587 0.053 0.427q0.213 0.427 0.213 0.96v13.227q0 0.427 0.32 0.587t0.64 0 0.32-0.587v-13.227q0-0.427 0.213-0.96v-0.373t-0.267-0.587-0.587-0.32zM28.693 6.187q-0.213 0.32 0 0.533 0.853 1.067 2.027 2.027 0.533 0.427-0.32 0.853h-0.107q-1.173 0.533-2.667 0.32-0.96 0-2.667-0.48t-2.453-0.587q-1.387-0.213-2.453 0.107v-7.147q1.067-0.32 2.347-0.107 0.853 0.107 2.453 0.533 1.813 0.533 2.773 0.64 1.493 0.107 2.773-0.427 0.213-0.107 0.32 0.107t0 0.427q-0.96 1.707-2.027 3.2z'%3E%3C/path%3E%3C/svg%3E");
        }

        .page-header {
            box-shadow: 2px 3px 5px rgb(0 0 0 / 10%);
            z-index: 100;
            height: 76px;
            background: #fff;
        }
        .page-header .container{
            max-width: 1180px;
            height: 100%;
        }
        .page-header-row{
            display: flex;
            justify-content: space-between;
            padding: 0;
            align-items: center;
            height: 100%;
        }
        .page-header-logo{
            flex-basis: 240px;
            min-width: 240px;
        }
        .navigation-list{
            display: flex;
            margin: 0 -1rem;
            padding: 0;
            align-items: center;
        }
        .navigation-item{
            position: relative;
            height: 76px;
            margin: 0;
            padding: 30px 14.3px;
            cursor: pointer;
            background: linear-gradient(0deg, #fff 6px, #fff 6px);
            transition: background 0.3s;
        }
        .navigation-item > a{
            display: block;
            color: var(--c-text);
            font-size: 14.5px;
        }

        .navigation-title{
            position: relative;
            z-index: 3;
            display: flex;
            align-items: center;
            font-size: 14.5px;
            transition: color 0.3s;
        }
        .navigation-title:after{
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

        .navigation-item:not(.-home):hover{
            background: linear-gradient(0deg, #48bf4e 6px, #fff 6px);
        }

        .navigation-item:hover > a{
            color: var(--c-link);
        }

        .navigation-item:hover .navigation-title{
            color: var(--c-link);
        }
        .navigation-item:hover .navigation-title:after{
            transform: scale(-1);
        }

        .auth-icon{
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

        .-home .navigation-link{
            display: block;
            width: 18px;
            height: 18px;
            transform: translate(-18px, -5px);
        }
        .-home .navigation-link svg{
            width: 100%;
            height: 18px;
            transform: scale(1.3, 1.1);
        }
        .-home .navigation-link svg path{
            fill: #212529;
            transition: fill 0.3s;
        }
        .-home .navigation-link:hover svg path{
            fill: var(--c-link);
        }
        .-auth .navigation-title{
            transform: translateY(-3px);
        }

        .navigation-item:nth-child(2) .subnavigation{
            /*z-index: 1;*/
        }

        .subnavigation{
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
        .extra-navigation:before{
            content: '';
            display: block;
            height: 6px;
            background: linear-gradient(0deg, rgba(0,212,255,0) 0%, rgba(0,0,0,0.10127801120448177) 100%);
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .navigation-item:hover .subnavigation{
            z-index: 1;
            opacity: 1;
            visibility: visible;
        }
        .navigation-item:nth-child(7) .subnavigation,
        .navigation-item:nth-child(8) .subnavigation{
            left: inherit;
            right: 0;
        }

        .subnavigation-item{
            position: relative;
            list-style-type: none;
            margin: 0;
        }

        .subnavigation-link,
        .extra-navigation-link{
            display: block;
            white-space: nowrap;
            color: #212529;
            font-size: 14.5px;
            padding: 9px 2rem;
        }

        .subnavigation-link:hover,
        span.subnavigation-link:hover,
        .extra-navigation-link:hover,
        span.extra-navigation-link:hover{
            color: var(--c-link);
        }

        .extra-navigation{
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

        .subnavigation-item:hover .extra-navigation{
            visibility: visible;
            opacity: 1;
            z-index: 1;
        }

        .extra-list{
            margin: 0;
            padding: 0;
        }

        .extra-navigation-header{
            padding: 9px 2rem;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 10px;
            line-height: 1;
            letter-spacing: 0.035em;
            display: block;
            color: #808080;
        }

        .extra-list{

        }

        .extra-navigation-item{
            list-style-type: none;
            margin: 0;
        }

        .extra-navigation-item.-desc .icon{
            width: 1rem;
        }

        .extra-navigation-item.-desc .extra-navigation-link{
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

        .extra-navigation-item.-desc .extra-navigation-link:hover{
            color: var(--c-link);
        }

        .extra-navigation-item.-desc .extra-navigation-icon{
            grid-area: icon;
        }

        .extra-navigation-item.-desc .extra-navigation-title{
            text-transform: uppercase;
            grid-area: title;
            font-weight: bold;
            font-size: 12px;
            line-height: 1.3;
            letter-spacing: 0.4px;
        }
        .extra-navigation-item.-desc .extra-navigation-subtitle{
            grid-area: subtitle;
            font-size: 10px;
            opacity: 0.7;
        }

        .subnavigation-link-arrow{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='%2361C13B' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
            width: 1rem;
            height: 1rem;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            transform: rotate(-90deg) translate(-2px, 5px);
            display: inline-block;
        }

        .contacts-block{
            margin-bottom: -1rem;
            padding-top: 1rem;
            list-style-type: none;
        }

        .params{
            background-color: #f8f8fa;
            padding: 1rem 0;
            border-radius: 0 0 5px 5px;
        }

        .params-item{
            padding: 9px 2rem;
        }

        .params-href{
            display: grid;
            grid-template-columns: 1rem 1fr;
            grid-gap: 10px;
            white-space: nowrap;
            color: #212529;
            font-size: 14.5px;
        }

        .params-href:hover .params-title{
            color: var(--c-link);
        }

        .params-href:hover .icon1{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.38 19.59'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:1;fill:%2361C13B;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cg class='cls-1'%3E%3Cpath d='M11.37,18.19a12.82,12.82,0,0,1-4.46-.68.47.47,0,0,0-.47.06A11.09,11.09,0,0,1,1.6,19.52c-.29,0-.58.05-.88.07a.67.67,0,0,1-.63-.36.67.67,0,0,1,0-.73,3.19,3.19,0,0,1,.32-.43,6.94,6.94,0,0,0,1.61-3.53A.34.34,0,0,0,2,14.25,7.94,7.94,0,0,1,.46,11.7,7.71,7.71,0,0,1,.68,6a8.44,8.44,0,0,1,1.44-2.2A10.5,10.5,0,0,1,5.4,1.29,12.91,12.91,0,0,1,9.66.09,13.66,13.66,0,0,1,14.08.3,11.78,11.78,0,0,1,18,1.83,9.78,9.78,0,0,1,21.2,5a7.51,7.51,0,0,1,1.16,3.61,7.74,7.74,0,0,1-2.25,6A11.23,11.23,0,0,1,13.66,18,13.79,13.79,0,0,1,11.37,18.19Zm-.32-12.6H12.3a.64.64,0,0,1,.65.74.69.69,0,0,1-.41.55l-1.76,1a1,1,0,0,0-.55.63,2.27,2.27,0,0,0,0,1.24,1,1,0,0,0,1,.67,1,1,0,0,0,.94-.8.46.46,0,0,1,.25-.35l1.16-.65a2.73,2.73,0,0,0-1-5.1,25,25,0,0,0-3.12,0,2.25,2.25,0,0,0-2,1.79A1,1,0,0,0,8.1,6.5a1,1,0,0,0,1.28-.62.4.4,0,0,1,.43-.29Zm1.51,7.71a1.37,1.37,0,1,0-2.73,0,1.3,1.3,0,0,0,1.36,1.38A1.3,1.3,0,0,0,12.56,13.3Z'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
        }
        .params-href:hover .icon2{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.57 18.57'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:1;fill:%2361C13B;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M6,.89A1.45,1.45,0,0,0,4.26.05L1.07.92A1.46,1.46,0,0,0,0,2.32,16.25,16.25,0,0,0,16.25,18.57a1.44,1.44,0,0,0,1.4-1.07l.87-3.19a1.45,1.45,0,0,0-.84-1.72L14.2,11.14a1.45,1.45,0,0,0-1.68.42l-1.47,1.79A12.31,12.31,0,0,1,5.22,7.52L7,6.06a1.44,1.44,0,0,0,.42-1.68L6,.9Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
        }

        .params-title{
            text-transform: uppercase;
            font-weight: bold;
            font-size: 12px;
            letter-spacing: 0.01em;
            margin-bottom: 10px;
            color: var(--c-text);
        }

        .params-single{
            display: flex;
            margin: 0;
            padding: 0 0 0 26px;
            white-space: nowrap;

        }

        .params-name{
            color: #666666;
            white-space: nowrap;
            margin-right: 5px;
            font-weight: normal;
            font-size: 11px;
        }

        .params-name:after{
            content: ":";
        }

        .params-value{
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 0.025em;
        }

        .params-link{
            letter-spacing: 0.025em;
            color: #666666;
        }
        .params-link:hover{
            color: var(--c-link)
        }

        .params-value:hover{
            font-weight: bold;
            color: var(--c-link);
        }

        .navigation-button{
            border: none;
            background: none;
            padding: 0.5rem;
        }

        .navigation-button-span{
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

        @media(max-width: 1200px){
            .-mobile:not(.-visible){
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
            .page-header{
                height: 64px;
                padding: 1rem 0;
                top: 0;
            }
            .-mobile .navigation-item.-home{
                display: none;
            }
            .-mobile .navigation-item{
                position: unset;
                height: auto;
            }
            .-mobile .navigation-item:not(.-home):hover{
                background: #fff;
            }
            .-mobile .subnavigation,
            .-mobile .extra-navigation{
                display: none;
                position: absolute;
                z-index: -1;
                box-shadow: none;
                padding: 0.5rem 0;
            }

            .-mobile .extra-navigation{
                background-color: #f8f8fa;
            }

            .-mobile .subnavigation:before,
            .-mobile .extra-navigation:before{
                display: none;
            }

            .-mobile{
                display: block;
                position: absolute;
                left: 0;
                right: 0;
                top: 144px;
                padding: 1rem 0 0;
                height: calc(100vh - 2rem - 20px);
                overflow-y: scroll;
                overflow-x: hidden;
                background-color: #fff;
                box-shadow: inset 2px 3px 5px rgb(0 0 0 / 10%);
            }

            .-fixed .-mobile {
                top: 110px;
            }

            .-mobile .navigation-list{
                margin: 0 1rem;
                flex-direction: column;
                align-items: stretch;
            }
            .-mobile .subnavigation-link{
                padding: 0;
            }
            .-mobile .navigation-title:after{
                font-size: 13px;
                padding: 9px 0;
                transform: rotate(-90deg);
            }
            .-mobile .navigation-item,
            .-mobile .subnavigation-item{
                list-style-type: none;
                padding: 1rem 0;
            }
            .-mobile .auth-icon{
                display: none;
            }
            .-mobile .navigation-item + .navigation-item:not(:last-child){
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            .-mobile .subnavigation-item + .subnavigation-item{
                border-top: 1px solid rgba(0, 0, 0, 0.05);
            }
            .-mobile .navigation-item:hover .navigation-title{

            }
            .-mobile .navigation-item:hover .navigation-title:after{
                transform: rotate(-90deg) translateY(3px);
            }
            .-mobile .navigation-item.-active .subnavigation,
            .-mobile .subnavigation-item.-active .extra-navigation{
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
            .extranavigation-heading{
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
            .extranavigation-heading-back:before{
                content: '\00276F';
                margin-right: 10px;
                transform: rotate(180deg) translateY(2px);
                display: inline-flex;
            }

            .-mobile .subnavigation-link-arrow{
                transform: rotate(-90deg) translate(-3px, 5px);
            }
            .-mobile .subnavigation-item.-active{
                position: unset;
            }
            .-mobile .extra-navigation-header{
                display: none;
            }

            .-mobile .extra-navigation-item{
                margin: 0;
                padding: 1rem 0;
            }

            .-mobile .extra-navigation-link{
                padding: 0;
            }

            .-mobile .extra-navigation-item + .extra-navigation-item{
                border-top: 1px solid rgba(0,0,0,0.05);
            }
            .-mobile .contacts-block{
                list-style-type: none;
                margin-inline: -1rem;
            }
            .-mobile .params-item{
                padding: 9px 1rem;
            }
        }

        @media(min-width: 1200px){
            .subnavigation-heading,
            .extranavigation-heading,
            .navigation-button{
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
            .extra-navigation-title{
                white-space: initial;
                max-width: 95%;
                display: inline-flex;
            }
            .headers-wrapper.-fixed:nth-child(4) .page-header-navigation.navigation.-mobile.-visible{
                top: 64px;
            }
        }

    </style>

    <header class="page-header">
        <div class="container">
            <div class="page-header-row">
                <a href="/" class="page-header-logo">
                    <img src="/img/happy-job/images/logo.svg" alt="Логотип компании Happy Job">
                </a>
                <nav class="page-header-navigation navigation -mobile" id="navigation">
                    <ul class="navigation-list">

                        <li class="navigation-item -home">
                            <a href="/" class="navigation-link" title="На главную">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24">
                                    <path d="m2 13l9.293-9.293a1 1 0 0 1 1.414 0L22 13h-2v8a1 1 0 0 1-1 1h-5v-7h-4v7H5a1 1 0 0 1-1-1v-8H2Z"></path>
                                </svg>
                            </a>
                        </li>

                        <li class="navigation-item ">
														<span class="navigation-title">
																Услуги
							</span>
                            <ul class="subnavigation">
                                <li class="subnavigation-heading">
                                    <strong>Услуги</strong>
                                    <a class="subnavigation-heading-back">Назад</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/engagement/">Исследование вовлеченности</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/loyalty/">Исследование лояльности и eNPS</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/consulting/">Консалтинг изменений</a>
                                </li>

                            </ul>
                        </li>

                        <li class="navigation-item ">
														<span class="navigation-title">
																Платформа
							</span>
                            <ul class="subnavigation">
                                <li class="subnavigation-heading">
                                    <strong>Платформа</strong>
                                    <a class="subnavigation-heading-back">Назад</a>
                                </li>
                                <li class="subnavigation-item">
																		<span class="subnavigation-link">
										Методика исследований
										<b class="subnavigation-link-arrow"></b>
									</span>
                                    <div class="extra-navigation">
                                        <div class="extra-navigation-header">Методика исследований</div>
                                        <ul class="extra-list">
                                            <li class="extranavigation-heading">
                                                <strong>Методика исследований</strong>
                                                <a class="extranavigation-heading-back">Назад</a>
                                            </li>

                                            <li class="extra-navigation-item -desc">
                                                <a href="/types-of-surveys/engagement-survey/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-smile"></b>
														</span>
                                                    <span class="extra-navigation-title">Вовлечённость персонала</span>
                                                    <span class="extra-navigation-subtitle">Всё об оценке и развитии продуктивности среды</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item -desc">
                                                <a href="/types-of-surveys/loyalty-survey/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-flag"></b>
														</span>
                                                    <span class="extra-navigation-title">Лояльность персонала</span>
                                                    <span class="extra-navigation-subtitle">Всё об оценке и развитии граней лояльности</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item -desc">
                                                <a href="/types-of-surveys/enps/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-ensp"></b>
														</span>
                                                    <span class="extra-navigation-title">eNPS</span>
                                                    <span class="extra-navigation-subtitle">Индекс лояльности к компании</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item -desc">
                                                <a href="/types-of-surveys/mnps/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-ensp"></b>
														</span>
                                                    <span class="extra-navigation-title">mNPS</span>
                                                    <span class="extra-navigation-subtitle">Индекс лояльности к руководителю</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item -desc">
                                                <a href="/types-of-surveys/satisfaction-survey/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-like"></b>
														</span>
                                                    <span class="extra-navigation-title">Удовлетворенность персонала</span>
                                                    <span class="extra-navigation-subtitle">Всё об оценке удовлетворенности</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item -desc">
                                                <a href="/happy-index/" class="extra-navigation-link">
														<span class="extra-navigation-icon">
															<b class="icon icon-happy-index"></b>
														</span>
                                                    <span class="extra-navigation-title">Happy Индекс</span>
                                                    <span class="extra-navigation-subtitle">Сводный индекс вовлеченности и лояльности</span>
                                                </a>
                                            </li>



                                        </ul>
                                    </div>
                                </li>
                                <li class="subnavigation-item">
																		<span class="subnavigation-link">
										Наука и технологии
										<b class="subnavigation-link-arrow"></b>
									</span>
                                    <div class="extra-navigation">
                                        <div class="extra-navigation-header">Наука и технологии</div>
                                        <ul class="extra-list">
                                            <li class="extranavigation-heading">
                                                <strong>Наука и технологии</strong>
                                                <a class="extranavigation-heading-back">Назад</a>
                                            </li>

                                            <li class="extra-navigation-item">
                                                <a href="/vovlechennost-i-loyalnost-personala-ot-do-ya/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Книга "Вовлечённость и лояльность персонала от А до Я"</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item">
                                                <a href="/metodika/nauchnoe-obosnovanie-metodiki/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Научное обоснование методики</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item">
                                                <a href="/about-service/method/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Digital-процессы HR Zero</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item">
                                                <a href="/nauka-i-tekhnologii/voprosy-informacionnoy-bezopasnosti/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Вопросы информационной безопасности</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item">
                                                <a href="/hr-blog/#method_materials" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Методические статьи</span>
                                                </a>
                                            </li>



                                        </ul>
                                    </div>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/survey-formats/">Форматы исследований</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/questionnaires/">Анкеты для вашей отрасли</a>
                                </li>
                                <li class="subnavigation-item">
																		<span class="subnavigation-link">
										Бенчмарки
										<b class="subnavigation-link-arrow"></b>
									</span>
                                    <div class="extra-navigation">
                                        <div class="extra-navigation-header">Бенчмарки</div>
                                        <ul class="extra-list">
                                            <li class="extranavigation-heading">
                                                <strong>Бенчмарки</strong>
                                                <a class="extranavigation-heading-back">Назад</a>
                                            </li>

                                            <li class="extra-navigation-item">
                                                <a href="/real-benchmarks/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Настоящие бенчмарки Happy Job</span>
                                                </a>
                                            </li>
                                            <li class="extra-navigation-item">
                                                <a href="/benchmarks/" class="extra-navigation-link">
                                                    <span class="extra-navigation-title">Как устроены бенчмарки</span>
                                                </a>
                                            </li>



                                        </ul>
                                    </div>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/advantages/">Преимущества</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/analogues/">Сравнение с бюджетными аналогами</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/hr-brand/">Диагностика HR-бренда</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/calculator-roi/">Калькулятор ROI</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/news/">Новости и события</a>
                                </li>

                            </ul>
                        </li>

                        <li class="navigation-item ">
														<span class="navigation-title">
																Клиенты
							</span>
                            <ul class="subnavigation">
                                <li class="subnavigation-heading">
                                    <strong>Клиенты</strong>
                                    <a class="subnavigation-heading-back">Назад</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/clients/reviews/">Отзывы</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/clients/benchmarks/">Клиенты по отраслям</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/cases/">Кейсы</a>
                                </li>

                            </ul>
                        </li>

                        <li class="navigation-item ">
														<span class="navigation-title">
																HR-академия
							</span>
                            <ul class="subnavigation">
                                <li class="subnavigation-heading">
                                    <strong>HR-академия</strong>
                                    <a class="subnavigation-heading-back">Назад</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/hr-blog/">HR-блог</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/webinar/">Вебинары</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/video/">Видео</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/trends/">Отчёт по трендам</a>
                                </li>

                            </ul>
                        </li>

                        <li class="navigation-item -auth">
                            <a href="https://happy-job.ru/prices/">Цены</a>
                        </li>

                        <li class="navigation-item ">
														<span class="navigation-title">
																Контакты
							</span>
                            <ul class="subnavigation">
                                <li class="subnavigation-heading">
                                    <strong>Контакты</strong>
                                    <a class="subnavigation-heading-back">Назад</a>
                                </li>
                                <li class="subnavigation-item">

                                    <a class="subnavigation-link" href="/about-us/">О компании</a>
                                </li>

                                <li class="contacts-block">
                                    <div class="contacts-list params">
                                        <div class="params-item">
                                            <a href="/contacts/support/" class="params-href">
													<span class="params-icon">
														<b class="icon icon1"></b>
													</span>
                                                <span class="params-title">Клиентская поддержка</span>
                                            </a>
                                            <dl class="params-single">
                                                <dt class="params-name">Техническая служба</dt>
                                                <dd class="params-value">
                                                    <a href="mailto:support@happy-inc.ru" class="params-link">support@happy-inc.ru</a>
                                                </dd>
                                            </dl>
                                            <dl class="params-single">
                                                <dt class="params-name">Телефон</dt>
                                                <dd class="params-value">
                                                    <a href="tel:+7%20(495)%20215-08-90" class="params-link">+7 (495) 215-08-90</a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="params-item">
                                            <a href="/contacts/sales/" class="params-href">
													<span class="params-icon">
														<b class="icon icon2"></b>
													</span>
                                                <span class="params-title">Отдел продаж</span>
                                            </a>
                                            <dl class="params-single">
                                                <dt class="params-name">Для подключения</dt>
                                                <dd class="params-value">
                                                    <a href="mailto:sales@happy-job.ru" class="params-link">sales@happy-job.ru</a>
                                                </dd>
                                            </dl>
                                            <dl class="params-single">
                                                <dt class="params-name">Телефон</dt>
                                                <dd class="params-value">
                                                    <a href="tel:+7%20(495)%20646-83-89" class="params-link">+7 (495) 646-83-89</a>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="navigation-item -auth">
                            <a href="https://account.happy-inc.ru/#/account/login/">Войти</a>
                        </li>
                    </ul>
                </nav>
                <button class="navigation-button" id="navigation-button">
                    <span class="navigation-button-span"></span>
                </button>
            </div>
        </div>
    </header>
    <script>

        const navigationMenuButton = document.getElementById('navigation-button');
        const navigation = document.getElementById('navigation');
        let page = document.querySelectorAll('html')
        const body = page[0]

        let menuItems = document.querySelectorAll('.navigation-item');


        function navigateMenu(node){

            let elemTarget = node.className.replace(/\s/g, '');
            console.log(elemTarget)

            if(elemTarget == 'navigation-title'){
                document.querySelectorAll('.navigation-item').forEach(item => {
                    item.classList.remove("-active");
                })
                node.parentNode.classList.add("-active");
            }
            if(elemTarget == 'subnavigation-heading-back'){
                document.querySelectorAll('.navigation-item').forEach(item => {
                    item.classList.remove("-active");
                })
            }
            if(elemTarget == 'subnavigation-link'){
                console.log('1111111')
                document.querySelectorAll('.subnavigation-item').forEach(item => {
                    item.classList.remove("-active");
                })
                node.parentNode.classList.add("-active");
            }
            if(elemTarget == 'extranavigation-heading-back'){
                document.querySelectorAll('.subnavigation-item').forEach(item => {
                    item.classList.remove("-active");
                })
            }
            console.log('Клик')
        }





        function detectScreenWidth(){
            let viewPortWidth = window.innerWidth;
            if(viewPortWidth <= 1200){
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

            }else{
                navigation.classList.remove("-mobile")
                navigationMenuButton.removeEventListener("click", displayMenu);
            }
        }





        function displayMenu(){
            navigation.classList.toggle("-visible");
            body.classList.toggle("-ovh");
        }

        detectScreenWidth()

        addEventListener("resize", (event) => {
            detectScreenWidth()
        });






    </script>
</div>

<div class="container mainc">
    <main>
        <div class="top-baner wide-container" id="super-title-wrap">
            <img src="/img/happy-job/images/header_faq_0.jpg">
            <div class="container">
                <div class="title wtext">
                    <h1>Вопросы и ответы</h1>
                </div>
            </div>
        </div>
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

                                <span itemprop="name">Вопросы и ответы</span>

                                <meta itemprop="position" content="3">
                            </li>
                        </ul>
                    </nav>
                </div>

                <aside class="anchor-menu">
                    <ul>
                        <li>
                            <a href="#title0"> Методика </a>
                        </li>
                        <li>
                            <a href="#title1"> Переход на Happy Job </a>
                        </li>
                        <li>
                            <a href="#title2"> Пульс-опросы </a>
                        </li>
                        <li>
                            <a href="#title3"> Ежегодные опросы и экономический
                                               эффект </a>
                        </li>
                        <li>
                            <a href="#title4"> Отчёты, обратная связь с сотрудниками и рекомендации по развитию </a>
                        </li>
                        <li>
                            <a href="#title5"> Подключение и поддержка </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-sm-8 col-lg-9">
                <main role="main">
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

                                    <span itemprop="name">Вопросы и ответы</span>

                                    <meta itemprop="position" content="3">
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="accordion-page" id="accordion">
                        <h2 class="header Metodika" id="title0">Методика</h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-143">
                                    <a href="#collapse-143" aria-controls="collapse-143" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Наша миссия
                                    </a>
                                </div>
                                <div id="collapse-143" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Happy Job переводится как «счастливая работа». Мы верим, что
                                            работа должна быть именно такой.
                                        </p>
                                        <p>
                                            Какую бы область жизни мы ни рассматривали, повсюду ключевым
                                            фактором, побуждающим человека к действию, будет стремление
                                            стать счастливым, избавиться от плохих эмоций. В
                                            профессиональной деятельности счастье — также центральный
                                            мотив.
                                        </p>
                                        <p>
                                            Можно возразить, что люди приходят на работу не за счастьем, а
                                            за деньгами, статусом или из-за необходимости. Но, в конечном
                                            счёте, и первое, и второе, и третье нужно человеку для личного
                                            счастья: чувствовать себя в безопасности, материально
                                            обеспеченным, получать признание коллектива и заниматься
                                            интересной работой в продуктивной среде. Комплексное понятие,
                                            характеризующее продуктивность среды и наличие факторов,
                                            обеспечивающих настрой и мотивацию человека, принято называть
                                            вовлечённостью персонала.
                                        </p>
                                        <p>
                                            Миссия Happy Job основана на том, что логичнее и
                                            целесообразнее стимулировать сотрудников к работе, обращаясь
                                            напрямую к главному стремлению обрести счастье, меняя для
                                            этого окружение на работе и внутреннее состояние.
                                        </p>
                                        <p>
                                            Повышение вовлечённости выгодно не только в экономическом
                                            плане для компании, но и в личностном — для сотрудников.
                                            Человек посвящает большую часть жизни работе, и важно, чтобы
                                            именно там ему было комфортно, чтобы он чувствовал себя
                                            счастливым и получал честное вознаграждение за свой труд.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-145">
                                    <a href="#collapse-145" aria-controls="collapse-145" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Создание методики Happy Job
                                    </a>
                                </div>
                                <div id="collapse-145" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        С 2006 года команда Happy Job, куда входили разработчики,
                                        web-дизайнеры, социологи, психологи и HR-специалисты, изучала
                                        международный опыт и лучшие практики в области проведения
                                        опросов среди персонала. В 2016 мы разработали платформу Happy
                                        Job, с помощью которой изучать уровень вовлечённости и
                                        лояльности персонала стало просто и удобно. <br>
                                        <br>
                                        В процессе создания платформы мы изучили более четырёхсот
                                        формулировок вопросов международных провайдеров услуг по оценке
                                        вовлечённости и лояльности персонала. Финальная выборка
                                        вопросов, которые используются на нашей платформе, прошла
                                        проверку на фокус-группах — так мы убедились, что вопросы и
                                        ответы понятны респондентам. <br>
                                        <br>
                                        Вовлечённость и лояльность персонала на платформе Happy Job
                                        оцениваются по 10 метрикам вовлечённости и 5 метрикам
                                        лояльности.<br>
                                        <br>
                                        Метрики вовлечённости:<br>
                                        1.«Руководитель»<br>
                                        2.«Стратегия»<br>
                                        3.«Признание»<br>
                                        4.«Обратная связь»<br>
                                        5.«Процессы»<br>
                                        6.«Изменения»<br>
                                        7.«Карьера»<br>
                                        8.«Коллеги»<br>
                                        9.«Баланс»<br>
                                        10.«Условия и оплата»<br>
                                        <br>
                                        Метрики лояльности:<br>
                                        1.«Гордится компанией»<br>
                                        2.«Остаётся в будущем»<br>
                                        3.«Рекомендует компанию» / «Рекомендует руководителя»<br>
                                        4.«Остаётся сейчас»<br>
                                        5.«Стремится делать больше»<br>
                                        <br>
                                        В анкете 50 вопросов для оценки вовлечённости и 6 — для оценки
                                        лояльности. Мы используем закрытые и открытые типы вопросов.<br>
                                        <br>
                                        <a href="/types-of-surveys/engagement-survey/">Узнать подробнее о методике исследования вовлечённости
                                                                                       персонала</a><br>
                                        <br>
                                        <a href="/types-of-surveys/loyalty-survey/">Узнать подробнее о методике исследования лояльности
                                                                                    персонала</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-146">
                                    <a href="#collapse-146" aria-controls="collapse-146" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Чем платформа отличается от аналогичных провайдеров услуг?
                                    </a>
                                </div>
                                <div id="collapse-146" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Традиционные методы изучения вовлечённости и лояльности
                                            персонала технически несовершенные и неудобные. Они не могут
                                            безопасно хранить данные в соответствии с законодательством
                                            России, а отчёты формируют долго и без отражения всех важных
                                            показателей. Но главная проблема подобных методов в том, что
                                            они скучные: персонал просто не участвует в опросах, и в итоге
                                            деньги компании тратятся впустую.
                                        </p>
                                        <p class="western">
                                            Методология Happy Job создана на основе международного опыта в
                                            области работы с изменениями: мы опирались на лучшие практики
                                            крупнейших международных провайдеров исследований
                                            вовлечённости и лояльности. Этот опыт позволил команде Happy
                                            Job создать уникальную методику по изучению вовлечённости и
                                            лояльности персонала с помощью digital-инструментов.
                                        </p>
                                        <p class="western">
                                            Опыт участия в опросах Happy Job как положительный оценил
                                            98,1% респондентов. На сегодняшний день общее число участников
                                            опросов превышает 3 000 000 человек из более чем 800 компаний.
                                        </p>
                                        <p class="western">
                                            Процент участия в опросах Happy Job всегда выше 70% (в среднем
                                            — 75%). Показатель участия, как правило, растёт со временем,
                                            так как сотрудники привыкают к платформе.
                                        </p>
                                        <p class="western">
                                            Мы постоянно ведём работы над улучшением методологии,
                                            структуры вопросов, занимаемся собственными научными
                                            исследованиями. Один из наших приоритетов — уменьшение
                                            погрешности результатов опросов. На сегодняшний день
                                            показатель снизился до 2–2,1%.
                                        </p>
                                        <p class="western">
                                            Одновременно мы обучаем своих сотрудников, развиваем
                                            компетенции и не боимся быстрых изменений, чтобы поддерживать
                                            инновационность и постоянно оставаться самой современной и
                                            технологичной платформой для современного бизнеса.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-147">
                                    <a href="#collapse-147" aria-controls="collapse-147" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Почему не во всех компаниях оценивают вовлечённость и лояльность
                                        сотрудников?
                                    </a>
                                </div>
                                <div id="collapse-147" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            В некоторых компаниях не считают нужным обращать внимание на
                                            внутренние вопросы и взаимодействие между сотрудниками.
                                            Главное, чтобы люди работали, а сколько на это уходит времени,
                                            довольны ли они своим рабочим местом, и часто ли происходят
                                            кадровые перестановки — дело второстепенное. Это простой
                                            подход, но он лишает людей любви к работе и увлечённости
                                            процессом, а всю компанию — возможности развиваться и
                                            увеличивать доход.
                                        </p>
                                        <p>
                                            Есть и другая причина: многие руководители понимают, что
                                            работа по развитию вовлечённости и лояльности персонала —
                                            комплексный и трудный процесс. Для этого потребуется проводить
                                            опросы, анализировать результаты исследований, модернизировать
                                            рабочий процесс, на всех уровнях внедрять новые принципы
                                            взаимодействия. А к переменам и активным действиям готовы не
                                            все.
                                        </p>
                                        <p>
                                            Для директоров, которые занимаются повышением продуктивности
                                            компании, более привлекательным вариантом кажется внедрение
                                            технологии или инструмента, который чудесным образом изменит
                                            работу в компании. Но так не бывает: для успеха нужен
                                            комплексный инструмент, который воздействует на первопричину
                                            производительности, а именно — на корпоративную культуру.
                                        </p>
                                        <p>
                                            Благодаря платформе Happy Job руководители и HR-специалисты
                                            могут легко сделать оценку вовлечённости и лояльности
                                            коллектива и стратегически планировать работу над увеличением
                                            этих показателей.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-148">
                                    <a href="#collapse-148" aria-controls="collapse-148" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как понять, что низкая заинтересованность персонала в работе
                                        требует вмешательства?
                                    </a>
                                </div>
                                <div id="collapse-148" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Ещё до проведения комплексного анализа посредством опросов
                                            можно понять, что в компании сложилась неблагоприятная
                                            ситуация. Вот чек-лист проблем, возникающих при низкой
                                            вовлечённости и лояльности персонала:
                                        </p>
                                        <p>
                                            • Низкая конкурентоспособность. Расходы компании растут, а
                                            продажи падают.<br>
                                            • Руководители занимаются тотальным контролем над сотрудниками
                                            вместо принятия стратегических решений и развития компании.<br>
                                            • Полномочия есть только у верхних звеньев в организации, у
                                            среднего звена и рядовых сотрудников их нет.<br>
                                            • Никто никому не доверяет. В организации вместо продуктивной
                                            работы плетутся интриги, идёт постоянное выяснение отношений.
                                            Каждый играет сам за себя, а не за команду. Никакой
                                            инициативы. Отсутствие доверия и уважения. Много критики и
                                            штрафов, мало поощрений и внимания к успехам отдельных
                                            сотрудников.<br>
                                            • Приоритет мнения руководства над потребностями клиентов.<br>
                                            • Много неэффективной бумажной работы, гипертрофированная
                                            отчётность и бюрократизация.<br>
                                            • Высокая текучесть кадров. Ценные сотрудники покидают
                                            компанию.<br>
                                            • Высокие затраты на подбор и удержание персонала. Для
                                            привлечения и удержания специалистов приходится устанавливать
                                            зарплаты минимум на треть выше, чем у конкурентов.<br>
                                            • В компании невозможно внедрить изменения: сотрудники
                                            саботируют предложения и инициативы, реализация проектов
                                            происходит только под жёстким контролем каждого этапа.
                                        </p>
                                        <p>
                                            Если в вашей компании есть хотя бы один из этих признаков,
                                            немедленно принимайте меры.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-149">
                                    <a href="#collapse-149" aria-controls="collapse-149" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как выглядит анкета опроса?
                                    </a>
                                </div>
                                <div id="collapse-149" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Мы уделили большое внимание визуальному оформлению, чтобы
                                            участникам было интересно проходить опрос: у Happy Job есть
                                            собственный стиль, анимация, эмодзи и другие вовлекающие
                                            визуальные элементы.
                                        </p>
                                        <p>
                                            Анкета интуитивно понятна всем участникам опроса. Вопросы
                                            сформулированы максимально чётко, так что респондентам не
                                            нужно долго раздумывать над ответами. Сотрудники могут
                                            отвечать на вопросы анонимно, а значит, могут быть честны в
                                            своих ответах.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-151">
                                    <a href="#collapse-151" aria-controls="collapse-151" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Проводит ли Happy Job исследование удовлетворённости персонала?
                                    </a>
                                </div>
                                <div id="collapse-151" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        Happy Job производит комплексную оценку ситуации в коллективе.
                                        Она включает вовлечённость, лояльность и удовлетворённость
                                        сотрудников.<br>
                                        <br>
                                        Удовлетворённость персонала определяется по 5 метрикам:<br>
                                        1.«Оплата»<br>
                                        2.«Условия труда»<br>
                                        3.«Интерес»<br>
                                        4.«Безопасность»<br>
                                        5.«Комфорт труда»<br>
                                        <br>
                                        <a href="/types-of-surveys/satisfaction-survey/">Узнать подробнее о методике исследования удовлетворённости
                                                                                         персонала</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-152">
                                    <a href="#collapse-152" aria-controls="collapse-152" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как определяются индекс вовлечённости и индекс лояльности?
                                    </a>
                                </div>
                                <div id="collapse-152" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Индекс вовлечённости определяется по результатам опросов
                                            сотрудников компании по 10 метрикам вовлечённости. Ответы
                                            формируют средний балл от 0 до 10 для каждой метрики. Среднее
                                            арифметическое по метрикам вовлечённости становится индексом
                                            вовлечённости.
                                        </p>
                                        <p>
                                            Аналогичным образом рассчитывается индекс лояльности. Каждой
                                            метрике лояльности соответствует свой вопрос. Ответ на него
                                            формирует балл от 0 до 10. Среднее арифметическое для всех
                                            метрик лояльности является индексом лояльности сотрудников.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-153">
                                    <a href="#collapse-153" aria-controls="collapse-153" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Почему карта вовлечённости состоит из 10 метрик и как с ними
                                        работать?
                                    </a>
                                </div>
                                <div id="collapse-153" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Вовлечённость персонала — это состояние, при котором
                                            сотрудники неравнодушны к результату своей работы. Это
                                            комплексное понятие, которое оценивает отдачу персонала,
                                            мотивацию к работе, инициативность сотрудников и желание
                                            делиться своим опытом и знанием с другими. Вовлечённые
                                            сотрудники — мечта любого руководителя, ведь это люди, которые
                                            стараются достигать высоких результатов и готовы вкладываться
                                            в работу.
                                        </p>
                                        <p>
                                            Мы выделили основные факторы, которые влияют на вовлечённость
                                            сотрудника, и на их базе создали 10 метрик вовлечённости с 5-ю
                                            субметриками в каждой. Такой подход позволяет всесторонне
                                            оценить внутреннее состояние сотрудников и степень
                                            продуктивности рабочей среды в компании.
                                        </p>
                                        <p>
                                            В видео ниже о метриках вовлечённости Happy Job рассказывает
                                            основатель компании Happy Job. и разработчик методики
                                            исследования Алексей Клочков.
                                        </p>
                                        <div class="video-case">
                                            <a data-fancybox="" href="https://vimeo.com/392212317?autoplay=1">
                                                <figure class="videos-block">
                            <span class="videos-image-wrapper">
                                <picture>
                                    <source srcset="/img/p/index/video-nauchnoe-obosnovanie-metodiki.webp" type="image/webp"><img src="/img/p/index/video-nauchnoe-obosnovanie-metodiki.jpg" class="videos-image" loading="lazy" alt="Исследование вовлечённости и лояльности сотрудников" title="Исследование вовлечённости и лояльности сотрудников" itemprop="thumbnailUrl">
                                </picture>
                            </span>
                                                    <figcaption class="videos-caption">
                                                        <div class="videos-heading" itemprop="name">
                                                            Исследование вовлечённости и лояльности сотрудников
                                                        </div>
                                                        <div itemprop="description" style="display: none" hidden="">
                                                            Видео Happy Job
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <b class="videos-play-button">
                                                    <div class="play-button">
                                                        <svg class="play-circle white"><use xlink:href="#videoCircle"></use></svg>
                                                        <svg class="play-triangle white"><use xlink:href="#videoTriangle"></use></svg>
                                                    </div>
                                                </b>
                                            </a>
                                        </div>
                                        <p>
                                            <a href="/types-of-surveys/engagement-survey/">Прочитать о методике исследования вовлечённости
                                                                                           персонала</a>
                                        </p>
                                        <p>
                                            После завершения опроса вы получите отчёт, в котором наглядно
                                            показаны проблемные и сильные стороны организации с точки
                                            зрения вовлечённости и привлекательности работодателя.
                                            Платформа производит анализ результата и подсказывает, какие
                                            шаги предпринять для улучшения ситуации.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-154">
                                    <a href="#collapse-154" aria-controls="collapse-154" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как лучше мотивировать сотрудников — кнутом или пряником?
                                    </a>
                                </div>
                                <div id="collapse-154" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Многие люди согласятся, что на работе их удерживает только
                                            страх увольнения и ухудшения финансового положения, а
                                            выполнять рабочие обязанности заставляет боязнь штрафов и
                                            выговоров. Метод «запугивания» всё ещё существует в условиях
                                            нечестной конкуренции или монопольных компаниях, несмотря на
                                            то, что в современной культуре широко известна его
                                            несостоятельность.
                                        </p>
                                        <p>
                                            Сотрудник, который не любит свою работу, находится в стрессе.
                                            Он менее продуктивен и не заинтересован в том, чтобы проявлять
                                            инициативу — ведь это просто дополнительный повод для придирок
                                            руководителя и лишние риски.
                                        </p>
                                        <p>
                                            Напротив, забота о сотрудниках, создание привлекательных
                                            условий и перспектив гораздо более результативны. Добиться
                                            успеха можно только с лучшими сотрудниками — а лучшими они
                                            становятся, когда вы создаёте возможности для их роста и
                                            условия для комфортной и продуктивной работы.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-155">
                                    <a href="#collapse-155" aria-controls="collapse-155" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        С помощью каких вопросов можно исследовать вовлечённость и
                                        лояльность персонала?
                                    </a>
                                </div>
                                <div id="collapse-155" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Вам не придётся самостоятельно писать вопросы. Мы тщательно
                                            отбирали материалы для Happy Job, пока не убедились, что
                                            финальная выборка из вопросов и ответов даёт точное
                                            представление о состоянии вовлечённости и лояльности
                                            персонала. Базовые вопросы Happy Job прошли проверку на 350
                                            000 сотрудниках из 150 разных компаний, и их эффективность
                                            была доказана на практике.
                                        </p>
                                        <p>
                                            Дополнять опросы можно: мы оставили опцию для редактирования
                                            вопросов. Наши специалисты готовы рассказать об этом подробнее
                                            и дать рекомендации по составлению вопросов.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="header Perekhod-na-Happy-Job" id="title1">
                            Переход на Happy Job
                        </h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-157">
                                    <a href="#collapse-157" aria-controls="collapse-157" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Сложен ли технически переход на нового провайдера?
                                    </a>
                                </div>
                                <div id="collapse-157" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Может показаться, что переход на нового провайдера будет
                                            технически сложным и утомительным. На практике это не так. Для
                                            начала работы с Happy Job нужно только предоставить данные
                                            старых отчётов по исследованию вовлечённости и лояльности в
                                            Excel. Наши специалисты загрузят их на платформу, после чего
                                            можно сразу приступать к работе.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-158">
                                    <a href="#collapse-158" aria-controls="collapse-158" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как понять, что пора сменить провайдера?
                                    </a>
                                </div>
                                <div id="collapse-158" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Мы рекомендуем обратить внимание на следующие аспекты:
                                        </p>
                                        <ol>
                                            <li>
                                                <p class="western">
                                                    Сильные и слабые стороны. Удобно ли использовать
                                                    платформу, которой вы пользуетесь сейчас? Устраивает ли
                                                    вас процент участия, или можно улучшить этот показатель?
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Уровень вовлечённости в опросы. Если в процессе принимает
                                                    участие от 75% сотрудников — всё в порядке. Если меньше
                                                    60% — пора менять тактику.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Интерес к участию. Как сотрудники отзываются об опросах?
                                                    Интересно ли им заполнять анкеты? Могут ли они выражать
                                                    своё мнение открыто?
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Дизайн отчётов. Понятны ли полученные данные на 100%? Как
                                                    много времени занимает анализ отчётов? Помогает ли новая
                                                    информация добиться положительных изменений в компании?
                                                    Если ответы отрицательные, то стоит задуматься о смене
                                                    провайдера.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Изменения после опроса. Технические возможности вашего
                                                    провайдера должны позволять внедрять и измерять перемены,
                                                    иначе не будет результата.
                                                </p>
                                            </li>
                                        </ol>
                                        <p class="western">
                                            Если у вас остались вопросы, или вы хотите начать пользоваться
                                            Happy Job, будем рады
                                            <span class="contact contact_link" data-fancybox data-src="#main-modal" href="javascript:;">проконсультировать</span>
                                            вас.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-159">
                                    <a href="#collapse-159" aria-controls="collapse-159" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Возможно ли интегрировать старые данные с Happy Job?
                                    </a>
                                </div>
                                <div id="collapse-159" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">Да, это возможно.</p>
                                        <p class="western">
                                            Наша платформа поддерживает интеграцию с большинством
                                            провайдеров услуг по оценке вовлечённости.
                                            <span class="contact contact_link" data-fancybox data-src="#main-modal" href="javascript:;" data-formtitle="Заказать консультацию">Закажите</span>
                                            консультацию специалиста Happy Job, чтобы узнать, совместимы
                                            ли ваши данные с платформой.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-160">
                                    <a href="#collapse-160" aria-controls="collapse-160" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Когда не нужно интегрировать старые данные?
                                    </a>
                                </div>
                                <div id="collapse-160" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Если с момента последнего опроса прошло более трёх лет, то,
                                            скорее всего, данные потеряли актуальность. Любые крупные
                                            изменения — внедрение новых технологий, смена руководства
                                            или коллектива — также означают, что сравнивать
                                            результаты опросов, вероятно, бессмысленно. В таких случаях мы
                                            рекомендуем начинать с чистого листа.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-161">
                                    <a href="#collapse-161" aria-controls="collapse-161" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как работает Happy Job — онлайн или офлайн?
                                    </a>
                                </div>
                                <div id="collapse-161" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Опросы проходят онлайн. Сервисы Happy Job доступны с любого
                                            устройства: компьютера, планшета или смартфона. При
                                            необходимости мы также устанавливаем терминалы общего
                                            пользования, с помощью которых любой сотрудник без
                                            собственного гаджета может пройти опрос.
                                        </p>
                                        <p>
                                            Приоритет платформы — надёжная защита персональной информации.
                                            Любые данные, которые Happy Job использует при работе,
                                            хранятся на серверах в России.
                                        </p>
                                        <p>
                                            Обратитесь к нашим менеджерам, и они расскажут подробнее о
                                            каждом способе работы с Happy Job и помогут выбрать подходящий
                                            вариант.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-162">
                                    <a href="#collapse-162" aria-controls="collapse-162" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Можно ли проходить опросы без подключения к интернету?
                                    </a>
                                </div>
                                <div id="collapse-162" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Да, это возможно. Есть два способа пользоваться Happy Job без
                                            подключения к интернету:
                                        </p>
                                        <ol>
                                            <li>
                                                <p class="western">Через корпоративный интранет.</p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    С помощью устройств, на которых установлена платформа
                                                    Happy Job, — терминалов общего пользования.
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-163">
                                    <a href="#collapse-163" aria-controls="collapse-163" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Если у сотрудников нет электронной почты или постоянного доступа
                                        в Интернет, как их привлечь к опросам?
                                    </a>
                                </div>
                                <div id="collapse-163" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Для нас важно обеспечить максимальное участие ваших
                                            сотрудников в опросах. Поэтому мы приготовили несколько
                                            способов, как воспользоваться платформой Happy Job без
                                            отдельного устройства:
                                        </p>
                                        <p>
                                            — Через терминалы общего пользования, которые мы можем
                                            установить по запросу.<br>
                                            — При прохождении опросов в офлайн-режиме.<br>
                                            — Используя общие ссылки для подключения к опросу — с их
                                            помощью можно заходить на платформу через один компьютер.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-164">
                                    <a href="#collapse-164" aria-controls="collapse-164" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Можно ли включать в опрос свои вопросы?
                                    </a>
                                </div>
                                <div id="collapse-164" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Вопросы, которые мы используем на платформе, доказали свою
                                            эффективность, и 90% клиентов Happy Job используют их без
                                            изменений. Точность результата составляет 99,5%, поэтому вы
                                            всегда получите достоверные данные о ситуации в компании.
                                        </p>
                                        <p class="western">
                                            Тем не менее, базовый набор вопросов можно кастомизировать и
                                            настраивать с учётом специфики вашей организации.
                                        </p>
                                        <p class="western">Есть два пути, как это можно сделать:</p>
                                        <ol>
                                            <li>
                                                <p class="western">
                                                    Обратиться к консультантам Happy Job — они помогут вам
                                                    адаптировать вопросы под ваши задачи.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Настроить вопросы самостоятельно через платформу.
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video_in_section" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
                            <span itemprop="name"> Переход на Happy Job </span>
                            <div class="video-case">
                                <a data-fancybox="" href="https://vimeo.com/711983509?autoplay=1">
                                    <figure class="videos-block">
                      <span class="videos-image-wrapper">
                          <picture>
                              <source srcset="/img/p/index/video-faq-1.webp" type="image/webp"><img src="/img/p/index/video-faq-1.jpg" class="videos-image" loading="lazy" alt="Переход на Happy Job" title="Переход на Happy Job" itemprop="thumbnailUrl">
                          </picture>
                      </span>
                                        <figcaption class="videos-caption">
                                            <div class="videos-heading" itemprop="name">
                                                Переход на Happy Job
                                            </div>
                                            <div itemprop="description" style="display: none" hidden="">
                                                Видео Happy Job
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <b class="videos-play-button">
                                        <div class="play-button">
                                            <svg class="play-circle white"><use xlink:href="#videoCircle"></use></svg>
                                            <svg class="play-triangle white"><use xlink:href="#videoTriangle"></use></svg>
                                        </div>
                                    </b>
                                </a>
                            </div>
                        </div>
                        <div class="pdf">
                            <div class="title">Получить демо-версию и буклет</div>
                            <p>
                                Просто введите свой адрес электронной почты, и мы предоставим доступ
                                к демо-версии и отправим вам PDF-презентацию.
                            </p>
                            <p style="margin-bottom: 0.75rem">
                                <a class="button-default" data-fancybox data-src="#main-modal" href="javascript:;">Отправить заявку</a>
                            </p>
                        </div>
                        <h2 class="header Puls-oprosy" id="title2">Пульс-опросы</h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-166">
                                    <a href="#collapse-166" aria-controls="collapse-166" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как проводятся исследования в формате пульс-опросов?
                                    </a>
                                </div>
                                <div id="collapse-166" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Периодические пульс-опросы — это короткие онлайн-опросы,
                                            которые проводятся 1 раз в неделю или 1 раз в две недели.
                                            Таким образом, 59 вопросов платформы разбиваются на блоки по
                                            5–10 вопросов, не отнимают много времени у сотрудников, и
                                            персонал охотнее участвует в их заполнении.
                                        </p>
                                        <p>
                                            Провайдеры пульс-опросов должны соблюдать требования по
                                            информационной безопасности, защите персональных данных, а
                                            также доступности опросов с любых устройств. Happy Job
                                            отвечает этим требованиям. Сотрудники могут отвечать на
                                            вопросы анонимно, а результаты опросов полностью
                                            конфиденциальны и защищены современными средствами шифрования.
                                            Персональные данные хранятся на серверах российских облачных
                                            хранилищ и доступны руководителям с любого устройства с
                                            выходом в интернет.
                                        </p>
                                        <p>
                                            Мы создали Happy Job, чтобы сделать процесс сбора обратной
                                            связи от сотрудников удобным и простым в использовании.
                                            Платформа интуитивно понятна, сама анализирует данные и
                                            формирует исчерпывающий анализ вовлечённости и лояльности
                                            персонала.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-167">
                                    <a href="#collapse-167" aria-controls="collapse-167" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как от недели к неделе платформа увеличивает вовлечённость и
                                        лояльность?
                                    </a>
                                </div>
                                <div id="collapse-167" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Платформа Happy Job анализирует данные опросов и составляет
                                            точные рекомендации для улучшения каждой из 10 метрик
                                            вовлечённости и 5 метрик лояльности.
                                        </p>
                                        <p>
                                            Регулярное проведение опросов помогает увеличить вовлечённость
                                            и лояльность сотрудников. Точно так же, как процесс изучения
                                            языка или занятия в спортзале, модернизация работы в компании
                                            требует постоянного внимания. Регулярно посещайте уроки
                                            английского, и вы скоро заговорите на нём. Приучите
                                            сотрудников каждую неделю проходить опрос или активно
                                            участвовать в полугодовых опросах, и компания улучшит свои
                                            показатели.
                                        </p>
                                        <p>
                                            Целенаправленно меняйте непродуктивные и бесполезные
                                            корпоративные привычки на позитивные и каждую неделю следите
                                            за результатом. Пройдёт немного времени, и сотрудники будут
                                            более мотивированы к работе, чувствуя себя счастливее, а
                                            компания станет желанным работодателем для соискателей.
                                        </p>
                                        <p>
                                            Для сотрудников это станет своеобразным ритуалом — читать и
                                            обсуждать с коллегами хорошо оформленные рекомендации,
                                            укомплектованные качественной инфографикой и полезными
                                            статьями, которые касаются конкретной ситуации или зоны
                                            развития.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-168">
                                    <a href="#collapse-168" aria-controls="collapse-168" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Зачем использовать платформу постоянно, если можно провести
                                        опрос один раз и воспользоваться рекомендациями?
                                    </a>
                                </div>
                                <div id="collapse-168" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Когда ваши сотрудники участвуют в опросах регулярно, у них
                                            появляется привычка давать обратную связь, делиться своими
                                            переживаниями и желаниями. Это благотворно влияет на
                                            корпоративную культуру компании: можно эффективно отслеживать
                                            и выполнять запросы сотрудников. Благодаря такому подходу
                                            коллектив чувствует себя услышанным и охотнее участвует в
                                            жизни организации.
                                        </p>
                                        <p>
                                            Ежегодные исследования также важны — они позволяют изучать
                                            динамику изменений настроений в компании за большой период
                                            времени. Однако важно помнить, что в коллективе постоянно
                                            меняются отношения между коллегами, амбиции и желания
                                            сотрудников. Если постоянно наблюдать за этими изменениями,
                                            получится вовремя реагировать на изменения в настроениях,
                                            устранять зарождающиеся конфликты, делать сотрудников
                                            счастливее и продуктивнее.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-169">
                                    <a href="#collapse-169" aria-controls="collapse-169" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Обязательно ли каждую неделю уделять внимание показателям
                                        вовлечённости и лояльности сотрудников?
                                    </a>
                                </div>
                                <div id="collapse-169" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Если вы хотите улучшить положение компании на рынке, то над
                                            развитием корпоративной культуры и улучшением качества жизни
                                            каждого сотрудника придётся работать регулярно.
                                        </p>
                                        <p>
                                            Одноразовые меры не принесут эффекта. Вовлечение сотрудников —
                                            это процесс, который длится на протяжении всего сотрудничества
                                            компании с каждым человеком. Нужно внимательно относиться к
                                            потребностям персонала, устранять конфликты, создавать среду,
                                            в которой сотрудники могут самовыражаться и быть услышанными.
                                        </p>
                                        <p>
                                            Контролируйте рабочие процессы внутри компании, вовремя
                                            подключайтесь к решению проблем и повышению вовлечённости и
                                            лояльности с помощью еженедельных опросов и рекомендаций по
                                            развитию Happy Job.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-170">
                                    <a href="#collapse-170" aria-controls="collapse-170" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как заинтересовать сотрудников опросом?
                                    </a>
                                </div>
                                <div id="collapse-170" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Нужно донести до коллектива подробную информацию о новой
                                            платформе — рассказать, показать промо-ролик на сайте и
                                            разослать PR-письма, предоставляемые нашими сотрудниками.
                                            Платформа также автоматически рассылает письма, которые
                                            описывают преимущества её использования для сотрудников.
                                        </p>
                                        <p class="western">
                                            На чём стоит акцентировать внимание, рассказывая о платформе:
                                        </p>
                                        <ol>
                                            <li>
                                                <p class="western">
                                                    У сотрудников появится действенный способ донести до
                                                    руководства свои идеи, пожелания или жалобы, если таковые
                                                    будут. Если каждый работник компании будет знать, что он
                                                    может на что-то повлиять и что-то изменить посредством
                                                    короткого опроса, у него появится желание поучаствовать.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    100%-ная гарантия анонимности респондентов. Какие бы
                                                    ответы ни предоставили респонденты, это не нанесёт вреда
                                                    их карьере в организации.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Материальные и нематериальные поощрения. Установите
                                                    поощрение для отдела или подразделения, сотрудники
                                                    которого будут наиболее активны.Материальные и
                                                    нематериальные поощрения. Установите поощрение для отдела
                                                    или подразделения, сотрудники которого будут наиболее
                                                    активны.
                                                </p>
                                            </li>
                                        </ol>
                                        <p class="western">
                                            Подключите к популяризации опросов главного руководителя и
                                            специалистов HR-службы. Видеоролик от руководителя — один из
                                            самых действенных способов продвижения опросов среди
                                            сотрудников. Организуйте рабочие группы для повышения
                                            вовлечённости и лояльности коллектива по отдельным метрикам.
                                            Это не представляет большой сложности и занимает время только
                                            на первом этапе.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-171">
                                    <a href="#collapse-171" aria-controls="collapse-171" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как интерпретировать процентный и абсолютный результат опросов и
                                        как с ним работать?
                                    </a>
                                </div>
                                <div id="collapse-171" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            В результате опросов Happy Job вы получаете развернутые
                                            отчёты, из которых видно, насколько сотрудники мотивированы на
                                            продуктивную работу и лояльны, а также где в управлении
                                            компанией есть слабые стороны. Результаты будут представлены в
                                            нескольких вариантах:
                                        </p>
                                        <ol>
                                            <li>
                                                <p class="western">
                                                    В процентах с верхней границей в 100%. Например,
                                                    вовлечённость составляет 87,5%.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    В абсолютных значениях с максимумом, равным 10. Например,
                                                    у метрики вовлечённости «Процессы» 8.5.
                                                </p>
                                            </li>
                                        </ol>
                                        <p class="western">
                                            Для удобства интерпретации результатов на платформе есть
                                            пояснения, цветовая шкала от красного к зелёному, разница с
                                            показателями прошлого опроса и бенчмарки для сравнения.
                                        </p>
                                        <p class="western">
                                            Руководители могут воспользоваться рекомендациями по
                                            улучшению, предложенными платформой, и планировать действия.
                                        </p>
                                        <p class="western">
                                            Важно не игнорировать существующие проблемы, а выстраивать
                                            обратную связь с сотрудниками и давать им возможность получить
                                            информацию о сроках изменений. Персоналу нужно ощущение
                                            причастности к успеху компании, своей значимости в коллективе.
                                            Это ощущение не компенсируется материальным вознаграждением.
                                        </p>
                                        <p class="western">
                                            Если в компании низкая вовлечённость и лояльность у
                                            сотрудников, лучшие и продуктивные из них будут уходить в
                                            поисках более перспективного и интересного места, чтобы
                                            реализовать свои таланты и применить компетенции.
                                        </p>
                                        <p class="western">
                                            Оценка и развитие вовлечённости и лояльности на платформе
                                            Happy Job — наиболее простой способ получить от коллектива
                                            больше отдачи и побудить сотрудников работать на результат.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-172">
                                    <a href="#collapse-172" aria-controls="collapse-172" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как часто следует опрашивать сотрудников?
                                    </a>
                                </div>
                                <div id="collapse-172" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Рекомендуется проводить опросы минимум раз в неделю. За этот
                                            период могут произойти значимые изменения. Если выбрать
                                            меньшую частоту, например, раз в месяц — эффективность упадёт.
                                            Долгие перерывы допустимы только в крупных организациях, где
                                            проводить опросы часто сложно из-за организационной структуры
                                            и логистики.
                                        </p>
                                        <p>
                                            Компаниям со штатом от 2 000 сотрудников оптимально проводить
                                            масштабные опросы 2 раза в год, а в остальное время
                                            использовать короткие пульс-опросы, чтобы следить за
                                            проблемными метриками и развивать их.
                                        </p>
                                        <p>
                                            Наш опыт показывает, что больше всего людей участвуют в
                                            опросах в середине недели — вне зависимости от формата опроса.
                                            Как раз к этому моменту сотрудники входят в рабочий режим, и у
                                            них всё ещё есть много энергии, чтобы предлагать собственные
                                            идеи для улучшения климата в компании.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-173">
                                    <a href="#collapse-173" aria-controls="collapse-173" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Зачем проводить опросы так часто — каждую неделю в течение года?
                                    </a>
                                </div>
                                <div id="collapse-173" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Не так давно исследования вовлечённости и лояльности проводили
                                            раз в год с помощью объёмных бумажных анкет. Практика
                                            показала, что они бесполезны, потому что год — это слишком
                                            большой промежуток времени, в течение которого происходит
                                            много значимых событий. За это время, например, может
                                            полностью смениться персонал или руководящий состав, и ответы
                                            не покажут реальное положение вещей.
                                        </p>
                                        <p>
                                            Кроме того, ответы, полученные таким путём, далеко не всегда
                                            искренние. Сотрудники боятся ухудшить своё положение в
                                            компании и отвечают не честно, а «правильно».
                                        </p>
                                        <p>
                                            Часто коллектив вообще не понимает и не принимает идею
                                            подобного тестирования, так как не видит реальных изменений —
                                            реакция на ответы в опросах наступает через длительное время
                                            или вообще не наступает.
                                        </p>
                                        <p>
                                            Новая система еженедельных анонимных онлайн-опросов в форме
                                            интерактивных и постоянно изменяющихся сюжетов интересна
                                            респондентам. Это не отнимает много времени и вызывает
                                            доверие, так как вслед за опросом следует быстрая реакция
                                            руководителя.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-174">
                                    <a href="#collapse-174" aria-controls="collapse-174" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Обязательна ли 100 %-ная анонимность?
                                    </a>
                                </div>
                                <div id="collapse-174" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Анонимность — один из приоритетов платформы и главное условие
                                            проведения опросов. Опыт показывает, что открытое
                                            анкетирование практически бесполезно, так как сотрудники
                                            начинают отвечать неискренне, демонстрируя «видимую
                                            лояльность».
                                        </p>
                                        <p>
                                            Отвечая анонимно, работники не боятся быть честными, и их
                                            ответы отражают реальное положение дел. Если в компании есть
                                            какие-либо проблемы, анонимный опрос быстрее поможет их
                                            выявить и найти пути решения.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video_in_section" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
            <span itemprop="name">
              Как убедить сотрудников в анонимности опроса вовлечённости?
            </span>
                            <div class="video-case">
                                <a data-fancybox="" href="https://vimeo.com/711967798?autoplay=1">
                                    <figure class="videos-block">
                      <span class="videos-image-wrapper">
                          <picture>
                              <source srcset="/img/p/index/video-faq-2.webp" type="image/webp"><img src="/img/p/index/video-faq-2.jpg" class="videos-image" loading="lazy" alt="Как убедить сотрудников в анонимности опроса вовлечённости?" title="Как убедить сотрудников в анонимности опроса вовлечённости?" itemprop="thumbnailUrl">
                          </picture>
                      </span>
                                        <figcaption class="videos-caption">
                                            <div class="videos-heading" itemprop="name">
                                                Как убедить сотрудников в анонимности опроса вовлечённости?
                                            </div>
                                            <div itemprop="description" style="display: none" hidden="">
                                                Видео Happy Job
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <b class="videos-play-button">
                                        <div class="play-button">
                                            <svg class="play-circle"><use xlink:href="#videoCircle"></use></svg>
                                            <svg class="play-triangle"><use xlink:href="#videoTriangle"></use></svg>
                                        </div>
                                    </b>
                                </a>
                            </div>
                        </div>
                        <h2 class="header Ezhegodnye-oprosy-i-ekonomicheskiy-effekt" id="title3">
                            Ежегодные опросы и экономический
                            эффект
                        </h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-176">
                                    <a href="#collapse-176" aria-controls="collapse-176" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Зачем проводить ежегодные исследования вовлечённости и
                                        лояльности?
                                    </a>
                                </div>
                                <div id="collapse-176" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Ежегодные исследования нужны в больших организациях от 5 000
                                            человек, когда сложно собирать обратную связь от всех
                                            сотрудников.
                                        </p>
                                        <p>
                                            В ежегодном исследовании 59 вопросов смешанного типа. Его
                                            результат покажет целостную картину настроений в коллективе.
                                            Основываясь на ежегодных данных, проще следить за прогрессом в
                                            области развития вовлечённости и лояльности персонала, а также
                                            разрабатывать долгосрочную стратегию по улучшению ситуации.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-177">
                                    <a href="#collapse-177" aria-controls="collapse-177" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как решиться работать над вовлечённостью и лояльностью?
                                    </a>
                                </div>
                                <div id="collapse-177" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Если вы решили инвестировать ресурсы в вовлечённость и
                                            лояльность сотрудников, главные критерии возврата вложенных
                                            средств — это успех вашей компании, позитивный настрой
                                            коллектива и личностный рост руководителей.
                                        </p>
                                        <p>
                                            В условиях современного рынка важно как можно скорее получить
                                            результат от вложений. Приходится выбирать только действенные
                                            способы улучшения корпоративной культуры и продуктивности.
                                        </p>
                                        <p>
                                            Платформа Happy Job эффективно развивает базовые факторы,
                                            влияющие на вовлечённость и лояльность сотрудников, а также
                                            наглядно представляет результаты проделанной работы.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-178">
                                    <a href="#collapse-178" aria-controls="collapse-178" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как организовать постоянную работу над вовлечённостью и
                                        лояльностью через Happy Job?
                                    </a>
                                </div>
                                <div id="collapse-178" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Основной инструмент для работы над увеличением вовлечённости и
                                            лояльности персонала — это регулярные опросы. Рекомендуется
                                            проводить опросы не реже 2 раз в год или каждую неделю, если
                                            вы используете пульс-форматы.
                                        </p>
                                        <p>
                                            Регулярное участие сотрудников в опросах улучшает доверие и
                                            инициативность в коллективе, а проанализированные результаты,
                                            рекомендации и отчёты помогают руководителям улучшать
                                            вовлечённость и лояльность, не откладывая «в долгий ящик» все
                                            изменения.
                                        </p>
                                        <p>
                                            Сделайте опросы частью корпоративной культуры и регулярно
                                            отслеживайте отчёты, чтобы не упустить возможные проблемы.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-179">
                                    <a href="#collapse-179" aria-controls="collapse-179" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Что даст компании и сотрудникам изучение вовлечённости и
                                        лояльности?
                                    </a>
                                </div>
                                <div id="collapse-179" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Исследование может кардинально изменить внутреннюю жизнь
                                            компании. Благодаря регулярным опросам вы найдёте слабые
                                            стороны в управлении подразделения или компании в целом и
                                            сразу получите конкретные рекомендации по улучшению настроя
                                            персонала, показателей компании и взаимодействия в коллективе.
                                            С помощью опросов можно получить большую отдачу от
                                            сотрудников.
                                        </p>
                                        <p>
                                            Сотрудники на своих должностях лучше видят ситуацию и сами
                                            будут предлагать улучшения через платформу Happy Job.
                                        </p>
                                        <p>
                                            В компаниях с хорошей вовлечённостью и высокой лояльностью
                                            коллектив не просто обсуждает рабочие будни, делится мыслями и
                                            идеями, но и использует эти обсуждения для развития
                                            продуктивности и командного достижения успеха.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-180">
                                    <a href="#collapse-180" aria-controls="collapse-180" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как быстро добиться экономического роста для компании?
                                    </a>
                                </div>
                                <div id="collapse-180" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Чтобы достичь успеха и решить финансовые проблемы, нужно
                                            устранить слабые места в управлении и вовлечении в работу.
                                        </p>
                                        <p>
                                            Для многих компаний проблемой №1 является плохая организация
                                            рабочих процессов и неформализованная стратегия. Последствия
                                            при этом существенные — сотрудники нерационально тратят
                                            рабочее время, остаются внеурочно и постоянно перерабатывают
                                            при выполнения базовых задач и поручений. Продуктивность и
                                            лояльность сотрудников при этом минимальны, а расходы —
                                            высоки.
                                        </p>
                                        <p>
                                            По статистике, около 30% работающего населения регулярно берёт
                                            неоплачиваемые сверхурочные часы и в целом уделяет работе на
                                            20–25% больше времени, чем работники в европейских странах.
                                            При этом производительность труда и, как следствие,
                                            экономическая выгода в российских компаниях в среднем ниже на
                                            27%. Причины такого положения дел — устаревшее оборудование и
                                            технологии, низкое качество управления и вовлечения в работу.
                                        </p>
                                        <p>
                                            Модернизация оборудования — это дорогостоящий и длительный
                                            процесс, а его выгода отсрочена. Повышение качества управления
                                            и увеличение вовлечённости и лояльности сотрудников — наиболее
                                            быстрый способ добиться экономического роста.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-181">
                                    <a href="#collapse-181" aria-controls="collapse-181" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как влияет на прибыльность компании развитие вовлечённости и
                                        лояльности персонала?
                                    </a>
                                </div>
                                <div id="collapse-181" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Увеличение вовлечённости и лояльности персонала оказывает
                                            огромное влияние на бизнес-результаты компании: разница в
                                            доходах между компаниями с вовлечённым коллективом и пассивным
                                            достигает 37% в сторону первых, в свою очередь, организации с
                                            лояльным персоналом отмечают текучесть ниже в среднем в 3
                                            раза, чем в компаниях с нелояльными сотрудниками. Вовлечённые
                                            в работу и лояльные сотрудники в условиях отлаженного
                                            взаимодействия в организации правильно организуют своё рабочее
                                            время и не отвлекаются на задачи, не связанные с рабочим
                                            процессом. Они лично заинтересованы в успехе компании и
                                            поддерживают изменения.
                                        </p>
                                        <p>
                                            Если ценные сотрудники всем довольны и не собираются покидать
                                            компанию, работодатель экономит большие средства — в среднем
                                            800 000 рублей на каждом передумавшем увольняться специалисте.
                                        </p>
                                        <p>
                                            «Максимально вовлечены» — значит «с удовольствием идут на
                                            работу, точно знают, что делать, как оптимизировать рабочий
                                            процесс, как взаимодействовать с коллегами, чтобы добиться
                                            наилучшего результата». «Высоколояльны» — значит «ставят
                                            желание быть частью компании, вносить свой вклад в важный
                                            полезный продукт выше удовлетворённости условиями труда и
                                            оплатой, рекомендуют компанию как работодателя друзьям и
                                            поддерживают изменения». Такие сотрудники наиболее эффективны
                                            и в перспективе приносят больше прибыли. Чтобы справиться с
                                            требуемым объёмом задач, им не нужно работать сверхурочно.
                                        </p>
                                        <p>
                                            Вслед за повышением вовлечённости и лояльности сотрудников
                                            растут и другие показатели. Например, удовлетворённость
                                            клиентов компании коррелирует с вовлечённостью персонала на
                                            0,6–0,8%. Плюс 5% к показателям вовлечённости — плюс 0,5% к
                                            прибыли.
                                        </p>
                                        <p>
                                            Чтобы получать дополнительную экономическую выгоду, нужно
                                            комплексно развивать все 10 метрик вовлечённости и 5 метрик
                                            лояльности Happy Job.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-182">
                                    <a href="#collapse-182" aria-controls="collapse-182" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как сказывается на финансовом состоянии компании недостаток
                                        вовлечённости и лояльности?
                                    </a>
                                </div>
                                <div id="collapse-182" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        Человек страдает, когда проводит полжизни на работе, но
                                        задействует лишь половину своих ресурсов, скучает от
                                        неинтересных задач и стремится найти более выгодное рабочее
                                        место с возможностями профессионального роста. Работа в этом
                                        случае приносит только негативные эмоции, что, в свою очередь,
                                        ухудшает уровень жизни людей. Низкая продуктивность и отсутствие
                                        лояльности наносят удар по финансовому состоянию компании и
                                        могут даже привести к банкротству.<br>
                                        <br>
                                        По статистике, в России эффективность рабочего процесса в
                                        организациях в среднем ниже на 60% по сравнению с европейскими
                                        странами. Непродуктивная работа отнимает полезное время,
                                        приводит к потере лояльности клиентов и убыткам. Из-за проблем с
                                        управлением, неправильно поставленных задач и пренебрежения
                                        обратной связью с сотрудниками компании теряют деньги.<br>
                                        <br>
                                        На видео — финансовые риски компании при низкой лояльности
                                        персонала:
                                        <br>
                                        <br>
                                        <div class="video-case">
                                            <a data-fancybox="" href="https://vimeo.com/558544165?autoplay=1">
                                                <figure class="videos-block">
                          <span class="videos-image-wrapper">
                              <picture>
                                <source srcset="/img/p/index/video-loyalty-survey.webp" type="image/webp"><img src="/img/p/index/video-loyalty-survey.jpg" class="videos-image" loading="lazy" alt="О рисках низкой лояльности" title="О рисках низкой лояльности" itemprop="thumbnailUrl">
                            </picture>
                          </span>
                                                    <figcaption class="videos-caption">
                                                        <div class="videos-heading" itemprop="name">
                                                            О рисках низкой лояльности
                                                        </div>
                                                        <div itemprop="description" style="display: none" hidden="">
                                                            Видео Happy Job
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <b class="videos-play-button">
                                                    <div class="play-button">
                                                        <svg class="play-circle"><use xlink:href="#videoCircle"></use></svg>
                                                        <svg class="play-triangle"><use xlink:href="#videoTriangle"></use></svg>
                                                    </div>
                                                </b>
                                            </a>
                                        </div>
                                        <br>
                                        <br>
                                        Финансовые риски, возникающие из-за низкой вовлечённости
                                        сотрудников:
                                        <br>
                                        <br>
                                        <div class="video-case">
                                            <a data-fancybox="" href="https://vimeo.com/560760387?autoplay=1">
                                                <figure class="videos-block">
                            <span class="videos-image-wrapper">
                              <picture>
                                  <source srcset="/img/p/index/video-engagement-survey.webp" type="image/webp"><img src="/img/p/index/video-engagement-survey.jpg" class="videos-image" loading="lazy" alt="Текучесть кадров" title="Текучесть кадров" itemprop="thumbnailUrl">
                              </picture>
                          </span>
                                                    <figcaption class="videos-caption">
                                                        <div class="videos-heading" itemprop="name">
                                                            Текучесть кадров
                                                        </div>
                                                        <div itemprop="description" style="display: none" hidden="">
                                                            Видео Happy Job
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <b class="videos-play-button">
                                                    <div class="play-button">
                                                        <svg class="play-circle"><use xlink:href="#videoCircle"></use></svg>
                                                        <svg class="play-triangle"><use xlink:href="#videoTriangle"></use></svg>
                                                    </div>
                                                </b>
                                            </a>
                                        </div>
                                        <br>
                                        <br>
                                        Хорошая новость в том, что этого можно избежать. Изучайте
                                        настроения в коллективе, общайтесь с сотрудниками, создавайте
                                        продуктивную среду — это всё залог процветания вашей компании. С
                                        помощью инструментов от Happy Job вы всегда будете в курсе
                                        мнений ваших сотрудников, сможете наладить прочный контакт и
                                        внедрять улучшения, которые отразятся на эффективности всей
                                        компании.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-183">
                                    <a href="#collapse-183" aria-controls="collapse-183" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Влияет ли Happy Job на объёмы продаж?
                                    </a>
                                </div>
                                <div id="collapse-183" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Да. В бизнесе процессы взаимосвязаны, и небольшие изменения на
                                            уровне рядовых сотрудников могут привести к большим
                                            положительным изменениям на уровне компании.
                                        </p>
                                        <p>
                                            По статистике, лояльные сотрудники закрывают на 37% больше
                                            сделок, чем их нелояльные коллеги. Счастливые и продуктивные
                                            работники могут привлечь и сделать лояльными к бренду новых
                                            клиентов. Безучастные и пессимистично настроенные сотрудники
                                            вряд ли смогут качественно работать с клиентами. Если люди
                                            остаются недовольны общением с сотрудниками или оказанными
                                            услугами, они не вернутся повторно и не принесут
                                            дополнительную прибыль компании.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video_in_section" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
            <span itemprop="name">
              Зачем проводить ежегодное исследование вовлечённости и лояльности?
            </span>
                            <div class="video-case">
                                <a data-fancybox="" href="https://vimeo.com/711968595?autoplay=1">
                                    <figure class="videos-block">
                      <span class="videos-image-wrapper">
                          <picture>
                              <source srcset="/img/p/index/video-faq-3.webp" type="image/webp"><img src="/img/p/index/video-faq-3.jpg" class="videos-image" loading="lazy" alt="Зачем проводить ежегодное исследование вовлечённости и лояльности?" title="Зачем проводить ежегодное исследование вовлечённости и лояльности?" itemprop="thumbnailUrl">
                          </picture>
                      </span>
                                        <figcaption class="videos-caption">
                                            <div class="videos-heading" itemprop="name">
                                                Зачем проводить ежегодное исследование вовлечённости и лояльности?
                                            </div>
                                            <div itemprop="description" style="display: none" hidden="">
                                                Видео Happy Job
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <b class="videos-play-button">
                                        <div class="play-button">
                                            <svg class="play-circle"><use xlink:href="#videoCircle"></use></svg>
                                            <svg class="play-triangle"><use xlink:href="#videoTriangle"></use></svg>
                                        </div>
                                    </b>
                                </a>
                            </div>
                        </div>
                        <h2 class="header Otchety-obratnaya-svyaz-s-sotrudnikami-i-rekomendacii-po-razvitiyu" id="title4">
                            Отчёты, обратная связь с сотрудниками и рекомендации по развитию
                        </h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-185">
                                    <a href="#collapse-185" aria-controls="collapse-185" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Сколько времени требуется для формирования комплексного отчёта
                                        по вовлечённости и лояльности сотрудников?
                                    </a>
                                </div>
                                <div id="collapse-185" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Онлайн-отчёты формируются сразу после завершения опроса.
                                            Полное исследование включает 50 вопросов на вовлечённость и 6
                                            вопросов на лояльность. Если задавать по 5–7 вопросов в
                                            неделю, отчёт сформируется в течение 10 недель.
                                        </p>
                                        <p>
                                            Можно задать все вопросы одновременно — тогда отчёт
                                            сформируется целиком после завершения исследования. Однако
                                            нужно помнить, что такой подход может повлиять на точность
                                            финального результата.
                                        </p>
                                        <p>
                                            Наш опыт показывает, что участвуя в длинных опросах,
                                            сотрудники теряют интерес к их содержанию. Когда респонденты
                                            тратят много времени на заполнение анкеты (как в случае с
                                            традиционными анкетами), то часто начинают искать
                                            «правильные», предпочтительные в их глазах ответы. Оптимально
                                            задавать 5–7 вопросов в неделю, максимум — до 15, тогда
                                            результат исследования будет достоверным. Все 59 вопросов
                                            можно задавать сотрудникам единовременно, если у вас крупная
                                            организация с большим количеством сотрудников без email.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-186">
                                    <a href="#collapse-186" aria-controls="collapse-186" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Можно ли добиться положительных изменений, просто выполняя
                                        рекомендации платформы?
                                    </a>
                                </div>
                                <div id="collapse-186" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Регулярное использование платформы Happy Job помогает в
                                            кратчайшие сроки улучшить корпоративную культуру компании и
                                            рабочую среду.
                                        </p>
                                        <p>
                                            Отчёт и комментарии сотрудников раскрывают насущные проблемы
                                            коллектива. Это даёт компании возможность исправить ситуацию и
                                            создать продуктивную рабочую обстановку. Ваши сотрудники сами
                                            скажут, чего им не хватает или что можно улучшить — главное,
                                            дать им возможность быть услышанными. С Happy Job это просто:
                                            люди могут вносить идеи по улучшению командной продуктивности
                                            после прохождения опроса.
                                        </p>
                                        <p>
                                            Рекомендации платформы по улучшению показателей метрик
                                            позволят предпринять меры, положительно влияющие на степень
                                            вовлечённости и лояльности персонала.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-187">
                                    <a href="#collapse-187" aria-controls="collapse-187" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Что представляет собой отчёт по итогам исследования и как с ним
                                        работать?
                                    </a>
                                </div>
                                <div id="collapse-187" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Отчёт по результатам опроса автоматически формируется на нашей
                                            платформе. Все результаты доступны HR-специалисту, отвечающему
                                            за анкетирование. Руководители отделов, в которых больше 5-ти
                                            человек, также получают доступ к сводке после опроса.
                                        </p>
                                        <p class="western">Отчёт состоит из двух частей:</p>
                                        <ol>
                                            <li>
                                                <p class="western">
                                                    Общая часть, в которой отражены общие данные по каждому
                                                    состоянию сотрудников подразделения — точные цифры,
                                                    сильные и слабые стороны, на которые нужно обратить
                                                    внимание.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="western">
                                                    Часть отчётов с предложениями сотрудников и с
                                                    рекомендациями платформы по улучшению метрик вовлечённости
                                                    и лояльности персонала.
                                                </p>
                                            </li>
                                        </ol>
                                        <p class="western">
                                            Платформа формирует подробные и визуально понятные отчёты в
                                            формате инфографики для руководителей и сотрудников.
                                        </p>
                                        <p class="western">
                                            Информации в отчёте достаточно, чтобы руководитель или
                                            HR-специалист мог принять меры по улучшению вовлечённости и
                                            лояльности сотрудников.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-188">
                                    <a href="#collapse-188" aria-controls="collapse-188" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Кому можно показывать результаты опросов и обязательно ли
                                        доносить их до высших руководителей?
                                    </a>
                                </div>
                                <div id="collapse-188" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            С отчётом должны быть ознакомлены все, кто вправе принимать
                                            решения, касающиеся изменений и развития компании. Опросы сами
                                            по себе ничего не изменят — повлиять на ситуацию могут только
                                            люди, используя информацию, полученную в результате
                                            исследований.
                                        </p>
                                        <p>
                                            Чтобы добиться масштабных улучшений, нужно вносить изменения в
                                            привычный ход дел. Если сотрудники будут активно предлагать
                                            идеи и деятельно участвовать в жизни компании, но не увидят
                                            никакой обратной реакции и не почувствуют поддержки, то все
                                            усилия окажутся напрасными.
                                        </p>
                                        <p>
                                            Выбирайте сами и обсуждайте в рабочих группах с коллективом,
                                            какие предложения можно воплотить в жизнь и как это лучше
                                            сделать. Обязательно подключайте к этой работе высшее
                                            руководство, так как все изменения корпоративной культуры
                                            осуществляются сверху.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-189">
                                    <a href="#collapse-189" aria-controls="collapse-189" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Нужно ли реагировать на предложения и обратную связь от
                                        коллектива?
                                    </a>
                                </div>
                                <div id="collapse-189" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Формы обратной связи в регулярных опросах Happy Job были
                                            разработаны для возможности сотрудников оставлять идеи и
                                            пожелания по рабочей среде и корпоративной культуре.
                                        </p>
                                        <p>
                                            Вы должны быстро реагировать на обратную связь и обсуждать её
                                            с сотрудниками. Игнорировать инициативы, даже те, которые
                                            нельзя реализовать, не стоит. Объясните сотрудникам, почему
                                            предложение не получится внедрить на данном этапе и как его
                                            доработать, если такое в принципе возможно.
                                        </p>
                                        <p>
                                            Если инициативы, предложенные сотрудниками, дельные и простые
                                            в исполнении — смело внедряйте.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-190">
                                    <a href="#collapse-190" aria-controls="collapse-190" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Нужно ли предпринимать дополнительные действия для развития
                                        вовлечённости и лояльности помимо тех, которые порекомендует
                                        платформа?
                                    </a>
                                </div>
                                <div id="collapse-190" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p class="western">
                                            Платформа предоставляет несколько типов рекомендаций по
                                            внедрению корпоративных изменений:
                                        </p>
                                        <p class="western">
                                            — обучающие материалы для руководителей и сотрудников
                                        </p>
                                        <p class="western">
                                            — онлайн-план по выбранным для внедрения активностям
                                        </p>
                                        <p class="western">
                                            — онлайн-план по реализации предложений сотрудников
                                        </p>
                                        <p class="western">— советы консультантов</p>
                                        <p class="western">— кейсы других компаний</p>
                                        <p class="western">
                                            Следуя советам Happy Job, вы сможете менять корпоративную
                                            культуру, стиль управления руководителей и правила поведения в
                                            коллективе. Happy Job формирует отчёты по итогам циклов
                                            опросов, с помощью которых вы сможете оценивать эффект от
                                            ваших усилий.
                                        </p>
                                        <p class="western">
                                            Дополнительно вы можете реализовать программу изменений
                                            вовлечённости и лояльности, основываясь на аналитике опросов.
                                            Это поможет усилить эффект от автоматических процессов
                                            платформы.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video_in_section" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
                            <span itemprop="name"> Как работать с результатами? </span>
                            <div class="video-case">
                                <a data-fancybox="" href="https://vimeo.com/712015206?autoplay=1">
                                    <figure class="videos-block">
                    <span class="videos-image-wrapper">
                        <picture>
                          <source srcset="/img/p/index/video-faq-4.webp" type="image/webp"><img src="/img/p/index/video-faq-4.jpg" class="videos-image" loading="lazy" alt="Как работать с результатами?" title="Как работать с результатами?" itemprop="thumbnailUrl">
                        </picture>
                    </span>
                                        <figcaption class="videos-caption">
                                            <div class="videos-heading" itemprop="name">
                                                Как работать с результатами?
                                            </div>
                                            <div itemprop="description" style="display: none" hidden="">
                                                Видео Happy Job
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <b class="videos-play-button">
                                        <div class="play-button">
                                            <svg class="play-circle"><use xlink:href="#videoCircle"></use></svg>
                                            <svg class="play-triangle"><use xlink:href="#videoTriangle"></use></svg>
                                        </div>
                                    </b>
                                </a>
                            </div>
                        </div>
                        <h2 class="header Podklyuchenie-i-podderzhka" id="title5">
                            Подключение и поддержка
                        </h2>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-192">
                                    <a href="#collapse-192" aria-controls="collapse-192" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как подключить платформу в вашей компании?
                                    </a>
                                </div>
                                <div id="collapse-192" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Вы можете получить бесплатную пилотную версию продукта, чтобы
                                            ознакомиться с функционалом платформы и начать работу в
                                            области увеличения вовлечённости и лояльности персонала.
                                            Оставьте заявку на нашем сайте, и менеджер Happy Job свяжется
                                            с вами в ближайшее время.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-193">
                                    <a href="#collapse-193" aria-controls="collapse-193" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Как оплачивать услуги?
                                    </a>
                                </div>
                                <div id="collapse-193" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Есть несколько вариантов: вы можете оплатить 100% стоимости
                                            или выбрать формат, при котором платежи будут периодическими
                                            (например, раз в квартал).<br>
                                            Все тарифные планы включают годовую поддержку, вне зависимости
                                            от выбранного продукта или формата.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-194">
                                    <a href="#collapse-194" aria-controls="collapse-194" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        У вас есть техподдержка, которая может приехать и настроить
                                        Happy Job на наших компьютерах?
                                    </a>
                                </div>
                                <div id="collapse-194" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        Вам не придётся устанавливать дополнительное ПО на компьютеры
                                        всех пользователей, а первичное подключение занимает считанные
                                        минуты и проводится дистанционно из офиса Happy Job.При
                                        необходимости наши специалисты всегда готовы провести настройку
                                        платформы на месте. Если вы хотите изучить все возможности Happy
                                        Job, то можете заказать бесплатную выездную или
                                        онлайн-презентацию, а также самостоятельно ознакомиться с
                                        материалами на нашем сайте. Изучить платформу можно и на
                                        практике: воспользуйтесь пробным периодом на 30 дней — это
                                        бесплатно. Оставьте заявку
                                        <span class="contact contact_link" data-fancybox data-src="#main-modal" href="javascript:;" data-formtitle="Оставить заявку">здесь</span>, чтобы узнать подробности.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-195">
                                    <a href="#collapse-195" aria-controls="collapse-195" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Если компания уже пользуется опросами от другого провайдера
                                        возможно ли сопоставить вопросы и аналитику?
                                    </a>
                                </div>
                                <div id="collapse-195" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Да, это возможно. Данные отчётов и фильтры Happy Job
                                            сопоставимы с системами опросов всех провайдеров подобных
                                            услуг.
                                        </p>
                                        <p>
                                            Обратитесь к нашим консультантам, чтобы узнать, как
                                            действовать в вашем случае. В течение нескольких часов мы
                                            предоставим сравнение-мэтчинг для любой методики проведения
                                            опросов среди персонала.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-196">
                                    <a href="#collapse-196" aria-controls="collapse-196" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Возможно ли протестировать платформу в работе?
                                    </a>
                                </div>
                                <div id="collapse-196" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        Да. Заполните заявку на
                                        <span class="contact contact_link" data-fancybox data-src="#main-modal" href="javascript:;" data-formtitle="Оставить заявку">сайте</span>, чтобы получить доступ к демо-версии Happy Job. Наш менеджер
                                        свяжется с вами и вышлет пробную версию продукта и инструкцию по
                                        его использованию. Доступ к демо-версии даётся на 14 дней. В
                                        течение этого времени вы сможете провести один тестовый опрос
                                        без сохранения данных.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__card">
                                <div class="accordion__card-header" role="tab" id="heading-197">
                                    <a href="#collapse-197" aria-controls="collapse-197" class="accordion__card-btn accordion__card-header_collapsed collapsed" tabindex="-1">
                                        Хочу получить демо-версию и буклет
                                    </a>
                                </div>
                                <div id="collapse-197" class="accordion__collapse collapse" role="tabpanel">
                                    <div class="accordion__card-body">
                                        <p>
                                            Оставьте свою заявку
                                            <span class="contact contact_link" data-fancybox data-src="#main-modal" href="javascript:;" data-formtitle="Оставить заявку">здесь</span>, и наши менеджеры вышлют необходимые материалы и инструкции
                                            в течение ближайшего времени.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <style>
            .heading .breadcrumbs-wrapper {
                display: none;
            }
            .breadcrumbs {
                padding: 3rem 0 0;
            }

            @media (max-width: 575px){
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
        </style>

        <style media="screen">
            main h2 {
                padding: 35px 0 15px !important;
            }

            #title0 {
                padding-top: 50px !important;
            }

            @media (max-width: 576px) {
                #title0 {
                    padding-top: 35px !important;
                }
            }

            @media (min-width: 813px) {
                #super-title-wrap .title h1 {
                    color: #fff;
                    width: 250px;
                    background: #61c13a;
                    text-align: center;
                    padding: 10px 0;
                    margin: 170px 0 20px;
                }
            }

            @media (min-width: 992px) {
                #super-title-wrap .title h1 {
                    width: 340px;
                }
            }

            .video_in_section {
                margin-top: 10px;
            }

            .video_in_section span[itemprop="name"] {
                height: auto;
                color: inherit;
                font-size: 1.5em;
                line-height: 1.3;
                margin: 30px 0 10px;
                font-weight: 400;
            }

            @media (max-width: 1200px) {
                .video_in_section {
                    margin-top: 20px;
                }

                .video_in_section .video-case{
                    height: 383px !important;
                }

                .video_in_section .video-case a .videos-block .videos-image-wrapper {
                    max-height: 383px !important;
                }
            }

            @media (max-width: 992px) {
                .video_in_section .video-case{
                    height: 34.88vw !important;
                }

                .video_in_section .video-case a .videos-block .videos-image-wrapper {
                    max-height: 34.88vw !important;
                }
            }

            @media (max-width: 576px) {
                .video_in_section .video-case {
                    height: 49vw !important;
                }

                .video_in_section .video-case a .videos-block .videos-image-wrapper {
                    max-height: 49vw !important;
                }
            }
        </style>

        <script>
            $(function(){
                $('.accordion__card-btn').on('click', function(){
                    $(this).closest('.accordion__card').toggleClass('accordion__card_open')
                    $(this).closest('.accordion__card').find('.accordion__collapse').toggleClass('collapse');
                    return false
                })
            })
        </script>


    </main>

</div>

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
