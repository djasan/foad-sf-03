<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use App\Entity\Formation;  // Ajoutez cette ligne pour importer la classe Formation
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    // ... (votre code existant)
}

    /**
     * @Route("/formations", name="formations_list")
     */
    public function listFormations(): Response
    {
        // Ajoutez votre logique pour récupérer la liste des formations depuis la base de données
        $formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();

        return $this->render('default/list_formations.html.twig', [
            'formations' => $formations,
        ]);
    }

    // Ajoutez d'autres actions en fonction de vos besoins
}

