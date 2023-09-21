<?php

// This is the database connection configuration.
return array(
//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',

	'connectionString' => 'pgsql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'postgres',
	'charset' => 'utf8',

);