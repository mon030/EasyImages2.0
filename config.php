<?php
/**
 * EasyImage - 简单图床配置
 *
 * @author icret
 * @email  lemonim@qq.com
 * @Github https://github.com/icret/EasyImages2.0
 * @link   https://www.545141.com/902.html
 * @Review 2019-5-21 13:05:20
 * @last   2019-6-29 09:02:19
 * 上传后请打开check.php先检查服务器配置，更改密码，更改域名等操作
 */

// 设置html为utf8
header（' Content-Type：text / html; charset = utf-8 '）;
//将时区设置为上海时区
ini_set('date.timezone', 'Asia/Shanghai');
// 修改内存限制 根据服务器配置选择，低于128M容易出现上传失败，你懂得图片挺占用内存的
ini_set('memory_limit', '512M');
// 定义当前目录
define('APP_ROOT', __DIR__);

/******** 网站配置 ********/

$config = array(
    // 网站标题
     'title' => 'MONの图床',
    // 网站关键字
     'keywords' => 'MONの图床',
    // 网站描述
     'description' => 'MONの图床',
    // 网站公告
     'tips' => ' 单个文件限制2M，每次最多上传30张图片,本网站仅做演示用，不对图片负任何责任。请勿上传任何违反中华人民共和国和香港地区法律的文件!',
    // 图片直链域名 末尾不加"/" 如果你想上传域名是a.com但是我想上传之后返回域名是b.com  那就在这里填写b.com
     'domain' => 'https://pic.imon.tk',
    // 存储路径 前后要加"/" 如更改此目录，需要同步修改tinyfilemanager.php中的$directories_users路径
     'path' => '/i/',
    // 最大上传限制 默认为 5242880Bytes = 5MB 请使用工具转换MB http://www.bejson.com/convert/filesize/
     'maxSize' => 5242880,
    // 每次最多上传图片数
    'maxUploadFiles'=>30,
    // 是否开启登录上传 开启:true 关闭false
     'mustLogin' => false,
    // 是否开启管理
    'tinyfilemanager' => true,
    // 登录上传密码和管理密码 管理的管理员账号：admin 密码为下面密码
     'password' => '528813',
    // 是否开启API上传
     'apiStatus' => true,
    // 是否开启水印:0关闭，1文字水印，2图片水印 动态gif不能添加水印
     'watermark' => 1,
    // 水印文字内容
     'waterText' => 'MONの小屋',
    /**
     * 水印位置
     * 0：随机位置，在1~8之间随机选取一个位置
     * 1：顶部居左 2：顶部居中 3：顶部居右 4：左边居中
     * 5：图片中心 6：右边居中  7：底部居左 8：底部居中 9：底部居右
     */
    'waterPosition' => 3,
    // 水印文字颜色 rgba 末尾为透明度 范围:0-127 0为不透明
     'textColor' => '47,79,79,114',
    // 水印文字大小
     'textSize' => 12,
    // 字体路径 如果想改变字体 请选择支持中文的gb2312字体 否则中文水印会乱码 纯英文水印字体随便
     'textFont' => APP_ROOT . '/public/static/hkxzy.ttf',
    // 图片水印路径 支持GIF,JPG,BMP,PNG和PNG alpha
     'waterImg' => 'public/static/watermark.png',
    // 允许上传的图片扩展名
    'extensions'=>array('bmp','jpg','png','tif','gif','pcx','tga','svg','webp','jpeg','tga','svg','ico'),
    // 转换图片为指定格式 可选：''|'png'|'jpeg'|'gif'|'bmp';默认值：''
     'imgConvert' => '',
    //最大宽度
     'maxWidth' => 10240,
    // 最大高度
     'maxHeight' => 10240,
    // 允许上传的最小宽度
     'minWidth' => 5,
    // 允许上传的最小高度
     'minHeight' => 5,
    // 等比例缩小图片 宽度和高度请设置 image_x image_y 开启true，关闭false 关闭下mage_x和image_y设置不生效
     'imgRatio' => false,
    // 缩减的最大高度
     'image_x' => 1024,
    // 缩减的最大宽度
     'image_y' => 1024,
    // 开启静态文件js css CDN 开启true 关闭false
     'static_cdn' => false,
    // 开启顶部广告 如果想添加或修改广告修改 public/static/ad_top.html
     'ad_top' => false,
    //  开启底部广告 如果想添加或修改广告修改 public/static/ad_bot.html
     'ad_bot' => false,
    'version' => '2.0.2.0',
);
