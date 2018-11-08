<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $pdaid
 * @property string $part_number
 * @property string $location
 * @property string $qty
 * @property string $out
 * @property string $remarks
 * @property string $date
 * @property string $created_by
 * @property string $updated_by
 */
class Receiving extends \yii\db\ActiveRecord
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
            'pdaid' => 'Scan Number',
            'location' => 'Location',
            'date' => 'Date Scan',
            'created_by' => 'User',
            //'updated_by' => 'Updated By',
        ];
    }
}
