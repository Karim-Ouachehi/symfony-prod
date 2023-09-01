<?php
// src/Controller/AccueilController.php

namespace App\Controller;

// Importer la classe pour les Route de Symfony
use Symfony\Component\Routing\Annotation\Route;

// Importer la classe Response de Symfony
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route("/", name:"accueil")]
    
    // Action a executé quand une requête est reçcu sur l'url '/'
    public function index(): Response
    {
        // Retourner un objet de type Response
        return new Response(
          '<h1>Symfony deployé!</h1>', // Le contenu
          Response::HTTP_OK, // Le status (200)
          ['content-type' => 'text/html'] // Les en-têtes
        );
    }
}
