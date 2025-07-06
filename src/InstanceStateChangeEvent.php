<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel;

use Bref\Event\EventBridge\EventBridgeEvent;
use RuntimeException;

class InstanceStateChangeEvent
{
    private $body;

    protected function __construct(string $body)
    {
        $this->body = json_decode($body, true);

        $this->validate($this->body);
    }

    /**
     * Capture event from Eventbridge.
     *
     * @param string $body
     * @return static
     */
    public static function capture(string $body): static
    {
        return new static($body);
    }

    /**
     * The ec2 state change event
     *
     * @return array
     */
    public function event(): array
    {
        return $this->body;
    }

    /**
     * Get the instance id.
     *
     * @return string
     */
    public function getInstanceId(): string
    {
        return $this->body['detail']['instance-id'];
    }

    /**
     * Get the state of the instance.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->body['detail']['state'];
    }

    /**
     * Make sure the event is the one we are interested in.
     *
     * @param EventBridgeEvent $event
     * @return void
     */
    protected function validate(array $body): void
    {
        if ($body['source'] !== 'aws.ec2' || $body['detail-type'] !== 'EC2 Instance State-change Notification') {
            throw new RuntimeException('Not the expected event. Cannot proceed.');
        }
    }
}
