<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 04:24:42
         compiled from "application/views/gameggk/gameggk.html" */ ?>
<?php /*%%SmartyHeaderCode:184765289252293a9ee1b6e1-15595524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6118d8f7e8bf469108d912cca412003b3f8b1c65' => 
    array (
      0 => 'application/views/gameggk/gameggk.html',
      1 => 1379382004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184765289252293a9ee1b6e1-15595524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52293a9ee81961_13594484',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293a9ee81961_13594484')) {function content_52293a9ee81961_13594484($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
" class="checkitem" type="checkbox"></td>
</td>
</td>
</td>  
">导出</a></td>   
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gameggk/gameggkdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
">上线</a>&nbsp;|&nbsp;<a href="index.php/gameggk/gameggkdown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>    
">预览</a></td>
