<?php
$showStr = "���ͱz�n�A�w����{��W�դu�@�ǡI";
echo $showStr. "<br />";

echo strtr($showStr, "��W�դu�@999��", "��W�դj��9��") . "<br />"; 
$replaceStr = array("����"=>"�p�j", "��W�դu�@��"=>"��W�դj����");
echo strtr($showStr, $replaceStr) . "<br />"; 
echo str_replace("��W�դu�@��", "��W��", $showStr, $count) . "<br />".$count; 
echo substr_replace($showStr, "�p�j", 0, 6); 
?>