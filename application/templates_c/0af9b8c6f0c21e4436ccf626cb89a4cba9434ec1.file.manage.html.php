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
<?php if ($_valid && !is_callable('content_522938dba3ceb3_18905332')) {function content_522938dba3ceb3_18905332($_smarty_tpl) {?><!DOCTYPE html><html>    <head>                 <meta charset="UTF-8">        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>        <script src="/application/public/js/jquery.upload-1.0.2.js" type="text/javascript"></script>        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">        <script type="text/javascript">            $(function() {                $('#upload').change(function() {                    $(this).upload("/application/output/upload1.php", function(res) {                        alert(res.filename);                        $("#pic").val(res.filename);                        alert('File uploaded');                    }, 'json');                });            });        </script>    </head>    <body>        <div class="tableContent">            <div class="content">                <div class="cLineB">                    <h4 class="left">自动回复管理<span class="FAQ"></span></h4>                </div>                <div class="cLine">                    <div class="clr"></div>                </div>                <div class="msgWrap">                    <form action="index.php?c=autoreply&m=submitDo" method="post">                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">                            <tbody>                                <tr>                                    <td>关键字</td>                                    <td>标题</td>                                    <td>类别</td>                                    <td>图片URL</td>                                    <td>操作</td>                                </tr>                                <?php  $_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value){
$_smarty_tpl->tpl_vars['reply']->_loop = true;
?>                                <tr>                                    <td><?php echo $_smarty_tpl->tpl_vars['reply']->value['kewords'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['reply']->value['title'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['reply']->value['category'];?>
</td>                                    <td><?php echo $_smarty_tpl->tpl_vars['reply']->value['pic_url'];?>
</td>                                    <td><a href="index.php?c=rmanage&m=editDo&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['reply']->value['category'];?>
">编辑</a>&nbsp;|&nbsp;                                        <a href="index.php?c=rmanage&m=removeDo&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['reply']->value['category'];?>
">删除</a></td>                                </tr>                                <?php } ?>                            </tbody>                        </table>                    </form>                </div>            </div>            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        </div>    </body></html><?php }} ?>