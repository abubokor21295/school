@extends('layout.erp.app')
@section('title','Create subject')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/subjects')}}">Manage subjects</a>
<form action="{{route('subjects.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Subject Name","name"=>"txtName"]) !!}
	{!! input_field(["label"=>"Subject Code","name"=>"txtCode"]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection