<?php /* Smarty version Smarty-3.1.14, created on 2013-09-16 03:49:35
         compiled from "application/views/reply/replay.html" */ ?>
<?php /*%%SmartyHeaderCode:1115415137523537912616a7-35367612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b634d13af33671c020d9b78d8e49c39c9f867391' => 
    array (
      0 => 'application/views/reply/replay.html',
      1 => 1379303368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1115415137523537912616a7-35367612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523537912cbdf2_51592018',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523537912cbdf2_51592018')) {function content_523537912cbdf2_51592018($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>正文</title>
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
            &nbsp;&nbsp;&nbsp; 正文</div>


        <div class="baseblock"><div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" />
            </div>
            <div class="pro">
                <div class="propic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pic_url'];?>
" width="290" height="180" />
                </div>
                <div class="jfdh_tl"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
</div>
                <div class="jfdh_con">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['content'];?>

                </div>
                <div class="blankline">                       
                </div>                    
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" />
            </div>
        </div>
        <div class="blankline">                
        </div>            


    </body>
</html>
<?php }} ?>