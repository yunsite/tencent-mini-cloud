<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 09:09:02
         compiled from "application/views/business/picadd.html" */ ?>
<?php /*%%SmartyHeaderCode:154714015952314efe02f3c6-78963409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306371dd250f512d333542778983d6099807df28' => 
    array (
      0 => 'application/views/business/picadd.html',
      1 => 1378976936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154714015952314efe02f3c6-78963409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52314efe0301b6_70351195',
  'variables' => 
  array (
    'gid' => 0,
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52314efe0301b6_70351195')) {function content_52314efe0301b6_70351195($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>         
        <meta charset="UTF-8">
        <script src="/application/public/js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="/application/public/js/jquery.upload-1.0.2.js" type="text/javascript"></script>
        <link href="/application/public/css/style_common_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v1.css" rel="stylesheet" type="text/css">
        <link href="/application/public/css/style_v2.css" rel="stylesheet" type="text/css">
        <script src="/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#upload').change(function() {
                    $(this).upload("/upload1.php", function(res) {
                        $("#pic").val(res.filename);
                        $("#upload").val(res.filename);
                        alert('上传成功');
                    }, 'json');
                });
            });
        </script>
    </head>
    <body>
        <div class="tableContent">
            <div class="content">
                <div class="cLineB">
                    <h4 class="left">商家联盟<span class="FAQ"></span></h4>
                </div>
                <div class="cLine">
                    <div class="pageNavigator left">
                        <form action="../../index.php/business/picsave" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" name="id">
                            <th valign="top" style="width:120px"><label for="title">图片：</label></th>
                            <td><input type="file" name="upload" id="upload" /></td>
                            <td><input type="hidden" name="pic" id="pic" ></td>
                            <td><input type="submit" name="submit" id="submit" value="提交" ></td>
                        </form>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="keywords">图片路径</th>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['pic'];?>
</td>
                                    <td><a href="../../index.php/business/picdel?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
&gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
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