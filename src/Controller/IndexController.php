<?php

// src/Controller/HelloController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Events\UserEvent;
use App\EventSubscriber\UserAddedSubscriber;


class IndexController extends AbstractController
{


    /**
     * Page de voyages
     *
     * @Route("/voyages", name="voyage")
     */
    public function voyage()
    {
        $json = file_get_contents("../templates/Voyage1.json");
        $voyages = json_decode($json, true);
        $arr = [];
        foreach($voyages as $arrival){
            $arr[] = $arrival['arrival'];
        }
        if($arr === array_unique($arr)){
        return new Response( 
            $this->render('voyage.html.twig', ['voyages' => $voyages]));
        }
        else{
            return new Response( 
            $this->render('no-voyage.html.twig'));
        }
    }
    
}