<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <p>
            <?= Html::a('Authors', ['author/index'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Books', ['books/index'], ['class' => 'btn btn-primary']) ?>
        </p>
    </div>

    <div class="body-content">



    </div>
</div>
