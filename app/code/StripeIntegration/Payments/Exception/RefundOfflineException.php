<?php

namespace StripeIntegration\Payments\Exception;

class RefundOfflineException extends \Magento\Framework\Exception\LocalizedException
{
    public function __construct($msg)
    {
        if (is_string($msg))
            parent::__construct(__($msg));
        else
            parent::__construct($msg);
    }
}
