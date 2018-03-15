<?php
echo '<pre>';
$arr=array('a','b','c');
echo $arr[1];
echo "<hr />";
$userInfo['username']='neinei';
$userInfo['sex']='man';
$userInfo['desc']='a dog';
echo '名字：'.$userInfo['username'],'<br />';
echo '性别：'.$userInfo['sex'],'<br />';
echo '描述：'.$userInfo['desc'],'<br />';


$arr=array(
    'a','b','c','d',
    'username'=>'neinei',
    'age'=>'1'
);
//修改b为bbb
$arr[1]='bbb';
print_r($arr);
echo "<hr />";
$arr[]='e';
$arr[]='f';
$arr['sex']='male';
print_r($arr);
echo "<hr />";
unset($arr['age'],$arr['sex'],$arr['username']);
print_r($arr);
unset($arr);
var_dump($arr);
$arr=range('a','z');
print_r($arr);
echo '</pre>';