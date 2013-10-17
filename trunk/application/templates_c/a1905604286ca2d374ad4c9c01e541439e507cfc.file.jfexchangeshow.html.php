<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 11:57:15
         compiled from "application/views/jfrule/jfexchangeshow.html" */ ?>
<?php /*%%SmartyHeaderCode:106062613522d3b1175b974-74606764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1905604286ca2d374ad4c9c01e541439e507cfc' => 
    array (
      0 => 'application/views/jfrule/jfexchangeshow.html',
      1 => 1379476405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106062613522d3b1175b974-74606764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d3b117efd50_59036104',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d3b117efd50_59036104')) {function content_522d3b117efd50_59036104($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="积分兑换" />
        <title>积分兑换</title>
        <link href="/application/public/css/jp.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
    </head>
    <body>
        <div class="top">
            积分兑换</div>
        <div class="location">
            <div id="link" class="backto"><a href="../../index.php/person">
                    <img src="/application/public/images/bu_backtop.jpg" alt="" />
                </a>
            </div>
        </div>
        <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
        <div class="baseblock">

            <div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" alt="" /></div>
            <div class="pro">
                <div class="propic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pic'];?>
" width="290" height="180" /></div>
                <div class="jfdh_tl">
                    <div class="jfdh_tll">
                        <?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</div>
                    <div class="jfdh_godt">
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="jfdh_con">
                    <div class="jfdh_price">
                        【兑换积分】：<span><?php echo $_smarty_tpl->tpl_vars['arr']->value['fen'];?>
</span>积分</div>
                    <div class="jfdh_price">
                        【剩余数量】：<?php echo $_smarty_tpl->tpl_vars['arr']->value['tcount'];?>
</div>
                    <div class="jfdh_price">
                        【使用时间】：<?php echo $_smarty_tpl->tpl_vars['arr']->value['endtime'];?>
</div>
                    <div class="jfdh_price">
                        【领奖时间】：<?php echo $_smarty_tpl->tpl_vars['arr']->value['gettime'];?>
</div>
                    <div class="jfdh_price">
                        【领奖地址】：<?php echo $_smarty_tpl->tpl_vars['arr']->value['address'];?>
</div>
                </div>
                <div class="blankline">
                </div>
                <div class="bu_jfdh">
                    <a href="#" onclick="duihuan('<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
')"> <img src="/application/public/images/bu_dh.jpg" width="286" height="37" /></a></div>
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" alt="" /></div>
        </div>
        <div class="blankline">
        </div>
        <?php } ?>

    </body>
    <script type="text/javascript">
        function duihuan($gid) {
            var u = "http://223.4.169.112/index.php/jfrule/duihuan";
            $.ajax({
                type: "post",
                url: u,
                data: "gid" + '=' + $gid,
                success: function(msg) {
                    alert(msg);
                    window.location.reload();
                },
                error: function() {
                    alert("ajax error");
                    window.location.reload();

                }
            });
        }
    </script>
</html>
<?php }} ?>