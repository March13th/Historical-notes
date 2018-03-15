<?php
//索引+索引的数组
echo '<pre>';
$arr=array(
    array(1,1,1),
    array(2,2,2),
);
print_r($arr);
//索引+关联
$arr=array(
    array('username'=>'neinei','age'=>1),
    array('username'=>'lulu','age'=>18),
);
print_r($arr);
//关联+索引
$arr=array(
    'username'=>array('neinei','lulu'),
    'age'=>array(1,18),
);
print_r($arr);
echo $arr['username'][1];
//关联+关联...
echo "<hr />";
//关联多为数组
$arr=array(
    array(array(1))
);
print_r($arr);
echo $arr[0][0][0];
echo "<hr />";
$arr1[][]='hello world';
print_r($arr1);
$arr2[]['username']='neinei';
$arr2[0]['age']=1;
$arr2[]['test']='this is a test';
print_r($arr2);
echo "<hr />";
$arr3['username'][]='neinei';
$arr3['username'][]='lulu';
$arr3['age'][]=1;
$arr3['age'][]=18;
print_r($arr3);
echo "<hr />";
$arr4['test']['a']=1;
print_r($arr4);
echo "<hr />";
//索引+关联（很重要）
$userInfo['username']=array('neinei','lulu');
print_r($userInfo);
echo '<hr />';
$users[]=array('id'=>'1','username'=>'neinei','age'=>12);
$users[]=array('id'=>'2','username'=>'neinei','age'=>12);
$users[]=array('id'=>'3','username'=>'neinei','age'=>12);
print_r($users);




echo '</pre>';