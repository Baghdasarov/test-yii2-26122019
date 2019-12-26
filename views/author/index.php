<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Authors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'year_of_birth',
            'rating',

            [
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a('Books', ['books', 'id' => $data->id], ['class' => 'btn btn-success']);
                },
                'label' => 'Books',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
