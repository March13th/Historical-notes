<?php
/*
while(exp){
    循环体;
}

do{
  循环体;
}while(exp);
 */
$i=1;
while($i<10){
    echo $i,"<br />";
    $i++;
}
echo "<hr />";
$i=1;
while($i>0){
    echo $i,"<br />";
    $i++;
    if ($i == 10){
        break;
    }
}
echo "<hr />";
$i=1;
while($i<=10){

    if ($i==3){
        $i++;
        continue;
    }
    echo $i,"<br />";
    $i++;
}
echo "<hr />";
while(true):
    echo 'this is a test';
    break;
endwhile;

echo "<hr />";
do{
    echo "this is do while";
}while(false);



















