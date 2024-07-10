<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Change Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-change-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to change password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-change-password']); ?>

                <?= $form->field($model, 'currentPassword')->passwordInput() ?>

                <?= $form->field($model, 'newPassword')->passwordInput() ?>

                <?= $form->field($model, 'newPasswordRepeat')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Change Password', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
