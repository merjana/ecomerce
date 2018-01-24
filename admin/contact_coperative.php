<?php
$pageTitle = 'add user';
include 'init.php';
?>

<div class="container">

    <div class="contact_coperatve_page">


            <h1 class="text-center"> Contact Coperative</h1>

        <form class="form-horizontal" action="?do=Insert" method="Post">

            <!-- start subject field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label">Subject</label>
                <div class="col-sm-9 col-sm-10">
                    <input type="text" name="username" class="form-control" placeholder="Subject" autocomplete="off" required="required"/>
                </div>
            </div>


            <!-- start date field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label">Date</label>
                <div class="col-sm-9">
                    <input type="date" name="date" placeholder="Full Name"  class="form-control" required="required"/>
                </div>
            </div>

            <!-- start list products -->
            <div class="control-group form-group-lg row">
                <label class="col-sm-3 control-label ">Products</label>
                <div class="col-sm-5">
                    <select class="form-control" name="category" id="">
                        <option value="" selected disabled class="active">Porducts</option>
                        <option value="">product 1</option>
                        <option value="">product 2</option>
                        <option value="">product 3</option>
                        <option value="">product 4</option>

                    </select>
                </div>
                <div class="col-sm-3">
                    <input type="number" name="number" placeholder="quntity"  class="form-control" required="required"/>
                </div>
                <div class="col-sm-1">
                    <button class="btn btn-success btn-lg" id="koka"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>


            </div>


            <div id="add_another_product" >

            </div>

            <!-- start Submit button field -->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-3 col-sm-10">
                    <input type="submit" value="send" class="btn btn-primary btn-lg" />
                </div>
            </div>

        </form>
    </div>

</div>

<script>
    $("#koka").click(function (event){
        event.preventDefault();
        //alert("kora")
        $("#add_another_product").append('<div class=" row control-group form-group-lg">\n'+
            '<label class="col-sm-3 control-label "></label>\n' +
            '<div class="col-sm-5">\n'+
            '            <select class="form-control" name="category" id="">\n' +
            '                <option value="" selected disabled class="active">Porducts</option>\n' +
            '                <option value="">product 1</option>\n' +
            '                <option value="">product 2</option>\n' +
            '                <option value="">product 3</option>\n' +
            '                <option value="">product 4</option>\n' +
            '            </select>\n' +
            '</div>\n' +
            '<div class="col-sm-3"><input type="number" name="number" placeholder="quntity"  class="form-control" required="required"/></div> \n '+
            '<div class="col-sm-1"></div>'+
            '</div>')

    })
</script>