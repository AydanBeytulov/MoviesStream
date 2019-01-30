@extends('layouts.app')

@section('js')
    <script src="{{ asset('js/viewMovie.js') }}"></script>
@endsection

@section('content')

    <div id="content-sidebar-pro">

        <div id="content-sidebar-image">
            <img src="{{ showImage($movieData->picture) }}" alt="Movie Poster">
        </div>

        <div class="content-sidebar-section">
            <h2 class="content-sidebar-sub-header">{{ $movieData->name }}</h2>
            <ul class="progression-studios-slider-rating">

                @foreach ($movieData->categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach

            </ul>
        </div><!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
            <h4 class="content-sidebar-sub-header">Release Date</h4>
            <div class="content-sidebar-short-description">{{ $movieData->release_date }}</div>
        </div><!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
            <h4 class="content-sidebar-sub-header">Length</h4>
            <div class="content-sidebar-short-description">{{ $movieData->length }} min.</div>
        </div><!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
            <h4 class="content-sidebar-sub-header">Director</h4>
            <div class="content-sidebar-short-description">{{ $movieData->director }}  </div>
        </div><!-- close .content-sidebar-section -->




    </div><!-- close #content-sidebar-pro -->



    <main id="col-main-with-sidebar">

        <div id="movie-detail-header-pro" style="background-image:url('{{ showImage($movieData->wallpaper) }}')">
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
-->
            <a class="movie-detail-header-play-btn afterglow" href="#video_player"><i class="fas fa-play"></i></a>

            <video id="video_player" style="display: none;" poster="{{ showImage($movieData->wallpaper) }}" data-torrent-id="{{ $movieData->torrent->torrent_id }}" data-torrent-name="{{ $movieData->torrent->torrent_file_name }}" width="960" height="540">

            </video>

            <video id="trailer_video" width="960" height="540" data-youtube-id="{{ $movieData->youtube_trailer }}"></video>

            <div id="movie-detail-header-media">
                <div class="dashboard-container">
                    <h5>Media</h5>
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-4">

                            <a class="movie-detail-media-link afterglow" href="#trailer_video">
                                <div class="movie-detail-media-image">
                                    <img src="https://img.youtube.com/vi/{{ $movieData->youtube_trailer }}/maxresdefault.jpg">
                                    <span><i class="fas fa-play"></i></span>
                                    <h6>Trailer</h6>
                                </div>
                            </a>
                        </div>
<!--

                            <div class="col-6 col-md-4 col-lg-4">
                                <a class="movie-detail-media-link" href="/" id="watch">
                                    <div class="movie-detail-media-image">
                                        <img src="http://via.placeholder.com/500x300">
                                        <span><i class="fas fa-play"></i></span>
                                        <h6>name</h6>
                                    </div>
                                </a>
                            </div>

-->
                    </div><!-- close .row -->
                </div><!-- close .dashboard-container -->
            </div><!-- close #movie-detail-header-media -->

            <div id="movie-detail-gradient-pro"></div>
        </div><!-- close #movie-detail-header-pro -->


        <div id="movie-detail-rating">
            <div class="dashboard-container">
                <div class="row">
                    <div class="col-sm">
                        <h5>Rate True Blood</h5>

                        <div class="rating-pro">
                            <label>
                                <input type="radio" name="rating-pro" value="10" title="10 stars"> 10
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="9" title="9 stars"> 9
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="8" title="8 stars"> 8
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="7" title="7 stars"> 7
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="6" title="6 stars"> 6
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="5" title="5 stars"> 5
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="4" title="4 stars"> 4
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="3" title="3 stars"> 3
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="2" title="2 stars"> 2
                            </label>
                            <label>
                                <input type="radio" name="rating-pro" value="1" title="1 star"> 1
                            </label>
                        </div>

                    </div>
                    <div class="col-sm">
                        <h6>User Rating</h6>
                        <div
                                class="circle-rating-pro"
                                data-value="0.86"
                                data-animation-start-value="0.86"
                                data-size="40"
                                data-thickness="3"
                                data-fill="{
					          &quot;color&quot;: &quot;#42b740&quot;
					        }"
                                data-empty-fill="#def6de"
                                data-reverse="true"
                        ><span style="color:#42b740;">8.6</span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-sm">
                        <h6>IMDB Rating</h6>
                        <div
                                class="circle-rating-pro"
                                data-value="0.86"
                                data-animation-start-value="0.86"
                                data-size="40"
                                data-thickness="3"
                                data-fill="{
					          &quot;color&quot;: &quot;#42b740&quot;
					        }"
                                data-empty-fill="#def6de"
                                data-reverse="true"
                        ><span style="color:#42b740;">8.6</span></div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- close .row -->
            </div><!-- close .dashboard-container -->
        </div><!-- close #movie-detail-rating -->



        <div class="dashboard-container">


            <div class="movie-details-section">
                <h2>Storyline</h2>
                <p>{{ $movieData->storyline }}</p>
            </div><!-- close .movie-details-section -->


        </div><!-- close .dashboard-container -->
    </main>


@endsection
