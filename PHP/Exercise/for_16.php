<?php
/*
for(exp;exp2;exp3){
    循环体;
}
 */
for($i=1;$i<=10;$i++){
    echo 'this is a test <br />';
}
echo "<hr />";
echo $i;
echo "<hr />";
for($i=1;$i>=10;$i++){
    echo 'hello world <br />';
}
echo "<hr />";
echo $i;
echo "<hr />";
for($i=0;$i<=100;$i++){
    $sum+=$i;
    echo $sum;
    echo "<br />";
}
echo "<hr color='red' />";
echo "<table border=1 width=80% bgcokor=#ABCDEF>";
for ($i=1;$i<=3;$i++){
    echo "<tr>";
        for ($j=1;$j<=5;$j++){
            echo "<td>x</td>";
        }
    echo "</tr>";
}
echo "</table>";
//跳出嵌套的循环使用break 数字
//continue：结束当前循环，进入下次循环
//第二个表达式中最后一个条件决定是否能执行循环体
for($i=1,$j=2,$k=3;$i<30,$j<40,$k<5;$i++,$j++,$k++){
    echo $i,'-',$j,'-',$k,'<br />';
    }

echo "<hr />";
$i=1;
for(;;){
    if($i>10){
        break;
    }
    echo $i,'<br />';
    $i++;
}
echo '<hr />';
$i=0;
for(;$i<10;$i++){
    echo $i,'<br />';
}
echo '<hr />';
$i=1;
for(;;$i++){
    if($i>10){
        break;
    }
    echo $i,'<br />';
}
echo '<hr />';
for($i=1;$i<=5;$i++):
    echo $i,'<br />';
endfor;













