@extends('layout.main')

@section('container')
    <div class="container mt-3">
        <h1 class="mb-3 text-center">{{ $title }}</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Search</h5>
                        <form action="/posts" method="GET" id="search-form">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="search" name="search"
                                       value="{{ request('search') }}" placeholder="Search...">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <form action="/posts" method="GET" id="filter-form">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <div class="border p-3 rounded">
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category"
                                                   value="{{ $category->slug }}" id="category{{ $category->id }}"
                                                   onchange="document.getElementById('filter-form').submit()"
                                                   {{ request('category') == $category->slug ? 'checked' : '' }}>
                                            <label class="form-check-label" for="category{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <input type="hidden" name="search" value="{{ request('search') }}">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-3 border p-4">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $post->title }}</h5>
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}"
                                                     alt="{{ $post->image ? $post->category->name : 'No image found' }}"
                                                     class="card-img-top img-fluid mb-3">
                                            @else
                                                <div class="text-center mb-3">
                                                    <span class="text-muted">No image available</span>
                                                </div>
                                            @endif
                                            <h7 class="mb-3">{{ $post->category->name }}</h7>
                                            <p class="card-text mt-3">{{ Str::limit(strip_tags($post->excerpt), 100) }}</p>
                                            <a href="/posts/{{ $post->slug }}"
                                               class="btn btn-primary text-decoration-none">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center fs-4">No posts found.</p>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        {{ $posts->appends(request()->except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
