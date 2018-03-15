<?php
echo "starting...";
echo "<hr />";

goto next;

echo 'this is a test';



next://名称：来定义标识符
echo 'this is next';
echo "<hr />";

// goto testFor;//不能跳入循环，包括switch..case/函数/类

// echo "aaa<br />";
// for($i=1;$i<5;$i++){
//     echo 'hello world <br />';
//     testFor:
//     echo 'hi';
// }

for($i=1;$i<=10;$i++){
    echo $i,"<br />";
    if($i==3){
        goto ending;
    }
}
echo '<hr />';

ending:
echo 'for loop ending...';