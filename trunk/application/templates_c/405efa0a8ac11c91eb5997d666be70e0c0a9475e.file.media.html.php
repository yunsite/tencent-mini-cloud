<?php /* Smarty version Smarty-3.1.14, created on 2013-10-16 17:29:57
         compiled from "application\views\admin\replyadd\media.html" */ ?>
<?php /*%%SmartyHeaderCode:4824525e58176ae710-61058717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '405efa0a8ac11c91eb5997d666be70e0c0a9475e' => 
    array (
      0 => 'application\\views\\admin\\replyadd\\media.html',
      1 => 1381915793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4824525e58176ae710-61058717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e58176c9c95_02643511',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e58176c9c95_02643511')) {function content_525e58176c9c95_02643511($_smarty_tpl) {?><!DOCTYPE html>
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
                act: 'setreplyadd',
                type: 'media',
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
                        <div class="form-horizontal" id="appsetreplayadd">
                            <form class="form-horizontal" id="form-message-info">
                                <div class="control-group">
                                    <label for="" class="control-label">关键字</label>
                                    <div class="controls">
                                        <input type="text" placeholder="每个关键词之间用空格隔开" value="" name="keyword" id="keyword" required="required" />
                                        <span class="help">可以设置多个和单个，完全匹配时只支持一个关键字<br />
                                            特殊关键字： <code class="tips insertkeyword" data-toggle="tooltip" title="点击使用该关键词">无法回答</code> 没有找到任何相关自定义回复的时候回答的问题，不过可能会影响其它功能，无法回答这个必须设置匹配模式为精准匹配<br />
                                            <code class="tips insertkeyword" data-toggle="tooltip" title="点击使用该关键词">subscribe</code> 设置当用户关注您帐号时候的自动回复，建议设置为图文回复，必须为精准匹配模式<br />
                                        </span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="retype" class="control-label">匹配模式</label>
                                    <div class="controls">
                                        <label class="radio">
                                            <input type="radio" name="retype" required="required" id="retype1" value="one"					/>
                                            精准匹配，但是不区分字母在小写
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="retype" required="required" id="retype2" value="all"					/>
                                            模糊匹配，只要包括关键字中文字即可
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group hide">
                                    <label for="" class="control-label">回复的内容</label>
                                    <div class="controls">
                                        <textarea name="content" id="contentbox" row="5" col="80" style="display:block; height: 96px;" placeholder="请在这里输入你要回复的内容" required="required">图文内容</textarea>
                                        <span class="help help-content">
                                            如果想添加链接请输入：
                                            <code class="inserttag" data-toggle="tooltip" title="会在微信中显示一个蓝色的链接">&lt;a href="链接地址"&gt;链接文字&lt;/a&gt;</code>
                                            <br /> 如果想替换为关键字，请使用<code class="inserttag" data-toggle="tooltip" title="会替换为用户输入的关键词">[keyword]</code>
                                            <br /> 如果想在文字中加入微网站的首页链接，请使用 <code class="inserttag" data-toggle="tooltip" title="会替换为微网站">&lt;a href="[HOMEURL]"&gt;打开微网站&lt;/a&gt;</code>
                                            <br /> 外部链接中可以加入 <code class="inserttag" data-toggle="tooltip" title="URL连接中会加上一个类似OpenId=xxxxxx 这样的字符">OpenId=[openid]</code> 这是来自微信的原始ID
                                            <br /> 双击这些特殊变量可以追加到内容框中。
                                        </span>
                                    </div>
                                </div>
                                <h5>以下为多条图文设置，可以设置单条，也可以设置多条，但是一条和多条样式会不一样，最多可以设置为6条。</h5>
                                <div id="plistdiv" class="plistdiv">
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第1条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[0][title]" value="" id="item[0][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[0][des]" value="" id="item[0][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[0][pic]" value="" id="item[0][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[0][url]" value="" id="item[0][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第2条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[1][title]" value="" id="item[1][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[1][des]" value="" id="item[1][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[1][pic]" value="" id="item[1][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[1][url]" value="" id="item[1][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第3条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[2][title]" value="" id="item[2][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[2][des]" value="" id="item[2][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[2][pic]" value="" id="item[2][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[2][url]" value="" id="item[2][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第4条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[3][title]" value="" id="item[3][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[3][des]" value="" id="item[3][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[3][pic]" value="" id="item[3][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[3][url]" value="" id="item[3][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第5条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[4][title]" value="" id="item[4][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[4][des]" value="" id="item[4][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[4][pic]" value="" id="item[4][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[4][url]" value="" id="item[4][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第6条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[5][title]" value="" id="item[5][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[5][des]" value="" id="item[5][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[5][pic]" value="" id="item[5][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[5][url]" value="" id="item[5][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第7条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[6][title]" value="" id="item[6][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[6][des]" value="" id="item[6][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[6][pic]" value="" id="item[6][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[6][url]" value="" id="item[6][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                    <div class="control-group replyitem">
                                        <label for="" class="control-label">第8条图文消息</label>
                                        <div class="controls">
                                            <span>标题：<input type="text" class="selectarticle" placeholder="标题" name="item[7][title]" value="" id="item[7][title]" /></span>
                                            <span>描述：<input type="text" placeholder="标题下方的一小段文字" name="item[7][des]" value="" id="item[7][des]" /></span>
                                            <span>图片：<input type="text" class="selectphoto" placeholder="图片地址" name="item[7][pic]" value="" id="item[7][pic]"  /></span>
                                            <span>网址：<input type="text" placeholder="要链接到的地址" name="item[7][url]" value="" id="item[7][url]"  /> 设置为“会员卡链接”会自动替换为会员卡链接</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group hide">
                                    <label for="picurl" class="control-label">封面图片地址</label>
                                    <div class="controls">
                                        <input type="url" name="picurl" class="selectphoto" value="http://duiai.com"  placeholder="设置一较小的图片"  />
                                        <span class="help">封面图片地址</span>
                                    </div>
                                </div>
                                <div class="control-group hide">
                                    <label for="siteurl" class="control-label">全文网址</label>
                                    <div class="controls">
                                        <input type="url" name="siteurl"  value="http://duiai.com"  placeholder="输入任何手机上可以正常访问的网址均可" />
                                        <span class="help">该链接将会显示在阅读全文的位置</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="alert" style="width: 70%; clear: both; margin: 8px auto;"></div>
                                    <lbael class="control-label" for=""></lbael>
                                    <div class="controls">
                                        <input type="hidden" name="id" value="" />
                                        <input type="hidden" name="type" value="media" />
                                        <input type="hidden" name="savetype" value="setreplyadd" />
                                        <input type="submit" class="btn btn-large btn-primary" value=" 提交 " />
                                    </div>
                                </div>
                            </form>
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
            <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </footer>
        <a name="buttom"></a>
        <script src="http://kunrou.oss.aliyuncs.com/static/js/bootstrap.min.js?20131010"></script>
        <div style="display:none"><script type="text/javascript" src="/template/default/js/jszc.js?20131010"></script></div>

    </body>
</html><?php }} ?>