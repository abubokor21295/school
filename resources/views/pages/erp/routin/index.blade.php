@extends('layout.erp.app')
@section('title','routin')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Class Routin</h4>
                  <p class="card-description">
                    <!-- <a class='btn btn-success' href="{{route('routins.create')}}">Create Routin</a> -->
              
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Class Name</th>
                            <!-- <th>Subjects</th>
                            <th>Section</th>
                            <th>Teachers</th>
                            <th>Room</th>                            
                            <th>Day</th>
                            <th>Start at</th>
                            <th>Finish at</th>
                            <th>Department</th> -->
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($routins as $routin)
                            <tr>
                                <td>{{$routin->class}}</td>
                                <!-- <td>{{$routin->subject}}</td>
                                <td>{{$routin->section}}</td>
                                <td>{{$routin->teacher}}</td>
                                <td>{{$routin->room}}</td>
                                <td>{{$routin->day}}</td>
                                <td>{{$routin->start_time}} am</td>
                                <td>{{$routin->end_time}} am</td>
                                <td>{{$routin->department}}</td> -->
                                <td>
                                <div class="d-flex btn-group" style="width: 60px;">
                                    <!-- <a class='btn btn-primary' href="{{route('routins.edit',$routin->id)}}">Edit<a> -->
                                    <a class='btn btn-success' href="{{route('routins.show',$routin->class_id)}}">Click Here<a>
                                    <!-- <form action="{{route('routins.destroy',$routin->id)}}" method="post" >	
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
                    <!-- {{print_r($routins->toJson(JSON_PRETTY_PRINT))}} -->
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection
