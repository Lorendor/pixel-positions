@props(['tag','size'=>'base'])

@php
    $classes="bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300 inline-flex items-center";

    if ($size ==='base'){
        $classes .= " px-6 py-1 text-sm";
    }
    if ($size ==='small'){
        $classes .= " px-2 py-1 text-xs";
    }
@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
