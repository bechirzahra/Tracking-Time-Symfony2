<?php

namespace MyApp\CrediWireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\CrediWireBundle\Entity\Owner;
use MyApp\CrediWireBundle\Form\Login;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MyAppCrediWireBundle:Owner');
        $projects = NULL;
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            //$password = sha1($request->get('password'));
            $password = $request->get('password');
            $remember = $request->get('remember');
            $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }

                $login = new Login();
                $login->setUsername($username);
                $login->setPassword($password);
                $session->set('login', $login);
                $session->set('idAuth', $user->getId());
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
                if ($user) {
                    $page = $request->get('page');
                    $count_per_page = 50;
                    $total_count = $this->getTotalProjects();
                    $total_pages = ceil($total_count / $count_per_page);

                    if (!is_numeric($page)) {
                        $page = 1;
                    } else {
                        $page = floor($page);
                    }
                    if ($total_count <= $count_per_page) {
                        $page = 1;
                    }
                    if (($page * $count_per_page) > $total_count) {
                        $page = $total_pages;
                    }
                    $offset = 0;
                    if ($page > 1) {
                        $offset = $count_per_page * ($page - 1);
                    }
                    $em = $this->getDoctrine()->getManager();
                    $ctryQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('MyAppCrediWireBundle:Project', 'c')
                            ->where('c.owner_id = :identifier')
                            ->setParameter('identifier', $user->getId())
                            ->setFirstResult($offset)
                            ->setMaxResults($count_per_page);
                    $ctryFinalQuery = $ctryQuery->getQuery();
                    $id = $session->get('idAuth');
                    $projects = $ctryFinalQuery->getArrayResult();
                    return $this->render('MyAppCrediWireBundle:Default:welcome.html.twig', array('name' => $user->getUserName(), 'projects' => $projects, 'total_pages' => $total_pages, 'current_page' => $page, 'id' => $id));
                }



                // return $this->render('MyAppCrediWireBundle:Default:welcome.html.twig', array('name' => $user->getUserName(),'projects'=>$projects));
            } else {
                return $this->render('MyAppCrediWireBundle:Default:login.html.twig', array('name' => 'Login Error'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $id = $session->get('idAuth');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
                if ($user) {
                    $page = $request->get('page');
                    $count_per_page = 50;
                    $total_count = $this->getTotalProjects();
                    $total_pages = ceil($total_count / $count_per_page);

                    if (!is_numeric($page)) {
                        $page = 1;
                    } else {
                        $page = floor($page);
                    }
                    if ($total_count <= $count_per_page) {
                        $page = 1;
                    }
                    if (($page * $count_per_page) > $total_count) {
                        $page = $total_pages;
                    }
                    $offset = 0;
                    if ($page > 1) {
                        $offset = $count_per_page * ($page - 1);
                    }
                    $em = $this->getDoctrine()->getManager();
                    $ctryQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('MyAppCrediWireBundle:Project', 'c')
                            ->where('c.owner_id = :identifier')
                            ->setParameter('identifier', $user->getId())
                            ->setFirstResult($offset)
                            ->setMaxResults($count_per_page);
                    $ctryFinalQuery = $ctryQuery->getQuery();

                    $projects = $ctryFinalQuery->getArrayResult();
                    return $this->render('MyAppCrediWireBundle:Default:welcome.html.twig', array('name' => $user->getUserName(), 'projects' => $projects, 'total_pages' => $total_pages, 'current_page' => $page, 'id' => $id));
                }
            }
            return $this->render('MyAppCrediWireBundle:Default:login.html.twig');
        }
    }

    public function getTotalProjects() {
        $em = $this->getDoctrine()->getManager();
        $countQuery = $em->createQueryBuilder()
                ->select('Count(c)')
                ->from('MyAppCrediWireBundle:Project', 'c');
        $finalQuery = $countQuery->getQuery();
        $total = $finalQuery->getSingleScalarResult();
        return $total;
    }

    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = $request->get('password');

            $user = new Owner();
            // $user->setPassword(sha1($password));
            $user->setPassword($password);
            $user->setUserName($username);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('MyAppCrediWireBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('MyAppCrediWireBundle:Default:login.html.twig');
    }

}
