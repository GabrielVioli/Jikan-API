<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
/**
 * Class JikanApiService.
 */
class JikanApiService
{

    #url = https://api.jikan.moe/v4

   protected string $baseUrl;

   public function __construct() {
        $this->baseUrl = config("services.jikan_api.url");
   }


   public function findAnimeByName($name) {
        $response = Http::get("{$this->baseUrl}/anime/", [
            'q' => $name
        ]);
        return $response->json();
   }

   public function findAnimeById($id) {
       $response = Http::get("{$this->baseUrl}/anime/{$id}");

       return $response->json();
   }



   public function showImageAnime($id) {
       $response = Http::get("{$this->baseUrl}/anime/{$id}/pictures");
       return $response->json();
   }

}
