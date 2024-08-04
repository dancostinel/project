<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class Test1Controller extends AbstractController
{
    #[Route(path: '/', name: 'test1_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return new JsonResponse(['test' => __METHOD__]);
    }
}
