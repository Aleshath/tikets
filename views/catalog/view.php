<?php

use app\models\Event;
use app\models\Photo;
use app\models\Place;
use app\models\User;
use yii\bootstrap5\Html;
use yii\db\Query;
use yii\helpers\VarDumper;
use yii\widgets\DetailView;
use yii\widgets\ListView;


// VarDumper::dump(Place::getPlaceEventId(), true, 10); die;
// VarDumper::dump(Place::findOne(['event_id' => $event_id]), true, 10); die;
$images = Photo::find()->where(['event_id' => $model->id])->all();

/** @var yii\web\View $this */
/** @var app\models\event $model */
if($model->category_id == 1){
    $buffer = array("Концерт", "О концерте", "Поп, Вечеринка", "18+");
}elseif($model->category_id == 2){
    $buffer = array("Выставка", "О выставке", "Интерактивное, Позновательное", "3+");
}elseif($model->category_id == 3){
    $buffer = array("Театр", "О театре", "Классическое искусство", "12+");
}elseif($model->category_id == 4){
    $buffer = array("Спектакль", "О спектакле", "Классическое искусство", "16+");
}elseif($model->category_id == 5){
    $buffer = array("Фестиваль", "О фестивале", "Уличное, Вечеринка", "16+");
}

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php foreach ($images as $key => $value) : ?>

<div class="event-view" style="margin-left:4.5vw;margin-top:5rem">
    <div class='d-flex'>
        <div class="background" style="width:38rem; border-radius:2rem; filter:blur(10rem);"></div>
        <img src="/web/img/blur1.jpg" alt="blur" style="width:38rem; height: 630px; border-radius:3rem;background-position: center; background-repeat: no-repeat; background-size: cover; position: absolute; opacity:80%">
        <div style="position: absolute; flex-direction:end; flex-direction:column; margin-top:500px; margin-left: 1rem;" class="d-flex">
            <p class="mb-0" style="color: white;"><?= $buffer[0] ?></p>
            <h1 class="mt-0" style="color: white;"><?= Html::encode($this->title) ?></h1>
            <button href="#" class="btn btn-light" style="border-radius: 1rem; background-color:white; width:15rem" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить билет</button>
           
            <!-- First Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal">
            <div class="modal-content" style="border-radius: 2rem;">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel">Покупка билета</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="flex-direction: column;">
                    <p style="display: flex; align-items: center; justify-content: center;">Стоимость билета: <?= $model->price_ticket?> ₽</p>
                    <div class="d-flex" style="flex-direction: column; align-items: center;">
                        <input placeholder="Укажите email" type="text" class="form-control mb-3" id="email" style="height: 50px; border-radius: 1rem; width: 350px;" required>
                        <input placeholder="Введите номер карты" type="text" class="form-control mb-3" id="cardNumber" style="height: 50px; border-radius: 1rem; width: 350px;" required>
                        <input placeholder="Срок действия" type="text" class="form-control mb-3" id="expiryDate" style="height: 50px; border-radius: 1rem; width: 350px;" required>
                        <input placeholder="Владелец карты" type="text" class="form-control mb-3" id="cardHolder" style="height: 50px; border-radius: 1rem; width: 350px;" required>
                        <input placeholder="CVV" type="text" class="form-control mb-3" id="cvv" style="height: 50px; border-radius: 1rem; width: 350px;" required>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="subscribe">
                            <label class="form-check-label" for="subscribe">Получать рассылку со скидками и акциями</label>
                        </div>
                        <button type="button" class="btn btn-outline-success" style="width: 350px; border-radius: 1rem;" id="purchaseButton">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal">
            <div class="modal-content" style="border-radius: 2rem;">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="successModalLabel">Успешная покупка</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="flex-direction: column;">
                    <p style="display: flex; align-items: center; justify-content: center;">Ваша покупка была успешно завершена!</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="width: 150px; border-radius: 1rem;">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        </div>
        <?= Html::img('@web/img/hor/' . $value->photo, ['class' => 'd-block', 'style' => 'width:70rem; border-radius:2rem;']) ?>
    </div>
    <div style="margin-top: 5rem;">
        <h2 style="margin-left:3rem;"><?= $buffer[1] ?></h2>
        <div style="margin-left:1rem; width:1200px; margin-top:1rem; font-size:1.2rem;">
            <?= $model->discription?>
        </div>
        <div style="margin-top:3rem;" class="d-flex gap-3">
            <?= Html::img('@web/img/hor/' . $value->photo, ['class' => 'd-block', 'style' => ' height: 230px; border-radius:2rem;']) ?>
            <div style="background-color:#c4c4c4; height: 230px; border-radius:2rem; width:408px"></div>
            <div style="background-color:#c4c4c4; height: 230px; border-radius:2rem; width:408px"></div>
            <div style="background-color:#c4c4c4; height: 230px; border-radius:2rem; width:408px;align-items: center; display: flex; justify-content: center; font-size: 4rem; color:#444;">+3</div>
        </div>
        <div style="margin-top:3rem; margin-left:2rem;" class="d-flex gap-5">
            <div>
                <h5 style="opacity:80%">Жанры</h5>
                <p style="font-size:1.2rem">
                    <?= $buffer[2] ?>
                </p>
            </div>
            <div>
                <h5 style="opacity:80%">Возраст</h5>
                <p style="font-size:1.2rem">
                    <?= $buffer[3] ?>
                </p>
            </div>
        </div>
    </div>
    <div style="margin-top:3rem; margin-left:3rem;" >
        <h3 style="font-size:1.8rem; margin-bottom:3rem">Пространство <?= Place::findOne(['event_id' => $model->id])->title?></h3>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A07aa48f9884f7f41946ed5a720777be749905d6301743c63aed526a428b32b2f&amp;source=constructor" width="1000" height="550" frameborder="0"></iframe>
    </div>
    <div style="margin-top:3rem;" >
        <h3 style="font-size:1.8rem; margin-left:3rem;">Как вам <?= $buffer[0]?>?</h3>
        <textarea placeholder="Место чтобы оставить отзыв" name="" id="" style="border: none; width: 1200px; height: 200px; padding: 1rem; border: none; border-radius: 2rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); font-size: 16px; outline: none; resize: none; margin-top: 2rem;">

        </textarea>
    </div>
    <div style="margin-top: 5rem;">
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
            'layout' => "<h2 style='margin-left:3rem;'>Популярно сейчас</h2><div class='d-flex'>{items}</div>",
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
        'layout' => "<h2 style='margin-left:3rem;'>Рекомендовано для вас</h2><div class='d-flex'>{items}</div>",
        'itemView' => 'item', // Представление для каждой карточки одежды
    ]) ?>
    </div>
</div>
<div class="d-flex item-align-center justify-content-center align-items-center" style="background-color: #f2f2f2; height:25rem; border-radius: 5rem; flex-direction:column; width: 1600px; margin-left:120px; margin-bottom:2rem;">
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
<style>
    .background{
        background-image:url('/web/img/hor/<?=$value->photo?>');
        filter: brightness(40%);

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }   
    #text{
        text-indent: 20px;
    }
    textarea::placeholder {
        color: #757575;
    }   
</style>
<script>
        document.getElementById('purchaseButton').addEventListener('click', function() {
            var exampleModalEl = document.getElementById('exampleModal');
            var successModalEl = document.getElementById('successModal');
            
            // Create instances of modals
            var exampleModal = bootstrap.Modal.getInstance(exampleModalEl);
            var successModal = new bootstrap.Modal(successModalEl);

            // Close the first modal
            exampleModal.hide();

            // Show the second modal
            successModal.show();
        });
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php endforeach; ?>