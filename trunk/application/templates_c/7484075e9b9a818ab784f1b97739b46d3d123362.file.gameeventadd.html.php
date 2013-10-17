<?php /* Smarty version Smarty-3.1.14, created on 2013-09-07 09:33:40
         compiled from "application/views/gameevent/gameeventadd.html" */ ?>
<?php /*%%SmartyHeaderCode:629298105522ae5a2e92a53-81157222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7484075e9b9a818ab784f1b97739b46d3d123362' => 
    array (
      0 => 'application/views/gameevent/gameeventadd.html',
      1 => 1378546409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629298105522ae5a2e92a53-81157222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ae5a2eedcd9_93042104',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ae5a2eedcd9_93042104')) {function content_522ae5a2eedcd9_93042104($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">活动信息编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=gameevent&m=gameeventsave" method="post">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>
                                <tr>
                                    <th valign="top" style="width:120px"><label>活动名称：</label></th>
                                    <td><input id="keywords" class="px" type="text" style="width:580px;" name="title"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>活动时间：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:580px;" name="time"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">详细描述：</label></th>
                                    <td><textarea name="editor1"></textarea><script>CKEDITOR.replace('editor1');</script></td>
                                </tr>
                                <tr><td><input type="hidden" name="pic" id="pic" ></td>
                                    <td><input type="submit" name="submit" id="submit" value="提交" ></td></tr>
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