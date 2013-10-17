<?php /* Smarty version Smarty-3.1.14, created on 2013-09-15 06:19:05
         compiled from "application/views/gamevote/gamevote.html" */ ?>
<?php /*%%SmartyHeaderCode:21216884452293d2f01efd9-01792426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ccd9ad6c4b9e0b17f6b0a03c23d7d99dca1d4a5' => 
    array (
      0 => 'application/views/gamevote/gamevote.html',
      1 => 1379225924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21216884452293d2f01efd9-01792426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52293d2f0b3a90_38265097',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293d2f0b3a90_38265097')) {function content_52293d2f0b3a90_38265097($_smarty_tpl) {?><!DOCTYPE html><html>    <head>                 <meta charset="UTF-8">        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>        <script src="/application/public/js/common.js" type="text/javascript"></script>    </head>    <body>        <div class="tableContent">            <div class="content">                <div class="cLineB">                    <h4 class="left">在线活动-在线投票<span class="FAQ"></span></h4>                </div>                <div class="cLine">                    <div class="pageNavigator left"> <a href="index.php?c=gamevote&m=gamevoteadd" title="" class="btnGrayS vm bigbtn">新增</a></div>                    <div class="clr"></div>                </div>                <div class="msgWrap form">                    <div class="msgWrap">                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">                            <thead>                                <tr>                                    <th class="select">选择</th>                                    <th>活动名称</th>                                    <th>活动状态</th>                                    <th>操作</th>                                    <th>状态控制</th>                                </tr>                            </thead>                            <tbody>                                <tr></tr>                                                                  <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>                                <tr>                                    <td><input name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="checkitem" type="checkbox"></td>                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['state'];?>
</td>                                    <td><a href="index.php/gamevote/gamevoteedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gamevote/gamevotedel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a>&nbsp;|&nbsp;<a href="index.php/gamevote/voteitem?did=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">内容编辑</a></td>                                        <td><a href="index.php/gamevote/gamevoteup?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">上线</a>&nbsp;|&nbsp;<a href="index.php/gamevote/gamevotedown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>                                    </tr>                                <?php } ?>                                                                </tbody>                        </table>                    </div>                </div>            </div>            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        </div>    </body></html><?php }} ?>