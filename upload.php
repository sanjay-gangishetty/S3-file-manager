<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadedFiles = $_FILES['files'];
    $fileCount = count($uploadedFiles['name']);
    try {
        for ($i = 0; $i < $fileCount; $i++) {
            $tmpFilePath = $uploadedFiles['tmp_name'][$i];
            $filename = $uploadedFiles['name'][$i];
            $s3->putObject([
                'Bucket' => $bucket,
                'Key' => $filename,
                'Body' => fopen($tmpFilePath, 'rb'),
            ]);
        }
        echo "File uploaded successfully.";
    } catch (Exception $e) {
        echo "Error Uploading File : " . $e->getMessage();
    }
}
?>
