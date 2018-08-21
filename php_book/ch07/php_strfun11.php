<?php
$showStr = "My name is David.";
echo $showStr . "<hr />"; 
$showArray = count_chars($showStr, 1);
var_dump($showArray);
foreach ( $showArray as $i => $val) {
    echo "字元  ".chr($i)." 出現了 $val 次。 <br />";
}
?>