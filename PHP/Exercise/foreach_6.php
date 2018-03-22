<?php
/*
键名+键值
foreach($数组名称 as $key=>$val){
    循环体；
}
键值
foreach($数组名称 as $val){
    循环体；
}
 */
echo '<pre>';
$arr=array(
    'a','b','c',
    12=>'this is a test',
    'username'=>'king',
    'password'=>'123456',
    'age'=>33
);
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [12] => this is a test
    [username] => king
    [password] => 123456
    [age] => 33
)
 */
 $i=1;
 foreach ($arr as $key=>$val){
     echo '遍历数组第'.$i.'次的结果为 <br />';
     echo '键名='.$key.'--键值='.$val.'<br />';
     echo '<hr />';
     $i++;

 }
 echo '<hr color=red />';
 foreach ($arr as $key=>$val){
     echo 'this is a test <br />';
 }
 echo '<hr color=green />';
 foreach ($arr as $val){
     echo '键值 '.$val.'<br />';
 }
echo '</pre>';