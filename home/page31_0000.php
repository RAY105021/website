<!--<div id="road"><a href='default.html'>HOME</a> &gt; <a href='index39b7.html?au_id=10'>員工活動點滴</a> &gt; <a href='indexcdb2.html?au_id=10&amp;sub_id=14'>TTQS領獎</a></div>  -->
<?php
if( $_SESSION['lang'] == '0'){
  require_once('../lang/lang_cht.php');
}else{
  require_once('../lang/lang_eng.php');
}   
switch($sub_id){
  case 1:
?>
    <div id="sub_title">
<?php    
      echo $lang['TTQS'];
?>      
    </div>

    <div id="sub_title2"></div>
    <div id="cont">
     <iframe width="600" height="400" src="https://www.youtube.com/embed/gOcjAADwdEA?ecver=1" frameborder="0" allowfullscreen></iframe>
    </div>
<?php 
  break;
  case 2 :
?>
    <div id="sub_title">
<?php    
      echo $lang['101_beano_events'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/fMpQY06nC40?ecver=1" frameborder="0" allowfullscreen></iframe>
    </div>  
<?php
  break;
    case 3 :
?>
    <div id="sub_title">
<?php    
      echo $lang['102-1'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/5pCN8IVzudk?ecver=1" frameborder="0" allowfullscreen></iframe>
    </div>
<?php
  break;
  case 4 :
?>
    <div id="sub_title">
<?php    
      echo $lang['102-2'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe allowfullscreen="" frameborder="0" width="600" height="400"  src="http://www.youtube.com/embed/aEfVc2ZYyJo"></iframe>&nbsp;&nbsp;
      <br>
    </div>
<?php
  break;
  case 5 :
?>
    <div id="sub_title">
<?php    
      echo $lang['102-3'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="http://www.youtube.com/embed/fe7iu4_vxnA" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>
<?php
  break;
  case 6 :
?>
    <div id="sub_title">
<?php    
      echo $lang['103-1'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/r5M1xSInGpY" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>
<?php
  break;
  case 7 :
?>
    <div id="sub_title">
<?php    
      echo $lang['103-2'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/2plXXJk2CTo" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>
<?php
  break;
  case 8 :
?>
    <div id="sub_title">
<?php    
      echo $lang['103-3'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/039ap6nmE-E" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>
<?php
  break;
  case 9 :
?>
    <div id="sub_title">
<?php    
      echo $lang['103-4'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/4Y0JHoFMJY4" frameborder="0" allowfullscreen></iframe>p;&nbsp;
      <br>
    </div>
<?php
  break;
  case 10 :
?>
    <div id="sub_title">
<?php    
      echo $lang['104-1'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <img src="<?php echo $upload; ?>/home/20150206-20150206-IMG_1785.jpg" width="100%" height="100%" id="pic1" style="border:#bbbbbb 1px solid;" />
      <br />
      <img src="<?php echo $upload; ?>/home/20150206-IMG_1318.jpg" width="100%" height="100%" id="pic1" style="border:#bbbbbb 1px solid;" />
      <br />
      <img src="<?php echo $upload; ?>/home/20150206-IMG_1382.jpg" width="100%" height="100%" id="pic1" style="border:#bbbbbb 1px solid;" />
      <br />
      <img src="<?php echo $upload; ?>/home/20150206-DSC06609.jpg" width="100%" height="100%" id="pic1" style="border:#bbbbbb 1px solid;" />
      <br />
      <br>
    </div>    
<?php
  break;
  case 11 :
?>
    <div id="sub_title">
<?php    
      echo $lang['104-2'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/sOMD41daQBo" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>    
<?php
  break;
  case 12 :
?>
    <div id="sub_title">
<?php    
      echo $lang['104-3'];
?>      
    </div>
    <div id="sub_title2"></div>
    <div id="cont">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/WYp9ZgqONS0" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;
      <br>
    </div>    
<?php
  break;
}
?>      