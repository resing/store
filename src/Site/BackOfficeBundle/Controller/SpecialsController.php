<?php

namespace Site\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\BackOfficeBundle\Entity\Specials;
use Site\BackOfficeBundle\Form\SpecialsType;

/**
 * Specials controller.
 *
 */
class SpecialsController extends Controller
{

    /**
     * Lists all Specials entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteBackOfficeBundle:Specials')->findAll();

        return $this->render('SiteBackOfficeBundle:Specials:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Specials entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Specials();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('specials_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteBackOfficeBundle:Specials:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Specials entity.
     *
     * @param Specials $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Specials $entity)
    {
        $form = $this->createForm(new SpecialsType(), $entity, array(
            'action' => $this->generateUrl('specials_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Specials entity.
     *
     */
    public function newAction()
    {
        $entity = new Specials();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteBackOfficeBundle:Specials:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Specials entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:Specials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specials entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteBackOfficeBundle:Specials:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Specials entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:Specials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specials entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteBackOfficeBundle:Specials:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Specials entity.
    *
    * @param Specials $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Specials $entity)
    {
        $form = $this->createForm(new SpecialsType(), $entity, array(
            'action' => $this->generateUrl('specials_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Specials entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:Specials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specials entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('specials_edit', array('id' => $id)));
        }

        return $this->render('SiteBackOfficeBundle:Specials:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Specials entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteBackOfficeBundle:Specials')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Specials entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('specials'));
    }

    /**
     * Creates a form to delete a Specials entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('specials_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
