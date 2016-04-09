<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\components;
/**
 * Description of View
 *
 * @author minhv
 */
class View extends \yii\web\View{
    //put your code here
    function render($view, $params = [], $context = null)
    {
        return str_replace('garlic', 'g$@!#', parent::render($view, 
                $params, $context));
    }
}
