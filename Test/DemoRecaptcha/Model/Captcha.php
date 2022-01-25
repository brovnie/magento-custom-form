<?php

namespace Test\DemoRecaptcha\Model;

class Captcha extends \Magento\Captcha\Model\DefaultModel
{
    public function isRequired($login = null)
    {
        return true;
    }
 }