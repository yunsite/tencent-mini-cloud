<?php /* Smarty version Smarty-3.1.14, created on 2013-10-16 17:10:45
         compiled from "application\views\admin\reply\setreply.html" */ ?>
<?php /*%%SmartyHeaderCode:23904525e4b3083d367-44636753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d89e200e26bdd9a64450039c3915fb3752d768' => 
    array (
      0 => 'application\\views\\admin\\reply\\setreply.html',
      1 => 1381914618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23904525e4b3083d367-44636753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e4b30864468_83452908',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e4b30864468_83452908')) {function content_525e4b30864468_83452908($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>腾讯微云</title>
        <meta name="keywords" content="微信上的接口服务供应商" />
        <meta name="description" content="微信上的接口服务供应商" />
        <meta name="viewport" content="height=device-height,width=320,initial-scale=1.0,mininum-scale=1.0,maximum-scale=1.0,user-scaleble=no" />
        <script type="text/javascript" src="http://oss.aliyuncs.com/kunrou/static/js/jquery.1.9.1.js"></script>
        <link rel="stylesheet" type="text/css" href="http://weixin.kunrou.net/template/default/css/public.css?20131010" />
        <link rel="stylesheet" type="text/css" href="http://weixin.kunrou.net/template/default/css/bootstrap.min.css?20131010" />
        <link rel="stylesheet" type="text/css" href="http://weixin.kunrou.net/template/default/css/mod_app.css?20131010" />
        <script type="text/javascript" src="http://weixin.kunrou.net/template/default/js/sitecommon.js?20131010"></script>
        <script type="text/javascript" src="http://weixin.kunrou.net/template/default/js/mod_app.js?20131010"></script>
        <!--[if lte IE 9]>
                <link rel="stylesheet" type="text/css" href="/template/includes/js/iealert/style.css?20130611" />
                <script type="text/javascript" src="/template/includes/js/iealert.js?20130611"></script>
            <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <![endif]-->
        <link href="http://kunrou.oss.aliyuncs.com/static/css/bootstrap-responsive.min.css" rel="stylesheet">
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <script type="text/javascript">
            var _CF = {
                mod: 'app',
                act: 'setreply',
                type: 'index',
                exturl: '?AppID=12345831',
                AppID: '12345831',
                id: 0};
        </script>
    </head>
    <body>
        <!--[if lte IE 9]>
        <script type="text/javascript">
                $(document).ready(function() {
                        $("body").iealert();
                });
        </script>
        <![endif]-->
        <a name="top"></a>
        <div class="container">
            <div  class="page-header">
                <h1>腾讯&middot;微云 <small>用户管理中心</small></h1>
            </div>	
            <div class="row">
                <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="well">
                        <div class="form-horizontal" id="appsetreply">
                            <div>
                                <a href="/index.php/Reply/AddText" class="btn btn-primary" id="addcontent"><i class="icon-font icon-white"></i> 添加文字回复</a>
                                <a href="/index.php/Reply/AddMedia" class="btn btn-primary" id="addcontent"><i class="icon-picture icon-white"></i> 添加图文回复</a>
                            </div>
                            <table class="table table-striped  table-hover">
                                <thead>
                                <th>内容关键字</th>
                                <th>回复内容</th>
                                <th>创建时间</th>
                                <th width="60">信息类型</th>
                                <th width="60">匹配模式</th>
                                <th width="210">操作</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>你好</td>
                                        <td>图文内容</td>
                                        <td>2013-10-16 11:28:44</td>
                                        <td><span class="badge badge-important"><i class="icon-picture icon-white"></i> 图文</span></td>
                                        <td><span class='label label-success'><i class='icon-map-marker icon-white'></i> 精准</span></td>
                                        <td>
                                            <div class="row-fluid">
                                                <a href="/app/setreplyedit.html?AppID=12345831&id=525e07ecfd00678b2afa53ab" class="btn btn-success">编辑</a>
                                                <a href="javascript:alert('建设中，请您直接在微信中回复即可预览！');" class="btn btn-inverse">预览</a>
                                                <a href="/app/setreplydel.html?AppID=12345831&id=525e07ecfd00678b2afa53ab" class="btn btn-warning confirm">删除</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>hi</td>
                                        <td>hello</td>
                                        <td>2013-09-11 16:09:09</td>
                                        <td><span class="badge badge-inverse"><i class="icon-font icon-white"></i> 文字</span></td>
                                        <td><span class='label label-success'><i class='icon-map-marker icon-white'></i> 精准</span></td>
                                        <td>
                                            <div class="row-fluid">
                                                <a href="/app/setreplyedit.html?AppID=12345831&id=52302525fd0067494e254eb3" class="btn btn-success">编辑</a>
                                                <a href="javascript:alert('建设中，请您直接在微信中回复即可预览！');" class="btn btn-inverse">预览</a>
                                                <a href="/app/setreplydel.html?AppID=12345831&id=52302525fd0067494e254eb3" class="btn btn-warning confirm">删除</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>				
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var navac = '';
            $('#topnav >li').each(function() {
                if ($(this).hasClass(navac)) {
                    $(this).addClass('active');
                }
            });
        </script>
        <footer class="footer">
            <?php echo $_smarty_tpl->getSubTemplate ('menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </footer>
        <a name="buttom"></a>
        <script src="http://kunrou.oss.aliyuncs.com/static/js/bootstrap.min.js?20131010"></script>
        <div style="display:none"><script type="text/javascript" src="/template/default/js/jszc.js?20131010"></script></div>
    </body>
</html><?php }} ?>