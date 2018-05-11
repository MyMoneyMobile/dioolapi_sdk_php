<?php
namespace Diool;

use Diool\Builder\ErrorResponseBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
*  A Base Class
*
*  @author Fabrice Yopa
*/
class Base{

    public const API_URL = 'https://core.diool.com/dioolapi/v1/';
    public const BALANCE = 'balance';
    public const AIRTIME = 'airtime_credit';
    public const PAYMENT = 'payment';

    protected $client;
    protected $token;
    protected $timeout = 300;
    public function __construct($key){
        $this->client = new Client();
        $this->token = $key;
    }

    /**
     * Call Diool API Base on the request type
     * @param $method
     * @param $request
     * @param array $post
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callApi($method, $request, $post = []){
        try{
            $url = self::API_URL.$request;
            $header = array(
                'Authorization'=>'Bearer ' . $this->token,
                'content-type' => 'application/json',
                'Accept' => 'application/json'
            );
            $response = $this->client->request($method,$url, array(
                'json' => $post,'headers' => $header,'timeout'=>$this->timeout
            ));
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * @param \Exception $e
     * @return Response\ErrorResponse
     */
    protected function statusCodeHandling($e): Response\ErrorResponse
    {
        return (new ErrorResponseBuilder())
            ->setCode($e->getCode())
            ->setMessage($e->getMessage())
            ->setSuccess(false)
            ->build();
    }

    /**
     * @return int
     */
    public function getTimeout(): int{
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout(int $timeout): void{
        $this->timeout = $timeout;
    }



}