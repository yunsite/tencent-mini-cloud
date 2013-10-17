<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 07:25:21
         compiled from "application/views/gamevote/voteitem.html" */ ?>
<?php /*%%SmartyHeaderCode:1273441920522d47c87bdfa0-26501847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd9e50e0a0d4a5ee378a1df9d08ac91c7dd3c7c' => 
    array (
      0 => 'application/views/gamevote/voteitem.html',
      1 => 1378711381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273441920522d47c87bdfa0-26501847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d47c87bee16_55846792',
  'variables' => 
  array (
    'title' => 0,
    'did' => 0,
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d47c87bee16_55846792')) {function content_522d47c87bee16_55846792($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">在线投票—添加子项—【<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
】<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">                    
                    <div class="pageNavigator left"> 
                        <a href="../../index.php/gamevote/itemadd?did=<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
" title="" class="btnGrayS vm bigbtn">新增</a>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th>名称</th>
                                    <th>票数</th>                                    
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
                                    <td><input name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="checkitem" type="checkbox"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['vote'];?>
</td>                                                                    
                                    <td><a href="../../index.php/gamevote/voteitemedit?did=<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="../../index.php/gamevote/voteitemdel?did=<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
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