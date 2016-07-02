<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "code".
 *
 * @property integer $id
 * @property integer $type
 * @property string $mobile
 * @property string $content
 * @property string $vcode
 * @property integer $sendTime
 * @property integer $validTime
 * @property integer $recordTime
 */
class Code extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'mobile', 'content', 'vcode', 'sendTime', 'validTime', 'recordTime'], 'required'],
            [['type', 'sendTime', 'validTime', 'recordTime'], 'integer'],
            [['mobile'], 'string', 'max' => 11],
            [['content'], 'string', 'max' => 200],
            [['vcode'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'mobile' => 'Mobile',
            'content' => 'Content',
            'vcode' => 'Vcode',
            'sendTime' => 'Send Time',
            'validTime' => 'Valid Time',
            'recordTime' => 'Record Time',
        ];
    }
}
