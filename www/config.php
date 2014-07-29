<?php
// created: 2012-12-04 08:38:17
$sugar_config = array (
 
  'dbconfig' => 
  array (
    'db_host_name' => getenv(STRATOS_MYSQL_HOST),
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => getenv(STRATOS_MYSQL_USER),
    'db_password' => getenv(STRATOS_MYSQL_PASSWORD),
    'db_name' => 'sugarcrm',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
  )
);
