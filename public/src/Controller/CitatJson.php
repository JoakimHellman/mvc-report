<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use \Datetime;

class CitatJson
{
    #[Route("/api/quote")]
    public function jsonNumber(): Response
    {
        
        $data = Array("Ga inte over an efter vatten", "Det loser sig","Jag ser inte skogen for alla tran",);

        $quote = $data[array_rand($data)];

        $today = date("j, n, Y");

        $now = new DateTime();

        $timestamp = $now->getTimestamp();

        $all = [$quote, $today, $timestamp];
        
        $response = new JsonResponse($all);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }
}