<?php

namespace Bossa\Bundle\SkilltifyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AssessmentsController extends Controller
{
    /**
     * @Route("/new")
     * @Template()
     */
     public function newAction()
     {
         return [];
     }
}
