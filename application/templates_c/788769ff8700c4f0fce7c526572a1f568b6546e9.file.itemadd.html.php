<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 10:12:50
         compiled from "application/views/menu/itemadd.html" */ ?>
<?php /*%%SmartyHeaderCode:2549601845232e42002cfc6-88977884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '788769ff8700c4f0fce7c526572a1f568b6546e9' => 
    array (
      0 => 'application/views/menu/itemadd.html',
      1 => 1379067138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2549601845232e42002cfc6-88977884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5232e420091bc0_50308668',
  'variables' => 
  array (
    'fid' => 0,
    'fathermenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232e420091bc0_50308668')) {function content_5232e420091bc0_50308668($_smarty_tpl) {?><!DOCTYPE html>
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
                <form action="index.php?c=menu&m=itemsave" method="post">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" name="fid">
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