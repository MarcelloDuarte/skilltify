<?php

namespace Bossa\MdBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BossaMdBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
