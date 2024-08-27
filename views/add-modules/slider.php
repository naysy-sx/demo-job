<?php
$rand_arr_key = rand(10000, 99999);

//echo '<pre>';
//var_dump($value->images);
//exit;
?>
<div class="one-module">
    <div class="row">
        <div class="col-md-11">
            <b>Слайдер с картинками:</b><br><br>
            <div class="row">
                <div class="col-md-3">
                    Картинка №1
                    <div class="for-img-preview"></div>
                    <input type="file" name="slider[<?=$rand_arr_key?>][image1]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][slider][image1][old_patch]" class="final-path"
                           value="<?=$value->images->image1->old_patch?>">
                </div>
                <div class="col-md-3">
                    Картинка №2
                    <div class="for-img-preview"></div>
                    <input type="file" name="slider[<?=$rand_arr_key?>][image2]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][slider][image2][old_patch]" class="final-path"
                           value="<?=$value->images->image2->old_patch?>">
                </div>
                <div class="col-md-3">
                    Картинка №3
                    <div class="for-img-preview"></div>
                    <input type="file" name="slider[<?=$rand_arr_key?>][image3]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][slider][image3][old_patch]" class="final-path"
                           value="<?=$value->images->image3->old_patch?>">
                </div>
                <div class="col-md-3">
                    Картинка №4
                    <div class="for-img-preview"></div>
                    <input type="file" name="slider[<?=$rand_arr_key?>][image4]" class="form-control mod-imgs-file">
                    <input type="hidden" name="modules[<?=$rand_arr_key?>][slider][image4][old_patch]" class="final-path"
                           value="<?=$value->images->image4->old_patch?>">
                </div>
            </div>
            <div class="row" style="margin-top: 15px">
                <div class="col-md-6">
                    Подпись
                    <input type="text" class="form-control" name="modules[<?=$rand_arr_key?>][slider][description]" value="<?=$value->images->description?>">
                </div>
                <div class="col-md-6">
                    Alt / title
                    <input type="text" class="form-control" name="modules[<?=$rand_arr_key?>][slider][alt]" value="<?=$value->images->alt?>">
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