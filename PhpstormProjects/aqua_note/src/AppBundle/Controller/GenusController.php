<?php
/**
 * Created by PhpStorm.
 * User: moeshaw
 * Date: 29/07/16
 * Time: 4:23 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class  GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
        public function showAction($genusName)
        {
            $notes= ["this is a very confusing piece of work",
                "ireally dont have clue of htia",
                "like seriouobjhon",
            ];

            $templating = $this->container->get("templating");
            $html = $templating->render("genus/show.html.twig",
                [
                    "name" => $genusName,
                     "notes" => $notes,
                ]);
            return new Response($html);
        }

}