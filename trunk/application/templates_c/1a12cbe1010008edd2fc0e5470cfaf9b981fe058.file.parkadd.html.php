<?php /* Smarty version Smarty-3.1.14, created on 2013-09-14 02:57:06
         compiled from "application/views/park/parkadd.html" */ ?>
<?php /*%%SmartyHeaderCode:8185846635233d051aedc20-13763300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a12cbe1010008edd2fc0e5470cfaf9b981fe058' => 
    array (
      0 => 'application/views/park/parkadd.html',
      1 => 1379127420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8185846635233d051aedc20-13763300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5233d051b458e7_10189852',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5233d051b458e7_10189852')) {function content_5233d051b458e7_10189852($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>         
        <meta charset="UTF-8">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/jquery.upload-1.0.2.js" type="text/javascript"></script>
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">       
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">停车服务编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=park&m=parksave" method="post">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>                               
                                <tr>
                                    <th valign="top" style="width:120px"><label>停车场点名称：</label></th>
                                    <td><input id="keywords" class="px" type="text" style="width:580px;" name="parking"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>停车场点具体地址：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:580px;" name="address"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>泊位数量：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:180px;" name="pcount"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>经度：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:180px;" name="x"></td>
                                </tr>
                                <tr>
                                    <th valign="top" style="width:120px"><label>纬度：</label></th>
                                    <td><input id="title" class="px" type="text" style="width:180px;" name="y"></td>
                                </tr>
                                <tr><td></td>
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