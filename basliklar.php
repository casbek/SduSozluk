  <div class="soldiv d-none d-xl-block">
     
        
        &nbsp; <center> <a href="" style="color:black"> olup bitenler </a></center>
 
    
<div style=" margin: 0px; width: 285px; height: 800px; overflow-y: scroll; overflow-x: hidden;">

    <?php
		

           
$servername = "94.138.199.100";
$username = "sdusozluk_db";
$password = "SduSozluk1235";
$dbname = "ssdu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT baslik_id FROM baslik ORDER BY baslik_id DESC LIMIT 24"; 

$baslik_id = array("");
$basliklar = array("");



$result = $conn->query($sql);



if ($result->num_rows > 0) {
    $i = 0;
    
    
    while($row = $result->fetch_assoc()) {
            $baslik_id [ $i ] =  $row["baslik_id"] ;
    $sorgu= "SELECT baslik FROM baslik WHERE baslik_id='    " .  $row["baslik_id"]   . "       '";
        
       $sonuc = $conn->query($sorgu);
        
        while ($satir = $sonuc->fetch_assoc()) {
            
     $basliklar[ $i ] =  $satir['baslik'];
            $i++;
        
        }
        
    
        
        
    }
} else {
    echo "0 results";
}
$conn->close();
            
           
            ?>
        
        
   
    <ul class="list-group p-2" style="width: 270px;" >
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[0]; ?>&sayfa=1">  <?php echo $basliklar[0]; ?> </a> 
    
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[1]; ?>&sayfa=1"> <?php echo $basliklar[1]; ?> </a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[2]; ?>&sayfa=1"> <?php echo $basliklar[2]; ?></a> 

  </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[3]; ?>&sayfa=1"> <?php echo $basliklar[3]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[4]; ?>&sayfa=1"> <?php echo $basliklar[4]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[5]; ?>&sayfa=1"> <?php echo $basliklar[5]; ?></a> 

  </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[6]; ?>&sayfa=1"><?php echo $basliklar[6]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[7]; ?>&sayfa=1"><?php echo $basliklar[7]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[8]; ?>&sayfa=1"> <?php echo $basliklar[8]; ?></a> 

  </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[9]; ?>&sayfa=1"><?php echo $basliklar[9]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[10]; ?>&sayfa=1"> <?php echo $basliklar[10]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[11]; ?>&sayfa=1"><?php echo $basliklar[11]; ?></a> 

  </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[12]; ?>&sayfa=1"> <?php echo $basliklar[12]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[13]; ?>&sayfa=1"> <?php echo $basliklar[13]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[14]; ?>&sayfa=1"><?php echo $basliklar[14]; ?></a> 

  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[15]; ?>&sayfa=1"><?php echo $basliklar[15]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[16]; ?>&sayfa=1"> <?php echo $basliklar[16]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[17]; ?>&sayfa=1"><?php echo $basliklar[17]; ?></a> 

  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[18]; ?>&sayfa=1"> <?php echo $basliklar[18]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[19]; ?>&sayfa=1"> <?php echo $basliklar[19]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[20]; ?>&sayfa=1"> <?php echo $basliklar[20]; ?></a> 

  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[21]; ?>&sayfa=1"> <?php echo $basliklar[21]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[22]; ?>&sayfa=1"> <?php echo $basliklar[22]; ?></a> 

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <a class="badge badge-light" href="<?php echo " baslik1.php?baslik=". $baslik_id[23]; ?>&sayfa=1"> <?php echo $basliklar[23]; ?></a> 

  </li>
</ul>
        
        
    </div>
    
    
        
        </div>