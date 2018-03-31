<?php
// 执行运算符的例子
header('Content-Type:text/html;charset=utf-8');
echo `ipconfig`;
echo '<hr />';
echo exec('ipconfig');
// 错误抑制符
@settype($var, 'aaa');
echo @(3 / 0);
// 三元运算符
$res = 1 == '1' ? 'true' : 'false';
echo $res;
$res = 1 === '1' ?  : 'false';
echo $res;