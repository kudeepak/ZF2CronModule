<?php

/**
 * Module Configuration
 * This file is used manage module configuaration and router
 *
 * @category Cron
 * @package  Cron
 *
 */

return array(    
    'router' => array(
        'routes' => array(
            // HTTP routes are here
        )
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            
        ),
        'aliases' => array()      
    ),
    'translator' => array(),
    'controllers' => array(
        'invokables' => array(
            'Cron\Controller\Cron' => 'Cron\Controller\CronController'
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'cron' => array(                    
                    'options' => array(
                        'route' => 'cron index --method= --model= [--args=]',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Cron\Controller',
                            'controller' => 'Cron',
                            'action' => 'index'
                        )
                    )
                )
            )
        )
    ),
);
