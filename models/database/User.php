<?php

namespace app\models\database;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $nick
 * @property string $pwd
 * @property string $mobile
 * @property integer $birthday
 * @property integer $sex
 * @property integer $type
 * @property string $header
 * @property string $lastLoginIp
 * @property integer $loginTime
 * @property integer $recordTime
 * @property integer $updateTime
 *
 * @property Change[] $changes
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'nick', 'pwd', 'mobile', 'birthday', 'sex', 'type', 'header', 'lastLoginIp', 'loginTime', 'recordTime', 'updateTime'], 'required'],
            [['id', 'birthday', 'sex', 'type', 'loginTime', 'recordTime', 'updateTime'], 'integer'],
            [['name', 'nick', 'pwd', 'mobile'], 'string', 'max' => 45],
            [['header'], 'string', 'max' => 100],
            [['lastLoginIp'], 'string', 'max' => 15],
            [['name'], 'unique'],
            [['mobile'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nick' => 'Nick',
            'pwd' => 'Pwd',
            'mobile' => 'Mobile',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'type' => 'Type',
            'header' => 'Header',
            'lastLoginIp' => 'Last Login Ip',
            'loginTime' => 'Login Time',
            'recordTime' => 'Record Time',
            'updateTime' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChanges()
    {
        return $this->hasMany(Change::className(), ['user' => 'id']);
    }
}
