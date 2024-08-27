<?php $this->title = 'Исследование лояльности и eNPS сотрудников — заказать услугу в Happy Job'; ?>
<div class="container mainc">
    <main>
        <style>
            .page-top__form h2,
            .page-top__form .c-form-policy,
            .page-top__form .c-form-label{
                display: none;
            }

            .page-top__form .c-form-item .parsley-errors-list{
                margin: 0 0 5px;
            }

        </style>


        <div class="page-top wide-container">
            <div class="container">
                <div class="page-top__title">
                    <h1>
                        Опрос <br>лояльности и eNPS <br>сотрудников
                    </h1>
                </div>
                <div class="page-top__text" style="margin: 30px 0 0;">
                    <p style="margin: 0;">Комплексная оценка всех граней лояльности, eNPS и mNPS – исследование, хранение данных, аналитика, рекомендации по удержанию сотруднкиов и развитию HR-бренда, а также консалтинговое сопровождение проекта.</p>
                    <a class="button-default" data-button-text="Попробовать бесплатно" data-fancybox="" data-src="#main-modal" href="javascript:;" onclick="ym(46152993,'reachGoal','mainpage_click_button')" style="margin-top: 2rem;">
                        Попробовать бесплатно
                    </a>

                </div>
                <div class="page-top__img">
                    <img src="/img/p/services/services_top2.png" alt="Опрос лояльности и eNPS сотрудников">
                </div>
            </div>
        </div>
        <style>
            .page-top{
                height: 550px;
                width: 100%;
                position: relative;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url(/img/p/index/index_top_bg.jpg);
                overflow: hidden;
            }
            .page-top .container{
                position: relative;
                height: 100%;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding-bottom: 44px;
            }
            .page-top_withbreadcrumbs .container{
                justify-content: flex-start;
                padding-top: 156px;
                padding-bottom: 0;
            }
            .page-top__title{
                font-size: 43px;
                line-height: 1.1;
                font-weight: 900;
                letter-spacing: -0.008em;
                text-align: left;
                color: rgba(0,0,0,0.78);
                margin: 0;
                width: 100%;
                max-width: 536px;
            }
            .page-top__title h1{
                font-size: inherit;
                font-weight: inherit;
                margin: 0;
            }
            .page-top__title span{
                color: var(--flush-mahogany);
            }
            .page-top__text{
                position: relative;
                font-size: 16px;
                line-height: 1.4;
                font-weight: 400;
                text-align: left;
                color: rgba(0,0,0,0.78);
                margin: 65px 0 0;
                width: 100%;
                max-width: 536px;
            }
            .page-top__text p{
                color: inherit;
            }
            .page-top_withbreadcrumbs .page-top__text{
                max-width: 625px;
                margin-top: 88px;
            }
            .page-top__breadcrumbs{
                position: absolute;
                top: 56px;
                left: 15px;
            }
            .page-top__breadcrumbs .breadcrumbs-list:after{
                display: none;
            }
            .page-top__form{
                position: absolute;
                right: 45px;
                top: 0;
                width: 248px;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .page-top__form .button-default{
                margin-top: 21px;
                padding: 16px 20px 13px;
                font-size: 17px;
            }
            .page-top__form > p{
                font-size: 13px;
                line-height: 1.4;
                margin: 35px 0 0;
                padding: 0 10px;
            }
            .page-top__img{
                position: absolute;
                z-index: 0;
                bottom: 0;
                right: -110px;
                width: 680px;
            }
            .page-top__img img{
                display: block;
                position: absolute;
                z-index: 0;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            .footer-form:not(#footerForm) input:not(:last-of-type),
            .footer-form:not(#footerForm) select {
                margin-bottom: 10px;
            }

            .footer-form:not(#footerForm) input,
            .footer-form:not(#footerForm) select {
                width: 100%;
            }


            @media(min-width: 1200px){
                .page-top__text {
                    height: 120px;
                }
            }


            @media (max-width: 1200px) {
                .page-top__img{
                    width: 555px;
                }
                .footer-form:not(#footerForm) input,
                .footer-form:not(#footerForm) select {
                    max-width: 231px;
                    width: 100%;
                }
            }
            @media (max-width: 992px) {
                .page-top{
                    height: auto;
                }
                .page-top .container{
                    height: 100%;
                    padding: 50px 10px 470px;
                }
                .page-top__title{
                    font-size: 34px;
                }
                .page-top__text{
                    margin-top: 27px;
                    z-index: 5;
                }
                .page-top__title,
                .page-top__text{
                    text-align: center;
                    max-width: unset;
                }
                .page-top__title br,
                .page-top__text br{
                    display: none;
                }
                .page-top__img{
                    position: absolute;
                    z-index: 0;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 446px;
                    transform: translate(0,0);
                    transition: transform 0.5s;
                }
                .page-top__img img{
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%,0);
                    width: auto;
                    max-height: 100%;
                    max-width: 100%;
                }
                .page-top__breadcrumbs{
                    position: relative;
                    top: 0;
                    left: 0;
                }
                .page-top_withbreadcrumbs .page-top__title{
                    text-align: left;
                }
                .page-top_withbreadcrumbs .page-top__text {
                    max-width: unset;
                    margin-top: 40px;
                    text-align: left;
                }
                .page-top__form {
                    position: relative;
                    right: 0;
                    top: 0;
                    width: 248px;
                    margin: 40px auto 0;
                }
                .page-top__form .form .button-default{
                    max-width: unset;
                }
                .page-top_withform.page-top .container{
                    padding-bottom: 50px;
                }
            }
            @media (max-width: 576px) {
                .page-top .container{
                    padding-bottom: 70vw;
                }
            }
        </style>
        <div class="questionCount wide-container">
            <div class="questionCount__wrapper">
                <h2 class="section-title questionCount__title">Настройка <b>опций</b> для вашей компании</h2>
                <div class="questionCount__block-top">
                    <div class="questionCount__nav-mob">
                        <div>формат опроса</div>
                        <svg><use xlink:href="#sttriangle"></use></svg>
                    </div>
                    <div class="questionCount__nav">
                        <div class="active">формат опроса</div>
                        <div>способ доставки</div>
                        <div>количество вопросов</div>
                        <div>анкеты для отрасли </div>
                    </div>
                </div>
                <div class="questionCount__list">
                    <div class="questionCount__item active">
                        <div class="services-formats">
                            <a href="/survey-formats/#title0" class="services-formats__item">
                                <div class="services-formats__icon">
                                    <img src="/img/happy-job/images/format_icon_1.png" class="lazy" loading="lazy" alt="Ежегодный опрос" title="Ежегодный опрос">
                                </div>
                                <div class="services-formats__item-in">
                                    <div class="services-formats__title">
                                        Ежегодный опрос
                                    </div>
                                    <div class="services-formats__item-content">
                                        <div class="services-formats__text">
                                            Комплексное исследование<br>
                                            всех факторов вовлечённости,<br>
                                            удовлетворённости и лояльности<br>
                                            персонала, включая eNPS и mNPS.
                                        </div>
                                        <div class="services-formats__list">
                                            <div class="services-formats__list-item services-formats__list-item_num">
                                                <span>1-2</span> опроса в год
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_questions">
                                                <span>59</span> вопросов
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_time">
                                                <span>10</span> мин
                                            </div>
                                        </div>
                                        <div class="services-formats__button">
                                            <div>Подробнее</div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="/survey-formats/#title1" class="services-formats__item">
                                <div class="services-formats__icon">
                                    <img src="/img/happy-job/images/format_icon_2.png" class="lazy" loading="lazy" title="Авто пульс опрос" alt="Пульс опрос">
                                </div>
                                <div class="services-formats__item-in">
                                    <div class="services-formats__title">
                                        Пульс опрос
                                    </div>
                                    <div class="services-formats__item-content">
                                        <div class="services-formats__text">
                                            Короткое исследование.<br>
                                            Метрики выбираются автоматически<br>
                                            после ежегодного исследования<br>
                                            с возможностью добавления.
                                        </div>
                                        <div class="services-formats__list">
                                            <div class="services-formats__list-item services-formats__list-item_num">
                                                <span>2-4</span> опроса в год
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_questions">
                                                от <span>5</span> вопросов
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_time">
                                                от <span>1</span> мин
                                            </div>
                                        </div>
                                        <div class="services-formats__button">
                                            <div>Подробнее</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="/survey-formats/#title2" class="services-formats__item">
                                <div class="services-formats__icon">
                                    <img src="/img/happy-job/images/format_icon_3.png" class="lazy" loading="lazy" alt="Глубинный опрос" title="Глубинный пульс">
                                </div>
                                <div class="services-formats__item-in">
                                    <div class="services-formats__title">
                                        Глубинный пульс
                                    </div>
                                    <div class="services-formats__item-content">
                                        <div class="services-formats__text">
                                            Детальное исследование<br>
                                            проблемной метрики или области<br>
                                            для принятия решений.<br>
                                            Альтернатива фокус-группе.
                                        </div>
                                        <div class="services-formats__list">
                                            <div class="services-formats__list-item services-formats__list-item_num">
                                                по запросу
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_questions">
                                                от <span>5</span> вопросов
                                            </div>
                                            <div class="services-formats__list-item services-formats__list-item_time">
                                                от <span>1</span> мин
                                            </div>
                                        </div>
                                        <div class="services-formats__button">
                                            <div>Подробнее</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="questionCount__item">
                        <div class="deliveryBlock__row">
                            <div class="deliveryBlock">
                                <div class="deliveryBlock__content">
                                    <p>
                                        Платформа поддерживает все возможные средства <br>
                                        доставки ссылок для участия.
                                    </p>
                                </div>
                                <div class="deliveryBlock__icons">
                                    <div class="deliveryBlock__icon deliveryBlock__icon_a">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> email </span> </span> Ссылку через email формирует и отправляет Happy Job. Ссылки могут быть персональные каждому сотруднику со 100% защитой анонимности, единые на
                    подразделение или общая ссылка на всю компанию.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">email</div>
                                    </div>
                                    <div class="deliveryBlock__icon deliveryBlock__icon_sms">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> SMS </span> </span> Открыв sms сообщение на телефоне, сотрудник получает доступ к персональной ссылке, опросу его подразделения или компании в целом. Если ссылка
                    на компанию, сотрудник выбирает свое подразделение.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">SMS</div>
                                    </div>
                                    <div class="deliveryBlock__icon deliveryBlock__icon_code">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> QR-код </span> </span> Просканировав QR-код через смартфон, сотрудник получает доступ к персональной ссылке, опросу его подразделения или компании в целом. Если
                    ссылка на компанию, сотрудник выбирает свое подразделение.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">QR-код</div>
                                    </div>
                                    <div class="deliveryBlock__icon deliveryBlock__icon_dialog">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> корпоративные мессенджеры </span> </span> Открыв сообщение на любом устройстве, сотрудник получает доступ к персональной ссылке, опросу его подразделения или
                    компании в целом. Если ссылка на компанию, сотрудник выбирает свое подразделение.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">
                                            корпоративные <br>
                                            мессенджеры
                                        </div>
                                    </div>
                                    <div class="deliveryBlock__icon deliveryBlock__icon_go">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> форма на сайте клиента </span> </span> Нажимая кнопку «старт» на корпоративном сайте, сотрудник получает доступ к опросу компании и может выбрать подразделение, в
                    котором работает.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">
                                            форма на <br>
                                            сайте клиента
                                        </div>
                                    </div>
                                    <div class="deliveryBlock__icon deliveryBlock__icon_chain">
                                        <div class="deliveryBlock__iconimg">
                <span class="smallpopup">
                  <span class="img"> </span>
                  <span class="smallpopup__window">
                    <span class="smallpopup__mob"> <span class="img"> </span> <span> терминал (планшет в режиме киоска) </span> </span> Нажав кнопку «старт» на терминале, сотрудник получает доступ к опросу его подразделения или компании в целом.
                    Если ссылка на компанию, сотрудник выбирает свое подразделение. Опрос доступен с подключением к интернет либо оффлайн.
                  </span>
                </span>
                                        </div>
                                        <div class="deliveryBlock__icontext">
                                            Терминал <br>
                                            <small> (планшет в режиме киоска) </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="deliveryBlock__content">
                                    <p>
                                        Ссылки могут быть индивидуальными, по подразделению или общими, с самостоятельным выбором <br>
                                        подразделения. Подробнее о форматах ссылок и безопасности персональных данных <br>
                                        читайте <a href="/pdf/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C.pdf" target="_blank">в специальной презентации</a>.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="questionCount__item">
                        <div class="questionCount__text">
                            Контур исследования <b>лояльности</b> персонала содержит 9 вопросов, согласно патентованной методике Happy Job. Наши вопросы используются в 800+ компаниях и позволяют построить самые актуальные бенчмарки по всем отраслям.
                        </div>
                        <div class="questionCount__content">
                            <div class="questionCount__block questionCount__block_1 questionCount__block_hide">
                                <div class="questionCount__num"><span>50</span> <span class="questionCount__plus">+</span></div>
                                <p>
                                    вопросов на <a href="/types-of-surveys/engagement-survey/">вовлечённость</a> <br>
                                    и <a href="/types-of-surveys/satisfaction-survey/">удовлетворённость</a>
                                </p>
                            </div>
                            <div class="questionCount__block questionCount__block_2">
                                <div class="questionCount__num"><span>5</span> <span class="questionCount__plus">+</span></div>
                                <p>
                                    вопросов на <a href="/types-of-surveys/loyalty-survey/">лояльность</a><br>
                                    и <a href="/types-of-surveys/enps/">eNPS</a>
                                </p>
                            </div>
                            <div class="questionCount__block questionCount__block_3">
                                <div class="questionCount__num"><span>4</span> <span class="questionCount__plus">=</span></div>
                                <p>специальных вопроса, вкл. менеджерский <a href="/types-of-surveys/mnps/">mNPS</a></p>
                            </div>
                            <div class="questionCount__block questionCount__block_4">
                                <div class="questionCount__num"><span>9</span></div>
                                <p>
                                    в большом<br>
                                    исследовании
                                </p>
                            </div>
                        </div>
                        <div class="questionCount__text questionCount__text_bottom">
                            <div class="questionCount__lang">
                                Опросы переведены на 14 языков
                                <div class="questionCount__langlist">
                                    <span>RU</span>
                                    <span>EN</span>
                                    <span>FR</span>
                                    <span>DE</span>
                                    <span>NL</span>
                                    <span>AR</span>
                                    <span>CE</span>
                                    <span>ES</span>
                                    <span>DA</span>
                                    <span>FI</span>
                                    <span>TI</span>
                                    <span>UZ</span>
                                    <span>...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="questionCount__item">
                        <style>
                            .research-questions {
                                display: block;
                                position: relative;
                            }
                            .state-1 {
                                background-image: url(/img/happy-job/images/engagement/research-questions-2_.png);
                            }
                            .state-2 {
                                background-image: url(/img/happy-job/images/engagement/research-questions-1_.png);
                            }
                            .state-3 {
                                background-image: url(/img/happy-job/images/engagement/research-questions-3_.png);
                            }
                            .research-questions-wrapper {
                                position: relative;
                                padding: 2rem 0 78px;
                            }
                            .research-questions-title {
                                font-size: 32px;
                                text-align: center;
                                letter-spacing: -0.2px;
                                position: relative;
                                font-weight: 300;
                                margin-bottom: 42px;
                            }
                            .research-questions-main {
                                display: flex;
                                border-radius: 10px;
                                box-shadow: 0 0 17px rgb(0 0 0 / 25%);
                                background-position: right center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                max-width: 984px;
                                margin: 0 auto;
                            }
                            .research-questions-tabs {
                                flex-basis: 50%;
                                overflow: hidden;
                                border-radius: 10px 0 0 10px;
                                background-color: #fafafa;
                            }
                            .research-questions-list,
                            .research-questions-item {
                                margin: 0;
                            }
                            .research-questions-item:not(.is-active) {
                                cursor: pointer;
                            }
                            .research-questions-item + .research-questions-item {
                                border-top: 1px solid lightgrey;
                                box-shadow: 0 -2px 7px rgba(0, 0, 0, 0.08);
                            }
                            .research-questions-content {
                                opacity: 0;
                                height: 0;
                                overflow: hidden;
                            }
                            .research-questions-article {
                                padding: 30px 30px 34px 52px;
                                background-color: #f4f5f7;
                            }
                            .research-questions-article:hover h4 {
                                color: #000;
                            }
                            .research-questions-article .button {
                                color: #fff;
                                padding: 12px 12px;
                                background: #f4515a;
                                display: inline-block;
                                flex-direction: column;
                                justify-content: center;
                                font-size: 15px;
                                height: 40px;
                                line-height: 1;
                                text-transform: none;
                                vertical-align: top;
                                margin-top: 0;
                                border: none;
                                outline: none;
                                font-weight: bold;
                                border-radius: 8px;
                                cursor: pointer;
                                max-width: 230px;
                                text-decoration: none;
                                box-shadow: 0 5px 0 #c63839;
                            }
                            .research-questions-article .button:before,
                            .research-questions-article .button:after {
                                display: none;
                            }
                            .research-questions-article h4 {
                                margin: 0;
                                font-size: 21px;
                                font-weight: 900;
                                letter-spacing: -0.4px;
                                color: #8e8e8f;
                                -webkit-touch-callout: none;
                                -webkit-user-select: none;
                                -khtml-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                                transition: all 0.3s;
                            }
                            .research-questions-item.is-active .research-questions-article h4 {
                                transition: color 0.3s;
                                color: black;
                            }
                            .research-questions-article p {
                                font-size: 14px !important;
                                letter-spacing: 0.2px;
                                margin: 22px 0 2rem;
                                -webkit-touch-callout: none;
                                -webkit-user-select: none;
                                -khtml-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                            }
                            .research-questions-item.is-active .research-questions-content {
                                transition: all 0.3s;
                                opacity: 1;
                                height: initial;
                                overflow: visible;
                            }
                            .research-questions-block {
                                display: none;
                            }
                            .research-questions-block.is-active {
                                display: block;
                            }
                            .research-questions-image {
                                margin: 0;
                                position: absolute;
                                bottom: 0rem;
                                right: -10rem;
                                width: 445px;
                                height: 580px;
                                overflow: hidden;
                                opacity: 0;
                                animation: fadeInRight 0.25s ease-in-out;
                            }
                            @media (max-width: 1200px) {
                                .research-questions-image {
                                    top: inherit;
                                    bottom: 0;
                                }
                            }
                            @media (max-width: 992px) {
                                .research-questions-block.is-active .research-questions-image {
                                    right: 0;
                                }
                            }
                            @media (max-width: 768px) {
                                .state-2 {
                                    background-position: 14% 150px;
                                }
                                .research-questions-main {
                                    flex-direction: column;
                                }
                                .research-questions-media {
                                    height: 350px;
                                }
                                .research-questions-image {
                                    width: 100vw;
                                    height: 570px;
                                    background-image: url("/img/happy-job/images/engagement/research-questions-1-1.png");
                                    background-repeat: no-repeat;
                                    background-position: center top;
                                    background-size: contain;
                                    right: initial;
                                    position: static;
                                    margin-left: 1rem;
                                }
                                .research-questions-image img {
                                    display: none;
                                }
                                .research-questions-block.is-active .research-questions-image {
                                    right: initial;
                                }
                                .research-questions-main {
                                    box-shadow: none;
                                }
                                .research-questions {
                                    overflow: hidden;
                                    margin: 0 -15px;
                                    padding: 30px 15px 0;
                                }
                                .research-questions-tabs {
                                    border-radius: 10px 10px 0 0;
                                }
                                .research-questions-article {
                                    padding: 1rem 1rem 2rem 1rem;
                                }
                                .research-questions-article p {
                                    margin: 1rem 0;
                                }
                                .research-questions-title {
                                    margin-bottom: 0;
                                }
                            }
                            .research-questions-block.is-active .research-questions-image {
                                right: 4.5rem;
                                opacity: 1;
                            }
                            @keyframes fadeInRight {
                                from {
                                    opacity: 0;
                                    transform: translateX(300px);
                                }
                                to {
                                    opacity: 1;
                                }
                            }
                            @keyframes fadeOutBottom {
                                from {
                                    opacity: 1;
                                }
                                to {
                                    opacity: 0;
                                    transform: translateY(-300px);
                                }
                            }

                        </style>

                        <style>
                            .order-demo {
                                padding-bottom:  clamp(3rem, 1.8571428571428572rem + 5.714285714285714vw, 7rem);
                            }

                            .order-demo-header {
                                text-align: center;
                                position: relative;
                                padding-bottom: clamp(2rem, 1.4285714285714286rem + 2.857142857142857vw, 4rem);
                            }

                            .order-demo-title {
                                font-size: 1.375rem;
                                font-size: clamp(
                                        1.375rem,
                                        1.1964285714285714rem + 0.8928571428571428vw,
                                        2rem
                                );
                                letter-spacing: -0.2px;
                                font-weight: 300;
                                margin: 0;
                                padding: 0;
                            }

                            .order-demo-wrapper {
                                position: relative;
                            }


                            .order-demo-main {
                                width: min(100% - 2rem, 61.5rem) !important;
                                margin-inline: auto;
                                box-shadow: 0 0 17px rgb(0 0 0 / 25%);
                                border-radius: 10px;
                                background-color: #f4f5f7;
                            }
                            main[role="main"] .order-demo-main{
                                width: 100%;
                            }

                            .order-demo-row {
                                display: grid;
                                grid-template-columns: 50% 50%;
                            }

                            .order-demo-content {
                                padding: clamp(
                                        1.25rem,
                                        1.0714285714285714rem + 0.8928571428571428vw,
                                        1.875rem
                                );
                            }
                            /* @media(min-width: 768px){
    .order-demo-content {
      height: 470px;
    }
  } */


                            .order-demo .order-demo-wrapper .order-demo-list {
                                display: flex;
                                flex-flow: row wrap;
                                gap: 1rem;
                                margin: 0;
                                padding: 0;
                            }

                            .order-demo .order-demo-wrapper .order-demo-li {
                                list-style-type: none;
                                margin: 0;
                            }

                            .order-demo .order-demo-wrapper .order-demo-link {
                                display: block;
                                background-color: #e6e6e6;
                                border: 1px solid #bdbdbd;
                                color: #4d4d4d;
                                padding: 9px 15px 7px;
                                border-radius: 20px;
                                font-size: 13px;
                                cursor: pointer;
                                white-space: nowrap;
                                transition: background-color 0.3s, border 0.3s, color 0.3s;
                                white-space: nowrap;
                            }

                            .order-demo .order-demo-wrapper .order-demo-link:hover,
                            .order-demo .order-demo-wrapper .order-demo-link.active {
                                background-color: #394754;
                                border: 1px solid #394754;
                                color: #fff !important;
                                text-decoration: none;
                            }

                            .divider {
                                display: block;
                                margin: 2rem 0;
                                height: 1px;
                                width: 33%;
                                background-color: lightgrey;
                            }

                            .order-demo .order-demo-wrapper .order-demo-descriptions {
                                margin: 0;
                                padding: 0 0 1rem;
                            }

                            .order-demo .order-demo-wrapper .order-demo-item {
                                display: none;
                                margin: 0;
                            }

                            .order-demo .order-demo-wrapper .order-demo-item.active {
                                display: block;
                                height: 5.2rem;
                                overflow: hidden;
                            }

                            .order-demo .order-demo-wrapper .order-demo-media {
                                margin: 0;
                                padding: 0;
                                position: relative;
                                min-height: 460px;
                            }

                            .order-demo .order-demo-wrapper .order-media-item {
                                position: absolute;
                                list-style-type: none;
                                left: 0;
                                top: 0;
                                bottom: 0;
                                right: 0;
                                margin: 0;
                                opacity: 0;
                            }

                            .order-demo .order-demo-wrapper .order-media-item.active {
                                transition: opacity 0.15s;
                                opacity: 1;
                            }

                            .order-demo .order-demo-wrapper .order-media-item img {
                                width: 100%;
                                height: 100%;
                                aspect-ratio: 1 / 1;
                                object-fit: cover;
                                border-radius: 0 10px 10px 0;
                            }

                            .order-demo .order-demo-wrapper .order-media-item {
                                list-style-type: none;
                            }

                            .order-demo .order-demo-wrapper .order-demo-pictures {
                                position: absolute;
                                width: 460px;
                                top: -1.5rem;
                                bottom: 0;
                                left: 50%;
                                transform: translateX(-50%);
                                margin: 0;
                                margin-left: calc(460px*0.5);
                                padding: 0;
                            }

                            .order-demo .order-demo-wrapper .order-pictures-item{
                                justify-content: flex-end;
                                list-style-type: none;
                                position: absolute;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                text-align: right;
                                margin: 0;
                                opacity: 0;
                                transform: translateX(100%);
                                transition: transform 0.3s, opacity 0.3s;
                            }

                            .order-demo .order-demo-wrapper .order-pictures-item.active{
                                display: flex;
                                opacity: 1;
                                transform: translateX(1.5rem);
                            }

                            .order-demo .order-demo-wrapper .order-pictures-item img{
                                height: 100%;
                                max-width: inherit;
                            }

                            @media(max-width: 1024px){
                                .order-demo{
                                    margin: 0 -1rem;
                                }
                                .order-demo-row {
                                    grid-template-columns: 1fr;
                                    grid-template-rows: auto 300px;
                                }

                                .order-demo .order-demo-wrapper .order-demo-media{
                                    min-height: 300px;
                                }

                                .order-demo-media{
                                    min-height: 300px;
                                    height: 300px;
                                }
                                .order-media-item img{
                                    aspect-ratio: 4 / 3;
                                    object-fit: cover;
                                    border-radius: 0 0 10px 10px;
                                }

                                .order-demo .order-demo-wrapper .order-demo-pictures {
                                    width: 100%;
                                    top: inherit;
                                    bottom: 0;
                                    left: 50%;
                                    transform: translateX(-53%);
                                    margin: 0;
                                    margin-left: 0;
                                    padding: 0;
                                    top: unset;
                                    height: 280px;
                                }

                            }

                            @media(max-width: 576px){
                                .order-demo{
                                    margin: 0 -2rem;
                                    padding-bottom: 0;
                                }
                            }

                            .order-demo-singletext{
                                color: #777;
                            }

                            @media (max-width: 576px) {
                                .order-demo {
                                    margin: 0 -2rem;
                                }
                            }
                        </style>

                        <section class="order-demo">
                            <br><br><br>
                            <div class="order-demo-wrapper">
                                <div class="order-demo-main">
                                    <div class="order-demo-row">
                                        <div class="order-demo-content">
                                            <ul class="order-demo-list">
                                                <li class="order-demo-li">
                                                    <a data-href="1" class="order-demo-link active">Все офисные сотрудники</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="2" class="order-demo-link">Производство</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="3" class="order-demo-link">Ритейл</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="4" class="order-demo-link">Логистика</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="5" class="order-demo-link">Фарма и медицина</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="6" class="order-demo-link">Девелопмент</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="7" class="order-demo-link">Авиа и ж/д перевозки</a>
                                                </li>
                                                <li class="order-demo-li">
                                                    <a data-href="8" class="order-demo-link">Нефть, газ, энергетика</a>
                                                </li>
                                            </ul>
                                            <!--***-->
                                            <span class="divider"></span>
                                            <ul class="order-demo-descriptions">
                                                <li class="order-demo-item active" data-info="1">
                                                    Универсальное исследование из 59 вопросов по всем аспектам
                                                    офисной рабочей среды
                                                </li>
                                                <li class="order-demo-item" data-info="2">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики внеофисной работы и дополненная модулем по
                                                                                          безопасности и охраны труда</li>
                                                <li class="order-demo-item" data-info="3">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики внеофисной работы</li>
                                                <li class="order-demo-item" data-info="4">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики отрасли.</li>
                                                <li class="order-demo-item" data-info="5">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики отрасли.</li>
                                                <li class="order-demo-item" data-info="6">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики отрасли.</li>
                                                <li class="order-demo-item" data-info="7">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики отрасли.</li>
                                                <li class="order-demo-item" data-info="8">Сокращённая анкета из 30 вопросов, созданная с учётом
                                                                                          специфики отрасли.</li>
                                            </ul>
                                            <a class="button button--bold button-modal" data-fancybox data-src="#main-modal" href="javascript:;" onclick="ym(46152993,'reachGoal','click_get_demo')">Запросить буклет и демо</a>
                                        </div>
                                        <ul class="order-demo-media">
                                            <li class="order-media-item active" data-info="1">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-1.png" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="2">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-2.png" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="3">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-3.jpg" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="4">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-4.png" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="5">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-5.png" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="6">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-6.jpg" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="7">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-7.png" alt="">
                                            </li>
                                            <li class="order-media-item" data-info="8">
                                                <img src="/img/happy-job/images/engagement/order-demo-bg-8.jpg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="order-demo-pictures">
                                    <li class="order-pictures-item active" data-info="1">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-1-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="2">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-2-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="3">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-3-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="4">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-3-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="5">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-5-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="6">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-2-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="7">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-7-n.png" alt="">
                                    </li>
                                    <li class="order-pictures-item" data-info="8">
                                        <img src="/img/happy-job/images/engagement/order-demo-pipl-2-n.png" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <script>
                            $(function () {
                                $(".research-questions-item").on("click", function () {
                                    let i = $(this).attr("data-num");
                                    $(".research-questions-item").removeClass("is-active");
                                    $(".research-questions-block").removeClass("is-active");
                                    $(".research-questions-item").eq(i).addClass("is-active");
                                    let currIndex = parseInt(i) + 1;
                                    $(".research-questions-main").css(
                                        "background-image",
                                        "url(/img/happy-job/images/engagement/research-questions-" +
                                        currIndex +
                                        "_.png)"
                                    );
                                    $(".research-questions-block").eq(i).addClass("is-active");
                                });

                                $(".order-demo-link").on("click", function () {
                                    let i = $(this).attr("data-href");
                                    $(
                                        ".order-demo-link, .order-demo-item, .order-media-item, .order-pictures-item"
                                    ).removeClass("active");
                                    $(this).addClass("active");
                                    $(
                                        ".order-demo-item:nth-child(" +
                                        i +
                                        "), .order-media-item:nth-child(" +
                                        i +
                                        "), .order-pictures-item:nth-child(" +
                                        i +
                                        ")"
                                    ).addClass("active");

                                    if ($(window).width() < 960) {
                                        let thisTop = $(this).offset().top - 200;
                                        console.log(thisTop);
                                        $(window).scrollTop(thisTop);
                                    }

                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <style media="screen">
            .questionCount__wrapper {
                width: 100%;
                padding-top: 88px;
                padding-bottom: 85px;
                max-width: 1071px;
                margin: auto;
            }
            .questionCount__title{
                text-align: center;
            }

            .questionCount__nav{
                display: flex;
                justify-content: center;
                margin-top: 62px;
            }
            .questionCount__nav div{
                padding: 12px 22px;
                background: rgba(0,0,0,0.1);
                color: #1c1c1c;
                margin: 0 12px;
                border-radius: 50px;
                position: relative;
                cursor: pointer;
                user-select: none;
            }
            .questionCount__nav div.active{
                color: #fff;
                background: #61c03a;
                cursor: default;
            }
            .questionCount__nav div.active::after{
                content: '';
                position: absolute;
                top: 100%;
                left: 50%;
                transform: translate(-50%,0);
                width: 13px;
                height: 9px;
                margin-top: -1px;
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13.41 9.82'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%2361c03a;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M.83,0H12.59a.83.83,0,0,1,.67,1.31L7.38,9.47A.82.82,0,0,1,6,9.47L.16,1.31A.82.82,0,0,1,.83,0Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }

            .questionCount__list{
                font-size: 16px;
                line-height: 1.4;
                color: rgba(0,0,0,0.78);
                margin-top: 74px;
            }
            .questionCount__item{
                display: none;
            }
            .questionCount__item.active{
                display: block;
            }
            .questionCount__text{
                text-align: center;
                margin: 0 auto;
                max-width: 800px;
            }
            .questionCount__text_bottom{
                max-width: 750px;
                margin-top: 15px;
            }
            .questionCount__lang{
                margin-top: 42px;
            }
            .questionCount__langlist{
                margin-top: 25px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .questionCount__langlist span{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 45px;
                height: 30px;
                font-weight: 700;
                border: 2px solid rgba(0,0,0,0.46);
                border-radius: 7px;
                margin: 0 4px;
                color: rgba(0,0,0,0.46);
            }
            .questionCount__langlist span:last-child{
                border: none;
                margin: 0 4px 0 11px;
                padding-bottom: 8px;
                width: auto;
            }
            .questionCount__content {
                display: -ms-flexbox;
                display: flex;
                margin: 0 !important;
                padding: 52px 0 0;
            }
            .questionCount__block{
                text-align: center;
            }
            .questionCount__block_1{
                width: 28.5%;
            }
            .questionCount__block_2{
                width: 28.5%;
            }
            .questionCount__block_3{
                width: 20.6%;
            }
            .questionCount__block_4{
                width: 22.4%;
            }
            .questionCount__block p{
                color: rgba(0,0,0,0.46);
                font-size: 17px !important;
                line-height: 21px !important;
                margin: 25px 0 15px;
            }
            .questionCount__block_hide{
                opacity: 0.3;
            }
            .questionCount__block_hide .questionCount__num,
            .questionCount__block_hide p,
            .questionCount__block_hide p a{
                color: #606060 !important;
            }

            @media (max-width: 1024px){
                .questionCount__wrapper{
                    padding-right: 15px;
                    padding-left: 15px;
                }
                .questionCount__text_bottom{
                    max-width: 100%;
                    margin-top: 35px;
                }
                .questionCount__langlist{
                    flex-wrap: wrap;
                }
                .questionCount__langlist span{
                    margin-bottom: 15px;
                }
                .questionCount__langlist span:last-child{
                    width: 100%;
                    margin: 0;
                }
                .questionCount__wrapper{
                    padding-bottom: 72px;
                }
                .questionCount__content{
                    padding-bottom: 0;
                    display: block;
                }
                .questionCount__block{
                    width: 100% !important;
                    padding-bottom: 90px;
                    position: relative;
                }
                .questionCount__block_3 .questionCount__num{
                    position: unset;
                }
                .questionCount__block_3 .questionCount__num .questionCount__plus{
                    margin: -61px 0 0 -15px;
                }
                .questionCount__block:last-child{
                    padding-bottom: 20px;
                }
                .questionCount__block br{
                    display: block !important;
                }
                .questionCount__plus{
                    right: auto !important;
                    left: 50% !important;
                    top: 52% !important;
                    margin: 130px 0 0 -15px;
                }
                .questionCount__block_3 .questionCount__plus{
                    top: 100% !important;
                }
                .questionCount__wrapper{
                    margin-bottom: 20px;
                }
                .questionCount__title{
                    font-size: 26px;
                    margin-bottom: 15px;
                }
                .questionCount__content{
                }
                .questionCount__content img{
                    width: 100%;
                    height: auto;
                    margin: 0px;
                    position: static;
                }
                .questionCount__wrapper .for__mobile{
                    display: block
                }

                .questionCount__content img.for__mobile{
                    display: block;
                }
            }
            @media (max-width: 420px) {
                .questionCount__block p{
                    text-align: center !important;
                }
            }
            .questionCount__num{
                position: relative;
                font-size: clamp(1.875rem, 0.9821428571428571rem + 4.464285714285714vw, 5rem);
                line-height: 1;
                font-weight: 300;
                color: #61c03a;
            }

            .questionCount__num b{
                font-weight: 400;
            }
            .questionCount__plus{
                position: absolute;
                color: #606060;
                opacity: 0.52;
                font-size: 0.6em;
                line-height: 1;
                right: -18px;
                top: 27px;
            }
            .questionCount__block_2 .questionCount__plus{
                right: -1px;
            }
            .questionCount__block_3 .questionCount__plus{
                right: -22px;
            }

            @media (max-width: 1024px){
                .questionCount__plus {
                    top: 10px;
                }
            }
            @media (max-width: 767px){
                .questionCount__plus {
                    top: 10px;
                }
            }

            .questionCount__nav-mob{
                display: none;
            }
            @media (max-width: 992px){
                .questionCount__wrapper{
                    padding: 75px 20px;
                }
                .questionCount__title{
                    margin-bottom: 35px;
                }
                .services-stages{
                    padding: 75px 0 50px;
                }
                .services-stages__title br{
                    display: none;
                }
                .services-stages__block{
                    margin-top: 50px;
                    display: block;
                }
                .questionCount__block-top{
                    position: relative;
                    z-index: 10;
                }
                .questionCount__nav-mob{
                    display: flex;
                    align-items: center;
                    color: #fff;
                    background: #61c03a;
                    width: 100%;
                    border-radius: 8px;
                    height: 63px;
                    font-size: 17px;
                    line-height: 1.2;
                    padding: 0 40px 0 32px;
                    position: relative;
                }
                .questionCount__nav-mob svg{
                    position: absolute;
                    right: 15px;
                    top: 50%;
                    transform: translate(0,-50%) rotate(90deg);
                    width: 9px;
                    height: 14px;
                    filter: brightness(0) invert(1);
                }
                .questionCount__nav-mob.open svg{
                    transform: translate(0,-50%) rotate(-90deg);
                }
                .questionCount__nav{
                    position: absolute;
                    top: 68px;
                    left: 0;
                    width: 100%;
                    border-radius: 8px;
                    background: #f3f4f4;
                    border: 1px solid #61c03a;
                    font-size: 17px;
                    line-height: 1.2;
                    overflow: hidden;
                    display: none;
                    margin-top: 0;
                }
                .questionCount__nav.open{
                    display: block;
                }
                .questionCount__nav > div{
                    border-radius: 0;
                    margin: 0 0 5px;
                    padding: 11px 16px 11px 30px;
                    background: none;
                }
                .questionCount__nav div.active::after{
                    display: none;
                }
                .questionCount__list{
                    margin-top: 35px;
                }
            }

            /*------------*/
            .deliveryBlock{
                padding: 0;
            }
            .deliveryBlock__content:last-child{
                margin-bottom: 0;
            }
            .deliveryBlock__content p{
                margin: 0;
            }
            .deliveryBlock__icon{
                text-align: center;
            }
            .deliveryBlock__iconimg .img {
                background-position: top center;
                background-repeat: no-repeat;
                background-size: contain;
                display: block;
            }
            .deliveryBlock__icon_chain .img {
                background-image: url(/img/happy-job/images/engagement/del_desktop.svg);
                width: 56px;
                height: 45px;
            }
            .deliveryBlock__icon_go .img {
                background-image: url(/img/happy-job/images/engagement/del_go.svg);
                width: 98px;
                height: 72px;
            }
            .deliveryBlock__icon_dialog .img {
                background-image: url(/img/happy-job/images/engagement/del_dialog.svg);
                width: 82px;
                height: 69px;
            }
            .deliveryBlock__icon_code .img {
                background-image: url(/img/happy-job/images/engagement/del_code.svg);
                width: 75px;
                height: 75px;
            }
            .deliveryBlock__icon_sms .img {
                background-image: url(/img/happy-job/images/engagement/del_sms.svg);
                width: 93px;
                height: 83px;
            }
            .deliveryBlock__icon_a .img {
                background-image: url(/img/happy-job/images/engagement/del_a.svg);
                width: 82px;
                height: 82px;
            }
            .deliveryBlock__icon .smallpopup__mob .img {
                height: 30px;
                display: inline-block;
                margin: 0 15px 0 0;
            }
            .deliveryBlock__icon_a .smallpopup__mob .img {
                width: 30px;
            }
            .deliveryBlock__icon_sms .smallpopup__mob .img {
                width: 34px;
            }
            .deliveryBlock__icon_code .smallpopup__mob .img {
                width: 30px;
            }
            .deliveryBlock__icon_dialog .smallpopup__mob .img {
                width: 36px;
            }
            .deliveryBlock__icon_go .smallpopup__mob .img {
                width: 41px;
            }
            .deliveryBlock__icon_chain .smallpopup__mob .img {
                width: 45px;
            }

            /*------------*/
            .order-demo{
                padding-bottom: 0;
            }
            @media (max-width: 992px) {
                .order-demo > br{
                    display: none;
                }
                .order-demo{
                    padding: 0 20px;
                }
            }

            /*------------*/
            .services-formats{
                display: flex;
                justify-content: center;
            }
            @media (max-width: 991px) {
                .services-formats__content {
                    flex-wrap: wrap;
                }
                .services-formats{
                    flex-wrap: wrap;
                }
            }
            .services-formats__item {
                position: relative;
                width: 100%;
                max-width: 303px;
                margin: 0 35px;
                text-decoration: none;
            }
            @media (max-width: 1200px) {
                .services-formats__item {
                    margin: 0 15px;
                }
            }
            .services-formats__item:first-child {
                margin-left: 0;
            }
            .services-formats__item:last-child {
                margin-right: 0;
            }
            @media (max-width: 991px) {
                .services-formats__item {
                    margin: 0 35px 50px !important;
                }
            }
            @media (max-width: 767px) {
                .services-formats__item {
                    margin: 0 0px 50px !important;
                }
                .services-formats__item:last-child {
                    margin: 0 0px 0px !important;
                }
            }
            .services-formats__item:hover {
                text-decoration: none;
            }
            .services-formats__item-in {
                display: flex;
                flex-direction: column;
                overflow: hidden;
                margin: 0 0 -2px;
                user-select: none;
                position: relative;
                z-index: 0;
                height: 100%;
            }
            .services-formats__icon {
                position: relative;
                z-index: 1;
                width: 100%;
                display: flex;
                justify-content: center;
                transition: transform 0.5s;
            }
            .services-formats__icon img {
                width: 116px;
                height: 121px;
            }
            .services-formats__title {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                font-weight: 900;
                font-size: 26px;
                color: #3f3f3f;
                text-align: center;
            }
            .services-formats__item-content {
                color: #696969;
                padding: 30px 0 25px;
            }
            .services-formats__text {
                font-size: 16px;
                line-height: 1.28;
                letter-spacing: -0.01em;
                text-align: center;
                padding: 0 0 29px;
                color: rgba(0, 0, 0, 0.69);
            }
            .services-formats__list {
                padding: 26px 0;
                margin: 0 23px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                position: relative;
            }
            .services-formats__list::before{
                content: '';
                border-top: 1px solid #dbdbdb;
                position: absolute;
                top: 0;
                left: 10px;
                right: 10px;
            }
            .services-formats__list-item {
                font-size: 14px;
                padding-left: 30px;
                position: relative;
            }
            .services-formats__list-item span {
                font-size: 1.2em;
            }
            .services-formats__list-item_num {
                width: 100%;
                margin-bottom: 13px;
            }
            .services-formats__list-item_num::before {
                content: "";
                position: absolute;
                left: 2px;
                top: 50%;
                margin-top: -10px;
                width: 18px;
                height: 18px;
                background: url(/img/happy-job/images/engagement/calendar.svg) center
                no-repeat;
                background-size: contain;
            }
            .services-formats__list-item_questions::before {
                content: "";
                position: absolute;
                left: 4px;
                top: 50%;
                margin-top: -9px;
                width: 17px;
                height: 17px;
                background: url(/img/happy-job/images/engagement/cards.svg) center no-repeat;
                background-size: contain;
            }
            .services-formats__list-item_time {
                padding-right: 10px;
            }
            .services-formats__list-item_time::before {
                content: "";
                position: absolute;
                left: 4px;
                top: 50%;
                margin-top: -8px;
                width: 17px;
                height: 17px;
                background: url(/img/happy-job/images/engagement/time.svg) center no-repeat;
                background-size: contain;
            }
            .services-formats__button {
                display: flex;
                justify-content: center;
            }
            .services-formats__button div {
                border: 1px solid #000;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #000;
                white-space: nowrap;
                padding: 9px 3px 9px 10px;
                border-radius: 0.3rem;
                font-size: 15px;
                width: 100%;
                max-width: 147px;
            }
            .services-formats__button div::after {
                content: "";
                display: inline-block;
                position: relative;
                left: 0;
                width: 1rem;
                height: 1rem;
                flex-basis: 1rem;
                min-width: 1rem;
                margin-left: 7px;
                margin-top: 0px;
                background-repeat: no-repeat;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--bi' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 16 16'%3E%3Cg fill='currentColor'%3E%3Cpath fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8L4.646 2.354a.5.5 0 0 1 0-.708z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
            }
            .services-formats__item:hover .services-formats__button div::after {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--bi' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 16 16'%3E%3Cg fill='%2361c13a'%3E%3Cpath fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8L4.646 2.354a.5.5 0 0 1 0-.708z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
            }
            .services-formats__item:hover .services-formats__button div {
                border-color: #61c13a;
                color: #61c13a;
            }
            .services-formats__item:hover .services-formats__icon {
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        </style>
        <script>
            $(function () {
                $('.questionCount__nav div').on('click',function(){
                    if($(this).hasClass('active')) return;
                    $(this).addClass('active').siblings().removeClass('active');
                    $('.questionCount__item:eq('+$(this).index()+')').addClass('active').siblings().removeClass('active');
                    $('.questionCount__nav,.questionCount__nav-mob').removeClass('open');
                    $('.questionCount__nav-mob div').html($('.questionCount__nav div.active').html());
                });
                $('.questionCount__nav-mob').on('click',function(){
                    $('.questionCount__nav,.questionCount__nav-mob').toggleClass('open');
                });
            });
        </script>
        <div class="services-stages wide-container">
            <div class="container">
                <h2 class="section-title services-stages__title">
                    Персональный менеджер поможет вам организовать<br>
                    и провести все <b>этапы</b> исследования
                </h2>
                <div class="services-stages__block">
                    <div class="services-stages__block-top">
                        <div class="services-stages__mob">
                            <div>
                                <span>1</span> Подготовка проекта
                            </div>
                            <svg><use xlink:href="#sttriangle"></use></svg>
                        </div>
                        <div class="services-stages__nav">
                            <div class="active">
                                <div>
                                    <span>1</span> Подготовка проекта
                                </div>
                                <svg><use xlink:href="#sttriangle"></use></svg>
                            </div>
                            <div>
                                <div>
                                    <span>2</span> Опрос сотрудников
                                </div>
                                <svg><use xlink:href="#sttriangle"></use></svg>
                            </div>
                            <div>
                                <div>
                                    <span>3</span> Презентация результатов <br>и рекомендации
                                </div>
                                <svg><use xlink:href="#sttriangle"></use></svg>
                            </div>
                            <div>
                                <div>
                                    <span>4</span> Внедрение рекомендаций и оценка динамики
                                </div>
                                <svg><use xlink:href="#sttriangle"></use></svg>
                            </div>
                        </div>
                    </div>
                    <div class="services-stages__content">
                        <div class="services-stages__item active">
                            <p>
                                Согласно дорожной карте проекта, перед стартом исследования мы
                                предоставляем вам PR-материалы для правильной коммуникации и
                                участия в опросе от 70%.
                            </p>
                            <p>
                                Личный руководитель проекта импортирует вашу структуру компании,
                                согласовывает письмо-приглашение к участию и сам опросник.
                            </p>
                            <p>
                                Уже на этапе подотовки задействована вся
                                <a href="https://happy-job.ru/pdf/happy_job_komanda_proekta.pdf" target="_blank" tabindex="-1">команда проекта.</a>
                            </p>
                            <img src="/img/happy-job/images/feature_01.svg" loading="lazy" alt="">
                        </div>
                        <div class="services-stages__item">
                            <p>
                                <a href="https://demo.happy-inc.ru/employee_engagement-pulse-ru" target="_blank">Геймифицированный опрос</a>
                                для офисных и не офисных сотрудников можно пройти на любом
                                устройстве за 7 минут.
                            </p>
                            <p>Вы также можете добавить или изменить вопросы исследования.</p>
                            <p>
                                Happy Job как внешний провайдер защищает 100% анонимность
                                ответов для доверия сотрудников и получения вами достоверных
                                данных.
                            </p>
                            <img src="/img/happy-job/images/feature_02.svg" loading="lazy" alt="">
                        </div>
                        <div class="services-stages__item">
                            <p>
                                По завершению опроса платформа направляет каждому руководителю
                                ссылку для доступа в личный кабинет с результатами исследования.
                            </p>
                            <p>
                                Отчеты простые, понятные и содержат методические справки по
                                назначению каждого индекса.
                            </p>
                            <p>
                                Самые полные бенчмарки по всем метрикам
                                <a href="https://happy-inc.ru/clients/benchmarks/" target="_blank">в 32 отраслях.</a>
                            </p>
                            <p>Конструктор презентаций «в 1 клик» в PPT, PDF, XLSX.</p>
                            <img src="/img/happy-job/images/feature_03.svg" loading="lazy" alt="">
                        </div>
                        <div class="services-stages__item">
                            <p>
                                Все необходимые инструменты для развития вовлечённости и
                                лояльности в каждом подразделении от 5 человек:
                            </p>
                            <ul>
                                <li>
                                    индивидуальный отчет и приоритеты для каждого руководителя.
                                </li>
                                <li>
                                    рекомендации мероприятий от платформы и контент-анализ
                                    предложений сотрудников.
                                </li>
                                <li>
                                    онлайн-план работ и мониторинг активности руководителя в
                                    работе над изменениями.
                                </li>
                            </ul>
                            <img src="/img/happy-job/images/feature_04.svg" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="sttriangle" preserveaspectratio="none" viewbox="0 0 41.28 46">
                <g><path fill="#61c03a" d="M0,43.16V2.84C0,.53,3.21-.81,5.51.54L39.84,20.7a2.56,2.56,0,0,1,0,4.6L5.51,45.46C3.21,46.81,0,45.47,0,43.16Z"></path></g>
            </symbol>
        </svg>
        <style>
            .services-stages{
                padding: 100px 0 133px;
                background: rgba(21,33,40,0.05);
            }
            .services-stages .container{
                padding: 0;
            }
            .services-stages__title{
                text-align: center;
            }
            .services-stages__block{
                margin-top: 115px;
                display: flex;
                justify-content: space-between;
            }
            .services-stages__block-top{
                position: relative;
            }
            .services-stages__mob{
                display: none;
            }
            .services-stages__nav{
                width: 276px;
                margin-right: 130px;
            }
            .services-stages__nav > div{
                padding: 11px 0 11px 56px;
                margin: 0 0 27px;
                border-radius: 50px 0 0 50px;
                position: relative;
                cursor: pointer;
                user-select: none;
            }
            .services-stages__nav > div:last-child{
                margin-bottom: 0;
            }
            .services-stages__nav div span,
            .services-stages__mob span{
                font-size: 1.9em;
                line-height: 1;
                font-weight: 300;
                position: absolute;
                top: 50%;
                transform: translate(0,-50%);
                left: 20px;
            }
            .services-stages__nav > div.active{
                color: #fff;
                background: #61c03a;
                cursor: default;
            }
            .services-stages__nav div svg{
                display: none;
                position: absolute;
                top: 0;
                left: 100%;
                margin-left: -3px;
                width: 42px;
                height: 100%;
            }
            .services-stages__nav > div.active svg{
                display: block;
            }
            .services-stages__content{
                flex: 1;
                padding: 15px 70px 15px 0;
                font-size: 16px;
                line-height: 1.5;
            }
            .services-stages__item{
                display: none;
                position: relative;
                height: 100%;
                flex-direction: column;
                justify-content: center;
                padding-right: 37%;
            }
            .services-stages__item.active{
                display: flex;
            }
            .services-stages__item ul{
                padding-left: 1em;
            }
            .services-stages__item ul li{
                list-style-type: disc;
            }
            .services-stages__item img {
                position: absolute;
                height: 100%;
                display: inline-block;
                top: 0px;
                right: 0px;
            }


            @media (max-width: 1200px){
                .services-stages__nav{
                    margin-right: 85px;
                }
                .services-stages__content{
                    padding-right: 0;
                }
            }
            @media (max-width: 992px){
                .services-stages{
                    padding: 75px 0 50px;
                }
                .services-stages__title br{
                    display: none;
                }
                .services-stages__block{
                    margin-top: 50px;
                    display: block;
                }
                .services-stages__mob{
                    display: flex;
                    align-items: center;
                    color: #fff;
                    background: #61c03a;
                    width: 100%;
                    border-radius: 8px;
                    height: 63px;
                    font-size: 17px;
                    line-height: 1.2;
                    padding: 0 40px 0 32px;
                    position: relative;
                }
                .services-stages__mob svg{
                    position: absolute;
                    right: 15px;
                    top: 50%;
                    transform: translate(0,-50%) rotate(90deg);
                    width: 9px;
                    height: 14px;
                    filter: brightness(0) invert(1);
                }
                .services-stages__mob.open svg{
                    transform: translate(0,-50%) rotate(-90deg);
                }
                .services-stages__block-top{
                    z-index: 10;
                }
                .services-stages__nav{
                    position: absolute;
                    top: 68px;
                    left: 0;
                    width: 100%;
                    border-radius: 8px;
                    background: #f3f4f4;
                    border: 1px solid #61c03a;
                    font-size: 17px;
                    line-height: 1.2;
                    overflow: hidden;
                    display: none;
                }
                .services-stages__nav.open{
                    display: block;
                }
                .services-stages__nav > div{
                    border-radius: 0;
                    margin: 0 0 5px;
                    padding: 11px 16px 11px 62px;
                }
                .services-stages__nav > div span,
                .services-stages__mob span{
                    font-size: 1.4em;
                    left: 32px;
                }
                .services-stages__mob > div{
                    padding-left: 30px;
                }
                .services-stages__nav div svg{
                    display: none !important;
                }
                .services-stages__content img{
                    display: none;
                }
                .services-stages__item{
                    padding-right: 0;
                }
            }
        </style>
        <script>
            $(function () {
                $('.services-stages__nav > div').on('click',function(){
                    if($(this).hasClass('active')) return;
                    $(this).addClass('active').siblings().removeClass('active');
                    $('.services-stages__item:eq('+$(this).index()+')').addClass('active').siblings().removeClass('active');
                    $('.services-stages__nav,.services-stages__mob').removeClass('open');
                    $('.services-stages__mob').html($('.services-stages__nav > div.active').html());
                });
                $('.services-stages__mob').on('click',function(){
                    $('.services-stages__nav,.services-stages__mob').toggleClass('open');
                });
            });
        </script>
        <div class="services-examples">
            <div class="container">
                <h2 class="section-title services-examples__title">
                    Примеры <b>опроса</b> и <b>отчетов</b>
                </h2>
                <div class="services-examples__block">
                    <div class="services-examples__phone">
                        <div class="services-examples__imgwrap">
                            <img src="/img/p/services/phone_l.jpg" alt="Пульс-опрос Happy Job">
                        </div>
                        <div class="services-examples__buttons">
                            <a href="https://demo.happy-inc.ru/employee_engagement-pulse-ru" target="_blank" class="services-examples__button">Онлайн-демо опроса</a>
                        </div>
                    </div>
                    <div class="services-examples__pc">
                        <div class="services-examples__imgwrap">
                            <img src="/img/p/services/screen_l.jpg" alt="Пример отчета Happy Job">
                        </div>
                        <div class="services-examples__buttons">
                            <a data-fancybox data-src="#main-modal" class="services-examples__button" href="javascript:;" onclick="ym(46152993,'reachGoal','innerpages_event_click')">Онлайн-демо личного кабинета</a>
                            <a href="/pdf/demo_loyalty_1104.pdf" class="services-examples__button services-examples__button_pdf" download>Авто-PDF версия</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .services-examples{
                padding: 100px 0 60px;
            }
            .services-examples .container{
                padding: 0;
            }
            .services-examples__title{
                text-align: center;
            }
            .services-examples__block{
                display: flex;
                margin-top: 70px;
            }
            .services-examples__phone{
                width: 35.5%;
            }
            .services-examples__pc{
                flex: 1;
            }
            .services-examples__imgwrap{
                height: 469px;
                position: relative;
            }
            .services-examples__imgwrap img{
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: auto;
                max-width: unset;
            }
            .services-examples__buttons{
                margin-top: 56px;
                display: flex;
                justify-content: center;
            }
            .services-examples__phone .services-examples__buttons{
                justify-content: flex-start;
            }
            .services-examples__pc .services-examples__buttons{
                padding-right: 43px;
            }
            .services-examples__button{
                display: block;
                color: rgba(0,0,0,0.82) !important;
                border: 1px solid rgba(0,0,0,0.82);
                margin: 0 10px;
                padding: 15px 23px 15px 39px;
                border-radius: 5px;
                font-size: 16px;
                line-height: 1;
                font-weight: 700;
                position: relative;
            }
            .services-examples__button::before{
                content: '';
                position: absolute;
                left: 23px;
                top: 50%;
                transform: translate(0,-50%);
                width: 8px;
                height: 14px;
                margin-right: 8px;
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.31 14.54'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.82;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath class='cls-1' d='M8,6.54A1,1,0,0,1,8,8L1.77,14.24a1.05,1.05,0,0,1-1.47,0,1.05,1.05,0,0,1,0-1.47l5.5-5.5L.31,1.77A1,1,0,0,1,.31.3,1.05,1.05,0,0,1,1.78.3L8,6.53Z'/%3E%3C/g%3E%3C/svg%3E");
            }
            .services-examples__button_pdf{
                padding-left: 54px;
            }
            .services-examples__button_pdf::before{
                width: 18px;
                height: 18px;
                margin-right: 13px;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.33 18.33'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.82;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath class='cls-1' d='M10.31,1.15A1.15,1.15,0,1,0,8,1.15V9.84L5.39,7.21A1.15,1.15,0,0,0,3.77,8.83l4.58,4.58a1.15,1.15,0,0,0,1.63,0l4.58-4.58a1.15,1.15,0,1,0-1.62-1.62L10.31,9.84Zm-8,11.45A2.3,2.3,0,0,0,0,14.9V16a2.29,2.29,0,0,0,2.29,2.29H16A2.28,2.28,0,0,0,18.33,16V14.9A2.29,2.29,0,0,0,16,12.6H12.41l-1.62,1.63a2.31,2.31,0,0,1-3.25,0L5.93,12.6Zm13.18,3.73a.86.86,0,1,1,.86-.86A.86.86,0,0,1,15.47,16.33Z'/%3E%3C/g%3E%3C/svg%3E");
            }
            .services-examples__button:hover{
                color: #61c13a !important;
                border-color: #61c13a;
            }
            .services-examples__button:hover::before{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.31 14.54'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.82;fill:%2361c13a;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath class='cls-1' d='M8,6.54A1,1,0,0,1,8,8L1.77,14.24a1.05,1.05,0,0,1-1.47,0,1.05,1.05,0,0,1,0-1.47l5.5-5.5L.31,1.77A1,1,0,0,1,.31.3,1.05,1.05,0,0,1,1.78.3L8,6.53Z'/%3E%3C/g%3E%3C/svg%3E");
            }
            .services-examples__button_pdf:hover::before{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18.33 18.33'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bopacity:0.82;fill:%2361c13a;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath class='cls-1' d='M10.31,1.15A1.15,1.15,0,1,0,8,1.15V9.84L5.39,7.21A1.15,1.15,0,0,0,3.77,8.83l4.58,4.58a1.15,1.15,0,0,0,1.63,0l4.58-4.58a1.15,1.15,0,1,0-1.62-1.62L10.31,9.84Zm-8,11.45A2.3,2.3,0,0,0,0,14.9V16a2.29,2.29,0,0,0,2.29,2.29H16A2.28,2.28,0,0,0,18.33,16V14.9A2.29,2.29,0,0,0,16,12.6H12.41l-1.62,1.63a2.31,2.31,0,0,1-3.25,0L5.93,12.6Zm13.18,3.73a.86.86,0,1,1,.86-.86A.86.86,0,0,1,15.47,16.33Z'/%3E%3C/g%3E%3C/svg%3E");
            }
            @media (max-width: 1200px) {
                .services-examples__imgwrap{
                    height: 400px;
                }
                .services-examples__pc .services-examples__buttons{
                    padding-right: 0;
                }
                .services-examples__button{
                    margin: 0 20px 0 0;
                }
            }
            @media (max-width: 992px) {
                .services-examples__imgwrap{
                    height: 350px;
                }
                .services-examples__block{
                    flex-direction: column;
                    align-items: center;
                }
                .services-examples__phone{
                    margin-bottom: 75px;
                    width: auto;
                }
                .services-examples__phone .services-examples__imgwrap img{
                    left: 32px;
                }
                .services-examples__pc .services-examples__imgwrap img{
                    left: -72px;
                }
                .services-examples__buttons{
                    flex-direction: column;
                }
                .services-examples__button{
                    margin: 0 0 20px 0;
                }
                .services-examples{
                    padding-bottom: 15px;
                }
            }
            @media (max-width: 576px) {
                .services-examples__block{
                    margin-top: 50px;
                }
                .services-examples__buttons{
                    margin-top: 35px;
                }
                .services-examples__phone{
                    margin-bottom: 50px;
                }
                .services-examples__pc .services-examples__imgwrap{
                    height: 233px;
                }
                .services-examples__pc .services-examples__imgwrap img{
                    left: 6px;
                }
                .services-examples{
                    padding-top: 75px;
                }
            }
        </style>
        <div class="services-platform">
            <div class="container">
                <h2 class="section-title services-platform__title">
                    Лидирующая платформа
                </h2>
                <div class="services-platform__block">
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img diamond"></div>
                            800+ клиентов
                        </div>
                        <div class="services-platform__item-text">
                            Крупнейшая база бенчмарков в Евразии. Свежие и точные данные по 32 отраслям рынка.
                        </div>
                    </div>
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img tree"></div>
                            16 лет
                        </div>
                        <div class="services-platform__item-text">
                            Помогаем компаниям быть лучшими, развивать рабочую среду и слышать сотрудников.
                        </div>
                    </div>
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img box"></div>
                            Единая методика
                        </div>
                        <div class="services-platform__item-text">
                            Методика Happy Job подтверждена патентом РАО. Платформа входит в единый реестр российского ПО.
                        </div>
                    </div>
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img devices"></div>
                            Геймификация <br>и кастомизация
                        </div>
                        <div class="services-platform__item-text">4
                                                                  Анимированные анкеты и гибкая настройка дизайна под отрасль и компанию.
                        </div>
                    </div>
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img reports"></div>
                            Аналитика и отчеты
                        </div>
                        <div class="services-platform__item-text">
                            Мощнейшая аналитика в любых срезах и корреляциях. Возможность выгрузки за 1 клик.
                        </div>
                    </div>
                    <div class="services-platform__item">
                        <div class="services-platform__item-title">
                            <div class="services-platform__item-img safe"></div>
                            100% безопасность
                        </div>
                        <div class="services-platform__item-text">
                            Защита данных по ФЗ-152 и постоянный аудит безопасности.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .services-platform{
                padding: 55px 0 80px;
            }
            .services-platform .container{
                padding: 0;
            }
            .services-platform__title{
                text-align: center;
            }
            .services-platform__block{
                display: flex;
                flex-wrap: wrap;
                margin-top: 90px;
                color: #282828;
            }
            .services-platform__item{
                width: 310px;
                margin-right: 70px;
                margin-bottom: 48px;
                padding-left: 68px;
                position: relative;
            }
            .services-platform__item:nth-child(3n){
                margin-right: 0;
            }
            .services-platform__item-img{
                position: absolute;
                top: 50%;
                transform: translate(0,-50%);
                right: 100%;
                margin-right: 12px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            .services-platform__item-img.diamond{
                background-image: url(/img/p/services/diamond.svg);
                width: 44px;
                height: 47px;
            }
            .services-platform__item-img.tree{
                background-image: url(/img/p/services/tree.svg);
                width: 62px;
                height: 62px;
                margin-right: 3px;
            }
            .services-platform__item-img.box{
                background-image: url(/img/p/services/box.svg);
                width: 40px;
                height: 55px;
                margin-top: -3px;
            }
            .services-platform__item-img.devices{
                background-image: url(/img/p/services/devices.svg);
                width: 47px;
                height: 36px;
            }
            .services-platform__item-img.reports{
                background-image: url(/img/p/services/reports.svg);
                width: 47px;
                height: 43px;
            }
            .services-platform__item-img.safe{
                background-image: url(/img/p/services/safe.svg);
                width: 48px;
                height: 36px;
            }
            .services-platform__item-title{
                font-size: 18px;
                line-height: 1.2;
                font-weight: 900;
                min-height: 44px;
                display: flex;
                align-items: flex-end;
                position: relative;
            }
            .services-platform__item-text{
                margin-top: 15px;
                font-size: 14px;
                line-height: 1.4;
            }

            @media (max-width: 1200px) {
                .services-platform__item{
                    width: 280px;
                    margin-right: 45px;
                }
            }
            @media (max-width: 992px) {
                .services-platform__item{
                    width: 315px;
                    margin: 0 20px 48px !important;
                }
                .services-platform__block{
                    justify-content: center;
                }
            }
            @media (max-width: 767px) {
                .services-platform__item{
                    width: 100%;
                    max-width: 400px;
                    margin: 0 0 48px !important;
                }
                .services-platform__block{
                    margin-top: 50px;
                }
            }
            @media (max-width: 576px) {
                .services-platform__block{
                    margin-top: 50px;
                }
                .services-platform{
                    padding-bottom: 20px;
                }
            }
        </style>
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
                                        Happy Job обогатила международную практику оценки вовлечённости и лояльности, добавив в неё точность исследований, интересные опросы и технологии <a href="https://happy-job.ru/about-service/method/" target="_blank" tabindex="-1"><span>HR Zero</span></a>.
                                        Мы совершенствуем <a href="/metodika/nauchnoe-obosnovanie-metodiki/" target="_blank" tabindex="-1"><span>методику</span></a> и вопросы каждый день вместе с 800+ средними и крупными компаниями России и Евразии.
                                    </p>
                                    <p>
                                        Методика подтверждена <a href="/img/happy-job/images/rao.jpg" data-fancybox tabindex="-1"><span>патентом РАО</span></a>. Платформа входит в <a href="https://happy-inc.ru/news/Platforma-Happy-Job-voshla-v-edinyy-reestr-rossiyskih-programm-dlya-elektronnyh-vychislitelnyh-mashin-i-baz-dannyh/" target="_blank" tabindex="-1"><span>единый реестр</span></a> российского программного обеспечения.
                                    </p>
                                    <p><a href="https://happy-job.ru/metodika/nauchnoe-obosnovanie-metodiki/" target="_blank" tabindex="-1"><span>Научные статьи</span></a> по методике Happy Job регулярно публикуются в международных журналах фундаментальных и прикладных исследований. <a href="/hr-blog/#methodical-materials" tabindex="-1"><span>Экспертные статьи</span></a> наших консультантов можно прочитать в авторитетных бизнес-изданиях.
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
        <div class="benchmarks wide-container">
            <div class="container">
                <div class="text-center">
                    <div class="benchmarks__title">
                        Опции и возможности платформы
                    </div>
                    <p>
                        Платформа предлагает на выбор необходимые digital-опции и сервисы, которые
                        <br>
                        помогут добиться результатов с оптимальным бюджетом.
                    </p>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="products-block">
                    <div class="products-block__item" id="benchmarks-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Бенчмарки
                            </div>
                            <div class="products-block__text">
                                <p>Самые свежие бенчмарки по 32 отраслям. Сейчас в экосистеме Happy Job более 800 компаний со средним процентом участия 75%.</p><p>Каждому руководителю доступны бенчмарки по отрасли, по России в целом и внутренние сравнения по своей компании.</p><p>Также мы предоставляем аналитику по каждой метрике и субметрике.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/benchmarks.webp" type="image/webp"><img src="/img/pages/engagement/benchmarks.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item products-block__item_reverse" id="orgstructure-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Оргструктура
                            </div>
                            <div class="products-block__text">
                                <p>Мы создали инструмент, готовый моделировать любую иерархию, матричные связи и, самое главное, адаптироваться под изменения состава и численности ваших подразделений.</p><p>Вы сможете увидеть всю структуру и все фильтры в простом и удобном формате. <br>Мы предоставляем более 20 фильтров, которые позволят находить факторы вовлечённости и лояльности на всех уровнях компании.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/org.webp" type="image/webp"><img src="/img/pages/engagement/org.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item" id="analysis-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Контент-анализ
                            </div>
                            <div class="products-block__text">
                                <p>В платформу встроена интеллектуальная система обработки предложений сотрудников.</p><p>Вы найдёте «золотые» идеи, скрывающиеся глубоко в системе обработки обратной связи от сотрудников, используя наши алгоритмы кластеризации и сегментации обратной связи.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/content.webp" type="image/webp"><img src="/img/pages/engagement/content.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item products-block__item_reverse" id="consulting-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Встроенный консалтинг
                            </div>
                            <div class="products-block__text">
                                <p>Экспертные знания о вовлечённости и лояльности сотрудников всегда под рукой у каждого руководителя: все метрики и субметрики снабжены рекомендациями мирового уровня для самостоятельного улучшения показателей.</p><p>Также в платформу встроены онлайн- планировщик задач и система контроля активности руководителей.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/vstr_consulting.webp" type="image/webp"><img src="/img/pages/engagement/vstr_consulting.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item" id="export-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Экспорт результатов
                            </div>
                            <div class="products-block__text">
                                <p>Больше никакого ожидания результатов или ручной обработки провайдера!</p><p>Все данные доступны онлайн сразу после исследования. Можно экспортировать результаты в форматах PPT, PDF, XLS «в 1 клик».</p><p>Сформированные на платформе презентации содержат методические слайды по всем индексам и понятны каждому.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/export.webp" type="image/webp"><img src="/img/pages/engagement/export.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item products-block__item_reverse" id="plan-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                План работ
                            </div>
                            <div class="products-block__text">
                                <p>Чувствуйте себя уверенно на каждом этапе — от понимания до действия.</p><p>Благодаря индивидуальным планам мероприятий, и мониторингу активности руководителей в режиме реального времени, вы будете постоянно улучшать вовлечённость сотрудников и добиваться высоких бизнес результатов в своей отрасли.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/plan.webp" type="image/webp"><img src="/img/pages/engagement/plan.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item" id="history-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                История исследований
                            </div>
                            <div class="products-block__text">
                                <p>Отслеживайте, как метрики и показатели меняются с течением времени, чтобы убедится, что ваши инициативы работают.</p><p>Четкие, обезличенные, агрегированные данные из результатов опроса представлены в легко читаемых отчетах.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/researches_new.webp" type="image/webp"><img src="/img/pages/engagement/researches_new.png">
                            </picture>
                        </div>
                    </div>
                    <div class="products-block__item products-block__item_reverse" id="hrmetr-item">
                        <div class="products-block__content">
                            <div class="products-block__title">
                                Аналитика и HR метрики
                            </div>
                            <div class="products-block__text">
                                <p>Используя HR-аналитику в платформе, вам больше не нужно полагаться на интуицию.</p><p>Крупнейший в стране массив HR данных позволяет вашей организации измерять влияние ряда -метрик на общую эффективность бизнеса и принимать решения на основе данных.</p>
                            </div>
                        </div>
                        <div class="products-block__img">
                            <picture>
                                <source srcset="/img/pages/engagement/hrmetr.webp" type="image/webp"><img src="/img/pages/engagement/hrmetr.png">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .benchmarks .container{
                padding: 0;
            }
            .products-block{
                padding: 0 15px 95px;
            }
            .products-block__item{
                display: flex;
                justify-content: space-between;
                width: 100%;
                margin-bottom: 117px;
            }
            .products-block__item_reverse{
                flex-direction: row-reverse;
            }
            .products-block__item:last-child{
                margin-bottom: 0;
            }
            .products-block__content{
                width: 36.78%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .products-block__item_reverse .products-block__content{
                width: 37%;
            }
            .products-block__title{
                font-size: 24px;
                letter-spacing: 0.01em;
                line-height: 1.35;
                font-weight: 500;
            }
            .products-block__text{
                margin-top: 25px;
                font-size: 16px;
                line-height: 1.35;
            }
            .products-block__text p{
                line-height: inherit;
            }
            .products-block__img{
                width: 57%;
            }
            .products-block__img picture{
                display: block;
            }
            .products-block__img img{
                display: block;
                width: 100%;
            }

            @media (max-width: 1200px) {
                .products-block__img{
                    display: flex;
                    align-items: center;
                }
            }
            @media (max-width: 992px) {
                .products-block__item,
                .products-block__img{
                    display: block;
                }
                .products-block{
                    padding: 0 15px 55px;
                    text-align: center;
                }
                .products-block__item{
                    margin-bottom: 85px;
                    position: relative;
                }
                .products-block__content{
                    width: 100% !important;
                    padding: 0 !important;
                }
                .products-block__img{
                    width: 100%;
                    margin-top: 35px;
                }
                .products-block__img img{
                    width: 500px;
                    max-width: 100%;
                }
            }
        </style>


    </main>

</div>

<!-- endrender loyalty//-->

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

<!-- /webinar-girl -->
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
