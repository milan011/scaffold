<?php namespace zgldh\Scaffold\Installer\HtmlFields;

/**
 * Created by PhpStorm.
 * User: zhangwb-pc
 * Date: 08/30/2017
 * Time: 18:00
 */
class Email extends BaseField
{
    public function html()
    {
        // TODO: Implement html() method.
        return __CLASS__.json_encode($this->getOptions());
    }
}