<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $usuario;
	public $passwd;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
        
        
public function login(){
    return TRUE;
}      
        
public function rules()
{
	return array(
		array('usuario, passwd', 'required'),
		
		array('passwd', 'authenticate'),
	);
}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'usuario'=>'Escribe tu usuario',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())  // we only want to authenticate when no input errors
		{   
                    
			$identity=new UserIdentity($this->usuario,$this->passwd);
			$identity->authenticate();
			switch($identity->errorCode)
			{
				case UserIdentity::ERROR_NONE:
					Yii::app()->user->login($identity);
					break;
				case UserIdentity::ERROR_USERNAME_INVALID:
					$this->addError('usuario','No existe el usuario!');
					break;
				default: // UserIdentity::ERROR_PASSWORD_INVALID
					$this->addError('passwd','Verifica tu password!');
					break;
			}
		}
	}
}
