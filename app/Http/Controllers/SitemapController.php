<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $pages = [
            'index'
        ];

        return response(view('sitemap', compact('pages')))
            ->header('Content-Type', 'text/xml');
    }
}
