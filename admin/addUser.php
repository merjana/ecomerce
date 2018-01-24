<?php
$pageTitle = 'add user';
include 'init.php';
?>

<div class="container">

    <div class="col-sm-offset-2">
        <h1> Add A Member</h1>
    </div>
    <form class="form-horizontal" action="?do=Insert" method="Post">

        <!-- start userName field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="username" class="form-control" placeholder="username to login" autocomplete="off" required="required"/>
            </div>
        </div>
        <!-- start Password field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10 col-md-4">
                <input type="password" name="password" class="password form-control" autocomplete="new-password" placeholder=" Password" required="required"/>
                <i class="show-pass fa fa-eye fa-2x"></i>
            </div>
        </div>
        <!-- start Email field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10 col-md-4">
                <input type="email" name="email" placeholder="Email" class="form-control" required="required"/>
            </div>
        </div>
        <!-- start Fullname field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Full name</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="Fullname" placeholder="Full Name"  class="form-control" required="required"/>
            </div>
        </div>
        <!-- start telephone field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Telephone</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="Fullname" placeholder="phone"  class="form-control" required="required"/>
            </div>
        </div>
        <!-- start adress field -->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Adress</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="Fullname" placeholder="Adress"  class="form-control" required="required"/>
            </div>
        </div>
        <!-- start Submit button field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Add Member" class="btn btn-primary btn-lg" />
            </div>
        </div>

    </form>

</div>