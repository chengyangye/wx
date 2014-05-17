<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>一战到底</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/yzdd/style/war.css" />
</head>
<body>
<div class="wrapper">
	<img class="bg" src="/res/yzdd/images/bg_userinfo.png">
	<div class="desc-cont2">
		<div class="field-contain">
			<label for="username" class="input-label">请输入您的名称:</label>
			<input type="text" name="username" id="un" class="input-text" value="<?php echo $op->un; ?>">
		</div>
		<div class="field-contain">
			<label for="phone" class="input-label">请输入您的手机号码:</label>
			<input type="tel" name="phone" id="tel" class="input-text" value="<?php echo $op->tel; ?>">
			<span class="tip">*请务必填写正确，此手机号将作为您以后领奖的依据</span>
		</div>
		<div class="field-contain">
			<label for="wxun" class="input-label">请输入您的微信用户名:</label>
			<input type="text" name="wxun" id="wxun" class="input-text" value="<?php echo $op->wxun; ?>">
			
		</div>
		<button id="save-btn" onclick="gotokz()" class="next-btn">好了，开战吧</button>
	</div>
</div>
<script type="text/javascript">
function gotokz(){
	var un = $.trim($('#un').val());
	var tel = $.trim($('#tel').val());
	var wxun= $.trim($('#wxun').val());
	if(un=='' || tel==''){
		tusi('请完善用户信息');
		return;
	}
	ajax('yzddun-add.html',{ tel:tel,un:un,wxun:wxun,id:'<?php echo $yid; ?>'},function(m){
		if(m=='rep'){
			location.href=location.href;
		}
		tusi('进入战场...');
		location.href= 'yzddkz-<?php echo $yid; ?>.html';
	});	
}

</script>
</body>
</html>