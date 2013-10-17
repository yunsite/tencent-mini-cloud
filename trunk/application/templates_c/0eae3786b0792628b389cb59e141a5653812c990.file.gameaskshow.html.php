<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 12:37:34
         compiled from "application/views/gameask/gameaskshow.html" */ ?>
<?php /*%%SmartyHeaderCode:837166747522fd7dadd6f89-00510393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eae3786b0792628b389cb59e141a5653812c990' => 
    array (
      0 => 'application/views/gameask/gameaskshow.html',
      1 => 1379392513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '837166747522fd7dadd6f89-00510393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522fd7dae38637_68600080',
  'variables' => 
  array (
    'data' => 0,
    'iserror' => 0,
    'errormessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522fd7dae38637_68600080')) {function content_522fd7dae38637_68600080($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="有奖竞猜" />
        <title>有奖竞猜</title>
        <link href="/application/public/css/jp.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
    </head>
    <body>
        <script type="text/javascript">

        </script>
        <div class="top">
            有奖问答</div>
        <div id="ts">
            <div class="protop">
                <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" /></div>
            <div class="pro">
                <input type="hidden"  id="questionid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
"/>
                <div id="pic" class="propic"></div>
                <div id="question" class="yjwd_tl"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['question'];?>
</div>
                <div id="answerlist" class="yjwd_sc"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlista'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistb'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistc'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['answerlistd'];?>
<br/></div>
                <div class="select">
                    <div class="select_s" onclick="Send('A')">
                        A</div>
                    <div class="select_s" onclick="Send('B')">
                        B</div>
                    <div class="select_s" onclick="Send('C')">
                        C</div>
                    <div class="select_s" onclick="Send('D')">
                        D</div>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <div class="profoot">
                <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" /></div>
        </div>
        <div class="blankline">
        </div>      
        <div id="tslink" class="yjwd_rule"> <strong>活动规则：</strong><br />每天可以回答十道题目，回答正确加一个积分，回答错误不扣分.每天全部回答正确再加20分.</div>      
    </body>
    <script type="text/javascript">
        window.onload = function() {
            var type = "<?php echo $_smarty_tpl->tpl_vars['iserror']->value;?>
";
            var message = "<?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>
";
            if (type == "T")
            {
                document.getElementById("ts").style.display = "none";
                alert(message);


            }

        }
        function Send($answer) {
            var u = "http://223.4.169.112/index.php/gameask/answer";
            var qid = document.getElementById("questionid").value
            $.ajax({
                type: "post",
                url: u,
                data: "qid" + '=' + qid + '&answer' + '=' + $answer,
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
</html>
<?php }} ?>