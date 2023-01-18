<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=oyuncak2; charset=utf8", 'root', 'arzu123');
    //echo "Veritabanı bağlantısı başarılı";
}
catch(Exception $e)
{
    echo $e->getMessage();
}



?>