<?php
require './vendor/autoload.php';

use Aws\S3\S3Client;

$accessKeyId = "YOUR_ACCESS_KEY";
$secretAccessKey = "YOUR_SECRET_ACCESS_KEY";
$region = "REGION";
$bucket = 'BUCKET_NAME';

$s3 = new S3Client([
    'version' => 'latest',
    'region' => $region,
    'credentials' => [
        'key' => $accessKeyId,
        'secret' => $secretAccessKey
    ]
]);
?>
