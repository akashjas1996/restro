
<?php
error_reporting(E_ALL);

function encryptIt_webs($q) {
    $cryptKey = '@#preztishwebscrat';
    $qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
    return( $qEncoded );
}

function decryptIt_webs($q) {
    $cryptKey = '@#preztishwebscrat';
    $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
    return( $qDecoded );
}
date_default_timezone_set("Asia/Calcutta");
$host="127.0.0.1";
$user="root";
$pass="password";
$dbname="restro";
$link=@mysqli_connect($host,$user,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        echo"Failed to Connect!!";
        exit();
    }
    else
    {
         //echo "Connected Successfully";
    }
?>