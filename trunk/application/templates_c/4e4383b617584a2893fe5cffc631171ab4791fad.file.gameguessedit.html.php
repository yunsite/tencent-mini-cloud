<?php /* Smarty version Smarty-3.1.14, created on 2013-09-11 12:52:01
         compiled from "application/views/gameguess/gameguessedit.html" */ ?>
<?php /*%%SmartyHeaderCode:149512197523027547e4476-87044643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4383b617584a2893fe5cffc631171ab4791fad' => 
    array (
      0 => 'application/views/gameguess/gameguessedit.html',
      1 => 1378903899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149512197523027547e4476-87044643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523027548629d9_94007909',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523027548629d9_94007909')) {function content_523027548629d9_94007909($_smarty_tpl) {?><!DOCTYPE html>
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
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>                              
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>答案（用，隔开）：</label></th>
                                    <td><input id="answer" class="px" type="text" style="width:580px;" name="answer" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answer'];?>
"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>答案字数：</label></th>
                                    <td><input id="answercount" class="px" type="text" style="width:580px;"value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answercount'];?>
"  name="answercount"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>备注：</label></th>
                                    <td><input id="mark" class="px" type="text" style="width:580px;" name="mark" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['mark'];?>
"></td>
                                </tr>                               
                                <tr><td><input type="hidden" name="pic" id="pic"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pic'];?>
" ></td>
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