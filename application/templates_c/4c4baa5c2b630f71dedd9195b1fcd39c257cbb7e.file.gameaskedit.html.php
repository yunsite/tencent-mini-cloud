<?php /* Smarty version Smarty-3.1.14, created on 2013-09-11 01:55:20
         compiled from "application/views/gameask/gameaskedit.html" */ ?>
<?php /*%%SmartyHeaderCode:140054531522fcb00d92b66-53637429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4baa5c2b630f71dedd9195b1fcd39c257cbb7e' => 
    array (
      0 => 'application/views/gameask/gameaskedit.html',
      1 => 1378864492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140054531522fcb00d92b66-53637429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522fcb00e25a10_19755972',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522fcb00e25a10_19755972')) {function content_522fcb00e25a10_19755972($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4>在线游戏—有奖问答编辑 <span class="FAQ"></span></h4>
                </div>
                <div class="msgWrap form">
                    <form method="post" action="index.php?c=gameask&m=gameasksave" enctype="multipart/form-data">    
                        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" type="hidden">
                        <div class="bdrcontent">
                            <div id="div_ptype">
                                <table class="ListProduct" cellpadding="0" cellspacing="0" width="100%">                                 
                                    <tbody>
                                        <tr>
                                            <td>题目</td>                                           
                                            <td><textarea id="question" class="px" style="width:620px; height:50px" name="question" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['question'];?>
</textarea></td>                                      
                                        </tr>
                                        <tr>
                                            <td>选项A</td>
                                            <td><textarea id="answerlista" class="px" style="width:620px; height:50px" name="answerlista" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlista'];?>
</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>选项B</td>
                                            <td><textarea id="answerlistb" class="px" style="width:620px; height:50px" name="answerlistb" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistb'];?>
</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>选项C</td>
                                            <td><textarea id="answerlistc" class="px" style="width:620px; height:50px" name="answerlistc" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistc'];?>
</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>选项D</td>
                                            <td><textarea id="answerlistd" class="px" style="width:620px; height:50px" name="answerlistd" /><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistd'];?>
</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>正确答案</td>                                         
                                            <td><input name="answer" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answer'];?>
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

        </div>
    </body>
</html>

<?php }} ?>