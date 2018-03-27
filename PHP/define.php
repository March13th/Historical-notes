<?php
//通过define函数定义常量
define('TWOSECURITY','长短短');
define('__TEST__','THIS is a test');
define('AGE', 12,true);//使常量名称不区分大小写，第三个参数true
define('SALARY', 1234.12);
define('MARRIEG',true);
echo TWOSECURITY;
echo '<hr />';
echo age;
define('AGE', 24,true);
echo age;
//通过constan函数得到常量的值
echo constant('__TEST__');
echo '<hr />';
//同故宫defined函数检测常量名称是否被定义
var_dump(defined('__TEST__'),defined('aaa'));
echo '<hr />';
$name='aaa';
$value='123123123';
if(!defined($name)){
    //定义常量
    echo '常量被定义';
    define($name, $value);
    echo constant($name);
}else{
    echo constant($name);
}
echo '<hr />';
//通过const定义常量
const ROOT='this is root';
echo ROOT;
echo '<hr />';
echo constant('ROOT');
//得到所有已定义的常量,返回的是关联数组
print_r(get_defined_constants());