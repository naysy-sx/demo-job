<?php foreach ($posts as $post) { ?>
    <div class="col-6 col-md-4 views-row">
        <div class="views-row-container">
            <div class="views-field views-field-field-prevu-foto">
                <div class="field-content">
                    <a href="<?php
                    //        echo Url::to(['hr-blog/view', 'id' => $post['id'],]);

                    if ($post['url'][-1] == '/'){
                        echo '/' . $post['url'];
                    } else {
                        echo '/' . $post['url'] . '/';
                    }

                    ?>">
                        <img src="../../<?=$post['image']?>" alt="<?=$post['title']?>" title="<?=$post['title']?>"
                             width="400" height="250">
                    </a>
                </div>
            </div>
            <div class="views-field views-field-title">
                <span class="field-content">
                    <a href="/<?=$post['url']?>/"><?=$post['title']?></a>
                </span>
            </div>
            <div class="views-field views-field-field-anons">
                <div class="field-content">
                    <?=$post['small_description']?>
                </div>
            </div>
            <div class="views-field views-field-path">
                <span class="field-content">
                    <a href="/<?=$post['url']?>/">Подробнее</a>
                </span>
            </div>
        </div>
    </div>
<?php }