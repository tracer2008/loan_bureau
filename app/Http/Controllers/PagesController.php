<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\City;

class PagesController extends Controller
{
    public function index($subdomain = null): View
    {
        $city = City::where('slug', $subdomain)->first() ?? null;

        $cities = City::all();

        $article = null;

        if ($city != null) {
            $article = $city->html;
        }

        return view('app/pages/index', with(['article' => $article, 'cities' => $cities, 'subdomain' => $subdomain]));
    }
}
