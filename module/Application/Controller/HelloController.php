<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Request as ConsoleRequest;
use RuntimeException;

/**
 * HelloController for Application Module
 */
class HelloController extends AbstractActionController
{
    /**
     * Index Action
     *
     * You can call it only if you are in Console context, else throw \RuntimeException
     * If you add param name, add it at the end of Hello world, else display Hello world
     *
     * @example php index.php hello-world
     * @example php index.php hello-world Yollow
     * @return string
     */
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
