<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.elements.head')
<body>
@include('layout.elements.preloader')
@include('layout.elements.header')
@include ('home.slideshow')
@include ('home.about')
@include ('home.features')
@include ('home.counts')

@include('home.mainjob')
@include('home.subscribe')
@include('home.newsblock')
@include('home.words')
@include('home.contact')
@include('layout.footer')
@extends('layout.elements.script')

</body>
</html>
