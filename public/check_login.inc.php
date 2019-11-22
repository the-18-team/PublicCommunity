<?php 
if(empty($_POST['name'])){
	skip('login.php', 'error', '用户名不得为空！');
}
if(empty($_POST['pw'])){
	skip('login.php', 'error', '密码不得为空！');
}
if(empty($_POST['time']) || is_numeric($_POST['time']) || $_POST['time']>2592000){
	$_POST['time']=2592000;}
?>