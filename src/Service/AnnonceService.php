<?php

namespace App\Service;

use App\Entity\Annonce;
use Doctrine\ORM\EntityManagerInterface;

class AnnonceService
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param $annonce
     *
     * @return \App\Entity\Annonce
     */
    public function addAnnonce($annonce): Annonce
    {
        $this->em->persist($annonce);
        $this->em->flush();
        return $annonce;
    }
}
