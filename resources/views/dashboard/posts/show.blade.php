@extends('dashboard.layouts.main')

@section('container')

<div class="container">
<div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger "onclick="return confirm('Are yousure?')"><span data-feather="x-circle"></span>Delete</button>

                    </form>


                        <!-- <p>By. <a href="posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> -->

                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">


                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                        
                    
                    

                
            </div>
        </div>
    </div>

@endsection