<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('homepage/about.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('homepage/contact.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function search()
    {
        return $this->render('homepage/search.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/sidebar", name="sidebar")
     */
    public function sidebar()
    {
        return $this->render('homepage/sidebar.html.twig');
    }

    /**
     * @Route("/terms", name="terms")
     */
    public function terms()
    {
        return $this->render('homepage/terms.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/disclaimer", name="disclaimer")
     */
    public function disclaimer()
    {
        return $this->render('homepage/disclaimer.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/privacy-policy", name="privacy-policy")
     */
    public function privacypolicy()
    {
        return $this->render('homepage/privacy-policy.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/imprint", name="imprint")
     */
    public function imprint()
    {
        return $this->render('homepage/imprint.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

}
