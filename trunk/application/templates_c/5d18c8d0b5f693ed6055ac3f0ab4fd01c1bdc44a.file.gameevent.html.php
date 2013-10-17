<?php /* Smarty version Smarty-3.1.14, created on 2013-09-07 08:31:39
         compiled from "application/views/gameevent/gameevent.html" */ ?>
<?php /*%%SmartyHeaderCode:1467630011522ae46baead32-35146054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d18c8d0b5f693ed6055ac3f0ab4fd01c1bdc44a' => 
    array (
      0 => 'application/views/gameevent/gameevent.html',
      1 => 1378542582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1467630011522ae46baead32-35146054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ae46bb8f1f4_68325608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ae46bb8f1f4_68325608')) {function content_522ae46bb8f1f4_68325608($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">活动信息<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left"> <a href="index.php?c=gameevent&m=gameeventadd" title="新增游戏" class="btnGrayS vm bigbtn">新增</a></div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">

                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="keywords">活动名称</th>
                                    <th class="time">活动状态</th>
                                    <th>操作</th>
                                    <th>状态控制</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>                                  
                                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                                <tr>
                                    <td><input name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="checkitem" type="checkbox"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['state'];?>
</td>                                  
                                    <td><a href="index.php/gameevent/gameeventedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/gameevent/gameeventdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
                                    <td><a href="index.php/gameevent/gameeventup?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">上线</a>&nbsp;|&nbsp;<a href="index.php/gameevent/gameeventdown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">下线</a></td>    
                                </tr>
                                <?php } ?>                                    

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>


    </body>
</html>
<?php }} ?>