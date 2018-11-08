<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "putaway".
 *
 * @property integer $id
 * @property string $part_case
 * @property string $old_loc
 * @property string $new_loc
 * @property string $qty
 * @property string $date
 * @property string $user
 */
class Putaway extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'putaway';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_case', 'old_loc', 'new_loc', 'qty', 'date', 'user'], 'required'],
            [['qty'], 'integer'],
            [['date'], 'safe'],
            [['part_case'], 'string', 'max' => 100],
            [['old_loc', 'new_loc'], 'string', 'max' => 75],
            [['user'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'part_case' => 'Part Case',
            'old_loc' => 'Old Loc',
            'new_loc' => 'New Loc',
            'qty' => 'Qty',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
