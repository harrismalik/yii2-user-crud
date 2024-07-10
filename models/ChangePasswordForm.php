<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Change password form
 */
class ChangePasswordForm extends Model
{
    public $currentPassword;
    public $newPassword;
    public $newPasswordRepeat;

    private $_user;

    /**
     * ChangePasswordForm constructor.
     * @param User $user
     * @param array $config
     */
    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currentPassword', 'newPassword', 'newPasswordRepeat'], 'required'],
            ['currentPassword', 'validateCurrentPassword'],
            ['newPassword', 'string', 'min' => 6],
            ['newPasswordRepeat', 'compare', 'compareAttribute' => 'newPassword', 'message' => 'Passwords don\'t match'],
        ];
    }

    /**
     * Validates the current password.
     * This method serves as the inline validation for currentPassword.
     */
    public function validateCurrentPassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if (!$this->_user->validatePassword($this->currentPassword)) {
                $this->addError($attribute, 'Incorrect current password.');
            }
        }
    }

    /**
     * Changes the password.
     * @return bool if password was changed.
     */
    public function changePassword()
    {
        if ($this->validate()) {
            $this->_user->setPassword($this->newPassword);
            return $this->_user->save(false);
        }

        return false;
    }
}
