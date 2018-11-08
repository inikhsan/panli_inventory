<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $pdaid
 * @property string $location
 * @property string $date
 * @property string $created_by
 */
class coba extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pdaid', 'location', 'date', 'created_by'], 'required'],
            [['date'], 'safe'],
            [['pdaid', 'location'], 'string', 'max' => 100],
            [['created_by'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pdaid' => 'Pdaid',
            'location' => 'Location',
            'date' => 'Date',
            'created_by' => 'Created By',
        ];
    }
}
