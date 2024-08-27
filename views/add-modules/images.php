<?php
$site_addr = $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["SERVER_NAME"];

$rand_arr_key = rand(10000, 99999);

$keys = [];

$value = (array)$value;
unset($value['status']);

// находим все ключи
foreach ($value as $key => $data) {
    $keys[] = $key;
}

?>
<style>
    .adm-card {
        border: 1px solid #efefef;
        padding: 21px 10px !important;
        border-radius: 8px;
        box-shadow: 0 0 14px -10px black;
        margin: 1px;
    }

    .locker {
        border: 1px solid #efefef;
    }

    .images-module {
        height: 235px;
    }
</style>

<div class="one-module">
    <div class="row">
        <div class="col-md-11">
            <div class="row adm-card">
                <div class="col-md-12">
                    Блок с картинками под разные устройства
                    <br><br>
                </div>

                <div class="col-md-4 mod-imgs-c">
                    <label>Для компьютера</label>
                    <div class="for-img-preview"></div>
                    <input type="file" name="images[<?=$rand_arr_key?>][comp]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][images][img1][old_patch]" class="final-path"
                           value="<?=$value['images']->img1->old_patch?>">
                    <br>
                    <label>Подпись</label>
                    <input type="text" name="images[<?=$rand_arr_key?>][comp_img_description]"
                           value="<?=$value['data']->$r_key->comp_img_description?>"
                           class="form-control mod-imgs-desc mod-imgs-desc-first">
                    <br>
                    <label>Alt / title</label>
                    <input type="text" name="images[<?=$rand_arr_key?>][comp_img_alt]"
                           value="<?=$value['data']->$r_key->comp_img_alt?>"
                           class="form-control mod-imgs-alt mod-imgs-alt-first">
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Ширина картинки (пусто = стандартно)</label>
                            <input type="text" class="form-control" name="modules[<?=$rand_arr_key?>][images][img1][width]" value="<?=$value['images']->img1->width?>">
                        </div>
                    </div>

                    <!--                    <label>Title</label>-->
                    <!--                    <input type="text" name="images[-->
                    <?php // echo$rand_arr_key?><!--][comp_img_title]"-->
                    <!--                           value="--><?php // echo$value['data']->$r_key->comp_img_title?><!--"-->
                    <!--                           class="form-control mod-imgs-title mod-imgs-title-first">-->
                </div>
                <!--                <div class="col-md-4 mod-imgs-t"-->
                <!--                     style="border-left: 1px solid #efefef; border-right: 1px solid #efefef;">-->
                <!--                    <label>Для планшета</label>-->
                <!--                    <div class="for-img-preview"></div>-->
                <!--                    <input type="file" name="images[-->
                <?php // echo$rand_arr_key?><!--][pad]" class="form-control mod-imgs-file">-->
                <!--                    <input type="hidden" name="modules[-->
                <?php // echo$rand_arr_key?><!--][images][img2][old_patch]" class="final-path"-->
                <!--                           value="--><?php // echo$value['images']->img2->old_patch?><!--">-->
                <!--                    <br>-->
                <!--                    <label>Подпись</label>-->
                <!--                    <input type="text" name="images[-->
                <?php // echo$rand_arr_key?><!--][pad_img_description]"-->
                <!--                           value="--><?php // echo$value['data']->$r_key->pad_img_description?><!--"-->
                <!--                           class="form-control mod-imgs-desc">-->
                <!--                    <br>-->
                <!--                    <label>Alt</label>-->
                <!--                    <input type="text" name="images[--><?php // echo$rand_arr_key?><!--][pad_img_alt]"-->
                <!--                           value="--><?php // echo$value['data']->$r_key->pad_img_alt?><!--"-->
                <!--                           class="form-control mod-imgs-alt">-->
                <!--                    <br>-->
                <!--                    <label>Title</label>-->
                <!--                    <input type="text" name="images[--><?php // echo$rand_arr_key?><!--][pad_img_title]"-->
                <!--                           value="--><?php // echo$value['data']->$r_key->pad_img_title?><!--"-->
                <!--                           class="form-control mod-imgs-title">-->
                <!--                </div>-->
                <div class="col-md-4 mod-imgs-m">
                    <label>Для мобилки</label>
                    <div class="for-img-preview"></div>
                    <input type="file" name="images[<?=$rand_arr_key?>][mobile]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][images][img3][old_patch]" class="final-path"
                           value="<?=$value['images']->img3->old_patch?>">
                    <br>
                    <label>Подпись</label>
                    <input type="text" name="images[<?=$rand_arr_key?>][mobile_img_description]"
                           value="<?=$value['data']->$r_key->mobile_img_description?>"
                           class="form-control mod-imgs-desc">
                    <br>
                    <label>Alt / title</label>
                    <input type="text" name="images[<?=$rand_arr_key?>][mobile_img_alt]"
                           value="<?=$value['data']->$r_key->mobile_img_alt?>"
                           class="form-control mod-imgs-alt">
                    <br>
                    <!--                    <label>Title</label>-->
                    <!--                    <input type="text" name="images[-->
                    <?php // echo$rand_arr_key?><!--][mobile_img_title]"-->
                    <!--                           value="--><?php // echo$value['data']->$r_key->mobile_img_title?><!--"-->
                    <!--                           class="form-control mod-imgs-title">-->
                </div>
            </div>

        </div>
        <div class="col-md-1" style="padding-top: 28px;">
            <span class="del-module-line" style="color: red;">Удалить</span>
            <br><br>
            <span class="cut-div" style="color: darkorange">Вырезать блок</span>
        </div>
    </div>
</div>

<div style="text-align: center" class="paste-module-area">
    <hr>
    <span class="get-module-here">Вставить скопированный блок сюда</span>
    <hr>
</div>