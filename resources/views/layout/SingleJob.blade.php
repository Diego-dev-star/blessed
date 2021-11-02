<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')
<body>
@include('layout.elements.preloader')
@include('layout.elements.header')
@include('layout.elements.breadcrumbs')
<section class="comon_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-7 col-md-8">
                <div class="ws_thumb">
                    <img src="{{asset('storage/'.$jobpost->image)}}" alt=""/>
                </div>
                <div class="ws_challanges text-left">
                    <h4 class="sec_sub_title">{{$jobpost->getTranslatedAttribute('meta_keywords')}}</h4>
                    <p class="ast_lead">
                       {!! $jobpost->getTranslatedAttribute('descriptiobn') !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5 col-md-4">
                <div class="ws_head">
                    <h2>{{$jobpost->getTranslatedAttribute('title')}}</h2>
                    <div class="ws_sdesc">
                        <p>
                           {!! $jobpost->getTranslatedAttribute('ShortDescription') !!}
                        </p>
                    </div>
                </div>
                <div class="ws_widget">
                    <h5>@lang('lang.date')</h5>
                    <p>
                        {!! $jobpost->updated_at!!}
                    </p>
                </div>
                <div class="ws_widget">
                    <h5>@lang('lang.ofcat')</h5>
                    <p class="cates">
                        <a href="#">{{$jobpost->getTranslatedAttribute('category')}}</a>
                    </p>
                </div>
                <div class="row mt40">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="text_box_1 text-center">
                            <i class="astral-noun_web-design_1453269"></i>
                            <h5>@lang('lang.salary')</h5>
                            <p>
                                {{$jobpost->salary}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="text_box_1 text-center">
                            <i class="astral-noun_Social_2061528"></i>
                            <h5>@lang('lang.city')</h5>
                            <p>
                                {{$jobpost->city}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="text_box_1 text-center">
                            <i class="astral-noun_website_1888257"></i>
                            <h5>@lang('lang.jobtype')</h5>
                            <p>
                                {{$jobpost->category}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ws_widget">
                    <a href="tel:{{$recrut}}" class="ast_btn"><span>@lang('lang.call')<i class="arrowicon-arrows-2"></i></span></a>
                </div>


            </div>
        </div>
    </div>
</section>


@include('layout.footer')
@extends('layout.elements.script')

</body>