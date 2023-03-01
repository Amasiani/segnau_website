@extends('template')
@section('title', 'Post')
@section('content')
<div class="blog-main-cont">
        <div class="blog-body-cont">
          <div class="blog-body row">
            <div class="col-md-5 col-sm-12 posts">
              <div class="latest-posts"><h4>Latest Posts</h4></div>
              @forelse($posts as $post)
              <div class="card blog-card">
                  <img src="{{ asset('public/images/' . $post->img) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{Str::limit($post->detail, 20)}}...<a href="{%url 'blogdetail' post.slug%}">Read More</a></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">{{$post->created_at}}</small>
                  </div>
              </div>
              @empty
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Opps!! no post</strong> Contact admin
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endforelse
            </div>
            <div class="col-md-2 col-sm-12 category"></div>
            <div class="col-md-5 col-sm-12 category">
              <div class="category-heading"><h4>Posts</h4><hr></div>
                <div class="limk">
                  <ul>
                  @foreach($posts as $post)
                  <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title  }}</a></li>
                  @endforeach
                  </ul>
                </div>
                  <form method="post" action="{{ route('posts.store')  }}" enctype="multipart/form-data">
                    @csrf
                    @include('posts.partials.form')
                    <button class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
@endsection