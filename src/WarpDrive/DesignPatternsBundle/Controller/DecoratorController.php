<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/7
 * Time: 18:10
 */

namespace WarpDrive\DesignPatternsBundle\Controller;

use WarpDrive\DesignPatternsBundle\Controller\BeverageController;

abstract class DecoratorController extends BeverageController
{
      public abstract function getName();
}