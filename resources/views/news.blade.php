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
                    @foreach($posts as $post)
                        @if($post->status == 'PUBLISHED')
                            <div class="col-lg-12 col-sm-12">
                                <div class="blog_item">
                                    @if($post == null)
                                        <div class="bi_thumb">
                                            <img src="{{asset('storage/'.$post->image)}}" alt=""/>
                                        </div>
                                    @else
                                        <div class="bi_thumb">
                                            <img src="{{asset('storage/'.$post->image)}}" alt=""/>
                                        </div>
                                    @endif
                                    <div class="bi_details">
                                        <div class="bi_meta">
                                            <a href="#" class="bi_date">{{date("d", strtotime($post->created_at))}}
                                                <sup>th</sup>{{date("M Y", strtotime($post->created_at))}}</a>
                                            <a href="#" class="bi_cat">{{$post->category->name}}</a>
                                        </div>
                                        <h3><a href="#">{{$post->getTranslatedAttribute('title')}}</a></h3>
                                        <div class="bi_content">
                                            <p>
                                                {{$post->getTranslatedAttribute('excerpt')}}
                                            </p>
                                        </div>
                                        <a href="{{route('news.show',['id' => $post->id, 'slug' => $post->slug])}}"
                                           class="ast_learnmore_2">@lang('lang.readmore')<i
                                                    class="astral-noun_Arrow_1896673"></i></a>
                                    </div>
                                </div>
                            </div>
                            @php $key= 1 @endphp
                            @foreach($posts as $key => $subitem)
                                @if($subitem->category_id == $post->category_id )
                                @if($key >= 2)
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="blog_item bi_half">
                                            <div class="bi_thumb">
                                                <img src="{{asset('storage/'.$subitem->image)}}" alt=""/>
                                            </div>
                                            <div class="bi_details">
                                                <div class="bi_meta">
                                                    <a href="#"
                                                       class="bi_date">{{date("d", strtotime($subitem->created_at))}}
                                                        <sup>th</sup>{{date("M Y", strtotime($subitem->created_at))}}
                                                    </a>
                                                    <a href="#" class="bi_cat">{{$subitem->category->name}}</a>
                                                </div>
                                                <h3><a href="{{'news/'. $post->id}}">{{$subitem->getTranslatedAttribute('title')}}</a></h3>
                                                <div class="bi_content">
                                                    <p>
                                                        {!! $subitem->getTranslatedAttribute('excerpt') !!}
                                                    </p>
                                                </div>
                                                <a href="{{route('news.show',['id' => $post->id, 'slug' => $post->slug])}}"
                                                   class="ast_learnmore_2">@lang('lang.readmore')<i
                                                            class="astral-noun_Arrow_1896673"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @endif
                            @endforeach

                        @endif
                    @endforeach


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ast_pagination">
                                {{$posts->links('paginate')}}

                            </div>
                        </div>
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
