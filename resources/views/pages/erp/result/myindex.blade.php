@extends('layout.erp.app')
@section('title','result')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Results</h4>
                  <p class="card-description">
                    <a class='btn btn-success'>Create Result</a>
              
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($results as $result)
                            <tr>
                                <td>{{$result->class_id}}</td>
                                <td>{{$result->section_id}}</td>
                                <td>
                                <div class="d-flex btn-group" style="width: 60px;">

                                    <a class='btn btn-success' href="{{route('results.show',$result->class_id)}}">Click Here<a>
                                    </div>

                                </td>
                            </tr>
                        @empty
                        <tr><td>No records</td></tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection
