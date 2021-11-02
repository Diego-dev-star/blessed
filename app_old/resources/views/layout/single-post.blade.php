<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')
<body>
@include('layout.elements.preloader')
@include('layout.elements.header')
@include('layout.elements.breadcrumbs')
<section class="comon_section news_details_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
                <div class="blog_details_content">
                    <div class="bdc_thumb">
                        <img src="{{asset('storage/'.$post->image)}}" alt=""/>
                    </div>
                    <div class="bi_meta">
                        <a href="#" class="bi_date">{{date("d", strtotime($post->created_at))}}
                            <sup>th</sup>{{date("M Y", strtotime($post->created_at))}}</a>
                        <a href="#" class="bi_cat">{{$post->category->name}}</a>
                    </div>
                    <div class="bdc_head">
                        <h2>{{$post->getTranslatedAttribute('title')}}</h2>
                    </div>
                    <div class="bdc_content">
                        {!! $post->getTranslatedAttribute('body') !!}
                    </div>
                </div>



                @include('layout.elements.DisqusComment')
            </div>
            @include('layout.elements.WidgetCollum')

        </div>

    </div>

</section>
<section class="comon_section relatedPostSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h5 class="sec_sub_title">{{__('Рекомендуем прочитать')}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bpRelateSlide owl-carousel">
                    @foreach($newsblock as $key => $item)
                        @if($item->featured == 1)
                            <div class="blog_loop_5">
                                <img src="{{asset('storage/'.$item->image)}}" style="height: 400px; " alt=""/>
                                <div class="bl5_content text-center">
                                    <h3>
                                        <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}">{{$item->getTranslatedAttribute('title')}}</a>
                                    </h3>
                                    <span></span>
                                    <div class="bl5_cats">
                                        <a href="#">{{$item->category->name}}</a>
                                    </div>
                                    <div class="bl5_auth">
                                        <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}"><img src="{{asset('storage/'. $item->author->avatar )}}" alt=""/></a>
                                    </div>
                                    <div class="bl5_footer clearfix">
                                        <a href="#" class="pull-left"><i
                                                    class="la la-calendar"></i>{{date("d M Y", strtotime($item->created_at))}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        </div>
</section>

@include('layout.footer')
@extends('layout.elements.script')

</body>