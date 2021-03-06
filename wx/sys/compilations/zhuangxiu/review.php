<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <TITLE>印象点评</TITLE>
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/reset.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/review.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/back.css" media="all" />
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/share.js"></script>
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/common.js"></script>
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/review.js"></script>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <script type="text/javascript">
        
        </script>
    </head>
<body onselectstart="return true;" ondragstart="return false;">
   <style type="text/css">
	.review_man h3{
		font-size:18px;
	}
	#impress a{
		overflow:hidden;
	}
	.review_man h3{
		font-size:18px;
	}
	.is_1 a[style*='flex:0'], .is_2 a[style*='flex:0']{
		display:none;
	}
</style>

<div class="wrapper">
	<!-- start -->
		<ul class="nav_top" id="navTop" style="display:none;">
			<li><a href="javascript:void(0);" onclick="REVIEW.switchPanel(0);return false;" class="current">印象</a></li>
			<li><a href="javascript:void(0);" onclick="REVIEW.switchPanel(1);return false;">服务点评</a></li>
		</ul>
	<!-- end -->
	<div id="impress" class="impress"></div>
	<div id="professional" style="display:none;"></div>
</div>
<div class="pop_tips" id="popTips" style="display:none;">
	<div class="pop_show">
		<h4>我的印象是</h4>
		<div class="pop_info">
			<input type="hidden" id="reviewId" value="0" />
			<input id="inputImpress" maxlength="4" type="text" class="input_impress" placeholder="输入四个字的楼盘印象" />
		</div>
		<div class="pop_btns">
			<a href="javascript:void(0);" onclick="REVIEW.closePop();">取消</a>
			<a href="javascript:void(0);" id="popConfirmBtn" class="out">确定</a>
		</div>
	</div>
</div>
<div class="pop_tips" id="noticeDiv" style="display:none;">
	<div class="oval"></div>
	<div class="pop_show">
		<h4 id="tipsTitle">温馨提示</h4>
		<div class="pop_info" id="tipsMsg">
			<p>请输入四个字的中文描述</p>
		</div>
		<div class="pop_btns">
			<a href="javascript:;" id="noticeBtn">确定</a>
		</div>
	</div>
</div>
<div id="popFail" style="">
	<div class="bk"></div>
	<div class="cont">
		<img src="data:image/gif;base64,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" alt="loading...">
		正在加载...
	</div>
</div>
<div class="pop_mask" id="popMask" style="display:none;"></div>
<script type="text/template" id="reviewTpl">
	<h3>选择或添加您的印象</h3>
	<div class="is_1">
		<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[0].id%>,'<%=top[0].content%>','is_11');" class="is_11" style="-webkit-box-flex:<%=top[0].count%>;">
			<span><%=top[0].content%> <%=top[0].count%>%</span>
		</a><!--  每一个-webkit-box-flex的值为百分比 -->
		<div class="is_12" style="-webkit-box-flex:<%=top[1].count+top[2].count%>;"><!--  这里-webkit-box-flex的值为is_12_1和is_12_2的百分比相加 -->
			<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[1].id%>,'<%=top[1].content%>','is_12_1');" class="is_12_1" style="-webkit-box-flex:<%=top[1].count%>;">
				<span><%=top[1].content%> <%=top[1].count%>%</span>
			</a>
			<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[2].id%>,'<%=top[2].content%>','is_12_2');" class="is_12_2" style="-webkit-box-flex:<%=top[2].count%>;">
				<span><%=top[2].content%> <%=top[2].count%>%</span>
			</a>
		</div>
	</div>
	<div class="is_2">
		<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[3].id%>,'<%=top[3].content%>','is_21');" class="is_21" style="-webkit-box-flex:<%=top[3].count%>;">
			<span><%=top[3].content%> <%=top[3].count%>%</span>
		</a>
		<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[4].id%>,'<%=top[4].content%>','is_22');" class="is_22" style="-webkit-box-flex:<%=top[4].count%>;">
			<span><%=top[4].content%> <%=top[4].count%>%</span>
		</a>
		<a href="javascript:void(0);" onclick="REVIEW.addReview(<%=top[5].id%>,'<%=top[5].content%>','is_23');" class="is_23" style="-webkit-box-flex:<%=top[5].count%>;">
			<span><%=top[5].content%> <%=top[5].count%>%</span>
		</a>
		<%if(user.id == -1){%>
			<a href="javascript:void(0);" id="userReview" onclick="REVIEW.addReview(0,'','is_24');" class="is_24" style="-webkit-box-flex:4;">
				<em>添加<br />我的印象</em>
			</a>
		<% } else if(user.count<1) { %>
			<a href="javascript:void(0);" id="userReview" onclick="REVIEW.addReview(<%=user.id%>,'<%=user.content%>','is_25');" class="is_25" style="-webkit-box-flex:4;">
                                <em>我的印象<i><%=user.content%></i>印象很独特哦</em>
			</a>
		<% } else { %>
			<a href="javascript:void(0);" id="userReview" onclick="REVIEW.addReview(0,'','is_24');" class="is_25" style="-webkit-box-flex:<%=user.count%>;">
                                <em>我的印象<i><%=user.content%></i>与<%=user.count%>%相同</em>
			</a>
		<% } %>
	</div>
</script>
<script type="text/template" id="template">
	<%for(var i=0,il=data.length;i<il;i++){%>
		<div class="review_box">
			<div class="review_man"> <img src="<%=data[i].photo%>" width="70" height="70" style="width:70px!important; height:70px!important; " alt="" />
				<h3><%=data[i].name%><em><br/><%=data[i].title%></em></h3>
				<p><%=data[i].intro%></p>
			</div>
			<div class="review_word">
				<h2><%=data[i].reviewTitle%></h2>
				<p><%=data[i].reviewDesc%></p>
			</div>
		</div>
	<% } %>
</script>

<a href="javascript:history.go(-1);" class="back360" style="">&nbsp;</a>
<div mark="stat_code" style="width:0px; height:0px; display:none;">
</div>

</body>
</html>
