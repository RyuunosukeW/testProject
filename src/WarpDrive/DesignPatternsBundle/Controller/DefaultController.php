<?php

namespace WarpDrive\DesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WarpDriveDesignPatternsBundle:Default:index.html.twig');
    }
}
