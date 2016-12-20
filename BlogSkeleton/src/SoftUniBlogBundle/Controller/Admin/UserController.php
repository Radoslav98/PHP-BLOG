<?php
/**
 * Created by IntelliJ IDEA.
 * User: Radi
 * Date: 17.12.2016 г.
 * Time: 15:24 ч.
 */

namespace SoftUniBlogBundle\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserEditType;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/user" )
 * Class UserController
 * @package SoftUniBlogBundle\Controller\Admin
 */
class UserController extends Controller
{
    /**
     * @Route("/" , name="admin_users_all")
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render("admin/user/all.html.twig",[
            'users'=>$users
        ]);
    }

    /**
     * @Route("/edit/{id}", name="admin_user_edit")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public  function editAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_users_all");
        }

        $form = $this->createForm(UserEditType::class, $user);
        $oldPassword = $user->getPassword();
        $form->handleRequest($request);

        if($form->isValid()){
            if (empty($user->getPassword())){
                $user->setPassword($oldPassword);
            }else{
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
            }
            $roles=[];
            $roleRepo=$this->getDoctrine()->getRepository(Role::class);
            foreach ($user->getRoles() as $roleName){
                $roles[]= $roleRepo->findOneBy(['name'=>$roleName]);

            }

            $user->setRoles($roles);

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("admin_users_all");

        }

        return $this->render("admin/user/edit.html.twig", [
            'form' => $form->createView(),
            'user'=>$user
        ]);
    }

    /**
     * @Route("/delete/{id}" , name="admin_user_delete")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public  function deleteAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_users_all");
        }

        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();

            return $this->redirectToRoute("admin_users_all");
        }
        return $this->render("admin/user/delete.html.twig", [
            'form' => $form->createView(),
            'user'=>$user
        ]);

    }
}