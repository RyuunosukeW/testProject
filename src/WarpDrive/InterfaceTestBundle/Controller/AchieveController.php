<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 9:34
 */

namespace WarpDrive\InterfaceTestBundle\Controller;

use WarpDrive\InterfaceTestBundle\Controller\Message\Interface1;
use WarpDrive\InterfaceTestBundle\Controller\Message\Interface2;

class AchieveController implements Interface1,Interface2
{
     public function method1()
     {
         return 'this is method1';
     }

    public function method2()
    {
        return 'this is method2';
    }
}