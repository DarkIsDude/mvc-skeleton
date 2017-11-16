<?php
namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

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
                        'route' => 'hello-world',
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
