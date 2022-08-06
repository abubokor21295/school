@extends('layout.erp.app')
@section('title','routin')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/routins')}}">Manage Routin</a><table class='table'>
<form action="{{route('routins.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Class","name"=>"cmbClassId","table"=>$clas]) !!}

	{!! select_field(["label"=>"Section","name"=>"cmbSectionId","table"=>$sections]) !!}

	{!! select_field(["label"=>"Room","name"=>"cmbRoomId","table"=>$rooms]) !!}
	{!! select_field(["label"=>"Department","name"=>"cmbDepardmentId","table"=>$departments]) !!}
  
	{!! select_field(["label"=>"Weekday","name"=>"cmbDayId","table"=>$weekdays]) !!}
  {!! select_field(["label"=>"Subject","name"=>"cmbSubjectId","table"=>$subjects]) !!}
  {!! select_field(["label"=>"Teacher","name"=>"cmbTeacherId","table"=>$teachers]) !!}
	{!! input_field(["label"=>"Start Time","name"=>"txtStartTime"]) !!}
  {!! input_field(["label"=>"End Time","name"=>"txtEndTime"]) !!}	
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection