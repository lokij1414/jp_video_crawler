<?php
set_time_limit(0);

include_once('crawler/jcrawler_factory.class.php');
require_once('lib/io/FileExtend.php');
require_once('lib/io/FileReader.php');
require_once('lib/io/FileWriter.php');
require_once('lib/io/FormatFileSize.php');

$c = jcrawler_factory :: create('http://www.youku.com/show_page/id_zc99261e8b33811df97c0.html');
if ($c->check_url()) {
	// ����ҳ���ַ��HTML����
	$c->parse_url();
}
?>
