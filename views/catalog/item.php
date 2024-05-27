<?php

use app\models\Photo;
use yii\bootstrap5\Html;
use yii\helpers\VarDumper;

$images = Photo::find()->where(['event_id' => $model->id])->one();
// VarDumper::dump($images->photo, 10 , true); die;
// VarDumper::dump(Photo::find()->where(['event_id' => $model->id])->all(), 10 , true); die;

?>
<!-- Размер карточки -->
<div class="card m-4" style="width: 30rem;"> 
<!-- Работа с изображением -->
    <div style="display: flex; align-items:center; height: 17rem; overflow: hidden">
        <?= Html::a(Html::img('/img/hor/'.$images->photo, ['class' => 'card-img-top']), ['view','id' => $model->id]) ?>
    </div>
    <!-- Содердимое карточки -->
  <div class="card-body">
    <p class="card-title d-flex justify-content-center"><b><?= $model->title?></b> • от <?= $model->price_ticket?>р  </p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>