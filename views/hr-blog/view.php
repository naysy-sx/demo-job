<?php

use app\assets\FixStylesAsset;
use app\models\checks\Pages;
use app\models\data\Data;
use app\models\db\Blog;
use app\models\personal\Editor;
use app\models\Time;
use app\modules\admin\controllers\BlogController;
use app\modules\admin\models\PostArticleModule;
use app\widgets\RandBlogPostWidget;

$role_editor = new Editor;

// если статья скрыта - проверяем, кто ее смотрит.
// если не админ/редактор - выкидываем на главную блога
if ($data["publish"] == 0 && !$role_editor->check()) {
    header("Location: /hr-blog/");
    exit;
}

$this->title = $data['title']; //  . ' | HR блог Happy Job'

// файл сформирован из стилей отсюда. но, при потключении, часть отваливается
// $this->registerCssFile('..//css/hr-blog.css');

FixStylesAsset::register($this); // стили для выравнивания наполнения из админки
?>
    <style>
        .image-border {
            border-radius: 14px;
        }

        #article .its-simple.-tablet {
            width: 900px;
            margin: 40px -60px;
        }

        .its-simple {
            width: 900px;
            position: relative;
            background-color: var(--c-offer);
            margin: 6rem 0 4rem -60px;
        }

        .article-table-of-contents__title {
            margin-top: 20px;
            font-weight: 700;
        }

        .navigation-list {
            display: flex;
            margin: 24px 0 0 0;
            padding: 0;
            align-items: center;
        }

        .img-description {
            text-align: center;
            font-size: 14px;
            font-weight: 500;
        }

        #article p, li {
            margin: 0 0 20px 0;
            padding: 0;
        }

        #article li {
            margin: 0 0 15px 0;
            line-height: 24px;
        }

        #article h2 {
            font-size: 30px;
            margin: 50px 0 30px 0;
            line-height: 1.2;
            font-weight: 300;
            padding: 0 !important;
            color: #1d2127;
        }

        #article h3 {
            font-size: 25px;
            line-height: 1.2;
            font-weight: 300;
            padding: 0;
            color: #1d2127;
            margin: 40px 0 20px 0;
        }

        #article h5 {
            margin: 20px 0 40px;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 600;
            color: #777;
        }

        #article ul,
        #article ol {
            padding: 0 0 0 40px;
            margin: 0 0 20px 0;
        }

        #article figure {
            text-align: center;
            margin: 40px 0;
        }

        #article .desktop-img img {
            max-width: 800px !important;
        }

        #article .its-simple.-tablet {
            width: 900px;
            margin: 40px -60px;
        }

        #article .its-simple-row {
            max-width: 992px;
        }

        #article .its-simple figure {
            margin: 0;
        }

        #article .its-simple img {
            max-width: 100%;
            margin: 0;
            width: auto;
        }

        #article .its-simple-content > p:first-child {
            font-size: 24px;
            margin: 0;
        }

        #article .carousel {
            padding: 0;
            margin: 40px 0 62px;
        }

        #article .carousel figure {
            margin: 0;
        }

        #article .carousel__slide {
            padding: 0;
            width: 100%;
        }

        #article .carousel + h5 {
            font-size: 14px;
            line-height: 1.5;
            font-weight: 600;
            color: #777;
        }

        #article .carousel .carousel__dots {
            padding: 0;
            margin: 0;
        }

        #article .carousel .carousel__dot {
            padding: 0;
            margin: 0;
        }

        #article .b-link-img {
            margin: 40px 0;
        }

        #article .b-link-img img {
            margin: 0;
        }

        #article .b-link-img__item {
            margin-bottom: 0;
        }

        #article blockquote {
            margin: 40px 0;
        }


        @media (max-width: 992px) {
            #article .its-simple.-tablet {
                width: calc(100% + 62px);
                margin: 40px -32px;
            }

            #article .its-simple .its-simple-content img {
                max-width: 250px;
                margin: 0 auto;
                position: relative;
                left: 20px;
            }

            #article .its-simple-content > p:first-child {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            #article .its-simple.-tablet {
                width: calc(100% + 40px);
                margin: 40px -20px;
            }

            #article h2 {
                font-size: 24px !important;
                margin: 23px 0 16px 0 !important;
            }

            #article h3 {
                font-size: 20px !important;
                margin: 16px 0 !important;
            }

            #article ol, #article ul {
                padding: 0 0 0 16px;
            }

            #article .green-link {
                margin-bottom: 40px;
            }
        }

        ul.f-carousel__dots {
            padding: 0 !important;
        }
    </style>
    <div id="super-title-wrap">
        <picture>
            <source srcset="../../<?=$data['up_images']?>" type="image/webp">
            <img src="../../<?=$data['up_images']?>">
        </picture>
    </div>

    <main class="container blog">
        <div class="row">
            <div class="col">
                <div class="node-article-blog" id="article">
                    <div class="back_link">
                        <!-- <a href="/hr-blog/" id="pagebackhr">
                          <i class="customicon-long-arrow-left"></i>
                          Назад к разделу
                        </a> -->
                    </div>
                    <div id="blog-title-wrap">
                        <div class="title">
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

                                    .container.blog .breadcrumbs-list > li {
                                        list-style-type: none;
                                    }

                                    .breadcrumbs-list:after {
                                        content: '';
                                        display: block;
                                        position: absolute;
                                        width: 3rem;
                                        height: 3rem;
                                        right: 0;
                                        top: 0;
                                        background: rgb(255, 255, 255);
                                        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.25253851540616246) 13%, rgba(255, 255, 255, 0.6979166666666667) 29%, rgba(255, 255, 255, 0.8463760504201681) 48%, rgba(255, 255, 255, 0.8995973389355743) 65%, rgba(255, 255, 255, 1) 83%);
                                    }

                                    .breadcrumbs-item {
                                        list-style-type: none;
                                        margin: 0;
                                        white-space: nowrap;
                                    }

                                    .breadcrumbs-item span[itemprop="name"] {
                                        overflow: visible;
                                        height: auto;
                                        display: inline;
                                        font-size: 14px;
                                        font-weight: 400;
                                    }


                                    .breadcrumbs-item > span[itemprop="name"] {
                                        color: #393A3C;
                                    }

                                    .breadcrumbs-item + .breadcrumbs-item:before {
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

                                    .breadcrumbs-link {
                                        color: #61c13a !important;
                                        text-decoration: none !important;
                                        border-bottom: none !important;
                                    }

                                    .breadcrumbs-link:hover {
                                        color: var(--c-link);
                                        text-decoration: none;
                                    }

                                    .breadcrumbs-link > span[itemprop="name"] {
                                        color: #61c13a;
                                        font-size: 14px;
                                    }

                                    .breadcrumbs-item span[itemprop="name"] br {
                                        display: none;
                                    }

                                    @media (min-width: 841px) {
                                        .breadcrumbs-links-contacts,
                                        .breadcrumbs-links-metodika {
                                            cursor: pointer;
                                        }

                                        .breadcrumbs-links-contacts > span[itemprop="name"],
                                        .breadcrumbs-links-metodika > span[itemprop="name"] {
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

                                        .breadcrumbs-item + .breadcrumbs-item:before {
                                            transform: translate(-3px, -3px);
                                        }

                                        .breadcrumbs-item > span[itemprop="name"] {
                                            transform: translate(2px, 1px);
                                        }

                                        .breadcrumbs-item:last-child {
                                            display: none;
                                        }
                                    }

                                    .container.blog h2 {
                                        padding: 50px 0 0 0 !important;
                                    }

                                    li {
                                        margin-bottom: 12px !important;
                                    }

                                    h2 {
                                        font-size: 30px;
                                        line-height: 1.2;
                                        font-weight: 300;
                                        margin: 50px 0 30px 0;
                                        padding: 0;
                                        color: #1d2127;
                                    }

                                    h3 {
                                        font-size: 25px;
                                        line-height: 1.2;
                                        font-weight: 300;
                                        margin: 40px 0 20px 0;
                                        padding: 0;
                                        color: #1d2127;
                                    }

                                    p {
                                        margin: 0 0 20px 0;
                                        padding: 0;
                                    }

                                    .f-carousel__slide.is-selected {
                                        margin-bottom: 12px;
                                    }
                                </style>
                                <nav class="breadcrumbs">
                                    <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                                        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                            itemtype="https://schema.org/ListItem">

                                            <a href="/" style="" class="breadcrumbs-link"
                                               title="Вернуться на главную страницу" itemprop="item">
                                                <span itemprop="name" style="">Главная</span>
                                            </a>

                                            <meta itemprop="position" content="1">
                                        </li>

                                        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                            itemtype="https://schema.org/ListItem">
                                            <a href="/hr-blog/" class="breadcrumbs-link" title="HR-блог" style=""
                                               itemprop="item">
                                                <span itemprop="name">HR-блог</span>
                                            </a>
                                            <meta itemprop="position" content="2">
                                        </li>

                                        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                                            itemtype="https://schema.org/ListItem">
                                        <span itemprop="name">
                                            <?=$data['h1']?>
                                        </span>
                                            <meta itemprop="position" content="3">
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <h1>
                                <?=$data['h1']?>
                            </h1>

                        </div>
                    </div>
                    <div class="group-fields-subtitle">
                        <div class="field-author">
                            Happy Job
                        </div>
                        <div class="field-date-created">
                            <?php
                            echo Time::getHumanSimpleDate($data['publish_date']);
                            ?>
                        </div>
                    </div>

                    <?php
                    // если включено "отображать краткое описание до блока с контентом - выводим
                    if ($data['hide_small_desc_in_start_content'] == 0){
                        echo $data['small_description'];
                        echo "<br><br>";
                    }

                    $text_blocks = [];

                    // модули
                    if (isset($data['modules']) && mb_strlen($data['modules']) > 1) {
                        $module_types = json_decode($data['modules']);
                    } else {
                        $module_types = [];
                    }

                    // пересборка для пролинковки контента (для осдержания статьи)
                    foreach ($module_types as $m_key => $module_type) {
                        foreach ($module_type as $type => $module_data) {
                            if ($type == 'textarea') {
                                $text_blocks[$m_key] = $module_data[0];
                            }
                        }
                    }

                    //todo: содержание статьи

                    $post_articles                    = new PostArticleModule;
                    $post_articles->first_text_block  = $data['content'];
                    $post_articles->other_text_blocks = $text_blocks;

//                    echo '<pre>';
//                    var_dump($post_articles->get());
//                    echo '</pre>';

                    //   todo: открыть - echo $post_articles->get()['articles'];
                    //
                    //                    foreach ($post_articles->get()['contents'] as $content_block){
                    //                        var_dump($content_block);
                    //                    }

                    // содержание статьи (уровень 1 - дефолтный блок)
                    $content = BlogController::setHrefsForTitles($data['content']); // BlogController::getArticles($data['content'])['html'] .

                    // контент
                    echo $content;

                    foreach ($module_types as $m_key => $module_type) {
                        foreach ($module_type as $type => $module_data) {
                            if ($type == 'textarea') {
                                echo $module_data[0];
                            }
                            if ($type == 'wide_textarea') {
                                echo "<div style='width: 901px; margin-left: -60px;'>";
                                echo nl2br($module_data[0]);
                                echo "</div>";
                            }
                            if ($type == 'hr') {
                                echo '<hr>';
                            }
                            if ($type == 'slider') {
                                if (!empty($module_data->images->image1)) {
                                    ?>
                                    <div class="f-carousel slider-by-editor" id="myCarousel">
                                        <div class="f-carousel__viewport">
                                            <div class="f-carousel__track" id="lightgallery">
                                                <div class="f-carousel__slide lightbox"
                                                     href="../../<?=$module_data->images->image1->old_patch?>">
                                                    <img src="../../<?=$module_data->images->image1->old_patch?>"
                                                         style="width: 100%;" class="image-border"
                                                         alt="<?=$module_data->images->alt?>">
                                                </div>

                                                <?php if (!empty($module_data->images->image2->old_patch)) { ?>
                                                    <div class="f-carousel__slide lightbox"
                                                         href="../../<?=$module_data->images->image2->old_patch?>">
                                                        <img src="../../<?=$module_data->images->image2->old_patch?>"
                                                             style="width: 100%;" class="image-border"
                                                             alt="<?=$module_data->images->alt?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if (!empty($module_data->images->image3->old_patch)) { ?>
                                                    <div class="f-carousel__slide lightbox"
                                                         href="../../<?=$module_data->images->image3->old_patch?>">
                                                        <img src="../../<?=$module_data->images->image3->old_patch?>"
                                                             style="width: 100%;" class="image-border"
                                                             alt="<?=$module_data->images->alt?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if (!empty($module_data->images->image4->old_patch)) { ?>
                                                    <div class="f-carousel__slide lightbox"
                                                         href="../../<?=$module_data->images->image4->old_patch?>">
                                                        <img src="../../<?=$module_data->images->image4->old_patch?>"
                                                             style="width: 100%;" class="image-border"
                                                             alt="<?=$module_data->images->alt?>">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            if ($type == 'images') {
                                require_once "MobileDetect.php";
                                $mobile = new Mobile_Detect;

                                if ($mobile->isMobile()) {
                                    echo "<figure class='mobile-img'>";
                                    echo "<img src='../../{$module_data->images->img3->old_patch}' alt='{$module_data->data->$m_key->mobile_img_alt}' title='{$module_data->data->$m_key->mobile_img_alt}' class='image-border'>";
                                    echo "<figcaption>{$module_data->data->$m_key->mobile_img_description}</figcaption></figure>";
                                } else {
                                    echo "<figure class='desktop-img'><div>";

                                    echo "<img src='../../{$module_data->images->img1->old_patch}' alt='{$module_data->data->$m_key->comp_img_alt}' title='{$module_data->data->$m_key->comp_img_alt}' style='max-width: 100%;";

                                    if (mb_strlen($module_data->images->img1->width) > 1) {
                                        echo "width: {$module_data->images->img1->width}px; ";
                                    } else {
                                        echo " width: 100%; ";
                                    }

                                    echo "' class='image-border'></div>";

                                    echo "<figcaption>{$module_data->data->$m_key->comp_img_description}</figcaption></figure>";
                                }
                            }
                            if ($type == 'post-module-ids') {
                                $post_id     = $module_data[0][0];
                                $post_module = Blog::find()->where(['id' => $post_id])->one();

                                ?>
                                <div class="b-link-img">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img alt="" class="img-fluid" data-entity-type="" data-entity-uuid=""
                                                 src="<?=$post_module['image']?>" title=""></div>
                                        <div class="col-md-8 b-link-img__item">
                                            <p>Также по теме</p>
                                            <div class="b-link-text">
                                                <div class="b-link-text__item">
                                                    <?=$post_module['small_description']?>
                                                </div>
                                                <a class="read-more learn-more" href="/<?=$post_module['url']?>/">
                                                    <span class="circle">
                                                      <span class="arrow icon">0</span>
                                                    </span>
                                                    <span class="button-text"> Подробнее </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if ($type == 'video') {
                                ?>
                                <?php
                                $full_url = $module_data[0];
                                $video_id = end(explode('/', $full_url));
                                ?>
                                <iframe src="https://player.vimeo.com/video/<?=$video_id?>?h=a953363e7a" width="800"
                                        height="500" frameborder="0" style="border-radius: 20px"
                                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            <?php }
                            if ($type == 'get-demo') {
                                ?>
                                <section class="its-simple -tablet">
                                    <div class="its-simple-row">
                                        <figure class="its-simple-image">
                                            <img src="/img/happy-job/images/devicebanner/4.png"
                                                 alt="платформа для опросов">
                                        </figure>
                                        <div class="its-simple-content">
                                            <p>Узнать мнение <br>сотрудников</p>
                                            <img src="/img/happy-job/images/devicebanner/text.svg" alt="просто!">
                                            <button type="button" class="button button-default button-modal"
                                                    data-fancybox="" data-src="#main-modal"
                                                    href="javascript:;" onclick="ym(46152993,'reachGoal','sta_button')">
                                                Получить демо
                                            </button>
                                        </div>
                                    </div>
                                </section>
                            <?php }
                        }
                    }
                    ?>

                    <style>
                        .author-img-border {
                            border: 1px solid #e7e7e7;
                        }
                    </style>



                    <?php if (!$data['hide_author']) { ?>
                    <div class="field-about-author">
                        <div class="title-block-views-block-blog-block-2">Об авторе</div>
                        <div block="block-views-block-blog-block-2">
                            <div class="views-id-blog">
                                <div class="views-view-row">
                                    <div class="views-row">
                                        <?php if ($data['author'] == 'anastasiya') { ?>
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-avatar">
                                                    <div class="field-content">
                                                        <img src="../../img/post-author-anastasiya.jpg" width="93"
                                                             style="border-radius: 50%" class="author-img-border"
                                                             alt="Имя, описание автора статьи (?)">
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-name">
                                                    <span class="field-content">Happy Job</span>
                                                </div>
                                                <div class="views-field views-field-field-description">
                                                    <div class="field-content">
                                                        <a href="/aleksey-klochkov/" target="_blank">Анастасия
                                                                                                     Максимова</a>,
                                                                                                                  директор
                                                                                                                  по
                                                                                                                  маркетингу
                                                                                                                  и PR
                                                                                                                  HR-Tech
                                                                                                                  компании
                                                                                                                  Happy
                                                                                                                  Inc.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($data['author'] == 'alice') { ?>
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-avatar">
                                                    <div class="field-content">
                                                        <img src="../../img/post-author-alice.jpg" width="93"
                                                             style="border-radius: 50%" class="author-img-border"
                                                             alt="Имя, описание автора статьи (?)">
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-name">
                                                    <span class="field-content">Happy Job</span>
                                                </div>
                                                <div class="views-field views-field-field-description">
                                                    <div class="field-content">
                                                        <a href="/aleksey-klochkov/" target="_blank">Алиса Ничкова</a>,
                                                                                                                      руководитель
                                                                                                                      отдела
                                                                                                                      контента
                                                                                                                      HR-Tech
                                                                                                                      компании
                                                                                                                      Happy
                                                                                                                      Inc.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($data['author'] == 'marina') { ?>
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-avatar">
                                                    <div class="field-content">
                                                        <img src="../../img/post-author-marina.jpg" width="93"
                                                             style="border-radius: 50%" class="author-img-border"
                                                             alt="Имя, описание автора статьи (?)">
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-name">
                                                    <span class="field-content">Happy Job</span>
                                                </div>
                                                <div class="views-field views-field-field-description">
                                                    <div class="field-content">
                                                        <a href="/aleksey-klochkov/" target="_blank">Марина Белова</a>,
                                                                                                                      редактор
                                                                                                                      HR-Tech
                                                                                                                      компании
                                                                                                                      Happy
                                                                                                                      Inc.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($data['author'] == 'olga') { ?>
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-avatar">
                                                    <div class="field-content">
                                                        <img src="../../img/post-author-olga.jpg" width="93"
                                                             style="border-radius: 50%" class="author-img-border"
                                                             alt="Имя, описание автора статьи (?)">
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-name">
                                                    <span class="field-content">Happy Job</span>
                                                </div>
                                                <div class="views-field views-field-field-description">
                                                    <div class="field-content">
                                                        <a href="/aleksey-klochkov/" target="_blank">Ольга Удальцова</a>,
                                                                                                                        руководитель
                                                                                                                        проектного
                                                                                                                        отдела
                                                                                                                        HR-Tech
                                                                                                                        компании
                                                                                                                        Happy
                                                                                                                        Inc.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="views-row-container">
                                                <div class="views-field views-field-field-avatar">
                                                    <div class="field-content">
                                                        <img src="https://happy-job.ru/img/spiker.png" width="93"
                                                             height="100"
                                                             alt="Алексей Клочков, ведущий эксперт HR и управленческого консалтинга России">
                                                    </div>
                                                </div>
                                                <div class="views-field views-field-name">
                                                    <span class="field-content">Happy Job</span>
                                                </div>
                                                <div class="views-field views-field-field-description">
                                                    <div class="field-content">
                                                        <a href="/aleksey-klochkov/" target="_blank">Алексей Клочков</a>,
                                                                                                                        ведущий
                                                                                                                        эксперт
                                                                                                                        в
                                                                                                                        области
                                                                                                                        управленческого
                                                                                                                        консалтинга
                                                                                                                        России
                                                                                                                        и
                                                                                                                        руководитель
                                                                                                                        HR-Tech
                                                                                                                        компании
                                                                                                                        Happy
                                                                                                                        Inc.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>



                    <div class="share-buttons">
                        <style>
                            .share-buttons {
                                padding: 20px 0 30px;
                            }

                            .share-buttons__list {
                                padding: 0;
                                margin: 0;
                                display: flex;
                                align-items: center;
                            }

                            .container.blog .share-buttons__list {
                                padding: 0 !important;
                                list-style-type: none !important;
                            }

                            .container.blog ul.share-buttons__list > li {
                                list-style: none !important;
                            }

                            main ul.share-buttons__list > li {
                                margin-bottom: 0 !important;
                            }

                            .share-buttons__item {
                                margin-right: 15px;
                            }

                            .share-buttons__item:last-child {
                                margin-right: 0;
                            }

                            .share-buttons__icon {
                                width: 35px;
                                height: 35px;
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                overflow: hidden;
                                background-color: #fff;
                                border-radius: 50%;
                                overflow: hidden;
                                transition: transform 0.3s;
                            }

                            .share-buttons__icon:hover {
                                transform: scale(1.05);
                            }

                            .share-buttons__vk .share-buttons__icon {
                                background-image: url("data:image/svg+xml,%3Csvg%20fill%3D%22%2361c13b%22%20width%3D%2250px%22%20height%3D%2250px%22%20viewBox%3D%220%200%2020%2020%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M10%20.4C4.698.4.4%204.698.4%2010s4.298%209.6%209.6%209.6%209.6-4.298%209.6-9.6S15.302.4%2010%20.4zm3.692%2010.831s.849.838%201.058%201.227c.006.008.009.016.011.02.085.143.105.254.063.337-.07.138-.31.206-.392.212h-1.5c-.104%200-.322-.027-.586-.209-.203-.142-.403-.375-.598-.602-.291-.338-.543-.63-.797-.63a.305.305%200%200%200-.095.015c-.192.062-.438.336-.438%201.066%200%20.228-.18.359-.307.359h-.687c-.234%200-1.453-.082-2.533-1.221-1.322-1.395-2.512-4.193-2.522-4.219-.075-.181.08-.278.249-.278h1.515c.202%200%20.268.123.314.232.054.127.252.632.577%201.2.527.926.85%201.302%201.109%201.302a.3.3%200%200%200%20.139-.036c.338-.188.275-1.393.26-1.643%200-.047-.001-.539-.174-.775-.124-.171-.335-.236-.463-.26a.55.55%200%200%201%20.199-.169c.232-.116.65-.133%201.065-.133h.231c.45.006.566.035.729.076.33.079.337.292.308%201.021-.009.207-.018.441-.018.717%200%20.06-.003.124-.003.192-.01.371-.022.792.24.965a.216.216%200%200%200%20.114.033c.091%200%20.365%200%201.107-1.273a9.718%209.718%200%200%200%20.595-1.274c.015-.026.059-.106.111-.137a.266.266%200%200%201%20.124-.029h1.781c.194%200%20.327.029.352.104.044.119-.008.482-.821%201.583l-.363.479c-.737.966-.737%201.015.046%201.748z%22%2F%3E%3C%2Fsvg%3E");
                            }

                            .share-buttons__telegram .share-buttons__icon {
                                background-image: url("data:image/svg+xml,%3Csvg%20fill%3D%22%2361c13b%22%20width%3D%2250px%22%20height%3D%2250px%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22m12%200c-6.627%200-12%205.373-12%2012s5.373%2012%2012%2012%2012-5.373%2012-12c0-6.627-5.373-12-12-12zm5.894%208.221-1.97%209.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446%201.394c-.14.18-.357.295-.6.295-.002%200-.003%200-.005%200l.213-3.054%205.56-5.022c.24-.213-.054-.334-.373-.121l-6.869%204.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196%201.006.128.832.941z%22%2F%3E%3C%2Fsvg%3E");
                            }

                            .share-buttons__whatsapp .share-buttons__icon {
                                background-image: url("data:image/svg+xml,%3Csvg%20width%3D%2250px%22%20height%3D%2250px%22%20viewBox%3D%220%200%2048%2048%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M24%2048C10.7452%2048%200%2037.2548%200%2024C0%2010.7452%2010.7452%200%2024%200C37.2548%200%2048%2010.7452%2048%2024C48%2037.2548%2037.2548%2048%2024%2048ZM24.7911%2037.3525C32.6595%2037.3493%2039.059%2030.9483%2039.0621%2023.0815C39.0637%2019.2683%2037.5806%2015.6828%2034.8862%2012.9854C32.1918%2010.2879%2028.6086%208.80165%2024.7909%208.8C16.9248%208.8%2010.5228%2015.2017%2010.5196%2023.0702C10.5186%2025.5855%2011.1757%2028.0405%2012.4246%2030.2048L10.4%2037.6L17.9653%2035.6155C20.0498%2036.7524%2022.3967%2037.3517%2024.7852%2037.3525H24.7911Z%22%20fill%3D%22%2361c13b%22%2F%3E%0A%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M18.3159%2033.0319L13.8265%2034.2096L15.0248%2029.8324L14.7428%2029.3836C13.5554%2027.4951%2012.9283%2025.3124%2012.9292%2023.0711C12.9318%2016.5311%2018.2529%2011.2104%2024.7958%2011.2104C27.964%2011.2115%2030.9422%2012.4469%2033.1817%2014.689C35.4212%2016.9311%2036.6538%2019.9112%2036.6526%2023.0807C36.6499%2029.6212%2031.3289%2034.9424%2024.7911%2034.9424H24.7863C22.6578%2034.9415%2020.5702%2034.3697%2018.749%2033.289L18.3159%2033.0319ZM31.9808%2026.4751C31.8917%2026.3264%2031.654%2026.2372%2031.2974%2026.0586C30.9408%2025.8801%2029.1877%2025.0176%2028.8608%2024.8985C28.534%2024.7795%2028.2961%2024.7201%2028.0585%2025.0769C27.8208%2025.4339%2027.1374%2026.2372%2026.9294%2026.4751C26.7214%2026.7131%2026.5133%2026.7429%2026.1569%2026.5644C25.8003%2026.3859%2024.6513%2026.0094%2023.2893%2024.7945C22.2292%2023.8489%2021.5135%2022.6813%2021.3055%2022.3243C21.0975%2021.9673%2021.2834%2021.7743%2021.4619%2021.5965C21.6223%2021.4367%2021.8185%2021.1799%2021.9968%2020.9718C22.1751%2020.7636%2022.2345%2020.6148%2022.3533%2020.377C22.4722%2020.1389%2022.4128%2019.9307%2022.3236%2019.7522C22.2345%2019.5737%2021.5213%2017.8185%2021.2242%2017.1045C20.9347%2016.4092%2020.6408%2016.5034%2020.4219%2016.4924C20.2141%2016.482%2019.9762%2016.4798%2019.7385%2016.4798C19.5008%2016.4798%2019.1144%2016.569%2018.7876%2016.926C18.4607%2017.283%2017.5395%2018.1457%2017.5395%2019.9008C17.5395%2021.656%2018.8173%2023.3516%2018.9956%2023.5896C19.1739%2023.8276%2021.51%2027.4293%2025.0871%2028.9739C25.9379%2029.3413%2026.602%2029.5607%2027.12%2029.725C27.9742%2029.9965%2028.7516%2029.9582%2029.3659%2029.8663C30.0511%2029.764%2031.4756%2029.0038%2031.7729%2028.1709C32.0699%2027.3378%2032.0699%2026.6238%2031.9808%2026.4751Z%22%20fill%3D%22%2361c13b%22%2F%3E%0A%3C%2Fsvg%3E");
                            }

                            @media (max-width: 767px) {
                                .share-buttons__list {
                                    justify-content: center;
                                }

                                .share-buttons__item {
                                    margin-right: 25px;
                                }

                                .share-buttons__icon {
                                    width: 35px;
                                    height: 35px;
                                }
                            }
                        </style>
                        <div class="share-buttons__container">
                            <ul class="share-buttons__list">
                                <?php $url = Data::getUrl(); ?>
                                <li class="share-buttons__item">
                                    <a href="https://vkontakte.ru/share.php?url=<?=$url?>&amp;title=<?=$data['small_description']?>"
                                       class="share-buttons__link share-buttons__vk" title="Поделиться в Vk"
                                       rel="nofollow"
                                       target="_blank">
                                        <div class="share-buttons__icon"></div>
                                    </a>
                                </li>
                                <li class="share-buttons__item">
                                    <a href="https://t.me/share/url?url=<?=$url?>&amp;text=<?=$data['small_description']?>"
                                       class="share-buttons__link share-buttons__telegram" title="Поделиться в Telegram"
                                       rel="nofollow" target="_blank">
                                        <div class="share-buttons__icon"></div>
                                    </a>
                                </li>
                                <li class="share-buttons__item">
                                    <a href="https://api.whatsapp.com/send?text=<?=$url?>"
                                       class="share-buttons__link share-buttons__whatsapp" title="Поделиться в Whatsapp"
                                       rel="nofollow" target="_blank">
                                        <div class="share-buttons__icon"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <div class="container views-id-blog">
        <h2 class="title-block-views-block-articles-block-1">Вам может понравиться</h2>
        <div class="views-view-row">
            <?=RandBlogPostWidget::widget()?>
        </div>

        <div class="read-more-blog"><a href="/hr-blog/">Читать другие материалы <span>></span></a></div>
    </div>

    <style type="text/css">
        .text-align-center {
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        h2 {
            font-size: 30px;
            font-weight: 300;
            padding: 50px 0 30px 0;
            color: #1d2127;
        }

        .node-article-blog {
            max-width: 900px;
            margin: 0 auto 30px;
            padding: 0 0 32px;
            border-radius: 8px;
            background: #fff;
        }

        .node-article-blog figure {
            margin: 1em 0;
        }

        .node-article-blog .group-fields-subtitle {
            margin-bottom: 30px;
        }

        .node-article-blog .group-fields-subtitle .field-author {
            font-size: .875em;
            margin-bottom: 5px;
        }

        .node-article-blog .group-fields-subtitle .field-date-created {
            font-size: .875em;
        }

        #super-title-wrap {
            margin: 0px 0 0px 0;
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        #super-title-wrap img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .back_link a {
            font-weight: 500;
            position: relative;
            line-height: 30px;
            display: inline-block;
            font-size: 19px;
            color: #61c13a;
            border: none !important;
        }

        .breadcrumbs {
            padding: 1rem 0 0.7rem;
        }

        @media (min-width: 556px) {
            .node-article-blog {
                padding: 10px 20px 20px;
                box-shadow: 0 0 15px 0 rgba(0, 0, 0, .18);
            }

            .node-article-blog figure {
                margin: 1em 40px;
            }
        }

        @media (min-width: 768px) {
            #super-title-wrap {
                height: 250px;
            }

            .node-article-blog {
                padding: 20px 30px 37px;
            }

            #super-title-wrap.height700 {
                height: auto;
            }

            #super-title-wrap.height700 img {
                position: relative;
            }
        }

        @media (min-width: 992px) {
            #super-title-wrap {
                height: 350px;
            }

            .node-article-blog {
                padding: 20px 60px 37px;
            }

            #super-title-wrap.height700 {
                height: 38vw;
            }

            #super-title-wrap.height700 img {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                object-fit: cover;
                object-position: left top;
            }

            #super-title-wrap.height700.center img {
                object-position: center;
            }

            #super-title-wrap.center img {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                object-fit: cover;
                object-position: center;
            }
        }

        @media (min-width: 1200px) {
            #super-title-wrap {
                height: 25.65vw;
            }
        }

        @media (max-width: 575px) {
            .breadcrumbs {
                padding: 0.5rem 0;
            }
        }

        @media (max-width: 767px) {
            .container.blog p {
                text-align: left;
            }

            .node-article-blog h1, .container.blog h2 {
                word-break: break-word;
            }

            .tablewrap {
                width: 100%;
                overflow-x: auto;
            }
        }

        @media (max-width: 812px) {
            #super-title-wrap img {
                position: relative !important;
            }
        }

    </style>
    <style>
        .container.blog p:not(.jumbo), .container.blog ul, .container.blog ol {
            color: #212529;
        }

        .container.blog ul > li {
            list-style: disc;
            padding-left: 0;
        }

        .container.blog ul, .container.blog ol {
            padding-left: 40px;
        }

        .container.blog strong {
            font-weight: 700;
            padding: 0;
            border-radius: 0;
            line-height: 1;
            display: inline;
            background: none;
        }

        .container.blog p.jumbo strong {
            font-weight: bolder;
        }

        .container.blog a,
        .container.blog a:hover,
        .container.blog a:focus {
            color: #61c13a;
            /* border-bottom: 1px solid; */
            text-decoration: none;
        }

        .container.blog a:hover,
        .container.blog a:focus {
            color: #96d07e;
            text-decoration: underline;
        }


        .container.blog h2,
        .container.blog h3,
        .container.blog h4,
        .container.blog h5,
        .container.blog h6 {
            font-weight: 400;
            padding: 0em 0;
            margin-top: 0;
            margin-bottom: 0.5rem;

        }

        .container.blog h2 {
            font-size: 30px;
            font-weight: 300;
            padding: 50px 0 30px 0;
            color: #1d2127;
        }

        .container.blog h3 {
            font-size: 25px;
            font-weight: 300;
            margin: 40px 0 20px 0;
            color: #1d2127;
        }

        .container.blog .field-subtitle h3 {
            margin-top: -3px;
        }

        .container.blog h4 {
            font-size: 18px;
            font-weight: 500;
        }

        .container.blog h5 {
            font-size: 16px;
            font-weight: 500;
        }

        .container.blog h6 {
            font-size: 16px;
        }

        .container.blog ul {
            counter-reset: ullist;
        }

        .container.blog ol {
            counter-reset: item;
        }

        .container.blog ul > li > ul,
        .container.blog ul > li > ol,
        .container.blog ol > li > ul,
        .container.blog ol > li > ol {
            margin-top: 10px;
        }

        .container.blog li {
            padding-left: 24px;

        }


        .container.blog ol > li {
            list-style-type: decimal;
            counter-increment: item;
            position: relative;
            padding-left: 0;
            margin-bottom: 0;
        }


        .container.blog ol > li:before {
            display: none;
            width: 1em;
            padding-right: 0.5em;
            font-weight: bold;
            text-align: right;
            content: counter(item) ".";
            position: absolute;
            left: 0;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 1px solid #dee2e6;
            border-top: 0px solid #dee2e6;
            background: #edf0f7;
        }


        table th {
            border-top: 0px solid #dee2e6;
        }

        .table {
            margin: 3.5em 0 3em;
        }


        .table td,
        .table th {
            padding: .75rem 1.35rem;
        }


        .container.blog img {
            max-width: 100%;
            /* margin: 3em 0; */
            margin: 0;
            height: auto;
        }

        .page-type-news .container.blog img {
            margin: 0 0 2em;
        }


        img.img_with_radius {
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        main blockquote::before,
        main blockquote::after {
            opacity: 0.9;
            color: rgb(24, 23, 21);
            display: block;
            left: 0px;
            top: -10px;
            content: "“";
            font-size: 80px;
            font-style: normal;
            line-height: 1;
            position: absolute;
            font-family: Georgia, serif;
        }

        main blockquote::before {
        }

        main blockquote::after {
            left: auto;
            right: 0px;
            top: auto;
            bottom: 10px;
            content: "”";
        }

        main blockquote,
        main blockquote p {
        }

        main blockquote {
            font-style: italic;
            font-size: 1.1em;
            line-height: 1.3;
            opacity: 0.9;
            color: #181715;
            padding: 0 60px;
            position: relative;
            text-align: center;
            margin: 0 0 1rem;
        }

        main blockquote p {
            padding: 0;
            font-size: 1em;
            line-height: 1.3;
        }

        main blockquote p:last-child {
            margin-bottom: 0rem;
        }


        main img {

        }

        main iframe {
            box-shadow: none;
            border-width: 0;
            max-width: 100%;
            /*width: 100%;*/
        }

        .b-link-img {
            margin: 50px 0 30px;
        }

        .b-link-img img {
            border-radius: 15px;
            box-shadow: 0 0 7px 0px rgb(0 0 0 / 20%);
            position: relative;
            z-index: 2;
        }

        .b-link-text:before {
            z-index: 0;
            right: -60px;
        }

        .b-link-text__item {
            position: relative;
        }

        .b-link-text .read-more {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
        }

        .b-link-text .read-more .circle .icon.arrow {
            font-size: 0 !important;
        }

        .b-link-text .read-more {
            border: none !important;
        }

        @media (max-width: 1200px) {
            .b-link-text .learn-more .circle {
                transition-duration: 0.25s;
            }

            .b-link-text .learn-more .button-text {
                transition-duration: 0.25s;
            }
        }

        @media (max-width: 992px) {
            .b-link-text:before {
                width: calc(100% + 135px);
                right: -30px;
            }
        }

        @media (max-width: 767px) {
            .b-link-img img {
                margin: 0 auto !important;
            }

            .b-link-img__item > p {
                display: none;
            }

            .b-link-text {
                overflow: hidden;
                margin: -30px -20px 0;
                padding: 40px 20px;
                text-align: center;
            }

            .b-link-text .read-more {
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
    <style>
        .views-view-row .views-field-field-prevu-foto a picture {
            display: block;
            height: 200px;
        }

        @media (max-width: 1200px) {
            #super-title-wrap {
                margin: 0px 0 0px 0;
            }
        }

        @media (max-width: 1200px) and (min-width: 990px) {
            .views-view-row .views-field-field-prevu-foto a picture {
                height: 182px;
            }
        }

        @media (max-width: 991px) {
            .views-view-row .views-field-field-prevu-foto a picture {
                height: 148px;
            }
        }

        @media (max-width: 767px) {
            .views-view-row .views-field-field-prevu-foto a picture {
                height: 151px;
            }
        }

        @media (max-width: 576px) {
            .views-view-row .views-field-field-prevu-foto a picture {
                height: 28.16vw;
            }
        }

        @media (max-width: 480px) {
            .views-view-row .views-field-field-prevu-foto a picture {
                height: auto;
            }
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($('#pagebackhr').length) {
                $('#pagebackhr').on('click', function (e) {
                    setCookie('blogback', currentArticle, 0);
                    if (document.referrer == '../../index.html') {
                        e.preventDefault();
                        window.history.back();
                    }
                });
            }
            var pageback = getCookie('pageback');
            if (pageback) {
                $('#pageback').attr('href', '/blog/?page=' + pageback)
                // setCookie('pageback', '', 0);
            }
            var pathname = document.location.pathname.split('../../index.html');
            var currentArticle = pathname[2];
            if (pathname[3]) {
                currentArticle += '/' + pathname[3];
            }
            if ($('.setheight700').length) {
                $('#super-title-wrap').addClass('height700');
                if ($('.setheight700.center').length) {
                    $('#super-title-wrap').addClass('center');
                }
            } else if ($('.setheadercenter').length) {
                $('#super-title-wrap').addClass('center');
            }

            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(";");
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == " ") c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }
        });

        if ($('.b-calculator:visible').length) window.addEventListener("resize", loadData, false);
        document.addEventListener("DOMContentLoaded", function () {
            if ($('.b-calculator:visible').length) loadData();
        });

        function loadData() {
            var step1 = document.getElementById("step-1");
            var step1Pos = step1.offsetTop + 100;

            var step2 = document.getElementById("step-2");
            var step2Pos = step2.offsetTop + 100;

            var step3 = document.getElementById("step-3");
            var step3Pos = step3.offsetTop + 100;

            var step4 = document.getElementById("step-4");
            var step4Pos = step4.offsetTop + 100;

            var step5 = document.getElementById("step-5");
            var step5Pos = step5.offsetTop + 100;

            var step6 = document.getElementById("step-6");
            var step6Pos = step6.offsetTop + 100;

            var step7 = document.getElementById("step-7");
            var step7Pos = step7.offsetTop + 100;

            var step8 = document.getElementById("step-8");
            var step8Pos = step8.offsetTop + 100;

            var step9 = document.getElementById("step-9");
            var step9Pos = step9.offsetTop + 100;

            var step10 = document.getElementById("step-10");
            var step10Pos = step10.offsetTop;

            var step11 = document.getElementById("step-11");
            var step11Pos = step11.offsetTop + 300;

            var step12 = document.getElementById("step-12");
            var step12Pos = step12.offsetTop + 200;

            var step13 = document.getElementById("step-13");
            var step13Pos = step13.offsetTop;

            var step14 = document.getElementById("step-14");
            var step14Pos = step14.offsetTop + 300;

            var step15 = document.getElementById("step-15");
            var step15Pos = step15.offsetTop;

            var calc = document.getElementById("calc-sum");
            var calcPos = calc.getBoundingClientRect().top;

            var container = document.querySelector(".node-article-blog");
            var containerTop = container.offsetTop;
            var containerLeft = container.getBoundingClientRect().right - 80;
            var containerBottom = container.getBoundingClientRect().bottom - 500;

            var blockCont = document.querySelector(".b-calculator");
            var endTitle = document.getElementById("endTitle");
            var endTitlePos = endTitle.offsetTop;
            blockCont.style.left = containerLeft + "px";

            var menu = document.querySelector(".page-header");
            var menuPosition = menu.getBoundingClientRect().bottom;

            document.addEventListener("scroll", function () {
                /* bag fix for IE11 */
                if (window.pageYOffset >= menuPosition) {
                    menu.style.top = "0px";

                    /* Калькулятор цены на node-159 */
                    if (pageYOffset > containerTop && pageYOffset < endTitlePos) {
                        blockCont.style.opacity = 1;
                        if (pageYOffset < step1Pos) calc.innerHTML = "0";
                        if (pageYOffset >= step1Pos) calc.innerHTML = "45 700";
                        if (pageYOffset >= step2Pos) calc.innerHTML = "54 700";
                        if (pageYOffset >= step3Pos) calc.innerHTML = "78 500";
                        if (pageYOffset >= step4Pos) calc.innerHTML = "131 600";
                        if (pageYOffset >= step5Pos) calc.innerHTML = "304 200";
                        if (pageYOffset >= step6Pos) calc.innerHTML = "369 200";
                        if (pageYOffset >= step7Pos) calc.innerHTML = "372 600";
                        if (pageYOffset >= step8Pos) calc.innerHTML = "385 300";
                        if (pageYOffset >= step9Pos) calc.innerHTML = "562 300";
                        if (pageYOffset >= step10Pos) calc.innerHTML = "567 500";
                        if (pageYOffset >= step11Pos) calc.innerHTML = "675 200";
                        if (pageYOffset >= step12Pos) calc.innerHTML = "681 000";
                        if (pageYOffset >= step13Pos) calc.innerHTML = "804 000";
                        if (pageYOffset >= step14Pos) {
                            calc.innerHTML = "981 400"; // 981 500
                        }
                        if (pageYOffset >= step15Pos) calc.innerHTML = "1 805 698";
                    } else {
                        blockCont.style.opacity = 0;
                    }
                    /* end  Калькулятор цены на node-159 */
                } else {
                    menu.style.top = "";

                    blockCont.style.opacity = 0;
                }
            });
        }

    </script><!-- endrender hr-blog/vse-o-loyalnosti-personala-chast-3-prodolzhayu-rabotat//--><!-- render common/footer-->
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
                        <?=\app\widgets\WebinarsNVideosWidget::widget()?>
                    </ul>
                </div>
            </section>
        </div>
        <footer class="section-footer">
            <a href="https://happy-inc.ru/video/" target="_blank" class="button-outline"
               onclick="ym(46152993,'reachGoal','look_all_videos')">
                Смотреть все видео
            </a>
        </footer>
    </section>

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
                                            <img class="single-video-image"
                                                 src="../../img/happy-job/reviews/vid_obi.jpg"
                                                 alt="Оценка вовлеченности персонала в OBI Россия"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/obi.png" loading="lazy" alt="">
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
                                                 src="../../img/happy-job/reviews/aliexpress-video_0.jpg"
                                                 alt="Как работают с персоналом в AliExpress"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/aliexpress-logo_0.png"
                                                     loading="lazy"
                                                     alt=""></div>
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
                                            <img class="single-video-image"
                                                 src="../../img/happy-job/reviews/rev_alfa.jpg"
                                                 alt="АльфаСтрахование – Отзыв о платформе Happy Job"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/alfa.png" loading="lazy" alt="">
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
                                            <img class="single-video-image"
                                                 src="../../img/happy-job/reviews/rev_evroplan.jpg"
                                                 alt="Развитие вовлеченности персонала в ЛК Европлан"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/europlan-1.png" loading="lazy"
                                                     alt="">
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
                                                                            href="https://vimeo.com/390686185"
                                                                            tabindex="0">
                                            <img class="single-video-image"
                                                 src="../../img/happy-job/reviews/rev_sky.jpg"
                                                 alt="Skyeng – Отзыв о платформе Happy Job"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/skyeng.svg" loading="lazy" alt="">
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
                                                                            href="https://vimeo.com/396639819"
                                                                            tabindex="0">
                                            <img class="single-video-image"
                                                 src="../../img/happy-job/reviews/rev_ingos_0.jpg"
                                                 alt="Ингосстрах – Отзыв о платформе Happy Job"><b
                                                    class="icon icon-play"></b>
                                        </a>
                                        <div class="single-video-wrapper">
                                            <div class="single-video-logo">
                                                <img src="../../img/happy-job/reviews/ingo_0.png" loading="lazy" alt="">
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

<?php
if (Pages::isPublish($data)) {
    echo $this->render("../layouts/_parts/closed_page_status.php");
}
