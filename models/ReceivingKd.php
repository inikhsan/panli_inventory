<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receiving_kd".
 *
 * @property integer $id
 * @property string $case_no
 * @property string $location
 * @property string $date
 * @property string $user
 */
class ReceivingKd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receiving_kd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_no', 'location'], 'required'],
            [['date'], 'safe'],
            [['case_no'], 'string', 'max' => 100],
            [['location'], 'string', 'max' => 75],
            [['user'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'case_no' => 'Case No',
            'location' => 'Location',
            'date' => 'Date Scan',
            'user' => 'User',
        ];
    }
}
