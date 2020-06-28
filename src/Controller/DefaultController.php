<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route({
     *     "en": "/contact",
     *     "de": "/kontakt",
     *     "fr_BE": "/fr/nous-contacter",
     *     "nl_BE": "/nl/contacteer-ons"
     * }, name="contact")
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig');
    }
}
