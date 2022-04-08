<?php
session_start();

if(!isset($_SESSION['lang']) or $_SESSION['lang'] == ''){
  $_SESSION['lang'] = 0;
}
if(isset($_GET['lang']) && $_GET['lang']!=''){
  $_SESSION['lang'] = $_GET['lang'];  
}

if( $_SESSION['lang'] == '0'){
  require_once('../lang/lang_cht.php');
  $upload = '../upload/cht';              //中文檔案路徑
  $marquee = '持續創新改善 全員追求卓越'; //跑馬燈
}else{
  require_once('../lang/lang_eng.php');
  $upload = '../upload/eng';              //英文檔案路徑
  $marquee = 'Continuoues improvement, Total Quality Management'; //跑馬燈
}  

$au_id = 1;
$sub_id = 1;
$id=0;
if(isset($_GET['au_id']) && $_GET['au_id'] != ''){
  $au_id = $_GET['au_id']; 
}
if(isset($_GET['sub_id']) && $_GET['sub_id'] != ''){
  $sub_id = $_GET['sub_id']; 
}
if(isset($_GET['id']) && $_GET['id'] != ''){
  $id = $_GET['id']; 
}
?>       
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="雷科,SMT,各式雷射非接觸式3D工業級表面掃描儀,檢查機,雷射切割機 FPC/FR4 Laser Cutting,SMT/PCB/Semi 各式迴焊爐、動元件、乾躁爐，高溫燒成爐，精密雷射陶瓷切割設備" />
<meta name="description" content="雷科,SMT,掃描儀,檢查機">
<meta name="copyright" content="雷科股份有限公司版權所有" />
<meta name="robots" content="all" />
<meta name="Distribution" content="Taiwan">
<meta name="msvalidate.01" content="EE65CEECBEA8E128651C6BA7A7E63F9D" />
<title>雷科股份有限公司|SMT</title>  
<link type="text/css" href="../css/style1.css" rel="stylesheet">
<style type="text/css">
body{color:#717071; font-size:10pt;	background:url(<?php echo $upload; ?>/0206140017.jpg) repeat-x; line-height:20pt; font-family:Arial,新細明體, Helvetica, sans-serif;}
table{color:#717071; font-size:10pt; line-height:20pt;}

#wrap{width:1004px; background:url();}

#head{width:1004px; height:364px; background:url(<?php echo $upload; ?>/smt/0206190011.jpg) no-repeat;}
#language{position:absolute; margin-top:35px; margin-left:854px;}
#language a{color:#717071; font-size:10pt;}
#language a:hover{color:#00469F;}
#hd_logo{top:77px; left:16px; width:970px; height:215px; display:block;}
#hd_marquee{top:-33px; left:468px; width:510px; display:block; color:#ad241c; font-size:12pt;}
#aumenu{ margin-top:80px; margin-left:12px; font-size:11pt; color:#6f6f6f;	display:block; width:980px;}
#aumenu a{color:#6f6f6f;	font-size:11pt;}

#left{ width:304px; background:url(<?php echo $upload; ?>/0206110002.jpg) no-repeat;}
#left a{font-size:10pt; color:#990000;}

#left_menu{margin-top:50px; left:0px;font-size:10pt;color:#990000;display:block; z-index:100;}


#left_login{margin-top:30px;left:50px;width:203px; background:url();}
#left_vh{margin-top:10px;left:0px;width:0px;}
#left_cont{margin-top:10px; left:0px;display:block;}
#msn{left:0px;display:none;}
#left_vh2{margin-top:10px;left:0px;width:0px;}

#center{background:url(<?php echo $upload; ?>/0206110003.jpg) no-repeat; width:700px;}
#sub_title{	color:#ad221b; font-size:12pt; margin-top:15px; left:25px; display:block;}
#sub_title2{color:#ad221b; font-size:9pt; margin-top:0px; left:30px;	display:block;}
#cont{ margin-top:15px; left:30px; width:570px; font-size:10pt; color:#717071; line-height:20pt;}
#road{ margin-top:35px; left:30px; color:#878787; display:block;}
#road a{color:#878787;	}
#banner{margin-top:0px; left:20px;}

#right{width:0px; left:0px; top:0px; color:#717071; font-size:10pt; background:url() repeat;}

#foot{font-size:9pt; color:#666666; background:url(<?php echo $upload; ?>/0206110004.jpg); height:110px; width:1004px;}

#connect01{	background-color:#FFFFFF;color:#717071;}
#connect02{	background-color:#FFFFFF;color:#717071;}
#guest_tb {	font-size:10pt; color:#003366; background-color:#FFFFFF;	}
.guest_mg_tb1{font-size:10pt;	color:#003366; background-color:#0000FF;}
.guest_mg_tb2{font-size:10pt;	color:#003366; background-color:#FF6600;}
#member_tb{	font-size:10pt; color:#717071; }
#shop_tb{font-size:10pt;color:#009EE7; }
.shop_tb1{font-size:10pt; color:#009EE7; background-color:#DDF1FC;}
.shop_tb2{font-size:10pt; color:#009EE7; background-color:#DDF1FC;}
.menu_title{color:#660033; font-size:11pt;}
.menu_title A{color:#660033; font-size:11pt;}
#module1{font-size:10pt;	color:#717071; }

</style>
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script language="JavaScript" src="../js/menuCtrl.js" type="text/javascript"></script>
<link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen" />
<script type="text/javascript">
(function(){
var c = document.createElement("script");
c.type = "text/javascript";
c.src = ("https:" == document.location.protocol ? "https" : "http") + "://8.cami.yesing.com.tw/patrol/slide/department/image/metronome?ft=rm";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(c, s);
})();
</script>
<!-- GOOGLE -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82641040-3', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<center>
<div id="wrap">
<div id="head">
<div id="language"><a href="index.php?lang=0"><img src="<?php echo $upload; ?>/poin_icon.png"/>繁體中文</a><a href="index.php?lang=1"><img src="<?php echo $upload; ?>/poin_icon.png"/>English</a></div>

<div id="hd_logo">

<a><img src="<?php echo $upload; ?>/smt/0206190012.jpg" width="970" height="215" /></a>

</div>

<div id="aumenu">
    <?php if($_SESSION['lang'] == 0){ ?>
  		<a href="../smt/index.php" ><img src="<?php echo $upload; ?>/0206110006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110006.png'" alt="SMT部門" height="68" width="67"></a>
      <a href="../smd/index.php" ><img src="<?php echo $upload; ?>/0206140006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140006.png'" alt="SMD部門" height="68" width="68"></a>
      <a href="../laser/index.php" ><img src="<?php echo $upload; ?>/0206110010.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110011.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110010.png'" alt="雷射部門" height="68" width="68"></a>
      <a href="../energy/index.php" ><img src="<?php echo $upload; ?>/0206140004.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140005.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140004.png'" alt="能源部門" height="68" width="68"></a>
      <a href="javascript: void(0)" ><img src="<?php echo $upload; ?>/home/0206140020.gif" alt="space" height="20" width="110"></a>
      <a href="../home/index.php?au_id=1&sub_id=1" ><img src="<?php echo $upload; ?>/0206140001.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140008.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140001.png'" alt="關於雷科" height="68" width="79"></a>
      <a href="../home/index.php?au_id=2&sub_id=1" ><img src="<?php echo $upload; ?>/0206280020.png" onMouseOver="this.src='<?php echo $upload; ?>/0206280021.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206280020.png'" alt="人資園地" height="68" width="90"></a>
      <a href="../home/index.php?au_id=3&sub_id=1" ><img src="<?php echo $upload; ?>/0207030003.png" onMouseOver="this.src='<?php echo $upload; ?>/0207030004.png'" onMouseOut="this.src='<?php echo $upload; ?>/0207030003.png'" alt="員工園地" height="68" width="79"></a>
      <a href="../home/index.php?au_id=4&sub_id=1" ><img src="<?php echo $upload; ?>/0206140011.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140012.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140011.png'" alt="員工活動點滴" height="68" width="108"></a>
      <a href="../home/index.php?au_id=5&sub_id=1" ><img src="<?php echo $upload; ?>/0206140018.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140019.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140018.png'" alt="最新消息" height="68" width="77"></a>
      <a href="../home/index.php?au_id=6&sub_id=1" ><img src="<?php echo $upload; ?>/0206140002.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140003.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140002.png'" alt="投資人服務" height="68" width="85"></a>
    <?php }else{ ?>
      <a href="../smt/index.php" ><img src="<?php echo $upload; ?>/0206110006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110006.png'" alt="SMT部門" height="68" width="67"></a>
      <a href="../smd/index.php" ><img src="<?php echo $upload; ?>/0206140006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140006.png'" alt="SMD部門" height="68" width="68"></a>
      <a href="../laser/index.php" ><img src="<?php echo $upload; ?>/0206110010.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110011.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110010.png'" alt="雷射部門" height="68" width="68"></a>
      <a href="../energy/index.php" ><img src="<?php echo $upload; ?>/0206140004.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140005.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140004.png'" alt="能源部門" height="68" width="68"></a>
      <a href="javascript: void(0)" ><img src="<?php echo $upload; ?>/home/0206140020.gif" alt="space" height="20" width="110"></a>
      <a href="../home/index.php?au_id=1&sub_id=1" ><img src="<?php echo $upload; ?>/0206140001.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140008.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140001.png'" alt="About Us" height="68" width="67"></a>
      <a href="../home/index.php?au_id=2&sub_id=1" ><img src="<?php echo $upload; ?>/0206280020.png" onMouseOver="this.src='<?php echo $upload; ?>/0206280021.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206280020.png'" alt="Careers" height="68" width="62"></a>
      <a href="../home/index.php?au_id=3&sub_id=1" ><img src="<?php echo $upload; ?>/0207030003.png" onMouseOver="this.src='<?php echo $upload; ?>/0207030004.png'" onMouseOut="this.src='<?php echo $upload; ?>/0207030003.png'" alt="Employee Lasertek" height="68" width="128"></a>
      <a href="../home/index.php?au_id=4&sub_id=1" ><img src="<?php echo $upload; ?>/0206140011.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140012.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140011.png'" alt="Employee  Activities" height="68" width="128"></a>
      <a href="../home/index.php?au_id=5&sub_id=1" ><img src="<?php echo $upload; ?>/0206140018.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140019.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140018.png'" alt="Latest News" height="68" width="87"></a>
    <?php } ?>
</div>

<!-- 跑馬燈 -->
<div id="hd_marquee">
<marquee scrolldelay="120" style="margin: -7.4px 0 0 0;">
<?php echo $marquee; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</marquee>
</div>


</div>

<div id="right"></div>

<div id="left">
<div id="left_vh2"></div>

<div id="left_menu">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="300">

<tr>
<td valign="middle">
<a href='index.php?au_id=1' style='font-size:10pt;'><img src="<?php echo $upload; ?>/smt/0206200010.png" onMouseOver="this.src='<?php echo $upload; ?>/smt/0206200012.png'" onMouseOut="this.src='<?php echo $upload; ?>/smt/0206200010.png'" alt="服務內容" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>

<tr>
<td valign="middle">
<a href='index.php?au_id=8' style='font-size:10pt;'><img src="<?php echo $upload; ?>/smt/0206190019.png" onMouseOver="this.src='<?php echo $upload; ?>/smt/0206200013.png'" onMouseOut="this.src='<?php echo $upload; ?>/smt/0206190019.png'" alt="聯絡我們" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>
 <!--
<tr>
<td valign="middle">
<a href='index0815.html?au_id=14&amp;sub_id=32' style='font-size:10pt;'><img src="../upload/0206190020.png" onMouseOver="this.src='../upload/0206200014.png'" onMouseOut="this.src='../upload/0206190020.png'" alt="檔案下載" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>

<tr>
<td valign="middle">
<a href='javascript: void(0)' target='_main'><img src="upload/0207160002.png" alt="A級會員檔案下載專區" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>

<tr>
<td valign="middle">
<a href='javascript: void(0)' target='_main'><img src="upload/0207160003.png" alt="B級會員檔案下載專區" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>

<tr>
<td valign="middle">
<a href='javascript: void(0)' target='_main'><img src="upload/0207160004.png" alt="C級會員檔案下載專區" /></a>

</td>
</tr>
<tr>
<td height="0"></td>
</tr>
-->
<!-- 左邊選單 -->
</table>
<ul id="navmenu-v" style="margin-left:0px;">
  <ul>
    <li style='padding:0;'><a style='padding:0;'><img src='<?php echo $upload; ?>/smt/0206190015.png' alt='檢測設備' /></a>
      <ul style="width:225px;float:left;margin: 0 0 0 50px;">
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=2'><?php echo $lang['noncontact_profiling_system_cyberSacn_cybertechnologies']; ?></a>
        </li>
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=3'><?php echo $lang['automatic_barcode_inspecting_system']; ?></a>
        </li>
      </ul>
    </li>
    <li style='padding:0;'><a style='padding:0;'><img src='<?php echo $upload; ?>/smt/0207110002.png' alt='各式迴焊爐 / 溫度記錄器' /></a>
      <ul style="width:225px;float:left;margin: 0 0 0 50px;">
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=4'><?php echo $lang['reflow_furnace']; ?></a>
        </li>
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=5'><?php echo $lang['firing_furnace']; ?></a>
        </li>
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=6'><?php echo $lang['dry_furnace']; ?></a>
        </li>
        <li style="list-style-image:url(/website/upload/cht/2017pro_btnicon.gif);">
          <a href='index.php?au_id=7'><?php echo $lang['thermotracker']; ?></a>
        </li>
      </ul>
    </li>
    <li style='padding:0;'><a href='index.php?au_id=9' style='padding:0;'><img src='<?php echo $upload; ?>/smt/0206240011.png' alt='雷射設備' /></a>
    </li>
  </ul>
</ul>　
</div>
<!--
<div id="left_login">
<table width="203" border="0" cellspacing="0" cellpadding="0">

<tr>
<td><img src="../upload/smt/lf_mber.gif" /></td>
</tr>

<form name="form3" action="http://lasertek2.cocker.com.tw/log.asp" method="post">
<tr>
<td align="center" height="30">帳號
<input name="user_id" type="text" id="user_id" size="10" /></td>
</tr>
<tr>
<td align="center" height="30">密碼
<input name="user_pass" id="user_pass" type="password" size="10" /></td>
</tr>
<tr>
<td align="center">
<input name="btn_s" type="button" value="登入" onClick="login();" /></td>
</tr>
<tr>
<td align="right"><A href="#" style="margin-right:10px;" onClick="window.open('module17.html','forget','height=300, width=500');">‧忘記密碼</A>&nbsp;&nbsp;<A href="#" style="margin-right:10px;" onClick="window.open('member_add.html','add','height=550, width=600');">‧申請加入</A></td>
</tr>
</form>
-->
<script>    
/*
function login(){
if (document.form3.user_id.value==""){
alert("請輸入帳號");
document.form3.user_id.focus();
}
else if (document.form3.user_pass.value==""){
alert("請輸入密碼");
document.form3.user_pass.focus();
}
else{
document.form3.submit();
}
}
*/
</script>
<!--
</table>	
</div>
-->
<div id="left_cont">
<table cellpadding="0" cellspacing="0" border="0" align="center">

</table>
</div>
<div id="msn">
<table border="0" cellpadding="0" cellspacing="0">

<tr>
<td valign="middle"></td>
</tr>
</table>
</div>
<div id="left_vh"></div>
</div>

<div id="center">
  <?php
    switch($au_id){
      case 1://服務項目
        include('service.php');
      break;
      case 2:
        if($id==0){
          include('page1.php');
        }else{
          include('page11.php');
        }
      break;
      case 3:
        if($id==0){
          include('page2.php');
        }else{
          include('page21.php');
        }
      break;
      case 4:
        if($id==0){
          include('page3.php');
        }else{
          include('page31.php');
        }
      break;
      case 5:
        if($id==0){
          include('page4.php');
        }else{
          include('page41.php');
        }
      break;
      case 6:
        if($id==0){
          include('page5.php');
        }else{
          include('page51.php');
        }
      break;
      case 7:
        if($id==0){
          include('page6.php');
        }else{
          include('page61.php');
        }
      break; 
      case 8:
        include('contact.php');
      break;
      case 9:
        if($id==0){
          include('page7.php');
        }else{
          include('page71.php');
        }
      break;        
    }
  ?>
</div>

<div id="foot"><div style="text-align: center;">
<br />
<br />
Copyright(c) 2013 雷科股份有限公司 著作權所有 Best Viewed in LASERTEK </div>
</div>
</div>
</center>

</body>


<!-- Mirrored from lasertek2.cocker.com.tw/index.asp?au_id=14 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Nov 2014 05:50:54 GMT -->
</html>
