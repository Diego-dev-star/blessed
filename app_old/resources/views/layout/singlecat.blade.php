<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')
<body>
@include('layout.elements.preloader')
@include('layout.elements.header')
@include('layout.elements.breadcrumbs')
<div class="comon_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        @foreach($catposts as $post)
                        <div class="blog_item">
                            <div class="bi_thumb">
                                <img src="{{asset('storage/'. $post->image)}}" alt=""/>
                            </div>
                            <h3><a href="#">{{$post->getTranslatedAttribute('title')}}</a></h3>
                            <div class="bi_content">
                                <p>
                                    {{$post->getTranslatedAttribute('excerpt')}}
                                </p>
                            </div>
                            <a href="{{route('news.show',['id' => $post->id, 'slug' => $post->slug])}}"
                               class="ast_learnmore_2">{{__('Продожить чтение')}}<i
                                        class="astral-noun_Arrow_1896673"></i></a>
                        </div>

                            @endforeach
                    </div>
                </div>
            </div>
            @include('layout.elements.WidgetCollum')
        </div>
    </div>
    </div>



@include('layout.footer')
@extends('layout.elements.script')

</body>
</html>