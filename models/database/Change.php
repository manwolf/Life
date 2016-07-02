<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "change".
 *
 * @property integer $id
 * @property integer $user
 * @property integer $type
 * @property integer $beginDate
 * @property integer $endDate
 * @property string $theme
 * @property string $keywords
 * @property string $keyman
 * @property string $keymanImpact
 * @property integer $level
 * @property integer $article
 * @property integer $recordTime
 * @property integer $updateTime
 */
class Change extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'change';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'type', 'beginDate', 'endDate', 'level', 'article', 'recordTime', 'updateTime'], 'integer'],
            [['theme', 'keywords'], 'string', 'max' => 100],
            [['keyman'], 'string', 'max' => 45],
            [['keymanImpact'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => '用户',
            'type' => '类型',
            'beginDate' => '开始日期',
            'endDate' => '结束日期',
            'theme' => '主题',
            'keywords' => '关键词',
            'keyman' => '关键人',
            'keymanImpact' => '关键人作用',
            'level' => '评价',
            'article' => '文章',
            'recordTime' => '记录时间',
            'updateTime' => '更新时间',
        ];
    }

    /**
     * @inheritdoc
     * @return ChangeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChangeQuery(get_called_class());
    }
}
