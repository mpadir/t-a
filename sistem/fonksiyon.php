<?php 


  

   function p($par,$st=false){
	   
	   if($st){
	   
	   return strip_tags(trim($_POST[$par]));
	   }else {
		   
		   return trim($_POST[$par]);
		   
	   }
	   
   } 
   
   function g($par,$st=false){
	   
	   if($st){
	   
	   return strip_tags(trim($_GET[$par]));
	   }else {
		   
		   return trim($_GET[$par]);
		   
	   }
	   
   }


?>