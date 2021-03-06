<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        return $this->render('dashboard/index.html.twig');
    }
}
