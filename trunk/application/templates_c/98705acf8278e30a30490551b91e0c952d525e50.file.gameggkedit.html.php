<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 16:49:02
         compiled from "application/views/gameggk/gameggkedit.html" */ ?>
<?php /*%%SmartyHeaderCode:34535789752293d23909e33-49737155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98705acf8278e30a30490551b91e0c952d525e50' => 
    array (
      0 => 'application/views/gameggk/gameggkedit.html',
      1 => 1379407716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34535789752293d23909e33-49737155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52293d239c2c84_50313868',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293d239c2c84_50313868')) {function content_52293d239c2c84_50313868($_smarty_tpl) {?><!DOCTYPE html><html>    <head>                <meta charset="UTF-8">        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>        <script src="/application/public/js/common.js" type="text/javascript"></script>    </head>    <body>        <div class="tableContent">            <div class="content">                <div class="cLineB">                    <h4>刮刮卡游戏编辑 <span class="FAQ"></span></h4>                </div>                <div class="msgWrap form">                    <form method="post" action="index.php?c=gameggk&m=gameggksave" enctype="multipart/form-data">                            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" type="hidden">                        <div class="bdrcontent">                            <div id="div_ptype">                                <table class="ListProduct" cellpadding="0" cellspacing="0" width="100%">                                                                     <tbody>                                        <tr>                                            <td>活动名称</td>                                                                                       <td><input name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
" class="px" style="width:200px;" type="text"></td>                                                                                      <td></td>                                             <td></td>                                                                                   </tr>                                        <tr>                                            <td>奖品信息</td>                                            <td>一等奖奖品：<input name="pname1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pname1'];?>
" class="px" style="width:100px;" type="text"></td>                                            <td>奖品数量<input name="pcount1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pcount1'];?>
" style="width:80px;"  class="px" type="text" /></td>                                            <td>使用有效期：<input name="ptime1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['ptime1'];?>
" class="px" style="width:100px;" type="text"></td>                                                                                   </tr>                                        <tr>                                            <td></td>                                            <td>二等奖奖品：<input name="pname2" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pname2'];?>
" class="px" style="width:100px;" type="text"></td>                                            <td>奖品数量<input name="pcount2" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pcount2'];?>
" style="width:80px;"  class="px" type="text" /></td>                                           <td>使用有效期：<input name="ptime2" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['ptime2'];?>
" class="px" style="width:100px;" type="text"></td>                                        </tr>                                        <tr>                                            <td></td>                                            <td>三等奖奖品：<input name="pname3" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pname3'];?>
" class="px" style="width:100px;" type="text"></td>                                            <td>奖品数量<input name="pcount3" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pcount3'];?>
" style="width:80px;"  class="px" type="text" /></td>                                            <td>使用有效期：<input name="ptime3" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['ptime3'];?>
" class="px" style="width:100px;" type="text"></td>                                        </tr>                                        <tr>                                            <td>其他设置</td>                                            <td>每人/日次数<input name="dayset" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['dayset'];?>
" class="px" style="width:100px;" type="text"></td>                                            <td>每次赠送积分<input name="fenset" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['fenset'];?>
" style="width:80px;"  class="px" type="text" /></td>                                            <td>领奖有效期：<input name="ptime4" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['ptime4'];?>
" class="px" style="width:100px;" type="text"></td>                                        </tr>                                        <tr>                                            <td>详细说明</td>                                            <td><textarea id="intro" class="px" style="width:620px; height:100px" name="intro" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['intro'];?>
</textarea></td>                                        </tr>                                    </tbody>                                                                       <tbody>                                        <tr>                                            <td colspan="7" class="norightbkeyorder">                                                <button type="submit" name="dosubmit" value="true" class="btnGreen vm"><strong>保存</strong></button>                                                                                            </td>                                        </tr>                                    </tbody>                                </table>                            </div>                        </div>                        <div class="footactions" style="padding-left:10px">                            <div class="pages"></div>                        </div>                    </form>                </div>            </div>            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        </div>    </body></html><?php }} ?>