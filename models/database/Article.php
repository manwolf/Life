<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $change
 * @property integer $user
 * @property string $title
 * @property string $content
 * @property integer $share
 * @property integer $recordTime
 * @property integer $updateTime
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['change', 'user', 'title', 'content', 'share', 'recordTime', 'updateTime'], 'required'],
            [['change', 'user', 'share', 'recordTime', 'updateTime'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['content'], 'string', 'max' => 1000],
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
            'user' => 'User',
            'title' => 'Title',
            'content' => 'Content',
            'share' => 'Share',
            'recordTime' => 'Record Time',
            'updateTime' => 'Update Time',
        ];
    }
}
