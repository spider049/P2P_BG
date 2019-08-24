<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Stocks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stocks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaterialDescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SerialNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Plnt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SLoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ChangedOn')->textInput() ?>

    <?= $form->field($model, 'Manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Value')->textInput() ?>

    <?= $form->field($model, 'Depot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StatusSub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StatusModel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
