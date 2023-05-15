<?php
$api_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$api_url .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <title>在线二维码生成服务</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Author" content="Jackson Dou" />
    <meta name="Copyright" content="版权所有 &copy; Jackson Dou" />
    <meta name="Keywords" content="在线二维码生成服务 API" />
    <meta name="Description" content="在线二维码生成服务 API" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <h1>在线二维码生成服务 API</h1>
    </header>
    <p>使用前请仔细查看参数说明：</p>
    <p>本服务为即时生成，不做任何数据缓存</p>
    <p>接口地址：<?php echo $api_url; ?></p>
    <pre>
    t    : 二维码内容           必传参数    传空则值重置为0，无本参数则显示本帮助页面
    s    : 二维码图片尺寸        [可选参数]  默认值：6，可选范围1-10，最终生成大小受容错级别影响
    b    : 二维码白色边框尺寸     [可选参数]  单位px，默认值: 3
    l    : 容错级别              [可选参数]  默认值 H，可选参数如下：
       L : 7%  的字码可被修正
       M : 15% 的字码可被修正
       Q : 25% 的字码可被修正
       H : 30% 的字码可被修正
</pre>
    <p>示例用法：</p>
    <p>1. <a href="<?php echo $api_url . '?t=http://uiisc.com'; ?>" target="_blank"><?php echo $api_url . '?t=http://uiisc.com'; ?></a></p>
    <p>2. <a href="<?php echo $api_url . '?s=6&b=3&l=H&t=http://uiisc.com'; ?>" target="_blank"><?php echo $api_url . '?s=6&b=3&l=H&t=http://uiisc.com'; ?></a></p>
    <hr />
    <footer>
        <p>源码下载：<a href="https://github.com/jksdou/php-api-qrcode" target="_blank">Github</a></p>
        <p>友情链接：<a href="https://crogram.org" target="_blank" title="程江开源项目中心">CROGRAM</a> &bull; <a href="https://uinote.com" target="_blank">UINOTE</a> &bull; <a href="https://uiisc.org" target="_blank">UIISC</a></p>
        <p>版权所有 &copy; <?php echo date('Y');?> <a href="https://github.com/jksdou" target="_blank">Jackson Dou</a> <span>Powered by <a href="https://crogram.com/" target="_blank" title="程江科技">CROGRAM</a></span></p>
    </footer>
</body>

</html>