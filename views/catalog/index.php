<?php

use app\models\Category;
use app\models\event;
use yii\bootstrap5\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\rbac\Item;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\CatalogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ближайшие события в Санкт-Петербурге';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <!-- H1 Главный текст на странице / заголовок -->
    <h1 class="d-flex justify-content-center" style="margin-top:3rem;"><?= Html::encode($this->title) ?></h1>

    <p>
        <? // Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) 
        ?>
    </p>
    <div class="d-flex justify-content-center flex-column mb-4" style="margin-left:4.5vw">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    <?  
    // получение данных для отображения карточек одежды
    $dataProviderConcert = new \yii\data\ActiveDataProvider([
        'query' => Event::find()->where(['category_id' => 1, 'status_id' => 2]),
        'pagination' => false, // Отключаем пагинацию, чтобы отобразить все карточки
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProviderConcert,
        'itemOptions' => ['class' => 'item'],
        'layout' => "<h2 style='margin-left:2.25rem; ' id='Concert'>Концерты</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    <?  
    // получение данных для отображения карточек одежды
    $dataProviderExhibition = new \yii\data\ActiveDataProvider([
        'query' => Event::find()->where(['category_id' => 2, 'status_id' => 2]),
        'pagination' => false, // Отключаем пагинацию, чтобы отобразить все карточки
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProviderExhibition,
        'itemOptions' => ['class' => 'item'],
        'layout' => "<h2 style='margin-left:2.25rem;' id='Exhibition'>Выставки</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    <?  
    // получение данных для отображения карточек одежды
    $dataProviderTheaters = new \yii\data\ActiveDataProvider([
        'query' => Event::find()->where(['category_id' => 3, 'status_id' => 2]),
        'pagination' => false, // Отключаем пагинацию, чтобы отобразить все карточки
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProviderTheaters,
        'itemOptions' => ['class' => 'item'],
        'layout' => "<h2 style='margin-left:2.25rem;' id='Theaters'>Театры</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    <?  
    // получение данных для отображения карточек одежды
    $dataProviderPerformances = new \yii\data\ActiveDataProvider([
        'query' => Event::find()->where(['category_id' => 4, 'status_id' => 2]),
        'pagination' => false, // Отключаем пагинацию, чтобы отобразить все карточки
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProviderPerformances,
        'itemOptions' => ['class' => 'item'],
        'layout' => "<h2 style='margin-left:2.25rem;' id='Performances'>Спектакли</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    <?  
    // получение данных для отображения карточек одежды
    $dataProviderFestivals = new \yii\data\ActiveDataProvider([
        'query' => Event::find()->where(['category_id' => 5, 'status_id' => 2]),
        'pagination' => false, // Отключаем пагинацию, чтобы отобразить все карточки
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProviderFestivals,
        'itemOptions' => ['class' => 'item'],
        'layout' => "<h2 style='margin-left:2.25rem;' id='Festivals'>Фестивали</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    </div>
    <div class="d-flex item-align-center justify-content-center align-items-center" style="background-color: #f2f2f2; height:25rem; border-radius: 5rem; flex-direction:column; width: 1600px; margin-left:25px">
        <div class="d-flex gap-5">
            <div class="d-flex" style="flex-direction: column; justify-content:space-between">
                <p>Главные события недели — у вас на почте.<br>Подписываясь, вы принимаете условия рассылок</p>
                <form action="">
                    <input type="email" placeholder="Ваша почта" style="border: none; height: 2.3rem; border-radius: 1rem; padding-left:1rem;">
                    <button class="btn btn-dark" style="border-radius: 1rem;">Подписаться</button>
                </form>
            </div>
            <div class="d-flex gap-5">
                
                <div class="d-flex" style="flex-direction: column;">
                    <div>
                        <p>Контакты</p>
                        <p>Телефон</p>
                        <p>+7(987)654-32-10</p>
                    </div>
                    <div>
                        <p>Почта</p>
                        <p>po4ta@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex" style="flex-direction: column; align-items:end">
                    <a href="/site/about" style="color:#6c757d; border: none; margin-bottom:1rem">О компании</a>
                    <a href="#" class="" style="color:#6c757d; border: none">Реклама</a>
                </div>
            </div>
        </div>
        <div class="d-flex gap-5 mt-5">
            <p>Является дипломным проектом. </p>
            <p>Вся информация выдумана и не соответсвует действительности.</p> 
            <p>©by alesha 2024</p>
        </div>
    </div>
    <?php Pjax::end(); ?>

</div>