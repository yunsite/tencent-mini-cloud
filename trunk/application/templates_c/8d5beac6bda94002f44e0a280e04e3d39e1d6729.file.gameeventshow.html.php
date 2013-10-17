<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 12:37:22
         compiled from "application/views/gameevent/gameeventshow.html" */ ?>
<?php /*%%SmartyHeaderCode:2057078752522af5218714b5-98616626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d5beac6bda94002f44e0a280e04e3d39e1d6729' => 
    array (
      0 => 'application/views/gameevent/gameeventshow.html',
      1 => 1379392513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2057078752522af5218714b5-98616626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522af52190d5d1_05588687',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522af52190d5d1_05588687')) {function content_522af52190d5d1_05588687($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>活动信息</title>
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
            活动信息</div>
        <div class="persw">
            <div class="persw_on" onclick="link1()">
                活动信息</div>
            <div class="persw_off" onclick="link2()">
                基本信息</div>
            <div class="persw_off" onclick="link3()">
                中奖信息</div>
            <div class="clear">
            </div>
        </div>
        <div class="blankline">
        </div>
        <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
        <div class="baseblock">
            <div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" />
            </div>
            <div class="pro">
                <div class="propic">
                    <a href="http://223.4.169.112/index.php/gameevent/gameeventdetail?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pic'];?>
" width="290" height="180" />
                    </a>
                </div>
                <div class="eve_con">
                    <div class="evec_tl">
                        <a href="http://223.4.169.112/index.php/gameevent/gameeventdetail?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</a>
                    </div>
                    <div class="evec_time"><?php echo $_smarty_tpl->tpl_vars['arr']->value['time'];?>
</div>                        
                </div>
                <div class="eve_bu">
                    <a href="http://223.4.169.112/index.php/gameevent/gameeventdetail?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
                        <img src="/application/public/images/bu_event2.png" width="61" height="30" />
                    </a>
                </div>
                <div class="clear">                       
                </div>                    
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" />
            </div>
        </div>    
        <?php } ?>
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