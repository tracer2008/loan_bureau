<?php

namespace App\Services\City;

use App\Models\City;
use App\Repositories\City\CityRepository;
use PhpParser\Node\Expr\Cast\Void_;
use Illuminate\Support\Facades\Storage;

class CityService
{

    public function __construct(protected CityRepository $cityRepository)
    {

    }

    public function saveCity($city): void
    {
        $this->cityRepository->saveCity($city);
    }
}
