<?php /* Smarty version Smarty-3.1.14, created on 2013-09-15 04:35:09
         compiled from "application/views/park/parkinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1390522525233cecc852823-48538846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf005b8eb7a5566b45aef589199186d19ea51ea' => 
    array (
      0 => 'application/views/park/parkinfo.html',
      1 => 1379219644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1390522525233cecc852823-48538846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5233cecc9000a5_81986067',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5233cecc9000a5_81986067')) {function content_5233cecc9000a5_81986067($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">停车服务<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left">
                        <a href="index.php?c=park&m=parkadd" title="" class="btnGrayS vm bigbtn">新增</a>                       
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="keywords">停车场点名称</th>
                                    <th class="keywords">具体位置</th>
                                    <th class="keywords">停车位数量</th>
                                    <th class="keywords">经度</th>
                                    <th class="keywords">纬度</th>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['parking'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['address'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['pcount'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['x'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['y'];?>
</td>
                                    <td><a href="index.php/park/parkedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/park/parkdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a></td>    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </body>
</html>

<?php }} ?>