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
use Symfony\Component\HttpKernel\Exception\HttpException;

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

        if (!$annonceType->isValid()) {
            throw new HttpException(400, "Données non valides");
        }

        $annonce = $annonceService->addAnnonce($annonce);
        return View::create($annonce, Response::HTTP_CREATED);
    }

    /**
     *  Exemple de requpête CURL pour récupérer les données de l'API
     */
    public function exempleRequeteCurl()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://api-leboncoin.localhost/api/v1/annonces',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                'titre' => 'Armoire',
                'contenu' => 'Vends armoire état comme neuf achetée en 2016',
                'prix' => 50,
                'categorie' => 2,
                'utilisateur' => 1
            )
        ));
        $json = curl_exec($curl);
        curl_close($curl);
    }
}
