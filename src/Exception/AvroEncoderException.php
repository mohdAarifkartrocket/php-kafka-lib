<?php

declare(strict_types=1);

namespace Jobcloud\Kafka\Exception;

class AvroEncoderException extends \RuntimeException
{
    const NO_SCHEMA_FOR_TOPIC_MESSAGE = 'There is no %s avro schema defined for the topic %s';
    const UNABLE_TO_LOAD_DEFINITION_MESSAGE = 'Was unable to load definition for schema %s';
}
