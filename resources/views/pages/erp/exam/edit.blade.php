@extends('layout.erp.app')
@section('title','exam')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/exams')}}">Manage Routin</a><table class='table'>
<form action="{{url('/exams')}}/{{$exam->id}}" method="post" enctype="multipart/form-data">
	@csrf
    @method("put")
	{!! select_field(["label"=>"Class","name"=>"cmbClassId","table"=>$clas,"value"=>$exam["class_id"]]) !!}

	{!! select_field(["label"=>"Section","name"=>"cmbSectionId","table"=>$sections,"value"=>$exam["section_id"]]) !!}

	{!! select_field(["label"=>"Room","name"=>"cmbRoomId","table"=>$rooms,"value"=>$exam["room_id"]]) !!}
	{!! select_field(["label"=>"Department","name"=>"cmbDepardmentId","table"=>$departments,"value"=>$exam["department_id"]]) !!}
  {!! select_field(["label"=>"Subject","name"=>"cmbSubjectId","table"=>$subjects,"value"=>$exam["subject_id"]]) !!}
  {!! select_field(["label"=>"Session","name"=>"cmbSessionId","table"=>$sessions,"value"=>$exam["session_id"]]) !!}
	{!! input_field(["label"=>"Exam Date","type"=>"date","name"=>"exam_date","value"=>$exam["exam_date"]]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}
</form>
</div>
@endsection