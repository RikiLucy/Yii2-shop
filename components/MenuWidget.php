<?php


/**
 * Created by PhpStorm.
 * User: Djon
 * Date: 14.01.2017
 * Time: 18:05
 */

namespace app\components;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if ($this->tpl === null){
            $this->tpl = 'Menu';
        }
        $this->tpl .= ' .php';
    }

    public function run()
    {
        //parent::run(); // TODO: Change the autogenerated stub
    return $this->tpl;
    }

}