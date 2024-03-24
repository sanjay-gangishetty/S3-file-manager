<?php
include 'config.php';

if(isset($_GET['delete'])){
    $key = $_GET['delete'];
    try{
        $s3->deleteObject([
            'Bucket' => $bucket,
            'Key' => $key,
        ]);
        echo "File deleted successfully.";
    }catch(Exception $e){
        echo "error deleting file : ".$e->getMessage();
    }
}
?>
