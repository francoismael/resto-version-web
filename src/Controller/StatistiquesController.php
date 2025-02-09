<?php
// src/Controller/GestionController.php
// src/Controller/GestionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatistiquesController extends AbstractController
{
    /**
     * @Route("/state", name="gestion_elements")
     */
    public function statistiques(): Response
    {
        return $this->render('statistiques.html.twig');
    }
}
