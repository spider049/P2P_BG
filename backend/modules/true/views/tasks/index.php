<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\modules\true\models\TasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tasks', ['create'], ['class' => 'btn btn-success']) ?>
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

            // ฟิลล์ที่ต้องการให้แสดงออกมา
            //'ID',
            //'CustomerOrderNo',
            //'WorkOrderNo',
            //'ServiceAccessNo',
            'AccessNumber',
            //'ProductName',
            //'InstallFlag',
            //'Area',
            'OperationStatus',
            //'Address',
            'CustomerName',
            //'ContactName',
            'CustomerContactPhone',
            'AppointmentDate',
            //'AppointmentTimeslot',
            //'SubmittedDate',
            //'Subcontractor',
            //'Team',
            'Handler',
            //'RejectReasonTH',
            //'RejectReason',
            //'ReturnReasonTH',
            //'ReturnReason',
            //'ConfirmedCompleteTime',
            //'ConfirmedBeginTime',
            //'Latitude',
            //'Longitude',
            //'WOCreateTime',
            //'TimeoutDate',
            //'CustomerContactPhone2',
            //'AccessMode',
            //'Event',
            //'InstallationTypefortechnician',
            'Remark',
            //'BlackWireLength',
            //'WhiteWireLength',
            //'AcceptRemark',
            //'Province',
            //'District',
            //'EntryFee',
            //'SubDistrict',
            //'ZoneArea',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
