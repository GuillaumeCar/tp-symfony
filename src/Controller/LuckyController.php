<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky_number", name="app_lucky_number")
     */
    public function number(Request $request): Response
    {
        $number = random_int(0, 100);

        $name = $request->query->get('name');

        echo 'name : ' . $name;

//        $user = [
//            'name' => 'John Doe',
//            'place' => 'Lens',
//        ];
//
//        dump($user);

        return new Response(
            "<html><body><p>Lucky number: $number</p></body></html>"
        );
    }
}