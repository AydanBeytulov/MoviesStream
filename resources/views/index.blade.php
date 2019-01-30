@extends('layouts.app')

@section('content')

    <main id="col-main">

        <div class="flexslider progression-studios-dashboard-slider">
            <ul class="slides">
                <li class="progression_studios_animate_left">
                    <div class="progression-studios-slider-dashboard-image-background" style="background-image:url('{{ showImage($FirstMovieWallpaper) }}');">
                        <div class="progression-studios-slider-display-table">
                            <div class="progression-studios-slider-vertical-align">

                                <div class="container">

                                    <a class="progression-studios-slider-play-btn " href="{{ route("viewMovie", $FirstMovie->id ) }}"><i class="fas fa-play"></i></a>

                                    <video id="trailer_player" poster="https://img.youtube.com/vi/{{ $FirstMovie->youtube_trailer }}/maxresdefault.jpg" data-youtube-id="{{ $FirstMovie->youtube_trailer }}" width="960" height="540">

                                    </video>

                                    <div
                                            class="circle-rating-pro"
                                            data-value="0.86"
                                            data-animation-start-value="0.86"
                                            data-size="70"
                                            data-thickness="6"
                                            data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
                                            data-empty-fill="#def6de"
                                            data-reverse="true"
                                    ><span style="color:#42b740;">8.6</span></div>

                                    <div class="progression-studios-slider-dashboard-caption-width">
                                        <div class="progression-studios-slider-caption-align">
                                            <h6 class="">Movie of the day</h6>
                                            <ul class="progression-studios-slider-rating">
                                                @foreach ($FirstMovie->categories as $category)
                                                    <li>{{ $category->name }}</li>
                                                @endforeach
                                            </ul>
                                            <h2 class=""><a href="{{ route("viewMovie", $FirstMovie->id ) }}">{{ $FirstMovie->name }}</a></h2>
                                            <ul class="progression-studios-slider-meta">
                                                <li>{{ $FirstMovie->release_date }}</li>
                                                <li>{{ $FirstMovie->length }} min.</li>
                                            </ul>
                                            <p class="progression-studios-slider-description">{{ $FirstMovie->storyline }}</p>

                                            <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="#trailer_player"><i class="fas fa-play"></i>See trailer</a>

<!--
                                            <div class="progression-studios-slider-more-options">
                                                <i class="fas fa-ellipsis-h"></i>
                                                <ul>
                                                    <li><a href="#!">Add to Favorites</a></li>
                                                    <li><a href="#!">Add to Watchlist</a></li>
                                                    <li><a href="#!">Add to Playlist</a></li>
                                                    <li><a href="#!">Share...</a></li>
                                                    <li><a href="#!">Write A Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>

                                            <h5>Starring</h5>
                                            <ul class="progression-studios-staring-slider">
                                                <li><a href="#!"><img src="/images/demo/user-1.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="/images/demo/user-2.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="/images/demo/user-3.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="/images/demo/user-4.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="/images/demo/user-5.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="/images/demo/user-6.jpg" alt="Starring"></a></li>
                                            </ul>
-->
                                        </div><!-- close .progression-studios-slider-caption-align -->
                                    </div><!-- close .progression-studios-slider-caption-width -->

                                </div><!-- close .container -->

                            </div><!-- close .progression-studios-slider-vertical-align -->
                        </div><!-- close .progression-studios-slider-display-table -->

                        <div class="progression-studios-slider-mobile-background-cover"></div>
                    </div><!-- close .progression-studios-slider-image-background -->
                </li>
            </ul>
        </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

        @include('parts.categories')

        <div class="clearfix"></div>

        <div class="dashboard-container">


            <h4 class="heading-extra-margin-bottom">Top movies</h4>

            <movies-pagination></movies-pagination>

        </div><!-- close .dashboard-container -->
    </main>

@endsection
