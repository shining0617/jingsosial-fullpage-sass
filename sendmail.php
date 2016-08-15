<?php
$post = $_POST;
$sucess = 0;
if (trim($post['name'])=='') {
	echo $sucess;
} else if(trim($post['email']=='')) {
	echo $sucess;
}else if(trim($post['co'])=='') {
	echo $sucess;
} else if(trim($post['message'])=='') {
	echo $sucess;
} else {
	$to = "yuxiaoqing@jingdigital.com"; //收件人
	$subject = 'JING social Contact Form'; //主题
	$message = 'Name:'.trim($post['name']).'<br/>Company Name: '.trim($post['co']).'<br/>Message:'.trim($post['message']); //正文
	$from = trim($post['email']);
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "Content-Transfer-Encoding: 8bit\r\n";
	$headers .= "From: $from";
	if (mail($to,$subject,$message,$headers)){
		$sucess = 1;
	}
	echo $sucess;
}


?>
