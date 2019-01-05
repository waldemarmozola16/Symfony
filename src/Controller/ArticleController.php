<?php
/**
 * Created by PhpStorm.
 * User: waldemar
 * Date: 03/01/19
 * Time: 02:03
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf('Future page to show the article: %s',
            $slug
        ));

    }
}