<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 22/02/2018
 * Time: 10:56
 */

namespace Diool\Builder;

class ApiResponseBuilder{

    public $code;
    public $message;
    public $success = false;
    public $time;
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
     * @param bool $success
     * @return $this
     */
    public function setSuccess(bool $success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @param mixed $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;

    }


}