<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 9:37
 */

namespace WarpDrive\InterfaceTestBundle\Controller;

use WarpDrive\InterfaceTestBundle\Controller\AchieveController;
use WarpDrive\InterfaceTestBundle\Controller\Message\Interface1;
use WarpDrive\InterfaceTestBundle\Controller\Message\Interface2;

class Achieve1Controller
{

    protected $interface1;

    public function testAction(){

        dump($this->interfaceTest2(new AchieveController()));
        exit;

    }

    public function interfaceTest1(Interface1 $interface1){
          return $interface1->method1();
    }

    public function interfaceTest2(Interface2 $interface2){
          return $interface2->method2();
    }
}