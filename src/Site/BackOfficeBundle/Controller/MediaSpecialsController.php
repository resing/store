<?php

namespace Site\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\BackOfficeBundle\Entity\MediaSpecials;
use Site\BackOfficeBundle\Form\MediaSpecialsType;

/**
 * MediaSpecials controller.
 *
 */
class MediaSpecialsController extends Controller
{

    /**
     * Lists all MediaSpecials entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->findAll();

        return $this->render('SiteBackOfficeBundle:MediaSpecials:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MediaSpecials entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MediaSpecials();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaspecials_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteBackOfficeBundle:MediaSpecials:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MediaSpecials entity.
     *
     * @param MediaSpecials $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MediaSpecials $entity)
    {
        $form = $this->createForm(new MediaSpecialsType(), $entity, array(
            'action' => $this->generateUrl('mediaspecials_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MediaSpecials entity.
     *
     */
    public function newAction()
    {
        $entity = new MediaSpecials();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteBackOfficeBundle:MediaSpecials:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MediaSpecials entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaSpecials entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteBackOfficeBundle:MediaSpecials:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MediaSpecials entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaSpecials entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteBackOfficeBundle:MediaSpecials:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MediaSpecials entity.
    *
    * @param MediaSpecials $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MediaSpecials $entity)
    {
        $form = $this->createForm(new MediaSpecialsType(), $entity, array(
            'action' => $this->generateUrl('mediaspecials_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MediaSpecials entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaSpecials entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mediaspecials_edit', array('id' => $id)));
        }

        return $this->render('SiteBackOfficeBundle:MediaSpecials:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MediaSpecials entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MediaSpecials entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mediaspecials'));
    }

    /**
     * Creates a form to delete a MediaSpecials entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mediaspecials_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
