<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">
    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>

    <p>
        <?= \yii\helpers\Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="user-search">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?= $form->field($searchModel, 'username') ?>
        <?= $form->field($searchModel, 'email') ?>
        <?= $form->field($searchModel, 'status')->dropDownList([0 => 'Inactive', 10 => 'Active'], ['prompt' => '']) ?>

        <div class="form-group">
            <?= \yii\helpers\Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= \yii\helpers\Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//         'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            'email:email',
            'role',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <br/>
    <br/>

</div>