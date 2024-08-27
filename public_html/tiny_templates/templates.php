<?php
/**
 * Генерация шаблонов для tinyMCE редактора в админке
 * Доки: https://www.tiny.cloud/docs/plugins/opensource/template/
 */
$template[] = [
    'title'       => 'Также по теме',
    'description' => 'Wiki горизонтальная полоса с изображением',
    'content'     => '<div class="b-link-img">
			<div class="row">
				<div class="col-md-4">
					<img alt="Как выглядеть умным на совещании" class="img-fluid" data-entity-type="" data-entity-uuid="" src="/img/wiki/vovl_header_16.jpg" title="10 проверенных трюков"></div>
				<div class="col-md-8 b-link-img__item">
					<p>
Также по теме
</p>
					<div class="b-link-text">
						<div class="b-link-text__item">
							<span>
								<span>
									<span>
Об искусстве записи за коллегами во время совещания можно прочитать в статье
<strong>
											«У меня всё записано: как улучшить совещания с помощью протокола»
</strong>
									</span>
								</span>
							</span>
						</div>
						<a class="read-more learn-more" href="/hr-blog/u-menya-vsyo-zapisano-kak-uluchshit-soveschaniya-s-pomoschyu-protokola/">
							<span class="circle">
								<span class="arrow icon">
0
								</span>
							</span>
							<span class="button-text">
Подробнее
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>',
    //'url' => 'Первый шаблон',
];

//$template[] = [
//    'title'       => 'Wiki Видео, открытое',
//    'description' => 'Wiki Видео, открытое',
//    'content'     => '<p class="embed-responsive-custom embed-responsive-16by9">
//            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/712022696?hd=1&show_title=1&show_byline=1&show_portrait=0&fullscreen=1" allowfullscreen="allowfullscreen"></iframe>
//        </p>',
//];
//
//$template[] = [
//    'title'       => 'Wiki картинка справа',
//    'description' => 'Wiki картинка справа',
//    'content'     => '<div class="wiki__content-inner">
//            <div class="wiki__content-subtext">
//                <p>
//                    По статистике, лояльные сотрудники закрывают на 37% больше сделок, чем их нелояльные коллеги. Счастливые и продуктивные работники могут привлечь и сделать лояльными к бренду новых клиентов.
//                </p>
//
//                <p>
//                    Безучастные и пессимистично настроенные сотрудники вряд ли смогут качественно работать с клиентами. Если люди остаются недовольны общением с сотрудниками или оказанными услугами, они не вернутся повторно и не принесут дополнительную прибыль компании.
//                </p>
//            </div>
//
//            <img class="wiki__content-img" src="/img/wiki/chart-3.png" alt="">
//        </div>',
//];
//
//$template[] = [
//    'title'       => 'Wiki форма Остались вопросы?',
//    'description' => 'Wiki форма Остались вопросы?',
//    'content'     => '<form action="" class="wiki__form">
//            <div class="wiki__form-subtitle">
//                Остались вопросы?
//            </div>
//
//            <div class="wiki__form-wrapper">
//
//                <div class="wiki__form-text">
//                    Оставьте свои данные и мы свяжемся с вами в течение одного рабочего дня.
//                </div>
//
//                <button class="wiki__form-btn" type="button">Отправить заявку</button>
//            </div>
//        </form>',
//];
//
//$template[] = [
//    'title'       => 'Wiki картинки, плитка',
//    'description' => 'Wiki картинки, плитка',
//    'content'     => '<div class="formaticons">
//            <div class="formaticons__item">
//                <div class="formaticons__img">
//                    <img
//                        src="/img/p/survey-formats/4.png"
//                        alt="Вопросы исследования"
//                    />
//                </div>
//                <div class="formaticons__text">
//                    Вопросы по одной <br />теме/проблеме
//                </div>
//            </div>
//            <div class="formaticons__item">
//                <div class="formaticons__img">
//                    <img
//                        src="/img/p/survey-formats/2.png"
//                        alt="Календарь исследований"
//                    />
//                </div>
//                <div class="formaticons__text">
//                    Несколько раз в год. <br />Исследование длится <br />от 1 до 2
//                    недель
//                </div>
//            </div>
//            <div class="formaticons__item">
//                <div class="formaticons__img">
//                    <img
//                        src="/img/p/survey-formats/3.png"
//                        alt="Время прохождения опроса"
//                    />
//                </div>
//                <div class="formaticons__text">
//                    Время прохождения <br />опроса: 1-2 минуты
//                </div>
//            </div>
//        </div>',
//];
//
//$template[] = [
//    'title'       => 'Wiki видео, модальное открытие',
//    'description' => 'Wiki видео, модальное открытие',
//    'content'     => '<a class="wiki__content-video" data-fancybox="video-gallery" href="https://vimeo.com/558544165/">
//            <img class="wiki__content-preview" src="/img/wiki/558544165.jpg"
//                 alt="Экономическая польза оценки лояльности">
//
//            <svg class="wiki__content-play" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
//                <g filter="url(#filter0_b_806_73)">
//                    <rect width="76.3348" height="76.3348" rx="38.1674" fill="#E0E0E0" fill-opacity="0.8" />
//                </g>
//                <path
//                    d="M57.359 37.3917C58.2975 37.9336 58.2975 39.2882 57.359 39.8301L30.294 55.4561C29.3554 55.9979 28.1823 55.3206 28.1823 54.2369L28.1823 22.9849C28.1823 21.9012 29.3554 21.2238 30.294 21.7657L57.359 37.3917Z"
//                    fill="white" />
//                <defs>
//                    <filter id="filter0_b_806_73" x="-28.1558" y="-28.1558" width="132.646" height="132.646"
//                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
//                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="14.0779" />
//                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_806_73" />
//                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_806_73" result="shape" />
//                    </filter>
//                </defs>
//            </svg>
//        </a>',
//];
//
//$template[] = [
//    'title'       => 'Wiki ссылка на скачивание',
//    'description' => 'Wiki ссылка на скачивание',
//    'content'     => '<a class="" href="/files/" download>какой-то текст</a>',
//];
//
//$template[] = [
//    'title'       => 'Wiki слайдер',
//    'description' => 'Wiki слайдер',
//    'content'     => '<div class="wiki__swiper">
//            <div class="wiki__slider swiper">
//                <ul class="wiki__slider-list swiper-wrapper">
//                    <li class="wiki__slider-item swiper-slide">
//                        <img class="wiki__slider-img" src="/img/wiki/faq-slider.png"
//                             alt="Экономическая польза оценки лояльности">
//                    </li>
//                    <li class="wiki__slider-item swiper-slide">
//                        <img class="wiki__slider-img" src="/img/wiki/faq-slider.png"
//                             alt="Экономическая польза оценки лояльности">
//                    </li>
//                    <li class="wiki__slider-item swiper-slide">
//                        <img class="wiki__slider-img" src="/img/wiki/faq-slider.png"
//                             alt="Экономическая польза оценки лояльности">
//                    </li>
//
//                    <li class="wiki__slider-item swiper-slide">
//                        <img class="wiki__slider-img" src="/img/wiki/faq-slider.png"
//                             alt="Экономическая польза оценки лояльности">
//                    </li>
//                </ul>
//            </div>
//            <div class="wiki__slider-pagination"></div>
//
//            <div class="wiki__fixed">
//                <a class="wiki__fixed-exit">
//                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
//                        <path d="M12 36L36 12M36 36L12 12" stroke="#EAEAEC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
//                    </svg>
//                </a>
//
//                <a class="wiki__fixed-download">
//                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
//                        <path d="M32.8809 17.8008C40.0809 18.4208 43.0209 22.1208 43.0209 30.2208V30.4808C43.0209 39.4208 39.4409 43.0008 30.5009 43.0008H17.4809C8.54094 43.0008 4.96094 39.4208 4.96094 30.4808V30.2208C4.96094 22.1808 7.86094 18.4808 14.9409 17.8208" stroke="#EAEAEC" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
//                        <path d="M24 4V29.76" stroke="#EAEAEC" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
//                        <path d="M30.7008 25.3008L24.0008 32.0008L17.3008 25.3008" stroke="#EAEAEC" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
//                    </svg>
//                </a>
//            </div>
//        </div>',
//];

//$template[] = [
//    'title'       => 'Тест',
//    'description' => 'Тест-шаблон',
//    'content'     => '
//    <div style="width: 100%; background-color: #61c13a; color: white; border: 0; border-radius: 20px">
//        <div style="padding: 15px">
//            Тест шаблон
//        </div>
//    </div>',
//];

$template[] = [
    'title'       => 'Узнать мнение сотрудников просто',
    'description' => 'Блок',
    'url'         => '../../../tiny_templates/get_demo.php',
];

$template[] = [
    'title'       => 'Галерея',
    'description' => 'Bootstrap галерея',
    'url'         => '../../../tiny_templates/gallery.php',
];

echo json_encode($template);