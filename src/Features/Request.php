<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 21/02/2018
 * Time: 13:03
 */

namespace Diool\Features;


use Diool\Base;
use Diool\Builder\AirtimeBuilder;
use Diool\Builder\BalanceBuilder;
use Diool\Builder\ErrorResponseBuilder;
use Diool\Builder\PaymentBuilder;
use Diool\Response\Airtime;
use Diool\Response\ErrorResponse;
use Diool\Response\Payment;
use Exception;

class Request extends Base {


    /**
     * Get your current account balance and revenue
     * @return array|\Diool\Response\Balance|ErrorResponse|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getBalance(){
        try{
            $response = $this->callApi("GET",Base::BALANCE);
            if($response instanceof ErrorResponse){
                return $response;
            }
            $message = $response->message;
            $code = $response->code;
            if($code === 0){
                $revenu = $response->result->depositAccountBalance;
                $balance = $response->result->revenueAccountBalance;
                $time = $response->result->timeStamp;
                return (new BalanceBuilder())
                    ->setCode(0)
                    ->setMessage($message)
                    ->setDeposit($revenu)
                    ->setSuccess(true)
                    ->setRevenue($balance)
                    ->setTime($time)
                    ->build();
            }
            return (new ErrorResponseBuilder())
                ->setCode($code)
                ->setMessage($message)
                ->setSuccess(false)
                ->build();
        } catch (Exception $e) {
            return (new ErrorResponseBuilder())
                ->setCode($e->getCode())
                ->setMessage($e->getMessage())
                ->setSuccess(false)
                ->build();
        }
    }

    /**
     * @param string $number Phone number with country indicator. From now only 237
     * @param string $amount
     * @return Airtime|ErrorResponse
     */
    public function airtime($number, $amount){
        try{
            $data = [
                'accountIdentifier' =>$number,
                'amount' =>$amount
            ];
            $response = $this->callApi('POST',Base::AIRTIME,$data);
            if($response instanceof ErrorResponse){
                return $response;
            }
            $message = $response->message;
            $code = $response->code;
            if($code === 0){
                $message = $response->message;
                $time = $response->result->timeStamp;
                $currency = $response->result->recipientCurrency;
                $revenue = $response->result->userRevenue;
                $amount = $response->result->recipientAmount;
                $fees = $response->result->userFees;
                $refExterne = $response->result->extRecipientTransactionRef;
                return ( new AirtimeBuilder())
                    ->setTime($time)
                    ->setMessage($message)
                    ->setRevenue($revenue)
                    ->setAmount($amount)
                    ->setSuccess(true)
                    ->setFees($fees)
                    ->setExterneRef($refExterne)
                    ->setCurrency($currency)
                    ->build();
            }
            return (new ErrorResponseBuilder())
                ->setCode($code)
                ->setMessage($message)
                ->setSuccess(false)
                ->build();
        } catch (Exception $e) {
            return (new ErrorResponseBuilder())
                ->setCode($e->getCode())
                ->setMessage($e->getMessage())
                ->setSuccess(false)
                ->build();
        }
    }


    /**
     * Send payment request
     * @param $number
     * @param $amout
     * @return ErrorResponse|Payment
     */
    public function sendPayment($number, $amout){
        try{
            $data = [
                'accountIdentifier' =>$number,
                'amount' =>$amout
            ];
            $response = $this->callApi('POST',Base::PAYMENT,$data);
            if($response instanceof ErrorResponse){
                return $response;
            }
            $message = $response->message;
            $code = $response->code;
            if($code === 0){
                $message = $response->message;
                $time = $response->result->timeStamp;
                $currency = $response->result->recipientCurrency;
                $amount = $response->result->recipientAmount;
                $fees = $response->result->userFees;
                $refExterne = $response->result->extRecipientTransactionRef;
                return (new PaymentBuilder())
                    ->setCode($code)
                    ->setTime($time)
                    ->setMessage($message)
                    ->setAmount($amount)
                    ->setSuccess(true)
                    ->setFees($fees)
                    ->setExterneRef($refExterne)
                    ->setCurrency($currency)
                    ->build();
            }
            return (new ErrorResponseBuilder())
                ->setCode($code)
                ->setMessage($message)
                ->setSuccess(false)
                ->build();
        } catch (Exception $e) {
            return (new ErrorResponseBuilder())
                ->setCode($e->getCode())
                ->setMessage($e->getMessage())
                ->setSuccess(false)
                ->build();
        }
    }

}