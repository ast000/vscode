<?php
if(isset($_POST["passwd"]) && $_POST["passwd"]!=""){
	$passStr = md5("abcd1234");	
	$inputStr = $_POST["passwd"];
	if(md5($inputStr)==$passStr){
		echo "�K�X $inputStr ���ҳq�L<br />";
		echo "<a href='#' onclick='window.history.back();';>�^�W�@��</a>";
	}else{
		echo "�K�X $inputStr ���ҥ���<br />";	
		echo "<a href='#' onclick='window.history.back();';>�^�W�@��</a>";
	}
}else{
?>
<form action="" name="form1" method="POST">
�K�X
<input name="passwd" type="password" id="passwd">
<input type="submit" name="Submit" value="����">
</form>
<?php }?>