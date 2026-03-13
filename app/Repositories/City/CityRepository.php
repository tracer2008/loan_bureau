<?php

namespace App\Repositories\City;


use App\Models\City;

class CityRepository implements CityInterface
{
    public function saveCity($city): void
    {
        $cityModel = new City($city);

        $cityModel->save();
    }
}
