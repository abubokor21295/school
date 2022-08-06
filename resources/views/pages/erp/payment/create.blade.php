@extends('layout.erp.app')
@section('title','payment')


@section('page')
<div class="content-wrapper">
<div class="card" style="margin:0 auto;width:900px;padding-left:20px ;border: 2px solid gray;">
    <div class="card-body">
        <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <img src="{{asset('img/logo-4.png')}}" width="80" alt="">
                </div>
                <div class="col-xl-3 float-end">
                    <!-- <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i class="fas fa-print text-primary"></i> Print</a>
                    <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i class="far fa-file-pdf text-danger"></i> Export</a> -->
                </div>
                <hr>
            </div>

            <div class="container">
                <div class="col-md-12">
                    <div class="text-center">
                        <div style="font-size:20px;color:Teal;font-weight: bold;">MotherHood Public School</div>
                        <span style="color:Teal;font-weight: bold;"> Janatabug, Kadamtoli, Dhaka-1236</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <div style="font-size:20px;color:gray;font-weight: bold;margin-top:20px">Money Receipt</div>

                    </div>
                </div>
                <br>
                <br>

                <div class="row">
                    <div class="col-xl-7">
                        <div class="col-xl-6">
                            Student's Name: <br><br>
                            <select name="cmbStudent" class="form-control" id="cmbStudent">
                                <?php foreach ($students as $student) { ?>
                                    <option value="<?php echo $student['id'] ?>"><?php echo $student['name'] ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                        <div id="student-info">

                        </div>
                    </div>
                    <div class="col-xl-5">

                        <ul class="list-unstyled">
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">ID:</span>#123-456</li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Payment Date: </span><input type="date" name="paymentDate" id="paymentDate"></li>
                        </ul>
                    </div>
                </div>

                <div class="row my-2 mx-1 justify-content-center">
                    <table class="table table-striped table-borderless">
                        <thead class="text-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Service Description</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Sub-total</th>
                                <th><input type="button" id="clearAll" value="Clear" /></th>
                            </tr>
                            <tr>
                                <th colspan="2" id="txtService">

                                    <select name="cmbService" class="form-control" id="cmbService">
                                        <?php foreach ($services as $service) { ?>
                                            <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>
                                        <?php }; ?>
                                    </select>

                                </th>
                                <th><input type="text" id="txtFee" name="txtFee" width="40" /></th>
                                <th><input type="text" id="txtQty" name="txtQty" /></th>
                                <th><input type="text" hidden /></th>
                                <th><input type="button" id="btnAddToCart" value=" + " /></th>
                            </tr>
                        </thead>
                        <tbody id="items">


                        </tbody>

                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-9">

                        <span style="font-size: 22px;padding-left:10px">Total Amount (taka)</span>
                    </div>
                    <div class="col-xl-2">
                        <p class="text-black float-start"><span style="font-size: 22px;padding-left:10px" id="amount"></span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    Remark : <br>
                    <textarea name="remark" id="remark" cols="30" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-xl-10">
                        <p>Preserve the Student copy as your document</p>
                    </div>
                    <div class="col-xl-2">
                        <button type="button" id="btnProcesspayment" class="btn btn-primary text-capitalize" style="background-color:#60bdf3 ;">Pay Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function() {

        const cart = new Cart("payment");
        //Show calander in textbox
        //$("#txtOrderDate").datepicker({dateFormat: 'dd-mm-yy'});
        //$("#txtDueDate").datepicker({dateFormat: 'dd-mm-yy'});


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        //Save into database table
        $("#btnProcesspayment").on("click", function() {


            let student_id = $("#cmbStudent").val();
            let payment_date = $("#paymentDate").val();
            let remark = $("#remark").val();
            let amount = $("#amount").html();

            let services = cart.getCart();
            // console.log(products)

            $.ajax({
                url: "{{url('index.php/api/payments')}}",
                type: 'POST',
                data: {
                    "cmbStudent": student_id,
                    //"paymentDate": payment_date,
                    "amount": amount,
                    "remark": remark,

                    "services": services
                },
                success: function(res) {
                    console.log(res);
                    $("#items").html("");
                    cart.clearCart();
                    printCart();
                }
            });

        });



        //Show Student other information
        $("#cmbStudent").on("change", function() {
            let id = $(this).val();
            $.ajax({
                url: "{{url('index.php/api/students/show')}}",
                type: 'GET',
                data: {
                    "id": id
                },
                success: function(res) {
                    console.log(res);
                    $("#student-info").html(res.students.name + "<br>" + res.students.email + "<br>" + res.students.phone);
                }
            });


        }); //End Show student other information





        //Show Service other information
        $("#cmbService").on("change", function() {
            let id = $(this).val();
            $.ajax({
                url: "{{url('index.php/api/services/show')}}",
                type: 'GET',
                data: {
                    "id": id
                },
                success: function(res) {
                    console.log(res);
                    $("#txtFee").val(res.services.amount);
                    $("#txtQty").val(1);
                }
            });


        }); //End Show service other information

        //Add item to bill temporarily

        $("#btnAddToCart").on("click", function() {

            let service_id = $("#cmbService").val();
            let name = $("#cmbService option:selected").text();
            let qty = $("#txtQty").val();
            let fee = $("#txtFee").val();
            let sub_total = qty * fee;

            let item = {
                "item_id": service_id,
                "name": name,
                "qty": parseFloat(qty),
                "fee": fee,
                "sub_total": sub_total,
            };

            cart.save(item);

            printCart();

        });



        $("body").on("click", ".delete", function() {

            let id = $(this).data("id");
            cart.delItem(id)
            printCart();
        });

        $("#clearAll").on("click", function() {

            cart.clearCart();
            printCart();
        });


        //------------------Cart Functions----------//      

        function printCart() {
            let payments = cart.getCart();
            let sn = 1;
            let $bill = "";
            let amount = 0;
            if (payments != null) {
                payments.forEach(function(item, i) {
                    amount += item.sub_total;
                    let $html = "<tr>";
                    $html += "<td>";
                    $html += sn;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.name;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.fee;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.qty;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.sub_total;
                    $html += "</td>";
                    $html += "<td>";
                    $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
                    $html += "</td>";
                    $html += "</tr>";
                    $bill += $html;
                    sn++;
                });
            };
            $("#items").html($bill);

            $("#amount").html(amount);

        }
        printCart();
    });
</script>
<script src="{{asset('cart.js')}}"></script>


@endsection