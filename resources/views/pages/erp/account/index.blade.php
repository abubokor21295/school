@extends('layout.erp.app')
@section('title','account')


@section('page')
<div class="content-wrapper">
    <a class='btn btn-info' href="{{route('accounts.create')}}">Create a bill</a>
    <a class='btn btn-success' href="{{route('payments.create')}}">New Payment</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">account List</h4>
                  <p class="card-description">
                  Enter Admission ID <br>
                    <input type="text" id="searchbox">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Admission Id</th>
                        <th>Student Id</th>                        
                        <th>Payable Amount</th>                        
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody  class="search">
                   
                      @forelse ($accounts as $account)
                        <tr>
                            <td>{{$account->admission_id}}</td>
                            <td>{{$account->name}}</td>
                            <td>{{$account->amount}}</td>
                            <td style="width: 250px;">
                              <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('accounts.edit',$account->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('accounts.show',$account->admission_id)}}">Show<a>
                                    <form action="{{route('accounts.destroy',$account->id)}}" method="post" >	
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

                        <tr><th>  </th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
<script>
  $(function(){
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $("#searchbox").on("input",function(){
      let searchbox=$(this).val();
      $.ajax({
        url:"{{url('index.php/api/myaccount')}}",
        type:"post",
        data:{"student":searchbox},
        success:function(res){
          //alert(res)
          let data = JSON.parse(res)
          console.log( data.accounts);
          
          data.accounts.forEach(element => {
           // console.log(element.name);
            var html=`
            <tr>
                            <td>${element.id}</td>
                            <td>${element.name}</td>
                            <td>${element.amount}</td>
                            <td style="width: 250px;">
                              <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('accounts.edit',$account->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('accounts.show',$account->admission_id)}}">Show<a>
                                    <form action="{{route('accounts.destroy',$account->id)}}" method="post" >	
                                        @csrf
                                        @method("DELETE")
                                        <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete"  value="Delete" />
                                    </form>
                              </div>
                            </td>
              </tr>
          
            `
            $(".search").html(html);
          });
          // alert(data.accounts.id)
          // $("#myId").html(data.accounts.id);\
          
           console.log( data.accounts);

          
        }
      })
      
    })
   

  })
</script>
@endsection

  

