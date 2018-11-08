<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receiving_local".
 *
 * @property integer $idreceiving_local
 * @property string $part_number
 * @property string $qty
 * @property string $date
 * @property string $user
 */
class ReceivingLocal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receiving_local';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_number', 'qty', 'date', 'user'], 'required'],
            [['qty'], 'integer'],
            [['date'], 'safe'],
            [['part_number'], 'string', 'max' => 50],
            [['user'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idreceiving_local' => 'Idreceiving Local',
            'part_number' => 'Part Number',
            'qty' => 'Qty',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
