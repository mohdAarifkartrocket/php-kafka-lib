<?php

declare(strict_types=1);

namespace Jobcloud\Kafka\Exception;

class KafkaProducerException extends \Exception
{
    const TIMEOUT_EXCEPTION_MESSAGE = 'Error message timed out: %s';
    const UNEXPECTED_EXCEPTION_MESSAGE = 'Unexpected error during production: %s';
    const NO_BROKER_EXCEPTION_MESSAGE = 'You must define at least one broker';
    const UNSUPPORTED_MESSAGE_EXCEPTION_MESSAGE = 'Produce only supports messages of type %s';
}
