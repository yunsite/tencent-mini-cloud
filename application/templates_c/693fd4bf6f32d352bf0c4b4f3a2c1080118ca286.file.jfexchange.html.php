<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 16:59:24
         compiled from "application/views/jfrule/jfexchange.html" */ ?>
<?php /*%%SmartyHeaderCode:58719790522d2ff2002c29-33291221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693fd4bf6f32d352bf0c4b4f3a2c1080118ca286' => 
    array (
      0 => 'application/views/jfrule/jfexchange.html',
      1 => 1379384938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58719790522d2ff2002c29-33291221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d2ff204d914_49152238',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d2ff204d914_49152238')) {function content_522d2ff204d914_49152238($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">积分兑换<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left"> <a href="index.php?c=jfrule&m=jfexchangeadd" title="新增游戏" class="btnGrayS vm bigbtn">新增</a></div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="answer">奖品名称</th>
                                    <th class="time">状态</th>
                                    <th class="time">剩余数量</th>  
                                    <th class="time">兑换名单</th>     
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['tcount'];?>
</td>
                                    <td><a href="index.php/jfrule/doout?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">导出</a></td>                                     
                                    <td><a href="index.php/jfrule/jfexchangeedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/jfrule/jfexchangedel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
                                    <td><a href="index.php/jfrule/jfexchangeup?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">上线</a>&nbsp;|&nbsp;<a href="index.php/jfrule/jfexchangedown?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
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