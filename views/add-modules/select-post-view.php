<?php

use app\models\db\Blog;

?>
<style>
    .post-select-area {
        height: 300px;
        overflow: auto;
        border: 1px solid #e9e9e9;
    }

    table {
        width: 100%;
    }

    td {
        border: 1px solid lightgrey;
        padding: 8px;
    }

    tr:nth-child(2n) {
        background-color: #f0f0f0;
    }

</style>
<div class="one-module">
    <div class="row">
        <div class="col-md-12">
            Блок с подстановкой статьи (выбор статьи)
        </div>
        <div class="col-md-11">
            <?php
            if (is_array($value)) {
                $post_id = (int)$value[0];
            } else {
                $post_id = $value;
            }

            $post_module = Blog::find()->where(['id' => $post_id])->one();
            ?>
            <div style="border: 1px solid #b3b3b3; border-radius: 10px;">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../../..<?=$post_module['image']?>" style="width: 100%; border-radius: 8px 0 0 8px">
                    </div>
                    <div class="col-md-9" style="padding-top: 25px">
                        <input type="hidden" name="modules[][post-module-ids][]" value="<?=$post_module['id']?>">
                        <b>«<?=$post_module['title']?>»</b><br><br>
                        <?=$post_module['small_description']?>
                    </div>
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