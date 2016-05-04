<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:18
 */

namespace WarpDrive\DesignPatternsBundle\Controller\AbstractFactory;


class MissilePartsFactoryController implements PartsAbstractFactory
{
      public function getName()
      {
          return 'missile parts';
      }
}