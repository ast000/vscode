<?php
$student = array(array('�Ǹ�'=>101, '�m�W'=>'������', '�ʧO'=>'�k', '�ͤ�'=>'2000/3/14', '�q��'=>'(02)2704-2762'), 
				array('�Ǹ�'=>102, '�m�W'=>'���a�g', '�ʧO'=>'�k', '�ͤ�'=>'2000/6/6', '�q��'=>'(02)2093-8123'),
				array('�Ǹ�'=>103, '�m�W'=>'�����', '�ʧO'=>'�k', '�ͤ�'=>'2000/7/15', '�q��'=>'(02)2502-1314'),
				array('�Ǹ�'=>104, '�m�W'=>'�B�l��', '�ʧO'=>'�k', '�ͤ�'=>'2000/8/7', '�q��'=>'(04)2530-7996'),
				array('�Ǹ�'=>105, '�m�W'=>'���F��', '�ʧO'=>'�k', '�ͤ�'=>'2000/12/24', '�q��'=>'(02)2740-8965'));

foreach ($student as $sdata){
echo "�Ǹ��G".$sdata['�Ǹ�']."�A";
echo "�m�W�G".$sdata['�m�W']."�A";
echo "�ʧO�G".$sdata['�ʧO']."�A";
echo "�ͤ�G".$sdata['�ͤ�']."�A";
echo "�q�ܡG".$sdata['�q��']."�C<br />";
}
?>