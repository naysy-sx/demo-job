<?php $this->title = 'Кейсы клиентов по использованию платформы Happy Job для исследования вовлеченности'; ?>
<style>
    .breadcrumbs-list:after{
        display: none !important;
    }
    .intro {
        display: grid;
        grid-template-columns: 1fr minmax(320px, 1120px) 1fr;
        grid-template-rows: auto auto auto;
        border-bottom: 3px solid rgba(0, 0, 0, 0.05);
        background-color: #f8f8f8;
    }

    @media (max-width: 768px) {
        .intro {
            display: block;
            grid-template-rows: 0 auto auto;
        }
        .intro img{
            display: none;
        }
    }
    @media (max-width: 556px) {
        .intro {
            grid-template-rows: 0 auto 0rem;
        }
    }

    .intro-container {
        grid-column: 2 / 3;
        grid-row: 2 / 3;
        padding: 3rem 1rem;
    }

    .intro-image {
        grid-column: 1 / 4;
        grid-row: 1 / 4;
        z-index: -1;
        object-fit: cover;
        width: 100%;
        max-height: 500px;
        opacity: 0;
    }

    .intro-title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 0.7rem;
        line-height: 1;
        font-weight: 200;
        font-size: 1.375rem;
        font-size: clamp(
                1.375rem,
                1.2321428571428572rem + 0.7142857142857143vw,
                1.875rem
        );
    }

    .intro-title.-large,
    .intro-title .-large {
        font-size: 1.5rem;
        font-size: clamp(
                1.5rem,
                1.0357142857142856rem + 2.3214285714285716vw,
                3.125rem
        );
        white-space: nowrap;
    }

    .intro-title.-light {
        color: #fff;
    }

    .intro-title .-light {
        font-weight: 200;
    }

    .intro-title .-middle {
        font-size: 1.5em;
    }

    .intro-title .-default {
        font-size: 0.7em;
    }

    .intro-title .-bold {
        font-weight: 900;
    }

    .intro-title .-small {
        font-size: 16px;
        line-height: 1.5;
        font-family: "Gotham Pro", sans-serif;
        text-shadow: 1px 1px 1px rgb(0 0 0 / 0%);
        text-rendering: optimizeLegibility !important;
        -webkit-font-smoothing: antialiased !important;
        padding-top: 0.7rem;
        line-height: 1.5;
        font-weight: 400;
    }

    .intro-buttons {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    @media (max-width: 768px) {
        .intro-image {
            height: 400px;
        }
    }

    @media (max-width: 576px) {
        .intro-buttons {
            flex-direction: column;
            align-items: flex-start;
        }

        .intro-image {
            opacity: 0.4;
        }

        .intro-title.-light {
            color: #000;
        }
    }

    .breadcrumbs-item + .breadcrumbs-item:before{
        transform: translate(-5px, -2px) !important;
    }

    @media (max-width:576px){
        .breadcrumbs-item + .breadcrumbs-item:before{
            transform: translate(-1px, 3px) !important;
        }
    }

    .breadcrumbs {
        padding: 1rem 0 !important;
    }

</style>

<!-- endrender cases/01-top-banner-->

<!-- render cases/02-list-->
<style>
    body .fancybox__content > .carousel__button.is-close {
        background: #fff !important;
        border-radius: 3px;
    }
    .cases {
        display: grid;
        grid-template-columns: 1fr minmax(320px, 1120px) 1fr;
        grid-template-rows: auto;
        padding: 0 1rem;
    }

    .cases-container {
        grid-column: 2 / 3;
        grid-row: 2 / 3;
        padding: clamp(2rem, 1.4285714285714286rem + 2.857142857142857vw, 4rem) 0;
    }

    .cases-list {
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        grid-auto-flow: row;
        grid-gap: clamp(2rem, 1.4285714285714286rem + 2.857142857142857vw, 4rem);
    }

    .cases-item {
        list-style-type: none;
    }

    .case {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        border-radius: 10px;
        overflow: hidden;
        outline: 2px solid rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .case-body {
        display: flex;
        height: 100%;
        flex-direction: column;
        justify-content: space-between;
        padding: 1.2rem;
        gap: 1rem;
    }

    .case-title {
        font-size: clamp(
                1.125rem,
                1.0178571428571428rem + 0.5357142857142857vw,
                1.5rem
        );
        font-weight: 900;
        overflow: hidden;
        text-overflow: ellipsis;
        height: clamp(60px, 3.3035714285714284rem + 2.232142857142857vw, 85px);
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .case-description {
        font-size: 14px;
    }

    .case-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: transparent;
        padding: 0;
    }

    .case-link {
        position: relative;
        padding: 0.25rem 0.5rem;
        display: inline-flex;
        gap: 0.3rem;
        font-weight: 700;
        align-items: center;
        color: var(--c-link);
        border-radius: 10px;
        transition: all 0.3s;
    }

    .case-link:hover {
        background-color: var(--c-link);
        color: #fff;
        text-decoration: none;
    }

    .case-link:after {
        content: "\00276F";
        color: var(--c-link);
    }

    .case-link:hover:after {
        color: #fff;
    }
    .case-video {
        padding: 0.3rem;
    }

    .case-video b {
        display: block;
        width: 32px;
        height: 32px;
        transition: transform 0.3s;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23cbffb7' d='M12 20c4.41 0 8-3.59 8-8s-3.59-8-8-8s-8 3.59-8 8s3.59 8 8 8zM10 7.5l6 4.5l-6 4.5v-9z' opacity='.3'/%3E%3Cpath fill='%2361C13B' d='M12 22c5.52 0 10-4.48 10-10S17.52 2 12 2S2 6.48 2 12s4.48 10 10 10zm0-18c4.41 0 8 3.59 8 8s-3.59 8-8 8s-8-3.59-8-8s3.59-8 8-8zm-2 3.5v9l6-4.5z'/%3E%3C/svg%3E");
    }

    .case-video:hover b {
        transform: scale(1.4);
    }
</style>
<section class="intro">
    <div class="intro-container">
        <article class="intro-content">
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

                            <span itemprop="name">Кейсы наших Клиентов</span>

                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </nav>
            </div>
            <h1 class="intro-title">
                <span class="-light -large">Кейсы наших Клиентов</span>
            </h1>
            <p>Хотите узнать, как программное обеспечение Happy Job приносит пользу
               для организаций?</p>
            <p>Ознакомьтесь с этими кейсами, чтобы увидеть реальные результаты и
               рентабельность инвестиций.</p>
        </article>
    </div>
    <img src="/img/cases/happy-nums-bg.jpg" alt="Digital платформы и комплексные решения для производственных компаний" class="intro-image">
</section>

<section class="cases">
    <div class="cases-container">
        <ul class="cases-list">
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/65-vovlechennost-bolshe-chem-rabota-keys-gazprombank/cover.png" alt="«Вовлеченность – больше, чем работа». Кейс Газпромбанк" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">«Вовлеченность – больше, чем работа». Кейс Газпромбанк</div>
                            <div class="case-description">
                                <p>
                                    Работа над вовлеченностью – не спринт, а марафон, результаты дают только системные действия.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-bolshe-chem-rabota-keys-gazprombank" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/63-vovlechennost-pri-bystrom-roste-keys-gruppy-samolet/cover.png" alt="Вовлеченность при быстром росте. Кейс Группы «Самолет»" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Вовлеченность при быстром росте. Кейс Группы «Самолет»</div>
                            <div class="case-description">
                                <p>
                                    Как добиться доверия сотрудников и интегрировать новичков в корпоративную культуру при быстром росте компании.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-pri-bystrom-roste-keys-gruppy-samolet" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/keys-diksi-kak-my-uvelichili-enps-v-magazinakh-na-60-p-p/cover_1.png" alt="Кейс Дикси: Как мы увеличили eNPS в магазинах на 60 п.п." class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Кейс Дикси: Как мы увеличили eNPS в магазинах на 60 п.п.</div>
                            <div class="case-description">
                                <p>
                                    Как «подружить» разные культуры при слиянии компаний и как условия труда влияют на лояльность сотрудников.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/keys-diksi-kak-my-uvelichili-enps-v-magazinakh-na-60-p-p" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/52-vovlechennost-v-promyshlennosti-keys-gruppy-ilim/cover.png" alt="Вовлеченность в промышленности. Кейс Группы «Илим»" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Вовлеченность в промышленности. Кейс Группы «Илим»</div>
                            <div class="case-description">
                                <p>
                                    Как вовлечь сотрудников с разным менталитетом и зачем гиганту отрасли проводить бенчмаркинг.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-v-promyshlennosti-keys-gruppy-ilim/" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/50-vzryvnoy-rost-happy-index-keys-vsk/cover.png" alt="Взрывной рост Happy Index. Кейс ВСК" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Взрывной рост Happy Index. Кейс ВСК</div>
                            <div class="case-description">
                                <p>
                                    Как найти подход к сотрудникам разных поколений, повысить их вовлеченность и учесть потребности всех членов команды.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vzryvnoy-rost-happy-index-keys-vsk/" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/44-vovlechennost-v-zharkiy-sezon-keys-s7-airlines/cover.png" alt="Высокий eNPS, низкая текучесть: рецепт успеха BetBoom" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Вовлеченность в жаркий сезон</div>
                            <div class="case-description">
                                <p>
                                    Как в период максимальной нагрузки не только удержать сотрудников, но и значительно повысить их вовлеченность.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-v-zharkiy-sezon-keys-s7-airlines/" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/42-vovlechennost-cherez-sport-keys-betboom/cover.png" alt="Высокий eNPS, низкая текучесть: рецепт успеха BetBoom" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Высокий eNPS, низкая текучесть: рецепт успеха BetBoom</div>
                            <div class="case-description">
                                <p>
                                    Как интересные задачи, дружеская атмосфера в коллективе и соблюдение work-life balance формируют сильное EVP компании BetBoom.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-cherez-sport-keys-betboom/" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/41-vovlechennost-90-keys-baltika/cover.png" alt="Как «Балтика» удерживает вовлеченность 90%" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Как «Балтика» удерживает вовлеченность 90%</div>
                            <div class="case-description">
                                <p>
                                    Как информирование сотрудников, учет каждого мнения и участие руководства в проектах повышает вовлеченность персонала в компании «Балтика».
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/vovlechennost-90-keys-baltika/" class="case-link">Читать</a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/18-kak-sibur-razvivayet-vovlechennost-personala/cover.svg" alt="Как СИБУР развивает вовлеченность" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Как СИБУР развивает вовлеченность</div>
                            <div class="case-description">
                                <p>
                                    О важности методологии и о влиянии корпоративной культуры на метрики вовлеченности в новом интервью.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/kak-sibur-razvivayet-vovlechennost-personala/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/814190184" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/hr-blog/12-praktika-razvitiya-enps-opyt-magnit/cover.png" alt="Практика развития eNPS: опыт Магнит" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Практика развития eNPS: опыт Магнит</div>
                            <div class="case-description">
                                <p>
                                    Как измерять и развивать вовлеченность и лояльность сотрудников в компании федерального масштаба, а главное — как затем эффективно работать с результатами, нам рассказали топ-менеджеры сети магазинов «Магнит».
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/praktika-razvitiya-enps-opyt-magnit/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/797367699" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>

            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/tplus/cover_t-cases.png" alt="T Plus" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">ПАО "Т Плюс"</div>
                            <div class="case-description">
                                <p>
                                    О том, как успешно провести опрос вовлеченности в компании федерального масштаба
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/pao-t-plyus-o-tom-kak-uspeshno-provesti-opros-vovlechennosti-v-kompanii-federalnogo-masshtaba/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/787543270" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 1 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/blog/posts/vovlechennost/preview.jpg" alt="Inventive retail grup" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Вовлеченность в вовлеченность</div>
                            <div class="case-description">
                                <p>
                                    Мария Резник поделилась опытом как вовлекать руководителей в исследование и развитие вовлеченности команд.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="https://happy-job.ru/hr-blog/vovlechennost-v-vovlechennost-opyt-inventive-retail-group/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/775030996" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 1 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/technonikol.jpg" alt="Торговая Сеть ТЕХНОНИКОЛЬ" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Торговая Сеть ТЕХНОНИКОЛЬ</div>
                            <div class="case-description">
                                <p>
                                    Это работает: как мы снизили текучесть кадров на 19,8%,
                                    развивая вовлечённость персонала
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/Eto-rabotaet--kak-my-snizili-tekuchest-kadrov-na-19-8---razvivaya-vovlechennost-personala/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/741869709" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 2 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/lanit.jpg" alt="ЛАНИТ" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">ЛАНИТ</div>
                            <div class="case-description">
                                <p>
                                    Опрос вовлечённости дает возможность услышать сотрудников,
                                    запланировать важные для них изменения и подключить их самих к
                                    внедрению этих изменений.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/GK-Lanit-rasskazyvaet-ob-osobennostyah-issledovaniy-vovlechennosti-v-IT-kompaniyah/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/680431315" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 3 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/ivi.jpg" alt="IVI" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">IVI</div>
                            <div class="case-description">
                                <p>
                                    Happy Job предоставляет огромную коллекцию бенчмарков и в
                                    новых условиях нам было очень интересно сравнение ИТ
                                    компаниями и другими отраслями, как чувствует себя наш
                                    коллектив в такой период.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/IVI-delitsya-sekretami-o-tom--kak-dobitsya-vysokih-pokazateley-uchastiya-v-oprosah-vovlechennosti/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/711109526" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 4 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/obi.jpg" alt="OBI" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">OBI</div>
                            <div class="case-description">
                                <p>
                                    Когда обычные сотрудники рассказывают об изменениях, это
                                    помогает руководству понять, что исследование вовлечённости
                                    действительно жизненно важный процесс в организме любой
                                    компании
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/obi-delitsya-rezultatami-pervogo-issledovaniya-s-happy-job/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/658950080" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 5 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/evroplan.jpg" alt="Европлан" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">Европлан</div>
                            <div class="case-description">
                                <p>
                                    Happy Job – настоящие профессионалы HR-исследований. Они
                                    работают практически со всем рынком трендмейкеров.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/kompaniya-evroplan-o-svoyom-opyte-raboty-s-vovlechyonnostyu-intervyu-s-anait-govorinoy/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/586641979" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>
            <!-- 6 -->
            <li class="cases-item">
                <article class="cases-card case">
                    <img src="/img/cases/aliexpress.jpg" alt="aliexpress" class="case-picture">
                    <div class="case-body">
                        <div class="case-content">
                            <div class="case-title">AliExpress</div>
                            <div class="case-description">
                                <p>
                                    Благодаря глубокой диагностике и внедрению основных
                                    рекомендаций платформы мы смогли существенно улучшить свои
                                    показатели и значительно повысить качество внутреннего и
                                    внешнего сервиса.
                                </p>
                            </div>
                        </div>
                        <footer class="case-footer">
                            <a href="/hr-blog/AliExpress-rasskazyvaet-ob-effektivnom-opyte-sotrudnichestva-s-kompaniey-Happy-Inc-/" class="case-link">Читать</a>
                            <a href="https://vimeo.com/637913619" data-fancybox="video-gallery" class="case-video" title="Смотреть видео"><b class="play-icon"></b></a>
                        </footer>
                    </div>
                </article>
            </li>

        </ul>
    </div>
</section>

<!-- endrender cases/02-list-->

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

<section class="free-test">
    <div class="free-test-scheme">
        <!-- photo -->
        <figure class="free-test-photo">
            <img src="/img/happy-job/images/2022/alexey-klochkov.png" alt="Алексей Клочков, основатель Happy Job" loading="lazy">
        </figure>

        <!-- content -->
        <article class="free-test-content">
            <h2 class="form-title">Протестируйте <span>бесплатно!</span></h2>
            <p>Получите полный доступ.</p>
            <ol>
                <li>Заполните форму заявки, и с вами свяжется консультант, чтобы обсудить старт исследования.
                </li>
                <li>Всё, что нужно предоставить — это список email-адресов сотрудников.</li>
                <li>Вы сможете оценить все возможности платформы и подготовиться к полноценному использованию.
                </li>
            </ol>
            <p style="margin-bottom: 0;">Количество респондентов в тестовой группе должно составлять не более 10% от общего числа
                                         сотрудников, но не менее 5 и не более 100 человек.</p>
        </article>

        <!-- cite -->
        <cite class="free-test-cite">
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



            <form id="free-demo" class="c-form" data-parsley-validate>
                <h2>Заголовок по умолчанию</h2>

                <ul class="c-form-list">
                    <li class="c-form-item">
                        <input type="hidden" name="form-id" value="free-demo">
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
                </ul>
                <button id="free-demo-submit" type="submit" class="button-default">Отправить</button>

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
                                $("#free-demo").find('input[type="text"], input[type="phone"], textarea').val('');
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
                    $('#free-demo input').on('input', function() {
                        const Form = $('#free-demo').parsley();
                    });


                    // 2
                    $('#free-demo-submit').on('click', function(event){
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
                        const formNodeID ='free-demo';
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
            </script>		</div>
    </div>
</section>

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

<footer class="page-footer">
    <div class="page-footer-wrapper">
        <div class="page-footer-container">
            <ul class="page-footer-menu footer-menu">
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Продукты</strong>
                    <ul class="footer-submenu">

                        <li class="footer-submenu-item -logos">
                            <a href="/" class="footer-submenu-logo" title="Happy Job">
                                <img src="/img/happy-job/images/logo.svg" style="max-width: 163px;"><br>
                                <small>Исследование и развитие вовлеченности и лояльности</small>
                            </a>
                        </li>


                        <li class="footer-submenu-item -logos">
                            <a href="/international/" class="footer-submenu-logo" title="Happy Job International">
                                <img src="/img/happy-job/images/logo-international.svg" style="max-width: 163px;"><br>
                                <small>Вовлеченность по любой методике</small>
                            </a>
                        </li>


                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/happy-service/" class="footer-submenu-logo" title="Happy Service">
                                <img src="/img/logo/happy_service.svg" style="max-width: 213px;"><br>
                                <small>Взаимодействие подразделений. Качество внутренних процессов.</small>
                            </a>
                        </li>


                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/feedbackx/" class="footer-submenu-logo" title="FeedbackX">
                                <img src="/img/logo/feedbackx.svg" style="max-width: 156px;"><br>
                                <small>Опрос компетенций 360<sup>0</sup>. Карьерные треки и Performance</small>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Решения</strong>
                    <ul class="footer-submenu">

                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/oproskin/" class="footer-submenu-logo" title="">
                                <img src="/img/logo/oproskin.svg" style="max-width: 140px;"><br>
                                <small>150+ шаблонов корпоративных исследований с быстрым запуском.</small>
                            </a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/climate_survey/" class="footer-submenu-link">Climate Survey</a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/evp/" class="footer-submenu-link">Бренд работодателя и EVP</a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/corporate_culture/" class="footer-submenu-link">Уровень корпоративной культуры</a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/dms/" class="footer-submenu-link">Исследование удовлетворенности ДМС</a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/safety/" class="footer-submenu-link">Безопасность и охрана <br>труда</a>
                        </li>


                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/change/" class="footer-submenu-link">Восприятие и оценка успеха изменений</a>
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
                    <div class="contacts-wrapper">							<ul class="footer-submenu">

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
                                <a target="_blank" href="https://yandex.ru/maps/213/moscow/house/varshavskoye_shosse_118k1/Z04YcAZoSUYGQFtvfXpycHtkZw==/?indoorLevel=1&ll=37.618031%2C55.631773&z=17">
                                    <span itemprop="postalCode">117587</span>, Россия,
                                    <span itemprop="addressLocality">Москва</span>, <br>
                                    <span itemprop="streetAddress">Варшавское ш., 118к1, 10эт</span>
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
                    <img src="/img/happy-job/images/benchmarks.png" loading="lazy" alt="Бенчмарки">
                    <br>Бенчмарки
                </a>
            </li>
            <li class="footer-link">
                <a href="https://happy-inc.ru/infopages/" target="_blank">
                    <img src="/img/happy-job/images/safety.png" loading="lazy" alt="О безопасности платформы">
                    <br>О безопасности платформы
                </a>
            </li>
            <li class="footer-link">
                <a href="https://reestr.digital.gov.ru/reestr/310009/?sphrase_id=1856359" target="_blank">
                    <img src="/img/happy-job/images/reestr.png" loading="lazy" alt="В реестре разработчиков ПО">
                    <br>В реестре разработчиков ПО
                </a>
            </li>
            <li class="footer-link">
                <a href="https://pd.rkn.gov.ru/operators-registry/operators-list/?id=77-18-012108" target="_blank">
                    <img src="/img/happy-job/images/reestr-operator.png" loading="lazy" alt="В реестре операторов перс. данных">
                    <br>В реестре операторов перс. данных
                </a>
            </li>
            <li class="footer-link">
												<span>
							<img src="/img/happy-job/images/iso.png" loading="lazy" alt="Стандарты качества">
							<br>Стандарты качества
						</span>
            </li>
            <li class="footer-link">
                <a href="/about-us/" target="_blank">
                    <img src="/img/happy-job/images/about-us.png" loading="lazy" alt="О команде Happy Job.">
                    <br>О команде Happy Job.
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
                                                                                    2024.
            </p>
            <a href="/privacy-policy/" class="copyright__policy">Политика конфиденциальности</a>
        </div>
        <div class="sitemap">
            <a href="/sitemap/">Карта сайта</a>
        </div>
    </div>
</footer>

<!-- webinar-girl -->
<div class="hellogirl" style="visibility: hidden; opacity: 0;">
    <span class="hellogirl__close"></span>
    <div class="hellogirl__content">
        <div class="hellogirl__title">Как сформировать «реальный» сильный HR-бренд </div>
        <div class="hellogirl__img">
            <img src="/img/webin_mini.jpg" alt="Как сформировать «реальный» сильный HR-бренд ">
        </div>
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
</body>
</html>
