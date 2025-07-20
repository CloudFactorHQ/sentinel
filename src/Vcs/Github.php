<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Vcs;

use CloudFactorHQ\Sentinel\ConfigurationFile;

class Github extends Vcs
{
    public function sendPullRequest(ConfigurationFile $configurationFile)
    {
        return (new Request())->post(
            $this->getRepositoryUrl() . '/pulls',
            $this->getPayload($configurationFile)
        );
    }

    protected function getRequestHeaders()
    {
        $authToken = $_ENV['auth_token'];

        return [
            'Authorization' => "Bearer {$authToken}",
            'Accept' => 'application/vnd.github+json',
            'X-GitHub-Api-Version' => '2022-11-28',
        ];
    }

    protected function getRepositoryUrl()
    {
        return $_ENV['repository_url'];
    }

    protected function getPayload(ConfigurationFile $configurationFile)
    {
        $uniqueString = uniqid();

        return [
            'title' => "{$uniqueString}:Sentinel updating Kamal configuration.",
            'base' => 'main',
            'head' => "sentinel_kamal_config:{$uniqueString}",
            'body' => 'This is a test PR.', //$configurationFile->get(), // Return the file
        ];
    }
}
