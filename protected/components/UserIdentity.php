<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_isAdmin;
	private $_isEditor;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = User::model()->findByAttributes(array('name' => $this->username));
		if ( $user === null ) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}else{
			if ($user->password != $user->encrypt($this->password)){
				$this->errorCode == self::ERROR_PASSWORD_INVALID;
			}else{
				$this->_id = $user->id;
				$isAdmin = ($user->role == User::USER_ADMIN)? 1:0;
				$isEditor = ($user->role == User::USER_EDITOR)? 1:0;
				$this->setState('id',$user->id);
				$this->setState('name',$user->name);
				$this->setState('isAdmin',$isAdmin);
				$this->setState('isEditor',$isEditor);
				$this->errorCode = self::ERROR_NONE;
			}
		}
		return !$this->errorCode;
	}
}
