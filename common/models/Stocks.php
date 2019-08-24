<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stocks".
 *
 * @property int $ID
 * @property string $Material
 * @property string $MaterialDescription
 * @property string $SerialNumber
 * @property string $Plnt
 * @property string $SLoc
 * @property string $ChangedOn
 * @property string $Manufacturer
 * @property string $Model
 * @property string $Product
 * @property double $Value
 * @property string $Depot
 * @property string $Region
 * @property string $Province
 * @property string $Sub
 * @property string $StatusSub
 * @property string $StatusModel
 */
class Stocks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['ChangedOn'], 'safe'],
            [['Value'], 'number'],
            [['Material', 'MaterialDescription', 'SerialNumber', 'Plnt', 'SLoc', 'Manufacturer', 'Model', 'Product', 'Depot', 'Region', 'Province', 'Sub', 'StatusSub', 'StatusModel'], 'string', 'max' => 255],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Material' => 'Material',
            'MaterialDescription' => 'Material Description',
            'SerialNumber' => 'Serial Number',
            'Plnt' => 'Plnt',
            'SLoc' => 'S Loc',
            'ChangedOn' => 'Changed On',
            'Manufacturer' => 'Manufacturer',
            'Model' => 'Model',
            'Product' => 'Product',
            'Value' => 'Value',
            'Depot' => 'Depot',
            'Region' => 'Region',
            'Province' => 'Province',
            'Sub' => 'Sub',
            'StatusSub' => 'Status Sub',
            'StatusModel' => 'Status Model',
        ];
    }
}
