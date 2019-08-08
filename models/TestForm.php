<?php


namespace app\models;

use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
//    Нужно использовать когда наследуем Model
//    public $name;
//    public $email;
//    public $text;
    public static function tableName(){
        return 'my';
    }
    public function attributeLabels()
    {
        return  [
            'name' => 'Имя пользователя',
            'email' => 'Email',
            'text' => 'Текст сообщения'
        ];
    }

    public function rules()
    {
        return [
            [['name','text'], 'required'],
            ['email','email'],
            ['name','myRule'],
            ['text', 'trim'],
        ];
    }


    public function myRule($attrs){
        if(in_array($this->$attrs, ['alex','dima'])){
            $this->addError($attrs,'Wrong!');
        }
    }
}