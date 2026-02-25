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
        $this->baseUrl = config('services.jikan_api.url');
   }


   public function findAnimeById($id) {
        $response = Http::withoutVerifying()->get("{$this->baseUrl}/anime/{$id}");

        return $response->json();
   }

}
