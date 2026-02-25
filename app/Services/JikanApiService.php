<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
/**
 * Class JikanApiService.
 */
class JikanApiService
{
   protected string $baseUrl;

   public function __construct() {
        $this->baseUrl = config('services.jikan_api');
   }

   
}
