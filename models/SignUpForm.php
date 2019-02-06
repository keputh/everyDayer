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

    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }

}