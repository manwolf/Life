<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "reason".
 *
 * @property integer $id
 * @property integer $change
 * @property integer $type
 * @property string $outline
 * @property string $description
 * @property string $proof
 *
 * @property Change[] $changes
 */
class Reason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reason';
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
            [['description', 'proof'], 'string', 'max' => 500],
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
            'proof' => 'Proof',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChanges()
    {
        return $this->hasMany(Change::className(), ['reason' => 'id']);
    }
}
