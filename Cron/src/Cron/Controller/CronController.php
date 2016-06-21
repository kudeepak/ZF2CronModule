<?php
namespace Cron\Controller;

/**
 * IndexController Class
 * This file is used as root controller for whole application
 *
 * @category Application
 * @package Application\Controller
 *         
 */
use Zend\Mvc\Controller\AbstractActionController;

class CronController extends AbstractActionController
{
    public $cronModel;

    /**
     * Function used to load the application
     *
     * @return object
     */
    public function indexAction()
    {
        try {
            $request = $this->getRequest();
            $method = $request->getParam('method');
            $model = $request->getParam('model');
            $args = $request->getParam('args');
            
            if (isset($method) && $method != null) {             
                $this->cronModel($model)->{$method}($args);                
            } else {
                $this->provideMethod();
            }
        } catch (\Exception $exec) {
            throw new \Exception($exec->getMessage());
        }
    }

    private function cronModel($key)
    {
        if (! $this->cronModel) {
            $sm = $this->getServiceLocator();
            $this->cronModel = $sm->get($key);
        }
        return $this->cronModel;
    }

    private function notFoundMethod()
    {
        echo "\033[31m ======================================================= \033[0m \n";
        echo "\033[32m Error: \033[0m \n";
        echo "\033[31m ------------------------------------------------------- \033[0m \n";
        echo "\033[31m Method not defined.\033[0m \n";
        echo "\033[31m ======================================================= \033[0m \n";
    }

    private function provideMethod()
    {
        echo "\033[31m ======================================================= \033[0m \n";
        echo "\033[32m Error: \033[0m \n";
        echo "\033[31m ------------------------------------------------------- \033[0m \n";
        echo "\033[31m Method not given, please give --method=<method name>.\033[0m \n";
        echo "\033[31m ======================================================= \033[0m \n";
    }
}
