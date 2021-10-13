@extends('welcome')

@section('title', 'Bán hàng')

@section('css')
<link rel="stylesheet" href="/css/home/slider.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/home/home.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/home/category.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/home/listproducts.css" type="text/css" media="all" />
@stop

@section('scripts')
<script src="/js/home/slider.js" type="text/javascript"></script>
<script src="/js/home/listproduct.js" type="text/javascript"></script>
@stop

@section('body')
<section id="home" class="home">
    @include('Home.Slider')
    <div class="container home-container">

        @include('Home.ListProducts')
        <!-- section news -->
        <div class="home-news">
            <h3>Bài viết nổi bật</h3>
            <div class="home-new-content">
                <div class="home-news-left">
                    <a href="#">
                        <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                        <p class="title">Mẫu giày hot 2021</p>
                    </a>
                    <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                </div>
                <div class="home-news-right">
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                    <div class="home-news-right-content">
                        <div class="img-home-news">
                            <a href="#">
                                <img src="https://media3.scdn.vn/img4/2020/04_16/VBCAZaSMJSkzUPA6KyPM_simg_de2fe0_500x500_maxb.jpg" alt="tintuc">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <p class="title">Mẫu giày hot 2021</p>
                            </a>
                            <p class="content-news-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reprehenderit alias culpa sint nemo fugit animi illo minus repudiandae minima maiores aperiam harum natus consectetur ullam fugiat voluptatum, odit tenetur.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End section news -->
</section>
@stop