<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container overflow-hidden">
        <div class="row gy-5">
            <div class="jumbotron text-center bg-transparent">
                <img src="/img/logo.jpg" class="rounded mx-auto d-block" alt="Img">

                <h1 class="display-4">Музыка для души!</h1>

                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/img/1.jpg" class="rounded mx-auto d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/img/2.jpg" class="rounded mx-auto d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/img/3.jpg" class="rounded mx-auto d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/img/3.jpg" class="rounded mx-auto d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/img/3.jpg" class="rounded mx-auto d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
        </div>
    </div>
</div>
