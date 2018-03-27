<?php
$username='king';
$sex='男';
$age=20;
if ($username=='king'){
    if($sex='男'){
        if($age<18){
            echo '你好，同学';
        }else{
            echo '你好，先生';
        }
    }else{
        if($age<30){
            echo '你好，小姐';
        }else{
            echo '你好，女士';
        }
    }
}