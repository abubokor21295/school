@extends('layout.erp.app')
@section('title','attendeces')


@section('page')

<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Student's Table</h4>
                  <p class="card-description">
                  <a class='btn btn-info' href="{{route('attendences.create')}}">New Attendeces Here</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date</th>
                            <th>Photo</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($attendences as $attendence)
                            <tr>
                              <td>{{$attendence->date}}</td>
                                <td><img src="{{asset('img/admission')}}/{{$attendence->photo}}" alt="" width="100"></td>
                                <td>{{$attendence->admission_id}}</td>
                                <td>{{$attendence->name}}</td>
                                <td>{{$attendence->classNAME}}</td>
                                <td>{{$attendence->roll}}</td>

                                <td>
                                

                                </td>
                            </tr>
                        @empty
                        <tr><td>No records</td></tr>
                        @endforelse

                        <tr><th>  {{$attendences->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection