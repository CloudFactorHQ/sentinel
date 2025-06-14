<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bref\Context\Context;
use Bref\Event\Sqs\SqsEvent;
use Bref\Event\Sqs\SqsHandler;

class SentinelSqsConsumerHandler extends SqsHandler
{
    /**
     * Handles an SQS event. This method is called by Bref when the Lambda function
     * is invoked with SQS messages.
     *
     * @param SqsEvent $event The SQS event object containing messages.
     * @param Context $context The Lambda context object, providing runtime information.
     */
    public function handleSqs(SqsEvent $event, Context $context): void
    {
        // Get all records (messages) from the SQS event batch
        $records = $event->getRecords();

        echo "Received SQS batch with " . count($records) . " messages.\n";
    }
}

// Instantiate and return the handler to Bref.
return new SentinelSqsConsumerHandler();