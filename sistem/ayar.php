<?php 
 

 session_start();
 ob_start();

  try {
	  
	 $db = new PDO("mysql:host=localhost;dbname=takas&aski;charset=utf8","root","");
	  
  }catch(PDOEXception $mesaj){
	  
	  echo $mesaj->getmessage();
	  
	  
  }
  
    $row = $db->query("select * from ayarlar")->fetch(PDO::FETCH_ASSOC);
    
	
	 define("tema","/tema/".$row["site_tema"]);
     
   
   
   
   
   
   
   
   
   
   
   
   

?>