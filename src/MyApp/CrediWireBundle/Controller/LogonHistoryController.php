<?php

namespace MyApp\CrediWireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\CrediWireBundle\Entity\LogonHistory;
use MyApp\CrediWireBundle\Form\LogonHistoryType;
use \MyApp\CrediWireBundle\Entity\Project;

/**
 * LogonHistory controller.
 *
 */
class LogonHistoryController extends Controller {

    /**
     * Lists all LogonHistory entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppCrediWireBundle:LogonHistory')->findAll();

        return $this->render('MyAppCrediWireBundle:LogonHistory:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new LogonHistory entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new LogonHistory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('logonhistory_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppCrediWireBundle:LogonHistory:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a LogonHistory entity.
     *
     * @param LogonHistory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(LogonHistory $entity) {
        $form = $this->createForm(new LogonHistoryType(), $entity, array(
            'action' => $this->generateUrl('logonhistory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LogonHistory entity.
     *
     */
    public function newAction() {
        $entity = new LogonHistory();
        $form = $this->createCreateForm($entity);

        return $this->render('MyAppCrediWireBundle:LogonHistory:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LogonHistory entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCrediWireBundle:LogonHistory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LogonHistory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppCrediWireBundle:LogonHistory:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LogonHistory entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCrediWireBundle:LogonHistory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LogonHistory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppCrediWireBundle:LogonHistory:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a LogonHistory entity.
     *
     * @param LogonHistory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(LogonHistory $entity) {
        $form = $this->createForm(new LogonHistoryType(), $entity, array(
            'action' => $this->generateUrl('logonhistory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing LogonHistory entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCrediWireBundle:LogonHistory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LogonHistory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('logonhistory_edit', array('id' => $id)));
        }

        return $this->render('MyAppCrediWireBundle:LogonHistory:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a LogonHistory entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppCrediWireBundle:LogonHistory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LogonHistory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('logonhistory'));
    }

    /**
     * Creates a form to delete a LogonHistory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('logonhistory_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function logAction($id) {
        $entity = new LogonHistory();
        $em = $this->getDoctrine()->getManager();
        $entity->setLogonProject(new \DateTime("now"));
        $project = $em->getRepository('MyAppCrediWireBundle:Project')->find($id);
        $entity->setProject($project);
        $em->persist($entity);
        $em->flush();
        $deleteForm = $this->createDeleteForm($id);
        $ctryQuery = $em->createQueryBuilder()
                ->select('c')
                ->from('MyAppCrediWireBundle:LogonHistory', 'c')
                ->where('c.Project = :identifier')
                ->setParameter('identifier', $project);
        $ctryFinalQuery = $ctryQuery->getQuery();
        $projects = $ctryFinalQuery->getArrayResult();
        
        
        $ctryQuery1 = $em->createQueryBuilder()
                ->select('SUM(c.logoutProject - c.logonProject)')
                ->from('MyAppCrediWireBundle:LogonHistory', 'c')
                ->where('c.Project = :identifier')
                ->setParameter('identifier', $project);
        $ctryFinalQuery1 = $ctryQuery1->getQuery()->setMaxResults(1)->getSingleResult();
        $p = new Project();
        $p->setStartDate($project->getStartDate());
        $p->setProjectName($project->getProjectName());
        $p->setEndDate($project->getEndDate());
        $p->setOwnerId($id);
        $p->setTotalHours(new \DateTime($ctryFinalQuery1[1]));

        $em->flush();

        return $this->render('MyAppCrediWireBundle:Project:show.html.twig', array(
                    'entity' => $project,
                    'delete_form' => $deleteForm->createView(),
                    'entities' => $projects,
                    'hours' =>$ctryFinalQuery1[1],
        ));
    }

    public function outAction($id) {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('MyAppCrediWireBundle:Project')->find($id);
        $last_entity = $em->createQueryBuilder()
                ->select('e')
                ->from('MyAppCrediWireBundle:LogonHistory', 'e')
                ->orderBy('e.id', 'DESC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        $last_entity->setLogoutProject(new \DateTime("now"));

        $last_entity->setProject($project);
        $em->flush();


        return $this->forward('MyAppCrediWireBundle:Default:index');
    }

}
