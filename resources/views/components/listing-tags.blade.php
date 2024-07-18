@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex flex-wrap">
    @foreach($tags as $tag)
        <li class="flex items-center justify-center bg-pinkish_purple text-white rounded-full py-2 px-4 mb-2 mr-2 text-sm hover:bg-turquoise transition duration-300">
            <a href="joblist/?tag={{$tag}}" class="">{{$tag}}</a>
        </li>
    @endforeach
</ul>
