<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property string $Customer Order No
 * @property string $Work Order No
 * @property string $Service Access No
 * @property string $Access Number
 * @property string $Product Name
 * @property string $Install Flag
 * @property string $Area
 * @property string $Operation Status
 * @property string $Address
 * @property string $Customer Name
 * @property string $Contact Name
 * @property string $Customer Contact Phone
 * @property string $Appointment Date
 * @property string $Appointment Timeslot
 * @property string $Submitted Date
 * @property string $Subcontractor
 * @property string $Team
 * @property string $Handler
 * @property string $Reject Reason(Thai)
 * @property string $Reject Reason
 * @property string $Return Reason(Thai)
 * @property string $Return Reason
 * @property string $Confirmed Complete Time
 * @property string $Confirmed Begin Time
 * @property string $Latitude
 * @property string $Longitude
 * @property string $WO Create Time
 * @property string $Timeout Date
 * @property string $Customer Contact Phone 2
 * @property string $Access Mode
 * @property string $Event
 * @property string $Installation Type for technician
 * @property string $Remark
 * @property string $Black Wire Length
 * @property string $White Wire Length
 * @property string $Accept Remark
 * @property string $Province
 * @property string $District
 * @property string $Entry Fee
 * @property string $Sub-District
 * @property string $Zone Area
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Appointment Date'], 'safe'],
            [['Customer Order No', 'Work Order No', 'Service Access No', 'Access Number', 'Product Name', 'Install Flag', 'Area', 'Operation Status', 'Address', 'Customer Name', 'Contact Name', 'Customer Contact Phone', 'Appointment Timeslot', 'Submitted Date', 'Subcontractor', 'Team', 'Handler', 'Reject Reason(Thai)', 'Reject Reason', 'Return Reason(Thai)', 'Return Reason', 'Confirmed Complete Time', 'Confirmed Begin Time', 'Latitude', 'Longitude', 'WO Create Time', 'Timeout Date', 'Customer Contact Phone 2', 'Access Mode', 'Event', 'Installation Type for technician', 'Remark', 'Black Wire Length', 'White Wire Length', 'Accept Remark', 'Province', 'District', 'Entry Fee', 'Sub-District', 'Zone Area'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CustomerOrderNo' => 'Customer Order No',
            'WorkOrderNo' => 'Work Order No',
            'ServiceAccessNo' => 'Service Access No',
            'AccessNumber' => 'เลขสมาชิก',
            'ProductName' => 'Product Name',
            'InstallFlag' => 'Install Flag',
            'Area' => 'Area',
            'Operation Status' => 'สถานะ',
            'Address' => 'Address',
            'CustomerName' => 'ชื่อลูกค้า',
            'ContactName' => 'Contact Name',
            'CustomerContactPhone' => 'เบอร์',
            'AppointmentDate' => 'วันนัดติดตั้ง',
            'AppointmentTimeslot' => 'Appointment Timeslot',
            'SubmittedDate' => 'Submitted Date',
            'Subcontractor' => 'Subcontractor',
            'Team' => 'Team',
            'Handler' => 'ทีมช่าง',
            'RejectReasonTH' => 'Reject Reason( Thai)',
            'RejectReason' => 'Reject Reason',
            'ReturnReasonTH' => 'Return Reason( Thai)',
            'ReturnReason' => 'Return Reason',
            'ConfirmedComplete Time' => 'Confirmed Complete Time',
            'ConfirmedBegin Time' => 'Confirmed Begin Time',
            'Latitude' => 'Latitude',
            'Longitude' => 'Longitude',
            'WOCreateTime' => 'Wo Create Time',
            'TimeoutDate' => 'Timeout Date',
            'CustomerContactPhone2' => 'Customer Contact Phone 2',
            'AccessMode' => 'Access Mode',
            'Event' => 'Event',
            'InstallationTypefortechnician' => 'Installation Type For Technician',
            'Remark' => 'Remark',
            'BlackWireLength' => 'Black Wire Length',
            'WhiteWireLength' => 'White Wire Length',
            'AcceptRemark' => 'Accept Remark',
            'Province' => 'Province',
            'District' => 'District',
            'EntryFee' => 'Entry Fee',
            'SubDistrict' => 'Sub District',
            'ZoneArea' => 'Zone Area',
        ];
    }
}
