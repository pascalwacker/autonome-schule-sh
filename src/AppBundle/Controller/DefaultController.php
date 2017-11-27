<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_default_index")
     * @Method("GET")
     * @Template
     */
    public function indexAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        return [
            'home' => $doctrine->getRepository('AppBundle:Homepage')->findBy([], ['active' => 'DESC', 'id' => 'DESC']),
            'slides' => $doctrine->getRepository('AppBundle:Slider')->findAll(),
            'goal' => $doctrine->getRepository('AppBundle:Goal')->findAll(),
            'events' => $doctrine->getRepository('AppBundle:Event')->findHomepage(),
        ];
    }
}
