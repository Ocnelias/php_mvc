<?php

/**
 * Configuration file
 */
return array(
    /** Project Name */
    'project_name' => 'Task manager',

    /** Beejeetest base path */
    'base_path' => 'http://beejee7.loc/',

    /** Beejeetest DB settings */
    'beejeetest' => array(
        /** connection settings */
        'driver'   => 'Pdo',
        'dsn'      => 'mysql:host=localhost;dbname=beejee7;charset=utf8',
        'username' => 'root',
        'password' => '2989',
        'options'  => array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ),
    ),

    /** Beejeetest modules */
    'modules' => array(
        'Admin',
        'Application',
        'Task',
    ),
);