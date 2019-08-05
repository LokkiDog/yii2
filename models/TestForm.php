<?php


namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email','email'],
            ['name','myRule'],
            ['text', 'trim'],
        ];
    }


    public function myRule($attrs){
        if(!in_array($this->$attrs, ['alex','dima'])){
            $this->addError($attrs,'Wrong!');
        }
    }
}