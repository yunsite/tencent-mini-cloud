<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 11:36:47
         compiled from "application/views/menu/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:260438724523299650a9fb9-90138378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1092984b1a4a1beefcd10a99028317a0db12a635' => 
    array (
      0 => 'application/views/menu/menu.html',
      1 => 1379072197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260438724523299650a9fb9-90138378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52329965144d04_06244137',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52329965144d04_06244137')) {function content_52329965144d04_06244137($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
" class="checkitem" type="checkbox"></td>
</td>
</td>
</td>                                  
">编辑</a>&nbsp;|&nbsp;<a href="../../index.php/menu/menudel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a>&nbsp;|&nbsp;<a href="../../index.php/menu/itemlist?fid=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">子按钮信息</a></td>    
