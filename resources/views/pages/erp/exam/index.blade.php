@extends('layout.erp.app')
@section('title','exam')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title"> exam Schedule</h4>
                  <p class="card-description">
                    <a class='btn btn-success' href="{{route('exams.create')}}">Create exam</a>
              
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Exam Schedule</th>
                            <th>Section</th>
                            <th>Session</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($exams as $exam)
                            <tr>
                                <td>{{$exam->class}}</td>
                                <td>{{$exam->section}}</td>
                                <td>{{$exam->session}}</td>
                                <td>{{$exam->department}}</td>
                                <td>
                                <div class="d-flex btn-group" style="width: 60px;">
                                    <!-- <a class='btn btn-primary' href="{{route('exams.edit',$exam->id)}}">Edit<a> -->
                                    <a class='btn btn-success' href="{{route('exams.show',$exam->class_id)}}">Click Here<a>
                                    <!-- <form action="{{route('exams.destroy',$exam->id)}}" method="post" >	
                                        @csrf
                                        @method("DELETE")
                                        <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete"  value="Delete" />
                                    </form> -->
                                    </div>

                                </td>
                            </tr>
                        @empty
                        <tr><td>No records</td></tr>
                        @endforelse
                      </tbody>
                    </table>
                    <!-- {{print_r($exams->toJson(JSON_PRETTY_PRINT))}} -->
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection
