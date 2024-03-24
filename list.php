<?php
// Lists Objects present in the bucket
$objects = $s3->listObjects([
    'Bucket' => $bucket,
])
?>
