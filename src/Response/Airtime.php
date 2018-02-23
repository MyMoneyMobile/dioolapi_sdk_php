<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 11:42
 */

namespace Diool\Response;


use Diool\Builder\AirtimeBuilder;
use Diool\Builder\ApiResponseBuilder;

class Airtime extends ApiResponseBuilder
{
    protected $fees;
    protected $revenue;
    protected $amount;
    protected $externeRef;
    protected $currency;

    /**
     * Airtime constructor.
     * @param AirtimeBuilder $builder
     */
    public function __construct(AirtimeBuilder $builder)
    {
        $this->fees = $builder->fees;
        $this->revenue = $builder->revenue;
        $this->amount = $builder->amount;
        $this->externeRef = $builder->externeRef;
        $this->currency = $builder->currency;
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
    public function getRevenue(){
        return $this->revenue;
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