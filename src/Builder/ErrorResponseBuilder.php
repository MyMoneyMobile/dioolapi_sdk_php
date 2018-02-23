<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 12:02
 */

namespace Diool\Builder;


use Diool\Response\ErrorResponse;

class ErrorResponseBuilder
{
    public $code;
    public $message;
    public $success;

    /**
     * @param mixed $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param mixed $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param mixed $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    public function build(): ErrorResponse{
        return new ErrorResponse($this);
    }


}