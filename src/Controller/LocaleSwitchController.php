<?php
// src/Controller/LocaleSwitchController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocaleSwitchController extends AbstractController {

    /**
     * @Route("/en", name="switch_language_english")
     */
    public function switchLanguageEnglish() {
        return $this->switchLanguage('en');
    }

    /**
     * @Route("/de", name="switch_language_german")
     */
    public function switchLanguageGerman() {
        return $this->switchLanguage('de');
    }

    private function switchLanguage($locale) {
        $this->get('session')->set('_locale', $locale);
        return $this->redirect($this->generateUrl('homepage'));
    }

}
