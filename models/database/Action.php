<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property integer $id
 * @property integer $change
 * @property integer $type
 * @property string $outline
 * @property string $description
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['change', 'type'], 'required'],
            [['change', 'type'], 'integer'],
            [['outline'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'change' => 'Change',
            'type' => 'Type',
            'outline' => 'Outline',
            'description' => 'Description',
        ];
    }
}
