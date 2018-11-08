<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "outbound".
 *
 * @property integer $id_outbound
 * @property string $part_number
 * @property string $qty
 * @property string $date
 * @property string $user
 */
class Outbound extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outbound';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_number', 'qty', 'date', 'user'], 'required'],
            [['date'], 'safe'],
            [['part_number'], 'string', 'max' => 100],
            [['qty'], 'string', 'max' => 75],
            [['user'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_outbound' => 'Id Outbound',
            'part_number' => 'Part Number',
            'qty' => 'Qty',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
