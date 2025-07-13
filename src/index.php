<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bref\Context\Context;
use Bref\Event\Sqs\SqsEvent;
use Bref\Event\Sqs\SqsHandler;
use Bref\Event\Sqs\SqsRecord;
use CloudFactorHQ\Sentinel\Ec2\Service as Ec2Service;
use CloudFactorHQ\Sentinel\S3Service;
use CloudFactorHQ\Sentinel\InstanceStateChangeEvent;

class SentinelKamalConfigurationUpdater extends SqsHandler
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
        $message = $event->getRecords()[0];

        //1. Validate the received event
        $this->validate($message);

        //2. Get running ec2 instance ip addresses
        $stateChangeEvent = InstanceStateChangeEvent::capture($message->getBody());
        $instances = (new Ec2Service())->getRunningInstances($stateChangeEvent);

        if (count($instances) < 1) {
            //Log exception and exit gracefully

        }

        $instanceIPAddresses = array_map(function ($instance) {
            return $instance->getPublicIPAddress();
        }, $instances);

        if (count($instanceIPAddresses) < 1) {
            // Log exception and exit gracefully

        }

        //3. Update IP addresses on the Kamal configuration file
        $configurationFile = (new S3Service())->getConfigurationFile();

        $configurationFile->updateWebServersIpAddress($instanceIPAddresses);

        print_r(json_encode($configurationFile->toArray()));

        //1. Set the configure SCM token in template.md, this would be read from the env file
        //2. Will support Multiple SCM
        //3. Sends a PR request containing the content of the updated Kamal configuration file
        //4. Handle errors and exit gracefully
    }

    private function validate(SqsRecord $message)
    {
        $parts = explode('/', getenv('SQS_QUEUE_URL'));
        $queueName = $parts[count($parts) - 1];

        // Do not process event if not from our sqs queue
        if ($message->getQueueName() !== $queueName) {
            // Log exceptions and exit gracefully

        }
    }
}

// Instantiate and return the handler to Bref.
return new SentinelKamalConfigurationUpdater();