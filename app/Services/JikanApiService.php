<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Stichoza\GoogleTranslate\GoogleTranslate;

class JikanApiService
{
    protected string $baseUrl;

    public function __construct() {
        $this->baseUrl = config("services.jikan_api.url");
    }

    public function findAnimeByName($name) {
        return Cache::remember("anime_search_{$name}", 86400, function() use ($name) {
             $response = Http::withoutVerifying()
            ->get("{$this->baseUrl}/anime/", [
                'q' => $name
            ]);

            return $response->json();
        });
       
    }

    public function findAnimeById($id) {
        return Cache::remember("anime_id_{$id}", 86400, function() use ($id) {
            $response = Http::withoutVerifying()
            ->get("{$this->baseUrl}/anime/{$id}");
            return $response->json();
        });
  
    }

    public function showImageAnime($id) {
        return Cache::remember("anime_image_{$id}", 86400, function() use ($id) {
            $response = Http::withoutVerifying()
            ->get("{$this->baseUrl}/anime/{$id}/pictures");
            return $response->json();
        });

    }

    public function getDescriptionByName($name) {
        return Cache::remember("anime_description_pt_{$name}", 86400, function () use ($name) {
            $anime = $this->findAnimeByName($name);
            $description = $anime['data'][0]['synopsis']; 
            
            $tr = new GoogleTranslate('pt');

            $tr->setOptions(['verify' => false]);

            return $tr->translate($description);
        });
    }


    public function getQntdEpisodes($name) {
        $anime = $this->findAnimeByName($name);
        $episodes = $anime['data'][0]['episodes'];

        return $episodes;
    }

    public function getAnimeName($name) {
        $anime = $this->findAnimeByName($name);
        $title =  $anime['data'][0]['title'];

        return $title;

    }
}