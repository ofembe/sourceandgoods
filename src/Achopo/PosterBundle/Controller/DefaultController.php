<?php

namespace Achopo\PosterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AchopoPosterBundle:Default:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('AchopoPosterBundle:Default:about.html.twig');
    }
    public function locationsAction()
    {
        return $this->render('AchopoPosterBundle:Default:locations.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('AchopoPosterBundle:Default:services.html.twig');
    }
}
