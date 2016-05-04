<?php

namespace WarpDrive\InterfaceTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WarpDriveInterfaceTestBundle:Default:index.html.twig');
    }
}
