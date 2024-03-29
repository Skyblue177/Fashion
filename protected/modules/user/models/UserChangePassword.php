<?php
/**
 * UserChangePassword class.
 * UserChangePassword is the data structure for keeping
 * user change password form data. It is used by the 'changepassword' action of 'UserController'.
 */
class UserChangePassword extends CFormModel {
	public $oldPassword;
	public $password;
	public $verifyPassword;
	
	public function rules() {
		return Yii::app()->controller->id == 'recovery' ? array(
			array('password, verifyPassword', 'required'),
			array('password, verifyPassword', 'length', 'max'=>128, 'min' => 4,'message' => UserModule::t("Mật khẩu không chính xác (độ dài tối thiểu 4 ký tự).")),
			array('verifyPassword', 'compare', 'compareAttribute'=>'password', 'message' => UserModule::t("Nhập lại mật khẩu là không chính xác.")),
		) : array(
			array('oldPassword, password, verifyPassword', 'required'),
			array('oldPassword, password, verifyPassword', 'length', 'max'=>128, 'min' => 4,'message' => UserModule::t("Mật khẩu không chính xác (độ dài tối thiểu 4 ký tự).")),
			array('verifyPassword', 'compare', 'compareAttribute'=>'password', 'message' => UserModule::t("Nhập lại mật khẩu không chính xác.")),
			array('oldPassword', 'verifyOldPassword'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'oldPassword'=>UserModule::t("Mật khẩu cũ"),
			'password'=>UserModule::t("Mật khẩu"),
			'verifyPassword'=>UserModule::t("Nhập lại mật khẩu"),
		);
	}
	
	/**
	 * Verify Old Password
	 */
	 public function verifyOldPassword($attribute, $params)
	 {
		 if (User::model()->notsafe()->findByPk(Yii::app()->user->id)->password != Yii::app()->getModule('user')->encrypting($this->$attribute))
			 $this->addError($attribute, UserModule::t("Old Password is incorrect."));
	 }
}