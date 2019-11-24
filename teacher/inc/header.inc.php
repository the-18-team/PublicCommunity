<?php 
$query="select * from kk_info where id=1";
$result_info=execute($link, $query);
$data_info=mysqli_fetch_assoc($result_info);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title><?php echo $template['title'] ?> - <?php echo $data_info['title']?></title>
<meta name="keywords" content="<?php echo $data_info['keywords']?>" />
<meta name="description" content="<?php echo $data_info['description']?>" />
<?php 
foreach ($template['css'] as $val){
	echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
?>
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="logo">教师页面</div>
			<div class="nav">
				<a class="hover" href="index.php">首页</a>
			</div>
			<div class="serarch">
				<form>
					<input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
					<input class="submit" type="submit" name="submit" value="" />
				</form>
			</div>
			<div class="login">
				<?php 
				if(isset($user_id) && $user_id){
$str=<<<A
					<a >您好！{$_COOKIE['sfk']['name']}</a> 
		<span style="color:#fff;">|</span> <a href="logoout.php">退出</a>
A;
					echo $str;		
				}else{
$str=<<<A
					<a href="login.php">登录</a>&nbsp;
					
A;
					echo $str;
				}
				?>
				
			</div>
		</div>
	</div>
	<div style="margin-top:10%;"></div>
