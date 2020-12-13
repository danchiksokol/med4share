<?php defined('SYSPATH') or die('No direct access allowed.');

if ($_SERVER['HTTP_HOST'] == 'med4share.local') {

	return array
	(
		'default' => array
		(
			'type'       => 'MySQL',
			'connection' => array(
				/**
				 * The following options are available for MySQL:
				 *
				 * string   hostname     server hostname, or socket
				 * string   database     database name
				 * string   username     database username
				 * string   password     database password
				 * boolean  persistent   use persistent connections?
				 * array    variables    system variables as "key => value" pairs
				 *
				 * Ports and sockets may be appended to the hostname.
				 */
				'hostname'   => '172.19.0.3',
				'database'   => 'med4share',
				'username'   => 'root',//'admin.lamo8.ru',
				'password'   => '123',//'RjavRA4KZ2hE2zAv',
				'persistent' => FALSE,
			),
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
		),
		'alternate' => array(
			'type'       => 'pdo',
			'connection' => array(
				/**
				 * The following options are available for PDO:
				 *
				 * string   dsn         Data Source Name
				 * string   username    database username
				 * string   password    database password
				 * boolean  persistent  use persistent connections?
				 */
				'dsn'        => 'mysql:host=localhost;dbname=k',
				'username'   => 'root',
				'password'   => 'root',
				'persistent' => FALSE,
			),
			/**
			 * The following extra options are available for PDO:
			 *
			 * string   identifier  set the escaping identifier
			 */
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
		),
	);

}
else {

	return array
	(
		'default' => array
		(
			'type'       => 'MySQL',
			'connection' => array(
				/**
				 * The following options are available for MySQL:
				 *
				 * string   hostname     server hostname, or socket
				 * string   database     database name
				 * string   username     database username
				 * string   password     database password
				 * boolean  persistent   use persistent connections?
				 * array    variables    system variables as "key => value" pairs
				 *
				 * Ports and sockets may be appended to the hostname.
				 */
				'hostname'   => 'h003309542.mysql',
				'database'   => 'h003309542_3',
				'username'   => 'h003309542_mysql',//'admin.lamo8.ru',
				'password'   => '8dfTdx:H',//'RjavRA4KZ2hE2zAv',
				'persistent' => FALSE,
			),
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
		),
		'alternate' => array(
			'type'       => 'pdo',
			'connection' => array(
				/**
				 * The following options are available for PDO:
				 *
				 * string   dsn         Data Source Name
				 * string   username    database username
				 * string   password    database password
				 * boolean  persistent  use persistent connections?
				 */
				'dsn'        => 'mysql:host=localhost;dbname=k',
				'username'   => 'root',
				'password'   => 'root',
				'persistent' => FALSE,
			),
			/**
			 * The following extra options are available for PDO:
			 *
			 * string   identifier  set the escaping identifier
			 */
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
		),
	);

}

