<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 15:40:56
         compiled from "application/views/person/usermanage.html" */ ?>
<?php /*%%SmartyHeaderCode:170855893522ea7412247a2-74805760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da26934ee972c5308749aaf902e7cc2ce208143' => 
    array (
      0 => 'application/views/person/usermanage.html',
      1 => 1379403640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170855893522ea7412247a2-74805760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ea7412b5498_00707671',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ea7412b5498_00707671')) {function content_522ea7412b5498_00707671($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">会员管理<span class="FAQ"></span></h4>
                </div>               
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="select">选择</th>
                                    <th class="keywords">微信id</th>
                                    <th class="answer">手机号码</th>
                                    <th class="answer">积分</th>                                                                       
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['fromusername'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['mobile'];?>
</td>                                    
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['jf'];?>
</td>   
                                    <td><a href="index.php/person/personedit?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php/person/persondel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
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