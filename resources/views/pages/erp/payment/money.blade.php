@extends('layout.erp.app')
@section('title','payment')


@section('page')

<div class="content-wrapper" style="display:relative;margin:0 auto;width:800px;padding-left:20px ;border: 2px solid gray;">
    <div class="container" style="display:flex;border:2px solid red;">
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <img src="{{asset('img/logo-4.png')}}" width="80" alt="" style="padding-left:0">

                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 text-center">
                        <div style="font-size:20px;color:Teal;font-weight: bold;">MotherHood Public School</div>
                        <span style="color:Teal;font-weight: bold;"> Janatabug, Kadamtoli, Dhaka-1236</span>

                    </div>
                </div>
                            <br>
                            <br>
                <div class="row">
                    <div class="col-12 text-center text-primary">
                        Money Receipt
                    </div>
                </div>
                            <br>
                            <br>
                            <br>
                            <br>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                        Student's Name: 
                        <select name="cmbStudent" class="form-control" id="cmbStudent">
                            <?php foreach ($students as $student) { ?>
                                <option value="<?php echo $student['id'] ?>"><?php echo $student['name'] ?></option>
                            <?php }; ?>
                        </select>
                        
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 text-left">

                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 text-left">
                        Date: <input type="date" name="created_at">
                        <br />Receipt No:
                    </div>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th></th>
                                <th class="text-center">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-1" style="text-align: center"> 2 </td>
                                <td class="col-md-9">
                                    <em>Service Name:                                     
                                        <select name="cmbService" class="form-control" id="cmbService">
                                            <?php foreach ($services as $service) { ?>
                                                <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>
                                            <?php }; ?>
                                        </select>
                                    </em>
                                </td>
                                <td></td>
                                <td class="col-md-1 text-center"><input type="text" id="price" name="price"></td>

                            </tr>
                            <tr>

                                <td>   </td>
                                <td>   </td>
                                <td class="text-right">
                                    <p>
                                        <strong>Total: </strong>
                                    </p>
                                    <p>
                                        <strong>Remark: </strong>
                                    </p>
                                    
                                </td>
                                <td class="text-center">
                                    <p id="amount">
                                        
                                    </p>
                                                <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right">
                                    <h4><strong>Total: </strong></h4>
                                </td>
                                <td class="text-center text-danger">
                                    <h4><strong>$31.53</strong></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success btn-lg btn-block">
                        Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                    </button></td>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {

        const cart = new Cart("order");
       
        //Save into database table
        $("#btnProcessOrder").on("click", function() {

            let customer_id = $("#cmbCustomer").val();
            let order_date = $("#txtOrderDate").val();
            let due_date = $("#txtDueDate").val();
            let fee = $("#fee").val();
            let paid = $("#paid").val();

            let products = cart.getCart();
            // console.log(products)

            $.ajax({
                url: 'save',
                type: 'POST',
                data: {
                    "cmbCustomer": customer_id,
                    "txtOrderDate": order_date,
                    "txtDueDate": due_date,
                    "fee": fee,
                    "paid": paid,

                    "txtProducts": products
                },
                success: function(res) {
                    console.log(res);

                    $("#items").html("");
                    cart.clearCart();
                    printCart();
                }
            });

        });



        //Show customer other information
        $("#cmbStudent").on("change", function() {

            $.ajax({
                url: 'customerAxaj',
                type: 'POST',
                data: {
                    "cmbCustomer": $(this).val()
                },
                success: function(res) {

                    $("#customer-info").html(res.customer.name + "<br>" + res.customer.email + "<br>" + res.customer.address);
                }
            });


        }); //End Show customer other information

        $("#cmbPost").on("change", function() {
            // alert($(this).val())
            $.ajax({
                url: 'postApi',
                type: 'POST',
                data: {
                    "cmbPost": $(this).val()
                },
                success: function(res) {
                    //console.log(res);
                }
            });

        }); //  

        $("#cmbJobs").on("change", function() {
            // alert($(this).val())
            $.ajax({
                url: 'JobApi',
                type: 'POST',
                data: {
                    "cmbJobs": $(this).val()
                },
                success: function(res) {
                    //console.log(res);

                }
            });

        }); //  



        //Add item to bill temporarily

        $("#btnAddToCart").on("click", function() {

            let post_id = $("#cmbPost").val();
            let name = $("#cmbPost option:selected").text();
            let qty = $("#txtQty").val();
            let salary_range = $("#salary_range").val();
            let last_education = $("#last_education").val();
            let skills = $("#skills").val();
            let experience = $("#experience").val();
            let job_type_id = $("#cmbJobs").val();
            let job_type = $("#cmbJobs option:selected").text();

            let item = {
                "item_id": post_id,
                "name": name,
                "qty": parseFloat(qty),
                "salary_range": salary_range,
                "last_education": last_education,
                "skills": skills,
                'experience': experience,
                'job_type_id': job_type_id,
                "job_type": job_type
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
            let orders = cart.getCart();
            let sn = 1;
            let $bill = "";
            if (orders != null) {
                orders.forEach(function(item, i) {

                    let $html = "<tr>";
                    $html += "<td>";
                    $html += sn;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.name;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.job_type;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.qty;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.salary_range;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.last_education;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.skills;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.experience;
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

        }
        printCart();
    });
</script>
<script src="{{asset('cart.js')}}"></script>


@endsection