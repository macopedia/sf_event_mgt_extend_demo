<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Event management - Extend Demo',
	'description' => 'A demo extension which shows, how to extend existing tables in sf_event_mgt',
	'category' => 'plugin',
	'author' => 'Torben Hansen',
	'author_email' => 'derhansen@gmail.com',
	'author_company' => 'Skyfillers GmbH',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2',
			'sf_event_mgt' => '0.5.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);