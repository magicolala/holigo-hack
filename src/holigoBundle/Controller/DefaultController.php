<?php

namespace holigoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    

    public function indexAction(Request $request)
    {
        return $this->render('holigoBundle:Default:index.html.twig');
    }


}
