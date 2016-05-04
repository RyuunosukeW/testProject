<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/7
 * Time: 18:35
 */

namespace WarpDrive\DesignPatternsBundle\Controller;

use WarpDrive\DesignPatternsBundle\Controller\BeverageController;

abstract class CoffeeController extends BeverageController
{

    public function getName(){
        return 'coffee';
    }

    public function cost()
    {
        return 200;
    }
}