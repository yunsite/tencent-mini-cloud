<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 04:20:07
         compiled from "application/views/role/roleadd.html" */ ?>
<?php /*%%SmartyHeaderCode:1631892061522957f77eb069-99138374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6abbef295f5cf54e0ea5b8dea4252f015d295074' => 
    array (
      0 => 'application/views/role/roleadd.html',
      1 => 1378441192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631892061522957f77eb069-99138374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522957f78468c6_94557531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522957f78468c6_94557531')) {function content_522957f78468c6_94557531($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4 class="left">江湖昵称--新增<span class="FAQ"></span></h4>
                </div>
                <div class="msgWrap form">
                    <div class="msgWrap">
                        <form method="post" action="index.php?c=role&m=rolesave" enctype="multipart/form-data">  
                            <table class="ListProduct" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="keywords">江湖昵称</th>
                                        <th class="keywords">所需积分</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><input name="rolename" value="" class="px" style="width:200px;" type="text"></td>                                          
                                        <td><input name="rolefen" value="" class="px" style="width:200px;" type="text"></td>                   
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
                        </form>
                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>


    </body>
</html>
<?php }} ?>