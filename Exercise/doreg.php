<?php
//接收信息
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$age=(int)$_POST['age'];
$verify=$_POST['verify'];
$verify1=$_POST['verify1'];
//echo $username,'-',$password,'-',$password1,'-',$eamil,'-',$age,'-',$verify,'-',$verify1;
//1.判断下用户名首字母是否符合规范
$char= $username['0'];
$ascii=ord($char);
if(($ascii>=97 && $ascii<=122)||($ascii>=65 && $ascii<=90)){
    //2.判断用户名长度是否符合规范
    $userlen=strlen($username);
    if($userlen>=5 && $userlen<=10){
        //3.判断密码是否为空
        $pwdLen=strlen($password);
        if($pwdLen>0){
            //4判断两次密码是否一致
            if($password===$password1){
                //5.判断邮箱的合法性
                if(strpos($email,'@')!==false){
                    //6.验证年龄是否符合规范
                    if($age>=1 && $age<=125){
                        //7.判断验证码是否一致
                        if($verify===$verify1){
                            echo '恭喜您'.$username.'注册成功<br />';
                            echo '注册信息如下：<br />';
                            $userInfo=<<<EOF
                            <table border="1" cellpadding="0" cellspacing="0" width="0" bgcolor="pink" >
                            <tr>
                            	<td>用户名</td>
                            	<td>{$username}</td>
                            </tr>
                            <tr>
                            	<td>密码</td>
                            	<td>{$password}</td>
                            </tr>
                            <tr>
                            	<td>邮箱</td>
                            	<td>{$email}</td>
                            </tr>
                            <tr>
                            	<td>年龄</td>
                            	<td>{$age}</td>
                            </tr>

                            </table>
EOF;
                            echo $userInfo;
                            echo '3秒后跳转到登陆页面<br />';
                            echo '<meta http-equiv="refresh" content="3;url=https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Classes/constructor">';
                        }else{
                            echo '两次验证码不一致<br />';
                        }
                    }else{
                        echo '年龄不合法';
                    }
                }else{
                    echo '邮箱不合法';
                }
            }else{
                echo '两次密码不一致';
            }
        }else{
            echo '密码不能为空';
        }
    }else{
        echo "{$username}长度不符合规范<br />";
    }
}else{
    echo '{$username}用户名不是以字母开始';
}