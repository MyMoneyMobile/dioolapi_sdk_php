<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 21/02/2018
 * Time: 14:52
 */

namespace Diool\Response;


use Diool\Builder\ApiResponseBuilder;
use Diool\Builder\BalanceBuilder;

class Balance extends ApiResponseBuilder {

    protected $deposit;
    protected $revenue;
    /**
     * Balance constructor.
     * @param BalanceBuilder $builder
     */
    public function __construct(BalanceBuilder $builder){
        $this->deposit = $builder->deposit;
        $this->revenue = $builder->revenue;
        $this->time = $builder->time;
        $this->code = $builder->code;
        $this->message = $builder->message;
        $this->success = $builder->success;
    }

    /**
     * @return mixed
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->revenue;
    }





}
