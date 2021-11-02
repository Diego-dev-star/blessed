<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')
<body>
@include('layout.elements.preloader')
@include('layout.elements.header')
@include('layout.elements.breadcrumbs')

<div class="comon_section" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
                <div class="row">
                    <ul class="work_nav_4 shaf_filter text-center" style="text-align: left">
                        <li class="active" data-group="all"><span>All</span></li>
                        @foreach($JobCategories as $filter)
                            <li data-group="{{$filter->category}}"><span>{{$filter->category}}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="all_folio_items row shafull_container">
                        @foreach($model as $JobPost)
                            <div class="blog_item shaf_item" data-groups='["all", "{{$JobPost->category}}"]'>

                                <div class="bi_thumb col-lg-4">
                                    <img src='{{asset('storage/'.$JobPost->image)}}' alt="{{$JobPost->slug}}"/>
                                </div>
                                <div class="col-lg-8">
                                    <div class="bi_details">
                                        <div class="bi_meta">
                                            {{date("d", strtotime($JobPost->created_at))}}
                                            <sup>th</sup>
                                            {{date("M Y", strtotime($JobPost->created_at))}}
                                            <a href="#" class="bi_cat"><i
                                                        class="pe-7s-tools"></i>{{$JobPost->category}}</a> |
                                            <a href="#" class="bi_cat"><i
                                                        class="pe-7s-wallet"></i>{{$JobPost->salary.'/Zl в час'}}
                                            </a> |
                                            <a href="#" class="bi_cat"><i
                                                        class="pe-7s-map-marker"></i> {{$JobPost->city}}
                                            </a>
                                        </div>
                                        <h3><a href="{{route('job.show',['id' => $JobPost->id, 'slug' => $JobPost->slug])}}">{{$JobPost->title}}</a></h3>
                                        <div class="bi_content">
                                            {{$JobPost->ShortDescription}}
                                        </div>
                                        <a href="{{route('job.show',['id' => $JobPost->id, 'slug' => $JobPost->slug])}}" class="ast_learnmore_2">{{__('Подробнее')}}<i
                                                    class="astral-noun_Arrow_1896673"></i></a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
            @include('layout.elements.WidgetCollum')

            <div class="row">
                <div class="col-lg-12">
                    <div class="ast_pagination">
                        {{$model->links('paginate')}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



@include('layout.footer')
@extends('layout.elements.script')
</body>
</html>