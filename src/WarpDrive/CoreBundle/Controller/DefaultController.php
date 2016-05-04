<?php

namespace WarpDrive\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WarpDriveCoreBundle:Default:index.html.twig');
    }
}
