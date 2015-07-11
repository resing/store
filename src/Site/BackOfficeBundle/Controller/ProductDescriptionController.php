<?php

namespace Site\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Site\BackOfficeBundle\Entity\ProductDescription;
use Site\BackOfficeBundle\Form\ProductDescriptionType;

/**
 * ProductDescription controller.
 *
 * @Route("/admin/productdescription")
 */
class ProductDescriptionController extends Controller
{

    /**
     * Lists all ProductDescription entities.
     *
     * @Route("/", name="admin_productdescription")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ProductDescription entity.
     *
     * @Route("/", name="admin_productdescription_create")
     * @Method("POST")
     * @Template("SiteBackOfficeBundle:ProductDescription:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ProductDescription();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_ProductDescription_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ProductDescription entity.
     *
     * @param ProductDescription $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProductDescription $entity)
    {
        $form = $this->createForm(new ProductDescriptionType(), $entity, array(
            'action' => $this->generateUrl('admin_ProductDescription_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ProductDescription entity.
     *
     * @Route("/new", name="admin_productdescription_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ProductDescription();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ProductDescription entity.
     *
     * @Route("/{id}", name="admin_productdescription_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductDescription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ProductDescription entity.
     *
     * @Route("/{id}/edit", name="admin_productdescription_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductDescription entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ProductDescription entity.
    *
    * @param ProductDescription $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ProductDescription $entity)
    {
        $form = $this->createForm(new ProductDescriptionType(), $entity, array(
            'action' => $this->generateUrl('admin_¨ProductDescription_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ProductDescription entity.
     *
     * @Route("/{id}", name="admin_productdescription_update")
     * @Method("PUT")
     * @Template("SiteBackOfficeBundle:ProductDescription:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductDescription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_ProductDescription_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ProductDescription entity.
     *
     * @Route("/{id}", name="admin_productdescription_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProductDescription entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_ProductDescription'));
    }

    /**
     * Creates a form to delete a ProductDescription entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_ProductDescription_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
