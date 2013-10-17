<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 11:57:15
         compiled from "application/views/jfrule/jfexchangeadd.html" */ ?>
<?php /*%%SmartyHeaderCode:191093635522d309c9a89e5-15229629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789f01bc0f47272c1aeb0cafe13ec9ad62e1f328' => 
    array (
      0 => 'application/views/jfrule/jfexchangeadd.html',
      1 => 1379476524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191093635522d309c9a89e5-15229629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d309c9a9f84_13571576',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d309c9a9f84_13571576')) {function content_522d309c9a9f84_13571576($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">奖品信息编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=jfrule&m=jfexchangesave" method="post">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>
                                <tr>
                                    <th valign="top" style="width:120px"><label>奖品名称：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:580px;" name="title"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>奖品数量：</label></th>
                                    <td><input id="tcount" class="px" type="text" style="width:580px;" name="tcount"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>所需积分：</label></th>
                                    <td><input id="fen" class="px" type="text" style="width:580px;" name="fen"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>使用时间：</label></th>
                                    <td><input id="endtime" class="px" type="text" style="width:580px;" name="endtime" ></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>领奖时间：</label></th>
                                    <td><input id="mark" class="px" type="text" style="width:580px;" name="gettime" ></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>领奖地址：</label></th>
                                    <td><input id="mark" class="px" type="text" style="width:580px;" name="address" ></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                                    <td><input type="file" name="upload" id="upload" /></td>
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