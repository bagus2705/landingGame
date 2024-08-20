@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                  
                <div class="row">
                    <div class="col-md-8">
                        <div style="max-height:350px;overflow:hidden">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" 
                                     alt="{{ $post->category->name }}" 
                                     class="img-fluid mt-3">
                            @else
                                <div class="text-center mt-3 mb-3">
                                    <span class="text-muted">No image available</span>
                                </div>
                            @endif
                        </div>

                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                    </div>
                    <div class="col-md-4">
                        <div class="author-category-box p-3 border rounded">
                            <p><strong>Author:</strong> 
                                <a href="/posts?author={{ $post->author->username }}"
                                   class="text-decoration-none">{{ $post->author->name }}</a>
                            </p>
                            <p><strong>Category:</strong> 
                                <a href="/posts?category={{ $post->category->slug }}"
                                   class="text-decoration-none">{{ $post->category->name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
