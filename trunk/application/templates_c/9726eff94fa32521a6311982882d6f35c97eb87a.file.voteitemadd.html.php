<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 05:34:07
         compiled from "application/views/gamevote/voteitemadd.html" */ ?>
<?php /*%%SmartyHeaderCode:370015055522d57bb030878-64127448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9726eff94fa32521a6311982882d6f35c97eb87a' => 
    array (
      0 => 'application/views/gamevote/voteitemadd.html',
      1 => 1378704826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370015055522d57bb030878-64127448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d57bb097c81_11592411',
  'variables' => 
  array (
    'did' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d57bb097c81_11592411')) {function content_522d57bb097c81_11592411($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4>在线投票编辑<span class="FAQ"></span></h4>
                </div>
                <div class="msgWrap form">
                    <form method="post" action="index.php?c=gamevote&m=voteitemsave" enctype="multipart/form-data">
                        <input type="hidden" name="did" value="<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
"/>
                        <div class="bdrcontent">
                            <div id="div_ptype">
                                <table class="ListProduct" cellpadding="0" cellspacing="0" width="100%">                                 
                                    <tbody>
                                        <tr>
                                            <th valign="top" style="width:120px"><label>名称：</label></th>
                                            <td><input id="title" class="px" type="text" style="width:380px;" name="title"></td>
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
                            </div>
                        </div>
                        <div class="footactions" style="padding-left:10px">
                            <div class="pages"></div>
                        </div>
                    </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>