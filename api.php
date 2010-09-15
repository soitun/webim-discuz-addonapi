<?php

/**
 * 资源提供商 API 文件范例
 * Version: 2009/8/24
 * Author: Monkey
 *
 * Changed By: Hidden
 * Date: Tue Sep 14 19:56:41 CST 2010
 */

//资源提供商基本信息（必填）
//------------------------------
//资源提供商 ID
define('Key',		'S100914WEBIM');
//资源提供商名称
define('Title',		'NextIM聊天插件');
//网站名称
define('Sitename',	'NextIM');
//网站地址
define('Siteurl',	'http://www.webim20.cn');
//简介
define('Description',	'为Discuz用户打造的网页版及时聊天工具，用户通过聊天工具栏可随即与在线好友聊天。');
//联系方式，可填写 URL、Email、IM 号码等
define('Contact',	'faith@webim20.cn');
//资源提供商图标，大小 100x50
define('Logo',		'http://blog.webim20.cn/addonapi/logo.png');

//扩展信息（可选）
//------------------------------
//更多信息链接的链接地址
define('Morelink', 	'http://www.webim20.cn/download');
//搜索框表单提交地址
define('Searchlink', 	'');


//数据信息（必填）
//------------------------------
//资源分类，含义“array(array(分类ID => 分类名称), ...)”
$Category = array(
	'' => '插件',
);
/*
 * 资源内容，最多 20 个，数组 Key 含义：
 * 	Name		资源名称（必填）
 *	Version		资源版本（可选）
 *	Url		资源链接地址（必填）
 *	Time		发布时间（可选）
 *	Thumb		缩略图地址（可选）
 *	Description	资源简介（可选）
 *	Charset		资源编码（可选），由“SC_GBK,SC_UTF8,TC_BIG5,TC_UTF8”等标准编码字串字串构成，多个用逗号分隔，可增加自定义语言编码
 *	Greenplugin	是否绿色插件（可选）
 */
$Data = array(
	array(
		'Name' => 'Discuz聊天插件[7.0, 7.1, 7.2]',
		'Version' => '3.1',
		'Url' => 'http://www.webim20.cn/download/discuz',
		'Time' => '2010-9-14',
		'Thumb' => 'http://www.webim20.cn/images/dz_demo.png',
		'Description' => 'webim是一个为Discuz用户打造的网页版及时聊天工具，用户通过聊天工具栏可随即与在线好友聊天。在线版用户安装后需要到webim20.cn注册一个apikey，配置后即可使用。更多帮助信息请访问 webim20.cn',
		'Charset' => 'SC_GBK,SC_UTF8,TC_BIG5,TC_UTF8',
		'Greenplugin' => 1,
	),
	array(
		'Name' => 'DiscuzX聊天插件[X1, X1.5]',
		'Version' => '1.1',
		'Url' => 'http://www.webim20.cn/download/discuzx',
		'Time' => '2010-9-14',
		'Thumb' => 'http://www.webim20.cn/images/dzx_demo.png',
		'Description' => 'webim是一个为DiscuzX用户打造的网页版及时聊天工具，用户通过聊天工具栏可随即与在线好友聊天。在线版用户安装后需要到webim20.cn注册一个apikey，配置后即可使用。更多帮助信息请访问 webim20.cn',
		'Charset' => 'SC_GBK,SC_UTF8,TC_BIG5,TC_UTF8',
		'Greenplugin' => 1,
	),);




$xmldata = array('Key' => Key, 'Title' => Title, 'Sitename' => Sitename, 'Siteurl' => Siteurl, 'Description' => Description, 'Contact' => Contact, 'Logo' => Logo, 'Category' => $Category, 'Data' => $Data);
if(Morelink != '') {
	$xmldata['Morelink'] = Morelink;
}
if(Searchlink != '') {
	$xmldata['Searchlink'] = Searchlink;
}
require_once 'xml.class.php';
require_once 'chinese.class.php';
$xmldata = array2xml($xmldata, 1);
$c = new Chinese('gbk', 'utf8');
echo $c->Convert($xmldata);

?>
