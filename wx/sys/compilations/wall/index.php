<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="viewport" content=" initial-scale=1.0,user-scalabel=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<link rel="stylesheet" href="/res/wall/css/m.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/res/wall/css/n.css" type="text/css" media="screen" />
<script type="text/javascript" src="/res/wall/js/jq.js"></script>
<script type="text/javascript" src="/res/wall/js/m.js"></script>
<title><?php echo $m->site_name; ?></title>
<script type="text/javascript">
ref_time = <?php echo $m->ref_time; ?>;//刷新时间
run = <?php echo (int)$m->run; ?>;//是否进入就播放
init_qrcode = <?php echo (int)$m->init_qrcode; ?>;//是否进入显示二维码
lid = <?php echo $last_id; ?>;//起始id
colors = <?php echo $color_str; ?>//颜色

site_name = "<?php echo $m->site_name; ?>";
wechat_name = "<?php echo $m->wechat_name; ?>";
act_word = "<?php echo $m->sqgjz; ?>";
re_luck = "<?php echo $m->re_luck; ?>";
vote_auto_zoom = "<?php echo $m->vote_auto_zoom; ?>";
</script>
</head>
<body>
<div class="main">
<!-- 头部 -->
<div class="head">
<div class="head_left">
<div class="head_info">
<h1><?php echo $m->site_name; ?></h1>
</div>
<div class="head_flag"></div>
</div>

<div class="head_right">
<img alt="bababa" src="/res/wall/img/bullhorn.png" />
<h2>添加</h2><h1><?php echo $m->wechat_name; ?></h1><h3>发送<span><?php echo $m->sqgjz; ?> 你想说的话</span>即可上墙</h3>
</div>
<div class="clear"></div>
</div>
<!-- 内容区 -->
<div class="contents">
<ul id="items">

</ul>
</div>

</div>
<!-- 底部控制 -->
<div id="control">
<div class="ctrl_button" title="显示/隐藏" id="ctrl_hide"><img alt="qrcode" src="/res/wall/img/arrow-left.png" /></div>

<div class="ctrl_button" title="二维码" id="ctrl_qrcode"><img alt="qrcode" src="/res/wall/img/qrcode-ico.png" /></div>
<div class="ctrl_button" title="开始/暂停" id="ctrl_run"><img alt="run" src="/res/wall/img/play.png" /></div>
<div class="ctrl_button" title="手动更新" id="ctrl_ref"><img alt="ref" src="/res/wall/img/spinner.png" /></div>
<!--
<div class="ctrl_button" title="抽奖" id="ctrl_luck"><img alt="luck" src="/res/wall/img/spinner2.png" /></div>
<div class="ctrl_button" title="实时投票" id="ctrl_vote"><img alt="vote" src="/res/wall/img/vote.png" /></div>
-->
<em class="load_text right">载入中……</em>
</div>
<!-- 抽奖层 -->
<div id="luck">
<div>
<img class="close_luck right" title="关闭" alt="close" src="/res/wall/img/close.png" />
<div class="goodluck">
<h1>幸运抽奖</h1>
<ul id="luck_now">
</ul>
<button class="btn_ex" id="luck_start">开始</button><button class="btn_ex" id="luck_com">确认</button>
<ul id="luck_result">
</ul>
<button class="btn_ex" id="luck_clear">清空结果</button><b id="luck_count" class="right"></b>
</div>
</div>
</div>
<!-- 投票层 -->
<div id="vote">
<div>
<div class="vote_head">
<div class="head">
<div class="head_left">
<div class="head_info">
<h1><?php echo $m->vote_name; ?></h1>
</div>
<div class="head_flag"></div>
</div>
<div class="head_right">
<img alt="bababa" src="/res/wall/img/bullhorn.png" />
<h2>添加</h2><h1><?php echo $m->wechat_name; ?></h1><h3>发送<span> <?php echo $m->vote_key; ?> </span>即可投票</h3>
</div>
<div class="clear"></div>
</div>
</div>
<div id="vote_ctrl" class="right">
<img id="order_vote" class="bnt_vote" title="排序" alt="order_vote" src="/res/wall/img/numbered-list.png" />
<img id="ref_vote" class="bnt_vote" title="刷新" alt="ref_vote" src="/res/wall/img/spinner.png" />
<img id="close_vote" class="bnt_vote" title="关闭" alt="close" src="/res/wall/img/close.png" />

</div>

<div id="vote_result">
<ul id="vote_result_ul">
<li id="vote_explain" class="vote_item" title="100%"><div class="vote_bar"><div  style="height:100%;border-bottom:2px rgba(10,106,54,.8) solid"><div class="vote_num">0</div><div class="vote_bar_o" style="background:rgba(10,106,54,.8)"></div></div></div><div class="vote_id">︵编号︶</div><div class="vote_name">总数</div></li>
</ul>
</div>

</div>
</div>
<!-- 二维码图片 -->
<div id="qrcode">
<div>
<img class="close_qrcode right" title="关闭" alt="close" src="/res/wall/img/close.png" />
<img class="qrcode_big" alt="qrcode" src="<?php echo $m->pic; ?>" />
</div>
</div>
<!-- 背景图  -->
<img class="bg" src="/res/wall/img/bg.jpg" alt="bg" />
</body>
</html>