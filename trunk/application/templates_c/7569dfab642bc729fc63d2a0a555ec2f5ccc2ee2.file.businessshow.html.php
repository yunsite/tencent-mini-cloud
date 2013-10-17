<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 12:36:45
         compiled from "application/views/business/businessshow.html" */ ?>
<?php /*%%SmartyHeaderCode:203603677523182c91cf988-38714777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7569dfab642bc729fc63d2a0a555ec2f5ccc2ee2' => 
    array (
      0 => 'application/views/business/businessshow.html',
      1 => 1379392385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203603677523182c91cf988-38714777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523182c9242924_87109971',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523182c9242924_87109971')) {function content_523182c9242924_87109971($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>商家联盟</title>
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
            商家联盟</div>
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
                    <a href="http://223.4.169.112/index.php/business/show">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pic'];?>
" width="290" height="180" />
                    </a>
                </div>
                <div class="eve_con">
                    <div class="evec_tl">
                        <a href="http://223.4.169.112/index.php/business/show"><?php echo $_smarty_tpl->tpl_vars['arr']->value['sname'];?>
</a>
                    </div>
                </div>
                <div class="eve_bu">
                    <a href="http://223.4.169.112/index.php/business/show">
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
    </body>
</html>
<?php }} ?>