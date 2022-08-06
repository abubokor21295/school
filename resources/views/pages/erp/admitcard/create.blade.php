@extends('layout.erp.app')
@section('title','exam')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/exams')}}">Manage Routin</a><table class='table'>
<form action="{{route('exams.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Class","name"=>"cmbClassId","table"=>$clas]) !!}

	{!! select_field(["label"=>"Section","name"=>"cmbSectionId","table"=>$sections]) !!}

	{!! select_field(["label"=>"Room","name"=>"cmbRoomId","table"=>$rooms]) !!}
	{!! select_field(["label"=>"Department","name"=>"cmbDepardmentId","table"=>$departments]) !!}
  {!! select_field(["label"=>"Subject","name"=>"cmbSubjectId","table"=>$subjects]) !!}
  {!! select_field(["label"=>"Session","name"=>"cmbSessionId","table"=>$sessions]) !!}
	{!! input_field(["label"=>"Exam Date","type"=>"date","name"=>"exam_date"]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection