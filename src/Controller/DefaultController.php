<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    public function index(): JsonResponse
    {
        return new JsonResponse([
            [
                'id' => 1,
                'title' => 'test 1',
                'completed' => false,
            ],
            [
                'id' => 2,
                'title' => 'test 2',
                'completed' => false,
            ],
            [
                'id' => 3,
                'title' => 'test 3',
                'completed' => false,
            ],
            [
                'id' => 4,
                'title' => 'test 4',
                'completed' => false,
            ],
        ], 200, ['Access-Control-Allow-Origin' => '*']);
    }
}

