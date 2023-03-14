@extends('template')
@section('title', 'Database')
@section('content')
	@foreach($members as $member)
	<div class="databaseview">
		<div class="card shadow">
		  <h5 class="card-header">Name: {{ $member->firstname }} {{ $member->lastname }}</h5>
		  <div class="card-body">
		    <p class="card-text">Email: {{ $member->email }}</p>
		    <p class="card-text">School: {{ $member->affilate }}</p>
		    <p class="card-text">SEG ID: {{ $member->segid }}</p>
		    <p class="card-text">DOB: {{ $member->DOB }}</p>
		  </div>
		</div>
	</div>
	@endforeach
@endsection