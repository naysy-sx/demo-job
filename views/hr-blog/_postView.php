<?php
use app\models\BaseUrl;
?>
<div class="col-6 col-md-4 views-row">
    <div class="view-item">

        <a href="<?php
        if ($post['url'][0] == '/'){
            $post['url'] = substr($post['url'], 1, 999);
        }

        if ($post['url'][-1] == '/'){
            echo BaseUrl::getFull() . $post['url'];
        } else {
            echo BaseUrl::getFull() . $post['url'] . '/';
        }

        ?>">
            <div class="view-item__photo">
                <picture>
                    <source srcset="../<?=$post['image']?>" type="image/webp">
                    <img src="../<?=$post['image']?>" alt="<?=$post['title']?>"
                         title="<?=$post['title']?>" width="400" height="250">
                </picture>
            </div>
            <div class="view-content">
                <div class="view-item__title">
                    <?php echo explode('|', $post['title'])[0]; ?>
                </div>
                <div class="view-item__text">
                    <?=$post['small_description']?>
                </div>
            </div>
            <span class="view-item__link">Подробнее</span>
        </a>
    </div>
</div>