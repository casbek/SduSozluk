<?php 
 

	include "ban_kontrol.php";



if(!isset($_SESSION['k_id'])){
		 header("Location: http://sdusozluk.net/misafir.php"); 
		
	}


 if($_POST['k_adi_sikayet']==$_SESSION['k_adi']){

       echo "KENDİNİZİ ŞİKAYET EDEMEZSİNİZ" ;
 }
 else {
  $db = new PDO("mysql:host=94.138.199.100;dbname=ssdu;charset=utf8","sdusozluk_db","SduSozluk1235");
    $sorgu = $db->prepare("INSERT INTO kullanici_sikayet (sikayet_eden,sikayet_edilen) VALUES(?,?)");
    $sorgu->execute(array($_SESSION['k_adi'],test_input($_POST['k_adi_sikayet'])));
     
    echo "KUllanıcı Şİkayet edilmiştir";
    header("refresh:2;url=mesaj_yolla.php");

 }



	     function test_input($data) {
  
        $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
            
            
      return $data;
            
            
    }
	



?>