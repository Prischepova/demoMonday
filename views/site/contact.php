<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Где нас найти?';
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container overflow-hidden">
        <div class="row gy-5">
            <div class="jumbotron text-center bg-transparent">
                <img src="/img/map.jpg" class="rounded mx-auto d-block" alt="Img">
            </div>
            <div class="jumbotron bg-transparent">
                <p class="display-6">Aдрес: ул.Бабушкинаская, д.4</p>
                <p class="display-6">Номер телефона: +7 (929) 888 88 88</p>
                <p class="display-6">Email: musichouse@gmail.com</p>
            </div>
        </div>
    </div>

</div>
