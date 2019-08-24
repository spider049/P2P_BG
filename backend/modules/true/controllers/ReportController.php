<?php

namespace backend\modules\true\controllers;

use yii;

class ReportController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionReport1() {
        $sql = "SELECT tasks.AccessNumber AS 'เลขสมาชิก',tasks.OperationStatus AS 'สถานะ',"
                . "tasks.CustomerName AS 'ชื่อลูกค้า',tasks.`Handler` AS 'ช่าง',tasks.AppointmentDate as 'วันที่' FROM tasks "
                . "WHERE tasks.AppointmentDate = CURDATE()-1 AND tasks.OperationStatus = 'Completed'";
        
        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();

        //print_r($rawData);
        //print_r($sql);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination'=>[
                // จำนวนข้อมูลที่ต้องการแสดง
                'pagesize'=>10
            ]
        ]);
        return $this->render('report1',[
                  'dataProvider' => $dataProvider
                ]); 
    }
    public function actionReport2() {
        $sql = "SELECT tasks.AccessNumber AS 'เลขสมาชิก',tasks.OperationStatus AS 'สถานะ',
                tasks.CustomerName AS 'ชื่อลูกค้า',tasks.`Handler` AS 'ช่าง',tasks.AppointmentDate as 'วันที่' FROM tasks
                WHERE tasks.AppointmentDate = CURDATE()";
                // WHERE tasks.AppointmentDate = CURDATE() AND tasks.OperationStatus = 'Completed'";
        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();

        //print_r($rawData);
        //print_r($sql);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination'=>[
                // จำนวนข้อมูลที่ต้องการแสดง
                'pagesize'=>10
            ]
        ]);
        return $this->render('report2',[
                  'dataProvider' => $dataProvider
                ]); 
    }
    
    public function actionReport3() {
        $sql = "SELECT tasks.AccessNumber AS 'เลขสมาชิก',tasks.OperationStatus AS 'สถานะ',
                tasks.CustomerName AS 'ชื่อลูกค้า',tasks.`Handler` AS 'ช่าง',tasks.AppointmentDate as 'วันที่' FROM tasks
                WHERE tasks.AppointmentDate = CURDATE() AND tasks.OperationStatus = 'Completed'";
        
        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();

        //print_r($rawData);
        //print_r($sql);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination'=>[
                // จำนวนข้อมูลที่ต้องการแสดง
                'pagesize'=>10
            ]
        ]);
        return $this->render('report3',[
                  'dataProvider' => $dataProvider
                ]); 
    }
    

}
