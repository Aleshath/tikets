<?php

use yii\bootstrap5\Html;


$this->title = 'Личный кабинет';
?>
<div class="site-account d-flex justify-content-center" style="margin-top:5rem; flex-direction:column; text-align: center;">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2><?= Yii::$app->user->identity->login ?></h2>
    <div>
        <h3 class="d-flex justify-content-start mt-3 mb-3" style="margin-left: 5rem;">История покупок</h3>
        <div class="d-flex gap-2" style="margin-left: 3rem; background-color:#f2f2f2;  align-items: center; padding:3rem; flex-direction:column; border-radius:3rem;">
            <div class="d-flex" style="align-items: center; width:100%; justify-content:space-between; border-bottom:1px solid #949aa0; padding-bottom:0.5rem;">
                <div class="d-flex justify-content-center gap-3" style=" align-items: center;">
                    <p>1.</p>
                    <img src="/web/img/hor/1.jpg" alt="" class="" style="border-radius:1rem; ">
                    <b>Valentin Strykalo</b>
                </div>
                <div>
                    <p>1000 р.</p>
                </div>
            </div>
            <div class="d-flex" style="align-items: center; width:100%; justify-content:space-between; border-bottom:1px solid #949aa0; padding-bottom:0.5rem;">
                <div class="d-flex justify-content-center gap-3" style=" align-items: center;">
                    <p>2.</p>
                    <img src="/web/img/hor/8.jpg" alt="" class="" style="border-radius:1rem; ">
                    <b>Гранд Макет Россия</b>
                </div>
                <div>
                    <p>540 р.</p>
                </div>
            </div>
            <div class="d-flex" style="align-items: center; width:100%; justify-content:space-between; border-bottom:1px solid #949aa0; padding-bottom:0.5rem;">
                <div class="d-flex justify-content-center gap-3" style=" align-items: center;">
                    <p>3.</p>
                    <img src="/web/img/hor/16.jpg" alt="" class="" style="border-radius:1rem; ">
                    <b>Random Fest 2024</b>
                </div>
                <div>
                    <p>1500 р.</p>
                </div>
            </div>
            <div class="d-flex" style="align-items: center; width:100%; justify-content:space-between; border-bottom:1px solid #949aa0; padding-bottom:0.5rem;">
                <div class="d-flex justify-content-center gap-3" style=" align-items: center;">
                    <p>4.</p>
                    <img src="/web/img/hor/13.jpg" alt="" class="" style="border-radius:1rem; ">
                    <b>Голодранцы и аристократы</b>
                </div>
                <div>
                    <p>1500 р.</p>
                </div>
            </div>
            <div class="d-flex" style="align-items: center; width:100%; justify-content:space-between; border-bottom:1px solid #949aa0; padding-bottom:0.5rem;">
                <div class="d-flex justify-content-center gap-3" style=" align-items: center;">
                    <p>5.</p>
                    <img src="/web/img/hor/2.jpg" alt="" class="" style="border-radius:1rem; ">
                    <b>DeadBlonde</b>
                </div>
                <div>
                    <p>1000 р.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex item-align-center justify-content-center align-items-center mt-5" style="background-color: #f2f2f2; height:25rem; border-radius: 5rem; flex-direction:column; width: 1600px; margin-left:70px; margin-bottom:2rem;">
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
    img{
        width: 100px;
        height: auto;
    }
    p{
        margin:0;
    }
</style>