<?php
namespace Rcason\MqAmqp\Model;

class AMQPMessage extends \PhpAmqpLib\Message\AMQPMessage
{
    public function __construct($body = '', $properties = array())
    {
        static::$propertyDefinitions = array_merge(static::$propertyDefinitions, [
            'retries' => 'octet',
            'run_task_at' => 'timestamp',
        ]);

        parent::__construct($body, $properties);
    }
}
