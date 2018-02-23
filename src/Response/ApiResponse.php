<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 21/02/2018
 * Time: 16:36
 */

namespace Diool\Response;

use Diool\Builder\ApiResponseBuilder;

class ApiResponse{

    protected $code;
    protected $message;
    protected $success;

    public function __construct(ApiResponseBuilder $builder){
        $this->code = $builder->code;
        $this->message = $builder->message;
        $this->success = $builder->success;
    }
}