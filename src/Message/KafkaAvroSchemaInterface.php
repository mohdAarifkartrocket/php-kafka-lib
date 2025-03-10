<?php

declare(strict_types=1);

namespace Jobcloud\Kafka\Message;

interface KafkaAvroSchemaInterface
{
    const LATEST_VERSION = -1;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return integer
     */
    public function getVersion(): int;

    /**
     * @param \AvroSchema $definition
     * @return void
     */
    public function setDefinition(\AvroSchema $definition);

    /**
     * @return \AvroSchema|null
     */
    public function getDefinition();
}
