<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 04:20:03
         compiled from "application/views/role/rolelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1016217833522957f3448fa7-53871982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46df8b1850dc1cdcfc4c467b9d6e83e174e0437d' => 
    array (
      0 => 'application/views/role/rolelist.html',
      1 => 1378441193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016217833522957f3448fa7-53871982',
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
  'unifunc' => 'content_522957f34dada9_76926439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522957f34dada9_76926439')) {function content_522957f34dada9_76926439($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">江湖昵称<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left"> <a href="index.php?c=role&m=roleadd" title="新增游戏" class="btnGrayS vm bigbtn">新增</a></div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">

                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="keywords">江湖昵称</th>
                                    <th class="keywords">所需积分</th>
                                    <th>操作</th>

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

                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['rolename'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['rolefen'];?>
</td>
                                    <td><a href="index.php/role/roleedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/role/roledel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
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