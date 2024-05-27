<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\VarDumper;

/**
 * ContactForm is the model behind the contact form.
 */
class SurnameForm extends Model
{
    public $surname;
    // public $password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['surname'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'surname' => 'Фамилия',
        ];
    }


//     public function register()
//     {
//         if ($this->validate()) {
//             $user = new User();
//             $user->attributes = $this->attributes;
//             $user->password = Yii::$app->security->generatePasswordHash($this->password);
//             $user->authKey = Yii::$app->security->generateRandomString();
//             $user->role_id = Role::getRoleId('user');
//             if(!$user->save()){
//                 return VarDumper::dump($user->errors, 10 ,true);die;
//             }
//         }
//         return $user??false;
//     }
}
