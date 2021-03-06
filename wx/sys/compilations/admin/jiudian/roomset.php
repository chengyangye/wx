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
                                <h3><i class="icon-table"></i>房间类型信息 </h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>

                        <div class="box-content"> 
                            <div class="row-fluid">
                                <div class="span12 control-group"> 
                                  <a class="btn" href="roomnew-<?php echo $hid; ?>.html"><i class="icon-plus"></i>新增房间类型</a>
                                </div>

                            </div>
                            <div class="row-fluid dataTables_wrapper">
                                <form action="" method="post" class="form-horizontal">
								<input type="hidden" name="aid" id="aid" value="28589">
								<input type="hidden" name="hid" id="hid" value="967">
                                    <table id="listTable" class="table table-bordered table-hover  dataTable">
                                        <thead>
                                            <tr>
                                                <th>房间类型</th>
                                                <th>原价</th>
                                                <th>优惠价</th>
                                                <th>简要说明</th> 
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
										<tr>
                                                <td><?php echo $r->typ; ?></td>
                                                <td><?php echo $r->price1; ?></td>
                                                <td><?php echo $r->price2; ?></td>
                                                <td><?php echo $r->des; ?></td>
                                               
                                                <td><a href="roomnew-<?php echo $hid; ?>-<?php echo $r->id; ?>.html" class="btn" rel="tooltip" title="编辑"><i class="icon-edit"></i></a>
                                                    <a href="javascript:void(0);" onclick="del_room(<?php echo $r->id; ?>,this);" class="btn" title="删除"><i class="icon-remove"></i></a>
                                                     </td>
                                        </tr>
										<?php } ?>                                    </tbody>
                                    </table>

                                </form>
                               
                            

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script type="text/javascript">
function del_room(id,o){
	if(confirm('确定要删除此条信息吗？')){
		ajax('roomset-del.html',{ id:id},function(m){
			tusi('删除成功');
			$(o).parent().parent().remove();
		});
	}
}
</script>
<br/><br/><br/></body>
</html>