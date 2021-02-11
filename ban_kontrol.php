<?php 
	ob_start();
    session_start();
  $db = new PDO("mysql:host=94.138.199.100;dbname=ssdu;charset=utf8","sdusozluk_db","SduSozluk1235");
	
	if(!(isset($_SESSION['k_id']))){
		
	} else {
	
	
    $lazım = $_SESSION['k_id'];
    $v = $db->prepare("SELECT * FROM kullanicilar WHERE k_id=?");
    $v ->execute(array($lazım));
    $c = $v->fetch(PDO::FETCH_ASSOC);
      if($c['ban']==1){
      
        header("Location:http://sdusozluk.net/banli_sayfa.php");
 }}


?>