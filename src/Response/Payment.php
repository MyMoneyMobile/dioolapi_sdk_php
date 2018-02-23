<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 11:42
 */

namespace Diool\Response;

use Diool\Builder\ApiResponseBuilder;
use Diool\Builder\PaymentBuilder;

class Payment extends ApiResponseBuilder
{
    protected $amount;
    protected $externeRef;
    protected $currency;
    protected $fees;

    /**
     * Payment constructor.
     * @param PaymentBuilder $builder
     */
    public function __construct(PaymentBuilder $builder)
    {
        $this->amount = $builder->amount;
        $this->externeRef = $builder->externeRef;
        $this->currency = $builder->currency;
        $this->fees = $builder->fees;
        $this->time = $builder->time;
        $this->code = $builder->code;
        $this->message = $builder->message;
        $this->success = $builder->success;
    }

    /**
     * @return mixed
     */
    public function getFees(){
        return $this->fees;
    }

    /**
     * @return mixed
     */
    public function getAmount(){
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getExterneRef(){
        return $this->externeRef;
    }

    /**
     * @return mixed
     */
    public function getCurrency(){
        return $this->currency;
    }




}