<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/3/29
 * Time: 17:50
 */

namespace WarpDrive\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Sylius\Component\Rbac\Model\IdentityInterface;
use Sylius\Component\Rbac\Model\RoleInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

class User extends BaseUser implements IdentityInterface
{

    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    private $authorizationRole;


    /**
     * {@inheritdoc}
     */
    public function getAuthorizationRoles()
    {
        return [$this->authorizationRole];
    }

    /**
     * @return mixed
     */
    public function getAuthorizationRole()
    {
        return  $this->authorizationRole;
    }

    /**
     * @param mixed $authorizationRole
     */
    public function setAuthorizationRole($authorizationRole)
    {
        $this->authorizationRole = $authorizationRole;
    }

}