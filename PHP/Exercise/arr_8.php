<?php
echo '<pre>';
$arr=array(
    'a',
    12=>'this is a test',
    'username'=>'nei',
    'age'=>33,
    'married'=>false,
    'test'=>'hello'
);
echo current($arr),'<br />';
echo key($arr);
echo '<hr />';
echo next($arr),'<br />';
echo key($arr).'-'.current($arr),'<br />';
echo '<hr />';
echo prev($arr),'<br />';
echo key($arr).'-'.current($arr),'<br />';
echo '<hr />';
echo '<hr color=red />';
echo prev($arr);
echo var_dump(prev($arr));//bool(false)，没有元素了
echo '<hr />';
var_dump(end($arr));
echo '<hr />';
echo reset($arr);
echo '<hr />';
// while(current($arr)){
//     echo key($arr),'-',current($arr),'<br />';
//     next($arr);
//     echo '<hr />';
// }
// echo '<hr color=red/>';
while(key($arr)!==NULL){
    echo key($arr),'-',current($arr),'<br />';
    next($arr);
    echo '<hr />';
}






















echo '</pre>';