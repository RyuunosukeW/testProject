<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/14
 * Time: 15:16
 */

namespace WarpDrive\DesignPatternsBundle\Controller\AbstractFactory;


class GunPartsFactoryController implements PartsAbstractFactory
{
    public function getName()
    {
        return 'gun parts';
    }
}