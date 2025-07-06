<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Ec2;

use Aws\Ec2\Ec2Client;
use CloudFactorHQ\Sentinel\InstanceStateChangeEvent;

class Service
{
    private Ec2Client $ec2Client;

    public function __construct()
    {
        $this->ec2Client = new Ec2Client([
            'region' => getenv('AWS_REGION'),
            'version' => 'latest',
        ]);
    }

    /**
     * Return all the running instances.
     *
     * @param InstanceStateChangeEvent $instanceStateChangeEvent
     * @return array
     */
    public function getRunningInstances(InstanceStateChangeEvent $instanceStateChangeEvent): array
    {
        $instances = [];

        try {
            $response = $this->ec2Client->describeInstances([
                'Filters' => [
                    [
                        'Name' => 'instance-state-name',
                        'Values' => ['running'],
                    ]
                ]
            ]);
        } catch (Exception $e) {
            //log exception and return empty instances,
            // if the instances is empty then there will be no configuration file update
            return $instances;
        }

        if (count($response['Reservations']) < 1) {
            return $instances;
        } 

        foreach ($response['Reservations'] as $reservation) {
            $instances[] = new Instance($reservation['Instances'][0]);
        }

        return $instances;
    }
}
