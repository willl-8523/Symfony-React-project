<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index(): Response
    {
        return $this->render('default/default.html.twig');
    }

    /**
     * @Route("/api/users", name="users", methods="GET"))
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUsers(UsersRepository $usersRepository/*, NormalizerInterface $normalizerInterface SerializerInterface $serializerInterface */)
    {
        // tableau de 4 entité user
        $users = $usersRepository->findAll();
        // dd($users); => 

/*
        // transforme le tableau de 4 entité user tableau de 4 tableaux users
        $usersNormalize = $normalizerInterface->normalize($users);
        // dd($usersNormalize);

        // transforme le tableau de 4 tableaux users en objet json
        $json = json_encode($usersNormalize);
        // dd($json);

        $response = new Response($json, 200, [
            "Content-Type" => "application/json"
        ]);
        // dd($response);
*/

/*      
        AUTRE METHODE AVEC SerializerInterface
        $json = $serializerInterface->serialize($users, 'json');
        // dd($json);

        $response = new JsonResponse($json, 200, [], true);
        dd($response);
*/

        $response = $this->json($users, 200, []);

        return $response;
    }
}
