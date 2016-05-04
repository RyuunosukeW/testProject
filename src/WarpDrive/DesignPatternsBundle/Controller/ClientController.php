<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:26
 */

namespace WarpDrive\DesignPatternsBundle\Controller;

use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\MissilePartsFactoryController;
use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\MissileFactoryController;

use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\FirearmsFactoryController;
use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\GunPartsFactoryController;

class ClientController
{
     public function indexAction(){
         $missileParts = new MissilePartsFactoryController();
         $missile = new MissileFactoryController($missileParts);
         dump($missile->makeWeapon());

         $gunParts = new GunPartsFactoryController();
         $gun = new FirearmsFactoryController($gunParts);
         dump($gun->makeWeapon());

         exit;
     }
}