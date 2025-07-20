<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Vcs;

use CloudFactorHQ\Sentinel\ConfigurationFile;
use RuntimeException;

class VcsManager
{
    private string $vcsName;

    private string $authToken;

    private string $repositoryUri;

    public function __construct()
    {
        $this->validateCredentials();

        $this->vcsName = $_ENV['VCS_NAME'];
        $this->authToken = $_ENV['AUTH_TOKEN'];
        $this->repositoryUri = $_ENV['REPOSITORY_URI'];
    }

    public function filePullRequest(ConfigurationFile $configurationFile)
    {
        try {
            $this->getConfiguredVcs()->sendPullRequest($configurationFile);
        } catch (ConnectionException $e) {
            // Log exception and exit gracefully
        } catch (RequestException $e) {
            // Log exception and exit gracefully
        }
    }

    public function getConfiguredVcs()
    {
        $vcsClass = ucwords($this->getConfigureName());

        $dirContents = scandir(__DIR__);

        if (!in_array("{$vcsClass}.php", $dirContents)) {
            throw new RuntimeException('Vcs class does not exists.');
        }

        $qualifiedName = "CloudFactorHQ\\Sentinel\Vcs\\{$vcsClass}";

        return new $qualifiedName();
    }

    protected function getConfigureName()
    {
        return $this->vcsName;
    }

    protected function getConfiguredAuthToken()
    {
        return $this->authToken;
    }

    protected function getConfiguredRepositoryUri()
    {
        return $this->repositoryUri;
    }

    private function validateCredentials()
    {
        if (empty($_ENV['VCS_NAME'])) {
            throw new RuntimeException('VCS name is required.');
        }

        if (empty($_ENV['AUTH_TOKEN'])) {
            throw new RuntimeException('VCS authentication code is required.');
        }

        if (empty($_ENV['REPOSITORY_URI'])) {
            throw new RuntimeException('Repository uri is required.');
        }
    }
}
