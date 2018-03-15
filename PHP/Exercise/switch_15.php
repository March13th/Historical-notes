<?php
/*
switch(exp){
    case 值1：
                代码段;
        break;
    case 值2：
                代码段;
        break;
    ...
    default:
                代码段;
        break;

}
 */
 $i=4;
switch($i){
    case 1:
        echo 'a';
    case 2:
        echo 'b';
        break;
    case 3:
        echo 'c';
    default:
        echo '以上case的值都没有匹配';
}
echo "<hr />";
$act="login";
switch ($act){
    case 'login':echo 'finish login'; break;
    case 'reg':echo 'finish reg';break;
    case 'insert':echo 'finish insert';break;
    default: echo '非法操作';break;
}
echo "<hr />";
$i=3;
switch($i){
    case 1:
    case 2:
    case 3:
        echo 'this is a test';
        break;
}

echo "<hr />";
$i=1;
$j='b';
switch ($i){
    case 1:
        echo 'aaa <br />';
        switch ($j){
            case 'a':
                echo 'this is a <br />';
                break 2;
            case 'b':
                echo 'this is b <br />';
                break 2;
        }
    case 2:
        echo 'bbb <br />';
        break;
}


















