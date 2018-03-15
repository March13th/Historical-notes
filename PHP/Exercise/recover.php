<?php
//九九乘法表
for ($i=1;$i<10;$i++){
    for ($j=1;$j<10;$j++){
        echo "$i","*","$j","=",$i*$j,"<br />";
    }
}
echo "<hr color=red />";
//100~999之间的水仙花数
for ($i=100;$i<999;$i++){
    if(($i%10)*($i%10)*($i%10)+intval($i%100/10)*intval($i%100/10)*intval($i%100/10)+intval($i/100)*intval($i/100)*intval($i/100) ==$i){
        echo $i,'<br />';
    }
}
echo "<hr color=red />";
//输出1~100基数和
for ($i=1;$i<100;$i=$i+2){
    $sum=$sum+$i;
    echo $sum,'<br />';
}


?>