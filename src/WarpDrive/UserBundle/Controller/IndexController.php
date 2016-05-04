<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/3/30
 * Time: 10:37
 */

namespace WarpDrive\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
     public function indexAction(){
         dump(12345);
         exit;
     }
}