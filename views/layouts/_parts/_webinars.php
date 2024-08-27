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
        <div class="webinar-videos swiper2">
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