<?php
session_start();

if (!isset($_SESSION['lang']) or $_SESSION['lang'] == '') {
  $_SESSION['lang'] = 0;
}
if (isset($_GET['lang']) && $_GET['lang'] != '') {
  $_SESSION['lang'] = $_GET['lang'];
}

if ($_SESSION['lang'] == '0') {
  require_once('../lang/lang_cht.php');
  $upload = '../upload/cht';              //中文檔案路徑
  $marquee = '持續創新改善 全員追求卓越'; //跑馬燈
} else {
  require_once('../lang/lang_eng.php');
  $upload = '../upload/eng';              //英文檔案路徑
  $marquee = 'Continuous improvement, Total Quality Management'; //跑馬燈
}


$au_id = 5;
$sub_id = 13; // $sub_id 頁面左上首頁繁體中文、首頁English 需要對應最新消息編號 
$id = 0;
if (isset($_GET['au_id']) && $_GET['au_id'] != '') {
  $au_id = $_GET['au_id'];
}
if (isset($_GET['sub_id']) && $_GET['sub_id'] != '') {
  $sub_id = $_GET['sub_id'];
}
if (isset($_GET['id']) && $_GET['id'] != '') {
  $id = $_GET['id'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="雷科,雷射,GERMAGIC台灣總代理,SMD,PCT捲裝材料,ECT捲裝材料,LASER & METROLOGY設備,檢測設備,雷射設備,Laser Scriber,LASER製程,LASER檢測設備,GERMAGIC防疫產品" />
  <meta name="description" content="雷科位於高雄臨廣科技產業園區，專營SMD捲裝材料、LASER(雷射)設備、SMT相關設備、能源事業LED、GERMAGIC台灣總代理">
  <meta name="copyright" content="雷科股份有限公司版權所有" />
  <meta name="robots" content="all" />
  <meta name="msvalidate.01" content="EE65CEECBEA8E128651C6BA7A7E63F9D" />
  <meta name="Distribution" content="Taiwan">
  <title>雷科股份有限公司</title>
  <link type="text/css" href="../css/style1.css" rel="stylesheet">
  <style type="text/css">
    body {
      color: #717071;
      font-size: 10pt;
      background: url(<?php echo $upload; ?>/0206140017.jpg) repeat-x;
      line-height: 20pt;
      font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "Microsoft YaHei", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif, STHeiti, SimSun;

    }

    table {
      color: #717071;
      font-size: 10pt;
      line-height: 20pt;
    }

    #wrap {
      width: 1004px;
      background: url();
    }

    #head {
      width: 1004px;
      height: 364px;
      background: url(<?php echo $upload; ?>/home/0206110021.jpg) no-repeat;
    }

    #language {
      position: absolute;
      margin-top: 35px;
      margin-left: 854px;
    }

    #language a {
      color: #717071;
      font-size: 10pt;
    }

    #language a:hover {
      color: #00469F;
    }

    #hd_logo {
      top: 77px;
      left: 16px;
      width: 970px;
      height: 215px;
      display: block;
    }

    #hd_marquee {
      top: -33px;
      left: 468px;
      width: 510px;
      display: block;
      color: #ad241c;
      font-size: 12pt;
    }

    #aumenu {
      margin-top: 80px;
      margin-left: 12px;
      font-size: 11pt;
      color: #6f6f6f;
      display: block;
      width: 980px;
    }

    #aumenu a {
      color: #6f6f6f;
      font-size: 11pt;
    }

    #left {
      width: 304px;
      background: url(<?php echo $upload; ?>/0206110002.jpg) no-repeat;
    }

    #left a {
      font-size: 10pt;
      color: #990000;
    }

    #left_menu {
      margin-top: 50px;
      left: 0px;
      font-size: 10pt;
      color: #990000;
      display: block;
      z-index: 100;
    }


    #left_login {
      margin-top: 30px;
      left: 50px;
      width: 203px;
      background: url();
    }

    #left_vh {
      margin-top: 10px;
      left: 0px;
      width: 0px;
    }

    #left_cont {
      margin-top: 10px;
      left: 0px;
      display: block;
    }

    #msn {
      left: 0px;
      display: none;
    }

    #left_vh2 {
      margin-top: 10px;
      left: 0px;
      width: 0px;
    }

    #center {
      background: url(<?php echo $upload; ?>/0206110003.jpg) no-repeat;
      width: 700px;
    }

    #sub_title {
      color: #ad221b;
      font-size: 12pt;
      margin-top: 15px;
      left: 25px;
      display: block;
    }

    #sub_title2 {
      color: #ad221b;
      font-size: 9pt;
      margin-top: 0px;
      left: 30px;
      display: block;
    }

    #cont {
      margin-top: 15px;
      left: 30px;
      width: 600px;
      font-size: 10pt;
      color: #717071;
      line-height: 20px;
    }

    #cont ul {
      margin: 0 0 0 18px;
    }



    .cone_resolution table {
      width: 100%;

      margin: 10px 0;
    }

    .cone_resolution table td {
      width: 25%;
      text-align: center;
      border: 1px solid #999999;
    }

    .cone_resolution_h2 {
      margin-top: 15px;

    }

    .cone_resolution_h2 h2 {
      font-size: 15px;
      color: #ab0000;
    }

    .cone_resolution_h2 {
      width: 100%;
      border-collapse: collapse;

    }

    .cone_resolution_h2 li {
      margin: 10px 0;
    }

    .cone_resolution_h2 table td {
      text-align: center;
      border: 1px solid #999999;
    }

    .cone_resolution_h2 table th {
      text-align: center;
      border: 1px solid #000000;
      background-color: #92c8e4;
      color: #000;
    }



    .cone_resolution_h2_left table td {
      text-align: left;
      border: 1px solid #999999;
      padding: 4px;
    }

    .cone_resolution_h2_left table th {
      text-align: center;
      border: 1px solid #000000;
      background-color: #92c8e4;
      color: #000;
    }



    .spacing_h3 {
      margin: 10px;
      color: blue;


    }


    #road {
      margin-top: 35px;
      left: 30px;
      color: #878787;
      display: block;
    }

    #road a {
      color: #878787;
    }

    #banner {
      margin-top: 0px;
      left: 20px;
    }

    #right {
      width: 0px;
      left: 0px;
      top: 0px;
      color: #717071;
      font-size: 10pt;
      background: url() repeat;
    }

    #foot {
      font-size: 9pt;
      color: #666666;
      background: url(<?php echo $upload; ?>/0206110004.jpg);
      height: 110px;
      width: 1004px;
    }

    #connect01 {
      background-color: #FFFFFF;
      color: #717071;
    }

    #connect02 {
      background-color: #FFFFFF;
      color: #717071;
    }

    #guest_tb {
      font-size: 10pt;
      color: #003366;
      background-color: #FFFFFF;
    }

    .guest_mg_tb1 {
      font-size: 10pt;
      color: #003366;
      background-color: #0000FF;
    }

    .guest_mg_tb2 {
      font-size: 10pt;
      color: #003366;
      background-color: #FF6600;
    }

    #member_tb {
      font-size: 10pt;
      color: #717071;
    }

    #shop_tb {
      font-size: 10pt;
      color: #009EE7;
    }

    .shop_tb1 {
      font-size: 10pt;
      color: #009EE7;
      background-color: #DDF1FC;
    }

    .shop_tb2 {
      font-size: 10pt;
      color: #009EE7;
      background-color: #DDF1FC;
    }

    .menu_title {
      color: #660033;
      font-size: 11pt;
    }

    .menu_title A {
      color: #660033;
      font-size: 11pt;
    }

    #module1 {
      font-size: 10pt;
      color: #717071;
    }

    .text_content {
      width: 660px;
      font-size: 1.1em;
      text-align: left;
      margin: 0 0 40px 0;
      line-height: 25px;
    }

    .text_content p {
      margin: 10px 0;
    }

    .famous {
      font-size: 0.8em;
    }

    .famous02 {
      width: 660px;
      font-size: 1.1em;
      margin: 30px 0 0 0;
      text-align: left;
    }

    /*--- esg_report ---*/
    .esg_report {
      list-style-type: none;
      margin: 20px 0;
    }
  </style>
  <script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
  <script language="JavaScript" src="../js/menuCtrl.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen" />
  <script type="text/javascript">
    (function() {
      var c = document.createElement("script");
      c.type = "text/javascript";
      c.src = ("https:" == document.location.protocol ? "https" : "http") + "://8.cami.yesing.com.tw/patrol/slide/department/image/metronome?ft=rm";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(c, s);
    })();
  </script>
  <!-- GOOGLE -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-82641040-3', 'auto');
    ga('send', 'pageview');
  </script>



</head>

<body>

  <center>
    <div id="wrap">

      <div id="head">
        <div id="language"><a href="index.php?lang=0"><img src="<?php echo $upload; ?>/poin_icon.png" />繁體中文</a><a href="index.php?lang=1"><img src="<?php echo $upload; ?>/poin_icon.png" />English</a></div>
        <div id="hd_logo">
          <!--    -->
          <!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="970" height="215">
        <param name="movie" value="<?php echo $upload; ?>/home/0206140016.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <embed src="<?php echo $upload; ?>/home/0206140016.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="970" height="215" wmode="transparent"></embed>
      </object>-->

        </div>

        <div id="aumenu">
          <?php if ($_SESSION['lang'] == 0) { ?>
            <a href="../smt/index.php"><img src="<?php echo $upload; ?>/0206110006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110006.png'" alt="SMT部門" height="68" width="67"></a>
            <a href="../smd/index.php"><img src="<?php echo $upload; ?>/0206140006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140006.png'" alt="SMD部門" height="68" width="68"></a>
            <a href="../laser/index.php"><img src="<?php echo $upload; ?>/0206110010.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110011.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110010.png'" alt="雷射部門" height="68" width="68"></a>
            <a href="../energy/index.php"><img src="<?php echo $upload; ?>/0206140004.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140005.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140004.png'" alt="能源部門" height="68" width="68"></a>
            <a href="index.php?au_id=1&sub_id=1"><img src="<?php echo $upload; ?>/0206140001.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140008.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140001.png'" alt="關於雷科" height="68" width="79"></a>
            <a href="index.php?au_id=2&sub_id=8"><img src="<?php echo $upload; ?>/0206280020.png" onMouseOver="this.src='<?php echo $upload; ?>/0206280021.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206280020.png'" alt="人資園地" height="68" width="90"></a>
            <a href="index.php?au_id=3&sub_id=1"><img src="<?php echo $upload; ?>/0207030003.png" onMouseOver="this.src='<?php echo $upload; ?>/0207030004.png'" onMouseOut="this.src='<?php echo $upload; ?>/0207030003.png'" alt="員工園地" height="68" width="79"></a>
            <a href="index.php?au_id=4&sub_id=1"><img src="<?php echo $upload; ?>/0206140011.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140012.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140011.png'" alt="員工活動點滴" height="68" width="108"></a>
            <a href="index.php?au_id=7&sub_id=1"><img src="<?php echo $upload; ?>/csr01.png" onMouseOver="this.src='<?php echo $upload; ?>/csr02.png'" onMouseOut="this.src='<?php echo $upload; ?>/csr01.png'" alt="永續發展企業社會責任" height="68" width="128"></a>
            <a href="index.php?au_id=5&sub_id=13"><img src="<?php echo $upload; ?>/0206140018.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140019.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140018.png'" alt="最新消息" height="68" width="77"></a>
            <a href="index.php?au_id=6&sub_id=1"><img src="<?php echo $upload; ?>/0206140002.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140003.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140002.png'" alt="投資人服務" height="68" width="85"></a>
          <?php } else { ?>
            <a href="../smt/index.php"><img src="<?php echo $upload; ?>/0206110006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110006.png'" alt="SMT部門" height="68" width="67"></a>
            <a href="../smd/index.php"><img src="<?php echo $upload; ?>/0206140006.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140007.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140006.png'" alt="SMD部門" height="68" width="68"></a>
            <a href="../laser/index.php"><img src="<?php echo $upload; ?>/0206110010.png" onMouseOver="this.src='<?php echo $upload; ?>/0206110011.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206110010.png'" alt="雷射部門" height="68" width="68"></a>
            <a href="../energy/index.php"><img src="<?php echo $upload; ?>/0206140004.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140005.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140004.png'" alt="能源部門" height="68" width="68"></a>
            <a href="javascript: void(0)"><img src="<?php echo $upload; ?>/home/0206140020.gif" alt="space" height="20" width="110"></a>
            <a href="index.php?au_id=1&sub_id=1"><img src="<?php echo $upload; ?>/0206140001.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140008.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140001.png'" alt="About Us" height="68" width="67"></a>
            <a href="index.php?au_id=2&sub_id=8"><img src="<?php echo $upload; ?>/0206280020.png" onMouseOver="this.src='<?php echo $upload; ?>/0206280021.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206280020.png'" alt="Careers" height="68" width="62"></a>
            <a href="index.php?au_id=3&sub_id=1"><img src="<?php echo $upload; ?>/0207030003.png" onMouseOver="this.src='<?php echo $upload; ?>/0207030004.png'" onMouseOut="this.src='<?php echo $upload; ?>/0207030003.png'" alt="Employee Lasertek" height="68" width="128"></a>
            <a href="index.php?au_id=4&sub_id=1"><img src="<?php echo $upload; ?>/0206140011.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140012.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140011.png'" alt="Employee  Activities" height="68" width="128"></a>
            <a href="index.php?au_id=5&sub_id=11"><img src="<?php echo $upload; ?>/0206140018.png" onMouseOver="this.src='<?php echo $upload; ?>/0206140019.png'" onMouseOut="this.src='<?php echo $upload; ?>/0206140018.png'" alt="Latest News" height="68" width="87"></a>
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
          <?php
          switch ($au_id) {
            case 1:
          ?>
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=1&sub_id=1' style='font-size:10pt;'><?php echo $lang['company_profile']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=1&sub_id=2' style='font-size:10pt;'><?php echo $lang['company_history']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=1&sub_id=3' style='font-size:10pt;'><?php echo $lang['future']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=1&sub_id=4' style='font-size:10pt;'><?php echo $lang['marketing_strategy']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=1&sub_id=5' style='font-size:10pt;'><?php echo $lang['business_contacts']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
              </table>
            <?php
              break;
            case 2:
            ?>
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=8' style='font-size:10pt;'><?php echo $lang['human_rights']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=1' style='font-size:10pt;'><?php echo $lang['compensation']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=2' style='font-size:10pt;'><?php echo $lang['personal_development']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=7' style='font-size:10pt;'><?php echo $lang['retirement_system']; ?></a></td>
                </tr>
                <?php if ($_SESSION['lang'] == 0) { ?>
                  <tr>
                    <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=3' style='font-size:10pt;'><?php echo $lang['question']; ?></a></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=4' style='font-size:10pt;'><?php echo $lang['careers']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=5' style='font-size:10pt;'><?php echo $lang['hiring_process']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <!--
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=2&sub_id=6' style='font-size:10pt;'><?php echo $lang['online_resume']; ?></a></td>
            </tr>
            -->
                <tr>
                  <td height="0"></td>
                </tr>
              </table>
            <?php
              break;
            case 3:
            ?>
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='https://mail.lasertek.com.tw/' target='_main'><?php echo $lang['lasertek_online_services']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
              </table>
            <?php
              break;
            case 4:
            ?>
              <!-- 員工點滴 -->
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" title="國外旅遊" /><a href='index.php?au_id=4&sub_id=1' style='font-size:10pt;'><?php echo $lang['foreign_tour']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" title="國內旅遊" /><a href='index.php?au_id=4&sub_id=2' style='font-size:10pt;'><?php echo $lang['domestic_tour']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" title="家庭日&廠慶" /><a href='index.php?au_id=4&sub_id=3' style='font-size:10pt;'><?php echo $lang['family_day']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" title="年終尾牙" /><a href='index.php?au_id=4&sub_id=4' style='font-size:10pt;'><?php echo $lang['year_end_party']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" title="其他活動" /><a href='index.php?au_id=4&sub_id=5' style='font-size:10pt;'><?php echo $lang['other_movie']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <!-- <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=6' style='font-size:10pt;'><?php echo $lang['103-1']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=7' style='font-size:10pt;'><?php echo $lang['103-2']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=8' style='font-size:10pt;'><?php echo $lang['103-3']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=9' style='font-size:10pt;'><?php echo $lang['103-4']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=10' style='font-size:10pt;'><?php echo $lang['104-1']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=11' style='font-size:10pt;'><?php echo $lang['104-2']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=4&sub_id=12' style='font-size:10pt;'><?php echo $lang['104-3']; ?></a></td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>-->
              </table>
            <?php
              break;
            case 5:
            ?>
              <!-- 最新消息 -->
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=13' style='font-size:10pt;'><?php echo $lang['material_information']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=12' style='font-size:10pt;'><?php echo $lang['history_messages_2021']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=11' style='font-size:10pt;'><?php echo $lang['history_messages_2020']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=10' style='font-size:10pt;'><?php echo $lang['history_messages_2019']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=9' style='font-size:10pt;'><?php echo $lang['history_messages_2018']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=8' style='font-size:10pt;'><?php echo $lang['history_messages_2017']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=7' style='font-size:10pt;'><?php echo $lang['history_messages_2016']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=6' style='font-size:10pt;'><?php echo $lang['history_messages_2015']; ?></a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=5' style='font-size:10pt;'><?php echo $lang['history_messages_2014']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=4' style='font-size:10pt;'><?php echo $lang['history_messages_2013']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=3' style='font-size:10pt;'><?php echo $lang['history_messages_2012']; ?></a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <?php if ($_SESSION['lang'] == 0) { ?>
                  <tr>
                    <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=2' style='font-size:10pt;'><?php echo $lang['history_messages_2011']; ?></a></td>
                  </tr>
                  <tr>
                    <td height="0"></td>
                  </tr>
                  <tr>
                    <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=5&sub_id=1' style='font-size:10pt;'><?php echo $lang['history_messages_2010']; ?></a></td>
                  </tr>
                  <tr>
                  <?php } ?>
                  <td height="0"></td>
                  </tr>
              </table>
            <?php
              break;
            case 6:
            ?>
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=1' style='font-size:10pt;'>公司治理</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=2' style='font-size:10pt;'>財務資訊／股價／股利</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=3' style='font-size:10pt;'>法人說明會簡報</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=4' style='font-size:10pt;'>董事會</a></td>
                </tr>

                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=9' style='font-size:10pt;'>功能性委員會</a></td>
                </tr>
                <!--
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=4' style='font-size:10pt;'>董事會重要決議</a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=8' style='font-size:10pt;'>董事會績效評估結果報告</a></td>
                </tr>
                -->
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=5' style='font-size:10pt;'>股東會資料</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=6' style='font-size:10pt;'>問答集</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=6&sub_id=7' style='font-size:10pt;'>投資服務窗口</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
              </table>
            <?php
              break;
            case 7:
            ?>
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=1'>社會參與</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=2'>利害關係人</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=3'>企業認證</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=4'>經營團隊</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=5'>多媒體專區</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=6'>永續經營政策</a></td>
                </tr>
                <tr>
                  <td height="50" align="left" style="background:url(<?php echo $upload; ?>/0206190045.png) top no-repeat;"><img src="<?php echo $upload; ?>/home/0206190047.png" align="absmiddle" style="margin-left:0px; margin-right:3px;" /><a href='index.php?au_id=7&sub_id=7'>永續報告書</a></td>
                </tr>
                <tr>
                  <td height="0"></td>
                </tr>
              </table>
          <?php
              break;
          }
          ?>
          <ul id="navmenu-v" style="margin-left:0px;">
          </ul>　
        </div>

        <div id="left_login">
        </div>

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
      <!--------------------------------------------------------------------------------------------------------------------------------------------->
      <div id="center">
        <?php
        switch ($au_id) {
          case 1: //關於雷科
            switch ($sub_id) {
              case 1: //公司簡介
                include('page1.php');
                break;
              case 2: //公司沿格
                include('page2.php');
                break;
              case 3: //公司願景
                include('page3.php');
                break;
              case 4: //產銷策略
                include('page4.php');
                break;
              case 5: //營業據點
                include('page5.php');
                break;
            }
            break;
          case 2: //人資園地
            switch ($sub_id) {
              case 8: //人權政策
                include('human_rights.php');
                break;
              case 1: //薪酬
                include('page11.php');
                break;
              case 2: //培育與發展
                include('page12.php');
                break;
              case 3: //常見問題
                include('page13.php');
                break;
              case 4: //目前現有職缺
                include('page14.php');
                break;
              case 5: //招募流程
                include('page15.php');
                break;
              case 6: //線上履歷
                include('page16.php');
                break;
              case 7: //線上履歷
                include('page17.php');
                break;
            }
            break;
          case 3: //員工網路線上服務
            switch ($sub_id) {
              case 1: //薪酬
                include('page21.php');
                break;
            }
            break;
          case 4: //員工生活點滴
            /* switch($sub_id){
            case 1://TTQS領獎
              include('page31.php');    
            break;
            case 2://101公司尾牙活動
              include('page32.php');
            break;
            case 3://102年國內三日遊(平溪九份)
              include('page33.php');
            break;
            case 4://102年大魯閣打擊場家庭日
              include('page34.php');
            break;
            case 5://102年10月參與彰化一日遊
              include('page35.php');
            break;         
          } */
            include('page31.php');
            break;
          case 5: //重大訊息
            switch ($sub_id) {
              case 1: //歷史消息(10年)
                //if(isset($_GET['id'])){
                if ($id == 0) {
                  include('page41.php');
                } else {
                  include('page411.php');
                }
                break;
              case 2: //歷史消息(11年)
                if ($id == 0) {
                  include('page42.php');
                } else {
                  include('page421.php');
                }
                break;
              case 3: //歷史消息(12年)
                if ($id == 0) {
                  include('page43.php');
                } else {
                  include('page431.php');
                }
                break;
              case 4: //歷史消息(13年)
                if ($id == 0) {
                  include('page44.php');
                } else {
                  include('page441.php');
                }
                break;
              case 5: //歷史消息(14年)
                if ($id == 0) {
                  include('page45.php');
                } else {
                  include('page451.php');
                }
                break;
              case 6: //歷史消息(15年)
                //if(isset($_GET['id'])){
                if ($id == 0) {
                  include('page46.php');
                } else {
                  include('page461.php');
                }
                break;
              case 7: //重大訊息(16年)
                //if(isset($_GET['id'])){
                if ($id == 0) {
                  include('page47.php');
                } else {
                  include('page471.php');
                }
                break;
              case 8: //重大訊息(17年)
                if ($id == 0) {
                  include('page2017.php');
                } else {
                  include('page2017_1.php');
                }
                break;
              case 9: //重大訊息(18年)
                if ($id == 0) {
                  include('page2018.php');
                } else {
                  include('page2018_1.php');
                }
                break;
              case 10: //重大訊息(19年)
                if ($id == 0) {
                  include('page2019.php');
                } else {
                  include('page2019_1.php');
                }
                break;
              case 11: //重大訊息(20年)
                if ($id == 0) {
                  include('page2020.php');
                } else {
                  include('page2020_1.php');
                }
                break;

              case 12: //重大訊息(21年)
                if ($id == 0) {
                  include('page2021.php');
                } else {
                  include('page2021_1.php');
                }
                break;

              case 13: //重大訊息(22年)
                if ($id == 0) {
                  include('page2022.php');
                } else {
                  include('page2022_1.php');
                }
                break;
            }
            break;
          case 6: //投資人服務
            switch ($sub_id) {
              case 1: //公司治理
                include('page51.php');
                break;
              case 2: //財務資訊／股價／股利
                include('page52.php');
                break;
              case 3: //法人說明會簡報
                if ($id == 0) {
                  include('page53.php');
                } else {
                  include('page531.php');
                }
                break;
              case 4: //2021 新增董事會
                if ($id == 0) {
                  include('board_directors_all.php');
                } else {
                  include('board_directors.php');
                }
                break;

              case 8: //董事會重要決議
                include('board_directors_resolution.php');
                break;

              case 9: //2021 新增功能性委員會
                if ($id == 0) {
                  include('functional_committee_all.php');
                } else {
                  include('functional_committee.php');
                }
                break;

                // case 8: //董事會績效評估結果報告
                // if ($id == 0) {
                // include('board_performance_all.php');
                //} else {
                //include('board_performance.php');
                //}
                //break;
              case 5: //股東會資料
                include('page55.php');
                break;
              case 6: //問答集
                include('page56.php');
                break;
              case 7: //投資服務窗口
                include('page57.php');
                break;
            }
            break;
          case 7: //永續發展
            switch ($sub_id) {
              case 1: //社會參與
                if ($id == 0) {
                  include('page61.php');
                } else {
                  include('page611.php');
                }
                break;
              case 2: //利害關係人
                include('page71.php');
                break;
              case 3: //企業認證
                include('page72.php');
                break;
              case 4: //經營團隊
                include('page73.php');
                break;
              case 5: //永續發展基礎報告
                include('page74.php');
                break;
              case 6: //永續經營政策
                include('operating_policy.php');
                break;
              case 7: //永續報告書
                include('esg_report.php');
                break;
            }
            break;
        }
        ?>
      </div>
      <!--------------------------------------------------------------------------------------------------------------------------------------------->
      <div id="foot">
        <div style="text-align: center;">
          <br />
          <br />
          Copyright(c) 2013 雷科股份有限公司 著作權所有 Best Viewed in LASERTEK
        </div>
      </div>
    </div>
    <map name="MapMap" id="MapMap">
      <area shape="rect" coords="20,7,457,60" href="#" />
    </map>
  </center>

</body>

</html>