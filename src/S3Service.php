<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel;

use Aws\S3\S3Client;

class S3Service
{
    private S3Client $s3Client;

    public function __construct()
    {
        $this->s3Client = new S3Client([
            'region' => getenv('AWS_REGION'),
            'version' => '2006-03-01',
        ]);
    }

    public function getConfigurationFile()
    {
        $file = $this->s3Client->getObject([
            'Bucket' => getenv('S3_BUCKET_NAME'),
            'Key' => getenv('CONFIGURATION_FILE_KEY_NAME'),
        ]);

        $body = $file->get('Body');
        $contentLength = $file->get('ContentLength');

        if ($contentLength < 1) {
            // throw exception and exit gracefully
        }

        $configArray = yaml_parse($body->read($contentLength));

        if (!$configArray) {
            // Couldn't parse configuration file. Log error and exit gracefully.
        }

        return new ConfigurationFile($configArray);
    }
}
