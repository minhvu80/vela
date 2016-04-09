<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EntryForm is the model behind entry form
 *
 * @author minhv
 */
class EntryForm extends Model {
    public $name,$email,$phone,$city,$captcha;
    
    public function rules(){
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['phone', 'number'],
            ['captcha', 'captcha']
            
        ];
    }
    
}
