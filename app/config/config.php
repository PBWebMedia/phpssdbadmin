<?php
define('ENV', 'online');

return array(
	'env' => ENV,
	'logger' => array(
		'level' => 'all', // none/off|(LEVEL)
		'dump' => 'file', // none|html|file, 可用'|'组合
		'files' => array( // ALL|(LEVEL)
			#'ALL'	=> dirname(__FILE__) . '/../../logs/' . date('Y-m') . '.log',
		),
	),
	'servers' => array(
		array(
			'host' => '127.0.0.1',
			'port' => '8888',
			'label' => 'ssdb-server-1',
			//'password' => '22222222',
		),
	),
	'login' => array(
		'name' => 'test',
		'password' => '12345678', // at least 6 characters
	),
);
