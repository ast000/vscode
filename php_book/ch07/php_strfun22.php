<?php
if(isset($_POST["passwd"]) && $_POST["passwd"]!=""){
	$passStr = crypt("abcd1234");	
	$inputStr = $_POST["passwd"];
	var_dump($_POST);
	if(crypt($inputStr,$passStr)==$passStr){
		echo "�K�X $inputStr ���ҳq�L<br />";
		echo "<a href='#' onclick='history.back();';>�^�W�@��</a>";
	}else{
		echo "�K�X $inputStr ���ҥ���<br />";	
		echo "<a href='#' onclick='history.back();';>�^�W�@��</a>";
	}
}else{
?>
<form action="" name="form1" method="POST">
�K�X
<input name="passwd" type="text" id="passwd">
<input type="submit" name="Submit" value="����">
</form>
<?php }?>
