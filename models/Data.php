<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $pdaid
 * @property string $part_number
 * @property string $receiving
 * @property string $hr
 * @property string $dloc
 * @property string $overflow
 * @property string $out
 * @property string $remarks
 * @property string $date
 * @property string $created_by
 * @property string $updated_by
 */
class Data extends \yii\db\ActiveRecord
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
          [['pdaid', 'remarks', 'location'], 'string', 'max' => 100],
          [['date'], 'safe'],
          [['part_number', 'out', 'qty'], 'string', 'max' => 45],
          [['created_by', 'updated_by'], 'string', 'max' => 50],
      ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          'id' => 'ID',
          'pdaid' => 'PDAID',
          'part_number' => 'Part Number',
          'location' => 'Location',
          'qty' => 'QTY',
          'out' => 'Out',
          'remarks' => 'Remarks',
          'date' => 'Date',
          'created_by' => 'Created By',
          'updated_by' => 'Updated By',
      ];
    }
}
