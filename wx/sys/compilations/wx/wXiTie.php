<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<meta content="" name="description">
<meta content="" name="keywords">
<meta content="eric.wu" name="author">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<title>微喜帖</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script type="text/javascript" src="/res/weiXiTie/js/easing.js"></script>
<script type="text/javascript" src="/res/weiXiTie/js/wedding.js"></script>
<script type="text/javascript" src="/res/weiXiTie/js/sys.js"></script>
<link type="text/css" rel="stylesheet" href="/res/weiXiTie/style/wedding.css" />
</head>
<body>
	
		 <style type="text/css">

        .loading {
    position: absolute;
    width: 100%;
    height: 100%;
    text-align: center;
    top: 0;
    left: 0;
    line-height: 100%;
    border: none;
    z-index: 9999;
}

.loading-part {
    position: absolute;
    padding: 0;
    margin: 0;
    width: 100%;
    height: 50%;
    background-color: #FFFFFF;
    z-index: 1;
}

.loading-part.top {
    top: 0;
}

.loading-part.bottom {
    bottom: 0;
}

.loading-panel {
    position: absolute;
    width: 200px;
    height: 82px;
    top: 50%;
    left: 50%;
    margin-top: -41px;
    margin-left: -100px;
    z-index: 2;
}

.loading-icon {
    position: relative;
    width: 50px;
    height: 50px;
    background: url('/res/weiXiTie/love.gif') center center no-repeat;
    margin: auto;
}

.loading-text {
    position: relative;
    width: 200px;
    height: 32px;
    color: #fc8e65;
    text-align: center;
    line-height: 32px;
    margin: auto;
}.cover {
    display: none;
    position: absolute;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    background-color: #A00908;
    box-shadow: 5px 5px 5px 10px rgba(0,0,0,.6);
    z-index: 999;
}

/*封面模版:t1*/
.cover.t1 {
    min-height: 330px;
    background-color: #A00908;
}

.cover.t1 .slogan {
    position: absolute;
    width: 266px;
    height: 290px;
    left: 50%;
    margin-left: -133px;
    top: 50%;
    margin-top: -145px;
}

.cover.t1 .mask {
    position: absolute;
    width: 100%;
    height: 100%;
    background: url('/res/weiXiTie/icons.png') 0 0 no-repeat;
    top: 0;
    left: 0; 
}

.cover.t1 .head {
    position: absolute;
    width: 158px;
    height: 153px;
    top: 68px;
    left: 48px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

 
    </style>
   
		<div class="loading">
        <div class="loading-part top"></div>
        <div class="loading-part bottom"></div>
        <div class="loading-panel">
            <div class="loading-icon"></div>
            <div class="loading-text">幸福加载中...</div>
        </div>
    </div>
    <div class="cover t1">
    <div class="slogan">
        <div class="head" style="background-image:url('<?php echo $set->donghua_pic; ?>')"></div>
        <div class="mask"></div>
    </div>
</div>
		<div class="container">
			<header>
				<div>
					<ul class="box">
						<li class="relative"><span class="pic"><img src="<?php echo $set->donghua_pic; ?>" /></span></li>
						<li>
							<div class="label">
							    <?php if ($set->is_front == 1){ ?>
								<label><?php echo $set->xl_name; ?></label>
								<img src="/res/weiXiTie/04.png" style="width:30px;" />
								<label><?php echo $set->xn_name; ?></label>
								<?php }else{ ?>
								<label><?php echo $set->xn_name; ?></label>
								<img src="/res/weiXiTie/04.png" style="width:30px;" />
								<label><?php echo $set->xl_name; ?></label>
								<?php } ?>
							<div>
						</li>
						<li>
							<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio id="audio" autoplay="autoplay" loop src="<?php echo $set->music; ?>"></audio></span>
						</li>
					</ul>
				</div>
			</header>
			<section class="body">
                        <!--
                                <div>
                                        <video style="width:100%;"></video>
					<video id="tenvideo_video_player_0" loop="loop" autobuffer="false" onplay="document.getElementById('audio').pause()" controls="" preload="metadata" autoplay="1" x-webkit-airplay="" style="width: 100%; min-height:200px;"><source src="<?php echo $set->video; ?>" /></video>
				</div>
                        -->
                                <div>
					<ul>
                                                <?php foreach(json_decode($set->hs_pic) as $v){
                                                    echo '<li class="pb_10"><img src="'.$v->src.'" style="width:100%;" /></li>';
                                                }
                                                ?>
                                        </ul>
				</div>
				<div class="des">
					<h3  class="align_center">想说的话</h3>
					<p>
						<?php echo $set->word; ?>					</p>
				</div>
				<div>
					<ul class="list_font">
					       <li>
								<a href="wxt_inputpwd-1.html" class="tbox">查看赴宴名单</a>
							  <!--   <a href="wxt_inputpwd-2.html" class="tbox">查看我的祝福</a> -->
						   </li>
						   <li>
						       <a href="wxt_inputpwd-2.html" class="tbox">查看我的祝福</a>
						   </li>
						<li>
							<a href="javascript:;" class="tbox">
								<div><?php echo $set->hy_time; ?></div>
								<div>
									<figure>
										<p><span><img src="/res/weiXiTie/yh_time.png" /></span></p>
										<figcaption>宴会时间</figcaption>
									</figure>
								</div>
							</a>
						</li>
						<li>
							<a href="http://api.map.baidu.com/marker?location=<?php echo $set->wd; ?>,<?php echo $set->jd; ?>&title=<?php echo $set->jw_addr; ?>&content=<?php echo $set->jw_addr; ?>&output=html&src=|" class="tbox" target="_blank">
								<div><?php echo $set->hy_addr; ?></div>
								<div>
									<figure>
										<p><span><img src="/res/weiXiTie/daohang.png" /></span></p>
										<figcaption>点此导航</figcaption>
									</figure>
								</div>
							</a>
						</li>
						<li>
							<a href="tel:<?php echo $set->tel; ?>" class="tbox">
								<div><?php echo $set->tel; ?></div>
								<div>
									<figure>
										<p><span><img src="/res/weiXiTie/tel.png" /></span></p>
										<figcaption>接待电话</figcaption>
									</figure>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div>
					<ul class="btns_1 box">
						<li><a href="javascript:show(0);" >我要赴宴</a></li>
						<li><a href="javascript:show(1);" >送上祝福</a></li>
						<li><a href="javascript:show(2);window.scrollTo(0, -1);" >分享喜帖</a></li>
					</ul>
					<ul id="overlay_ul" class="overlay_ul">
						<li>
							<form id="form1" action="javascript:;" method="post">
								<input type="hidden" id="sid" name = "sid" value="<?php echo $set->id; ?>" />
								<table>
									<tr><td colspan="2"><label>我要赴宴</label></td></tr>
									<tr><td style="width:45px;">姓名</td><td><input type="text" name="userName" /></td></tr>
									<tr><td>手机</td><td><input type="tel" name="telephone" /></td></tr>
									<tr><td>人数</td><td><input type="number" name="count" /></td></tr>
									<tr><td colspan="2" style="text-align:center;" class="btns_1"><a href="javascript:submit1();" >提交</a></td></tr>
								</table>
							</form>
						</li>
						<li>
							<form id="form2" action="javascript:;" method="post">
								<input type="hidden" id="sid2" name="sid2" value="<?php echo $set->id; ?>" />
								<table>
									<tr><td colspan="2"><label>送上祝福</label></td></tr>
									<tr><td style="width:45px;">姓名</td><td><input type="text" name="userName" /></td></tr>
									<tr><td>手机</td><td><input type="tel" name="telephone" /></td></tr>
									<tr><td colspan="2"><textarea placeholder="这里写一些祝福语给<?php echo $set->xl_name; ?>和<?php echo $set->xn_name; ?>" style="width:100%;height:50px;" maxlength="100" name="content"></textarea></td></tr>
									<tr><td colspan="2" style="text-align:center;" class="btns_1"><a href="javascript:submit2();" >提交</a></td></tr>
								</table>
							</form>
						</li>
						<li style="text-align:right;height:100%!important;right:-15px;left:0px;background-color:rgba(62,78,78,0.7) " onclick="$('#overlay_ul').click();event.preventDefault(); return false;">
							<img src="/res/weiXiTie/09.png" style="width:260px;" />
						</li>
						<li style="text-align:right;" onclick="$('#overlay_ul').click();event.preventDefault(); return false;">
							<img src="/res/weiXiTie/10.png" style="width:260px;" />
						</li>
					</ul>
				</div>
			<section>
						</div>
				<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
 -->
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>
		<div style="height:8px;"></div>
				<script type="text/javascript">
			
				
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
            "imgUrl": "<?php echo $path.$set->suolue_pic; ?>", 
            "timeLineLink": "<?php echo getUrl('wXiTie'); ?>",
            "sendFriendLink": "<?php echo getUrl('wXiTie'); ?>",
            "weiboLink": "<?php echo getUrl('wXiTie'); ?>",
            "tTitle": "我要结婚啦",
            "tContent": "我要结婚啦",
            "fTitle": "我要结婚啦",
            "fContent": "我要结婚啦",
            "wContent": "我要结婚啦" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
       
    </script>
	</body>
</html>

		<script>
	       $(function(){
	        	playbox.init("playbox");
              
	        	$("#overlay_ul").bind("click", function(evt){
	        		if("UL" == evt.target.nodeName){
	        		this.className = 'overlay_ul';
	        		$(this).find('li').removeClass('on');
	        		}
	        		
	        	});
	        });

	        function show(i){ 
	        	$("#overlay_ul>li").removeClass("on")[i].className = "on";
	        	$("#overlay_ul").addClass("on");
	        }
         
	        function submit1(){
	          
	        	var form1 = document.getElementById("form1");
	        	var sid   = form1.sid.value;
	        	var userName = form1.userName.value;
	        	var telephone = form1.telephone.value;
	        	var count = form1.count.value;
	        	if(userName.length<1){
	        		alert("请输入姓名！");
	        		return;
	        	}
	        	if(telephone.length<6){
	        		alert("请输入正确的电话号码！");
	        		return;
	        	}
	        	if(count.length<1){
	        		alert("请输入人数！");
	        		return;
	        	}
	        	if(isNaN(count)== true){
	        		tusi('预订人数需为数字。');
	        		return ;
	        	}
	        	ajax('wXiTieOk-1.html',{ tel:telephone,un:userName,sid:sid,rs:count},function(m){
	        		if(m==1){ 
	        			//location.reload(true);
	        			tusi('操作成功');
	        			form1.reset();
						$("#overlay_ul").removeClass("on");
	        		}else{
	        			tusi('失败');
	        		}
	        	});	
				
	        }
	        //
	       function submit2(){
	        	var form2 = document.getElementById("form2");
	        	var userName = form2.userName.value;
	        	var telephone = form2.telephone.value;
	        	var content = form2.content.value;
	            var sid   = form2.sid2.value;
	        	if(userName.length<1){
	        		alert("请输入姓名！");
	        		return;
	        	}
	        	if(telephone.length<6){
	        		alert("请输入正确电话号码！");
	        		return;
	        	}
	        	if(content.length>50){
	        		alert("内容不能大于50个字！");
	        		return;
	        	}
	        	if(content.length<1){
	        		alert("请输入祝福内容！");
	        		return;
	        	}
	        	ajax('wXiTieOk-2.html',{ tel:telephone,un:userName,sid:sid,zhufu:content},function(m){
	        		if(m==1){
	        			//location.reload(true);
	        			tusi('操作成功');
	        			form2.reset();
						$("#overlay_ul").removeClass("on");
	        		}else{
	        			tusi('失败');
	        		}
	        	});	
	        
	        }
		</script>
		 <script type="text/javascript">
    $(function () {
             var $loading = $('.loading'),
                $parts = $('.loading-part', $loading),
                height = $parts.height();
            var $loadingpanel = $('.loading-panel', $loading);
            var $cover = $('.cover'); 
            function closeLoading(callback) {
                $loadingpanel.fadeOut(function () {
                    $loading.remove();
                });
                if (typeof callback === 'function') {
                    callback.call(this);
                }
            }
            function closeCover() { 
                $cover.animate({
                    'top': -$cover.height()
                }, 'linear', function () {
                    $cover.remove();
                });
            }
            var handler_touch = function (e) {
                closeCover();
                e.preventDefault();
                return false;
            };
            //处理封面
            function initCover() {
                $cover.one('touchstart MSPointerDown', handler_touch); 
                if (window.navigator.msPointerEnabled !== undefined) {
                    window.setTimeout(function () {
                        closeCover();
                    }, 2000);
                }
            }
            closeLoading(function () { 
                initCover();
                $cover.fadeIn(1500, function () {
                    $cover.animate({
                        top: '-2250px'
                    }, 'easeOutBack', function () {
                        $cover.animate({
                            top: 0
                        }, 500, 'easeOutElastic', function () { });
                    });
                }); 
            });
        });
    
    function stop_audio(){
    	var myVid=document.getElementById("audio");
    	if (myVid.readyState == 3){
    		myVid.pause();
    	}else{
    		myVid.play();
    	}
    	
    }
    </script>
