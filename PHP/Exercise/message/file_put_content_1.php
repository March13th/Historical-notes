<?php
/*
file_put_contents($filename, $data):向指定文件写内容，如果
文件不存在，则会创建 ，如果存在，会将之前的内容清空再写入
 */
 $filename="message.txt";
 $data=true;
 $data='this is a test';
 $data=array(1,2,3,4,5,array('a','b'));
file_put_contents($filename, $data);