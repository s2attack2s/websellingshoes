@extends('welcome')

@section('title', 'Bán hàng')

@section('css')
<link rel="stylesheet" href="/css/home/slider.css" type="text/css" media="all" />
@stop

@section('scripts')
<script src="/js/home/slider.js" type="text/javascript"></script>
@stop

@section('body')
<section id="home" class="home">
    @include('Home.Slider')
</section>
@stop