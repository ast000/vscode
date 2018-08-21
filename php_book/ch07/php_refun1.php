<?php  
	$mailData = "Ae-happy@Ze-happy.com.tw";
	if(preg_match ("/^([\w_\.-]+)@([\w\.-]+)\.([\w\.]+)$/",$mailData,$matchData)){
		var_dump($matchData);
		 echo "郵件格式驗證成功，內容為8：".$matchData[0]."。<br />";
		 echo "abc {$matchData[1]}<br />";
		 echo "def {$matchData[2]}";
	  }else{
	     echo "郵件格式驗證失敗！";
	  } 
?>
