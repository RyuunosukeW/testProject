<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:09
 */

namespace WarpDrive\DesignPatternsBundle\Controller\AbstractFactory;

use WarpDrive\DesignPatternsBundle\Controller\AbstractFactory\AbstractWeaponFactory;

class MissileFactoryController implements AbstractWeaponFactory
{

    protected $missileParts;

    public function __construct(PartsAbstractFactory $abstractFactory)
    {
        $this->missileParts = $abstractFactory;
    }

    public function makeWeapon()
    {
        return 'make missiles with '.$this->missileParts->getName();
    }

    public function upgradeWeapon()
    {
        return 'upgrade missiles with '.$this->missileParts->getName();
    }
}