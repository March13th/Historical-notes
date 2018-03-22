<?php
//接收数据
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$title=$_POST['title'];
$content=$_POST['content'];
$xinqing=$_POST['xinqing'];
//如果是随机心情，应该产生随机数
$xinqing=$xinqing=="rand.jpg"?mt_rand(1,3).".gif":$xinqing;
$act=$_GET['act'];
$time=time();//得到当前的时间戳
$ip=$_SERVER['REMOTE_ADDR'];//得到客户端的IP地址
$filename='message.txt';
//根据不同操作完成不同功能
if($act=='addMes'){
    //如果message.txt文件存在，并且有内容，这时候需要把之前的留言读取出来再动态添加
    //file_exists($path):检测文件或目录是否存在
    //filesize($filename):得到文件的大小，返回的是字节
    //file_get_contents($filename):返回文件中的内容
    if(file_exists($filename)&&filesize($filename)>0){
        $string=file_get_contents($filename);
        $mesInfo=unserialize($string);
    }

    //添加留言的功能
    $mesInfo[]=compact('username','title','content','xingqing','time','ip');
    $data=serialize($mesInfo);//序列化数组之后再保存，这里是为什么呢
    if(file_put_contents($filename, $data)){
        echo '添加留言成功<br /><a href="addMessage.php">继续添加</a>|<a href="listMessage.php">查看留言</a>';
    }else{
        echo '添加留言失败<br /> <a href="addMessage.php">重新添加</a>';
    }

}