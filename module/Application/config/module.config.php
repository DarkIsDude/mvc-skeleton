<?php
namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Return config for Application Module
 */
return [
    'controllers' => [
        'factories' => [
            Controller\HelloController::class => InvokableFactory::class,
        ],
    ],

    'console' => [
        'router' => [
            'routes' => [
                'hello' => [
                    'options' => [
                        'route' => 'hello-world [<name>]',
                        'defaults' => [
                            'controller' => Controller\HelloController::class,
                            'action'     => 'index',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
