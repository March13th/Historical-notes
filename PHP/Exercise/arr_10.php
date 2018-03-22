<?php
$arr1=array('a','b','c','username'=>'lulu');
$arr2=array(12=>'d',55=>'e',-14=>'f','username'=>'neinei');
$arr3=array('test1'=>'111','test2'=>'222','test3'=>'333');
$newArr=$arr1+$arr2+$arr3;
print_r($newArr);
echo '<hr />';
$arr1=array(1,0);
$arr2=array(true,false);
var_dump($arr1==$arr2);
echo '<br />';
var_dump($arr1===$arr2);