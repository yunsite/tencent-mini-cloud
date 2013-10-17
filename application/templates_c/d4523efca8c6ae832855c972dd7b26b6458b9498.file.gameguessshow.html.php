<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 14:01:45
         compiled from "application/views/gameguess/gameguessshow.html" */ ?>
<?php /*%%SmartyHeaderCode:201611341652302d780a5aa8-53597754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4523efca8c6ae832855c972dd7b26b6458b9498' => 
    array (
      0 => 'application/views/gameguess/gameguessshow.html',
      1 => 1379392513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201611341652302d780a5aa8-53597754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52302d780fe2c1_30042991',
  'variables' => 
  array (
    'data' => 0,
    'a' => 0,
    'b' => 0,
    'iserror' => 0,
    'msg' => 0,
    'acount' => 0,
    'answer' => 0,
    'qid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52302d780fe2c1_30042991')) {function content_52302d780fe2c1_30042991($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>武林商圈 积分游戏</title>
        <link href="/application/public/css/jp.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
    </head>
    <body>
        <div id="list">            
            <div class="baseblock">
                <div class="protop">
                    <img src="/application/public/images/20130603wapjinpai_02.jpg" width="320" height="9" /></div>

                <div class="pro" style="height: 10px">
                </div>
                <div class="pro" style="height: 15px; height: 50px; font-size: 40px; font-weight: bold;text-align: center; line-height: 50px">
                    <div style="color: black">
                        武林商圈  <img onclick="JumpNow()" src="/application/public/images/4.png" style="float: right; margin-right: 3px;margin-top:10px;
                                   height: 30px;" />
                    </div>

                </div>
                <div class="pro" style="height: 10px">
                    &nbsp;
                </div>
                <div class="pro">
                    <div id="divtype" class="propic" style="text-align: center; color: Red;line-height: 15px">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['mark'];?>

                    </div>
                </div>
                <div class="pro" style="height: 8px">
                    &nbsp;
                </div>
                <div class="pro">

                    <div id="divimg" class="propic" style="text-align: center">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pic'];?>
 width="270" height="200"/>
                    </div>
                </div>
                <div class="pro">
                </div>
                <div id="diva" class="pro" style="height: 60px">
                    <?php echo $_smarty_tpl->tpl_vars['a']->value;?>

                </div>
                <div id="divall" class="pro" style="height: 150px">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value;?>

                </div>
                <div class="pro" style="line-height: 30px; text-align: center">

                </div>
                <div class="profoot">
                    <img src="/application/public/images/20130603wapjinpai_06.jpg" width="320" height="9" /></div>
            </div>
        </div>
        
        <script type="text/javascript">
            function myfunction() {
                var div = $(".test");
                div.animate({opacity: '0.8'}, "fast");
                div.animate({opacity: '0'}, "fast");
                div.animate({opacity: '0.8'}, "fast");
                div.animate({opacity: '0'}, "fast");
            }
        </script>
        
        <script type="text/javascript">
            var iserror = "<?php echo $_smarty_tpl->tpl_vars['iserror']->value;?>
";
            var msg = "<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
";
            var aCount = "<?php echo $_smarty_tpl->tpl_vars['acount']->value;?>
";
            var answer = "<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
";
            var qid = "<?php echo $_smarty_tpl->tpl_vars['qid']->value;?>
";
            var aaa = new Array();
            var bbb = new Array();
            var an = 0;
            function JumpNow()
            {
                var u = "http://223.4.169.112/index.php/gameguess/jump";
                $.ajax({
                    type: "post",
                    url: u,
                    data: "qid" + '=' + qid,
                    success: function(msg) {

                        window.location.reload();
                    },
                    error: function(msg) {

                    }
                });
            }
            function move(a, z) {
                if (document.getElementById("div" + a).innerHTML != "&nbsp;") {
                    for (var i = 0; i < aCount; i++) {
                        if (document.getElementById("a" + i).innerText == "") {
                            document.getElementById("a" + i).innerText = z;
                            //document.getElementById("div" + a).style.display = "&nbsp";
                            aaa[i] = a;
                            bbb[i] = document.getElementById("div" + a).innerText;
                            document.getElementById("div" + a).innerHTML = "&nbsp;";
                            an++;
                            if (an == aCount) {
                                CheckAnswer()
                            }
                            break;
                        }
                    }

                }
            }
            function removediv(a) {
                if (aaa[a] != -1) {
                    document.getElementById("div" + aaa[a]).innerHTML = bbb[a];
                    document.getElementById("a" + a).innerText = "";
                    aaa[a] = -1;
                    bbb[a] = "";
                    an--;
                }
            }
            function CheckAnswer() {
                var mya = "";
                for (var i = 0; i < aCount; i++) {
                    mya += document.getElementById("a" + i).innerText;
                }
                if (mya == answer) {
                    savejf();

                }
                else {
                    myfunction();
                }
            }
            function cleanarr() {
                for (var i = 0; i < aCount; i++) {
                    aaa[i] = -1;
                }
                for (var i = 0; i < aCount; i++) {
                    bbb[i] = "";
                }
            }
            function savejf() {
                var u = "http://223.4.169.112/index.php/gameguess/saveinfo";
                $.ajax({
                    type: "post",
                    url: u,
                    data: "qid" + '=' + qid,
                    success: function(msg) {
                        alert(msg);
                        window.location.reload();
                    },
                    error: function(msg) {

                    }
                });
            }

            window.onload = function() {
                if (iserror == "T")
                {
                    document.getElementById("list").style.display = "none";
                    alert(msg);
                }
            }
        </script>

    </body>
</html>
<?php }} ?>