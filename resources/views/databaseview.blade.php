@extends('template')
@section('title', 'Database')
@section('content')
	@foreach($members as $member)
	<div class="databaseview">
		<div class="card shadow">
		  <h5 class="card-header">Name: {{ member->first_name }} {{ member->last_name }}</h5>
		  <div class="card-body">
		    <p class="card-text">Emai: {{ member->email_address }}</p>
		    <p class="card-text">School: {{ member->affilate_uni }}</p>
		    <p class="card-text">SEG ID: {{ member->seg_id }}</p>
		    <p class="card-text">DOB: {{ member->Date_of_Birth }}</p>
		  </div>
		</div>
	</div>
	@endforeach
@endsection