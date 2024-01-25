@props(['allTags'])

@php
    $tags = explode(',', $allTags);
@endphp

@foreach ($tags as $tag)
    <li {{ $attributes->merge(['class' => 'bg-black text-white rounded-xl px-3 py-1 mr-2 text-xs hover:bg-laravel']) }}>
        <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
@endforeach
