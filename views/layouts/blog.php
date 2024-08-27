<?php

use app\assets\BlogAsset;

/* @var $this \yii\web\View */
/* @var $content string */

BlogAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Блог</title>
  <?php $this->head() ?>
  <script src="/static/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<?php
  echo $this->render('_parts/_header_blog');
?>

<!-- PAGE -->
<?= $content ?>
<!-- /PAGE -->


<?php $this->endBody() ?>
</body>
<?php echo $this->render('_parts/_form'); ?>

</html>
<?php $this->endPage() ?>
