<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel\Tests\Vcs;

use CloudFactorHQ\Sentinel\Vcs\Github;
use CloudFactorHQ\Sentinel\Vcs\VcsManager;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class VcsManagerTest extends TestCase
{
    public function test_can_validate_vcs_name_credential()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('VCS name is required.');

        $vcsManager = new VcsManager();
    }

    public function test_can_validate_auth_token_credential()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('VCS authentication code is required.');

        $_ENV['VCS_NAME'] = 'github';
        $vcsManager = new VcsManager();
    }

    public function test_can_validate_repository_uri_credential()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Repository uri is required.');

        $_ENV['VCS_NAME'] = 'github';
        $_ENV['AUTH_TOKEN'] = 'github_pat_ABCD';
        $vcsManager = new VcsManager();
    }

    public function test_can_get_configured_vcs()
    {
        $_ENV['VCS_NAME'] = 'github'; // Github configured
        $_ENV['AUTH_TOKEN'] = 'github_pat_ABCD';
        $_ENV['REPOSITORY_URI'] = 'https://myrepo.com/owner/repo';

        $vcsManager = new VcsManager();

        $vcsClass = $vcsManager->getConfiguredVcs();

        $this->assertInstanceOf(Github::class, $vcsClass);
    }

    public function test_will_throw_exception_when_configured_vcs_class_not_available()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Vcs class does not exists.');

        $_ENV['VCS_NAME'] = 'bitbucket'; // Bitbucket configured
        $_ENV['AUTH_TOKEN'] = 'github_pat_ABCD';
        $_ENV['REPOSITORY_URI'] = 'https://myrepo.com/owner/repo';

        $vcsManager = new VcsManager();

        $vcsClass = $vcsManager->getConfiguredVcs();
    }
}
