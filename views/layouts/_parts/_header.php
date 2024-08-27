<?php

use yii\helpers\Url;

?>



<style>

    .page-button{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #61C13B;
        color: #fff !important;
        font-size: 14px;
        font-weight: 500;
        padding: 8px 24px;
        white-space: nowrap;
        border-radius: 6px;
        border: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }



    .site-header-wrapper .page-button{
        width: 100%;
    }

    .site-header-button .page-button.is-active{
        background-color: #E0E0E0;
    }

    .site-header-height{
        height: 140px;
        transition: height 0.3s;
    }

    .site-header-wrapper.-phoneview + .site-header-height{
        height: 80px;
    }

    .site-header-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        box-shadow: 2px 3px 5px rgb(0 0 0 / 10%);
        z-index: 21;
        background-color: #fff;
        transition: top 0.3s;
    }

    .site-header-container {
        max-width: 1200px;
        padding: 0 1rem;
        margin: auto;
    }

    .site-header {
        display: grid;
        grid-template-columns: 240px auto 1rem auto 1rem 256px 256px 190px;
        grid-template-rows: auto 1px auto;
        grid-column-gap: 10px;
        grid-row-gap: 0;
        align-items: center;
    }

    .site-header-contacts {
        grid-column: 6 / 8;
        grid-row: 1 / 2;
    }

    .header-contacts-link{
        font-weight: 500;
        color: #808182;
        font-size: 15px;
        letter-spacing: -0.2px;
        text-decoration: none;
    }

    .header-contacts-link:hover{
        color: #61C13B;
    }

    .site-header-button {
        grid-column: 8 / 9;
        grid-row: 1 / 2;
        padding: 1rem 0 19px;
        text-align: right;
    }


    .site-header-line{
        position: relative;
        grid-column: 1 / 9;
        grid-row: 2 / 3;
        background-color: #E9E9E9;
        height: 1px;
    }
    /*
      .site-header-wrapper.scroll{
        top: -80px;
      }

      .site-header-wrapper.scroll + .site-header-height{
        height: 80px;
      }
      */



    .site-header-line:before,
    .site-header-line:after{
        content: '';
        display: block;
        position: absolute;
        background-color: #E9E9E9;
        width: 300%;
        top: 0;
        height: 1px;
    }

    .site-header-line:before{
        left: 0;
    }

    .site-header-line:after{
        right: 0;
    }

    .site-header-logo {
        grid-column: 1 / 2;
        grid-row: 3 / 4;
    }

    .site-header-home {
        display: none;
        grid-column: 3 / 4;
        grid-row: 3 / 4;
    }

    .site-header-nav {
        grid-column: 4 / 9;
        grid-row: 3 / 4;
    }

    .header-contacts-list {
        display: flex;
        vertical-align: middle;
        align-items: center;
        justify-content: flex-end;
        gap: 22px;
        margin: 0;
        padding: 0 1rem 0 0;
    }

    .header-contacts-item {
        list-style-type: none;
        margin: 0;
    }

    .site-header-form{
        position: relative;
        width: 100%;
        max-width: ;
        height: 100%;
        grid-row: 2 / 4;
        grid-column: 4 / 9;
        z-index: -1;
        display: none;
        opacity: 0;
        visibility: hidden;
        max-width: 760px;
        margin-left: auto;
    }

    .site-header-form .parsley-errors-list{
        padding: 0;
        margin: 0 0 -21px 0;
    }

    .site-header-form .parsley-custom-error-message {
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .site-header-wrapper.form-visible.on-switch .site-header-form{
        display: block;
        opacity: 1;
        visibility: visible;
        z-index: 5;
    }

    .mobile-menu-button{
        line-height: 1;
        display: none;
    }

    .mobile-menu-button:before {
        content: '☰';
        font-size: 2rem;
        display: block;
        transform: scaleX(1.4) translate(4px,-5px);
        transition: color 0.3s;
    }

    .mobile-menu-button.is-active:before {
        content: '╳';
        font-size: 2rem;
        transform: scale(0.85);
    }

    .mobile-menu-button:hover:before {
        color:  #61C13B;
    }

    .site-header-form form{
        position: absolute;
        display: grid;
        grid-template-columns: 1fr 1fr 190px;
        grid-template-rows: auto auto;
        grid-template-areas:
        'name phone button'
        'shedule shedule policy';
        grid-column-gap: 18px;
        grid-row-gap: 11px;
        background-color: #fff;
        left: 0;
        top: 0;
        right: -20px;
        border-radius: 0 0 10px 10px;
        box-shadow: 2px 3px 5px rgb(0 0 0 / 10%);
        padding: 0px 20px 20px 20px;
        margin: 0;
    }

    .site-header-form form input[type="text"],
    .site-header-form form input[type="tel"]{
        width: 100%;
        border: 2px solid #EDEDED;
        border-radius: 4px;
        padding: 0 0.5rem;
        height: 40px;
        line-height: 1;
    }

    .header-feedback-form-block.-name{
        grid-area: name;
    }
    .header-feedback-form-block.-phone{
        grid-area: phone;
    }
    .header-feedback-form-block.-button{
        grid-area: button;
    }
    .header-feedback-form-block.-button .page-button{
        height: 40px;
        font-size: 15px;
    }
    .header-feedback-form-block.-button .page-button.-ok{
        display: none;
        max-width: 82px;
        margin-left: auto;
    }
    .site-header-wrapper.-success  .header-feedback-form-block.-button .page-button#order-call{
        display: none;
    }
    .site-header-wrapper.-success  .header-feedback-form-block.-button .page-button.-ok{
        display: block;
    }
    .header-feedback-form-block.-shedule{
        grid-area: shedule;
    }

    .site-header-wrapper.-success .header-feedback-form-block.-shedule,
    .site-header-wrapper.-success .header-feedback-form-block.-policy{
        display: none;
    }

    .header-feedback-form-block.-shedule p {
        color: #A1A1A1;
        font-size: 14px;
        margin: 0;
    }

    .header-feedback-form-block.-shedule p + p {
        margin-top: 3px;
    }

    .header-feedback-form-block.-shedule p:first-child{
        color: #393939;
    }

    .header-feedback-form-block.-policy{
        grid-area: policy;
        transform: translateY(6px);
    }

    .header-feedback-form-block.-policy p {
        font-size: 10px;
        color: #ABABAB;
        letter-spacing: 0;
        margin: 0;
        line-height: 1.2;
        padding-right: 3px;
    }

    .header-feedback-form-block.-policy p + p{
        margin-top: 7px;
    }

    .header-feedback-form-block.-policy p a{
        white-space: nowrap;
        color: #61C13B;
        text-decoration: none;
    }

    .header-feedback-form-block.-success-message{
        display: none;
        visibility: hidden;
        opacity: 0;
        background-color: #fff;
        grid-column: 1 / 3;
        grid-row: 1 / 2;
        position: relative;
        z-index: 1;
    }

    .site-header-wrapper.-success .header-feedback-form-block.-success-message{
        display: block;
        visibility: visible;
        opacity: 1;
    }

    .header-feedback-form-block.-success-message p{
        margin: 0;
    }

    .header-feedback-form-block.-success-message p + p{
        margin-top: 10px;
        color: #A1A1A1;
    }

    .site-header-wrapper.-weekdays-active .header-feedback-form-block.-success-message .nonweekday,
    .site-header-wrapper:not(.-weekdays-active) .header-feedback-form-block.-success-message .weekday{
        display: none;
    }

    .site-header-wrapper.form-visible #show-header-form  {
        background-color: #E0E0E0;
        cursor: default;
    }

    .site-header-wrapper.-success .site-header-form form{
        grid-template-rows: auto;
        grid-row-gap: 0;
    }



    /* MENU */

    .header-nav-list{
        justify-content: flex-end;
    }

    .header-nav-item {
        position: relative;
        padding: 30px 10px;
        cursor: pointer;
        background: linear-gradient(0deg, #fff 6px, #fff 6px);
        transition: background 0.3s;
        margin: 0;
    }

    .header-nav-item span {
        display: flex;
        align-items: center;
    }

    .header-nav-dropdown {
        position: absolute;
        display: none;
        background-color: #fff;
        min-width: 144px;
        box-shadow: 0px 3px 5px 0 rgb(0 0 0 / 10%);
        left: 0;
        top: 84px;
        margin: 0;
        padding: 1rem 0;
        border-radius: 0 0 5px 5px;
        z-index: -1;
        visibility: hidden;
        opacity: 0;
    }
    .header-nav-item:hover {
        background: linear-gradient(0deg, #48bf4e 6px, #fff 6px);
    }

    .header-nav-item:hover .header-nav-dropdown {
        display: block;
        z-index: 1;
        opacity: 1;
        visibility: visible;
    }

    @media (max-width: 1200px){

        .site-header {
            display: grid;
            grid-template-columns: 180px 1fr 140px 37px;
            grid-template-rows: auto 1px auto auto;
            grid-column-gap: 0.5rem;
            grid-row-gap: 0;
            align-items: center;
        }

        .site-header-contacts {
            grid-column: 1 / 3;
            grid-row: 1 / 2;
        }

        .site-header-button {
            grid-column: 3 / 5;
            grid-row: 1 / 2;
        }
        .mobile-menu-button{
            display: block;
            grid-column: 4 / 5;
            grid-row: 3 / 4;
        }

        .site-header-line {
            position: relative;
            grid-column: 1 / 5;
            grid-row: 2 / 3;
        }
        .site-header-form {
            position: relative;
            width: 100%;
            height: 100%;
            grid-column: 2 / 5;
            grid-row: 3 / 5;
            max-width: 770px;
            margin-left: auto;
            top: -1px;
        }

        .site-header-home,
        .site-header-nav{
            display: none;
            grid-column: 1 / 5;
        }

        .site-header-wrapper.mobile-menu-visible .site-header-nav{
            display: block;
        }

        .mobile-menu-button{
            height: 32px;
            text-align: center;
            margin: 1.5rem 0;
        }
    }

    @media (max-width: 768px){
        .site-header-form {
            grid-column: 1 / 5;
            grid-row: 3 / 5;
            max-width: 100%;
            top: -1px;
        }
        .site-header-form form{
            left: -1rem;
            top: 0;
            right: -1rem;
            padding: 0px 1rem 1rem;
        }
    }

    @media (min-width: 577px){
        .form-swither{
            display: none;
        }
        .site-header-wrapper.form-visible .site-header-form{
            z-index: 5;
            display: block;
            opacity: 1;
            visibility: visible;
        }
    }

    @media (max-width: 577px){
        .site-header-height{
            height: 80px;
        }

        .page-header-navigation.-mobile{
            top: 80px !important;
        }

        .form-swither{
            display: block;
        }

        .site-header-wrapper .mobile-menu-button{
            display: block;
        }

        .site-header-wrapper .site-header{
            display: grid;
            grid-template-columns: 180px 1fr 37px 37px ;
            grid-template-rows: auto auto auto auto;
        }

        .site-header-wrapper .site-header-logo{
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        .site-header-wrapper .site-header-contacts{
            grid-column: 1 / 5;
            grid-row: 2 / 3;
            display: none;
        }

        .site-header-wrapper .site-header-button{
            grid-column: 3 / 4;
            grid-row: 1 / 2;
            padding: 1rem 0;
            max-width: 37px;
        }

        .site-header-wrapper .site-header-line{
            display: none;
        }

        .site-header-wrapper .site-header-nav{
            grid-column: 1 / 5;
            grid-row: 2 / 3;
            display: none;
        }

        .site-header-wrapper .site-header-home{
            display: none;
        }

        .site-header-wrapper #show-header-form span{
            display: none;
        }

        .site-header-wrapper #show-header-form{
            width: 37px;
            min-width: 37px;
            height: 37px;
            padding: 0;
            background-image: url('/img/mobile-phone.svg');
            background-repeat: no-repeat;
            background-position: center center;
        }

        .site-header-wrapper.form-visible #show-header-form{
            background-image: url('/img/mobile-phone-inactive.svg');
        }

        .site-header-wrapper .mobile-menu-button{
            grid-column: 4 / 5;
            grid-row: 1 / 2;
            display: block;
        }

        .site-header-wrapper.form-visible .site-header-contacts{
            display: block;
        }

        .site-header-wrapper.form-visible.on-switch .site-header-contacts{
            display: none;
        }

        .site-header-form form {
            position: absolute;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            grid-template-areas: 'name''phone''button''shedule''policy';
            grid-gap: 1rem;
            background-color: #fff;
            left: -1rem;
            top: 0;
            right: -1rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 2px 3px 5px rgb(0 0 0 / 10%);
            padding: 0px 1rem 1rem;
            margin: 0;
        }



        .header-contacts-list{
            flex-direction: column;
            justify-content: stretch;
            align-items: normal;
            padding: 1rem 0;
            gap: 1rem;
        }


    }

    /* ============= СТАРЫЕ СТИЛИ ============== */
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
        justify-content: end;
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

    .navigation-item a{
        text-decoration: none;
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
        transform: translateY(4px);
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
        .site-header-wrapper.mobile-menu-visible .-mobile:not(.-visible){
            display: block;
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
        .page-header-navigation.-mobile .navigation-item.-home{
            display: none;
        }
        .page-header-navigation.-mobile .navigation-item{
            position: unset;
            height: auto;
        }
        .page-header-navigation.-mobile .navigation-item:not(.-home):hover{
            background: #fff;
        }
        .page-header-navigation.-mobile .subnavigation,
        .page-header-navigation.-mobile .extra-navigation{
            display: none;
            position: absolute;
            z-index: -1;
            box-shadow: none;
            padding: 0.5rem 0;
        }

        .page-header-navigation.-mobile .extra-navigation{
            background-color: #f8f8fa;
        }

        .page-header-navigation.-mobile .subnavigation:before,
        .page-header-navigation.-mobile .extra-navigation:before{
            display: none;
        }

        .page-header-navigation.-mobile{
            display: block;
            position: absolute;
            width: 100vw;
            left: 0;
            right: 0;
            top: 150px;
            padding: 1rem 0 0;
            height: calc(100vh - 8rem - 12px);
            overflow-y: scroll;
            overflow-x: hidden;
            background-color: #fff;
            box-shadow: inset 2px 3px 5px rgb(0 0 0 / 10%);
        }

        .-fixed .page-header-navigation.-mobile {
            top: 110px;
        }

        .page-header-navigation.-mobile .navigation-list{
            margin: 0 1rem;
            flex-direction: column;
            align-items: stretch;
        }
        .page-header-navigation.-mobile .subnavigation-link{
            padding: 0;
        }
        .page-header-navigation.-mobile .navigation-title:after{
            font-size: 13px;
            padding: 9px 0;
            transform: rotate(-90deg);
        }
        .page-header-navigation.-mobile .navigation-item,
        .page-header-navigation.-mobile .subnavigation-item{
            list-style-type: none;
            padding: 1rem 0;
        }
        .page-header-navigation.-mobile .auth-icon{
            display: none;
        }
        .page-header-navigation.-mobile .navigation-item + .navigation-item:not(:last-child){
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        .page-header-navigation.-mobile .subnavigation-item + .subnavigation-item{
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        .page-header-navigation.-mobile .navigation-item:hover .navigation-title{

        }
        .page-header-navigation.-mobile .navigation-item:hover .navigation-title:after{
            transform: rotate(-90deg) translateY(3px);
        }
        .page-header-navigation.-mobile .navigation-item.-active .subnavigation,
        .page-header-navigation.-mobile .subnavigation-item.-active .extra-navigation{
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

        .header-feedback-form-block.-success-message{
            grid-row: 1 / 3;
        }

        .site-header-wrapper.-success .header-feedback-form-block.-button .page-button.-ok{
            margin-top: 1rem;
            max-width: 100%;
            width: 100%;
            text-align: center;
        }
    }

</style>



<header class="site-header-wrapper topbannerID">
  <div class="site-header-container">
    <div class="site-header">
      <div class="site-header-contacts">
        <ul class="header-contacts-list">
          <li class="header-contacts-item">
            <a href="" class="header-contacts-link">+7(495)646-83-89</a>
          </li>
          <li class="header-contacts-item">
            <a href="" class="header-contacts-link">sales@happy-job.ru</a>
          </li>
          <li class="header-contacts-item form-swither">
            <a class="page-button" id="form-swither">Заказать звонок</a>
          </li>
        </ul>
      </div>
      <div class="site-header-button">
        <a class="page-button" id="show-header-form">
          <span>Заказать звонок</span>
        </a>

      </div>
      <div class="site-header-line"></div>
      <div class="site-header-logo">
        <a href="/">
          <img
              src="/img/happy-job/images/logo.svg"
              alt="Логотип компании Happy Job"
          />
        </a>
      </div>
      <div class="site-header-home">
        <a href="/" class="navigation-link" title="На главную">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
          >
            <path
                d="m2 13l9.293-9.293a1 1 0 0 1 1.414 0L22 13h-2v8a1 1 0 0 1-1 1h-5v-7h-4v7H5a1 1 0 0 1-1-1v-8H2Z"
            ></path>
          </svg>
        </a>
      </div>
      <div class="site-header-nav">
            <!-- MENU -->
        <nav class="page-header-navigation navigation" id="navigation">
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

                  <a class="subnavigation-link" href="/rabotayushhie-kejsy/">68 кейсов вовлеченности</a>
                </li>
                <li class="subnavigation-item">

                  <a class="subnavigation-link" href="/trends/">Отчёт по трендам</a>
                </li>

              </ul>
            </li>

            <li class="navigation-item ">
                            <span class="navigation-title">
                                Цены
              </span>
              <ul class="subnavigation">
                <li class="subnavigation-heading">
                  <strong>Цены</strong>
                  <a class="subnavigation-heading-back">Назад</a>
                </li>
                <li class="subnavigation-item">

                  <a class="subnavigation-link" href="/prices/">Стоимость проекта</a>
                </li>
                <li class="subnavigation-item">

                  <a class="subnavigation-link" href="/service-packages/">Пакеты услуг</a>
                </li>

              </ul>
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
                          <a href="mailto:support@happy-job.ru" class="params-link">support@happy-job.ru</a>
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


            <!-- /MENU -->
      </div>
      <a class="mobile-menu-button" id="mobile-menu-button"></a>
      <div class="site-header-form">
        <form id="header-feedback-form">
          <div class="header-feedback-form-block -name">
            <input
                type="text"
                name="name"
                placeholder="Имя"
                data-parsley-error-message="Укажите ваше имя"
                required
            >
          </div>
          <div class="header-feedback-form-block -phone">
            <input
                type="tel"
                name="phone"
                placeholder="Телефон"
                data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$"
                data-parsley-error-message="Укажите номер телефона"
                required
            >
          </div>
          <div class="header-feedback-form-block -button">
            <button class="page-button" type="submit" id="order-call">Отправить данные</button>
            <a class="page-button -ok">OK</a>
          </div>
          <div class="header-feedback-form-block -shedule">
            <p>Работаем по будням: <strong>с 9:00 до 18:00</strong></p>
            <p>Заявки, отправленные в выходные, обрабатываем <br>в первый рабочий день следующей недели.</p>
          </div>
          <div class="header-feedback-form-block -policy">
            <p>Нажимая на кнопку «Отправить», вы даете согласие на обработку своих персональных данных.</p>
            <p><a href="/privacy-policy/">🔒 Политика конфиденциальности</a></p>
          </div>
          <div class="header-feedback-form-block -success-message">

            <!-- для будних  -->
            <div class="weekday">
              <p><strong>Благодарим за оставленную заявку!</strong></p>
              <p>Менеджер свяжется с Вами в ближайшее время</p>
            </div>

            <!-- для выходных  -->
            <div class="nonweekday">
              <p>Работаем по будням: <strong>с 9:00 до 18:00</strong></p>
              <p>Заявки, отправленные в выходные, обрабатываем <br>в первый рабочий день следующей недели.</p>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</header>
<div class="site-header-height"></div>

<script>


  const currentDay = new Date().getDay();
  const isWeekday = (currentDay > 0 && currentDay < 6);
  const siteHeaderWrapper = document.querySelector('.site-header-wrapper');
  if (isWeekday) {
    siteHeaderWrapper.classList.add('-weekdays-active');
  } else {
    siteHeaderWrapper.classList.remove('-weekdays-active');
  }

  const header = document.querySelector('.site-header-wrapper');
  const navigation = document.getElementById('navigation');
  let page = document.querySelectorAll('html')
  const body = page[0]
  const showHeaderFormButton = document.querySelector('#show-header-form');
  const formSwitherButton = document.querySelector('#form-swither');
  const showMobileMenuButton = document.querySelector('#mobile-menu-button');

  const mMaskOptions = {
    mask: "+{7}(000)000-00-00",
    lazy: false,
    placeholderChar: "_",
  };


  showHeaderFormButton.addEventListener("click", (e) => {
    e.target.classList.toggle("is-active");
    header.classList.toggle("form-visible");
  })

  showMobileMenuButton.addEventListener("click", (e) => {
    header.classList.toggle("mobile-menu-visible");
    e.target.classList.toggle("is-active");
  })

  formSwitherButton.addEventListener("click", (e) => {
    header.classList.toggle("on-switch");
  })

  document.addEventListener("DOMContentLoaded", () => {
    let lastScrollY = window.pageYOffset;
    window.addEventListener("scroll", function() {
      const currentScrollY = window.pageYOffset;
      header.classList.remove("form-visible");
      showHeaderFormButton.classList.remove("is-active");
      const bodyWidth = document.body.offsetWidth;
      if ( (currentScrollY > lastScrollY) && (currentScrollY > 0) && (bodyWidth > 577) ) {
        console.log("Прокручено вниз");
        header.classList.add('scroll');
      } else if (currentScrollY < lastScrollY) {
        header.classList.remove('scroll');
        header.classList.remove('on-switch');
        console.log("Прокручено вверх");
      }
      lastScrollY = currentScrollY;
    });
  })
  function updateHeaderClasses() {
    const headerWrapper = document.querySelector('.site-header-wrapper');
    const bodyWidth = document.body.offsetWidth;

    if (headerWrapper) {
      headerWrapper.classList.remove('-tablet', '-phoneview');

      if (bodyWidth < 1200) {
        headerWrapper.classList.add('-tablet');
      }

      if (bodyWidth < 577) {
        headerWrapper.classList.add('-phoneview');
      }
    }
  }

  window.addEventListener('load', updateHeaderClasses);
  window.addEventListener('resize', updateHeaderClasses);


  document.addEventListener("DOMContentLoaded", () => {

    let mInputFields = document.querySelectorAll('#header-feedback-form input[type="tel"]');
    console.log(mInputFields)
    let mImaskArr = [];
    mInputFields.forEach((input) => {
      mImaskArr.push(IMask(input, mMaskOptions))
    });


    const mSendForm = (mFormNode, mFormData, mFormNodeID, mFormURL) => {
      $('.site-header-wrapper').addClass('-success');

      fetch('/ajax', {
        method: 'POST',
        body: mFormData
      })
        .then(function(response) {
          if (!response.ok) {
            throw new Error('Ошибка HTTP: ' + response.status);
          }

          return response.json();
        })
        .then(function(data) {
          if (data.status === 'error') {
            $('.site-header-wrapper').addClass('-success');
            //Swal.fire('Ошибка отправки!', data.msg, data.status);
          } else if (data.status === 'success') {
            const timeStatus = checkWorkTime(mFormNodeID);
            console.log(mFormNodeID);

            $('.site-header-wrapper').addClass('-success');
            sendMetrik(mFormNodeID, mFormURL);
            $('#header-dropdown').prop('checked', false).css('border', '10px solid red');

          }
          $("#header-feedback-form").find('input[type="text"], input[type="tel"]').val('');
          inputFields = document.querySelectorAll('input[type="tel"]');
          inputFields.forEach((input) => {
            IMask(input, mMaskOptions);
          });

          ym(46152993, 'reachGoal', 'mainpage_send_topform');
        })
        .catch(function(error) {
          console.log('mSendForm :: errors (catch): ');
          console.log(error);
          $('#header-dropdown').prop('checked', false).css('border', '10px solid red');
          console.log('CLICK!!!')
          console.error('Ошибка отправки данных на сервер:', error);
          $('.site-header-wrapper').addClass('-success');
          /*Swal.fire({
            icon: 'question',
            title: 'А вот это уже интересно',
            text: error.toString(),
          });*/
          ym(46152993, 'reachGoal', 'event_error');
        });
    };

    function mFormSubmitHandler(event) {
      event.preventDefault();
      const mFormNode = document.getElementById('header-feedback-form');
      const mFormData = new FormData(mFormNode);
      const mFormNodeID ='header-feedback-form';
      const mFormURL = window.location.href;
      mSendForm(mFormNode, mFormData, mFormNodeID, mFormURL);
      console.log('Новая форма Отправилась!');
      mFormNode.reset();
    }




    $('.page-button.-ok').on('click', function(event){
      $('.site-header-wrapper').removeClass('-success').removeClass('form-visible')
    })

    $('#order-call').on('click', function(event){

      const Form = $('#header-feedback-form').parsley();
      if (Form.isValid()) {
        mFormSubmitHandler(event)
      }
    })

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

    function displayMenu(){
      navigation.classList.toggle("-visible");
      body.classList.toggle("-ovh");
    }

    function detectScreenWidth(){
      console.log('detectScreenWidth')
      let viewPortWidth = window.innerWidth;

      if(viewPortWidth <= 1200){
        navigation.classList.add("-mobile");

        showMobileMenuButton.addEventListener("click", displayMenu);

        document.querySelectorAll('.navigation-title').forEach(item => {

          console.log('test ' + item)

          item.addEventListener('click', event => {
            console.log('click')
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
        showMobileMenuButton.removeEventListener("click", displayMenu);
      }
    }

    detectScreenWidth()

    addEventListener("resize", (event) => {
      detectScreenWidth()
    });

    document.addEventListener('click', function(event) {
      const siteHeaderWrapper = document.querySelector('.site-header-wrapper');

      if (!siteHeaderWrapper) {
        return;
      }
      const isClickOutside = !event.target.closest('.site-header-wrapper');

      if (isClickOutside) {
        // console.log('Клик вне блоков');
        $('.site-header-wrapper').removeClass('form-visible');
      }
    });
  });


</script>

