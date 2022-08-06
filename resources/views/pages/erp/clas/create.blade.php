@extends('layout.erp.app')
@section('title','Create Class')


@section('page')
<div class="content-wrapper">
   
	<a class='btn btn-success' href="{{url('/clases')}}">Manage teachers</a><table class='table'>
	<form action="{{route('clases.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		{!! input_field(["label"=>"Name","name"=>"txtName"]) !!}
		{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
	</form>
</div>
@endsection