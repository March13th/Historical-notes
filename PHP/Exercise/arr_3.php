<?php
echo '<pre>';
//快速创建索引数组
$arr=range(1,10);
print_r($arr);
echo "<hr />";
$arr=range(1.1,10.1);
print_r($arr);
echo "<hr />";
$arr=range('a','z');
print_r($arr);
echo "<hr />";
$arr=range(1,10,2);//步长
print_r($arr);
echo "<hr />";
//compact快速创建关联数组,怎么做到的。。。
$username='neinei';
$email='32131@qq.com';
$addr='bj';
$userInfo=compact('username','age','email','addr');
print_r($userInfo);
echo '</pre>';