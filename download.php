<?php
include 'config.php';

if(isset($_GET['download'])){
    $key = $_GET['download'];
    try{
        $result = $s3->getObject([
            'Bucket' => $bucket,
            'Key' => $key,
        ]);

        header('Content-Type: ' . $result['ContentType']);
        header('Content-Disposition: attachment; filename="' . $key . '"');
        header('Content-Length: '.$result['ContentLength']);
        echo $result['Body'];
        exit;
    }catch(Exception $e){
        echo "error downloading file : ".$e->getMessage();
    }
}
?>
