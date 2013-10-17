<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 05:03:58
         compiled from "application/views/business/businessedit.html" */ ?>
<?php /*%%SmartyHeaderCode:90598486152314b3edb68d7-49994428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff248fb013c506959552d2b5aaa19623acac684' => 
    array (
      0 => 'application/views/business/businessedit.html',
      1 => 1378962219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90598486152314b3edb68d7-49994428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52314b3edee7b6_57972614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52314b3edee7b6_57972614')) {function content_52314b3edee7b6_57972614($_smarty_tpl) {?><!DOCTYPE html>
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
                    $(this).upload("/upload1.php", function(res) {
                        $("#pic").val(res.filename);
                        $("#upload").val(res.filename);
                        alert('上传成功');
                    }, 'json');
                });
            });
        </script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">商家联盟信息编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=business&m=shopsave" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>
                                <tr>
                                    <th valign="top" style="width:120px"><label>商家名称：</label></th>
                                    <td><input id="sname" class="px" type="text" style="width:580px;"value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['sname'];?>
"  name="sname"></td>
                                </tr>                                                              
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">详细描述：</label></th>
                                    <td><textarea name="content"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['content'];?>
</textarea><script>CKEDITOR.replace('content');</script></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="pic" id="pic" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pic'];?>
" ></td>
                                    <td colspan="7" class="norightbkeyorder">
                                        <button type="submit" name="dosubmit" value="true" class="btnGreen vm"><strong>保存</strong></button>                                                
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </form>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</body>
</html>
<?php }} ?>