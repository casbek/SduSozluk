<?php 

	include "ban_kontrol.php";

ob_flush();

  $db = new PDO("mysql:host=94.138.199.100;dbname=ssdu;charset=utf8","sdusozluk_db","SduSozluk1235");
$sil = $db->prepare("DELETE  FROM kullanicilar WHERE k_id = ? ");
$sil -> execute(array($_SESSION['k_id']));

$sil1 = $db->prepare("DELETE FROM  entry  WHERE sahip = ? ");
$sil1 -> execute(array($_SESSION['k_id']));

$sil2 = $db->prepare("DELETE  FROM baslik WHERE sahip = ? ");
$sil2 -> execute(array($_SESSION['k_id']));


if($sil && $sil1 && $sil2){
    echo "<div class='alert alert-primary' role='alert'>
    <a href='#' class='alert-link'></a>BAŞARI İLE SİLİNDİ
  </div>";
                      
   
    header("Refresh: 1; url=http://sdusozluk.net/kayit_olma.php");
}
else{

    
    echo "<div class='alert alert-primary' role='alert'>
    <a href='#' class='alert-link'></a>SİlME işlemi başarısız
  </div>";
}


ob_end_flush();



//$sorgu->execute(array($_SESSION['k_adi'],$_SESSION['k_id']));


//DELETE FROM [tablo adı] WHERE [şartlar]




?>