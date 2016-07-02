<?php

namespace app\models;
use app\models\database\User as tbl_user;
use yii\db\StaleObjectException;
class User extends \yii\base\Object implements \yii\web\IdentityInterface {
	public $id;
	public $username;
	public $password;
	public $authKey;
	public $accessToken;
	

	/**
	 * 验证登录信息
	 * {@inheritDoc}
	 * @see \yii\base\Model::validate()
	 */
	public static  function validate($username,$password){
		$user = tbl_user::find()->where(['name'=> $username,'pwd' => $password])->one();
		if ($user){
			$userdata = $user->attributes;
			$loginUser = new User();
			$loginUser->id = $userdata['id'];
			$loginUser->username = $userdata['nick'];
			$loginUser->password = $userdata['pwd'];
			
			return  $loginUser;
		}else {
			return null;
		}
	}
	
	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id) {
		$user = tbl_user::findOne($id);
		if ($user){
			$userdata = $user->attributes;
			$loginUser = new User();
			$loginUser->id = $userdata['id'];
			$loginUser->username = $userdata['nick'];
			$loginUser->password = $userdata['pwd'];				
			return  $loginUser;
		}else {
			return null;
		}
	}
	
	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null) {
		$user = tbl_user::findOne(1);
		if ($user){
			$userdata = $user->attributes;
			$loginUser = new User();
			$loginUser->id = $userdata['id'];
			$loginUser->username = $userdata['nick'];
			$loginUser->password = $userdata['pwd'];			
			return  $loginUser;
		}else {
			return null;
		}		
	}
	
	/**
	 * Finds user by username
	 *
	 * @param string $username        	
	 * @return static|null
	 */
	public static function findByUsername($username) {
	$user = tbl_user::find()->where(['name'=> $username])->one();
		if ($user){
			$userdata = $user->attributes;
			$loginUser = new User();
			$loginUser->id = $userdata['id'];
			$loginUser->username = $userdata['nick'];
			$loginUser->password = $userdata['pwd'];
			
			return  $loginUser;
		}else {
			return null;
		}
		
	}
	
	/**
	 * @inheritdoc
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @inheritdoc
	 */
	public function getAuthKey() {
		return $this->authKey;
	}
	
	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey) {
		return $this->authKey === $authKey;
	}
	
	/**
	 * Validates password
	 *
	 * @param string $password
	 *        	password to validate
	 * @return boolean if password provided is valid for current user
	 */
	public function validatePassword($password) {
		return $this->password === $password;
	}
}
