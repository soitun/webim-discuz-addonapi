<?php

/**
 * ��Դ�ṩ�� API �ļ�����
 * Version: 2009/8/24
 * Author: Monkey
 *
 * Changed By: Hidden
 * Date: Tue Sep 14 19:56:41 CST 2010
 */

//��Դ�ṩ�̻�����Ϣ�����
//------------------------------
//��Դ�ṩ�� ID
define('Key',		'S100914WEBIM');
//��Դ�ṩ������
define('Title',		'NextIM������');
//��վ����
define('Sitename',	'NextIM');
//��վ��ַ
define('Siteurl',	'http://www.webim20.cn');
//���
define('Description',	'ΪDiscuz�û��������ҳ�漰ʱ���칤�ߣ��û�ͨ�����칤�������漴�����ߺ������졣');
//��ϵ��ʽ������д URL��Email��IM �����
define('Contact',	'faith@webim20.cn');
//��Դ�ṩ��ͼ�꣬��С 100x50
define('Logo',		'http://blog.webim20.cn/addonapi/logo.png');

//��չ��Ϣ����ѡ��
//------------------------------
//������Ϣ���ӵ����ӵ�ַ
define('Morelink', 	'http://www.webim20.cn/download');
//��������ύ��ַ
define('Searchlink', 	'');


//������Ϣ�����
//------------------------------
//��Դ���࣬���塰array(array(����ID => ��������), ...)��
$Category = array(
	'' => '���',
);
/*
 * ��Դ���ݣ���� 20 �������� Key ���壺
 * 	Name		��Դ���ƣ����
 *	Version		��Դ�汾����ѡ��
 *	Url		��Դ���ӵ�ַ�����
 *	Time		����ʱ�䣨��ѡ��
 *	Thumb		����ͼ��ַ����ѡ��
 *	Description	��Դ��飨��ѡ��
 *	Charset		��Դ���루��ѡ�����ɡ�SC_GBK,SC_UTF8,TC_BIG5,TC_UTF8���ȱ�׼�����ִ��ִ����ɣ�����ö��ŷָ����������Զ������Ա���
 *	Greenplugin	�Ƿ���ɫ�������ѡ��
 */
$Data = array(
	array(
		'Name' => 'Discuz������[7.0, 7.1, 7.2]',
		'Version' => '3.1',
		'Url' => 'http://www.webim20.cn/download/discuz',
		'Time' => '2010-9-14',
		'Thumb' => 'http://www.webim20.cn/images/dz_demo.png',
		'Description' => 'webim��һ��ΪDiscuz�û��������ҳ�漰ʱ���칤�ߣ��û�ͨ�����칤�������漴�����ߺ������졣���߰��û���װ����Ҫ��webim20.cnע��һ��apikey�����ú󼴿�ʹ�á����������Ϣ����� webim20.cn',
		'Charset' => 'SC_GBK,SC_UTF8,TC_BIG5,TC_UTF8',
		'Greenplugin' => 1,
	),
	array(
		'Name' => 'DiscuzX������[X1, X1.5]',
		'Version' => '1.1',
		'Url' => 'http://www.webim20.cn/download/discuzX',
		'Time' => '2010-9-14',
		'Thumb' => 'http://www.webim20.cn/images/dzx_demo.png',
		'Description' => 'webim��һ��ΪDiscuzX�û��������ҳ�漰ʱ���칤�ߣ��û�ͨ�����칤�������漴�����ߺ������졣���߰��û���װ����Ҫ��webim20.cnע��һ��apikey�����ú󼴿�ʹ�á����������Ϣ����� webim20.cn',
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
