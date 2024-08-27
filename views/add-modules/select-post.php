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
            Выбор статьи
        </div>
        <div class="col-md-11">
            <input type="text" class="form-control post-search" placeholder="Поиск по URL или названию статьи"
                   style="margin: 10px 0; border: 1px solid #4ab1c3;">

            <div class="post-select-area">
                <table>
                    <tr>
                        <td class="text-center">Картинка</td>
                        <td>Название статьи</td>
                    </tr>
                    <?php
                    $hr_blog_posts = Blog::find()->orderBy(['id' => SORT_DESC])->asArray()->all();

                    foreach ($hr_blog_posts as $post) {
                        echo "<tr class='select-post' data-id='{$post['id']}'>";
                        echo "<td class='text-center'><img src='{$post['image']}' style='width: 100px;'></td>";
                        echo "<td>{$post['title']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
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