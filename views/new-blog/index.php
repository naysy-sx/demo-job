<?php
$js = <<< ZZZZZ
(function ($) {
    $(".get-page").click(function (e) {
        var page = $(this).data('page');
        $(".get-page").removeClass('active');
        $(this).addClass('active');
        
        $.get("/new-blog/ajax-get-posts/", {page}, function (res) {
            $('.blog-articles').html(res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);
?>
<style>
    .get-page{
        cursor: pointer;
        font-size: 21px;
    }
    .active{
        color: #62c13b;
        font-weight: 700;
    }
</style>
<div class="hr-blog">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mobileMenuButton = document.getElementById("mobile-menu-button");
            const body = document.querySelector("body");

            mobileMenuButton.addEventListener("click", function (event) {
                toggleClass(event, "is-active", body, "menu-show");
            });

            function toggleClass(
                event,
                classTitle,
                additionalElement,
                additionalClass,
            ) {
                const element = event.currentTarget;
                const classes = element.classList;
                classes.toggle(classTitle);

                if (additionalElement) {
                    additionalElement.classList.toggle(additionalClass);
                }
            }
        });
    </script>
    <main class="blog-main">
        <section class="blog-main-breadcrumbs">
            <div class="container">
                <div class="blog-breadcrumbs">
                    <ul class="breadcrumbs flex flex-row vertical-center list-reset">
                        <li class="breadcrumbs-item">
                            <a>Главная</a>
                        </li>
                        <li class="breadcrumbs-item">
                            <span>Блог</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="blog-main-intro">
            <div class="container">
                <div class="blog-intro">
                    <h1 class="blog-intro-title">Блог для HR и руководителей</h1>
                    <p class="blog-intro-subtitle">
                        Все об оценке и развитии вовлеченности и лояльности в компании
                    </p>
                    <form class="blog-search">
                        <div class="blog-search-switcher" id="form-switch"></div>
                        <div class="blog-search-row">
                            <button type="submit">⌕</button>
                            <input type="search" placeholder="Поиск по блогу"/>
                        </div>
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const formSwitch = document.getElementById("form-switch");
                            formSwitch.addEventListener("click", toggleClass);

                            function toggleClass() {
                                const classes = this.classList;
                                classes.toggle("active");
                            }
                        });
                    </script>
                </div>
            </div>
        </section>
        <section class="blog-main-types">
            <div class="container">
                <ul class="types-list flex flex-row vertical-center list-reset">
                    <li class="types-list-item">
                        <a href="#articles" class="types-list-link is-active">Статьи</a>
                    </li>
                    <li class="types-list-item">
                        <a href="#articles" class="types-list-link">СМИ</a>
                    </li>
                    <li class="types-list-item">
                        <a href="#articles" class="types-list-link">Видео</a>
                    </li>
                    <li class="break"></li>
                    <li class="types-list-item">
                        <a href="#articles" class="types-list-link">Кейсы</a>
                    </li>
                    <li class="types-list-item">
                        <a href="#articles" class="types-list-link">Методика</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="blog-main-tags">
            <div class="container">
                <ul class="tags-list flex flex-row vertical-center list-reset">
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox" checked/>
                            <span>Вовлеченность</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Удовлетворенность</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Лояльность</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>eNPS</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Автоматизация</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Продуктивность</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Мотивация</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Текучесть</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Выгорание</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Оценка персонала</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Опросы и анкетирование</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Обратная связь</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Карьера</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Work-life balance</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Платформа Happy Job</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <input type="checkbox"/>
                            <span>Руководитель</span>
                        </label>
                    </li>
                    <li class="tags-list-item">
                        <label>
                            <span>Сбросить параметры</span>
                        </label>
                    </li>

                </ul>
            </div>
        </section>
        <section class="blog-main-articles">
            <div class="container">
                <ul class="blog-articles">
                    <!--  1  -->
                    <li class="blog-articles-item -wide">
                        <article class="blog-article">
                            <picture class="blog-article-picture">
                                <source
                                        srcset="
										https://happy-job.ru/img/hr-blog/69-kult-toksichnoj-produktivnosti-na-rabote/cover.svg
									"
                                        media="(orientation: landscape)"
                                />
                                <img
                                        src="https://happy-job.ru/img/hr-blog/69-kult-toksichnoj-produktivnosti-na-rabote/cover.svg"
                                        alt=""
                                />
                            </picture>
                            <div class="blog-article-body">
                                <header class="blog-article-header">
                                    <span class="blog-button -blog-label">Новое</span>
                                    <ul class="tags flex flex-row vertical-center">
                                        <li class="tag-item">
                                            <a href="#" class="tag-link">#вовлеченность</a>
                                        </li>
                                        <li class="tag-item">
                                            <a href="#" class="tag-link">#обучение</a>
                                        </li>
                                    </ul>
                                    <h2 class="blog-article-title">
                                        Автоматизация HR-процессов и например еще текст в 3 может
                                        быть строки??
                                    </h2>
                                </header>
                                <div class="blog-article-content">
                                    <p>
                                        Автоматизация HR-процессов может принести значительные
                                        выгоды компании, включая увеличение производительности,
                                        сокращение затрат и повышение удовлетворенности сотрудников.
                                    </p>
                                </div>
                                <div class="blog-article-footer">
                                    <ul>
                                        <li>
                                            <time>06 фев 2024</time>
                                        </li>
                                        <li>15 мин</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>

                    <?php
                    foreach ($posts as $post) {
                        echo $this->render('_postView', [
                            'post' => $post,
                        ]);
                    } ?>
                </ul>

                <div style="text-align: center; margin-top: 35px">
                    <?php
                    // js-ом при клике меняем active у линков страниц и аяксом тянем новые посты
                    $i     = 1;
                    $pages = round($posts_count / $posts_page_limit);

                    while ($i < $pages) {
                        echo "&nbsp;&nbsp;<span class='get-page' data-page='{$i}'>{$i}</span>&nbsp;&nbsp;";

                        $i++;
                    }
                    ?>
                </div>

            </div>
        </section>
        <section class="blog-main-footer">
            <div class="container">
                <div class="main-footer">
                    <h2>Читайте также</h2>
                    <a href="#" class="btn">Материалы по другим продуктам Happy Inc.</a>
                    <a href="#" class="btn">Журнал о жизни на работе</a>
                </div>
            </div>
        </section>
    </main>
</div>