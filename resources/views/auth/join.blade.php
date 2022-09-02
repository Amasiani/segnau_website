@extends('template')

@section('content')
<!-- Join us Page Starts -->
 <div class="join-us-main ">
    <div class="j-form col-lg-8 col-md-9 col-sm-12">
        <h6>We are so pleased you have decided to join the SEG family. <span><i class="ri-emotion-happy-fill"></i></span><span><i class="ri-emotion-happy-fill"></i></span></h6>
        <form method="post">
            @csrf
            @include('auth.partials.form')
            <h6 class="text-danger">Note: Renewers are  members who wants to renew their membership</h6>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
<!-- End of Join -->
@endsection