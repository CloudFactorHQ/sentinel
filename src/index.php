<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bref\Context\Context;
use Bref\Event\EventBridge\EventBridgeEvent;
use Bref\Event\EventBridge\EventBridgeHandler;
use CloudFactorHQ\Sentinel\Ec2\Ec2Provider;
use CloudFactorHQ\Sentinel\Event\InstanceStateChange;

class EventHandler extends EventBridgeHandler
{
    public function handleEventBridge(EventBridgeEvent $event, Context $context): void
    {
        //1. On Event
        //---------------------------
        //1. Get the event - InstanceStateChange::capture($event)
        //2. Validate the event
        $stateChange = InstanceStateChange::capture($event);

        //2. On EC2 - Get running instances' ip
        //----------------------------------
        //1. Get the instance Id
        //2. Make the request to get the instance's public ip address
        $instances = (new Ec2Provider())->getRunningInstances($stateChange);

        if (empty($instances)) {
            exit;
        }

        $instanceIPAddresses = array_map(function ($instance) {
            return $instance->getPublicIPAddress();
        }, $instances);

        print_r($instanceIPAddresses);

        // Make a request to read the Kamal configuration file from S3
        //On S3 - The bucket
        //-------------------
        //1. Make a call to get the kamal configuration file
        //2. Read the yaml file and set the public ip
        //3. Serialize and push a class that contains the details of the configuration file to SQS
    }
}

return new EventHandler();
