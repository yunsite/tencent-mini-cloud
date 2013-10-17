<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 04:50:31
         compiled from "application/views/gamevote/voteshow.html" */ ?>
<?php /*%%SmartyHeaderCode:1451873678522d73c86a7664-28083802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af403d6d027f451b936640519e9fdbe559d479f' => 
    array (
      0 => 'application/views/gamevote/voteshow.html',
      1 => 1378788615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451873678522d73c86a7664-28083802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d73c86e3146_31567321',
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
    'did' => 0,
    'fromusername' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d73c86e3146_31567321')) {function content_522d73c86e3146_31567321($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="在线投票" />
        <title>在线投票</title>
        <link href="/application/public/css/jp.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
    </head>
    <body>
        <div class="top">
            在线投票</div>
        <div class="vote_intro">
            <strong>活动规则：</strong>每个微信每天限投<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['dayset'];?>
票
            <br />           
            <strong>活动奖励：</strong>您的每次投票将获得<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['fenset'];?>
个积分</div>
        <div class="baseblock">             
            <div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" /></div>
            <div class="vote">
                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                <div class="vote_s">
                    <div class="vote_pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['pic'];?>
" width="138" height="87" />
                    </div>
                    <div class="vote_tl"><a href="VoteGoodInfo.aspx?FromUserName=&id=76"><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</a>
                    </div>
                    <div class="vote_tl">
                        <span style="color:Red">票数:</span><?php echo $_smarty_tpl->tpl_vars['arr']->value['vote'];?>

                    </div>
                    <div class="vote_sub">
                        <a href="#"onclick="vote('<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['fromusername']->value;?>
')">
                            <img src="/application/public/images/bu_vote.jpg" width="138" height="36" />
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" /></div>   
        </div>

        <div class="blankline">
        </div>
        <script type="text/javascript">

            function vote($itemid, $did, $fromusername) {
                var u = "http://www.justustyle.com/index.php/gamevote/vote";
                $.ajax({
                    type: "post",
                    url: u,
                    data: "itemid" + '=' + $itemid + '&did' + '=' + $did + '&fromusername' + '=' + $fromusername,
                    success: function(msg) {
                        alert(msg);
                        window.location.reload();
                    },
                    error: function() {
                        alert("ajax error");
                        window.location.reload();
                    }
                });
            }
        </script>
    </body>

</html>
<?php }} ?>