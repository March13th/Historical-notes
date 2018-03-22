<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>添加留言</h2>
	<form action="doAction.php?act=addMes" method="post">
	   <table border='1' width='80%' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF'>
	   	<tr>
	   		<td>留言者</td>
	   		<td><input type="text" name="username" id="" paceholder="请输入昵称"/></td>
	   	</tr>
	   	<tr>
	   		<td>标题</td>
	   		<td><input type="text" name="title" id="" placeholder="请输入标题"/></td>
	   	</tr>
	   	<tr>
	   		<td>内容</td>
	   		<td>
	   		      <textarea name="content" id="" cols="30" rows="10" placeholder="请输入留言内容"></textarea>
	   		</td>
	   	</tr>
	   	<tr>
	   		<td>心情</td>
	   		<td>
	   		<input type="radio" name="xinqing" id="" value="1.gif" checked="checked" /><img src="image/1.gif" width="100" heigh="100" title="高兴" alt="" />
	   		<input type="radio" name="xinqing" id="" value="2.gif" /><img src="image/2.gif" alt="" width="100" heigh="100" title="耍贱"/>
	   		<input type="radio" name="xinqing" id="" value="3.gif" /><img src="image/3.gif" alt="" width="100" heigh="100" title="神经病"/>
	   		<input type="radio" name="xinqing" id="" value="rand.jpg" /><img src="image/rand.jpg" alt="" width="100" heigh="100" title="随机"/>
	   		</td>
	   	</tr>
	   	<tr>
	   	       <td cosplan='2'><input type="submit" value="发布留言" /></td>
	   	</tr>
	   </table>
	   </form>
</body>
</html>