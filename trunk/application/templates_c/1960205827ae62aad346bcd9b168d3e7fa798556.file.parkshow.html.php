<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 13:59:53
         compiled from "application/views/park/parkshow.html" */ ?>
<?php /*%%SmartyHeaderCode:1438428320523423867e6138-60630614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1960205827ae62aad346bcd9b168d3e7fa798556' => 
    array (
      0 => 'application/views/park/parkshow.html',
      1 => 1379316973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438428320523423867e6138-60630614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52342386818347_32973903',
  'variables' => 
  array (
    'data' => 0,
    'x' => 0,
    'y' => 0,
    'note' => 0,
    'xout' => 0,
    'yout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52342386818347_32973903')) {function content_52342386818347_32973903($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>        
        <title>停车服务</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="" />
        <script language="javascript" type="text/javascript" src="/application/public/js/jquery-1.7.1.js"></script>
        <script src="http://api.map.baidu.com/api?v=1.5&ak=2d91410e115e9d061e1b606f4cce7d1c"
        type="text/javascript"></script>
        <style type="text/css">
            #body, html, #allmap
            {
                background-color: #e8e8e8;
                width: 320px;
                margin-right: auto;
                margin-left: auto;
                margin-top: 0px;
                margin-bottom: 0px;
                font-family:"微软雅黑";
                font-size: 15px;
                color: #333;
                line-height: 9px;

            }
            #l-map
            {
                height: 500px;
                width: 320px;
            }
            #r-result
            {
                height: 20%;
                width: 100%;
            }
        </style>

    </head>
    <body>
        <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
' id="dataMap">
        <div id="l-map">
        </div>


        <script type="text/javascript">
            var lat = "<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
";
            var lng = "<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
";
            var note = "<?php echo $_smarty_tpl->tpl_vars['note']->value;?>
";
            var xout = "<?php echo $_smarty_tpl->tpl_vars['xout']->value;?>
";
            var yout = "<?php echo $_smarty_tpl->tpl_vars['yout']->value;?>
";


            var map = new BMap.Map("l-map"); // 创建Map实例
            map.centerAndZoom(new BMap.Point(lng, lat), 20); // 初始化地图,设置中心点坐标和地图级别
            map.addControl(new BMap.NavigationControl()); // 添加平移缩放控件
            map.addControl(new BMap.ScaleControl()); // 添加比例尺控件
            map.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件
            map.enableScrollWheelZoom(); //启用滚轮放大缩小
            map.addControl(new BMap.MapTypeControl()); //添加地图类型控件

            // 编写自定义函数,创建标注
            function addMarker(point) {
                var marker = new BMap.Marker(point);
                map.addOverlay(marker);
            }
            // 随机向地图添加25个标注
            var bounds = map.getBounds();
            //    var sw = bounds.getSouthWest();
            //    var ne = bounds.getNorthEast();
            //    var lngSpan = Math.abs(sw.lng - ne.lng);
            //    var latSpan = Math.abs(ne.lat - sw.lat);

            var jsonobj = eval('(' + $("#dataMap").val() + ')');

            for (var i = 0; i < jsonobj.length; i++) {
                var point = new BMap.Point(jsonobj[i].x, jsonobj[i].y)
                addMarker(point);
            }
            var sContent = note;
            var marker = new BMap.Point(xout, yout);
            map.addOverlay(marker);
            var point1 = new BMap.Point(xout, yout);

            var infoWindow = new BMap.InfoWindow(sContent)
            map.openInfoWindow(infoWindow, point1);
            // addMarker(point);
        </script>
    </body>
</html>
<?php }} ?>