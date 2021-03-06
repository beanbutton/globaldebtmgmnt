<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
require_once (dirname(__FILE__) . '/../extensions/aes/AES.class.php');

class UserIdentity extends CUserIdentity {
	private $_id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$users = array(
		// username => password
		'demo' => 'demo', 'admin' => 'admin', );

		$user = User::model() -> findByAttributes(array('username' => $this -> username));
		if ($user) {
			if ($user === null) {// No user found!
				$this -> errorCode = self::ERROR_USERNAME_INVALID;
			} else if ($user -> password !== sha1($this -> password)) {// Invalid password!
				$this -> errorCode = self::ERROR_PASSWORD_INVALID;
			} else {// Okay!
				$this -> errorCode = self::ERROR_NONE;
				// Store the role in a session:
				//$this->setState('role', $user->role);
				$this -> _id = $user -> id;
			}
			return !$this -> errorCode;
		} 
		else {
			if (!isset($users[$this -> username]))
				$this -> errorCode = self::ERROR_USERNAME_INVALID;
			else if ($users[$this -> username] !== $this -> password)
				$this -> errorCode = self::ERROR_PASSWORD_INVALID;
			else
				$this -> errorCode = self::ERROR_NONE;
							
			return !$this -> errorCode;
		}
	}
	
	public function getId()
	{
		return $this->_id;
	}

}
