<?php

use app\models\Photo;
use yii\bootstrap5\Html;
use yii\helpers\VarDumper;

// VarDumper::dump($images->photo, 10 , true); die;
// VarDumper::dump(Photo::find()->where(['event_id' => $model->id])->all(), 10 , true); die;

?>
<!-- Размер карточки -->
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $model->title?></li>
    <li class="list-group-item"><?= $model->discription?></li>
    <li class="list-group-item"><?= $model->count_seats?></li>
  </ul>
</div>
