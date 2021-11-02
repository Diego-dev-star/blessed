<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')

<body>
@include('layout.elements.preloader')
<a id="open-overlay-nav" href="javascript: void(0);" class="menu_btn_7 hamburger"><span></span><span></span><span></span></a>
<div class="popup popup__menu">
    <a href="#" id="close-popup" class="close-popup"></a>
    <div class="container mobileContainer">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="logo2">
                    <a href="#"><img src="{{asset('storage/'.setting('site.logo'))}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-inner">
                    <div class="dl-menu__wrap dl-menuwrapper">
                        <ul class="dl-menu dl-menuopen">
                            {{menu('mainMenu', 'layout.nav')}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                <ul class="footer__contacts text-left">
                    <li>{{__('Phone')}} : {{setting('site.phone')}}</li>
                    <li>{{__('Email')}} : {{setting('site.email')}}</li>
                    <li>{{__('Address')}} : {{setting('site.city')}}</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                <div class="popUp_social text-right">
                    <a href="{{setting('site.fb')}}"><i class="fa fa-facebook"></i>Facebook</a>
                    <a href="{{setting('site.ig')}}"><i class="fa fa-instagram"></i>Instagram</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner_7" id="home">

    <div class="vmiddle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 noPadding">
                    <div class="work_loop_slider_3 owl-carousel">
                        @foreach($categories as $cat)
                        <div class="work_loop_9">
                            <img src="{{asset('storage/'. $cat->img)}}" alt="{{$cat->slug}}"/>
                            <a href="{{Url( app()->getLocale()). '/categories/' .$cat->id}}" class="wl9_pops"></a>
                            <div class="wl9_con">
                                <a href="{{Url( app()->getLocale()). '/categories/' .$cat->id}}"><h2 class ="white">{{$cat->name}}</h2></a>
                            </div>
                        </div>
                            @endforeach

                        </div>
                    </div>
                <a class="scrollDown home" href="{{Url( app()->getLocale() . '/')}}"><i class="la la-home"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layout.elements.script')
</body>