<?php
/**
 * Created by PhpStorm.
 * User: davyidenko.d
 * Date: 05.02.2019
 * Time: 19:38
 */

namespace app\models;
use yii\base\Model;

class SignUpForm extends Model{

    public $username;
    public $password;
    public $email;

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required', 'message' => 'Заполните поле'],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
            ['email'   , 'unique', 'targetClass' => User::className(),  'message' => 'Этот Email уже занят'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'email'    => 'Email',
            'password' => 'Пароль',
        ];
    }

}