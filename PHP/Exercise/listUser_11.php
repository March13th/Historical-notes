<?php
//定义二维索引+关联
$users[]=array('id'=>1,'username'=>'neinei1','age'=>1,'sex'=>'male','email'=>'1028@qq.com','face'=>'1.jpg');
$users[]=array('id'=>2,'username'=>'neinei2','age'=>2,'sex'=>'male','email'=>'1028@qq.com','face'=>'2.jpg');
$users[]=array('id'=>3,'username'=>'neinei3','age'=>3,'sex'=>'male','email'=>'1028@qq.com','face'=>'3.jpg');
$users[]=array('id'=>4,'username'=>'neinei4','age'=>3,'sex'=>'male','email'=>'1028@qq.com','face'=>'4.jpg');
$users[]=array('id'=>5,'username'=>'neinei5','age'=>4,'sex'=>'male','email'=>'1028@qq.com','face'=>'5.jpg');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
<h3>用户列表页</h3>
<table border="1" width="80%" cellpadding="0" cellspacing="0" bgcolor="#ABCDEF">
	<tr>
		<td>编号</td>
		<td>用户名</td>
		<td>年龄</td>
		<td>性别</td>
		<td>邮箱</td>
		<td>头像</td>
	</tr>
	<?php foreach ($users as $user){
	?>
		<tr>
		<td><?php echo $user['id'];?></td>
		<td><?php echo $user['username'];?></td>
		<td><?php echo $user['age'];?></td>
		<td><?php echo $user['sex'];?></td>
		<td><?php echo $user['email'];?></td>
		<td><img width="100" height="100" src="images/<?php echo $user['face'];?>" alt="" /></td>
	</tr>
	<?php
	}?>
</table>
</body>

</html>