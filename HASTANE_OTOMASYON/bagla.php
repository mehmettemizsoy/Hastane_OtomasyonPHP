<?php 

try{
    $db = new PDO("mysql:host=localhost;dbname=hastane_otomasyon;charest=utf-8", 'root','');
    //echo 'veritabanı bağlantısı başarılı';
}catch(Exception $e){
    echo $e->getMessage();
}


?>