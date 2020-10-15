<?php
// src/Controller/LocaleSwitchController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LocaleSwitchController extends AbstractController {

    /**
     * @Route("/en", name="switch_language_english")
     */
    public function switchLanguageEnglishAction() {
        return $this->switchLanguage('en');
    }

    /**
     * @Route("/de", name="switch_language_german")
     */
    public function switchLanguageGermanAction() {
        return $this->switchLanguage('de');
    }

    private function switchLanguage($locale) {
        $this->get('session')->set('_locale', $locale);
        return $this->redirect($this->generateUrl('homepage'));
    }

}