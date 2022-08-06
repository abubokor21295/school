@extends('layout.erp.app')
@section('title','teachers')


@section('page')
<div class="content-wrapper">
    <a class='btn btn-success' href="{{route('clases.create')}}">Add New Class</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Class List</h4>
                  <p class="card-description">
                    
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Class</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @forelse ($clases as $clas)
                        <tr>
                            <td>{{$clas->name}}</td>
                            <td style="width: 250px;">
                              <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('clases.edit',$clas->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('clases.show',$clas->id)}}">Show<a>
                                    <form action="{{route('clases.destroy',$clas->id)}}" method="post" >	
                                        @csrf
                                        @method("DELETE")
                                        <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete"  value="Delete" />
                                    </form>
                              </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td>No records</td></tr>
                        @endforelse

                        <tr><th>  {{$clases->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection

  

