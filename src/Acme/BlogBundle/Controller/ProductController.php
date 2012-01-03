<?php

namespace Acme\BlogBundle\Controller;

use Acme\BlogBundle\AcmeBlogBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BlogBundle\Entity\Product;

/**
 * Product controller.
 *
 * @Route("/blog/product")
 */
class ProductController extends Controller
{
    /**
     * Lists all Product entities.
     *
     * @Route("/", name="blog_product")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeBlogBundle:Product')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Product entity.
     *
     * @Route("/{id}/show", name="blog_product_show")
     * @Template()
     */
        
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeBlogBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
    
		public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $product = $em->find('AcmeBlogBundle:Product', $id);

        $em->remove($product);
        $em->flush();

        // ...
    }

}
