<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cycle_count".
 *
 * @property integer $id_cycle_count
 * @property string $part_case
 * @property string $location
 * @property string $qty
 * @property string $date
 * @property string $user
 */
class CycleCount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cycle_count';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_case', 'location', 'qty', 'date', 'user'], 'required'],
            [['qty'], 'integer'],
            [['date'], 'safe'],
            [['part_case'], 'string', 'max' => 100],
            [['location'], 'string', 'max' => 75],
            [['user'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cycle_count' => 'Id Cycle Count',
            'part_case' => 'Part Case',
            'location' => 'Location',
            'qty' => 'Qty',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
