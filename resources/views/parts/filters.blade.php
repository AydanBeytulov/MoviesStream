<div id="video-search-header">
    <div id="search-icon-more"></div>
    <input type="text" placeholder="Search for movies by name, genre ... " aria-label="Search">
    <div id="video-search-header-filtering">
        <form id="video-search-header-filtering-padding">
            <div class="row">
                <div class="col-sm extra-padding">
                    <h5>Type:</h5>

                    <div class="row">
                        <div class="col-sm">
                            <label class="checkbox-pro-container">Movies
                                <input type="checkbox" checked="checked" id="movies-type">
                                <span class="checkmark-pro"></span>
                            </label>
                        </div><!-- close .col -->
                    </div><!-- close .row -->

                    <div class="dotted-dividers-pro"></div>
                </div><!-- close .col -->
                <div class="col-sm extra-padding">
                    <h5>Genres:</h5>
                    <select class="custom-select">
                        <option selected>All Genres</option>
                        @foreach ($Categories as $Category)
                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                        @endforeach
                    </select>
                    <div class="dotted-dividers-pro"></div>
                </div><!-- close .col -->
               <div class="col-sm extra-padding extra-range-padding">
                    <h5>Average Rating:</h5>
                    <input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
                    <!-- JS is under /js/script.jss -->
                </div><!-- close .col -->
            </div><!-- close .row -->
            <div id="video-search-header-buttons">
                <a href="#!" class="btn btn-green-pro">Filter Search</a>
                <a href="#!" class="btn">Reset</a>
            </div><!-- close #video-search-header-buttons -->
        </form><!-- #video-search-header-filtering-padding -->
    </div><!-- close #video-search-header-filtering -->
</div><!-- close .video-search-header -->