<?php 
include_once 'public/linkmysql.php';
include_once 'public/tool.inc.php';
// if(empty($_POST['id']) || !is_numeric($_POST['id'])){
// 	skip('publish.php', 'error', '所属版块id不合法！');
// }



$query="select * from news where id={$_POST['user.id']}";
$result=run($link, $query);
if(mysqli_num_rows($result)!=1){
	skip('publish.php', 'error', '请选择一个所属班级 ！');
}
if(empty($_POST['title'])){
	skip('publish.php', 'error', '标题不得为空！');
}
if(mb_strlen($_POST['title'])>255){
	skip('publish.php', 'error', '标题不得超过255个字符！');
}
?>