<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SiteWebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of SiteWebController
 *
 * @author jonathan
 */
class SiteWebController extends Controller {
    //put your code here
     /**
 * @Route ("/home")
 * @Template ("SiteWebBundle::home.html.twig")
 */
   public function Home(){
       
   }
}
