<?php
$lbs = new Model('ggk');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->trans_file('pic');
	$lbs->save();
	do_keyword_add($lbs,'ggk');
	Redirect::to('ggk');
}
