<?php 
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
$user_id=is_login($link);

$template['title']='首页';
$template['css']=array('style/public.css','style/index.css');
?>
<?php include 'inc/header.inc.php'?>
<div style="margin-top: 30px;"></div>
<div id="hot" class="auto">
	<div class="title">消息</div>
	<ul class="newlist">
		
		<li>
<!-- 			<a href="#"></a> -->
<!-- 			<a href="#"></a> -->
		</li>

	</ul>
	<div style="clear: both;"></div>
</div>
<?php 
$query="select * from classroom order by sort desc";
$result_father=execute($link, $query);
while($data_father=mysqli_fetch_assoc($result_father)){
?>
<div class="box auto">
	<div class="title">
		<a href="list_father.php?id=
		     <?php echo $data_father['id']?>
		     "style="color: #105cb6;">[班级板块]
		 <?php echo $data_father['class_name']?></a>
	</div>
	<div class="classList">
	<div class="childBox new">
				<h2><a href=""></a> <span>()</span></h2>
				<br />
		<div style="padding: 10px 0;"></div>
	</div>
</div>
		<div style="clear: both;"></div>
	</div>

<?php }?>
<?php include 'inc/footer.inc.php'?>