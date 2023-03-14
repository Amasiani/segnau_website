@extends('template')
@section('title', 'Blog Detail')
@section('content')
<div class="blog-main-cont">
    <div class="blog-body-cont">
        <div class="latest-posts"><h3 class="text-center">{{Str::upper($post->title)}}</h3><hr></div>
        <div class="blog-body row">
            <div class="col-md-6 col-sm-12 posts">
              <div class="card blog-card">
                  <img src="{{asset('images/'. $post->img)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">{{$post->created_at}}</small>
                    <small class="text-muted">{{ $post->member->firstname }}</small>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 category">
              <div class="category-heading"><h4>Category</h4><hr></div>
            </div>
        </div>
    </div>
</div>
@endsection