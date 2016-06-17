<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use UserBundle\Entity\User;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 */
class DefaultController extends FOSRestController
{
    /**
     * Lists all User entities.
     *
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('UserBundle:User')->findAll();
        $response->headers->set('Content-Type', 'application/json');
        return array('users' => $users);

    }
    /**
     * Lists one User.
     *
     */
    public function getUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->findById($id);



        // $user->getPrenom($prenom);
        // $user->getNom($nom);
        // $user->getMail($mail);
        // $user->getPassword($password);
        // $user->getPasswordConfirmation('passwordConfirmation');
        $retour = json_encode($user, true);

        // $prenom = $retour->request->get('prenom');
        // $nom = $retour['nom'];
        // $mail = $retour['mail'];
        // $password = $retour['password'];
        // $passwordConfirmation = $retour['passwordConfirmation'];

        // var_dump($retour);exit;

return array('user' => $user);
    }
    /**
     * Creates a new User entity.
     * @Rest\View
     */
    public function createUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        // $form = $this->createForm(new \UserBundle\Form\UserType());
        $jsonData = json_decode($request->getContent(), true); // "true" to get an associative array
        // $form->bind($jsonData);
        // if ($form->isValid()) {
        // var_dump($jsonData); exit;
        $prenom = $jsonData['prenom'];
        $nom = $jsonData['nom'];
        $mail = $jsonData['mail'];
        $password = $jsonData['password'];
        $passwordConfirmation = $jsonData['passwordConfirmation'];
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setMail($mail);
        $user->setPassword($password);
        $user->setPasswordConfirmation($passwordConfirmation);


            $em->persist($user);


            $em->flush();


            return array('user' =>  $user);
        // }
        // return View::create($form, 400);
    }
    /**
     * Edit User
     */
    public function editUserAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $editForm = $this->createForm('UserBundle\Form\UserType', $user);
        $jsonData = json_decode($request->getContent(), true); // "true" to get an associative array
        $editForm->bind($jsonData);
        if ($user) {
            if ($editForm->isValid()) {
                $em->persist($user);
                $em->flush();
                return array('user' => $user);
            } else {
                return View::create($editForm, 400);
            }
        } else {
            throw $this->createNotFoundException('User not found!');
        }
    }
    /**
     * Delete User
     */
    public function deleteUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $em->remove($user);
        $em->flush();
    }
}
