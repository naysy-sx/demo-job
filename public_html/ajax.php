<?php

use app\models\forms\FormModel;

require_once "../models/forms/FormModel.php";

// временный тест-лог для проверки поступающих данных
file_put_contents('testlog.txt', json_encode($_REQUEST));

$form = new FormModel;
$form->form_data = $_REQUEST;
echo $form->start();