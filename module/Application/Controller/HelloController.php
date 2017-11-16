<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Request as ConsoleRequest;
use RuntimeException;

class HelloController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getRequest();

        if (! $request instanceof ConsoleRequest) {
            throw new RuntimeException(
                'You can only use this action from a console!'
            );
        }

        $name = $request->getParam('name');
        return 'Hello world' . ($name ? ' ' . $name : '');
    }
}
