<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 12:01
 */

namespace Diool\Response;


use Diool\Builder\ErrorResponseBuilder;

class ErrorResponse{

    protected $code;
    protected $message;
    protected $success;

    /**
     * ErrorResponse constructor.
     * @param ErrorResponseBuilder $builder
     */
    public function __construct(ErrorResponseBuilder $builder)
    {
        $this->code = $builder->code;
        $this->message = $builder->message;
        $this->success = $builder->success;
    }


}