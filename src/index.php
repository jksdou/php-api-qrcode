<?php

/**
 * PHP 在线二维码生成服务 API
 * 地址：http://uiisc.com
 **/

// ini_set('error_reporting', E_ALL | E_STRICT);
// ini_set('display_errors', 'On');
// ini_set('log_errors', 'On');

if (isset($_GET["t"])) {
    // 取得GET参数
    $text = !empty($_GET["t"]) ? $_GET["t"] : '0'; // 内容
    $size   = isset($_GET["s"]) ? $_GET["s"] : '6'; // 图片尺寸
    $margin = isset($_GET["b"]) ? $_GET["b"] : '3'; // 白色边框尺寸
    $level  = isset($_GET["l"]) ? $_GET["l"] : 'H'; // 容错级别

    // 载入qrcode类
    include "lib/phpqrcode.php";

    // 调用二维码生成函数
    QRcode::png($text, false, $level, $size, $margin);
} else {
    // 帮助
    include "home.php";
}
