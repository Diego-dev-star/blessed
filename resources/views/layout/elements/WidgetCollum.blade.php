<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 30.11.2020
 * Time: 10:05
 */ ?>
<div class="col-lg-4 col-sm-6 col-md-4 sidebar">
    <aside class="widget">
    <livewire:search>
    </aside>
    <aside class="widget categories_list">
        <h3 class="widget_title">@lang('lang.categories')</h3>
        <ul>
           @foreach($categories as $key => $category)
               @if($key <= 3)
               <li><a href="{{Url( app()->getLocale()). '/categories/' .$category->id}}">{{$category->getTranslatedAttribute('name')}}</a></li>

                @endif
           @endforeach

               <div class="tabclouds clearfix">
                   <a href="{{Url( app()->getLocale() . '/categories')}}">@lang('lang.allcategories')</a>
               </div>

        </ul>
    </aside>
    <aside class="widget">
        <h3 class="widget_title">@lang('lang.social')</h3>
        <div class="wid_social">
            <a href="{{setting('site.fb')}}"><i class="fa fa-facebook"></i></a>
            <a href="{{setting('site.ig')}}"><i class="fa fa-instagram"></i></a>
        </div>
    </aside>
    <aside class="widget">
        <h3 class="widget_title">@lang('lang.recomend')</h3>
        <div class="rc_posts">
            @foreach($newsblock as $key => $item)
                @if($item->featured == 1)
                    <div class="src_post">
                        <img src="{!!asset('storage/'.$item->image)!!}" alt="">
                        <span>{{date("d M Y ", strtotime($item->created_at))}}</span>
                        <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}">{{$item->meta_description}}</a>
                    </div>
                @endif
            @endforeach
        </div>
    </aside>
</div>
