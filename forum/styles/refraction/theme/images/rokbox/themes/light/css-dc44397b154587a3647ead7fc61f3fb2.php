<?php 
ob_start ("ob_gzhandler");
header("Content-type: text/css; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = 60 * 60 ;
$ExpStr = "Expires: " . 
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);
                ?>

/*** /home/demo/public_html/jun09/plugins/system/rokbox/themes/light/rokbox-style.css ***/

/* CSS Guideline to style rokbox */
/* When adding your own theme,make sure to replace "custom" with your theme name */
/* use lowercase characters and no space. For example,we name our theme "mytheme" */
/* we replace every "rokbox-light" with "rokbox-mytheme" */
/* Wrapper,the very outside container of rokbox */
#rokbox-wrapper.rokbox-light{}
#rokbox-wrapper .clr {clear:both;}
#rokbox-close{height:30px;width:20px;display:block;background:url(close.png) 0 0 no-repeat;clear:both;}
#rokbox-close span{display:none;}
/* Table for border look and feel */
#rokbox-top.rokbox-left{background:url(tl.png) 0 0 no-repeat;clear:both;}
#rokbox-top .rokbox-right{background:url(tr.png) 100% 0 no-repeat;}
#rokbox-top .rokbox-center{background:url(top.png) 0 0 repeat-x;height:20px;margin-left:20px;margin-right:20px;}
#rokbox-middle {overflow: hidden;}
#rokbox-middle.rokbox-left{background:url(left.png) 0 0 repeat-y;clear:both;}
#rokbox-middle .rokbox-right{background:url(right.png) 100% 0 repeat-y;}
#rokbox-middle .rokbox-center{background:#fff;margin-left:20px;margin-right:20px;}
#rokbox-bottom.rokbox-left{background:url(bl.png) 0 0 no-repeat;}
#rokbox-bottom .rokbox-right{background:url(br.png) 100% 0 no-repeat;}
#rokbox-bottom .rokbox-center{background:url(bottom.png) 0 0 repeat-x;height:20px;margin-left:20px;margin-right:20px;}
/* Object/Image container */
#rokbox-container{}
/* Spinner class that gets added when loading content and removed when loaded */
#rokbox-container.spinner{background:url(ajax-loader.gif) 50% 50% no-repeat;}
/* Arrows wrapper (for previous and next when visible) */
#rokbox-arrows{margin-top:15px;position:absolute;right:0;width:70px;height:20px;}
#rokbox-arrows a{float:left;display:block;width:20px;height:20px;margin-right:5px;}
/* Previous arrow and its text span */
#rokbox-arrows #rokbox-previous{background:url(prev.png) 0 0 no-repeat}
#rokbox-arrows #rokbox-previous span{display:none;}
/* text wrapper,useful to set as display none when using images */
/* Next arrow and its text span */
#rokbox-arrows #rokbox-next{background:url(next.png) 0 0 no-repeat}
#rokbox-arrows #rokbox-next span{display:none;}
/* text wrapper,useful to set as display none when using images */
#rokbox-arrows #rokbox-previous.inactive,
#rokbox-arrows #rokbox-next.inactive{background-position:0 -20px;}
/* Captions wrapper and titles and descriptions */
#rokbox-caption{padding-top:25px;font-family:Helvetica,Arial,sans-serif;}
#rokbox-caption h2{/* titles */
margin:0 0 10px 0;padding:0;color:#333;font-size:18px;font-weight:bold;}
#rokbox-caption p{/* description */
margin:0;color:#999;font-size:12px;}