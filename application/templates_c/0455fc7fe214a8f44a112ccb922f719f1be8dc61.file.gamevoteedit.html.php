<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 03:46:53
         compiled from "application/views/gamevote/gamevoteedit.html" */ ?>
<?php /*%%SmartyHeaderCode:230317449522d44ad7e1185-50528463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0455fc7fe214a8f44a112ccb922f719f1be8dc61' => 
    array (
      0 => 'application/views/gamevote/gamevoteedit.html',
      1 => 1378698344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230317449522d44ad7e1185-50528463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d44ad8681c9_46441523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d44ad8681c9_46441523')) {function content_522d44ad8681c9_46441523($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4>在线投票-在线投票编辑<span class="FAQ"></span></h4>
                </div>
                <div class="msgWrap form">
                    <form method="post" action="index.php?c=gamevote&m=gamevotesave" enctype="multipart/form-data">   
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
">
                        <div class="bdrcontent">
                            <div id="div_ptype">
                                <table class="ListProduct" cellpadding="0" cellspacing="0" width="100%">                                 
                                    <tbody>
                                        <tr>
                                            <td>活动名称</td>                                           
                                            <td><input name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
" class="px" style="width:200px;" type="text"></td>                                          
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>其他设置</td>
                                            <td>每人/日次数<input name="dayset" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['dayset'];?>
" class="px" style="width:100px;" type="text"></td>
                                            <td>每次赠送积分<input name="fenset" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['fenset'];?>
" style="width:80px;"  class="px" type="text" /></td>
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