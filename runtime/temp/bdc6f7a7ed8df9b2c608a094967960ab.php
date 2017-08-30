<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\UPUPW\htdocs\niuniu\public/../application/index\view\index\index.html";i:1503910298;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>workerManTest</title>
<script src="__JS__/jquery-3.2.1.js"></script>
<script type="text/javascript" src="__JS__/work.js"></script>
<script type="text/javascript">
$(function(){
	$('.login').click(function(){
		var uid=$('.id').val();
		work.login(uid);
	})
	$('.ready').click(function(){
		work.ready();
	})
})
</script>
</head>
<body style="text-align: center;">
<input class="id"/>
<input type="button" value="登录" class="login" />
<input type="button" value="创建房间" class="create" />
<input type="button" value="加入房间" class="create" />
<input type="button" value="退出" class="create" />
<input type="button" value="准备" class="ready" />
<!-- 
<input type="button" value="创建房间" class="create" />
<input type="button" value="创建房间" class="create" />

<input type="button" value="创建房间" class="create" /> -->
</body>
</html>