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
<?php if ($_valid && !is_callable('content_52293c73f2b814_94526467')) {function content_52293c73f2b814_94526467($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
" class="checkitem" type="checkbox"></td>
</td>
</td>
</td>     
">导出</a></td>  
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gamedzp/gamedzpdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
">上线</a>&nbsp;|&nbsp;<a href="index.php/gamedzp/gamedzpdown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>    
">预览</a></td>
