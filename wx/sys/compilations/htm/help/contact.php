<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>聚微客 -  国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta name="description" content="聚微客,国内领先的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。">
<meta name="keywords" content="微管家、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发">
<link rel="icon" href="/favicon.ico?v000015" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico?v000015" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="<?php echo $CSS; ?>htm/help.css" />
<style type="text/css">
.drag_li img {
width: 144px;
height: 204px;
cursor: pointer;
}
.drag_li div{
	text-align: center;
}

.lianxi_tu {
	float:left;
	left:20px;

}

.lianxi{
float: left;
width: 330px;
margin-top: 30px;
margin-left: 5px;
font-size: 14px;
color:#323b44;
line-height:26px;
margin: 0;
}
</style>
</head>

<body>
<div class="layout750 content" id="helpContainer" style="float: inherit;">
    <h2 class="page_tit">联系方式</h2>
    <div class="sect">
    	<div class="lianxi">
                邮箱：wx.zongyangtech.cn<br>
                电话：18621784057<br>
                QQ:86671718
        </div>

    </div>
</div>
<script type="text/javascript">
$(function(){
	var o = $("a[rel='<?php echo $bzpage; ?>']").get(0);
	help(o);
});
function help(o){
	var page = $(o).attr('rel');
	$('#ifcon').attr('src','/htm/help/'+page+'.html');
	$('.sidebar_nav').find('li').removeClass('curr');
	$(o).parent().addClass('curr');
}

$(function(){
	$(parent.document).find('.ifconh').height($('body').height() + 100);
	setInterval(function(){
		$(parent.document).find('.ifconh').height($('body').height() + 100);
	},500);
});

</script>
</body></html>
