<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($pages as $page)
        <url>
            @if($subdomain != null)
                <loc>{{ route($page, ['subdomain' => $subdomain]) }}</loc>
            @else
                <loc>{{ route($page) }}</loc>
            @endif

            <lastmod>2026-3-2T10:05:30+03:00</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach

</urlset>
