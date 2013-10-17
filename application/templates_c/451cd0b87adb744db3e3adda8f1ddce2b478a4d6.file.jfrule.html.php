<?php /* Smarty version Smarty-3.1.14, created on 2013-09-08 06:13:41
         compiled from "application/views/jfrule/jfrule.html" */ ?>
<?php /*%%SmartyHeaderCode:1759283546522c10eb8bf1a7-75601934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451cd0b87adb744db3e3adda8f1ddce2b478a4d6' => 
    array (
      0 => 'application/views/jfrule/jfrule.html',
      1 => 1378620801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759283546522c10eb8bf1a7-75601934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522c10eb9229a7_28016520',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522c10eb9229a7_28016520')) {function content_522c10eb9229a7_28016520($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>         
        <meta charset="UTF-8">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/jquery.upload-1.0.2.js" type="text/javascript"></script>
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">积分规则<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=jfrule&m=jfrulesave" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
"/>
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>                                                              
                                <tr>
                                    <th valign="top" style="width:120px"><label>简介：</label></th>
                                    <td><textarea id="content" class="px" style="width:580px; height:500px" name="content" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['content'];?>
</textarea></td>
                                </tr>                               
                                <tr>
                                    <td></td>
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