<?php
session_start();
  $db = new PDO("mysql:host=94.138.199.100;dbname=ssdu;charset=utf8","sdusozluk_db","SduSozluk1235");
for($i = 0; $i <3; $i++) {
// MAİLİN SORGUSU
$sorgu = $db->prepare("SELECT e_mail FROM kullanicilar WHERE e_mail=?");
$sorgu->execute(array($_SESSION['user_email_address']));
$x = $sorgu->fetchAll(PDO::FETCH_ASSOC);
$xx = $sorgu->rowCount();
//MAİL VAR MI VARSA O BİLGİLERİ ÇEK
if ($xx = $sorgu->rowCount() > 0)
{
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE e_mail=?");
    $sorgu->execute(array(
        $_SESSION['user_email_address']
    ));
    $islem = $sorgu->fetch();

    if ($islem)
    {

        $_SESSION['e_mail'] = $islem['e_mail'];
        $_SESSION['ad'] = $islem['ad'];
        $_SESSION['soyad'] = $islem['soyad'];
        $_SESSION['k_adi'] = $islem['k_adi'];
        $_SESSION['tel_no'] = $islem['tel_no'];
        $_SESSION['dogum_tarihi'] = $islem['dogum_tarihi'];
        $_SESSION['cinsiyet'] = $islem['cinsiyet'];
        $_SESSION['k_id'] = $islem["k_id"];
        $_SESSION['sifre'] = $islem['sifre'];
        $_SESSION['mod_key'] = $islem['mod_key'];
        echo $input_sifre;

        // gidilcek sayfa header()
        header("Location:http://sdusozluk.net/index.php");
    }
}
else   //VERİTABANINA KAYDETME
{

    if (isset($_SESSION['user_first_name'])) //BU GOOGLE VERİSİ VAR MI GOOGLE İLE KAYIT
    {
        $ad = $_SESSION['user_first_name'];
        $soyad = $_SESSION['user_last_name'];
    }
    else   //FACEBOOK İLE KAYIT
    {
        $ad_soyad = explode(" ", $_SESSION['user_name']);
        $ad = $ad_soyad[0];
        $soyad = $ad_soyad[1];
    }
    //FACEBOOK VE GOOGLE ORTAK VERİLERİ
    //RASTGELE KULLANICI ADI
    $word = array_merge(range('a', 'z') , range('A', 'Z'));
    shuffle($word);
    $k_adi = substr(implode($word) , 0, 8);
    $e_mail = $_SESSION['user_email_address'];
    
    $ekle = $db->prepare("INSERT INTO kullanicilar SET ad = ?,soyad = ?,k_adi = ?,tel_no = ?,dogum_tarihi = ?,cinsiyet = ?,e_mail = ?, sifre= ?");

    $ekle->execute([$ad, $soyad, $k_adi, '', '', '', $e_mail,'']);
    
}
}
?>