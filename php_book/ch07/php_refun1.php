<?php  
	$mailData = "Ae-happy@Ze-happy.com.tw";
	if(preg_match ("/^([\w_\.-]+)@([\w\.-]+)\.([\w\.]+)$/",$mailData,$matchData)){
		var_dump($matchData);
		 echo "�l��榡���Ҧ��\�A���e��8�G".$matchData[0]."�C<br />";
		 echo "abc {$matchData[1]}<br />";
		 echo "def {$matchData[2]}";
	  }else{
	     echo "�l��榡���ҥ��ѡI";
	  } 
?>
