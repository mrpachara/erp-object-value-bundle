<?php

namespace Erp\Bundle\ObjectValueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ErpBundleObjectValueBundle:Default:index.html.twig');
    }
}
