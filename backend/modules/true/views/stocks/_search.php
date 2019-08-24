<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\true\models\StocksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stocks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'MaterialDescription') ?>

    <?= $form->field($model, 'SerialNumber') ?>

    <?= $form->field($model, 'Plnt') ?>

    <?php // echo $form->field($model, 'SLoc') ?>

    <?php // echo $form->field($model, 'ChangedOn') ?>

    <?php // echo $form->field($model, 'Manufacturer') ?>

    <?php // echo $form->field($model, 'Model') ?>

    <?php // echo $form->field($model, 'Product') ?>

    <?php // echo $form->field($model, 'Value') ?>

    <?php // echo $form->field($model, 'Depot') ?>

    <?php // echo $form->field($model, 'Region') ?>

    <?php // echo $form->field($model, 'Province') ?>

    <?php // echo $form->field($model, 'Sub') ?>

    <?php // echo $form->field($model, 'StatusSub') ?>

    <?php // echo $form->field($model, 'StatusModel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
