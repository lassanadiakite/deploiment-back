<?php

namespace App\Controller;

use App\Entity\Todos;
use App\Form\TodoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class TodoController extends AbstractController
{
    /**
     * @Route("/", name="todo")
     */
    public function index()
    {
        return $this->render('todo/index.html.twig', []);
    }
    
}

/*
public function new(Request $request)
    {
        $todo = new Todos();
        $form = $this->createForm(TodoType::class, $todo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($todo);
            $entityManager->flush();

            return $this->json([
                'message' => 'Bien enregistrer !',
                'path' => 'src/Controller/TodoController.php',
            ]);
        }

    return $this->json([
        'message' => 'Pas bien enregistrer !',
        'path' => 'src/Controller/TodoController.php',
       //'user' => $todo,
        //'form' => $form->createView(),
        ]);
    }*/
    
    