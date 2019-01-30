@extends('layouts.app')

@section('content')

    <main id="col-main">

        @include('parts.categories')

        <div class="clearfix"></div>

        <div class="dashboard-container">


            <h4 class="heading-extra-margin-bottom">Search movies</h4>

            <div class="row">
                @foreach ($Movies as $movie)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="item-listing-container-skrn">
                        <a href="{{ route("viewMovie", $movie->id ) }}"><img src="{{ showImage($movie->picture) }}" alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6><a href="{{ route("viewMovie", $movie->id ) }}">{{ $movie->name }}</a></h6>
                                <div
                                        class="circle-rating-pro"
                                        data-value="0.86"
                                        data-animation-start-value="0.86"
                                        data-size="32"
                                        data-thickness="3"
                                        data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                        data-empty-fill="#def6de"
                                        data-reverse="true"
                                ><span style="color:#42b740;">8.6</span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
                @endforeach
            </div><!-- close .row -->

            @if ($Movies->lastPage() > 1)
            <ul class="page-numbers">

                <li>
                    <a href="{{ $Movies->previousPageUrl() }}" class="previous page-numbers">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>

                @for ($i = 1; $i <= $Movies->lastPage(); $i++)
                    <li>
                        @if ($Movies->currentPage() == $i)
                            <span class="page-numbers current">{{ $i }}</span>
                        @else
                            <a href="{{ $Movies->url($i) }}" class="page-numbers" >{{ $i }}</a>
                        @endif
                    </li>
                @endfor

                <li>
                    <a href="{{ $Movies->nextPageUrl() }}" class="next page-numbers" >
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>

            </ul>
            @endif
        </div><!-- close .dashboard-container -->
    </main>

@endsection
