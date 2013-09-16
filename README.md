weinxin-hr
==========

微信表单，可用于各种在线报名

<?php
if (!empty($_POST['sub'])){

$name=$_POST['name'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$work=$_POST['work'];
$info=$_POST['info'];
$con="姓名：".$name."\n性别：".$sex."\n电话：".$phone."\n职位：".$work."\n个人简介：".$info;
mail("289904768@qq.com","【微简历】".$name,$con);

//SAE环境请使用如下代码 发邮件，需开启mail服务
//$mail = new SaeMail();
//$ret = $mail->quickSend( 'sxdxhbxh@163.com' , '【环协招新简历】'.$name , $con, 'sxdxhbxh@163.com' , '123456' );
}

?>
