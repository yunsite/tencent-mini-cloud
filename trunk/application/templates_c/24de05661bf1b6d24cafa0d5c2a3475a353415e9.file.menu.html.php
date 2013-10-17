<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 14:47:07
         compiled from "application/views/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:10898055852285d03a762b7-75388180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24de05661bf1b6d24cafa0d5c2a3475a353415e9' => 
    array (
      0 => 'application/views/menu.html',
      1 => 1379399733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10898055852285d03a762b7-75388180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52285d03a79c01_03757216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52285d03a79c01_03757216')) {function content_52285d03a79c01_03757216($_smarty_tpl) {?><meta charset="UTF-8">

<div class="sideBar">
    <div class="catalogList">
        <div class="nav">
            <div class="nav-header nav-info"><span>基础设置</span></div>
            <ul>

                <li class="subCatalogList"> <a href="index.php?c=role">级别设置</a> </li>
                <li class="subCatalogList"> <a href="index.php?c=menu">自定义菜单管理</a> </li>

            </ul>
            <div class="nav-header nav-content"><span>内容管理</span></div>
            <ul>
                <li class="subCatalogList"> <a href="index.php?c=autoreply">回复设置</a> </li>              
                <li class="subCatalogList"> <a href="index.php?c=rmanage&m=index">回复管理</a> </li>
                <li class="subCatalogList"> <a href="index.php?c=business&m=index">商家联盟</a> </li>
                <li class="subCatalogList"> <a href="index.php?c=park&m=index">停车服务</a> </li>
            </ul>
            <div class="nav-header nav-function"><span>在线活动</span></div>
            <ul>
                <li class="subCatalogList"> <a href="/index.php?c=gameevent">活动信息</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gameggk">刮刮卡</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gamedzp">大转盘</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gamevote">在线投票</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gameguess">疯狂猜图</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gameask">有奖问答</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=gamezjcx">活动领奖</a> </li>
            </ul>
            <div class="nav-header nav-count"><span>会员中心</span></div>
            <ul>
                <li class="subCatalogList"> <a href="/index.php?c=person&m=manage">会员管理</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=jfrule">积分规则</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=jfrule&m=jfexchange">积分兑换</a> </li>
                <!--                <li class="subCatalogList"> <a href="index.php?m=weixin&c=index&a=statistics_list">请求统计</a> </li>-->
            </ul>
            <div class="nav-header nav-info"><span>系统设置</span></div>
            <ul>
                <li class="subCatalogList"> <a href="/index.php?c=login&m=change_pwd">修改密码</a> </li>
                <li class="subCatalogList"> <a href="/index.php?c=login&m=loginout">退出</a> </li>
            </ul>
        </div>
    </div>
</div>       


<?php }} ?>