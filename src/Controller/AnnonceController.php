<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Service\AnnonceService;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class AnnonceController extends FOSRestController
{

    /**
     * Créé une annonce
     * @Rest\Post("/annonces")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Service\AnnonceService               $annonceService
     *
     * @return \FOS\RestBundle\View\View
     */
    public function postArticle(Request $request, AnnonceService $annonceService): View
    {
        $annonce = new Annonce();

        $annonceType = $this->createForm(AnnonceType::class, $annonce);

        $annonceType->submit($request->request->all());
        if ($annonceType->isValid()) {
            $annonce = $annonceService->addAnnonce($annonce);
            return View::create($annonce, Response::HTTP_CREATED);
        } else {
            return View::create($annonce, Response::HTTP_CREATED);
        }
    }
}
