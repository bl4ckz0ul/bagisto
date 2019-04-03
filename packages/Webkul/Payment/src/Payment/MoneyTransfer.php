<?php

namespace Webkul\Payment\Payment;

/**
 * Money Transfer payment method class
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class MoneyTransfer extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'moneytransfer';

    public function getRedirectUrl()
    {

    }
}
