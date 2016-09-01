<?php

namespace AppBundle\Controller;

use AppBundle\entity\form;
use AppBundle\entity\dBconnection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class formController extends Controller
{
    /**
     * @Route("/form")
     * @Method({"GET"})
     *
     */
    public function newAction()
    {
        return $this->render('form/new.html.twig',
            array(

                "question1" => " First Name",
                "question2" => "Last Name",
                "question3" => " Location of work",
                "question4" => " What is your favorite catergory of music?",
                "question5" => " How many animals do you have?",
                "question6" => " What is your favorite color?",
                "question7" => " What is your favorite book?",

            )
        );

    }

    /**
     * @Route ("/form")
     * @Method({"post"})
     */
    Public function postForm()
    {
        $k= new dBconnection();
        $j= $k->Code();
        echo 'Hello ' . htmlspecialchars($_POST["fname"]) . '!';
        die;
    }
}
