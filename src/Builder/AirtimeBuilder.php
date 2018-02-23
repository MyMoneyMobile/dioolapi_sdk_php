<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 11:46
 */

namespace Diool\Builder;


use Diool\Response\Airtime;

class AirtimeBuilder extends ApiResponseBuilder
{
    public $fees;
    public $revenue;
    public $amount;
    public $externeRef;
    public $currency;

    /**
     * @param mixed $fees
     * @return $this
     */
    public function setFees($fees): AirtimeBuilder
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * @param mixed $revenue
     * @return $this
     */
    public function setRevenue($revenue): AirtimeBuilder
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * @param mixed $amount
     * @return $this
     */
    public function setAmount($amount): AirtimeBuilder
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param mixed $externeRef
     * @return $this
     */
    public function setExterneRef($externeRef): AirtimeBuilder
    {
        $this->externeRef = $externeRef;
        return $this;
    }

    /**
     * @param mixed $currency
     * @return $this
     */
    public function setCurrency($currency): AirtimeBuilder
    {
        $this->currency = $currency;
        return $this;
    }

    public function build(): Airtime{
        return new Airtime($this);
    }

}