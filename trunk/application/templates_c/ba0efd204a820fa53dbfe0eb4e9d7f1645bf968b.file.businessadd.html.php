<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 04:49:04
         compiled from "application/views/business/businessadd.html" */ ?>
<?php /*%%SmartyHeaderCode:55144674452313bde674fe3-12313996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0efd204a820fa53dbfe0eb4e9d7f1645bf968b' => 
    array (
      0 => 'application/views/business/businessadd.html',
      1 => 1378961315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55144674452313bde674fe3-12313996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52313bde6d0614_85804818',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52313bde6d0614_85804818')) {function content_52313bde6d0614_85804818($_smarty_tpl) {?><!DOCTYPE html>
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
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>
                                <tr>
                                    <th valign="top" style="width:120px"><label>商家名称：</label></th>
                                    <td><input id="sname" class="px" type="text" style="width:580px;" name="sname"></td>
                                </tr>                                                              
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">详细描述：</label></th>
                                    <td><textarea name="content"></textarea><script>CKEDITOR.replace('content');</script></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="pic" id="pic" ></td>
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