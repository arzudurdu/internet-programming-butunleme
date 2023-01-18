<?php 
ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit'])){
    $username = $_POST['username'];
    $password= md5($_POST['password']);
    $password_again = md5(@$_POST['password_again']);

    if(!$username){
        echo "Lütfen kullanıcı adınızı girin";
    } else if(!$password || !$password_again){
        echo "Lütfen şifrenizi girin";
    } else if($password != $password_again){
        echo "Girdiğiniz şifreler birbirleriyle aynı değil";
    } else{
        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_pwd = ?');
        $ekle = $sorgu->execute([
            $username, $password
        ]);
        if($ekle){
            echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
            header('Refresh:2; giris.php');
        } else{
            echo "Bir hata oluştu, tekrar kontrol edin";    
        }
    }
}


if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if(!$username){
        echo "kullanıcı adınızı giriniz";
    } else if(!$password){
        echo "şifrenizi girin";
    } else{
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? && user_pwd = ?');
        $kullanici_sor->execute([
            $username, $password
        ]);

         $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz";
            header('Refresh:2; ../index.php');
        } else{
            echo "Bir hata oluştu tekrar kontrol edin";
        }
    }
}

?>