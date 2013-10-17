<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 18:02:06
         compiled from "application/views/person/prizeinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:129002017522e9272a5afe2-26252996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c37b54a99d14e32f7506a9273364dd15f9a3520' => 
    array (
      0 => 'application/views/person/prizeinfo.html',
      1 => 1379412062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129002017522e9272a5afe2-26252996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522e9272ab8584_19999832',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e9272ab8584_19999832')) {function content_522e9272ab8584_19999832($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>        
        <title>中奖信息</title>
        <link href="/application/public/css/jp.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
    </head>
    <body>
        <div class="top">
            中奖信息</div>
        <div class="persw">
            <div class="persw_off" onclick="link1()">
                活动信息</div>
            <div class="persw_off" onclick="link2()">
                基本信息</div>
            <div class="persw_on" onclick="link3()">
                获奖信息</div>
            <div class="clear">
            </div>
        </div>
        <div class="preson_tl">
        </div>
        <div class="protop">
            <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" alt="" /></div>
        <div class="pro">
            <div id="fcinfo">
                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                <div class="perreco">
                    <div class="perre_tl">【<?php echo $_smarty_tpl->tpl_vars['arr']->value['state'];?>
】<?php echo $_smarty_tpl->tpl_vars['arr']->value['gname'];?>
</div>
                    <div class="perre_dt">【活动类型】<?php echo $_smarty_tpl->tpl_vars['arr']->value['type'];?>
</div>
                    <div class="perre_dt">【有效期】<?php echo $_smarty_tpl->tpl_vars['arr']->value['mark'];?>
</div>
                    <div class="perre_dt">【中奖时间】<?php echo $_smarty_tpl->tpl_vars['arr']->value['extime'];?>
</div>
                    <div class="perre_dt">【领奖地址】腾讯大浙网</div>
                    <div class="perre_dt">&nbsp;&nbsp;&nbsp;杭州市下城区体育场路178号</div>
                    <div class="perre_dt">&nbsp;&nbsp;&nbsp;浙江日报集团文化大厦2楼</div>
                    <div class="perre_dt">【领奖时间】除法定节假日外</div>
                    <div class="perre_dt">&nbsp;&nbsp;&nbsp;上午&nbsp;9：00-11：30</div>
                    <div class="perre_dt">&nbsp;&nbsp;&nbsp;下午13：00-18：00</div>
                </div>   
                <?php } ?>
                <div class="blankline">
                </div>
            </div>
        </div>
        <div class="profoot">
            <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" alt="" /></div>
        <div class="blankline">
        </div>
        <script type="text/javascript">
            function link1() {
                window.location.href = "http://223.4.169.112/index.php/gameevent/gameeventshow";
            }
            function link2() {
                window.location.href = "http://223.4.169.112/index.php/person/index";
            }
            function link3() {
                window.location.href = "http://223.4.169.112/index.php/person/prize";
            }
        </script>
    </body>
</html>
<?php }} ?>