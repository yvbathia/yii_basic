<?php

namespace app\models;

use yii\base\Model;

class UserForm extends Model{
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $phone;
    public $location;
    public $dob;

    public function rules(){
        return [
                [['fname','email','password'],'required'],
                ['email','email'],
            ];
    }
}