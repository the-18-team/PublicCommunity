<?php 
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
$user_id=is_login($link);
if($user_id){
	skip('index.php','error','你已经登录，请不要重复登录！');
}
if(isset($_POST['submit'])){
	include 'inc/check_login.inc.php';
	escape($link,$_POST);
	$query="select * from user where name='{$_POST['name']}' and pw=md5('{$_POST['pw']}')";
	$result=execute($link, $query);
	if(mysqli_num_rows($result)==1){
		setcookie('kk[name]',$_POST['name'],time()+$_POST['time']);
		setcookie('kk[pw]',sha1(md5($_POST['pw'])),time()+$_POST['time']);
		skip('index.php','ok','登录成功！');
	}else{
		skip('login.php', 'error', '用户名或密码填写错误！');
	}
}
$template['title']='欢迎登录';
$template['css']=array('style/public.css','style/register.css');
?>
<?php include 'inc/header.inc.php'?>
	<div id="register" class="auto">
		<h2>请登录</h2>
		<form method="post" >
		<p><label>用户名：<input type="text" name="name" placeholder="请输入学号/教工号/管理号" class="text_field" /></label></p>
			<p><label>密码：<input type="password" name="pw" placeholder="请输入6位登陆密码"
				class="text_field" /></label></p>

		<div style="clear: both;"></div>
		<input class="btn" type="submit" name="submit" value="登录" />
	</form>
	</div>
<?php include 'inc/footer.inc.php'?>