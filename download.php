<?php
require_once('./db.php');

function download_client(){
    $attachment_location = "pvpbooster.exe";
    if (file_exists($attachment_location)) {
        #header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
        #header("Cache-Control: public"); // needed for internet explorer
        header("Content-Type: application/octet-stream"); #application/zip
        header("Content-Transfer-Encoding: Binary");
        header("Content-Length:".filesize($attachment_location));
        header("Content-Disposition: attachment; filename=crackme2.exe");
        readfile($attachment_location);
        die();
    } else {
        die("Error: File not found.");
    }
}

download_client()

?>