<?php

namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question/{question}", name="question")
     */
    public function question($question)
    {
        return $this->render('question/index.html.twig', [
            'question' => $question
        ]);
    }
}
