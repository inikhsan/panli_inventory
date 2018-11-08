<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $pdaid
 * @property string $part_number
 * @property string $part_name
 * @property string $location
 * @property string $snp
 * @property string $qty
 * @property string $out
 * @property string $remarks
 * @property string $date
 * @property string $created_by
 * @property string $updated_by
 */
class Inventory extends \yii\db\ActiveRecord
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
            [['date'], 'safe'],
            [['pdaid', 'part_name', 'location', 'remarks'], 'string', 'max' => 100],
            [['part_number', 'snp', 'qty', 'out'], 'string', 'max' => 45],
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
            'part_name' => 'Part Name',
            'location' => 'Location',
            'snp' => 'SNP',
            'qty' => 'Qty',
            'out' => 'Out',
            'remarks' => 'Remarks',
            'date' => 'Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
