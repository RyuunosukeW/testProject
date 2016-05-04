<?php


namespace WarpDrive\CoreBundle\Kernel;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * Touke base application kernel.
 *
 */
abstract class Kernel extends BaseKernel
{
    /**
     * please refer ﻿http://semver.org/ for more version knowledge
     */
    const VERSION = '0.1.0-dev';
    const VERSION_ID = '0010';
    const MAJOR_VERSION = '0';
    const MINOR_VERSION = '1';

    const ENV_DEV = 'dev';
    const ENV_PROD = 'prod';
    const ENV_TEST = 'test';
    const ENV_STAGING = 'staging';

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {

        return [
            new \FOS\RestBundle\FOSRestBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle($this),
            new \Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new \Sylius\Bundle\RbacBundle\SyliusRbacBundle(),
            new \Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),


            new \FOS\UserBundle\FOSUserBundle(),
            new \WarpDrive\CoreBundle\WarpDriveCoreBundle(),
            new \AppBundle\AppBundle(),
            new \WarpDrive\UserBundle\WarpDriveUserBundle(),
            new \WarpDrive\DesignPatternsBundle\WarpDriveDesignPatternsBundle(),
            new \WarpDrive\InterfaceTestBundle\WarpDriveInterfaceTestBundle(),
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $rootDir = $this->getRootDir();


        if (is_file($file = $rootDir . '/config/config_' . $this->environment . '.local.yml')) {
            $loader->load($file);
        } else {

            $loader->load($rootDir . '/config/config_' . $this->environment . '.yml');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        if ($this->isVagrantEnvironment()) {
            return '/dev/shm/touke/cache/' . $this->environment;
        }
        return parent::getCacheDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        if ($this->isVagrantEnvironment()) {
            return '/dev/shm/touke/logs';
        }

        return parent::getLogDir();
    }

    /**
     * @return boolean
     */
    protected function isVagrantEnvironment()
    {
        return (getenv('HOME') === '/home/vagrant' || getenv('VAGRANT') === 'VAGRANT') && is_dir('/dev/shm');
    }
}
