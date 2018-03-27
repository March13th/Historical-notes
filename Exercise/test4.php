<?php
//== !== <>,只比较值是否相同
//===，！==，值和类型要相同
var_dump(1===1,1==='1');
$str = 'twosecurity';
//strpos($string,$search[,$offset]):查找一个字符串中是否存在另一个字符串，如果找到了，返回这个字符串第一次出现的位置，如果没找到则返回false
echo strpos($str,'o');
echo '<hr />';
if(strpos($str,'t')!==false){//这里给出了一个严格不想等的使用场景
    echo 'yes';
}else{
    echo 'nope';
}