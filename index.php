<?php
error_reporting(null);
//include_once "../config/config.php";
header('Content-Type:text/html;charset=utf-8'); 
date_default_timezone_set("PRC");

session_start();
require("class.phpmailer.php");


if(strtolower($_POST["code"]) != $_SESSION["code12"]){
	echo "<script>alert('验证码输入有误!');history.go(-1)</script>";exit;
}
//收件箱
// $receive_email=trim($_POST['email']);

$mail = new PHPMailer();
$mail->IsSMTP();                   // 设置使用 SMTP
// $mail->Host = "smtp.yeah.net";          // 指定的 SMTP 服务器地址
$mail->Host = "smtp.163.com";          // 指定的 SMTP 服务器地址
$mail->SMTPAuth = true;                // 设置为安全验证方式
$mail->Username = "@163.com";  // SMTP 发邮件人的用户名
$mail->Password = "";             // SMTP 发邮件人的密码
$mail->CharSet = "utf-8";                   //解决邮件发送乱吗
$name = $_POST["username"];
$mail->From = "@163.com";        //来自发件人
$mail->FromName = "$name";
$mail->AddAddress("@qq.com","");      //收件人地址

$mail->WordWrap = 80;                 // set word wrap to 50 characters

$upimg=null;

if(true)
{

	$name = htmlspecialchars(addslashes($_POST["name"]));
	// $xname = $_POST["xname"];
	// $fangxiang = $_POST["fangxiang"];
	// $tel = $_POST["tel"];
	$phone = htmlspecialchars(addslashes($_POST["phone"]));
	$s_province = htmlspecialchars(addslashes($_POST["s_province"]));
	$s_city = htmlspecialchars(addslashes($_POST["s_city"]));
	$instime=date('Y-m-d H:i:s',time());
	
	
//header('Content-Type:text/html;charset=utf-8'); 	
//$con = mysql_connect("localhost","root","");
//	mysql_select_db("iidd");
//	mysql_query("set names utf8");
//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); 
	//$sql="select * from wd_message";
//	$sql="INSERT INTO `wd_message`(`name`,`tel`,`email`,`title`,`instime`,`st`) VALUES ('$name','$phone','$s_province','$s_city','$instime','2')";
					
  //$row=mysql_query($sql);
	//$uu=mysql_fetch_assoc($row);
	//var_dump($uu);exit;
  
	
	
	
	
	
	
	
	//$mail->AddAttachment($upimg);     // 加附件
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");  // 附件，也可选加命名附件
	$mail->IsHTML(true);                  // 设置邮件格式为 HTML

	$mail->Subject = "XXXXX";     // 邮件标题
	$mail->Body='XXXXXXXXXXXXX';//html文本内容
	// 内容
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; // 附加内容

	if(!$mail->Send())
	{
		// echo "<script>alert('邮箱地址不存在，请重新提交！');window.location.href='../cn/order.php';</script>";
	  // echo "Message could not be sent. <p>";
	  // echo "Mailer Error: " . $mail->ErrorInfo;
	  echo "<script>alert('未知错误,留言失败!');window.history.go(-1)</script>";
	 exit;
	}
    
    
    
    
    
    
	echo "<script>alert('留言内容提交成功！');window.location.href='../index.php'</script>";	
}else{
	echo "<script>alert('非法访问！');window.history.go(-1);</script>";exit;
}






/*
 附：国内常用免费邮件POP3和SMTP设置
1.网易邮箱 POP3 和 SMTP 服务器地址设置：
邮箱 POP3 服务器（端口110） SMTP 服务器（端口25） 
@163.com pop3.163.com smtp.163.com 
@126.com pop3.126.com smtp.126.com 
@netease.com pop.netease.com smtp.netease.com 
@yeah.net pop.yeah.net smtp.yeah.net 
所有的SMTP服务器都需要身份验证。
2.Sina免费邮件服务器设置:
收信（pop3）服务器：pop3.sina.com.cn
发信（smtp）服务器：smtp.sina.com.cn
请选择smtp服务器要求身份验证选项
3.Yahoo中国免费邮件服务器设置：
接收邮件(POP3)服务器：pop.mail.yahoo.com.cn
发送邮件(SMTP)服务器：smtp.mail.yahoo.com.cn
Yahoo免费邮件服务器设置：（把你的资料填成国外的）
接收邮件(POP3)服务器：pop.mail.yahoo.com
发送邮件(SMTP)服务器：smtp.mail.yahoo.com
4.Gmail客户端：
POP服务器：pop.gmail.com
打开ssl端口995（注意，pop得默认端口是110，在这里要改成995）
SMTP服务器：smtp.gmail.com 
smtp服务器需要身份验证
开启ssl端口465或587
帐户名：你的gmail用户名（包括 [email=“@gmail.com]“@gmail.com[/email]”这部分）
Email地址：你完整的gmail地址([url=mailto:username@gmail.com]username@gmail.com[/url])
密码：你的gmail密码
5.中华网：　
pop.china.com
smtp.china.com
6.搜狐 
pop.sohu.com 
smtp.sohu.com
7.163电子邮局　
163.net
smtp.163.net 
8.263电子邮局　
263.net 
smtp.263.net
9.QQ邮箱
pop3服务器: pop.qq.com | smtp服务器: smtp.qq.com*/
?>
<script>
setTimeout(function(){window.history.go(-2);},1000)//这里是指停留5秒后跳转到主页
</script>


