<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:02
 */

namespace WarpDrive\DesignPatternsBundle\Controller\AbstractFactory;


interface AbstractWeaponFactory
{
     public function makeWeapon(); #武器制造方法

     public function upgradeWeapon(); #武器升级

}