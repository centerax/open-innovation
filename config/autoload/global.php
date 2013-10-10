<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'db' => array(
        'driver'         => 'pdo',
        'dsn'            => 'mysql:dbname=daedalus;host=localhost',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    // ORM settings DEFINE THIS in local.php
    'doctrine' => array(
            'connection' => array(
                    'orm_default' => array(
                            'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                            'params' => array(
                                    'dbname'   => 'daedalus',
                                    'charset' => 'utf8',
                                    'driverOptions' => array(
                                            1002=>'SET NAMES utf8'
                                    )
                            )
                    )
            )
    ),
	'auth_identity_fields' => array( 'email' ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);