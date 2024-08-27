<li class="blog-articles-item">
    <article class="blog-article">
        <picture class="blog-article-picture">
            <source srcset="../<?=$post['image']?>" media="(orientation: landscape)">
            <img src="../<?=$post['image']?>" alt="">
        </picture>
        <div class="blog-article-body">
            <header class="blog-article-header">
                <ul class="tags flex flex-row vertical-center">
                    <li class="tag-item">
                        <a href="#" class="tag-link">#вовлеченность</a>
                    </li>
                    <li class="tag-item">
                        <a href="#" class="tag-link">#обучение</a>
                    </li>
                </ul>
                <h2 class="blog-article-title">
                    <?php echo explode('|', $post['title'])[0]; ?>
                </h2>
            </header>
            <div class="blog-article-content">
                <p>
                    <?=$post['small_description']?>
                </p>
            </div>
            <div class="blog-article-footer">
                <ul>
                    <li>
                        <time>07 фев 2024</time>
                    </li>
                    <li>3 мин</li>
                </ul>
            </div>
        </div>
    </article>
</li>