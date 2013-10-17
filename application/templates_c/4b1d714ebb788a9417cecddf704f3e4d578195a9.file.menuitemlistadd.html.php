<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 09:43:00
         compiled from "application/views/menu/menuitemlistadd.html" */ ?>
<?php /*%%SmartyHeaderCode:7639232315232dd41bd1af3-00442099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b1d714ebb788a9417cecddf704f3e4d578195a9' => 
    array (
      0 => 'application/views/menu/menuitemlistadd.html',
      1 => 1379065255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7639232315232dd41bd1af3-00442099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5232dd41bd2b50_18004694',
  'variables' => 
  array (
    'fathermenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232dd41bd2b50_18004694')) {function content_5232dd41bd2b50_18004694($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">按钮编辑<span class="FAQ"></span></h4>
                </div>
                <form action="index.php?c=menu&m=menusave" method="post">
                    <div class="msgWrap form">
                        <table class="userinfoArea" border="0" cellpadding="0" cellspacing="0" width="100%">                           
                            <tbody>
                                <tr>
                                    <th valign="top" style="width:120px"><label>父级菜单：</label></th>
                                    <td><?php echo $_smarty_tpl->tpl_vars['fathermenu']->value;?>
</td>
                                </tr>  
                                <tr>
                                    <th valign="top" style="width:120px"><label>按钮名称：</label></th>
                                    <td><input id="sname" class="px" type="text" style="width:180px;" name="name"></td>
                                </tr>                                                              
                                <tr>
                                    <th valign="top" style="width:120px"><label>关键字：</label></th>
                                    <td><input id="sname" class="px" type="text" style="width:180px;" name="key"></td>
                                </tr>  
                                <tr>
                                    <th valign="top" style="width:120px"><label>序号：</label></th>
                                    <td><input id="sname" class="px" type="text" style="width:180px;" name="orderno"></td>
                                </tr>  
                                <tr>
                                    <td></td>
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