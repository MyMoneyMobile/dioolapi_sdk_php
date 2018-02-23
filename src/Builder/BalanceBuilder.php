<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 10:49
 */

namespace Diool\Builder;


use Diool\Response\Balance;

class BalanceBuilder extends ApiResponseBuilder
{
    public $deposit;
    public $revenue;

    /**
     * @param mixed $deposit
     * @return BalanceBuilder
     */
    public function setDeposit($deposit): BalanceBuilder
    {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * @param mixed $revenue
     * @return BalanceBuilder
     */
    public function setRevenue($revenue): BalanceBuilder
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * @param mixed $time
     * @return BalanceBuilder
     */
    public function setTime($time): BalanceBuilder
    {
        $this->time = $time;
        return $this;
    }


    public function build(): Balance{
        return new Balance($this);
    }
}