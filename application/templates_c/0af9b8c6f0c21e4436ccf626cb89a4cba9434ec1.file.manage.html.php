<?php /* Smarty version Smarty-3.1.14, created on 2013-09-16 03:51:32
         compiled from "application/views/reply/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1156877175522938db93a7e7-46734666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af9b8c6f0c21e4436ccf626cb89a4cba9434ec1' => 
    array (
      0 => 'application/views/reply/manage.html',
      1 => 1379303472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1156877175522938db93a7e7-46734666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522938dba3ceb3_18905332',
  'variables' => 
  array (
    'data' => 0,
    'reply' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522938dba3ceb3_18905332')) {function content_522938dba3ceb3_18905332($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value){
$_smarty_tpl->tpl_vars['reply']->_loop = true;
?>
</td>
</td>
</td>
</td>
&category=<?php echo $_smarty_tpl->tpl_vars['reply']->value['category'];?>
">编辑</a>&nbsp;|&nbsp;
&category=<?php echo $_smarty_tpl->tpl_vars['reply']->value['category'];?>
">删除</a></td>
