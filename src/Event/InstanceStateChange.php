<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Event;

use Bref\Event\EventBridge\EventBridgeEvent;
use RuntimeException;

class InstanceStateChange
{
    private EventBridgeEvent $event;

    protected function __construct(EventBridgeEvent $event)
    {
        $this->validate($event);

        $this->event = $event;
    }

    /**
     * Capture event from Eventbridge.
     *
     * @param EventBridgeEvent $event
     * @return static
     */
    public static function capture(EventBridgeEvent $event): static
    {
        return new static($event);
    }

    /**
     * The ec2 state change event
     *
     * @return EventBridgeEvent
     */
    public function event(): EventBridgeEvent
    {
        return $this->event;
    }

    /**
     * Get the instance id.
     *
     * @return string
     */
    public function getInstanceId(): string
    {
        return $this->event->getDetail()['instance-id'];
    }

    /**
     * Get the state of the instance.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->event->getDetail()['state'];
    }

    /**
     * Make sure the event is the one we are interested in.
     *
     * @param EventBridgeEvent $event
     * @return void
     */
    protected function validate(EventBridgeEvent $event): void
    {
        if ($event->getSource() !== 'aws.ec2' || $event->getDetailType() !== 'EC2 Instance State-change Notification') {
            throw new RuntimeException('Not the expected event. Cannot proceed.');
        }
    }
}
