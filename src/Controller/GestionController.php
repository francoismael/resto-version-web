<?php
// src/Controller/GestionController.php
// src/Controller/GestionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionController extends AbstractController
{
    /**
     * @Route("/gestion-elements", name="gestion_elements")
     */
    public function gestionElements(): Response
    {
        return $this->render('gestion_elements.html.twig');
    }
}
