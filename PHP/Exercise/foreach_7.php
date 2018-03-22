<?php
//首先定义一个二维的索引+关联
echo '<pre>';
$userInfo[]=array('id'=>1,'username'=>'neinei1','age'=>1,'course'=>'php1');
$userInfo[]=array('id'=>2,'username'=>'neinei2','age'=>2,'course'=>'php2');
$userInfo[]=array('id'=>3,'username'=>'neinei3','age'=>3,'course'=>'php3');
$userInfo[]=array('id'=>4,'username'=>'neinei4','age'=>4,'course'=>'php4');
$userInfo[]=array('id'=>5,'username'=>'neinei5','age'=>5,'course'=>'php5');
$userInfo[]=array('id'=>6,'username'=>'neinei6','age'=>6,'course'=>'php6');
print_r($userInfo);

foreach ($userInfo as $key=>$val){
    echo $key,'<br />';
    echo 'id:'.$val['id'],'<br />';
    echo 'username:'.$val['username'],'<br />';
    echo '<hr />';
}

echo '<hr color=green />';
foreach ($userInfo as $val){
    echo 'id:'.$val['id'],'<br />';
    echo 'username:'.$val['username'],'<br />';
    echo '<hr />';
}
echo '</pre>';