<?php

namespace SejourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use UserBundle\Entity\Sejour;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function CreateSejourAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sejour = new Sejour();
        // $form = $this->createForm(new \UserBundle\Form\UserType());
        $jsonSej = json_decode($request->getContent(), true); // "true" to get an associative array
        // $form->bind($jsonData);
        // if ($form->isValid()) {
        // var_dump($jsonData); exit;
        $prenom = $jsonSej['prenom'];
        $nom = $jsonSej['nom'];
        $mail = $jsonSej['mail'];
        $password = $jsonSej['password'];
        $passwordConfirmation = $jsonSej['passwordConfirmation'];
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setMail($mail);
        $user->setPassword($password);
        $user->setPasswordConfirmation($passwordConfirmation);


            $em->persist($user);


            $em->flush();
    }
}
