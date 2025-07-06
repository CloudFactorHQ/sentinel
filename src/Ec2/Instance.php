<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Ec2;

class Instance
{
    private string $publicIPAddress;

    private array $details;

    public function __construct(array $details)
    {
        $this->publicIPAddress = $details['PublicIpAddress'];
        $this->details = $details;
    }

    /**
     * Get the Public IP address of the instance.
     *
     * @return string
     */
    public function getPublicIPAddress(): string
    {
        return $this->publicIPAddress;
    }

    /**
     * Get all the details about the instance.
     *
     * @return array
     */
    public function getDetails(): array
    {
        return $this->details;
    }
}
