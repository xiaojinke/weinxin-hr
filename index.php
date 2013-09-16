<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>微观星微招聘</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.0.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.2.0.js"></script>
</head>

<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="b" data-role="header" data-position="fixed">
        <h5 id="header">
            微简历
        </h5>
    </div>
	<form action="" method="post" >
    <div data-role="content">
        <div data-role="fieldcontain">
            <label for="textinput1">
                姓名
            </label>
            <input name="name" id="textinput1" placeholder="" value="" type="text"
            data-mini="true">
        </div>
        <div data-role="fieldcontain">
            <label for="toggleswitch1">
                性别
            </label>
            <select name="sex" id="toggleswitch1" data-theme="d" data-role="slider"
            data-mini="true">
                <option value="男">
                    男
                </option>
                <option value="女">
                    女
                </option>
            </select>
        </div>
        <div data-role="fieldcontain">
            <label for="textinput2">
                手机
            </label>
            <input name="phone" id="textinput2" placeholder="" value="" type="tel">
        </div>
        <div data-role="fieldcontain">
            <label for="selectmenu4">
                职位
            </label>
            <select id="selectmenu4" name="work">
			    <option value="PHP程序员">
                    PHP程序员
                </option>
                <option value="Web前端开发">
                    Web前端开发
                </option>
				<option value="产品经理">
                    产品经理
                </option>
				<option value="视频编辑">
                    视频编辑
                </option>
				<option value="音频编辑">
                    音频编辑
                </option>
				<option value="平面设计">
                    平面设计
                </option>
				<option value="微博运营">
                    微博运营
                </option>
				<option value="微信运营">
                    微信运营
                </option>
				<option value="市场公关">
                    市场公关
                </option>
				<option value="营销策划">
                    营销策划
                </option>
            </select>
        </div>
        <div data-role="fieldcontain">
            <label for="textarea1">
                个人简介
            </label>
            <textarea name="info" id="textarea1" placeholder="">不能少于300字</textarea>
        </div>
        <input name="sub" type="submit" data-theme="b" value="提交">
    </div>
	</form>
    <div data-theme="b" data-role="footer" >
        <h5>
             版权所有 © 三峡大学微观星
        </h5>
    </div>
</div>

<?php
if (!empty($_POST['sub'])){

$name=$_POST['name'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$work=$_POST['work'];
$info=$_POST['info'];
$con="姓名：".$name."\n性别：".$sex."\n电话：".$phone."\n职位：".$work."\n个人简介：".$info;
mail("289904768@qq.com","【微简历】".$name,$con);

//SAE环境请使用如下代码
//$mail = new SaeMail();
//$ret = $mail->quickSend( 'sxdxhbxh@163.com' , '【环协招新简历】'.$name , $con, 'sxdxhbxh@163.com' , '123456' );
}

?>
