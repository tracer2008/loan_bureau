<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap($subdomain = null)
    {
        if ($subdomain != null) {
            $pages = [
                'subdomain.index'
            ];
        } else {
            $pages = [
                'index'
            ];
        }

        return response(view('sitemap', compact('pages', 'subdomain')))
            ->header('Content-Type', 'text/xml');
    }

    public function robots($subdomain = null)
    {
        return response(view('robots', compact('subdomain')))
            ->header('Content-Type', 'text/plain');
    }
}
