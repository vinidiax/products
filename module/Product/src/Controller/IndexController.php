<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/02/2018
 * Time: 08:08
 */

namespace Product\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

}