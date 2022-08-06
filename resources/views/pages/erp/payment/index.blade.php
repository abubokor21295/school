@extends('layout.erp.app')
@section('title','payment')


@section('page')
<div class="content-wrapper">
    <a class='btn btn-success' href="{{route('payments.create')}}">New Payment</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Payment List</h4>
                  <p class="card-description">
                    
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Payment Id</th>
                        <th>Student Id</th>
                        <th>Date</th>
                        <th>Remark</th>
                        <th>Amount</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @forelse ($payments as $payment)
                        <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->name}}</td>
                            <td>{{$payment->created_at}}</td>
                            <td>{{$payment->remark}}</td>
                            <td>{{$payment->amount}}</td>
                            <td style="width: 250px;">
                              <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('payments.edit',$payment->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('payments.show',$payment->id)}}">Show<a>
                                    <form action="{{route('payments.destroy',$payment->id)}}" method="post" >	
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

                        <tr><th>  {{$payments->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection

  

