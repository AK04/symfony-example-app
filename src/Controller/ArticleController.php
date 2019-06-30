<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    Class ArticleController {

        /**
        * @Route("/")
        */
        public function index() {

            return new Response("<html> Hello </html>");

        }

    }