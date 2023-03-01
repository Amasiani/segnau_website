@extends('template')
@section('title', 'Contact Form')
 <!-- Join us Page Starts -->
 <div class="join-us-main">
        <div class="j-form col-lg-8 col-md-9 col-sm-12">
          <h6>We are quick in replying mails. Try us out.. <span><i class="ri-emotion-happy-fill"></i></span><span><i class="ri-emotion-happy-fill"></i></span></h6>
          <form method="POST" action="{{route('sendContact')}}">
            @csrf
            @include('partials.form')
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
      <!-- End of Join -->

<!--@section('content')-->
@endsection