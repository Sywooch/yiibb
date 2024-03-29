<?php

namespace app\models\forms;

use yii;
use yii\base\Model;
use app\models\User;

/**
 * Model of user authorization form.
 */
class LoginForm extends Model
{
    /**
     * @var string user email.
     */
    public $email;
    /**
     * @var string user password.
     */
    public $password;
    /**
     * @var boolean whether to remember user log in status given by form.
     */
    public $remember = true;
    /**
     * @var integer number of seconds that the user can remain in logged-in status.
     */
    private $_duartion;
    /**
     * @var User current user model.
     */
    private $_user = null;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'required', 'message' => Yii::t('app/form', 'Required email')],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email', 'enableIDN' => true, 'message' => Yii::t('app/form', 'Valid email')],
            ['email', 'exist', 'targetClass' => User::className(), 'message' => Yii::t('app/form', 'Not exist email')],

            ['password', 'filter', 'filter' => 'trim'],
            ['password', 'required', 'message' => Yii::t('app/form', 'Required password')],
            ['password', 'string', 'min' => 6, 'tooShort' => Yii::t('app/form', 'String short password')],
            ['password', 'string', 'max' => 32, 'tooLong' => Yii::t('app/form', 'String long password')],
            ['password', 'passwordValidation'],

            ['remember', 'boolean'],
        ];
    }

    /**
     * Validate password attribute given by form.
     * @param string $attribute password attribute.
     */
    public function passwordValidation($attribute)
    {
        if ($this->hasErrors('email')) {
            return;
        }

        $user = $this->getUser();
        if (!$user || !Yii::$app->security->validatePassword($this->$attribute, $user->password_hash)) {
            $this->addError($attribute, Yii::t('app/form', 'Wrong user/password'));
        }
    }

    /**
     * Logs in a user.
     * @return boolean
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->getDuration());
        }

        return false;
    }

    /**
     * Set number in seconds that the user can remain in logged-in status.
     * @param integer $duartion number in seconds.
     * @return self this class.
     */
    public function setDuration($duartion)
    {
        $this->_duartion = $duartion;

        return $this;
    }

    /**
     * Returns number in seconds that the user can remain in logged-in status.
     * @return integer number in seconds.
     */
    public function getDuration()
    {
        if (!isset($this->_duartion)) {
            $this->_duartion = 1209600;
        }

        return $this->_duartion;
    }

    /**
     * Finds user model by the form given email.
     * @return User|null current user model.
     * If null, it means the current user model will be not found with this email.
     */
    protected function getUser()
    {
        if (!isset($this->_user)) {
            $this->_user = User::findByEmail($this->email);
        }
        return $this->_user;
    }
}