<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/7
 * Time: 18:40
 */

namespace WarpDrive\DesignPatternsBundle\Controller;

use WarpDrive\DesignPatternsBundle\Controller\DecoratorController;

use WarpDrive\DesignPatternsBundle\Controller\BeverageController;

class MilkController extends DecoratorController
{
     protected $beverage;

      public function __construct(BeverageController $beverageController)
      {
           $this->beverage = $beverageController;
      }

    public function getName()
      {
          return $this->beverage->getName().'milk';
      }

      public function cost()
      {
          return $this->beverage->cost()+100;
      }
}