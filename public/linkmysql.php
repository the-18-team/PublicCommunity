<?php

function connect($host='localhost',$user='root', $password='7654321',$database='kk',$port=3306){
	$link=@mysqli_connect('localhost','root','7654321','kk',3306);
	if(mysqli_connect_errno()){
		exit(mysqli_connect_error());
	}
	mysqli_set_charset($link,'utf8');
	return $link;
}
//执行一条SQL语句,返回结果集对象或者返回布尔值
function run($link,$query){
	$result=mysqli_query($link,$query);
	if(mysqli_errno($link)){
		exit(mysqli_error($link));
	}
	return $result;
}
//执行一条SQL语句，只会返回布尔值
function run_bool($link,$query){
	$bool=mysqli_real_query($link,$query);
	if(mysqli_errno($link)){
		exit(mysqli_error($link));
	}
	return $bool;
}
function num($link,$sql_count){
	$result=run($link,$sql_count);
	$count=mysqli_fetch_row($result);
	return $count[0];
}
//数据入库之前进行转义，确保，数据能够顺利的入库
function escape($link,$data){
	if(is_string($data)){
		return mysqli_real_escape_string($link,$data);
	}
	if(is_array($data)){
		foreach ($data as $key=>$val){
			$data[$key]=escape($link,$val);
		}
	}
	return $data;
	//mysqli_real_escape_string($link,$data);
}

//关闭与数据库的连接
function close($link){
	mysqli_close($link);
}
?>