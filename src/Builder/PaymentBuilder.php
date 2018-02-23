<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 11:46
 */

namespace Diool\Builder;

use Diool\Response\Payment;

class PaymentBuilder extends ApiResponseBuilder
{
    public $amount;
    public $externeRef;
    public $currency;
    public $fees;

    /**
     * @param mixed $fees
     * @return PaymentBuilder
     */
    public function setFees($fees): PaymentBuilder
    {
        $this->fees = $fees;
        return $this;
    }


    /**
     * @param mixed $amount
     * @return PaymentBuilder
     */
    public function setAmount($amount): PaymentBuilder
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param mixed $externeRef
     * @return PaymentBuilder
     */
    public function setExterneRef($externeRef): PaymentBuilder
    {
        $this->externeRef = $externeRef;
        return $this;
    }

    /**
     * @param mixed $currency
     * @return PaymentBuilder
     */
    public function setCurrency($currency): PaymentBuilder
    {
        $this->currency = $currency;
        return $this;
    }

    public function build(): Payment{
        return new Payment($this);
    }

}