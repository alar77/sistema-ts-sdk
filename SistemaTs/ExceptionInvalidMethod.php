<?php
namespace SistemaTs;

/**
 *
 * @author giova
 *        
 */
class ExceptionInvalidMethod extends \Exception
{

    /**
     *
     * @param mixed $message
     *            [optional]
     * @param mixed $code
     *            [optional]
     * @param mixed $previous
     *            [optional]
     */
    public function __construct($message = null, $code = null, $previous = null)
    {
        parent::__construct($message = null, $code = null, $previous = null);
    }
}

