<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Ec2;

use Aws\Ec2\Ec2Client;
use CloudFactorHQ\Sentinel\Event\InstanceStateChange;

class Ec2Provider
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
     * @param InstanceStateChange $instanceStateChange
     * @return array
     */
    public function getRunningInstances(InstanceStateChange $instanceStateChange): array
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

        if (empty($response['Reservations'])) {
            return $instances;
        } 

        foreach ($response['Reservations'] as $reservation) {
            $instances[] = new Ec2Instance($reservation['Instances'][0]);
        }

        return $instances;
    }
}
