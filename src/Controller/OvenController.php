<?php

namespace App\Controller;

use App\Entity\Pizza;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class OvenController
{
    /**
     * @Route("/")
     */
    public function cook(ValidatorInterface $validator)
    {
        $pizza = new Pizza();

        $validator->validate($pizza);

        return new Response('will not get here');
    }
}
