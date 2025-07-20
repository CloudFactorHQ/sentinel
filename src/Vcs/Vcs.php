<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Vcs;

use CloudFactorHQ\Sentinel\ConfigurationFile;

abstract class Vcs
{
    abstract public function sendPullRequest(ConfigurationFile $configurationFile);
    abstract protected function getRequestHeaders();
}
