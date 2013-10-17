<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 10:08:23
         compiled from "application/views/menu/itemlist.html" */ ?>
<?php /*%%SmartyHeaderCode:945990445232e0b063e0d2-05785573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4abf002e3364f49f37ac056ce2fa7831d651f10' => 
    array (
      0 => 'application/views/menu/itemlist.html',
      1 => 1379066887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945990445232e0b063e0d2-05785573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5232e0b06cdac0_41151591',
  'variables' => 
  array (
    'fid' => 0,
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232e0b06cdac0_41151591')) {function content_5232e0b06cdac0_41151591($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>         
        <meta charset="UTF-8">
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/common.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">子按钮菜单信息<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left"> 
                        <a href="../../index.php?c=menu&m=menuitemadd&fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" title="" class="btnGrayS vm bigbtn">新增</a></div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="keywords">按钮名称</th>
                                    <th class="keywords">按钮序号</th>
                                    <th class="time">关键字</th>
                                    <th>操作</th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>                                  
                                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                                <tr>
                                    <td><input name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="checkitem" type="checkbox"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['orderno'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['key'];?>
</td>                                  
                                    <td><a href="../../index.php/menu/itemedit?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="../../index.php/menu/itemdel?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
                                </tr>
                                <?php } ?>                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </body>
</html>
<?php }} ?>