<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 05:54:58
         compiled from "application/views/login/change_pwd.html" */ ?>
<?php /*%%SmartyHeaderCode:17490762752296e328f1428-72956522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e174bb71bdc117736bd0a931cf4a946814074da2' => 
    array (
      0 => 'application/views/login/change_pwd.html',
      1 => 1378311440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17490762752296e328f1428-72956522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52296e3294fe12_54017373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52296e3294fe12_54017373')) {function content_52296e3294fe12_54017373($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/common.js" type="text/javascript"></script>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4>修改密码</h4>
                </div>
                <div class="msgWrap form">
                    <form method="post" action="index.php?c=login&m=changePassword" enctype="multipart/form-data">
                        <input name="id" value="" type="hidden">
                        <div class="msgWrap">
                            <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <th>原密码:</th>
                                        <td><input required="" onkeyup="this.value = this.value.replace(/^ +| +$/g, '')" name="oldpassword" class="px" tabindex="1" size="25" type="password">
                                    </tr>
                                    <tr>
                                        <th>新密码:</th>
                                        <td><input required="" onkeyup="this.value = this.value.replace(/^ +| +$/g, '')" name="newpassword" class="px" id="pass1" tabindex="1" size="25" type="password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>确认新密码:</th>
                                        <td><input required="" onkeyup="this.value = this.value.replace(/^ +| +$/g, '')" name="newpassword2"  class="px" id="pass2" tabindex="1" size="25" type="password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</th>
                                        <td><button type="submit"  name="dosubmit" class="btnGreen" id="saveSetting">保存</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </body>
</html><?php }} ?>