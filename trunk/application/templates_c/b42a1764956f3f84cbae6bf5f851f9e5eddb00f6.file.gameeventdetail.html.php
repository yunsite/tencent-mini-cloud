<?php /* Smarty version Smarty-3.1.14, created on 2013-09-07 10:05:01
         compiled from "application/views/gameevent/gameeventdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:1617908187522af71e60c201-77636001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42a1764956f3f84cbae6bf5f851f9e5eddb00f6' => 
    array (
      0 => 'application/views/gameevent/gameeventdetail.html',
      1 => 1378548285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1617908187522af71e60c201-77636001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522af71e6780b0_76267687',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522af71e6780b0_76267687')) {function content_522af71e6780b0_76267687($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>活动详情</title>
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
            活动简介</div>
        <div class="location">
            <div id="aback" class="backto"><a href="/index.php/gameevent/gameeventshow">
                    <img src="/application/public/images/bu_back.jpg" width="57" height="30" />
                </a>
            </div>
        </div>
        <div id="list">
            <div class="baseblock"><div class="protop">
                    <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" />
                </div>
                <div class="pro">
                    <div class="propic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pic'];?>
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
        </div>

    </body>
</html>
<?php }} ?>