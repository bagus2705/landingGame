@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</a></h2>
                    <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
                    <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post"class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0 "onclick="return confirm('Are You Sure?')"> Delete</a>
                        </button>
                    </form>
                    <div style="max-height:350px;overflow:hidden">
                     <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}"class="img-fluid mt-3">
                    </div>

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
            </div>
        </div>
    </div>
@endsection
