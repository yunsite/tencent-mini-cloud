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
<?php if ($_valid && !is_callable('content_52293d2f0b3a90_38265097')) {function content_52293d2f0b3a90_38265097($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
" class="checkitem" type="checkbox"></td>
</td>
</td>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gamevote/gamevotedel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a>&nbsp;|&nbsp;<a href="index.php/gamevote/voteitem?did=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">内容编辑</a></td>    
">上线</a>&nbsp;|&nbsp;<a href="index.php/gamevote/gamevotedown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>    
