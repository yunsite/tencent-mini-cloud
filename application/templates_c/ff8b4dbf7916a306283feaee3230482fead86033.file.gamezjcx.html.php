<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 15:20:58
         compiled from "application/views/gameggk/gamezjcx.html" */ ?>
<?php /*%%SmartyHeaderCode:15391325575237fcaa8c24e8-43399842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8b4dbf7916a306283feaee3230482fead86033' => 
    array (
      0 => 'application/views/gameggk/gamezjcx.html',
      1 => 1379402440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15391325575237fcaa8c24e8-43399842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5237fcaa90a801_17206819',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5237fcaa90a801_17206819')) {function content_5237fcaa90a801_17206819($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">中奖查询<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left"> 
                        <form action="index.php?c=gamezjcx&m=search"  method="post">
                            <input type="text" style="width:250;height: 30" class="px"  name ="keyword">
                            <button type="submit" name="dosubmit" value="true" class="btnGreen vm"><strong>搜索</strong></button>
                            <div class="clr"></div>
                        </form>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="keyword">手机号</th>
                                    <th class="answer">奖品信息</th>
                                    <th class="time">活动类型</th>
                                    <th class="keyword">中奖时间</th>
                                    <th class="category">领奖状态</th>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['mobile'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['gname'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['type'];?>
</td>  
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['extime'];?>
</td>  
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['state'];?>
</td>  
                                    <td><a href="../../index.php/gamezjcx/up?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['aid'];?>
">领奖</a>&nbsp;|&nbsp;<a href="../../index.php/gamezjcx/down?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['aid'];?>
">未领奖</a></td>    
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