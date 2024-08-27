<?php foreach ($data as $video){ ?>
    <li class="splide__slide">
        <div class="single-video-card">
            <small style="display: none;"><?=date('Y-m-d', $video['datetime'])?></small>
            <figure class="single-video-picture">
                <a class="single-video-link" data-fancybox="footer-videos"
                   href="https://vimeo.com/<?=$video['vimeo']?>">
                    <img class="single-video-image" src="../../img/video/previews/<?=$video['image']?>.jpg"
                         alt="Вовлечённость в вовлечённость">
                </a>
                <figcaption class="single-video-caption">
                    <?=$video['title']?>
                </figcaption>
            </figure>
        </div>
    </li>
<?php }