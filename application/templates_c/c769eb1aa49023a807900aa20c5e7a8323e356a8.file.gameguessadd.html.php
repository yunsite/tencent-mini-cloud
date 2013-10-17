<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 02:44:11
         compiled from "application/views/gameguess/gameguessadd.html" */ ?>
<?php /*%%SmartyHeaderCode:613530701523021e520b7e1-42229448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c769eb1aa49023a807900aa20c5e7a8323e356a8' => 
    array (
      0 => 'application/views/gameguess/gameguessadd.html',
      1 => 1378902759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613530701523021e520b7e1-42229448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523021e52672e3_53823150',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523021e52672e3_53823150')) {function content_523021e52672e3_53823150($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">疯狂猜图编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=gameguess&m=gameguesssave" method="post">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>                              
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>答案（用，隔开）：</label></th>
                                    <td><input id="answer" class="px" type="text" style="width:580px;" name="answer"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>答案字数：</label></th>
                                    <td><input id="answercount" class="px" type="text" style="width:580px;" name="answercount"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>备注：</label></th>
                                    <td><input id="mark" class="px" type="text" style="width:580px;" name="mark"></td>
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