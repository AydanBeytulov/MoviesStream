<ul class="dashboard-genres-pro">

    @foreach ($Categories as $category)
        {{-- class="active"--}}
        <li
            @if ( isset($selectedCategory) && $selectedCategory === $category->id )
                class="active"
            @endif
        >
            <a href="{{ route("category", $category->slug) }}">
                <img src="/{{ $category->icon }}" alt="{{ $category->name }}">
                <h6>{{ $category->name }}</h6>
            </a>
        </li>
    @endforeach


</ul>