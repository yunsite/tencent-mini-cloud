<?php /* Smarty version Smarty-3.1.14, created on 2013-09-15 03:56:50
         compiled from "application/views/jfrule/jfruleshow.html" */ ?>
<?php /*%%SmartyHeaderCode:168671962052352ef5b56014-06128238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd467d2ed5cecd9dd8a8fbf9db0cf832a5fe7ce28' => 
    array (
      0 => 'application/views/jfrule/jfruleshow.html',
      1 => 1379217401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168671962052352ef5b56014-06128238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52352ef5bbb955_42190642',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52352ef5bbb955_42190642')) {function content_52352ef5bbb955_42190642($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>        
        <title>积分规则</title>
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
            积分规则</div>       
        <div class="blankline">
        </div>
        <div class="baseblock">
            <div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" /></div>
            <div class="pro">
                <div class="perre_dt">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['content'];?>

                </div>
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg"  width="320" height="9" />
            </div>
        </div>
    </body>
</html>

<?php }} ?>