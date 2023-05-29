<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin
 *
 * @property Order[] $orders
 */
class RegForm extends User
{
    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'login', 'email', 'password', 'passwordConfirm', 'agree'], 'required', 'message'=>'Поля обязательные для заполнения'],
            ['name', 'match', 'pattern' => '/^[а-яА-я0-9\s\-]{3,}$/u', 'message'=> 'Только кириллица, пробел и тире'],
            ['surname', 'match', 'pattern' => '/^[а-яА-я0-9\s\-]{3,}$/u', 'message'=> 'Только кириллица, пробел и тире'],
            ['patronymic', 'match', 'pattern' => '/^[а-яА-я0-9\s\-]{3,}$/u', 'message'=> 'Только кириллица, пробел и тире'],
            ['login', 'unique', 'message'=>'Такой логин уже сужествует'],
            ['email', 'unique', 'message'=>'Такой email уже сужествует'],
            ['email', 'email'],
            ['password', 'match', 'pattern' => '/^[а-яА-я0-9\s\-]{6,}$/u', 'message'=> 'Не менее 6-ти символов'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message'=> 'Согласитесь на обработку данных'],
            [['admin'], 'integer'],
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'passwordConfirm' => 'Повторите пароль',
            'agree' => 'Согласие на обработку данных',
            'admin' => 'Admin',
        ];
    }

}
