<?php
$arr=array(
    3=>'a',
    'b',
    5=>'c',
);
list(,,,$var1,$var2,$var3)=$arr;
echo $var1,$var2,$var3;
echo '<hr />';

$arr=array(
    'a',
    12=>'this is a test',
    'username'=>'nei',
    'age'=>33,
    'married'=>false,
    'test'=>'hello'
);
echo '<pre>';
print_r($arr);
echo '</pre>';
while((list($key,$val)=each($arr))!==false){
    echo 'key:'.$key.' value:'.$val.'<br />';
}