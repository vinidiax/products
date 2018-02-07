<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/02/2018
 * Time: 13:02
 */

namespace Product\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class Product extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}