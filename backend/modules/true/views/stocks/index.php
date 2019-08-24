<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\true\models\StocksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stocks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel'=>[
            'before'=>'รายงาน ทรู',
            'after'=>'ประมวลผล ณ '. date('Y-m-d H:i:s')
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Material',
            'MaterialDescription',
            'SerialNumber',
            'Plnt',
            //'SLoc',
            //'ChangedOn',
            //'Manufacturer',
            //'Model',
            //'Product',
            //'Value',
            //'Depot',
            //'Region',
            //'Province',
            //'Sub',
            //'StatusSub',
            //'StatusModel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
