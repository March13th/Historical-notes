<?php
//动态创建一个下标连续的索引数组
echo '<pre>';
$arr[]=1;
$arr[]=1.2;
$arr[]=true;
$arr[]='king';
print_r($arr);
echo "<hr />";
//手动指定数组下标
$arr1[0]='a';
$arr1[-10]='b';
$arr1[23]='c';
$arr1[]='d';
$arr1[0]='e';
print_r($arr1);
//动态创建关联数组
$userInfo['username']='king';
$userInfo['password']='123456';
$userInfo['age']=12;
$userInfo['married']=true;
print_r($userInfo);
//动态创建混合数组
$arr2[]='a';
$arr2[]='b';
$arr2[-10]='c';
$arr2[12]='d';
$arr2['test']='e';
print_r($arr2);

















echo '</pre>';