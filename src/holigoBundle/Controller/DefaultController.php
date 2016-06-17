<?php

namespace holigoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{


    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->findById($id);

        $retour = json_decode($user, false);
        var_dump($retour); exit;
        return $retour;

        // return $this->render('holigoBundle:Default:index.html.twig');
    }


}
