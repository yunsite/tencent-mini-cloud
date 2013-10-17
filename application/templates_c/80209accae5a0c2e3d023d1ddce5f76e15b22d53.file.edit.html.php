<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 04:15:10
         compiled from "application/views/reply/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:36432475522956cee87965-50525986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80209accae5a0c2e3d023d1ddce5f76e15b22d53' => 
    array (
      0 => 'application/views/reply/edit.html',
      1 => 1378395294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36432475522956cee87965-50525986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522956cef28430_18922652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522956cef28430_18922652')) {function content_522956cef28430_18922652($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>         
        <meta charset="UTF-8">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/jquery.upload-1.0.2.js" type="text/javascript"></script>
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#upload').change(function() {
                    $(this).upload("/application/output/upload1.php", function(res) {
                        alert(res.filename);
                        $("#pic").val(res.filename);
                        alert('File uploaded');
                    }, 'json');
                });
            });
        </script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">自动回复编辑<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <form action="index.php?c=rmanage&m=updateDo&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['data']->value['category'];?>
" method="post">
                            <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">   
                                <tbody>
                                    <tr>
                                        <th valign="top" style="width:120px"><label>关键词：</label></th>
                                        <td><input id="keywords" class="px" type="text" style="width:580px;" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kewords'];?>
"></td>
                                    </tr>
                                    <tr>
                                        <th valign="top" style="width:120px"><label>标题：</label></th>
                                        <td><input id="title" class="px" type="text" style="width:580px;" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"></td>
                                    </tr>
                                    <tr>
                                        <th valign="top" style="width:120px"><label>简介：</label></th>
                                        <td><textarea id="intro" class="px" style="width:580px; height:100px" name="intro" /><?php echo $_smarty_tpl->tpl_vars['data']->value['intro'];?>
</textarea></td>
                                    </tr>
                                    <tr>
                                        <th valign="top" style="width:120px"><label for="title">详细描述：</label></th>
                                        <td><textarea name="editor1"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea><script>CKEDITOR.replace('editor1');</script></td>
                                    </tr>
                                    <tr>
                                        <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                        <td><input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_url'];?>
" type="file" name="upload" id="upload" /></td>
                                    </tr>
                                    <tr><td><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_url'];?>
" name="pic" id="pic" ></td>
                                        <td><input type="submit" name="submit" id="submit" value="提交" ></td></tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </body>
</html>
<?php }} ?>