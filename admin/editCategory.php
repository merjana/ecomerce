<?php

$pageTitle = 'Categories';
include 'init.php';
		?>

<div class="container">

    <div class="col-sm-offset-2">
        <h1> Edit Category</h1>
    </div>
    <form class="form-horizontal" action="#" method="Post">

        <!-- start Name field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="name" value='Name of older category' class="form-control" placeholder="Categorie Name"/>
            </div>
        </div>
        <!-- start description field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="description" value="Old description" class="form-control" />
            </div>
        </div>
        <!-- start ordering field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Ordering</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="ordering" value="old ordering" class="form-control"/>
            </div>
        </div>
        <!-- start visibility field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Visible</label>
            <div class="col-sm-10 col-md-4">
                <div>
                    <input id ="vis-yes" type="radio" name="visib" value="0" checked />
                    <label for="vis-yes">Yes</label>
                </div>
                <div>
                    <input id ="vis-no" type="radio" name="visib" value="1"/>
                    <label for="vis-no">No</label>
                </div>
            </div>
        </div>
        <!-- start Commenting field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Allow Commenting</label>
            <div class="col-sm-10 col-md-4">
                <div>
                    <input id ="com-yes" type="radio" name="commenting" value="0" checked />
                    <label for="com-yes">Yes</label>
                </div>
                <div>
                    <input id ="com-no" type="radio" name="commenting" value="1"/>
                    <label for="com-no">No</label>
                </div>
            </div>
        </div>
        <!-- start allowing adivertising field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Allow Advertising</label>
            <div class="col-sm-10 col-md-4">
                <div>
                    <input id ="add-yes" type="radio" name="advertising" value="0" checked />
                    <label for="add-yes">Yes</label>
                </div>
                <div>
                    <input id ="add-no" type="radio" name="advertising" value="1"/>
                    <label for="add-no">No</label>
                </div>
            </div>
        </div>

        <!-- start Submit button field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Update" class="btn btn-primary btn-lg" />
            </div>
        </div>

    </form>

</div>

</body>
</html>