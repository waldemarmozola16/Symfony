<?php
/**
 * Created by PhpStorm.
 * User: waldemar
 * Date: 03/01/19
 * Time: 02:03
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooo!');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {

        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohooo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakisomebacon.com',
            ];





        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);

    }
}