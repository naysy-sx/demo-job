<?php $this->title = 'HR консалтинг Happy Job | Консалтинговые услуги для HR и руководителей'; ?>
<div class="container mainc">
    <main>
        <style>
            :root {
                --consulting-color: #46a758;
                --consulting-color-hover: #297C3B;
            }

            body .container.mainc {
                width: 100%;
                max-width: calc(100% - 8px);
                transform: translateX(-4px);
                padding: 0;
            }

            body .container.mainc ~ .videos,
            body .container.mainc ~ .section {
                display: none !important;
            }

            .consulting-intro-wrapper {
                margin-top: 0rem;
                padding: clamp(2.5rem, 1.7857142857142858rem + 3.571428571428571vw, 5rem) 0 clamp(1.875rem, 1.3928571428571428rem + 2.4107142857142856vw, 3.5625rem);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .consulting-intro {
                display: grid;
                color: #fff;
                grid-template-columns: 1fr 590px;
                grid-template-rows: auto auto auto;
                grid-template-areas: 'title picture''subtitle picture''button picture';
            }

            .consulting-intro-title,
            .consulting-intro-subtitle,
            .consulting-intro-button {
                padding: 14px 0;
            }

            .consulting-intro-title {
                grid-area: title;
                font-weight: 900;
                font-size: 2.125rem;
                font-size: clamp(2.125rem, 1.9285714285714286rem + 0.9821428571428571vw, 2.8125rem);
                margin: 0;
            }

            .consulting-intro-subtitle {
                grid-area: subtitle;
                font-size: 16px;
                letter-spacing: 0.1px;
                margin: 0;
                max-width: 350px;
                color: #fff;
            }

            .consulting-intro-button {
                grid-area: button;
            }

            .consulting-intro-image {
                position: relative;
                grid-area: picture;
                margin: 0;
            }

            .consulting-intro-image img {
                position: absolute;
                left: 76px;
                top: -6px;
                transform: scale(1.4);
            }

            .button.-consulting {
                background-color: var(--consulting-color);
                border: none;
                box-shadow: none !important;
                padding: 0 32px;
                font-size: 17px;
                font-weight: 600;
                border-radius: 8px;
                transition: all 0.2s;
            }

            .button.-consulting:hover {
                background-color: var(--consulting-color-hover);
            }

            @media (max-width: 62rem) {
                .container {
                    max-width: 100%;
                }
            }

            @media (max-width: 1201px) {
                .consulting-intro {
                    display: grid;
                    grid-template-columns: 1fr 400px;
                }

                .consulting-intro-image img {
                    left: 0;
                    top: 0;
                    transform: scale(1);
                    height: 100%;
                    width: initial;
                    max-width: inherit;
                }
            }

            @media (max-width: 993px) {
                .consulting-intro {
                    display: grid;
                    color: #fff;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas:
      'title'
      'subtitle'
      'button'
      'picture';
                }

                .consulting-intro-image img {
                    position: relative;
                    width: 100%;
                    max-width: 100%;
                    left: -2.2rem;
                }

                .consulting-intro-title,
                .consulting-intro-subtitle,
                .consulting-intro-button {
                    padding: 6px 0;
                }
            }

            @media (max-width: 577px) {
                .consulting-intro {
                    grid-template-areas:
      'title'
      'subtitle'
      'picture'
      'button';
                }

                .consulting-intro-button {
                    margin-top: 1rem;
                    text-align: center;
                }

                .consulting-intro-button .button.-consulting {
                    width: 75%;
                }
            }

            @media (max-width: 400px) {
                .consulting-intro-button .button.-consulting {
                    width: 100%;
                }
            }
        </style>
        <section class="consulting-intro-wrapper" style="background-image: url(/img/consulting/intro.svg)">
            <div class="container">
                <div class="consulting-intro">
                    <h1 class="consulting-intro-title">Выведите аналитику <br>ваших отчетов <br>на новый уровень</h1>
                    <p class="consulting-intro-subtitle">Специальный курс по работе с отчетами и обучение ваших
                                                         сотрудников. </p>
                    <div class="consulting-intro-button">
                        <a data-src="#main-modal" data-fancybox class="button -consulting">Оставить заявку</a>
                    </div>
                    <figure class="consulting-intro-image">
                        <img src="/img/consulting/header-image.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <style>
            .consulting-tabs-wrapper {
                padding: clamp(1.875rem, 1.0714285714285716rem + 4.017857142857142vw, 4.6875rem) 0;
            }

            .consulting-tabs {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto auto auto auto;
                grid-template-areas: 'button1 button2''section1 section1''section2 section2';
            }

            .consulting-tabs-button.-first {
                grid-area: button1;
            }

            .consulting-tabs-button.-second {
                grid-area: button2;
            }

            .consulting-section {
                padding: clamp(1rem, 0.5178571428571429rem + 2.4107142857142856vw, 2.6875rem) clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
                background-color: #f4f5f7;
                border: 1px solid #eaeff2;
                border-top: none;
            }

            .consulting-section.-first {
                grid-area: section1;
            }

            .consulting-section.-second {
                grid-area: section2;
            }

            .consulting-section:not(.-is-active) {
                display: none;
            }

            .consulting-tabs-button.-is-active {
                background-color: #f4f5f7;
                border: 1px solid #eaeff2;
                border-bottom: none;
                border-radius: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem) clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem) 0 0;
            }

            .consulting-tabs-link {
                display: block;
                font-weight: 800;
                font-size: clamp(1rem, 0.8214285714285714rem + 0.8928571428571428vw, 1.625rem);
                letter-spacing: 1.1px;
            }

            .consulting-tabs-button.-is-active .consulting-tabs-link {
                padding: clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) 40px;
            }

            .consulting-tabs-button:not(.-is-active) {
                padding: 0 0 clamp(0.625rem, 0.44642857142857145rem + 0.8928571428571428vw, 1.25rem) 30px;
            }

            .consulting-tabs-button.-first:not(.-is-active) {
                padding: 0 clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) clamp(0.625rem, 0.44642857142857145rem + 0.8928571428571428vw, 1.25rem) 0;
            }

            .consulting-tabs-button:not(.-is-active) {
                position: relative;
            }

            /* first  */
            .consulting-tabs-button.-first:not(.-is-active):before,
            .consulting-tabs-button.-first:not(.-is-active):after {
                content: '';
                display: block;
                position: absolute;
                right: -1px;
                left: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                top: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                bottom: -1px;
                border-radius: 0 0 clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem) 0;
            }

            .consulting-tabs-button.-first:not(.-is-active):before {
                background-color: #f4f5f7;
                z-index: 1;
                border-radius: 0;
                right: -2px;
                bottom: -2px;
            }

            .consulting-tabs-button.-first:not(.-is-active):after {
                background-color: #fff;
                z-index: 1;
                border-right: 1px solid #eaeff2;
                border-bottom: 1px solid #eaeff2;
            }

            .consulting-tabs-button.-first:not(.-is-active) .consulting-tabs-link {
                position: relative;
                padding: clamp(1rem, 0.6964285714285714rem + 1.5178571428571428vw, 2.0625rem) clamp(1.3125rem, 0.9196428571428572rem + 1.9642857142857142vw, 2.6875rem) clamp(0.75rem, 0.5178571428571428rem + 1.1607142857142858vw, 1.5625rem);
                box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);
                border-radius: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                z-index: 3;
            }

            /* second  */
            .consulting-tabs-button.-second:not(.-is-active):before,
            .consulting-tabs-button.-second:not(.-is-active):after {
                content: '';
                display: block;
                position: absolute;
                left: -1px;
                right: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                top: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                bottom: -1px;
                border-radius: 0 0 0 clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
            }

            .consulting-tabs-button.-second:not(.-is-active):before {
                background-color: #f4f5f7;
                z-index: 1;
                border-radius: 0;
                left: -2px;
                bottom: -2px;
            }

            .consulting-tabs-button.-second:not(.-is-active):after {
                background-color: #fff;
                z-index: 1;
                border-left: 1px solid #eaeff2;
                border-bottom: 1px solid #eaeff2;
            }

            .consulting-tabs-button.-second:not(.-is-active) .consulting-tabs-link {
                position: relative;
                padding: clamp(1rem, 0.6964285714285714rem + 1.5178571428571428vw, 2.0625rem) clamp(1.3125rem, 0.9196428571428572rem + 1.9642857142857142vw, 2.6875rem) clamp(0.75rem, 0.5178571428571428rem + 1.1607142857142858vw, 1.5625rem);
                box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);
                border-radius: 16px;
                z-index: 3;
            }

            .consulting-tabs-content {
                background-color: #f4f5f7;
                border: 1px solid #eaeff2;
                border-top: none;
                padding: clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) clamp(1.25rem, 0.8928571428571429rem + 1.7857142857142856vw, 2.5rem) clamp(1.4375rem, 1.0089285714285714rem + 2.142857142857143vw, 2.9375rem);
            }

            .consulting-section.-first.-is-active {
                border-radius: 0 clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem) clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem);
            }

            .consulting-section.-second.-is-active {
                border-radius: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem) 0 clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem);
            }

            .consulting-section-description {
                max-width: 760px;
                margin-top: 5px;
                margin-bottom: clamp(1rem, 0.5714285714285714rem + 2.142857142857143vw, 2.5rem);
            }

            .consulting-section-description p {
                letter-spacing: 0.08px;
                line-height: 1.35;
                color: #1A1A1A;
            }

            .consulting-list {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: clamp(1rem, 0.5714285714285714rem + 2.142857142857143vw, 2.5rem);
            }

            .consulting-card {
                margin: 0;
                border-radius: clamp(0.5rem, 0.35714285714285715rem + 0.7142857142857143vw, 1rem);
                background-color: #fff;
                padding: clamp(1.25rem, 0.8928571428571429rem + 1.7857142857142856vw, 2.5rem);
                box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.03);
            }

            .consulting-card.-wide {
                grid-column: 1 / 3;
            }

            .consulting-card-content {
                display: grid;
                height: 100%;
                grid-template-columns: 1fr;
                grid-template-rows: auto 1fr auto;
                grid-gap: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
            }

            .consulting-card.-support.-wide .consulting-card-content {
                display: grid;
                height: 100%;
                grid-template-columns: 64% auto;
                grid-template-rows: auto 1fr auto;
                grid-row-gap: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
                grid-template-areas: 'header image' 'list image' 'footer image';
            }

            @media (max-width: 577px) {
                .consulting-card.-support.-wide .consulting-card-content {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas: 'header''list''image''footer';
                }
            }

            .consulting-card-header {
                display: grid;
                align-items: center;
                grid-template-columns: 42px auto;
                grid-gap: 1rem;
                margin-top: 5px;
            }

            .consulting-card.-support.-wide .consulting-card-content .consulting-card-header {
                grid-area: header;
            }

            .consulting-card.-support.-wide .consulting-card-content ul {
                grid-area: list;
            }

            .consulting-card.-support.-wide .consulting-card-content .consulting-card-footer {
                grid-area: footer;
            }

            .consulting-card.-support.-wide .consulting-card-content .consulting-card-image {
                grid-area: image;
            }

            .consulting-card .consulting-card-title {
                font-weight: 700;
                font-size: clamp(1rem, 0.8928571428571428rem + 0.5357142857142857vw, 1.375rem);
                padding: 0;
                margin: 0;
            }

            .consulting-card .consulting-card-title.-big {
                font-weight: 800;
                font-size: clamp(1rem, 0.8214285714285714rem + 0.8928571428571428vw, 1.625rem);
                letter-spacing: 1.1px;
            }

            .consulting-card-icon {
                border-radius: 50%;
                aspect-ratio: 1 / 1;
                background-size: contain;
                background-repeat: no-repeat;
            }

            .consulting-card-icon.-rocket {
                background-image: url(/img/consulting/icon-rocket.svg);
            }

            .consulting-card-icon.-key {
                background-image: url(/img/consulting/icon-key.svg);
            }

            .consulting-card-icon.-session {
                background-image: url(/img/consulting/icon-session.svg);
            }

            .consulting-card-icon.-sert {
                background-image: url(/img/consulting/icon-sert.svg);
            }

            .consulting-card-icon.-fasi {
                background-image: url(/img/consulting/icon-fasi.svg);
            }

            .consulting-card ul {
                margin: 0;
            }

            .consulting-card ul li {
                font-size: 14px;
                padding-left: 18px;
                color: #191919;
            }

            .consulting-card ul li:before {
                content: "\0025CF";
                background: inherit;
                position: absolute;
                left: 0;
                top: -1px;
                width: initial;
                height: initial;
                bottom: initial;
                border-radius: 0;
                color: #191919;
            }

            @media (max-width: 577px) {
                .consulting-card ul li:before {
                    font-size: 9px;
                }
            }

            .consulting-card-footer {
                margin-top: -9px;
            }

            .consulting-card-button {
                display: inline-flex;
                border: 1px solid #c0c0c7;
                color: #000b1d;
                align-items: center;
                border-radius: 6px;
                padding: 17px 38px 14px 27px;
                gap: 11px;
                font-size: 14px;
                font-weight: 500;
                height: 47px;
                background-color: transparent;
                transition: all 0.3s;
            }

            .consulting-card-button .button-icon {
                width: 21px;
                min-width: 21px;
                aspect-ratio: 1 / 1;
                background-image: url("data:image/svg+xml,%3Csvg width='20' height='21' viewBox='0 0 20 21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_6218_560)'%3E%3Cpath d='M3.54167 0.496095H16.4583C16.9236 0.495646 17.3843 0.589296 17.8142 0.771685C18.2441 0.954075 18.6347 1.22162 18.9636 1.55902C19.2926 1.89642 19.5535 2.29704 19.7313 2.73795C19.9091 3.17887 20.0004 3.65142 20 4.12857V16.8636C20.0004 17.3408 19.9091 17.8133 19.7313 18.2542C19.5535 18.6952 19.2926 19.0958 18.9636 19.4332C18.6347 19.7706 18.2441 20.0381 17.8142 20.2205C17.3843 20.4029 16.9236 20.4965 16.4583 20.4961H3.54167C3.07645 20.4965 2.61571 20.4029 2.18581 20.2205C1.75592 20.0381 1.36532 19.7706 1.03635 19.4332C0.707392 19.0958 0.446532 18.6952 0.268702 18.2542C0.0908718 17.8133 -0.000436903 17.3408 1.57173e-06 16.8636V4.12857C-0.000436903 3.65142 0.0908718 3.17887 0.268702 2.73795C0.446532 2.29704 0.707392 1.89642 1.03635 1.55902C1.36532 1.22162 1.75592 0.954075 2.18581 0.771685C2.61571 0.589296 3.07645 0.495646 3.54167 0.496095Z' fill='%23000B1D'/%3E%3Cpath d='M16.0835 12.0776C15.1585 11.069 12.6002 11.4793 12.0002 11.5818C11.3312 10.8958 10.7565 10.1194 10.2919 9.27416C10.6335 8.30143 10.8302 7.28141 10.8752 6.24851C10.8752 5.32544 10.5169 4.33398 9.51688 4.33398C9.34656 4.33869 9.18016 4.38737 9.03304 4.47551C8.88593 4.56365 8.76286 4.68841 8.67521 4.83826C8.25021 5.59039 8.41688 7.14595 9.10021 8.7186C8.70021 9.87245 8.12521 11.5391 7.36688 12.8895C6.34188 13.3083 4.16688 14.334 3.95854 15.4707C3.92692 15.6355 3.93799 15.8058 3.99063 15.9648C4.04327 16.1238 4.13565 16.2658 4.25854 16.3767C4.50168 16.5968 4.81778 16.713 5.14188 16.7015C6.45021 16.7015 7.75854 14.8383 8.64188 13.24C9.65964 12.8838 10.7013 12.6039 11.7585 12.4024C13.1419 13.6417 14.3752 13.8297 15.0002 13.8297C15.8502 13.8297 16.1669 13.4536 16.2835 13.1374C16.345 12.9585 16.3589 12.7659 16.3238 12.5796C16.2886 12.3934 16.2057 12.2201 16.0835 12.0776ZM15.1835 12.7271C15.1419 12.975 14.8335 13.2229 14.2585 13.0947C13.5925 12.9234 12.9719 12.6022 12.4419 12.1545C12.8919 12.0776 13.9419 11.975 14.6835 12.1203C14.9502 12.1716 15.2585 12.3254 15.1835 12.7271ZM9.21688 5.16304C9.24419 5.10743 9.28579 5.06052 9.33719 5.02739C9.38859 4.99425 9.44784 4.97614 9.50854 4.97501C9.82521 4.97501 9.89188 5.36817 9.89188 5.69296C9.84001 6.46768 9.70018 7.23354 9.47521 7.97501C8.94188 6.52202 9.01688 5.51347 9.21688 5.16304ZM9.14188 12.2656C9.45064 11.6025 9.726 10.9235 9.96688 10.2314C10.2999 10.772 10.6791 11.2812 11.1002 11.7528C10.4389 11.8875 9.78519 12.0587 9.14188 12.2656ZM7.05021 13.7357C6.20854 15.1203 5.38354 15.9921 4.90021 15.9921C4.82152 15.9928 4.745 15.9656 4.68354 15.9152C4.63864 15.878 4.60472 15.8287 4.58558 15.7728C4.56645 15.717 4.56286 15.6568 4.57521 15.5989C4.66688 15.1032 5.62521 14.3853 7.05021 13.7357Z' fill='white'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_6218_560'%3E%3Crect width='20' height='20' fill='white' transform='translate(0 0.496094)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                transform: translateY(-2px);
                color: #070707;
            }

            .consulting-card-button:hover {
                border: 1px solid #59595E;
                color: #070707;
            }

            @media (max-width: 577px) {
                .consulting-card-button {
                    width: 100%;
                    justify-content: center;
                }
            }

            .consulting-card.-support {
                position: relative;
                display: grid;
                grid-template-columns: 64% auto;
                align-items: center;
                overflow: hidden;
            }

            .consulting-card.-support.-wide {
                grid-template-columns: 1fr;
            }

            .consulting-card.-support:before {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                bottom: -30%;
                width: 200%;
                height: 150%;
                background: rgb(132, 236, 144);
                background: radial-gradient(circle, rgba(132, 236, 144, 1) 0%, rgba(255, 255, 255, 0) 70%);
                border-radius: 0;
            }

            .consulting-card.-support .consulting-card-content,
            .consulting-card.-support .consulting-card-image {
                position: relative;
                z-index: 1;
            }

            .consulting-card.-support .consulting-card-title {
                font-size: clamp(1rem, 0.8214285714285714rem + 0.8928571428571428vw, 1.625rem);
            }

            .consulting-card.-support .consulting-card-image {
                margin: 0;
                position: relative;
                height: 100%;
            }

            @media (min-width: 577px) {
                .consulting-card.-support .consulting-card-image img {
                    transform: scale(1.2) translateX(0px);
                }
            }

            .consulting-card-content .consulting-certificates {
                display: grid;
                grid-gap: 1rem;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                margin: 15px 0 30px;
            }

            .consulting-certificates-item {
                list-style-type: none;
                margin: 0;
                padding: 0;
                padding-left: 0 !important;
            }

            .consulting-certificates-item:before {
                display: none;
            }

            .consulting-certificat {
                position: relative;
                height: 100%;
                font-size: 1rem;
                border-radius: 1rem;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                padding: 10px;
            }

            .consulting-certificat.-copper {
                background-image: url(/img/consulting/copper.png);
            }

            .consulting-certificat.-silver {
                background-image: url('/img/consulting/silver.png');
            }

            .consulting-certificat.-gold {
                background-image: url('/img/consulting/gold.png');
            }

            .consulting-certificat-content {
                background-color: #fff;
                padding: 2rem 2rem 1rem;
                border-radius: 10px;
                overflow: hidden;
                height: 100%;
            }

            .consulting-certificat img {
                position: absolute;
                right: 10px;
                top: 10px;
                border-radius: 0 10px 0 0;
            }

            .consulting-certificat-title {
                font-size: 18px;
                font-weight: bolder;
                margin: 0;
            }

            .consulting-certificat p {
                display: flex;
                align-items: center;
                font-size: 14px;
                color: #191919;
                gap: 10px;
                margin-bottom: 6rem;
            }

            .consulting-certificat p span {
                transform: translateY(0px);
            }

            .consulting-certificat-list {
                margin: 0;
                padding: 0;
            }

            .consulting-certificat-list li {
                font-size: 14px;
            }

            .calendar-icon {
                width: 16px;
                height: 18px;
                min-width: 16px;
                background-image: url(/img/consulting/icon-calendar.svg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            @media (max-width: 769px) {
                .consulting-tabs {
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas: 'button1''section1''button2''section2';
                }

                .consulting-tabs-button.-first:not(.-is-active),
                .consulting-tabs-button.-second:not(.-is-active) {
                    padding-left: 0;
                    padding-right: 0;
                }

                .consulting-tabs-button.-first:not(.-is-active):before,
                .consulting-tabs-button.-second:not(.-is-active):before,
                .consulting-tabs-button.-first:not(.-is-active):after,
                .consulting-tabs-button.-second:not(.-is-active):after {
                    display: none;
                }

                .consulting-section.-first.-is-active,
                .consulting-section.-second.-is-active {
                    border-radius: 0 0 clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem) clamp(0.9375rem, 0.6696428571428572rem + 1.3392857142857142vw, 1.875rem);
                    position: relative;
                }

                .consulting-section.-first.-is-active:before,
                .consulting-section.-second.-is-active:before {
                    content: '';
                    display: block;
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0;
                    height: 1.5rem;
                    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0) 100%);
                }

                .consulting-tabs-button.-second:not(.-is-active) {
                    margin-top: 1rem;
                }

                .consulting-list {
                    grid-template-columns: 1fr;
                }

                .consulting-card.-wide {
                    grid-column: 1 / 2;
                }

                .consulting-card.-support {
                    position: relative;
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto;
                    align-items: center;
                    overflow: hidden;
                }
            }
        </style>
        <section class="consulting-tabs-wrapper">
            <div class="container">
                <div class="consulting-tabs">
                    <div class="consulting-tabs-button -is-active -first">
                        <a class="consulting-tabs-link">Руководителям</a>
                    </div>
                    <div class="consulting-tabs-button -second">
                        <a class="consulting-tabs-link">HR-специалистам</a>
                    </div>
                    <section class="consulting-section -is-active -first">
                        <div class="consulting-section-description">
                            <p>Предоставьте своим менеджерам возможность стать эффективными лидерами с помощью онлайн
                               платформы Happy Job и индивидуальной поддержки консультантов. Программы, специально
                               разработанные для «загруженных работой» руководителей.</p>
                        </div>
                        <ul class="consulting-list">
                            <li class="consulting-card">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -rocket"></div>
                                        <h2 class="consulting-card-title">Экспресс-курс <br>по работе в личном кабинете
                                        </h2>
                                    </div>
                                    <ul>
                                        <li>Объясняем руководителям методику исследования</li>
                                        <li>Рассказываем, как использовать платформу, читать <br>и расшифровывать отчеты
                                        </li>
                                        <li>Мотивируем на работу с вовлеченностью</li>
                                        <li>Длительность - 45 минут</li>
                                    </ul>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/ekspress_kurs_po_rabote_v_lichnom_kabinete_dlya_rukovoditelej.pdf"
                                           download class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="consulting-card">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -key"></div>
                                        <h2 class="consulting-card-title">Подробная презентация <br>результатов
                                                                          исследования</h2>
                                    </div>
                                    <ul>
                                        <li>Объясняем руководителям методику исследования</li>
                                        <li>Рассказываем, как использовать платформу, читать <br>и расшифровывать
                                            отчеты. Рассказываем о нюансах и тонкостях
                                        </li>
                                        <li>Вместе с нашими экспертами обсуждаем результаты</li>
                                        <li>Мотивируем на работу с вовлеченностью</li>
                                        <li>Длительность - 120 минут</li>
                                    </ul>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/podrobnaya_prezentacziya_rezultatov_issledovaniya.pdf"
                                           download class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="consulting-card -support -wide">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -session"></div>
                                        <h2 class="consulting-card-title">Сессии с консультантом Happy Job</h2>
                                    </div>
                                    <ul>
                                        <li>Обсуждаем результаты исследования вместе с нашими экспертами</li>
                                        <li>Разрабатываем систему мер развития показателей, ориентированную <br>на
                                            потребности вашей компании
                                        </li>
                                        <li>Находим действенные способы внедрения изменений, которые будут эффективны
                                            именно для ваших сотрудников
                                        </li>
                                        <li>Длительность - 3-4 часа</li>
                                    </ul>
                                    <figure class="consulting-card-image">
                                        <img src="/img/consulting/cards-image-1.svg" alt="">
                                    </figure>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/sessii_s_konsultantom_happy_job.pdf" download
                                           class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="consulting-section -second">
                        <div class="consulting-section-description">
                            <p>Научитесь видеть в цифрах и индексах риски и возможности. Углубленное изучение
                               методологии, платформы и аналитики Happy Job на базе опыта наших консультантов <br>и
                               тысяч проведенных исследований.</p>
                        </div>
                        <ul class="consulting-list">
                            <li class="consulting-card">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -rocket"></div>
                                        <h2 class="consulting-card-title">Экспресс-курс <br>по работе в личном кабинете
                                        </h2>
                                    </div>
                                    <ul>
                                        <li>Объясняем HR-специалистам методику исследования</li>
                                        <li>Показываем продуктивные алгоритмы анализа результатов исследования</li>
                                        <li>Рассказываем, как использовать платформу, читать <br>и расшифровывать отчеты
                                        </li>
                                        <li>Длительность - 1-2 часа</li>
                                    </ul>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/ekspress_kurs_po_rabote_v_lichnom_kabinete_dlya_hr.pdf"
                                           download class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="consulting-card">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -fasi"></div>
                                        <h2 class="consulting-card-title">Курс по фасилитации <br>развития вовлеченности
                                        </h2>
                                    </div>
                                    <ul>
                                        <li>Учим HR-специалистов реальным инструментам проведения фасилитационных
                                            встреч
                                        </li>
                                        <li>Делимся главными секретами успешных сессий</li>
                                        <li>Обсуждаем, как эффективнее составить план действий по развитию
                                            вовлеченности, выбрать ответственных и установить сроки
                                        </li>
                                        <li>После прохождения курса ваш специалист сможет самостоятельно организовать и
                                            провести фасилитационную сессию по разработке мер развития вовлеченности.
                                        </li>
                                        <li>Длительность - 6 часов</li>
                                    </ul>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/kurs_po_fasilitaczii_razvitiya_vovlechennosti.pdf"
                                           download class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="consulting-card -sert -wide">
                                <div class="consulting-card-content">
                                    <div class="consulting-card-header">
                                        <div class="consulting-card-icon -sert"></div>
                                        <h2 class="consulting-card-title">Сертификация HR-специалистов</h2>
                                    </div>
                                    <p>Первая в своем роде профессиональная квалификация для специалистов по персоналу,
                                       которая знакомит <br>с новейшей теорией, эмпирическими исследованиями и передовым
                                       опытом, полученным из тысяч исследований и консалтинга по развитию вовлеченности.
                                    </p>
                                    <p>Сотрудники, прошедшие сертификацию умеют запускать исследования, работать с
                                       факторами, влияющими на уровень вовлеченности и разрабатывать план по его
                                       развитию.</p>
                                    <ul class="consulting-certificates">
                                        <li class="consulting-certificates-item">
                                            <div class="consulting-certificat -copper">
                                                <div class="consulting-certificat-content">
                                                    <img src="/img/consulting/medallion-copper.svg" alt="">
                                                    <h4 class="consulting-certificat-title">Базовый</h4>
                                                    <p>
                                                        <b class="calendar-icon"></b>
                                                        <span>4 недель</span>
                                                    </p>
                                                    <ul class="consulting-certificat-list">
                                                        <li>10 уроков</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="consulting-certificates-item">
                                            <div class="consulting-certificat -silver">
                                                <div class="consulting-certificat-content">
                                                    <img src="/img/consulting/medallion-silver.svg" alt="">
                                                    <h4 class="consulting-certificat-title">Эксперт</h4>
                                                    <p>
                                                        <b class="calendar-icon"></b>
                                                        <span>8 недель</span>
                                                    </p>
                                                    <ul class="consulting-certificat-list">
                                                        <li>15 уроков</li>
                                                        <li>Тестирование</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="consulting-certificates-item">
                                            <div class="consulting-certificat -gold">
                                                <div class="consulting-certificat-content">
                                                    <img src="/img/consulting/medallion-gold.svg" alt="">
                                                    <h4 class="consulting-certificat-title">Профи</h4>
                                                    <p>
                                                        <b class="calendar-icon"></b>
                                                        <span>4 недель</span>
                                                    </p>
                                                    <ul class="consulting-certificat-list">
                                                        <li>20 уроков</li>
                                                        <li>Тестирование</li>
                                                        <li>Разбор кейса с эксертами</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="consulting-card-footer">
                                        <a href="/pdf/consulting/sertifikacziya_hr-speczialistov.pdf" download
                                           class="consulting-card-button">
                                            <b class="button-icon"></b>
                                            <span>Скачать программу</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                const scrollOffset = 160;
                document.querySelectorAll('.consulting-tabs-button').forEach(button => {
                    button.addEventListener('click', () => {
                        document.querySelectorAll('.consulting-tabs-button').forEach(btn => {
                            btn.classList.remove('-is-active');
                        });
                        document.querySelectorAll('.consulting-section').forEach(section => {
                            section.classList.remove('-is-active');
                        });
                        button.classList.add('-is-active');
                        const additionalClass = button.classList.contains('-first') ? '-first' : '-second';
                        const activeSection = document.querySelector(`.consulting-section.${additionalClass}`);
                        if (activeSection) {
                            activeSection.classList.add('-is-active');
                            const buttonPosition = button.getBoundingClientRect().top + window.pageYOffset - scrollOffset;
                            window.scrollTo({top: buttonPosition, behavior: 'smooth'});
                        }
                    });
                });
            });
        </script>
        <style>
            .consulting-support-wrapper {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                color: #fff;
            }

            .consulting-support {
                display: grid;
                grid-template-columns: 47% auto;
                grid-gap: 20px;
                align-items: center;
                padding: 137px 0 60px;
            }

            @media (max-width: 577px) {
                .consulting-support {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto;
                    grid-gap: 1rem;
                    align-items: center;
                    padding: 40px 0;
                }
            }

            .consulting-support-content {
                display: flex;
                flex-direction: column;
                gap: clamp(1rem, 0.4285714285714286rem + 2.857142857142857vw, 3rem);
            }

            .consulting-support-content > * {
                margin: 0;
                padding: 0;
            }

            .consulting-support-title {
                font-weight: 900;
                font-size: clamp(1.75rem, 1.0814rem + 1.854vw, 2.75rem);
                color: #fff;
            }

            .consulting-support-content p {
                color: #fff;
                line-height: 1.4;
            }

            .consulting-support-content p:last-child {
                margin: 0;
            }

            .consulting-support-content p:first-child {
                margin: 0 0 17px;
            }

            .consulting-support-image {
                margin: 0;
            }

            @media (min-width: 577px) {
                .consulting-support-image img {
                    transform: scale(1.4) translateX(57px) translateY(-5px);
                }
            }

            .consulting-stages {
                padding: clamp(1.875rem, 1.3392857142857144rem + 2.6785714285714284vw, 3.75rem) 0;
            }

            .consulting-stages * {
                color: #fff;
            }

            .consulting-stages-title {
                text-align: center;
                font-size: clamp(1.25rem, 1.0357142857142856rem + 1.0714285714285714vw, 2rem);
                font-weight: 900;
                margin-bottom: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
            }

            .consulting-stages-list {
                display: grid;
                grid-gap: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
                margin: 0;
                counter-reset: list;
            }

            .consulting-stages-list li {
                margin: 0;
                padding: 0;
            }

            .consulting-stages-list li:before {
                display: none;
            }

            main ol.consulting-stages-list > li ul > li:before {
                content: "\0025CF";
                background: inherit;
                position: absolute;
                left: 0;
                top: -1px;
                width: initial;
                height: initial;
                bottom: initial;
                border-radius: 0;
                color: #fff;
            }

            .consulting-stage {
                display: grid;
                position: relative;
                grid-template-columns: 1fr 100px;
                background-color: rgba(255, 255, 255, 0.1);
                padding: clamp(1rem, 0.8571428571428572rem + 0.7142857142857143vw, 1.5rem) x;
                border-radius: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
                min-height: 150px;
                padding: 40px 134px 30px 102px;
            }

            .consulting-stage:before {
                background-color: rgba(255, 255, 255, 0.1);
                counter-increment: list;
                content: '0' counter(list);
                font-size: 20px;
                font-weight: 600;
                padding: 14px 18px;
                display: block;
                position: absolute;
                left: 20px;
                top: 20px;
                line-height: 1;
                border-radius: 10px;
            }

            .consulting-stage h4 {
                font-size: 18px;
                font-weight: 800;
            }

            .consulting-stage-content ul {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 8px;
                margin: 0;
            }

            .consulting-stage-content ul li {
                position: relative;
                padding: 0 0 0 1rem;
                margin: 0;
                font-size: 14px;
            }

            main ol.consulting-stages-list .consulting-stage-content ul li:before {
                content: "\0025CF";
                background: inherit;
                position: absolute;
                display: block;
                left: -3px;
                top: -4px;
                width: initial;
                height: initial;
                bottom: initial;
                border-radius: 0;
                color: #fff;
                font-size: clamp(0.5625rem, 0.1446rem + 1.1587vw, 1.1875rem);
            }

            @media (max-width: 577px) {
                main ol.consulting-stages-list .consulting-stage-content ul li:before {
                    left: 0px;
                    top: 2px;
                }
            }

            .consulting-stage > figure {
                margin: 0;
                position: relative;
                height: 100%;
            }

            .consulting-stage > figure img {
                position: absolute;
                right: 0;
                top: 0;
                transform: scale(2) translate(-15px, 0px);
                max-height: 90%;
            }

            .-banner .consulting-stage {
                background: url(/img/consulting/programm-stage-5-bg.svg);
                background-size: cover;
                background-position: left -70px center;
                background-repeat: no-repeat;
                padding: 44px 20px 40px 50px;
            }

            .-banner .consulting-stage:before {
                display: none;
            }

            .-banner .consulting-stage p:first-child {
                line-height: 1.5;
            }

            .-banner .consulting-stage p span {
                font-size: clamp(1rem, 0.8329rem + 0.4635vw, 1.25rem);
                display: block;
                margin-bottom: 14px;
            }

            .-banner .consulting-stage p > b {
                font-size: clamp(1.375rem, 0.9571rem + 1.1587vw, 2rem);
                font-weight: 900;
                letter-spacing: 0.3px;
            }

            .consulting-stages-footer {
                display: flex;
                justify-content: center;
                gap: 26px;
                align-items: center;
                padding: clamp(1.875rem, 1.2142857142857144rem + 3.303571428571429vw, 4.1875rem) 0 10px;
            }

            .consulting-stages-footer .consulting-card-button {
                transition: all 0.2s;
            }

            .consulting-stages-footer .consulting-card-button .button-icon {
                background-image: url("data:image/svg+xml,%3Csvg width='20' height='21' viewBox='0 0 20 21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_6218_560)'%3E%3Cpath d='M3.54167 0.496095H16.4583C16.9236 0.495646 17.3843 0.589296 17.8142 0.771685C18.2441 0.954075 18.6347 1.22162 18.9636 1.55902C19.2926 1.89642 19.5535 2.29704 19.7313 2.73795C19.9091 3.17887 20.0004 3.65142 20 4.12857V16.8636C20.0004 17.3408 19.9091 17.8133 19.7313 18.2542C19.5535 18.6952 19.2926 19.0958 18.9636 19.4332C18.6347 19.7706 18.2441 20.0381 17.8142 20.2205C17.3843 20.4029 16.9236 20.4965 16.4583 20.4961H3.54167C3.07645 20.4965 2.61571 20.4029 2.18581 20.2205C1.75592 20.0381 1.36532 19.7706 1.03635 19.4332C0.707392 19.0958 0.446532 18.6952 0.268702 18.2542C0.0908718 17.8133 -0.000436903 17.3408 1.57173e-06 16.8636V4.12857C-0.000436903 3.65142 0.0908718 3.17887 0.268702 2.73795C0.446532 2.29704 0.707392 1.89642 1.03635 1.55902C1.36532 1.22162 1.75592 0.954075 2.18581 0.771685C2.61571 0.589296 3.07645 0.495646 3.54167 0.496095Z' fill='%23ffffff'/%3E%3Cpath d='M16.0835 12.0776C15.1585 11.069 12.6002 11.4793 12.0002 11.5818C11.3312 10.8958 10.7565 10.1194 10.2919 9.27416C10.6335 8.30143 10.8302 7.28141 10.8752 6.24851C10.8752 5.32544 10.5169 4.33398 9.51688 4.33398C9.34656 4.33869 9.18016 4.38737 9.03304 4.47551C8.88593 4.56365 8.76286 4.68841 8.67521 4.83826C8.25021 5.59039 8.41688 7.14595 9.10021 8.7186C8.70021 9.87245 8.12521 11.5391 7.36688 12.8895C6.34188 13.3083 4.16688 14.334 3.95854 15.4707C3.92692 15.6355 3.93799 15.8058 3.99063 15.9648C4.04327 16.1238 4.13565 16.2658 4.25854 16.3767C4.50168 16.5968 4.81778 16.713 5.14188 16.7015C6.45021 16.7015 7.75854 14.8383 8.64188 13.24C9.65964 12.8838 10.7013 12.6039 11.7585 12.4024C13.1419 13.6417 14.3752 13.8297 15.0002 13.8297C15.8502 13.8297 16.1669 13.4536 16.2835 13.1374C16.345 12.9585 16.3589 12.7659 16.3238 12.5796C16.2886 12.3934 16.2057 12.2201 16.0835 12.0776ZM15.1835 12.7271C15.1419 12.975 14.8335 13.2229 14.2585 13.0947C13.5925 12.9234 12.9719 12.6022 12.4419 12.1545C12.8919 12.0776 13.9419 11.975 14.6835 12.1203C14.9502 12.1716 15.2585 12.3254 15.1835 12.7271ZM9.21688 5.16304C9.24419 5.10743 9.28579 5.06052 9.33719 5.02739C9.38859 4.99425 9.44784 4.97614 9.50854 4.97501C9.82521 4.97501 9.89188 5.36817 9.89188 5.69296C9.84001 6.46768 9.70018 7.23354 9.47521 7.97501C8.94188 6.52202 9.01688 5.51347 9.21688 5.16304ZM9.14188 12.2656C9.45064 11.6025 9.726 10.9235 9.96688 10.2314C10.2999 10.772 10.6791 11.2812 11.1002 11.7528C10.4389 11.8875 9.78519 12.0587 9.14188 12.2656ZM7.05021 13.7357C6.20854 15.1203 5.38354 15.9921 4.90021 15.9921C4.82152 15.9928 4.745 15.9656 4.68354 15.9152C4.63864 15.878 4.60472 15.8287 4.58558 15.7728C4.56645 15.717 4.56286 15.6568 4.57521 15.5989C4.66688 15.1032 5.62521 14.3853 7.05021 13.7357Z' fill='%23000000'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_6218_560'%3E%3Crect width='20' height='20' fill='white' transform='translate(0 0.496094)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E");
            }

            .consulting-stages-footer .consulting-card-button.-feedback {
                background-color: var(--consulting-color);
                border-color: var(--consulting-color);
                padding: 17px 38px 14px 38px;
            }

            .consulting-stages-footer .consulting-card-button:hover {
                background-color: rgba(255, 255, 255, 0.22);
                border: 1px solid #C6CACC;
            }

            .consulting-stages-footer .consulting-card-button.-feedback:hover {
                background-color: var(--consulting-color-hover);
                border: 1px solid var(--consulting-color-hover);
            }

            .consulting-card.-sert.-wide .consulting-card-title {
                font-size: 1rem;
                font-size: clamp(1rem, 0.8214285714285714rem + 0.8928571428571428vw, 1.625rem);
                letter-spacing: 0.5px;
            }

            .consulting-card.-sert.-wide .consulting-card-content {
                grid-gap: 12px;
            }

            .consulting-card.-sert.-wide .consulting-card-content > p {
                font-size: 14px;
                max-width: 800px;
                line-height: 1.28;
                letter-spacing: 0.02px;
                color: #1A1A1A;
            }

            .consulting-stages-item.-banner {
                background-color: rgba(255, 255, 255, 0.2);
                border-radius: clamp(1rem, 0.7142857142857143rem + 1.4285714285714286vw, 2rem);
            }

            @media (max-width: 1201px) {
                .consulting-stage {
                    min-height: initial;
                    padding: 20px 20px 20px 70px;
                }

                .consulting-stage:before {
                    font-size: 16px;
                    padding: 10px 14px;
                    left: 10px;
                    top: 10px;
                    border-radius: 7px;
                }

                .consulting-stage > figure img {
                    position: relative;
                    transform: scale(1) translate(0px, 0px);
                    max-height: initial;
                }
            }

            @media (max-width: 577px) {
                .consulting-stage {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto;
                    grid-gap: 1.5rem;
                }

                .consulting-stage h4 {
                    font-size: 16px;
                    font-weight: 500;
                }

                .consulting-stage > figure {
                    width: 70%;
                    margin: 0 auto 1.5rem;
                }

                .consulting-stages-footer {
                    flex-direction: column;
                }

                .-banner .consulting-stage {
                    background: url(/img/consulting/programm-stage-5-bg-mobile.svg);
                    background-size: cover;
                    background-position: center bottom;
                    background-repeat: no-repeat;
                    aspect-ratio: 100 / 130;
                }

                .consulting-stages-item.-banner {
                    border-radius: 40px;
                    overflow: hidden;
                }
            }
        </style>
        <section class="consulting-support-wrapper" style="background-image: url(/img/consulting/consalting.svg);">
            <div class="container">
                <div class="consulting-support">
                    <div class="consulting-support-content">
                        <h2 class="consulting-support-title">Комплексная консалтинговая поддержка</h2>
                        <div>
                            <p><b>Оставьте самое сложное нашим специалистам</b></p>
                            <p>Обучитьcя работе с новым программным обеспечением часто не хватает времени и не у всех
                               есть практический опыт развития вовлечённости команд. Поэтому наши консультанты, с
                               привлечением HRD лучших в своих отраслях компаний, окажут полный комплекс консалтинговой
                               поддержки.</p>
                        </div>
                    </div>
                    <figure class="consulting-support-image">
                        <img src="/img/consulting/team.png" alt="">
                    </figure>
                </div>
                <div class="consulting-stages">
                    <h3 class="consulting-stages-title">Этапы программы</h3>
                    <ol class="consulting-stages-list">
                        <li class="consulting-stages-item">
                            <div class="consulting-stage">
                                <div class="consulting-stage-content">
                                    <h4>Подготовка и детализация исходных материалов</h4>
                                    <ul>
                                        <li>Обучаем руководителей работать с платформой и результатами.</li>
                                        <li>Вместе с нашими экспертами обрабатываем отчеты и комментарии сотрудников.
                                        </li>
                                    </ul>
                                </div>
                                <figure>
                                    <img src="/img/consulting/programm-stage-1.svg" alt="">
                                </figure>
                            </div>
                        </li>
                        <li class="consulting-stages-item">
                            <div class="consulting-stage">
                                <div class="consulting-stage-content">
                                    <h4>Разработка программы действий</h4>
                                    <ul>
                                        <li>Обучаем руководителей работе в подразделениях по выработке мер</li>
                                        <li>Проводим фассилитационные сессии в продразделениях</li>
                                    </ul>
                                </div>
                                <figure>
                                    <img src="/img/consulting/programm-stage-2.svg" alt="">
                                </figure>
                            </div>
                        </li>
                        <li class="consulting-stages-item">
                            <div class="consulting-stage">
                                <div class="consulting-stage-content">
                                    <h4>Составление планов на основе 1 и 2 этапов</h4>
                                    <ul>
                                        <li>Разрабатываем график внедрения мероприятий</li>
                                        <li>Разрабатываем SMART-задачи</li>
                                        <li>Ставим KPI для менеджеров</li>
                                    </ul>
                                </div>
                                <figure>
                                    <img src="/img/consulting/programm-stage-3.svg" alt="">
                                </figure>
                            </div>
                        </li>
                        <li class="consulting-stages-item">
                            <div class="consulting-stage">
                                <div class="consulting-stage-content">
                                    <h4>Мониторинг плана работ по внедрению изменений</h4>
                                    <ul>
                                        <li>Переносим задачи в онлайн-план работ Happy Job</li>
                                    </ul>
                                </div>
                                <figure>
                                    <img src="/img/consulting/programm-stage-4.svg" alt="">
                                </figure>
                            </div>
                        </li>
                        <li class="consulting-stages-item -banner">
                            <div class="consulting-stage">
                                <div class="consulting-stage-content">
                                    <p>
                                        <span>Результат: </span>
                                        <b>Прирост KPI по индексам и метрикам</b> <b class="icon-star"></b>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="consulting-stages-footer">
                        <a href="/pdf/consulting/kompleksnaya_konsaltingovaya_podderzhka.pdf" download
                           class="consulting-card-button">
                            <b class="button-icon"></b>
                            <span>Скачать программу</span>
                        </a>
                        <a data-src="#main-modal" data-fancybox class="consulting-card-button -feedback">
                            <span>Оставить заявку</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .consulting-media {
                padding-top: 44px;
            }

            .features-header {
                padding: clamp(1.875rem, 0.78125rem + 5.46875vw, 6.25rem) 0 1.5rem;
                text-align: center;
            }

            .features-title {
                text-align: center;
                font-size: 38px;
                font-weight: 900;
                line-height: 1.2;
                letter-spacing: 0.7px;
                margin: 0;
                color: #070707;
            }

            .features-list {
                padding: 0 1rem;
                margin: 0 0 136px;
            }

            .features-item {
                list-style-type: none;
                margin-bottom: clamp(2.5rem, 2.03125rem + 2.34375vw, 4.375rem);
            }

            .features-article {
            }

            .feature {
            }

            .feature-row {
                display: flex;
                gap: clamp(1.25rem, 0.9375rem + 1.5625vw, 2.5rem);
                align-items: center;
                justify-content: space-between;
            }

            .features-item:nth-child(even) .feature-row {
                flex-direction: row-reverse;
            }

            .feature-content {
                max-width: 509px;
                margin-right: 21px;
            }

            .features-item:nth-child(even) .feature-content {
                margin-right: 0;
                margin-left: 21px;
            }

            .feature-tag {
                font-size: 14px;
                font-weight: 700;
                line-height: 1.2;
                color: #0CCDD9;
                margin-bottom: 12px;
            }

            .feature-title {
                font-size: 28px;
                letter-spacing: 0.01em;
                line-height: 1.2;
                font-weight: 700;
                margin-bottom: 36px;
            }

            .feature-text {
            }

            .feature p {
                display: flex;
            }

            .feature p svg {
                max-width: 16px;
                width: 100%;
                height: 16px;
                margin-top: 4px;
                margin-right: 8px;
            }

            .feature-image {
                position: relative;
                max-width: 587px;
                margin: 0;
            }

            .feature-image img {
                width: 100%;
            }

            .features-item:first-child .feature-image::before {
                content: "";
                width: 351px;
                height: 301px;
                transform: rotate(120deg);
                position: absolute;
                right: 88px;
                bottom: 125px;
                border-radius: 670px;
                opacity: 0.6;
                background: conic-gradient(from 180deg at 50.57% 43.61%, #8DC1FF 0deg, #AACAFF 108.75000357627869deg, #0047FF 195.00000715255737deg, #00DBFF 281.25deg, #8DC1FF 360deg);
                filter: blur(96px);
                z-index: -10;
            }

            .features-item:last-child .feature-image::before {
                content: "";
                width: 331px;
                height: 491px;
                transform: rotate(-106.5deg);
                position: absolute;
                right: 242px;
                top: 20px;
                border-radius: 670px;
                opacity: 0.6;
                background: conic-gradient(from 180deg at 50.57% 43.61%, rgba(170, 255, 219, 0.72) 78.75deg, #8DEAD4 136.8750035762787deg, #93EFE4 200.62500715255737deg);
                filter: blur(96px);
                z-index: -10;
            }

            .features-videos-inner {
                padding: 0 10px;
            }

            .features-videos {
                max-width: 1180px;
                margin: clamp(1.75rem, 0.58rem + 3.2445vw, 3.5rem) auto clamp(1.75rem, 0.4128rem + 3.708vw, 3.75rem);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .features-video {
                position: relative;
                width: 366px;
                border-radius: 15px;
            }

            .features-video:hover img {
                box-shadow: 0px 14px 28px 2px rgba(54, 54, 54, 0.18);
            }

            .features-video:not(:last-child) {
                margin-right: 14px;
            }

            .features-video img {
                border-radius: 15px;
                width: 100%;
                height: 100%;
                transition: all 0.3s linear;
                box-shadow: 0px 4px 18px 0px rgba(54, 54, 54, 0.13);
            }

            .features-video svg {
                width: 20%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .features-video svg {
                width: 20%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: ;
            }

            .features-videos__dots {
                padding: 0;
                max-width: 200px;
                margin: 0 auto 32px;
                display: flex;
                justify-content: center;
            }

            .swiper-pagination-bullet {
                width: 13px;
                height: 13px;
                transition: all 0.3s linear;
                background-color: #fff;
                border-radius: 10px;
                opacity: 1;
                border: 1px solid var(--consulting-color);
            }

            .swiper-pagination-bullet-active {
                width: 33px;
                background-color: var(--consulting-color);
            }

            @media (max-width: 1200px) {
                .features-item:first-child .feature-image::before {
                    right: 5px;
                    bottom: 5px;
                    transform: scale(0.8);
                }

                .features-item:last-child .feature-image::before {
                    right: 5px;
                    top: -75px;
                    transform: scale(0.8);
                }
            }

            @media (max-width: 1140px) {
                .features-videos-inner {
                    max-width: 870px;
                    margin: 0 auto;
                    overflow: hidden;
                }
            }

            @media (max-width: 992px) {
                .features-header {
                    padding-bottom: 0;
                }

                .features-title {
                    font-size: 28px;
                }

                .feature-row,
                .features-item:nth-child(even) .feature-row {
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                .feature-content,
                .feature-image {
                    flex-basis: 100%;
                    max-width: 100%;
                    margin-right: 0;
                }

                .feature-image img {
                    width: 100%;
                    margin-bottom: 0;
                }
            }

            @media (max-width: 1024px) {
                .features-videos.swiper-wrapper {
                    flex-flow: row wrap;
                    justify-content: center;
                    gap: 1.5rem;
                }

                .features-video:not(:last-child) {
                    margin-right: 0px;
                }
            }

            @media (max-width: 768px) {
                .feature-tag {
                    font-size: 12px;
                    margin-bottom: 4px;
                }

                .feature-title {
                    font-size: 20px;
                    margin-bottom: 20px;
                }

                .feature-text {
                    font-size: 14px;
                }

                .feature-text p:not(:last-child) {
                    margin-bottom: 8px;
                }

                .features-item:first-child .feature-image::before {
                    right: 137px;
                    bottom: 77px;
                }

                .features-item:last-child .feature-image::before {
                    right: 69px;
                    top: -39px;
                }
            }
        </style>
        <section class="consulting-media">
            <div class="reviews__title">Вебинары и видео</div>
            <div class="features-videos-inner">
                <div class="features-videos swiper-wrapper">
                    <a class="features-video swiper-slide" href="https://vimeo.com/892168084"
                       data-fancybox="video-gallery">
                        <img src="https://happy-job.ru/img/webinars/892168084.png"
                             alt="Happy Index: считаем золотую HR-метрику">
                        <svg viewbox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect x="2.31836" y="2.72656" width="73.2" height="73.2" rx="36.6" fill="#949494"
                                      style="opacity: 0.5;"></rect>
                            </g>
                            <path d="M57.3217 38.5832C58.2217 39.1028 58.2217 40.4018 57.3217 40.9214L31.3681 55.9057C30.4682 56.4253 29.3432 55.7758 29.3432 54.7366L29.3432 24.768C29.3432 23.7288 30.4682 23.0793 31.3681 23.5989L57.3217 38.5832Z"
                                  fill="white"></path>
                        </svg>
                    </a>
                    <a class="features-video swiper-slide" href="https://vimeo.com/580771577/"
                       data-fancybox="video-gallery">
                        <img src="https://happy-job.ru/img/580771577.jpg"
                             alt="Как использовать принцип HR Zero для повышения вовлеченности и лояльности сотрудников">
                        <svg viewbox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect x="2.31836" y="2.72656" width="73.2" height="73.2" rx="36.6" fill="#949494"
                                      style="opacity: 0.5;"></rect>
                            </g>
                            <path d="M57.3217 38.5832C58.2217 39.1028 58.2217 40.4018 57.3217 40.9214L31.3681 55.9057C30.4682 56.4253 29.3432 55.7758 29.3432 54.7366L29.3432 24.768C29.3432 23.7288 30.4682 23.0793 31.3681 23.5989L57.3217 38.5832Z"
                                  fill="white"></path>
                        </svg>
                    </a>
                    <a class="features-video swiper-slide" href="https://vimeo.com/564197194/"
                       data-fancybox="video-gallery">
                        <img src="https://happy-job.ru/img/564197194.jpg"
                             alt="Как повысить eNPS силами компании и руководителя?">
                        <svg viewbox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect x="2.31836" y="2.72656" width="73.2" height="73.2" rx="36.6" fill="#949494"
                                      style="opacity: 0.5;"></rect>
                            </g>
                            <path d="M57.3217 38.5832C58.2217 39.1028 58.2217 40.4018 57.3217 40.9214L31.3681 55.9057C30.4682 56.4253 29.3432 55.7758 29.3432 54.7366L29.3432 24.768C29.3432 23.7288 30.4682 23.0793 31.3681 23.5989L57.3217 38.5832Z"
                                  fill="white"></path>
                        </svg>
                    </a>
                </div>
                <div class="features-videos__dots"></div>
            </div>
        </section>
        <style>
            .reviews {
                position: relative;
                padding: 60px 0;
            }

            .reviews__title {
                font-size: clamp(1.75rem, 1.3321rem + 1.1587vw, 2.375rem);
                font-weight: 900;
                line-height: 1.2;
                color: #070707;
                text-align: center;
                margin-bottom: clamp(1.75rem, 1.0814rem + 1.854vw, 2.75rem);
            }

            .reviews__slider {
                max-width: 1172px;
                margin: 0 auto;
                overflow: hidden;
                padding: 1rem;
            }

            .reviews__items {
                list-style: none;
                padding: 0;
                align-items: stretch;
                margin-bottom: 32px;
            }

            .reviews__item {
                max-width: 566px;
                height: auto;
                padding: 16px 32px;
                border-radius: 18px;
                background: #FFF;
                box-shadow: 4px 4px 24px 0px rgba(54, 54, 54, 0.10);
            }

            .reviews__item-top {
                padding: 16px 0;
                display: flex;
                justify-content: space-between;
            }

            .reviews__item-av {
                width: 68px;
                height: 68px;
                margin-right: 8px;
                border-radius: 50px;
            }

            .reviews__name {
                max-width: 278px;
                width: 100%;
                font-size: 12px;
                font-weight: 400;
                line-height: 1.2;
                color: #82818E;
            }

            .reviews__item-log {
                max-width: 122px;
            }

            .reviews__name span {
                display: block;
                font-size: 16px;
                font-weight: 700;
                line-height: 1.2;
                color: #070707;
                margin-bottom: 4px;
            }

            .reviews__dots {
                padding: 0;
                max-width: 200px;
                margin: 0 auto 32px;
                display: flex;
                justify-content: center;
            }

            .swiper-pagination-bullet {
                width: 13px;
                height: 13px;
                transition: all 0.3s linear;
                background-color: #fff;
                border-radius: 10px;
                opacity: 1;
            }

            .swiper-pagination-bullet-active {
                width: 33px;
                background-color: var(--consulting-color);
            }

            .reviews__more {
                max-width: 288px;
                width: 100%;
                margin: 0 auto;
                font-size: 16px;
                font-weight: 500;
                line-height: 1.2;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 14px 10px;
                border-radius: 8px;
                color: #070707;
                border: 1px solid #070707;
                transition: all 0.3s linear;
            }

            .reviews__more svg {
                width: 20px;
                height: 20px;
                margin-left: 8px;
            }

            .reviews__more path {
                transition: stroke 0.3s linear;
            }

            .reviews__more:hover {
                color: var(--consulting-color);
                border-color: var(--consulting-color);
                text-decoration: none;
            }

            .reviews__more:hover path {
                stroke: var(--consulting-color);
            }

            @media (max-width: 1190px) {
                .reviews__slider {
                    max-width: 930px;
                }

                .reviews__item {
                    max-width: 450px;
                    padding: 20px 16px 66px;
                    position: relative;
                }

                .reviews__item-top {
                    align-items: center;
                    justify-content: start;
                }

                .reviews__item-log {
                    position: absolute;
                    bottom: 28px;
                    left: 16px;
                }
            }

            @media (max-width: 994px) {
                .reviews__slider {
                    max-width: 566px;
                }

                .reviews__item {
                    max-width: 600px;
                }

                .reviews__name {
                    font-size: 10px;
                }

                .reviews__content,
                .reviews__name span {
                    font-size: 14px;
                }
            }
        </style>
        <script>
            $(window).on("load", function () {
                const swiper = new Swiper(".reviews__slider", {
                    slidesPerView: 1,
                    slidesPerScroll: 1,
                    spaceBetween: 30,
                    centeredSlides: true,
                    breakpoints: {
                        993: {
                            slidesPerView: 2,
                            slidesPerScroll: 1,
                            spaceBetween: 40,
                            centeredSlides: false,
                        }
                    },
                    pagination: {
                        el: ".reviews__dots",
                        clickable: true,
                    }
                });
            });
        </script>
        <style type="text/css">
            .free-test-content .form-title span {
                color: var(--consulting-color) !important;
            }

            .button-default {
                background-color: var(--consulting-color) !important;
                border-bottom: none;
                box-shadow: none;
                padding: 17px 38px 18px;
            }

            .free-test-cite > span > a,
            .free-test-form a {
                color: var(--consulting-color) !important;
            }
        </style>
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
    <header class="section-header">
        <h2 class="section-title">Вебинары и видео</h2>
    </header>
    <div class="container">
        <section class="splide-webinars splide" aria-labelledby="carousel-heading">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-11-25</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/775030996">
                                    <img class="single-video-image" src="/img/video/previews/775030996.jpg"
                                         alt="Вовлечённость в вовлечённость">
                                </a>
                                <figcaption class="single-video-caption">
                                    Вовлечённость в вовлечённость
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-08-22</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/741869709">
                                    <img class="single-video-image" src="/img/video/previews/741869709.jpg"
                                         alt="Как достичь лучших HR-метрик развивая вовлеченность">
                                </a>
                                <figcaption class="single-video-caption">
                                    Как достичь лучших HR-метрик развивая вовлеченность
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-05-08</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/736779306">
                                    <img class="single-video-image" src="/img/video/previews/736779306.jpg"
                                         alt="Как правильно измерять и развивать лояльность и стать лучшим работодателем">
                                </a>
                                <figcaption class="single-video-caption">
                                    Как правильно измерять и развивать лояльность и стать лучшим работодателем
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-11-15</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/646129647">
                                    <img class="single-video-image" src="/img/video/previews/646129647.jpg"
                                         alt="Елена Блинова о платформе Happy Job">
                                </a>
                                <figcaption class="single-video-caption">
                                    Елена Блинова о платформе Happy Job
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-09-06</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/560760387">
                                    <img class="single-video-image" src="/img/video/previews/560760387.jpg"
                                         alt="Экономическая польза развития вовлеченности">
                                </a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза развития вовлеченности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-06-03</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/558544165">
                                    <img class="single-video-image" src="/img/video/previews/558544165.jpg"
                                         alt="Экономическая польза оценки лояльности">
                                </a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза оценки лояльности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-05-11</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/547971978">
                                    <img class="single-video-image" src="/img/video/previews/547971978.jpg"
                                         alt="Максим Потапенко о личном кабинете и конструкторе отчетов">
                                </a>
                                <figcaption class="single-video-caption">
                                    Максим Потапенко о личном кабинете и конструкторе отчетов
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2020-09-24</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/461290977">
                                    <img class="single-video-image" src="/img/video/previews/461290977.jpg"
                                         alt="Зачем измерять вовлеченность и лояльность?">
                                </a>
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
    <footer class="section-footer">
        <a href="https://happy-inc.ru/video/" target="_blank" class="button-outline"
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
                        <input type="date" id="current-date" name="current-date" value="2024-01-23" min="2024-01-23">
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
