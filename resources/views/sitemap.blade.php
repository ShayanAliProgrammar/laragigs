<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($listings[count($listings) - 1]->updated_at)) }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
    <url>
        <loc>{{ url('/login') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
    <url>
        <loc>{{ url('/register') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>

    <url>
        <loc>{{ url('/listings/manage') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>

    @forelse ($listings as $listing)
        <url>
            <loc>{{ url('listings/' . $listing->id) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($listing->updated_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.1</priority>
        </url>
        <url>
            <loc>{{ url('listings/' . $listing->id . '/edit') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($listing->updated_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.1</priority>
        </url>
    @empty
    @endforelse

</urlset>
