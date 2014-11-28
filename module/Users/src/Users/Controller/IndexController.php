<?php 
namespace Users\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
//echo 'test';exit;
        $view = new ViewModel();
        return $view;
    }

    public function registerAction() {
        //echo "register action ok";die;
        $view = new ViewModel();
        $view->setTemplate('users/index/new-user');
        return $view;
    }

    public function loginAction() {
        //echo "login action ok";die;
        $view = new ViewModel();
        $view->setTemplate('users/index/login');
        return $view;
    }

}
