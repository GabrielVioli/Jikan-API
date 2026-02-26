<?php

namespace App\Http\Controllers;

use App\Services\JikanApiService;
use Illuminate\Http\Request;

class AnimeController extends Controller
{

    public function showForm() {
        return view('index');
    }

    public function show(string $id, JikanApiService $apiService)
    {
        $anime = $apiService->findAnimeById($id);

        return $anime;
    }

    

    public function showImageAnime(Request $request ,JikanApiService $apiService) {
        $name = $request->input('name');
        $data = $apiService->findAnimeByName($name);

        $anime_id = $data['data'][0]['mal_id'];

        $imageAnime = $apiService->showImageAnime($anime_id);
        $url = $imageAnime['data'][0]['jpg']['image_url'];
        $description = $apiService->getDescriptionByName($name);

        return view('index', compact('url', 'description'));
    }

  

    public function searchId(Request $request, JikanApiService $apiService) {
        $animeId = $request->input('id');

        $apiResponse = $apiService->findAnimeById($animeId);
        return $apiResponse;
    }
}