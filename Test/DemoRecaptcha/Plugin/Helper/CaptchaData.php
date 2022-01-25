<?php

namespace Test\DemoRecaptcha\Plugin\Helper;

class CaptchaData
{
protected $_captcha = [];

public function __construct(
    \Test\DemoRecaptcha\Model\CaptchaFactory $captchaFactory
) {
    $this->captchaFactory = $captchaFactory;
}

/**
 * @param \Magento\Captcha\Helper\Data $subject
 * @param \Closure $proceed
 * @param $formId
 * @return mixed
 */
public function aroundGetCaptcha(\Magento\Captcha\Helper\Data $subject, \Closure $proceed, $formId)
{
    if ($formId == 'your_form_key') {
        $this->_captcha[$formId] = $this->captchaFactory->create();
        return $this->_captcha[$formId];

    }
    return $proceed($formId);

}
}