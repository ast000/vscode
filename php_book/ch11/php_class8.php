<?php
class Student { 
	public $int_Id;		//�y��
	public $str_Name;		//�m�W
	static public $countNum=0;		//�R�A�����O�������
	
	function __construct(){
		Student::$countNum++;
	}
	function __destruct(){
		Student::$countNum--;
	}
	public function setData($Id,$Name){
		$this->int_Id = $Id;
		$this->str_Name = $Name;	
	}
} 

$stdObject1 = new Student;
$stdObject1->setData(1,"David","�k");
$stdObject2 = new Student;
$stdObject2->setData(2,"Lily","�k");
$stdObject3 = new Student;
$stdObject3->setData(3,"Perry","�k");
$stdObject3 = NULL;
echo "�ثe���ǥͪ���".Student::$countNum."�ӡC";
?>