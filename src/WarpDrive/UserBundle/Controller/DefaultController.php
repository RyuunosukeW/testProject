<?php

namespace WarpDrive\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WarpDriveUserBundle:Default:index.html.twig');
    }
}
