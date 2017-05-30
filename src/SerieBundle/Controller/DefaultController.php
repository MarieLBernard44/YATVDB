<?php

namespace SerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SerieBundle:Default:index.html.twig', array('name' => $name));
    }
    public function legalNoticeAction()
    {
    	return $this->render('SerieBundle:Default:LegalNotice.html.twig');
    }
}
