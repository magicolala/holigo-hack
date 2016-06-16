<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('UserBundle:User')->findAll();
        return array('');
    }

    public function getUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        return array('');
    }
    public function createUserAction(Request $request)
   {
       $user = new User();
       $data1 = json_decode($request, true);



           $em = $this->getDoctrine()->getManager();
          
           $em->persist($user);
           $em->flush();

           return array('');
    }
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
                return array('');
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
