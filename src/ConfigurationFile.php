<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel;

class ConfigurationFile
{
    public array $configs;

    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    public function updateWebServersIpAddress(array $ipAddresses)
    {
        $this->configs['servers']['web'] = array_map(function ($ipAddress) {
            return "- {$ipAddress}";
        }, $ipAddresses);

        if (array_key_exists('proxy', $this->configs) && !in_array($this->configs['proxy'], $ipAddresses)) {
            $this->configs['proxy'] = $ipAddresses[0];
        }

        return $this->configs;
    }

    public function toArray()
    {
        return $this->configs;
    }
}
