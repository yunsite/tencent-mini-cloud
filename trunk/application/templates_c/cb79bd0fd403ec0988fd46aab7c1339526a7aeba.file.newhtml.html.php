<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 12:36:47
         compiled from "application/views/business/newhtml.html" */ ?>
<?php /*%%SmartyHeaderCode:13943936152313508e55125-98656267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb79bd0fd403ec0988fd46aab7c1339526a7aeba' => 
    array (
      0 => 'application/views/business/newhtml.html',
      1 => 1379322803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13943936152313508e55125-98656267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52313508eab8d7_85616197',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52313508eab8d7_85616197')) {function content_52313508eab8d7_85616197($_smarty_tpl) {?><!DOCTYPE html><html>    <head>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        <meta name="description" content="QQ电影票触屏版" />        <meta name="format-detection" content="telephone=no" />        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />         <meta name="apple-mobile-web-app-capable" content="yes" />         <meta name="apple-mobile-web-app-status-bar-style" content="white" />        <title>武林商圈 商家联盟</title>         <link href="http://imgcache.qq.com/lifestyle/proj_jingdian/css/album.css" rel="stylesheet" />        <style type="text/css">            .content-box-img img{                background:#FFF url(http://imgcache.qq.com/lifestyle/proj_jingdian/img/album/loading.png) no-repeat center center;            }            </style>    </head>    <body>        <div class="fn-bg">             <img src="http:&#047;&#047;imgcache.gtimg.cn&#047;lifestyle&#047;proj_jingdian_admin&#047;img&#047;album&#047;bg-bd.png" alt=""/>         </div>        <div class="fn-album">            <div class="album-pop">                <span class="pop-title jingdian" style="font-weight:bolder;"></span>                <span class="pop-dot"></span>            </div>                        <div class="album-wrap" id="ScrollElem">                <ol class="album-list" style="width: 9651px;">                    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>                    <li class="album-item" data-desc="<?php echo $_smarty_tpl->tpl_vars['arr']->value['sname'][0];?>
">                        <div class="album-title">                            <div class="title-line">                            </div>                        </div>                        <div class="album-content">                            <div class="content-box content-box-text" data-word="<?php echo $_smarty_tpl->tpl_vars['arr']->value['content'][0];?>
">                                 <div class="box-inner">                                 </div>                            </div>                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr']->value['pics']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>                            <div class="content-box content-box-img">                                <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pics'][$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
" lazy_src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pics'][$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
" height="180" width="270"  alt="" />                              </div>                            <?php endfor; endif; ?>                        </div>                    </li>                                       <?php } ?>                </ol>             </div>        </div>        <div class="fn-fullscreen" style="display:none;" id="iScrollDiv">               <div class="content-box">                <div class="box-inner" style="font-size:1.25em;line-height:1.5em;">                </div>            </div>        </div>        <div class="page_back" style="display:none;">            <a href="javascript:;" class="btn_back" onclick="history.back();"><span>返回</span></a>        </div>        <script type="text/javascript" src="http://imgcache.qq.com/piao/js/html5/j/vp/m_comm.js"></script>        <script type="text/javascript" src="http://imgcache.qq.com/piao/js/html5/comm/zepto.min.js"></script>           <script type="text/javascript" src="http://imgcache.qq.com/piao/js/html5/j/vp/iscroll_album.js"></script>            <script type="text/javascript" src="http://imgcache.qq.com/piao/js/html5/j/vp/album.js"></script></body></html><?php }} ?>