<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:06
 */

namespace WarpDrive\DesignPatternsBundle\Controller\AbstractFactory;

use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\AbstractWeaponFactory;


class FirearmsFactoryController implements AbstractWeaponFactory
{

    protected $gunParts;

    public function __construct(PartsAbstractFactory $abstractFactory)
    {
         $this->gunParts = $abstractFactory;
    }

    public function makeWeapon()
     {
          return 'make guns with'.$this->gunParts->getName();
     }

     public function upgradeWeapon()
     {
         return 'upgrade guns with'.$this->gunParts->getName();
     }
}