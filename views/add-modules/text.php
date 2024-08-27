<div class="one-module"> <!-- draggable="true" -->
    <div class="row">
        <div class="col-md-12">
            Обычный текстовый блок
        </div>
        <div class="col-md-11">
            <textarea class="form-control editor inp-<?=$r_key?>" name="modules[<?=$r_key?>][textarea][]"
                      data-type="textarea"><?=$value?></textarea>
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