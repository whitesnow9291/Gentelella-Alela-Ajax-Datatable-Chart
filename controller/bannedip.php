<?php
$cmd = $_POST['cmd'];
if($cmd == 'getHtaccessData'){
    $myfile = fopen("../.htaccess", "r") or die("Unable to open file!");
    echo json_encode(fread($myfile,filesize("../.htaccess")));
    fclose($myfile);
    return;
}
if($cmd == 'saveHtaccessData'){
    $data = $_POST['data'];
    $myfile = fopen("../.htaccess", "w") or die("Unable to open file!");
    echo json_encode(fwrite($myfile,$data));
    fclose($myfile);
    return;
}
?>