@extends('layouts.home-container')

@section('header')
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" @click="toggleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-header" >
            <div class="navbar-nav">
                <a class="nav-link" href="#" >CHARACTES</a>
                <a class="nav-link" href="#">COMICS</a>
                <a class="nav-link active" href="#">MOVIES</a>
                <a class="nav-link" href="#">TV</a>
                <a class="nav-link" href="#">GAMES</a>
                <a class="nav-link" href="#">COLLECTIBLES</a>
                <a class="nav-link" href="#">VIDEOS</a>
                <a class="nav-link" href="#">FANS</a>
                <a class="nav-link" href="#">NEWS</a>
                <a class="nav-link" href="#">SHOP</a>
                

            </div>
        </div>
    </div>
</nav>
@endsection

@section('main')
<div class="jumbotron">

</div>

<div class=" p-5  my-section d-flex flex-column align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center">
        <div class="container row d-flex ">
            @foreach ($comics as $comic)
            <div class="col-2 ">
                <div class="comics-container mt-2">
                    <img src="{{ $comic['thumb'] }}" class="comics-img">
                </div>
                <div class="text-white pt-4">{{ strtoupper($comic['series']) }}</div>
            </div>
            @endforeach
            </div>

        </div>
        <button class="btn btn-primary mx-auto">LOAD MORE</button>
    </div>
</div>

<section>
    <div class="container-icon">
        @foreach ($icons as $icon)
        <div class="icon-card">
            <img src="{{ Vite::asset($icon['img']) }}">
            <span class="icon-text">{{ strtoupper($icon['link']) }}</span>
        </div>
        @endforeach
    </div>
</section>

<section class="link-section">
    <div class="link-container">
        <nav >
            @foreach ($links as $link)
            <ul>
                @foreach ($link as $link2)
                    <li><a href="#">{{ $link2 }}</a></li>
                @endforeach
            </ul>
        @endforeach
        </nav>
    </div>
</section>
@endsection

@section('footer')
bub
@endsection