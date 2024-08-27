<div style="border: 1px solid #b3b3b3; border-radius: 10px;">
    <div class="row">
        <div class="col-md-3">
            <img src="../../..<?=$post['image']?>" style="width: 100%; border-radius: 10px 0 0 10px">
        </div>
        <div class="col-md-9" style="padding-top: 25px">
            <input type="hidden" name="modules[][post-module-ids][]" value="<?=$post['id']?>">
            <b>«<?=$post['title']?>»</b><br><br>
            <?=$post['small_description']?>
        </div>
    </div>
</div>