<?php
if(isset($_GET["passwd"]) && $_GET["passwd"]!=""){
	$passStr = md5("abcd1234");	
	$inputStr = $_GET["passwd"];
	if(md5($inputStr)==$passStr){
		echo "�K�X $inputStr ���ҳq�L<br />";
		echo "<a href='#' onclick='history.back()'>�^�W�@��</a>";
	}else{
		echo "�K�X $inputStr ���ҥ���<br />";	
		echo "<a href='#' onclick='history.back()'>�^�W�@��</a>";
	}
}else{
?>
<form action="" name="form1" method="GET">
�K�X
<input name="passwd" type="password" id="passwd">
<input type="submit" name="Submit" value="����">
</form>
<?php }?>
