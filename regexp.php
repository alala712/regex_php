<?php

//匹配移动手机
function mobile($mobile = 0){
	$regex  = '/^(13[4-9]|15[0-9]|18[0-9])\d{8}$/';
	//regex = '/^1[358]\d{9}$/';
	if(preg_match($regex, $mobile)){
		return true;
	}else{
		return false;
	}
}

//匹配e_mail地址
function email($email = ''){
	$regex = '/\w{3,16}@\w{1,64}\.\w{2,5}$/';
	if(preg_match($regex,$email)){
		return true;
	}else{
		return false;
	}
}

//echo mobile('18645697896');
//echo email('afas@dffdasf.com');
