<?php
if(isset($_POST["passwd"]) && $_POST["passwd"]!=""){
	$passStr = crypt("abcd1234");	
	$inputStr = $_POST["passwd"];
	var_dump($_POST);
	if(crypt($inputStr,$passStr)==$passStr){
		echo "密碼 $inputStr 驗證通過<br />";
		echo "<a href='#' onclick='history.back();';>回上一頁</a>";
	}else{
		echo "密碼 $inputStr 驗證失敗<br />";	
		echo "<a href='#' onclick='history.back();';>回上一頁</a>";
	}
}else{
?>
<form action="" name="form1" method="POST">
密碼
<input name="passwd" type="text" id="passwd">
<input type="submit" name="Submit" value="驗證">
</form>
<?php }?>
