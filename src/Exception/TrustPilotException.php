<?php
namespace LarsNieuwenhuizen\Trustpilot\Exception;

use Throwable;

class TrustPilotException extends \Exception
{

    /**
     * TrustPilotException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'TrustPilot client threw an error', $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}