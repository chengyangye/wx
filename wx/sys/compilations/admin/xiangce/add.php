<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span10">
                                <h3><i class="icon-edit"></i>创建相册</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate"><?php echo tk();  echo $photo_list->hidden('id'); ?>
								<input type="hidden" name="aid" id="aid" value="22423">
								<input type="hidden" name="abid" id="abid" value="">
                                <div class="control-group">
                                    <label for="activityname" class="control-label">相册名称：</label>
                                    <div class="controls">
                                        <?php echo $photo_list->text('name','class="input-large"'); ?>
                         
                                        <span class="maroon">*</span>
                                        <span class="help-inline">尽量简单，不要超过20字.</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="keywords" class="control-label">相册关键字：</label>
                                    <div class="controls">
                                     <?php echo $photo_list->text('keyword','class="input-large"'); ?>
               
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如有多个关键字请用空格隔开</span>
                                    </div>
                                </div>

								<div class="control-group">
									<label for="kw_pic" class="control-label">图文封面：</label>
									<div class="controls"> 
									  <img class="thumb_img" id="pic1" src="<?php echo $photo_list->artpic; ?>" style="max-height: 100px;">
									  <?php echo $photo_list->hidden('artpic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setbj()">选择封面</button></span>
											<span class="maroon">*</span>
											<span class="help-inline">请选择尺寸720x400左右的图片</span>
									</div>
								</div>

                                <div class="control-group">
                                    <label for="picurl" class="control-label">相册封面图：</label>
                                    <div class="controls">
                                     <img class="thumb_img" id="pic2" src="<?php echo $photo_list->headpic; ?>" style="max-height: 100px;">
                                    <?php echo $photo_list->hidden('headpic'); ?>
                                        <span class="help-inline">
                                            <button class="btn select_img" type="button" onclick="setbj1()">选择封面</button></span>
											<span class="maroon">*</span>
											<span class="help-inline">请选择尺寸600x450左右的图片,大小不超过300k</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="activityname" class="control-label">排序：</label>
                                    <div class="controls">
                                    	<?php echo $photo_list->text('sort','class="input-large"'); ?>
                                       
                                        <span class="maroon">*</span>
                                        <span class="help-inline">数字越大越靠前</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="note" class="control-label">相册介绍 ：</label>
                                    <div class="controls">
                                    <?php echo $photo_list->textarea('ms','class="input-xxlarge" style="height:60px;width:500px;"'); ?>
                                        <span class="help-inline">请简单描述相册内容(非必填)，尽量控制在150文字以内.</span> 
                                     
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="summary" class="control-label">前台是否显示：</label>
                                    <div class="controls">
                                        	<?php echo $photo_list->checkbox('isshow'); ?>
                                    </div>
                                </div>
                                <?php if ($photo_list->has_id()){ ?>
                                <div class="control-group">
                                    <label for="summary" class="control-label">相册地址：</label>
                                    <div class="controls">
                                        	<?php echo Conf::$http_path; ?>wx/wxclist-<?php echo $photo_list->id; ?>.html?wid=<?php echo $wid; ?>
                                    </div>
                                </div>
                                <?php } ?>
							    <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                    <button type="button" class="btn" onclick="history.go(-1)">取消</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script type="text/javascript">
function setbj(){ 
           
			window.piccbk = function(m){
				$('#pic1').css('backgroundImage','url('+m+')');
				$('#pic1').css('backgroundSize','100%, 100%');
				$('#pic1').attr('src',m);
				$('#micro_photo_listartpic').val(m);
				window.piccbk = null;
			}
	
	window.curpic = null;
	openpicset();	
} 
function setbj1(){ 
    
	window.piccbk = function(m){
		$('#pic2').css('backgroundImage','url('+m+')');
		$('#pic2').css('backgroundSize','100%, 100%');
		$('#pic2').attr('src',m);
		$('#micro_photo_listheadpic').val(m);
		window.piccbk = null;
	}

window.curpic = null;
openpicset();	
} 
function openpicset(){
	pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
}


</script>
<br/><br/><br/></body>
</html>