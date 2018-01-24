<?php
include 'init.php';
?>

<div class="container">

    <div class="col-sm-offset-2">
        <h1> Add Product</h1>
    </div>
    <form class="form-horizontal" action="?do=Update" method="Post">

        <!-- start Name field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="name" class="form-control" value="" required="required"/>
            </div>
        </div>
        <!-- start description field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="description" class="form-control" value="" required="required"/>
            </div>
        </div>
        <!-- start price field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="price" value="" class="form-control" required="required"/>
            </div>
        </div>
        <!-- start Country field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Coperative </label>
            <div class="col-sm-10 col-md-4">
                <select class="form-control" name="" id="">
                    <option value="coperative1">coperative 1</option>
                    <option value="coperative2">coperative 2</option>
                    <option value="coperative3">coperative 3</option>
                    <option value="coperative4">coperative 4</option>
                </select>
            </div>
        </div>

        <!-- start User field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10 col-md-4">
                <input type="number" name="qantity" value="" class="form-control"/>
            </div>
        </div>
        <!-- start Category field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10 col-md-4">
                <select class="form-control" name="" id="">
                    <option value="Category1">Category 1</option>
                    <option value="Category2">Category 2</option>
                    <option value="Category3">Category 3</option>
                    <option value="Category4">Category1 4</option>
                </select>
            </div>
        </div>
        <!-- start Submit button field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="add" class="btn btn-primary btn-md" />
            </div>
        </div>

    </form>

</div>