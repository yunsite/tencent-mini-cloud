<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 04:24:47
         compiled from "application/views/gamedzp/gamedzp.html" */ ?>
<?php /*%%SmartyHeaderCode:147945509352293c73e6c937-40853047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3479d0a067f01396e403adda86cd8e1ebcc1b9' => 
    array (
      0 => 'application/views/gamedzp/gamedzp.html',
      1 => 1379384766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147945509352293c73e6c937-40853047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52293c73f2b814_94526467',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293c73f2b814_94526467')) {function content_52293c73f2b814_94526467($_smarty_tpl) {?><!DOCTYPE html><html>    <head>                 <meta charset="UTF-8">        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>        <script src="/application/public/js/common.js" type="text/javascript"></script>    </head>    <body>        <div class="tableContent">            <div class="content">                <div class="cLineB">                    <h4 class="left">在线游戏-大转盘<span class="FAQ"></span></h4>                </div>                <div class="cLine">                    <div class="pageNavigator left"> <a href="index.php?c=gamedzp&m=gamedzpadd" title="" class="btnGrayS vm bigbtn">新增</a></div>                    <div class="clr"></div>                </div>                <div class="msgWrap form">                    <div class="msgWrap">                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">                            <thead>                                <tr>                                    <th class="select">选择</th>                                    <th class="keywords">活动名称</th>                                    <th class="time">活动状态</th>                                    <th class="answer">参与人数</th>                                    <th class="category">获奖名单</th>                                                                            <th>操作</th>                                    <th>状态控制</th>                                    <th>预览</th>                                </tr>                            </thead>                            <tbody>                                <tr></tr>                                                                  <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>                                <tr>                                    <td><input name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="checkitem" type="checkbox"></td>                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['state'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['tcount'];?>
</td>                                         <td><a href="index.php/gamedzp/doout?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">导出</a></td>                                      <td><a href="index.php/gamedzp/gamedzpedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gamedzp/gamedzpdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>                                        <td><a href="index.php/gamedzp/gamedzpup?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">上线</a>&nbsp;|&nbsp;<a href="index.php/gamedzp/gamedzpdown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>                                        <td><a target="blank" href="index.php/gamedzp/gamedzpshow?fromusername=test&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">预览</a></td>                                </tr>                                <?php } ?>                                                                </tbody>                        </table>                    </div>                </div>            </div>            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        </div>    </body></html><?php }} ?>