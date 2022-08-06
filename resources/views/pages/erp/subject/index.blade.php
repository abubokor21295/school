@extends('layout.erp.app')
@section('title','subjects')


@section('page')
<div class="content-wrapper">


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Subjects table</h4>
                <p class="card-description">
                    <a class='btn btn-success' href="{{route('subjects.create')}}">Create</a>
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Subject Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subjects as $subject)
                            <tr>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->sub_code}}</td>
                                <td style="width: 200px;">
                                    <div class="d-flex btn-group">
                                        <a class='btn btn-info' href="{{route('subjects.edit',$subject->id)}}">Edit<a>
                                        <a class='btn btn-secondary' href="{{route('subjects.show',$subject->id)}}">Details<a>
                                                <form action="{{route('subjects.destroy',$subject->id)}}" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" value="Delete" />
                                                </form>
                                    </div>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No records</td>
                            </tr>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">{{$subjects->links()}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection