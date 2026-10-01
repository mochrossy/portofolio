<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ config('app.name') }} — Blog</title>
        <link>{{ route('blog.index') }}</link>
        <description>Blog pribadi berisi tutorial, catatan teknis, dan pengalaman.</description>
        <language>id-ID</language>
        <atom:link href="{{ route('feed') }}" rel="self" type="application/rss+xml" />

        @foreach($posts as $post)
            <item>
                <title>{{ $post->title }}</title>
                <link>{{ route('blog.show', $post) }}</link>
                <guid isPermaLink="true">{{ route('blog.show', $post) }}</guid>
                <pubDate>{{ $post->published_at?->toRfc2822String() }}</pubDate>
                <description><![CDATA[{{ $post->excerpt }}]]></description>
                @if($post->category)
                    <category>{{ $post->category }}</category>
                @endif
            </item>
        @endforeach
    </channel>
</rss>