<?php

return [
	'name' => 'ada',
	'config' => [
		'config',
	],
	'depends' => [
		'aimeos-core',
		'ai-admin-jqadm',
		'ai-client-html',

	],
	'include' => [
		'src',
	],
	'template' => [
		'admin/jqadm/templates' => [
			'templates/admin/jqadm',
		],
		'client/html/templates' => [
			'templates/client/html',
		],

	],
	'custom' => [
		'admin/jqadm' => [
			'manifest.jsb2',
		],
	],
];
