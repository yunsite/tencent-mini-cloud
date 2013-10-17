<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 05:18:00
         compiled from "application/views/person/useredit.html" */ ?>
<?php /*%%SmartyHeaderCode:1378785034522ea947700b52-01118182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94f902eb709035912e60dad4fd383e64c2e7b9c' => 
    array (
      0 => 'application/views/person/useredit.html',
      1 => 1378790169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378785034522ea947700b52-01118182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ea94775a860_32115506',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ea94775a860_32115506')) {function content_522ea94775a860_32115506($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/common.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4>用户管理<span class="FAQ"></span></h4>
                </div>
                <div class="msgWrap form">
                    <form method="post" action="index.php?c=person&m=personsave" enctype="multipart/form-data"> 
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" name="id">
                        <div class="bdrcontent">
                            <div id="div_ptype">
                                <table class="ListProduct" cellpadding="0" cellspacing="0" width="100%">                                 
                                    <tbody>
                                        <tr>
                                            <td>微信id</td>                                           
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['fromusername'];?>
</td>                                          
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>手机号码</td>
                                            <td><input name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['mobile'];?>
" class="px" style="width:100px;" type="text"></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>积分</td>
                                            <td><input name="jf" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['jf'];?>
" class="px" style="width:100px;" type="text"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>                                   
                                    <tbody>
                                        <tr>
                                            <td colspan="7" class="norightbkeyorder">
                                                <button type="submit" name="dosubmit" value="true" class="btnGreen vm"><strong>保存</strong></button>                                                
                                            </td>
                                        </tr>
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