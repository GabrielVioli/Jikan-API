<?php

namespace App\Http\Controllers;

use App\Services\JikanApiService; 

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, JikanApiService $apiService)
    {
        $anime = $apiService->findAnimeById($id);

        return $anime;
    }

    public function showForm() {
        return view('index'); 
    }

    public function search(Request $request,  JikanApiService $apiService) {
        $animeName = $request->input('name');

        $apiResponse = $apiService->findAnimeByName($animeName);

        return $apiResponse;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
